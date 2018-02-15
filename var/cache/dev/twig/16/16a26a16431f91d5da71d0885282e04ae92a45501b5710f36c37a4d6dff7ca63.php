<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ac00dc4de5adf35bc052f4cec7ca910245d50be4299b1bdec71b392d427b7629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ccab8ebdd17a0f978109faea9103fd7ecab998d23ed3f88855ca78a14e517411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccab8ebdd17a0f978109faea9103fd7ecab998d23ed3f88855ca78a14e517411->enter($__internal_ccab8ebdd17a0f978109faea9103fd7ecab998d23ed3f88855ca78a14e517411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_61fde3d6e9c695e0bb5a5dbd448f5afa97ac311437a5fa8403023fb6b30c40ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fde3d6e9c695e0bb5a5dbd448f5afa97ac311437a5fa8403023fb6b30c40ae->enter($__internal_61fde3d6e9c695e0bb5a5dbd448f5afa97ac311437a5fa8403023fb6b30c40ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccab8ebdd17a0f978109faea9103fd7ecab998d23ed3f88855ca78a14e517411->leave($__internal_ccab8ebdd17a0f978109faea9103fd7ecab998d23ed3f88855ca78a14e517411_prof);

        
        $__internal_61fde3d6e9c695e0bb5a5dbd448f5afa97ac311437a5fa8403023fb6b30c40ae->leave($__internal_61fde3d6e9c695e0bb5a5dbd448f5afa97ac311437a5fa8403023fb6b30c40ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_243b171825d0ce88439e42d74d1b2d1b27f4d1249d3301a5d5da379ad5addc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243b171825d0ce88439e42d74d1b2d1b27f4d1249d3301a5d5da379ad5addc33->enter($__internal_243b171825d0ce88439e42d74d1b2d1b27f4d1249d3301a5d5da379ad5addc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_260a63613208ea81020db6738de3866802be44174209f4175e429d9fa8993cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260a63613208ea81020db6738de3866802be44174209f4175e429d9fa8993cbb->enter($__internal_260a63613208ea81020db6738de3866802be44174209f4175e429d9fa8993cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_260a63613208ea81020db6738de3866802be44174209f4175e429d9fa8993cbb->leave($__internal_260a63613208ea81020db6738de3866802be44174209f4175e429d9fa8993cbb_prof);

        
        $__internal_243b171825d0ce88439e42d74d1b2d1b27f4d1249d3301a5d5da379ad5addc33->leave($__internal_243b171825d0ce88439e42d74d1b2d1b27f4d1249d3301a5d5da379ad5addc33_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_524f776a4a61173ce881c5796bb06cb4884713f0eae0b5c4c19516f9bf45976f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524f776a4a61173ce881c5796bb06cb4884713f0eae0b5c4c19516f9bf45976f->enter($__internal_524f776a4a61173ce881c5796bb06cb4884713f0eae0b5c4c19516f9bf45976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f49a45d1a236eeddf85f851d00998ae8643e75a731c5045c164067bb683ea52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49a45d1a236eeddf85f851d00998ae8643e75a731c5045c164067bb683ea52a->enter($__internal_f49a45d1a236eeddf85f851d00998ae8643e75a731c5045c164067bb683ea52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f49a45d1a236eeddf85f851d00998ae8643e75a731c5045c164067bb683ea52a->leave($__internal_f49a45d1a236eeddf85f851d00998ae8643e75a731c5045c164067bb683ea52a_prof);

        
        $__internal_524f776a4a61173ce881c5796bb06cb4884713f0eae0b5c4c19516f9bf45976f->leave($__internal_524f776a4a61173ce881c5796bb06cb4884713f0eae0b5c4c19516f9bf45976f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8619a7b3d3c5fdbe197c97410fd13fad6ed183e3f06165b9a87306487ec859e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8619a7b3d3c5fdbe197c97410fd13fad6ed183e3f06165b9a87306487ec859e->enter($__internal_c8619a7b3d3c5fdbe197c97410fd13fad6ed183e3f06165b9a87306487ec859e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63feb826a41a331fa3e22134597981ac94119268799c66cca4382603808fcda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63feb826a41a331fa3e22134597981ac94119268799c66cca4382603808fcda1->enter($__internal_63feb826a41a331fa3e22134597981ac94119268799c66cca4382603808fcda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_63feb826a41a331fa3e22134597981ac94119268799c66cca4382603808fcda1->leave($__internal_63feb826a41a331fa3e22134597981ac94119268799c66cca4382603808fcda1_prof);

        
        $__internal_c8619a7b3d3c5fdbe197c97410fd13fad6ed183e3f06165b9a87306487ec859e->leave($__internal_c8619a7b3d3c5fdbe197c97410fd13fad6ed183e3f06165b9a87306487ec859e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
