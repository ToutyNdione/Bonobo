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
        $__internal_631e155d667f2bd314a8e40483e92e23d097649d042dc95ba4fd8fe73ba1d0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631e155d667f2bd314a8e40483e92e23d097649d042dc95ba4fd8fe73ba1d0e3->enter($__internal_631e155d667f2bd314a8e40483e92e23d097649d042dc95ba4fd8fe73ba1d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3804d10ba55bd0223b473d30715448b5f05cf69b2d4fa88c469840d1b64881cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3804d10ba55bd0223b473d30715448b5f05cf69b2d4fa88c469840d1b64881cb->enter($__internal_3804d10ba55bd0223b473d30715448b5f05cf69b2d4fa88c469840d1b64881cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_631e155d667f2bd314a8e40483e92e23d097649d042dc95ba4fd8fe73ba1d0e3->leave($__internal_631e155d667f2bd314a8e40483e92e23d097649d042dc95ba4fd8fe73ba1d0e3_prof);

        
        $__internal_3804d10ba55bd0223b473d30715448b5f05cf69b2d4fa88c469840d1b64881cb->leave($__internal_3804d10ba55bd0223b473d30715448b5f05cf69b2d4fa88c469840d1b64881cb_prof);

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
