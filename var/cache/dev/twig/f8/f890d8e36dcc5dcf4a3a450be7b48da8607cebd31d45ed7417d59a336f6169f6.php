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
        $__internal_8f95ab0b0807aa3ed440a0a51f35ab72c0318e6be8da61a7391ec40aaf5a7478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f95ab0b0807aa3ed440a0a51f35ab72c0318e6be8da61a7391ec40aaf5a7478->enter($__internal_8f95ab0b0807aa3ed440a0a51f35ab72c0318e6be8da61a7391ec40aaf5a7478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_d62e35202c1ca806dd66ef4f1ed7ce92263d2bc08b0165633b6153f111faea53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62e35202c1ca806dd66ef4f1ed7ce92263d2bc08b0165633b6153f111faea53->enter($__internal_d62e35202c1ca806dd66ef4f1ed7ce92263d2bc08b0165633b6153f111faea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f95ab0b0807aa3ed440a0a51f35ab72c0318e6be8da61a7391ec40aaf5a7478->leave($__internal_8f95ab0b0807aa3ed440a0a51f35ab72c0318e6be8da61a7391ec40aaf5a7478_prof);

        
        $__internal_d62e35202c1ca806dd66ef4f1ed7ce92263d2bc08b0165633b6153f111faea53->leave($__internal_d62e35202c1ca806dd66ef4f1ed7ce92263d2bc08b0165633b6153f111faea53_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef54ce2e4c7210e0fafb244965ce6816ed81bd8ba2402fe8787fa302a4dd95ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef54ce2e4c7210e0fafb244965ce6816ed81bd8ba2402fe8787fa302a4dd95ef->enter($__internal_ef54ce2e4c7210e0fafb244965ce6816ed81bd8ba2402fe8787fa302a4dd95ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68031cc69c6ef26f5643f9e5053a79659e2783b93eaa52f351889c1af21f4af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68031cc69c6ef26f5643f9e5053a79659e2783b93eaa52f351889c1af21f4af1->enter($__internal_68031cc69c6ef26f5643f9e5053a79659e2783b93eaa52f351889c1af21f4af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_68031cc69c6ef26f5643f9e5053a79659e2783b93eaa52f351889c1af21f4af1->leave($__internal_68031cc69c6ef26f5643f9e5053a79659e2783b93eaa52f351889c1af21f4af1_prof);

        
        $__internal_ef54ce2e4c7210e0fafb244965ce6816ed81bd8ba2402fe8787fa302a4dd95ef->leave($__internal_ef54ce2e4c7210e0fafb244965ce6816ed81bd8ba2402fe8787fa302a4dd95ef_prof);

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
