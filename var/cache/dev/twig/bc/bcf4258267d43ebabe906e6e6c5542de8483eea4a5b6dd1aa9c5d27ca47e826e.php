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
        $__internal_6d445fe2c26b2b688573382043f039d482f13f78eaef3831d0238ec5e4ab33a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d445fe2c26b2b688573382043f039d482f13f78eaef3831d0238ec5e4ab33a6->enter($__internal_6d445fe2c26b2b688573382043f039d482f13f78eaef3831d0238ec5e4ab33a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_39ca4c578dbbfd7bba823f8323c6c5ef49c9162df16a0966a6785c3a9a1ef5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ca4c578dbbfd7bba823f8323c6c5ef49c9162df16a0966a6785c3a9a1ef5f3->enter($__internal_39ca4c578dbbfd7bba823f8323c6c5ef49c9162df16a0966a6785c3a9a1ef5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d445fe2c26b2b688573382043f039d482f13f78eaef3831d0238ec5e4ab33a6->leave($__internal_6d445fe2c26b2b688573382043f039d482f13f78eaef3831d0238ec5e4ab33a6_prof);

        
        $__internal_39ca4c578dbbfd7bba823f8323c6c5ef49c9162df16a0966a6785c3a9a1ef5f3->leave($__internal_39ca4c578dbbfd7bba823f8323c6c5ef49c9162df16a0966a6785c3a9a1ef5f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d425e49039e42707185469733237eb5470e63c200903af008ff6914f1defe12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d425e49039e42707185469733237eb5470e63c200903af008ff6914f1defe12->enter($__internal_9d425e49039e42707185469733237eb5470e63c200903af008ff6914f1defe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e84d0cc43148850e7f75e8ad21986ae86fc89d778ef24ad8c2e3b86ad333bcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84d0cc43148850e7f75e8ad21986ae86fc89d778ef24ad8c2e3b86ad333bcb8->enter($__internal_e84d0cc43148850e7f75e8ad21986ae86fc89d778ef24ad8c2e3b86ad333bcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e84d0cc43148850e7f75e8ad21986ae86fc89d778ef24ad8c2e3b86ad333bcb8->leave($__internal_e84d0cc43148850e7f75e8ad21986ae86fc89d778ef24ad8c2e3b86ad333bcb8_prof);

        
        $__internal_9d425e49039e42707185469733237eb5470e63c200903af008ff6914f1defe12->leave($__internal_9d425e49039e42707185469733237eb5470e63c200903af008ff6914f1defe12_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba98a808e4465fdbe9c13f1f99b9885cc9cbf9d51d68f24be232b38e97f54354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba98a808e4465fdbe9c13f1f99b9885cc9cbf9d51d68f24be232b38e97f54354->enter($__internal_ba98a808e4465fdbe9c13f1f99b9885cc9cbf9d51d68f24be232b38e97f54354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b07fa874526016f33c7397cc7c69a6bbf5ff9e69ed5591d9cafbe87e39298d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07fa874526016f33c7397cc7c69a6bbf5ff9e69ed5591d9cafbe87e39298d4f->enter($__internal_b07fa874526016f33c7397cc7c69a6bbf5ff9e69ed5591d9cafbe87e39298d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b07fa874526016f33c7397cc7c69a6bbf5ff9e69ed5591d9cafbe87e39298d4f->leave($__internal_b07fa874526016f33c7397cc7c69a6bbf5ff9e69ed5591d9cafbe87e39298d4f_prof);

        
        $__internal_ba98a808e4465fdbe9c13f1f99b9885cc9cbf9d51d68f24be232b38e97f54354->leave($__internal_ba98a808e4465fdbe9c13f1f99b9885cc9cbf9d51d68f24be232b38e97f54354_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2f7d19603704b3693fac0739b825921f19d7b55bcaaa0d383ff98c7194b9afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f7d19603704b3693fac0739b825921f19d7b55bcaaa0d383ff98c7194b9afb->enter($__internal_e2f7d19603704b3693fac0739b825921f19d7b55bcaaa0d383ff98c7194b9afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31d9a72cdde9f217e17d4149ea9c80bb3ad3dd0081ab9cf8c0e0ef139524b646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d9a72cdde9f217e17d4149ea9c80bb3ad3dd0081ab9cf8c0e0ef139524b646->enter($__internal_31d9a72cdde9f217e17d4149ea9c80bb3ad3dd0081ab9cf8c0e0ef139524b646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31d9a72cdde9f217e17d4149ea9c80bb3ad3dd0081ab9cf8c0e0ef139524b646->leave($__internal_31d9a72cdde9f217e17d4149ea9c80bb3ad3dd0081ab9cf8c0e0ef139524b646_prof);

        
        $__internal_e2f7d19603704b3693fac0739b825921f19d7b55bcaaa0d383ff98c7194b9afb->leave($__internal_e2f7d19603704b3693fac0739b825921f19d7b55bcaaa0d383ff98c7194b9afb_prof);

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
