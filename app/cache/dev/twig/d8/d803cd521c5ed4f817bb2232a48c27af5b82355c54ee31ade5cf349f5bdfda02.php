<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_911f18e1707a08dfcee88e5e9f38431d45aac87d25177e08459e2062269958ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_837006bd9443cab24e8084b515802e9af22664394a0edd129d7dfa25d619ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837006bd9443cab24e8084b515802e9af22664394a0edd129d7dfa25d619ec42->enter($__internal_837006bd9443cab24e8084b515802e9af22664394a0edd129d7dfa25d619ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837006bd9443cab24e8084b515802e9af22664394a0edd129d7dfa25d619ec42->leave($__internal_837006bd9443cab24e8084b515802e9af22664394a0edd129d7dfa25d619ec42_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66196065b4945cb584f66d38c1e69185b2fdcfe92751825d7772263ebee78668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66196065b4945cb584f66d38c1e69185b2fdcfe92751825d7772263ebee78668->enter($__internal_66196065b4945cb584f66d38c1e69185b2fdcfe92751825d7772263ebee78668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_66196065b4945cb584f66d38c1e69185b2fdcfe92751825d7772263ebee78668->leave($__internal_66196065b4945cb584f66d38c1e69185b2fdcfe92751825d7772263ebee78668_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45088deb3e1c7500aa6ac4e0e6344d8a39581916a3e80aad6e9923d7c2e8e8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45088deb3e1c7500aa6ac4e0e6344d8a39581916a3e80aad6e9923d7c2e8e8c2->enter($__internal_45088deb3e1c7500aa6ac4e0e6344d8a39581916a3e80aad6e9923d7c2e8e8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_45088deb3e1c7500aa6ac4e0e6344d8a39581916a3e80aad6e9923d7c2e8e8c2->leave($__internal_45088deb3e1c7500aa6ac4e0e6344d8a39581916a3e80aad6e9923d7c2e8e8c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15a949eba1dab501fdce1968737df654d6f027981753e775539b39246aeadcfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a949eba1dab501fdce1968737df654d6f027981753e775539b39246aeadcfa->enter($__internal_15a949eba1dab501fdce1968737df654d6f027981753e775539b39246aeadcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15a949eba1dab501fdce1968737df654d6f027981753e775539b39246aeadcfa->leave($__internal_15a949eba1dab501fdce1968737df654d6f027981753e775539b39246aeadcfa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
