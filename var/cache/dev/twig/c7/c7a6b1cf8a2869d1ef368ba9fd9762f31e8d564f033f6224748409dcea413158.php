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
        $__internal_138da6ae8f6f79e0a98ec27ccede2e4b018bfb33315c3e71db25549903e126f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138da6ae8f6f79e0a98ec27ccede2e4b018bfb33315c3e71db25549903e126f0->enter($__internal_138da6ae8f6f79e0a98ec27ccede2e4b018bfb33315c3e71db25549903e126f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_af5d9e41d672a6484fcabaf2854ae187b1f4befcbb41d889d80d89d03b2450f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5d9e41d672a6484fcabaf2854ae187b1f4befcbb41d889d80d89d03b2450f6->enter($__internal_af5d9e41d672a6484fcabaf2854ae187b1f4befcbb41d889d80d89d03b2450f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_138da6ae8f6f79e0a98ec27ccede2e4b018bfb33315c3e71db25549903e126f0->leave($__internal_138da6ae8f6f79e0a98ec27ccede2e4b018bfb33315c3e71db25549903e126f0_prof);

        
        $__internal_af5d9e41d672a6484fcabaf2854ae187b1f4befcbb41d889d80d89d03b2450f6->leave($__internal_af5d9e41d672a6484fcabaf2854ae187b1f4befcbb41d889d80d89d03b2450f6_prof);

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
