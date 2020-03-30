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

/* /var/www/html/dobro/themes/dobro/partials/site/footer.htm */
class __TwigTemplate_c7bb5b4b270d687edc4403f5a7259f2c9f370217ef7dbd920201d024f3162066 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-1 col-xs-3 col-sm-2 logo \"><a href=\"#\"><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\"  / style=\"width: 110px;\"></a></div>
        <div class=\"col-lg-8 col-xs-9 col-sm-5 \">Copyrights 2020, Kundoluk</div>
        <div class=\"col-lg-3 col-xs-12 col-sm-5 sociconcent\">
            <ul class=\"socialicons\">
                <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                 <li><a href=\"#\"><i class=\"fa fa-whatsapp\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-1 col-xs-3 col-sm-2 logo \"><a href=\"#\"><img src=\"{{'assets/images/logo.png'|theme}}\" alt=\"\"  / style=\"width: 110px;\"></a></div>
        <div class=\"col-lg-8 col-xs-9 col-sm-5 \">Copyrights 2020, Kundoluk</div>
        <div class=\"col-lg-3 col-xs-12 col-sm-5 sociconcent\">
            <ul class=\"socialicons\">
                <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                 <li><a href=\"#\"><i class=\"fa fa-whatsapp\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
            </ul>
        </div>
    </div>
</div>", "/var/www/html/dobro/themes/dobro/partials/site/footer.htm", "");
    }
}
