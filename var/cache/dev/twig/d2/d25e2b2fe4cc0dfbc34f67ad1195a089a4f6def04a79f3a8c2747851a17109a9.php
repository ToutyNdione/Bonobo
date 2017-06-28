<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_0cb4cd6f69ce860fc846843955b717a4229e4a44185fa77bd658cf17eec793e6 extends Twig_Template
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
        $__internal_56cc60b95b4efbec86f095aa52adcfb81f6d14c5842caaf2160f5dd7d138d8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cc60b95b4efbec86f095aa52adcfb81f6d14c5842caaf2160f5dd7d138d8de->enter($__internal_56cc60b95b4efbec86f095aa52adcfb81f6d14c5842caaf2160f5dd7d138d8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_f702b953755f45e1477087a5173c11c81cef33d3f3b451e52a1977bd4a61efe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f702b953755f45e1477087a5173c11c81cef33d3f3b451e52a1977bd4a61efe9->enter($__internal_f702b953755f45e1477087a5173c11c81cef33d3f3b451e52a1977bd4a61efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_56cc60b95b4efbec86f095aa52adcfb81f6d14c5842caaf2160f5dd7d138d8de->leave($__internal_56cc60b95b4efbec86f095aa52adcfb81f6d14c5842caaf2160f5dd7d138d8de_prof);

        
        $__internal_f702b953755f45e1477087a5173c11c81cef33d3f3b451e52a1977bd4a61efe9->leave($__internal_f702b953755f45e1477087a5173c11c81cef33d3f3b451e52a1977bd4a61efe9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
