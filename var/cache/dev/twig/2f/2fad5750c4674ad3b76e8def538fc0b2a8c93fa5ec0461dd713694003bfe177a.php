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
        $__internal_1f144ec0b7cfd944496fdb6c7201cdbb485e40291095545c1eb4911e63d2d5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f144ec0b7cfd944496fdb6c7201cdbb485e40291095545c1eb4911e63d2d5bd->enter($__internal_1f144ec0b7cfd944496fdb6c7201cdbb485e40291095545c1eb4911e63d2d5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_92475305800ed73253b59fb45bc608bdab111260f4760a5b8e2bddbe9065652b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92475305800ed73253b59fb45bc608bdab111260f4760a5b8e2bddbe9065652b->enter($__internal_92475305800ed73253b59fb45bc608bdab111260f4760a5b8e2bddbe9065652b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_1f144ec0b7cfd944496fdb6c7201cdbb485e40291095545c1eb4911e63d2d5bd->leave($__internal_1f144ec0b7cfd944496fdb6c7201cdbb485e40291095545c1eb4911e63d2d5bd_prof);

        
        $__internal_92475305800ed73253b59fb45bc608bdab111260f4760a5b8e2bddbe9065652b->leave($__internal_92475305800ed73253b59fb45bc608bdab111260f4760a5b8e2bddbe9065652b_prof);

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
