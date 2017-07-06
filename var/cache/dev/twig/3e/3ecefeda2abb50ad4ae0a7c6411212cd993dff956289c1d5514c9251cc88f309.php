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
        $__internal_6e519a36597fc1cb50899454ad7638ff69fc23e9ba0d124585fe206cd36738b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e519a36597fc1cb50899454ad7638ff69fc23e9ba0d124585fe206cd36738b6->enter($__internal_6e519a36597fc1cb50899454ad7638ff69fc23e9ba0d124585fe206cd36738b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c0770d89395da7428336d66d1efacd012ab41dc8475bc0677d473337b66e85bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0770d89395da7428336d66d1efacd012ab41dc8475bc0677d473337b66e85bc->enter($__internal_c0770d89395da7428336d66d1efacd012ab41dc8475bc0677d473337b66e85bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6e519a36597fc1cb50899454ad7638ff69fc23e9ba0d124585fe206cd36738b6->leave($__internal_6e519a36597fc1cb50899454ad7638ff69fc23e9ba0d124585fe206cd36738b6_prof);

        
        $__internal_c0770d89395da7428336d66d1efacd012ab41dc8475bc0677d473337b66e85bc->leave($__internal_c0770d89395da7428336d66d1efacd012ab41dc8475bc0677d473337b66e85bc_prof);

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
