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
class __TwigTemplate_3c3b536e480e399527d11bcd4c4d00a966c3fa07465229b0bebf5ffc4a8dbb6a extends \Twig\Template
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
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/custom.css", 2 => "assets/css/style.css", 3 => "assets/animate.css/animate.min.css"]);
        // line 28
        echo ".css\" rel=\"stylesheet\">

        ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 31
        echo "   </head>
    <body>
            
      
        <!-- Slider -->
        <div class=\"tp-banner-container\">
            <div class=\"tp-banner\" >
                <!-- MAIN IMAGE -->
                <a href=\"";
        // line 39
        echo url("/");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide.jpg");
        echo "\"  alt=\"slidebg1\"  class=\"img-responsive\" style=\"width: 100%;\"></a>
                <div class=\"centered\"><h1>Вместе Мы Сила</h1></div> 

            </div>

        </div>
        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "        </header>


        <!-- Content -->
        <div>
            ";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 54
        echo "        </div>


         <!-- core JS -->
        <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/sweetalert/sweetalert.min.js"]);
        // line 63
        echo "\"></script>
        ";
        // line 64
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
        // line 65
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 66
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
        return array (  131 => 66,  127 => 65,  116 => 64,  113 => 63,  111 => 58,  105 => 54,  103 => 53,  96 => 48,  92 => 47,  79 => 39,  69 => 31,  66 => 30,  62 => 28,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
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
            
      
        <!-- Slider -->
        <div class=\"tp-banner-container\">
            <div class=\"tp-banner\" >
                <!-- MAIN IMAGE -->
                <a href=\"{{ url('/') }}\"><img src=\"{{'assets/images/slide.jpg'|theme}}\"  alt=\"slidebg1\"  class=\"img-responsive\" style=\"width: 100%;\"></a>
                <div class=\"centered\"><h1>Вместе Мы Сила</h1></div> 

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
