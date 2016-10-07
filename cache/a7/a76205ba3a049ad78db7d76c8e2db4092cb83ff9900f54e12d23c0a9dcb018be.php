<?php

/* confirm.twig */
class __TwigTemplate_bd050714d8329ab6174d2f3f47eb0423b418b716a5f8c3652f0d5dcbfe466666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "confirm.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div id=\"reg-confirm\">\t
<!-- 
<cfif bFromPayFlow>
\t<div id=\"page-title\">
        Thank You for Your Payment!
    </div>
    
    <div style=\"color: red; font-weight: bold; text-align: center;\">
        Please print this page for your records. 
    </div>
\t<p>
    \tYour payment of <cfoutput>#sPaymentAmount#</cfoutput> has been processed by PayPal. 
        The charges that appear on your credit card will be from the \"Institute for Social Research\".
\t</p>
\t<p class=\"registration-text\">
\t\tRegistration number: <cfoutput>#regInfo.confirm_num#</cfoutput>
\t</p>
    
    <p class=\"additionalInfo\">
        <form method=\"post\" action=\"index.cfm\">\t
            <input type=\"submit\" value=\"Return to Course List\" />
        </form>
    </p>
-->
";
        // line 28
        if (($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "PayMethod", array()) == "F")) {
            echo "   <!--- Free for Fellowship --> 
\t<div id=\"page-title\">
        Thank You for Your Registration!
    </div>
    
    <div style=\"color: red; font-weight: bold; text-align: center;\">
        Please print this page for your records. 
    </div>
        
\t<p class=\"registration-text\">
\t\tRegistration number: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "confirm_num", array()), "html", null, true);
            echo "
\t</p>
\t
\t<p>
\t\t<b>The registration number</b> <font color=\"FF0000\"><b>does not indicate acceptance</b></font> 
\t\tinto the course. Confirmation of registration and instructions will be sent after the 
\t\tregistration form has been processed. Registration is not firm until you receive a confirmation 
\t\temail.
\t</p>
";
        } else {
            // line 48
            echo "\t";
            if (($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "cancelled_flag", array()) == "-1")) {
                // line 49
                echo "    \t<div id=\"page-title\">
            Registration Cancellation Request!
        </div>
        
        <div style=\"color: red; font-weight: bold; text-align: center;\">
            Please print this page for your records. 
        </div>\t    
        
\t\t<p>
\t\t\tYour cancellation request has been forwarded to JPSM. Cancellation online does not 
            guarantee that fees will be refunded. You will be notified of your cancellation and 
            payment status via email.
\t\t</p>
\t";
            } else {
                // line 63
                echo "      \t<div id=\"page-title\">
            Thank You for Your Registration!
        </div>
        
        <div style=\"color: red; font-weight: bold; text-align: center;\">
            Please print this page for your records. 
        </div>
    
\t\t<p class=\"registration-text\">
\t\t\tRegistration number: ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "confirm_num", array()), "html", null, true);
                echo "<br />
            Course fee: \$";
                // line 73
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "PayAmount", array()), 0), "html", null, true);
                echo "
        </p>
\t\t
\t\t<p>
\t\t\t<b>The registration number</b> <font color=\"FF0000\"><b>does not indicate acceptance</b></font> 
\t\t\tinto the course. Confirmation of registration and instructions will be sent after the 
\t\t\tregistration form has been processed. Registration is not firm until you receive a confirmation 
\t\t\temail.
\t\t</p>
\t\t\t
\t\t<p>
\t\t\t<b>Post-registration payment</b> can be done online by using your registration number. 
            Please forward your registration number to the appropriate departments.
