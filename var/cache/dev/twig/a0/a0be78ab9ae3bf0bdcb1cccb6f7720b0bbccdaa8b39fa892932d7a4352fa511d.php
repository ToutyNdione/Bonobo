<?php

/* :friend:show.html.twig */
class __TwigTemplate_ca36b33bb608c9960d7ab0574fee60481a083e38306561e166949fac929b2694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:show.html.twig", 1);
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
        $__internal_c9adb44d9728e7f0932db2d0fe1ed17042befad5d0b043ad3ee33f476e279881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9adb44d9728e7f0932db2d0fe1ed17042befad5d0b043ad3ee33f476e279881->enter($__internal_c9adb44d9728e7f0932db2d0fe1ed17042befad5d0b043ad3ee33f476e279881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:show.html.twig"));

        $__internal_9432fdeca15d0b8fb2b50f62f0d61f9d9c4c2cc67015b75fc27c856cf79aec22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9432fdeca15d0b8fb2b50f62f0d61f9d9c4c2cc67015b75fc27c856cf79aec22->enter($__internal_9432fdeca15d0b8fb2b50f62f0d61f9d9c4c2cc67015b75fc27c856cf79aec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9adb44d9728e7f0932db2d0fe1ed17042befad5d0b043ad3ee33f476e279881->leave($__internal_c9adb44d9728e7f0932db2d0fe1ed17042befad5d0b043ad3ee33f476e279881_prof);

        
        $__internal_9432fdeca15d0b8fb2b50f62f0d61f9d9c4c2cc67015b75fc27c856cf79aec22->leave($__internal_9432fdeca15d0b8fb2b50f62f0d61f9d9c4c2cc67015b75fc27c856cf79aec22_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e70f8b8aec8ff80b26e972f4226dc4fb9c7dbef112b2eb59df38301d3481f4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70f8b8aec8ff80b26e972f4226dc4fb9c7dbef112b2eb59df38301d3481f4b8->enter($__internal_e70f8b8aec8ff80b26e972f4226dc4fb9c7dbef112b2eb59df38301d3481f4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2e6072db43c323e7833c96d4778e2b4e21fb224b2e1c50db9af3f316a9a8474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e6072db43c323e7833c96d4778e2b4e21fb224b2e1c50db9af3f316a9a8474->enter($__internal_d2e6072db43c323e7833c96d4778e2b4e21fb224b2e1c50db9af3f316a9a8474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friend</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["friend"]) || array_key_exists("friend", $context) ? $context["friend"] : (function () { throw new Twig_Error_Runtime('Variable "friend" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["friend"]) || array_key_exists("friend", $context) ? $context["friend"] : (function () { throw new Twig_Error_Runtime('Variable "friend" does not exist.', 20, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 23, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 25, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d2e6072db43c323e7833c96d4778e2b4e21fb224b2e1c50db9af3f316a9a8474->leave($__internal_d2e6072db43c323e7833c96d4778e2b4e21fb224b2e1c50db9af3f316a9a8474_prof);

        
        $__internal_e70f8b8aec8ff80b26e972f4226dc4fb9c7dbef112b2eb59df38301d3481f4b8->leave($__internal_e70f8b8aec8ff80b26e972f4226dc4fb9c7dbef112b2eb59df38301d3481f4b8_prof);

    }

    public function getTemplateName()
    {
        return ":friend:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Friend</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ friend.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('friend_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('friend_edit', { 'id': friend.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":friend:show.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/friend/show.html.twig");
    }
}
