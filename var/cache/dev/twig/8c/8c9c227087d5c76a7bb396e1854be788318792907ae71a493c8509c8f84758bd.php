<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d53ac12b3a0d48c7ccbcc34bd04455db5fdd25cc6511349fc8f530a4dd35d94c extends Twig_Template
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
        $__internal_dfeeb70813cb63fb198038515ca3399f2c2d46ffe4898d9aa9dabd4484cbd966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfeeb70813cb63fb198038515ca3399f2c2d46ffe4898d9aa9dabd4484cbd966->enter($__internal_dfeeb70813cb63fb198038515ca3399f2c2d46ffe4898d9aa9dabd4484cbd966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ba3e096c7ec717e5ca42c1cf366ed45241d3ed73bffe777674b85ff28ad92bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3e096c7ec717e5ca42c1cf366ed45241d3ed73bffe777674b85ff28ad92bff->enter($__internal_ba3e096c7ec717e5ca42c1cf366ed45241d3ed73bffe777674b85ff28ad92bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dfeeb70813cb63fb198038515ca3399f2c2d46ffe4898d9aa9dabd4484cbd966->leave($__internal_dfeeb70813cb63fb198038515ca3399f2c2d46ffe4898d9aa9dabd4484cbd966_prof);

        
        $__internal_ba3e096c7ec717e5ca42c1cf366ed45241d3ed73bffe777674b85ff28ad92bff->leave($__internal_ba3e096c7ec717e5ca42c1cf366ed45241d3ed73bffe777674b85ff28ad92bff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