\t\t</p>
\t\t
\t\t<!-- PayMethod passed from prev form, and NOT the value pulled from database  -->
\t\t";
                // line 89
                if (((isset($context["PayMethod"]) ? $context["PayMethod"] : null) != "TF")) {
                    // line 90
                    echo "            ";
                    if ((($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "course_status", array()) == "WL") && ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "BypassWaitList", array()) != 1))) {
                        // line 91
                        echo "                <p style=\"font-weight: bold; color: red;\">
                    JPSM is currently not accepting payments online. Please contact JPSM concerning your registration.
                </p>
                
                <p class=\"additionalInfo\">
                    <form method=\"post\" action=\"https://projects.isr.umich.edu/jpsm/index.cfm\">\t
                        <input type=\"submit\" value=\"Return to Course List\" />
                    </form>
                </p>
            ";
                    } elseif (($this->getAttribute(                    // line 100
(isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateid", array()) == "MI")) {
                        // line 101
                        echo "            \t<form method=\"post\" name=\"myForm\" action=\"/payflow\">\t
                    <input type=\"submit\" value=\"Make Payment\" /> * JPSM uses PayPal for credit card processing.
                    You will be redirected to PayPal site to enter your credit card info. 
                    <cfoutput>\t\t
                    <input type=\"hidden\" name=\"RegID\" value=\"";
                        // line 105
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "RegID", array()), "html", null, true);
                        echo "\" />
                    <input type=\"hidden\" name=\"ConfirmNum\" value=\"";
                        // line 106
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "confirm_num", array()), "html", null, true);
                        echo "\" />
                    </cfoutput>
                </form>  
\t\t\t";
                    } elseif (($this->getAttribute(                    // line 109
(isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateid", array()) == "MD")) {
                        echo "                
                <p class=\"additionalInfo\">
                <form method=\"post\" action=\"https://projects.isr.umich.edu/jpsm/index.cfm\">\t
                    <input type=\"submit\" value=\"Return to Course List\" />
                </form>
                </p>  

            ";
                    }
                    // line 117
                    echo "        ";
                } else {
                    echo "        
        \t<p class=\"additionalInfo\">
                <form method=\"post\" action=\"https://projects.isr.umich.edu/jpsm/index.cfm\">\t
                    <input type=\"submit\" value=\"Return to Course List\" />
                </form>
            </p>
        ";
                }
                // line 124
                echo "    ";
            }
        }
        // line 125
        echo "    
\t
<!--- Show Registartion Informations ---->
<div style=\"padding-left: 25px;\">
\t";
        // line 129
        if (($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "cancelled_flag", array()) == "-1")) {
            // line 130
            echo "\t\t<p class=\"CourseHeader\" style=\"color: red;\">
\t\t\tRegistration Cancelled!
\t\t</p>
\t";
        } else {
            // line 133
            echo "\t
\t\t<p class=\"CourseHeader\">
\t\t\tRegistration Information
\t\t</p>
    ";
        }
        // line 137
        echo "    
\t
\t";
        // line 139
        $context["sInstructors"] = $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_1", array());
        // line 140
        echo "\t";
        if ($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_2", array())) {
            // line 141
            echo "\t";
            $context["sInstructors"] = (((isset($context["sInstructors"]) ? $context["sInstructors"] : null) . ", ") . $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_2", array()));
            // line 142
            echo "\t";
        }
        // line 143
        echo "
\t";
        // line 144
        if ($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_3", array())) {
            // line 145
            echo "\t";
            $context["sInstructors"] = (((isset($context["sInstructors"]) ? $context["sInstructors"] : null) . ", ") . $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_3", array()));
            // line 146
            echo "\t";
        }
        // line 147
        echo "
\t";
        // line 148
        if ($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_4", array())) {
            // line 149
            echo "\t";
            $context["sInstructors"] = (((isset($context["sInstructors"]) ? $context["sInstructors"] : null) . ", ") . $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_4", array()));
            // line 150
            echo "\t";
        }
        echo "\t
\t
\t<p>
\t\t<span class=\"heading2\">Course:</span>
\t\t<p style=\"padding-left: 20px;\">            
        \t";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "classdates", array()), "html", null, true);
        echo "<br>
\t\t\t";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "coursename", array()), "html", null, true);
        echo "<br>
            ";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["sInstructors"]) ? $context["sInstructors"] : null), "html", null, true);
        echo "<br>\t\t\t
\t\t\t";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "facility", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "location", array()), "html", null, true);
        echo "
\t\t</p>
\t</p>\t
\t\t  
\t<p>
        <span class=\"heading2\">Registrant:</span>
        <p style=\"padding-left: 20px;\">
        \t";
        // line 165
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "Prefix", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "Prefix", array()), "html", null, true);
            echo " ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "fname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "mname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "lname", array()), "html", null, true);
        echo "<br>
        \t";
        // line 166
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "agency", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "agency", array()), "html", null, true);
            echo "<br> ";
        }
        // line 167
        echo "        \t";
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "dept_room", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "dept_room", array()), "html", null, true);
            echo "<br> ";
        }
        // line 168
        echo "        \t";
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "street1", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "street1", array()), "html", null, true);
            echo "<br> ";
        }
        // line 169
        echo "        \t";
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "street2", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "street2", array()), "html", null, true);
            echo "<br> ";
        }
        // line 170
        echo "        \t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "city", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "state", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "zip", array()), "html", null, true);
        echo "<br>
        \t";
        // line 171
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "country", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "country", array()), "html", null, true);
            echo "<br> ";
        }
        echo "\t\t\t\t
        </p>
        
        <p style=\"padding-left: 20px;\">
        Phone: ";
        // line 175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone')->getCallable(), array($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "phone", array()))), "html", null, true);
        echo " ";
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "ext", array())) {
            echo " >&nbsp;&nbsp;Ext: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "ext", array()), "html", null, true);
            echo " ";
        }
        // line 176
        echo "        <br>
        ";
        // line 177
        if ($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "fax", array())) {
            // line 178
            echo "        Fax: ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone')->getCallable(), array($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "fax", array()))), "html", null, true);
            echo "
\t\t<br>
\t\t";
        }
        // line 181
        echo "        E-Mail: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "email", array()), "html", null, true);
        echo " <br>
        Fee Type: ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "StudentType", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 184
        if (($this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "affiliation", array()) > 0)) {
            // line 185
            echo "\t         Sponsor/Affiliate: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "AffiliationName", array()), "html", null, true);
            echo "
\t\t\t<br>
        ";
        }
        // line 187
        echo "    
         Registration #: ";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "confirm_num", array()), "html", null, true);
        echo "
        </p>

