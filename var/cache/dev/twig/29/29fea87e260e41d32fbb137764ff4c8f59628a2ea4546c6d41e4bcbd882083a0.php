<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_69499cd06c79772967cb38fc760e58b6fe977631e13e85f55d0c88c0fd51894a extends Twig_Template
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
        $__internal_133024ad53f3654a76cb51288dcf4503cfffe4aefc19535d1f44e9c089d7fe5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133024ad53f3654a76cb51288dcf4503cfffe4aefc19535d1f44e9c089d7fe5d->enter($__internal_133024ad53f3654a76cb51288dcf4503cfffe4aefc19535d1f44e9c089d7fe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0579ef2efaa4925fe86e6e9177a7a0ff7e838d084ec3193f244468f854644699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0579ef2efaa4925fe86e6e9177a7a0ff7e838d084ec3193f244468f854644699->enter($__internal_0579ef2efaa4925fe86e6e9177a7a0ff7e838d084ec3193f244468f854644699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_133024ad53f3654a76cb51288dcf4503cfffe4aefc19535d1f44e9c089d7fe5d->leave($__internal_133024ad53f3654a76cb51288dcf4503cfffe4aefc19535d1f44e9c089d7fe5d_prof);

        
        $__internal_0579ef2efaa4925fe86e6e9177a7a0ff7e838d084ec3193f244468f854644699->leave($__internal_0579ef2efaa4925fe86e6e9177a7a0ff7e838d084ec3193f244468f854644699_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
