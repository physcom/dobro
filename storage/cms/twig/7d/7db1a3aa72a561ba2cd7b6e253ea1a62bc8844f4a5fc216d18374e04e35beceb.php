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

/* /var/www/html/dobro/themes/dobro/pages/post.htm */
class __TwigTemplate_3950de573de7d6e65cd5f3d972b62a094560c817614687ab31da44e5e8843528 extends \Twig\Template
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
      title: \"Are you sure?\",
      text: \"You are going to upvo!\",
      type: \"info\",
      showCancelButton: true,
      confirmButtonClass: \"btn-success\",
      confirmButtonText: \"Yes, upvote!\",
      closeOnConfirm: false
    },
    function(){
        
        \$.post(\"upvote-post\",
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
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 breadcrumbf\">
            <a href=\"/dobro\">Главная</a> <span class=\"diviver\">&gt;</span>  <a href=\"#\">Детали темы</a>
        </div>
    </div>
</div>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">

            <!-- POST -->
            <div class=\"post beforepagination\">
                <div class=\"topwrap\">
                    <div class=\"userinfo pull-left\">
                        <div class=\"avatar\">
                            <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar2.jpg");
        echo "\" alt=\"\" />
                        </div>

                        <div class=\"icons\">
                           <h3>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 57), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                    <div class=\"posttext pull-right\">
                        <h2>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 61), "html", null, true);
        echo "</h2>
                        <p>
                            ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 63), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>                              
                <div class=\"postinfobot\">

                    <div class=\"likeblock pull-left\">
                        <button class=\"up\" onclick=\"upVote('";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 71), "html", null, true);
        echo "')\">
                            <i class=\"fa fa-thumbs-o-up\"></i>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "upvote_count", [], "any", false, false, false, 72), "html", null, true);
        echo "
                        </button>
                    
                    </div>
                    <div class=\"posted pull-left\"><i class=\"fa fa-clock-o\"></i> Опубликовано : ";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 76), "d.m.Y H:m"), "html", null, true);
        echo "</div>

                    <div class=\"next pull-right\">                                        
                        <a href=\"#\" class=\"sharer\" data-sharer=\"facebook\" data-url=\"http://localhost/dobro/post/";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                        </a>
                        <a href=\"#\" class=\"sharer\" data-sharer=\"whatsapp\" data-url=\"http://localhost/dobro/post/";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 82), "html", null, true);
        echo "\"> 
                            <i class=\"fa fa-whatsapp\" ></i>
                        </a>
                    </div>

                    <div class=\"clearfix\"></div>
                </div>
            </div><!-- POST -->

         
            <div class=\"clearfix\" style=\"margin-top: 10px\"></div>

            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "comments", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 95
            echo "            <!-- POST -->
            <div class=\"post\">
                <div class=\"topwrap\">
                    <div class=\"userinfo pull-left\">
                        <div class=\"avatar\">
                            <img src=\"";
            // line 100
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar2.jpg");
            echo "\" alt=\"\" />
                          
                        </div>

                        <div class=\"icons\">
                            <h4>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 105), "html", null, true);
            echo "</h4>
                        </div>
                    </div>
                    <div class=\"posttext pull-left\">
                        <p>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 109), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>                              
                <div class=\"postinfobot\">
                    <div class=\"posted pull-left\"><i class=\"fa fa-clock-o\"></i> Опубликовано : ";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 114), "d.m.Y H:m"), "html", null, true);
            echo "</div>
                    <div class=\"clearfix\"></div>
                </div>
            </div><!-- POST -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    

            <!-- POST -->
            <div class=\"post\">
                 ";
        // line 122
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSubmitComment", ["class" => "form"]]);
        echo "
              
                    <div class=\"topwrap\">
                        
                        <div class=\"comment pull-right\">
                            <div class=\"textwraper\">
                                <div class=\"postreply\">Разместить ответ</div>
                                <div class=\"form-group\">
                                    <label>Ваш имя</label>
                                    <input type=\"text\" name=\"author\" class=\"form-control\" placeholder=\"Введите ваше имя\">
                                
                                </div>
                                <div class=\"form-group\">
                                    <label>Ваш комментарий</label>
                                     <textarea name=\"comment\" id=\"reply\" class=\"form-control\" placeholder=\"Пишите ваше сообщение здесь\"></textarea>
                                </div>
                                
                               
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>                              
                    <div class=\"postinfobot\">
                        <div class=\"pull-right postreply\">
                            <div class=\"pull-left smile\"><a href=\"#\"><i class=\"fa fa-smile-o\"></i></a></div>
                            <div class=\"pull-left\"><button type=\"submit\" class=\"btn btn-primary\">Ответить</button></div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                ";
        // line 152
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
            </div><!-- POST -->


        </div>
        <div class=\"col-lg-4 col-md-4\">

            <!-- -->
            <div class=\"sidebarblock\">
                <h3>Категории тем</h3>
                <div class=\"divline\"></div>
                <div class=\"blocktxt\">
                    <ul class=\"cats\">
                        ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 166
            echo "                            <li><a href=\"/dobro/category-posts/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 166), "html", null, true);
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getPostCount", [], "any", false, false, false, 166), "html", null, true);
            echo "</span></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 168,  263 => 166,  259 => 165,  243 => 152,  210 => 122,  204 => 118,  193 => 114,  185 => 109,  178 => 105,  170 => 100,  163 => 95,  159 => 94,  144 => 82,  138 => 79,  132 => 76,  125 => 72,  121 => 71,  110 => 63,  105 => 61,  98 => 57,  91 => 53,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
  
  function upVote(post_id){
    console.log(\"Post id \", post_id);
    swal({
      title: \"Are you sure?\",
      text: \"You are going to upvo!\",
      type: \"info\",
      showCancelButton: true,
      confirmButtonClass: \"btn-success\",
      confirmButtonText: \"Yes, upvote!\",
      closeOnConfirm: false
    },
    function(){
        
        \$.post(\"upvote-post\",
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
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 breadcrumbf\">
            <a href=\"/dobro\">Главная</a> <span class=\"diviver\">&gt;</span>  <a href=\"#\">Детали темы</a>
        </div>
    </div>
</div>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">

            <!-- POST -->
            <div class=\"post beforepagination\">
                <div class=\"topwrap\">
                    <div class=\"userinfo pull-left\">
                        <div class=\"avatar\">
                            <img src=\"{{'assets/images/avatar2.jpg'|theme}}\" alt=\"\" />
                        </div>

                        <div class=\"icons\">
                           <h3>{{post.author}}</h3>
                        </div>
                    </div>
                    <div class=\"posttext pull-right\">
                        <h2>{{post.title}}</h2>
                        <p>
                            {{post.content}}
                        </p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>                              
                <div class=\"postinfobot\">

                    <div class=\"likeblock pull-left\">
                        <button class=\"up\" onclick=\"upVote('{{post.id}}')\">
                            <i class=\"fa fa-thumbs-o-up\"></i>{{post.upvote_count}}
                        </button>
                    
                    </div>
                    <div class=\"posted pull-left\"><i class=\"fa fa-clock-o\"></i> Опубликовано : {{post.created_at|date(\"d.m.Y H:m\")}}</div>

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

         
            <div class=\"clearfix\" style=\"margin-top: 10px\"></div>

            {% for comment in post.comments %}
            <!-- POST -->
            <div class=\"post\">
                <div class=\"topwrap\">
                    <div class=\"userinfo pull-left\">
                        <div class=\"avatar\">
                            <img src=\"{{'assets/images/avatar2.jpg'|theme}}\" alt=\"\" />
                          
                        </div>

                        <div class=\"icons\">
                            <h4>{{comment.author}}</h4>
                        </div>
                    </div>
                    <div class=\"posttext pull-left\">
                        <p>{{comment.comment}}</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>                              
                <div class=\"postinfobot\">
                    <div class=\"posted pull-left\"><i class=\"fa fa-clock-o\"></i> Опубликовано : {{comment.created_at|date(\"d.m.Y H:m\")}}</div>
                    <div class=\"clearfix\"></div>
                </div>
            </div><!-- POST -->
            {% endfor %}    

            <!-- POST -->
            <div class=\"post\">
                 {{ form_ajax('onSubmitComment',{ class: 'form'}) }}
              
                    <div class=\"topwrap\">
                        
                        <div class=\"comment pull-right\">
                            <div class=\"textwraper\">
                                <div class=\"postreply\">Разместить ответ</div>
                                <div class=\"form-group\">
                                    <label>Ваш имя</label>
                                    <input type=\"text\" name=\"author\" class=\"form-control\" placeholder=\"Введите ваше имя\">
                                
                                </div>
                                <div class=\"form-group\">
                                    <label>Ваш комментарий</label>
                                     <textarea name=\"comment\" id=\"reply\" class=\"form-control\" placeholder=\"Пишите ваше сообщение здесь\"></textarea>
                                </div>
                                
                               
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>                              
                    <div class=\"postinfobot\">
                        <div class=\"pull-right postreply\">
                            <div class=\"pull-left smile\"><a href=\"#\"><i class=\"fa fa-smile-o\"></i></a></div>
                            <div class=\"pull-left\"><button type=\"submit\" class=\"btn btn-primary\">Ответить</button></div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                {{ form_close() }}
            </div><!-- POST -->


        </div>
        <div class=\"col-lg-4 col-md-4\">

            <!-- -->
            <div class=\"sidebarblock\">
                <h3>Категории тем</h3>
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
</div>", "/var/www/html/dobro/themes/dobro/pages/post.htm", "");
    }
}
