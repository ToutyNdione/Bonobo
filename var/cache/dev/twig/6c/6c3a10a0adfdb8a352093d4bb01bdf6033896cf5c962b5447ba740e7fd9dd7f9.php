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
        $__internal_e19f34ebf438af9e74546496586198e3f8d0929478e6d823854d046c10ae6082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19f34ebf438af9e74546496586198e3f8d0929478e6d823854d046c10ae6082->enter($__internal_e19f34ebf438af9e74546496586198e3f8d0929478e6d823854d046c10ae6082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e0af46eb2fe56ce5e4f8db7ed917062a3871cae0d95eebdd95e36406fd50045b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0af46eb2fe56ce5e4f8db7ed917062a3871cae0d95eebdd95e36406fd50045b->enter($__internal_e0af46eb2fe56ce5e4f8db7ed917062a3871cae0d95eebdd95e36406fd50045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e19f34ebf438af9e74546496586198e3f8d0929478e6d823854d046c10ae6082->leave($__internal_e19f34ebf438af9e74546496586198e3f8d0929478e6d823854d046c10ae6082_prof);

        
        $__internal_e0af46eb2fe56ce5e4f8db7ed917062a3871cae0d95eebdd95e36406fd50045b->leave($__internal_e0af46eb2fe56ce5e4f8db7ed917062a3871cae0d95eebdd95e36406fd50045b_prof);

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
