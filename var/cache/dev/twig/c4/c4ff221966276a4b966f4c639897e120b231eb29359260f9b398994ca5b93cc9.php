<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c477a836e135cb88cbd875420797abb5a748baa5794fe60e4021da151357093d extends Twig_Template
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
        $__internal_56697c0bfdc000a90d78baa9da1417e324e79c01c32e4e8d6ff31ad765d4d3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56697c0bfdc000a90d78baa9da1417e324e79c01c32e4e8d6ff31ad765d4d3f2->enter($__internal_56697c0bfdc000a90d78baa9da1417e324e79c01c32e4e8d6ff31ad765d4d3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_26806c1e1ae106a479c67ff7828484fa95469033630653494589430a741acf9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26806c1e1ae106a479c67ff7828484fa95469033630653494589430a741acf9e->enter($__internal_26806c1e1ae106a479c67ff7828484fa95469033630653494589430a741acf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_56697c0bfdc000a90d78baa9da1417e324e79c01c32e4e8d6ff31ad765d4d3f2->leave($__internal_56697c0bfdc000a90d78baa9da1417e324e79c01c32e4e8d6ff31ad765d4d3f2_prof);

        
        $__internal_26806c1e1ae106a479c67ff7828484fa95469033630653494589430a741acf9e->leave($__internal_26806c1e1ae106a479c67ff7828484fa95469033630653494589430a741acf9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
