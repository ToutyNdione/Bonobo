<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5575cdd5d06694f81fa439b8967ded2ef5bba1db65288cf36c22a9486f9f8687 extends Twig_Template
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
        $__internal_d62ab15d6d148fcf3fa4bbd34be765db8fbe07cc5713379762f69443809f6c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62ab15d6d148fcf3fa4bbd34be765db8fbe07cc5713379762f69443809f6c98->enter($__internal_d62ab15d6d148fcf3fa4bbd34be765db8fbe07cc5713379762f69443809f6c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9fe7b60c510b863727a7b89b9ba0ac22c3b04db5994992c3a91301143b3ae010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe7b60c510b863727a7b89b9ba0ac22c3b04db5994992c3a91301143b3ae010->enter($__internal_9fe7b60c510b863727a7b89b9ba0ac22c3b04db5994992c3a91301143b3ae010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d62ab15d6d148fcf3fa4bbd34be765db8fbe07cc5713379762f69443809f6c98->leave($__internal_d62ab15d6d148fcf3fa4bbd34be765db8fbe07cc5713379762f69443809f6c98_prof);

        
        $__internal_9fe7b60c510b863727a7b89b9ba0ac22c3b04db5994992c3a91301143b3ae010->leave($__internal_9fe7b60c510b863727a7b89b9ba0ac22c3b04db5994992c3a91301143b3ae010_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
