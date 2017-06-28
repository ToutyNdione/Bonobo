<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1899298ed9999dc24512d7f6d94a61716089ccafb21e758460301ded6afd1c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1a4bf9a0e36d6728bbc4076146a402b2ffc5bce0badda85fc72d34f212e7ae56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4bf9a0e36d6728bbc4076146a402b2ffc5bce0badda85fc72d34f212e7ae56->enter($__internal_1a4bf9a0e36d6728bbc4076146a402b2ffc5bce0badda85fc72d34f212e7ae56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e73608af66e693495c89fa480d67fb1007d6b685288d7397eee1c065ee74aab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73608af66e693495c89fa480d67fb1007d6b685288d7397eee1c065ee74aab9->enter($__internal_e73608af66e693495c89fa480d67fb1007d6b685288d7397eee1c065ee74aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4bf9a0e36d6728bbc4076146a402b2ffc5bce0badda85fc72d34f212e7ae56->leave($__internal_1a4bf9a0e36d6728bbc4076146a402b2ffc5bce0badda85fc72d34f212e7ae56_prof);

        
        $__internal_e73608af66e693495c89fa480d67fb1007d6b685288d7397eee1c065ee74aab9->leave($__internal_e73608af66e693495c89fa480d67fb1007d6b685288d7397eee1c065ee74aab9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_855f4a7e9515510388ea3b987821bc06b6af98c60b417ec09e167478a0ff4dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855f4a7e9515510388ea3b987821bc06b6af98c60b417ec09e167478a0ff4dce->enter($__internal_855f4a7e9515510388ea3b987821bc06b6af98c60b417ec09e167478a0ff4dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2306cec2fba42ec43046ce3731a984f238639a267b6d19e62dee29ba9b6d2464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2306cec2fba42ec43046ce3731a984f238639a267b6d19e62dee29ba9b6d2464->enter($__internal_2306cec2fba42ec43046ce3731a984f238639a267b6d19e62dee29ba9b6d2464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2306cec2fba42ec43046ce3731a984f238639a267b6d19e62dee29ba9b6d2464->leave($__internal_2306cec2fba42ec43046ce3731a984f238639a267b6d19e62dee29ba9b6d2464_prof);

        
        $__internal_855f4a7e9515510388ea3b987821bc06b6af98c60b417ec09e167478a0ff4dce->leave($__internal_855f4a7e9515510388ea3b987821bc06b6af98c60b417ec09e167478a0ff4dce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
