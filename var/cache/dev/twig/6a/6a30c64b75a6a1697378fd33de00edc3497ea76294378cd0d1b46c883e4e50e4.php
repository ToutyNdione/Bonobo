<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_6796288af3c8f59a90c7fe53290fb3b1a178591514b2ae67b558ddb6000d3e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa6c162d92d6ac420d15726302f4c673e04f753a0681f9479c0e74906d2e7b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6c162d92d6ac420d15726302f4c673e04f753a0681f9479c0e74906d2e7b8e->enter($__internal_fa6c162d92d6ac420d15726302f4c673e04f753a0681f9479c0e74906d2e7b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_a7a63f3c522bb831c204477ca41289f1461d21afc2454c0d579c59ed458c6b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a63f3c522bb831c204477ca41289f1461d21afc2454c0d579c59ed458c6b95->enter($__internal_a7a63f3c522bb831c204477ca41289f1461d21afc2454c0d579c59ed458c6b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_fa6c162d92d6ac420d15726302f4c673e04f753a0681f9479c0e74906d2e7b8e->leave($__internal_fa6c162d92d6ac420d15726302f4c673e04f753a0681f9479c0e74906d2e7b8e_prof);

        
        $__internal_a7a63f3c522bb831c204477ca41289f1461d21afc2454c0d579c59ed458c6b95->leave($__internal_a7a63f3c522bb831c204477ca41289f1461d21afc2454c0d579c59ed458c6b95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
