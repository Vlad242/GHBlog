<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2d6e30b40ac142085b1b4759a6d0f0e4742f1de9a10186dc017e4a2dd086b16a extends Twig_Template
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
        $__internal_381b4e1ae74f271d23b91408ea4d328fa75fc7cb8e04810bc81e00184da05cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381b4e1ae74f271d23b91408ea4d328fa75fc7cb8e04810bc81e00184da05cae->enter($__internal_381b4e1ae74f271d23b91408ea4d328fa75fc7cb8e04810bc81e00184da05cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_98aa15404b4e6591b23b6437172681e70bcb3fbc002757963a9532221bc3419d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98aa15404b4e6591b23b6437172681e70bcb3fbc002757963a9532221bc3419d->enter($__internal_98aa15404b4e6591b23b6437172681e70bcb3fbc002757963a9532221bc3419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381b4e1ae74f271d23b91408ea4d328fa75fc7cb8e04810bc81e00184da05cae->leave($__internal_381b4e1ae74f271d23b91408ea4d328fa75fc7cb8e04810bc81e00184da05cae_prof);

        
        $__internal_98aa15404b4e6591b23b6437172681e70bcb3fbc002757963a9532221bc3419d->leave($__internal_98aa15404b4e6591b23b6437172681e70bcb3fbc002757963a9532221bc3419d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_88e9101efeca14fc26debc1652fc088ee82d71c544c0d03bdfeb87841af0d76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e9101efeca14fc26debc1652fc088ee82d71c544c0d03bdfeb87841af0d76b->enter($__internal_88e9101efeca14fc26debc1652fc088ee82d71c544c0d03bdfeb87841af0d76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_edcbe9a0caf82720269695aa80ba8993a487b8d2e113d7ac5ff2fe0b3dcea60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcbe9a0caf82720269695aa80ba8993a487b8d2e113d7ac5ff2fe0b3dcea60d->enter($__internal_edcbe9a0caf82720269695aa80ba8993a487b8d2e113d7ac5ff2fe0b3dcea60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_edcbe9a0caf82720269695aa80ba8993a487b8d2e113d7ac5ff2fe0b3dcea60d->leave($__internal_edcbe9a0caf82720269695aa80ba8993a487b8d2e113d7ac5ff2fe0b3dcea60d_prof);

        
        $__internal_88e9101efeca14fc26debc1652fc088ee82d71c544c0d03bdfeb87841af0d76b->leave($__internal_88e9101efeca14fc26debc1652fc088ee82d71c544c0d03bdfeb87841af0d76b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a7f05cea6b05bf3d5aae6803f559ab9d656df441c4bf181d92650f2b798f964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7f05cea6b05bf3d5aae6803f559ab9d656df441c4bf181d92650f2b798f964->enter($__internal_9a7f05cea6b05bf3d5aae6803f559ab9d656df441c4bf181d92650f2b798f964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_707f0600a5322722bf0017d1c71820ee55e149ded6a66d72fe0464845e7a0655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707f0600a5322722bf0017d1c71820ee55e149ded6a66d72fe0464845e7a0655->enter($__internal_707f0600a5322722bf0017d1c71820ee55e149ded6a66d72fe0464845e7a0655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_707f0600a5322722bf0017d1c71820ee55e149ded6a66d72fe0464845e7a0655->leave($__internal_707f0600a5322722bf0017d1c71820ee55e149ded6a66d72fe0464845e7a0655_prof);

        
        $__internal_9a7f05cea6b05bf3d5aae6803f559ab9d656df441c4bf181d92650f2b798f964->leave($__internal_9a7f05cea6b05bf3d5aae6803f559ab9d656df441c4bf181d92650f2b798f964_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6f298230fc6bd48ad534d7fb564f4637f67f33040dbca645df50a06bf3c362f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f298230fc6bd48ad534d7fb564f4637f67f33040dbca645df50a06bf3c362f->enter($__internal_c6f298230fc6bd48ad534d7fb564f4637f67f33040dbca645df50a06bf3c362f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1d4622c16a99a2784d4de6b17c3cea6c6a90156801e497988c2fef70ff82651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d4622c16a99a2784d4de6b17c3cea6c6a90156801e497988c2fef70ff82651->enter($__internal_b1d4622c16a99a2784d4de6b17c3cea6c6a90156801e497988c2fef70ff82651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1d4622c16a99a2784d4de6b17c3cea6c6a90156801e497988c2fef70ff82651->leave($__internal_b1d4622c16a99a2784d4de6b17c3cea6c6a90156801e497988c2fef70ff82651_prof);

        
        $__internal_c6f298230fc6bd48ad534d7fb564f4637f67f33040dbca645df50a06bf3c362f->leave($__internal_c6f298230fc6bd48ad534d7fb564f4637f67f33040dbca645df50a06bf3c362f_prof);

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
