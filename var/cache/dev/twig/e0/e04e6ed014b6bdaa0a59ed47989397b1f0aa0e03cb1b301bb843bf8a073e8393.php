<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_70b0f8010ad22ce4ab976f5661a1aeb9d22f01fb58d3c3a1ed4e6596af693a10 extends Twig_Template
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
        $__internal_93cb34f1d07325fa1ea1019295d1d050531646441fe50fcb9ece1bce0b0c0d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93cb34f1d07325fa1ea1019295d1d050531646441fe50fcb9ece1bce0b0c0d39->enter($__internal_93cb34f1d07325fa1ea1019295d1d050531646441fe50fcb9ece1bce0b0c0d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b75c7c4d0f0fccf43aa5c9e5765ed065798d660e9cfab0f39392f7f542cc6dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75c7c4d0f0fccf43aa5c9e5765ed065798d660e9cfab0f39392f7f542cc6dad->enter($__internal_b75c7c4d0f0fccf43aa5c9e5765ed065798d660e9cfab0f39392f7f542cc6dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_93cb34f1d07325fa1ea1019295d1d050531646441fe50fcb9ece1bce0b0c0d39->leave($__internal_93cb34f1d07325fa1ea1019295d1d050531646441fe50fcb9ece1bce0b0c0d39_prof);

        
        $__internal_b75c7c4d0f0fccf43aa5c9e5765ed065798d660e9cfab0f39392f7f542cc6dad->leave($__internal_b75c7c4d0f0fccf43aa5c9e5765ed065798d660e9cfab0f39392f7f542cc6dad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
