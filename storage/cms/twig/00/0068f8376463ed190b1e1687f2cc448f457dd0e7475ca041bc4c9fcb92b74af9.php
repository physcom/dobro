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
class __TwigTemplate_86a672d43dc69d2c82cbd85cd637049476523d1767061a43cb4563ec9ab2c40f extends \Twig\Template
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
                           
                            <div class=\"name pb10\"><i class=\"fa fa-user\"></i> : ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 10), "html", null, true);
            echo " </div>
                            <div class=\"address pb10\"><i class=\"fa fa-map-marker\"></i> : ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
                            <div class=\"phone pb10\"><i class=\"fa fa-phone\"></i>: <a href=\"tel:";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "phone", [], "any", false, false, false, 12), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "phone", [], "any", false, false, false, 12), "html", null, true);
            echo "</a></div>
                        </div>
                        <div class=\"posttext pull-right\">
                            <h2>
                                <a href=\"";
            // line 16
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo " 
                                    ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["post"], "approved", [], "any", false, false, false, 17)) {
                // line 18
                echo "                                        <i class=\"fa fa-check-circle approved\" title=\"Фонд: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                echo "\"></i>
                                    ";
            }
            // line 20
            echo "                                </a>
                            </h2>
                            <p>";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 22);
            echo "</p>
                           
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"postinfo pull-left\">
                        <div class=\"comments\">
                            <div class=\"commentbg\">
                                ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCommentCount", [], "any", false, false, false, 30), "html", null, true);
            echo "
                                <div class=\"mark\"></div>
                            </div>

                        </div>
                        <div class=\"views\"><i class=\"fa fa-eye\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "view_count", [], "any", false, false, false, 35), "html", null, true);
            echo "</div>
                        <div class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            // line 36
            echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 36)]);
            echo "</div>                                    
                    </div>
                    <div class=\"postinfobot\">

                        <div class=\"likeblock pull-left\">
                            <a href=\"#\" class=\"up\"><i class=\"fa fa-thumbs-o-up\"></i>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "upvote_count", [], "any", false, false, false, 41), "html", null, true);
            echo "</a>
                        </div>
                        <div class=\"posted pull-left\">
                            <i class=\"fa fa-list-alt\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCategoryTitle", [], "any", false, false, false, 44), "html", null, true);
            echo "
                        </div>
                        <div class=\"gift pull-left\"><i class=\"fa fa-gift\"></i> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
                        <div class=\"next pull-right\">   
                            <!-- Your share button code -->
                            <div class=\"fb-share-button\" 
                              data-href=\"https://dobro.kundoluk.kg/post/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" 
                              data-layout=\"button_count\">
                            </div>                                     
                            <!-- <a href=\"#\" class=\"sharer facebook\" data-sharer=\"facebook\" data-url=\"https://dobro.kundoluk.kg/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                            </a> -->
                            <a href=\"#\" class=\"sharer whatsapp\" data-sharer=\"whatsapp\" data-url=\"https://dobro.kundoluk.kg/post/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 56), "html", null, true);
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
            // line 66
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
        // line 86
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 97
            echo "                            <li><a href=\"";
            echo url("/");
            echo "/category-posts/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 97), "html", null, true);
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getPostCount", [], "any", false, false, false, 97), "html", null, true);
            echo "</span></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
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
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 110), "html", null, true);
        echo " до ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "count", [], "any", false, false, false, 110) * twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 110)), "html", null, true);
        echo " из ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "total", [], "any", false, false, false, 110), "html", null, true);
        echo " записей
        </div>
          <div class=\"col-md-6\">
                ";
        // line 113
        echo twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, false, 113);
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
        return array (  246 => 113,  236 => 110,  223 => 99,  208 => 97,  204 => 96,  192 => 86,  167 => 66,  152 => 56,  146 => 53,  140 => 50,  133 => 46,  128 => 44,  122 => 41,  114 => 36,  110 => 35,  102 => 30,  91 => 22,  87 => 20,  81 => 18,  79 => 17,  71 => 16,  62 => 12,  58 => 11,  54 => 10,  47 => 5,  42 => 4,  37 => 1,);
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
                           
                            <div class=\"name pb10\"><i class=\"fa fa-user\"></i> : {{post.author}} </div>
                            <div class=\"address pb10\"><i class=\"fa fa-map-marker\"></i> : {{post.address}}</div>
                            <div class=\"phone pb10\"><i class=\"fa fa-phone\"></i>: <a href=\"tel:{{post.phone}}\"> {{post.phone}}</a></div>
                        </div>
                        <div class=\"posttext pull-right\">
                            <h2>
                                <a href=\"{{ url('/') }}/post/{{post.id}}\">{{post.title}} 
                                    {% if post.approved %}
                                        <i class=\"fa fa-check-circle approved\" title=\"Фонд: {{post.user.name}}\"></i>
                                    {% endif %}
                                </a>
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
                        <div class=\"time\"><i class=\"fa fa-clock-o\"></i> {{post.created_at|time_diff}}</div>                                    
                    </div>
                    <div class=\"postinfobot\">

                        <div class=\"likeblock pull-left\">
                            <a href=\"#\" class=\"up\"><i class=\"fa fa-thumbs-o-up\"></i>{{post.upvote_count}}</a>
                        </div>
                        <div class=\"posted pull-left\">
                            <i class=\"fa fa-list-alt\"></i> {{post.getCategoryTitle}}
                        </div>
                        <div class=\"gift pull-left\"><i class=\"fa fa-gift\"></i> {{post.user.name}}</div>
                        <div class=\"next pull-right\">   
                            <!-- Your share button code -->
                            <div class=\"fb-share-button\" 
                              data-href=\"https://dobro.kundoluk.kg/post/{{post.id}}\" 
                              data-layout=\"button_count\">
                            </div>                                     
                            <!-- <a href=\"#\" class=\"sharer facebook\" data-sharer=\"facebook\" data-url=\"https://dobro.kundoluk.kg/{{post.id}}\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                            </a> -->
                            <a href=\"#\" class=\"sharer whatsapp\" data-sharer=\"whatsapp\" data-url=\"https://dobro.kundoluk.kg/post/{{post.id}}\"> 
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
                            <li><a href=\"{{ url('/') }}/category-posts/{{category.id}}\">{{ category.title}} <span class=\"badge pull-right\">{{category.getPostCount}}</span></a></li>
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
