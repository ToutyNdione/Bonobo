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
        $__internal_79d9b98b9f363cf3de9c54b92e1c1033617edcbf6ca03903e04cf1c682ed4592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d9b98b9f363cf3de9c54b92e1c1033617edcbf6ca03903e04cf1c682ed4592->enter($__internal_79d9b98b9f363cf3de9c54b92e1c1033617edcbf6ca03903e04cf1c682ed4592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bc0f77c143aafa29824028044f917b6ad0529c82d43dee0db920f29dba061646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0f77c143aafa29824028044f917b6ad0529c82d43dee0db920f29dba061646->enter($__internal_bc0f77c143aafa29824028044f917b6ad0529c82d43dee0db920f29dba061646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_79d9b98b9f363cf3de9c54b92e1c1033617edcbf6ca03903e04cf1c682ed4592->leave($__internal_79d9b98b9f363cf3de9c54b92e1c1033617edcbf6ca03903e04cf1c682ed4592_prof);

        
        $__internal_bc0f77c143aafa29824028044f917b6ad0529c82d43dee0db920f29dba061646->leave($__internal_bc0f77c143aafa29824028044f917b6ad0529c82d43dee0db920f29dba061646_prof);

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
