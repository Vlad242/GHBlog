<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2d6e30b40ac142085b1b4759a6d0f0e4742f1de9a10186dc017e4a2dd086b16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3b783d72ffe78015dc49778bf93294990a4bd08daa4804308d4e16c2dd50b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b783d72ffe78015dc49778bf93294990a4bd08daa4804308d4e16c2dd50b7b->enter($__internal_a3b783d72ffe78015dc49778bf93294990a4bd08daa4804308d4e16c2dd50b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8713473b88c6dbedfea96a6cf2f4392ee9875835bc3959cf6fbac3aa812fb51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8713473b88c6dbedfea96a6cf2f4392ee9875835bc3959cf6fbac3aa812fb51e->enter($__internal_8713473b88c6dbedfea96a6cf2f4392ee9875835bc3959cf6fbac3aa812fb51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b783d72ffe78015dc49778bf93294990a4bd08daa4804308d4e16c2dd50b7b->leave($__internal_a3b783d72ffe78015dc49778bf93294990a4bd08daa4804308d4e16c2dd50b7b_prof);

        
        $__internal_8713473b88c6dbedfea96a6cf2f4392ee9875835bc3959cf6fbac3aa812fb51e->leave($__internal_8713473b88c6dbedfea96a6cf2f4392ee9875835bc3959cf6fbac3aa812fb51e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30567546506c8e0317a79f3191236fbe7f010d7d8d3bd7d7b469cfb7cc9950b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30567546506c8e0317a79f3191236fbe7f010d7d8d3bd7d7b469cfb7cc9950b1->enter($__internal_30567546506c8e0317a79f3191236fbe7f010d7d8d3bd7d7b469cfb7cc9950b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50d35353eddd8f9dfe9e427a6852941ca6ee08333f0bc565c9b3ae596abb8912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d35353eddd8f9dfe9e427a6852941ca6ee08333f0bc565c9b3ae596abb8912->enter($__internal_50d35353eddd8f9dfe9e427a6852941ca6ee08333f0bc565c9b3ae596abb8912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50d35353eddd8f9dfe9e427a6852941ca6ee08333f0bc565c9b3ae596abb8912->leave($__internal_50d35353eddd8f9dfe9e427a6852941ca6ee08333f0bc565c9b3ae596abb8912_prof);

        
        $__internal_30567546506c8e0317a79f3191236fbe7f010d7d8d3bd7d7b469cfb7cc9950b1->leave($__internal_30567546506c8e0317a79f3191236fbe7f010d7d8d3bd7d7b469cfb7cc9950b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd65cb14fd36a58c9fc4ef98c129888736706fe0e733a8ef39e05629edde82d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd65cb14fd36a58c9fc4ef98c129888736706fe0e733a8ef39e05629edde82d2->enter($__internal_fd65cb14fd36a58c9fc4ef98c129888736706fe0e733a8ef39e05629edde82d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c379811eb63953be0e2f77f733f09b51a572458531a4ebd86fdbdde2de35aa02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c379811eb63953be0e2f77f733f09b51a572458531a4ebd86fdbdde2de35aa02->enter($__internal_c379811eb63953be0e2f77f733f09b51a572458531a4ebd86fdbdde2de35aa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c379811eb63953be0e2f77f733f09b51a572458531a4ebd86fdbdde2de35aa02->leave($__internal_c379811eb63953be0e2f77f733f09b51a572458531a4ebd86fdbdde2de35aa02_prof);

        
        $__internal_fd65cb14fd36a58c9fc4ef98c129888736706fe0e733a8ef39e05629edde82d2->leave($__internal_fd65cb14fd36a58c9fc4ef98c129888736706fe0e733a8ef39e05629edde82d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_577a06c07ea8f731004707cb22c9d9d0910cb7cb2bc895a771ee27699db33764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577a06c07ea8f731004707cb22c9d9d0910cb7cb2bc895a771ee27699db33764->enter($__internal_577a06c07ea8f731004707cb22c9d9d0910cb7cb2bc895a771ee27699db33764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_141178b96b7a47cf921a3b8af399eedc2e79d3755513e6758e0c54f13854e223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141178b96b7a47cf921a3b8af399eedc2e79d3755513e6758e0c54f13854e223->enter($__internal_141178b96b7a47cf921a3b8af399eedc2e79d3755513e6758e0c54f13854e223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_141178b96b7a47cf921a3b8af399eedc2e79d3755513e6758e0c54f13854e223->leave($__internal_141178b96b7a47cf921a3b8af399eedc2e79d3755513e6758e0c54f13854e223_prof);

        
        $__internal_577a06c07ea8f731004707cb22c9d9d0910cb7cb2bc895a771ee27699db33764->leave($__internal_577a06c07ea8f731004707cb22c9d9d0910cb7cb2bc895a771ee27699db33764_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
