<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b39b38123e72a4159b05653b130229b5d6c369aa44df7aa804a3dba68e8a59b7 extends Twig_Template
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
        $__internal_8f3e6c10eb68e6a9e1d7792a0683b62b51925766c83b490142cb2cddccb0f16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3e6c10eb68e6a9e1d7792a0683b62b51925766c83b490142cb2cddccb0f16a->enter($__internal_8f3e6c10eb68e6a9e1d7792a0683b62b51925766c83b490142cb2cddccb0f16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_20a54d2ac1cb7ef51182cfd3b90350cfc8207e7cf5c80e8658c19a9253710a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a54d2ac1cb7ef51182cfd3b90350cfc8207e7cf5c80e8658c19a9253710a98->enter($__internal_20a54d2ac1cb7ef51182cfd3b90350cfc8207e7cf5c80e8658c19a9253710a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8f3e6c10eb68e6a9e1d7792a0683b62b51925766c83b490142cb2cddccb0f16a->leave($__internal_8f3e6c10eb68e6a9e1d7792a0683b62b51925766c83b490142cb2cddccb0f16a_prof);

        
        $__internal_20a54d2ac1cb7ef51182cfd3b90350cfc8207e7cf5c80e8658c19a9253710a98->leave($__internal_20a54d2ac1cb7ef51182cfd3b90350cfc8207e7cf5c80e8658c19a9253710a98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
