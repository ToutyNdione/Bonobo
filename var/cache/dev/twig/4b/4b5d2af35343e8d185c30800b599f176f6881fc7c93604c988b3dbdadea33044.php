<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c19a8b192aae7c6ee72b4e80fed1c59d037439b189ed106fb17729c24a102ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19a8b192aae7c6ee72b4e80fed1c59d037439b189ed106fb17729c24a102ea5->enter($__internal_c19a8b192aae7c6ee72b4e80fed1c59d037439b189ed106fb17729c24a102ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0081a6e61c4247cff1791f62f01185fb97abdb3953eb189dbbcbd1664f961246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0081a6e61c4247cff1791f62f01185fb97abdb3953eb189dbbcbd1664f961246->enter($__internal_0081a6e61c4247cff1791f62f01185fb97abdb3953eb189dbbcbd1664f961246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c19a8b192aae7c6ee72b4e80fed1c59d037439b189ed106fb17729c24a102ea5->leave($__internal_c19a8b192aae7c6ee72b4e80fed1c59d037439b189ed106fb17729c24a102ea5_prof);

        
        $__internal_0081a6e61c4247cff1791f62f01185fb97abdb3953eb189dbbcbd1664f961246->leave($__internal_0081a6e61c4247cff1791f62f01185fb97abdb3953eb189dbbcbd1664f961246_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe0e344549d775661385b055a523e7e9a51863030579b3e809908e085205c614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0e344549d775661385b055a523e7e9a51863030579b3e809908e085205c614->enter($__internal_fe0e344549d775661385b055a523e7e9a51863030579b3e809908e085205c614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ec4444d5db35f3933167f94fa6670f96732ef7ec2533e3d1aec8ad9c75e4f57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4444d5db35f3933167f94fa6670f96732ef7ec2533e3d1aec8ad9c75e4f57d->enter($__internal_ec4444d5db35f3933167f94fa6670f96732ef7ec2533e3d1aec8ad9c75e4f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec4444d5db35f3933167f94fa6670f96732ef7ec2533e3d1aec8ad9c75e4f57d->leave($__internal_ec4444d5db35f3933167f94fa6670f96732ef7ec2533e3d1aec8ad9c75e4f57d_prof);

        
        $__internal_fe0e344549d775661385b055a523e7e9a51863030579b3e809908e085205c614->leave($__internal_fe0e344549d775661385b055a523e7e9a51863030579b3e809908e085205c614_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45c2cea2f4a61c140bfe3fef75d9d5c695f54e3f85bff41e625584561cad260e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c2cea2f4a61c140bfe3fef75d9d5c695f54e3f85bff41e625584561cad260e->enter($__internal_45c2cea2f4a61c140bfe3fef75d9d5c695f54e3f85bff41e625584561cad260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e9ee7002543c986786bcd0e98c5dc5c2ea7e08a926aa4e95336216c27deb02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9ee7002543c986786bcd0e98c5dc5c2ea7e08a926aa4e95336216c27deb02e->enter($__internal_0e9ee7002543c986786bcd0e98c5dc5c2ea7e08a926aa4e95336216c27deb02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e9ee7002543c986786bcd0e98c5dc5c2ea7e08a926aa4e95336216c27deb02e->leave($__internal_0e9ee7002543c986786bcd0e98c5dc5c2ea7e08a926aa4e95336216c27deb02e_prof);

        
        $__internal_45c2cea2f4a61c140bfe3fef75d9d5c695f54e3f85bff41e625584561cad260e->leave($__internal_45c2cea2f4a61c140bfe3fef75d9d5c695f54e3f85bff41e625584561cad260e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf20c3393bbd2422acfa3fb9b5efbd48ab94beac4b05011033307b9a67c68bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf20c3393bbd2422acfa3fb9b5efbd48ab94beac4b05011033307b9a67c68bc2->enter($__internal_cf20c3393bbd2422acfa3fb9b5efbd48ab94beac4b05011033307b9a67c68bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0fb55ee8a56c69331d13d0baaa9b6d50f0787ec0f3535f16744d8a2e5b59646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fb55ee8a56c69331d13d0baaa9b6d50f0787ec0f3535f16744d8a2e5b59646->enter($__internal_f0fb55ee8a56c69331d13d0baaa9b6d50f0787ec0f3535f16744d8a2e5b59646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f0fb55ee8a56c69331d13d0baaa9b6d50f0787ec0f3535f16744d8a2e5b59646->leave($__internal_f0fb55ee8a56c69331d13d0baaa9b6d50f0787ec0f3535f16744d8a2e5b59646_prof);

        
        $__internal_cf20c3393bbd2422acfa3fb9b5efbd48ab94beac4b05011033307b9a67c68bc2->leave($__internal_cf20c3393bbd2422acfa3fb9b5efbd48ab94beac4b05011033307b9a67c68bc2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
