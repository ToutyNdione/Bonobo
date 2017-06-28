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
        $__internal_7cf2bd2c7cefeef68fdfc6108cdc3c88fbc5108ff8952e4000b39b67bca25e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf2bd2c7cefeef68fdfc6108cdc3c88fbc5108ff8952e4000b39b67bca25e20->enter($__internal_7cf2bd2c7cefeef68fdfc6108cdc3c88fbc5108ff8952e4000b39b67bca25e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f9a51ba8a8e861dc40a93cfbba408adace702ca7681658a227e3776b54b89e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a51ba8a8e861dc40a93cfbba408adace702ca7681658a227e3776b54b89e45->enter($__internal_f9a51ba8a8e861dc40a93cfbba408adace702ca7681658a227e3776b54b89e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7cf2bd2c7cefeef68fdfc6108cdc3c88fbc5108ff8952e4000b39b67bca25e20->leave($__internal_7cf2bd2c7cefeef68fdfc6108cdc3c88fbc5108ff8952e4000b39b67bca25e20_prof);

        
        $__internal_f9a51ba8a8e861dc40a93cfbba408adace702ca7681658a227e3776b54b89e45->leave($__internal_f9a51ba8a8e861dc40a93cfbba408adace702ca7681658a227e3776b54b89e45_prof);

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
