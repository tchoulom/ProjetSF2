<?php

/* BlogCoreBundle:Layout/includes:firstBlock.html.twig */
class __TwigTemplate_bc88e111e582fc7b93b5c5672c5652a332a407bd6eaf26208cc22be79dc95fd8 extends Twig_Template
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
        $__internal_c2f6544af13f1bba35744e830c3d907cf8dc7bf41704ed35dc4826bd573707b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f6544af13f1bba35744e830c3d907cf8dc7bf41704ed35dc4826bd573707b2->enter($__internal_c2f6544af13f1bba35744e830c3d907cf8dc7bf41704ed35dc4826bd573707b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Layout/includes:firstBlock.html.twig"));

        // line 1
        $context["sliderUrl"] = "bundles/blogcore/images/theme/corlate/slider/";
        // line 2
        echo "<section id=\"main-slider\" class=\"no-margin\">
    <div class=\"carousel slide\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">

            <div class=\"item active\" style=\"background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["sliderUrl"]) ? $context["sliderUrl"] : $this->getContext($context, "sliderUrl")) . "bg1.jpg")), "html", null, true);
        echo "')\">
                <div class=\"container\">
                    <div class=\"row slide-margin\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                            </div>
                        </div>

                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                            <div class=\"slider-img\">
                                <img src=\"images/slider/img1.png\" class=\"img-responsive\">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class=\"item\" style=\"background-image: url('";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["sliderUrl"]) ? $context["sliderUrl"] : $this->getContext($context, "sliderUrl")) . "bg2.jpg")), "html", null, true);
        echo "')\">
                <div class=\"container\">
                    <div class=\"row slide-margin\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                            </div>
                        </div>

                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                            <div class=\"slider-img\">
                                <img src=\"images/slider/img2.png\" class=\"img-responsive\">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class=\"item\" style=\"background-image: url('";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["sliderUrl"]) ? $context["sliderUrl"] : $this->getContext($context, "sliderUrl")) . "bg3.jpg")), "html", null, true);
        echo "')\">
                <div class=\"container\">
                    <div class=\"row slide-margin\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                            <div class=\"slider-img\">
                                <img src=\"images/slider/img3.png\" class=\"img-responsive\">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section><!--/#main-slider-->";
        
        $__internal_c2f6544af13f1bba35744e830c3d907cf8dc7bf41704ed35dc4826bd573707b2->leave($__internal_c2f6544af13f1bba35744e830c3d907cf8dc7bf41704ed35dc4826bd573707b2_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Layout/includes:firstBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 53,  59 => 32,  35 => 11,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set sliderUrl = 'bundles/blogcore/images/theme/corlate/slider/' %}
<section id=\"main-slider\" class=\"no-margin\">
    <div class=\"carousel slide\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">

            <div class=\"item active\" style=\"background-image: url('{{ asset(sliderUrl ~ 'bg1.jpg') }}')\">
                <div class=\"container\">
                    <div class=\"row slide-margin\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                            </div>
                        </div>

                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                            <div class=\"slider-img\">
                                <img src=\"images/slider/img1.png\" class=\"img-responsive\">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class=\"item\" style=\"background-image: url('{{ asset(sliderUrl ~ 'bg2.jpg') }}')\">
                <div class=\"container\">
                    <div class=\"row slide-margin\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                            </div>
                        </div>

                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                            <div class=\"slider-img\">
                                <img src=\"images/slider/img2.png\" class=\"img-responsive\">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class=\"item\" style=\"background-image: url('{{ asset(sliderUrl ~ 'bg3.jpg') }}')\">
                <div class=\"container\">
                    <div class=\"row slide-margin\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                            <div class=\"slider-img\">
                                <img src=\"images/slider/img3.png\" class=\"img-responsive\">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section><!--/#main-slider-->", "BlogCoreBundle:Layout/includes:firstBlock.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Layout/includes/firstBlock.html.twig");
    }
}
