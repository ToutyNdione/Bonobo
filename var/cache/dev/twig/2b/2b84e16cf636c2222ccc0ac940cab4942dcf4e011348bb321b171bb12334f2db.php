<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_594a2b01a8d79d1af45323d71bdf4776936e0432c244ceb0a77c29ff73d7f147 extends Twig_Template
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
        $__internal_c41797a7a19330a9563051a547e7b1034f38d07ace08856daaa125a8545d3dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41797a7a19330a9563051a547e7b1034f38d07ace08856daaa125a8545d3dc5->enter($__internal_c41797a7a19330a9563051a547e7b1034f38d07ace08856daaa125a8545d3dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5c29f85f617f36f13e2aa15c4698d433edb5c6c76ebd0652d8b8d7d8d5a07fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c29f85f617f36f13e2aa15c4698d433edb5c6c76ebd0652d8b8d7d8d5a07fc4->enter($__internal_5c29f85f617f36f13e2aa15c4698d433edb5c6c76ebd0652d8b8d7d8d5a07fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c41797a7a19330a9563051a547e7b1034f38d07ace08856daaa125a8545d3dc5->leave($__internal_c41797a7a19330a9563051a547e7b1034f38d07ace08856daaa125a8545d3dc5_prof);

        
        $__internal_5c29f85f617f36f13e2aa15c4698d433edb5c6c76ebd0652d8b8d7d8d5a07fc4->leave($__internal_5c29f85f617f36f13e2aa15c4698d433edb5c6c76ebd0652d8b8d7d8d5a07fc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
