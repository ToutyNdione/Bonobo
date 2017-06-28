<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c6ef73861f95ac5fc02c9f77bdf2e99ece9af1cd98da7fe0a7ee4dda4d34c113 extends Twig_Template
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
        $__internal_f705334787d106bbc23ae27f76e4fb1e4a0a94d901485bc27b91f7cc9bb3ecc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f705334787d106bbc23ae27f76e4fb1e4a0a94d901485bc27b91f7cc9bb3ecc1->enter($__internal_f705334787d106bbc23ae27f76e4fb1e4a0a94d901485bc27b91f7cc9bb3ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6a317c916225be59db37c69b574e2d206a491f3f09d8524078d26d0b7f02dcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a317c916225be59db37c69b574e2d206a491f3f09d8524078d26d0b7f02dcc5->enter($__internal_6a317c916225be59db37c69b574e2d206a491f3f09d8524078d26d0b7f02dcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f705334787d106bbc23ae27f76e4fb1e4a0a94d901485bc27b91f7cc9bb3ecc1->leave($__internal_f705334787d106bbc23ae27f76e4fb1e4a0a94d901485bc27b91f7cc9bb3ecc1_prof);

        
        $__internal_6a317c916225be59db37c69b574e2d206a491f3f09d8524078d26d0b7f02dcc5->leave($__internal_6a317c916225be59db37c69b574e2d206a491f3f09d8524078d26d0b7f02dcc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
