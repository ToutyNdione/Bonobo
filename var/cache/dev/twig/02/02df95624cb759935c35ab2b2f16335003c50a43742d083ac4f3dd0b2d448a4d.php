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
        $__internal_17e6a0f1248bec3ceaf571d3cf42a72ba3011aaf45346b7d5f6349adf7f34f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e6a0f1248bec3ceaf571d3cf42a72ba3011aaf45346b7d5f6349adf7f34f10->enter($__internal_17e6a0f1248bec3ceaf571d3cf42a72ba3011aaf45346b7d5f6349adf7f34f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_38032f57381486c7703ee0a963c72f216fceb1aa844b56d658992118afa8a549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38032f57381486c7703ee0a963c72f216fceb1aa844b56d658992118afa8a549->enter($__internal_38032f57381486c7703ee0a963c72f216fceb1aa844b56d658992118afa8a549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e6a0f1248bec3ceaf571d3cf42a72ba3011aaf45346b7d5f6349adf7f34f10->leave($__internal_17e6a0f1248bec3ceaf571d3cf42a72ba3011aaf45346b7d5f6349adf7f34f10_prof);

        
        $__internal_38032f57381486c7703ee0a963c72f216fceb1aa844b56d658992118afa8a549->leave($__internal_38032f57381486c7703ee0a963c72f216fceb1aa844b56d658992118afa8a549_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6482de95beda1c4a24989acffa077ec9c3aa01bc545e97e9922112119c074b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6482de95beda1c4a24989acffa077ec9c3aa01bc545e97e9922112119c074b6f->enter($__internal_6482de95beda1c4a24989acffa077ec9c3aa01bc545e97e9922112119c074b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3049fdf31e57a923a551f63bac9d6e27b9df66023e7b8f56d0272eb33173a04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3049fdf31e57a923a551f63bac9d6e27b9df66023e7b8f56d0272eb33173a04f->enter($__internal_3049fdf31e57a923a551f63bac9d6e27b9df66023e7b8f56d0272eb33173a04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_3049fdf31e57a923a551f63bac9d6e27b9df66023e7b8f56d0272eb33173a04f->leave($__internal_3049fdf31e57a923a551f63bac9d6e27b9df66023e7b8f56d0272eb33173a04f_prof);

        
        $__internal_6482de95beda1c4a24989acffa077ec9c3aa01bc545e97e9922112119c074b6f->leave($__internal_6482de95beda1c4a24989acffa077ec9c3aa01bc545e97e9922112119c074b6f_prof);

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
