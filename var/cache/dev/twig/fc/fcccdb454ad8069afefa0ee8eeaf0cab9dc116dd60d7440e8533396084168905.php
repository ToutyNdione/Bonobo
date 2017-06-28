<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_264345f78078058f0203e3d1f1b3f454279ab4d309aabe1367a9eaccedd7faa7 extends Twig_Template
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
        $__internal_5261df39798e7e5f0baea64d2c72b5390066aebb56be492dc1376ee369ec7f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5261df39798e7e5f0baea64d2c72b5390066aebb56be492dc1376ee369ec7f9a->enter($__internal_5261df39798e7e5f0baea64d2c72b5390066aebb56be492dc1376ee369ec7f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c7cb3591d84404122a54c3686330709991f46200fc181ca646b75c7cf076b215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cb3591d84404122a54c3686330709991f46200fc181ca646b75c7cf076b215->enter($__internal_c7cb3591d84404122a54c3686330709991f46200fc181ca646b75c7cf076b215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5261df39798e7e5f0baea64d2c72b5390066aebb56be492dc1376ee369ec7f9a->leave($__internal_5261df39798e7e5f0baea64d2c72b5390066aebb56be492dc1376ee369ec7f9a_prof);

        
        $__internal_c7cb3591d84404122a54c3686330709991f46200fc181ca646b75c7cf076b215->leave($__internal_c7cb3591d84404122a54c3686330709991f46200fc181ca646b75c7cf076b215_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
