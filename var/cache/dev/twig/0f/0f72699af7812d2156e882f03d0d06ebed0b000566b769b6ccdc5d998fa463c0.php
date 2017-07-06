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
        $__internal_69d406f383a0b2133a7bd4e1ffec2724d675e33a6dcbe34735e280edf0700e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d406f383a0b2133a7bd4e1ffec2724d675e33a6dcbe34735e280edf0700e61->enter($__internal_69d406f383a0b2133a7bd4e1ffec2724d675e33a6dcbe34735e280edf0700e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9b93abf8a6ef702da11f01d2be5a23101f018a91d1790f92d1f19395161a224c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b93abf8a6ef702da11f01d2be5a23101f018a91d1790f92d1f19395161a224c->enter($__internal_9b93abf8a6ef702da11f01d2be5a23101f018a91d1790f92d1f19395161a224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d406f383a0b2133a7bd4e1ffec2724d675e33a6dcbe34735e280edf0700e61->leave($__internal_69d406f383a0b2133a7bd4e1ffec2724d675e33a6dcbe34735e280edf0700e61_prof);

        
        $__internal_9b93abf8a6ef702da11f01d2be5a23101f018a91d1790f92d1f19395161a224c->leave($__internal_9b93abf8a6ef702da11f01d2be5a23101f018a91d1790f92d1f19395161a224c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f30584b18bf4766e4c69c106114f2b8f2f6e4ec59c6dbec68b45e6547718661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f30584b18bf4766e4c69c106114f2b8f2f6e4ec59c6dbec68b45e6547718661->enter($__internal_4f30584b18bf4766e4c69c106114f2b8f2f6e4ec59c6dbec68b45e6547718661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2069ef3880d6d073009644dccefd434e51dec02ffbd9a1034bbbc96affbb18b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2069ef3880d6d073009644dccefd434e51dec02ffbd9a1034bbbc96affbb18b9->enter($__internal_2069ef3880d6d073009644dccefd434e51dec02ffbd9a1034bbbc96affbb18b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2069ef3880d6d073009644dccefd434e51dec02ffbd9a1034bbbc96affbb18b9->leave($__internal_2069ef3880d6d073009644dccefd434e51dec02ffbd9a1034bbbc96affbb18b9_prof);

        
        $__internal_4f30584b18bf4766e4c69c106114f2b8f2f6e4ec59c6dbec68b45e6547718661->leave($__internal_4f30584b18bf4766e4c69c106114f2b8f2f6e4ec59c6dbec68b45e6547718661_prof);

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
