<?php

/* ::Demenagement/base.html.twig */
class __TwigTemplate_8adb1f2a753ec2f22ffa8155ee5922231a3adb7871296b497904728f81606bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content=\"Your description\" name=\"description\">
\t\t<meta content=\"Your,Keywords\" name=\"keywords\">
\t\t<meta content=\"ResponsiveWebInc\" name=\"author\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        <!-- Favicon -->
        <link rel=\"icon\" rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    <body>
    \t";
        // line 34
        $this->env->loadTemplate("::Demenagement/header.html.twig")->display($context);
        // line 35
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->env->loadTemplate("::Demenagement/footer.html.twig")->display($context);
        // line 37
        echo "        
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Dexer!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        
        \t<!-- Styles -->
\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" >
\t\t\t<!-- Slider CSS -->
\t\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" >
\t\t\t<!-- Pretty Photo -->
\t\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" >
\t\t\t<!-- Font awesome CSS -->
\t\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" >
\t\t\t<!-- Custom CSS -->
\t\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" >
\t\t\t<!-- Color Stylesheet - orange, blue, pink, brown, red or green-->
\t\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/css/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" >
\t\t\t
\t\t\t
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "        \t<!-- Javascript files -->
\t\t\t<!-- jQuery -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Bootstrap JS -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Isotope, Pretty Photo JS -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/jquery.isotope.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Support Page Filter JS -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/filter.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- C Slider JS -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/jquery.cslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/modernizr.custom.28468.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Respond JS for IE8 -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/respond.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- HTML5 Support for IE -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Custom JS -->
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/demenagement/js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t
\t\t\t\t\t\$('#da-slider').cslider({
\t\t\t\t\t\tautoplay\t: true,
\t\t\t\t\t\tinterval : 6000
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t});
\t\t\t</script>
        ";
    }

    public function getTemplateName()
    {
        return "::Demenagement/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 57,  166 => 55,  161 => 53,  156 => 51,  152 => 50,  147 => 48,  142 => 46,  138 => 45,  133 => 43,  128 => 41,  124 => 39,  121 => 38,  116 => 35,  108 => 25,  103 => 23,  98 => 21,  93 => 19,  88 => 17,  83 => 15,  78 => 12,  75 => 11,  69 => 5,  61 => 38,  58 => 37,  55 => 36,  50 => 34,  43 => 30,  40 => 29,  38 => 11,  29 => 5,  23 => 1,  322 => 255,  318 => 254,  314 => 253,  310 => 252,  306 => 251,  302 => 250,  280 => 231,  265 => 219,  249 => 206,  233 => 193,  85 => 48,  74 => 40,  63 => 69,  52 => 35,  31 => 5,  28 => 4,);
    }
}
