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
        $__internal_f1d5104e2bf4edc1b7152408f71700876671168fb8e08fad19132111878a23f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d5104e2bf4edc1b7152408f71700876671168fb8e08fad19132111878a23f1->enter($__internal_f1d5104e2bf4edc1b7152408f71700876671168fb8e08fad19132111878a23f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3038731ff3466c5dfbdb81ae3a79b4c8d4ab73051376baa32318904b6dc2a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3038731ff3466c5dfbdb81ae3a79b4c8d4ab73051376baa32318904b6dc2a354->enter($__internal_3038731ff3466c5dfbdb81ae3a79b4c8d4ab73051376baa32318904b6dc2a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f1d5104e2bf4edc1b7152408f71700876671168fb8e08fad19132111878a23f1->leave($__internal_f1d5104e2bf4edc1b7152408f71700876671168fb8e08fad19132111878a23f1_prof);

        
        $__internal_3038731ff3466c5dfbdb81ae3a79b4c8d4ab73051376baa32318904b6dc2a354->leave($__internal_3038731ff3466c5dfbdb81ae3a79b4c8d4ab73051376baa32318904b6dc2a354_prof);

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
