<?php

/* BlogCoreBundle:Layout:layout.html.twig */
class __TwigTemplate_984617870f8e2bc8a00080294487862ce7cb74b3b7d0fe4547de0634aa3852d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'global_meta' => array($this, 'block_global_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
            'corps' => array($this, 'block_corps'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ce9ffbeedaaa0094f3e010d4b0c8bb30f49b7d5a6a87eecbea9d7a81f0af972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce9ffbeedaaa0094f3e010d4b0c8bb30f49b7d5a6a87eecbea9d7a81f0af972->enter($__internal_5ce9ffbeedaaa0094f3e010d4b0c8bb30f49b7d5a6a87eecbea9d7a81f0af972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Layout:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/images/favicon-16x16.png"), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/images/favicon-64x64.png"), "html", null, true);
        echo "\" sizes=\"64x64\"/>
    <meta name=\"viewport\" content=\"initial-scale=1\"/>
    ";
        // line 10
        $this->displayBlock('global_meta', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body class=\"homepage\">
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "</body>

</html>";
        
        $__internal_5ce9ffbeedaaa0094f3e010d4b0c8bb30f49b7d5a6a87eecbea9d7a81f0af972->leave($__internal_5ce9ffbeedaaa0094f3e010d4b0c8bb30f49b7d5a6a87eecbea9d7a81f0af972_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34ccdd8a4b528f494ba053a2724eff71bb0aeb42ad23f0753ac6e98f4a5849c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ccdd8a4b528f494ba053a2724eff71bb0aeb42ad23f0753ac6e98f4a5849c2->enter($__internal_34ccdd8a4b528f494ba053a2724eff71bb0aeb42ad23f0753ac6e98f4a5849c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.name"), "html", null, true);
        
        $__internal_34ccdd8a4b528f494ba053a2724eff71bb0aeb42ad23f0753ac6e98f4a5849c2->leave($__internal_34ccdd8a4b528f494ba053a2724eff71bb0aeb42ad23f0753ac6e98f4a5849c2_prof);

    }

    // line 10
    public function block_global_meta($context, array $blocks = array())
    {
        $__internal_8a1c24c0795da72deb551b9c23c46ac9a04dc8774633bb2837757ddac54d8bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1c24c0795da72deb551b9c23c46ac9a04dc8774633bb2837757ddac54d8bf5->enter($__internal_8a1c24c0795da72deb551b9c23c46ac9a04dc8774633bb2837757ddac54d8bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_meta"));

        
        $__internal_8a1c24c0795da72deb551b9c23c46ac9a04dc8774633bb2837757ddac54d8bf5->leave($__internal_8a1c24c0795da72deb551b9c23c46ac9a04dc8774633bb2837757ddac54d8bf5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f5a83e9b55f07105b2bbd2faa9e6be5e545793dfd1c67230f0ebaf03a47e7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5a83e9b55f07105b2bbd2faa9e6be5e545793dfd1c67230f0ebaf03a47e7cf->enter($__internal_4f5a83e9b55f07105b2bbd2faa9e6be5e545793dfd1c67230f0ebaf03a47e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:style.html.twig", "BlogCoreBundle:Layout:layout.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        
        $__internal_4f5a83e9b55f07105b2bbd2faa9e6be5e545793dfd1c67230f0ebaf03a47e7cf->leave($__internal_4f5a83e9b55f07105b2bbd2faa9e6be5e545793dfd1c67230f0ebaf03a47e7cf_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_463bc9ae0dda6883aa8ce86fd2b9b7a8232caeedd2d898921501f30db011f7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463bc9ae0dda6883aa8ce86fd2b9b7a8232caeedd2d898921501f30db011f7a2->enter($__internal_463bc9ae0dda6883aa8ce86fd2b9b7a8232caeedd2d898921501f30db011f7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('corps', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "
";
        
        $__internal_463bc9ae0dda6883aa8ce86fd2b9b7a8232caeedd2d898921501f30db011f7a2->leave($__internal_463bc9ae0dda6883aa8ce86fd2b9b7a8232caeedd2d898921501f30db011f7a2_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_89d7e465e89cfc835987e1d0ce0787dd14ed58fee9e784328baa7d8b8141028e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d7e465e89cfc835987e1d0ce0787dd14ed58fee9e784328baa7d8b8141028e->enter($__internal_89d7e465e89cfc835987e1d0ce0787dd14ed58fee9e784328baa7d8b8141028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 21
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:navigation.html.twig", "BlogCoreBundle:Layout:layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_89d7e465e89cfc835987e1d0ce0787dd14ed58fee9e784328baa7d8b8141028e->leave($__internal_89d7e465e89cfc835987e1d0ce0787dd14ed58fee9e784328baa7d8b8141028e_prof);

    }

    // line 24
    public function block_corps($context, array $blocks = array())
    {
        $__internal_e147de673c9ad72478ecb6a8c186ed826efe3fc360314536aa42a49aa733d3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e147de673c9ad72478ecb6a8c186ed826efe3fc360314536aa42a49aa733d3a9->enter($__internal_e147de673c9ad72478ecb6a8c186ed826efe3fc360314536aa42a49aa733d3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 25
        echo "    ";
        
        $__internal_e147de673c9ad72478ecb6a8c186ed826efe3fc360314536aa42a49aa733d3a9->leave($__internal_e147de673c9ad72478ecb6a8c186ed826efe3fc360314536aa42a49aa733d3a9_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_60d9dcefee741be0bd40b870ebed1173b35322695f4a7ed00f3d6188f54e647b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d9dcefee741be0bd40b870ebed1173b35322695f4a7ed00f3d6188f54e647b->enter($__internal_60d9dcefee741be0bd40b870ebed1173b35322695f4a7ed00f3d6188f54e647b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 28
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:footer.html.twig", "BlogCoreBundle:Layout:layout.html.twig", 28)->display($context);
        // line 29
        echo "    ";
        
        $__internal_60d9dcefee741be0bd40b870ebed1173b35322695f4a7ed00f3d6188f54e647b->leave($__internal_60d9dcefee741be0bd40b870ebed1173b35322695f4a7ed00f3d6188f54e647b_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cba3bcf4d6199483fc4bb1e05ffb95a3c9c9f2cc2dc934798d4c183cb250450e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba3bcf4d6199483fc4bb1e05ffb95a3c9c9f2cc2dc934798d4c183cb250450e->enter($__internal_cba3bcf4d6199483fc4bb1e05ffb95a3c9c9f2cc2dc934798d4c183cb250450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:js.html.twig", "BlogCoreBundle:Layout:layout.html.twig", 32)->display($context);
        // line 33
        echo "    ";
        
        $__internal_cba3bcf4d6199483fc4bb1e05ffb95a3c9c9f2cc2dc934798d4c183cb250450e->leave($__internal_cba3bcf4d6199483fc4bb1e05ffb95a3c9c9f2cc2dc934798d4c183cb250450e_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 33,  197 => 32,  191 => 31,  184 => 29,  181 => 28,  175 => 27,  168 => 25,  162 => 24,  155 => 22,  152 => 21,  146 => 20,  138 => 34,  136 => 31,  133 => 30,  131 => 27,  128 => 26,  126 => 24,  123 => 23,  121 => 20,  118 => 19,  112 => 18,  105 => 14,  102 => 13,  96 => 12,  85 => 10,  73 => 5,  64 => 36,  62 => 18,  57 => 15,  55 => 12,  52 => 11,  50 => 10,  45 => 8,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}{{ 'site.name'|trans }}{% endblock %}</title>

    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('bundles/blogcore/images/favicon-16x16.png') }}\"/>
    <link rel=\"apple-touch-icon\" href=\"{{ asset('bundles/blogcore/images/favicon-64x64.png') }}\" sizes=\"64x64\"/>
    <meta name=\"viewport\" content=\"initial-scale=1\"/>
    {% block global_meta %}{% endblock %}

    {% block stylesheets %}
        {% include 'BlogCoreBundle:Layout/includes:style.html.twig' %}
    {% endblock stylesheets %}
</head>

<body class=\"homepage\">
{% block body %}

    {% block navigation %}
        {% include 'BlogCoreBundle:Layout/includes:navigation.html.twig' %}
    {% endblock navigation %}

    {% block corps %}
    {% endblock corps %}

    {% block footer %}
        {% include 'BlogCoreBundle:Layout/includes:footer.html.twig' %}
    {% endblock footer %}

    {% block javascripts %}
        {% include 'BlogCoreBundle:Layout/includes:js.html.twig' %}
    {% endblock javascripts %}

{% endblock body %}
</body>

</html>", "BlogCoreBundle:Layout:layout.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Layout/layout.html.twig");
    }
}
