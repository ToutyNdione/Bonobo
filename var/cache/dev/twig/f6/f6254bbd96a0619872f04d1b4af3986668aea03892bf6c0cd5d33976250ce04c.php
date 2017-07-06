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
        $__internal_06d5e81e658293464a4cdcc93c2efbf93dde31b80f9297c017b24e02f1ed313e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d5e81e658293464a4cdcc93c2efbf93dde31b80f9297c017b24e02f1ed313e->enter($__internal_06d5e81e658293464a4cdcc93c2efbf93dde31b80f9297c017b24e02f1ed313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BPBonoboBundle:Default:index.html.twig"));

        $__internal_669915e18dc233da6df7a6361b1f853d1ee59f355f6f7665157c32cb42efe714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669915e18dc233da6df7a6361b1f853d1ee59f355f6f7665157c32cb42efe714->enter($__internal_669915e18dc233da6df7a6361b1f853d1ee59f355f6f7665157c32cb42efe714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BPBonoboBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d5e81e658293464a4cdcc93c2efbf93dde31b80f9297c017b24e02f1ed313e->leave($__internal_06d5e81e658293464a4cdcc93c2efbf93dde31b80f9297c017b24e02f1ed313e_prof);

        
        $__internal_669915e18dc233da6df7a6361b1f853d1ee59f355f6f7665157c32cb42efe714->leave($__internal_669915e18dc233da6df7a6361b1f853d1ee59f355f6f7665157c32cb42efe714_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72fee3719526616eeee849deb583a2f2b94634d6092914ae0c7fa826a89381fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fee3719526616eeee849deb583a2f2b94634d6092914ae0c7fa826a89381fc->enter($__internal_72fee3719526616eeee849deb583a2f2b94634d6092914ae0c7fa826a89381fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63db621b41081154b55d75a87e5410bd9b6a480b817a7c70a3ed0ba766d5c5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63db621b41081154b55d75a87e5410bd9b6a480b817a7c70a3ed0ba766d5c5ef->enter($__internal_63db621b41081154b55d75a87e5410bd9b6a480b817a7c70a3ed0ba766d5c5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:App:index";
        
        $__internal_63db621b41081154b55d75a87e5410bd9b6a480b817a7c70a3ed0ba766d5c5ef->leave($__internal_63db621b41081154b55d75a87e5410bd9b6a480b817a7c70a3ed0ba766d5c5ef_prof);

        
        $__internal_72fee3719526616eeee849deb583a2f2b94634d6092914ae0c7fa826a89381fc->leave($__internal_72fee3719526616eeee849deb583a2f2b94634d6092914ae0c7fa826a89381fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_530744d45a4a918c768350d304bca7f3788019905074b25e3412c944703ef73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530744d45a4a918c768350d304bca7f3788019905074b25e3412c944703ef73a->enter($__internal_530744d45a4a918c768350d304bca7f3788019905074b25e3412c944703ef73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7f15fa5c558e89fdb5417839e341ad655a67c0276c04953778ee843a41de156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f15fa5c558e89fdb5417839e341ad655a67c0276c04953778ee843a41de156->enter($__internal_a7f15fa5c558e89fdb5417839e341ad655a67c0276c04953778ee843a41de156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friendlist", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\"> Friend List</a></li>
                
            ";
        } else {
            // line 20
            echo "        <li><a href=\"/register\"><i class=\"fa fa-shield\"></i> SIGN UP</a></li>
        <li><a href=\"/login\"><i class=\"fa fa-comment\"></i> LOGIN</a></li>
            ";
        }
        // line 23
        echo "
       
      </ul>      
    </div>
  </nav>

";
        
        $__internal_a7f15fa5c558e89fdb5417839e341ad655a67c0276c04953778ee843a41de156->leave($__internal_a7f15fa5c558e89fdb5417839e341ad655a67c0276c04953778ee843a41de156_prof);

        
        $__internal_530744d45a4a918c768350d304bca7f3788019905074b25e3412c944703ef73a->leave($__internal_530744d45a4a918c768350d304bca7f3788019905074b25e3412c944703ef73a_prof);

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
        return array (  100 => 23,  95 => 20,  89 => 17,  85 => 16,  79 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <li><a href=\"{{ path('friendlist', { 'id': app.user.id }) }}\"> Friend List</a></li>
                
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
