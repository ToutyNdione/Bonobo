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
        $__internal_1f7ed644dc51ac70b2aebc1aab60b775a9c7561260591c99762193839fe762c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7ed644dc51ac70b2aebc1aab60b775a9c7561260591c99762193839fe762c7->enter($__internal_1f7ed644dc51ac70b2aebc1aab60b775a9c7561260591c99762193839fe762c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_08708689635456a7035e886546108500c4d17d56d5562ea3be6dbfed3ee69840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08708689635456a7035e886546108500c4d17d56d5562ea3be6dbfed3ee69840->enter($__internal_08708689635456a7035e886546108500c4d17d56d5562ea3be6dbfed3ee69840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1f7ed644dc51ac70b2aebc1aab60b775a9c7561260591c99762193839fe762c7->leave($__internal_1f7ed644dc51ac70b2aebc1aab60b775a9c7561260591c99762193839fe762c7_prof);

        
        $__internal_08708689635456a7035e886546108500c4d17d56d5562ea3be6dbfed3ee69840->leave($__internal_08708689635456a7035e886546108500c4d17d56d5562ea3be6dbfed3ee69840_prof);

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
