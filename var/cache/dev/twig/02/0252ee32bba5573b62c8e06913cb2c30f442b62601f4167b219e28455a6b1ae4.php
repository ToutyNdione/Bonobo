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
        $__internal_d3ba65e04fae67345ec0833d8fffc26f96f04e065d581d2ae215ff248f165754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ba65e04fae67345ec0833d8fffc26f96f04e065d581d2ae215ff248f165754->enter($__internal_d3ba65e04fae67345ec0833d8fffc26f96f04e065d581d2ae215ff248f165754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_4d4ef137778adbbfc1122d06ca2d5942d3051c84b2155e9c498c71d106548440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4ef137778adbbfc1122d06ca2d5942d3051c84b2155e9c498c71d106548440->enter($__internal_4d4ef137778adbbfc1122d06ca2d5942d3051c84b2155e9c498c71d106548440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3ba65e04fae67345ec0833d8fffc26f96f04e065d581d2ae215ff248f165754->leave($__internal_d3ba65e04fae67345ec0833d8fffc26f96f04e065d581d2ae215ff248f165754_prof);

        
        $__internal_4d4ef137778adbbfc1122d06ca2d5942d3051c84b2155e9c498c71d106548440->leave($__internal_4d4ef137778adbbfc1122d06ca2d5942d3051c84b2155e9c498c71d106548440_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_121b226e40f256d538ccaf9ab49ee8b20c58cc96a19a0b04ab8b318241aef472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121b226e40f256d538ccaf9ab49ee8b20c58cc96a19a0b04ab8b318241aef472->enter($__internal_121b226e40f256d538ccaf9ab49ee8b20c58cc96a19a0b04ab8b318241aef472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fdb188ff9f07e866be038bec0d064a4b68ecf38403922fa4eee0583cb761e966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb188ff9f07e866be038bec0d064a4b68ecf38403922fa4eee0583cb761e966->enter($__internal_fdb188ff9f07e866be038bec0d064a4b68ecf38403922fa4eee0583cb761e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fdb188ff9f07e866be038bec0d064a4b68ecf38403922fa4eee0583cb761e966->leave($__internal_fdb188ff9f07e866be038bec0d064a4b68ecf38403922fa4eee0583cb761e966_prof);

        
        $__internal_121b226e40f256d538ccaf9ab49ee8b20c58cc96a19a0b04ab8b318241aef472->leave($__internal_121b226e40f256d538ccaf9ab49ee8b20c58cc96a19a0b04ab8b318241aef472_prof);

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
