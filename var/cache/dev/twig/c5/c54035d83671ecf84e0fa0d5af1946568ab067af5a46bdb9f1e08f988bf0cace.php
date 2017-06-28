<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_78bd6ec02ff7b87169236938d4fcce35f1f03e74a8977115e35029a1c6064e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac307aaa2ee9225f15f66e3567d0f940037d13e25ccf83afa10f3ae1e0475b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac307aaa2ee9225f15f66e3567d0f940037d13e25ccf83afa10f3ae1e0475b75->enter($__internal_ac307aaa2ee9225f15f66e3567d0f940037d13e25ccf83afa10f3ae1e0475b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_05729ba09b6dec4208e55b65e2a836805ba45a47d2ec95e7f2765bb74d295346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05729ba09b6dec4208e55b65e2a836805ba45a47d2ec95e7f2765bb74d295346->enter($__internal_05729ba09b6dec4208e55b65e2a836805ba45a47d2ec95e7f2765bb74d295346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac307aaa2ee9225f15f66e3567d0f940037d13e25ccf83afa10f3ae1e0475b75->leave($__internal_ac307aaa2ee9225f15f66e3567d0f940037d13e25ccf83afa10f3ae1e0475b75_prof);

        
        $__internal_05729ba09b6dec4208e55b65e2a836805ba45a47d2ec95e7f2765bb74d295346->leave($__internal_05729ba09b6dec4208e55b65e2a836805ba45a47d2ec95e7f2765bb74d295346_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bca6ccdb699f003bf09e2f6a45a8e2f631d9b0cc90a70ae8922d67fc38f87b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bca6ccdb699f003bf09e2f6a45a8e2f631d9b0cc90a70ae8922d67fc38f87b7->enter($__internal_9bca6ccdb699f003bf09e2f6a45a8e2f631d9b0cc90a70ae8922d67fc38f87b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1b2c5f8e60d4a0090d085d268ff24a3c85eaf1879e101282ffaf329d4f6f2904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2c5f8e60d4a0090d085d268ff24a3c85eaf1879e101282ffaf329d4f6f2904->enter($__internal_1b2c5f8e60d4a0090d085d268ff24a3c85eaf1879e101282ffaf329d4f6f2904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1b2c5f8e60d4a0090d085d268ff24a3c85eaf1879e101282ffaf329d4f6f2904->leave($__internal_1b2c5f8e60d4a0090d085d268ff24a3c85eaf1879e101282ffaf329d4f6f2904_prof);

        
        $__internal_9bca6ccdb699f003bf09e2f6a45a8e2f631d9b0cc90a70ae8922d67fc38f87b7->leave($__internal_9bca6ccdb699f003bf09e2f6a45a8e2f631d9b0cc90a70ae8922d67fc38f87b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
