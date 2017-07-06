<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ac5b603bbbcc8af2850c19f9cb7a37c61a22c3cb2e859a89d9e0e935cc7e9387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_1266f5d58e598bac8ac3ec1e2c60cc68e2b313b815ac451ba43b555ab237472b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1266f5d58e598bac8ac3ec1e2c60cc68e2b313b815ac451ba43b555ab237472b->enter($__internal_1266f5d58e598bac8ac3ec1e2c60cc68e2b313b815ac451ba43b555ab237472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_130b358e819fd4f1cda68ff0516cfd93874eee296354ca5db7b27f2c65859217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130b358e819fd4f1cda68ff0516cfd93874eee296354ca5db7b27f2c65859217->enter($__internal_130b358e819fd4f1cda68ff0516cfd93874eee296354ca5db7b27f2c65859217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1266f5d58e598bac8ac3ec1e2c60cc68e2b313b815ac451ba43b555ab237472b->leave($__internal_1266f5d58e598bac8ac3ec1e2c60cc68e2b313b815ac451ba43b555ab237472b_prof);

        
        $__internal_130b358e819fd4f1cda68ff0516cfd93874eee296354ca5db7b27f2c65859217->leave($__internal_130b358e819fd4f1cda68ff0516cfd93874eee296354ca5db7b27f2c65859217_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8bf3a044e0261c1c34fff849f4efa63739f531b5cff73e942a5c10b15f6221c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bf3a044e0261c1c34fff849f4efa63739f531b5cff73e942a5c10b15f6221c->enter($__internal_b8bf3a044e0261c1c34fff849f4efa63739f531b5cff73e942a5c10b15f6221c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1a8ebc25bd71646bcb0eef351c372d068dcf35df32c542e739679aac292356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a8ebc25bd71646bcb0eef351c372d068dcf35df32c542e739679aac292356e->enter($__internal_c1a8ebc25bd71646bcb0eef351c372d068dcf35df32c542e739679aac292356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c1a8ebc25bd71646bcb0eef351c372d068dcf35df32c542e739679aac292356e->leave($__internal_c1a8ebc25bd71646bcb0eef351c372d068dcf35df32c542e739679aac292356e_prof);

        
        $__internal_b8bf3a044e0261c1c34fff849f4efa63739f531b5cff73e942a5c10b15f6221c->leave($__internal_b8bf3a044e0261c1c34fff849f4efa63739f531b5cff73e942a5c10b15f6221c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
