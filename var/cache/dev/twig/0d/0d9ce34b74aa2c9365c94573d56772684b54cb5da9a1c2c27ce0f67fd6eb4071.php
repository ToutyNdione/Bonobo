<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a7ef40cafac11eebbaff44ffdebc8c7252561b620626b78935f0799281b17a71 extends Twig_Template
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
        $__internal_a663ddbef60a214862757dd36b613a74bbf910e177f079e2faf15a55958ba63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a663ddbef60a214862757dd36b613a74bbf910e177f079e2faf15a55958ba63f->enter($__internal_a663ddbef60a214862757dd36b613a74bbf910e177f079e2faf15a55958ba63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_79151464efbf8b8343b83e9f2b6e10eb85ca7ce7f1e41e973ddd9420ddd245d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79151464efbf8b8343b83e9f2b6e10eb85ca7ce7f1e41e973ddd9420ddd245d7->enter($__internal_79151464efbf8b8343b83e9f2b6e10eb85ca7ce7f1e41e973ddd9420ddd245d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a663ddbef60a214862757dd36b613a74bbf910e177f079e2faf15a55958ba63f->leave($__internal_a663ddbef60a214862757dd36b613a74bbf910e177f079e2faf15a55958ba63f_prof);

        
        $__internal_79151464efbf8b8343b83e9f2b6e10eb85ca7ce7f1e41e973ddd9420ddd245d7->leave($__internal_79151464efbf8b8343b83e9f2b6e10eb85ca7ce7f1e41e973ddd9420ddd245d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
