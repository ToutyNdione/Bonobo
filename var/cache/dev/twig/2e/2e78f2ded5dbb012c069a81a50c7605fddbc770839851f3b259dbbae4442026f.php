<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_292fbbbcf51705d790567d41514d6023b04749d27a0c5361db2e9841cde730e0 extends Twig_Template
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
        $__internal_fddd16d32d6c85501b00be53fa0db4c0fba6b6637f70b32e055665f1f743f29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddd16d32d6c85501b00be53fa0db4c0fba6b6637f70b32e055665f1f743f29d->enter($__internal_fddd16d32d6c85501b00be53fa0db4c0fba6b6637f70b32e055665f1f743f29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e2fd33ec9d21dbbaed20d3a23fbe39706fcc8a6d60c0e97869d213f34eb06f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fd33ec9d21dbbaed20d3a23fbe39706fcc8a6d60c0e97869d213f34eb06f28->enter($__internal_e2fd33ec9d21dbbaed20d3a23fbe39706fcc8a6d60c0e97869d213f34eb06f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fddd16d32d6c85501b00be53fa0db4c0fba6b6637f70b32e055665f1f743f29d->leave($__internal_fddd16d32d6c85501b00be53fa0db4c0fba6b6637f70b32e055665f1f743f29d_prof);

        
        $__internal_e2fd33ec9d21dbbaed20d3a23fbe39706fcc8a6d60c0e97869d213f34eb06f28->leave($__internal_e2fd33ec9d21dbbaed20d3a23fbe39706fcc8a6d60c0e97869d213f34eb06f28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
