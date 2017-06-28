<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2c0bf4be0290bf58343fcf6e7d9901b2c5d567e9db02e78c01213c99f4fcea67 extends Twig_Template
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
        $__internal_51ab277ccf3d03c5727adad5bce839157beed86321b54065b9323be5311b088b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ab277ccf3d03c5727adad5bce839157beed86321b54065b9323be5311b088b->enter($__internal_51ab277ccf3d03c5727adad5bce839157beed86321b54065b9323be5311b088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c20ab43fe404303a6d05eda922d9d9cef507bb2cbf9401672bc8ec661d71a475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20ab43fe404303a6d05eda922d9d9cef507bb2cbf9401672bc8ec661d71a475->enter($__internal_c20ab43fe404303a6d05eda922d9d9cef507bb2cbf9401672bc8ec661d71a475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_51ab277ccf3d03c5727adad5bce839157beed86321b54065b9323be5311b088b->leave($__internal_51ab277ccf3d03c5727adad5bce839157beed86321b54065b9323be5311b088b_prof);

        
        $__internal_c20ab43fe404303a6d05eda922d9d9cef507bb2cbf9401672bc8ec661d71a475->leave($__internal_c20ab43fe404303a6d05eda922d9d9cef507bb2cbf9401672bc8ec661d71a475_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
