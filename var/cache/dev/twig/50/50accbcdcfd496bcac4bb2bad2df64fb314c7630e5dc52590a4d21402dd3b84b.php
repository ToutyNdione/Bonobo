<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cfe50e9bfbfb7246f8638d0a12a8c8112736197e19a61e2a772fecdee67a1d64 extends Twig_Template
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
        $__internal_571cb6902c1a3098a7acfef349df31974d782a7b3744ed1a1c6efc755b6ee25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571cb6902c1a3098a7acfef349df31974d782a7b3744ed1a1c6efc755b6ee25b->enter($__internal_571cb6902c1a3098a7acfef349df31974d782a7b3744ed1a1c6efc755b6ee25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d5965bcd15501b6d0516456296cf451cf2123c56c274bbbaf8a6b36c3f5b0377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5965bcd15501b6d0516456296cf451cf2123c56c274bbbaf8a6b36c3f5b0377->enter($__internal_d5965bcd15501b6d0516456296cf451cf2123c56c274bbbaf8a6b36c3f5b0377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_571cb6902c1a3098a7acfef349df31974d782a7b3744ed1a1c6efc755b6ee25b->leave($__internal_571cb6902c1a3098a7acfef349df31974d782a7b3744ed1a1c6efc755b6ee25b_prof);

        
        $__internal_d5965bcd15501b6d0516456296cf451cf2123c56c274bbbaf8a6b36c3f5b0377->leave($__internal_d5965bcd15501b6d0516456296cf451cf2123c56c274bbbaf8a6b36c3f5b0377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
