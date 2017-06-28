<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3f307ff16ab6df60139c79bef12fd31483cc1ea795768f99f1977fc25af3de40 extends Twig_Template
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
        $__internal_745b332c20453c8df62add8a608e6cb0271b1b18af75191e106518adef8e5433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745b332c20453c8df62add8a608e6cb0271b1b18af75191e106518adef8e5433->enter($__internal_745b332c20453c8df62add8a608e6cb0271b1b18af75191e106518adef8e5433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_56a3379560a06eec922f0d7267b40d81f4e5cbea3fb8e3660bcb01bf5165d471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a3379560a06eec922f0d7267b40d81f4e5cbea3fb8e3660bcb01bf5165d471->enter($__internal_56a3379560a06eec922f0d7267b40d81f4e5cbea3fb8e3660bcb01bf5165d471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_745b332c20453c8df62add8a608e6cb0271b1b18af75191e106518adef8e5433->leave($__internal_745b332c20453c8df62add8a608e6cb0271b1b18af75191e106518adef8e5433_prof);

        
        $__internal_56a3379560a06eec922f0d7267b40d81f4e5cbea3fb8e3660bcb01bf5165d471->leave($__internal_56a3379560a06eec922f0d7267b40d81f4e5cbea3fb8e3660bcb01bf5165d471_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
