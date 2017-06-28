<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_0ac32aa0414812e51c5f268e1854c2968bf820d7b65eab3e7309c261f28d52ce extends Twig_Template
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
        $__internal_3e460b3976844ce284642034a43630a38f34c17600011cb378fa79ef039dd88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e460b3976844ce284642034a43630a38f34c17600011cb378fa79ef039dd88f->enter($__internal_3e460b3976844ce284642034a43630a38f34c17600011cb378fa79ef039dd88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_8534403f01328d783a0d1017ea04ad1654cc569ec1c1489516c2f94e1a146b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8534403f01328d783a0d1017ea04ad1654cc569ec1c1489516c2f94e1a146b0f->enter($__internal_8534403f01328d783a0d1017ea04ad1654cc569ec1c1489516c2f94e1a146b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_3e460b3976844ce284642034a43630a38f34c17600011cb378fa79ef039dd88f->leave($__internal_3e460b3976844ce284642034a43630a38f34c17600011cb378fa79ef039dd88f_prof);

        
        $__internal_8534403f01328d783a0d1017ea04ad1654cc569ec1c1489516c2f94e1a146b0f->leave($__internal_8534403f01328d783a0d1017ea04ad1654cc569ec1c1489516c2f94e1a146b0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
