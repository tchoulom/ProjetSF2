<?php

/* FMElfinderBundle:Form:elfinder_widget.html.twig */
class __TwigTemplate_67eea98fe2f79107c4119d2afacef9e9879dea2f2a69fe2cba2424aafe0e2ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'elfinder_widget' => array($this, 'block_elfinder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d6dc7f1aa6f0153213ca26fe6134609787c291fed0ffb2d2564f4355269c72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6dc7f1aa6f0153213ca26fe6134609787c291fed0ffb2d2564f4355269c72a->enter($__internal_4d6dc7f1aa6f0153213ca26fe6134609787c291fed0ffb2d2564f4355269c72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
        
        $__internal_4d6dc7f1aa6f0153213ca26fe6134609787c291fed0ffb2d2564f4355269c72a->leave($__internal_4d6dc7f1aa6f0153213ca26fe6134609787c291fed0ffb2d2564f4355269c72a_prof);

    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        $__internal_4895f86562cf46f3c766f05a9e4c5e300c35d28155a098e04b5e2240737418e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4895f86562cf46f3c766f05a9e4c5e300c35d28155a098e04b5e2240737418e4->enter($__internal_4895f86562cf46f3c766f05a9e4c5e300c35d28155a098e04b5e2240737418e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"]').on(\"click\",function() {
                    var childWin = window.open(\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    ";
        }
        
        $__internal_4895f86562cf46f3c766f05a9e4c5e300c35d28155a098e04b5e2240737418e4->leave($__internal_4895f86562cf46f3c766f05a9e4c5e300c35d28155a098e04b5e2240737418e4_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Form:elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 6,  48 => 4,  46 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block elfinder_widget %}
    <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-type=\"elfinder-input-field\" />
    {% if enable and instance is defined %}
        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"{{ id }}\"]').on(\"click\",function() {
                    var childWin = window.open(\"{{path('elfinder', {'instance': instance, 'homeFolder': homeFolder })}}?id={{ id }}\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    {% endif %}
{% endblock %}
", "FMElfinderBundle:Form:elfinder_widget.html.twig", "/var/www/symfony/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Form/elfinder_widget.html.twig");
    }
}
