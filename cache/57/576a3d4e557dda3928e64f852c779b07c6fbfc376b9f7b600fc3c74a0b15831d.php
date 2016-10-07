<?php

/* register.twig */
class __TwigTemplate_ff8bd68da443d49e6dd0904c337fb492981357f7fc056e72e619b1165afd14b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "register.twig", 1);
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
<script src=\"/templates/register.js\" type=\"text/javascript\" language=\"javascript\"></script>

";
        // line 6
        if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "postreg")) {
            // line 7
            echo "    ";
            $context["formtitle"] = "Post Registration Payment";
            // line 8
            echo "    ";
            $context["buttontitle"] = "Submit Payment";
        } else {
            // line 10
            echo "    ";
            $context["formtitle"] = "JPSM Short Courses - Online Registration";
            // line 11
            echo "    ";
            $context["buttontitle"] = "Submit Registration";
        }
        // line 13
        echo "
<div id=\"page-title\">
\t";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["formtitle"]) ? $context["formtitle"] : null), "html", null, true);
        echo "
</div>

";
        // line 18
        if (($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "webcourse", array()) == 0)) {
            // line 19
            echo "\t<p class=\"page-error\">
\tOnline registration not currently available for this course.  
\tPlease check back soon.
\t</p>
";
        } else {
            // line 24
            echo "
<form name=\"myForm\" method=\"POST\" action=\"/register_process\" onSubmit=\"return VerifyForm()\">\t
<input type=\"hidden\" name=\"StateID\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateID", array()), "html", null, true);
            echo "\">

<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#888888\" width=\"100%\">
<tr>
 \t<td>
    \t<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" bordercolor=\"#111111\" width=\"100%\">\t\t
        <tr>
    \t\t";
            // line 33
            $context["sInstructors"] = $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_1", array());
            // line 34
            echo "    \t\t";
            if ($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_2", array())) {
                // line 35
                echo "    \t\t";
                $context["sInstructors"] = (((isset($context["sInstructors"]) ? $context["sInstructors"] : null) . ", ") . $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_2", array()));
                // line 36
                echo "    \t\t";
            }
            // line 37
            echo "    
    \t\t";
            // line 38
            if ($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_3", array())) {
                // line 39
                echo "    \t\t";
                $context["sInstructors"] = (((isset($context["sInstructors"]) ? $context["sInstructors"] : null) . ", ") . $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_3", array()));
                // line 40
                echo "    \t\t";
            }
            // line 41
            echo "    
    \t\t";
            // line 42
            if ($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_4", array())) {
                // line 43
                echo "    \t\t";
                $context["sInstructors"] = (((isset($context["sInstructors"]) ? $context["sInstructors"] : null) . ", ") . $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "instructor_4", array()));
                // line 44
                echo "    \t\t";
            }
            // line 45
            echo "
            <td colspan=\"2\" align=\"center\" valign=\"top\">
            \t<table border=\"1\" bordercolor=\"##5555aa\" cellpadding=\"0\" cellspacing=\"0\"  width=\"100%\">
                <tr>
                \t<td>
                        <p class=\"course-title\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "classdates", array()), "html", null, true);
            echo "</p>
                        <p class=\"course-title\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "coursename", array()), "html", null, true);
            echo "</p>
                        <p class=\"course-info\">";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["sInstructors"]) ? $context["sInstructors"] : null), "html", null, true);
            echo "</p>
                        <p class=\"course-info\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "facility", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "location", array()), "html", null, true);
            echo "</p>
                        <p class=\"course-deadline\">Registration Deadline: ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline", array()), "html", null, true);
            echo "</p>
                  \t</td>
             \t</tr>
            \t</table>
\t\t\t</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<td colspan=\"2\" align=\"center\" valign=\"top\">
\t\t\t\t<font face=\"Arial\" color=\"FF0000\" size=\"2\"><b>Do not use acronyms or abbreviations</b></font><br>
\t\t\t\t<font face=\"Arial\" color=\"FF0000\" size=\"2\"><b>* </b><font size=\"1\"><b>Required Field</b></font></font>
\t\t\t</td>
       \t</tr>
\t\t  
\t\t</cfoutput> \t\t
        </table>
  
  \t\t";
            // line 71
            if ((isset($context["bDisplayPersonInfo"]) ? $context["bDisplayPersonInfo"] : null)) {
                // line 72
                echo "\t\t<table id=\"registration-form\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\">      
\t\t\t<thead>
            <tr>
              <th colspan=\"2\" >Registrant Information:</th>
            </tr>
\t\t\t</thead>

\t\t\t<tbody>
            <tr>
              \t<th>Prefix:</th>
             \t<td>
\t\t\t\t\t  <select size=\"1\" name=\"Prefix\">
\t\t\t\t\t\t\t<option value=\"\" selected>- select -</option>
                            ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["prefixes"]) ? $context["prefixes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["prefix"]) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prefix"], "pt_name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prefix"], "pt_name", array()), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prefix'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t  </select>
\t\t\t\t</td>
            </tr>
\t\t\t<tr>\t\t\t\t
              \t<th>First Name:</th>
              \t<td>
                \t<input type=\"text\" name=\"fname\" size=\"30\" maxlength=\"30\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr> 
            <tr>
              \t<th>Middle Name:</th>
              \t<td><input type=\"text\" name=\"mname\" size=\"30\" maxlength=\"30\"></td>
            </tr> 
\t\t\t<tr>
              \t<th>Last Name:</th>
              \t<td>
                \t<input type=\"text\" name=\"lname\" size=\"30\" maxlength=\"30\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr> \t\t\t\t\t\t
\t\t\t\t\t\t
            <tr>
              \t<th>Agency/Bureau<br />Firm/School:<br /><span class=\"additionalInfo\">(to appear on badge)</span></th>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"agency\" size=\"50\" maxlength=\"200\" required>
                    <span class=\"required\">*</span><br />
\t\t\t\t\t<span class=\"additionalInfo\">Important - Please enter if applicable</span>
\t\t\t\t</td>
            </tr>
            <tr>
             \t<th>Department:</th>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"dept_room\" size=\"50\" maxlength=\"200\"><br />
\t\t\t\t\t<span class=\"additionalInfo\">Important - Please enter if applicable</span>\t\t\t\t\t\t\t
\t\t\t\t</td>
            </tr>
\t\t\t\t\t\t
\t\t\t<tr>
              \t<th>Country:</th>
              \t<td>
