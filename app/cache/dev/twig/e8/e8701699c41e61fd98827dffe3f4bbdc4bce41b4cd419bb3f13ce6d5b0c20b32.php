<?php

/* BlogCoreBundle:Layout/includes:form_errors.html.twig */
class __TwigTemplate_9229c3bbf368a6c8f8e88699a177991c3383ea5e323b05bfb8d7db1efb5038af extends Twig_Template
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
        $__internal_5a9f95b247afe4c9c66d6c05216d021ef334092ccedb26a163f8bb07c9530177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9f95b247afe4c9c66d6c05216d021ef334092ccedb26a163f8bb07c9530177->enter($__internal_5a9f95b247afe4c9c66d6c05216d021ef334092ccedb26a163f8bb07c9530177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Layout/includes:form_errors.html.twig"));

        // line 5
        echo "    ";
        
        $__internal_5a9f95b247afe4c9c66d6c05216d021ef334092ccedb26a163f8bb07c9530177->leave($__internal_5a9f95b247afe4c9c66d6c05216d021ef334092ccedb26a163f8bb07c9530177_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Layout/includes:form_errors.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% set errors = \"\" %}#}
{#{% if errors|length > 0 %}#}
{#<div class=\"message-block error-message\">#}
{#{% for error in errors %}#}
    {#{{ error.message }}        #}
{#{% endfor %}#}
{#</div>#}
{#{% endif %}#}", "BlogCoreBundle:Layout/includes:form_errors.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Layout/includes/form_errors.html.twig");
    }
}
