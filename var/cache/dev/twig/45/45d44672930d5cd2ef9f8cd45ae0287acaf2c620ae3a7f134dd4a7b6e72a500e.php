<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b8f9aa06991283aeeb11ef01da5388fe70af9036774ecedc4781950de3fd4634 extends Twig_Template
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
        $__internal_26fe48ea02fb92e0006d6bbd5fcfa423e1e93dea84da3083b8157fb4c9093b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fe48ea02fb92e0006d6bbd5fcfa423e1e93dea84da3083b8157fb4c9093b04->enter($__internal_26fe48ea02fb92e0006d6bbd5fcfa423e1e93dea84da3083b8157fb4c9093b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e66355ae2f5ede6118afb7ac92a2b3db5d691675b625cda9440d7003fdb372f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66355ae2f5ede6118afb7ac92a2b3db5d691675b625cda9440d7003fdb372f3->enter($__internal_e66355ae2f5ede6118afb7ac92a2b3db5d691675b625cda9440d7003fdb372f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_26fe48ea02fb92e0006d6bbd5fcfa423e1e93dea84da3083b8157fb4c9093b04->leave($__internal_26fe48ea02fb92e0006d6bbd5fcfa423e1e93dea84da3083b8157fb4c9093b04_prof);

        
        $__internal_e66355ae2f5ede6118afb7ac92a2b3db5d691675b625cda9440d7003fdb372f3->leave($__internal_e66355ae2f5ede6118afb7ac92a2b3db5d691675b625cda9440d7003fdb372f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
