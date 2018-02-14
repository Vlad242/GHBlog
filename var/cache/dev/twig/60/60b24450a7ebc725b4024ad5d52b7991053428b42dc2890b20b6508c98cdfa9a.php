<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9573532ef13d2205e0b0708a2f124e58a8fb3ff688855225d414744aba225883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b081a5af74fdd4e9b23195a74507f2518367bfda31c0500991e0323f08ba85d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b081a5af74fdd4e9b23195a74507f2518367bfda31c0500991e0323f08ba85d2->enter($__internal_b081a5af74fdd4e9b23195a74507f2518367bfda31c0500991e0323f08ba85d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_689c0bc78c3ad1706bca1ac8e383cc0dea50a2874e2aa7391d260aea07760fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689c0bc78c3ad1706bca1ac8e383cc0dea50a2874e2aa7391d260aea07760fcd->enter($__internal_689c0bc78c3ad1706bca1ac8e383cc0dea50a2874e2aa7391d260aea07760fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b081a5af74fdd4e9b23195a74507f2518367bfda31c0500991e0323f08ba85d2->leave($__internal_b081a5af74fdd4e9b23195a74507f2518367bfda31c0500991e0323f08ba85d2_prof);

        
        $__internal_689c0bc78c3ad1706bca1ac8e383cc0dea50a2874e2aa7391d260aea07760fcd->leave($__internal_689c0bc78c3ad1706bca1ac8e383cc0dea50a2874e2aa7391d260aea07760fcd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2cf24923f91b1cde9a6279278e210cbe6e79f5c9a0d313c0e12e0826b424f0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf24923f91b1cde9a6279278e210cbe6e79f5c9a0d313c0e12e0826b424f0d7->enter($__internal_2cf24923f91b1cde9a6279278e210cbe6e79f5c9a0d313c0e12e0826b424f0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c0da6d28b9d5d11e2076bbd635f5d8eb6c1841e2036965f32c8ddddf1e018a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0da6d28b9d5d11e2076bbd635f5d8eb6c1841e2036965f32c8ddddf1e018a5d->enter($__internal_c0da6d28b9d5d11e2076bbd635f5d8eb6c1841e2036965f32c8ddddf1e018a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c0da6d28b9d5d11e2076bbd635f5d8eb6c1841e2036965f32c8ddddf1e018a5d->leave($__internal_c0da6d28b9d5d11e2076bbd635f5d8eb6c1841e2036965f32c8ddddf1e018a5d_prof);

        
        $__internal_2cf24923f91b1cde9a6279278e210cbe6e79f5c9a0d313c0e12e0826b424f0d7->leave($__internal_2cf24923f91b1cde9a6279278e210cbe6e79f5c9a0d313c0e12e0826b424f0d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
