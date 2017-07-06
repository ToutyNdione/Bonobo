<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba35e73652e32c7bf0f6e4cc515d8e1f08248792af9fb890c686763cec2f3b25 extends Twig_Template
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
        $__internal_a9e78bf950ead3cc4f4d4c71eca0c319d21dd67ad1e17c6003adf73476ba62e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e78bf950ead3cc4f4d4c71eca0c319d21dd67ad1e17c6003adf73476ba62e9->enter($__internal_a9e78bf950ead3cc4f4d4c71eca0c319d21dd67ad1e17c6003adf73476ba62e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d0848942ec159f3b69735e459a16461c47cd66d6bb04d43620fc64c6393f136f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0848942ec159f3b69735e459a16461c47cd66d6bb04d43620fc64c6393f136f->enter($__internal_d0848942ec159f3b69735e459a16461c47cd66d6bb04d43620fc64c6393f136f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a9e78bf950ead3cc4f4d4c71eca0c319d21dd67ad1e17c6003adf73476ba62e9->leave($__internal_a9e78bf950ead3cc4f4d4c71eca0c319d21dd67ad1e17c6003adf73476ba62e9_prof);

        
        $__internal_d0848942ec159f3b69735e459a16461c47cd66d6bb04d43620fc64c6393f136f->leave($__internal_d0848942ec159f3b69735e459a16461c47cd66d6bb04d43620fc64c6393f136f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
