<?php

/* BlogCoreBundle:Layout/includes:flash_message.html.twig */
class __TwigTemplate_5feea57580e3d64b4bb9ac5c6f24df4c8b1b46bfb50d904caa1a0f8b235b2f77 extends Twig_Template
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
        $__internal_46818a3a02dec1c6eb8a868184c2817352c9311c4e9cee274ff96da252f94391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46818a3a02dec1c6eb8a868184c2817352c9311c4e9cee274ff96da252f94391->enter($__internal_46818a3a02dec1c6eb8a868184c2817352c9311c4e9cee274ff96da252f94391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Layout/includes:flash_message.html.twig"));

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        // line 4
        echo "        ";
        // line 5
        echo "        ";
        // line 6
        echo "        ";
        // line 7
        echo "        ";
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        // line 10
        echo "    ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        // line 14
        echo "
        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "
        ";
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        // line 22
        echo "    ";
        // line 23
        echo "        ";
        // line 24
        echo "    ";
        
        $__internal_46818a3a02dec1c6eb8a868184c2817352c9311c4e9cee274ff96da252f94391->leave($__internal_46818a3a02dec1c6eb8a868184c2817352c9311c4e9cee274ff96da252f94391_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Layout/includes:flash_message.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  62 => 23,  60 => 22,  58 => 21,  56 => 20,  53 => 18,  51 => 17,  49 => 16,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% for label, flashes in app.session.flashbag.all %}#}
    {#{% if flashes|length > 0 %}#}
        {#{% set blockClasses = ['message-block'] %}#}
        {#{% if label =='error' %}#}
        {#{% set blockClasses = blockClasses|merge(['error-message']) %}#}
        {#{% else %}#}
        {#{% set blockClasses = blockClasses|merge(['info-message']) %}#}
        {#{% endif %}#}
        {#<div class=\"{{ blockClasses|join(' ') }}\">#}
    {#{% for flash in flashes %}#}
        {#{% if label =='success' %}#}
        {#<p class=\"alert-{{ label }}\">{{ flash }}</p>#}
        {#{% endif %}#}

        {#{% if label =='info' %}#}
        {#<p class=\"alert-{{ label }}\">{{ flash }}</p>#}
        {#{% endif %}#}

        {#{% if label =='error' %}#}
        {#<p class=\"alert-{{ label }}\">{{ flash }}</p>#}
        {#{% endif %}#}
    {#{% endfor %}#}
        {#</div>#}
    {#{% endif %}#}
{#{% endfor %}#}", "BlogCoreBundle:Layout/includes:flash_message.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Layout/includes/flash_message.html.twig");
    }
}
