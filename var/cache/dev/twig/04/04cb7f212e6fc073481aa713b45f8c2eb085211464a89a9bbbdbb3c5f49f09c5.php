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
        $__internal_1cb84164f2324e921c25a658bb02e608306933cfd985d163977d65bc4d22962f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb84164f2324e921c25a658bb02e608306933cfd985d163977d65bc4d22962f->enter($__internal_1cb84164f2324e921c25a658bb02e608306933cfd985d163977d65bc4d22962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6c05be666379e01d74722c48c253f39ca0cba2221b3d07ce543b84ddd12f32be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c05be666379e01d74722c48c253f39ca0cba2221b3d07ce543b84ddd12f32be->enter($__internal_6c05be666379e01d74722c48c253f39ca0cba2221b3d07ce543b84ddd12f32be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1cb84164f2324e921c25a658bb02e608306933cfd985d163977d65bc4d22962f->leave($__internal_1cb84164f2324e921c25a658bb02e608306933cfd985d163977d65bc4d22962f_prof);

        
        $__internal_6c05be666379e01d74722c48c253f39ca0cba2221b3d07ce543b84ddd12f32be->leave($__internal_6c05be666379e01d74722c48c253f39ca0cba2221b3d07ce543b84ddd12f32be_prof);

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
