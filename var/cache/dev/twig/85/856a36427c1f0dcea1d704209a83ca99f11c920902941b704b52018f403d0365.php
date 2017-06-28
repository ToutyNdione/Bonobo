<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7769a2bf121a16b69a543407a57e2a110a4cf87a40d604ae80bd5011ab542719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ed063df3430a8f72eec5f31f96dc280651c9d55c6436edf58155434753def0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ed063df3430a8f72eec5f31f96dc280651c9d55c6436edf58155434753def0->enter($__internal_f9ed063df3430a8f72eec5f31f96dc280651c9d55c6436edf58155434753def0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_bc40fc5a181a6c5118d9e9f217527fbc0372412ead8aa80243576b54dd0674d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc40fc5a181a6c5118d9e9f217527fbc0372412ead8aa80243576b54dd0674d2->enter($__internal_bc40fc5a181a6c5118d9e9f217527fbc0372412ead8aa80243576b54dd0674d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f9ed063df3430a8f72eec5f31f96dc280651c9d55c6436edf58155434753def0->leave($__internal_f9ed063df3430a8f72eec5f31f96dc280651c9d55c6436edf58155434753def0_prof);

        
        $__internal_bc40fc5a181a6c5118d9e9f217527fbc0372412ead8aa80243576b54dd0674d2->leave($__internal_bc40fc5a181a6c5118d9e9f217527fbc0372412ead8aa80243576b54dd0674d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
