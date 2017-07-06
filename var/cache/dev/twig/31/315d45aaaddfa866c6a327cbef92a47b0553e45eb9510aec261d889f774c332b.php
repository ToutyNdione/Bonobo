<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3af40ba5edc25b5b0e79f50b081b0ae0e64d19ff4c9ba5d487458935aa359e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9aaf7fc48d7367698227adc440d14555d802d09c7ead640e708cf93389761218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aaf7fc48d7367698227adc440d14555d802d09c7ead640e708cf93389761218->enter($__internal_9aaf7fc48d7367698227adc440d14555d802d09c7ead640e708cf93389761218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_42aac4944310523bc3ad2be5f03c0938a5081aceffe34914054e1e967f5a0e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42aac4944310523bc3ad2be5f03c0938a5081aceffe34914054e1e967f5a0e94->enter($__internal_42aac4944310523bc3ad2be5f03c0938a5081aceffe34914054e1e967f5a0e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aaf7fc48d7367698227adc440d14555d802d09c7ead640e708cf93389761218->leave($__internal_9aaf7fc48d7367698227adc440d14555d802d09c7ead640e708cf93389761218_prof);

        
        $__internal_42aac4944310523bc3ad2be5f03c0938a5081aceffe34914054e1e967f5a0e94->leave($__internal_42aac4944310523bc3ad2be5f03c0938a5081aceffe34914054e1e967f5a0e94_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1743853fb58db0ce5aa78d8e2554d883c1cb60a0e2d408ac5cf80ac3d726c6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1743853fb58db0ce5aa78d8e2554d883c1cb60a0e2d408ac5cf80ac3d726c6cb->enter($__internal_1743853fb58db0ce5aa78d8e2554d883c1cb60a0e2d408ac5cf80ac3d726c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e6166660164a2ac8f18bf4f8d3fc1a005b4a5a70346c73843604c32e1bd5d1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6166660164a2ac8f18bf4f8d3fc1a005b4a5a70346c73843604c32e1bd5d1ca->enter($__internal_e6166660164a2ac8f18bf4f8d3fc1a005b4a5a70346c73843604c32e1bd5d1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e6166660164a2ac8f18bf4f8d3fc1a005b4a5a70346c73843604c32e1bd5d1ca->leave($__internal_e6166660164a2ac8f18bf4f8d3fc1a005b4a5a70346c73843604c32e1bd5d1ca_prof);

        
        $__internal_1743853fb58db0ce5aa78d8e2554d883c1cb60a0e2d408ac5cf80ac3d726c6cb->leave($__internal_1743853fb58db0ce5aa78d8e2554d883c1cb60a0e2d408ac5cf80ac3d726c6cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
