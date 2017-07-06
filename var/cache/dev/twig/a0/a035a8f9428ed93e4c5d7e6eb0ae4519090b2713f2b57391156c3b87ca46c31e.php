<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a0725259b3617f33b7cadc67c5a24ebf4389c294dcade00ac7d02bac5bbb5bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_48dddd22825a9685b0bba0e3ddc8198e39319575bbea4e3865066d36bf1df678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48dddd22825a9685b0bba0e3ddc8198e39319575bbea4e3865066d36bf1df678->enter($__internal_48dddd22825a9685b0bba0e3ddc8198e39319575bbea4e3865066d36bf1df678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_070699c88f089821fc30e72668dbfc5d7f816e71cd3854c60e04dcb85a84e074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070699c88f089821fc30e72668dbfc5d7f816e71cd3854c60e04dcb85a84e074->enter($__internal_070699c88f089821fc30e72668dbfc5d7f816e71cd3854c60e04dcb85a84e074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48dddd22825a9685b0bba0e3ddc8198e39319575bbea4e3865066d36bf1df678->leave($__internal_48dddd22825a9685b0bba0e3ddc8198e39319575bbea4e3865066d36bf1df678_prof);

        
        $__internal_070699c88f089821fc30e72668dbfc5d7f816e71cd3854c60e04dcb85a84e074->leave($__internal_070699c88f089821fc30e72668dbfc5d7f816e71cd3854c60e04dcb85a84e074_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b944216c867fac20fef7743d3d8a11e9a24e325c0423851cc633992815bf7338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b944216c867fac20fef7743d3d8a11e9a24e325c0423851cc633992815bf7338->enter($__internal_b944216c867fac20fef7743d3d8a11e9a24e325c0423851cc633992815bf7338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_077883798c466a7f26c1444ae997baa570ee571c41444bacfea937c6da52be1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077883798c466a7f26c1444ae997baa570ee571c41444bacfea937c6da52be1a->enter($__internal_077883798c466a7f26c1444ae997baa570ee571c41444bacfea937c6da52be1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_077883798c466a7f26c1444ae997baa570ee571c41444bacfea937c6da52be1a->leave($__internal_077883798c466a7f26c1444ae997baa570ee571c41444bacfea937c6da52be1a_prof);

        
        $__internal_b944216c867fac20fef7743d3d8a11e9a24e325c0423851cc633992815bf7338->leave($__internal_b944216c867fac20fef7743d3d8a11e9a24e325c0423851cc633992815bf7338_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
