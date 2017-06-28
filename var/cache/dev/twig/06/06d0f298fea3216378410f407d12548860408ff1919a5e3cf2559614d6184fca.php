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
        $__internal_3a7da6aa86f810c900cb0bfebdacda9f22afa549eb92e38094d6089c74537a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7da6aa86f810c900cb0bfebdacda9f22afa549eb92e38094d6089c74537a1b->enter($__internal_3a7da6aa86f810c900cb0bfebdacda9f22afa549eb92e38094d6089c74537a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_119e8bb599e40ada8f45ef5b68303089cb3d185ec488090c9e6876baaf8e5622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119e8bb599e40ada8f45ef5b68303089cb3d185ec488090c9e6876baaf8e5622->enter($__internal_119e8bb599e40ada8f45ef5b68303089cb3d185ec488090c9e6876baaf8e5622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3a7da6aa86f810c900cb0bfebdacda9f22afa549eb92e38094d6089c74537a1b->leave($__internal_3a7da6aa86f810c900cb0bfebdacda9f22afa549eb92e38094d6089c74537a1b_prof);

        
        $__internal_119e8bb599e40ada8f45ef5b68303089cb3d185ec488090c9e6876baaf8e5622->leave($__internal_119e8bb599e40ada8f45ef5b68303089cb3d185ec488090c9e6876baaf8e5622_prof);

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
