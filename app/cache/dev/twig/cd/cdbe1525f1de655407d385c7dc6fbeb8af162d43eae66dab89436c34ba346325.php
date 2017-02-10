<?php

/* BlogCoreBundle:Home:index.html.twig */
class __TwigTemplate_49dc5ba44ea68ffb5227b04ebfbc70ff7c08f3c97c1d9c4549e7caddf69abc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogCoreBundle:Layout:layout.html.twig", "BlogCoreBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'corps' => array($this, 'block_corps'),
            'firstBlock' => array($this, 'block_firstBlock'),
            'secondBlock' => array($this, 'block_secondBlock'),
            'thirdBlock' => array($this, 'block_thirdBlock'),
            'fourthBlock' => array($this, 'block_fourthBlock'),
            'fifthBlock' => array($this, 'block_fifthBlock'),
            'sixthBlock' => array($this, 'block_sixthBlock'),
            'seventhBlock' => array($this, 'block_seventhBlock'),
            'eighthBlock' => array($this, 'block_eighthBlock'),
            'ninthBlock' => array($this, 'block_ninthBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogCoreBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa141a9bf59e5241090c085fefd83c7525a5b6e4dd5fd68eb24dfa5a3a84b29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa141a9bf59e5241090c085fefd83c7525a5b6e4dd5fd68eb24dfa5a3a84b29e->enter($__internal_fa141a9bf59e5241090c085fefd83c7525a5b6e4dd5fd68eb24dfa5a3a84b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa141a9bf59e5241090c085fefd83c7525a5b6e4dd5fd68eb24dfa5a3a84b29e->leave($__internal_fa141a9bf59e5241090c085fefd83c7525a5b6e4dd5fd68eb24dfa5a3a84b29e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b43ef64ccf7cbd49d1e3cef65f7fc54817beed931b0c8849ad610abe7358ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b43ef64ccf7cbd49d1e3cef65f7fc54817beed931b0c8849ad610abe7358ad7->enter($__internal_5b43ef64ccf7cbd49d1e3cef65f7fc54817beed931b0c8849ad610abe7358ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " | ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5b43ef64ccf7cbd49d1e3cef65f7fc54817beed931b0c8849ad610abe7358ad7->leave($__internal_5b43ef64ccf7cbd49d1e3cef65f7fc54817beed931b0c8849ad610abe7358ad7_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa664b62f1dbc1fadfadd122fe5bb744bf2da8117d2e6aa172aea34a23682290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa664b62f1dbc1fadfadd122fe5bb744bf2da8117d2e6aa172aea34a23682290->enter($__internal_fa664b62f1dbc1fadfadd122fe5bb744bf2da8117d2e6aa172aea34a23682290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_fa664b62f1dbc1fadfadd122fe5bb744bf2da8117d2e6aa172aea34a23682290->leave($__internal_fa664b62f1dbc1fadfadd122fe5bb744bf2da8117d2e6aa172aea34a23682290_prof);

    }

    // line 13
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ff8a88b301edba6f023beac8e2b35008501325b3487b556fea5b8e1e2d596ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8a88b301edba6f023beac8e2b35008501325b3487b556fea5b8e1e2d596ef0->enter($__internal_ff8a88b301edba6f023beac8e2b35008501325b3487b556fea5b8e1e2d596ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 14
        echo "    ";
        $this->displayParentBlock("navigation", $context, $blocks);
        echo "
";
        
        $__internal_ff8a88b301edba6f023beac8e2b35008501325b3487b556fea5b8e1e2d596ef0->leave($__internal_ff8a88b301edba6f023beac8e2b35008501325b3487b556fea5b8e1e2d596ef0_prof);

    }

    // line 17
    public function block_corps($context, array $blocks = array())
    {
        $__internal_1bbb79a55c82a1168e0547cd3791a2cb091e6873703b229e172e39c06ce2c23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbb79a55c82a1168e0547cd3791a2cb091e6873703b229e172e39c06ce2c23c->enter($__internal_1bbb79a55c82a1168e0547cd3791a2cb091e6873703b229e172e39c06ce2c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 18
        echo "    ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:flash_message.html.twig", "BlogCoreBundle:Home:index.html.twig", 18)->display($context);
        // line 19
        echo "    ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:form_errors.html.twig", "BlogCoreBundle:Home:index.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('firstBlock', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('secondBlock', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('thirdBlock', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('fourthBlock', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('fifthBlock', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('sixthBlock', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('seventhBlock', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('eighthBlock', $context, $blocks);
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('ninthBlock', $context, $blocks);
        
        $__internal_1bbb79a55c82a1168e0547cd3791a2cb091e6873703b229e172e39c06ce2c23c->leave($__internal_1bbb79a55c82a1168e0547cd3791a2cb091e6873703b229e172e39c06ce2c23c_prof);

    }

    // line 21
    public function block_firstBlock($context, array $blocks = array())
    {
        $__internal_ef4436101aa8557cb9e09330061dfa83e5c1a2e23d48b5510a47d614b4fe4526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4436101aa8557cb9e09330061dfa83e5c1a2e23d48b5510a47d614b4fe4526->enter($__internal_ef4436101aa8557cb9e09330061dfa83e5c1a2e23d48b5510a47d614b4fe4526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "firstBlock"));

        // line 22
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:firstBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 22)->display($context);
        // line 23
        echo "    ";
        
        $__internal_ef4436101aa8557cb9e09330061dfa83e5c1a2e23d48b5510a47d614b4fe4526->leave($__internal_ef4436101aa8557cb9e09330061dfa83e5c1a2e23d48b5510a47d614b4fe4526_prof);

    }

    // line 25
    public function block_secondBlock($context, array $blocks = array())
    {
        $__internal_192beeca34fef08db2acac6c49468b97627f36785097e057c312ac3878bd6174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192beeca34fef08db2acac6c49468b97627f36785097e057c312ac3878bd6174->enter($__internal_192beeca34fef08db2acac6c49468b97627f36785097e057c312ac3878bd6174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondBlock"));

        // line 26
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:secondBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 26)->display($context);
        // line 27
        echo "    ";
        
        $__internal_192beeca34fef08db2acac6c49468b97627f36785097e057c312ac3878bd6174->leave($__internal_192beeca34fef08db2acac6c49468b97627f36785097e057c312ac3878bd6174_prof);

    }

    // line 29
    public function block_thirdBlock($context, array $blocks = array())
    {
        $__internal_6bee4bc1ac1a9b36b6049185037cc4630486ee9c325644023a95a191597c1ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bee4bc1ac1a9b36b6049185037cc4630486ee9c325644023a95a191597c1ce0->enter($__internal_6bee4bc1ac1a9b36b6049185037cc4630486ee9c325644023a95a191597c1ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thirdBlock"));

        // line 30
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:thirdBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 30)->display($context);
        // line 31
        echo "    ";
        
        $__internal_6bee4bc1ac1a9b36b6049185037cc4630486ee9c325644023a95a191597c1ce0->leave($__internal_6bee4bc1ac1a9b36b6049185037cc4630486ee9c325644023a95a191597c1ce0_prof);

    }

    // line 33
    public function block_fourthBlock($context, array $blocks = array())
    {
        $__internal_c2e5daf9e1805b1e32dea4c13becbc5abbb4282c885c34a54661cc7661b52add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e5daf9e1805b1e32dea4c13becbc5abbb4282c885c34a54661cc7661b52add->enter($__internal_c2e5daf9e1805b1e32dea4c13becbc5abbb4282c885c34a54661cc7661b52add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fourthBlock"));

        // line 34
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:fourthBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 34)->display($context);
        // line 35
        echo "    ";
        
        $__internal_c2e5daf9e1805b1e32dea4c13becbc5abbb4282c885c34a54661cc7661b52add->leave($__internal_c2e5daf9e1805b1e32dea4c13becbc5abbb4282c885c34a54661cc7661b52add_prof);

    }

    // line 37
    public function block_fifthBlock($context, array $blocks = array())
    {
        $__internal_7963768c49e22a432153e9076b59e09398daa5e89520cdc20a17e0b77f491456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7963768c49e22a432153e9076b59e09398daa5e89520cdc20a17e0b77f491456->enter($__internal_7963768c49e22a432153e9076b59e09398daa5e89520cdc20a17e0b77f491456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fifthBlock"));

        // line 38
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:fifthBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 38)->display($context);
        // line 39
        echo "    ";
        
        $__internal_7963768c49e22a432153e9076b59e09398daa5e89520cdc20a17e0b77f491456->leave($__internal_7963768c49e22a432153e9076b59e09398daa5e89520cdc20a17e0b77f491456_prof);

    }

    // line 41
    public function block_sixthBlock($context, array $blocks = array())
    {
        $__internal_68303d35372ae7befb582be9e55791471bf7ba211f2af328e4ec338bb0ea33e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68303d35372ae7befb582be9e55791471bf7ba211f2af328e4ec338bb0ea33e7->enter($__internal_68303d35372ae7befb582be9e55791471bf7ba211f2af328e4ec338bb0ea33e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sixthBlock"));

        // line 42
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:sixthBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 42)->display($context);
        // line 43
        echo "    ";
        
        $__internal_68303d35372ae7befb582be9e55791471bf7ba211f2af328e4ec338bb0ea33e7->leave($__internal_68303d35372ae7befb582be9e55791471bf7ba211f2af328e4ec338bb0ea33e7_prof);

    }

    // line 45
    public function block_seventhBlock($context, array $blocks = array())
    {
        $__internal_e7b20735202074c32c441631c1e3cfcb868dffc9e4f321bc6876e3f5b4b35715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b20735202074c32c441631c1e3cfcb868dffc9e4f321bc6876e3f5b4b35715->enter($__internal_e7b20735202074c32c441631c1e3cfcb868dffc9e4f321bc6876e3f5b4b35715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seventhBlock"));

        // line 46
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:seventhBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 46)->display($context);
        echo "}
    ";
        
        $__internal_e7b20735202074c32c441631c1e3cfcb868dffc9e4f321bc6876e3f5b4b35715->leave($__internal_e7b20735202074c32c441631c1e3cfcb868dffc9e4f321bc6876e3f5b4b35715_prof);

    }

    // line 49
    public function block_eighthBlock($context, array $blocks = array())
    {
        $__internal_c55746a5adfeb7d996170ed794ee3e676f0b6d42f8009969afc3f907b9e9dcce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55746a5adfeb7d996170ed794ee3e676f0b6d42f8009969afc3f907b9e9dcce->enter($__internal_c55746a5adfeb7d996170ed794ee3e676f0b6d42f8009969afc3f907b9e9dcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "eighthBlock"));

        // line 50
        echo "       ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:eighthBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 50)->display($context);
        // line 51
        echo "    ";
        
        $__internal_c55746a5adfeb7d996170ed794ee3e676f0b6d42f8009969afc3f907b9e9dcce->leave($__internal_c55746a5adfeb7d996170ed794ee3e676f0b6d42f8009969afc3f907b9e9dcce_prof);

    }

    // line 53
    public function block_ninthBlock($context, array $blocks = array())
    {
        $__internal_49cb872ff59cc1368271cdced57bb018a463031cffbf0f8abc927110b2e6294a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cb872ff59cc1368271cdced57bb018a463031cffbf0f8abc927110b2e6294a->enter($__internal_49cb872ff59cc1368271cdced57bb018a463031cffbf0f8abc927110b2e6294a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ninthBlock"));

        // line 54
        echo "        ";
        $this->loadTemplate("BlogCoreBundle:Layout/includes:ninthBlock.html.twig", "BlogCoreBundle:Home:index.html.twig", 54)->display($context);
        // line 55
        echo "    ";
        
        $__internal_49cb872ff59cc1368271cdced57bb018a463031cffbf0f8abc927110b2e6294a->leave($__internal_49cb872ff59cc1368271cdced57bb018a463031cffbf0f8abc927110b2e6294a_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 55,  296 => 54,  290 => 53,  283 => 51,  280 => 50,  274 => 49,  264 => 46,  258 => 45,  251 => 43,  248 => 42,  242 => 41,  235 => 39,  232 => 38,  226 => 37,  219 => 35,  216 => 34,  210 => 33,  203 => 31,  200 => 30,  194 => 29,  187 => 27,  184 => 26,  178 => 25,  171 => 23,  168 => 22,  162 => 21,  155 => 53,  152 => 52,  150 => 49,  147 => 48,  145 => 45,  142 => 44,  140 => 41,  137 => 40,  135 => 37,  132 => 36,  130 => 33,  127 => 32,  125 => 29,  122 => 28,  120 => 25,  117 => 24,  115 => 21,  112 => 20,  109 => 19,  106 => 18,  100 => 17,  90 => 14,  84 => 13,  74 => 10,  68 => 9,  55 => 5,  52 => 4,  46 => 3,  11 => 1,);
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
        {{ app.user.username }} | {{ parent() }}
    {% endif %}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock stylesheets %}

{% block navigation %}
    {{ parent() }}
{% endblock navigation %}
    
{% block corps %}
    {% include 'BlogCoreBundle:Layout/includes:flash_message.html.twig' %}
    {% include 'BlogCoreBundle:Layout/includes:form_errors.html.twig' %}

    {% block firstBlock %}
        {% include 'BlogCoreBundle:Layout/includes:firstBlock.html.twig' %}
    {% endblock firstBlock %}

    {% block secondBlock %}
        {% include 'BlogCoreBundle:Layout/includes:secondBlock.html.twig' %}
    {% endblock secondBlock %}

    {% block thirdBlock %}
        {% include 'BlogCoreBundle:Layout/includes:thirdBlock.html.twig' %}
    {% endblock thirdBlock %}

    {% block fourthBlock %}
        {% include 'BlogCoreBundle:Layout/includes:fourthBlock.html.twig' %}
    {% endblock fourthBlock %}

    {% block fifthBlock %}
        {% include 'BlogCoreBundle:Layout/includes:fifthBlock.html.twig' %}
    {% endblock fifthBlock %}

    {% block sixthBlock %}
        {% include 'BlogCoreBundle:Layout/includes:sixthBlock.html.twig' %}
    {% endblock sixthBlock %}

    {% block seventhBlock %}
        {% include 'BlogCoreBundle:Layout/includes:seventhBlock.html.twig' %}}
    {% endblock seventhBlock %}

    {% block eighthBlock %}
       {% include 'BlogCoreBundle:Layout/includes:eighthBlock.html.twig' %}
    {% endblock eighthBlock %}

    {% block ninthBlock %}
        {% include 'BlogCoreBundle:Layout/includes:ninthBlock.html.twig' %}
    {% endblock ninthBlock %}
{% endblock corps %}", "BlogCoreBundle:Home:index.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Home/index.html.twig");
    }
}
