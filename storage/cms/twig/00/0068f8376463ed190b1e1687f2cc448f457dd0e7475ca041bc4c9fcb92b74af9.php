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
        echo "<script type=\"text/javascript\">
  
  function upVote(post_id){
    console.log(\"Post id \", post_id);
    swal({
      title: \"Вы уверены?\",
      text: \"Вы собираетесь поднять голос!\",
      type: \"info\",
      showCancelButton: true,
      confirmButtonClass: \"btn-success\",
      confirmButtonText: \"Да\",
      closeOnConfirm: false
    },
    function(){
        
        \$.post(\"post/upvote-post\",
          {
            post_id: post_id
          },
          function(data, status){
                if(status == \"success\"){
                  swal(\"Успешно\", \"Upvote\", \"success\");
                  location.reload();
                  //window.location.href = \"/medicine\";
                }
                else{
                  swal(\"Cancelled\", \"Something Bad!\", \"error\");
                  location.reload();
                  //window.location.href = \"/medicine\";
                }
          });
    });
  }

</script> 
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 36
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 37
                echo "    <div class=\"mg_comment_message\" style=\"float: left;width: 100%;margin:0 0 30px; \">
      <div class=\"alert alert-";
                // line 38
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
          ";
                // line 40
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
      </div>
    </div> 
 ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 44
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 48
            echo "                <!-- POST -->
                <div class=\"post\">
                    <div class=\"wrap-ut pull-left\">
                        <div class=\"userinfo pull-left\">
                           
                            <div class=\"name pb10\"><i class=\"fa fa-user\"></i> : ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 53), "html", null, true);
            echo " </div>
                            <div class=\"address pb10\"><i class=\"fa fa-map-marker\"></i> : ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, false, 54), "html", null, true);
            echo "</div>
                            <div class=\"phone pb10\"><i class=\"fa fa-phone\"></i>: <a href=\"tel:";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "phone", [], "any", false, false, false, 55), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "phone", [], "any", false, false, false, 55), "html", null, true);
            echo "</a></div>
                        </div>
                        <div class=\"posttext pull-right\">
                            <h2>
                                <a href=\"";
            // line 59
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 59), "html", null, true);
            echo " 
                                    ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["post"], "approved", [], "any", false, false, false, 60)) {
                // line 61
                echo "                                        <i class=\"fa fa-check-circle approved\" title=\"Фонд: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                echo "\"></i>
                                    ";
            }
            // line 63
            echo "                                </a>
                            </h2>
                            <p>";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 65);
            echo "</p>
                           
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"postinfo pull-left\">
                        <div class=\"comments\">
                            <div class=\"commentbg\">
                                ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCommentCount", [], "any", false, false, false, 73), "html", null, true);
            echo "
                                <div class=\"mark\"></div>
                            </div>

                        </div>
                        <div class=\"views\"><i class=\"fa fa-eye\"></i> ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "view_count", [], "any", false, false, false, 78), "html", null, true);
            echo "</div>
                        <div class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            // line 79
            echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 79)]);
            echo "</div>                                    
                    </div>
                    <div class=\"postinfobot\">

                        <div class=\"likeblock pull-left\">
                            <button class=\"up\" onclick=\"upVote('";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "')\" title=\"Up Vote\"><i class=\"fa fa-thumbs-o-up\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "upvote_count", [], "any", false, false, false, 84), "html", null, true);
            echo "</button>
                        </div>
                        <div class=\"posted pull-left\">
                            <i class=\"fa fa-list-alt\"></i> ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCategoryTitle", [], "any", false, false, false, 87), "html", null, true);
            echo "
                        </div>
                        <div class=\"gift pull-left\"><i class=\"fa fa-gift\"></i> ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</div>
                        <div class=\"next pull-right\">   
                            <!-- Your share button code -->
                            <div class=\"fb-share-button\" 
                              data-href=\"https://dobro.kundoluk.kg/post/";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo "\" 
                              data-layout=\"button_count\">
                            </div>                                     
                            <!-- <a href=\"#\" class=\"sharer facebook\" data-sharer=\"facebook\" data-url=\"https://dobro.kundoluk.kg/";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                            </a> -->
                            <a href=\"#\" class=\"sharer whatsapp\" data-sharer=\"whatsapp\" data-url=\"https://dobro.kundoluk.kg/post/";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 99), "html", null, true);
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
            // line 109
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
        // line 129
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
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 140
            echo "                            <li><a href=\"";
            echo url("/");
            echo "/category-posts/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 140), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 140), "html", null, true);
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getPostCount", [], "any", false, false, false, 140), "html", null, true);
            echo "</span></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
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
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 153), "html", null, true);
        echo " до ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "count", [], "any", false, false, false, 153) * twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 153)), "html", null, true);
        echo " из ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "total", [], "any", false, false, false, 153), "html", null, true);
        echo " записей
        </div>
          <div class=\"col-md-6\">
                ";
        // line 156
        echo twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, false, 156);
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
        return array (  304 => 156,  294 => 153,  281 => 142,  266 => 140,  262 => 139,  250 => 129,  225 => 109,  210 => 99,  204 => 96,  198 => 93,  191 => 89,  186 => 87,  178 => 84,  170 => 79,  166 => 78,  158 => 73,  147 => 65,  143 => 63,  137 => 61,  135 => 60,  127 => 59,  118 => 55,  114 => 54,  110 => 53,  103 => 48,  98 => 47,  93 => 44,  85 => 40,  80 => 38,  77 => 37,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
  
  function upVote(post_id){
    console.log(\"Post id \", post_id);
    swal({
      title: \"Вы уверены?\",
      text: \"Вы собираетесь поднять голос!\",
      type: \"info\",
      showCancelButton: true,
      confirmButtonClass: \"btn-success\",
      confirmButtonText: \"Да\",
      closeOnConfirm: false
    },
    function(){
        
        \$.post(\"post/upvote-post\",
          {
            post_id: post_id
          },
          function(data, status){
                if(status == \"success\"){
                  swal(\"Успешно\", \"Upvote\", \"success\");
                  location.reload();
                  //window.location.href = \"/medicine\";
                }
                else{
                  swal(\"Cancelled\", \"Something Bad!\", \"error\");
                  location.reload();
                  //window.location.href = \"/medicine\";
                }
          });
    });
  }

</script> 
{% flash %}
    <div class=\"mg_comment_message\" style=\"float: left;width: 100%;margin:0 0 30px; \">
      <div class=\"alert alert-{{ type }}\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
          {{ message }}
      </div>
    </div> 
 {% endflash %}
<div class=\"container\">
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
                            <button class=\"up\" onclick=\"upVote('{{post.id}}')\" title=\"Up Vote\"><i class=\"fa fa-thumbs-o-up\"></i>{{post.upvote_count}}</button>
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
