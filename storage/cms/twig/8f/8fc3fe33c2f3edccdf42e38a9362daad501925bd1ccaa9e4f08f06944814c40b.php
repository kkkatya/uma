<?php

/* C:\xampp\htdocs/themes/demo/layouts/umagraphics.htm */
class __TwigTemplate_0eb12ac50defad5148f6081193f558903f9e2675ae9008b88e65d446df72479d extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>Home | UmaGraphics</title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"nileforest\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/favicon.ico");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/favicon.png");
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/favicon.png");
        echo "\">

    <!-- CSS -->
    <link href=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/font-awesome.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/ionicons.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/plugin/sidebar-menu.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/plugin/animate.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/jquery-ui.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

</head>

<body>

    <!-- Preloader -->
    <section id=\"preloader\">
        <div class=\"loader\" id=\"loader\">
            <div class=\"loader-img\"></div>
        </div>
    </section>
    <!-- End Preloader -->
    
        <!-- Site Wraper -->
    <div class=\"wrapper\">

        <!-- HEADER -->
        <header id=\"header\" class=\"header\">
            <div class=\"container\">

                <!-- Logo -->
                <div class=\"logo\">
                    <a href=\"index.html\">
                        <img class=\"logo-light\" src=\"";
        // line 48
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/logo-white.png");
        echo "\" alt=\"Mazel\" />
                        <img class=\"logo-dark\" src=\"";
        // line 49
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/logo-black.png");
        echo "\" alt=\"Mazel\" />
                    </a>
                </div>
                <!-- End Logo -->



                <!-- Navbar Navigation -->
                <div class=\"nav-menu singlepage-nav\">
                    <ul class=\"nav-menu-inner\">
                        <li>
                            <a class=\"\" href=\"#about\">About</a>

                        </li>
                        <li>
                            <a class=\"menu-has-sub\" href=\"#Portfolio\">Portfolio <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"sub-dropdown dropdown\">
                                        <li><a href=\"onepage.html\">Interiors</a></li>
                                        <li><a href=\"onepage-personal.html\">Exteriors</a></li>
                                        <li><a href=\"onepage-video.html\">Amimations</a></li>
                                        <li><a href=\"onepage-youtube.html\">Modeling</a></li>
                                    </ul>

                        </li>
                        
                        <li>
                            <a class=\"\" href=\"#contact-section\">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- End Navbar Navigation -->

            </div>
        </header>
    
    ";
        // line 84
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 85
        echo "    
    <script src=\"";
        // line 86
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery-1.11.2.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 87
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.easing.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 88
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery-ui.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 89
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 90
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.flexslider.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 91
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.fitvids.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 92
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.viewportchecker.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 93
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.stellar.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 94
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/wow.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 95
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.colorbox-min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 96
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/owl.carousel.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 97
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/isotope.pkgd.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 98
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/masonry.pkgd.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 99
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/imagesloaded.pkgd.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 100
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.fs.tipper.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 101
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/mediaelement-and-player.min.js");
        echo "\"></script>
    <script src=\"";
        // line 102
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.validate.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 103
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/theme.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 104
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/sidebar-menu.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 105
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/navigation.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 106
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugin/jquery.singlePageNav.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 107
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/contact-form.js");
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 109
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/map.js");
        echo "\"></script>

    <script type=\"text/javascript\">
        //  Onepage Nav Elements
        \$('.singlepage-nav').singlePageNav({
            offset: 0,
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'current',
            easing: 'swing',
            speed: 750,
            beforeStart: function () {
                if (\$(window).width() < 991) {
                    \$('.singlepage-nav > ul').hide();
                };
            },
            onComplete: function () {
                console.log('done scrolling');
            }
        });
    </script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/demo/layouts/umagraphics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 109,  229 => 107,  225 => 106,  221 => 105,  217 => 104,  213 => 103,  209 => 102,  205 => 101,  201 => 100,  197 => 99,  193 => 98,  189 => 97,  185 => 96,  181 => 95,  177 => 94,  173 => 93,  169 => 92,  165 => 91,  161 => 90,  157 => 89,  153 => 88,  149 => 87,  145 => 86,  142 => 85,  140 => 84,  102 => 49,  98 => 48,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <title>Home | UmaGraphics</title>*/
