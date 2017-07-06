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
        $__internal_d2b426c34b86d266ac0e7882231affaf1c0b2bf05f29a40916a11a96042a0d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b426c34b86d266ac0e7882231affaf1c0b2bf05f29a40916a11a96042a0d4f->enter($__internal_d2b426c34b86d266ac0e7882231affaf1c0b2bf05f29a40916a11a96042a0d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3916f7aa88363690e53b1865174fb35c4ebe62182295f8a21c85fb9cc41f368f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3916f7aa88363690e53b1865174fb35c4ebe62182295f8a21c85fb9cc41f368f->enter($__internal_3916f7aa88363690e53b1865174fb35c4ebe62182295f8a21c85fb9cc41f368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d2b426c34b86d266ac0e7882231affaf1c0b2bf05f29a40916a11a96042a0d4f->leave($__internal_d2b426c34b86d266ac0e7882231affaf1c0b2bf05f29a40916a11a96042a0d4f_prof);

        
        $__internal_3916f7aa88363690e53b1865174fb35c4ebe62182295f8a21c85fb9cc41f368f->leave($__internal_3916f7aa88363690e53b1865174fb35c4ebe62182295f8a21c85fb9cc41f368f_prof);

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
