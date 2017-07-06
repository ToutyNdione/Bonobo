<?php

/* :user:show.html.twig */
class __TwigTemplate_45e70aa74243f4df804f55534ac17a46b4d7d58ac580a400d682b790e8235411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_31c3eab9a03f370fdee9f645096af73a26d5a14a088cc2694d6aec6aeda31f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c3eab9a03f370fdee9f645096af73a26d5a14a088cc2694d6aec6aeda31f5d->enter($__internal_31c3eab9a03f370fdee9f645096af73a26d5a14a088cc2694d6aec6aeda31f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_01e3815597ba01e7581e83368e3ea26e2079ff4f187c432c5147c283861ecbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e3815597ba01e7581e83368e3ea26e2079ff4f187c432c5147c283861ecbf2->enter($__internal_01e3815597ba01e7581e83368e3ea26e2079ff4f187c432c5147c283861ecbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c3eab9a03f370fdee9f645096af73a26d5a14a088cc2694d6aec6aeda31f5d->leave($__internal_31c3eab9a03f370fdee9f645096af73a26d5a14a088cc2694d6aec6aeda31f5d_prof);

        
        $__internal_01e3815597ba01e7581e83368e3ea26e2079ff4f187c432c5147c283861ecbf2->leave($__internal_01e3815597ba01e7581e83368e3ea26e2079ff4f187c432c5147c283861ecbf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e19134c3c5889fb186343ba7bba81f369d852642cee15524bef63e3f34ef2091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19134c3c5889fb186343ba7bba81f369d852642cee15524bef63e3f34ef2091->enter($__internal_e19134c3c5889fb186343ba7bba81f369d852642cee15524bef63e3f34ef2091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5255013e0c188ccbf7dbb58ed91a127526cd4c143d4fc989fb8d873c033e875c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5255013e0c188ccbf7dbb58ed91a127526cd4c143d4fc989fb8d873c033e875c->enter($__internal_5255013e0c188ccbf7dbb58ed91a127526cd4c143d4fc989fb8d873c033e875c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bonobo</h1>

    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->getSourceContext()); })()), "age", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Famille</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->getSourceContext()); })()), "famille", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Race</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "race", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nourriture</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "nourriture", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 36, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 39, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5255013e0c188ccbf7dbb58ed91a127526cd4c143d4fc989fb8d873c033e875c->leave($__internal_5255013e0c188ccbf7dbb58ed91a127526cd4c143d4fc989fb8d873c033e875c_prof);

        
        $__internal_e19134c3c5889fb186343ba7bba81f369d852642cee15524bef63e3f34ef2091->leave($__internal_e19134c3c5889fb186343ba7bba81f369d852642cee15524bef63e3f34ef2091_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bonobo</h1>

    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ user.age }}</td>
            </tr>
            <tr>
                <th>Famille</th>
                <td>{{ user.famille }}</td>
            </tr>
            <tr>
                <th>Race</th>
                <td>{{ user.race }}</td>
            </tr>
            <tr>
                <th>Nourriture</th>
                <td>{{ user.nourriture }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:show.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/user/show.html.twig");
    }
}
