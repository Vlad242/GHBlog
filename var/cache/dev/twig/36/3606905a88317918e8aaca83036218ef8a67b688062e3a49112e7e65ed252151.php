<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_032d864bfebcd23bc125518391a4be3501acb08a7aa2ea7286cdbdaf2888dfc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032d864bfebcd23bc125518391a4be3501acb08a7aa2ea7286cdbdaf2888dfc9->enter($__internal_032d864bfebcd23bc125518391a4be3501acb08a7aa2ea7286cdbdaf2888dfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_322afe14c66547b9d463e5f29a84772fcbc8d40a160e43becf01dcd022f4f06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322afe14c66547b9d463e5f29a84772fcbc8d40a160e43becf01dcd022f4f06a->enter($__internal_322afe14c66547b9d463e5f29a84772fcbc8d40a160e43becf01dcd022f4f06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_032d864bfebcd23bc125518391a4be3501acb08a7aa2ea7286cdbdaf2888dfc9->leave($__internal_032d864bfebcd23bc125518391a4be3501acb08a7aa2ea7286cdbdaf2888dfc9_prof);

        
        $__internal_322afe14c66547b9d463e5f29a84772fcbc8d40a160e43becf01dcd022f4f06a->leave($__internal_322afe14c66547b9d463e5f29a84772fcbc8d40a160e43becf01dcd022f4f06a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05f320598faeb0464605a4ef9f6903b6c995c1ff4ce1ec6a90cfa008cc7dec5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f320598faeb0464605a4ef9f6903b6c995c1ff4ce1ec6a90cfa008cc7dec5d->enter($__internal_05f320598faeb0464605a4ef9f6903b6c995c1ff4ce1ec6a90cfa008cc7dec5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62aead6bab25b042c02ac3ae830774294e4082fa84afcaf3d0dda5780837f775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aead6bab25b042c02ac3ae830774294e4082fa84afcaf3d0dda5780837f775->enter($__internal_62aead6bab25b042c02ac3ae830774294e4082fa84afcaf3d0dda5780837f775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_62aead6bab25b042c02ac3ae830774294e4082fa84afcaf3d0dda5780837f775->leave($__internal_62aead6bab25b042c02ac3ae830774294e4082fa84afcaf3d0dda5780837f775_prof);

        
        $__internal_05f320598faeb0464605a4ef9f6903b6c995c1ff4ce1ec6a90cfa008cc7dec5d->leave($__internal_05f320598faeb0464605a4ef9f6903b6c995c1ff4ce1ec6a90cfa008cc7dec5d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e0ff42be445501cd09e99e38cc80b3a857f3302d0ed82c04ebf13c9a3e25a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0ff42be445501cd09e99e38cc80b3a857f3302d0ed82c04ebf13c9a3e25a32->enter($__internal_8e0ff42be445501cd09e99e38cc80b3a857f3302d0ed82c04ebf13c9a3e25a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e4935cd1c1cd44d48e504244598a24225103e2dfe8ff24c07e223a4531a569a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4935cd1c1cd44d48e504244598a24225103e2dfe8ff24c07e223a4531a569a->enter($__internal_8e4935cd1c1cd44d48e504244598a24225103e2dfe8ff24c07e223a4531a569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8e4935cd1c1cd44d48e504244598a24225103e2dfe8ff24c07e223a4531a569a->leave($__internal_8e4935cd1c1cd44d48e504244598a24225103e2dfe8ff24c07e223a4531a569a_prof);

        
        $__internal_8e0ff42be445501cd09e99e38cc80b3a857f3302d0ed82c04ebf13c9a3e25a32->leave($__internal_8e0ff42be445501cd09e99e38cc80b3a857f3302d0ed82c04ebf13c9a3e25a32_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed86bc24f1fa0ce0840be454f459f4a80d8c5ff2fa308c0959c1f256c9c429f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed86bc24f1fa0ce0840be454f459f4a80d8c5ff2fa308c0959c1f256c9c429f8->enter($__internal_ed86bc24f1fa0ce0840be454f459f4a80d8c5ff2fa308c0959c1f256c9c429f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a736c61b05b392d99a52337ae5648dbd00ffd251be73e295291c42c066757089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a736c61b05b392d99a52337ae5648dbd00ffd251be73e295291c42c066757089->enter($__internal_a736c61b05b392d99a52337ae5648dbd00ffd251be73e295291c42c066757089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a736c61b05b392d99a52337ae5648dbd00ffd251be73e295291c42c066757089->leave($__internal_a736c61b05b392d99a52337ae5648dbd00ffd251be73e295291c42c066757089_prof);

        
        $__internal_ed86bc24f1fa0ce0840be454f459f4a80d8c5ff2fa308c0959c1f256c9c429f8->leave($__internal_ed86bc24f1fa0ce0840be454f459f4a80d8c5ff2fa308c0959c1f256c9c429f8_prof);

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
