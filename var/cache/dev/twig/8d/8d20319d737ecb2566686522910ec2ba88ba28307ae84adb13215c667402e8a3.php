<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_642ea63c7b8d0d0f9d460c24792b5b27bc5bee84bf74cd9d882be9ded840c442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_776e7703bf3fb947e7a2fac5d753883f0e19a1686402af86fb856a1034a4ecf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776e7703bf3fb947e7a2fac5d753883f0e19a1686402af86fb856a1034a4ecf1->enter($__internal_776e7703bf3fb947e7a2fac5d753883f0e19a1686402af86fb856a1034a4ecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e27adcf87d574fa63cdbcdb00e084b8a7c8b475cf0b7fc67c298b852fb00482e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27adcf87d574fa63cdbcdb00e084b8a7c8b475cf0b7fc67c298b852fb00482e->enter($__internal_e27adcf87d574fa63cdbcdb00e084b8a7c8b475cf0b7fc67c298b852fb00482e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776e7703bf3fb947e7a2fac5d753883f0e19a1686402af86fb856a1034a4ecf1->leave($__internal_776e7703bf3fb947e7a2fac5d753883f0e19a1686402af86fb856a1034a4ecf1_prof);

        
        $__internal_e27adcf87d574fa63cdbcdb00e084b8a7c8b475cf0b7fc67c298b852fb00482e->leave($__internal_e27adcf87d574fa63cdbcdb00e084b8a7c8b475cf0b7fc67c298b852fb00482e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1472a5edb5825be437d1f81eadd19846b93be34c58666206059dc2b65c1c282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1472a5edb5825be437d1f81eadd19846b93be34c58666206059dc2b65c1c282->enter($__internal_d1472a5edb5825be437d1f81eadd19846b93be34c58666206059dc2b65c1c282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64e608d74fbc31b53b05e913261eb6325481419cc09a4589b248504eae1118ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e608d74fbc31b53b05e913261eb6325481419cc09a4589b248504eae1118ce->enter($__internal_64e608d74fbc31b53b05e913261eb6325481419cc09a4589b248504eae1118ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_64e608d74fbc31b53b05e913261eb6325481419cc09a4589b248504eae1118ce->leave($__internal_64e608d74fbc31b53b05e913261eb6325481419cc09a4589b248504eae1118ce_prof);

        
        $__internal_d1472a5edb5825be437d1f81eadd19846b93be34c58666206059dc2b65c1c282->leave($__internal_d1472a5edb5825be437d1f81eadd19846b93be34c58666206059dc2b65c1c282_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
