<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/dobro/themes/dobro/layouts/login.htm */
class __TwigTemplate_72a8a5c8378eca66b2d18b8332ac930146bf692abb515f8a6c0f17c5d5d62065 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicons/apple-touch-icon.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicons/favicon-32x32.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicons/favicon-16x16.png");
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicons/site.webmanifest");
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicons/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        
        <!-- made by www.metatags.org -->
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"metatags generator\">
        
        <title>Kundoluk</title>
        
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <!--  -->
        
        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/custom.css", 2 => "assets/css/style.css", 3 => "assets/animate.css/animate.min.css"]);
        // line 36
        echo ".css\" rel=\"stylesheet\">

        ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 39
        echo "   </head>
    <body>
            
      
        <div class=\"mt-header-ed header-above\">
              <div class=\"container\">
              
               <div class=\"row\">
               
                <div class=\"col-lg-6 col-xl-6 col-md-12 col-12\">            
                
                 #КүчБирдикте    
                </div>
                
                     <div class=\"col-lg-6 col-xl-6 col-md-12 col-12\">
              
                  #СилаВЕдинстве  
                 </div>                        
                   </div>
              
              </div>
        </div>
        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "        </header>


        <!-- Content -->
        <div>
            ";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 70
        echo "        </div>


         <!-- core JS -->
        <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/sweetalert/sweetalert.min.js"]);
        // line 79
        echo "\"></script>
        ";
        // line 80
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 81
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 82
        echo "
        

        </div>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/layouts/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 82,  153 => 81,  142 => 80,  139 => 79,  137 => 74,  131 => 70,  129 => 69,  122 => 64,  118 => 63,  92 => 39,  89 => 38,  85 => 36,  83 => 30,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{'assets/favicons/apple-touch-icon.png'|theme}}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{'assets/favicons/favicon-32x32.png'|theme}}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{'assets/favicons/favicon-16x16.png'|theme}}\">
        <link rel=\"manifest\" href=\"{{'assets/favicons/site.webmanifest'|theme}}\">
        <link rel=\"mask-icon\" href=\"{{'assets/favicons/safari-pinned-tab.svg'|theme}}\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        
        <!-- made by www.metatags.org -->
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"metatags generator\">
        
        <title>Kundoluk</title>
        
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <!--  -->
        
        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"{{ [ 
          'assets/css/bootstrap.min.css',
          'assets/css/custom.css',
          'assets/css/style.css',
          'assets/animate.css/animate.min.css'

          ] |theme }}.css\" rel=\"stylesheet\">

        {% styles %}
   </head>
    <body>
            
      
        <div class=\"mt-header-ed header-above\">
              <div class=\"container\">
              
               <div class=\"row\">
               
                <div class=\"col-lg-6 col-xl-6 col-md-12 col-12\">            
                
                 #КүчБирдикте    
                </div>
                
                     <div class=\"col-lg-6 col-xl-6 col-md-12 col-12\">
              
                  #СилаВЕдинстве  
                 </div>                        
                   </div>
              
              </div>
        </div>
        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>


        <!-- Content -->
        <div>
            {% page %}
        </div>


         <!-- core JS -->
        <script src=\"{{ [
          'assets/js/jquery.js',
          'assets/js/bootstrap.min.js',
          'assets/sweetalert/sweetalert.min.js'

        ] |theme }}\"></script>
        {% framework extras %}
        {% scripts %}

        

        </div>

    </body>
</html>", "/var/www/html/dobro/themes/dobro/layouts/login.htm", "");
    }
}
