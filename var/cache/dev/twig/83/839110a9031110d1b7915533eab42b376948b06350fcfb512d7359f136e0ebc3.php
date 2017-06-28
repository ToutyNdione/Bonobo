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
        $__internal_4a4d7ba561d119fac3a1a0b093994c839c6b20ee92373c5d03e92fe53db576bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4d7ba561d119fac3a1a0b093994c839c6b20ee92373c5d03e92fe53db576bf->enter($__internal_4a4d7ba561d119fac3a1a0b093994c839c6b20ee92373c5d03e92fe53db576bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bce49eee40418631948554af8fa5cecfff0b2434b98bcc9d74635e1ce2be9f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce49eee40418631948554af8fa5cecfff0b2434b98bcc9d74635e1ce2be9f52->enter($__internal_bce49eee40418631948554af8fa5cecfff0b2434b98bcc9d74635e1ce2be9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4a4d7ba561d119fac3a1a0b093994c839c6b20ee92373c5d03e92fe53db576bf->leave($__internal_4a4d7ba561d119fac3a1a0b093994c839c6b20ee92373c5d03e92fe53db576bf_prof);

        
        $__internal_bce49eee40418631948554af8fa5cecfff0b2434b98bcc9d74635e1ce2be9f52->leave($__internal_bce49eee40418631948554af8fa5cecfff0b2434b98bcc9d74635e1ce2be9f52_prof);

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
