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
        $__internal_5dfb29960faa6b5db426b9ac7d0e412bbcf2ec0073f1267fd2d4b1bbbea171b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfb29960faa6b5db426b9ac7d0e412bbcf2ec0073f1267fd2d4b1bbbea171b8->enter($__internal_5dfb29960faa6b5db426b9ac7d0e412bbcf2ec0073f1267fd2d4b1bbbea171b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_0a60a9dde58ff073456a5b8e970b7c7889d87c08f4ebf9a94893e58feb8a4cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a60a9dde58ff073456a5b8e970b7c7889d87c08f4ebf9a94893e58feb8a4cb8->enter($__internal_0a60a9dde58ff073456a5b8e970b7c7889d87c08f4ebf9a94893e58feb8a4cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5dfb29960faa6b5db426b9ac7d0e412bbcf2ec0073f1267fd2d4b1bbbea171b8->leave($__internal_5dfb29960faa6b5db426b9ac7d0e412bbcf2ec0073f1267fd2d4b1bbbea171b8_prof);

        
        $__internal_0a60a9dde58ff073456a5b8e970b7c7889d87c08f4ebf9a94893e58feb8a4cb8->leave($__internal_0a60a9dde58ff073456a5b8e970b7c7889d87c08f4ebf9a94893e58feb8a4cb8_prof);

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
