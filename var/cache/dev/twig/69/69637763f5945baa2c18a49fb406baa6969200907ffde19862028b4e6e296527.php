<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_55dc86d7317db65905eef047b5c3a8e5362ac53f22e2967320b8a03296425f9a extends Twig_Template
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
        $__internal_d654299c7421394dc058aeb8712a309d4bd63fa03326fdd28b0007dbdfcd985c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d654299c7421394dc058aeb8712a309d4bd63fa03326fdd28b0007dbdfcd985c->enter($__internal_d654299c7421394dc058aeb8712a309d4bd63fa03326fdd28b0007dbdfcd985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2ca763d63c3250b2cae83eb7a63c2a71f50c193f24448cf3ee6cbcfec7b8797f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca763d63c3250b2cae83eb7a63c2a71f50c193f24448cf3ee6cbcfec7b8797f->enter($__internal_2ca763d63c3250b2cae83eb7a63c2a71f50c193f24448cf3ee6cbcfec7b8797f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d654299c7421394dc058aeb8712a309d4bd63fa03326fdd28b0007dbdfcd985c->leave($__internal_d654299c7421394dc058aeb8712a309d4bd63fa03326fdd28b0007dbdfcd985c_prof);

        
        $__internal_2ca763d63c3250b2cae83eb7a63c2a71f50c193f24448cf3ee6cbcfec7b8797f->leave($__internal_2ca763d63c3250b2cae83eb7a63c2a71f50c193f24448cf3ee6cbcfec7b8797f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e94c3769cc259b212fb7a329463c0749e027fa39699093ac38928f8da191a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e94c3769cc259b212fb7a329463c0749e027fa39699093ac38928f8da191a72->enter($__internal_9e94c3769cc259b212fb7a329463c0749e027fa39699093ac38928f8da191a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_980d293c404e69d6a8ce4d85543008dc296ee78530b8fc9e29f37bcaf025a91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980d293c404e69d6a8ce4d85543008dc296ee78530b8fc9e29f37bcaf025a91c->enter($__internal_980d293c404e69d6a8ce4d85543008dc296ee78530b8fc9e29f37bcaf025a91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_980d293c404e69d6a8ce4d85543008dc296ee78530b8fc9e29f37bcaf025a91c->leave($__internal_980d293c404e69d6a8ce4d85543008dc296ee78530b8fc9e29f37bcaf025a91c_prof);

        
        $__internal_9e94c3769cc259b212fb7a329463c0749e027fa39699093ac38928f8da191a72->leave($__internal_9e94c3769cc259b212fb7a329463c0749e027fa39699093ac38928f8da191a72_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47fd1d37621d92966dfdb4c04a7c689b479ef98ace589b5c9d1fcedeff6cd3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fd1d37621d92966dfdb4c04a7c689b479ef98ace589b5c9d1fcedeff6cd3eb->enter($__internal_47fd1d37621d92966dfdb4c04a7c689b479ef98ace589b5c9d1fcedeff6cd3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1ee9cac63ae234d536b1bd626959c600305e65302687a175a89c79730e7d1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ee9cac63ae234d536b1bd626959c600305e65302687a175a89c79730e7d1a5->enter($__internal_f1ee9cac63ae234d536b1bd626959c600305e65302687a175a89c79730e7d1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f1ee9cac63ae234d536b1bd626959c600305e65302687a175a89c79730e7d1a5->leave($__internal_f1ee9cac63ae234d536b1bd626959c600305e65302687a175a89c79730e7d1a5_prof);

        
        $__internal_47fd1d37621d92966dfdb4c04a7c689b479ef98ace589b5c9d1fcedeff6cd3eb->leave($__internal_47fd1d37621d92966dfdb4c04a7c689b479ef98ace589b5c9d1fcedeff6cd3eb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbefebfaaf99eb2b14c0d088d8dbfb6e3b401e0b9735eefeb3ad1d8802c38b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbefebfaaf99eb2b14c0d088d8dbfb6e3b401e0b9735eefeb3ad1d8802c38b22->enter($__internal_dbefebfaaf99eb2b14c0d088d8dbfb6e3b401e0b9735eefeb3ad1d8802c38b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_042f6a76c81d6529b0ee8ffce0b47f3bb30769ccc9a3164cfc936fdd6ad6a230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042f6a76c81d6529b0ee8ffce0b47f3bb30769ccc9a3164cfc936fdd6ad6a230->enter($__internal_042f6a76c81d6529b0ee8ffce0b47f3bb30769ccc9a3164cfc936fdd6ad6a230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_042f6a76c81d6529b0ee8ffce0b47f3bb30769ccc9a3164cfc936fdd6ad6a230->leave($__internal_042f6a76c81d6529b0ee8ffce0b47f3bb30769ccc9a3164cfc936fdd6ad6a230_prof);

        
        $__internal_dbefebfaaf99eb2b14c0d088d8dbfb6e3b401e0b9735eefeb3ad1d8802c38b22->leave($__internal_dbefebfaaf99eb2b14c0d088d8dbfb6e3b401e0b9735eefeb3ad1d8802c38b22_prof);

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
