<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_2643aa84436c395fa475c55fffd99d4c55b459143962cb825bbe2f8489f1a0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dc134e4de5b1f3d4ed85c392638825223170c2137c8b189017b9641a253dfe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc134e4de5b1f3d4ed85c392638825223170c2137c8b189017b9641a253dfe7->enter($__internal_7dc134e4de5b1f3d4ed85c392638825223170c2137c8b189017b9641a253dfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_8d7003e5486b91589c0e339cd71bc67168b28dc12033a23bad937c656fb371ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7003e5486b91589c0e339cd71bc67168b28dc12033a23bad937c656fb371ac->enter($__internal_8d7003e5486b91589c0e339cd71bc67168b28dc12033a23bad937c656fb371ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc134e4de5b1f3d4ed85c392638825223170c2137c8b189017b9641a253dfe7->leave($__internal_7dc134e4de5b1f3d4ed85c392638825223170c2137c8b189017b9641a253dfe7_prof);

        
        $__internal_8d7003e5486b91589c0e339cd71bc67168b28dc12033a23bad937c656fb371ac->leave($__internal_8d7003e5486b91589c0e339cd71bc67168b28dc12033a23bad937c656fb371ac_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_99ba8ee9cff2910232ee8a6145ff611e18787f1c4d60fad71defa9637da1b9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ba8ee9cff2910232ee8a6145ff611e18787f1c4d60fad71defa9637da1b9e0->enter($__internal_99ba8ee9cff2910232ee8a6145ff611e18787f1c4d60fad71defa9637da1b9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_76986a7b293ca58b5e6a6e44b9ab5b1df81e5f0a19e06c1f902546a64059dad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76986a7b293ca58b5e6a6e44b9ab5b1df81e5f0a19e06c1f902546a64059dad2->enter($__internal_76986a7b293ca58b5e6a6e44b9ab5b1df81e5f0a19e06c1f902546a64059dad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_76986a7b293ca58b5e6a6e44b9ab5b1df81e5f0a19e06c1f902546a64059dad2->leave($__internal_76986a7b293ca58b5e6a6e44b9ab5b1df81e5f0a19e06c1f902546a64059dad2_prof);

        
        $__internal_99ba8ee9cff2910232ee8a6145ff611e18787f1c4d60fad71defa9637da1b9e0->leave($__internal_99ba8ee9cff2910232ee8a6145ff611e18787f1c4d60fad71defa9637da1b9e0_prof);

    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "@KnpMenu/menu.html.twig", "/home/vlad/Work/ghBlog/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
