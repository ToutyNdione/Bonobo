<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_61aeb43e60dfda1459470934c7479e104b979a5aa68c811ddf8cbb040e10a06d extends Twig_Template
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
        $__internal_496a236038c0e27653b38b80b6e9d53ac413a21d19c58875f94ebece3bf69727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496a236038c0e27653b38b80b6e9d53ac413a21d19c58875f94ebece3bf69727->enter($__internal_496a236038c0e27653b38b80b6e9d53ac413a21d19c58875f94ebece3bf69727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f8c383de2c5c3ccb4a5029fd04441f9a4ae9c2c2b958fcc506b5d9f208a541b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c383de2c5c3ccb4a5029fd04441f9a4ae9c2c2b958fcc506b5d9f208a541b0->enter($__internal_f8c383de2c5c3ccb4a5029fd04441f9a4ae9c2c2b958fcc506b5d9f208a541b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_496a236038c0e27653b38b80b6e9d53ac413a21d19c58875f94ebece3bf69727->leave($__internal_496a236038c0e27653b38b80b6e9d53ac413a21d19c58875f94ebece3bf69727_prof);

        
        $__internal_f8c383de2c5c3ccb4a5029fd04441f9a4ae9c2c2b958fcc506b5d9f208a541b0->leave($__internal_f8c383de2c5c3ccb4a5029fd04441f9a4ae9c2c2b958fcc506b5d9f208a541b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
