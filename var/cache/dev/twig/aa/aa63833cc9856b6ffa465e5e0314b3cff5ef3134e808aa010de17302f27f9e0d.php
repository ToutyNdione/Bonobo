<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_7666449e8d2572653fa85930b119b191eadbf9b4ee08e9a7f913d69caee39022 extends Twig_Template
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
        $__internal_2b096ad51cf6911ec244ef5b3013114b55bf09b9ae0217d4db33b41deed47d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b096ad51cf6911ec244ef5b3013114b55bf09b9ae0217d4db33b41deed47d62->enter($__internal_2b096ad51cf6911ec244ef5b3013114b55bf09b9ae0217d4db33b41deed47d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_c8b184ba7cfccb9883ee57a01c5887a1a6ce17a986d97931fdeb4e695daeebf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b184ba7cfccb9883ee57a01c5887a1a6ce17a986d97931fdeb4e695daeebf8->enter($__internal_c8b184ba7cfccb9883ee57a01c5887a1a6ce17a986d97931fdeb4e695daeebf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_2b096ad51cf6911ec244ef5b3013114b55bf09b9ae0217d4db33b41deed47d62->leave($__internal_2b096ad51cf6911ec244ef5b3013114b55bf09b9ae0217d4db33b41deed47d62_prof);

        
        $__internal_c8b184ba7cfccb9883ee57a01c5887a1a6ce17a986d97931fdeb4e695daeebf8->leave($__internal_c8b184ba7cfccb9883ee57a01c5887a1a6ce17a986d97931fdeb4e695daeebf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
