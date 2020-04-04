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
class __TwigTemplate_79d25727d01b0394d7b0fd591946a1f7148beb3ee973763abab65343305213f8 extends \Twig\Template
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
            
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-10\">
            <div class=\"site-branding text-center\">
                <a href=\"";
        // line 7
        echo url("/");
        echo "\" class=\"custom-logo-link\" rel=\"home\">
                    <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" class=\"custom-logo\" alt=\"\" style=\"width: 116px;\">
                </a>                                
                <h1 class=\"site-title\"><a href=\"\" rel=\"home\"></a></h1>
                <p class=\"site-description\">Вместе мы сила</p>
            </div> 
        </div>
            <div class=\"col-lg-4 search col-md-3\">
                <a href=\"";
        // line 15
        echo url("/");
        echo "/fonds\" class=\"btn btn-success\"><i class=\"fa fa-gift\" ></i> Фонды</a>
            </div>
            <div class=\"col-lg-4 col-xs-12 col-sm-5 col-md-4 avt\">
                <div class=\"stnt pull-left\">                            
                    <form action=\"";
        // line 19
        echo url("/");
        echo "/new-topic\" method=\"post\" class=\"form\">
                        <button class=\"btn btn-primary\"><i class=\"fa fa-plus\" ></i> Начать новую тему</button>
                    </form>
                </div>
               
                <div class=\"env pull-left\"><i class=\"fa fa-envelope\"></i></div>

                <div class=\"avatar pull-left dropdown\">
                    <a data-toggle=\"dropdown\" href=\"#\">
                        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 28), "path", [], "any", false, false, false, 28)) {
            // line 29
            echo "                            <img alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"img-circle profile_img\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 29), "path", [], "any", false, false, false, 29), "html", null, true);
            echo "\" />
                        ";
        } else {
            // line 31
            echo "                            <img alt=\"\" class=\"img-circle profile_img\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.jpg");
            echo "\" />
                        ";
        }
        // line 33
        echo "                      
                    </a> <b class=\"caret\"></b>
                    <div class=\"status green\">&nbsp;</div>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 37
        if (($context["user"] ?? null)) {
            // line 38
            echo "                             <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 39
            echo url("/");
            echo "/profile\">
                                    <span>Добро пожаловать, ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "!</span>
                                </a>
                             </li>
                             <br>
                              <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-3\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                                <i class=\"fa fa-sign-out\"></i> Выйти </a>
                              </li>
                        ";
        } else {
            // line 49
            echo "                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-4\" href=\"";
            echo url("/");
            echo "/login\"><i class=\"fa fa-sign-in\"></i> Login</a>
                            </li>
                        ";
        }
        // line 52
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
        return array (  128 => 52,  121 => 49,  109 => 40,  105 => 39,  102 => 38,  100 => 37,  94 => 33,  88 => 31,  80 => 29,  78 => 28,  66 => 19,  59 => 15,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"headernav\">
    <div class=\"container\">
        <div class=\"row\">
            
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-10\">
            <div class=\"site-branding text-center\">
                <a href=\"{{ url('/') }}\" class=\"custom-logo-link\" rel=\"home\">
                    <img src=\"{{'assets/images/logo.png'|theme}}\" class=\"custom-logo\" alt=\"\" style=\"width: 116px;\">
                </a>                                
                <h1 class=\"site-title\"><a href=\"\" rel=\"home\"></a></h1>
                <p class=\"site-description\">Вместе мы сила</p>
            </div> 
        </div>
            <div class=\"col-lg-4 search col-md-3\">
                <a href=\"{{ url('/') }}/fonds\" class=\"btn btn-success\"><i class=\"fa fa-gift\" ></i> Фонды</a>
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
                             <br>
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
