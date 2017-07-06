<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_580a6c21d21b6f8fca02a048a988f523864544752ffdb80f7ca011ed0c66f4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580a6c21d21b6f8fca02a048a988f523864544752ffdb80f7ca011ed0c66f4d8->enter($__internal_580a6c21d21b6f8fca02a048a988f523864544752ffdb80f7ca011ed0c66f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_5f30c6d53272505d471ade2679be133eddba34952a52c2f90fd8ba580aab3d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f30c6d53272505d471ade2679be133eddba34952a52c2f90fd8ba580aab3d05->enter($__internal_5f30c6d53272505d471ade2679be133eddba34952a52c2f90fd8ba580aab3d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_580a6c21d21b6f8fca02a048a988f523864544752ffdb80f7ca011ed0c66f4d8->leave($__internal_580a6c21d21b6f8fca02a048a988f523864544752ffdb80f7ca011ed0c66f4d8_prof);

        
        $__internal_5f30c6d53272505d471ade2679be133eddba34952a52c2f90fd8ba580aab3d05->leave($__internal_5f30c6d53272505d471ade2679be133eddba34952a52c2f90fd8ba580aab3d05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1a6c6a73fa693e0283e078a2cae401c49287f28b142d50c9f42bd498a4a1052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a6c6a73fa693e0283e078a2cae401c49287f28b142d50c9f42bd498a4a1052->enter($__internal_e1a6c6a73fa693e0283e078a2cae401c49287f28b142d50c9f42bd498a4a1052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7148b1e34d0e456d9c2ea3c874784684d4efcaf1f86780f9f263a2d77202ce2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7148b1e34d0e456d9c2ea3c874784684d4efcaf1f86780f9f263a2d77202ce2d->enter($__internal_7148b1e34d0e456d9c2ea3c874784684d4efcaf1f86780f9f263a2d77202ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7148b1e34d0e456d9c2ea3c874784684d4efcaf1f86780f9f263a2d77202ce2d->leave($__internal_7148b1e34d0e456d9c2ea3c874784684d4efcaf1f86780f9f263a2d77202ce2d_prof);

        
        $__internal_e1a6c6a73fa693e0283e078a2cae401c49287f28b142d50c9f42bd498a4a1052->leave($__internal_e1a6c6a73fa693e0283e078a2cae401c49287f28b142d50c9f42bd498a4a1052_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f591323de7b100563509e3eb345cd6bb03debc4132879173b7d7f17777ed51cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f591323de7b100563509e3eb345cd6bb03debc4132879173b7d7f17777ed51cd->enter($__internal_f591323de7b100563509e3eb345cd6bb03debc4132879173b7d7f17777ed51cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b0d4d2aa90626d90b41c73c53c996740846b2fc5ed4b683c6e49dd18cb0f296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0d4d2aa90626d90b41c73c53c996740846b2fc5ed4b683c6e49dd18cb0f296->enter($__internal_6b0d4d2aa90626d90b41c73c53c996740846b2fc5ed4b683c6e49dd18cb0f296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6b0d4d2aa90626d90b41c73c53c996740846b2fc5ed4b683c6e49dd18cb0f296->leave($__internal_6b0d4d2aa90626d90b41c73c53c996740846b2fc5ed4b683c6e49dd18cb0f296_prof);

        
        $__internal_f591323de7b100563509e3eb345cd6bb03debc4132879173b7d7f17777ed51cd->leave($__internal_f591323de7b100563509e3eb345cd6bb03debc4132879173b7d7f17777ed51cd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_27e6e6fbd71083efdfe78ee51732f7cde6a4d61b9dfddcc9af927ec49faff686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e6e6fbd71083efdfe78ee51732f7cde6a4d61b9dfddcc9af927ec49faff686->enter($__internal_27e6e6fbd71083efdfe78ee51732f7cde6a4d61b9dfddcc9af927ec49faff686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faf2897cb7410929eb8f51d5fe111eb4bdf5d55a16c00cd0568f86dfebfd7849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf2897cb7410929eb8f51d5fe111eb4bdf5d55a16c00cd0568f86dfebfd7849->enter($__internal_faf2897cb7410929eb8f51d5fe111eb4bdf5d55a16c00cd0568f86dfebfd7849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_faf2897cb7410929eb8f51d5fe111eb4bdf5d55a16c00cd0568f86dfebfd7849->leave($__internal_faf2897cb7410929eb8f51d5fe111eb4bdf5d55a16c00cd0568f86dfebfd7849_prof);

        
        $__internal_27e6e6fbd71083efdfe78ee51732f7cde6a4d61b9dfddcc9af927ec49faff686->leave($__internal_27e6e6fbd71083efdfe78ee51732f7cde6a4d61b9dfddcc9af927ec49faff686_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
