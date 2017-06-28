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
        $__internal_1c6b622edd2974e13901df7d89913c1638e4b5fd321139d13cbeeedcdda5520e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6b622edd2974e13901df7d89913c1638e4b5fd321139d13cbeeedcdda5520e->enter($__internal_1c6b622edd2974e13901df7d89913c1638e4b5fd321139d13cbeeedcdda5520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b341fe1e62f32e613610166aac04daaf28b0c66e93042dd981606b6959d66445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b341fe1e62f32e613610166aac04daaf28b0c66e93042dd981606b6959d66445->enter($__internal_b341fe1e62f32e613610166aac04daaf28b0c66e93042dd981606b6959d66445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6b622edd2974e13901df7d89913c1638e4b5fd321139d13cbeeedcdda5520e->leave($__internal_1c6b622edd2974e13901df7d89913c1638e4b5fd321139d13cbeeedcdda5520e_prof);

        
        $__internal_b341fe1e62f32e613610166aac04daaf28b0c66e93042dd981606b6959d66445->leave($__internal_b341fe1e62f32e613610166aac04daaf28b0c66e93042dd981606b6959d66445_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f437aded0937e8e291b9bb92a771825b149877790afd3a11b7cd37068460c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f437aded0937e8e291b9bb92a771825b149877790afd3a11b7cd37068460c85->enter($__internal_0f437aded0937e8e291b9bb92a771825b149877790afd3a11b7cd37068460c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6e5c6537987c5699ee6539918d2b4023e5963d08ffb775a60e57f23ee08aef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e5c6537987c5699ee6539918d2b4023e5963d08ffb775a60e57f23ee08aef8->enter($__internal_d6e5c6537987c5699ee6539918d2b4023e5963d08ffb775a60e57f23ee08aef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d6e5c6537987c5699ee6539918d2b4023e5963d08ffb775a60e57f23ee08aef8->leave($__internal_d6e5c6537987c5699ee6539918d2b4023e5963d08ffb775a60e57f23ee08aef8_prof);

        
        $__internal_0f437aded0937e8e291b9bb92a771825b149877790afd3a11b7cd37068460c85->leave($__internal_0f437aded0937e8e291b9bb92a771825b149877790afd3a11b7cd37068460c85_prof);

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
