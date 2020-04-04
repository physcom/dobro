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
        echo "<div class=\"headernav\">
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
                    <form action=\"";
        // line 17
        echo url("/");
        echo "/new-topic\" method=\"post\" class=\"form\">
                        <button class=\"btn btn-primary\"><i class=\"fa fa-plus\" ></i> Начать новую тему</button>
                    </form>
                </div>
                <div class=\"env pull-left\"><i class=\"fa fa-envelope\"></i></div>

                <div class=\"avatar pull-left dropdown\">
                    <a data-toggle=\"dropdown\" href=\"#\">
                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 25), "path", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            <img alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"img-circle profile_img\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 26), "path", [], "any", false, false, false, 26), "html", null, true);
            echo "\" />
                        ";
        } else {
            // line 28
            echo "                            <img alt=\"\" class=\"img-circle profile_img\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.jpg");
            echo "\" />
                        ";
        }
        // line 30
        echo "                      
                    </a> <b class=\"caret\"></b>
                    <div class=\"status green\">&nbsp;</div>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 34
        if (($context["user"] ?? null)) {
            // line 35
            echo "                             <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 36
            echo url("/");
            echo "/profile\">
                                    <span>Добро пожаловать, ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "!</span>
                                </a>
                             </li>
                              <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-3\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                                <i class=\"fa fa-sign-out\"></i> Выйти </a>
                              </li>
                        ";
        } else {
            // line 45
            echo "                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-4\" href=\"";
            echo url("/");
            echo "/login\"><i class=\"fa fa-sign-in\"></i> Login</a>
                            </li>
                        ";
        }
        // line 48
        echo "                    </ul>
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 48,  108 => 45,  97 => 37,  93 => 36,  90 => 35,  88 => 34,  82 => 30,  76 => 28,  68 => 26,  66 => 25,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"headernav\">
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
                    <form action=\"{{ url('/') }}/new-topic\" method=\"post\" class=\"form\">
                        <button class=\"btn btn-primary\"><i class=\"fa fa-plus\" ></i> Начать новую тему</button>
                    </form>
                </div>
                <div class=\"env pull-left\"><i class=\"fa fa-envelope\"></i></div>

                <div class=\"avatar pull-left dropdown\">
                    <a data-toggle=\"dropdown\" href=\"#\">
                        {% if user.avatar.path %}
                            <img alt=\"{{user.name}}\" class=\"img-circle profile_img\" src=\"{{ user.avatar.path }}\" />
                        {% else %}
                            <img alt=\"\" class=\"img-circle profile_img\" src=\"{{'assets/images/avatar.jpg'|theme}}\" />
                        {% endif %}
                      
                    </a> <b class=\"caret\"></b>
                    <div class=\"status green\">&nbsp;</div>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        {% if user %}
                             <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ url('/') }}/profile\">
                                    <span>Добро пожаловать, {{ user.name}}!</span>
                                </a>
                             </li>
                              <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-3\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                                <i class=\"fa fa-sign-out\"></i> Выйти </a>
                              </li>
                        {% else %}
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-4\" href=\"{{ url('/') }}/login\"><i class=\"fa fa-sign-in\"></i> Login</a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
                           
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>", "/var/www/html/dobro/themes/dobro/partials/site/header.htm", "");
    }
}
