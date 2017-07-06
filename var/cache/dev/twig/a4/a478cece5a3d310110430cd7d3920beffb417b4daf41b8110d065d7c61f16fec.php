<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_61aeb43e60dfda1459470934c7479e104b979a5aa68c811ddf8cbb040e10a06d extends Twig_Template
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
        $__internal_0051e010763dff9b2091f751c7ed7b6a8383e6c42d08075b633189cd3dd298f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0051e010763dff9b2091f751c7ed7b6a8383e6c42d08075b633189cd3dd298f6->enter($__internal_0051e010763dff9b2091f751c7ed7b6a8383e6c42d08075b633189cd3dd298f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f9fc30955a270d40da09ef46500d09103dbe41b07f3ca4f251858ae8ff35c85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fc30955a270d40da09ef46500d09103dbe41b07f3ca4f251858ae8ff35c85b->enter($__internal_f9fc30955a270d40da09ef46500d09103dbe41b07f3ca4f251858ae8ff35c85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0051e010763dff9b2091f751c7ed7b6a8383e6c42d08075b633189cd3dd298f6->leave($__internal_0051e010763dff9b2091f751c7ed7b6a8383e6c42d08075b633189cd3dd298f6_prof);

        
        $__internal_f9fc30955a270d40da09ef46500d09103dbe41b07f3ca4f251858ae8ff35c85b->leave($__internal_f9fc30955a270d40da09ef46500d09103dbe41b07f3ca4f251858ae8ff35c85b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
