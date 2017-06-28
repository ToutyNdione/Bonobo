<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4bdf842ec7ca087e4c9feb977c8c43308248078ca69cf0e99d7a1cba2bc3801e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f6004662cfb6514def272b174861f09c682e0783197734ba5867c74b1a60c5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6004662cfb6514def272b174861f09c682e0783197734ba5867c74b1a60c5fa->enter($__internal_f6004662cfb6514def272b174861f09c682e0783197734ba5867c74b1a60c5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_207d251664a363a30522fbf8351408f2f3345a5fa1baa5c93afcad064541febb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207d251664a363a30522fbf8351408f2f3345a5fa1baa5c93afcad064541febb->enter($__internal_207d251664a363a30522fbf8351408f2f3345a5fa1baa5c93afcad064541febb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6004662cfb6514def272b174861f09c682e0783197734ba5867c74b1a60c5fa->leave($__internal_f6004662cfb6514def272b174861f09c682e0783197734ba5867c74b1a60c5fa_prof);

        
        $__internal_207d251664a363a30522fbf8351408f2f3345a5fa1baa5c93afcad064541febb->leave($__internal_207d251664a363a30522fbf8351408f2f3345a5fa1baa5c93afcad064541febb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a1bf2a079b4aa57fd6ade21f55b8b2464b84fa75ed43c54fc6dc6aaa538dbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1bf2a079b4aa57fd6ade21f55b8b2464b84fa75ed43c54fc6dc6aaa538dbe6->enter($__internal_2a1bf2a079b4aa57fd6ade21f55b8b2464b84fa75ed43c54fc6dc6aaa538dbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b81b571a18797123f5b5e12b3c7e5b6358b90d5f97ed10ca1bc629cf362d39a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81b571a18797123f5b5e12b3c7e5b6358b90d5f97ed10ca1bc629cf362d39a8->enter($__internal_b81b571a18797123f5b5e12b3c7e5b6358b90d5f97ed10ca1bc629cf362d39a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b81b571a18797123f5b5e12b3c7e5b6358b90d5f97ed10ca1bc629cf362d39a8->leave($__internal_b81b571a18797123f5b5e12b3c7e5b6358b90d5f97ed10ca1bc629cf362d39a8_prof);

        
        $__internal_2a1bf2a079b4aa57fd6ade21f55b8b2464b84fa75ed43c54fc6dc6aaa538dbe6->leave($__internal_2a1bf2a079b4aa57fd6ade21f55b8b2464b84fa75ed43c54fc6dc6aaa538dbe6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
