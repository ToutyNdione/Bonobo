<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_642ea63c7b8d0d0f9d460c24792b5b27bc5bee84bf74cd9d882be9ded840c442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_cb3ee27d981035cb841f55ab5d51b329c6dc8a0f516fb518325addf66f1383f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3ee27d981035cb841f55ab5d51b329c6dc8a0f516fb518325addf66f1383f5->enter($__internal_cb3ee27d981035cb841f55ab5d51b329c6dc8a0f516fb518325addf66f1383f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_1be74326e7a9a636c904cefa86b9da9e05329ce54a2ea689f6b66c9f1a903bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be74326e7a9a636c904cefa86b9da9e05329ce54a2ea689f6b66c9f1a903bef->enter($__internal_1be74326e7a9a636c904cefa86b9da9e05329ce54a2ea689f6b66c9f1a903bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3ee27d981035cb841f55ab5d51b329c6dc8a0f516fb518325addf66f1383f5->leave($__internal_cb3ee27d981035cb841f55ab5d51b329c6dc8a0f516fb518325addf66f1383f5_prof);

        
        $__internal_1be74326e7a9a636c904cefa86b9da9e05329ce54a2ea689f6b66c9f1a903bef->leave($__internal_1be74326e7a9a636c904cefa86b9da9e05329ce54a2ea689f6b66c9f1a903bef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_470f804714708fae4e7137bf280f74a657e5ab8aac2c99eb98ce5a5ab010f7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470f804714708fae4e7137bf280f74a657e5ab8aac2c99eb98ce5a5ab010f7f2->enter($__internal_470f804714708fae4e7137bf280f74a657e5ab8aac2c99eb98ce5a5ab010f7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c76c0ea254add60a2e794c899b676a7dac1adbeb7d1b09ea9c1324bd76bd0818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76c0ea254add60a2e794c899b676a7dac1adbeb7d1b09ea9c1324bd76bd0818->enter($__internal_c76c0ea254add60a2e794c899b676a7dac1adbeb7d1b09ea9c1324bd76bd0818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c76c0ea254add60a2e794c899b676a7dac1adbeb7d1b09ea9c1324bd76bd0818->leave($__internal_c76c0ea254add60a2e794c899b676a7dac1adbeb7d1b09ea9c1324bd76bd0818_prof);

        
        $__internal_470f804714708fae4e7137bf280f74a657e5ab8aac2c99eb98ce5a5ab010f7f2->leave($__internal_470f804714708fae4e7137bf280f74a657e5ab8aac2c99eb98ce5a5ab010f7f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
