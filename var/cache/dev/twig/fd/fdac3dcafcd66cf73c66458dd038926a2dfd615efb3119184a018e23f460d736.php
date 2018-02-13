<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fbbbeee540d5d2013a996ec0bc5f8de695757ecf9f21741e50d744dc2ef226a7 extends Twig_Template
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
        $__internal_799db0c7b11f41fc6cd971621486c77b22e171ee52d9152ab49f2181254ddd61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799db0c7b11f41fc6cd971621486c77b22e171ee52d9152ab49f2181254ddd61->enter($__internal_799db0c7b11f41fc6cd971621486c77b22e171ee52d9152ab49f2181254ddd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f22bd9e51c8632141c3c844d98d8547ecd68e7650fc092175ff6a76a8257bb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22bd9e51c8632141c3c844d98d8547ecd68e7650fc092175ff6a76a8257bb7c->enter($__internal_f22bd9e51c8632141c3c844d98d8547ecd68e7650fc092175ff6a76a8257bb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_799db0c7b11f41fc6cd971621486c77b22e171ee52d9152ab49f2181254ddd61->leave($__internal_799db0c7b11f41fc6cd971621486c77b22e171ee52d9152ab49f2181254ddd61_prof);

        
        $__internal_f22bd9e51c8632141c3c844d98d8547ecd68e7650fc092175ff6a76a8257bb7c->leave($__internal_f22bd9e51c8632141c3c844d98d8547ecd68e7650fc092175ff6a76a8257bb7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27a60cabde043c0f37926ef188eed7dc280741fd33b6c2f8620869d3e0bc88b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a60cabde043c0f37926ef188eed7dc280741fd33b6c2f8620869d3e0bc88b0->enter($__internal_27a60cabde043c0f37926ef188eed7dc280741fd33b6c2f8620869d3e0bc88b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_acf03db82397ca639226e00acadc5bddea6b7fb1fa7f33b0d1edf3ca687146e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf03db82397ca639226e00acadc5bddea6b7fb1fa7f33b0d1edf3ca687146e6->enter($__internal_acf03db82397ca639226e00acadc5bddea6b7fb1fa7f33b0d1edf3ca687146e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_acf03db82397ca639226e00acadc5bddea6b7fb1fa7f33b0d1edf3ca687146e6->leave($__internal_acf03db82397ca639226e00acadc5bddea6b7fb1fa7f33b0d1edf3ca687146e6_prof);

        
        $__internal_27a60cabde043c0f37926ef188eed7dc280741fd33b6c2f8620869d3e0bc88b0->leave($__internal_27a60cabde043c0f37926ef188eed7dc280741fd33b6c2f8620869d3e0bc88b0_prof);

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
