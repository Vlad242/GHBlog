<?php

/* @GeekBlog/Default/homepage.html.twig */
class __TwigTemplate_912269a1cdb98da45ccc825bc3fcd9dc6a3f5390a71bcb5bdc207379d92b4267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Default/homepage.html.twig", 1);
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
        $__internal_9c8516e1a2bcfccdd677a9e63283a32093fbc97cefa31a118363f72f07b5fa28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8516e1a2bcfccdd677a9e63283a32093fbc97cefa31a118363f72f07b5fa28->enter($__internal_9c8516e1a2bcfccdd677a9e63283a32093fbc97cefa31a118363f72f07b5fa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $__internal_ce3957b726fa294bd3c893a6e11fba7cf3b2cb98b35083fca73ef28ee369c49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3957b726fa294bd3c893a6e11fba7cf3b2cb98b35083fca73ef28ee369c49d->enter($__internal_ce3957b726fa294bd3c893a6e11fba7cf3b2cb98b35083fca73ef28ee369c49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8516e1a2bcfccdd677a9e63283a32093fbc97cefa31a118363f72f07b5fa28->leave($__internal_9c8516e1a2bcfccdd677a9e63283a32093fbc97cefa31a118363f72f07b5fa28_prof);

        
        $__internal_ce3957b726fa294bd3c893a6e11fba7cf3b2cb98b35083fca73ef28ee369c49d->leave($__internal_ce3957b726fa294bd3c893a6e11fba7cf3b2cb98b35083fca73ef28ee369c49d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cdc3f4c0ec51829e4ac4c4ce95e941ecf168c7d8abd7dfa04e926c12193fc93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdc3f4c0ec51829e4ac4c4ce95e941ecf168c7d8abd7dfa04e926c12193fc93->enter($__internal_6cdc3f4c0ec51829e4ac4c4ce95e941ecf168c7d8abd7dfa04e926c12193fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ba11e256f909eded711b5b64ef157e987bfe66499cbf36d31d20c830103fe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba11e256f909eded711b5b64ef157e987bfe66499cbf36d31d20c830103fe4a->enter($__internal_6ba11e256f909eded711b5b64ef157e987bfe66499cbf36d31d20c830103fe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Post:list"));
        echo "
";
        
        $__internal_6ba11e256f909eded711b5b64ef157e987bfe66499cbf36d31d20c830103fe4a->leave($__internal_6ba11e256f909eded711b5b64ef157e987bfe66499cbf36d31d20c830103fe4a_prof);

        
        $__internal_6cdc3f4c0ec51829e4ac4c4ce95e941ecf168c7d8abd7dfa04e926c12193fc93->leave($__internal_6cdc3f4c0ec51829e4ac4c4ce95e941ecf168c7d8abd7dfa04e926c12193fc93_prof);

    }

    // line 6
    public function block_right($context, array $blocks = array())
    {
        $__internal_6e0ebcf84bfbde66948353a7488b85d68b0e305c9fad5d424778bd2aa0d6798f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0ebcf84bfbde66948353a7488b85d68b0e305c9fad5d424778bd2aa0d6798f->enter($__internal_6e0ebcf84bfbde66948353a7488b85d68b0e305c9fad5d424778bd2aa0d6798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_c56bcbe190843145cfb3478cfda419ec558cba0e3a99b3fdf955377b2f866fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56bcbe190843145cfb3478cfda419ec558cba0e3a99b3fdf955377b2f866fba->enter($__internal_c56bcbe190843145cfb3478cfda419ec558cba0e3a99b3fdf955377b2f866fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 7
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_c56bcbe190843145cfb3478cfda419ec558cba0e3a99b3fdf955377b2f866fba->leave($__internal_c56bcbe190843145cfb3478cfda419ec558cba0e3a99b3fdf955377b2f866fba_prof);

        
        $__internal_6e0ebcf84bfbde66948353a7488b85d68b0e305c9fad5d424778bd2aa0d6798f->leave($__internal_6e0ebcf84bfbde66948353a7488b85d68b0e305c9fad5d424778bd2aa0d6798f_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  63 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
    {{ render(controller('GeekBlogBundle:Post:list')) }}
{% endblock %}

{% block right %}
    {{ render(controller('GeekBlogBundle:Tag:list')) }}
{% endblock %}", "@GeekBlog/Default/homepage.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/homepage.html.twig");
    }
}
