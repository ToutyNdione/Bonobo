<?php

/* :friend:edit.html.twig */
class __TwigTemplate_034617b4de25522e200e608353fb2f5a705a33b699895497fe4ed47657542036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cebb7d05dfc3a687ba321e0fb9758a73205858c9e435dce0bf755b9150ce7c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebb7d05dfc3a687ba321e0fb9758a73205858c9e435dce0bf755b9150ce7c81->enter($__internal_cebb7d05dfc3a687ba321e0fb9758a73205858c9e435dce0bf755b9150ce7c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:edit.html.twig"));

        $__internal_64e326fc28cd0c25a087c6791301619697659272666788962928e6da8a822a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e326fc28cd0c25a087c6791301619697659272666788962928e6da8a822a35->enter($__internal_64e326fc28cd0c25a087c6791301619697659272666788962928e6da8a822a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebb7d05dfc3a687ba321e0fb9758a73205858c9e435dce0bf755b9150ce7c81->leave($__internal_cebb7d05dfc3a687ba321e0fb9758a73205858c9e435dce0bf755b9150ce7c81_prof);

        
        $__internal_64e326fc28cd0c25a087c6791301619697659272666788962928e6da8a822a35->leave($__internal_64e326fc28cd0c25a087c6791301619697659272666788962928e6da8a822a35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0548c57e88bc71b4f980189157f3cb0535130bcb73537a11cfd17a671d56b23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0548c57e88bc71b4f980189157f3cb0535130bcb73537a11cfd17a671d56b23e->enter($__internal_0548c57e88bc71b4f980189157f3cb0535130bcb73537a11cfd17a671d56b23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cb5de6ad1f4389529a678bdbfc1a74c64955d644dd754e405f3390bbafefa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb5de6ad1f4389529a678bdbfc1a74c64955d644dd754e405f3390bbafefa71->enter($__internal_8cb5de6ad1f4389529a678bdbfc1a74c64955d644dd754e405f3390bbafefa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friend edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8cb5de6ad1f4389529a678bdbfc1a74c64955d644dd754e405f3390bbafefa71->leave($__internal_8cb5de6ad1f4389529a678bdbfc1a74c64955d644dd754e405f3390bbafefa71_prof);

        
        $__internal_0548c57e88bc71b4f980189157f3cb0535130bcb73537a11cfd17a671d56b23e->leave($__internal_0548c57e88bc71b4f980189157f3cb0535130bcb73537a11cfd17a671d56b23e_prof);

    }

    public function getTemplateName()
    {
        return ":friend:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Friend edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('friend_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":friend:edit.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/friend/edit.html.twig");
    }
}
