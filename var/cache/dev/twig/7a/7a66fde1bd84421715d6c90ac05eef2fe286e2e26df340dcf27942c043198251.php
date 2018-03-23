<?php

/* @GeekBlog/Default/search.html.twig */
class __TwigTemplate_44130b6aa32afa174b37ce371803c467fe3a40d4aaec61b276f00bb6c913aaf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Default/search.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c01d664624f03930b3188444b87a82f6f5af4a2888de4610afcb3ddac1588df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c01d664624f03930b3188444b87a82f6f5af4a2888de4610afcb3ddac1588df->enter($__internal_5c01d664624f03930b3188444b87a82f6f5af4a2888de4610afcb3ddac1588df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/search.html.twig"));

        $__internal_73b212d2fb9192191d4b0a9cfa72093c35ae232b353c5abe08f90c366df00dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b212d2fb9192191d4b0a9cfa72093c35ae232b353c5abe08f90c366df00dd2->enter($__internal_73b212d2fb9192191d4b0a9cfa72093c35ae232b353c5abe08f90c366df00dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c01d664624f03930b3188444b87a82f6f5af4a2888de4610afcb3ddac1588df->leave($__internal_5c01d664624f03930b3188444b87a82f6f5af4a2888de4610afcb3ddac1588df_prof);

        
        $__internal_73b212d2fb9192191d4b0a9cfa72093c35ae232b353c5abe08f90c366df00dd2->leave($__internal_73b212d2fb9192191d4b0a9cfa72093c35ae232b353c5abe08f90c366df00dd2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d54346032af97f0393476df6fc3cede7623f04feb670fa5cc5106c5233c219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d54346032af97f0393476df6fc3cede7623f04feb670fa5cc5106c5233c219->enter($__internal_06d54346032af97f0393476df6fc3cede7623f04feb670fa5cc5106c5233c219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_043cfba2c26e7281a35a86efe6c5f515b313a0be8aa0458a80d3866ffdec5797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043cfba2c26e7281a35a86efe6c5f515b313a0be8aa0458a80d3866ffdec5797->enter($__internal_043cfba2c26e7281a35a86efe6c5f515b313a0be8aa0458a80d3866ffdec5797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
       ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_043cfba2c26e7281a35a86efe6c5f515b313a0be8aa0458a80d3866ffdec5797->leave($__internal_043cfba2c26e7281a35a86efe6c5f515b313a0be8aa0458a80d3866ffdec5797_prof);

        
        $__internal_06d54346032af97f0393476df6fc3cede7623f04feb670fa5cc5106c5233c219->leave($__internal_06d54346032af97f0393476df6fc3cede7623f04feb670fa5cc5106c5233c219_prof);

    }

    // line 9
    public function block_right($context, array $blocks = array())
    {
        $__internal_1ad2a6ddacc62da5685fcc137579ba5a662de98ee9a3b7f721c32031df7b7337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad2a6ddacc62da5685fcc137579ba5a662de98ee9a3b7f721c32031df7b7337->enter($__internal_1ad2a6ddacc62da5685fcc137579ba5a662de98ee9a3b7f721c32031df7b7337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_0fa994a78a7b764b47c5a8f306e91119c2914f48cb91a784cc636c4d81c5f3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa994a78a7b764b47c5a8f306e91119c2914f48cb91a784cc636c4d81c5f3f7->enter($__internal_0fa994a78a7b764b47c5a8f306e91119c2914f48cb91a784cc636c4d81c5f3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_0fa994a78a7b764b47c5a8f306e91119c2914f48cb91a784cc636c4d81c5f3f7->leave($__internal_0fa994a78a7b764b47c5a8f306e91119c2914f48cb91a784cc636c4d81c5f3f7_prof);

        
        $__internal_1ad2a6ddacc62da5685fcc137579ba5a662de98ee9a3b7f721c32031df7b7337->leave($__internal_1ad2a6ddacc62da5685fcc137579ba5a662de98ee9a3b7f721c32031df7b7337_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@GeekBlog/Default/base.html.twig' %}
{% block body %}
    <div class=\"well\">
       {{ form_start(form) }}
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block right %}{% endblock %}", "@GeekBlog/Default/search.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/search.html.twig");
    }
}
