<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8a0986d5bf5598ade5a5a6c4687dc086a0057bb31dd1865929869549ff5d4b0d extends Twig_Template
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
        $__internal_a47427e2e5e1e8b8ae2fce6f9050eccdb33c027f942b3f0e78613d84faeeedc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47427e2e5e1e8b8ae2fce6f9050eccdb33c027f942b3f0e78613d84faeeedc2->enter($__internal_a47427e2e5e1e8b8ae2fce6f9050eccdb33c027f942b3f0e78613d84faeeedc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_72f81efb988e035576e93e3607c043891ffc777119711e4b3549ae8e411d5ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f81efb988e035576e93e3607c043891ffc777119711e4b3549ae8e411d5ccd->enter($__internal_72f81efb988e035576e93e3607c043891ffc777119711e4b3549ae8e411d5ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a47427e2e5e1e8b8ae2fce6f9050eccdb33c027f942b3f0e78613d84faeeedc2->leave($__internal_a47427e2e5e1e8b8ae2fce6f9050eccdb33c027f942b3f0e78613d84faeeedc2_prof);

        
        $__internal_72f81efb988e035576e93e3607c043891ffc777119711e4b3549ae8e411d5ccd->leave($__internal_72f81efb988e035576e93e3607c043891ffc777119711e4b3549ae8e411d5ccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