\t\t\t  \t\t<select name=\"country\" size=\"1\" onChange=\"changeState()\">
\t\t\t\t\t\t<option value=\"\"></option>\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 132
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_code", array()), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute($context["country"], "country_code", array()) == "US")) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t</td>
            </tr>\t\t\t
\t\t\t\t\t\t\t\t
            <tr>
              \t<th>Street Address:</th>
             \t<td>
                \t<input type=\"text\" name=\"street1\" size=\"50\" maxlength=\"100\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>
\t\t\t
            <tr>
              \t<th></th>
              \t<td><input type=\"text\" name=\"street2\" size=\"50\" maxlength=\"100\"></td>
            </tr>
\t\t\t
            <tr>
              \t<th>City:</th>
              \t<td>
                \t<input type=\"text\" name=\"city\" size=\"50\" maxlength=\"100\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>
\t\t\t
            <tr>
              \t<th>State/Province:</th>
              \t<td>
\t\t\t\t\t<span id=\"span1\" style=\"display:display;\">
\t\t\t\t\t<select name=\"state\" size=\"1\">
\t\t\t\t\t\t<option value=\"\"></option>\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 166
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "state_id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "state_name", array()), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</select></span>
\t\t\t\t\t<span id=\"span2\" style=\"display:none;\"><input type=\"text\" name=\"province\" size=\"20\" maxlength=\"20\"></span>
                    <span class=\"required\">*</span>
\t\t\t\t</td>
            </tr>\t
            <tr>
              \t<th>Postal Code:</th>
              \t<td>
                \t<input type=\"text\" name=\"zip\" size=\"14\" maxlength=\"10\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
            <tr>
              \t<th>Phone Number:</th>
              \t<td>
\t\t\t\t\t<input type=\"text\" name=\"phone\" size=\"14\" maxlength=\"14\" onKeyUp=\"checkNumber(myForm.phone);\" required>
\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\tExt:&nbsp;<input type=\"text\" name=\"ext\" size=\"5\" maxlength=\"10\" onKeyUp=\"checkNumber(myForm.ext);\">
                    <span class=\"required\">*</span>
\t\t\t\t</td>
            </tr>
            <tr>
              \t<th>Fax Number:</th>
              \t<td>
\t\t\t\t<input type=\"text\" name=\"fax\" size=\"14\" maxlength=\"14\" onKeyUp=\"checkNumber(myForm.fax);\">
\t\t\t\t</td>
            </tr>
            <tr>
              \t<th>E-Mail Address:</th>
              \t<td>
                \t<input type=\"email\" name=\"email\" size=\"50\" maxlength=\"100\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            <tr>
              \t<th>Fee Type:</th>
              \t<td>
\t\t\t\t\t<select name=\"studenttype\" onChange=\"SelectFee();\" required>
\t\t\t\t\t\t<option value=\"\">- select -</option>
\t\t\t\t\t\t";
                // line 209
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["studenttypes"]) ? $context["studenttypes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["studenttype"]) {
                    // line 210
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["studenttype"], "ft_id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["studenttype"], "ft_name", array()), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studenttype'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "\t\t\t\t\t</select>&nbsp;&nbsp;
\t\t\t\t\t<select name=\"affiliation\" style=\"display:none;\">
\t\t\t\t\t\t<option value=\"\">- select sponsor/affiliate -</option>
\t\t\t\t\t\t";
                // line 215
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["affiliates"]) ? $context["affiliates"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["affiliate"]) {
                    // line 216
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["affiliate"], "aff_id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["affiliate"], "aff_name", array()), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t<br />
\t\t\t\t\t
\t\t\t\t\t<span id=\"fellowshipInfo\" class=\"additionalInfo2\" style=\"display: none;\">
\t\t\t\t\tThe Joint Program in Survey Methodology strives to increase the number of <br />
                    survey professionals from groups traditionally under-represented in the field. <br />
                    As part of the effort, a limited number of competitive fellowships are available <br />
                    for African-Americans, Hispanic Americans, Latinos, and Native American Indians for <br />
                    the short course. The registrant must be a US citizen or permanent resident. <br />
                    Applicants must complete: 1. The online registration form, 2. A letter of recommendation <br />
                    and 3. A 500 word essay indicating the applicants background and how the course will <br />
                    enhance their chosen career path. The fellowship covers the registration fee, materials <br />
                    to distributed during class and group meals. <br />
                    Please click <a href=\"https://projects.isr.umich.edu/jpsm/info.cfm#fellowships\" target=\"_blank\">here</a> 
                    for additional information.
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t<span id=\"affiliateInfo\" class=\"additionalInfo2\" style=\"display: none;\">
\t\t\t\t\tTo receive the discounted rate your agency must be listed on the sponsor/affiliate<br />
\t\t\t\t\tdrop down box and you must me a regular employee of the sponsor/affiliate. If you do<br />
\t\t\t\t\tnot qualify for the discounted rate then please change your fee type to \"Participant\".<br /> 
\t\t\t\t\tInaccurate registrations will create delays. 
\t\t\t\t\t</span>
\t\t\t\t</td>
            </tr>\t\t\t\t\t\t\t\t

\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t
\t\t\t</tbody>\t\t\t\t\t\t\t\t\t\t\t\t\t
        </table>
    ";
            }
            // line 249
            echo "\t\t\t\t

    ";
            // line 251
            if ((isset($context["bDisplayExp"]) ? $context["bDisplayExp"] : null)) {
                // line 252
                echo "          <table id=\"registration-form\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">
\t\t  \t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\">
\t\t\t\t\t\tThe following information will guide the instructors about the experience mix of 
\t\t\t\t\t\tthe students:
\t\t\t\t\t</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t
\t\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>1. How many years have you been in your present position?</td>
\t\t\t\t\t\t<td nowrap=\"nowrap\">
                        \t<input type=\"number\" name=\"PresPosLen\" size=\"30\" maxlength=\"10\">
                            &nbsp;<span class=\"additionalInfo\">(Numeric value only)</span>
                        </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">What is your present title</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"PresTitle\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">How many years have you worked for your present employer (agency)?</td>
\t\t\t\t\t\t<td nowrap=\"nowrap\">
                        \t<input type=\"number\" name=\"PresEmpLen\" size=\"30\" maxlength=\"10\">
                            &nbsp;<span class=\"additionalInfo\">(Numeric value only)</span>                        
                        </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">What were you doing before that?</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select size=\"1\" name=\"PrevPos\">
\t\t\t\t\t\t\t\t<option selected value=\"\">- select -</option>
\t\t\t\t\t\t\t\t<option value=\"In school\">In school</option>
\t\t\t\t\t\t\t\t<option value=\"career unrelated to surveys or economics\">
\t\t\t\t\t\t\t\t\tCareer unrelated to surveys or economics
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t<option value=\"Other\">Other</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t  </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>2. What is your highest level of education?</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select size=\"1\" name=\"EduLevel\">
\t\t\t\t\t\t\t\t<option selected value=\"\">- select -</option>
\t\t\t\t\t\t\t\t<option value=\"BA (BS)\">BA (BS)</option>
\t\t\t\t\t\t\t\t<option value=\"MA (MS)\">MA (MS)</option>
\t\t\t\t\t\t\t\t<option value=\"Other\">Other</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">If &quot;other&quot;, please describe:</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"EduLevelOther\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">In what field?</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"EduField\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">Have you taken any economics courses?</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"EduEcon\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\">3. How will you access the web for material related to this course (if applicable)?</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td  class=\"indent\" colspan=\"2\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"WebAccess1\" value=\"-1\"> Employer's internet&nbsp;&nbsp;
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"WebAccess2\" value=\"-1\"> Home cable or DSL connection&nbsp;&nbsp;
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"WebAccess3\" value=\"-1\"> Home modem connection
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t
\t\t\t</tbody>\t\t\t
          </table>
\t";
            }
            // line 340
            echo "
