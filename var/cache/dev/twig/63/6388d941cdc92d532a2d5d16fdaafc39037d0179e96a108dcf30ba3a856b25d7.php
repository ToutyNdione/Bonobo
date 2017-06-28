<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7fe5a6ad8fa01ad323cf8c066ac7a9163f67a887863a1a6d2c64edc1ecd9e7c2 extends Twig_Template
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
        $__internal_6dfba3ea35cfe68584a9d62cfddeea2efbc5da0f37acd997b30869d8bfbf5d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfba3ea35cfe68584a9d62cfddeea2efbc5da0f37acd997b30869d8bfbf5d14->enter($__internal_6dfba3ea35cfe68584a9d62cfddeea2efbc5da0f37acd997b30869d8bfbf5d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c58c4a4fce82a8cdcd70bceea1158d08a57abe28e939ddc8d2be93227c65a6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58c4a4fce82a8cdcd70bceea1158d08a57abe28e939ddc8d2be93227c65a6b0->enter($__internal_c58c4a4fce82a8cdcd70bceea1158d08a57abe28e939ddc8d2be93227c65a6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6dfba3ea35cfe68584a9d62cfddeea2efbc5da0f37acd997b30869d8bfbf5d14->leave($__internal_6dfba3ea35cfe68584a9d62cfddeea2efbc5da0f37acd997b30869d8bfbf5d14_prof);

        
        $__internal_c58c4a4fce82a8cdcd70bceea1158d08a57abe28e939ddc8d2be93227c65a6b0->leave($__internal_c58c4a4fce82a8cdcd70bceea1158d08a57abe28e939ddc8d2be93227c65a6b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
