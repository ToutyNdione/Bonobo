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
        $__internal_316d82db06b45f6257bc77d4e54bbb2f74b5e1d470a3a6eb72fd9878abd342dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316d82db06b45f6257bc77d4e54bbb2f74b5e1d470a3a6eb72fd9878abd342dc->enter($__internal_316d82db06b45f6257bc77d4e54bbb2f74b5e1d470a3a6eb72fd9878abd342dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_a8934827c2c88a9ddb8e124b5a8511c6289395d9296077d398404b0a4685f817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8934827c2c88a9ddb8e124b5a8511c6289395d9296077d398404b0a4685f817->enter($__internal_a8934827c2c88a9ddb8e124b5a8511c6289395d9296077d398404b0a4685f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_316d82db06b45f6257bc77d4e54bbb2f74b5e1d470a3a6eb72fd9878abd342dc->leave($__internal_316d82db06b45f6257bc77d4e54bbb2f74b5e1d470a3a6eb72fd9878abd342dc_prof);

        
        $__internal_a8934827c2c88a9ddb8e124b5a8511c6289395d9296077d398404b0a4685f817->leave($__internal_a8934827c2c88a9ddb8e124b5a8511c6289395d9296077d398404b0a4685f817_prof);

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
