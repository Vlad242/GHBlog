<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_730e61a5215ffe8915dedf4cd77756eb2864083962886d9c5521a92150b3cc97 extends Twig_Template
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
        $__internal_12cbf63a983e41a5333a9f372dabdebc4e9cfaca3bad50ef69cc410cf312b64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cbf63a983e41a5333a9f372dabdebc4e9cfaca3bad50ef69cc410cf312b64b->enter($__internal_12cbf63a983e41a5333a9f372dabdebc4e9cfaca3bad50ef69cc410cf312b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_3cb42685a8d80c74ccbbbb46a4b0dee1febb3b0b0836e334c69744dc10cb4aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb42685a8d80c74ccbbbb46a4b0dee1febb3b0b0836e334c69744dc10cb4aa2->enter($__internal_3cb42685a8d80c74ccbbbb46a4b0dee1febb3b0b0836e334c69744dc10cb4aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12cbf63a983e41a5333a9f372dabdebc4e9cfaca3bad50ef69cc410cf312b64b->leave($__internal_12cbf63a983e41a5333a9f372dabdebc4e9cfaca3bad50ef69cc410cf312b64b_prof);

        
        $__internal_3cb42685a8d80c74ccbbbb46a4b0dee1febb3b0b0836e334c69744dc10cb4aa2->leave($__internal_3cb42685a8d80c74ccbbbb46a4b0dee1febb3b0b0836e334c69744dc10cb4aa2_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_9b8826c6e65268805de8ca932f3f5a668554967eb789de6938f19be019a40c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8826c6e65268805de8ca932f3f5a668554967eb789de6938f19be019a40c83->enter($__internal_9b8826c6e65268805de8ca932f3f5a668554967eb789de6938f19be019a40c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_4e1293d1578b0348017d773ed2d05bd453b1f863e501f207e6fecb3218c75de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1293d1578b0348017d773ed2d05bd453b1f863e501f207e6fecb3218c75de3->enter($__internal_4e1293d1578b0348017d773ed2d05bd453b1f863e501f207e6fecb3218c75de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_4e1293d1578b0348017d773ed2d05bd453b1f863e501f207e6fecb3218c75de3->leave($__internal_4e1293d1578b0348017d773ed2d05bd453b1f863e501f207e6fecb3218c75de3_prof);

        
        $__internal_9b8826c6e65268805de8ca932f3f5a668554967eb789de6938f19be019a40c83->leave($__internal_9b8826c6e65268805de8ca932f3f5a668554967eb789de6938f19be019a40c83_prof);

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
