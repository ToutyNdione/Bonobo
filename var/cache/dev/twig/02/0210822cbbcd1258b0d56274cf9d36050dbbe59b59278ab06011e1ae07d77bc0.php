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
        $__internal_e9fcfcf9ff09f1052a04797171f9779e9d8572c930b147f3d485b038cae42ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fcfcf9ff09f1052a04797171f9779e9d8572c930b147f3d485b038cae42ebe->enter($__internal_e9fcfcf9ff09f1052a04797171f9779e9d8572c930b147f3d485b038cae42ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_66fefccec184e1465c3a095f633cbd62e9747ef76daf3c7b765aa3e1eacd1e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fefccec184e1465c3a095f633cbd62e9747ef76daf3c7b765aa3e1eacd1e27->enter($__internal_66fefccec184e1465c3a095f633cbd62e9747ef76daf3c7b765aa3e1eacd1e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e9fcfcf9ff09f1052a04797171f9779e9d8572c930b147f3d485b038cae42ebe->leave($__internal_e9fcfcf9ff09f1052a04797171f9779e9d8572c930b147f3d485b038cae42ebe_prof);

        
        $__internal_66fefccec184e1465c3a095f633cbd62e9747ef76daf3c7b765aa3e1eacd1e27->leave($__internal_66fefccec184e1465c3a095f633cbd62e9747ef76daf3c7b765aa3e1eacd1e27_prof);

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
