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

/* /var/www/html/dobro/themes/dobro/pages/login.htm */
class __TwigTemplate_0b5c78d6a199c580cc5ea11545be2abcd7194d43a3da7b18e735563c449aba66 extends \Twig\Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
            <form
              data-request=\"onSignin\">
                <h1>Логин</h1>
                <div class=\"form-group\">
                    <label for=\"userSigninLogin\">Имя ползователя</label>
                    <input
                        name=\"login\"
                        type=\"text\"
                        class=\"form-control\"
                        id=\"userSigninLogin\"
                        placeholder=\"Введите емайл\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"userSigninPassword\">Пароль</label>
                    <input
                        name=\"password\"
                        type=\"password\"
                        class=\"form-control\"
                        id=\"userSigninPassword\"
                        placeholder=\"Пароль\" />
                </div>
              <div>
                <button type=\"submit\" class=\"btn btn-primary\">Войти в систему</button>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Нет аккаунта?
                  <a href=\"#signup\" class=\"to_register\"> Создать учетную запись </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
            ";
            // line 51
            if (($context["canRegister"] ?? null)) {
                echo "  
            <!-- Smart Wizard -->
            <h1>Регистрация</h1>

               
                <form data-request=\"onRegisterAjax\" class=\"form-horizontal form-label-left\">
                    
                        <div class=\"form-group\">
                                <label for=\"registerName\">Имя <span class=\"required\">*</span></label>
                                <input
                                    name=\"name\"
                                    type=\"text\"
                                    class=\"form-control\"
                                    id=\"registerName\"
                                    placeholder=\"Введите имя\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"registerUsername\">Имя пользователя <span class=\"required\">*</span></label>
                            <input
                                name=\"username\"
                                type=\"text\"
                                class=\"form-control\"
                                id=\"registerUserame\"
                                placeholder=\"Введите свое полное имя\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"registerEmail\">Емайл <span class=\"required\">*</span></label>
                            <input
                                name=\"email\"
                                type=\"email\"
                                class=\"form-control\"
                                id=\"registerEmail\"
                                placeholder=\"Введите ваш адрес электронной почты\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"companyPhone\">Телефон <span class=\"required\">*</span></label>
                            <input
                                name=\"phone\"
                                type=\"text\"
                                class=\"form-control\"
                                id=\"companyPhone\"
                                placeholder=\"Введите Телефон\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"companyAddress\">Адресс</label>
                            <input
                                name=\"address\"
                                type=\"text\"
                                class=\"form-control\"
                                id=\"companyAddress\"
                                placeholder=\"Введите Адресс\" />
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"registerPassword\">Пароль <span class=\"required\">*</span></label>
                            <input
                                name=\"password\"
                                type=\"password\"
                                class=\"form-control\"
                                id=\"registerPassword\"
                                placeholder=\"выберите пароль\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"registerPassword\">Подтвердить пароль <span class=\"required\">*</span></label>
                            <input
                                name=\"password_confirmation\"
                                type=\"password\"
                                class=\"form-control\"
                                id=\"registerPasswordConfirm\"
                                placeholder=\"Подтвердить пароль\" />
                        </div>
                        <a href=\"#signin\" class=\"to_register btn green btn-outline\">Назад</a>
                    
                        <button type=\"submit\" class=\"btn btn-primary\">Регистрация</button>
                    

                    <div class=\"clearfix\"></div>

                </form>
               
                
            
            ";
            } else {
                // line 134
                echo "                <!-- Registration is disabled. -->
            ";
            }
            // line 136
            echo "          </section>
        </div>
      </div>


";
        } else {
            // line 142
            echo "
";
            // line 143
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 144
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/dobro/themes/dobro/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 144,  191 => 143,  188 => 142,  180 => 136,  176 => 134,  90 => 51,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}

      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
            <form
              data-request=\"onSignin\">
                <h1>Логин</h1>
                <div class=\"form-group\">
                    <label for=\"userSigninLogin\">Имя ползователя</label>
                    <input
                        name=\"login\"
                        type=\"text\"
                        class=\"form-control\"
                        id=\"userSigninLogin\"
                        placeholder=\"Введите емайл\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"userSigninPassword\">Пароль</label>
                    <input
                        name=\"password\"
                        type=\"password\"
                        class=\"form-control\"
                        id=\"userSigninPassword\"
                        placeholder=\"Пароль\" />
                </div>
              <div>
                <button type=\"submit\" class=\"btn btn-primary\">Войти в систему</button>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Нет аккаунта?
                  <a href=\"#signup\" class=\"to_register\"> Создать учетную запись </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
            {% if canRegister %}  
            <!-- Smart Wizard -->
            <h1>Регистрация</h1>

               
                <form data-request=\"onRegisterAjax\" class=\"form-horizontal form-label-left\">
                    
                        <div class=\"form-group\">
                                <label for=\"registerName\">Имя <span class=\"required\">*</span></label>
                                <input
                                    name=\"name\"
                                    type=\"text\"
                                    class=\"form-control\"
                                    id=\"registerName\"
                                    placeholder=\"Введите имя\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"registerUsername\">Имя пользователя <span class=\"required\">*</span></label>
                            <input
                                name=\"username\"
                                type=\"text\"
                                class=\"form-control\"
                                id=\"registerUserame\"
                                placeholder=\"Введите свое полное имя\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"registerEmail\">Емайл <span class=\"required\">*</span></label>
                            <input
                                name=\"email\"
                                type=\"email\"
                                class=\"form-control\"
                                id=\"registerEmail\"
                                placeholder=\"Введите ваш адрес электронной почты\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"companyPhone\">Телефон <span class=\"required\">*</span></label>
                            <input
                                name=\"phone\"
                                type=\"text\"
                                class=\"form-control\"
                                id=\"companyPhone\"
                                placeholder=\"Введите Телефон\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"companyAddress\">Адресс</label>
                            <input
                                name=\"address\"
                                type=\"text\"
                                class=\"form-control\"
                                id=\"companyAddress\"
                                placeholder=\"Введите Адресс\" />
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"registerPassword\">Пароль <span class=\"required\">*</span></label>
                            <input
                                name=\"password\"
                                type=\"password\"
                                class=\"form-control\"
                                id=\"registerPassword\"
                                placeholder=\"выберите пароль\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"registerPassword\">Подтвердить пароль <span class=\"required\">*</span></label>
                            <input
                                name=\"password_confirmation\"
                                type=\"password\"
                                class=\"form-control\"
                                id=\"registerPasswordConfirm\"
                                placeholder=\"Подтвердить пароль\" />
                        </div>
                        <a href=\"#signin\" class=\"to_register btn green btn-outline\">Назад</a>
                    
                        <button type=\"submit\" class=\"btn btn-primary\">Регистрация</button>
                    

                    <div class=\"clearfix\"></div>

                </form>
               
                
            
            {% else %}
                <!-- Registration is disabled. -->
            {% endif %}
          </section>
        </div>
      </div>


{% else %}

{% partial account ~ '::update' %}

{% endif %}", "/var/www/html/dobro/themes/dobro/pages/login.htm", "");
    }
}
