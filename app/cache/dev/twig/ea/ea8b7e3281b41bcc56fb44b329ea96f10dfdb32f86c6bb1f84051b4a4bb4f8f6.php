<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dd70a824dc1a58c40ea5831ced15e79cb680a41a8122f2da2e47620d225cca1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71142f6e3fee269c617782e846d4dcac8ea325a762a6d36c5a1b2c206c28396a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71142f6e3fee269c617782e846d4dcac8ea325a762a6d36c5a1b2c206c28396a->enter($__internal_71142f6e3fee269c617782e846d4dcac8ea325a762a6d36c5a1b2c206c28396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71142f6e3fee269c617782e846d4dcac8ea325a762a6d36c5a1b2c206c28396a->leave($__internal_71142f6e3fee269c617782e846d4dcac8ea325a762a6d36c5a1b2c206c28396a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0de00f7b6946d139eab2bc7b5c4bcebb3539e5a3e0982868506a89458b50286c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de00f7b6946d139eab2bc7b5c4bcebb3539e5a3e0982868506a89458b50286c->enter($__internal_0de00f7b6946d139eab2bc7b5c4bcebb3539e5a3e0982868506a89458b50286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0de00f7b6946d139eab2bc7b5c4bcebb3539e5a3e0982868506a89458b50286c->leave($__internal_0de00f7b6946d139eab2bc7b5c4bcebb3539e5a3e0982868506a89458b50286c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_893b9a4fae814d3082336b2ef0e2e39e50d083cec6bc7e910186aeced9d8b106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893b9a4fae814d3082336b2ef0e2e39e50d083cec6bc7e910186aeced9d8b106->enter($__internal_893b9a4fae814d3082336b2ef0e2e39e50d083cec6bc7e910186aeced9d8b106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_893b9a4fae814d3082336b2ef0e2e39e50d083cec6bc7e910186aeced9d8b106->leave($__internal_893b9a4fae814d3082336b2ef0e2e39e50d083cec6bc7e910186aeced9d8b106_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08363a1576708a56de9b9dbbab17167c33439ca8c06cb77f45dc07fddce4406a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08363a1576708a56de9b9dbbab17167c33439ca8c06cb77f45dc07fddce4406a->enter($__internal_08363a1576708a56de9b9dbbab17167c33439ca8c06cb77f45dc07fddce4406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08363a1576708a56de9b9dbbab17167c33439ca8c06cb77f45dc07fddce4406a->leave($__internal_08363a1576708a56de9b9dbbab17167c33439ca8c06cb77f45dc07fddce4406a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
