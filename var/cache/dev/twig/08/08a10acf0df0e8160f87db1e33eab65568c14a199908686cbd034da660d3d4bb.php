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
        $__internal_f3ad61a489b5466cfc9eec7952399acf2fa4303fa857a249fc8f423c55bca801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ad61a489b5466cfc9eec7952399acf2fa4303fa857a249fc8f423c55bca801->enter($__internal_f3ad61a489b5466cfc9eec7952399acf2fa4303fa857a249fc8f423c55bca801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a0fcceed623ec202b10d9b99253e5659a3d9666c4094461322210039e24e683e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fcceed623ec202b10d9b99253e5659a3d9666c4094461322210039e24e683e->enter($__internal_a0fcceed623ec202b10d9b99253e5659a3d9666c4094461322210039e24e683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f3ad61a489b5466cfc9eec7952399acf2fa4303fa857a249fc8f423c55bca801->leave($__internal_f3ad61a489b5466cfc9eec7952399acf2fa4303fa857a249fc8f423c55bca801_prof);

        
        $__internal_a0fcceed623ec202b10d9b99253e5659a3d9666c4094461322210039e24e683e->leave($__internal_a0fcceed623ec202b10d9b99253e5659a3d9666c4094461322210039e24e683e_prof);

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
