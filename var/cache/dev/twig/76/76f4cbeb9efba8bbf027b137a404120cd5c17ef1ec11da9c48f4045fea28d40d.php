<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a865aacb736e171093408d80634033db60325f0f11a3bbeecf7ff713e314f6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_6fd047a4b0ff1d2e9ceb8ab6477542fb5aacd3966be08ddbe8cf59011a5defa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd047a4b0ff1d2e9ceb8ab6477542fb5aacd3966be08ddbe8cf59011a5defa6->enter($__internal_6fd047a4b0ff1d2e9ceb8ab6477542fb5aacd3966be08ddbe8cf59011a5defa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_443239222539fb586be162af543978138179632a05bd6c043ceb9fe2797dd13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443239222539fb586be162af543978138179632a05bd6c043ceb9fe2797dd13b->enter($__internal_443239222539fb586be162af543978138179632a05bd6c043ceb9fe2797dd13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd047a4b0ff1d2e9ceb8ab6477542fb5aacd3966be08ddbe8cf59011a5defa6->leave($__internal_6fd047a4b0ff1d2e9ceb8ab6477542fb5aacd3966be08ddbe8cf59011a5defa6_prof);

        
        $__internal_443239222539fb586be162af543978138179632a05bd6c043ceb9fe2797dd13b->leave($__internal_443239222539fb586be162af543978138179632a05bd6c043ceb9fe2797dd13b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59f25f9ad1f7da343cc44be9b3a3927a69eaef43ee2d686a040909e153571544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f25f9ad1f7da343cc44be9b3a3927a69eaef43ee2d686a040909e153571544->enter($__internal_59f25f9ad1f7da343cc44be9b3a3927a69eaef43ee2d686a040909e153571544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9642872a86d9e50018c7fae8277784d2134b547b017d1312a1a04f203c3bcfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9642872a86d9e50018c7fae8277784d2134b547b017d1312a1a04f203c3bcfad->enter($__internal_9642872a86d9e50018c7fae8277784d2134b547b017d1312a1a04f203c3bcfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9642872a86d9e50018c7fae8277784d2134b547b017d1312a1a04f203c3bcfad->leave($__internal_9642872a86d9e50018c7fae8277784d2134b547b017d1312a1a04f203c3bcfad_prof);

        
        $__internal_59f25f9ad1f7da343cc44be9b3a3927a69eaef43ee2d686a040909e153571544->leave($__internal_59f25f9ad1f7da343cc44be9b3a3927a69eaef43ee2d686a040909e153571544_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
