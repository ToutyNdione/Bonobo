<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9d53efc76f6c8fbd8360fdf060ae33c49b2a41285a12e4d39e71494e6af250a6 extends Twig_Template
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
        $__internal_9672981b8299b4942c3c7d2ecd049be4c0bf171db39e7470fea9c67012c54321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9672981b8299b4942c3c7d2ecd049be4c0bf171db39e7470fea9c67012c54321->enter($__internal_9672981b8299b4942c3c7d2ecd049be4c0bf171db39e7470fea9c67012c54321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_92117035cb9425e48fb631e7f1ca433e404feb7161085bbee11694e3687730e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92117035cb9425e48fb631e7f1ca433e404feb7161085bbee11694e3687730e0->enter($__internal_92117035cb9425e48fb631e7f1ca433e404feb7161085bbee11694e3687730e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9672981b8299b4942c3c7d2ecd049be4c0bf171db39e7470fea9c67012c54321->leave($__internal_9672981b8299b4942c3c7d2ecd049be4c0bf171db39e7470fea9c67012c54321_prof);

        
        $__internal_92117035cb9425e48fb631e7f1ca433e404feb7161085bbee11694e3687730e0->leave($__internal_92117035cb9425e48fb631e7f1ca433e404feb7161085bbee11694e3687730e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
