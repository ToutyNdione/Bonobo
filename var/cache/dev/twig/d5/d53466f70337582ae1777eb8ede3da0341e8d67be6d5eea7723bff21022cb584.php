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
        $__internal_359628f6eb302bcb6737abd82e03ade31f760b77e31224ccbf775867aa88184b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359628f6eb302bcb6737abd82e03ade31f760b77e31224ccbf775867aa88184b->enter($__internal_359628f6eb302bcb6737abd82e03ade31f760b77e31224ccbf775867aa88184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_3e8c58dcda00e1811b394f0cb29f7b7592afc143c11e087ef3aa7f730d0a53b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8c58dcda00e1811b394f0cb29f7b7592afc143c11e087ef3aa7f730d0a53b7->enter($__internal_3e8c58dcda00e1811b394f0cb29f7b7592afc143c11e087ef3aa7f730d0a53b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_359628f6eb302bcb6737abd82e03ade31f760b77e31224ccbf775867aa88184b->leave($__internal_359628f6eb302bcb6737abd82e03ade31f760b77e31224ccbf775867aa88184b_prof);

        
        $__internal_3e8c58dcda00e1811b394f0cb29f7b7592afc143c11e087ef3aa7f730d0a53b7->leave($__internal_3e8c58dcda00e1811b394f0cb29f7b7592afc143c11e087ef3aa7f730d0a53b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48e2d7cbbf149ef4fbbcb2a1e3118592ad186bd929a125d1a35c59e6b0983076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e2d7cbbf149ef4fbbcb2a1e3118592ad186bd929a125d1a35c59e6b0983076->enter($__internal_48e2d7cbbf149ef4fbbcb2a1e3118592ad186bd929a125d1a35c59e6b0983076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7099dab1ec6e8e698cf6749783de29698dd2dd74971e538f866fef4ac2b93bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7099dab1ec6e8e698cf6749783de29698dd2dd74971e538f866fef4ac2b93bc->enter($__internal_f7099dab1ec6e8e698cf6749783de29698dd2dd74971e538f866fef4ac2b93bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f7099dab1ec6e8e698cf6749783de29698dd2dd74971e538f866fef4ac2b93bc->leave($__internal_f7099dab1ec6e8e698cf6749783de29698dd2dd74971e538f866fef4ac2b93bc_prof);

        
        $__internal_48e2d7cbbf149ef4fbbcb2a1e3118592ad186bd929a125d1a35c59e6b0983076->leave($__internal_48e2d7cbbf149ef4fbbcb2a1e3118592ad186bd929a125d1a35c59e6b0983076_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e97d7b68cbff27a3c00f3e0720acf73991049105dad0f06c170cc457047a5fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97d7b68cbff27a3c00f3e0720acf73991049105dad0f06c170cc457047a5fdf->enter($__internal_e97d7b68cbff27a3c00f3e0720acf73991049105dad0f06c170cc457047a5fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_77ce3bc13f80812787477c23f0b33df9bad4b050583186713684a1e2e5b480d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ce3bc13f80812787477c23f0b33df9bad4b050583186713684a1e2e5b480d6->enter($__internal_77ce3bc13f80812787477c23f0b33df9bad4b050583186713684a1e2e5b480d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_77ce3bc13f80812787477c23f0b33df9bad4b050583186713684a1e2e5b480d6->leave($__internal_77ce3bc13f80812787477c23f0b33df9bad4b050583186713684a1e2e5b480d6_prof);

        
        $__internal_e97d7b68cbff27a3c00f3e0720acf73991049105dad0f06c170cc457047a5fdf->leave($__internal_e97d7b68cbff27a3c00f3e0720acf73991049105dad0f06c170cc457047a5fdf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1064f20c3e240932890dca953b3675f85e0489fb8007040f233c1b50c362b313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1064f20c3e240932890dca953b3675f85e0489fb8007040f233c1b50c362b313->enter($__internal_1064f20c3e240932890dca953b3675f85e0489fb8007040f233c1b50c362b313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a9db9fac2158ee17c6e651c327089256ea23657cbc5e6dae7510f6f3bbc047f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9db9fac2158ee17c6e651c327089256ea23657cbc5e6dae7510f6f3bbc047f->enter($__internal_4a9db9fac2158ee17c6e651c327089256ea23657cbc5e6dae7510f6f3bbc047f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a9db9fac2158ee17c6e651c327089256ea23657cbc5e6dae7510f6f3bbc047f->leave($__internal_4a9db9fac2158ee17c6e651c327089256ea23657cbc5e6dae7510f6f3bbc047f_prof);

        
        $__internal_1064f20c3e240932890dca953b3675f85e0489fb8007040f233c1b50c362b313->leave($__internal_1064f20c3e240932890dca953b3675f85e0489fb8007040f233c1b50c362b313_prof);

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