\t<table id=\"registration-form\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th colspan=\"3\">Payment Information:</th>
\t\t\t</tr>
\t\t</thead>
\t\t
\t\t<tbody>\t
\t\t";
            // line 349
            if ((isset($context["bDisplayGeneral"]) ? $context["bDisplayGeneral"] : null)) {
                // line 350
                echo "\t\t\t<tr>
\t\t\t\t<th>Amount:</th>
\t\t\t\t<th class=\"required\">*</th>
\t\t\t\t<td nowrap=\"nowrap\" style=\"width: 100%\">
\t\t\t\t\t<input type=\"radio\" value=\"";
                // line 354
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_student", array()), "html", null, true);
                echo "\" name=\"payamount\">
\t\t\t\t\t\tFull-time Student (\$";
                // line 355
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_student", array()), 0), "html", null, true);
                echo ")
\t\t\t\t\t\t";
                // line 356
                if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "block")) {
                    echo "&nbsp;x <input type=\"text\" name=\"numFT\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totFT\" size=\"6\" readonly>
\t\t\t\t\t\t";
                }
                // line 359
                echo "\t\t\t\t\t<input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_affiliate", array()), "html", null, true);
                echo "\" name=\"payamount\">
\t\t\t\t\t\tSponsor/Affiliate (\$";
                // line 360
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_affiliate", array()), 0), "html", null, true);
                echo ")
\t\t\t\t\t\t";
                // line 361
                if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "block")) {
                    echo "&nbsp;x <input type=\"text\" name=\"numSP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totSP\" size=\"6\" readonly>
\t\t\t\t\t\t";
                }
                // line 363
                echo "\t\t\t
\t\t\t\t\t\t<input type=\"radio\" value=\"";
                // line 364
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_full", array()), "html", null, true);
                echo "\" name=\"payamount\">
\t\t\t\t\t\tParticipants (\$";
                // line 365
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_full", array()), 0), "html", null, true);
                echo ")
\t\t\t\t\t\t";
                // line 366
                if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "block")) {
                    echo "&nbsp;x <input type=\"text\" name=\"numP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totP\" size=\"6\" readonly>
\t\t\t\t\t\t";
                }
                // line 369
                echo "\t\t\t\t\t";
                if (((isset($context["sRegType"]) ? $context["sRegType"] : null) != "block")) {
                    echo "<input type=\"radio\" value=\"0\" name=\"payamount\">
\t\t\t\t\t\tFellowship (\$0)
\t\t\t\t\t";
                }
                // line 372
                echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
                // line 374
                if ((($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "earlydiscount", array()) == "1") && (twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "earlydiscountdate", array()), "date", array()), "U")))) {
                    // line 375
                    echo "\t\t\t<tr>
\t\t\t<td colspan=3 align=center bgcolor=ffffcc> 
\t\t\t<font color=blue><i>
\t\t\tEarly Payment Discount before and on ";
                    // line 378
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "earlydiscountdate", array()), "date", array()), "m/d/Y"), "html", null, true);
                    echo "
\t\t\t</i></font>
\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th><i></i></th>
\t\t\t\t<th class=\"required\">*</th>
\t\t\t\t<td nowrap=\"nowrap\" style=\"width: 100%\" valign=top><i><font color=blue>
\t\t\t\t\t<input type=\"radio\" value=\"#courseinfo.cost_student_earlydiscount#\" name=\"payamount\" disabled>
\t\t\t\t\t\tFull-time Student \$";
                    // line 387
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_student_earlydiscount", array()), 0), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 388
                    if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "block")) {
                        echo "&nbsp;x <input type=\"text\" name=\"numFT\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totFT\" size=\"6\" readonly>
\t\t\t\t\t\t";
                    }
                    // line 391
                    echo "\t\t\t\t\t<input type=\"radio\" value=\"#courseinfo.cost_affiliate_earlydiscount#\" name=\"payamount\" disabled>
\t\t\t\t\t\tSponsor/Affiliate \$";
                    // line 392
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_affiliate_earlydiscount", array()), 0), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 393
                    if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "block")) {
                        echo "&nbsp;x <input type=\"text\" name=\"numSP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totSP\" size=\"6\" readonly>
\t\t\t\t\t\t";
                    }
                    // line 395
                    echo "\t\t\t
\t\t\t\t\t\t<input type=\"radio\" value=\"#courseinfo.cost_full_earlydiscount#\" name=\"payamount\" disabled>
\t\t\t\t\t\tParticipants \$";
                    // line 397
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_full_earlydiscount", array()), 0), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 398
                    if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "block")) {
                        echo "&nbsp;x <input type=\"text\" name=\"numP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totP\" size=\"6\" readonly>
\t\t\t\t\t\t";
                    }
                    // line 401
                    echo "\t\t\t\t\t";
                    if (((isset($context["sRegType"]) ? $context["sRegType"] : null) != "block")) {
                        echo "<input type=\"radio\" value=\"0\" name=\"payamount\" disabled>
\t\t\t\t\t\tFellowship (\$0)
\t\t\t\t\t";
                    }
                    // line 404
                    echo "\t\t\t\t\t</font>
