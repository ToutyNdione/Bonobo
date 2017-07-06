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
        $__internal_61620b018cc9001ccd312245b9a3a4a4225e0b6b490e90d6088d75e3139ebdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61620b018cc9001ccd312245b9a3a4a4225e0b6b490e90d6088d75e3139ebdcc->enter($__internal_61620b018cc9001ccd312245b9a3a4a4225e0b6b490e90d6088d75e3139ebdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a2e56049c08db23a283bce046c3a2baf72c7156b024bdb10eaa126566e5e161c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e56049c08db23a283bce046c3a2baf72c7156b024bdb10eaa126566e5e161c->enter($__internal_a2e56049c08db23a283bce046c3a2baf72c7156b024bdb10eaa126566e5e161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_61620b018cc9001ccd312245b9a3a4a4225e0b6b490e90d6088d75e3139ebdcc->leave($__internal_61620b018cc9001ccd312245b9a3a4a4225e0b6b490e90d6088d75e3139ebdcc_prof);

        
        $__internal_a2e56049c08db23a283bce046c3a2baf72c7156b024bdb10eaa126566e5e161c->leave($__internal_a2e56049c08db23a283bce046c3a2baf72c7156b024bdb10eaa126566e5e161c_prof);

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
