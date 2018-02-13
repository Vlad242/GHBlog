<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0769a04b7402bfcd386c035bdf5786846b63532a0d9ab4dad44733fa94ba53ef extends Twig_Template
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
        $__internal_550651037d8a02ff6b26b28f76a229ea6ae29d101fae19359a1621e6cf091837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550651037d8a02ff6b26b28f76a229ea6ae29d101fae19359a1621e6cf091837->enter($__internal_550651037d8a02ff6b26b28f76a229ea6ae29d101fae19359a1621e6cf091837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e1e0596b6c1886a61b6acbeb08d6db190d79dbe2d63c94f7f0b67ece28b96a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e0596b6c1886a61b6acbeb08d6db190d79dbe2d63c94f7f0b67ece28b96a41->enter($__internal_e1e0596b6c1886a61b6acbeb08d6db190d79dbe2d63c94f7f0b67ece28b96a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_550651037d8a02ff6b26b28f76a229ea6ae29d101fae19359a1621e6cf091837->leave($__internal_550651037d8a02ff6b26b28f76a229ea6ae29d101fae19359a1621e6cf091837_prof);

        
        $__internal_e1e0596b6c1886a61b6acbeb08d6db190d79dbe2d63c94f7f0b67ece28b96a41->leave($__internal_e1e0596b6c1886a61b6acbeb08d6db190d79dbe2d63c94f7f0b67ece28b96a41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b82ffed143d547debd73f8bd5bc40d27f36efc709c06f30c9cb6c92515cc07cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82ffed143d547debd73f8bd5bc40d27f36efc709c06f30c9cb6c92515cc07cf->enter($__internal_b82ffed143d547debd73f8bd5bc40d27f36efc709c06f30c9cb6c92515cc07cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73a4677993ff5c962f9dbb4d030ffd903253b5a98c42a667ea76b758cf62acd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a4677993ff5c962f9dbb4d030ffd903253b5a98c42a667ea76b758cf62acd7->enter($__internal_73a4677993ff5c962f9dbb4d030ffd903253b5a98c42a667ea76b758cf62acd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73a4677993ff5c962f9dbb4d030ffd903253b5a98c42a667ea76b758cf62acd7->leave($__internal_73a4677993ff5c962f9dbb4d030ffd903253b5a98c42a667ea76b758cf62acd7_prof);

        
        $__internal_b82ffed143d547debd73f8bd5bc40d27f36efc709c06f30c9cb6c92515cc07cf->leave($__internal_b82ffed143d547debd73f8bd5bc40d27f36efc709c06f30c9cb6c92515cc07cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9207f421879e3f92637fd41d03de5541170b068b0fd3a64afcd415d7deae9efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9207f421879e3f92637fd41d03de5541170b068b0fd3a64afcd415d7deae9efe->enter($__internal_9207f421879e3f92637fd41d03de5541170b068b0fd3a64afcd415d7deae9efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_58bd15d7d77cda333a4f5e5665a81320234c40a579fabf7c5c623b094fd66c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bd15d7d77cda333a4f5e5665a81320234c40a579fabf7c5c623b094fd66c08->enter($__internal_58bd15d7d77cda333a4f5e5665a81320234c40a579fabf7c5c623b094fd66c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_58bd15d7d77cda333a4f5e5665a81320234c40a579fabf7c5c623b094fd66c08->leave($__internal_58bd15d7d77cda333a4f5e5665a81320234c40a579fabf7c5c623b094fd66c08_prof);

        
        $__internal_9207f421879e3f92637fd41d03de5541170b068b0fd3a64afcd415d7deae9efe->leave($__internal_9207f421879e3f92637fd41d03de5541170b068b0fd3a64afcd415d7deae9efe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9342b5b9c3015a9208675cc8fe66eb37e8db648780ed399f41ade35cb232b49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9342b5b9c3015a9208675cc8fe66eb37e8db648780ed399f41ade35cb232b49f->enter($__internal_9342b5b9c3015a9208675cc8fe66eb37e8db648780ed399f41ade35cb232b49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e8a0420193f4338db9504f1348dd9e6ce9cd09617742adffeb8a4186e430f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8a0420193f4338db9504f1348dd9e6ce9cd09617742adffeb8a4186e430f1e->enter($__internal_9e8a0420193f4338db9504f1348dd9e6ce9cd09617742adffeb8a4186e430f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e8a0420193f4338db9504f1348dd9e6ce9cd09617742adffeb8a4186e430f1e->leave($__internal_9e8a0420193f4338db9504f1348dd9e6ce9cd09617742adffeb8a4186e430f1e_prof);

        
        $__internal_9342b5b9c3015a9208675cc8fe66eb37e8db648780ed399f41ade35cb232b49f->leave($__internal_9342b5b9c3015a9208675cc8fe66eb37e8db648780ed399f41ade35cb232b49f_prof);

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
