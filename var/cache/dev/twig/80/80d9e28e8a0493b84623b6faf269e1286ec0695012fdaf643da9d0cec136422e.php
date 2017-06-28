<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_f668c149134b366f8e2c7d13f5e7907a7d984bee311b5c3c7f999bc94a28e1f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e19d7eabb7fd569b4c2b2ee1d881a9b836d6c2f17330fdaa79dd4fe6e7c8571e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19d7eabb7fd569b4c2b2ee1d881a9b836d6c2f17330fdaa79dd4fe6e7c8571e->enter($__internal_e19d7eabb7fd569b4c2b2ee1d881a9b836d6c2f17330fdaa79dd4fe6e7c8571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:memory.html.twig"));

        $__internal_98e9e7935ae97b87e0a9fa0ab13baf9f4faedd8da553d5b19747fef885903a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e9e7935ae97b87e0a9fa0ab13baf9f4faedd8da553d5b19747fef885903a56->enter($__internal_98e9e7935ae97b87e0a9fa0ab13baf9f4faedd8da553d5b19747fef885903a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19d7eabb7fd569b4c2b2ee1d881a9b836d6c2f17330fdaa79dd4fe6e7c8571e->leave($__internal_e19d7eabb7fd569b4c2b2ee1d881a9b836d6c2f17330fdaa79dd4fe6e7c8571e_prof);

        
        $__internal_98e9e7935ae97b87e0a9fa0ab13baf9f4faedd8da553d5b19747fef885903a56->leave($__internal_98e9e7935ae97b87e0a9fa0ab13baf9f4faedd8da553d5b19747fef885903a56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0dff20b27a24b46602aa1b3117d5c371d5de2ceb116b5255e63a6b7312e51833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dff20b27a24b46602aa1b3117d5c371d5de2ceb116b5255e63a6b7312e51833->enter($__internal_0dff20b27a24b46602aa1b3117d5c371d5de2ceb116b5255e63a6b7312e51833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a633e357a174591cf8bf0638ee4aa2f5e30334934f6b3fa821d7fa1762f9a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a633e357a174591cf8bf0638ee4aa2f5e30334934f6b3fa821d7fa1762f9a71->enter($__internal_4a633e357a174591cf8bf0638ee4aa2f5e30334934f6b3fa821d7fa1762f9a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 5, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 23, $this->getSourceContext()); })()), "name" => "time", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 23, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4a633e357a174591cf8bf0638ee4aa2f5e30334934f6b3fa821d7fa1762f9a71->leave($__internal_4a633e357a174591cf8bf0638ee4aa2f5e30334934f6b3fa821d7fa1762f9a71_prof);

        
        $__internal_0dff20b27a24b46602aa1b3117d5c371d5de2ceb116b5255e63a6b7312e51833->leave($__internal_0dff20b27a24b46602aa1b3117d5c371d5de2ceb116b5255e63a6b7312e51833_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "WebProfilerBundle:Collector:memory.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
