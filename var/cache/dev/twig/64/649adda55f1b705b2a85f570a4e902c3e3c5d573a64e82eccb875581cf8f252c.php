<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_2c0cca1fbc31590666cebbb28327e3f7234865c95148af4438ce3eb1ee16043a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0cca1fbc31590666cebbb28327e3f7234865c95148af4438ce3eb1ee16043a->enter($__internal_2c0cca1fbc31590666cebbb28327e3f7234865c95148af4438ce3eb1ee16043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd4f359091822e3200b70bdf7d96b5be6bc30171aef8d17b5a3af9d430ce1560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4f359091822e3200b70bdf7d96b5be6bc30171aef8d17b5a3af9d430ce1560->enter($__internal_cd4f359091822e3200b70bdf7d96b5be6bc30171aef8d17b5a3af9d430ce1560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c0cca1fbc31590666cebbb28327e3f7234865c95148af4438ce3eb1ee16043a->leave($__internal_2c0cca1fbc31590666cebbb28327e3f7234865c95148af4438ce3eb1ee16043a_prof);

        
        $__internal_cd4f359091822e3200b70bdf7d96b5be6bc30171aef8d17b5a3af9d430ce1560->leave($__internal_cd4f359091822e3200b70bdf7d96b5be6bc30171aef8d17b5a3af9d430ce1560_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a4c0b25c0cf36e1fd890a28004527612497ed1316f32861951879108eff1121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4c0b25c0cf36e1fd890a28004527612497ed1316f32861951879108eff1121->enter($__internal_0a4c0b25c0cf36e1fd890a28004527612497ed1316f32861951879108eff1121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cdb5411771641fe96c6e1577a877b05cde50d2ac4743b0af493a202bb4913877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb5411771641fe96c6e1577a877b05cde50d2ac4743b0af493a202bb4913877->enter($__internal_cdb5411771641fe96c6e1577a877b05cde50d2ac4743b0af493a202bb4913877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cdb5411771641fe96c6e1577a877b05cde50d2ac4743b0af493a202bb4913877->leave($__internal_cdb5411771641fe96c6e1577a877b05cde50d2ac4743b0af493a202bb4913877_prof);

        
        $__internal_0a4c0b25c0cf36e1fd890a28004527612497ed1316f32861951879108eff1121->leave($__internal_0a4c0b25c0cf36e1fd890a28004527612497ed1316f32861951879108eff1121_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ccb29954e8cb2885d8721b657283c58584775896623b5c8430342c2ba06c997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccb29954e8cb2885d8721b657283c58584775896623b5c8430342c2ba06c997->enter($__internal_4ccb29954e8cb2885d8721b657283c58584775896623b5c8430342c2ba06c997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5972cf0b82e9dd2a5e5b73434d8eeff797923d3fc063fa8371c8b3a70c761798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5972cf0b82e9dd2a5e5b73434d8eeff797923d3fc063fa8371c8b3a70c761798->enter($__internal_5972cf0b82e9dd2a5e5b73434d8eeff797923d3fc063fa8371c8b3a70c761798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5972cf0b82e9dd2a5e5b73434d8eeff797923d3fc063fa8371c8b3a70c761798->leave($__internal_5972cf0b82e9dd2a5e5b73434d8eeff797923d3fc063fa8371c8b3a70c761798_prof);

        
        $__internal_4ccb29954e8cb2885d8721b657283c58584775896623b5c8430342c2ba06c997->leave($__internal_4ccb29954e8cb2885d8721b657283c58584775896623b5c8430342c2ba06c997_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dba7813f16e46a352c9b2a99b40acc5c0eaaefbae8701110c7eb9d43587a281f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba7813f16e46a352c9b2a99b40acc5c0eaaefbae8701110c7eb9d43587a281f->enter($__internal_dba7813f16e46a352c9b2a99b40acc5c0eaaefbae8701110c7eb9d43587a281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5e0399c675d0ed074e951f4fea620f6ed85870415019be4240788528a034772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e0399c675d0ed074e951f4fea620f6ed85870415019be4240788528a034772->enter($__internal_a5e0399c675d0ed074e951f4fea620f6ed85870415019be4240788528a034772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a5e0399c675d0ed074e951f4fea620f6ed85870415019be4240788528a034772->leave($__internal_a5e0399c675d0ed074e951f4fea620f6ed85870415019be4240788528a034772_prof);

        
        $__internal_dba7813f16e46a352c9b2a99b40acc5c0eaaefbae8701110c7eb9d43587a281f->leave($__internal_dba7813f16e46a352c9b2a99b40acc5c0eaaefbae8701110c7eb9d43587a281f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/vlad/work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
