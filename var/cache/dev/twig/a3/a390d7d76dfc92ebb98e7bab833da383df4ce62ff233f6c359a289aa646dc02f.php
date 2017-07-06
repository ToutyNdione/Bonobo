<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f3e445c0016a149d1983c07d2585961d8f0a63f8b2bddee6d2bef06e297516f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_002ec34804f7d8caea4652f1aea44a1788672c21b9dc998a49b29c9638e0bfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002ec34804f7d8caea4652f1aea44a1788672c21b9dc998a49b29c9638e0bfda->enter($__internal_002ec34804f7d8caea4652f1aea44a1788672c21b9dc998a49b29c9638e0bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_866669ebd67cf0b5f96bd0a20cbcdb37519a086e2dc06c6fc214082fa5fd032d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866669ebd67cf0b5f96bd0a20cbcdb37519a086e2dc06c6fc214082fa5fd032d->enter($__internal_866669ebd67cf0b5f96bd0a20cbcdb37519a086e2dc06c6fc214082fa5fd032d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_002ec34804f7d8caea4652f1aea44a1788672c21b9dc998a49b29c9638e0bfda->leave($__internal_002ec34804f7d8caea4652f1aea44a1788672c21b9dc998a49b29c9638e0bfda_prof);

        
        $__internal_866669ebd67cf0b5f96bd0a20cbcdb37519a086e2dc06c6fc214082fa5fd032d->leave($__internal_866669ebd67cf0b5f96bd0a20cbcdb37519a086e2dc06c6fc214082fa5fd032d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_299b37ca9a8b43a55f85546e8a2b23016d83e57072dc958e3399096d4001fcbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299b37ca9a8b43a55f85546e8a2b23016d83e57072dc958e3399096d4001fcbc->enter($__internal_299b37ca9a8b43a55f85546e8a2b23016d83e57072dc958e3399096d4001fcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6cf4f421b96cbd0b099c56ac257efbbd064da22623f67d07f7aa11cc3deaacff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf4f421b96cbd0b099c56ac257efbbd064da22623f67d07f7aa11cc3deaacff->enter($__internal_6cf4f421b96cbd0b099c56ac257efbbd064da22623f67d07f7aa11cc3deaacff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6cf4f421b96cbd0b099c56ac257efbbd064da22623f67d07f7aa11cc3deaacff->leave($__internal_6cf4f421b96cbd0b099c56ac257efbbd064da22623f67d07f7aa11cc3deaacff_prof);

        
        $__internal_299b37ca9a8b43a55f85546e8a2b23016d83e57072dc958e3399096d4001fcbc->leave($__internal_299b37ca9a8b43a55f85546e8a2b23016d83e57072dc958e3399096d4001fcbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
