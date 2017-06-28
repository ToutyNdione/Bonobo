<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7a02132bc5059f611e066abc0e8b3d9e5f50f0aa4bfcdb4d656d9fe20ae81146 extends Twig_Template
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
        $__internal_410c3fed55a23dd5206f151731a526becb211bb1ccd3c2520e9f6e976e783431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410c3fed55a23dd5206f151731a526becb211bb1ccd3c2520e9f6e976e783431->enter($__internal_410c3fed55a23dd5206f151731a526becb211bb1ccd3c2520e9f6e976e783431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4910ceab36b366357593de6b43e6fd0a92cf981854196796a44da577b9f44fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4910ceab36b366357593de6b43e6fd0a92cf981854196796a44da577b9f44fb0->enter($__internal_4910ceab36b366357593de6b43e6fd0a92cf981854196796a44da577b9f44fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_410c3fed55a23dd5206f151731a526becb211bb1ccd3c2520e9f6e976e783431->leave($__internal_410c3fed55a23dd5206f151731a526becb211bb1ccd3c2520e9f6e976e783431_prof);

        
        $__internal_4910ceab36b366357593de6b43e6fd0a92cf981854196796a44da577b9f44fb0->leave($__internal_4910ceab36b366357593de6b43e6fd0a92cf981854196796a44da577b9f44fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
