<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbdf2d02f6a469cefe700918f2519bf108680707fa48e2e027582ece7942340a extends Twig_Template
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
        $__internal_f8343b76f39fdc79159e14c1b7bd19339951d220e4cf9e4caff4eced52afb08e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8343b76f39fdc79159e14c1b7bd19339951d220e4cf9e4caff4eced52afb08e->enter($__internal_f8343b76f39fdc79159e14c1b7bd19339951d220e4cf9e4caff4eced52afb08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_30e67938ec188244eea314a4109648db91a5a257b610f58b9c097b30609a8dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e67938ec188244eea314a4109648db91a5a257b610f58b9c097b30609a8dfb->enter($__internal_30e67938ec188244eea314a4109648db91a5a257b610f58b9c097b30609a8dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f8343b76f39fdc79159e14c1b7bd19339951d220e4cf9e4caff4eced52afb08e->leave($__internal_f8343b76f39fdc79159e14c1b7bd19339951d220e4cf9e4caff4eced52afb08e_prof);

        
        $__internal_30e67938ec188244eea314a4109648db91a5a257b610f58b9c097b30609a8dfb->leave($__internal_30e67938ec188244eea314a4109648db91a5a257b610f58b9c097b30609a8dfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
