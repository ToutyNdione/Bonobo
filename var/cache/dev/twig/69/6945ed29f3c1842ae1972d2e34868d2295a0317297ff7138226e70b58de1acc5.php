<?php

/* :user:edit.html.twig */
class __TwigTemplate_c6d5d82ced620ac341a738ffda7e02c303e14a5c4de16919d66c1cba7552aa83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_bec99b50195f40442ca66be4aaefdfe52fca071169ed2a08c8eb770c9b4b3ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec99b50195f40442ca66be4aaefdfe52fca071169ed2a08c8eb770c9b4b3ab6->enter($__internal_bec99b50195f40442ca66be4aaefdfe52fca071169ed2a08c8eb770c9b4b3ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_9512658d00cf8068d9c323af0d6ae8ab15aaa25b0f28ca70cd3b14cbecfa044b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9512658d00cf8068d9c323af0d6ae8ab15aaa25b0f28ca70cd3b14cbecfa044b->enter($__internal_9512658d00cf8068d9c323af0d6ae8ab15aaa25b0f28ca70cd3b14cbecfa044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec99b50195f40442ca66be4aaefdfe52fca071169ed2a08c8eb770c9b4b3ab6->leave($__internal_bec99b50195f40442ca66be4aaefdfe52fca071169ed2a08c8eb770c9b4b3ab6_prof);

        
        $__internal_9512658d00cf8068d9c323af0d6ae8ab15aaa25b0f28ca70cd3b14cbecfa044b->leave($__internal_9512658d00cf8068d9c323af0d6ae8ab15aaa25b0f28ca70cd3b14cbecfa044b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96c7638f233f06b4c44d86ea119d982bea7a9946a54105b18b5ea6cf586c0963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c7638f233f06b4c44d86ea119d982bea7a9946a54105b18b5ea6cf586c0963->enter($__internal_96c7638f233f06b4c44d86ea119d982bea7a9946a54105b18b5ea6cf586c0963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75ce11bf4fb5297475c962b823173feb491174a011613d30388b3d25099eff92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ce11bf4fb5297475c962b823173feb491174a011613d30388b3d25099eff92->enter($__internal_75ce11bf4fb5297475c962b823173feb491174a011613d30388b3d25099eff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bonobo edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
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
        
        $__internal_75ce11bf4fb5297475c962b823173feb491174a011613d30388b3d25099eff92->leave($__internal_75ce11bf4fb5297475c962b823173feb491174a011613d30388b3d25099eff92_prof);

        
        $__internal_96c7638f233f06b4c44d86ea119d982bea7a9946a54105b18b5ea6cf586c0963->leave($__internal_96c7638f233f06b4c44d86ea119d982bea7a9946a54105b18b5ea6cf586c0963_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
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
    <h1>Bonobo edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/user/edit.html.twig");
    }
}
