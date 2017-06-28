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
        $__internal_a980404c072d6b07c49d9efd74b29816d496c869d77869419459cebd7017cbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a980404c072d6b07c49d9efd74b29816d496c869d77869419459cebd7017cbc5->enter($__internal_a980404c072d6b07c49d9efd74b29816d496c869d77869419459cebd7017cbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_71a5cc8dd912e3b01f8e00dadfacb8b457c177810860a248f1685878728805e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a5cc8dd912e3b01f8e00dadfacb8b457c177810860a248f1685878728805e4->enter($__internal_71a5cc8dd912e3b01f8e00dadfacb8b457c177810860a248f1685878728805e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a980404c072d6b07c49d9efd74b29816d496c869d77869419459cebd7017cbc5->leave($__internal_a980404c072d6b07c49d9efd74b29816d496c869d77869419459cebd7017cbc5_prof);

        
        $__internal_71a5cc8dd912e3b01f8e00dadfacb8b457c177810860a248f1685878728805e4->leave($__internal_71a5cc8dd912e3b01f8e00dadfacb8b457c177810860a248f1685878728805e4_prof);

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
