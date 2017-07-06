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
        $__internal_f259cb7ce9d92682ef310fe140322310725985b596b166775eb90f1557ada0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f259cb7ce9d92682ef310fe140322310725985b596b166775eb90f1557ada0f0->enter($__internal_f259cb7ce9d92682ef310fe140322310725985b596b166775eb90f1557ada0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e99e3573eb4ca1893329cfb7f775f9f2b98872fe9349caa6038288cf982f4ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99e3573eb4ca1893329cfb7f775f9f2b98872fe9349caa6038288cf982f4ded->enter($__internal_e99e3573eb4ca1893329cfb7f775f9f2b98872fe9349caa6038288cf982f4ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f259cb7ce9d92682ef310fe140322310725985b596b166775eb90f1557ada0f0->leave($__internal_f259cb7ce9d92682ef310fe140322310725985b596b166775eb90f1557ada0f0_prof);

        
        $__internal_e99e3573eb4ca1893329cfb7f775f9f2b98872fe9349caa6038288cf982f4ded->leave($__internal_e99e3573eb4ca1893329cfb7f775f9f2b98872fe9349caa6038288cf982f4ded_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b9e68dbc829cdcf07a3bba59feeb5133c6366180969a65f591fb5cadc267d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9e68dbc829cdcf07a3bba59feeb5133c6366180969a65f591fb5cadc267d09->enter($__internal_3b9e68dbc829cdcf07a3bba59feeb5133c6366180969a65f591fb5cadc267d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a153a08ad2279d246c04f33929eaabf0835792aecffb6004f38b7849b222813a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a153a08ad2279d246c04f33929eaabf0835792aecffb6004f38b7849b222813a->enter($__internal_a153a08ad2279d246c04f33929eaabf0835792aecffb6004f38b7849b222813a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a153a08ad2279d246c04f33929eaabf0835792aecffb6004f38b7849b222813a->leave($__internal_a153a08ad2279d246c04f33929eaabf0835792aecffb6004f38b7849b222813a_prof);

        
        $__internal_3b9e68dbc829cdcf07a3bba59feeb5133c6366180969a65f591fb5cadc267d09->leave($__internal_3b9e68dbc829cdcf07a3bba59feeb5133c6366180969a65f591fb5cadc267d09_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fb53bbc2b16aa943ffcc62e5e2e1eda77a2013afbac9c9559d95b4201755a09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb53bbc2b16aa943ffcc62e5e2e1eda77a2013afbac9c9559d95b4201755a09d->enter($__internal_fb53bbc2b16aa943ffcc62e5e2e1eda77a2013afbac9c9559d95b4201755a09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6d35d7befebe2ae6747f71b4e09d778eb1fc9480cb24d6cd55d077b10dae3c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d35d7befebe2ae6747f71b4e09d778eb1fc9480cb24d6cd55d077b10dae3c37->enter($__internal_6d35d7befebe2ae6747f71b4e09d778eb1fc9480cb24d6cd55d077b10dae3c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_6d35d7befebe2ae6747f71b4e09d778eb1fc9480cb24d6cd55d077b10dae3c37->leave($__internal_6d35d7befebe2ae6747f71b4e09d778eb1fc9480cb24d6cd55d077b10dae3c37_prof);

        
        $__internal_fb53bbc2b16aa943ffcc62e5e2e1eda77a2013afbac9c9559d95b4201755a09d->leave($__internal_fb53bbc2b16aa943ffcc62e5e2e1eda77a2013afbac9c9559d95b4201755a09d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7c2b86a7227213ecf10886beaad954bb30e6c77a7445b03c44b4a774f64197d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2b86a7227213ecf10886beaad954bb30e6c77a7445b03c44b4a774f64197d8->enter($__internal_7c2b86a7227213ecf10886beaad954bb30e6c77a7445b03c44b4a774f64197d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cb64d18f923c2d046c4184b0ac5d0a5f9b77bf516bc4dc5975d347a3da8beb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb64d18f923c2d046c4184b0ac5d0a5f9b77bf516bc4dc5975d347a3da8beb6d->enter($__internal_cb64d18f923c2d046c4184b0ac5d0a5f9b77bf516bc4dc5975d347a3da8beb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cb64d18f923c2d046c4184b0ac5d0a5f9b77bf516bc4dc5975d347a3da8beb6d->leave($__internal_cb64d18f923c2d046c4184b0ac5d0a5f9b77bf516bc4dc5975d347a3da8beb6d_prof);

        
        $__internal_7c2b86a7227213ecf10886beaad954bb30e6c77a7445b03c44b4a774f64197d8->leave($__internal_7c2b86a7227213ecf10886beaad954bb30e6c77a7445b03c44b4a774f64197d8_prof);

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
