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
        $__internal_af1f91625f51affbd4ba6eb81b741bef467299a5bfb746f3cf2866c62b7ce5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1f91625f51affbd4ba6eb81b741bef467299a5bfb746f3cf2866c62b7ce5f4->enter($__internal_af1f91625f51affbd4ba6eb81b741bef467299a5bfb746f3cf2866c62b7ce5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a967a595e4f4f07c4d9e3c1a65c79e255b59997a8749c7d94ee3cf3558fd0f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a967a595e4f4f07c4d9e3c1a65c79e255b59997a8749c7d94ee3cf3558fd0f62->enter($__internal_a967a595e4f4f07c4d9e3c1a65c79e255b59997a8749c7d94ee3cf3558fd0f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_af1f91625f51affbd4ba6eb81b741bef467299a5bfb746f3cf2866c62b7ce5f4->leave($__internal_af1f91625f51affbd4ba6eb81b741bef467299a5bfb746f3cf2866c62b7ce5f4_prof);

        
        $__internal_a967a595e4f4f07c4d9e3c1a65c79e255b59997a8749c7d94ee3cf3558fd0f62->leave($__internal_a967a595e4f4f07c4d9e3c1a65c79e255b59997a8749c7d94ee3cf3558fd0f62_prof);

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
