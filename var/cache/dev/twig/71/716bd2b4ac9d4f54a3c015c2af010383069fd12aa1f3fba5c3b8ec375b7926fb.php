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
        $__internal_1c30279472e84b0fa6575894d51c31992cfcfda53125055444f49fffed25dd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c30279472e84b0fa6575894d51c31992cfcfda53125055444f49fffed25dd4b->enter($__internal_1c30279472e84b0fa6575894d51c31992cfcfda53125055444f49fffed25dd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bd12d5360771aab2458b36c5dce2dd84bf36c7fab52c2c3dbb22756096461225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd12d5360771aab2458b36c5dce2dd84bf36c7fab52c2c3dbb22756096461225->enter($__internal_bd12d5360771aab2458b36c5dce2dd84bf36c7fab52c2c3dbb22756096461225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_1c30279472e84b0fa6575894d51c31992cfcfda53125055444f49fffed25dd4b->leave($__internal_1c30279472e84b0fa6575894d51c31992cfcfda53125055444f49fffed25dd4b_prof);

        
        $__internal_bd12d5360771aab2458b36c5dce2dd84bf36c7fab52c2c3dbb22756096461225->leave($__internal_bd12d5360771aab2458b36c5dce2dd84bf36c7fab52c2c3dbb22756096461225_prof);

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
