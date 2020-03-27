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

/* /var/www/html/dobro/themes/dobro/pages/home.htm */
class __TwigTemplate_c7adbd7cd14775a2667d36248f68f5d08098fe5844a07fc3ce8a252bc26d94ac extends \Twig\Template
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
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "                <!-- POST -->
                <div class=\"post\">
                    <div class=\"wrap-ut pull-left\">
                        <div class=\"userinfo pull-left\">
                           
                            <div class=\"icons\">
                                <h4>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 11), "html", null, true);
            echo "</h4>
                            </div>
                        </div>
                        <div class=\"posttext pull-right\">
                            <h2>
                                <a href=\"/dobro/post/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</a>
                            </h2>
                            <p>";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 18);
            echo "</p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"postinfo pull-left\">
                        <div class=\"comments\">
                            <div class=\"commentbg\">
                                ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCommentCount", [], "any", false, false, false, 25), "html", null, true);
            echo "
                                <div class=\"mark\"></div>
                            </div>

                        </div>
                        <div class=\"views\"><i class=\"fa fa-eye\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "view_count", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
                        <div class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 31), "d.m.Y H:m"), "html", null, true);
            echo "</div>                                    
                    </div>
                    <div class=\"postinfobot\">

                        <div class=\"likeblock pull-left\">
                            <a href=\"#\" class=\"up\"><i class=\"fa fa-thumbs-o-up\"></i>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "upvote_count", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
                        
                        </div>
                        <div class=\"posted pull-left\"><i class=\"fa fa-map-marker\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCategoryTitle", [], "any", false, false, false, 39), "html", null, true);
            echo "</div>

                        <div class=\"next pull-right\">                                        
                            <a href=\"#\" class=\"sharer\" data-sharer=\"facebook\" data-url=\"http://localhost/dobro/post/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                            </a>
                            <a href=\"#\" class=\"sharer\" data-sharer=\"whatsapp\" data-url=\"http://localhost/dobro/post/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"> 
                                <i class=\"fa fa-whatsapp\" ></i>
                            </a>
                        
                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                </div><!-- POST -->
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                   <!-- POST -->
                    <div class=\"post\">
                        <div class=\"wrap-ut pull-left\">
                            <div class=\"userinfo pull-left\">
                                <div class=\"avatar\">
                                    <div class=\"status green\">&nbsp;</div>
                                </div>

                                <div class=\"icons\">
                                    <img src=\"images/icon1.jpg\" alt=\"\" /><img src=\"images/icon4.jpg\" alt=\"\" />
                                </div>
                            </div>
                            <div class=\"posttext pull-left\">
                                <h2><a href=\"02_topic.html\">10 Kids Unaware of Their Halloween Costume</a></h2>
                                <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div><!-- POST -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        </div>
        <div class=\"col-lg-4 col-md-4\">

            <!-- -->
            <div class=\"sidebarblock\">
                <h3>Категориялар</h3>
                <div class=\"divline\"></div>
                <div class=\"blocktxt\">
                    <ul class=\"cats\">
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 86
            echo "                            <li><a href=\"/dobro/category-posts/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 86), "html", null, true);
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getPostCount", [], "any", false, false, false, 86), "html", null, true);
            echo "</span></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\" style=\"margin:20px 0;\">
              Записи с ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 99), "html", null, true);
        echo " до ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "count", [], "any", false, false, false, 99) * twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 99)), "html", null, true);
        echo " из ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "total", [], "any", false, false, false, 99), "html", null, true);
        echo " записей
        </div>
          <div class=\"col-md-6\">
                ";
        // line 102
        echo twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, false, 102);
        echo "
          </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 102,  200 => 99,  187 => 88,  174 => 86,  170 => 85,  158 => 75,  133 => 55,  118 => 45,  112 => 42,  106 => 39,  100 => 36,  92 => 31,  88 => 30,  80 => 25,  70 => 18,  63 => 16,  55 => 11,  47 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
            {% for post in posts %}
                <!-- POST -->
                <div class=\"post\">
                    <div class=\"wrap-ut pull-left\">
                        <div class=\"userinfo pull-left\">
                           
                            <div class=\"icons\">
                                <h4>{{post.author}}</h4>
                            </div>
                        </div>
                        <div class=\"posttext pull-right\">
                            <h2>
                                <a href=\"/dobro/post/{{post.id}}\">{{post.title}}</a>
                            </h2>
                            <p>{{post.content|raw}}</p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"postinfo pull-left\">
                        <div class=\"comments\">
                            <div class=\"commentbg\">
                                {{post.getCommentCount}}
                                <div class=\"mark\"></div>
                            </div>

                        </div>
                        <div class=\"views\"><i class=\"fa fa-eye\"></i> {{post.view_count}}</div>
                        <div class=\"time\"><i class=\"fa fa-clock-o\"></i> {{post.created_at|date(\"d.m.Y H:m\")}}</div>                                    
                    </div>
                    <div class=\"postinfobot\">

                        <div class=\"likeblock pull-left\">
                            <a href=\"#\" class=\"up\"><i class=\"fa fa-thumbs-o-up\"></i>{{post.upvote_count}}</a>
                        
                        </div>
                        <div class=\"posted pull-left\"><i class=\"fa fa-map-marker\"></i> {{post.getCategoryTitle}}</div>

                        <div class=\"next pull-right\">                                        
                            <a href=\"#\" class=\"sharer\" data-sharer=\"facebook\" data-url=\"http://localhost/dobro/post/{{post.id}}\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                            </a>
                            <a href=\"#\" class=\"sharer\" data-sharer=\"whatsapp\" data-url=\"http://localhost/dobro/post/{{post.id}}\"> 
                                <i class=\"fa fa-whatsapp\" ></i>
                            </a>
                        
                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                </div><!-- POST -->
            {% else %}
                   <!-- POST -->
                    <div class=\"post\">
                        <div class=\"wrap-ut pull-left\">
                            <div class=\"userinfo pull-left\">
                                <div class=\"avatar\">
                                    <div class=\"status green\">&nbsp;</div>
                                </div>

                                <div class=\"icons\">
                                    <img src=\"images/icon1.jpg\" alt=\"\" /><img src=\"images/icon4.jpg\" alt=\"\" />
                                </div>
                            </div>
                            <div class=\"posttext pull-left\">
                                <h2><a href=\"02_topic.html\">10 Kids Unaware of Their Halloween Costume</a></h2>
                                <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div><!-- POST -->
            {% endfor %}

        </div>
        <div class=\"col-lg-4 col-md-4\">

            <!-- -->
            <div class=\"sidebarblock\">
                <h3>Категориялар</h3>
                <div class=\"divline\"></div>
                <div class=\"blocktxt\">
                    <ul class=\"cats\">
                        {% for category in categories %}
                            <li><a href=\"/dobro/category-posts/{{category.id}}\">{{ category.title}} <span class=\"badge pull-right\">{{category.getPostCount}}</span></a></li>
                        {% endfor %}
                    
                    </ul>
                </div>
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
</div>", "/var/www/html/dobro/themes/dobro/pages/home.htm", "");
    }
}