\t</p>\t
\t
\t<p>
\t\t<span class=\"heading2\">Payment:</span><br />
        <p style=\"padding-left: 20px;\">
         Payment Amount: \$";
        // line 196
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "PayAmount", array()), 0), "html", null, true);
        echo "
\t\t <br>
\t\t Payment Method: ";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "PaymentMethod", array()), "html", null, true);
        echo "
        </p>
\t</p>
    \t 
    <p>
        <span class=\"heading2\">Comments:</span>
        <p style=\"padding-left: 20px;\">";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["regInfo"]) ? $context["regInfo"] : null), "comments", array()), "html", null, true);
        echo "</p>
    </p>
\t<p>
\t\t<span class=\"heading2\">Registration Fees:</span>
\t\t<p>
\t\t\tThe registration fee is <b>\$";
        // line 209
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_full", array()), 0), "html", null, true);
        echo "</b> for participants,
\t\t\t<b>\$";
        // line 210
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_affiliate", array()), 0), "html", null, true);
        echo "</b> for sponsors/affiliates, and 
\t\t\t<b>\$";
        // line 211
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_student", array()), 0), "html", null, true);
        echo "</b> for full-time university students. Lunches 
\t\t\tand refreshments are included in the fee.  Registrants will be provided with a notebook 
\t\t\tcontaining detailed course notes.
\t\t</p>
\t\t
\t\t\t";
        // line 216
        if ((($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "EarlyDiscount", array()) == "1") && (twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "EarlyDiscountDate", array()), "date", array()), "U")))) {
            // line 217
            echo "\t\t\t\t<span class=\"heading2\">Early Payment Discount</span>
\t\t\t\t<p>
\t\t\t\tRegistrants will receive a fee discount if payment is made by 
\t\t\t\t<b>";
            // line 220
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "EarlyDiscountDate", array()), "date", array()), "m/d/Y"), "html", null, true);
            echo "</b>.
\t\t\t\tPlease note that not all courses have a discounted rate. 
\t\t\t\tThe early payment discounted fees are 
\t\t\t\t<b>\$";
            // line 223
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "Cost_Full_EarlyDiscount", array()), 0), "html", null, true);
            echo "</b> for participants, 
\t\t\t\t<b>\$";
            // line 224
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "Cost_Affiliate_EarlyDiscount", array()), 0), "html", null, true);
            echo "</b> for sponsors/affiliates, 
