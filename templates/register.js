function VerifyForm()
{
	
	var f = document.forms['myForm'];
	var bChecked;
	var bReturn = true;
	var strErrorMsg = "Please provide/correct the following information:\n\n";

	
	// If single or block, validate person info part of form.
	// Also validate payment amount radio buttons.
	if (f.RegType.value == "single") {

		// the following are required fields
		if (f.fname.value == "") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "First Name\n";
		}
		
		if (f.lname.value == "") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "Last Name\n";
		}	
		
		if (f.street1.value == "") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "Street Address\n";		
		}	
		
		if (f.city.value == "") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "City\n";			
		}
		
		if (f.country.value == "US") {
			if (f.state.value == "") {
				bReturn = false;
				strErrorMsg = strErrorMsg + "State/Province\n";				
			} 
		} 
		
		if (f.zip.value == "") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "Postal Code\n";			
		}
		
		if (f.phone.value == "") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "Phone Number\n";				
		}		
		
		if (f.email.value == "") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "E-Mail Address\n";		
		}				
		
		if (f.studenttype.value == "-1") {
			bReturn = false;
			strErrorMsg = strErrorMsg + "Select Fee Type\n";		
		}	else {
			if (f.studenttype.value == "SP") {
				if (f.affiliation.value == "") {
					bReturn = false;
					strErrorMsg = strErrorMsg + "You have selected the Fee Type of JPSM Sponsor or Affiliate.  " + 
					"Please select a corresponding Sponsor/Affiliate.\n";					
				}
			}
		}
		
		/*
		if (f.PresPosLen.value != "" && !_CF_checknumber(f.PresPosLen.value)) {
			strErrorMsg = strErrorMsg + "Value must be numeric: How long have you been in your present position?\n";	
			bReturn = false;
		}
		
		if (f.PresEmpLen.value != "" && !_CF_checknumber(f.PresEmpLen.value)) {
			strErrorMsg = strErrorMsg + "Value must be numeric: How long have you worked for your present employer?\n";	
			bReturn = false;
		}
		*/
		
		bChecked = -1;
		for (i = 0; i < f.payamount.length; i++) {
			if (f.payamount[i].checked) {
				bChecked = i;
			}
		}		
		if (bChecked == -1) {
			bReturn = false;
			strErrorMsg = strErrorMsg + "Choose a Payment Amount\n";					
		}	

		bChecked = -1;
		for (i = 0; i < document.myForm.paymethod.length; i++) {
			if (document.myForm.paymethod[i].checked) {
				bChecked = i;
			}	
		}	
		if (bChecked == -1) {
			bReturn = false;
			strErrorMsg = strErrorMsg + "Choose a Payment Method\n";			
		}
						
		
	}	// end of if (document.myForm.RegType.value == "single" || document.myForm.RegType.value == "block")
	
	
	if (bReturn) {
		return true;
	} else {
		alert(strErrorMsg);
		return false;
	}
}

function changeState() {
	if (document.myForm.country.value == "US") {																
		document.getElementById('span1').style.display = "";
		document.getElementById('span2').style.display = "none";		
	} else {
		document.getElementById('span1').style.display = "none";
		document.getElementById('span2').style.display = "";			
	}
}

function SelectFee()
{
	showAffiliation();
	
	// payamount radio buttons: 0 = student, 1 = affiliate, 2 = full price participant
	var f = document.forms['myForm'];
	
	document.getElementById('affiliateInfo').style.display = "none";
	document.getElementById('fellowshipInfo').style.display = "none";
	
	f.paymethod[0].disabled = true;
	f.paymethod[1].disabled = true;
	f.paymethod[2].disabled = true;
	
	if (f.StateID.value == "MI"){
		f.paymethod[1].checked = true; /* select credit card payment as default */
	} else {
		f.paymethod[0].checked = true; /* select To Follow as default */
	}	
	
	f.payamount[0].disabled = true;
	f.payamount[1].disabled = true;
	f.payamount[2].disabled = true;	
	f.payamount[3].disabled = true;	
			
	switch(f.studenttype.value)
	{
		case "SP": // sponsor/affiliate
			document.getElementById('affiliateInfo').style.display = "inline";
			f.payamount[1].checked = true;
			f.payamount[1].disabled = false;
			
			f.paymethod[0].disabled = false; // Allow To Follow
			f.paymethod[1].disabled = false; // Allow Credit card
			break;
		case "FT": // student
			f.payamount[0].checked = true;
			f.payamount[0].disabled = false;
			
			f.paymethod[0].disabled = false; // Allow To Follow
			f.paymethod[1].disabled = false; // Allow Credit card
			break;	
		case "MA": // fellowship
			document.getElementById('fellowshipInfo').style.display = "inline";
			f.payamount[3].checked = true;
			f.payamount[3].disabled = false;			
					
			f.paymethod[2].disabled = false; // Allow Fellowship
			f.paymethod[2].checked = true;	
			break;
		default:
			f.payamount[2].checked = true;
			f.payamount[2].disabled = false;
			
			f.paymethod[0].disabled = false; // Allow To Follow
			f.paymethod[1].disabled = false; // Allow Credit card
			break;				
	}
	
	document.myForm.payamount.enabled = false;
}

function showAffiliation()
	{
		var f = document.forms['myForm'];
		var st = f.studenttype[f.studenttype.selectedIndex].value;
		
		if (st == "SP"){
			f.elements['affiliation'].style.display = "inline";
		} else {
			f.elements['affiliation'].style.display = "none";
			f.affiliation.selectedIndex = 0;
		}
	}
