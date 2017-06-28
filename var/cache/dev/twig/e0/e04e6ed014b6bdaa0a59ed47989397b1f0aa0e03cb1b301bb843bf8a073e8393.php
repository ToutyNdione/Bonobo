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
        $__internal_fb9d2bc3afbc6014c395b1e01b5d43b616035adb3a6e6da92ff9e499c663b3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9d2bc3afbc6014c395b1e01b5d43b616035adb3a6e6da92ff9e499c663b3c8->enter($__internal_fb9d2bc3afbc6014c395b1e01b5d43b616035adb3a6e6da92ff9e499c663b3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ab36a31b0a6b848c6dd6740f1e165e02019277897ee09904c8460f10d4a555aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab36a31b0a6b848c6dd6740f1e165e02019277897ee09904c8460f10d4a555aa->enter($__internal_ab36a31b0a6b848c6dd6740f1e165e02019277897ee09904c8460f10d4a555aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fb9d2bc3afbc6014c395b1e01b5d43b616035adb3a6e6da92ff9e499c663b3c8->leave($__internal_fb9d2bc3afbc6014c395b1e01b5d43b616035adb3a6e6da92ff9e499c663b3c8_prof);

        
        $__internal_ab36a31b0a6b848c6dd6740f1e165e02019277897ee09904c8460f10d4a555aa->leave($__internal_ab36a31b0a6b848c6dd6740f1e165e02019277897ee09904c8460f10d4a555aa_prof);

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
