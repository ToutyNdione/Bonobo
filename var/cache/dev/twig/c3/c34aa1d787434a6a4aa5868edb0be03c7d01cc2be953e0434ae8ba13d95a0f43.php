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
        $__internal_f48017fc0a1f7b7fff4ea3c167c94325b44ec9fb761041c16cf6ae486e6d1a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48017fc0a1f7b7fff4ea3c167c94325b44ec9fb761041c16cf6ae486e6d1a13->enter($__internal_f48017fc0a1f7b7fff4ea3c167c94325b44ec9fb761041c16cf6ae486e6d1a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_80f55387f792626543da6d4dbf91947ee1ba5787a2498f7f6ce6b71350e05389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f55387f792626543da6d4dbf91947ee1ba5787a2498f7f6ce6b71350e05389->enter($__internal_80f55387f792626543da6d4dbf91947ee1ba5787a2498f7f6ce6b71350e05389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_f48017fc0a1f7b7fff4ea3c167c94325b44ec9fb761041c16cf6ae486e6d1a13->leave($__internal_f48017fc0a1f7b7fff4ea3c167c94325b44ec9fb761041c16cf6ae486e6d1a13_prof);

        
        $__internal_80f55387f792626543da6d4dbf91947ee1ba5787a2498f7f6ce6b71350e05389->leave($__internal_80f55387f792626543da6d4dbf91947ee1ba5787a2498f7f6ce6b71350e05389_prof);

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
