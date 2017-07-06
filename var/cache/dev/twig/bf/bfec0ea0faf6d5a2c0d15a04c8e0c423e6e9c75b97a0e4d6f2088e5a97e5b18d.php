<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dab7b52c5f9cb5ad1767435ae39270c3fa413844b8dd3adecc2f4118f98f0480 extends Twig_Template
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
        $__internal_42e383b27842febe297e6b0db166149d9a637675c0bdc234b79a2548c34de38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e383b27842febe297e6b0db166149d9a637675c0bdc234b79a2548c34de38a->enter($__internal_42e383b27842febe297e6b0db166149d9a637675c0bdc234b79a2548c34de38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1678b5a57972403ab1edf8cf6b10ff1866e6cb5d53d24f3f7ad5d1bdca241651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1678b5a57972403ab1edf8cf6b10ff1866e6cb5d53d24f3f7ad5d1bdca241651->enter($__internal_1678b5a57972403ab1edf8cf6b10ff1866e6cb5d53d24f3f7ad5d1bdca241651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_42e383b27842febe297e6b0db166149d9a637675c0bdc234b79a2548c34de38a->leave($__internal_42e383b27842febe297e6b0db166149d9a637675c0bdc234b79a2548c34de38a_prof);

        
        $__internal_1678b5a57972403ab1edf8cf6b10ff1866e6cb5d53d24f3f7ad5d1bdca241651->leave($__internal_1678b5a57972403ab1edf8cf6b10ff1866e6cb5d53d24f3f7ad5d1bdca241651_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
