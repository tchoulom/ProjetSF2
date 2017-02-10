<?php

/* BlogBlogBundle:User/Registration:registerForm.html.twig */
class __TwigTemplate_709af3214e89618c465ba7c9dfe7bb0d02486755b99a2bab3193db81a337ea81 extends Twig_Template
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
        $__internal_419a7191b82782f3a1be661314ce53fdaf462dde3d17ed817d07d06e40f40440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419a7191b82782f3a1be661314ce53fdaf462dde3d17ed817d07d06e40f40440->enter($__internal_419a7191b82782f3a1be661314ce53fdaf462dde3d17ed817d07d06e40f40440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBlogBundle:User/Registration:registerForm.html.twig"));

        // line 1
        echo "<section id=\"contact-page\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"center\">
                <h2>Drop Your Message</h2>
                <p class=\"lead\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class=\"col-md-8\" style=\"\">
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_user_register");
        echo "\" enctype=\"multipart/form-data\" name=\"contact-form\" method=\"post\">
                    ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 12
            echo "                        <div class=\"message-block error-message\">
                            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                        </div>
                    ";
        }
        // line 18
        echo "                    <fieldset>
                        <div id=\"legend\">
                            <legend class=\"\">Register</legend>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"username\">Username</label>
                            <div class=\"controls\">
                                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "id" => "username", "required data-validation-required-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.required.title"))));
        echo "
                                <p class=\"help-block\">Username can contain any letters or numbers, without spaces</p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"firstName\">FirstName</label>
                            <div class=\"controls\">
                                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "id" => "firstName", "required data-validation-required-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.required.title"))));
        echo "
                                <p class=\"help-block\">Please provide your firstName</p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"email\">Email</label>
                            <div class=\"controls\">
                                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "id" => "email", "required data-validation-required-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.required.title"))));
        echo "
                                <p class=\"help-block\">Please provide your E-mail</p>
                                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"password\">Password</label>
                            <div class=\"controls\">
                                <div class=\"form-block half-block block-start\">
                                    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "id" => "password", "required data-validation-required-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.required.title"))));
        echo "
                                </div>
                                <p class=\"help-block\">Password should be at least 6 characters</p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"password_confirm\">Password (Confirm)</label>
                            <div class=\"controls\">
                                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "id" => "password_confirm", "required data-validation-required-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.required.title"))));
        echo "
                                <p class=\"help-block\">Please confirm password</p>
                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <!-- Button -->
                            <div class=\"controls\">
                                <button class=\"btn btn-success\">Register</button>
                            </div>
                        </div>
                    </fieldset>
                    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                </form>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->";
        
        $__internal_419a7191b82782f3a1be661314ce53fdaf462dde3d17ed817d07d06e40f40440->leave($__internal_419a7191b82782f3a1be661314ce53fdaf462dde3d17ed817d07d06e40f40440_prof);

    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:User/Registration:registerForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 73,  123 => 62,  118 => 60,  106 => 51,  95 => 43,  90 => 41,  79 => 33,  68 => 25,  59 => 18,  55 => 16,  46 => 14,  42 => 13,  39 => 12,  37 => 11,  33 => 10,  22 => 1,);
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"center\">
                <h2>Drop Your Message</h2>
                <p class=\"lead\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class=\"col-md-8\" style=\"\">
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form action=\"{{ path(\"blog_user_register\") }}\" enctype=\"multipart/form-data\" name=\"contact-form\" method=\"post\">
                    {% if errors|length > 0 %}
                        <div class=\"message-block error-message\">
                            {% for error in errors %}
                                {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                    <fieldset>
                        <div id=\"legend\">
                            <legend class=\"\">Register</legend>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"username\">Username</label>
                            <div class=\"controls\">
                                {{ form_widget(form.lastName, {'attr': {'class': 'form-control input-lg', 'id': 'username', 'required data-validation-required-message': 'course.required.title'|trans}}) }}
                                <p class=\"help-block\">Username can contain any letters or numbers, without spaces</p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"firstName\">FirstName</label>
                            <div class=\"controls\">
                                {{ form_widget(form.firstName, {'attr': {'class': 'form-control input-lg', 'id': 'firstName', 'required data-validation-required-message': 'course.required.title'|trans}}) }}
                                <p class=\"help-block\">Please provide your firstName</p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"email\">Email</label>
                            <div class=\"controls\">
                                {{ form_widget(form.email, {'attr': {'class': 'form-control input-lg', 'id': 'email', 'required data-validation-required-message': 'course.required.title'|trans}}) }}
                                <p class=\"help-block\">Please provide your E-mail</p>
                                {{ form_errors(form.email) }}
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"password\">Password</label>
                            <div class=\"controls\">
                                <div class=\"form-block half-block block-start\">
                                    {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control input-lg', 'id': 'password', 'required data-validation-required-message': 'course.required.title'|trans}}) }}
                                </div>
                                <p class=\"help-block\">Password should be at least 6 characters</p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"password_confirm\">Password (Confirm)</label>
                            <div class=\"controls\">
                                {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control input-lg', 'id': 'password_confirm', 'required data-validation-required-message': 'course.required.title'|trans}}) }}
                                <p class=\"help-block\">Please confirm password</p>
                                {{ form_errors(form.plainPassword.second) }}
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <!-- Button -->
                            <div class=\"controls\">
                                <button class=\"btn btn-success\">Register</button>
                            </div>
                        </div>
                    </fieldset>
                    {{ form_widget(form._token) }}
                </form>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->", "BlogBlogBundle:User/Registration:registerForm.html.twig", "/var/www/symfony/src/Blog/BlogBundle/Resources/views/User/Registration/registerForm.html.twig");
    }
}
