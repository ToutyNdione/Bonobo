<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_09486ce732be869d7f8ac9e4a83f447986a3ce162945cfbf30a96b20de9b808f extends Twig_Template
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
        $__internal_ac08155f211393d27779d919d7a6f445e3d5a529f9bb7376b2bc9229ecae93e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac08155f211393d27779d919d7a6f445e3d5a529f9bb7376b2bc9229ecae93e2->enter($__internal_ac08155f211393d27779d919d7a6f445e3d5a529f9bb7376b2bc9229ecae93e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_21b51fd3be9cca9a6ff7f0a39315880ace2298a16a7fca32429ad6c21bb55825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b51fd3be9cca9a6ff7f0a39315880ace2298a16a7fca32429ad6c21bb55825->enter($__internal_21b51fd3be9cca9a6ff7f0a39315880ace2298a16a7fca32429ad6c21bb55825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ac08155f211393d27779d919d7a6f445e3d5a529f9bb7376b2bc9229ecae93e2->leave($__internal_ac08155f211393d27779d919d7a6f445e3d5a529f9bb7376b2bc9229ecae93e2_prof);

        
        $__internal_21b51fd3be9cca9a6ff7f0a39315880ace2298a16a7fca32429ad6c21bb55825->leave($__internal_21b51fd3be9cca9a6ff7f0a39315880ace2298a16a7fca32429ad6c21bb55825_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