\t\t\t\tand <b>\$";
            // line 225
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "Cost_Student_EarlyDiscount", array()), 0), "html", null, true);
            echo "</b> for full-time university students.
\t\t\t\t</p>\t\t\t
\t\t\t";
        }
        // line 227
        echo "\t\t
\t</p>
    <p>
        <b>Online registration is required.</b> The web generated registration number does 
        not indicate acceptance into the course. Confirmation of registration and 
        instructions will be sent after the registration form has been processed. 
        Registration is not firm until you receive a confirmation email. <b>Payment by credit 
        card is required.</b> ";
        // line 234
        if (($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateID", array()) != "MD")) {
            echo " Post registration payment may be done online using the 
        registration number.";
        }
        // line 235
        echo " Please note registration number. The registration deadline is 
        <b>";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline", array()), "html", null, true);
        echo "</b>. Payment is required by <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "payduedate", array()), "html", null, true);
        echo "</b> or the registration 
        will be\tcancelled. Please notify JPSM as soon as possible if you need to cancel your 
        registration. You will be fully reimbursed if you cancel by 
        <b>";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_cancel_fullreimb", array()), "html", null, true);
        echo "</b>. Cancellation <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_cancel_adminfee", array()), "html", null, true);
        echo "</b> 
        will require a \$100 administrative fee, the remainder will be reimbursed. 
        Cancellation on or after <b>";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_cancel_noreimb", array()), "html", null, true);
        echo "</b> is subject to the full fee 
        amount. Minority Fellowship essays and letters of recommendation, faxed 
        or mailed to the address below, are due <b>";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_fellowship", array()), "html", null, true);
        echo "</b>. Fellowship 
        winners will be notified <b>";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "notification_fellowship", array()), "html", null, true);
        echo "</b>. Questions for this course 
        should be directed to:
    </p>
    <p>
        <b>";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "person", array()), "html", null, true);
        echo "</b><br />                    
        ";
        // line 249
        echo twig_replace_filter($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "institution", array()), array("," => "<br />"));
        echo "<br />
        ";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address1", array()), "html", null, true);
        echo "<br />
        ";
        // line 251
        if ($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address2", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address2", array()), "html", null, true);
            echo " <br /> ";
        }
        // line 252
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "state", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "zip", array()), "html", null, true);
        echo " 
    </p>
    <p>
   
        Phone: ";
        // line 256
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone')->getCallable(), array($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "phone", array()))), "html", null, true);
        echo "<br />
        Fax: ";
        // line 257
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone')->getCallable(), array($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "fax", array()))), "html", null, true);
        echo "<br />
        Email: <a href=\"mailto:";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "email", array()), "html", null, true);
        echo "</a>
    </p>\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 258,  546 => 257,  542 => 256,  530 => 252,  524 => 251,  520 => 250,  516 => 249,  512 => 248,  505 => 244,  501 => 243,  496 => 241,  489 => 239,  481 => 236,  478 => 235,  473 => 234,  464 => 227,  458 => 225,  454 => 224,  450 => 223,  444 => 220,  439 => 217,  437 => 216,  429 => 211,  425 => 210,  421 => 209,  413 => 204,  404 => 198,  399 => 196,  388 => 188,  385 => 187,  378 => 185,  376 => 184,  371 => 182,  366 => 181,  359 => 178,  357 => 177,  354 => 176,  346 => 175,  335 => 171,  326 => 170,  319 => 169,  312 => 168,  305 => 167,  299 => 166,  285 => 165,  273 => 158,  269 => 157,  265 => 156,  261 => 155,  252 => 150,  249 => 149,  247 => 148,  244 => 147,  241 => 146,  238 => 145,  236 => 144,  233 => 143,  230 => 142,  227 => 141,  224 => 140,  222 => 139,  218 => 137,  211 => 133,  205 => 130,  203 => 129,  197 => 125,  193 => 124,  182 => 117,  171 => 109,  165 => 106,  161 => 105,  155 => 101,  153 => 100,  142 => 91,  139 => 90,  137 => 89,  118 => 73,  114 => 72,  103 => 63,  87 => 49,  84 => 48,  71 => 38,  58 => 28,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.twig\" %}
{% block content %}

