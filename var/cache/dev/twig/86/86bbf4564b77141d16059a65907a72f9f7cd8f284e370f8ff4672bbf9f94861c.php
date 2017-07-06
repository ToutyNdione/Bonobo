<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_5e401f19f0368efe8e92aecc73c7d34d408551fd1c22b47128bd9692fe4fc8e6 extends Twig_Template
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
        $__internal_25fea9edaca1cc49f0fcf9f5d38d018e1806b9cf6efcbeb2dd7a495a2cd8b964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fea9edaca1cc49f0fcf9f5d38d018e1806b9cf6efcbeb2dd7a495a2cd8b964->enter($__internal_25fea9edaca1cc49f0fcf9f5d38d018e1806b9cf6efcbeb2dd7a495a2cd8b964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_e460d8ce83344b1269c4253856a63385130302c4819e6ac2c5a7fc64ff87f71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e460d8ce83344b1269c4253856a63385130302c4819e6ac2c5a7fc64ff87f71b->enter($__internal_e460d8ce83344b1269c4253856a63385130302c4819e6ac2c5a7fc64ff87f71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_25fea9edaca1cc49f0fcf9f5d38d018e1806b9cf6efcbeb2dd7a495a2cd8b964->leave($__internal_25fea9edaca1cc49f0fcf9f5d38d018e1806b9cf6efcbeb2dd7a495a2cd8b964_prof);

        
        $__internal_e460d8ce83344b1269c4253856a63385130302c4819e6ac2c5a7fc64ff87f71b->leave($__internal_e460d8ce83344b1269c4253856a63385130302c4819e6ac2c5a7fc64ff87f71b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
