<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2537eb5e88e769e9e9b6c2b18556a444fb49289c380ba9d4eb562b5412566244 extends Twig_Template
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
        $__internal_0f53e05b3ec5a8bc56fdbbe52f9eef2c624b12b3e4fa6e1f01cc998f01068c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f53e05b3ec5a8bc56fdbbe52f9eef2c624b12b3e4fa6e1f01cc998f01068c0e->enter($__internal_0f53e05b3ec5a8bc56fdbbe52f9eef2c624b12b3e4fa6e1f01cc998f01068c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d8a1e7c81f59cf3b79fb6c8b4a4a6513579f16be3bbf16dbe07504baa5fdceab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a1e7c81f59cf3b79fb6c8b4a4a6513579f16be3bbf16dbe07504baa5fdceab->enter($__internal_d8a1e7c81f59cf3b79fb6c8b4a4a6513579f16be3bbf16dbe07504baa5fdceab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0f53e05b3ec5a8bc56fdbbe52f9eef2c624b12b3e4fa6e1f01cc998f01068c0e->leave($__internal_0f53e05b3ec5a8bc56fdbbe52f9eef2c624b12b3e4fa6e1f01cc998f01068c0e_prof);

        
        $__internal_d8a1e7c81f59cf3b79fb6c8b4a4a6513579f16be3bbf16dbe07504baa5fdceab->leave($__internal_d8a1e7c81f59cf3b79fb6c8b4a4a6513579f16be3bbf16dbe07504baa5fdceab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/changeme/Rendu/bonobo_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
