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
        $__internal_203702c386fc1fa59143f17bb83e07e4ed4806e04984966271b4082c144213c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203702c386fc1fa59143f17bb83e07e4ed4806e04984966271b4082c144213c3->enter($__internal_203702c386fc1fa59143f17bb83e07e4ed4806e04984966271b4082c144213c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_077c5a25c11288ffae92fe8bd683a73f412d5fab8e6b5fbaaed5c2a24b4bd094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077c5a25c11288ffae92fe8bd683a73f412d5fab8e6b5fbaaed5c2a24b4bd094->enter($__internal_077c5a25c11288ffae92fe8bd683a73f412d5fab8e6b5fbaaed5c2a24b4bd094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_203702c386fc1fa59143f17bb83e07e4ed4806e04984966271b4082c144213c3->leave($__internal_203702c386fc1fa59143f17bb83e07e4ed4806e04984966271b4082c144213c3_prof);

        
        $__internal_077c5a25c11288ffae92fe8bd683a73f412d5fab8e6b5fbaaed5c2a24b4bd094->leave($__internal_077c5a25c11288ffae92fe8bd683a73f412d5fab8e6b5fbaaed5c2a24b4bd094_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_849ef825875b46f2f1cfbd288f6f4a638a1c378865bd78572f993360e364de5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849ef825875b46f2f1cfbd288f6f4a638a1c378865bd78572f993360e364de5b->enter($__internal_849ef825875b46f2f1cfbd288f6f4a638a1c378865bd78572f993360e364de5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a99bf3afd4ea00cb52a5d2f27e5f8942cd3568d6f073d76f09ea1a71a03099d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a99bf3afd4ea00cb52a5d2f27e5f8942cd3568d6f073d76f09ea1a71a03099d->enter($__internal_3a99bf3afd4ea00cb52a5d2f27e5f8942cd3568d6f073d76f09ea1a71a03099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a99bf3afd4ea00cb52a5d2f27e5f8942cd3568d6f073d76f09ea1a71a03099d->leave($__internal_3a99bf3afd4ea00cb52a5d2f27e5f8942cd3568d6f073d76f09ea1a71a03099d_prof);

        
        $__internal_849ef825875b46f2f1cfbd288f6f4a638a1c378865bd78572f993360e364de5b->leave($__internal_849ef825875b46f2f1cfbd288f6f4a638a1c378865bd78572f993360e364de5b_prof);

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
