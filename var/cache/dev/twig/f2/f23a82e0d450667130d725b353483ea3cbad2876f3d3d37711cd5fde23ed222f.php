<?php

/* :friend:new.html.twig */
class __TwigTemplate_27c624b23d3ef91993a1163d156e13ca07baa4ef1143b580aaa4e98878aa5bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:new.html.twig", 1);
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
        $__internal_738056eab16a21411e13d7c3f33b2edd522e1a328a95ba2b945e4b02949b744b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738056eab16a21411e13d7c3f33b2edd522e1a328a95ba2b945e4b02949b744b->enter($__internal_738056eab16a21411e13d7c3f33b2edd522e1a328a95ba2b945e4b02949b744b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:new.html.twig"));

        $__internal_d08e941e7f1e9b14844345a2ffece763a110955ed07862e48c87c425d8b9ad70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08e941e7f1e9b14844345a2ffece763a110955ed07862e48c87c425d8b9ad70->enter($__internal_d08e941e7f1e9b14844345a2ffece763a110955ed07862e48c87c425d8b9ad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738056eab16a21411e13d7c3f33b2edd522e1a328a95ba2b945e4b02949b744b->leave($__internal_738056eab16a21411e13d7c3f33b2edd522e1a328a95ba2b945e4b02949b744b_prof);

        
        $__internal_d08e941e7f1e9b14844345a2ffece763a110955ed07862e48c87c425d8b9ad70->leave($__internal_d08e941e7f1e9b14844345a2ffece763a110955ed07862e48c87c425d8b9ad70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fc4d74abdae6b55a5dc7625340e0e4a2c2fc93950be2d8fdff12403551ca539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc4d74abdae6b55a5dc7625340e0e4a2c2fc93950be2d8fdff12403551ca539->enter($__internal_4fc4d74abdae6b55a5dc7625340e0e4a2c2fc93950be2d8fdff12403551ca539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25cf226eca406ab4e4ca81f2432ef6b943c3f153567ff02dcfbc7eee5fa8343f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cf226eca406ab4e4ca81f2432ef6b943c3f153567ff02dcfbc7eee5fa8343f->enter($__internal_25cf226eca406ab4e4ca81f2432ef6b943c3f153567ff02dcfbc7eee5fa8343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friend creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_25cf226eca406ab4e4ca81f2432ef6b943c3f153567ff02dcfbc7eee5fa8343f->leave($__internal_25cf226eca406ab4e4ca81f2432ef6b943c3f153567ff02dcfbc7eee5fa8343f_prof);

        
        $__internal_4fc4d74abdae6b55a5dc7625340e0e4a2c2fc93950be2d8fdff12403551ca539->leave($__internal_4fc4d74abdae6b55a5dc7625340e0e4a2c2fc93950be2d8fdff12403551ca539_prof);

    }

    public function getTemplateName()
    {
        return ":friend:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Friend creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('friend_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":friend:new.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/friend/new.html.twig");
    }
}
