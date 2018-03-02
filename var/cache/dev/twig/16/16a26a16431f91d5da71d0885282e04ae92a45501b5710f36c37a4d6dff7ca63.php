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
        $__internal_2ba4d0d4b91f42429f2f16002ddb436076b2e04ce3612df38dca4f312190d960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba4d0d4b91f42429f2f16002ddb436076b2e04ce3612df38dca4f312190d960->enter($__internal_2ba4d0d4b91f42429f2f16002ddb436076b2e04ce3612df38dca4f312190d960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_787a7cdd92659173c829b6d1229ed433951e8247f470475f84468e66baaabc1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787a7cdd92659173c829b6d1229ed433951e8247f470475f84468e66baaabc1b->enter($__internal_787a7cdd92659173c829b6d1229ed433951e8247f470475f84468e66baaabc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba4d0d4b91f42429f2f16002ddb436076b2e04ce3612df38dca4f312190d960->leave($__internal_2ba4d0d4b91f42429f2f16002ddb436076b2e04ce3612df38dca4f312190d960_prof);

        
        $__internal_787a7cdd92659173c829b6d1229ed433951e8247f470475f84468e66baaabc1b->leave($__internal_787a7cdd92659173c829b6d1229ed433951e8247f470475f84468e66baaabc1b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e45754ecdbb383ac7929b5da1919b0aa31b9509125cd1dbc8bc31a76a77e78f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45754ecdbb383ac7929b5da1919b0aa31b9509125cd1dbc8bc31a76a77e78f1->enter($__internal_e45754ecdbb383ac7929b5da1919b0aa31b9509125cd1dbc8bc31a76a77e78f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_302d71f467caf1ce6efee1ebfd85b23bffe8d6491b1045945a0d29c0336f6416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302d71f467caf1ce6efee1ebfd85b23bffe8d6491b1045945a0d29c0336f6416->enter($__internal_302d71f467caf1ce6efee1ebfd85b23bffe8d6491b1045945a0d29c0336f6416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_302d71f467caf1ce6efee1ebfd85b23bffe8d6491b1045945a0d29c0336f6416->leave($__internal_302d71f467caf1ce6efee1ebfd85b23bffe8d6491b1045945a0d29c0336f6416_prof);

        
        $__internal_e45754ecdbb383ac7929b5da1919b0aa31b9509125cd1dbc8bc31a76a77e78f1->leave($__internal_e45754ecdbb383ac7929b5da1919b0aa31b9509125cd1dbc8bc31a76a77e78f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6e4e290219fd6b8fc85b8a01c4d65c56c293481ecc135cc1694c0f31fbd4415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e4e290219fd6b8fc85b8a01c4d65c56c293481ecc135cc1694c0f31fbd4415->enter($__internal_e6e4e290219fd6b8fc85b8a01c4d65c56c293481ecc135cc1694c0f31fbd4415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a13b30a620c46252bc2d08caff6bf6df27c1de6b09a4ec8014b3449b0de69384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13b30a620c46252bc2d08caff6bf6df27c1de6b09a4ec8014b3449b0de69384->enter($__internal_a13b30a620c46252bc2d08caff6bf6df27c1de6b09a4ec8014b3449b0de69384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a13b30a620c46252bc2d08caff6bf6df27c1de6b09a4ec8014b3449b0de69384->leave($__internal_a13b30a620c46252bc2d08caff6bf6df27c1de6b09a4ec8014b3449b0de69384_prof);

        
        $__internal_e6e4e290219fd6b8fc85b8a01c4d65c56c293481ecc135cc1694c0f31fbd4415->leave($__internal_e6e4e290219fd6b8fc85b8a01c4d65c56c293481ecc135cc1694c0f31fbd4415_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1be6576b236ed5e198b44a451e63d018f6a76f3621595b06f257cedc7269987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1be6576b236ed5e198b44a451e63d018f6a76f3621595b06f257cedc7269987->enter($__internal_f1be6576b236ed5e198b44a451e63d018f6a76f3621595b06f257cedc7269987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6df5326d0a511312a75a1f070b6e6f43c8015f9219e7d6f282ef435244773b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df5326d0a511312a75a1f070b6e6f43c8015f9219e7d6f282ef435244773b36->enter($__internal_6df5326d0a511312a75a1f070b6e6f43c8015f9219e7d6f282ef435244773b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6df5326d0a511312a75a1f070b6e6f43c8015f9219e7d6f282ef435244773b36->leave($__internal_6df5326d0a511312a75a1f070b6e6f43c8015f9219e7d6f282ef435244773b36_prof);

        
        $__internal_f1be6576b236ed5e198b44a451e63d018f6a76f3621595b06f257cedc7269987->leave($__internal_f1be6576b236ed5e198b44a451e63d018f6a76f3621595b06f257cedc7269987_prof);

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
