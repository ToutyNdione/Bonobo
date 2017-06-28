<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_89c916a95c48eea9bd0bbdfbbbee869f9d47c3066b96be2aabaf7f6398f79ddc extends Twig_Template
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
        $__internal_c0404f5849e78ff03571afd3e109ef526400408019723f4fd5902407a2be1bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0404f5849e78ff03571afd3e109ef526400408019723f4fd5902407a2be1bf5->enter($__internal_c0404f5849e78ff03571afd3e109ef526400408019723f4fd5902407a2be1bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_61f4c6caedb9d2a437b4e420f8b3eb7ca628cb080fe97e75d4c0fca524836353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f4c6caedb9d2a437b4e420f8b3eb7ca628cb080fe97e75d4c0fca524836353->enter($__internal_61f4c6caedb9d2a437b4e420f8b3eb7ca628cb080fe97e75d4c0fca524836353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c0404f5849e78ff03571afd3e109ef526400408019723f4fd5902407a2be1bf5->leave($__internal_c0404f5849e78ff03571afd3e109ef526400408019723f4fd5902407a2be1bf5_prof);

        
        $__internal_61f4c6caedb9d2a437b4e420f8b3eb7ca628cb080fe97e75d4c0fca524836353->leave($__internal_61f4c6caedb9d2a437b4e420f8b3eb7ca628cb080fe97e75d4c0fca524836353_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
