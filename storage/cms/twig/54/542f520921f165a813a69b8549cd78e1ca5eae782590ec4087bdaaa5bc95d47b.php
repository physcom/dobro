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

/* /var/www/html/dobro/themes/dobro/pages/profile.htm */
class __TwigTemplate_8c4967e7781555f52bd9ef06978d1590a119445d5d082f26e56ec276bc625fec extends \Twig\Template
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
        echo "<!-- page content -->
<div class=\"post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Профиль</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                            <div class=\"profile_img\">
                                <div id=\"crop-avatar\">
                                    <!-- Current avatar -->
                                    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16)) {
            // line 17
            echo "                                        <img alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"img-responsive avatar-view\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), "html", null, true);
            echo "\" />
                                    ";
        } else {
            // line 19
            echo "                                        <img alt=\"\" class=\"img-responsive avatar-view\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.jpg");
            echo "\" />
                                    ";
        }
        // line 21
        echo "                                   
                                </div>
                            </div>
                            <h3>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>

                            <ul class=\"list-unstyled user_data\">
                                <li><i class=\"fa fa-map-marker user-profile-icon\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 27), "html", null, true);
        echo "</li>
                                <li><i class=\"fa fa-phone\"></i>  ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 28), "html", null, true);
        echo " </li>
                            </ul>
                           
                    
                        </div>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        \t
                        \t<div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
\t\t\t\t\t\t\t\t<ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"\" aria-selected=\"false\">Профиль</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"active\" aria-selected=\"false\">Пожертвования</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane table-responsive fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

\t\t\t\t\t\t\t\t\t<table class=\"data table table-striped no-margin\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Дата</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Имя</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Тема</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Деталь</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"hidden-phone\">Изменить статус</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, false, 62), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 66
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\"><i class=\"fa fa-cloud\"></i>Деталь</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"vertical-align-mid\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i>Изменить статус</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "  
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"profile_title\">
\t\t                                <div class=\"col-md-6\">
\t\t                                    <h2>Изменить профиль</h2>
\t\t                                </div>

\t\t                            </div>
\t\t                            <br />
\t\t                            ";
        // line 85
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate", ["class" => "form-horizontal", "files" => "true"]]);
        echo "

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountName\">Profile Avatar</label>
\t\t                                    <input name=\"avatar\" type=\"file\" class=\"form-control\" id=\"accountAvatar\">
\t\t                                </div>
\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountName\">Name</label>
\t\t                                    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 93), "html", null, true);
        echo "\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountEmail\">Email</label>
\t\t                                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountPhone\">Phone</label>
\t\t                                    <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"accountPhone\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 103), "html", null, true);
        echo "\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountAddress\">Address</label>
\t\t                                    <input name=\"address\" type=\"text\" class=\"form-control\" id=\"accountAddress\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 108), "html", null, true);
        echo "\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountPassword\">New Password</label>
\t\t                                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountPasswordConfirm\">Confirm New Password</label>
\t\t                                    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
\t\t                                </div>

\t\t                                <button type=\"submit\" class=\"btn btn-default\">Save</button>

\t\t                            ";
        // line 123
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
                            
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                            
                            

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/pages/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 123,  205 => 108,  197 => 103,  189 => 98,  181 => 93,  170 => 85,  155 => 72,  140 => 66,  135 => 64,  131 => 63,  127 => 62,  124 => 61,  120 => 60,  85 => 28,  81 => 27,  75 => 24,  70 => 21,  64 => 19,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- page content -->
<div class=\"post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Профиль</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                            <div class=\"profile_img\">
                                <div id=\"crop-avatar\">
                                    <!-- Current avatar -->
                                    {% if user.avatar.path %}
                                        <img alt=\"{{user.name}}\" class=\"img-responsive avatar-view\" src=\"{{ user.avatar.path }}\" />
                                    {% else %}
                                        <img alt=\"\" class=\"img-responsive avatar-view\" src=\"{{ 'assets/images/avatar.jpg'|theme}}\" />
                                    {% endif %}
                                   
                                </div>
                            </div>
                            <h3>{{ user.name}}</h3>

                            <ul class=\"list-unstyled user_data\">
                                <li><i class=\"fa fa-map-marker user-profile-icon\"></i> {{ user.address}}</li>
                                <li><i class=\"fa fa-phone\"></i>  {{ user.phone }} </li>
                            </ul>
                           
                    
                        </div>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        \t
                        \t<div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
\t\t\t\t\t\t\t\t<ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"\" aria-selected=\"false\">Профиль</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"active\" aria-selected=\"false\">Пожертвования</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane table-responsive fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

\t\t\t\t\t\t\t\t\t<table class=\"data table table-striped no-margin\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Дата</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Имя</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Тема</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Деталь</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"hidden-phone\">Изменить статус</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t {% for post in posts %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{post.updated_at|date(\"d.m.Y\")}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{post.author}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{post.title}}</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{ url('/') }}/post/{{post.id}}\"><i class=\"fa fa-cloud\"></i>Деталь</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"vertical-align-mid\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i>Изменить статус</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t {% endfor %}  
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"profile_title\">
\t\t                                <div class=\"col-md-6\">
\t\t                                    <h2>Изменить профиль</h2>
\t\t                                </div>

\t\t                            </div>
\t\t                            <br />
\t\t                            {{ form_ajax('onUpdate',{ class: 'form-horizontal', files: 'true' }) }}

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountName\">Profile Avatar</label>
\t\t                                    <input name=\"avatar\" type=\"file\" class=\"form-control\" id=\"accountAvatar\">
\t\t                                </div>
\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountName\">Name</label>
\t\t                                    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountEmail\">Email</label>
\t\t                                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountPhone\">Phone</label>
\t\t                                    <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"accountPhone\" value=\"{{ user.phone }}\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountAddress\">Address</label>
\t\t                                    <input name=\"address\" type=\"text\" class=\"form-control\" id=\"accountAddress\" value=\"{{ user.address }}\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountPassword\">New Password</label>
\t\t                                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
\t\t                                </div>

\t\t                                <div class=\"form-group\">
\t\t                                    <label for=\"accountPasswordConfirm\">Confirm New Password</label>
\t\t                                    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
\t\t                                </div>

\t\t                                <button type=\"submit\" class=\"btn btn-default\">Save</button>

\t\t                            {{ form_close() }}
                            
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                            
                            

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->", "/var/www/html/dobro/themes/dobro/pages/profile.htm", "");
    }
}
