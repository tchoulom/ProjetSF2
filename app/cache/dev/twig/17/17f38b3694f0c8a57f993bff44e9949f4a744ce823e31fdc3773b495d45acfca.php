<?php

/* BlogBlogBundle:User/Registration:register.html.twig */
class __TwigTemplate_b52cfa171f6dd4cdd6a372ae243396a622ee74fa6a8878daa8078c55e5d3f2a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogCoreBundle:Layout:layout.html.twig", "BlogBlogBundle:User/Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'corps' => array($this, 'block_corps'),
            'registerForm' => array($this, 'block_registerForm'),
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
        $__internal_456a95257618a292521cb9cdebe392ef59652405174eba67a9dd3afa063ed2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456a95257618a292521cb9cdebe392ef59652405174eba67a9dd3afa063ed2be->enter($__internal_456a95257618a292521cb9cdebe392ef59652405174eba67a9dd3afa063ed2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBlogBundle:User/Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_456a95257618a292521cb9cdebe392ef59652405174eba67a9dd3afa063ed2be->leave($__internal_456a95257618a292521cb9cdebe392ef59652405174eba67a9dd3afa063ed2be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_effd4be5ded7731fbc9a3f5048027cb1899064c12337b264017ec2cd5d38f4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effd4be5ded7731fbc9a3f5048027cb1899064c12337b264017ec2cd5d38f4ea->enter($__internal_effd4be5ded7731fbc9a3f5048027cb1899064c12337b264017ec2cd5d38f4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_effd4be5ded7731fbc9a3f5048027cb1899064c12337b264017ec2cd5d38f4ea->leave($__internal_effd4be5ded7731fbc9a3f5048027cb1899064c12337b264017ec2cd5d38f4ea_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18a34ce65daf72e8012abe52e70e188796ace5f2d6636fd1fda1586e1c73c55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a34ce65daf72e8012abe52e70e188796ace5f2d6636fd1fda1586e1c73c55c->enter($__internal_18a34ce65daf72e8012abe52e70e188796ace5f2d6636fd1fda1586e1c73c55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogblog/css/registration/register.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_18a34ce65daf72e8012abe52e70e188796ace5f2d6636fd1fda1586e1c73c55c->leave($__internal_18a34ce65daf72e8012abe52e70e188796ace5f2d6636fd1fda1586e1c73c55c_prof);

    }

    // line 14
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_459ec2bb483d5b6c4e463a681bcd900edd6c6dc9ec5ed2df57dc988049e890da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459ec2bb483d5b6c4e463a681bcd900edd6c6dc9ec5ed2df57dc988049e890da->enter($__internal_459ec2bb483d5b6c4e463a681bcd900edd6c6dc9ec5ed2df57dc988049e890da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 15
        echo "    ";
        $this->displayParentBlock("navigation", $context, $blocks);
        echo "
";
        
        $__internal_459ec2bb483d5b6c4e463a681bcd900edd6c6dc9ec5ed2df57dc988049e890da->leave($__internal_459ec2bb483d5b6c4e463a681bcd900edd6c6dc9ec5ed2df57dc988049e890da_prof);

    }

    // line 18
    public function block_corps($context, array $blocks = array())
    {
        $__internal_f0af7a6834d0faed166394c7c3952aa1f61204f0f2c738f07d0d532bb8a65bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0af7a6834d0faed166394c7c3952aa1f61204f0f2c738f07d0d532bb8a65bd4->enter($__internal_f0af7a6834d0faed166394c7c3952aa1f61204f0f2c738f07d0d532bb8a65bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 19
        echo "    ";
        $this->displayBlock('registerForm', $context, $blocks);
        
        $__internal_f0af7a6834d0faed166394c7c3952aa1f61204f0f2c738f07d0d532bb8a65bd4->leave($__internal_f0af7a6834d0faed166394c7c3952aa1f61204f0f2c738f07d0d532bb8a65bd4_prof);

    }

    public function block_registerForm($context, array $blocks = array())
    {
        $__internal_c88411f2aa4fd42de77789d8908b62245d027bc29841c0f266c87026d182505b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88411f2aa4fd42de77789d8908b62245d027bc29841c0f266c87026d182505b->enter($__internal_c88411f2aa4fd42de77789d8908b62245d027bc29841c0f266c87026d182505b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerForm"));

        // line 20
        echo "        ";
        $this->loadTemplate("BlogBlogBundle:User/Registration:registerForm.html.twig", "BlogBlogBundle:User/Registration:register.html.twig", 20)->display($context);
        // line 21
        echo "    ";
        
        $__internal_c88411f2aa4fd42de77789d8908b62245d027bc29841c0f266c87026d182505b->leave($__internal_c88411f2aa4fd42de77789d8908b62245d027bc29841c0f266c87026d182505b_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6f40aa6238a78e3849e10be178b6b7e218c3224699cb7b0d1b0c8fd6fb8124fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f40aa6238a78e3849e10be178b6b7e218c3224699cb7b0d1b0c8fd6fb8124fb->enter($__internal_6f40aa6238a78e3849e10be178b6b7e218c3224699cb7b0d1b0c8fd6fb8124fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_6f40aa6238a78e3849e10be178b6b7e218c3224699cb7b0d1b0c8fd6fb8124fb->leave($__internal_6f40aa6238a78e3849e10be178b6b7e218c3224699cb7b0d1b0c8fd6fb8124fb_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8de85351bba23ed95b29a270c0103703333052036a78c0df705938822a70a4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de85351bba23ed95b29a270c0103703333052036a78c0df705938822a70a4fa->enter($__internal_8de85351bba23ed95b29a270c0103703333052036a78c0df705938822a70a4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_8de85351bba23ed95b29a270c0103703333052036a78c0df705938822a70a4fa->leave($__internal_8de85351bba23ed95b29a270c0103703333052036a78c0df705938822a70a4fa_prof);

    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:User/Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 29,  143 => 28,  133 => 25,  127 => 24,  120 => 21,  117 => 20,  104 => 19,  98 => 18,  88 => 15,  82 => 14,  73 => 11,  68 => 10,  62 => 9,  49 => 5,  46 => 4,  40 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/blogblog/css/registration/register.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock stylesheets %}

{% block navigation %}
    {{ parent() }}
{% endblock navigation %}

{% block corps %}
    {% block registerForm %}
        {% include 'BlogBlogBundle:User/Registration:registerForm.html.twig' %}
    {% endblock registerForm %}
{% endblock corps %}

{% block footer %}
    {{ parent() }}
{% endblock footer %}

{% block javascripts %}
    {{ parent() }}
{% endblock javascripts %}
", "BlogBlogBundle:User/Registration:register.html.twig", "/var/www/symfony/src/Blog/BlogBundle/Resources/views/User/Registration/register.html.twig");
    }
}
