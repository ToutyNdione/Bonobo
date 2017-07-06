<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2537eb5e88e769e9e9b6c2b18556a444fb49289c380ba9d4eb562b5412566244 extends Twig_Template
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
        $__internal_9b5f8d084d6526ba19fa16854e5f32e9b6cc0826791fcdcd8feecb703658ec3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5f8d084d6526ba19fa16854e5f32e9b6cc0826791fcdcd8feecb703658ec3a->enter($__internal_9b5f8d084d6526ba19fa16854e5f32e9b6cc0826791fcdcd8feecb703658ec3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9a66bc2ee78188de9a54493b773f38594b7f66ef5a4ff92fd10d9be3f5a27709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a66bc2ee78188de9a54493b773f38594b7f66ef5a4ff92fd10d9be3f5a27709->enter($__internal_9a66bc2ee78188de9a54493b773f38594b7f66ef5a4ff92fd10d9be3f5a27709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9b5f8d084d6526ba19fa16854e5f32e9b6cc0826791fcdcd8feecb703658ec3a->leave($__internal_9b5f8d084d6526ba19fa16854e5f32e9b6cc0826791fcdcd8feecb703658ec3a_prof);

        
        $__internal_9a66bc2ee78188de9a54493b773f38594b7f66ef5a4ff92fd10d9be3f5a27709->leave($__internal_9a66bc2ee78188de9a54493b773f38594b7f66ef5a4ff92fd10d9be3f5a27709_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
