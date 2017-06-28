<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a33f82f120f91a0e1cd70c3a0fd79dbe9e4ab4313fed23e9f1b28d67b48be504 extends Twig_Template
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
        $__internal_ba4cb01d7cef3c9b86974892adff2c236b366fcc38bdab23701d4fc5fc5144cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4cb01d7cef3c9b86974892adff2c236b366fcc38bdab23701d4fc5fc5144cd->enter($__internal_ba4cb01d7cef3c9b86974892adff2c236b366fcc38bdab23701d4fc5fc5144cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_5d9f99b2ebe94c56418816db0ceb19805c257ad001ddb7760b7ee0cd06f10df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9f99b2ebe94c56418816db0ceb19805c257ad001ddb7760b7ee0cd06f10df3->enter($__internal_5d9f99b2ebe94c56418816db0ceb19805c257ad001ddb7760b7ee0cd06f10df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_ba4cb01d7cef3c9b86974892adff2c236b366fcc38bdab23701d4fc5fc5144cd->leave($__internal_ba4cb01d7cef3c9b86974892adff2c236b366fcc38bdab23701d4fc5fc5144cd_prof);

        
        $__internal_5d9f99b2ebe94c56418816db0ceb19805c257ad001ddb7760b7ee0cd06f10df3->leave($__internal_5d9f99b2ebe94c56418816db0ceb19805c257ad001ddb7760b7ee0cd06f10df3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
