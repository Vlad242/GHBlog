<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_750e7c553241b1c8928e23d3d0ec6a564cb268214a9dbba2f8162e0c3c12210f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750e7c553241b1c8928e23d3d0ec6a564cb268214a9dbba2f8162e0c3c12210f->enter($__internal_750e7c553241b1c8928e23d3d0ec6a564cb268214a9dbba2f8162e0c3c12210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c426c9d9d98d9b9156bd68f60f327dc1792dd5fbff484ab9f94c63c8432a83b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c426c9d9d98d9b9156bd68f60f327dc1792dd5fbff484ab9f94c63c8432a83b0->enter($__internal_c426c9d9d98d9b9156bd68f60f327dc1792dd5fbff484ab9f94c63c8432a83b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750e7c553241b1c8928e23d3d0ec6a564cb268214a9dbba2f8162e0c3c12210f->leave($__internal_750e7c553241b1c8928e23d3d0ec6a564cb268214a9dbba2f8162e0c3c12210f_prof);

        
        $__internal_c426c9d9d98d9b9156bd68f60f327dc1792dd5fbff484ab9f94c63c8432a83b0->leave($__internal_c426c9d9d98d9b9156bd68f60f327dc1792dd5fbff484ab9f94c63c8432a83b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e355902c12614a05c19c832ae3ac07db481634c0d6f767f9ac3f36f35a82bd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e355902c12614a05c19c832ae3ac07db481634c0d6f767f9ac3f36f35a82bd80->enter($__internal_e355902c12614a05c19c832ae3ac07db481634c0d6f767f9ac3f36f35a82bd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a3608d945c57057e7cd8b30c5ca065808abf1ac847327367b458d0ad4040155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3608d945c57057e7cd8b30c5ca065808abf1ac847327367b458d0ad4040155->enter($__internal_6a3608d945c57057e7cd8b30c5ca065808abf1ac847327367b458d0ad4040155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a3608d945c57057e7cd8b30c5ca065808abf1ac847327367b458d0ad4040155->leave($__internal_6a3608d945c57057e7cd8b30c5ca065808abf1ac847327367b458d0ad4040155_prof);

        
        $__internal_e355902c12614a05c19c832ae3ac07db481634c0d6f767f9ac3f36f35a82bd80->leave($__internal_e355902c12614a05c19c832ae3ac07db481634c0d6f767f9ac3f36f35a82bd80_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_810f14ef845a4f152f8fecfe759eae36ec22a9b9dd996e4fb241265a33b51732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810f14ef845a4f152f8fecfe759eae36ec22a9b9dd996e4fb241265a33b51732->enter($__internal_810f14ef845a4f152f8fecfe759eae36ec22a9b9dd996e4fb241265a33b51732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08bea0fb80210c226a1a1e8a855babb25babe4990d74f85d457e57be5c8991df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bea0fb80210c226a1a1e8a855babb25babe4990d74f85d457e57be5c8991df->enter($__internal_08bea0fb80210c226a1a1e8a855babb25babe4990d74f85d457e57be5c8991df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08bea0fb80210c226a1a1e8a855babb25babe4990d74f85d457e57be5c8991df->leave($__internal_08bea0fb80210c226a1a1e8a855babb25babe4990d74f85d457e57be5c8991df_prof);

        
        $__internal_810f14ef845a4f152f8fecfe759eae36ec22a9b9dd996e4fb241265a33b51732->leave($__internal_810f14ef845a4f152f8fecfe759eae36ec22a9b9dd996e4fb241265a33b51732_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7129bc2137113807c8300f6e42dda1cf88912a4fd15ec289898233a1bc488f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7129bc2137113807c8300f6e42dda1cf88912a4fd15ec289898233a1bc488f3d->enter($__internal_7129bc2137113807c8300f6e42dda1cf88912a4fd15ec289898233a1bc488f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_92060a42cf2caf6dbd4d09eb8bf054eeac1a7e207eab975b74151b29703b616c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92060a42cf2caf6dbd4d09eb8bf054eeac1a7e207eab975b74151b29703b616c->enter($__internal_92060a42cf2caf6dbd4d09eb8bf054eeac1a7e207eab975b74151b29703b616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92060a42cf2caf6dbd4d09eb8bf054eeac1a7e207eab975b74151b29703b616c->leave($__internal_92060a42cf2caf6dbd4d09eb8bf054eeac1a7e207eab975b74151b29703b616c_prof);

        
        $__internal_7129bc2137113807c8300f6e42dda1cf88912a4fd15ec289898233a1bc488f3d->leave($__internal_7129bc2137113807c8300f6e42dda1cf88912a4fd15ec289898233a1bc488f3d_prof);

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
