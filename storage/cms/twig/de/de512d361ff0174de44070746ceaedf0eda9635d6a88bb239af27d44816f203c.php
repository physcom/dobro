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

/* /var/www/html/dobro/themes/dobro/pages/new-topic.htm */
class __TwigTemplate_e28a68f077bda88cf6453a76c57641bf9fbc3ecdbab4ac5abaf3f74e89bb5e94 extends \Twig\Template
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
        <div class=\"col-lg-8 breadcrumbf\">
            <a href=\"";
        // line 4
        echo url("/");
        echo "\">Главная</a> <span class=\"diviver\"><i class=\"fa fa-arrow-circle-right\"></i></span>  <a href=\"#\">Новая тема</a>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
        \t
        \t<!-- POST -->
            <div class=\"post\">
            \t ";
        // line 14
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSubmit", ["class" => "form newtopic"]]);
        echo "
               
                    <div class=\"topwrap\">
                        
                        <div class=\"posttext pull-right\">

                            <div>
                                <input type=\"text\" name=\"title\" placeholder=\"Введите название темы\" class=\"form-control\" />
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <select name=\"category_id\" id=\"category\"  class=\"form-control\" >
                                        <option value=\"\" disabled selected>Выберите город</option>
                                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "
                                        <option value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</option>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                       
                                    </select>
                                </div>
                                
                            </div>

                            <div>
                                <textarea name=\"content\" id=\"desc\" placeholder=\"Описание\"  class=\"form-control\" ></textarea>
                            </div>

                            <div>
                                <input type=\"text\" name=\"author\" placeholder=\"Введите ваше имя\" class=\"form-control\" />
                            </div>

                            <div>
                                <input type=\"text\" name=\"address\" placeholder=\"Введите свой адрес\" class=\"form-control\" />
                            </div>

                            <div>
                                <input type=\"text\" name=\"phone\" placeholder=\"Введите свой номер телефона, 0888 00 00 00\" class=\"form-control\" />
                            </div>
                         
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>                              
                    <div class=\"postinfobot\">
                        <div class=\"pull-right postreply\">
                            <div class=\"pull-left smile\"><a href=\"#\"><i class=\"fa fa-smile-o\"></i></a></div>
                            <div class=\"pull-left\"><button type=\"submit\" class=\"btn btn-primary\">Опубликовать</button></div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                ";
        // line 66
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
            </div><!-- POST -->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/pages/new-topic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 66,  90 => 33,  79 => 30,  76 => 29,  72 => 28,  55 => 14,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 breadcrumbf\">
            <a href=\"{{ url('/') }}\">Главная</a> <span class=\"diviver\"><i class=\"fa fa-arrow-circle-right\"></i></span>  <a href=\"#\">Новая тема</a>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
        \t
        \t<!-- POST -->
            <div class=\"post\">
            \t {{ form_ajax('onSubmit',{ class: 'form newtopic'}) }}
               
                    <div class=\"topwrap\">
                        
                        <div class=\"posttext pull-right\">

                            <div>
                                <input type=\"text\" name=\"title\" placeholder=\"Введите название темы\" class=\"form-control\" />
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <select name=\"category_id\" id=\"category\"  class=\"form-control\" >
                                        <option value=\"\" disabled selected>Выберите город</option>
                                        {% for category in categories %}

                                        <option value=\"{{category.id}}\">{{ category.title}}</option>

                                        {% endfor %}
                                       
                                    </select>
                                </div>
                                
                            </div>

                            <div>
                                <textarea name=\"content\" id=\"desc\" placeholder=\"Описание\"  class=\"form-control\" ></textarea>
                            </div>

                            <div>
                                <input type=\"text\" name=\"author\" placeholder=\"Введите ваше имя\" class=\"form-control\" />
                            </div>

                            <div>
                                <input type=\"text\" name=\"address\" placeholder=\"Введите свой адрес\" class=\"form-control\" />
                            </div>

                            <div>
                                <input type=\"text\" name=\"phone\" placeholder=\"Введите свой номер телефона, 0888 00 00 00\" class=\"form-control\" />
                            </div>
                         
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>                              
                    <div class=\"postinfobot\">
                        <div class=\"pull-right postreply\">
                            <div class=\"pull-left smile\"><a href=\"#\"><i class=\"fa fa-smile-o\"></i></a></div>
                            <div class=\"pull-left\"><button type=\"submit\" class=\"btn btn-primary\">Опубликовать</button></div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                {{ form_close() }}
            </div><!-- POST -->
        </div>
    </div>
</div>", "/var/www/html/dobro/themes/dobro/pages/new-topic.htm", "");
    }
}
