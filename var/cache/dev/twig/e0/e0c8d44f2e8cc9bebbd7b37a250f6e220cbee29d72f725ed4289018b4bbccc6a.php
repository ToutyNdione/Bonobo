<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_34edeb018be0771bbd604a513881fa88fecf2c79350b34f034d9c7b129de1b14 extends Twig_Template
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
        $__internal_4645ffb828e5fe10f8ea520083cadc58624b982e8882ec516bdeb3cf94f1d56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4645ffb828e5fe10f8ea520083cadc58624b982e8882ec516bdeb3cf94f1d56e->enter($__internal_4645ffb828e5fe10f8ea520083cadc58624b982e8882ec516bdeb3cf94f1d56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_aed66406fcf14ca9d86d21b323dfdd6399cdbd2cb5743b1460c8107a07800831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed66406fcf14ca9d86d21b323dfdd6399cdbd2cb5743b1460c8107a07800831->enter($__internal_aed66406fcf14ca9d86d21b323dfdd6399cdbd2cb5743b1460c8107a07800831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4645ffb828e5fe10f8ea520083cadc58624b982e8882ec516bdeb3cf94f1d56e->leave($__internal_4645ffb828e5fe10f8ea520083cadc58624b982e8882ec516bdeb3cf94f1d56e_prof);

        
        $__internal_aed66406fcf14ca9d86d21b323dfdd6399cdbd2cb5743b1460c8107a07800831->leave($__internal_aed66406fcf14ca9d86d21b323dfdd6399cdbd2cb5743b1460c8107a07800831_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
