<?php

/* payflow.twig */
class __TwigTemplate_a713de42f1f5b6dfba6cadfb2d6b73a1f6eddbfa2707c75fd4072abf3a584acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--- Automatically post the page to PayFlow for credit card processing--->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<body>
    <form name=\"myForm\" method=\"POST\" action=\"https://payflowlink.paypal.com\">

        <!-- The following fields are required: -->
        <input type=\"hidden\" \tname=\"LOGIN\" \tvalue=\"umichisr\">
        <input type=\"hidden\" \tname=\"PARTNER\" \tvalue=\"paypal\">
        <input type=\"hidden\"\tname=\"TYPE\" \tvalue=\"S\">

        <!--- USER1 variable is used to specify silent postback URL 
        <input type=\"hidden\" \tname=\"USER1\" value=\"https://registrations.isr.umich.edu/siapp/paypalcallback\" />--->
\t\t<input type=\"hidden\" \tname=\"USER1\" value=\"http://localhost:8080/paypalcallback\" />

        <!--- USER2 variable is used for paypal user to return 
        <input type=\"hidden\"\tname=\"USER2\" value=\"index.cfm\" />--->

        <!--- Revenue short code --->
        <input type=\"hidden\" \tname=\"COMMENT1\"\t\tvalue=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["COMMENT1"]) ? $context["COMMENT1"] : null), "html", null, true);
        echo "\"/><!-- Revenue shortcode --->

        <!--- Additional info to be display in billing report i.e: name, descr, etc.\t --->
        <input type=\"hidden\" \tname=\"COMMENT2\"\t\tvalue=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["COMMENT2"]) ? $context["COMMENT2"] : null), "html", null, true);
        echo "\"/>

        <input type=\"hidden\" \tname=\"CUSTID\"\t\tvalue=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["CUSTID"]) ? $context["CUSTID"] : null), "html", null, true);
        echo "\" />
        <!---<input type=\"hidden\"\tname=\"AMOUNT\" \t\tvalue=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["AMOUNT"]) ? $context["AMOUNT"] : null), 2), "html", null, true);
        echo "\" />-->
        <input type=\"hidden\"\tname=\"AMOUNT\" \t\tvalue=\"0.01\" />
        <input type=\"hidden\" \tname=\"DESCRIPTION\" \tvalue=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["DESCRIPTION"]) ? $context["DESCRIPTION"] : null), "html", null, true);
        echo "\" />

    \t<!--- Send payment process to PayFlow --->
        <script language=\"javascript\">
            document.myForm.submit();
        </script>

    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "payflow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 27,  54 => 25,  50 => 24,  45 => 22,  39 => 19,  19 => 1,);
    }

    public function getSource()
    {
        return "<!--- Automatically post the page to PayFlow for credit card processing--->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<body>
    <form name=\"myForm\" method=\"POST\" action=\"https://payflowlink.paypal.com\">

        <!-- The following fields are required: -->
        <input type=\"hidden\" \tname=\"LOGIN\" \tvalue=\"umichisr\">
        <input type=\"hidden\" \tname=\"PARTNER\" \tvalue=\"paypal\">
        <input type=\"hidden\"\tname=\"TYPE\" \tvalue=\"S\">

        <!--- USER1 variable is used to specify silent postback URL 
        <input type=\"hidden\" \tname=\"USER1\" value=\"https://registrations.isr.umich.edu/siapp/paypalcallback\" />--->
\t\t<input type=\"hidden\" \tname=\"USER1\" value=\"http://localhost:8080/paypalcallback\" />

        <!--- USER2 variable is used for paypal user to return 
        <input type=\"hidden\"\tname=\"USER2\" value=\"index.cfm\" />--->

        <!--- Revenue short code --->
        <input type=\"hidden\" \tname=\"COMMENT1\"\t\tvalue=\"{{ COMMENT1 }}\"/><!-- Revenue shortcode --->

        <!--- Additional info to be display in billing report i.e: name, descr, etc.\t --->
        <input type=\"hidden\" \tname=\"COMMENT2\"\t\tvalue=\"{{ COMMENT2 }}\"/>

        <input type=\"hidden\" \tname=\"CUSTID\"\t\tvalue=\"{{ CUSTID }}\" />
        <!---<input type=\"hidden\"\tname=\"AMOUNT\" \t\tvalue=\"{{ AMOUNT | number_format(2) }}\" />-->
        <input type=\"hidden\"\tname=\"AMOUNT\" \t\tvalue=\"0.01\" />
        <input type=\"hidden\" \tname=\"DESCRIPTION\" \tvalue=\"{{ DESCRIPTION }}\" />

    \t<!--- Send payment process to PayFlow --->
        <script language=\"javascript\">
            document.myForm.submit();
        </script>

    </form>
</body>
</html>";
    }
}
