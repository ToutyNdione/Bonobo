<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4c5e398cf32ecdcd0d964c7b0985dafb1ca5328db16ef1aeea780a91cafd3d49 extends Twig_Template
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
        $__internal_8a7a7c612fd762f0d7c86a01c8e55aa05bfadf164a27afbcc2415838c0f25209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7a7c612fd762f0d7c86a01c8e55aa05bfadf164a27afbcc2415838c0f25209->enter($__internal_8a7a7c612fd762f0d7c86a01c8e55aa05bfadf164a27afbcc2415838c0f25209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ee2a630087d9960b2bdfeb60d3f6ad3e2883f3d70c8af4f8d5354dad356e48d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2a630087d9960b2bdfeb60d3f6ad3e2883f3d70c8af4f8d5354dad356e48d9->enter($__internal_ee2a630087d9960b2bdfeb60d3f6ad3e2883f3d70c8af4f8d5354dad356e48d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8a7a7c612fd762f0d7c86a01c8e55aa05bfadf164a27afbcc2415838c0f25209->leave($__internal_8a7a7c612fd762f0d7c86a01c8e55aa05bfadf164a27afbcc2415838c0f25209_prof);

        
        $__internal_ee2a630087d9960b2bdfeb60d3f6ad3e2883f3d70c8af4f8d5354dad356e48d9->leave($__internal_ee2a630087d9960b2bdfeb60d3f6ad3e2883f3d70c8af4f8d5354dad356e48d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
