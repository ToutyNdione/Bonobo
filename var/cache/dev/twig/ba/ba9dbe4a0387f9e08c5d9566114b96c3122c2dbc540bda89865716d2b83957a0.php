<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a7d9be90ac4c8f7d509cb23a6fa258a9771ef4b4acf04a11697610e642bf75d extends Twig_Template
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
        $__internal_9ecff82e6c6cc556579c02e93e82a95ab682bdec7d7078ef26485e3bccab6a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecff82e6c6cc556579c02e93e82a95ab682bdec7d7078ef26485e3bccab6a00->enter($__internal_9ecff82e6c6cc556579c02e93e82a95ab682bdec7d7078ef26485e3bccab6a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8fe4f072a6b248b6fa8156db1f414a537161e0b913f58914a841d6326aed99e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe4f072a6b248b6fa8156db1f414a537161e0b913f58914a841d6326aed99e8->enter($__internal_8fe4f072a6b248b6fa8156db1f414a537161e0b913f58914a841d6326aed99e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9ecff82e6c6cc556579c02e93e82a95ab682bdec7d7078ef26485e3bccab6a00->leave($__internal_9ecff82e6c6cc556579c02e93e82a95ab682bdec7d7078ef26485e3bccab6a00_prof);

        
        $__internal_8fe4f072a6b248b6fa8156db1f414a537161e0b913f58914a841d6326aed99e8->leave($__internal_8fe4f072a6b248b6fa8156db1f414a537161e0b913f58914a841d6326aed99e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
