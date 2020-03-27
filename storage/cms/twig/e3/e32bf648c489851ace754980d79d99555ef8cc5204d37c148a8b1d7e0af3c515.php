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

/* /var/www/html/dobro/themes/dobro/layouts/default.htm */
class __TwigTemplate_7f9af520a4c0c7a78f3171c572b18664e877bc8c69a5a6a4fb9eaa23c9ce4171 extends \Twig\Template
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
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    </head>
    <body>

        <div class=\"container-fluid\">  

            <!-- Slider -->
            <div class=\"tp-banner-container\">
                <div class=\"tp-banner\" >
                    <!-- MAIN IMAGE -->
                    <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide.jpg");
        echo "\"  alt=\"slidebg1\"  class=\"img-responsive\" style=\"width: 100%;\"> 

                </div>

            </div>
            <!-- //Slider -->


        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        </header>

        <!-- Content -->
        <section class=\"content\">
            ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 31
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        </footer>

        <!-- get jQuery from the google apis -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js\"></script>

        
        <!-- core JS -->
        <script src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/rs-plugin/js/jquery.themepunch.plugins.min.js", 1 => "assets/rs-plugin/js/jquery.themepunch.revolution.min.js", 2 => "assets/js/bootstrap.min.js", 3 => "assets/js/sharer.js", 4 => "assets/sweetalert/sweetalert.min.js"]);
        // line 51
        echo "\"></script>
        ";
        // line 52
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
        // line 53
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 54
        echo "
        

        </div>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  118 => 53,  107 => 52,  104 => 51,  102 => 43,  93 => 36,  89 => 35,  83 => 31,  81 => 30,  75 => 26,  71 => 25,  58 => 15,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    
    <head>
        {% partial 'meta' %}
    </head>
    <body>

        <div class=\"container-fluid\">  

            <!-- Slider -->
            <div class=\"tp-banner-container\">
                <div class=\"tp-banner\" >
                    <!-- MAIN IMAGE -->
                    <img src=\"{{'assets/images/slide.jpg'|theme}}\"  alt=\"slidebg1\"  class=\"img-responsive\" style=\"width: 100%;\"> 

                </div>

            </div>
            <!-- //Slider -->


        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section class=\"content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- get jQuery from the google apis -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js\"></script>

        
        <!-- core JS -->
        <script src=\"{{ [
          
          'assets/rs-plugin/js/jquery.themepunch.plugins.min.js',
          'assets/rs-plugin/js/jquery.themepunch.revolution.min.js',
          'assets/js/bootstrap.min.js',
          'assets/js/sharer.js',
          'assets/sweetalert/sweetalert.min.js'

        ] |theme }}\"></script>
        {% framework extras %}
        {% scripts %}

        

        </div>

    </body>
</html>", "/var/www/html/dobro/themes/dobro/layouts/default.htm", "");
    }
}
