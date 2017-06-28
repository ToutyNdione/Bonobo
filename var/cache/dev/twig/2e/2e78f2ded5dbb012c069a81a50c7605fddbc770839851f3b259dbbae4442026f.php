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
        $__internal_49e8ae46c6bed2845d10d4c1e8e54e90885cf72b01fd8dfb1067895b1f482e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e8ae46c6bed2845d10d4c1e8e54e90885cf72b01fd8dfb1067895b1f482e23->enter($__internal_49e8ae46c6bed2845d10d4c1e8e54e90885cf72b01fd8dfb1067895b1f482e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_cf1ab72686607b5b154feb648d86e395f9fe232e60da6a7aeccb973a262c5491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1ab72686607b5b154feb648d86e395f9fe232e60da6a7aeccb973a262c5491->enter($__internal_cf1ab72686607b5b154feb648d86e395f9fe232e60da6a7aeccb973a262c5491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_49e8ae46c6bed2845d10d4c1e8e54e90885cf72b01fd8dfb1067895b1f482e23->leave($__internal_49e8ae46c6bed2845d10d4c1e8e54e90885cf72b01fd8dfb1067895b1f482e23_prof);

        
        $__internal_cf1ab72686607b5b154feb648d86e395f9fe232e60da6a7aeccb973a262c5491->leave($__internal_cf1ab72686607b5b154feb648d86e395f9fe232e60da6a7aeccb973a262c5491_prof);

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
