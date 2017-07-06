<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2c0bf4be0290bf58343fcf6e7d9901b2c5d567e9db02e78c01213c99f4fcea67 extends Twig_Template
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
        $__internal_cfe14192931f181a93f613d3eabd39c8c047554cb48f0c4a454f520f9f6d463d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe14192931f181a93f613d3eabd39c8c047554cb48f0c4a454f520f9f6d463d->enter($__internal_cfe14192931f181a93f613d3eabd39c8c047554cb48f0c4a454f520f9f6d463d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2debb1b69dc61ef46ff2b1918d63efadd29e164ac9c721f396eb75bd7afba507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2debb1b69dc61ef46ff2b1918d63efadd29e164ac9c721f396eb75bd7afba507->enter($__internal_2debb1b69dc61ef46ff2b1918d63efadd29e164ac9c721f396eb75bd7afba507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cfe14192931f181a93f613d3eabd39c8c047554cb48f0c4a454f520f9f6d463d->leave($__internal_cfe14192931f181a93f613d3eabd39c8c047554cb48f0c4a454f520f9f6d463d_prof);

        
        $__internal_2debb1b69dc61ef46ff2b1918d63efadd29e164ac9c721f396eb75bd7afba507->leave($__internal_2debb1b69dc61ef46ff2b1918d63efadd29e164ac9c721f396eb75bd7afba507_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
