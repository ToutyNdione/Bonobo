<?php

/* ::base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c31c828461a6c230eebc08db7256aa556b905dc5855dd6de101ae8502027a6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31c828461a6c230eebc08db7256aa556b905dc5855dd6de101ae8502027a6a5->enter($__internal_c31c828461a6c230eebc08db7256aa556b905dc5855dd6de101ae8502027a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_754c6b23a225c7ea9e070062c9cd65aca0dbe218996fe24d655c3334f61609de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754c6b23a225c7ea9e070062c9cd65aca0dbe218996fe24d655c3334f61609de->enter($__internal_754c6b23a225c7ea9e070062c9cd65aca0dbe218996fe24d655c3334f61609de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c31c828461a6c230eebc08db7256aa556b905dc5855dd6de101ae8502027a6a5->leave($__internal_c31c828461a6c230eebc08db7256aa556b905dc5855dd6de101ae8502027a6a5_prof);

        
        $__internal_754c6b23a225c7ea9e070062c9cd65aca0dbe218996fe24d655c3334f61609de->leave($__internal_754c6b23a225c7ea9e070062c9cd65aca0dbe218996fe24d655c3334f61609de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec3ce00e1027490ec17e6ecd835dd6cea628311e3ad80d791da85e6597c7c0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3ce00e1027490ec17e6ecd835dd6cea628311e3ad80d791da85e6597c7c0a1->enter($__internal_ec3ce00e1027490ec17e6ecd835dd6cea628311e3ad80d791da85e6597c7c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f80913ab70fd6454ce080a20f693b3177acb5e8912a5eed7ebe53451e122698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f80913ab70fd6454ce080a20f693b3177acb5e8912a5eed7ebe53451e122698->enter($__internal_8f80913ab70fd6454ce080a20f693b3177acb5e8912a5eed7ebe53451e122698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f80913ab70fd6454ce080a20f693b3177acb5e8912a5eed7ebe53451e122698->leave($__internal_8f80913ab70fd6454ce080a20f693b3177acb5e8912a5eed7ebe53451e122698_prof);

        
        $__internal_ec3ce00e1027490ec17e6ecd835dd6cea628311e3ad80d791da85e6597c7c0a1->leave($__internal_ec3ce00e1027490ec17e6ecd835dd6cea628311e3ad80d791da85e6597c7c0a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_591061cc646bc7c4a486e65d975d79df58f707ea9f0bb0362231f1aa67fbbfce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591061cc646bc7c4a486e65d975d79df58f707ea9f0bb0362231f1aa67fbbfce->enter($__internal_591061cc646bc7c4a486e65d975d79df58f707ea9f0bb0362231f1aa67fbbfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_14215d366b8d813db77c090c3184ff994a5c58da3d7f068ba6b74ff3c3ab69ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14215d366b8d813db77c090c3184ff994a5c58da3d7f068ba6b74ff3c3ab69ec->enter($__internal_14215d366b8d813db77c090c3184ff994a5c58da3d7f068ba6b74ff3c3ab69ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_14215d366b8d813db77c090c3184ff994a5c58da3d7f068ba6b74ff3c3ab69ec->leave($__internal_14215d366b8d813db77c090c3184ff994a5c58da3d7f068ba6b74ff3c3ab69ec_prof);

        
        $__internal_591061cc646bc7c4a486e65d975d79df58f707ea9f0bb0362231f1aa67fbbfce->leave($__internal_591061cc646bc7c4a486e65d975d79df58f707ea9f0bb0362231f1aa67fbbfce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e44975c551a3e70864c00b7d3f5e12e4ab743c0e720bb9317a27ecb5eb4c3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e44975c551a3e70864c00b7d3f5e12e4ab743c0e720bb9317a27ecb5eb4c3c9->enter($__internal_1e44975c551a3e70864c00b7d3f5e12e4ab743c0e720bb9317a27ecb5eb4c3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9894fa7ab2d2112cd64ca6fdce2a715de61e9efd48a01e23d034c600b7b9512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9894fa7ab2d2112cd64ca6fdce2a715de61e9efd48a01e23d034c600b7b9512->enter($__internal_e9894fa7ab2d2112cd64ca6fdce2a715de61e9efd48a01e23d034c600b7b9512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9894fa7ab2d2112cd64ca6fdce2a715de61e9efd48a01e23d034c600b7b9512->leave($__internal_e9894fa7ab2d2112cd64ca6fdce2a715de61e9efd48a01e23d034c600b7b9512_prof);

        
        $__internal_1e44975c551a3e70864c00b7d3f5e12e4ab743c0e720bb9317a27ecb5eb4c3c9->leave($__internal_1e44975c551a3e70864c00b7d3f5e12e4ab743c0e720bb9317a27ecb5eb4c3c9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1838505bc8d9b725de0798f9315e8917387522ed0e83f00adc285edcbc05723b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1838505bc8d9b725de0798f9315e8917387522ed0e83f00adc285edcbc05723b->enter($__internal_1838505bc8d9b725de0798f9315e8917387522ed0e83f00adc285edcbc05723b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9269f45b389feff39bd077ab35b3820fe1c2b1eb2647699d594dd02c0379b9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9269f45b389feff39bd077ab35b3820fe1c2b1eb2647699d594dd02c0379b9c6->enter($__internal_9269f45b389feff39bd077ab35b3820fe1c2b1eb2647699d594dd02c0379b9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9269f45b389feff39bd077ab35b3820fe1c2b1eb2647699d594dd02c0379b9c6->leave($__internal_9269f45b389feff39bd077ab35b3820fe1c2b1eb2647699d594dd02c0379b9c6_prof);

        
        $__internal_1838505bc8d9b725de0798f9315e8917387522ed0e83f00adc285edcbc05723b->leave($__internal_1838505bc8d9b725de0798f9315e8917387522ed0e83f00adc285edcbc05723b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/base.html.twig");
    }
}
