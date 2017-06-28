<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9d53efc76f6c8fbd8360fdf060ae33c49b2a41285a12e4d39e71494e6af250a6 extends Twig_Template
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
        $__internal_4da69ab519b8aad3ed66b66f21ea3fedce7c6136db5d25fd7c30038ab1fd747f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da69ab519b8aad3ed66b66f21ea3fedce7c6136db5d25fd7c30038ab1fd747f->enter($__internal_4da69ab519b8aad3ed66b66f21ea3fedce7c6136db5d25fd7c30038ab1fd747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bb679252eccf962314a643c4f0eabadb507c90c299909d44be641cc692ec6ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb679252eccf962314a643c4f0eabadb507c90c299909d44be641cc692ec6ddd->enter($__internal_bb679252eccf962314a643c4f0eabadb507c90c299909d44be641cc692ec6ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4da69ab519b8aad3ed66b66f21ea3fedce7c6136db5d25fd7c30038ab1fd747f->leave($__internal_4da69ab519b8aad3ed66b66f21ea3fedce7c6136db5d25fd7c30038ab1fd747f_prof);

        
        $__internal_bb679252eccf962314a643c4f0eabadb507c90c299909d44be641cc692ec6ddd->leave($__internal_bb679252eccf962314a643c4f0eabadb507c90c299909d44be641cc692ec6ddd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
