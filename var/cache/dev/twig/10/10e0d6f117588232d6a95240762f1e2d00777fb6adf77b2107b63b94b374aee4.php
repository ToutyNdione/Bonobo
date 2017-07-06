<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_172c78e97363d7b2f827e2febfafe708bfb5604fae8230b8bcf9d255bc95c312 extends Twig_Template
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
        $__internal_2b1a1c4d5d6ddf76f6d4425e706ef3943de8484ebbd3e9644cc41b3b74c43d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1a1c4d5d6ddf76f6d4425e706ef3943de8484ebbd3e9644cc41b3b74c43d00->enter($__internal_2b1a1c4d5d6ddf76f6d4425e706ef3943de8484ebbd3e9644cc41b3b74c43d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_99146332336ea2ea4236c7eaa803c5397bce35ea15cb43f24a6e9a0442291d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99146332336ea2ea4236c7eaa803c5397bce35ea15cb43f24a6e9a0442291d37->enter($__internal_99146332336ea2ea4236c7eaa803c5397bce35ea15cb43f24a6e9a0442291d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2b1a1c4d5d6ddf76f6d4425e706ef3943de8484ebbd3e9644cc41b3b74c43d00->leave($__internal_2b1a1c4d5d6ddf76f6d4425e706ef3943de8484ebbd3e9644cc41b3b74c43d00_prof);

        
        $__internal_99146332336ea2ea4236c7eaa803c5397bce35ea15cb43f24a6e9a0442291d37->leave($__internal_99146332336ea2ea4236c7eaa803c5397bce35ea15cb43f24a6e9a0442291d37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
