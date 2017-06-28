<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1e734c42058fbbc91888a4c54ed4dc283303a60b29cd4f5f7dbe8d6428cca2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd226a821601e6422e8221192441228f7c338575b8a43fed9b9d5503a1ecaaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd226a821601e6422e8221192441228f7c338575b8a43fed9b9d5503a1ecaaaa->enter($__internal_dd226a821601e6422e8221192441228f7c338575b8a43fed9b9d5503a1ecaaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fd149d65aca140924bdf879036608b06410a6917d2ff40c8fdf4e611f4f70d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd149d65aca140924bdf879036608b06410a6917d2ff40c8fdf4e611f4f70d37->enter($__internal_fd149d65aca140924bdf879036608b06410a6917d2ff40c8fdf4e611f4f70d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd226a821601e6422e8221192441228f7c338575b8a43fed9b9d5503a1ecaaaa->leave($__internal_dd226a821601e6422e8221192441228f7c338575b8a43fed9b9d5503a1ecaaaa_prof);

        
        $__internal_fd149d65aca140924bdf879036608b06410a6917d2ff40c8fdf4e611f4f70d37->leave($__internal_fd149d65aca140924bdf879036608b06410a6917d2ff40c8fdf4e611f4f70d37_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_43ec3d39029c5df4b37854145afc1a6b7ecb6d7b33e31aba66dc846332792366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ec3d39029c5df4b37854145afc1a6b7ecb6d7b33e31aba66dc846332792366->enter($__internal_43ec3d39029c5df4b37854145afc1a6b7ecb6d7b33e31aba66dc846332792366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_48885f2f15ec3aea8993a1fc20847dfef1b62fc5f9367f68f9883188cf7bf5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48885f2f15ec3aea8993a1fc20847dfef1b62fc5f9367f68f9883188cf7bf5b7->enter($__internal_48885f2f15ec3aea8993a1fc20847dfef1b62fc5f9367f68f9883188cf7bf5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_48885f2f15ec3aea8993a1fc20847dfef1b62fc5f9367f68f9883188cf7bf5b7->leave($__internal_48885f2f15ec3aea8993a1fc20847dfef1b62fc5f9367f68f9883188cf7bf5b7_prof);

        
        $__internal_43ec3d39029c5df4b37854145afc1a6b7ecb6d7b33e31aba66dc846332792366->leave($__internal_43ec3d39029c5df4b37854145afc1a6b7ecb6d7b33e31aba66dc846332792366_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26d5627396085b68e21651eb2723dfd94ee0b0151becd7803ca2348e681d9cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d5627396085b68e21651eb2723dfd94ee0b0151becd7803ca2348e681d9cc2->enter($__internal_26d5627396085b68e21651eb2723dfd94ee0b0151becd7803ca2348e681d9cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ebf0a6053d7e1c8af15b0ade4a75b5939f8ee5e563f7e6fe1c5a24711c47bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebf0a6053d7e1c8af15b0ade4a75b5939f8ee5e563f7e6fe1c5a24711c47bd5->enter($__internal_6ebf0a6053d7e1c8af15b0ade4a75b5939f8ee5e563f7e6fe1c5a24711c47bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6ebf0a6053d7e1c8af15b0ade4a75b5939f8ee5e563f7e6fe1c5a24711c47bd5->leave($__internal_6ebf0a6053d7e1c8af15b0ade4a75b5939f8ee5e563f7e6fe1c5a24711c47bd5_prof);

        
        $__internal_26d5627396085b68e21651eb2723dfd94ee0b0151becd7803ca2348e681d9cc2->leave($__internal_26d5627396085b68e21651eb2723dfd94ee0b0151becd7803ca2348e681d9cc2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
