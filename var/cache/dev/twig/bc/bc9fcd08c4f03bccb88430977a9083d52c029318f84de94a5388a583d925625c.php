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
        $__internal_22f4f46cab5f69cf5d5c35ffcdd81cf438bdead449fe36e7636820f718491a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f4f46cab5f69cf5d5c35ffcdd81cf438bdead449fe36e7636820f718491a32->enter($__internal_22f4f46cab5f69cf5d5c35ffcdd81cf438bdead449fe36e7636820f718491a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e0babffa6898ab4f4988af97821f395a9a16548a169f324b7c41decd30c6e0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0babffa6898ab4f4988af97821f395a9a16548a169f324b7c41decd30c6e0a4->enter($__internal_e0babffa6898ab4f4988af97821f395a9a16548a169f324b7c41decd30c6e0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f4f46cab5f69cf5d5c35ffcdd81cf438bdead449fe36e7636820f718491a32->leave($__internal_22f4f46cab5f69cf5d5c35ffcdd81cf438bdead449fe36e7636820f718491a32_prof);

        
        $__internal_e0babffa6898ab4f4988af97821f395a9a16548a169f324b7c41decd30c6e0a4->leave($__internal_e0babffa6898ab4f4988af97821f395a9a16548a169f324b7c41decd30c6e0a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edfd2230ab7811ec4156a384c83ebe7520b73ca1d7a73fa13ed66216a4ef027e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfd2230ab7811ec4156a384c83ebe7520b73ca1d7a73fa13ed66216a4ef027e->enter($__internal_edfd2230ab7811ec4156a384c83ebe7520b73ca1d7a73fa13ed66216a4ef027e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3ea25537ad87c987b59d684a4bac2541f82873f38513f4eab0d4e1adcb765da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ea25537ad87c987b59d684a4bac2541f82873f38513f4eab0d4e1adcb765da->enter($__internal_a3ea25537ad87c987b59d684a4bac2541f82873f38513f4eab0d4e1adcb765da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3ea25537ad87c987b59d684a4bac2541f82873f38513f4eab0d4e1adcb765da->leave($__internal_a3ea25537ad87c987b59d684a4bac2541f82873f38513f4eab0d4e1adcb765da_prof);

        
        $__internal_edfd2230ab7811ec4156a384c83ebe7520b73ca1d7a73fa13ed66216a4ef027e->leave($__internal_edfd2230ab7811ec4156a384c83ebe7520b73ca1d7a73fa13ed66216a4ef027e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae72d9864ea89fe2a0bd0087214f1544e75fe066791ad6c31feebd02c5936fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae72d9864ea89fe2a0bd0087214f1544e75fe066791ad6c31feebd02c5936fb9->enter($__internal_ae72d9864ea89fe2a0bd0087214f1544e75fe066791ad6c31feebd02c5936fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97459f6621865f1d943ed462effbc3b4796fcd841144d360f1386fee00fb0833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97459f6621865f1d943ed462effbc3b4796fcd841144d360f1386fee00fb0833->enter($__internal_97459f6621865f1d943ed462effbc3b4796fcd841144d360f1386fee00fb0833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97459f6621865f1d943ed462effbc3b4796fcd841144d360f1386fee00fb0833->leave($__internal_97459f6621865f1d943ed462effbc3b4796fcd841144d360f1386fee00fb0833_prof);

        
        $__internal_ae72d9864ea89fe2a0bd0087214f1544e75fe066791ad6c31feebd02c5936fb9->leave($__internal_ae72d9864ea89fe2a0bd0087214f1544e75fe066791ad6c31feebd02c5936fb9_prof);

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
