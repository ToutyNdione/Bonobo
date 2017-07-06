<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e0d33e3a72058ed3e993446924366b2493d3b3de5e39296ab0f7425c6940bbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d33e3a72058ed3e993446924366b2493d3b3de5e39296ab0f7425c6940bbd9->enter($__internal_e0d33e3a72058ed3e993446924366b2493d3b3de5e39296ab0f7425c6940bbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_40facf23fb879f3b9a32e488a3a4a4ffdbb17db12f0bc01c3a908caddcfc0fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40facf23fb879f3b9a32e488a3a4a4ffdbb17db12f0bc01c3a908caddcfc0fa4->enter($__internal_40facf23fb879f3b9a32e488a3a4a4ffdbb17db12f0bc01c3a908caddcfc0fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d33e3a72058ed3e993446924366b2493d3b3de5e39296ab0f7425c6940bbd9->leave($__internal_e0d33e3a72058ed3e993446924366b2493d3b3de5e39296ab0f7425c6940bbd9_prof);

        
        $__internal_40facf23fb879f3b9a32e488a3a4a4ffdbb17db12f0bc01c3a908caddcfc0fa4->leave($__internal_40facf23fb879f3b9a32e488a3a4a4ffdbb17db12f0bc01c3a908caddcfc0fa4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc04b44f0ff102f8361418977dd41adc746d2ddcfaf1353a4739c0644d651feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc04b44f0ff102f8361418977dd41adc746d2ddcfaf1353a4739c0644d651feb->enter($__internal_fc04b44f0ff102f8361418977dd41adc746d2ddcfaf1353a4739c0644d651feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf475232145f3d4aa9905538d6830a9ed9447d9eb035960ac23f36952f4f9811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf475232145f3d4aa9905538d6830a9ed9447d9eb035960ac23f36952f4f9811->enter($__internal_cf475232145f3d4aa9905538d6830a9ed9447d9eb035960ac23f36952f4f9811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cf475232145f3d4aa9905538d6830a9ed9447d9eb035960ac23f36952f4f9811->leave($__internal_cf475232145f3d4aa9905538d6830a9ed9447d9eb035960ac23f36952f4f9811_prof);

        
        $__internal_fc04b44f0ff102f8361418977dd41adc746d2ddcfaf1353a4739c0644d651feb->leave($__internal_fc04b44f0ff102f8361418977dd41adc746d2ddcfaf1353a4739c0644d651feb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcdf163bbec46baad1466bde31968aa0a1f972825310653a4131d61ab81500e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdf163bbec46baad1466bde31968aa0a1f972825310653a4131d61ab81500e6->enter($__internal_fcdf163bbec46baad1466bde31968aa0a1f972825310653a4131d61ab81500e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ea394d90eb6a13e9a8c10d1bdcd1b0b684e18ae8080d683b1c828b4877481652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea394d90eb6a13e9a8c10d1bdcd1b0b684e18ae8080d683b1c828b4877481652->enter($__internal_ea394d90eb6a13e9a8c10d1bdcd1b0b684e18ae8080d683b1c828b4877481652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ea394d90eb6a13e9a8c10d1bdcd1b0b684e18ae8080d683b1c828b4877481652->leave($__internal_ea394d90eb6a13e9a8c10d1bdcd1b0b684e18ae8080d683b1c828b4877481652_prof);

        
        $__internal_fcdf163bbec46baad1466bde31968aa0a1f972825310653a4131d61ab81500e6->leave($__internal_fcdf163bbec46baad1466bde31968aa0a1f972825310653a4131d61ab81500e6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d2756cbb6df94d60462c9de276bed8492df430102be991f718372f08d70b9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2756cbb6df94d60462c9de276bed8492df430102be991f718372f08d70b9d2->enter($__internal_8d2756cbb6df94d60462c9de276bed8492df430102be991f718372f08d70b9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7739ac0890f61eb5ab4263c608e458609410e8bf9af27256c41e964d0574e7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7739ac0890f61eb5ab4263c608e458609410e8bf9af27256c41e964d0574e7a4->enter($__internal_7739ac0890f61eb5ab4263c608e458609410e8bf9af27256c41e964d0574e7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7739ac0890f61eb5ab4263c608e458609410e8bf9af27256c41e964d0574e7a4->leave($__internal_7739ac0890f61eb5ab4263c608e458609410e8bf9af27256c41e964d0574e7a4_prof);

        
        $__internal_8d2756cbb6df94d60462c9de276bed8492df430102be991f718372f08d70b9d2->leave($__internal_8d2756cbb6df94d60462c9de276bed8492df430102be991f718372f08d70b9d2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
