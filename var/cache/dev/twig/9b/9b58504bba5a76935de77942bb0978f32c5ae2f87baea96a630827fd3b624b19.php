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
        $__internal_d14f671aaa6f83a314cb7b36435244280db698c5e410f434b5c26265b7b74320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14f671aaa6f83a314cb7b36435244280db698c5e410f434b5c26265b7b74320->enter($__internal_d14f671aaa6f83a314cb7b36435244280db698c5e410f434b5c26265b7b74320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ab1e3e44484b4ac1b57d98bde725090869f3f66df12affe5af02192b8ad3619b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1e3e44484b4ac1b57d98bde725090869f3f66df12affe5af02192b8ad3619b->enter($__internal_ab1e3e44484b4ac1b57d98bde725090869f3f66df12affe5af02192b8ad3619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d14f671aaa6f83a314cb7b36435244280db698c5e410f434b5c26265b7b74320->leave($__internal_d14f671aaa6f83a314cb7b36435244280db698c5e410f434b5c26265b7b74320_prof);

        
        $__internal_ab1e3e44484b4ac1b57d98bde725090869f3f66df12affe5af02192b8ad3619b->leave($__internal_ab1e3e44484b4ac1b57d98bde725090869f3f66df12affe5af02192b8ad3619b_prof);

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
