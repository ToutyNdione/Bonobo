<?php

/* user/index.html.twig */
class __TwigTemplate_1d289e86b13a0d92359437e62d9638236abca9dd6a50ddadd5ffb2b610e4cae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_9d2d5a3b3374f0ad6b49620d1c149e2f69651e4fd3936d1c0b61e7b131da53a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2d5a3b3374f0ad6b49620d1c149e2f69651e4fd3936d1c0b61e7b131da53a5->enter($__internal_9d2d5a3b3374f0ad6b49620d1c149e2f69651e4fd3936d1c0b61e7b131da53a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_42720a9c883d1c586be6171cd7c83b7b7dc960e1c75007989f770ae68e46620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42720a9c883d1c586be6171cd7c83b7b7dc960e1c75007989f770ae68e46620d->enter($__internal_42720a9c883d1c586be6171cd7c83b7b7dc960e1c75007989f770ae68e46620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2d5a3b3374f0ad6b49620d1c149e2f69651e4fd3936d1c0b61e7b131da53a5->leave($__internal_9d2d5a3b3374f0ad6b49620d1c149e2f69651e4fd3936d1c0b61e7b131da53a5_prof);

        
        $__internal_42720a9c883d1c586be6171cd7c83b7b7dc960e1c75007989f770ae68e46620d->leave($__internal_42720a9c883d1c586be6171cd7c83b7b7dc960e1c75007989f770ae68e46620d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a0f3899e33b541b911f975296277249c21279e67de7e0783759237ab7f9a4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0f3899e33b541b911f975296277249c21279e67de7e0783759237ab7f9a4a9->enter($__internal_3a0f3899e33b541b911f975296277249c21279e67de7e0783759237ab7f9a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04818b8a20a6fe428abf6070598e931c8c5befac892c03dff65b68d968b01241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04818b8a20a6fe428abf6070598e931c8c5befac892c03dff65b68d968b01241->enter($__internal_04818b8a20a6fe428abf6070598e931c8c5befac892c03dff65b68d968b01241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bonobos list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Age</th>
                <th>Famille</th>
                <th>Race</th>
                <th>Nourriture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "age", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "famille", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "race", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "nourriture", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        ";
            // line 28
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "user", array()) == $context["user"])) {
                // line 29
                echo "
                        <li>
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                        ";
            } else {
                // line 37
                echo "                         <li>
                            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addfriend", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\">add friend</a>
                        </li>
                        ";
            }
            // line 41
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

";
        
        $__internal_04818b8a20a6fe428abf6070598e931c8c5befac892c03dff65b68d968b01241->leave($__internal_04818b8a20a6fe428abf6070598e931c8c5befac892c03dff65b68d968b01241_prof);

        
        $__internal_3a0f3899e33b541b911f975296277249c21279e67de7e0783759237ab7f9a4a9->leave($__internal_3a0f3899e33b541b911f975296277249c21279e67de7e0783759237ab7f9a4a9_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  122 => 41,  116 => 38,  113 => 37,  107 => 34,  101 => 31,  97 => 29,  95 => 28,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bonobos list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Age</th>
                <th>Famille</th>
                <th>Race</th>
                <th>Nourriture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                
                <td>{{ user.username }}</td>
                <td>{{ user.age }}</td>
                <td>{{ user.famille }}</td>
                <td>{{ user.race }}</td>
                <td>{{ user.nourriture }}</td>
                <td>
                    <ul>
                        {% if  app.user == user %}

                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                        {% else%}
                         <li>
                            <a href=\"{{ path('addfriend', { 'id': user.id })}}\">add friend</a>
                        </li>
                        {%endif%}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "user/index.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/user/index.html.twig");
    }
}
