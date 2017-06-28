<?php

/* :user:index.html.twig */
class __TwigTemplate_1d289e86b13a0d92359437e62d9638236abca9dd6a50ddadd5ffb2b610e4cae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_db2e53d6a49ac4b18afe4fc2b5211b944bf46ec49a3f5abef32c818f05e1e970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2e53d6a49ac4b18afe4fc2b5211b944bf46ec49a3f5abef32c818f05e1e970->enter($__internal_db2e53d6a49ac4b18afe4fc2b5211b944bf46ec49a3f5abef32c818f05e1e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_c012df0dfaf0328fca8720d94183abbc07ea32ca6df7398ef2527ed92e01bfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c012df0dfaf0328fca8720d94183abbc07ea32ca6df7398ef2527ed92e01bfa0->enter($__internal_c012df0dfaf0328fca8720d94183abbc07ea32ca6df7398ef2527ed92e01bfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2e53d6a49ac4b18afe4fc2b5211b944bf46ec49a3f5abef32c818f05e1e970->leave($__internal_db2e53d6a49ac4b18afe4fc2b5211b944bf46ec49a3f5abef32c818f05e1e970_prof);

        
        $__internal_c012df0dfaf0328fca8720d94183abbc07ea32ca6df7398ef2527ed92e01bfa0->leave($__internal_c012df0dfaf0328fca8720d94183abbc07ea32ca6df7398ef2527ed92e01bfa0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05cf9692d6dfc62bff39ed23241baa2c809f75635bb9ce8f41df679bb6c91ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cf9692d6dfc62bff39ed23241baa2c809f75635bb9ce8f41df679bb6c91ffc->enter($__internal_05cf9692d6dfc62bff39ed23241baa2c809f75635bb9ce8f41df679bb6c91ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b99e1ce42f04f7aa7577e4631cc9d777640ca4d359c39e788d71377a44353026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99e1ce42f04f7aa7577e4631cc9d777640ca4d359c39e788d71377a44353026->enter($__internal_b99e1ce42f04f7aa7577e4631cc9d777640ca4d359c39e788d71377a44353026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                         <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_new", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">add friends</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

";
        
        $__internal_b99e1ce42f04f7aa7577e4631cc9d777640ca4d359c39e788d71377a44353026->leave($__internal_b99e1ce42f04f7aa7577e4631cc9d777640ca4d359c39e788d71377a44353026_prof);

        
        $__internal_05cf9692d6dfc62bff39ed23241baa2c809f75635bb9ce8f41df679bb6c91ffc->leave($__internal_05cf9692d6dfc62bff39ed23241baa2c809f75635bb9ce8f41df679bb6c91ffc_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  108 => 35,  102 => 32,  96 => 29,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                         <li>
                            <a href=\"{{ path('friend_new', { 'id': user.id }) }}\">add friends</a>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", ":user:index.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/user/index.html.twig");
    }
}
