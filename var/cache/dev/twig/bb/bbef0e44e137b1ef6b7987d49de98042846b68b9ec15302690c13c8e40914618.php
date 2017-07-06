<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_748581b5f23cfc772fb955a043833322a1781cd61ddf6bd4e2023f3133ec98b8 extends Twig_Template
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
        $__internal_1c3d2b287b738ea4db15ea0bf51915b362b4a8d7315d4cff6bbf15f69d24dc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3d2b287b738ea4db15ea0bf51915b362b4a8d7315d4cff6bbf15f69d24dc33->enter($__internal_1c3d2b287b738ea4db15ea0bf51915b362b4a8d7315d4cff6bbf15f69d24dc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_57347381ec6c3d667c3bc821e4ca47ecc7196bf908a16b4976291a35d5b09670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57347381ec6c3d667c3bc821e4ca47ecc7196bf908a16b4976291a35d5b09670->enter($__internal_57347381ec6c3d667c3bc821e4ca47ecc7196bf908a16b4976291a35d5b09670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1c3d2b287b738ea4db15ea0bf51915b362b4a8d7315d4cff6bbf15f69d24dc33->leave($__internal_1c3d2b287b738ea4db15ea0bf51915b362b4a8d7315d4cff6bbf15f69d24dc33_prof);

        
        $__internal_57347381ec6c3d667c3bc821e4ca47ecc7196bf908a16b4976291a35d5b09670->leave($__internal_57347381ec6c3d667c3bc821e4ca47ecc7196bf908a16b4976291a35d5b09670_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
