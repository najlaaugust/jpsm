<?php

function ordinal_suffix($num){
	$num = $num % 100; // protect against large numbers
	if($num < 11 || $num > 13){
		switch($num % 10){
			case 1: return 'st';
			case 2: return 'nd';
			case 3: return 'rd';
		}
	}
	return 'th';
}

function getDataFromWebService($url) {	
	//$proxy = '141.211.153.22:3128';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	//curl_setopt($ch, CURLOPT_PROXY, $proxy);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Disable SSL verification
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	$info = json_decode(curl_exec($ch));
	curl_close($ch);
	return $info;
}

function sendDataToWebService($url, $myvars) {	
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
	
	$response = curl_exec( $ch );	
	return $response;
}


$app->post('/payflow', function ($request, $response, $args) {	
		
	//get reg info	
	$data = $request->getParsedBody();
	$RegID = filter_var($data['RegID'], FILTER_SANITIZE_STRING);
	
	$url = "http://localhost:8080/reginfo_forpayment/$RegID";
	$regInfo = getDataFromWebService($url);
			
	//<!--- USER2 variable is used for paypal user to return --->
	//<input type="hidden"	name="USER2" 	value="index.cfm" />
	
	//Revenue short code --->
	$COMMENT1 = $regInfo->ShortCode;
	
	$sName = sprintf('%1$s %2$s %3$s', $regInfo->fname, $regInfo->mname, $regInfo->lname); 
	$sCourseDescr = sprintf('JPSM Short Course / Registration #: %1$s / Registrant: %2$s', $regInfo->confirm_num, $sName);
	
	//Additional info to be display in billing report i.e: name, descr, etc.	 --->
	$COMMENT2 = $sCourseDescr;
	$CUSTID = $regInfo->confirm_num;
	$AMOUNT = $regInfo->PayAmount;
	
	$DESCRIPTION = $sCourseDescr;

	//amount stuff
	$PayEarlyDiscount = "N";
	//if ( $regInfo->EarlyDiscount == "1" and ((time()-(60*60*24)) < strtotime($regInfo->EarlyDiscountDate)) )	
	if ( $regInfo->EarlyDiscount == "1" and date("Y-m-d H:i:s") < $regInfo->EarlyDiscountDate->date )
		$PayEarlyDiscount = "Y";
	
	//Sponsor/Affiliate
	if ( $regInfo->student_typ == "SP") {
		$AMOUNT = $regInfo->Cost_Affiliate;
		if ($PayEarlyDiscount == "Y")
			$AMOUNT = $regInfo->Cost_Affiliate_EarlyDiscount;
	}
	//Participant
	else if ( $regInfo->student_typ == "P") {
		$AMOUNT = $regInfo->Cost_Full;
		if ($PayEarlyDiscount == "Y")
			$AMOUNT = $regInfo->Cost_Full_EarlyDiscount;
	}	
	//Student
	else if ( $regInfo->student_typ == "FT") {
		$AMOUNT = $regInfo->Cost_Student;
		if ($PayEarlyDiscount == "Y")
			$AMOUNT = $regInfo->Cost_Student_EarlyDiscount;
	}
	
	//Update reginfo fields: PayEarlyDiscount
	$url = 'http://localhost:8080/payearly/update';
	$myvars = 'PayEarlyDiscount=' . $PayEarlyDiscount . '&confirm_num=' . $regInfo->confirm_num;
	
	sendDataToWebService($url, $myvars);
	
	
	return $this->view->render($response, 'payflow.twig', 
				array(
				'COMMENT1' => $COMMENT1,
				'COMMENT2' => $COMMENT2,
				'CUSTID' => $CUSTID,
				'AMOUNT' => $AMOUNT,
				'DESCRIPTION' => $DESCRIPTION
				)
			);
});



$app->get('/payment', function ($request, $response, $args) {
	//Always get app info
	//$url = "http://localhost:8080/currentappinfo";
	//$appInfo = getDataFromWebService($url);
	
	//$currentYear = (int) $appInfo->current_app_year;
	//$currentYear = $currentYear - 1947;	
	//$currentYearDisplay = $currentYear . ordinal_suffix($currentYear);

	//return $this->view->render($response, 'index.twig', array( 
		//				'current_app_year' => $appInfo->current_app_year, 
			//			'current_app_dates' => $appInfo->current_app_dates,
				//		'currentYearDisplay' => $currentYearDisplay));
	
	return $this->view->render($response, 'index.twig', array());	
});


