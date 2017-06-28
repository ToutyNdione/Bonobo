<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d0e799411cef0d5d99fdd268760e5610f0a9b49a750a0d40ca816e365d19ebe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_c9bbce0d2e8a7a7f2b6b57c835abf372eb1eb48ffd5c8f20312297ad065e807b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bbce0d2e8a7a7f2b6b57c835abf372eb1eb48ffd5c8f20312297ad065e807b->enter($__internal_c9bbce0d2e8a7a7f2b6b57c835abf372eb1eb48ffd5c8f20312297ad065e807b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3332ac5f877a93f8c9ea649ece83ac1a272e7f7e03bc0841e5ca7d958f07ba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3332ac5f877a93f8c9ea649ece83ac1a272e7f7e03bc0841e5ca7d958f07ba90->enter($__internal_3332ac5f877a93f8c9ea649ece83ac1a272e7f7e03bc0841e5ca7d958f07ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9bbce0d2e8a7a7f2b6b57c835abf372eb1eb48ffd5c8f20312297ad065e807b->leave($__internal_c9bbce0d2e8a7a7f2b6b57c835abf372eb1eb48ffd5c8f20312297ad065e807b_prof);

        
        $__internal_3332ac5f877a93f8c9ea649ece83ac1a272e7f7e03bc0841e5ca7d958f07ba90->leave($__internal_3332ac5f877a93f8c9ea649ece83ac1a272e7f7e03bc0841e5ca7d958f07ba90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b32abd8e25daf8299c2f7316204e37e7fe9405e18b695dc10e3ead1d8fa21f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32abd8e25daf8299c2f7316204e37e7fe9405e18b695dc10e3ead1d8fa21f32->enter($__internal_b32abd8e25daf8299c2f7316204e37e7fe9405e18b695dc10e3ead1d8fa21f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8485be2b0a680b93b665cde166d05c216f64846754bf3ed7628b767476f4ea34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8485be2b0a680b93b665cde166d05c216f64846754bf3ed7628b767476f4ea34->enter($__internal_8485be2b0a680b93b665cde166d05c216f64846754bf3ed7628b767476f4ea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8485be2b0a680b93b665cde166d05c216f64846754bf3ed7628b767476f4ea34->leave($__internal_8485be2b0a680b93b665cde166d05c216f64846754bf3ed7628b767476f4ea34_prof);

        
        $__internal_b32abd8e25daf8299c2f7316204e37e7fe9405e18b695dc10e3ead1d8fa21f32->leave($__internal_b32abd8e25daf8299c2f7316204e37e7fe9405e18b695dc10e3ead1d8fa21f32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
