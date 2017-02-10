<?php

/* BlogCoreBundle:Layout/includes:navigation.html.twig */
class __TwigTemplate_394120c0395e03de5746c2fbde39d5e1f58e61e4ff7b5a3bb8446a3690b17756 extends Twig_Template
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
        $__internal_16e1bf6feb01cf698a7c3ed915454df101a099dbc42393460dc1253c6f54af5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e1bf6feb01cf698a7c3ed915454df101a099dbc42393460dc1253c6f54af5a->enter($__internal_16e1bf6feb01cf698a7c3ed915454df101a099dbc42393460dc1253c6f54af5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogCoreBundle:Layout/includes:navigation.html.twig"));

        // line 1
        echo "<header id=\"header\">
        
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
            <div class=\"top-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-xs-4\">
                            <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  +0123 456 70 90</p></div>
                        </div>
                        <div class=\"col-sm-6 col-xs-8\">
                           <div class=\"social\">
                                <ul class=\"social-share\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                </ul>
                                <div class=\"search\">
                                    <form role=\"form\">
                                        <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                        <i class=\"fa fa-search\"></i>
                                    </form>
                               </div>
                           </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->
            
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    ";
        // line 40
        echo "                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 45
        echo "                        <li><a href=\"about-us.html\">About Us</a></li>
                        <li><a href=\"services.html\">Services</a></li>
                        <li><a href=\"portfolio.html\">Portfolio</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"fa fa-angle-down\"></i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"blog-item.html\">Blog Single</a></li>
                                <li><a href=\"pricing.html\">Pricing</a></li>
                                <li><a href=\"404.html\">404</a></li>
                                <li><a href=\"shortcodes.html\">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href=\"blog.html\">Blog</a></li> 
                        ";
        // line 59
        echo "                        ";
        $this->loadTemplate("BlogCoreBundle:Security:login.html.twig", "BlogCoreBundle:Layout/includes:navigation.html.twig", 59)->display($context);
        // line 60
        echo "                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
\t\t
    </header><!--/header-->";
        
        $__internal_16e1bf6feb01cf698a7c3ed915454df101a099dbc42393460dc1253c6f54af5a->leave($__internal_16e1bf6feb01cf698a7c3ed915454df101a099dbc42393460dc1253c6f54af5a_prof);

    }

    public function getTemplateName()
    {
        return "BlogCoreBundle:Layout/includes:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 60,  83 => 59,  68 => 45,  62 => 40,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
        
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
            <div class=\"top-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-xs-4\">
                            <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  +0123 456 70 90</p></div>
                        </div>
                        <div class=\"col-sm-6 col-xs-8\">
                           <div class=\"social\">
                                <ul class=\"social-share\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                </ul>
                                <div class=\"search\">
                                    <form role=\"form\">
                                        <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                        <i class=\"fa fa-search\"></i>
                                    </form>
                               </div>
                           </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->
            
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    {#<a class=\"navbar-brand\" href=\"{{ path('project_business_controller') }}\"><img src=\"images/logo.png\" alt=\"logo\"></a>#}
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        {#<li class=\"active\"><a href=\"{{ path('project_business_controller') }}\">{{'menu.accueil'|trans}}</a></li>#}
                        <li><a href=\"about-us.html\">About Us</a></li>
                        <li><a href=\"services.html\">Services</a></li>
                        <li><a href=\"portfolio.html\">Portfolio</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"fa fa-angle-down\"></i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"blog-item.html\">Blog Single</a></li>
                                <li><a href=\"pricing.html\">Pricing</a></li>
                                <li><a href=\"404.html\">404</a></li>
                                <li><a href=\"shortcodes.html\">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href=\"blog.html\">Blog</a></li> 
                        {#<li><a href=\"{{ path('project_email_me') }}\">Contact</a></li>          #}
                        {% include 'BlogCoreBundle:Security:login.html.twig' %}
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
\t\t
    </header><!--/header-->", "BlogCoreBundle:Layout/includes:navigation.html.twig", "/var/www/symfony/src/Blog/CoreBundle/Resources/views/Layout/includes/navigation.html.twig");
    }
}
