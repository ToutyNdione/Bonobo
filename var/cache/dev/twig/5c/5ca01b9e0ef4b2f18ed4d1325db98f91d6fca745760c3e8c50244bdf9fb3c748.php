<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_debf8e5bb5a67a2d92a0b7c68a933f6c2f24df9bd80aab9b6cb86f8f65f4bfd9 extends Twig_Template
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
        $__internal_b1c1ef58eccb0b01d693374abe3cf36479f0cc8e9a8263dfbd9c9aa9836ec0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c1ef58eccb0b01d693374abe3cf36479f0cc8e9a8263dfbd9c9aa9836ec0f8->enter($__internal_b1c1ef58eccb0b01d693374abe3cf36479f0cc8e9a8263dfbd9c9aa9836ec0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2dc848a8c60402f71f83e77665154ccd93e8e49f7f0611c3436d7f145e7713d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc848a8c60402f71f83e77665154ccd93e8e49f7f0611c3436d7f145e7713d5->enter($__internal_2dc848a8c60402f71f83e77665154ccd93e8e49f7f0611c3436d7f145e7713d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b1c1ef58eccb0b01d693374abe3cf36479f0cc8e9a8263dfbd9c9aa9836ec0f8->leave($__internal_b1c1ef58eccb0b01d693374abe3cf36479f0cc8e9a8263dfbd9c9aa9836ec0f8_prof);

        
        $__internal_2dc848a8c60402f71f83e77665154ccd93e8e49f7f0611c3436d7f145e7713d5->leave($__internal_2dc848a8c60402f71f83e77665154ccd93e8e49f7f0611c3436d7f145e7713d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
