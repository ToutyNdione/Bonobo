<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a0725259b3617f33b7cadc67c5a24ebf4389c294dcade00ac7d02bac5bbb5bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae93a88dba8b8171c4521e8ff546f9e4349d4b6404b4dba4b9c1720b9b8726cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae93a88dba8b8171c4521e8ff546f9e4349d4b6404b4dba4b9c1720b9b8726cc->enter($__internal_ae93a88dba8b8171c4521e8ff546f9e4349d4b6404b4dba4b9c1720b9b8726cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_31cedfe7dbc99295d501ee26f9c7be1d4d04507d8fc7fd4a3e52c79f99ece80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cedfe7dbc99295d501ee26f9c7be1d4d04507d8fc7fd4a3e52c79f99ece80a->enter($__internal_31cedfe7dbc99295d501ee26f9c7be1d4d04507d8fc7fd4a3e52c79f99ece80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae93a88dba8b8171c4521e8ff546f9e4349d4b6404b4dba4b9c1720b9b8726cc->leave($__internal_ae93a88dba8b8171c4521e8ff546f9e4349d4b6404b4dba4b9c1720b9b8726cc_prof);

        
        $__internal_31cedfe7dbc99295d501ee26f9c7be1d4d04507d8fc7fd4a3e52c79f99ece80a->leave($__internal_31cedfe7dbc99295d501ee26f9c7be1d4d04507d8fc7fd4a3e52c79f99ece80a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63844ef7a5e53d6e444d294d63185b251ee6f7279ba1e232d39d19bb16a41073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63844ef7a5e53d6e444d294d63185b251ee6f7279ba1e232d39d19bb16a41073->enter($__internal_63844ef7a5e53d6e444d294d63185b251ee6f7279ba1e232d39d19bb16a41073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c96e3ce6e09f72f214dad1e2290c90a1dbcd6211d763b158560cd0be3a9b3a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96e3ce6e09f72f214dad1e2290c90a1dbcd6211d763b158560cd0be3a9b3a50->enter($__internal_c96e3ce6e09f72f214dad1e2290c90a1dbcd6211d763b158560cd0be3a9b3a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c96e3ce6e09f72f214dad1e2290c90a1dbcd6211d763b158560cd0be3a9b3a50->leave($__internal_c96e3ce6e09f72f214dad1e2290c90a1dbcd6211d763b158560cd0be3a9b3a50_prof);

        
        $__internal_63844ef7a5e53d6e444d294d63185b251ee6f7279ba1e232d39d19bb16a41073->leave($__internal_63844ef7a5e53d6e444d294d63185b251ee6f7279ba1e232d39d19bb16a41073_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
