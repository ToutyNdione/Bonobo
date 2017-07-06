<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a865aacb736e171093408d80634033db60325f0f11a3bbeecf7ff713e314f6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ea1089d3a2defa0e9b0cc8b39cdab251361a9fe65d21256752833ed62c83f41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1089d3a2defa0e9b0cc8b39cdab251361a9fe65d21256752833ed62c83f41d->enter($__internal_ea1089d3a2defa0e9b0cc8b39cdab251361a9fe65d21256752833ed62c83f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2a71f40c782eaff86b66c990d55e40b947b6f77f0af09df5a131b8c70a129cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a71f40c782eaff86b66c990d55e40b947b6f77f0af09df5a131b8c70a129cc2->enter($__internal_2a71f40c782eaff86b66c990d55e40b947b6f77f0af09df5a131b8c70a129cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1089d3a2defa0e9b0cc8b39cdab251361a9fe65d21256752833ed62c83f41d->leave($__internal_ea1089d3a2defa0e9b0cc8b39cdab251361a9fe65d21256752833ed62c83f41d_prof);

        
        $__internal_2a71f40c782eaff86b66c990d55e40b947b6f77f0af09df5a131b8c70a129cc2->leave($__internal_2a71f40c782eaff86b66c990d55e40b947b6f77f0af09df5a131b8c70a129cc2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f497415eca3beb3c3eeda289cd6d7d9ffd1dcc992729fc4f51b5832e62b7fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f497415eca3beb3c3eeda289cd6d7d9ffd1dcc992729fc4f51b5832e62b7fe4->enter($__internal_6f497415eca3beb3c3eeda289cd6d7d9ffd1dcc992729fc4f51b5832e62b7fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_776764a580f1adfbcfa0f6209f786a52a7d7631506d4e2ee9a932c4b236b554e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776764a580f1adfbcfa0f6209f786a52a7d7631506d4e2ee9a932c4b236b554e->enter($__internal_776764a580f1adfbcfa0f6209f786a52a7d7631506d4e2ee9a932c4b236b554e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_776764a580f1adfbcfa0f6209f786a52a7d7631506d4e2ee9a932c4b236b554e->leave($__internal_776764a580f1adfbcfa0f6209f786a52a7d7631506d4e2ee9a932c4b236b554e_prof);

        
        $__internal_6f497415eca3beb3c3eeda289cd6d7d9ffd1dcc992729fc4f51b5832e62b7fe4->leave($__internal_6f497415eca3beb3c3eeda289cd6d7d9ffd1dcc992729fc4f51b5832e62b7fe4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