\t\t\t\t\t</i>
\t\t\t\t\t<br><br>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
                }
                // line 410
                echo "
            \t
\t\t";
            } else {
                // line 412
                echo "\t
    \t<tr>
\t\t\t<th>Amount:</th>
\t\t\t<th class=\"required\"></th>
        \t<td>\$<cfoutput>#confirmcost#</cfoutput></td>
        </tr>\t\t\t
\t\t";
            }
            // line 418
            echo "\t
\t\t\t
\t\t<tr>
\t\t\t<th>Method:</th>
\t\t\t<th class=\"required\">*</th>
\t\t\t<td>
\t\t\t\t<input type=\"radio\" name=\"paymethod\" value=\"TF\" ";
            // line 424
            if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "postreg")) {
                echo "disabled";
            }
            echo "> To Follow\t\t\t\t
\t\t\t\t<input type=\"radio\" name=\"paymethod\" value=\"CH\" ";
            // line 425
            if (($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateID", array()) == "MD")) {
                echo "style=\"display: none;\"";
            } else {
                echo "checked";
            }
            echo ">";
            if (($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateID", array()) != "MD")) {
                echo "Pay Now (Credit card payment)&nbsp;&nbsp;";
            }
            echo "               
                <input type=\"radio\" name=\"paymethod\" value=\"F\" ";
            // line 426
            if (((isset($context["sRegType"]) ? $context["sRegType"] : null) == "postreg")) {
                echo "disabled";
            }
            echo ">Fellowship
\t\t\t</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th></th>
            ";
            // line 433
            if (($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateID", array()) != "MD")) {
                // line 434
                echo "                <td class=\"additionalInfo2\" style=\"padding-left: 30px;\">
                    Payment by credit card is required. Payment may be done post registration if 
                    the \"To Follow\" box is checked. 
                </td>
          \t";
            } else {
                // line 439
                echo "            \t<td class=\"additionalInfo2\" style=\"padding-left: 30px;\">
                    JPSM Maryland accepts payment by fax or by phone. 
                </td>
            ";
            }
            // line 443
            echo "\t\t</tr>
\t\t
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t
\t\t</tbody>\t\t\t\t
\t</table>

\t<cfoutput>
\t<table id=\"registration-form\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th colspan=\"2\">";
            // line 454
            echo twig_escape_filter($this->env, (isset($context["buttontitle"]) ? $context["buttontitle"] : null), "html", null, true);
            echo ":</th>
\t\t\t</tr>
\t\t</thead>
\t\t
\t\t<tbody>
\t  \t";
            // line 459
            if ((isset($context["bDisplayGeneral"]) ? $context["bDisplayGeneral"] : null)) {
                echo "\t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t<th align=\"left\">Comments:</th>
\t\t\t\t<td style=\"width: 100%;\">
\t\t\t\t  \t<textarea rows=\"3\" name=\"Comments\" cols=\"50\" wrap=\"virtual\" style=\"width: 98%;\"></textarea>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            // line 466
            echo "\t
        \t\t
\t\t<tr>
        \t<td colspan=\"2\">
        \t<br>
        \t";
            // line 471
            if (($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "earlydiscount", array()) == "1")) {
                echo " 
\t\t\t\t<b>Early Payment Discount</b>
\t\t\t\t<br>
\t\t\t\tRegistrants will receive a fee discount if payment is made by 
\t\t\t\t<b>";
                // line 475
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "earlydiscountdate", array()), "date", array()), "m/d/Y"), "html", null, true);
                echo "</b>.
\t\t\t\tPlease note that not all courses have a discounted rate. 
\t\t\t\tThe early payment discounted fees are 
\t\t\t\t<b>\$";
                // line 478
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_full_earlydiscount", array()), 0), "html", null, true);
                echo "</b> for participants, 
\t\t\t\t<b>\$";
                // line 479
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_affiliate_earlydiscount", array()), 0), "html", null, true);
                echo "</b> for sponsors/affiliates, 
\t\t\t\tand <b>\$";
                // line 480
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "cost_student_earlydiscount", array()), 0), "html", null, true);
                echo "</b> for full-time university students.
\t\t\t\t\t<br><br>\t\t\t
\t\t\t";
            }
            // line 483
            echo "                <b>Online registration is required.</b> The web generated registration number does 
                not indicate acceptance into the course. Confirmation of registration and 
                instructions will be sent after the registration form has been processed. 
                Registration is not firm until you receive a confirmation email. <b>Payment by credit 
                card is required.</b> ";
            // line 487
            if (($this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "stateID", array()) != "MD")) {
                echo " Post registration payment may be done online using the 
                registration number.";
            }
            // line 488
            echo " Please note registration number. The registration deadline is 
                <b>";
            // line 489
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline", array()), "html", null, true);
            echo "</b>. Payment is required by <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "payduedate", array()), "html", null, true);
            echo "</b> or the registration 
                will be\tcancelled. Please notify JPSM as soon as possible if you need to cancel your 
                registration. You will be fully reimbursed if you cancel by 
                <b>";
            // line 492
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_cancel_fullreimb", array()), "html", null, true);
            echo "</b>. Cancellation <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_cancel_adminfee", array()), "html", null, true);
            echo "</b> 
                will require a \$100 administrative fee, the remainder will be reimbursed. 
                Cancellation on or after <b>";
            // line 494
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_cancel_noreimb", array()), "html", null, true);
            echo "</b> is subject to the full fee 
                amount. Minority Fellowship essays and letters of recommendation, faxed 
                or mailed to the address below, are due <b>";
            // line 496
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "deadline_fellowship", array()), "html", null, true);
            echo "</b>. Fellowship 
                winners will be notified <b>";
            // line 497
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "notification_fellowship", array()), "html", null, true);
            echo "</b>. Questions for this course 
                should be directed to:
                <p>
                    <b>";
            // line 500
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "person", array()), "html", null, true);
            echo "</b><br />                    
                    ";
            // line 501
            echo twig_replace_filter($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "institution", array()), array("," => "<br />"));
            echo "<br />
                    ";
            // line 502
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address1", array()), "html", null, true);
            echo "<br />
                    ";
            // line 503
            if ($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address2", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address2", array()), "html", null, true);
                echo " <br /> ";
            }
            // line 504
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "city", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "state", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "zip", array()), "html", null, true);
            echo " 
                </p>
                <p>
               
                    Phone: ";
            // line 508
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone')->getCallable(), array($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "phone", array()))), "html", null, true);
            echo "<br />
                    Fax: ";
            // line 509
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone')->getCallable(), array($this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "fax", array()))), "html", null, true);
            echo "<br />
                    Email: <a href=\"mailto:";
            // line 510
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "email", array()), "html", null, true);
            echo "</a>
                </p>\t\t
