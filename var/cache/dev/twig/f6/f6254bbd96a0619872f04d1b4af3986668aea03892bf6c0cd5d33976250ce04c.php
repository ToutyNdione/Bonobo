<?php

/* BPBonoboBundle:Default:index.html.twig */
class __TwigTemplate_2c8937a60036d0b2a18a3e7aaa06ea2ee5cdabc878947e44d87b60991b7dd3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BPBonoboBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44156a278633d8b9c6be4b4637d199aa21222f8355e7b77bd33b8800c2de7153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44156a278633d8b9c6be4b4637d199aa21222f8355e7b77bd33b8800c2de7153->enter($__internal_44156a278633d8b9c6be4b4637d199aa21222f8355e7b77bd33b8800c2de7153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BPBonoboBundle:Default:index.html.twig"));

        $__internal_69946efad58a7236e13f5705c95c11a3dd7c2326f968abe2f02c7a062f65a9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69946efad58a7236e13f5705c95c11a3dd7c2326f968abe2f02c7a062f65a9f1->enter($__internal_69946efad58a7236e13f5705c95c11a3dd7c2326f968abe2f02c7a062f65a9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BPBonoboBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44156a278633d8b9c6be4b4637d199aa21222f8355e7b77bd33b8800c2de7153->leave($__internal_44156a278633d8b9c6be4b4637d199aa21222f8355e7b77bd33b8800c2de7153_prof);

        
        $__internal_69946efad58a7236e13f5705c95c11a3dd7c2326f968abe2f02c7a062f65a9f1->leave($__internal_69946efad58a7236e13f5705c95c11a3dd7c2326f968abe2f02c7a062f65a9f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e50e3e6213465b0db71dce7e86600490e47341359c08ed130c9322684054162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e50e3e6213465b0db71dce7e86600490e47341359c08ed130c9322684054162->enter($__internal_7e50e3e6213465b0db71dce7e86600490e47341359c08ed130c9322684054162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ed755ea7cd6b304172f6f1ce314c1a857335486923c5166f7c95f37b9591c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed755ea7cd6b304172f6f1ce314c1a857335486923c5166f7c95f37b9591c3c->enter($__internal_1ed755ea7cd6b304172f6f1ce314c1a857335486923c5166f7c95f37b9591c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:App:index";
        
        $__internal_1ed755ea7cd6b304172f6f1ce314c1a857335486923c5166f7c95f37b9591c3c->leave($__internal_1ed755ea7cd6b304172f6f1ce314c1a857335486923c5166f7c95f37b9591c3c_prof);

        
        $__internal_7e50e3e6213465b0db71dce7e86600490e47341359c08ed130c9322684054162->leave($__internal_7e50e3e6213465b0db71dce7e86600490e47341359c08ed130c9322684054162_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe4082d9b3a7348527d73ea1299432eeef2a92ecff9502c4309bc502828cd7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4082d9b3a7348527d73ea1299432eeef2a92ecff9502c4309bc502828cd7a6->enter($__internal_fe4082d9b3a7348527d73ea1299432eeef2a92ecff9502c4309bc502828cd7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b15632d0495155c4b3db2ffb470e64bfb7befc4a8ae0ed02ed5e990ea8ba872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b15632d0495155c4b3db2ffb470e64bfb7befc4a8ae0ed02ed5e990ea8ba872->enter($__internal_6b15632d0495155c4b3db2ffb470e64bfb7befc4a8ae0ed02ed5e990ea8ba872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Bonobo project</h1>
<nav class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"navbar-header\">        
      </div>

      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</li> 
                       <li><a href=\"/logout\"><i class=\"fa fa-shield\"></i> LOGOUT</a></li>
                <li><a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\"> Bonobo List</a></li>
                
            ";
        } else {
            // line 19
            echo "        <li><a href=\"/register\"><i class=\"fa fa-shield\"></i> SIGN UP</a></li>
        <li><a href=\"/login\"><i class=\"fa fa-comment\"></i> LOGIN</a></li>
            ";
        }
        // line 22
        echo "
       
      </ul>      
    </div>
  </nav>

";
        
        $__internal_6b15632d0495155c4b3db2ffb470e64bfb7befc4a8ae0ed02ed5e990ea8ba872->leave($__internal_6b15632d0495155c4b3db2ffb470e64bfb7befc4a8ae0ed02ed5e990ea8ba872_prof);

        
        $__internal_fe4082d9b3a7348527d73ea1299432eeef2a92ecff9502c4309bc502828cd7a6->leave($__internal_fe4082d9b3a7348527d73ea1299432eeef2a92ecff9502c4309bc502828cd7a6_prof);

    }

    public function getTemplateName()
    {
        return "BPBonoboBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  91 => 19,  85 => 16,  79 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:App:index{% endblock %}

{% block body %}
<h1>Bonobo project</h1>
<nav class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"navbar-header\">        
      </div>

      <ul class=\"nav navbar-nav navbar-right\">
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <li>{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</li> 
                       <li><a href=\"/logout\"><i class=\"fa fa-shield\"></i> LOGOUT</a></li>
                <li><a href=\"{{ path('user_index') }}\"> Bonobo List</a></li>
                
            {% else %}
        <li><a href=\"/register\"><i class=\"fa fa-shield\"></i> SIGN UP</a></li>
        <li><a href=\"/login\"><i class=\"fa fa-comment\"></i> LOGIN</a></li>
            {% endif %}

       
      </ul>      
    </div>
  </nav>

{% endblock %}

", "BPBonoboBundle:Default:index.html.twig", "/home/changeme/Rendu/bonobo_project/src/BP/BonoboBundle/Resources/views/Default/index.html.twig");
    }
}