$app->post('/search', function ($request, $response, $args) {
	$this->logger->addInfo("Searching");
	$data = $request->getParsedBody();
	
	$ConfirmNum = filter_var($data['ConfirmNum'], FILTER_SANITIZE_STRING);
	$LastName = filter_var($data['LastName'], FILTER_SANITIZE_STRING);

	//get user info
	$url = "http://localhost:8080/isvalid/$ConfirmNum/$LastName";
	$userInfo = getDataFromWebService($url);	
	
	if (isset($userInfo->notfound)) {
		return $this->view->render($response, 'payment.twig', array( 
							'error' => 'No registration record found for registration <b>' . $ConfirmNum . '</b> and last name <b>' . $LastName . '</b>. Please click on the back button to re-enter the information.'
		));
	}

	return $this->view->render($response, 'payment.twig', array('userInfo' => $userInfo));
});

$app->post('/result', function ($request, $response, $args) {
	$this->logger->addInfo("confirm page");
	$data = $request->getParsedBody();
	
	$ConfirmNum = filter_var($data['ConfirmNum'], FILTER_SANITIZE_STRING);
	
	//get reg info
	$url = "http://localhost:8080/reginfo/$ConfirmNum";
	$regInfo = getDataFromWebService($url);
	
	//get course info
	$url = "http://localhost:8080/courseinfo/$regInfo->CourseID";
	$courseInfo = getDataFromWebService($url);
	
	//get contact info
	$url = "http://localhost:8080/contactinfo/$courseInfo->stateid";
	$contactInfo = getDataFromWebService($url);
	
	
	if (isset($regInfo->notfound)) {
		return $this->view->render($response, 'confirm.twig', array(
				'error' => 'No registration record found for registration <b>' . $ConfirmNum . '</b> and last name <b>' . $LastName . '</b>. Please click on the back button to re-enter the information.'
		));
	}
	
	return $this->view->render($response, 'confirm.twig', array('regInfo' => $regInfo, 'courseInfo' => $courseInfo, 'contactInfo' => $contactInfo, 'PayMethod' => 'CH'));
});
	
