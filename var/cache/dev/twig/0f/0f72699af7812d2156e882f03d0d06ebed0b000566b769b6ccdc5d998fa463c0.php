<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3baad36e09d19897fc58c59cbb744fec00018681ffa218e755a693e7294f1629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7ae9c0d67c04e27b81a1a85a456e0a22961ff3bc8e4d8e26642233f8f009ab6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae9c0d67c04e27b81a1a85a456e0a22961ff3bc8e4d8e26642233f8f009ab6a->enter($__internal_7ae9c0d67c04e27b81a1a85a456e0a22961ff3bc8e4d8e26642233f8f009ab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_46ba0fbec1491403202764d3bb81acc80c24159b23c8505c15e943cf54c9fb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ba0fbec1491403202764d3bb81acc80c24159b23c8505c15e943cf54c9fb14->enter($__internal_46ba0fbec1491403202764d3bb81acc80c24159b23c8505c15e943cf54c9fb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae9c0d67c04e27b81a1a85a456e0a22961ff3bc8e4d8e26642233f8f009ab6a->leave($__internal_7ae9c0d67c04e27b81a1a85a456e0a22961ff3bc8e4d8e26642233f8f009ab6a_prof);

        
        $__internal_46ba0fbec1491403202764d3bb81acc80c24159b23c8505c15e943cf54c9fb14->leave($__internal_46ba0fbec1491403202764d3bb81acc80c24159b23c8505c15e943cf54c9fb14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4dc4d403215241e7c33166b95e5b31e434f1c30ce92a588f56144ad4d7068d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc4d403215241e7c33166b95e5b31e434f1c30ce92a588f56144ad4d7068d19->enter($__internal_4dc4d403215241e7c33166b95e5b31e434f1c30ce92a588f56144ad4d7068d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3768ef9f17fcc2b747667e93c643a1ef9ef1872163da636aa170cc8c9cbb56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3768ef9f17fcc2b747667e93c643a1ef9ef1872163da636aa170cc8c9cbb56d->enter($__internal_b3768ef9f17fcc2b747667e93c643a1ef9ef1872163da636aa170cc8c9cbb56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b3768ef9f17fcc2b747667e93c643a1ef9ef1872163da636aa170cc8c9cbb56d->leave($__internal_b3768ef9f17fcc2b747667e93c643a1ef9ef1872163da636aa170cc8c9cbb56d_prof);

        
        $__internal_4dc4d403215241e7c33166b95e5b31e434f1c30ce92a588f56144ad4d7068d19->leave($__internal_4dc4d403215241e7c33166b95e5b31e434f1c30ce92a588f56144ad4d7068d19_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
