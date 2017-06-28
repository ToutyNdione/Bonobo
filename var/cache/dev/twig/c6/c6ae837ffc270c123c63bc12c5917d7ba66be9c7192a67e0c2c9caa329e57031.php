<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_85d8d9bca213f9329ed580914dd02d314a2f53506afc7d7f934598a310ff0233 extends Twig_Template
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
        $__internal_672cb79c22478b71fcd2aae0a4daeb2f744e89f0f9f11a190f0d3dcab7078fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672cb79c22478b71fcd2aae0a4daeb2f744e89f0f9f11a190f0d3dcab7078fe8->enter($__internal_672cb79c22478b71fcd2aae0a4daeb2f744e89f0f9f11a190f0d3dcab7078fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_54fb8ce1e3c9549c46581f83e90298ee665d7a9b19172fb17d16ed717802343c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fb8ce1e3c9549c46581f83e90298ee665d7a9b19172fb17d16ed717802343c->enter($__internal_54fb8ce1e3c9549c46581f83e90298ee665d7a9b19172fb17d16ed717802343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_672cb79c22478b71fcd2aae0a4daeb2f744e89f0f9f11a190f0d3dcab7078fe8->leave($__internal_672cb79c22478b71fcd2aae0a4daeb2f744e89f0f9f11a190f0d3dcab7078fe8_prof);

        
        $__internal_54fb8ce1e3c9549c46581f83e90298ee665d7a9b19172fb17d16ed717802343c->leave($__internal_54fb8ce1e3c9549c46581f83e90298ee665d7a9b19172fb17d16ed717802343c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