$app->post('/register_process', function ($request, $response, $args) {
	$this->logger->addInfo("processing registration..");
	
	$data = $request->getParsedBody();
	$theCourseId=filter_var($data['CourseID'], FILTER_SANITIZE_STRING);
	$thePayMethod=filter_var($data['paymethod'], FILTER_SANITIZE_STRING);
	
	$mydata[] = $theCourseId;
	$mydata[] = filter_var($data['CourseName'], FILTER_SANITIZE_STRING);
	
	$mydata[] = filter_var($data['Prefix'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['fname'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['mname'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['lname'], FILTER_SANITIZE_STRING);
	
	$mydata[] = filter_var($data['agency'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['dept_room'], FILTER_SANITIZE_STRING);
	
	$mydata[] = filter_var($data['street1'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['street2'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['city'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['state'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['zip'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['phone'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['ext'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['fax'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['email'], FILTER_SANITIZE_STRING);
	
	$mydata[] = filter_var($data['payamount'], FILTER_SANITIZE_STRING);
	$mydata[] = $thePayMethod;
	
	$mydata[] = filter_var($data['Comments'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['PresPosLen'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['PresTitle'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['PresEmpLen'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['PrevPos'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['EduLevel'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['EduLevelOther'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['EduField'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['EduEcon'], FILTER_SANITIZE_STRING);
	
	$mydata[] = filter_var($data['WebAccess1'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['WebAccess2'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['WebAccess3'], FILTER_SANITIZE_STRING);
	
	$mydata[] = filter_var($data['studenttype'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['affiliation'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['country'], FILTER_SANITIZE_STRING);
	$mydata[] = filter_var($data['province'], FILTER_SANITIZE_STRING);
			
	//update registation with payment info from PayFlow, once payment has been posted --->

	$url = 'http://localhost:8080/registration/new';
	$myvars = 'CourseID=' . $mydata[0] . '&CourseName=' . $mydata[1] . '&Prefix=' . $mydata[2] . '&fname=' . $mydata[3] . '&mname=' . $mydata[4] . 
		'&lname=' . $mydata[5] . '&agency=' . $mydata[6] . '&dept_room=' . $mydata[7] . '&street1=' . $mydata[8] .
		'&street2=' . $mydata[9] . '&city=' . $mydata[10] . '&state=' . $mydata[11] . '&zip=' . $mydata[12] . '&phone=' . $mydata[13] .
		'&ext=' . $mydata[14] . '&fax=' . $mydata[15] . '&email=' . $mydata[16] . '&payamount=' . $mydata[17] . '&paymethod=' . $mydata[18] .		
		'&Comments=' . $mydata[19] . '&PresPosLen=' . $mydata[20] . '&PresTitle=' . $mydata[21] . '&PresEmpLen=' . $mydata[22] . '&PrevPos=' . $mydata[23] .
		'&EduLevel=' . $mydata[24] . '&EduLevelOther=' . $mydata[25] . '&EduField=' . $mydata[26] . '&EduEcon=' . $mydata[27] . '&WebAccess1=' . $mydata[28] .
		'&WebAccess2=' . $mydata[29] . '&WebAccess3=' . $mydata[30] . '&studenttype=' . $mydata[31] . '&affiliation=' . $mydata[32] . '&country=' . $mydata[33] . '&province=' . $mydata[34];

	$newid = sendDataToWebService($url, $myvars);
	
	$this->logger->addInfo("registered successfully, with confirm num-" . $newid);
	
	//get reg info
	$url = "http://localhost:8080/reginfo_web/$newid";
	$regInfo = getDataFromWebService($url);
	
	//get course info
	$url = "http://localhost:8080/courseinfo/$regInfo->CourseID";
	$courseInfo = getDataFromWebService($url);
	
	//get contact info
	$url = "http://localhost:8080/contactinfo/$courseInfo->stateid";
	$contactInfo = getDataFromWebService($url);
	
	
/*	
	 <!--- Send JPSM a confirmation email --->
	 <cfset FORM.ConfirmNum = "#regInfo.confirm_num#">
	 <cfset URL.RegType = "">
	 <cfinclude template="register_confirm_email.cfm">
*/	
	return $this->view->render($response, 'confirm.twig', array('regInfo' => $regInfo, 'courseInfo' => $courseInfo, 'contactInfo' => $contactInfo, 'PayMethod' => $thePayMethod));
	/*
	 <!--- Automatically post the page to payflow_process.cfm page --->
	 <html xmlns="http://www.w3.org/1999/xhtml">
	 <body>
	 <form name="myForm" method="POST" action="register_confirm.cfm">
	 <cfoutput>
	 <input type="hidden" name="RegID" value="#iRegID#">
	 <input type="hidden" name="ConfirmNum" value="#regInfo.confirm_num#">
	 <input type="hidden" name="PayMethod" value="#FORM.payMethod#">
	 </cfoutput>
	
	 <script language="javascript">
	 document.myForm.submit();
	 </script>
	 </form>
	
	 </body>
	 </html>
	 */
	
});
	

$app->get('/register/{CourseId}', function ($request, $response, $args) {
	$CourseId = $args['CourseId'];
	
    //get course info
	$url = "http://localhost:8080/courseinfo_forregister/$CourseId";
	$courseInfo = getDataFromWebService($url);

	//get contact info
	$url = "http://localhost:8080/contactinfo/$courseInfo->stateid";
	$contactInfo = getDataFromWebService($url);

	//get prefixes
	$url = "http://localhost:8080/prefixes";
	$prefixes = getDataFromWebService($url);

	$url = "http://localhost:8080/states";
	$states = getDataFromWebService($url);
	
	$url = "http://localhost:8080/countries";
	$countries = getDataFromWebService($url);
	
	$url = "http://localhost:8080/studenttypes";
	$studenttypes = getDataFromWebService($url);
	
	$url = "http://localhost:8080/affiliates";
	$affiliates = getDataFromWebService($url);
	
	return $this->view->render($response, 'register.twig', 
			array(
					'sCourseID' => $CourseId,
					'sRegType' => 'single',
					'bDisplayPersonInfo' => true, 
					'bDisplayExp' => true,
					'bDisplayGeneral' => true,
					'courseInfo' => $courseInfo, 
					'contactInfo' => $contactInfo, 
					'prefixes' => $prefixes,
					'states' => $states,
					'countries' => $countries,
					'studenttypes' => $studenttypes,
					'affiliates' => $affiliates
				)
			);
});
	