\t\t\t\t
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 514
            echo twig_escape_filter($this->env, (isset($context["buttontitle"]) ? $context["buttontitle"] : null), "html", null, true);
            echo "\" name=\"B1\">&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<input type=\"reset\" value=\"Clear Form\" name=\"B2\">
\t\t\t\t</p>\t\t\t\t\t\t\t
         \t</td>
      \t</tr>
\t\t
\t\t</tbody>
  \t</table>
\t
\t</td>
</tr>
</table>

<input type=\"hidden\" name=\"RegType\" value=\"";
            // line 527
            echo twig_escape_filter($this->env, (isset($context["sRegType"]) ? $context["sRegType"] : null), "html", null, true);
            echo "\" />
<input type=\"hidden\" name=\"CourseID\" value=\"";
            // line 528
            echo twig_escape_filter($this->env, (isset($context["sCourseID"]) ? $context["sCourseID"] : null), "html", null, true);
            echo "\" />
<input type=\"hidden\" name=\"CourseName\" value=\"";
            // line 529
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseInfo"]) ? $context["courseInfo"] : null), "coursename", array()), "html", null, true);
            echo "\" />
</cfoutput>


</form>


";
        }
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  912 => 529,  908 => 528,  904 => 527,  888 => 514,  879 => 510,  875 => 509,  871 => 508,  859 => 504,  853 => 503,  849 => 502,  845 => 501,  841 => 500,  835 => 497,  831 => 496,  826 => 494,  819 => 492,  811 => 489,  808 => 488,  803 => 487,  797 => 483,  791 => 480,  787 => 479,  783 => 478,  777 => 475,  770 => 471,  763 => 466,  752 => 459,  744 => 454,  731 => 443,  725 => 439,  718 => 434,  716 => 433,  704 => 426,  692 => 425,  686 => 424,  678 => 418,  669 => 412,  664 => 410,  656 => 404,  649 => 401,  643 => 398,  639 => 397,  635 => 395,  629 => 393,  625 => 392,  622 => 391,  616 => 388,  612 => 387,  600 => 378,  595 => 375,  593 => 374,  589 => 372,  582 => 369,  576 => 366,  572 => 365,  568 => 364,  565 => 363,  559 => 361,  555 => 360,  550 => 359,  544 => 356,  540 => 355,  536 => 354,  530 => 350,  528 => 349,  517 => 340,  427 => 252,  425 => 251,  421 => 249,  387 => 218,  376 => 216,  372 => 215,  367 => 212,  356 => 210,  352 => 209,  308 => 167,  297 => 166,  293 => 165,  259 => 133,  244 => 132,  240 => 131,  195 => 88,  184 => 86,  180 => 85,  165 => 72,  163 => 71,  143 => 54,  137 => 53,  133 => 52,  129 => 51,  125 => 50,  118 => 45,  115 => 44,  112 => 43,  110 => 42,  107 => 41,  104 => 40,  101 => 39,  99 => 38,  96 => 37,  93 => 36,  90 => 35,  87 => 34,  85 => 33,  75 => 26,  71 => 24,  64 => 19,  62 => 18,  56 => 15,  52 => 13,  48 => 11,  45 => 10,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.twig\" %}
{% block content %}

<script src=\"/templates/register.js\" type=\"text/javascript\" language=\"javascript\"></script>

