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
        $__internal_1d767f0d3c82192a1983dcf5a2623aa91beb3040d8863d92d8d1ce86169777da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d767f0d3c82192a1983dcf5a2623aa91beb3040d8863d92d8d1ce86169777da->enter($__internal_1d767f0d3c82192a1983dcf5a2623aa91beb3040d8863d92d8d1ce86169777da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5f016661b43e0a13fea3bbf503deef46166904b2c0dc424ef7e240b4c8779171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f016661b43e0a13fea3bbf503deef46166904b2c0dc424ef7e240b4c8779171->enter($__internal_5f016661b43e0a13fea3bbf503deef46166904b2c0dc424ef7e240b4c8779171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1d767f0d3c82192a1983dcf5a2623aa91beb3040d8863d92d8d1ce86169777da->leave($__internal_1d767f0d3c82192a1983dcf5a2623aa91beb3040d8863d92d8d1ce86169777da_prof);

        
        $__internal_5f016661b43e0a13fea3bbf503deef46166904b2c0dc424ef7e240b4c8779171->leave($__internal_5f016661b43e0a13fea3bbf503deef46166904b2c0dc424ef7e240b4c8779171_prof);

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
