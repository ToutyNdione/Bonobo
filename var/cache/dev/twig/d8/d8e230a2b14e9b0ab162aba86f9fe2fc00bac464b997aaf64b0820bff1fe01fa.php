<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4e61d1ca61e041a7465b70c76386d2ba013a7f12b8eed265777b2060f5d44d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab6c32f1aeee0740f7ab27680488b36687bfd17c2107a1042eb255314af81ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6c32f1aeee0740f7ab27680488b36687bfd17c2107a1042eb255314af81ed6->enter($__internal_ab6c32f1aeee0740f7ab27680488b36687bfd17c2107a1042eb255314af81ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e35d765ba251e90d684a27bf3a213435e333c91095d41290b44b37e79265591c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35d765ba251e90d684a27bf3a213435e333c91095d41290b44b37e79265591c->enter($__internal_e35d765ba251e90d684a27bf3a213435e333c91095d41290b44b37e79265591c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6c32f1aeee0740f7ab27680488b36687bfd17c2107a1042eb255314af81ed6->leave($__internal_ab6c32f1aeee0740f7ab27680488b36687bfd17c2107a1042eb255314af81ed6_prof);

        
        $__internal_e35d765ba251e90d684a27bf3a213435e333c91095d41290b44b37e79265591c->leave($__internal_e35d765ba251e90d684a27bf3a213435e333c91095d41290b44b37e79265591c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65e82b0880533c2e518e09a4da11d970b9a4ee2aee35e741d8c03d06830872f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e82b0880533c2e518e09a4da11d970b9a4ee2aee35e741d8c03d06830872f7->enter($__internal_65e82b0880533c2e518e09a4da11d970b9a4ee2aee35e741d8c03d06830872f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa398d0796b8fd3c81d92f8c8934e386292ccd7b79b6bcb73ec8ae6f817dcdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa398d0796b8fd3c81d92f8c8934e386292ccd7b79b6bcb73ec8ae6f817dcdb0->enter($__internal_aa398d0796b8fd3c81d92f8c8934e386292ccd7b79b6bcb73ec8ae6f817dcdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_aa398d0796b8fd3c81d92f8c8934e386292ccd7b79b6bcb73ec8ae6f817dcdb0->leave($__internal_aa398d0796b8fd3c81d92f8c8934e386292ccd7b79b6bcb73ec8ae6f817dcdb0_prof);

        
        $__internal_65e82b0880533c2e518e09a4da11d970b9a4ee2aee35e741d8c03d06830872f7->leave($__internal_65e82b0880533c2e518e09a4da11d970b9a4ee2aee35e741d8c03d06830872f7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc8b9579c37fdc8f16c690ab15dec5890e8319c5b6baa75eeba377b994f528ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8b9579c37fdc8f16c690ab15dec5890e8319c5b6baa75eeba377b994f528ea->enter($__internal_bc8b9579c37fdc8f16c690ab15dec5890e8319c5b6baa75eeba377b994f528ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4ff0994d6d7b76db2e8e5b929aa06ac1b440230177c123c1c9c3e849b9a8fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ff0994d6d7b76db2e8e5b929aa06ac1b440230177c123c1c9c3e849b9a8fc5->enter($__internal_d4ff0994d6d7b76db2e8e5b929aa06ac1b440230177c123c1c9c3e849b9a8fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_d4ff0994d6d7b76db2e8e5b929aa06ac1b440230177c123c1c9c3e849b9a8fc5->leave($__internal_d4ff0994d6d7b76db2e8e5b929aa06ac1b440230177c123c1c9c3e849b9a8fc5_prof);

        
        $__internal_bc8b9579c37fdc8f16c690ab15dec5890e8319c5b6baa75eeba377b994f528ea->leave($__internal_bc8b9579c37fdc8f16c690ab15dec5890e8319c5b6baa75eeba377b994f528ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
