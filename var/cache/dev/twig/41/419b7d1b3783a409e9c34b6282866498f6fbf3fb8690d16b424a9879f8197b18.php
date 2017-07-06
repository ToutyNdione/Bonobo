<?php

/* user/friendlist.html.twig */
class __TwigTemplate_fb7b39b1dcc230484734c711df09dab8c8e79bedebb15f7e0b31a69988b3d122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/friendlist.html.twig", 1);
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
        $__internal_609dcdd276df00c0d19de9d54aa95ed220e0e4078ff5f427c5139546142be89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609dcdd276df00c0d19de9d54aa95ed220e0e4078ff5f427c5139546142be89c->enter($__internal_609dcdd276df00c0d19de9d54aa95ed220e0e4078ff5f427c5139546142be89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/friendlist.html.twig"));

        $__internal_ea7e695b30643486bba626f84184e9cb4758977d045340e7f7642e1690318fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7e695b30643486bba626f84184e9cb4758977d045340e7f7642e1690318fde->enter($__internal_ea7e695b30643486bba626f84184e9cb4758977d045340e7f7642e1690318fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/friendlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609dcdd276df00c0d19de9d54aa95ed220e0e4078ff5f427c5139546142be89c->leave($__internal_609dcdd276df00c0d19de9d54aa95ed220e0e4078ff5f427c5139546142be89c_prof);

        
        $__internal_ea7e695b30643486bba626f84184e9cb4758977d045340e7f7642e1690318fde->leave($__internal_ea7e695b30643486bba626f84184e9cb4758977d045340e7f7642e1690318fde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_137f4a8273bc3726f59cb786937bc88adaa59de6a646d4ef8befa83366fb6874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137f4a8273bc3726f59cb786937bc88adaa59de6a646d4ef8befa83366fb6874->enter($__internal_137f4a8273bc3726f59cb786937bc88adaa59de6a646d4ef8befa83366fb6874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2dbe9da828797e2412804bb6086e510e353912bb9154932d237488db84f9621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dbe9da828797e2412804bb6086e510e353912bb9154932d237488db84f9621->enter($__internal_c2dbe9da828797e2412804bb6086e510e353912bb9154932d237488db84f9621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1> Friend List</h1>

    <table>
        <thead>
            <tr>
                <th>Friends</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <tr>
                
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                      
                    <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removefriend", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">remove friend</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>

";
        
        $__internal_c2dbe9da828797e2412804bb6086e510e353912bb9154932d237488db84f9621->leave($__internal_c2dbe9da828797e2412804bb6086e510e353912bb9154932d237488db84f9621_prof);

        
        $__internal_137f4a8273bc3726f59cb786937bc88adaa59de6a646d4ef8befa83366fb6874->leave($__internal_137f4a8273bc3726f59cb786937bc88adaa59de6a646d4ef8befa83366fb6874_prof);

    }

    public function getTemplateName()
    {
        return "user/friendlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  77 => 22,  69 => 17,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1> Friend List</h1>

    <table>
        <thead>
            <tr>
                <th>Friends</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                
                <td>{{user.username}}</td>
                <td>
                    <ul>
                      
                    <li>
                            <a href=\"{{ path('removefriend', { 'id': user.id })}}\">remove friend</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "user/friendlist.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/user/friendlist.html.twig");
    }
}
