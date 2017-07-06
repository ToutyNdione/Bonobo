<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_984f14d3e9c21091a21e6efc556ecc6fc03816e6df617cf3134b7d53d0c9ef39 extends Twig_Template
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
        $__internal_7f9d8ddd37db57e7661d4dcd953a9fb9f57ef7947e251f67f5e2f696b8cf4e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9d8ddd37db57e7661d4dcd953a9fb9f57ef7947e251f67f5e2f696b8cf4e1e->enter($__internal_7f9d8ddd37db57e7661d4dcd953a9fb9f57ef7947e251f67f5e2f696b8cf4e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_356c5a2dffc828ed301b87ba654c23b4603b12821059e0516e0ee8e52d39c3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356c5a2dffc828ed301b87ba654c23b4603b12821059e0516e0ee8e52d39c3bc->enter($__internal_356c5a2dffc828ed301b87ba654c23b4603b12821059e0516e0ee8e52d39c3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_7f9d8ddd37db57e7661d4dcd953a9fb9f57ef7947e251f67f5e2f696b8cf4e1e->leave($__internal_7f9d8ddd37db57e7661d4dcd953a9fb9f57ef7947e251f67f5e2f696b8cf4e1e_prof);

        
        $__internal_356c5a2dffc828ed301b87ba654c23b4603b12821059e0516e0ee8e52d39c3bc->leave($__internal_356c5a2dffc828ed301b87ba654c23b4603b12821059e0516e0ee8e52d39c3bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
