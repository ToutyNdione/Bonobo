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
        $__internal_daf5d15cf30971e2b5e532f473a1d4c8df7d331c5819ad65fc7196c757fba013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf5d15cf30971e2b5e532f473a1d4c8df7d331c5819ad65fc7196c757fba013->enter($__internal_daf5d15cf30971e2b5e532f473a1d4c8df7d331c5819ad65fc7196c757fba013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_02a8b0665b9661da17df16c6e8df87827dd0867788eaac7989bcd4615b28275b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a8b0665b9661da17df16c6e8df87827dd0867788eaac7989bcd4615b28275b->enter($__internal_02a8b0665b9661da17df16c6e8df87827dd0867788eaac7989bcd4615b28275b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_daf5d15cf30971e2b5e532f473a1d4c8df7d331c5819ad65fc7196c757fba013->leave($__internal_daf5d15cf30971e2b5e532f473a1d4c8df7d331c5819ad65fc7196c757fba013_prof);

        
        $__internal_02a8b0665b9661da17df16c6e8df87827dd0867788eaac7989bcd4615b28275b->leave($__internal_02a8b0665b9661da17df16c6e8df87827dd0867788eaac7989bcd4615b28275b_prof);

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
