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
class __TwigTemplate_fdec45916b59d539f7d608df30e96a759f82994bad9db67749f112d08cbca906 extends \Twig\Template
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
            <a href=\"/dobro\">Главная</a> <span class=\"diviver\">&gt;</span>  <a href=\"#\">Новая тема</a>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
        \t";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 11
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 12
                echo "\t            <div class=\"mg_comment_message\" style=\"float: left;width: 100%;margin:0 0 30px; \">
\t              <div class=\"alert alert-";
                // line 13
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">
\t                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t                  ";
                // line 15
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
\t              </div>
\t            </div> 
\t         ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 19
        echo "        \t<!-- POST -->
            <div class=\"post\">
            \t ";
        // line 21
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "
                                        <option value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</option>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
                                <input type=\"text\" name=\"phone\" placeholder=\"Введите свой номер телефона\" class=\"form-control\" />
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
        // line 77
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
        return array (  146 => 77,  107 => 40,  96 => 37,  93 => 36,  89 => 35,  72 => 21,  68 => 19,  60 => 15,  55 => 13,  52 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 breadcrumbf\">
            <a href=\"/dobro\">Главная</a> <span class=\"diviver\">&gt;</span>  <a href=\"#\">Новая тема</a>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
        \t{% flash %}
\t            <div class=\"mg_comment_message\" style=\"float: left;width: 100%;margin:0 0 30px; \">
\t              <div class=\"alert alert-{{ type }}\">
\t                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t                  {{ message }}
\t              </div>
\t            </div> 
\t         {% endflash %}
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
                                <input type=\"text\" name=\"phone\" placeholder=\"Введите свой номер телефона\" class=\"form-control\" />
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
