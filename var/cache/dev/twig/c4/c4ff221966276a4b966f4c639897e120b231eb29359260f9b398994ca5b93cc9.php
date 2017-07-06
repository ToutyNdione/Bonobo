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
        $__internal_dfa838761a6f4c7c1e27e9b27ac49c107629ffbd563e6d64f2b0cd3e4368a5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa838761a6f4c7c1e27e9b27ac49c107629ffbd563e6d64f2b0cd3e4368a5f2->enter($__internal_dfa838761a6f4c7c1e27e9b27ac49c107629ffbd563e6d64f2b0cd3e4368a5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ebe5261f24767f644360fc62fcf9f82267c21ebffc394fe630b3c1d74d98f56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe5261f24767f644360fc62fcf9f82267c21ebffc394fe630b3c1d74d98f56e->enter($__internal_ebe5261f24767f644360fc62fcf9f82267c21ebffc394fe630b3c1d74d98f56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dfa838761a6f4c7c1e27e9b27ac49c107629ffbd563e6d64f2b0cd3e4368a5f2->leave($__internal_dfa838761a6f4c7c1e27e9b27ac49c107629ffbd563e6d64f2b0cd3e4368a5f2_prof);

        
        $__internal_ebe5261f24767f644360fc62fcf9f82267c21ebffc394fe630b3c1d74d98f56e->leave($__internal_ebe5261f24767f644360fc62fcf9f82267c21ebffc394fe630b3c1d74d98f56e_prof);

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
