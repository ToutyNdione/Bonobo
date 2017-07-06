<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3340ab11ba7500f2d3ab826367a6f4819c97f5bd9c7273a6673e09bcbe29988e extends Twig_Template
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
        $__internal_d278e44efed4fe562ddcf45efe40c5b7ebd9f7622f01bdc03e61079daf1d6923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d278e44efed4fe562ddcf45efe40c5b7ebd9f7622f01bdc03e61079daf1d6923->enter($__internal_d278e44efed4fe562ddcf45efe40c5b7ebd9f7622f01bdc03e61079daf1d6923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d3b709b5cf2d3716d1f9a8b641abd673b237a4aad764ba264bb9a96259b26473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b709b5cf2d3716d1f9a8b641abd673b237a4aad764ba264bb9a96259b26473->enter($__internal_d3b709b5cf2d3716d1f9a8b641abd673b237a4aad764ba264bb9a96259b26473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d278e44efed4fe562ddcf45efe40c5b7ebd9f7622f01bdc03e61079daf1d6923->leave($__internal_d278e44efed4fe562ddcf45efe40c5b7ebd9f7622f01bdc03e61079daf1d6923_prof);

        
        $__internal_d3b709b5cf2d3716d1f9a8b641abd673b237a4aad764ba264bb9a96259b26473->leave($__internal_d3b709b5cf2d3716d1f9a8b641abd673b237a4aad764ba264bb9a96259b26473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
