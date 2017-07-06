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
        $__internal_c28b2aa702ae0f1eb4af329bc1e2fe93e7622695a4d4f149ad8d8b8e9552ebfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28b2aa702ae0f1eb4af329bc1e2fe93e7622695a4d4f149ad8d8b8e9552ebfb->enter($__internal_c28b2aa702ae0f1eb4af329bc1e2fe93e7622695a4d4f149ad8d8b8e9552ebfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6dcf89f8d72be1b663f98d630c939ce3c4b453660515364e41467ca547650c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcf89f8d72be1b663f98d630c939ce3c4b453660515364e41467ca547650c21->enter($__internal_6dcf89f8d72be1b663f98d630c939ce3c4b453660515364e41467ca547650c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28b2aa702ae0f1eb4af329bc1e2fe93e7622695a4d4f149ad8d8b8e9552ebfb->leave($__internal_c28b2aa702ae0f1eb4af329bc1e2fe93e7622695a4d4f149ad8d8b8e9552ebfb_prof);

        
        $__internal_6dcf89f8d72be1b663f98d630c939ce3c4b453660515364e41467ca547650c21->leave($__internal_6dcf89f8d72be1b663f98d630c939ce3c4b453660515364e41467ca547650c21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bea37050c6ec617ce2ef0165b4cbc98104be61a40d1100db94367a17b2b02eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea37050c6ec617ce2ef0165b4cbc98104be61a40d1100db94367a17b2b02eea->enter($__internal_bea37050c6ec617ce2ef0165b4cbc98104be61a40d1100db94367a17b2b02eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_568b6a551665558bd4a8c301533acc17c40459ca316b8e115b5a080a839ea52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568b6a551665558bd4a8c301533acc17c40459ca316b8e115b5a080a839ea52b->enter($__internal_568b6a551665558bd4a8c301533acc17c40459ca316b8e115b5a080a839ea52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_568b6a551665558bd4a8c301533acc17c40459ca316b8e115b5a080a839ea52b->leave($__internal_568b6a551665558bd4a8c301533acc17c40459ca316b8e115b5a080a839ea52b_prof);

        
        $__internal_bea37050c6ec617ce2ef0165b4cbc98104be61a40d1100db94367a17b2b02eea->leave($__internal_bea37050c6ec617ce2ef0165b4cbc98104be61a40d1100db94367a17b2b02eea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3319a03a725703fc4cee1beaa8135405b9d2e05278a1e54c324aba259360fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3319a03a725703fc4cee1beaa8135405b9d2e05278a1e54c324aba259360fb6->enter($__internal_e3319a03a725703fc4cee1beaa8135405b9d2e05278a1e54c324aba259360fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18d69e1bfe62cc484d6fdbfed93cc5b6de694e4e28df90e5f0912bf0b8686ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d69e1bfe62cc484d6fdbfed93cc5b6de694e4e28df90e5f0912bf0b8686ceb->enter($__internal_18d69e1bfe62cc484d6fdbfed93cc5b6de694e4e28df90e5f0912bf0b8686ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18d69e1bfe62cc484d6fdbfed93cc5b6de694e4e28df90e5f0912bf0b8686ceb->leave($__internal_18d69e1bfe62cc484d6fdbfed93cc5b6de694e4e28df90e5f0912bf0b8686ceb_prof);

        
        $__internal_e3319a03a725703fc4cee1beaa8135405b9d2e05278a1e54c324aba259360fb6->leave($__internal_e3319a03a725703fc4cee1beaa8135405b9d2e05278a1e54c324aba259360fb6_prof);

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
