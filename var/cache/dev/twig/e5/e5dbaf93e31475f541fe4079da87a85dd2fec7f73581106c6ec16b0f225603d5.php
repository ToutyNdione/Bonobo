<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a2cd2b508de6143e1fac8faaeb2908e72dfd6ffa037cc4386c107e3b89c17247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9a3e723d4c741928c489f6d910e0eaaccf427f1920599d290caa7dd8e2363811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3e723d4c741928c489f6d910e0eaaccf427f1920599d290caa7dd8e2363811->enter($__internal_9a3e723d4c741928c489f6d910e0eaaccf427f1920599d290caa7dd8e2363811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_983081d72c5d82b042eb52a4f7e31cc45f6ddae4e223b6fe5592e8082f58437e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983081d72c5d82b042eb52a4f7e31cc45f6ddae4e223b6fe5592e8082f58437e->enter($__internal_983081d72c5d82b042eb52a4f7e31cc45f6ddae4e223b6fe5592e8082f58437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3e723d4c741928c489f6d910e0eaaccf427f1920599d290caa7dd8e2363811->leave($__internal_9a3e723d4c741928c489f6d910e0eaaccf427f1920599d290caa7dd8e2363811_prof);

        
        $__internal_983081d72c5d82b042eb52a4f7e31cc45f6ddae4e223b6fe5592e8082f58437e->leave($__internal_983081d72c5d82b042eb52a4f7e31cc45f6ddae4e223b6fe5592e8082f58437e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb690d95621af5bc45b1aad13a2825d8e03fa3b361235de6929b15cab381bfb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb690d95621af5bc45b1aad13a2825d8e03fa3b361235de6929b15cab381bfb7->enter($__internal_bb690d95621af5bc45b1aad13a2825d8e03fa3b361235de6929b15cab381bfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d7523da2e37e0c3992d8d8aa2eb98e141433f8173ddc8db9de395dcc6dab5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7523da2e37e0c3992d8d8aa2eb98e141433f8173ddc8db9de395dcc6dab5e4->enter($__internal_8d7523da2e37e0c3992d8d8aa2eb98e141433f8173ddc8db9de395dcc6dab5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8d7523da2e37e0c3992d8d8aa2eb98e141433f8173ddc8db9de395dcc6dab5e4->leave($__internal_8d7523da2e37e0c3992d8d8aa2eb98e141433f8173ddc8db9de395dcc6dab5e4_prof);

        
        $__internal_bb690d95621af5bc45b1aad13a2825d8e03fa3b361235de6929b15cab381bfb7->leave($__internal_bb690d95621af5bc45b1aad13a2825d8e03fa3b361235de6929b15cab381bfb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
