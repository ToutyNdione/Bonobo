<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6cafe743c7842cc2cac3000572289a6daadb839517865a736ef43ea1d86432af extends Twig_Template
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
        $__internal_6ed6d7c090467d5f6f2be3691c2aadaf75da750178be6d21273c1dd06fa1fb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed6d7c090467d5f6f2be3691c2aadaf75da750178be6d21273c1dd06fa1fb31->enter($__internal_6ed6d7c090467d5f6f2be3691c2aadaf75da750178be6d21273c1dd06fa1fb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_83579d59c6cab9f07ed3075f0d99ada0b9d309b868b20b0a6691b9ae5e42f71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83579d59c6cab9f07ed3075f0d99ada0b9d309b868b20b0a6691b9ae5e42f71a->enter($__internal_83579d59c6cab9f07ed3075f0d99ada0b9d309b868b20b0a6691b9ae5e42f71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6ed6d7c090467d5f6f2be3691c2aadaf75da750178be6d21273c1dd06fa1fb31->leave($__internal_6ed6d7c090467d5f6f2be3691c2aadaf75da750178be6d21273c1dd06fa1fb31_prof);

        
        $__internal_83579d59c6cab9f07ed3075f0d99ada0b9d309b868b20b0a6691b9ae5e42f71a->leave($__internal_83579d59c6cab9f07ed3075f0d99ada0b9d309b868b20b0a6691b9ae5e42f71a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
