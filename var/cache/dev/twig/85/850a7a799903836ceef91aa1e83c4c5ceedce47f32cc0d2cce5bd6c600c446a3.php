<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11d15114edb16eb3fdc0488967b0a7d96e87f337dca5248c479bef3493cd2980 extends Twig_Template
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
        $__internal_99dcf0fa8f76954835e27fdc94ba180c508aedaaac128178ee3e9e854c83b78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dcf0fa8f76954835e27fdc94ba180c508aedaaac128178ee3e9e854c83b78e->enter($__internal_99dcf0fa8f76954835e27fdc94ba180c508aedaaac128178ee3e9e854c83b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b78bb023ac8ed18abd23307e91d4bb7b00e67a2a6f3a9e19848c98290b30ba41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78bb023ac8ed18abd23307e91d4bb7b00e67a2a6f3a9e19848c98290b30ba41->enter($__internal_b78bb023ac8ed18abd23307e91d4bb7b00e67a2a6f3a9e19848c98290b30ba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_99dcf0fa8f76954835e27fdc94ba180c508aedaaac128178ee3e9e854c83b78e->leave($__internal_99dcf0fa8f76954835e27fdc94ba180c508aedaaac128178ee3e9e854c83b78e_prof);

        
        $__internal_b78bb023ac8ed18abd23307e91d4bb7b00e67a2a6f3a9e19848c98290b30ba41->leave($__internal_b78bb023ac8ed18abd23307e91d4bb7b00e67a2a6f3a9e19848c98290b30ba41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
