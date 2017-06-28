<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dab7b52c5f9cb5ad1767435ae39270c3fa413844b8dd3adecc2f4118f98f0480 extends Twig_Template
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
        $__internal_9df7b4c63ac428effc5ed96f46b16a47dd9c54a11d883ae5f25c181f7fb92719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df7b4c63ac428effc5ed96f46b16a47dd9c54a11d883ae5f25c181f7fb92719->enter($__internal_9df7b4c63ac428effc5ed96f46b16a47dd9c54a11d883ae5f25c181f7fb92719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_668923e7bc652a24e38e0a395cf56c185dbd447de69ea13d00dc19acbae87859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668923e7bc652a24e38e0a395cf56c185dbd447de69ea13d00dc19acbae87859->enter($__internal_668923e7bc652a24e38e0a395cf56c185dbd447de69ea13d00dc19acbae87859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9df7b4c63ac428effc5ed96f46b16a47dd9c54a11d883ae5f25c181f7fb92719->leave($__internal_9df7b4c63ac428effc5ed96f46b16a47dd9c54a11d883ae5f25c181f7fb92719_prof);

        
        $__internal_668923e7bc652a24e38e0a395cf56c185dbd447de69ea13d00dc19acbae87859->leave($__internal_668923e7bc652a24e38e0a395cf56c185dbd447de69ea13d00dc19acbae87859_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
