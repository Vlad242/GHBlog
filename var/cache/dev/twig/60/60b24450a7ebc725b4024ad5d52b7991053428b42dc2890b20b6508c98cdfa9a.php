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
        $__internal_929d291b8a388977103e23645d051908c4f441e95f63494635c833b189a83616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929d291b8a388977103e23645d051908c4f441e95f63494635c833b189a83616->enter($__internal_929d291b8a388977103e23645d051908c4f441e95f63494635c833b189a83616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6ad5db295752bf57fd07e26e53a61245f94ea911a7a073b57dd7b1b75a0cd113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad5db295752bf57fd07e26e53a61245f94ea911a7a073b57dd7b1b75a0cd113->enter($__internal_6ad5db295752bf57fd07e26e53a61245f94ea911a7a073b57dd7b1b75a0cd113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929d291b8a388977103e23645d051908c4f441e95f63494635c833b189a83616->leave($__internal_929d291b8a388977103e23645d051908c4f441e95f63494635c833b189a83616_prof);

        
        $__internal_6ad5db295752bf57fd07e26e53a61245f94ea911a7a073b57dd7b1b75a0cd113->leave($__internal_6ad5db295752bf57fd07e26e53a61245f94ea911a7a073b57dd7b1b75a0cd113_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30e25f5286d77ea207848a1e67e778cced57535939f51b540a48a85a343490c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e25f5286d77ea207848a1e67e778cced57535939f51b540a48a85a343490c6->enter($__internal_30e25f5286d77ea207848a1e67e778cced57535939f51b540a48a85a343490c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7991499de181241bb2c43ba2b01e2a86565faeecebcbe52d1803494f3fdaa75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7991499de181241bb2c43ba2b01e2a86565faeecebcbe52d1803494f3fdaa75e->enter($__internal_7991499de181241bb2c43ba2b01e2a86565faeecebcbe52d1803494f3fdaa75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7991499de181241bb2c43ba2b01e2a86565faeecebcbe52d1803494f3fdaa75e->leave($__internal_7991499de181241bb2c43ba2b01e2a86565faeecebcbe52d1803494f3fdaa75e_prof);

        
        $__internal_30e25f5286d77ea207848a1e67e778cced57535939f51b540a48a85a343490c6->leave($__internal_30e25f5286d77ea207848a1e67e778cced57535939f51b540a48a85a343490c6_prof);

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
