<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_87344a7adb757cd19a89e38e7cccbadcbc6c616bce4b5112daa78553e0ccf340 extends Twig_Template
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
        $__internal_a209fd753ece3e5755ca8378a538fa1c229f05c70855f3d2d973999c697fff65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a209fd753ece3e5755ca8378a538fa1c229f05c70855f3d2d973999c697fff65->enter($__internal_a209fd753ece3e5755ca8378a538fa1c229f05c70855f3d2d973999c697fff65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_e6193bda2b51b45c49d1da8719461837b6b473c09e14530b0d58795695fa2a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6193bda2b51b45c49d1da8719461837b6b473c09e14530b0d58795695fa2a17->enter($__internal_e6193bda2b51b45c49d1da8719461837b6b473c09e14530b0d58795695fa2a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_a209fd753ece3e5755ca8378a538fa1c229f05c70855f3d2d973999c697fff65->leave($__internal_a209fd753ece3e5755ca8378a538fa1c229f05c70855f3d2d973999c697fff65_prof);

        
        $__internal_e6193bda2b51b45c49d1da8719461837b6b473c09e14530b0d58795695fa2a17->leave($__internal_e6193bda2b51b45c49d1da8719461837b6b473c09e14530b0d58795695fa2a17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
