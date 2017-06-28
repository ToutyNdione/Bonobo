<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58263f4e03d50c5cf9878f99efd29918963ed525153142cba9be12fb135021f6 extends Twig_Template
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
        $__internal_975460165330f9165d3d1ea8c133d628d6ff3f4243564614f7a159b45b11444b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975460165330f9165d3d1ea8c133d628d6ff3f4243564614f7a159b45b11444b->enter($__internal_975460165330f9165d3d1ea8c133d628d6ff3f4243564614f7a159b45b11444b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4a568548d7d3ea9ddf08451c855fe6953eb05db80cd67988e62304d252ec1d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a568548d7d3ea9ddf08451c855fe6953eb05db80cd67988e62304d252ec1d38->enter($__internal_4a568548d7d3ea9ddf08451c855fe6953eb05db80cd67988e62304d252ec1d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_975460165330f9165d3d1ea8c133d628d6ff3f4243564614f7a159b45b11444b->leave($__internal_975460165330f9165d3d1ea8c133d628d6ff3f4243564614f7a159b45b11444b_prof);

        
        $__internal_4a568548d7d3ea9ddf08451c855fe6953eb05db80cd67988e62304d252ec1d38->leave($__internal_4a568548d7d3ea9ddf08451c855fe6953eb05db80cd67988e62304d252ec1d38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
