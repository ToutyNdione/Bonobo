<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7769a2bf121a16b69a543407a57e2a110a4cf87a40d604ae80bd5011ab542719 extends Twig_Template
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
        $__internal_ea1afa5ea1359ca4599800b9f15079c69c881385300ab333f012881259879731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1afa5ea1359ca4599800b9f15079c69c881385300ab333f012881259879731->enter($__internal_ea1afa5ea1359ca4599800b9f15079c69c881385300ab333f012881259879731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_17d405dff4172d7120e4d6c86ba3f42e9a55d4de9df6c3003fc1779b1ef3e4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d405dff4172d7120e4d6c86ba3f42e9a55d4de9df6c3003fc1779b1ef3e4ec->enter($__internal_17d405dff4172d7120e4d6c86ba3f42e9a55d4de9df6c3003fc1779b1ef3e4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ea1afa5ea1359ca4599800b9f15079c69c881385300ab333f012881259879731->leave($__internal_ea1afa5ea1359ca4599800b9f15079c69c881385300ab333f012881259879731_prof);

        
        $__internal_17d405dff4172d7120e4d6c86ba3f42e9a55d4de9df6c3003fc1779b1ef3e4ec->leave($__internal_17d405dff4172d7120e4d6c86ba3f42e9a55d4de9df6c3003fc1779b1ef3e4ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
