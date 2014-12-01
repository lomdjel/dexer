<?php

/* DexerFrontBundle:Delivery:home.html.twig */
class __TwigTemplate_977b09d0ccfb57242de665eb41173be1c444ea91b20badd903693e819332a5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Delivery/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Delivery/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t
    <!-- Wrapper -->
    <div class=\"wrapper\">

      <!-- Home Slider -->
      <div class=\"home-slider\">
        <!-- Carousel -->
        <div id=\"home-slider\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
            <li data-target=\"#home-slider\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#home-slider\" data-slide-to=\"1\"></li>
            <li data-target=\"#home-slider\" data-slide-to=\"2\"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\">
            <!-- Slide #1 -->
            <div class=\"item active\" id=\"item-1\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <h1 class=\"first-child animated slideInDown delay-2\">Powerful Responsive Theme For Business and Personal Projects</h1>
                    <h3 class=\"animated slideInDown delay-3\">Beautiful Theme That Works Out Of The Box</h3>
                    <p class=\"text-muted animated slideInLeft delay-4\">Nulla pretium libero interdum, tempus lorem non, rutrum diam. Quisque pellentesque diam sed pulvinar lobortis. <a href=\"#\" id=\"tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quisque pellentesque diam.\">Vestibulum ante ipsum</a> primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    <a href=\"#\" class=\"btn btn-lg btn-red animated fadeInUpBig delay-5\">Purchase Now</a>
                  </div>
                  <div class=\"col-sm-6 hidden-xs\">
                  \t<img class=\"img-responsive\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/showcase.png"), "html", null, true);
        echo "\" alt=\"...\">
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
            </div> <!-- / .item -->
            <!-- Slide #2 -->
            <div class=\"item\" id=\"item-2\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <ul class=\"lead\">
                      <li class=\"animated slideInLeft delay-2\"><span>Built with Bootstrap 3x</span></li>
                      <li class=\"animated slideInLeft delay-3\"><span>20+ HTML Templates</span></li>
                      <li class=\"animated slideInLeft delay-4\"><span>Isotope Gallery</span></li>
                      <li class=\"animated slideInLeft delay-5\"><span>LESS Files Included</span></li>
                    </ul>
                    <ul class=\"lead string\">
                      <li class=\"animated fadeInUpBig delay-6\"><span>Professional Multi-purpose Theme</span></li>
                      <li class=\"animated fadeInUpBig delay-7\"><span>That Works Out Of The Box</span></li>
                    </ul>
                  </div>
                  <div class=\"col-sm-6 hidden-xs\">
                    <img class=\"img-responsive\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/macbook.png"), "html", null, true);
        echo "\" alt=\"...\">
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->          
            </div> <!-- / .item -->
            <!-- Slide #3 -->
            <div class=\"item\" id=\"item-3\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <h1 class=\"first-child animated slideInDown delay-2\">Fully Packed With Features</h1>
                    <h3 class=\"animated slideInDown delay-3\">Look No Further</h3>
                    <ul>
                      <li class=\"animated slideInLeft delay-4\"><i class=\"fa fa-chevron-circle-right fa-fw\"></i> Built With Bootstrap 3</li>
                      <li class=\"animated slideInLeft delay-5\"><i class=\"fa fa-chevron-circle-right fa-fw\"></i> Fully Responsive Design</li>
                      <li class=\"animated slideInLeft delay-6\"><i class=\"fa fa-chevron-circle-right fa-fw\"></i> Easy to Customize</li>
                      <li class=\"animated slideInLeft delay-7\"><i class=\"fa fa-chevron-circle-right fa-fw\"></i> 20+ HTML Templates</li>
                    </ul>
                    <a href=\"#\" class=\"btn btn-lg btn-red animated fadeInUpBig delay-8\">Purchase Now</a>
                  </div>
                  <div class=\"col-sm-6 hidden-xs\">
                    <img class=\"img-responsive\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/iphone.png"), "html", null, true);
        echo "\" alt=\"...\">
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->            
            </div> <!-- / .item -->
          </div> <!-- / .carousel -->
          <!-- Controls -->
          <a class=\"carousel-arrow carousel-arrow-prev\" href=\"#home-slider\" data-slide=\"prev\">
            <i class=\"fa fa-angle-left\"></i>
          </a>
          <a class=\"carousel-arrow carousel-arrow-next\" href=\"#home-slider\" data-slide=\"next\">
            <i class=\"fa fa-angle-right\"></i>
          </a>
        </div>
      </div> <!-- / .home-slider -->

      <!-- Services -->
      <div class=\"home-services\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12 col-md-7\">
              <ul>
                <li>
                  <i class=\"fa fa-gears\"></i>
                  <p><span>Built with </span> Bootstrap 3</p>
                </li>
                <li>
                  <i class=\"fa fa-flag\"></i>
                  <p>Font Awesome <span>Icons</span></p>
                </li>
                <li>
                  <i class=\"fa fa-picture-o\"></i>
                  <p>Isotope <span>Portfolio</span></p>
                </li>
                <li>
                  <i class=\"fa fa-envelope-o\"></i>
                  <p>24/7 Support <span>by e-mail</span></p>
                </li>
              </ul>
            </div>
            <div class=\"col-md-5 hidden-sm hidden-xs\">
              <p class=\"lead\">Ready-to-go Solution Built with Bootstrap 3</p>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .services -->

      <!-- Browser Showcase -->
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <h2 class=\"first-child text-center\">Paperclip: Multi-purpose Professional Theme</h2>
            <h4 class=\"text-blue text-center\">Perfect for corporate websites and mobile apps.</h4>
            <div class=\"browser-showcase\">
              <img class=\"img-responsive\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/browsers.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Main Services -->
      <div class=\"main-services\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"services\">
                <div class=\"service-item\">
                  <i class=\"fa fa-gear\"></i>
                  <div class=\"service-desc\">
                    <h4>Built With Bootstrap 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class=\"col-sm-4\">
              <div class=\"services\">
                <div class=\"service-item\">
                  <i class=\"fa fa-arrows-alt\"></i>
                  <div class=\"service-desc\">
                    <h4>Responsive Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class=\"col-sm-4\">
              <div class=\"services\">
                <div class=\"service-item\">
                  <i class=\"fa fa-refresh\"></i>
                  <div class=\"service-desc\">
                    <h4>Easy to Customize</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"services\">
                <div class=\"service-item\">
                  <i class=\"fa fa-plus\"></i>
                  <div class=\"service-desc\">
                    <h4>20+ Templates Included</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class=\"col-sm-4\">
              <div class=\"services\">
                <div class=\"service-item\">
                  <i class=\"fa fa-envelope\"></i>
                  <div class=\"service-desc\">
                    <h4>24/7 Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class=\"col-sm-4\">
              <div class=\"services\">
                <div class=\"service-item\">
                  <i class=\"fa fa-picture-o\"></i>
                  <div class=\"service-desc\">
                    <h4>Isotope Gallery</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .main-features -->

      <!-- Responsive Showcase -->
      <div class=\"responsive-showcase\">
        <div class=\"container\">
          <div class=\"responsive-design\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <h2>Fully Responsive Design</h2>
                <p class=\"lead text-muted\">
                  Pellentesque magna turpis, porttitor non leo ac, imperdiet sollicitudin neque. Sed id condimentum quam. Ut dui velit, suscipit et libero vulputate, feugiat vestibulum velit. Integer auctor, orci sit amet tincidunt posuere.
                </p>
                <ul class=\"list-inline hidden-xs\">
                  <li><i class=\"fa fa-mobile text-blue inactive\" data-device=\"#iphone\"></i></li>
                  <li><i class=\"fa fa-tablet text-blue inactive\" data-device=\"#ipad\"></i></li>
                  <li><i class=\"fa fa-laptop text-blue\" data-device=\"#macbook\"></i></li>
                  <li><i class=\"fa fa-desktop text-blue inactive\" data-device=\"#imac\"></i></li>
                </ul>
              </div>
              <div class=\"col-sm-6 hidden-xs\">
              \t<img class=\"img-responsive show\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/macbook.png"), "html", null, true);
        echo "\" alt=\"\" id=\"macbook\">
                
                <img class=\"img-responsive hidden\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/imac.png"), "html", null, true);
        echo "\" alt=\"\" id=\"imac\">
                
                <img class=\"img-responsive hidden\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/ipad.png"), "html", null, true);
        echo "\" alt=\"\" id=\"ipad\">
                
                <img class=\"img-responsive hidden\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/iphone.png"), "html", null, true);
        echo "\" alt=\"\" id=\"iphone\">
              </div>
            </div>
          </div> 
        </div> 
      </div> 

      
      <div class=\"feedbacks\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <h2 class=\"text-center\">What Clients Say About Us</h2>
            </div>
          </div> 
          <div class=\"row\">
            <div class=\"col-sm-6 col-md-4\">
              <div class=\"feedback\">
                <i class=\"fa fa-user fa-2x\"></i>
                <div>
                  <p>
                    In vitae sodales massa. Proin commodo nibh sed nisi placerat facilisis. Fusce fringilla elit ipsum, vitae viverra ligula hendrerit nec.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
              <div class=\"feedback\">
                <i class=\"fa fa-user fa-2x\"></i>
                <div>
                  <p>
                    In vitae sodales massa. Proin commodo nibh sed nisi placerat facilisis. Fusce fringilla elit ipsum, vitae viverra ligula hendrerit nec.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"hidden-sm col-md-4\">
              <div class=\"feedback\">
                <i class=\"fa fa-user fa-2x\"></i>
                <div>
                  <p>
                    In vitae sodales massa. Proin commodo nibh sed nisi placerat facilisis. Fusce fringilla elit ipsum, vitae viverra ligula hendrerit nec.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-sm-6 col-md-6\">
              <div class=\"feedback\">
                <i class=\"fa fa-user fa-2x\"></i>
                <div>
                  <p>
                    Donec dignissim ipsum nec sagittis suscipit. Nullam nibh turpis, faucibus ultrices ullamcorper et, ornare sit amet quam. Etiam adipiscing justo massa, vel elementum felis aliquet quis. Nulla facilisis magna nulla, nec imperdiet felis lacinia et.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-sm-6 col-md-6\">
              <div class=\"feedback\">
                <i class=\"fa fa-user fa-2x\"></i>
                <div>
                  <p>
                    Donec dignissim ipsum nec sagittis suscipit. Nullam nibh turpis, faucibus ultrices ullamcorper et, ornare sit amet quam. Etiam adipiscing justo massa, vel elementum felis aliquet quis. Nulla facilisis magna nulla, nec imperdiet felis lacinia et.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div> 

      
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <h2 class=\"text-center\">Recent Blog Posts</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"blog\">
              <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/photo-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"blog-desc\">
                <h3>
                  <a href=\"blog-post.html\">Sed lacinia suscipit lacus non sodales. Pellentesque lacinia ornare justo eu tincidunt.</a>
                </h3>
                <hr>
                <p class=\"text-muted\">by John Doe</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class=\"btn btn-lg btn-red\" href=\"blog-post.html\">Read More...</a>
              </div>
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"blog\">
            \t<img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/delivery/img/photo-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"blog-desc\">
                <h3>
                  <a href=\"blog-post.html\">Nulla pretium libero interdum, tempus lorem non, rutrum diam. Lorem ipsum dolor sit amet.</a>
                </h3>
                <hr>
                <p class=\"text-muted\">by John Doe</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class=\"btn btn-lg btn-red\" href=\"blog-post.html\">Read More...</a>
              </div>
            </div>
          </div>
        </div>
      </div> 

    </div> 

    
";
    }

    public function getTemplateName()
    {
        return "DexerFrontBundle:Delivery:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 329,  367 => 315,  284 => 235,  279 => 233,  274 => 231,  269 => 229,  166 => 129,  109 => 75,  85 => 54,  60 => 32,  31 => 5,  28 => 4,);
    }
}
