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
        $__internal_31912041964edc8c89aa92860110393a127d87d24c0920b883624948f6589c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31912041964edc8c89aa92860110393a127d87d24c0920b883624948f6589c37->enter($__internal_31912041964edc8c89aa92860110393a127d87d24c0920b883624948f6589c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ca39bfdf57588fc17397f5ed03d33e0713fd4d0e07e00234b51a738cf35f3f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca39bfdf57588fc17397f5ed03d33e0713fd4d0e07e00234b51a738cf35f3f66->enter($__internal_ca39bfdf57588fc17397f5ed03d33e0713fd4d0e07e00234b51a738cf35f3f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_31912041964edc8c89aa92860110393a127d87d24c0920b883624948f6589c37->leave($__internal_31912041964edc8c89aa92860110393a127d87d24c0920b883624948f6589c37_prof);

        
        $__internal_ca39bfdf57588fc17397f5ed03d33e0713fd4d0e07e00234b51a738cf35f3f66->leave($__internal_ca39bfdf57588fc17397f5ed03d33e0713fd4d0e07e00234b51a738cf35f3f66_prof);

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
