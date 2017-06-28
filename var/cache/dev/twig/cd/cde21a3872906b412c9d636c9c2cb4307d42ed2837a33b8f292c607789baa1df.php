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
        $__internal_fa49e68c19f7a683fa089d7f5afa83c48efb3c227f11a2d8b78814666962646b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa49e68c19f7a683fa089d7f5afa83c48efb3c227f11a2d8b78814666962646b->enter($__internal_fa49e68c19f7a683fa089d7f5afa83c48efb3c227f11a2d8b78814666962646b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_be7d4fded2592c45f574875b7039e37e5c4a71111dc16a292c62b6f453c8070a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7d4fded2592c45f574875b7039e37e5c4a71111dc16a292c62b6f453c8070a->enter($__internal_be7d4fded2592c45f574875b7039e37e5c4a71111dc16a292c62b6f453c8070a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fa49e68c19f7a683fa089d7f5afa83c48efb3c227f11a2d8b78814666962646b->leave($__internal_fa49e68c19f7a683fa089d7f5afa83c48efb3c227f11a2d8b78814666962646b_prof);

        
        $__internal_be7d4fded2592c45f574875b7039e37e5c4a71111dc16a292c62b6f453c8070a->leave($__internal_be7d4fded2592c45f574875b7039e37e5c4a71111dc16a292c62b6f453c8070a_prof);

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
