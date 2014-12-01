<?php

/* DexerFrontBundle:Default:home.html.twig */
class __TwigTemplate_2325eeb506829d95099a5c99b51491bee2bb0de2a540de2242816940dcc07a90 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta charset=\"utf-8\">
  <title>Demo Page</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"author\" content=\"\">

  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src=\"js/html5shim.js\"></script>
  <![endif]-->
\t\t
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <!-- Stylesheets -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/css/font-awesome.css"), "html", null, true);
        echo "\">
  <!--[if IE 7]>
  <link rel=\"stylesheet\" href=\"style/font-awesome-ie7.css\">
  <![endif]-->\t\t
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Favicon -->
  <link rel=\"shortcut icon\" href=\"img/favicon/favicon.png\">
</head>

<body>
\t
\t<div class=\"main\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"span12\">
\t\t\t<br />
            <h1>Chandler - Awesome Bootstrap Theme</h1>
            
\t\t\t<br />
      
        <br />
         
        
         </div>
      </div>


      <div class=\"row\">
        <div class=\"span6\">
\t\t
\t\t
 

          <div class=\"block\">
            <!-- 
            <a href=\"http://responsivewebinc.com/premium/chandler151/single\" target=\"_blank\">
              <img src=\"img/single.png\" alt=\"\" />
            </a>
             -->  
            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("_demenagement");
        echo "\">
            \t<img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/img/single.png"), "html", null, true);
        echo "\" alt=\"Demenagement\" />
            </a>           
          </div>  
\t\t  
\t\t  
\t\t</div>
\t\t
\t\t<div class=\"span6\">
\t\t


          <div class=\"block\">
            <!-- 
            <a href=\"http://responsivewebinc.com/premium/chandler151/multi\" target=\"_blank\">
              <img src=\"img/multi.png\" alt=\"\" />
            </a>
             -->
            <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("_delivery");
        echo "\">
            \t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/img/multi.png"), "html", null, true);
        echo "\" alt=\"Livraison / Messagerie\" />
            </a>            
          </div>
\t\t
\t\t
\t\t</div>
\t  </div>

     



          

      

   </div> 
</div>
\t

\t<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/default/js/jquery.anchor.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('.small-block a, .shot img, .block img').hover(function(){
\t      \$(this).animate({opacity: 0.8});
\t   },
\t   function(){
\t      \$(this).animate({opacity:1});
\t   \t}
\t   );
\t});
</script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "DexerFrontBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 103,  149 => 102,  145 => 101,  122 => 81,  118 => 80,  98 => 63,  94 => 62,  55 => 26,  51 => 25,  44 => 21,  40 => 20,  19 => 1,);
    }
}
