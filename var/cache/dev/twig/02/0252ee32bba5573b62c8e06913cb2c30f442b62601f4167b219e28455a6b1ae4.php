<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_16a8ef8b292ed6e4cff6a20c8ea50911a0208bd4f9ccdebe23eb3e28ed620ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e0fac5948c40200b24bfa59af1221ef2166c29fbfee4210d0fa835d7794f5562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fac5948c40200b24bfa59af1221ef2166c29fbfee4210d0fa835d7794f5562->enter($__internal_e0fac5948c40200b24bfa59af1221ef2166c29fbfee4210d0fa835d7794f5562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1c39626e483b2ea717fc855e68a7062eb253144c4ba0d14886797139d82ff943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c39626e483b2ea717fc855e68a7062eb253144c4ba0d14886797139d82ff943->enter($__internal_1c39626e483b2ea717fc855e68a7062eb253144c4ba0d14886797139d82ff943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0fac5948c40200b24bfa59af1221ef2166c29fbfee4210d0fa835d7794f5562->leave($__internal_e0fac5948c40200b24bfa59af1221ef2166c29fbfee4210d0fa835d7794f5562_prof);

        
        $__internal_1c39626e483b2ea717fc855e68a7062eb253144c4ba0d14886797139d82ff943->leave($__internal_1c39626e483b2ea717fc855e68a7062eb253144c4ba0d14886797139d82ff943_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95ae27422d56924436439ce6f772fd075b68b859bc07e49ff0a6fc70e7745215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ae27422d56924436439ce6f772fd075b68b859bc07e49ff0a6fc70e7745215->enter($__internal_95ae27422d56924436439ce6f772fd075b68b859bc07e49ff0a6fc70e7745215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36db2f4aba541e55faf8bbf9e0d04118e805c792f7b09db932726feb54999d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36db2f4aba541e55faf8bbf9e0d04118e805c792f7b09db932726feb54999d99->enter($__internal_36db2f4aba541e55faf8bbf9e0d04118e805c792f7b09db932726feb54999d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_36db2f4aba541e55faf8bbf9e0d04118e805c792f7b09db932726feb54999d99->leave($__internal_36db2f4aba541e55faf8bbf9e0d04118e805c792f7b09db932726feb54999d99_prof);

        
        $__internal_95ae27422d56924436439ce6f772fd075b68b859bc07e49ff0a6fc70e7745215->leave($__internal_95ae27422d56924436439ce6f772fd075b68b859bc07e49ff0a6fc70e7745215_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