{% if sRegType==\"postreg\" %}
    {% set formtitle=\"Post Registration Payment\" %}
    {% set buttontitle=\"Submit Payment\" %}
{% else %}
    {% set formtitle=\"JPSM Short Courses - Online Registration\" %}
    {% set buttontitle=\"Submit Registration\" %}
{% endif %}

<div id=\"page-title\">
\t{{ formtitle }}
</div>

{% if courseInfo.webcourse == 0 %}
\t<p class=\"page-error\">
\tOnline registration not currently available for this course.  
\tPlease check back soon.
\t</p>
{% else %}

<form name=\"myForm\" method=\"POST\" action=\"/register_process\" onSubmit=\"return VerifyForm()\">\t
<input type=\"hidden\" name=\"StateID\" value=\"{{ courseInfo.stateID }}\">

<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#888888\" width=\"100%\">
<tr>
 \t<td>
    \t<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" bordercolor=\"#111111\" width=\"100%\">\t\t
        <tr>
    \t\t{% set sInstructors = courseInfo.instructor_1 %}
    \t\t{% if courseInfo.instructor_2 %}
    \t\t{% set sInstructors = sInstructors ~ \", \" ~ courseInfo.instructor_2 %}
    \t\t{% endif %}
    
    \t\t{% if courseInfo.instructor_3 %}
    \t\t{% set sInstructors = sInstructors ~ \", \" ~ courseInfo.instructor_3 %}
    \t\t{% endif %}
    
    \t\t{% if courseInfo.instructor_4 %}
    \t\t{% set sInstructors = sInstructors ~ \", \" ~ courseInfo.instructor_4 %}
    \t\t{% endif %}

            <td colspan=\"2\" align=\"center\" valign=\"top\">
            \t<table border=\"1\" bordercolor=\"##5555aa\" cellpadding=\"0\" cellspacing=\"0\"  width=\"100%\">
                <tr>
                \t<td>
                        <p class=\"course-title\">{{ courseInfo.classdates }}</p>
                        <p class=\"course-title\">{{ courseInfo.coursename }}</p>
                        <p class=\"course-info\">{{ sInstructors }}</p>
                        <p class=\"course-info\">{{ courseInfo.facility }}, {{ courseInfo.location }}</p>
                        <p class=\"course-deadline\">Registration Deadline: {{ courseInfo.deadline }}</p>
                  \t</td>
             \t</tr>
            \t</table>
\t\t\t</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<td colspan=\"2\" align=\"center\" valign=\"top\">
\t\t\t\t<font face=\"Arial\" color=\"FF0000\" size=\"2\"><b>Do not use acronyms or abbreviations</b></font><br>
\t\t\t\t<font face=\"Arial\" color=\"FF0000\" size=\"2\"><b>* </b><font size=\"1\"><b>Required Field</b></font></font>
\t\t\t</td>
       \t</tr>
\t\t  
\t\t</cfoutput> \t\t
        </table>
  
  \t\t{% if bDisplayPersonInfo %}
\t\t<table id=\"registration-form\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\">      
\t\t\t<thead>
            <tr>
              <th colspan=\"2\" >Registrant Information:</th>
            </tr>
\t\t\t</thead>

\t\t\t<tbody>
            <tr>
              \t<th>Prefix:</th>
             \t<td>
\t\t\t\t\t  <select size=\"1\" name=\"Prefix\">
\t\t\t\t\t\t\t<option value=\"\" selected>- select -</option>
                            {% for prefix in prefixes %}
\t\t\t\t\t\t\t\t<option value=\"{{ prefix.pt_name }}\">{{ prefix.pt_name }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t  </select>
\t\t\t\t</td>
            </tr>
\t\t\t<tr>\t\t\t\t
              \t<th>First Name:</th>
              \t<td>
                \t<input type=\"text\" name=\"fname\" size=\"30\" maxlength=\"30\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr> 
            <tr>
              \t<th>Middle Name:</th>
              \t<td><input type=\"text\" name=\"mname\" size=\"30\" maxlength=\"30\"></td>
            </tr> 
\t\t\t<tr>
              \t<th>Last Name:</th>
              \t<td>
                \t<input type=\"text\" name=\"lname\" size=\"30\" maxlength=\"30\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr> \t\t\t\t\t\t
\t\t\t\t\t\t
            <tr>
              \t<th>Agency/Bureau<br />Firm/School:<br /><span class=\"additionalInfo\">(to appear on badge)</span></th>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"agency\" size=\"50\" maxlength=\"200\" required>
                    <span class=\"required\">*</span><br />
\t\t\t\t\t<span class=\"additionalInfo\">Important - Please enter if applicable</span>
\t\t\t\t</td>
            </tr>
            <tr>
             \t<th>Department:</th>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"dept_room\" size=\"50\" maxlength=\"200\"><br />
\t\t\t\t\t<span class=\"additionalInfo\">Important - Please enter if applicable</span>\t\t\t\t\t\t\t
\t\t\t\t</td>
            </tr>
\t\t\t\t\t\t
\t\t\t<tr>
              \t<th>Country:</th>
              \t<td>
\t\t\t  \t\t<select name=\"country\" size=\"1\" onChange=\"changeState()\">
\t\t\t\t\t\t<option value=\"\"></option>\t\t\t\t\t\t\t
\t\t\t\t\t\t{% for country in countries %}
\t\t\t\t\t\t\t<option value=\"{{ country.country_code }}\" {% if country.country_code == \"US\" %}selected{% endif %}>{{ country.country_name }}</option>
\t\t\t\t\t\t{% endfor %}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t</td>
            </tr>\t\t\t
\t\t\t\t\t\t\t\t
            <tr>
              \t<th>Street Address:</th>
             \t<td>
                \t<input type=\"text\" name=\"street1\" size=\"50\" maxlength=\"100\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>
\t\t\t
            <tr>
              \t<th></th>
              \t<td><input type=\"text\" name=\"street2\" size=\"50\" maxlength=\"100\"></td>
            </tr>
\t\t\t
            <tr>
              \t<th>City:</th>
              \t<td>
                \t<input type=\"text\" name=\"city\" size=\"50\" maxlength=\"100\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>
\t\t\t
            <tr>
              \t<th>State/Province:</th>
              \t<td>
\t\t\t\t\t<span id=\"span1\" style=\"display:display;\">
\t\t\t\t\t<select name=\"state\" size=\"1\">
\t\t\t\t\t\t<option value=\"\"></option>\t\t\t\t\t\t\t
\t\t\t\t\t\t{% for state in states %}
\t\t\t\t\t\t\t<option value=\"{{ state.state_id }}\">{{ state.state_name }}</option>
\t\t\t\t\t\t{% endfor %}\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</select></span>
\t\t\t\t\t<span id=\"span2\" style=\"display:none;\"><input type=\"text\" name=\"province\" size=\"20\" maxlength=\"20\"></span>
                    <span class=\"required\">*</span>
\t\t\t\t</td>
            </tr>\t
            <tr>
              \t<th>Postal Code:</th>
              \t<td>
                \t<input type=\"text\" name=\"zip\" size=\"14\" maxlength=\"10\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
            <tr>
              \t<th>Phone Number:</th>
              \t<td>
\t\t\t\t\t<input type=\"text\" name=\"phone\" size=\"14\" maxlength=\"14\" onKeyUp=\"checkNumber(myForm.phone);\" required>
\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\tExt:&nbsp;<input type=\"text\" name=\"ext\" size=\"5\" maxlength=\"10\" onKeyUp=\"checkNumber(myForm.ext);\">
                    <span class=\"required\">*</span>
\t\t\t\t</td>
            </tr>
            <tr>
              \t<th>Fax Number:</th>
              \t<td>
\t\t\t\t<input type=\"text\" name=\"fax\" size=\"14\" maxlength=\"14\" onKeyUp=\"checkNumber(myForm.fax);\">
\t\t\t\t</td>
            </tr>
            <tr>
              \t<th>E-Mail Address:</th>
              \t<td>
                \t<input type=\"email\" name=\"email\" size=\"50\" maxlength=\"100\" required>
                    <span class=\"required\">*</span>
                </td>
            </tr>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            <tr>
              \t<th>Fee Type:</th>
              \t<td>
\t\t\t\t\t<select name=\"studenttype\" onChange=\"SelectFee();\" required>
\t\t\t\t\t\t<option value=\"\">- select -</option>
\t\t\t\t\t\t{% for studenttype in studenttypes %}
\t\t\t\t\t\t\t<option value=\"{{ studenttype.ft_id }}\">{{ studenttype.ft_name }}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>&nbsp;&nbsp;
\t\t\t\t\t<select name=\"affiliation\" style=\"display:none;\">
\t\t\t\t\t\t<option value=\"\">- select sponsor/affiliate -</option>
\t\t\t\t\t\t{% for affiliate in affiliates %}
\t\t\t\t\t\t\t<option value=\"{{ affiliate.aff_id }}\">{{ affiliate.aff_name }}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t<br />
\t\t\t\t\t
\t\t\t\t\t<span id=\"fellowshipInfo\" class=\"additionalInfo2\" style=\"display: none;\">
\t\t\t\t\tThe Joint Program in Survey Methodology strives to increase the number of <br />
                    survey professionals from groups traditionally under-represented in the field. <br />
                    As part of the effort, a limited number of competitive fellowships are available <br />
                    for African-Americans, Hispanic Americans, Latinos, and Native American Indians for <br />
                    the short course. The registrant must be a US citizen or permanent resident. <br />
                    Applicants must complete: 1. The online registration form, 2. A letter of recommendation <br />
                    and 3. A 500 word essay indicating the applicants background and how the course will <br />
                    enhance their chosen career path. The fellowship covers the registration fee, materials <br />
                    to distributed during class and group meals. <br />
                    Please click <a href=\"https://projects.isr.umich.edu/jpsm/info.cfm#fellowships\" target=\"_blank\">here</a> 
                    for additional information.
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t<span id=\"affiliateInfo\" class=\"additionalInfo2\" style=\"display: none;\">
\t\t\t\t\tTo receive the discounted rate your agency must be listed on the sponsor/affiliate<br />
\t\t\t\t\tdrop down box and you must me a regular employee of the sponsor/affiliate. If you do<br />
\t\t\t\t\tnot qualify for the discounted rate then please change your fee type to \"Participant\".<br /> 
\t\t\t\t\tInaccurate registrations will create delays. 
\t\t\t\t\t</span>
\t\t\t\t</td>
            </tr>\t\t\t\t\t\t\t\t

\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t
\t\t\t</tbody>\t\t\t\t\t\t\t\t\t\t\t\t\t
        </table>
    {% endif %}\t\t\t\t

    {% if bDisplayExp %}
          <table id=\"registration-form\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">
\t\t  \t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\">
\t\t\t\t\t\tThe following information will guide the instructors about the experience mix of 
\t\t\t\t\t\tthe students:
\t\t\t\t\t</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t
\t\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>1. How many years have you been in your present position?</td>
\t\t\t\t\t\t<td nowrap=\"nowrap\">
                        \t<input type=\"number\" name=\"PresPosLen\" size=\"30\" maxlength=\"10\">
                            &nbsp;<span class=\"additionalInfo\">(Numeric value only)</span>
                        </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">What is your present title</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"PresTitle\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">How many years have you worked for your present employer (agency)?</td>
\t\t\t\t\t\t<td nowrap=\"nowrap\">
                        \t<input type=\"number\" name=\"PresEmpLen\" size=\"30\" maxlength=\"10\">
                            &nbsp;<span class=\"additionalInfo\">(Numeric value only)</span>                        
                        </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">What were you doing before that?</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select size=\"1\" name=\"PrevPos\">
\t\t\t\t\t\t\t\t<option selected value=\"\">- select -</option>
\t\t\t\t\t\t\t\t<option value=\"In school\">In school</option>
\t\t\t\t\t\t\t\t<option value=\"career unrelated to surveys or economics\">
\t\t\t\t\t\t\t\t\tCareer unrelated to surveys or economics
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t<option value=\"Other\">Other</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t  </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>2. What is your highest level of education?</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select size=\"1\" name=\"EduLevel\">
\t\t\t\t\t\t\t\t<option selected value=\"\">- select -</option>
\t\t\t\t\t\t\t\t<option value=\"BA (BS)\">BA (BS)</option>
\t\t\t\t\t\t\t\t<option value=\"MA (MS)\">MA (MS)</option>
\t\t\t\t\t\t\t\t<option value=\"Other\">Other</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">If &quot;other&quot;, please describe:</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"EduLevelOther\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">In what field?</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"EduField\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"indent\">Have you taken any economics courses?</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"EduEcon\" size=\"30\" maxlength=\"200\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\">3. How will you access the web for material related to this course (if applicable)?</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td  class=\"indent\" colspan=\"2\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"WebAccess1\" value=\"-1\"> Employer's internet&nbsp;&nbsp;
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"WebAccess2\" value=\"-1\"> Home cable or DSL connection&nbsp;&nbsp;
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"WebAccess3\" value=\"-1\"> Home modem connection
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t
\t\t\t</tbody>\t\t\t
          </table>
\t{% endif %}

\t<table id=\"registration-form\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th colspan=\"3\">Payment Information:</th>
\t\t\t</tr>
\t\t</thead>
\t\t
\t\t<tbody>\t
\t\t{% if bDisplayGeneral %}
\t\t\t<tr>
\t\t\t\t<th>Amount:</th>
\t\t\t\t<th class=\"required\">*</th>
\t\t\t\t<td nowrap=\"nowrap\" style=\"width: 100%\">
\t\t\t\t\t<input type=\"radio\" value=\"{{ courseInfo.cost_student }}\" name=\"payamount\">
\t\t\t\t\t\tFull-time Student (\${{ courseInfo.cost_student | number_format(0) }})
\t\t\t\t\t\t{% if sRegType == \"block\" %}&nbsp;x <input type=\"text\" name=\"numFT\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totFT\" size=\"6\" readonly>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t<input type=\"radio\" value=\"{{ courseInfo.cost_affiliate }}\" name=\"payamount\">
\t\t\t\t\t\tSponsor/Affiliate (\${{ courseInfo.cost_affiliate | number_format(0) }})
\t\t\t\t\t\t{% if sRegType == \"block\" %}&nbsp;x <input type=\"text\" name=\"numSP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totSP\" size=\"6\" readonly>
\t\t\t\t\t\t{% endif %}\t\t\t
\t\t\t\t\t\t<input type=\"radio\" value=\"{{ courseInfo.cost_full }}\" name=\"payamount\">
\t\t\t\t\t\tParticipants (\${{ courseInfo.cost_full | number_format(0) }})
\t\t\t\t\t\t{% if sRegType == \"block\" %}&nbsp;x <input type=\"text\" name=\"numP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totP\" size=\"6\" readonly>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if sRegType != \"block\" %}<input type=\"radio\" value=\"0\" name=\"payamount\">
\t\t\t\t\t\tFellowship (\$0)
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t{% if courseInfo.earlydiscount == \"1\" and \"now\" | date('U') < courseInfo.earlydiscountdate.date | date('U') %}
\t\t\t<tr>
\t\t\t<td colspan=3 align=center bgcolor=ffffcc> 
\t\t\t<font color=blue><i>
\t\t\tEarly Payment Discount before and on {{  courseInfo.earlydiscountdate.date | date(\"m/d/Y\") }}
\t\t\t</i></font>
\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th><i></i></th>
\t\t\t\t<th class=\"required\">*</th>
\t\t\t\t<td nowrap=\"nowrap\" style=\"width: 100%\" valign=top><i><font color=blue>
\t\t\t\t\t<input type=\"radio\" value=\"#courseinfo.cost_student_earlydiscount#\" name=\"payamount\" disabled>
\t\t\t\t\t\tFull-time Student \${{ courseInfo.cost_student_earlydiscount | number_format(0) }}
\t\t\t\t\t\t{% if sRegType == \"block\" %}&nbsp;x <input type=\"text\" name=\"numFT\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totFT\" size=\"6\" readonly>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t<input type=\"radio\" value=\"#courseinfo.cost_affiliate_earlydiscount#\" name=\"payamount\" disabled>
\t\t\t\t\t\tSponsor/Affiliate \${{ courseInfo.cost_affiliate_earlydiscount | number_format(0) }}
\t\t\t\t\t\t{% if sRegType == \"block\" %}&nbsp;x <input type=\"text\" name=\"numSP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totSP\" size=\"6\" readonly>
\t\t\t\t\t\t{% endif %}\t\t\t
\t\t\t\t\t\t<input type=\"radio\" value=\"#courseinfo.cost_full_earlydiscount#\" name=\"payamount\" disabled>
\t\t\t\t\t\tParticipants \${{ courseInfo.cost_full_earlydiscount | number_format(0) }}
\t\t\t\t\t\t{% if sRegType == \"block\" %}&nbsp;x <input type=\"text\" name=\"numP\" size=\"2\" readonly> = 
\t\t\t\t\t\t\t<input type=\"text\" name=\"totP\" size=\"6\" readonly>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if sRegType != \"block\" %}<input type=\"radio\" value=\"0\" name=\"payamount\" disabled>
\t\t\t\t\t\tFellowship (\$0)
\t\t\t\t\t{% endif %}
\t\t\t\t\t</font>
\t\t\t\t\t</i>
\t\t\t\t\t<br><br>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t{% endif %}

            \t
\t\t{% else %}\t
    \t<tr>
\t\t\t<th>Amount:</th>
\t\t\t<th class=\"required\"></th>
        \t<td>\$<cfoutput>#confirmcost#</cfoutput></td>
        </tr>\t\t\t
\t\t{% endif %}\t
\t\t\t
\t\t<tr>
\t\t\t<th>Method:</th>
\t\t\t<th class=\"required\">*</th>
\t\t\t<td>
\t\t\t\t<input type=\"radio\" name=\"paymethod\" value=\"TF\" {% if sRegType == \"postreg\" %}disabled{% endif %}> To Follow\t\t\t\t
\t\t\t\t<input type=\"radio\" name=\"paymethod\" value=\"CH\" {% if courseInfo.stateID == \"MD\" %}style=\"display: none;\"{% else %}checked{% endif %}>{% if courseInfo.stateID != \"MD\"%}Pay Now (Credit card payment)&nbsp;&nbsp;{% endif %}               
                <input type=\"radio\" name=\"paymethod\" value=\"F\" {% if sRegType == \"postreg\" %}disabled{% endif %}>Fellowship
\t\t\t</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th></th>
            {% if courseInfo.stateID != \"MD\" %}
                <td class=\"additionalInfo2\" style=\"padding-left: 30px;\">
                    Payment by credit card is required. Payment may be done post registration if 
                    the \"To Follow\" box is checked. 
                </td>
          \t{% else %}
            \t<td class=\"additionalInfo2\" style=\"padding-left: 30px;\">
                    JPSM Maryland accepts payment by fax or by phone. 
                </td>
            {% endif %}
\t\t</tr>
\t\t
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t
\t\t</tbody>\t\t\t\t
\t</table>

\t<cfoutput>
\t<table id=\"registration-form\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th colspan=\"2\">{{ buttontitle }}:</th>
\t\t\t</tr>
\t\t</thead>
\t\t
\t\t<tbody>
\t  \t{% if bDisplayGeneral %}\t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t<th align=\"left\">Comments:</th>
\t\t\t\t<td style=\"width: 100%;\">
\t\t\t\t  \t<textarea rows=\"3\" name=\"Comments\" cols=\"50\" wrap=\"virtual\" style=\"width: 98%;\"></textarea>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}\t
        \t\t
\t\t<tr>
        \t<td colspan=\"2\">
        \t<br>
        \t{% if courseInfo.earlydiscount == \"1\" %} 
\t\t\t\t<b>Early Payment Discount</b>
\t\t\t\t<br>
\t\t\t\tRegistrants will receive a fee discount if payment is made by 
\t\t\t\t<b>{{ courseInfo.earlydiscountdate.date | date(\"m/d/Y\") }}</b>.
\t\t\t\tPlease note that not all courses have a discounted rate. 
\t\t\t\tThe early payment discounted fees are 
\t\t\t\t<b>\${{ courseInfo.cost_full_earlydiscount | number_format(0) }}</b> for participants, 
\t\t\t\t<b>\${{ courseInfo.cost_affiliate_earlydiscount | number_format(0) }}</b> for sponsors/affiliates, 
\t\t\t\tand <b>\${{ courseInfo.cost_student_earlydiscount | number_format(0) }}</b> for full-time university students.
\t\t\t\t\t<br><br>\t\t\t
\t\t\t{% endif %}
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
                </p>\t\t
\t\t\t\t
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" value=\"{{ buttontitle }}\" name=\"B1\">&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<input type=\"reset\" value=\"Clear Form\" name=\"B2\">
\t\t\t\t</p>\t\t\t\t\t\t\t
         \t</td>
      \t</tr>
\t\t
\t\t</tbody>
  \t</table>
\t
\t</td>
</tr>
</table>

<input type=\"hidden\" name=\"RegType\" value=\"{{ sRegType }}\" />
<input type=\"hidden\" name=\"CourseID\" value=\"{{ sCourseID }}\" />
<input type=\"hidden\" name=\"CourseName\" value=\"{{ courseInfo.coursename }}\" />
</cfoutput>


</form>


{% endif %}
{% endblock %}
";
    }
}
