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

/* /var/www/html/dobro/themes/dobro/partials/site/header.htm */
class __TwigTemplate_b6c44a2628717117ef7fb2166dcc4e37453fc48da0578ac4f11ef4de8776fa9c extends \Twig\Template
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
        echo "<!-- Nav -->
<div class=\"headernav\">
    <div class=\"container\">
        <div class=\"row\">
            
            
            <div class=\"col-lg-4 search hidden-xs hidden-sm col-md-3\">
                <div class=\"wrap\">
                    <form action=\"#\" method=\"post\" class=\"form\">
                        <div class=\"pull-left txt\"><input type=\"text\" class=\"form-control\" placeholder=\"Поиск по темам\"></div>
                        <div class=\"pull-right\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button></div>
                        <div class=\"clearfix\"></div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-4 col-xs-12 col-sm-5 col-md-4 avt\">
                <div class=\"stnt pull-left\">                            
                    <form action=\"/dobro/new-topic\" method=\"post\" class=\"form\">
                        <button class=\"btn btn-primary\"><i class=\"fa fa-plus\" ></i> Начать новую тему</button>
                    </form>
                </div>
                
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<div class=\"headernav\">
    <div class=\"container\">
        <div class=\"row\">
            
            
            <div class=\"col-lg-4 search hidden-xs hidden-sm col-md-3\">
                <div class=\"wrap\">
                    <form action=\"#\" method=\"post\" class=\"form\">
                        <div class=\"pull-left txt\"><input type=\"text\" class=\"form-control\" placeholder=\"Поиск по темам\"></div>
                        <div class=\"pull-right\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button></div>
                        <div class=\"clearfix\"></div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-4 col-xs-12 col-sm-5 col-md-4 avt\">
                <div class=\"stnt pull-left\">                            
                    <form action=\"/dobro/new-topic\" method=\"post\" class=\"form\">
                        <button class=\"btn btn-primary\"><i class=\"fa fa-plus\" ></i> Начать новую тему</button>
                    </form>
                </div>
                
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>", "/var/www/html/dobro/themes/dobro/partials/site/header.htm", "");
    }
}
