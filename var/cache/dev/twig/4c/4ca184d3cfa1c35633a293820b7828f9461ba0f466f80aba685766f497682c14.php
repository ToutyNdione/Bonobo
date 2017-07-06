<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bc9dfcc7b73f6cfb25b1b75f863bd30c0a3fadc8be94f03dd51dad63ab97b5b7 extends Twig_Template
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
        $__internal_fdccc12dfd92637a3dba1504dad6c7006725b693e9a76fba12e709c2538093a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdccc12dfd92637a3dba1504dad6c7006725b693e9a76fba12e709c2538093a5->enter($__internal_fdccc12dfd92637a3dba1504dad6c7006725b693e9a76fba12e709c2538093a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d2368db4f1f1f08e70c91cb1778a2b26b111381ea56285d884e351b0ebc59f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2368db4f1f1f08e70c91cb1778a2b26b111381ea56285d884e351b0ebc59f63->enter($__internal_d2368db4f1f1f08e70c91cb1778a2b26b111381ea56285d884e351b0ebc59f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fdccc12dfd92637a3dba1504dad6c7006725b693e9a76fba12e709c2538093a5->leave($__internal_fdccc12dfd92637a3dba1504dad6c7006725b693e9a76fba12e709c2538093a5_prof);

        
        $__internal_d2368db4f1f1f08e70c91cb1778a2b26b111381ea56285d884e351b0ebc59f63->leave($__internal_d2368db4f1f1f08e70c91cb1778a2b26b111381ea56285d884e351b0ebc59f63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
