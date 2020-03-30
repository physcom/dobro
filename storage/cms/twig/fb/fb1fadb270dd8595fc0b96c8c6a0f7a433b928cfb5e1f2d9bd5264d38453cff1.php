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

<!--  -->
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:site_name\" content=\"Күндолүк Добро\">

<meta property=\"og:image\" content=\"\">
<meta property=\"image_src\" content=\"\">


";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 13)) {
            // line 14
            echo "   <title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
            echo " - Күндолүк </title>
   <meta name=\"title\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "\">   
   <meta name=\"description\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 16), "html", null, true);
            echo "\" />
   <meta property=\"og:title\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
   <meta property=\"og:description\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
   <meta property=\"og:url\" content=\"";
            // line 19
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">

";
        } else {
            // line 22
            echo "   <title>Күндолүк - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</title>
   <meta name=\"title\" content=\"Күндолүк - ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "\" />
   <meta name=\"description\" content=\"Күндолүк Добро\" />
   <meta property=\"og:title\" content=\"Күндолүк Добро\">
   <meta property=\"og:description\" content=\"Күндолүк Добро\">
   <meta property=\"og:url\" content=\"\">

";
        }
        // line 30
        echo "<!-- made by www.metatags.org -->
<meta name=\"description\" content=\"Күндолүк Добро\" />
<meta name=\"keywords\" content=\"Күндолүк, Добро\" />
<meta name=\"author\" content=\"metatags generator\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"revisit-after\" content=\"3 month\">



<!-- core CSS -->
 <!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!-- Load Facebook SDK for JavaScript -->
  <div id=\"fb-root\"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<link href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/custom.css", 2 => "assets/css/style.css", 3 => "assets/rs-plugin/css/settings.css", 4 => "assets/sweetalert/sweetalert.min.css"]);
        // line 62
        echo ".css\" rel=\"stylesheet\">

";
        // line 64
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
        return array (  129 => 64,  125 => 62,  123 => 54,  97 => 30,  87 => 23,  82 => 22,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!--  -->
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:site_name\" content=\"Күндолүк Добро\">

<meta property=\"og:image\" content=\"\">
<meta property=\"image_src\" content=\"\">


{% if post.title %}
   <title>{{ post.title }} - Күндолүк </title>
   <meta name=\"title\" content=\"{{ post.title }}\">   
   <meta name=\"description\" content=\"{{ post.content }}\" />
   <meta property=\"og:title\" content=\"{{ post.title }}\">
   <meta property=\"og:description\" content=\"{{ post.content }}\">
   <meta property=\"og:url\" content=\"{{ url('/') }}/post/{{post.id}}\">

{% else %}
   <title>Күндолүк - {{ this.page.title }}</title>
   <meta name=\"title\" content=\"Күндолүк - {{ this.page.title }}\" />
   <meta name=\"description\" content=\"Күндолүк Добро\" />
   <meta property=\"og:title\" content=\"Күндолүк Добро\">
   <meta property=\"og:description\" content=\"Күндолүк Добро\">
   <meta property=\"og:url\" content=\"\">

{% endif %}
<!-- made by www.metatags.org -->
<meta name=\"description\" content=\"Күндолүк Добро\" />
<meta name=\"keywords\" content=\"Күндолүк, Добро\" />
<meta name=\"author\" content=\"metatags generator\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"revisit-after\" content=\"3 month\">



<!-- core CSS -->
 <!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!-- Load Facebook SDK for JavaScript -->
  <div id=\"fb-root\"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

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
