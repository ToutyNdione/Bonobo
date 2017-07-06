<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f999432b5b4aa907a60a17a12299715ff89fc9bf8dd464c798caa48e50b69489 extends Twig_Template
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
        $__internal_1c9523593c491ffd85d1710a322b1112451685079c3b3f569aebac5b179a6d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9523593c491ffd85d1710a322b1112451685079c3b3f569aebac5b179a6d7e->enter($__internal_1c9523593c491ffd85d1710a322b1112451685079c3b3f569aebac5b179a6d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ce045e83634937deeef4a1a7e28ed5c74a0d62581c8bcdd4b36fd7cec6f57c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce045e83634937deeef4a1a7e28ed5c74a0d62581c8bcdd4b36fd7cec6f57c9c->enter($__internal_ce045e83634937deeef4a1a7e28ed5c74a0d62581c8bcdd4b36fd7cec6f57c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1c9523593c491ffd85d1710a322b1112451685079c3b3f569aebac5b179a6d7e->leave($__internal_1c9523593c491ffd85d1710a322b1112451685079c3b3f569aebac5b179a6d7e_prof);

        
        $__internal_ce045e83634937deeef4a1a7e28ed5c74a0d62581c8bcdd4b36fd7cec6f57c9c->leave($__internal_ce045e83634937deeef4a1a7e28ed5c74a0d62581c8bcdd4b36fd7cec6f57c9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
