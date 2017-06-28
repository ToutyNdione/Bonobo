<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_098abe635a006b556594d3022bdbcb06b3595d98623d3b5ff0be3e3d0e1eb67b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a928aa19ecf85f40699f8d54c916a090373a5eebadcbeceb70506083f2291a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a928aa19ecf85f40699f8d54c916a090373a5eebadcbeceb70506083f2291a->enter($__internal_40a928aa19ecf85f40699f8d54c916a090373a5eebadcbeceb70506083f2291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_97bab5ce86e29792d94341e5f5a86fee7a5fced8f10c54343af0de3e7597b0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bab5ce86e29792d94341e5f5a86fee7a5fced8f10c54343af0de3e7597b0ba->enter($__internal_97bab5ce86e29792d94341e5f5a86fee7a5fced8f10c54343af0de3e7597b0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_40a928aa19ecf85f40699f8d54c916a090373a5eebadcbeceb70506083f2291a->leave($__internal_40a928aa19ecf85f40699f8d54c916a090373a5eebadcbeceb70506083f2291a_prof);

        
        $__internal_97bab5ce86e29792d94341e5f5a86fee7a5fced8f10c54343af0de3e7597b0ba->leave($__internal_97bab5ce86e29792d94341e5f5a86fee7a5fced8f10c54343af0de3e7597b0ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
