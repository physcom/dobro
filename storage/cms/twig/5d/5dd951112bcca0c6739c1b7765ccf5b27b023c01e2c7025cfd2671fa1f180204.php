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

/* /var/www/html/dobro/themes/dobro/pages/fond.htm */
class __TwigTemplate_1483bf40162d2e3e2bc3abb4016dd62d249a50b059246a7eca8320a12613f033 extends \Twig\Template
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
        <div class=\"col-lg-8 col-md-8\">
            <div class=\"table-responsive\">
                <table class=\"data table table-striped no-margin\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th>Дата</th>
                            <th>Имя</th>
                            <th>Тема</th>
                            <th>Фонд</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                         ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "                        <tr>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, false, 18), "d.m.Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td class=\"hidden-phone\">
                           <span class=\"badge badge-info\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                        </td>
                       
                        </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  
                    </tbody>
                </table>
                
            </div>

        </div>
        
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\" style=\"margin:20px 0;\">
              Записи с ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 39), "html", null, true);
        echo " до ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "count", [], "any", false, false, false, 39) * twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 39)), "html", null, true);
        echo " из ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "total", [], "any", false, false, false, 39), "html", null, true);
        echo " записей
        </div>
          <div class=\"col-md-6\">
                ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, false, 42);
        echo "
          </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/pages/fond.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  100 => 39,  85 => 26,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
            <div class=\"table-responsive\">
                <table class=\"data table table-striped no-margin\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th>Дата</th>
                            <th>Имя</th>
                            <th>Тема</th>
                            <th>Фонд</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                         {% for post in posts %}
                        <tr>
                        <td>{{post.updated_at|date(\"d.m.Y\")}}</td>
                        <td>{{post.author}}</td>
                        <td>{{post.title}}</td>
                        <td class=\"hidden-phone\">
                           <span class=\"badge badge-info\">{{post.user.name}}</span>
                        </td>
                       
                        </tr>
                         {% endfor %}  
                    </tbody>
                </table>
                
            </div>

        </div>
        
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\" style=\"margin:20px 0;\">
              Записи с {{ posts.currentPage  }} до {{ posts.count * posts.currentPage }} из {{ posts.total }} записей
        </div>
          <div class=\"col-md-6\">
                {{ posts.render|raw }}
          </div>
    </div>
</div>", "/var/www/html/dobro/themes/dobro/pages/fond.htm", "");
    }
}
