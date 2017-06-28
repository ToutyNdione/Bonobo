<?php

/* :friend:index.html.twig */
class __TwigTemplate_7261a2cb4d5ea1615d23821329bf1ab458c2033ab1aa787513b4fda6695eb3a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:index.html.twig", 1);
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
        $__internal_d4fa5c1ea91ab78ab85034c6e129e54d01068ee66671d2ab5060cfa0befd52ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fa5c1ea91ab78ab85034c6e129e54d01068ee66671d2ab5060cfa0befd52ad->enter($__internal_d4fa5c1ea91ab78ab85034c6e129e54d01068ee66671d2ab5060cfa0befd52ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:index.html.twig"));

        $__internal_45a4fe3fefec4da6a557a080c11ff25f0cb97a56ba6db99714ae4f726f59c8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a4fe3fefec4da6a557a080c11ff25f0cb97a56ba6db99714ae4f726f59c8ed->enter($__internal_45a4fe3fefec4da6a557a080c11ff25f0cb97a56ba6db99714ae4f726f59c8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fa5c1ea91ab78ab85034c6e129e54d01068ee66671d2ab5060cfa0befd52ad->leave($__internal_d4fa5c1ea91ab78ab85034c6e129e54d01068ee66671d2ab5060cfa0befd52ad_prof);

        
        $__internal_45a4fe3fefec4da6a557a080c11ff25f0cb97a56ba6db99714ae4f726f59c8ed->leave($__internal_45a4fe3fefec4da6a557a080c11ff25f0cb97a56ba6db99714ae4f726f59c8ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3fea408ddcccc66bddb291d3e6153e6a6a4af4b52ee211b92501f2db482adde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fea408ddcccc66bddb291d3e6153e6a6a4af4b52ee211b92501f2db482adde->enter($__internal_c3fea408ddcccc66bddb291d3e6153e6a6a4af4b52ee211b92501f2db482adde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4a2c717703aca7394589d0c2aa39b59a4836f309ac31bc807fb163c9ffc4f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a2c717703aca7394589d0c2aa39b59a4836f309ac31bc807fb163c9ffc4f0a->enter($__internal_b4a2c717703aca7394589d0c2aa39b59a4836f309ac31bc807fb163c9ffc4f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friends list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new Twig_Error_Runtime('Variable "friends" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_new");
        echo "\">Create a new friend</a>
        </li>
    </ul>
";
        
        $__internal_b4a2c717703aca7394589d0c2aa39b59a4836f309ac31bc807fb163c9ffc4f0a->leave($__internal_b4a2c717703aca7394589d0c2aa39b59a4836f309ac31bc807fb163c9ffc4f0a_prof);

        
        $__internal_c3fea408ddcccc66bddb291d3e6153e6a6a4af4b52ee211b92501f2db482adde->leave($__internal_c3fea408ddcccc66bddb291d3e6153e6a6a4af4b52ee211b92501f2db482adde_prof);

    }

    public function getTemplateName()
    {
        return ":friend:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  95 => 29,  83 => 23,  77 => 20,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Friends list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for friend in friends %}
            <tr>
                <td><a href=\"{{ path('friend_show', { 'id': friend.id }) }}\">{{ friend.id }}</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('friend_show', { 'id': friend.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('friend_edit', { 'id': friend.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('friend_new') }}\">Create a new friend</a>
        </li>
    </ul>
{% endblock %}
", ":friend:index.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/friend/index.html.twig");
    }
}
