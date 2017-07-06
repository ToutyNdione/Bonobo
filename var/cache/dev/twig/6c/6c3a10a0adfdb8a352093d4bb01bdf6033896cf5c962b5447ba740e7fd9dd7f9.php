<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_681119f560756d0910b80b0ed4c59c2aac9518ee3f404aa92ab2a8759637c574 extends Twig_Template
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
        $__internal_a5385549e22e1155d96b71fe0ebaf5201a05793e79a2e4af76c5edab34fb1ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5385549e22e1155d96b71fe0ebaf5201a05793e79a2e4af76c5edab34fb1ecf->enter($__internal_a5385549e22e1155d96b71fe0ebaf5201a05793e79a2e4af76c5edab34fb1ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6d2a9c3b024653696716d2827339bca6b302b3d227c38859244ff657a09decad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2a9c3b024653696716d2827339bca6b302b3d227c38859244ff657a09decad->enter($__internal_6d2a9c3b024653696716d2827339bca6b302b3d227c38859244ff657a09decad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a5385549e22e1155d96b71fe0ebaf5201a05793e79a2e4af76c5edab34fb1ecf->leave($__internal_a5385549e22e1155d96b71fe0ebaf5201a05793e79a2e4af76c5edab34fb1ecf_prof);

        
        $__internal_6d2a9c3b024653696716d2827339bca6b302b3d227c38859244ff657a09decad->leave($__internal_6d2a9c3b024653696716d2827339bca6b302b3d227c38859244ff657a09decad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
