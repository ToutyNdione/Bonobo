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
        $__internal_f4e4f2b39389cd2ea1c1ea3c8d6fbd5c684f491b725638865daabddb155e4cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e4f2b39389cd2ea1c1ea3c8d6fbd5c684f491b725638865daabddb155e4cce->enter($__internal_f4e4f2b39389cd2ea1c1ea3c8d6fbd5c684f491b725638865daabddb155e4cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_504632d8d00b91225e3eebe53e47a3390782903921c32ef2039dab91141a5824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504632d8d00b91225e3eebe53e47a3390782903921c32ef2039dab91141a5824->enter($__internal_504632d8d00b91225e3eebe53e47a3390782903921c32ef2039dab91141a5824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f4e4f2b39389cd2ea1c1ea3c8d6fbd5c684f491b725638865daabddb155e4cce->leave($__internal_f4e4f2b39389cd2ea1c1ea3c8d6fbd5c684f491b725638865daabddb155e4cce_prof);

        
        $__internal_504632d8d00b91225e3eebe53e47a3390782903921c32ef2039dab91141a5824->leave($__internal_504632d8d00b91225e3eebe53e47a3390782903921c32ef2039dab91141a5824_prof);

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
