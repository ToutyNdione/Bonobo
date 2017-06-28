<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3af40ba5edc25b5b0e79f50b081b0ae0e64d19ff4c9ba5d487458935aa359e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f6c1111c9f9025597848312c973c89811c906103c59e0c9b5f0e8d6c3356670d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c1111c9f9025597848312c973c89811c906103c59e0c9b5f0e8d6c3356670d->enter($__internal_f6c1111c9f9025597848312c973c89811c906103c59e0c9b5f0e8d6c3356670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b31e0a91684de813bcb1b6ef090b0bfb5639adec15df84c2d3859ee20984bf35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31e0a91684de813bcb1b6ef090b0bfb5639adec15df84c2d3859ee20984bf35->enter($__internal_b31e0a91684de813bcb1b6ef090b0bfb5639adec15df84c2d3859ee20984bf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6c1111c9f9025597848312c973c89811c906103c59e0c9b5f0e8d6c3356670d->leave($__internal_f6c1111c9f9025597848312c973c89811c906103c59e0c9b5f0e8d6c3356670d_prof);

        
        $__internal_b31e0a91684de813bcb1b6ef090b0bfb5639adec15df84c2d3859ee20984bf35->leave($__internal_b31e0a91684de813bcb1b6ef090b0bfb5639adec15df84c2d3859ee20984bf35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8273ee453bb8690e0c5bce9ab43e04b84838b0507ff7096a55b21767297d44d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8273ee453bb8690e0c5bce9ab43e04b84838b0507ff7096a55b21767297d44d6->enter($__internal_8273ee453bb8690e0c5bce9ab43e04b84838b0507ff7096a55b21767297d44d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32e9856dfcf54dec3f5e5d3e131475a1fa23fd18748f26ad031ac9034e91e11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e9856dfcf54dec3f5e5d3e131475a1fa23fd18748f26ad031ac9034e91e11a->enter($__internal_32e9856dfcf54dec3f5e5d3e131475a1fa23fd18748f26ad031ac9034e91e11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_32e9856dfcf54dec3f5e5d3e131475a1fa23fd18748f26ad031ac9034e91e11a->leave($__internal_32e9856dfcf54dec3f5e5d3e131475a1fa23fd18748f26ad031ac9034e91e11a_prof);

        
        $__internal_8273ee453bb8690e0c5bce9ab43e04b84838b0507ff7096a55b21767297d44d6->leave($__internal_8273ee453bb8690e0c5bce9ab43e04b84838b0507ff7096a55b21767297d44d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
