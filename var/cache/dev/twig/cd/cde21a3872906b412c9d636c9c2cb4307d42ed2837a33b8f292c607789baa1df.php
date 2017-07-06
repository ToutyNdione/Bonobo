<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d3a2d0253641e6e6c6a77d79e7b24693b81be975c66e39cb336bae7b3c809e14 extends Twig_Template
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
        $__internal_1bb0f33f191def043f7076eb3ff25f9ac5c7dc8975270b45f616acc935b51838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb0f33f191def043f7076eb3ff25f9ac5c7dc8975270b45f616acc935b51838->enter($__internal_1bb0f33f191def043f7076eb3ff25f9ac5c7dc8975270b45f616acc935b51838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_32b87b3c2ad6ed935a038f63296529fa277a0c4da376a05461e33cb1b3400ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b87b3c2ad6ed935a038f63296529fa277a0c4da376a05461e33cb1b3400ed5->enter($__internal_32b87b3c2ad6ed935a038f63296529fa277a0c4da376a05461e33cb1b3400ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1bb0f33f191def043f7076eb3ff25f9ac5c7dc8975270b45f616acc935b51838->leave($__internal_1bb0f33f191def043f7076eb3ff25f9ac5c7dc8975270b45f616acc935b51838_prof);

        
        $__internal_32b87b3c2ad6ed935a038f63296529fa277a0c4da376a05461e33cb1b3400ed5->leave($__internal_32b87b3c2ad6ed935a038f63296529fa277a0c4da376a05461e33cb1b3400ed5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
