<?php

/* BlogBlogBundle:User/Security:login.html.twig */
class __TwigTemplate_8c8348645bea6e5c853e18d51a58ac8c47c4494bc9cd56dade45f78d61bcb144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogCoreBundle:Layout:layout.html.twig", "BlogBlogBundle:User/Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'corps' => array($this, 'block_corps'),
            'loginForm' => array($this, 'block_loginForm'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogCoreBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06e7cf732d1ff19daa1643327b5f155b5075ffafa4f309d09a7902c6cb2112a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06e7cf732d1ff19daa1643327b5f155b5075ffafa4f309d09a7902c6cb2112a->enter($__internal_a06e7cf732d1ff19daa1643327b5f155b5075ffafa4f309d09a7902c6cb2112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBlogBundle:User/Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06e7cf732d1ff19daa1643327b5f155b5075ffafa4f309d09a7902c6cb2112a->leave($__internal_a06e7cf732d1ff19daa1643327b5f155b5075ffafa4f309d09a7902c6cb2112a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3645d06ba76be960c0ebcbb85cfbe8debc433e91077e2873a3dfd412b4f035ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3645d06ba76be960c0ebcbb85cfbe8debc433e91077e2873a3dfd412b4f035ad->enter($__internal_3645d06ba76be960c0ebcbb85cfbe8debc433e91077e2873a3dfd412b4f035ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.new.title"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_3645d06ba76be960c0ebcbb85cfbe8debc433e91077e2873a3dfd412b4f035ad->leave($__internal_3645d06ba76be960c0ebcbb85cfbe8debc433e91077e2873a3dfd412b4f035ad_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be9c52df2411e9a3099fcd3993351f97cd4abef8000bd099d2a697b6ffeec8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9c52df2411e9a3099fcd3993351f97cd4abef8000bd099d2a697b6ffeec8d7->enter($__internal_be9c52df2411e9a3099fcd3993351f97cd4abef8000bd099d2a697b6ffeec8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_be9c52df2411e9a3099fcd3993351f97cd4abef8000bd099d2a697b6ffeec8d7->leave($__internal_be9c52df2411e9a3099fcd3993351f97cd4abef8000bd099d2a697b6ffeec8d7_prof);

    }

    // line 13
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6a4d33444fb0ef025f759c9d8fd6ce3b955f6071a63d4b52de73513e413923ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4d33444fb0ef025f759c9d8fd6ce3b955f6071a63d4b52de73513e413923ee->enter($__internal_6a4d33444fb0ef025f759c9d8fd6ce3b955f6071a63d4b52de73513e413923ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 14
        echo "    ";
        $this->displayParentBlock("navigation", $context, $blocks);
        echo "
";
        
        $__internal_6a4d33444fb0ef025f759c9d8fd6ce3b955f6071a63d4b52de73513e413923ee->leave($__internal_6a4d33444fb0ef025f759c9d8fd6ce3b955f6071a63d4b52de73513e413923ee_prof);

    }

    // line 17
    public function block_corps($context, array $blocks = array())
    {
        $__internal_2146d391756f1df8c1a820b6d974a597dca2090445bd88e94b0dde9297b7ea34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2146d391756f1df8c1a820b6d974a597dca2090445bd88e94b0dde9297b7ea34->enter($__internal_2146d391756f1df8c1a820b6d974a597dca2090445bd88e94b0dde9297b7ea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 18
        echo "    ";
        $this->displayBlock('loginForm', $context, $blocks);
        
        $__internal_2146d391756f1df8c1a820b6d974a597dca2090445bd88e94b0dde9297b7ea34->leave($__internal_2146d391756f1df8c1a820b6d974a597dca2090445bd88e94b0dde9297b7ea34_prof);

    }

    public function block_loginForm($context, array $blocks = array())
    {
        $__internal_0961905ef83a55eba18799c3ea352e7489a9050e5736133d3a5132180d599dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0961905ef83a55eba18799c3ea352e7489a9050e5736133d3a5132180d599dc5->enter($__internal_0961905ef83a55eba18799c3ea352e7489a9050e5736133d3a5132180d599dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loginForm"));

        // line 19
        echo "        ";
        $this->loadTemplate("BlogBlogBundle:User/Security:loginForm.html.twig", "BlogBlogBundle:User/Security:login.html.twig", 19)->display($context);
        // line 20
        echo "    ";
        
        $__internal_0961905ef83a55eba18799c3ea352e7489a9050e5736133d3a5132180d599dc5->leave($__internal_0961905ef83a55eba18799c3ea352e7489a9050e5736133d3a5132180d599dc5_prof);

    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7d9a2df2d580df02657f955c72acc910899c01538503a665b1bf753216ca3c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9a2df2d580df02657f955c72acc910899c01538503a665b1bf753216ca3c97->enter($__internal_7d9a2df2d580df02657f955c72acc910899c01538503a665b1bf753216ca3c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 24
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_7d9a2df2d580df02657f955c72acc910899c01538503a665b1bf753216ca3c97->leave($__internal_7d9a2df2d580df02657f955c72acc910899c01538503a665b1bf753216ca3c97_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14c4fc1d85c199ed89cf00d4f0bc87654d75adae06f2fe5433a66e5b33471cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c4fc1d85c199ed89cf00d4f0bc87654d75adae06f2fe5433a66e5b33471cea->enter($__internal_14c4fc1d85c199ed89cf00d4f0bc87654d75adae06f2fe5433a66e5b33471cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_14c4fc1d85c199ed89cf00d4f0bc87654d75adae06f2fe5433a66e5b33471cea->leave($__internal_14c4fc1d85c199ed89cf00d4f0bc87654d75adae06f2fe5433a66e5b33471cea_prof);

    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:User/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  139 => 27,  129 => 24,  123 => 23,  116 => 20,  113 => 19,  100 => 18,  94 => 17,  84 => 14,  78 => 13,  68 => 10,  62 => 9,  49 => 5,  46 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BlogCoreBundle:Layout:layout.html.twig\" %}

{% block title %}
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'course.new.title'|trans }} - {{ parent() }}
    {% endif %}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock stylesheets %}

{% block navigation %}
    {{ parent() }}
{% endblock navigation %}

{% block corps %}
    {% block loginForm %}
        {% include 'BlogBlogBundle:User/Security:loginForm.html.twig' %}
    {% endblock loginForm %}
{% endblock corps %}

{% block footer %}
    {{ parent() }}
{% endblock footer %}

{% block javascripts %}
    {{ parent() }}
{% endblock javascripts %}
", "BlogBlogBundle:User/Security:login.html.twig", "/var/www/symfony/src/Blog/BlogBundle/Resources/views/User/Security/login.html.twig");
    }
}
