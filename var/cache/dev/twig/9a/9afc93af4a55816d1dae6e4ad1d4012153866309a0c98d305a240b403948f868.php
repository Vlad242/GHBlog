<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_19dbcf8c222443fb5b456404d92bb12a8c63c5b939a62c9ee502399843ee0592 extends Twig_Template
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
        $__internal_c3f49aab2aa52dbec53d3e2d155cc2d49a40f104e7c027f090a593fb6792660d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f49aab2aa52dbec53d3e2d155cc2d49a40f104e7c027f090a593fb6792660d->enter($__internal_c3f49aab2aa52dbec53d3e2d155cc2d49a40f104e7c027f090a593fb6792660d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8f167956a63315ff62a76115af465723ffd2cfda1f6f78305b19ec4d378dc475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f167956a63315ff62a76115af465723ffd2cfda1f6f78305b19ec4d378dc475->enter($__internal_8f167956a63315ff62a76115af465723ffd2cfda1f6f78305b19ec4d378dc475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f49aab2aa52dbec53d3e2d155cc2d49a40f104e7c027f090a593fb6792660d->leave($__internal_c3f49aab2aa52dbec53d3e2d155cc2d49a40f104e7c027f090a593fb6792660d_prof);

        
        $__internal_8f167956a63315ff62a76115af465723ffd2cfda1f6f78305b19ec4d378dc475->leave($__internal_8f167956a63315ff62a76115af465723ffd2cfda1f6f78305b19ec4d378dc475_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bbefe22283abcc079b2c1c4581ef36c6299dac65e4d8f79464e9f5157ddab5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbefe22283abcc079b2c1c4581ef36c6299dac65e4d8f79464e9f5157ddab5d->enter($__internal_2bbefe22283abcc079b2c1c4581ef36c6299dac65e4d8f79464e9f5157ddab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9c15c96d44d1439ecf49a5e86930dd769488766b23294c6e1ffdc27360308f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c15c96d44d1439ecf49a5e86930dd769488766b23294c6e1ffdc27360308f0b->enter($__internal_9c15c96d44d1439ecf49a5e86930dd769488766b23294c6e1ffdc27360308f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c15c96d44d1439ecf49a5e86930dd769488766b23294c6e1ffdc27360308f0b->leave($__internal_9c15c96d44d1439ecf49a5e86930dd769488766b23294c6e1ffdc27360308f0b_prof);

        
        $__internal_2bbefe22283abcc079b2c1c4581ef36c6299dac65e4d8f79464e9f5157ddab5d->leave($__internal_2bbefe22283abcc079b2c1c4581ef36c6299dac65e4d8f79464e9f5157ddab5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8af4015cbfab9c6b0a7706d7ffb59ee08c89da25b8e22411f3fc6db144b5c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8af4015cbfab9c6b0a7706d7ffb59ee08c89da25b8e22411f3fc6db144b5c85->enter($__internal_f8af4015cbfab9c6b0a7706d7ffb59ee08c89da25b8e22411f3fc6db144b5c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c7f27936d64e21faf774f346a4d6b995c55320f402da43d55fac59d4a7bfaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7f27936d64e21faf774f346a4d6b995c55320f402da43d55fac59d4a7bfaab->enter($__internal_4c7f27936d64e21faf774f346a4d6b995c55320f402da43d55fac59d4a7bfaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4c7f27936d64e21faf774f346a4d6b995c55320f402da43d55fac59d4a7bfaab->leave($__internal_4c7f27936d64e21faf774f346a4d6b995c55320f402da43d55fac59d4a7bfaab_prof);

        
        $__internal_f8af4015cbfab9c6b0a7706d7ffb59ee08c89da25b8e22411f3fc6db144b5c85->leave($__internal_f8af4015cbfab9c6b0a7706d7ffb59ee08c89da25b8e22411f3fc6db144b5c85_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da7a9706ca34b29538aca496af8d3890aca366154173a4c1e8e8877b0a5a2b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7a9706ca34b29538aca496af8d3890aca366154173a4c1e8e8877b0a5a2b78->enter($__internal_da7a9706ca34b29538aca496af8d3890aca366154173a4c1e8e8877b0a5a2b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39fd5642bb22fea6dfde1536dd2290b419bf02715c75d6e52dd92f861172150c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fd5642bb22fea6dfde1536dd2290b419bf02715c75d6e52dd92f861172150c->enter($__internal_39fd5642bb22fea6dfde1536dd2290b419bf02715c75d6e52dd92f861172150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39fd5642bb22fea6dfde1536dd2290b419bf02715c75d6e52dd92f861172150c->leave($__internal_39fd5642bb22fea6dfde1536dd2290b419bf02715c75d6e52dd92f861172150c_prof);

        
        $__internal_da7a9706ca34b29538aca496af8d3890aca366154173a4c1e8e8877b0a5a2b78->leave($__internal_da7a9706ca34b29538aca496af8d3890aca366154173a4c1e8e8877b0a5a2b78_prof);

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
