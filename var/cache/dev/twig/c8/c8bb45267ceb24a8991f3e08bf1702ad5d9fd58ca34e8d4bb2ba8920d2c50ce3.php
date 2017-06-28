<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ff52088b54e9641af5e8d66da3fc6d88442c4b189b2742b8ff647996e0e6b6b5 extends Twig_Template
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
        $__internal_dbb94b880d6fad7109cb7518a07a799a70d65224d7ec72161146e8149f0fac10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb94b880d6fad7109cb7518a07a799a70d65224d7ec72161146e8149f0fac10->enter($__internal_dbb94b880d6fad7109cb7518a07a799a70d65224d7ec72161146e8149f0fac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_26591cf3bbb8633d1788de5feb828b38ce0684bde7e15fedd6519ce4fdff436d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26591cf3bbb8633d1788de5feb828b38ce0684bde7e15fedd6519ce4fdff436d->enter($__internal_26591cf3bbb8633d1788de5feb828b38ce0684bde7e15fedd6519ce4fdff436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dbb94b880d6fad7109cb7518a07a799a70d65224d7ec72161146e8149f0fac10->leave($__internal_dbb94b880d6fad7109cb7518a07a799a70d65224d7ec72161146e8149f0fac10_prof);

        
        $__internal_26591cf3bbb8633d1788de5feb828b38ce0684bde7e15fedd6519ce4fdff436d->leave($__internal_26591cf3bbb8633d1788de5feb828b38ce0684bde7e15fedd6519ce4fdff436d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c89ba77f61af9ca01de889a28b33348c2171ed980307dd91348719b51087dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c89ba77f61af9ca01de889a28b33348c2171ed980307dd91348719b51087dea->enter($__internal_4c89ba77f61af9ca01de889a28b33348c2171ed980307dd91348719b51087dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a057a1aa44b236f0de3f765f9401ce01bb520bfffea5d95a6950488ca0611ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a057a1aa44b236f0de3f765f9401ce01bb520bfffea5d95a6950488ca0611ce0->enter($__internal_a057a1aa44b236f0de3f765f9401ce01bb520bfffea5d95a6950488ca0611ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a057a1aa44b236f0de3f765f9401ce01bb520bfffea5d95a6950488ca0611ce0->leave($__internal_a057a1aa44b236f0de3f765f9401ce01bb520bfffea5d95a6950488ca0611ce0_prof);

        
        $__internal_4c89ba77f61af9ca01de889a28b33348c2171ed980307dd91348719b51087dea->leave($__internal_4c89ba77f61af9ca01de889a28b33348c2171ed980307dd91348719b51087dea_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0ea3d12ec2b5800229f6499f792db7f85e607cbc6c5da250e7a119b9b19f7d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea3d12ec2b5800229f6499f792db7f85e607cbc6c5da250e7a119b9b19f7d1d->enter($__internal_0ea3d12ec2b5800229f6499f792db7f85e607cbc6c5da250e7a119b9b19f7d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1d84074fae1bba42dd60bb896a2a00ff2b63fe81d28593a84fd7ff8e0a312db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d84074fae1bba42dd60bb896a2a00ff2b63fe81d28593a84fd7ff8e0a312db4->enter($__internal_1d84074fae1bba42dd60bb896a2a00ff2b63fe81d28593a84fd7ff8e0a312db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_1d84074fae1bba42dd60bb896a2a00ff2b63fe81d28593a84fd7ff8e0a312db4->leave($__internal_1d84074fae1bba42dd60bb896a2a00ff2b63fe81d28593a84fd7ff8e0a312db4_prof);

        
        $__internal_0ea3d12ec2b5800229f6499f792db7f85e607cbc6c5da250e7a119b9b19f7d1d->leave($__internal_0ea3d12ec2b5800229f6499f792db7f85e607cbc6c5da250e7a119b9b19f7d1d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8ae68892646af9205fa5015d26998f527fe8918eeded2e8024bc18d7202a6be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae68892646af9205fa5015d26998f527fe8918eeded2e8024bc18d7202a6be6->enter($__internal_8ae68892646af9205fa5015d26998f527fe8918eeded2e8024bc18d7202a6be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7e6ec1398f4c8ea4ee6e6e69df5c25077c6d95a746159975e79df3b918e71ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6ec1398f4c8ea4ee6e6e69df5c25077c6d95a746159975e79df3b918e71ea0->enter($__internal_7e6ec1398f4c8ea4ee6e6e69df5c25077c6d95a746159975e79df3b918e71ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7e6ec1398f4c8ea4ee6e6e69df5c25077c6d95a746159975e79df3b918e71ea0->leave($__internal_7e6ec1398f4c8ea4ee6e6e69df5c25077c6d95a746159975e79df3b918e71ea0_prof);

        
        $__internal_8ae68892646af9205fa5015d26998f527fe8918eeded2e8024bc18d7202a6be6->leave($__internal_8ae68892646af9205fa5015d26998f527fe8918eeded2e8024bc18d7202a6be6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
