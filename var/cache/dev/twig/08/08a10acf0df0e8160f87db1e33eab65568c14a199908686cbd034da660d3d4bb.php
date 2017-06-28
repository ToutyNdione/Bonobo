<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0fbff5b886f18f5639f1b885e89da12b11f6a82cc2da60cb53764eb916eb2fb4 extends Twig_Template
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
        $__internal_2d6ba9c8353a3facdc8cacfba75ea2544db757cf0310d8c14e3539de087e7a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6ba9c8353a3facdc8cacfba75ea2544db757cf0310d8c14e3539de087e7a76->enter($__internal_2d6ba9c8353a3facdc8cacfba75ea2544db757cf0310d8c14e3539de087e7a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fbedc5b107c6af0b6abb775c956f1ef83a0a1c9c0642f233bdba8ffbd3c64eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbedc5b107c6af0b6abb775c956f1ef83a0a1c9c0642f233bdba8ffbd3c64eb1->enter($__internal_fbedc5b107c6af0b6abb775c956f1ef83a0a1c9c0642f233bdba8ffbd3c64eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2d6ba9c8353a3facdc8cacfba75ea2544db757cf0310d8c14e3539de087e7a76->leave($__internal_2d6ba9c8353a3facdc8cacfba75ea2544db757cf0310d8c14e3539de087e7a76_prof);

        
        $__internal_fbedc5b107c6af0b6abb775c956f1ef83a0a1c9c0642f233bdba8ffbd3c64eb1->leave($__internal_fbedc5b107c6af0b6abb775c956f1ef83a0a1c9c0642f233bdba8ffbd3c64eb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
