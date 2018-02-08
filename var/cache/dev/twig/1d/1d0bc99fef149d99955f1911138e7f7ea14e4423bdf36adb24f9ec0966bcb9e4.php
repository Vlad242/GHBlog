<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a072de15f25ade12a83b3ef9fc155ee5873376d37f4fe624fc423307ea8aff7b extends Twig_Template
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
        $__internal_98c19c68172a33cd60f6062124b5d2fb3183dc11d214e21161cfbca08115fb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c19c68172a33cd60f6062124b5d2fb3183dc11d214e21161cfbca08115fb5c->enter($__internal_98c19c68172a33cd60f6062124b5d2fb3183dc11d214e21161cfbca08115fb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8dfa91cb69cd35361322e2a59553b1818a7c8c0dee737a22db71ac9791e16943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfa91cb69cd35361322e2a59553b1818a7c8c0dee737a22db71ac9791e16943->enter($__internal_8dfa91cb69cd35361322e2a59553b1818a7c8c0dee737a22db71ac9791e16943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c19c68172a33cd60f6062124b5d2fb3183dc11d214e21161cfbca08115fb5c->leave($__internal_98c19c68172a33cd60f6062124b5d2fb3183dc11d214e21161cfbca08115fb5c_prof);

        
        $__internal_8dfa91cb69cd35361322e2a59553b1818a7c8c0dee737a22db71ac9791e16943->leave($__internal_8dfa91cb69cd35361322e2a59553b1818a7c8c0dee737a22db71ac9791e16943_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8a47f8e997d35fdf240338f998404ecf1e1160d6b7c5afe6c6fea445fb94b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a47f8e997d35fdf240338f998404ecf1e1160d6b7c5afe6c6fea445fb94b70->enter($__internal_e8a47f8e997d35fdf240338f998404ecf1e1160d6b7c5afe6c6fea445fb94b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7cd7e3d8357f98760a947bdcb260723cc74fb106cc5c0bfc3ed74f645ab5d11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd7e3d8357f98760a947bdcb260723cc74fb106cc5c0bfc3ed74f645ab5d11d->enter($__internal_7cd7e3d8357f98760a947bdcb260723cc74fb106cc5c0bfc3ed74f645ab5d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7cd7e3d8357f98760a947bdcb260723cc74fb106cc5c0bfc3ed74f645ab5d11d->leave($__internal_7cd7e3d8357f98760a947bdcb260723cc74fb106cc5c0bfc3ed74f645ab5d11d_prof);

        
        $__internal_e8a47f8e997d35fdf240338f998404ecf1e1160d6b7c5afe6c6fea445fb94b70->leave($__internal_e8a47f8e997d35fdf240338f998404ecf1e1160d6b7c5afe6c6fea445fb94b70_prof);

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
