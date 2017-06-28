<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_84e585cbef8028d7eea6b9840978363163df63b989c44136df256fb7cadea5bc extends Twig_Template
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
        $__internal_91552435aa25ea9991176d5ef33524fbc7a0a22d2748fa850a0cf00c54dbdcb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91552435aa25ea9991176d5ef33524fbc7a0a22d2748fa850a0cf00c54dbdcb3->enter($__internal_91552435aa25ea9991176d5ef33524fbc7a0a22d2748fa850a0cf00c54dbdcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6bf3525e91d500754e8a6d52a03b36c34b054837fcfcc5084e42851bb4b7fdb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf3525e91d500754e8a6d52a03b36c34b054837fcfcc5084e42851bb4b7fdb9->enter($__internal_6bf3525e91d500754e8a6d52a03b36c34b054837fcfcc5084e42851bb4b7fdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_91552435aa25ea9991176d5ef33524fbc7a0a22d2748fa850a0cf00c54dbdcb3->leave($__internal_91552435aa25ea9991176d5ef33524fbc7a0a22d2748fa850a0cf00c54dbdcb3_prof);

        
        $__internal_6bf3525e91d500754e8a6d52a03b36c34b054837fcfcc5084e42851bb4b7fdb9->leave($__internal_6bf3525e91d500754e8a6d52a03b36c34b054837fcfcc5084e42851bb4b7fdb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
