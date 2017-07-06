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
        $__internal_20033bab9788abc9821f9d9b35428e43b3eea175567e10e6cfa5735834731cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20033bab9788abc9821f9d9b35428e43b3eea175567e10e6cfa5735834731cf9->enter($__internal_20033bab9788abc9821f9d9b35428e43b3eea175567e10e6cfa5735834731cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_dd508739ec755f84ff8ccba768d1da8e5830f7d3f1ce4ae4225fcaa11219b624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd508739ec755f84ff8ccba768d1da8e5830f7d3f1ce4ae4225fcaa11219b624->enter($__internal_dd508739ec755f84ff8ccba768d1da8e5830f7d3f1ce4ae4225fcaa11219b624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20033bab9788abc9821f9d9b35428e43b3eea175567e10e6cfa5735834731cf9->leave($__internal_20033bab9788abc9821f9d9b35428e43b3eea175567e10e6cfa5735834731cf9_prof);

        
        $__internal_dd508739ec755f84ff8ccba768d1da8e5830f7d3f1ce4ae4225fcaa11219b624->leave($__internal_dd508739ec755f84ff8ccba768d1da8e5830f7d3f1ce4ae4225fcaa11219b624_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_889cc01eb2671e0029074b9692d5f9c3cc006171a1f4a556d0597e6e824cbd6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889cc01eb2671e0029074b9692d5f9c3cc006171a1f4a556d0597e6e824cbd6c->enter($__internal_889cc01eb2671e0029074b9692d5f9c3cc006171a1f4a556d0597e6e824cbd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f337d60396d0433f13ec060a2087f486c75409f891df81493e76ff9d292a8056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f337d60396d0433f13ec060a2087f486c75409f891df81493e76ff9d292a8056->enter($__internal_f337d60396d0433f13ec060a2087f486c75409f891df81493e76ff9d292a8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f337d60396d0433f13ec060a2087f486c75409f891df81493e76ff9d292a8056->leave($__internal_f337d60396d0433f13ec060a2087f486c75409f891df81493e76ff9d292a8056_prof);

        
        $__internal_889cc01eb2671e0029074b9692d5f9c3cc006171a1f4a556d0597e6e824cbd6c->leave($__internal_889cc01eb2671e0029074b9692d5f9c3cc006171a1f4a556d0597e6e824cbd6c_prof);

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
