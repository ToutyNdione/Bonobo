<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a2cd2b508de6143e1fac8faaeb2908e72dfd6ffa037cc4386c107e3b89c17247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a1654c49fbef608a5349ab21156712b2ac9c11b985a27a053f926e1d66e7830e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1654c49fbef608a5349ab21156712b2ac9c11b985a27a053f926e1d66e7830e->enter($__internal_a1654c49fbef608a5349ab21156712b2ac9c11b985a27a053f926e1d66e7830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_e68494f5f8ff508097b569ea60852e4c2dc72c28f491f1574414ff16252563f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68494f5f8ff508097b569ea60852e4c2dc72c28f491f1574414ff16252563f1->enter($__internal_e68494f5f8ff508097b569ea60852e4c2dc72c28f491f1574414ff16252563f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1654c49fbef608a5349ab21156712b2ac9c11b985a27a053f926e1d66e7830e->leave($__internal_a1654c49fbef608a5349ab21156712b2ac9c11b985a27a053f926e1d66e7830e_prof);

        
        $__internal_e68494f5f8ff508097b569ea60852e4c2dc72c28f491f1574414ff16252563f1->leave($__internal_e68494f5f8ff508097b569ea60852e4c2dc72c28f491f1574414ff16252563f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbd6bd37bb065138d348d111c99ba7ba3de0d4228f92e5b5a8028aee10e4ed7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd6bd37bb065138d348d111c99ba7ba3de0d4228f92e5b5a8028aee10e4ed7c->enter($__internal_dbd6bd37bb065138d348d111c99ba7ba3de0d4228f92e5b5a8028aee10e4ed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1923508455b1ba318101004e0abc09c6d4a6b4138e34aa5ee9b440476bfd4873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1923508455b1ba318101004e0abc09c6d4a6b4138e34aa5ee9b440476bfd4873->enter($__internal_1923508455b1ba318101004e0abc09c6d4a6b4138e34aa5ee9b440476bfd4873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1923508455b1ba318101004e0abc09c6d4a6b4138e34aa5ee9b440476bfd4873->leave($__internal_1923508455b1ba318101004e0abc09c6d4a6b4138e34aa5ee9b440476bfd4873_prof);

        
        $__internal_dbd6bd37bb065138d348d111c99ba7ba3de0d4228f92e5b5a8028aee10e4ed7c->leave($__internal_dbd6bd37bb065138d348d111c99ba7ba3de0d4228f92e5b5a8028aee10e4ed7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
