<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_fd22f3ad59d756cdc495524f7c131b18e2ca15d580655323ee4045be75374b28 extends Twig_Template
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
        $__internal_7127568b576cc05b036b47e3c1616ac21508f5e733e2c2eb7a2e78c2f90bfdb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7127568b576cc05b036b47e3c1616ac21508f5e733e2c2eb7a2e78c2f90bfdb3->enter($__internal_7127568b576cc05b036b47e3c1616ac21508f5e733e2c2eb7a2e78c2f90bfdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_44e7468636626a8c6f4dae14936e107bca91132c28d7ee5280d563ef5b689937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e7468636626a8c6f4dae14936e107bca91132c28d7ee5280d563ef5b689937->enter($__internal_44e7468636626a8c6f4dae14936e107bca91132c28d7ee5280d563ef5b689937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()) . " | ") . (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })())) . " | ") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "class", array()));
        echo "
[message] ";
        // line 2
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 3, $this->getSourceContext()); })()), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "class", array());
            echo ": ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7127568b576cc05b036b47e3c1616ac21508f5e733e2c2eb7a2e78c2f90bfdb3->leave($__internal_7127568b576cc05b036b47e3c1616ac21508f5e733e2c2eb7a2e78c2f90bfdb3_prof);

        
        $__internal_44e7468636626a8c6f4dae14936e107bca91132c28d7ee5280d563ef5b689937->leave($__internal_44e7468636626a8c6f4dae14936e107bca91132c28d7ee5280d563ef5b689937_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
