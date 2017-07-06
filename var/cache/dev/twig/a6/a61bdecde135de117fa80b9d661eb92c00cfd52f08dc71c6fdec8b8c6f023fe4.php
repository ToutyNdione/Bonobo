<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1899298ed9999dc24512d7f6d94a61716089ccafb21e758460301ded6afd1c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1485a1db80575c75514e92e7c3c74c0187d876abd238379e71ef27f73ae42490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1485a1db80575c75514e92e7c3c74c0187d876abd238379e71ef27f73ae42490->enter($__internal_1485a1db80575c75514e92e7c3c74c0187d876abd238379e71ef27f73ae42490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_605b28a717756e5f3849c1e0a301f155a840421fee32aaa807193e9013b2be50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605b28a717756e5f3849c1e0a301f155a840421fee32aaa807193e9013b2be50->enter($__internal_605b28a717756e5f3849c1e0a301f155a840421fee32aaa807193e9013b2be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1485a1db80575c75514e92e7c3c74c0187d876abd238379e71ef27f73ae42490->leave($__internal_1485a1db80575c75514e92e7c3c74c0187d876abd238379e71ef27f73ae42490_prof);

        
        $__internal_605b28a717756e5f3849c1e0a301f155a840421fee32aaa807193e9013b2be50->leave($__internal_605b28a717756e5f3849c1e0a301f155a840421fee32aaa807193e9013b2be50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_369d3f569032fcafd3599ff7335ed73e17c485939dff5cee306f2b295cb13e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369d3f569032fcafd3599ff7335ed73e17c485939dff5cee306f2b295cb13e3f->enter($__internal_369d3f569032fcafd3599ff7335ed73e17c485939dff5cee306f2b295cb13e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_453b468675140233a7ff0df3c0a71ddaa1b079c601ed0381d26aa2350552e82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453b468675140233a7ff0df3c0a71ddaa1b079c601ed0381d26aa2350552e82b->enter($__internal_453b468675140233a7ff0df3c0a71ddaa1b079c601ed0381d26aa2350552e82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_453b468675140233a7ff0df3c0a71ddaa1b079c601ed0381d26aa2350552e82b->leave($__internal_453b468675140233a7ff0df3c0a71ddaa1b079c601ed0381d26aa2350552e82b_prof);

        
        $__internal_369d3f569032fcafd3599ff7335ed73e17c485939dff5cee306f2b295cb13e3f->leave($__internal_369d3f569032fcafd3599ff7335ed73e17c485939dff5cee306f2b295cb13e3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
