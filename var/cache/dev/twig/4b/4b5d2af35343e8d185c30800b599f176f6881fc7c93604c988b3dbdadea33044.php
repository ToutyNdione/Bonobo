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
        $__internal_392aba30532ae50cbad7bdfe883d86626a0fd85e0a781ea99f20f5e857c33cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392aba30532ae50cbad7bdfe883d86626a0fd85e0a781ea99f20f5e857c33cb5->enter($__internal_392aba30532ae50cbad7bdfe883d86626a0fd85e0a781ea99f20f5e857c33cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_42728d3b5864826fe78965e15dbeb6ea8e6a7598bdc7642194f7b4cebf7d8191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42728d3b5864826fe78965e15dbeb6ea8e6a7598bdc7642194f7b4cebf7d8191->enter($__internal_42728d3b5864826fe78965e15dbeb6ea8e6a7598bdc7642194f7b4cebf7d8191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392aba30532ae50cbad7bdfe883d86626a0fd85e0a781ea99f20f5e857c33cb5->leave($__internal_392aba30532ae50cbad7bdfe883d86626a0fd85e0a781ea99f20f5e857c33cb5_prof);

        
        $__internal_42728d3b5864826fe78965e15dbeb6ea8e6a7598bdc7642194f7b4cebf7d8191->leave($__internal_42728d3b5864826fe78965e15dbeb6ea8e6a7598bdc7642194f7b4cebf7d8191_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4bff3355d3cd99233adcfa9957763c574e561890e64b8b6317a82623552e00eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bff3355d3cd99233adcfa9957763c574e561890e64b8b6317a82623552e00eb->enter($__internal_4bff3355d3cd99233adcfa9957763c574e561890e64b8b6317a82623552e00eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_48622af5355dce1e1985986f1f5b6564193e0eec99a7a2b6cc35193409771408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48622af5355dce1e1985986f1f5b6564193e0eec99a7a2b6cc35193409771408->enter($__internal_48622af5355dce1e1985986f1f5b6564193e0eec99a7a2b6cc35193409771408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48622af5355dce1e1985986f1f5b6564193e0eec99a7a2b6cc35193409771408->leave($__internal_48622af5355dce1e1985986f1f5b6564193e0eec99a7a2b6cc35193409771408_prof);

        
        $__internal_4bff3355d3cd99233adcfa9957763c574e561890e64b8b6317a82623552e00eb->leave($__internal_4bff3355d3cd99233adcfa9957763c574e561890e64b8b6317a82623552e00eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4e2f96a8a4b973654c69ddc13d7af37e98334d0be884f981a05202cbe4b6df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e2f96a8a4b973654c69ddc13d7af37e98334d0be884f981a05202cbe4b6df6->enter($__internal_d4e2f96a8a4b973654c69ddc13d7af37e98334d0be884f981a05202cbe4b6df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cdf7f419b614805512b2dffd373d8f3fa51ccbd32690f35b2c685573761d774f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf7f419b614805512b2dffd373d8f3fa51ccbd32690f35b2c685573761d774f->enter($__internal_cdf7f419b614805512b2dffd373d8f3fa51ccbd32690f35b2c685573761d774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cdf7f419b614805512b2dffd373d8f3fa51ccbd32690f35b2c685573761d774f->leave($__internal_cdf7f419b614805512b2dffd373d8f3fa51ccbd32690f35b2c685573761d774f_prof);

        
        $__internal_d4e2f96a8a4b973654c69ddc13d7af37e98334d0be884f981a05202cbe4b6df6->leave($__internal_d4e2f96a8a4b973654c69ddc13d7af37e98334d0be884f981a05202cbe4b6df6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3aa3b904114de901aecfb7fd4c557235e4fbce20b437f50041a100443e897f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3aa3b904114de901aecfb7fd4c557235e4fbce20b437f50041a100443e897f0->enter($__internal_a3aa3b904114de901aecfb7fd4c557235e4fbce20b437f50041a100443e897f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ecc4fbe266426dba6a8ddda2c42a0913f314813b7353382a45eabdf1b1c1fc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc4fbe266426dba6a8ddda2c42a0913f314813b7353382a45eabdf1b1c1fc65->enter($__internal_ecc4fbe266426dba6a8ddda2c42a0913f314813b7353382a45eabdf1b1c1fc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ecc4fbe266426dba6a8ddda2c42a0913f314813b7353382a45eabdf1b1c1fc65->leave($__internal_ecc4fbe266426dba6a8ddda2c42a0913f314813b7353382a45eabdf1b1c1fc65_prof);

        
        $__internal_a3aa3b904114de901aecfb7fd4c557235e4fbce20b437f50041a100443e897f0->leave($__internal_a3aa3b904114de901aecfb7fd4c557235e4fbce20b437f50041a100443e897f0_prof);

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
