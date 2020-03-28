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

/* /var/www/html/dobro/themes/dobro/partials/meta.htm */
class __TwigTemplate_1586b6c5a8cec87575a39f94b98b6adcca5a516cf2098cdccc78fbe1902b399f extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<title>Күндолүк - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>


<!-- made by www.metatags.org -->
<meta name=\"description\" content=\"Күндолүк Добро\" />
<meta name=\"keywords\" content=\"Күндолүк, Добро\" />
<meta name=\"author\" content=\"metatags generator\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"revisit-after\" content=\"3 month\">
<!--  -->
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:site_name\" content=\"Күндолүк Добро\">
<meta property=\"og:title\" content=\"Күндолүк Добро\">
<meta property=\"og:image\" content=\"\">
<meta property=\"image_src\" content=\"\">
<meta property=\"og:url\" content=\"\">
<meta property=\"og:description\" content=\"Күндолүк Добро\">


<!-- core CSS -->
 <!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<link href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/custom.css", 2 => "assets/css/style.css", 3 => "assets/rs-plugin/css/settings.css", 4 => "assets/sweetalert/sweetalert.min.css"]);
        // line 37
        echo ".css\" rel=\"stylesheet\">

";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 39,  72 => 37,  70 => 29,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<title>Күндолүк - {{ this.page.title }}</title>


<!-- made by www.metatags.org -->
<meta name=\"description\" content=\"Күндолүк Добро\" />
<meta name=\"keywords\" content=\"Күндолүк, Добро\" />
<meta name=\"author\" content=\"metatags generator\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"revisit-after\" content=\"3 month\">
<!--  -->
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:site_name\" content=\"Күндолүк Добро\">
<meta property=\"og:title\" content=\"Күндолүк Добро\">
<meta property=\"og:image\" content=\"\">
<meta property=\"image_src\" content=\"\">
<meta property=\"og:url\" content=\"\">
<meta property=\"og:description\" content=\"Күндолүк Добро\">


<!-- core CSS -->
 <!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<link href=\"{{ [ 
  
  'assets/css/bootstrap.min.css',
  'assets/css/custom.css',
  'assets/css/style.css',
  'assets/rs-plugin/css/settings.css',
  'assets/sweetalert/sweetalert.min.css'

  ] |theme }}.css\" rel=\"stylesheet\">

{% styles %}", "/var/www/html/dobro/themes/dobro/partials/meta.htm", "");
    }
}
