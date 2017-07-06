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
        $__internal_4677a654e9eb36da599418103e2f71780da82b52490880baa913165285b55541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4677a654e9eb36da599418103e2f71780da82b52490880baa913165285b55541->enter($__internal_4677a654e9eb36da599418103e2f71780da82b52490880baa913165285b55541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7d9b4d9358f7c85a2d367c20fe4a6ee2f8937b893094686e72767095e7e8e463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9b4d9358f7c85a2d367c20fe4a6ee2f8937b893094686e72767095e7e8e463->enter($__internal_7d9b4d9358f7c85a2d367c20fe4a6ee2f8937b893094686e72767095e7e8e463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4677a654e9eb36da599418103e2f71780da82b52490880baa913165285b55541->leave($__internal_4677a654e9eb36da599418103e2f71780da82b52490880baa913165285b55541_prof);

        
        $__internal_7d9b4d9358f7c85a2d367c20fe4a6ee2f8937b893094686e72767095e7e8e463->leave($__internal_7d9b4d9358f7c85a2d367c20fe4a6ee2f8937b893094686e72767095e7e8e463_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7313c4aec6af6a9e016a2d029a7b9bd1cac6684476cf6d8b5c45800ef9c8219e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7313c4aec6af6a9e016a2d029a7b9bd1cac6684476cf6d8b5c45800ef9c8219e->enter($__internal_7313c4aec6af6a9e016a2d029a7b9bd1cac6684476cf6d8b5c45800ef9c8219e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_13d336faeff5a884d9164e54e5047ed8145e952fffcf646608c96feffb30f8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d336faeff5a884d9164e54e5047ed8145e952fffcf646608c96feffb30f8eb->enter($__internal_13d336faeff5a884d9164e54e5047ed8145e952fffcf646608c96feffb30f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_13d336faeff5a884d9164e54e5047ed8145e952fffcf646608c96feffb30f8eb->leave($__internal_13d336faeff5a884d9164e54e5047ed8145e952fffcf646608c96feffb30f8eb_prof);

        
        $__internal_7313c4aec6af6a9e016a2d029a7b9bd1cac6684476cf6d8b5c45800ef9c8219e->leave($__internal_7313c4aec6af6a9e016a2d029a7b9bd1cac6684476cf6d8b5c45800ef9c8219e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_997680c088b1f4c7f24f9606f102a95cbde49700f96d3ecb7ac816a48c142dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997680c088b1f4c7f24f9606f102a95cbde49700f96d3ecb7ac816a48c142dd8->enter($__internal_997680c088b1f4c7f24f9606f102a95cbde49700f96d3ecb7ac816a48c142dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99ec68b20c4cb1b59b1225072e8a7e74d051fdf921ca4b236e17745e3e3cacea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ec68b20c4cb1b59b1225072e8a7e74d051fdf921ca4b236e17745e3e3cacea->enter($__internal_99ec68b20c4cb1b59b1225072e8a7e74d051fdf921ca4b236e17745e3e3cacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_99ec68b20c4cb1b59b1225072e8a7e74d051fdf921ca4b236e17745e3e3cacea->leave($__internal_99ec68b20c4cb1b59b1225072e8a7e74d051fdf921ca4b236e17745e3e3cacea_prof);

        
        $__internal_997680c088b1f4c7f24f9606f102a95cbde49700f96d3ecb7ac816a48c142dd8->leave($__internal_997680c088b1f4c7f24f9606f102a95cbde49700f96d3ecb7ac816a48c142dd8_prof);

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
