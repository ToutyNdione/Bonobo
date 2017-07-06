<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_256effdaa7b675172da42e74be9318a9e8674b614d11c9998742dc2b70e24f9c extends Twig_Template
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
        $__internal_68cbb1037781e7635befe8b4988331e6042eead401f346506ff1320e727b07e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cbb1037781e7635befe8b4988331e6042eead401f346506ff1320e727b07e2->enter($__internal_68cbb1037781e7635befe8b4988331e6042eead401f346506ff1320e727b07e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_29376441d4e143d83e48059c3fe0f142bb8a066272e62f8c9425311f274a964e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29376441d4e143d83e48059c3fe0f142bb8a066272e62f8c9425311f274a964e->enter($__internal_29376441d4e143d83e48059c3fe0f142bb8a066272e62f8c9425311f274a964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_68cbb1037781e7635befe8b4988331e6042eead401f346506ff1320e727b07e2->leave($__internal_68cbb1037781e7635befe8b4988331e6042eead401f346506ff1320e727b07e2_prof);

        
        $__internal_29376441d4e143d83e48059c3fe0f142bb8a066272e62f8c9425311f274a964e->leave($__internal_29376441d4e143d83e48059c3fe0f142bb8a066272e62f8c9425311f274a964e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
