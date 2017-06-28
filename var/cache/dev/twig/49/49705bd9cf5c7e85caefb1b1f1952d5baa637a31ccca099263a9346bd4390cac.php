<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_76404c5fabb4d4179e1c5abe01233cef35360e427487fba53ccbfed17d5cb66c extends Twig_Template
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
        $__internal_c55442c42c92ce8a0272a9756788eb1cf3c678ca93256f4c852705b045384d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55442c42c92ce8a0272a9756788eb1cf3c678ca93256f4c852705b045384d3b->enter($__internal_c55442c42c92ce8a0272a9756788eb1cf3c678ca93256f4c852705b045384d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_16fdc06db258487da2b5da80b77313e3c72cdc808a91c7c33d4ff43ff911d17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fdc06db258487da2b5da80b77313e3c72cdc808a91c7c33d4ff43ff911d17e->enter($__internal_16fdc06db258487da2b5da80b77313e3c72cdc808a91c7c33d4ff43ff911d17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_c55442c42c92ce8a0272a9756788eb1cf3c678ca93256f4c852705b045384d3b->leave($__internal_c55442c42c92ce8a0272a9756788eb1cf3c678ca93256f4c852705b045384d3b_prof);

        
        $__internal_16fdc06db258487da2b5da80b77313e3c72cdc808a91c7c33d4ff43ff911d17e->leave($__internal_16fdc06db258487da2b5da80b77313e3c72cdc808a91c7c33d4ff43ff911d17e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
