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
        $__internal_2af4eb2908c2613d2feb10d04bcb3ae2822d34ee2946c063e70ca8578793ccf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af4eb2908c2613d2feb10d04bcb3ae2822d34ee2946c063e70ca8578793ccf8->enter($__internal_2af4eb2908c2613d2feb10d04bcb3ae2822d34ee2946c063e70ca8578793ccf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_8557d2ae608113e6368ce87af6b7f2e6d58d7c85fd3fead2817bbb2293da0d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8557d2ae608113e6368ce87af6b7f2e6d58d7c85fd3fead2817bbb2293da0d83->enter($__internal_8557d2ae608113e6368ce87af6b7f2e6d58d7c85fd3fead2817bbb2293da0d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_2af4eb2908c2613d2feb10d04bcb3ae2822d34ee2946c063e70ca8578793ccf8->leave($__internal_2af4eb2908c2613d2feb10d04bcb3ae2822d34ee2946c063e70ca8578793ccf8_prof);

        
        $__internal_8557d2ae608113e6368ce87af6b7f2e6d58d7c85fd3fead2817bbb2293da0d83->leave($__internal_8557d2ae608113e6368ce87af6b7f2e6d58d7c85fd3fead2817bbb2293da0d83_prof);

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
