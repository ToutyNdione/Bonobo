<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_50c8a0aa13d5a788fac94910af6ad709d1ad21247b59c85ceb02683dd7d433b1 extends Twig_Template
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
        $__internal_d0bf124c6a09bb8b570e80e92b1e03e6ce17b7c8b6ec1a7e72b8814f2eadcf2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bf124c6a09bb8b570e80e92b1e03e6ce17b7c8b6ec1a7e72b8814f2eadcf2a->enter($__internal_d0bf124c6a09bb8b570e80e92b1e03e6ce17b7c8b6ec1a7e72b8814f2eadcf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_169218474d8f64e1b8e507e713e29bea3e2b5890a6b700d435c6d621dff448f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169218474d8f64e1b8e507e713e29bea3e2b5890a6b700d435c6d621dff448f7->enter($__internal_169218474d8f64e1b8e507e713e29bea3e2b5890a6b700d435c6d621dff448f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d0bf124c6a09bb8b570e80e92b1e03e6ce17b7c8b6ec1a7e72b8814f2eadcf2a->leave($__internal_d0bf124c6a09bb8b570e80e92b1e03e6ce17b7c8b6ec1a7e72b8814f2eadcf2a_prof);

        
        $__internal_169218474d8f64e1b8e507e713e29bea3e2b5890a6b700d435c6d621dff448f7->leave($__internal_169218474d8f64e1b8e507e713e29bea3e2b5890a6b700d435c6d621dff448f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
