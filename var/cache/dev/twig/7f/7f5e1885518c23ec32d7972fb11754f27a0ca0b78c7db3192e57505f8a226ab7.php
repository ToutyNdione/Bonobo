<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3340ab11ba7500f2d3ab826367a6f4819c97f5bd9c7273a6673e09bcbe29988e extends Twig_Template
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
        $__internal_5603afbf80fe6ba64abbe2ce4a85723db9b7eb21cc840eaa1287ed3c9fac97b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5603afbf80fe6ba64abbe2ce4a85723db9b7eb21cc840eaa1287ed3c9fac97b1->enter($__internal_5603afbf80fe6ba64abbe2ce4a85723db9b7eb21cc840eaa1287ed3c9fac97b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2668fea58e46b529c58e7a24bf8ceb22cdc6ca52312e5545d01c96fe5335e226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2668fea58e46b529c58e7a24bf8ceb22cdc6ca52312e5545d01c96fe5335e226->enter($__internal_2668fea58e46b529c58e7a24bf8ceb22cdc6ca52312e5545d01c96fe5335e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5603afbf80fe6ba64abbe2ce4a85723db9b7eb21cc840eaa1287ed3c9fac97b1->leave($__internal_5603afbf80fe6ba64abbe2ce4a85723db9b7eb21cc840eaa1287ed3c9fac97b1_prof);

        
        $__internal_2668fea58e46b529c58e7a24bf8ceb22cdc6ca52312e5545d01c96fe5335e226->leave($__internal_2668fea58e46b529c58e7a24bf8ceb22cdc6ca52312e5545d01c96fe5335e226_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
