<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_8f1975f35d87036b4117eb35d1de407e0cfe7965c20985fd4165471d1e42fc3e extends Twig_Template
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
        $__internal_fa9b69164fab528156fcbab90b6c8d6ebd4224d947a3f7fef9f40c0a3506fe05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9b69164fab528156fcbab90b6c8d6ebd4224d947a3f7fef9f40c0a3506fe05->enter($__internal_fa9b69164fab528156fcbab90b6c8d6ebd4224d947a3f7fef9f40c0a3506fe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_33d9de0e6fbd4ed204cd723978a90ebc468f78eaf935ff81b281d4082f32e924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d9de0e6fbd4ed204cd723978a90ebc468f78eaf935ff81b281d4082f32e924->enter($__internal_33d9de0e6fbd4ed204cd723978a90ebc468f78eaf935ff81b281d4082f32e924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fa9b69164fab528156fcbab90b6c8d6ebd4224d947a3f7fef9f40c0a3506fe05->leave($__internal_fa9b69164fab528156fcbab90b6c8d6ebd4224d947a3f7fef9f40c0a3506fe05_prof);

        
        $__internal_33d9de0e6fbd4ed204cd723978a90ebc468f78eaf935ff81b281d4082f32e924->leave($__internal_33d9de0e6fbd4ed204cd723978a90ebc468f78eaf935ff81b281d4082f32e924_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
