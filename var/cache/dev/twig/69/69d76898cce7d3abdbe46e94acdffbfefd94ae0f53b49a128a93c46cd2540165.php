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
        $__internal_32b6251eba61ab68a709608abb3da989b1e6bdd0263c84a2531065e6600492b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b6251eba61ab68a709608abb3da989b1e6bdd0263c84a2531065e6600492b5->enter($__internal_32b6251eba61ab68a709608abb3da989b1e6bdd0263c84a2531065e6600492b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ce987530808b22d5e51632078a579e986f51ea10783c316f0189621bcf364181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce987530808b22d5e51632078a579e986f51ea10783c316f0189621bcf364181->enter($__internal_ce987530808b22d5e51632078a579e986f51ea10783c316f0189621bcf364181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_32b6251eba61ab68a709608abb3da989b1e6bdd0263c84a2531065e6600492b5->leave($__internal_32b6251eba61ab68a709608abb3da989b1e6bdd0263c84a2531065e6600492b5_prof);

        
        $__internal_ce987530808b22d5e51632078a579e986f51ea10783c316f0189621bcf364181->leave($__internal_ce987530808b22d5e51632078a579e986f51ea10783c316f0189621bcf364181_prof);

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
