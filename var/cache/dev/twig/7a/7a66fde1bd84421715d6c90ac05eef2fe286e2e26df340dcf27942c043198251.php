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
        $__internal_c35fb8e129cf299cc663764a1084bcddbe8a95c5852e4b43121db085ac9dd3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35fb8e129cf299cc663764a1084bcddbe8a95c5852e4b43121db085ac9dd3bf->enter($__internal_c35fb8e129cf299cc663764a1084bcddbe8a95c5852e4b43121db085ac9dd3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/search.html.twig"));

        $__internal_e1492e3d455d65e046ac5a05d0ffe5a405c5ffa1352c8b3ae6a7e9076bde5a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1492e3d455d65e046ac5a05d0ffe5a405c5ffa1352c8b3ae6a7e9076bde5a7f->enter($__internal_e1492e3d455d65e046ac5a05d0ffe5a405c5ffa1352c8b3ae6a7e9076bde5a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35fb8e129cf299cc663764a1084bcddbe8a95c5852e4b43121db085ac9dd3bf->leave($__internal_c35fb8e129cf299cc663764a1084bcddbe8a95c5852e4b43121db085ac9dd3bf_prof);

        
        $__internal_e1492e3d455d65e046ac5a05d0ffe5a405c5ffa1352c8b3ae6a7e9076bde5a7f->leave($__internal_e1492e3d455d65e046ac5a05d0ffe5a405c5ffa1352c8b3ae6a7e9076bde5a7f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1deb1dcb32de1ec038de45cf78968381fd0b6320ade69d0eafd0d5f50ce204a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deb1dcb32de1ec038de45cf78968381fd0b6320ade69d0eafd0d5f50ce204a1->enter($__internal_1deb1dcb32de1ec038de45cf78968381fd0b6320ade69d0eafd0d5f50ce204a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c70a169d31dd156c123c9c50dc634fe65bdb26cdede8d51131d54338cfbfe4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c70a169d31dd156c123c9c50dc634fe65bdb26cdede8d51131d54338cfbfe4e->enter($__internal_8c70a169d31dd156c123c9c50dc634fe65bdb26cdede8d51131d54338cfbfe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c70a169d31dd156c123c9c50dc634fe65bdb26cdede8d51131d54338cfbfe4e->leave($__internal_8c70a169d31dd156c123c9c50dc634fe65bdb26cdede8d51131d54338cfbfe4e_prof);

        
        $__internal_1deb1dcb32de1ec038de45cf78968381fd0b6320ade69d0eafd0d5f50ce204a1->leave($__internal_1deb1dcb32de1ec038de45cf78968381fd0b6320ade69d0eafd0d5f50ce204a1_prof);

    }

    // line 9
    public function block_right($context, array $blocks = array())
    {
        $__internal_c4fb535cfb65e9cc44c6ffde127ef831133cfcc5ad4b5d15042ff23e05ad8fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4fb535cfb65e9cc44c6ffde127ef831133cfcc5ad4b5d15042ff23e05ad8fc7->enter($__internal_c4fb535cfb65e9cc44c6ffde127ef831133cfcc5ad4b5d15042ff23e05ad8fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_d24e8f2471baa61eb56771dccd7517eab9922896353853254f63d56ab4f057bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24e8f2471baa61eb56771dccd7517eab9922896353853254f63d56ab4f057bf->enter($__internal_d24e8f2471baa61eb56771dccd7517eab9922896353853254f63d56ab4f057bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_d24e8f2471baa61eb56771dccd7517eab9922896353853254f63d56ab4f057bf->leave($__internal_d24e8f2471baa61eb56771dccd7517eab9922896353853254f63d56ab4f057bf_prof);

        
        $__internal_c4fb535cfb65e9cc44c6ffde127ef831133cfcc5ad4b5d15042ff23e05ad8fc7->leave($__internal_c4fb535cfb65e9cc44c6ffde127ef831133cfcc5ad4b5d15042ff23e05ad8fc7_prof);

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
