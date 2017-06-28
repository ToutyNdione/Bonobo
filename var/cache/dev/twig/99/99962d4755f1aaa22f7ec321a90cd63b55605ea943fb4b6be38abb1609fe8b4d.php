<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ac5b603bbbcc8af2850c19f9cb7a37c61a22c3cb2e859a89d9e0e935cc7e9387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1631119960d81aeabcc0005e9a3d609fe58440007805a5721142443197fc4b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1631119960d81aeabcc0005e9a3d609fe58440007805a5721142443197fc4b7c->enter($__internal_1631119960d81aeabcc0005e9a3d609fe58440007805a5721142443197fc4b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_79d9365d5a623545163e3c20885bee3430f0cae9a13bc7bb7ff0a363629ce583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d9365d5a623545163e3c20885bee3430f0cae9a13bc7bb7ff0a363629ce583->enter($__internal_79d9365d5a623545163e3c20885bee3430f0cae9a13bc7bb7ff0a363629ce583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1631119960d81aeabcc0005e9a3d609fe58440007805a5721142443197fc4b7c->leave($__internal_1631119960d81aeabcc0005e9a3d609fe58440007805a5721142443197fc4b7c_prof);

        
        $__internal_79d9365d5a623545163e3c20885bee3430f0cae9a13bc7bb7ff0a363629ce583->leave($__internal_79d9365d5a623545163e3c20885bee3430f0cae9a13bc7bb7ff0a363629ce583_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_102f310489adc45e6c592b11560a4709c695bda6b5cda9afc1ec811e323a1184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102f310489adc45e6c592b11560a4709c695bda6b5cda9afc1ec811e323a1184->enter($__internal_102f310489adc45e6c592b11560a4709c695bda6b5cda9afc1ec811e323a1184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5afd003fcf218a4ddb132f5b7af58fae554cf5e5a9889582e16ffaf69cf8719c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afd003fcf218a4ddb132f5b7af58fae554cf5e5a9889582e16ffaf69cf8719c->enter($__internal_5afd003fcf218a4ddb132f5b7af58fae554cf5e5a9889582e16ffaf69cf8719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5afd003fcf218a4ddb132f5b7af58fae554cf5e5a9889582e16ffaf69cf8719c->leave($__internal_5afd003fcf218a4ddb132f5b7af58fae554cf5e5a9889582e16ffaf69cf8719c_prof);

        
        $__internal_102f310489adc45e6c592b11560a4709c695bda6b5cda9afc1ec811e323a1184->leave($__internal_102f310489adc45e6c592b11560a4709c695bda6b5cda9afc1ec811e323a1184_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
