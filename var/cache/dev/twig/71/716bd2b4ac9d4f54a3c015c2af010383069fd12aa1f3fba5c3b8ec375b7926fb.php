<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_83d23abda652790311a706a350bc74725a82982392b755edf4e5d831c1f84c52 extends Twig_Template
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
        $__internal_1ad47e46cebdbad6fddf4b6cf90b08f411312c602926c63e1eafe08b1d8f9e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad47e46cebdbad6fddf4b6cf90b08f411312c602926c63e1eafe08b1d8f9e60->enter($__internal_1ad47e46cebdbad6fddf4b6cf90b08f411312c602926c63e1eafe08b1d8f9e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2fb8a737f2eb3eba3602dc2fa96d7509bf5b6bd00449791f24d7aa638a772ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb8a737f2eb3eba3602dc2fa96d7509bf5b6bd00449791f24d7aa638a772ed1->enter($__internal_2fb8a737f2eb3eba3602dc2fa96d7509bf5b6bd00449791f24d7aa638a772ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_1ad47e46cebdbad6fddf4b6cf90b08f411312c602926c63e1eafe08b1d8f9e60->leave($__internal_1ad47e46cebdbad6fddf4b6cf90b08f411312c602926c63e1eafe08b1d8f9e60_prof);

        
        $__internal_2fb8a737f2eb3eba3602dc2fa96d7509bf5b6bd00449791f24d7aa638a772ed1->leave($__internal_2fb8a737f2eb3eba3602dc2fa96d7509bf5b6bd00449791f24d7aa638a772ed1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
