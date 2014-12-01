<?php

/* ::Delivery/base.html.twig */
class __TwigTemplate_474bd3a1cc881db925e8d1b6aa085a29885555e6266f4610d22ebc406e946cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
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
        <meta content=\"Your description\" name=\"description\">
\t\t<meta content=\"Your,Keywords\" name=\"keywords\">
\t\t<meta content=\"ResponsiveWebInc\" name=\"author\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <link rel=\"shortcut icon\" href=\"ico/favicon.ico\">
\t\t
\t    <!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">-->
\t    
        
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "        
    </head>
    <body>
    \t";
        // line 44
        $this->env->loadTemplate("::Delivery/header.html.twig")->display($context);
        // line 45
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        ";
        $this->env->loadTemplate("::Delivery/footer.html.twig")->display($context);
        // line 47
        echo "        
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </body>
</html>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        \t<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        \t
        \t<!-- CSS -->
\t\t    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t\t
\t\t    <!-- Resources -->
\t\t    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t    
\t\t    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t    
\t\t    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/css/lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t    
\t\t    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
\t\t    
\t\t    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
\t\t
\t\t    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t    <!--[if lt IE 9]>
\t\t      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t    <![endif]-->
\t\t    
\t\t    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        \t
        ";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "Dexer - Livraison";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "        <!-- Bootstrap core JavaScript
\t\t    ================================================== -->
\t\t    <!-- Placed at the end of the document so the pages load faster -->
\t\t    
\t\t    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t    
\t\t    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t    
\t\t    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/js/scrolltopcontrol.js"), "html", null, true);
        echo "\"></script>
\t\t    
\t\t    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/js/lightbox-2.6.min.js"), "html", null, true);
        echo "\"></script>
\t\t    
\t\t    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t    
\t\t    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/js/index.js"), "html", null, true);
        echo "\"></script>
\t\t ";
    }

    public function getTemplateName()
    {
        return "::Delivery/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  153 => 61,  148 => 59,  143 => 57,  138 => 55,  133 => 53,  127 => 49,  124 => 48,  119 => 45,  113 => 16,  106 => 38,  91 => 26,  86 => 24,  81 => 22,  75 => 19,  68 => 16,  65 => 15,  59 => 65,  57 => 48,  54 => 47,  51 => 46,  48 => 45,  46 => 44,  41 => 41,  39 => 15,  23 => 1,  384 => 329,  367 => 315,  284 => 235,  279 => 233,  274 => 231,  269 => 229,  166 => 129,  109 => 75,  85 => 54,  60 => 32,  31 => 5,  28 => 4,);
    }
}
