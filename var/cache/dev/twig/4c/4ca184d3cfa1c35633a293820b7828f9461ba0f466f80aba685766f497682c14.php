<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bc9dfcc7b73f6cfb25b1b75f863bd30c0a3fadc8be94f03dd51dad63ab97b5b7 extends Twig_Template
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
        $__internal_85e212944310d97d37352bde24440cca117ebadbf635929fab664179f25638c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e212944310d97d37352bde24440cca117ebadbf635929fab664179f25638c2->enter($__internal_85e212944310d97d37352bde24440cca117ebadbf635929fab664179f25638c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c6ea0395fa24b8c97272398ae8eeb34abba7a3cb5d8fd169ec2ea63fdd13eb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ea0395fa24b8c97272398ae8eeb34abba7a3cb5d8fd169ec2ea63fdd13eb72->enter($__internal_c6ea0395fa24b8c97272398ae8eeb34abba7a3cb5d8fd169ec2ea63fdd13eb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_85e212944310d97d37352bde24440cca117ebadbf635929fab664179f25638c2->leave($__internal_85e212944310d97d37352bde24440cca117ebadbf635929fab664179f25638c2_prof);

        
        $__internal_c6ea0395fa24b8c97272398ae8eeb34abba7a3cb5d8fd169ec2ea63fdd13eb72->leave($__internal_c6ea0395fa24b8c97272398ae8eeb34abba7a3cb5d8fd169ec2ea63fdd13eb72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
