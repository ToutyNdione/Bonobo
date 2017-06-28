<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_7f0001aa196c95a6909dfd4b8a8476152c7a6802b0db307807c69a0a7b19ea3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0001aa196c95a6909dfd4b8a8476152c7a6802b0db307807c69a0a7b19ea3b->enter($__internal_7f0001aa196c95a6909dfd4b8a8476152c7a6802b0db307807c69a0a7b19ea3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5391278acf09e48f3fb4028f6dc1d5d9e2e3e1d8b3f356f60ef9180cdeff19df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5391278acf09e48f3fb4028f6dc1d5d9e2e3e1d8b3f356f60ef9180cdeff19df->enter($__internal_5391278acf09e48f3fb4028f6dc1d5d9e2e3e1d8b3f356f60ef9180cdeff19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f0001aa196c95a6909dfd4b8a8476152c7a6802b0db307807c69a0a7b19ea3b->leave($__internal_7f0001aa196c95a6909dfd4b8a8476152c7a6802b0db307807c69a0a7b19ea3b_prof);

        
        $__internal_5391278acf09e48f3fb4028f6dc1d5d9e2e3e1d8b3f356f60ef9180cdeff19df->leave($__internal_5391278acf09e48f3fb4028f6dc1d5d9e2e3e1d8b3f356f60ef9180cdeff19df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfd3c1e8e6dc13adc9aaaf9ea9d10ab74d0ff76ff1da1bdd5bbf429a6e5cd8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd3c1e8e6dc13adc9aaaf9ea9d10ab74d0ff76ff1da1bdd5bbf429a6e5cd8e3->enter($__internal_dfd3c1e8e6dc13adc9aaaf9ea9d10ab74d0ff76ff1da1bdd5bbf429a6e5cd8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2be16ada8e4814c83bb46307aa9dbdd4b24cb53d2e3599213f576ada5cf25b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2be16ada8e4814c83bb46307aa9dbdd4b24cb53d2e3599213f576ada5cf25b7->enter($__internal_b2be16ada8e4814c83bb46307aa9dbdd4b24cb53d2e3599213f576ada5cf25b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b2be16ada8e4814c83bb46307aa9dbdd4b24cb53d2e3599213f576ada5cf25b7->leave($__internal_b2be16ada8e4814c83bb46307aa9dbdd4b24cb53d2e3599213f576ada5cf25b7_prof);

        
        $__internal_dfd3c1e8e6dc13adc9aaaf9ea9d10ab74d0ff76ff1da1bdd5bbf429a6e5cd8e3->leave($__internal_dfd3c1e8e6dc13adc9aaaf9ea9d10ab74d0ff76ff1da1bdd5bbf429a6e5cd8e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
