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
        $__internal_52f8ebb184e031efa4e954464bf6edf02f2f039f00bbb9ae96f9162c17b38b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f8ebb184e031efa4e954464bf6edf02f2f039f00bbb9ae96f9162c17b38b54->enter($__internal_52f8ebb184e031efa4e954464bf6edf02f2f039f00bbb9ae96f9162c17b38b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_695cdba92363137782044e3a6d335ca40d74cbcf523d035398d274969a75ea74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695cdba92363137782044e3a6d335ca40d74cbcf523d035398d274969a75ea74->enter($__internal_695cdba92363137782044e3a6d335ca40d74cbcf523d035398d274969a75ea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f8ebb184e031efa4e954464bf6edf02f2f039f00bbb9ae96f9162c17b38b54->leave($__internal_52f8ebb184e031efa4e954464bf6edf02f2f039f00bbb9ae96f9162c17b38b54_prof);

        
        $__internal_695cdba92363137782044e3a6d335ca40d74cbcf523d035398d274969a75ea74->leave($__internal_695cdba92363137782044e3a6d335ca40d74cbcf523d035398d274969a75ea74_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_055b346db7bf4d5d89c063b9f79db26795de5b6128f6cc2275511a3c80ae5468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055b346db7bf4d5d89c063b9f79db26795de5b6128f6cc2275511a3c80ae5468->enter($__internal_055b346db7bf4d5d89c063b9f79db26795de5b6128f6cc2275511a3c80ae5468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_4a414f78d698d87e021139156b59a84180ec7114f9ba897eabb51016ab4bea20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a414f78d698d87e021139156b59a84180ec7114f9ba897eabb51016ab4bea20->enter($__internal_4a414f78d698d87e021139156b59a84180ec7114f9ba897eabb51016ab4bea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_4a414f78d698d87e021139156b59a84180ec7114f9ba897eabb51016ab4bea20->leave($__internal_4a414f78d698d87e021139156b59a84180ec7114f9ba897eabb51016ab4bea20_prof);

        
        $__internal_055b346db7bf4d5d89c063b9f79db26795de5b6128f6cc2275511a3c80ae5468->leave($__internal_055b346db7bf4d5d89c063b9f79db26795de5b6128f6cc2275511a3c80ae5468_prof);

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
