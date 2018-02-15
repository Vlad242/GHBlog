<?php

/* @GeekBlog/Post/NewPost.html.twig */
class __TwigTemplate_9e9395d678ac6a73531de4bff57772432ec1ec91e504a2a62d567a2aeca9584b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/NewPost.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83c6cc27b4798fec379d3d5598bab1f8a10a53bd622a6d4b27ea8772f93396d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c6cc27b4798fec379d3d5598bab1f8a10a53bd622a6d4b27ea8772f93396d4->enter($__internal_83c6cc27b4798fec379d3d5598bab1f8a10a53bd622a6d4b27ea8772f93396d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/NewPost.html.twig"));

        $__internal_42ee81af57ca066877a0dc1d79bcd959fd4064457151db6359c8553a486d9140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ee81af57ca066877a0dc1d79bcd959fd4064457151db6359c8553a486d9140->enter($__internal_42ee81af57ca066877a0dc1d79bcd959fd4064457151db6359c8553a486d9140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/NewPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c6cc27b4798fec379d3d5598bab1f8a10a53bd622a6d4b27ea8772f93396d4->leave($__internal_83c6cc27b4798fec379d3d5598bab1f8a10a53bd622a6d4b27ea8772f93396d4_prof);

        
        $__internal_42ee81af57ca066877a0dc1d79bcd959fd4064457151db6359c8553a486d9140->leave($__internal_42ee81af57ca066877a0dc1d79bcd959fd4064457151db6359c8553a486d9140_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac2833e5f6e7a415cfcc48d44582f5c59be708c6b979ff58f5570bf06b571760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2833e5f6e7a415cfcc48d44582f5c59be708c6b979ff58f5570bf06b571760->enter($__internal_ac2833e5f6e7a415cfcc48d44582f5c59be708c6b979ff58f5570bf06b571760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aeb609838f9322fbe9cdcf18d968b13437d40eba80da53db336a37b03a8eded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeb609838f9322fbe9cdcf18d968b13437d40eba80da53db336a37b03a8eded->enter($__internal_5aeb609838f9322fbe9cdcf18d968b13437d40eba80da53db336a37b03a8eded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <h3>New post: <span class=\"glyphicon glyphicon-pencil\"></span></h3>
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_5aeb609838f9322fbe9cdcf18d968b13437d40eba80da53db336a37b03a8eded->leave($__internal_5aeb609838f9322fbe9cdcf18d968b13437d40eba80da53db336a37b03a8eded_prof);

        
        $__internal_ac2833e5f6e7a415cfcc48d44582f5c59be708c6b979ff58f5570bf06b571760->leave($__internal_ac2833e5f6e7a415cfcc48d44582f5c59be708c6b979ff58f5570bf06b571760_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/NewPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <h3>New post: <span class=\"glyphicon glyphicon-pencil\"></span></h3>
        {{ form(form) }}
    </div>
{% endblock %}
", "@GeekBlog/Post/NewPost.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/NewPost.html.twig");
    }
}
