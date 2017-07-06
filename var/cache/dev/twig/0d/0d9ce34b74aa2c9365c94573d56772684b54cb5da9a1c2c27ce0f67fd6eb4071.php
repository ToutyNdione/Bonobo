<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a7ef40cafac11eebbaff44ffdebc8c7252561b620626b78935f0799281b17a71 extends Twig_Template
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
        $__internal_36cc885bc9b5c3dc477204ee85bef328978d0c8b8d6eea1604b725083fa229b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36cc885bc9b5c3dc477204ee85bef328978d0c8b8d6eea1604b725083fa229b9->enter($__internal_36cc885bc9b5c3dc477204ee85bef328978d0c8b8d6eea1604b725083fa229b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d099c182f0c1e2498ebdd8b8068b298ce21d8adb124fe65f7b1e93a1ff70f31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d099c182f0c1e2498ebdd8b8068b298ce21d8adb124fe65f7b1e93a1ff70f31c->enter($__internal_d099c182f0c1e2498ebdd8b8068b298ce21d8adb124fe65f7b1e93a1ff70f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_36cc885bc9b5c3dc477204ee85bef328978d0c8b8d6eea1604b725083fa229b9->leave($__internal_36cc885bc9b5c3dc477204ee85bef328978d0c8b8d6eea1604b725083fa229b9_prof);

        
        $__internal_d099c182f0c1e2498ebdd8b8068b298ce21d8adb124fe65f7b1e93a1ff70f31c->leave($__internal_d099c182f0c1e2498ebdd8b8068b298ce21d8adb124fe65f7b1e93a1ff70f31c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
