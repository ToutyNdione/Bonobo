<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_278698b48de21010611758b68be64355b52f1d7389202d94cfe8dbce8b4829b7 extends Twig_Template
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
        $__internal_b4c6ab83317954bd8e63a053a5d42dac60a4608c96e5ebbf9508aa14e296148c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c6ab83317954bd8e63a053a5d42dac60a4608c96e5ebbf9508aa14e296148c->enter($__internal_b4c6ab83317954bd8e63a053a5d42dac60a4608c96e5ebbf9508aa14e296148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_f668c39861f692a8f9edb16368806fa7cd2307d0c697b4973793e744c1623497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f668c39861f692a8f9edb16368806fa7cd2307d0c697b4973793e744c1623497->enter($__internal_f668c39861f692a8f9edb16368806fa7cd2307d0c697b4973793e744c1623497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new Twig_Error_Runtime('Variable "group_name" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_b4c6ab83317954bd8e63a053a5d42dac60a4608c96e5ebbf9508aa14e296148c->leave($__internal_b4c6ab83317954bd8e63a053a5d42dac60a4608c96e5ebbf9508aa14e296148c_prof);

        
        $__internal_f668c39861f692a8f9edb16368806fa7cd2307d0c697b4973793e744c1623497->leave($__internal_f668c39861f692a8f9edb16368806fa7cd2307d0c697b4973793e744c1623497_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit_content.html.twig");
    }
}
