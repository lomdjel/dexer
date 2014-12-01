<?php

/* ::Demenagement/header.html.twig */
class __TwigTemplate_e21b1fbabbbeb9d86063af4047563c5201170cd5a9ce6e23121d37926b4b4f79 extends Twig_Template
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
        echo "<!-- Header starts -->

\t<header>
\t   <div class=\"container\">
\t      <div class=\"row\">
\t         <div class=\"col-md-4 col-sm-4\">
\t            <!-- Logo and site link -->
\t            <div class=\"logo\">
\t               <h1><a href=\"index.html\">Dexer<span class=\"color\">.</span></a></h1>
\t            </div>
\t         </div>
\t         <div class=\"col-md-4 col-sm-4 col-sm-offset-4 col-md-offset-4\">
\t            <div class=\"list\">
\t               <!-- Add your phone number here -->
\t               <div class=\"phone\">
\t                  <i class=\"fa fa-phone\"></i> Phone: 123-456-7890
\t               </div>
\t               <hr />
\t               <!-- Add your email id here -->
\t               <div class=\"email\">
\t                  <i class=\"fa fa-envelope-o\"></i> Email: someting@gmail.com
\t               </div>
\t               <hr />
\t               <!-- Add your address here -->
\t               <div class=\"address\">
\t                  <i class=\"fa fa-home\"></i> Address: 12, Srtington Street, NY
\t               </div>
\t            </div>
\t         </div>
\t      </div>
\t   </div>
\t</header>
\t
\t<!-- Header ends -->
\t
\t<!-- Navigation Starts -->
\t\t<!-- Note down the syntax before editing. It is the default twitter bootstrap navigation -->
\t\t<div class=\"navbar bs-docs-nav\" role=\"banner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
\t\t\t\t<!-- Navigation links starts here -->
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil", array(), ""), "html", null, true);
        echo " <b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<!-- Submenus -->
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home #1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"index1.html\">Home #2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"index2.html\">Home #3</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Navigation with sub menu. Please note down the syntax before you need. Each and every link is important. -->
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Services", array(), ""), "html", null, true);
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<!-- Submenus -->
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"support.html\">Support</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Products</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Register</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>                  
\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"service.html\">Service #1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"service1.html\">Service #2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"pricing.html\">Pricing Table</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"careers.html\">Careers</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"team.html\">Team</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>   
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Commercial", array(), ""), "html", null, true);
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<!-- Submenus -->
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"comingsoon.html\">Coming Soon</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"resume.html\">Resume</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"sitemap.html\">Sitemap</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"process.html\">Process</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"testimonials.html\">Testimonials</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"review.html\">Review</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"project.html\">Project</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"timeline.html\">Timeline</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"full-width.html\">Full Width</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"events.html\">Events</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>   
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Blog", array(), ""), "html", null, true);
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<!-- Submenus -->
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog Main #1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog1.html\">Blog Main #2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog2.html\">Blog Main #3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-ls.html\">Blog Left Sidebar</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-ns.html\">Blog No Sidebar</a></li>                  
\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Single</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 128
        echo "  
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact", array(), ""), "html", null, true);
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<!-- Submenus -->
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact #1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact1.html\">Contact #2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"clients.html\">Clients</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li> 
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t\t<!--/ Navigation Ends -->";
    }

    public function getTemplateName()
    {
        return "::Demenagement/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 130,  139 => 128,  125 => 96,  105 => 79,  72 => 52,  19 => 1,  171 => 57,  166 => 55,  161 => 53,  156 => 51,  152 => 50,  147 => 48,  142 => 46,  138 => 45,  133 => 43,  128 => 41,  124 => 39,  121 => 38,  116 => 35,  108 => 25,  103 => 23,  98 => 21,  93 => 19,  88 => 17,  83 => 15,  78 => 12,  75 => 11,  69 => 5,  61 => 38,  58 => 37,  55 => 36,  50 => 34,  43 => 30,  40 => 29,  38 => 11,  29 => 5,  23 => 1,  322 => 255,  318 => 254,  314 => 253,  310 => 252,  306 => 251,  302 => 250,  280 => 231,  265 => 219,  249 => 206,  233 => 193,  85 => 62,  74 => 40,  63 => 69,  52 => 35,  31 => 5,  28 => 4,);
    }
}
