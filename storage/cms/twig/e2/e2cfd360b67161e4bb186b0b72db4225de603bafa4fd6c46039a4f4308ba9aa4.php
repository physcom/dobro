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
class __TwigTemplate_892e749d561dbfbef8afc947b75b1102cd82ea6e529626a95f7cd876d280dbc7 extends \Twig\Template
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

  function approveHelp(post_id, user_id){
    console.log(\"Post id \", post_id);
    swal({
      title: \"Вы уверены?\",
      text: \"Вы собираетесь одобрить!\",
      type: \"info\",
      showCancelButton: true,
      confirmButtonClass: \"btn-success\",
      confirmButtonText: \"Да\",
      closeOnConfirm: false
    },
    function(){
        
        \$.post(\"approve-help\",
          {
            post_id: post_id,
            user_id: user_id
          },
          function(data, status){
                if(status == \"success\"){
                  swal(\"Успешно\", \"Одобренный\", \"success\");
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
            <a href=\"";
        // line 71
        echo url("/");
        echo "\">Главная</a> <span class=\"diviver\"><i class=\"fa fa-arrow-circle-right\"></i></span>  <a href=\"#\">Детали темы</a>
        </div>
    </div>
</div>
";
        // line 75
        if ((($context["user"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "approved", [], "any", false, false, false, 75) == 0))) {
            // line 76
            echo "    
    ";
            // line 77
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onApproveDonate", ["class" => "form"]]);
            echo "
        <input type=\"hidden\" name=\"author_id\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
        <button class=\"btn btn-success donate\" type=\"submit\" >Donate, ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 79), "html", null, true);
            echo " <i class=\"fa fa-gift\" aria-hidden=\"true\"></i></button>
    ";
            // line 80
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
    <!-- <button class=\"btn btn-success donate\" onclick=\"approveHelp(";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 81), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 81), "html", null, true);
            echo ")\">Donate, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 81), "html", null, true);
            echo " <i class=\"fa fa-gift\" aria-hidden=\"true\"></i></button> -->
";
        }
        // line 83
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">

            <!-- POST -->
            <div class=\"post beforepagination\">
                <div class=\"topwrap\">
                    <div class=\"userinfo pull-left\">
                        <div class=\"avatar\">
                            <img src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default.jpg");
        echo "\" alt=\"\" />
                        </div>

                        <div class=\"icons\">
                           <h3>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 96), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                    <div class=\"posttext pull-right\">
                        <h2>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 100), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "approved", [], "any", false, false, false, 100)) {
            // line 101
            echo "                                     <i class=\"fa fa-check-circle approved\"></i>
                                    ";
        }
        // line 102
        echo "</h2>
                        <p>
                            ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 104), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>                              
                <div class=\"postinfobot\">

                    <div class=\"likeblock pull-left\">
                        <button class=\"up\" onclick=\"upVote('";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 112), "html", null, true);
        echo "')\" title=\"Up Vote\">
                            <i class=\"fa fa-thumbs-o-up\"></i>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "upvote_count", [], "any", false, false, false, 113), "html", null, true);
        echo "
                        </button>
                    </div>
                    <div class=\"posted pull-left\"><i class=\"fa fa-clock-o\"></i> ";
        // line 116
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 116), "d.m.Y H:m"), "html", null, true);
        echo "</div>

                    <div class=\"next pull-right\">                                        
                        <a href=\"#\" class=\"sharer\" data-sharer=\"facebook\" data-url=\"";
        // line 119
        echo url("/");
        echo "/post/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 119), "html", null, true);
        echo "\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                        </a>
                        
                        <a href=\"#\" class=\"sharer\" data-sharer=\"whatsapp\" data-url=\"";
        // line 123
        echo url("/");
        echo "/post/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 123), "html", null, true);
        echo "\"> 
                            <i class=\"fa fa-whatsapp\" ></i>
                        </a>
                        

                    </div>

                    <div class=\"clearfix\"></div>
                </div>
            </div><!-- POST -->

         
            <div class=\"clearfix\" style=\"margin-top: 10px\"></div>

            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "comments", [], "any", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 138
            echo "            <!-- POST -->
            <div class=\"post\">
                <div class=\"topwrap\">
                    <div class=\"userinfo pull-left\">
                        <div class=\"avatar\">
                            <img src=\"";
            // line 143
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default.jpg");
            echo "\" alt=\"\" />
                        </div>

                        <div class=\"icons\">
                            <h4>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 147), "html", null, true);
            echo "</h4>
                        </div>
                    </div>
                    <div class=\"posttext pull-left\">
                        <p>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 151), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>                              
                <div class=\"postinfobot\">
                    <div class=\"posted pull-left\"><i class=\"fa fa-clock-o\"></i> Опубликовано : ";
            // line 156
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 156), "d.m.Y H:m"), "html", null, true);
            echo "</div>
                    <div class=\"clearfix\"></div>
                </div>
            </div><!-- POST -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    

            <!-- POST -->
            <div class=\"post\">
                 ";
        // line 164
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
        // line 194
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
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 208
            echo "                            <li><a href=\"";
            echo url("/");
            echo "/category-posts/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 208), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 208), "html", null, true);
            echo " <span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getPostCount", [], "any", false, false, false, 208), "html", null, true);
            echo "</span></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
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
        return array (  356 => 210,  341 => 208,  337 => 207,  321 => 194,  288 => 164,  282 => 160,  271 => 156,  263 => 151,  256 => 147,  249 => 143,  242 => 138,  238 => 137,  219 => 123,  210 => 119,  204 => 116,  198 => 113,  194 => 112,  183 => 104,  179 => 102,  175 => 101,  171 => 100,  164 => 96,  157 => 92,  146 => 83,  137 => 81,  133 => 80,  129 => 79,  125 => 78,  121 => 77,  118 => 76,  116 => 75,  109 => 71,  37 => 1,);
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

  function approveHelp(post_id, user_id){
    console.log(\"Post id \", post_id);
    swal({
      title: \"Вы уверены?\",
      text: \"Вы собираетесь одобрить!\",
      type: \"info\",
      showCancelButton: true,
      confirmButtonClass: \"btn-success\",
      confirmButtonText: \"Да\",
      closeOnConfirm: false
    },
    function(){
        
        \$.post(\"approve-help\",
          {
            post_id: post_id,
            user_id: user_id
          },
          function(data, status){
                if(status == \"success\"){
                  swal(\"Успешно\", \"Одобренный\", \"success\");
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
            <a href=\"{{ url('/') }}\">Главная</a> <span class=\"diviver\"><i class=\"fa fa-arrow-circle-right\"></i></span>  <a href=\"#\">Детали темы</a>
        </div>
    </div>
</div>
{% if user and post.approved == 0 %}
    
    {{ form_ajax('onApproveDonate',{ class: 'form'}) }}
        <input type=\"hidden\" name=\"author_id\" value=\"{{user.id}}\">
        <button class=\"btn btn-success donate\" type=\"submit\" >Donate, {{user.name}} <i class=\"fa fa-gift\" aria-hidden=\"true\"></i></button>
    {{ form_close() }}
    <!-- <button class=\"btn btn-success donate\" onclick=\"approveHelp({{post.id}}, {{user.id}})\">Donate, {{user.name}} <i class=\"fa fa-gift\" aria-hidden=\"true\"></i></button> -->
{% endif %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">

            <!-- POST -->
            <div class=\"post beforepagination\">
                <div class=\"topwrap\">
                    <div class=\"userinfo pull-left\">
                        <div class=\"avatar\">
                            <img src=\"{{'assets/images/default.jpg'|theme}}\" alt=\"\" />
                        </div>

                        <div class=\"icons\">
                           <h3>{{post.author}}</h3>
                        </div>
                    </div>
                    <div class=\"posttext pull-right\">
                        <h2>{{post.title}} {% if post.approved %}
                                     <i class=\"fa fa-check-circle approved\"></i>
                                    {% endif %}</h2>
                        <p>
                            {{post.content}}
                        </p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>                              
                <div class=\"postinfobot\">

                    <div class=\"likeblock pull-left\">
                        <button class=\"up\" onclick=\"upVote('{{post.id}}')\" title=\"Up Vote\">
                            <i class=\"fa fa-thumbs-o-up\"></i>{{post.upvote_count}}
                        </button>
                    </div>
                    <div class=\"posted pull-left\"><i class=\"fa fa-clock-o\"></i> {{post.created_at|date(\"d.m.Y H:m\")}}</div>

                    <div class=\"next pull-right\">                                        
                        <a href=\"#\" class=\"sharer\" data-sharer=\"facebook\" data-url=\"{{ url('/') }}/post/{{post.id}}\"> 
                                <i class=\"fa fa-facebook-square \" ></i>
                        </a>
                        
                        <a href=\"#\" class=\"sharer\" data-sharer=\"whatsapp\" data-url=\"{{ url('/') }}/post/{{post.id}}\"> 
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
                            <img src=\"{{'assets/images/default.jpg'|theme}}\" alt=\"\" />
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
                            <li><a href=\"{{ url('/') }}/category-posts/{{category.id}}\">{{ category.title}} <span class=\"badge pull-right\">{{category.getPostCount}}</span></a></li>
                        {% endfor %}
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>", "/var/www/html/dobro/themes/dobro/pages/post.htm", "");
    }
}
