<?php

/* BlogBlogBundle:User/Security:loginForm.html.twig */
class __TwigTemplate_aa4522e76bee9998e15c369364a49a871a21307f8b7bc79bd8c3ce86936d9b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6533c8da82eba2f6a7cb0be0916e722985e53c1e97a08dc8bec8a092376975b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6533c8da82eba2f6a7cb0be0916e722985e53c1e97a08dc8bec8a092376975b5->enter($__internal_6533c8da82eba2f6a7cb0be0916e722985e53c1e97a08dc8bec8a092376975b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBlogBundle:User/Security:loginForm.html.twig"));

        // line 1
        echo "<section id=\"contact-page\">
    <div class=\"container\" style=\"margin-top: 12%\">
        <div id=\"login-overlay\" class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Login to <b>YaelsEverythingStore.com</b></h4> or go back to our <a href=\"./index.jsp\">main site</a>.
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <div class=\"well\">
                                <form class=\"login\" role=\"form\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\"
                                      enctype=\"multipart/form-data\" method=\"post\">
                                ";
        // line 15
        echo "                                    ";
        // line 16
        echo "                                        ";
        // line 17
        echo "                                            ";
        // line 18
        echo "                                        ";
        // line 19
        echo "                                    ";
        // line 20
        echo "                                    <div class=\"form-group\">
                                        <label for=\"username\" class=\"control-label\">Username</label>
                                        <input type=\"text\" class=\"form-control\" name=\"_username\"
                                               value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "\" required=\"\" title=\"Please enter your username\">
                                        <span class=\"help-block\"></span>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"control-label\">Password</label>
                                        <input type=\"password\" class=\"form-control\" name=\"_password\"
                                               placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "\"  value=\"\" required=\"\" title=\"Please enter your password\">
                                        <span class=\"help-block\"></span>
                                    </div>
                                    <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                                    ";
        // line 33
        if ((array_key_exists("error", $context) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != null))) {
            // line 34
            echo "                                    <div id=\"loginErrorMsg\" class=\"alert alert-error hide\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 36
        echo "                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" name=\"remember\" id=\"remember\"> Remember login
                                        </label>
                                        <p class=\"help-block\">(if this is a private computer)</p>
                                    </div>
                                    <button type=\"submit\" value=\"Connexion\" name=\"submit\" class=\"btn btn-success btn-block\">Login</button>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-xs-6\">
                            <p class=\"lead\">Register now for <span class=\"text-success\">FREE</span></p>
                            <ul class=\"list-unstyled\" style=\"line-height: 2\">
                                <li><span class=\"fa fa-check text-success\"></span> See all your orders</li>
                                <li><span class=\"fa fa-check text-success\"></span> Shipping is always free</li>
                                <li><span class=\"fa fa-check text-success\"></span> Save your favorites</li>
                                <li><span class=\"fa fa-check text-success\"></span> Fast checkout</li>
                                <li><span class=\"fa fa-check text-success\"></span> Get a gift <small>(only new customers)</small></li>
                                <li><span class=\"fa fa-check text-success\"></span>Holiday discounts up to 30% off</li>
                            </ul>
                            <p><a href=\"./Register.jsp\" class=\"btn btn-info btn-block\">Yes please, register now!</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!--/.container-->
</section><!--/#contact-page-->";
        
        $__internal_6533c8da82eba2f6a7cb0be0916e722985e53c1e97a08dc8bec8a092376975b5->leave($__internal_6533c8da82eba2f6a7cb0be0916e722985e53c1e97a08dc8bec8a092376975b5_prof);

    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:User/Security:loginForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  78 => 34,  76 => 33,  72 => 32,  66 => 29,  55 => 23,  50 => 20,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  35 => 12,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact-page\">
    <div class=\"container\" style=\"margin-top: 12%\">
        <div id=\"login-overlay\" class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Login to <b>YaelsEverythingStore.com</b></h4> or go back to our <a href=\"./index.jsp\">main site</a>.
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <div class=\"well\">
                                <form class=\"login\" role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\"
                                      enctype=\"multipart/form-data\" method=\"post\">
                                {#<form id=\"loginForm\" method=\"POST\">#}
                                    {#{% if error is defined and error != null %}#}
                                        {#<div class=\"form-wrap form-block message-block error-message\">#}
                                            {#<p>{{ error.messageKey|trans(error.messageData, 'security') }}</p>#}
                                        {#</div>#}
                                    {#{% endif %}#}
                                    <div class=\"form-group\">
                                        <label for=\"username\" class=\"control-label\">Username</label>
                                        <input type=\"text\" class=\"form-control\" name=\"_username\"
                                               value=\"{{ last_username }}\" placeholder=\"{{ 'security.login.username'|trans }}\" required=\"\" title=\"Please enter your username\">
                                        <span class=\"help-block\"></span>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"control-label\">Password</label>
                                        <input type=\"password\" class=\"form-control\" name=\"_password\"
                                               placeholder=\"{{ 'security.login.password'|trans }}\"  value=\"\" required=\"\" title=\"Please enter your password\">
                                        <span class=\"help-block\"></span>
                                    </div>
                                    <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                                    {% if error is defined and error != null %}
                                    <div id=\"loginErrorMsg\" class=\"alert alert-error hide\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                    {% endif %}
                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" name=\"remember\" id=\"remember\"> Remember login
                                        </label>
                                        <p class=\"help-block\">(if this is a private computer)</p>
                                    </div>
                                    <button type=\"submit\" value=\"Connexion\" name=\"submit\" class=\"btn btn-success btn-block\">Login</button>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-xs-6\">
                            <p class=\"lead\">Register now for <span class=\"text-success\">FREE</span></p>
                            <ul class=\"list-unstyled\" style=\"line-height: 2\">
                                <li><span class=\"fa fa-check text-success\"></span> See all your orders</li>
                                <li><span class=\"fa fa-check text-success\"></span> Shipping is always free</li>
                                <li><span class=\"fa fa-check text-success\"></span> Save your favorites</li>
                                <li><span class=\"fa fa-check text-success\"></span> Fast checkout</li>
                                <li><span class=\"fa fa-check text-success\"></span> Get a gift <small>(only new customers)</small></li>
                                <li><span class=\"fa fa-check text-success\"></span>Holiday discounts up to 30% off</li>
                            </ul>
                            <p><a href=\"./Register.jsp\" class=\"btn btn-info btn-block\">Yes please, register now!</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!--/.container-->
</section><!--/#contact-page-->", "BlogBlogBundle:User/Security:loginForm.html.twig", "/var/www/symfony/src/Blog/BlogBundle/Resources/views/User/Security/loginForm.html.twig");
    }
}