/*     <meta name="description" content="" />*/
/*     <meta name="keywords" content="" />*/
/*     <meta name="author" content="nileforest">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/*     <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->*/
/* */
/*     <!-- Favicone Icon -->*/
/*     <link rel="shortcut icon" type="image/x-icon" href="{{'assets/img/favicon.ico'|theme}}">*/
/*     <link rel="icon" type="image/png" href="{{'assets/img/favicon.png'|theme}}">*/
/*     <link rel="apple-touch-icon" href="{{'assets/img/favicon.png'|theme}}">*/
/* */
/*     <!-- CSS -->*/
/*     <link href="{{'assets/css/style.css'|theme}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{'assets/css/bootstrap.css'|theme}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{'assets/css/font-awesome.css'|theme}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{'assets/css/ionicons.css'|theme}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{'assets/css/plugin/sidebar-menu.css'|theme}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{'assets/css/plugin/animate.css'|theme}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{'assets/css/jquery-ui.css'|theme}}" rel="stylesheet" type="text/css" />*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <!-- Preloader -->*/
/*     <section id="preloader">*/
/*         <div class="loader" id="loader">*/
/*             <div class="loader-img"></div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End Preloader -->*/
/*     */
/*         <!-- Site Wraper -->*/
/*     <div class="wrapper">*/
/* */
/*         <!-- HEADER -->*/
/*         <header id="header" class="header">*/
/*             <div class="container">*/
/* */
/*                 <!-- Logo -->*/
/*                 <div class="logo">*/
/*                     <a href="index.html">*/
/*                         <img class="logo-light" src="{{'assets/img/logo-white.png'|theme}}" alt="Mazel" />*/
/*                         <img class="logo-dark" src="{{'assets/img/logo-black.png'|theme}}" alt="Mazel" />*/
/*                     </a>*/
/*                 </div>*/
/*                 <!-- End Logo -->*/
/* */
/* */
/* */
/*                 <!-- Navbar Navigation -->*/
/*                 <div class="nav-menu singlepage-nav">*/
/*                     <ul class="nav-menu-inner">*/
/*                         <li>*/
/*                             <a class="" href="#about">About</a>*/
/* */
/*                         </li>*/
/*                         <li>*/
/*                             <a class="menu-has-sub" href="#Portfolio">Portfolio <i class="fa fa-angle-down"></i></a>*/
/*                                 <ul class="sub-dropdown dropdown">*/
/*                                         <li><a href="onepage.html">Interiors</a></li>*/
/*                                         <li><a href="onepage-personal.html">Exteriors</a></li>*/
/*                                         <li><a href="onepage-video.html">Amimations</a></li>*/
/*                                         <li><a href="onepage-youtube.html">Modeling</a></li>*/
/*                                     </ul>*/
/* */
/*                         </li>*/
/*                         */
/*                         <li>*/
/*                             <a class="" href="#contact-section">Contact</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- End Navbar Navigation -->*/
/* */
/*             </div>*/
/*         </header>*/
/*     */
/*     {% page %}*/
/*     */
/*     <script src="{{'assets/js/jquery-1.11.2.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.easing.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/jquery-ui.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/bootstrap.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.flexslider.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.fitvids.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.viewportchecker.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.stellar.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/wow.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.colorbox-min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/owl.carousel.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/isotope.pkgd.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/masonry.pkgd.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/imagesloaded.pkgd.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.fs.tipper.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/mediaelement-and-player.min.js'|theme}}"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.validate.min.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/theme.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/sidebar-menu.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/navigation.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/plugin/jquery.singlePageNav.js'|theme}}" type="text/javascript"></script>*/
/*     <script src="{{'assets/js/contact-form.js'|theme}}" type="text/javascript"></script>*/
/*     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>*/
/*     <script type="text/javascript" src="{{'assets/js/map.js'|theme}}"></script>*/
/* */
/*     <script type="text/javascript">*/
/*         //  Onepage Nav Elements*/
/*         $('.singlepage-nav').singlePageNav({*/
/*             offset: 0,*/
/*             filter: ':not(.external)',*/
/*             updateHash: true,*/
/*             currentClass: 'current',*/
/*             easing: 'swing',*/
/*             speed: 750,*/
/*             beforeStart: function () {*/
/*                 if ($(window).width() < 991) {*/
/*                     $('.singlepage-nav > ul').hide();*/
/*                 };*/
/*             },*/
/*             onComplete: function () {*/
/*                 console.log('done scrolling');*/
/*             }*/
/*         });*/
/*     </script>*/
/* */
/* </body>*/
/* </html>*/
