<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_264345f78078058f0203e3d1f1b3f454279ab4d309aabe1367a9eaccedd7faa7 extends Twig_Template
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
        $__internal_a3c326b4928d04fc4d4ef50cd5bf34151615cff960f19d6b51464cee34aeab11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c326b4928d04fc4d4ef50cd5bf34151615cff960f19d6b51464cee34aeab11->enter($__internal_a3c326b4928d04fc4d4ef50cd5bf34151615cff960f19d6b51464cee34aeab11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5e9e69cc608feca0859c3bb451a097e65252f2d56019e5a6a0835be331f816b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9e69cc608feca0859c3bb451a097e65252f2d56019e5a6a0835be331f816b1->enter($__internal_5e9e69cc608feca0859c3bb451a097e65252f2d56019e5a6a0835be331f816b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a3c326b4928d04fc4d4ef50cd5bf34151615cff960f19d6b51464cee34aeab11->leave($__internal_a3c326b4928d04fc4d4ef50cd5bf34151615cff960f19d6b51464cee34aeab11_prof);

        
        $__internal_5e9e69cc608feca0859c3bb451a097e65252f2d56019e5a6a0835be331f816b1->leave($__internal_5e9e69cc608feca0859c3bb451a097e65252f2d56019e5a6a0835be331f816b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
