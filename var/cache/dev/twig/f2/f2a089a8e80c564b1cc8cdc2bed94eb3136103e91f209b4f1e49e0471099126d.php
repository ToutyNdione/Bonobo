<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2a9ffc5e42b197bfa495376e293c739ac5013e49ae219558927cae8fe8e70407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5489d2bc59c991940994c1a8484c4f5bbd35484d4e0d8d4e34a80d9a6bd0bdc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5489d2bc59c991940994c1a8484c4f5bbd35484d4e0d8d4e34a80d9a6bd0bdc8->enter($__internal_5489d2bc59c991940994c1a8484c4f5bbd35484d4e0d8d4e34a80d9a6bd0bdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_d7d916355a588c265cdddeee429f0176d0a484a745fc973169c9ee1fd6b179b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d916355a588c265cdddeee429f0176d0a484a745fc973169c9ee1fd6b179b8->enter($__internal_d7d916355a588c265cdddeee429f0176d0a484a745fc973169c9ee1fd6b179b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5489d2bc59c991940994c1a8484c4f5bbd35484d4e0d8d4e34a80d9a6bd0bdc8->leave($__internal_5489d2bc59c991940994c1a8484c4f5bbd35484d4e0d8d4e34a80d9a6bd0bdc8_prof);

        
        $__internal_d7d916355a588c265cdddeee429f0176d0a484a745fc973169c9ee1fd6b179b8->leave($__internal_d7d916355a588c265cdddeee429f0176d0a484a745fc973169c9ee1fd6b179b8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0cda9ae7bbbd0abfd550250a56e28b5ad0071be29a91bad5f15ef4cb43c5f9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cda9ae7bbbd0abfd550250a56e28b5ad0071be29a91bad5f15ef4cb43c5f9b9->enter($__internal_0cda9ae7bbbd0abfd550250a56e28b5ad0071be29a91bad5f15ef4cb43c5f9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1ef0249064aecbd90b02f0570c0a204d2b03be979519cc57248d7fd6e0b583c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef0249064aecbd90b02f0570c0a204d2b03be979519cc57248d7fd6e0b583c7->enter($__internal_1ef0249064aecbd90b02f0570c0a204d2b03be979519cc57248d7fd6e0b583c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_1ef0249064aecbd90b02f0570c0a204d2b03be979519cc57248d7fd6e0b583c7->leave($__internal_1ef0249064aecbd90b02f0570c0a204d2b03be979519cc57248d7fd6e0b583c7_prof);

        
        $__internal_0cda9ae7bbbd0abfd550250a56e28b5ad0071be29a91bad5f15ef4cb43c5f9b9->leave($__internal_0cda9ae7bbbd0abfd550250a56e28b5ad0071be29a91bad5f15ef4cb43c5f9b9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_684956b432f06ffe4d6e9c1591e3cd5c014d2b37a2081a1b04295e47d9ff1f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684956b432f06ffe4d6e9c1591e3cd5c014d2b37a2081a1b04295e47d9ff1f12->enter($__internal_684956b432f06ffe4d6e9c1591e3cd5c014d2b37a2081a1b04295e47d9ff1f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ae2abb1cbeebab2c9395fe8b3b63d01521023b37524959a104b942b4d70b2a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2abb1cbeebab2c9395fe8b3b63d01521023b37524959a104b942b4d70b2a43->enter($__internal_ae2abb1cbeebab2c9395fe8b3b63d01521023b37524959a104b942b4d70b2a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_ae2abb1cbeebab2c9395fe8b3b63d01521023b37524959a104b942b4d70b2a43->leave($__internal_ae2abb1cbeebab2c9395fe8b3b63d01521023b37524959a104b942b4d70b2a43_prof);

        
        $__internal_684956b432f06ffe4d6e9c1591e3cd5c014d2b37a2081a1b04295e47d9ff1f12->leave($__internal_684956b432f06ffe4d6e9c1591e3cd5c014d2b37a2081a1b04295e47d9ff1f12_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_39005aadf4bb067b24f570b639f6ac7bd961b04bacbac20b77b45e3a9872c9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39005aadf4bb067b24f570b639f6ac7bd961b04bacbac20b77b45e3a9872c9d3->enter($__internal_39005aadf4bb067b24f570b639f6ac7bd961b04bacbac20b77b45e3a9872c9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dd4de6bc13dfa30f857369c966245a772bcb4e1d4a60e669ee3110c4cfb54ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4de6bc13dfa30f857369c966245a772bcb4e1d4a60e669ee3110c4cfb54ff8->enter($__internal_dd4de6bc13dfa30f857369c966245a772bcb4e1d4a60e669ee3110c4cfb54ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd4de6bc13dfa30f857369c966245a772bcb4e1d4a60e669ee3110c4cfb54ff8->leave($__internal_dd4de6bc13dfa30f857369c966245a772bcb4e1d4a60e669ee3110c4cfb54ff8_prof);

        
        $__internal_39005aadf4bb067b24f570b639f6ac7bd961b04bacbac20b77b45e3a9872c9d3->leave($__internal_39005aadf4bb067b24f570b639f6ac7bd961b04bacbac20b77b45e3a9872c9d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
