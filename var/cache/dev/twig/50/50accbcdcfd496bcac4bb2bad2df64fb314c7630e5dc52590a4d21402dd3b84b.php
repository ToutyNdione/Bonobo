<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cfe50e9bfbfb7246f8638d0a12a8c8112736197e19a61e2a772fecdee67a1d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a079cd12eb39955e5073ddd60e65cc11b685d472e99addf9e5c0f3a45378121d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a079cd12eb39955e5073ddd60e65cc11b685d472e99addf9e5c0f3a45378121d->enter($__internal_a079cd12eb39955e5073ddd60e65cc11b685d472e99addf9e5c0f3a45378121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_52d6f90327f5cbf02a1eabf6c4a0930b6158e907d9d69e62b459ba99288a644d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d6f90327f5cbf02a1eabf6c4a0930b6158e907d9d69e62b459ba99288a644d->enter($__internal_52d6f90327f5cbf02a1eabf6c4a0930b6158e907d9d69e62b459ba99288a644d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a079cd12eb39955e5073ddd60e65cc11b685d472e99addf9e5c0f3a45378121d->leave($__internal_a079cd12eb39955e5073ddd60e65cc11b685d472e99addf9e5c0f3a45378121d_prof);

        
        $__internal_52d6f90327f5cbf02a1eabf6c4a0930b6158e907d9d69e62b459ba99288a644d->leave($__internal_52d6f90327f5cbf02a1eabf6c4a0930b6158e907d9d69e62b459ba99288a644d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
