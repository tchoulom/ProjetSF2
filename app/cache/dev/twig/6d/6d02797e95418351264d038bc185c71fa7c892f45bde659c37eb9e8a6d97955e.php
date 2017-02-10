<?php

/* BlogCoreBundle:Security:login.html.twig */
class __TwigTemplate_4d7e1fde608c91fa39bc1b6b246583eda53f07c2ab03eea88678eb82333f430b extends Twig_Template
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
        $__internal_95944439172ea2a7ae5b3041573157251a00bc341117a9d3765b823f7b2e7946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95944439172ea2a7ae5b3041573157251a00bc341117a9d3765b823f7b2e7946->enter($__internal_95944439172ea2a7ae5b3041573157251a00bc341117a9d3765b823f7b2e7946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Security:login.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>

        <ul class=\"dropdown-menu\">
            <li class=\"kopie\">
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">
                    Mon profil
                </a>
            </li>

            <li class=\"kopie\">
                <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            </li>

            <li class=\"kopie\">
                <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_user_change_password");
            echo "\">
                    Changer mot de passe
                </a>
            </li>
        </ul>
    </li>
";
        } else {
            // line 26
            echo "    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.title"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_user_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.register.title"), "html", null, true);
            echo "</a></li>
";
        }
        // line 29
        echo "
";
        // line 30
        $this->loadTemplate("BlogCoreBundle:Layout/includes:form_errors.html.twig", "BlogCoreBundle:Security:login.html.twig", 30)->display($context);
        
        $__internal_95944439172ea2a7ae5b3041573157251a00bc341117a9d3765b823f7b2e7946->leave($__internal_95944439172ea2a7ae5b3041573157251a00bc341117a9d3765b823f7b2e7946_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  79 => 29,  72 => 27,  65 => 26,  55 => 19,  47 => 14,  43 => 13,  34 => 7,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ app.user.username }} <b class=\"caret\"></b></a>

        <ul class=\"dropdown-menu\">
            <li class=\"kopie\">
                <a href=\"{{ path('fos_user_profile_show') }}\">
                    Mon profil
                </a>
            </li>

            <li class=\"kopie\">
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans([], 'FOSUserBundle') }}
                </a>
            </li>

            <li class=\"kopie\">
                <a href=\"{{ path('blog_user_change_password') }}\">
                    Changer mot de passe
                </a>
            </li>
        </ul>
    </li>
{% else %}
    <li><a href=\"{{ path('user_login') }}\">{{ 'security.login.title'|trans }}</a></li>
    <li><a href=\"{{ path('blog_user_register') }}\">{{ 'security.register.title'|trans }}</a></li>
{% endif %}

{% include 'BlogCoreBundle:Layout/includes:form_errors.html.twig' %}", "BlogCoreBundle:Security:login.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Security/login.html.twig");
    }
}
