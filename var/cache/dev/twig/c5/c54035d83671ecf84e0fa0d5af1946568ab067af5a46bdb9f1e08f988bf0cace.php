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
        $__internal_356f478feb07c5138d5f1bdb207d82d97234e4d02116ab0f32ef77dbbea6ff47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356f478feb07c5138d5f1bdb207d82d97234e4d02116ab0f32ef77dbbea6ff47->enter($__internal_356f478feb07c5138d5f1bdb207d82d97234e4d02116ab0f32ef77dbbea6ff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_87a70a8118d1d7b437fbb2c597cc867bb3e70729ec608e4aaf59af2b6754e627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a70a8118d1d7b437fbb2c597cc867bb3e70729ec608e4aaf59af2b6754e627->enter($__internal_87a70a8118d1d7b437fbb2c597cc867bb3e70729ec608e4aaf59af2b6754e627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_356f478feb07c5138d5f1bdb207d82d97234e4d02116ab0f32ef77dbbea6ff47->leave($__internal_356f478feb07c5138d5f1bdb207d82d97234e4d02116ab0f32ef77dbbea6ff47_prof);

        
        $__internal_87a70a8118d1d7b437fbb2c597cc867bb3e70729ec608e4aaf59af2b6754e627->leave($__internal_87a70a8118d1d7b437fbb2c597cc867bb3e70729ec608e4aaf59af2b6754e627_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66fd103c9940b40f0d8823626abf5d345696127754ecd69ffe4ac35c9cc0ab1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fd103c9940b40f0d8823626abf5d345696127754ecd69ffe4ac35c9cc0ab1f->enter($__internal_66fd103c9940b40f0d8823626abf5d345696127754ecd69ffe4ac35c9cc0ab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6fc461670827c2d18c4266774e4fe0e99e0d583414785aa083af6e9d27127ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fc461670827c2d18c4266774e4fe0e99e0d583414785aa083af6e9d27127ac->enter($__internal_b6fc461670827c2d18c4266774e4fe0e99e0d583414785aa083af6e9d27127ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b6fc461670827c2d18c4266774e4fe0e99e0d583414785aa083af6e9d27127ac->leave($__internal_b6fc461670827c2d18c4266774e4fe0e99e0d583414785aa083af6e9d27127ac_prof);

        
        $__internal_66fd103c9940b40f0d8823626abf5d345696127754ecd69ffe4ac35c9cc0ab1f->leave($__internal_66fd103c9940b40f0d8823626abf5d345696127754ecd69ffe4ac35c9cc0ab1f_prof);

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
