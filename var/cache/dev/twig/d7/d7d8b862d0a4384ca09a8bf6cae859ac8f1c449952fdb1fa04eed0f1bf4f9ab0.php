<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_3b77be82038a0962efcb5029944865439ea5ca49f96d60853e75d8344bfeeaf8 extends Twig_Template
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
        $__internal_408e9c3527fd05f926831f0bbfc7c0712428687aa58c688c8d19f23c69e2af45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408e9c3527fd05f926831f0bbfc7c0712428687aa58c688c8d19f23c69e2af45->enter($__internal_408e9c3527fd05f926831f0bbfc7c0712428687aa58c688c8d19f23c69e2af45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_6f64db3ceb37beae40f250000601439baa035bb2cdcad4c6a01e97c338ac1626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f64db3ceb37beae40f250000601439baa035bb2cdcad4c6a01e97c338ac1626->enter($__internal_6f64db3ceb37beae40f250000601439baa035bb2cdcad4c6a01e97c338ac1626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_408e9c3527fd05f926831f0bbfc7c0712428687aa58c688c8d19f23c69e2af45->leave($__internal_408e9c3527fd05f926831f0bbfc7c0712428687aa58c688c8d19f23c69e2af45_prof);

        
        $__internal_6f64db3ceb37beae40f250000601439baa035bb2cdcad4c6a01e97c338ac1626->leave($__internal_6f64db3ceb37beae40f250000601439baa035bb2cdcad4c6a01e97c338ac1626_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
