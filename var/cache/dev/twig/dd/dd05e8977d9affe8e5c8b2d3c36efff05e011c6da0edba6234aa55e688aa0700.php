<?php

/* ::base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ca1ac563fb50247ef7e0f5cab2a7f6463aee4c84670ff39259fdbd307f45bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca1ac563fb50247ef7e0f5cab2a7f6463aee4c84670ff39259fdbd307f45bf3->enter($__internal_0ca1ac563fb50247ef7e0f5cab2a7f6463aee4c84670ff39259fdbd307f45bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_2cf54ca89fa50ee829699b68f4870b6f7549f72879751005393cfc245c10e37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf54ca89fa50ee829699b68f4870b6f7549f72879751005393cfc245c10e37c->enter($__internal_2cf54ca89fa50ee829699b68f4870b6f7549f72879751005393cfc245c10e37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0ca1ac563fb50247ef7e0f5cab2a7f6463aee4c84670ff39259fdbd307f45bf3->leave($__internal_0ca1ac563fb50247ef7e0f5cab2a7f6463aee4c84670ff39259fdbd307f45bf3_prof);

        
        $__internal_2cf54ca89fa50ee829699b68f4870b6f7549f72879751005393cfc245c10e37c->leave($__internal_2cf54ca89fa50ee829699b68f4870b6f7549f72879751005393cfc245c10e37c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5d01a02ed2738b7e22cf69744da6a5a43ef2529eb72d764070f00b2bb7f56cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d01a02ed2738b7e22cf69744da6a5a43ef2529eb72d764070f00b2bb7f56cf->enter($__internal_b5d01a02ed2738b7e22cf69744da6a5a43ef2529eb72d764070f00b2bb7f56cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4efcf9c1b198ea6ea1828c576373cbb3a158d776ff8c56e8fb3a8db55b497c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4efcf9c1b198ea6ea1828c576373cbb3a158d776ff8c56e8fb3a8db55b497c8->enter($__internal_e4efcf9c1b198ea6ea1828c576373cbb3a158d776ff8c56e8fb3a8db55b497c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e4efcf9c1b198ea6ea1828c576373cbb3a158d776ff8c56e8fb3a8db55b497c8->leave($__internal_e4efcf9c1b198ea6ea1828c576373cbb3a158d776ff8c56e8fb3a8db55b497c8_prof);

        
        $__internal_b5d01a02ed2738b7e22cf69744da6a5a43ef2529eb72d764070f00b2bb7f56cf->leave($__internal_b5d01a02ed2738b7e22cf69744da6a5a43ef2529eb72d764070f00b2bb7f56cf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46463763f2940ee078d299c308a5da7e01ba5e14e14e835d80f35be191acf6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46463763f2940ee078d299c308a5da7e01ba5e14e14e835d80f35be191acf6aa->enter($__internal_46463763f2940ee078d299c308a5da7e01ba5e14e14e835d80f35be191acf6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b123fe1597bfe904cc2eae920d0034474e53104703113b64631107c20c6bac87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b123fe1597bfe904cc2eae920d0034474e53104703113b64631107c20c6bac87->enter($__internal_b123fe1597bfe904cc2eae920d0034474e53104703113b64631107c20c6bac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b123fe1597bfe904cc2eae920d0034474e53104703113b64631107c20c6bac87->leave($__internal_b123fe1597bfe904cc2eae920d0034474e53104703113b64631107c20c6bac87_prof);

        
        $__internal_46463763f2940ee078d299c308a5da7e01ba5e14e14e835d80f35be191acf6aa->leave($__internal_46463763f2940ee078d299c308a5da7e01ba5e14e14e835d80f35be191acf6aa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6daf8ccc61f5af16747c37312e5f7f08eb89283dee98cc605ec9e086a5eb7d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6daf8ccc61f5af16747c37312e5f7f08eb89283dee98cc605ec9e086a5eb7d03->enter($__internal_6daf8ccc61f5af16747c37312e5f7f08eb89283dee98cc605ec9e086a5eb7d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_347acebf94f6bf0efe9efb795a5042e2499d164f9460ea4d60814b781242bdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347acebf94f6bf0efe9efb795a5042e2499d164f9460ea4d60814b781242bdf6->enter($__internal_347acebf94f6bf0efe9efb795a5042e2499d164f9460ea4d60814b781242bdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_347acebf94f6bf0efe9efb795a5042e2499d164f9460ea4d60814b781242bdf6->leave($__internal_347acebf94f6bf0efe9efb795a5042e2499d164f9460ea4d60814b781242bdf6_prof);

        
        $__internal_6daf8ccc61f5af16747c37312e5f7f08eb89283dee98cc605ec9e086a5eb7d03->leave($__internal_6daf8ccc61f5af16747c37312e5f7f08eb89283dee98cc605ec9e086a5eb7d03_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0936521bbca788245679a8637762d7a8a548b54e53fb32573df3a2e6fb0fa41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0936521bbca788245679a8637762d7a8a548b54e53fb32573df3a2e6fb0fa41f->enter($__internal_0936521bbca788245679a8637762d7a8a548b54e53fb32573df3a2e6fb0fa41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_07e21979c225d11476ff07befc76be7df323a70dd26ba38316295bdd107e2777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e21979c225d11476ff07befc76be7df323a70dd26ba38316295bdd107e2777->enter($__internal_07e21979c225d11476ff07befc76be7df323a70dd26ba38316295bdd107e2777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_07e21979c225d11476ff07befc76be7df323a70dd26ba38316295bdd107e2777->leave($__internal_07e21979c225d11476ff07befc76be7df323a70dd26ba38316295bdd107e2777_prof);

        
        $__internal_0936521bbca788245679a8637762d7a8a548b54e53fb32573df3a2e6fb0fa41f->leave($__internal_0936521bbca788245679a8637762d7a8a548b54e53fb32573df3a2e6fb0fa41f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/changeme/Rendu/bonobo_project/app/Resources/views/base.html.twig");
    }
}
