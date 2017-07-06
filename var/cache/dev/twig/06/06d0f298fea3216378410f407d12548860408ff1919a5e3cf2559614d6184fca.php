<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_185ba3fe692def0904203c1c72ec9cdbb468db6c6f9883824b84cab1e9f90b74 extends Twig_Template
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
        $__internal_7dea9cdcf0941ddbd05b0249a525c9573331664e11bd63d4144e5ea4158c5952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dea9cdcf0941ddbd05b0249a525c9573331664e11bd63d4144e5ea4158c5952->enter($__internal_7dea9cdcf0941ddbd05b0249a525c9573331664e11bd63d4144e5ea4158c5952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4fe5d9ae0bb1d545c4c08dbb2ca328c97f1ff7ddaf83ab1f04587aadcee4e08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe5d9ae0bb1d545c4c08dbb2ca328c97f1ff7ddaf83ab1f04587aadcee4e08c->enter($__internal_4fe5d9ae0bb1d545c4c08dbb2ca328c97f1ff7ddaf83ab1f04587aadcee4e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7dea9cdcf0941ddbd05b0249a525c9573331664e11bd63d4144e5ea4158c5952->leave($__internal_7dea9cdcf0941ddbd05b0249a525c9573331664e11bd63d4144e5ea4158c5952_prof);

        
        $__internal_4fe5d9ae0bb1d545c4c08dbb2ca328c97f1ff7ddaf83ab1f04587aadcee4e08c->leave($__internal_4fe5d9ae0bb1d545c4c08dbb2ca328c97f1ff7ddaf83ab1f04587aadcee4e08c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
