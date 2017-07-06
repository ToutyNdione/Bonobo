<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b11e71f19d4dd921d6334c419fce5f06b6dce35e3c1de3b24c8b836f709c2c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0ed728b714cd4468ff0b93598bbe971c30570848e492c54fb372098ebf88711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ed728b714cd4468ff0b93598bbe971c30570848e492c54fb372098ebf88711->enter($__internal_b0ed728b714cd4468ff0b93598bbe971c30570848e492c54fb372098ebf88711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_79645637ccb5f07564f857acc6ddb3da7720ed35d66ba754c196ed158d7d6f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79645637ccb5f07564f857acc6ddb3da7720ed35d66ba754c196ed158d7d6f26->enter($__internal_79645637ccb5f07564f857acc6ddb3da7720ed35d66ba754c196ed158d7d6f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ed728b714cd4468ff0b93598bbe971c30570848e492c54fb372098ebf88711->leave($__internal_b0ed728b714cd4468ff0b93598bbe971c30570848e492c54fb372098ebf88711_prof);

        
        $__internal_79645637ccb5f07564f857acc6ddb3da7720ed35d66ba754c196ed158d7d6f26->leave($__internal_79645637ccb5f07564f857acc6ddb3da7720ed35d66ba754c196ed158d7d6f26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48e2854871decf6490a646d22302af764726c7884bce20e4f0c20c54ace6c84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e2854871decf6490a646d22302af764726c7884bce20e4f0c20c54ace6c84f->enter($__internal_48e2854871decf6490a646d22302af764726c7884bce20e4f0c20c54ace6c84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_663ea3713863aee75debc0eab66601f33581526e5478a5702fdfb400fc33bc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663ea3713863aee75debc0eab66601f33581526e5478a5702fdfb400fc33bc20->enter($__internal_663ea3713863aee75debc0eab66601f33581526e5478a5702fdfb400fc33bc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_663ea3713863aee75debc0eab66601f33581526e5478a5702fdfb400fc33bc20->leave($__internal_663ea3713863aee75debc0eab66601f33581526e5478a5702fdfb400fc33bc20_prof);

        
        $__internal_48e2854871decf6490a646d22302af764726c7884bce20e4f0c20c54ace6c84f->leave($__internal_48e2854871decf6490a646d22302af764726c7884bce20e4f0c20c54ace6c84f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7378638478700c7dc471e3aad38f65bd5a29c9efc7174a2858ab2dac4c7d9316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7378638478700c7dc471e3aad38f65bd5a29c9efc7174a2858ab2dac4c7d9316->enter($__internal_7378638478700c7dc471e3aad38f65bd5a29c9efc7174a2858ab2dac4c7d9316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a64f4ba76805c90c283cb801d092d2a14eaf3a6fbd5e1746268e00647542f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a64f4ba76805c90c283cb801d092d2a14eaf3a6fbd5e1746268e00647542f69->enter($__internal_9a64f4ba76805c90c283cb801d092d2a14eaf3a6fbd5e1746268e00647542f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9a64f4ba76805c90c283cb801d092d2a14eaf3a6fbd5e1746268e00647542f69->leave($__internal_9a64f4ba76805c90c283cb801d092d2a14eaf3a6fbd5e1746268e00647542f69_prof);

        
        $__internal_7378638478700c7dc471e3aad38f65bd5a29c9efc7174a2858ab2dac4c7d9316->leave($__internal_7378638478700c7dc471e3aad38f65bd5a29c9efc7174a2858ab2dac4c7d9316_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
