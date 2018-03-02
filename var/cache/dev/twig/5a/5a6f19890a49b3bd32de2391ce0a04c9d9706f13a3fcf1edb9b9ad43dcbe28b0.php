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
        $__internal_fb9c5aac762e4ac6dfdaf9a84b2735a6619d16d651f003cccc090a9046ab3b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9c5aac762e4ac6dfdaf9a84b2735a6619d16d651f003cccc090a9046ab3b34->enter($__internal_fb9c5aac762e4ac6dfdaf9a84b2735a6619d16d651f003cccc090a9046ab3b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/NewPost.html.twig"));

        $__internal_c4240363bf2ddd9b54501d802b0256f2916ada395efdafecefcdd8e782a58adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4240363bf2ddd9b54501d802b0256f2916ada395efdafecefcdd8e782a58adb->enter($__internal_c4240363bf2ddd9b54501d802b0256f2916ada395efdafecefcdd8e782a58adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/NewPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9c5aac762e4ac6dfdaf9a84b2735a6619d16d651f003cccc090a9046ab3b34->leave($__internal_fb9c5aac762e4ac6dfdaf9a84b2735a6619d16d651f003cccc090a9046ab3b34_prof);

        
        $__internal_c4240363bf2ddd9b54501d802b0256f2916ada395efdafecefcdd8e782a58adb->leave($__internal_c4240363bf2ddd9b54501d802b0256f2916ada395efdafecefcdd8e782a58adb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d04aeeecf84c918d42aeb047ab84d6b876ba1725060a3f1a6dd7b4f6a5a868a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d04aeeecf84c918d42aeb047ab84d6b876ba1725060a3f1a6dd7b4f6a5a868a->enter($__internal_0d04aeeecf84c918d42aeb047ab84d6b876ba1725060a3f1a6dd7b4f6a5a868a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe00d33dca6c9e376b3e779e8d4674c0172561f19b60aac50ac052147e193886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe00d33dca6c9e376b3e779e8d4674c0172561f19b60aac50ac052147e193886->enter($__internal_fe00d33dca6c9e376b3e779e8d4674c0172561f19b60aac50ac052147e193886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <h3>New post: <span class=\"glyphicon glyphicon-pencil\"></span></h3>
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_fe00d33dca6c9e376b3e779e8d4674c0172561f19b60aac50ac052147e193886->leave($__internal_fe00d33dca6c9e376b3e779e8d4674c0172561f19b60aac50ac052147e193886_prof);

        
        $__internal_0d04aeeecf84c918d42aeb047ab84d6b876ba1725060a3f1a6dd7b4f6a5a868a->leave($__internal_0d04aeeecf84c918d42aeb047ab84d6b876ba1725060a3f1a6dd7b4f6a5a868a_prof);

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
