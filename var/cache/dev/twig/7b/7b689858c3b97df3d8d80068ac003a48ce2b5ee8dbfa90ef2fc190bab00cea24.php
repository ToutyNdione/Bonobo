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
        $__internal_c6f30a52462a89d8bc0a23f7bf07277ca5c6c6b3c354258cceeb3ce874319add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f30a52462a89d8bc0a23f7bf07277ca5c6c6b3c354258cceeb3ce874319add->enter($__internal_c6f30a52462a89d8bc0a23f7bf07277ca5c6c6b3c354258cceeb3ce874319add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f3722586490eb7a493beb268fa8adc7af71f8313ac3ca26c7162970bc3d9be0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3722586490eb7a493beb268fa8adc7af71f8313ac3ca26c7162970bc3d9be0d->enter($__internal_f3722586490eb7a493beb268fa8adc7af71f8313ac3ca26c7162970bc3d9be0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c6f30a52462a89d8bc0a23f7bf07277ca5c6c6b3c354258cceeb3ce874319add->leave($__internal_c6f30a52462a89d8bc0a23f7bf07277ca5c6c6b3c354258cceeb3ce874319add_prof);

        
        $__internal_f3722586490eb7a493beb268fa8adc7af71f8313ac3ca26c7162970bc3d9be0d->leave($__internal_f3722586490eb7a493beb268fa8adc7af71f8313ac3ca26c7162970bc3d9be0d_prof);

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