<div id=\"reg-confirm\">\t
<!-- 
<cfif bFromPayFlow>
\t<div id=\"page-title\">
        Thank You for Your Payment!
    </div>
    
    <div style=\"color: red; font-weight: bold; text-align: center;\">
        Please print this page for your records. 
    </div>
\t<p>
    \tYour payment of <cfoutput>#sPaymentAmount#</cfoutput> has been processed by PayPal. 
        The charges that appear on your credit card will be from the \"Institute for Social Research\".
\t</p>
\t<p class=\"registration-text\">
\t\tRegistration number: <cfoutput>#regInfo.confirm_num#</cfoutput>
\t</p>
    
    <p class=\"additionalInfo\">
        <form method=\"post\" action=\"index.cfm\">\t
            <input type=\"submit\" value=\"Return to Course List\" />
        </form>
    </p>
-->
{% if regInfo.PayMethod == \"F\" %}   <!--- Free for Fellowship --> 
\t<div id=\"page-title\">
        Thank You for Your Registration!
    </div>
    
    <div style=\"color: red; font-weight: bold; text-align: center;\">
        Please print this page for your records. 
    </div>
        
\t<p class=\"registration-text\">
\t\tRegistration number: {{ regInfo.confirm_num }}
\t</p>
\t
\t<p>
\t\t<b>The registration number</b> <font color=\"FF0000\"><b>does not indicate acceptance</b></font> 
\t\tinto the course. Confirmation of registration and instructions will be sent after the 
\t\tregistration form has been processed. Registration is not firm until you receive a confirmation 
\t\temail.
\t</p>
{% else %}
\t{% if regInfo.cancelled_flag == \"-1\" %}
    \t<div id=\"page-title\">
            Registration Cancellation Request!
        </div>
        
        <div style=\"color: red; font-weight: bold; text-align: center;\">
            Please print this page for your records. 
        </div>\t    
        
\t\t<p>
\t\t\tYour cancellation request has been forwarded to JPSM. Cancellation online does not 
            guarantee that fees will be refunded. You will be notified of your cancellation and 
            payment status via email.
\t\t</p>
\t{% else %}
      \t<div id=\"page-title\">
            Thank You for Your Registration!
        </div>
        
        <div style=\"color: red; font-weight: bold; text-align: center;\">
            Please print this page for your records. 
        </div>
    
\t\t<p class=\"registration-text\">
\t\t\tRegistration number: {{ regInfo.confirm_num  }}<br />
            Course fee: \${{ regInfo.PayAmount | number_format(0) }}
        </p>
\t\t
\t\t<p>
\t\t\t<b>The registration number</b> <font color=\"FF0000\"><b>does not indicate acceptance</b></font> 
\t\t\tinto the course. Confirmation of registration and instructions will be sent after the 
\t\t\tregistration form has been processed. Registration is not firm until you receive a confirmation 
\t\t\temail.
\t\t</p>
\t\t\t
\t\t<p>
\t\t\t<b>Post-registration payment</b> can be done online by using your registration number. 
            Please forward your registration number to the appropriate departments.
\t\t</p>
\t\t
\t\t<!-- PayMethod passed from prev form, and NOT the value pulled from database  -->
\t\t{% if PayMethod != \"TF\" %}
            {% if courseInfo.course_status == \"WL\" and regInfo.BypassWaitList != 1 %}
                <p style=\"font-weight: bold; color: red;\">
                    JPSM is currently not accepting payments online. Please contact JPSM concerning your registration.
                </p>
                
                <p class=\"additionalInfo\">
                    <form method=\"post\" action=\"https://projects.isr.umich.edu/jpsm/index.cfm\">\t
                        <input type=\"submit\" value=\"Return to Course List\" />
                    </form>
                </p>
            {% elseif courseInfo.stateid == \"MI\" %}
            \t<form method=\"post\" name=\"myForm\" action=\"/payflow\">\t
                    <input type=\"submit\" value=\"Make Payment\" /> * JPSM uses PayPal for credit card processing.
                    You will be redirected to PayPal site to enter your credit card info. 
                    <cfoutput>\t\t
                    <input type=\"hidden\" name=\"RegID\" value=\"{{ regInfo.RegID }}\" />
                    <input type=\"hidden\" name=\"ConfirmNum\" value=\"{{ regInfo.confirm_num }}\" />
                    </cfoutput>
                </form>  
\t\t\t{% elseif courseInfo.stateid == \"MD\" %}                
                <p class=\"additionalInfo\">
                <form method=\"post\" action=\"https://projects.isr.umich.edu/jpsm/index.cfm\">\t
                    <input type=\"submit\" value=\"Return to Course List\" />
                </form>
                </p>  

            {% endif %}
        {% else %}        
        \t<p class=\"additionalInfo\">
                <form method=\"post\" action=\"https://projects.isr.umich.edu/jpsm/index.cfm\">\t
                    <input type=\"submit\" value=\"Return to Course List\" />
                </form>
            </p>
        {% endif %}
    {% endif %}
{% endif %}    
\t
<!--- Show Registartion Informations ---->
<div style=\"padding-left: 25px;\">
\t{% if regInfo.cancelled_flag == \"-1\" %}
\t\t<p class=\"CourseHeader\" style=\"color: red;\">
\t\t\tRegistration Cancelled!
\t\t</p>
\t{% else %}\t
\t\t<p class=\"CourseHeader\">
\t\t\tRegistration Information
\t\t</p>
    {% endif %}    
\t
\t{% set sInstructors = courseInfo.instructor_1 %}
\t{% if courseInfo.instructor_2 %}
\t{% set sInstructors = sInstructors ~ \", \" ~ courseInfo.instructor_2 %}
\t{% endif %}

\t{% if courseInfo.instructor_3 %}
\t{% set sInstructors = sInstructors ~ \", \" ~ courseInfo.instructor_3 %}
\t{% endif %}

\t{% if courseInfo.instructor_4 %}
\t{% set sInstructors = sInstructors ~ \", \" ~ courseInfo.instructor_4 %}
\t{% endif %}\t
\t
\t<p>
\t\t<span class=\"heading2\">Course:</span>
\t\t<p style=\"padding-left: 20px;\">            
        \t{{ courseInfo.classdates }}<br>
\t\t\t{{ courseInfo.coursename }}<br>
            {{ sInstructors }}<br>\t\t\t
\t\t\t{{ courseInfo.facility }}, {{ courseInfo.location }}
\t\t</p>
\t</p>\t
\t\t  
\t<p>
        <span class=\"heading2\">Registrant:</span>
        <p style=\"padding-left: 20px;\">
        \t{% if regInfo.Prefix %} {{ regInfo.Prefix }} {% endif %} {{ regInfo.fname }} {{ regInfo.mname }} {{ regInfo.lname }}<br>
        \t{% if regInfo.agency %} {{ regInfo.agency }}<br> {% endif %}
        \t{% if regInfo.dept_room %} {{ regInfo.dept_room }}<br> {% endif %}
        \t{% if regInfo.street1 %} {{ regInfo.street1 }}<br> {% endif %}
        \t{% if regInfo.street2 %} {{ regInfo.street2 }}<br> {% endif %}
        \t{{ regInfo.city }} {{ regInfo.state }} {{ regInfo.zip }}<br>
        \t{% if regInfo.country %} {{ regInfo.country }}<br> {% endif %}\t\t\t\t
        </p>
        
        <p style=\"padding-left: 20px;\">
        Phone: {{ regInfo.phone | phone }} {% if regInfo.ext %} >&nbsp;&nbsp;Ext: {{ regInfo.ext }} {% endif %}
        <br>
        {% if regInfo.fax %}
        Fax: {{ regInfo.fax | phone }}
\t\t<br>
\t\t{% endif %}
        E-Mail: {{ regInfo.email }} <br>
        Fee Type: {{ regInfo.StudentType }}
        <br>
        {% if regInfo.affiliation > 0 %}
\t         Sponsor/Affiliate: {{ regInfo.AffiliationName }}
\t\t\t<br>
        {% endif %}    
         Registration #: {{ regInfo.confirm_num }}
        </p>

\t</p>\t
\t
\t<p>
\t\t<span class=\"heading2\">Payment:</span><br />
        <p style=\"padding-left: 20px;\">
         Payment Amount: \${{ regInfo.PayAmount | number_format(0) }}
\t\t <br>
\t\t Payment Method: {{ regInfo.PaymentMethod }}
        </p>
\t</p>
    \t 
    <p>
        <span class=\"heading2\">Comments:</span>
        <p style=\"padding-left: 20px;\">{{ regInfo.comments }}</p>
    </p>
\t<p>
\t\t<span class=\"heading2\">Registration Fees:</span>
\t\t<p>
\t\t\tThe registration fee is <b>\${{ courseInfo.cost_full | number_format(0) }}</b> for participants,
\t\t\t<b>\${{ courseInfo.cost_affiliate | number_format(0) }}</b> for sponsors/affiliates, and 
\t\t\t<b>\${{ courseInfo.cost_student | number_format(0) }}</b> for full-time university students. Lunches 
\t\t\tand refreshments are included in the fee.  Registrants will be provided with a notebook 
\t\t\tcontaining detailed course notes.
\t\t</p>
\t\t
\t\t\t{% if courseInfo.EarlyDiscount == \"1\" and \"now\" | date('U') < courseInfo.EarlyDiscountDate.date | date('U') %}
\t\t\t\t<span class=\"heading2\">Early Payment Discount</span>
\t\t\t\t<p>
\t\t\t\tRegistrants will receive a fee discount if payment is made by 
\t\t\t\t<b>{{ courseInfo.EarlyDiscountDate.date | date(\"m/d/Y\") }}</b>.
\t\t\t\tPlease note that not all courses have a discounted rate. 
\t\t\t\tThe early payment discounted fees are 
\t\t\t\t<b>\${{ courseInfo.Cost_Full_EarlyDiscount | number_format(0) }}</b> for participants, 
\t\t\t\t<b>\${{ courseInfo.Cost_Affiliate_EarlyDiscount | number_format(0) }}</b> for sponsors/affiliates, 
\t\t\t\tand <b>\${{ courseInfo.Cost_Student_EarlyDiscount | number_format(0) }}</b> for full-time university students.
\t\t\t\t</p>\t\t\t
\t\t\t{% endif %}\t\t
\t</p>
    <p>
        <b>Online registration is required.</b> The web generated registration number does 
        not indicate acceptance into the course. Confirmation of registration and 
        instructions will be sent after the registration form has been processed. 
        Registration is not firm until you receive a confirmation email. <b>Payment by credit 
        card is required.</b> {% if courseInfo.stateID != \"MD\" %} Post registration payment may be done online using the 
        registration number.{% endif %} Please note registration number. The registration deadline is 
        <b>{{ courseInfo.deadline }}</b>. Payment is required by <b>{{ courseInfo.payduedate }}</b> or the registration 
        will be\tcancelled. Please notify JPSM as soon as possible if you need to cancel your 
        registration. You will be fully reimbursed if you cancel by 
        <b>{{ courseInfo.deadline_cancel_fullreimb }}</b>. Cancellation <b>{{ courseInfo.deadline_cancel_adminfee }}</b> 
        will require a \$100 administrative fee, the remainder will be reimbursed. 
        Cancellation on or after <b>{{ courseInfo.deadline_cancel_noreimb }}</b> is subject to the full fee 
        amount. Minority Fellowship essays and letters of recommendation, faxed 
        or mailed to the address below, are due <b>{{ courseInfo.deadline_fellowship }}</b>. Fellowship 
        winners will be notified <b>{{ courseInfo.notification_fellowship }}</b>. Questions for this course 
        should be directed to:
    </p>
    <p>
        <b>{{ contactInfo.person }}</b><br />                    
        {{ ( contactInfo.institution | replace({ (\",\") : \"<br />\" }) ) | raw }}<br />
        {{ contactInfo.address1 }}<br />
        {% if contactInfo.address2 %} {{ contactInfo.address2 }} <br /> {% endif %}
        {{ contactInfo.city }}, {{ contactInfo.state }} {{ contactInfo.zip }} 
    </p>
    <p>
   
        Phone: {{ contactInfo.phone | phone }}<br />
        Fax: {{ contactInfo.fax | phone  }}<br />
        Email: <a href=\"mailto:{{ contactInfo.email }}\">{{ contactInfo.email }}</a>
    </p>\t
\t</div>
</div>
{% endblock %}";
    }
}
