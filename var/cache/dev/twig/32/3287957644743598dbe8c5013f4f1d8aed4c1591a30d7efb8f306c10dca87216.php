<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9222fce45ea8b352fa8ceecd16d31d9771f2d8379458df4d7e9141b6996528cc extends Twig_Template
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
        $__internal_30247fa6000dd70bf15a3fdd80dbd87527077995b337b5f5d633d11452c1ac4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30247fa6000dd70bf15a3fdd80dbd87527077995b337b5f5d633d11452c1ac4e->enter($__internal_30247fa6000dd70bf15a3fdd80dbd87527077995b337b5f5d633d11452c1ac4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_841c21f337e73f63c23d50c80d6ea7912ac1115cb1dd67349ba57ade98603b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841c21f337e73f63c23d50c80d6ea7912ac1115cb1dd67349ba57ade98603b7e->enter($__internal_841c21f337e73f63c23d50c80d6ea7912ac1115cb1dd67349ba57ade98603b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_30247fa6000dd70bf15a3fdd80dbd87527077995b337b5f5d633d11452c1ac4e->leave($__internal_30247fa6000dd70bf15a3fdd80dbd87527077995b337b5f5d633d11452c1ac4e_prof);

        
        $__internal_841c21f337e73f63c23d50c80d6ea7912ac1115cb1dd67349ba57ade98603b7e->leave($__internal_841c21f337e73f63c23d50c80d6ea7912ac1115cb1dd67349ba57ade98603b7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
