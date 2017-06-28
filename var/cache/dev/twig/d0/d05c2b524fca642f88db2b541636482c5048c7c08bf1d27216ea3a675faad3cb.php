<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_256effdaa7b675172da42e74be9318a9e8674b614d11c9998742dc2b70e24f9c extends Twig_Template
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
        $__internal_68015f1653c6fdeaf1e1e831b15b305cfc20f3122de049610a69ff917958fcb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68015f1653c6fdeaf1e1e831b15b305cfc20f3122de049610a69ff917958fcb5->enter($__internal_68015f1653c6fdeaf1e1e831b15b305cfc20f3122de049610a69ff917958fcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bc0b5e308bcbb77165e66ad6b1baa15b2506adf21dc6aa4453df96872b66c25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0b5e308bcbb77165e66ad6b1baa15b2506adf21dc6aa4453df96872b66c25d->enter($__internal_bc0b5e308bcbb77165e66ad6b1baa15b2506adf21dc6aa4453df96872b66c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_68015f1653c6fdeaf1e1e831b15b305cfc20f3122de049610a69ff917958fcb5->leave($__internal_68015f1653c6fdeaf1e1e831b15b305cfc20f3122de049610a69ff917958fcb5_prof);

        
        $__internal_bc0b5e308bcbb77165e66ad6b1baa15b2506adf21dc6aa4453df96872b66c25d->leave($__internal_bc0b5e308bcbb77165e66ad6b1baa15b2506adf21dc6aa4453df96872b66c25d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
