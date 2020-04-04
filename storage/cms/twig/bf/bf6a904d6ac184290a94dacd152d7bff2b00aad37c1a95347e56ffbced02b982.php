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
class __TwigTemplate_a3ffb2bbeb635fce48dbd56d2cd38fa43610a6dbe9f7c289cdeedabd71e44657 extends \Twig\Template
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
        <!-- Slider -->
        <!-- <div class=\"tp-banner-container\">
            <div class=\"tp-banner\" >
              
                <a href=\"";
        // line 32
        echo url("/");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide.jpg");
        echo "\"  alt=\"slidebg1\"  class=\"img-responsive\" style=\"width: 100%;\"></a>
                <div class=\"centered\"><h1>Вместе Мы Сила</h1></div> 

            </div>

        </div> -->
        <!-- //Slider -->

        
        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "        </header>

        <!-- Content -->
        <section class=\"content\">
            ";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 49
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "        </footer>

        <!-- core JS -->
        <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.js", 1 => "assets/rs-plugin/js/jquery.themepunch.plugins.min.js", 2 => "assets/rs-plugin/js/jquery.themepunch.revolution.min.js", 3 => "assets/js/bootstrap.min.js", 4 => "assets/js/sharer.js", 5 => "assets/sweetalert/sweetalert.min.js"]);
        // line 65
        echo "\"></script>
        ";
        // line 66
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
        // line 67
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 68
        echo "
        

     

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
        return array (  138 => 68,  134 => 67,  123 => 66,  120 => 65,  118 => 57,  113 => 54,  109 => 53,  103 => 49,  101 => 48,  95 => 44,  91 => 43,  75 => 32,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    
    <head>
        {% partial 'meta' %}
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
        <!-- Slider -->
        <!-- <div class=\"tp-banner-container\">
            <div class=\"tp-banner\" >
              
                <a href=\"{{ url('/') }}\"><img src=\"{{'assets/images/slide.jpg'|theme}}\"  alt=\"slidebg1\"  class=\"img-responsive\" style=\"width: 100%;\"></a>
                <div class=\"centered\"><h1>Вместе Мы Сила</h1></div> 

            </div>

        </div> -->
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

        <!-- core JS -->
        <script src=\"{{ [
          'assets/js/jquery.js',
          'assets/rs-plugin/js/jquery.themepunch.plugins.min.js',
          'assets/rs-plugin/js/jquery.themepunch.revolution.min.js',
          'assets/js/bootstrap.min.js',
          'assets/js/sharer.js',
          'assets/sweetalert/sweetalert.min.js'

        ] |theme }}\"></script>
        {% framework extras %}
        {% scripts %}

        

     

    </body>
</html>", "/var/www/html/dobro/themes/dobro/layouts/default.htm", "");
    }
}
