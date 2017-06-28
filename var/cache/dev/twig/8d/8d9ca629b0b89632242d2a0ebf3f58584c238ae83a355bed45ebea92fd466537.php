<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_54f4973d01f36e3e963d368d93381514bd75e2db335afd9db7518c716209a59a extends Twig_Template
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
        $__internal_8df615a3cbb48e3ff4910c4742d4855586858148be5c8ae7c5de6218445fbc32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df615a3cbb48e3ff4910c4742d4855586858148be5c8ae7c5de6218445fbc32->enter($__internal_8df615a3cbb48e3ff4910c4742d4855586858148be5c8ae7c5de6218445fbc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_70eea7ec76b6ec32295cd0279e3d8657a384c431817643fc3c2edf6ab5881ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70eea7ec76b6ec32295cd0279e3d8657a384c431817643fc3c2edf6ab5881ad1->enter($__internal_70eea7ec76b6ec32295cd0279e3d8657a384c431817643fc3c2edf6ab5881ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8df615a3cbb48e3ff4910c4742d4855586858148be5c8ae7c5de6218445fbc32->leave($__internal_8df615a3cbb48e3ff4910c4742d4855586858148be5c8ae7c5de6218445fbc32_prof);

        
        $__internal_70eea7ec76b6ec32295cd0279e3d8657a384c431817643fc3c2edf6ab5881ad1->leave($__internal_70eea7ec76b6ec32295cd0279e3d8657a384c431817643fc3c2edf6ab5881ad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
