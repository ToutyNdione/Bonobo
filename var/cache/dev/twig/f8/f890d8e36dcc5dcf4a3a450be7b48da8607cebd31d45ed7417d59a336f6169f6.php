<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2e2bbfa71b7a679effbecf9f52c460535e3ea29f79a61354f18c9033ddd4adf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f6bcc53b0fd9d0572e8e583dc252f2e86b5b1c8e7b30ee66deae78c4400066cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bcc53b0fd9d0572e8e583dc252f2e86b5b1c8e7b30ee66deae78c4400066cf->enter($__internal_f6bcc53b0fd9d0572e8e583dc252f2e86b5b1c8e7b30ee66deae78c4400066cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_da105e88604651a02a86098b9738c2e5e6b749815df7f074e83445cdd37e8e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da105e88604651a02a86098b9738c2e5e6b749815df7f074e83445cdd37e8e66->enter($__internal_da105e88604651a02a86098b9738c2e5e6b749815df7f074e83445cdd37e8e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bcc53b0fd9d0572e8e583dc252f2e86b5b1c8e7b30ee66deae78c4400066cf->leave($__internal_f6bcc53b0fd9d0572e8e583dc252f2e86b5b1c8e7b30ee66deae78c4400066cf_prof);

        
        $__internal_da105e88604651a02a86098b9738c2e5e6b749815df7f074e83445cdd37e8e66->leave($__internal_da105e88604651a02a86098b9738c2e5e6b749815df7f074e83445cdd37e8e66_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c61305bba2f7ef879aef2d5dcd47ed3cf27f5649b5f044486b8c858d3cacf4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61305bba2f7ef879aef2d5dcd47ed3cf27f5649b5f044486b8c858d3cacf4d8->enter($__internal_c61305bba2f7ef879aef2d5dcd47ed3cf27f5649b5f044486b8c858d3cacf4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b8e7b1e9e48f3e6abc88d507418d02905f2baf50c62d27c7a9edbd04b90d725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8e7b1e9e48f3e6abc88d507418d02905f2baf50c62d27c7a9edbd04b90d725->enter($__internal_5b8e7b1e9e48f3e6abc88d507418d02905f2baf50c62d27c7a9edbd04b90d725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5b8e7b1e9e48f3e6abc88d507418d02905f2baf50c62d27c7a9edbd04b90d725->leave($__internal_5b8e7b1e9e48f3e6abc88d507418d02905f2baf50c62d27c7a9edbd04b90d725_prof);

        
        $__internal_c61305bba2f7ef879aef2d5dcd47ed3cf27f5649b5f044486b8c858d3cacf4d8->leave($__internal_c61305bba2f7ef879aef2d5dcd47ed3cf27f5649b5f044486b8c858d3cacf4d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
