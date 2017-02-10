<?php

/* BlogCoreBundle:Layout/includes:js.html.twig */
class __TwigTemplate_9e3594b3393ae3590fa13acbf7d863b336d86ecd8f365b3c5fb024df0172af6d extends Twig_Template
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
        $__internal_e2e50881bbf5a18e94c74cb4674ac51425a6d4b2a1a5aa793598c9a72ace7322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e50881bbf5a18e94c74cb4674ac51425a6d4b2a1a5aa793598c9a72ace7322->enter($__internal_e2e50881bbf5a18e94c74cb4674ac51425a6d4b2a1a5aa793598c9a72ace7322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Layout/includes:js.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/js/theme/corlate/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/js/theme/corlate/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/js/theme/corlate/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/js/theme/corlate/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/js/theme/corlate/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blogcore/js/theme/corlate/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>";
        
        $__internal_e2e50881bbf5a18e94c74cb4674ac51425a6d4b2a1a5aa793598c9a72ace7322->leave($__internal_e2e50881bbf5a18e94c74cb4674ac51425a6d4b2a1a5aa793598c9a72ace7322_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Layout/includes:js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset('bundles/blogcore/js/theme/corlate/js/jquery.js') }}\"></script>
<script src=\"{{ asset('bundles/blogcore/js/theme/corlate/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('bundles/blogcore/js/theme/corlate/js/jquery.prettyPhoto.js') }}\"></script>
<script src=\"{{ asset('bundles/blogcore/js/theme/corlate/js/jquery.isotope.min.js') }}\"></script>
<script src=\"{{ asset('bundles/blogcore/js/theme/corlate/js/main.js') }}\"></script>
<script src=\"{{ asset('bundles/blogcore/js/theme/corlate/js/wow.min.js') }}\"></script>
<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>", "BlogCoreBundle:Layout/includes:js.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Layout/includes/js.html.twig");
    }
}
