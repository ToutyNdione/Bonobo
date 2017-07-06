<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f220b1d96f4976a86ba86ab5207af3bce7503c13f58062f994a602dcf4d07bff extends Twig_Template
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
        $__internal_de32a18d8d50c8c5951f4430c41a7787562f4e04d0cd541475598a268a9428dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de32a18d8d50c8c5951f4430c41a7787562f4e04d0cd541475598a268a9428dc->enter($__internal_de32a18d8d50c8c5951f4430c41a7787562f4e04d0cd541475598a268a9428dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_61d1868d90f4985b376d36c57c96eb46353214c5719d8c2895b6380c2866a03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d1868d90f4985b376d36c57c96eb46353214c5719d8c2895b6380c2866a03a->enter($__internal_61d1868d90f4985b376d36c57c96eb46353214c5719d8c2895b6380c2866a03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_de32a18d8d50c8c5951f4430c41a7787562f4e04d0cd541475598a268a9428dc->leave($__internal_de32a18d8d50c8c5951f4430c41a7787562f4e04d0cd541475598a268a9428dc_prof);

        
        $__internal_61d1868d90f4985b376d36c57c96eb46353214c5719d8c2895b6380c2866a03a->leave($__internal_61d1868d90f4985b376d36c57c96eb46353214c5719d8c2895b6380c2866a03a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
