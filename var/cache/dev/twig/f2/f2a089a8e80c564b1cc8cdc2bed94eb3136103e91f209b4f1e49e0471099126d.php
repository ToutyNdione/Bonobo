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
        $__internal_9239a50ae66b5b8928236c55d297f945fa5a2bc91f9cd547ddb07c238ac35b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9239a50ae66b5b8928236c55d297f945fa5a2bc91f9cd547ddb07c238ac35b2b->enter($__internal_9239a50ae66b5b8928236c55d297f945fa5a2bc91f9cd547ddb07c238ac35b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_3c746430e6b5352aa9c4fe2e4d86bd0f1137ce552f0a92b362efa327225afcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c746430e6b5352aa9c4fe2e4d86bd0f1137ce552f0a92b362efa327225afcbc->enter($__internal_3c746430e6b5352aa9c4fe2e4d86bd0f1137ce552f0a92b362efa327225afcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9239a50ae66b5b8928236c55d297f945fa5a2bc91f9cd547ddb07c238ac35b2b->leave($__internal_9239a50ae66b5b8928236c55d297f945fa5a2bc91f9cd547ddb07c238ac35b2b_prof);

        
        $__internal_3c746430e6b5352aa9c4fe2e4d86bd0f1137ce552f0a92b362efa327225afcbc->leave($__internal_3c746430e6b5352aa9c4fe2e4d86bd0f1137ce552f0a92b362efa327225afcbc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f1c13a8329aba3c66ee83f270ccb88c7f9ad57b8be617568caee9503d31995a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c13a8329aba3c66ee83f270ccb88c7f9ad57b8be617568caee9503d31995a7->enter($__internal_f1c13a8329aba3c66ee83f270ccb88c7f9ad57b8be617568caee9503d31995a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2a0d32da846181e0829e1af0e4282be99c4a66a414ed66fdbd89a963bed2b5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0d32da846181e0829e1af0e4282be99c4a66a414ed66fdbd89a963bed2b5fb->enter($__internal_2a0d32da846181e0829e1af0e4282be99c4a66a414ed66fdbd89a963bed2b5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_2a0d32da846181e0829e1af0e4282be99c4a66a414ed66fdbd89a963bed2b5fb->leave($__internal_2a0d32da846181e0829e1af0e4282be99c4a66a414ed66fdbd89a963bed2b5fb_prof);

        
        $__internal_f1c13a8329aba3c66ee83f270ccb88c7f9ad57b8be617568caee9503d31995a7->leave($__internal_f1c13a8329aba3c66ee83f270ccb88c7f9ad57b8be617568caee9503d31995a7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d786ad734d5f5ce773651e01bc5fcb854be3d7491a8b22929eab5722add42f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d786ad734d5f5ce773651e01bc5fcb854be3d7491a8b22929eab5722add42f3d->enter($__internal_d786ad734d5f5ce773651e01bc5fcb854be3d7491a8b22929eab5722add42f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_40066260da297dd76a71e19f8b7cfb3baacbbeb3cfff08c6f29793362dbe5ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40066260da297dd76a71e19f8b7cfb3baacbbeb3cfff08c6f29793362dbe5ad8->enter($__internal_40066260da297dd76a71e19f8b7cfb3baacbbeb3cfff08c6f29793362dbe5ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_40066260da297dd76a71e19f8b7cfb3baacbbeb3cfff08c6f29793362dbe5ad8->leave($__internal_40066260da297dd76a71e19f8b7cfb3baacbbeb3cfff08c6f29793362dbe5ad8_prof);

        
        $__internal_d786ad734d5f5ce773651e01bc5fcb854be3d7491a8b22929eab5722add42f3d->leave($__internal_d786ad734d5f5ce773651e01bc5fcb854be3d7491a8b22929eab5722add42f3d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e66d1c4ef93fbef494ca15edc731444a72b9aad24bc77cbb504dd5df2baca4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66d1c4ef93fbef494ca15edc731444a72b9aad24bc77cbb504dd5df2baca4a0->enter($__internal_e66d1c4ef93fbef494ca15edc731444a72b9aad24bc77cbb504dd5df2baca4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_39cc3e51b8ea5ec6042c02d744b87b47c12b925c4b21ac50e787e27b752df5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cc3e51b8ea5ec6042c02d744b87b47c12b925c4b21ac50e787e27b752df5a0->enter($__internal_39cc3e51b8ea5ec6042c02d744b87b47c12b925c4b21ac50e787e27b752df5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_39cc3e51b8ea5ec6042c02d744b87b47c12b925c4b21ac50e787e27b752df5a0->leave($__internal_39cc3e51b8ea5ec6042c02d744b87b47c12b925c4b21ac50e787e27b752df5a0_prof);

        
        $__internal_e66d1c4ef93fbef494ca15edc731444a72b9aad24bc77cbb504dd5df2baca4a0->leave($__internal_e66d1c4ef93fbef494ca15edc731444a72b9aad24bc77cbb504dd5df2baca4a0_prof);

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
