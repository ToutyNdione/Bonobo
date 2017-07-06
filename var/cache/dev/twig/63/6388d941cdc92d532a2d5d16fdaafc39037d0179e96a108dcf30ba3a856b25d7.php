<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7fe5a6ad8fa01ad323cf8c066ac7a9163f67a887863a1a6d2c64edc1ecd9e7c2 extends Twig_Template
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
        $__internal_dbde344850c91916c2cc26a9db74ee7d6a6364cea883bce55ce23ae3f1b61f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbde344850c91916c2cc26a9db74ee7d6a6364cea883bce55ce23ae3f1b61f8f->enter($__internal_dbde344850c91916c2cc26a9db74ee7d6a6364cea883bce55ce23ae3f1b61f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f25a87e655d40bf378a5f101f1030d19e05fb5424cf21830127a569edfa26df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25a87e655d40bf378a5f101f1030d19e05fb5424cf21830127a569edfa26df3->enter($__internal_f25a87e655d40bf378a5f101f1030d19e05fb5424cf21830127a569edfa26df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dbde344850c91916c2cc26a9db74ee7d6a6364cea883bce55ce23ae3f1b61f8f->leave($__internal_dbde344850c91916c2cc26a9db74ee7d6a6364cea883bce55ce23ae3f1b61f8f_prof);

        
        $__internal_f25a87e655d40bf378a5f101f1030d19e05fb5424cf21830127a569edfa26df3->leave($__internal_f25a87e655d40bf378a5f101f1030d19e05fb5424cf21830127a569edfa26df3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
