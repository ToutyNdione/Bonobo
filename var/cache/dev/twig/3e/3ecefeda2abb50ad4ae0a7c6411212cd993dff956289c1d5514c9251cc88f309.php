<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a2c4b10a48cc4dfde66f2fb516f9527ea093d840376ae78f19adac503c82b6ba extends Twig_Template
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
        $__internal_e6d7452c8d46c7b7442605aaad573da41b3b107462ec4969b402883a04cf6a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d7452c8d46c7b7442605aaad573da41b3b107462ec4969b402883a04cf6a27->enter($__internal_e6d7452c8d46c7b7442605aaad573da41b3b107462ec4969b402883a04cf6a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c2f4f06eb120e77a8e030f499bc233136526d1281567a0dd764b3aaa7cec827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f4f06eb120e77a8e030f499bc233136526d1281567a0dd764b3aaa7cec827b->enter($__internal_c2f4f06eb120e77a8e030f499bc233136526d1281567a0dd764b3aaa7cec827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e6d7452c8d46c7b7442605aaad573da41b3b107462ec4969b402883a04cf6a27->leave($__internal_e6d7452c8d46c7b7442605aaad573da41b3b107462ec4969b402883a04cf6a27_prof);

        
        $__internal_c2f4f06eb120e77a8e030f499bc233136526d1281567a0dd764b3aaa7cec827b->leave($__internal_c2f4f06eb120e77a8e030f499bc233136526d1281567a0dd764b3aaa7cec827b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
