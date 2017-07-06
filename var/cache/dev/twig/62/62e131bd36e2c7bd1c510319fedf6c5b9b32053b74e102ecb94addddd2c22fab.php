<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5f1993c881312d3ee16baa780c7f63db3cf931aa260c522a46fe028ca781fb5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b62f34cb7abd74868593c8b0fa8d8742c1765f71c26a61fbbeb6bb1852cc57cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62f34cb7abd74868593c8b0fa8d8742c1765f71c26a61fbbeb6bb1852cc57cc->enter($__internal_b62f34cb7abd74868593c8b0fa8d8742c1765f71c26a61fbbeb6bb1852cc57cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_37d4e0e5ee9c4ed114ad55b541f7f1ab39a8caa2a4e37f84f04ff5b7ca45455d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d4e0e5ee9c4ed114ad55b541f7f1ab39a8caa2a4e37f84f04ff5b7ca45455d->enter($__internal_37d4e0e5ee9c4ed114ad55b541f7f1ab39a8caa2a4e37f84f04ff5b7ca45455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62f34cb7abd74868593c8b0fa8d8742c1765f71c26a61fbbeb6bb1852cc57cc->leave($__internal_b62f34cb7abd74868593c8b0fa8d8742c1765f71c26a61fbbeb6bb1852cc57cc_prof);

        
        $__internal_37d4e0e5ee9c4ed114ad55b541f7f1ab39a8caa2a4e37f84f04ff5b7ca45455d->leave($__internal_37d4e0e5ee9c4ed114ad55b541f7f1ab39a8caa2a4e37f84f04ff5b7ca45455d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d5b5be24557251fe26f316e0aea25343b4db766d64279b02696d6a8d9415200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5b5be24557251fe26f316e0aea25343b4db766d64279b02696d6a8d9415200->enter($__internal_5d5b5be24557251fe26f316e0aea25343b4db766d64279b02696d6a8d9415200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b095327ccf9b4d66d36d70a23e5c0020e62e9feed6458948955622585fcb25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b095327ccf9b4d66d36d70a23e5c0020e62e9feed6458948955622585fcb25a->enter($__internal_4b095327ccf9b4d66d36d70a23e5c0020e62e9feed6458948955622585fcb25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4b095327ccf9b4d66d36d70a23e5c0020e62e9feed6458948955622585fcb25a->leave($__internal_4b095327ccf9b4d66d36d70a23e5c0020e62e9feed6458948955622585fcb25a_prof);

        
        $__internal_5d5b5be24557251fe26f316e0aea25343b4db766d64279b02696d6a8d9415200->leave($__internal_5d5b5be24557251fe26f316e0aea25343b4db766d64279b02696d6a8d9415200_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
