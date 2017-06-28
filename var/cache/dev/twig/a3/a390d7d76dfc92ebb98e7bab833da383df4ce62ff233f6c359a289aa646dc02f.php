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
        $__internal_3311d0ee1759c49db7e51e567aca8a91a43a3cc2e38d9eeecff97e97ca40e3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3311d0ee1759c49db7e51e567aca8a91a43a3cc2e38d9eeecff97e97ca40e3a5->enter($__internal_3311d0ee1759c49db7e51e567aca8a91a43a3cc2e38d9eeecff97e97ca40e3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7d71ef7f5057fa0e7aa9b5ab65723e5d5ae112489e5bb15be134c8d186177927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d71ef7f5057fa0e7aa9b5ab65723e5d5ae112489e5bb15be134c8d186177927->enter($__internal_7d71ef7f5057fa0e7aa9b5ab65723e5d5ae112489e5bb15be134c8d186177927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3311d0ee1759c49db7e51e567aca8a91a43a3cc2e38d9eeecff97e97ca40e3a5->leave($__internal_3311d0ee1759c49db7e51e567aca8a91a43a3cc2e38d9eeecff97e97ca40e3a5_prof);

        
        $__internal_7d71ef7f5057fa0e7aa9b5ab65723e5d5ae112489e5bb15be134c8d186177927->leave($__internal_7d71ef7f5057fa0e7aa9b5ab65723e5d5ae112489e5bb15be134c8d186177927_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_020e75101ad063344e5603c5a9d54d8e94ceca97540febed42ec41a7ef2f1c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020e75101ad063344e5603c5a9d54d8e94ceca97540febed42ec41a7ef2f1c97->enter($__internal_020e75101ad063344e5603c5a9d54d8e94ceca97540febed42ec41a7ef2f1c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a57f0e78cd4d471028c9cc6cd2be39557aa46244c0fb5df7fd1831fa27e72dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a57f0e78cd4d471028c9cc6cd2be39557aa46244c0fb5df7fd1831fa27e72dc->enter($__internal_1a57f0e78cd4d471028c9cc6cd2be39557aa46244c0fb5df7fd1831fa27e72dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1a57f0e78cd4d471028c9cc6cd2be39557aa46244c0fb5df7fd1831fa27e72dc->leave($__internal_1a57f0e78cd4d471028c9cc6cd2be39557aa46244c0fb5df7fd1831fa27e72dc_prof);

        
        $__internal_020e75101ad063344e5603c5a9d54d8e94ceca97540febed42ec41a7ef2f1c97->leave($__internal_020e75101ad063344e5603c5a9d54d8e94ceca97540febed42ec41a7ef2f1c97_prof);

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
