<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_abecaba2e9f9a71d3bcf40a6259819caa19a28205ad949731ad0eafd3c966cff extends Twig_Template
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
        $__internal_5a59bb813ae11ffe290c93123042fdaaf6b958307bc13a467ae3d04d68013bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a59bb813ae11ffe290c93123042fdaaf6b958307bc13a467ae3d04d68013bf7->enter($__internal_5a59bb813ae11ffe290c93123042fdaaf6b958307bc13a467ae3d04d68013bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_08e13e8232ca7209e453893203dfdc887e10082ff2ad3d5ff3534604722ea51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e13e8232ca7209e453893203dfdc887e10082ff2ad3d5ff3534604722ea51f->enter($__internal_08e13e8232ca7209e453893203dfdc887e10082ff2ad3d5ff3534604722ea51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_5a59bb813ae11ffe290c93123042fdaaf6b958307bc13a467ae3d04d68013bf7->leave($__internal_5a59bb813ae11ffe290c93123042fdaaf6b958307bc13a467ae3d04d68013bf7_prof);

        
        $__internal_08e13e8232ca7209e453893203dfdc887e10082ff2ad3d5ff3534604722ea51f->leave($__internal_08e13e8232ca7209e453893203dfdc887e10082ff2ad3d5ff3534604722ea51f_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/vlad/Work/ghBlog/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
