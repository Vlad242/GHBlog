<?php

/* @GeekBlog/Post/viewPost.html.twig */
class __TwigTemplate_b29ae32fe8d3f5a0a4950478508dcd8c9688b9bf7e075097cd274f45f106da1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/viewPost.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'comment' => array($this, 'block_comment'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bd7079234e39fe9451ab6eb6e4aee9b9005cc55c59484628d124877ca1089ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd7079234e39fe9451ab6eb6e4aee9b9005cc55c59484628d124877ca1089ce->enter($__internal_3bd7079234e39fe9451ab6eb6e4aee9b9005cc55c59484628d124877ca1089ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $__internal_2c98020f07dfd1316f13bb945ab1afc379198bb7395f98af462400d566e0e94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c98020f07dfd1316f13bb945ab1afc379198bb7395f98af462400d566e0e94c->enter($__internal_2c98020f07dfd1316f13bb945ab1afc379198bb7395f98af462400d566e0e94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd7079234e39fe9451ab6eb6e4aee9b9005cc55c59484628d124877ca1089ce->leave($__internal_3bd7079234e39fe9451ab6eb6e4aee9b9005cc55c59484628d124877ca1089ce_prof);

        
        $__internal_2c98020f07dfd1316f13bb945ab1afc379198bb7395f98af462400d566e0e94c->leave($__internal_2c98020f07dfd1316f13bb945ab1afc379198bb7395f98af462400d566e0e94c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d29d766fb8b3be96378b1e06fbbea62540af65d4d95e22575f080b4fedf93d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d29d766fb8b3be96378b1e06fbbea62540af65d4d95e22575f080b4fedf93d0->enter($__internal_3d29d766fb8b3be96378b1e06fbbea62540af65d4d95e22575f080b4fedf93d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82adba154307ffaf2d33ae742793b4bb06258f1a22794134e7761b096943953f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82adba154307ffaf2d33ae742793b4bb06258f1a22794134e7761b096943953f->enter($__internal_82adba154307ffaf2d33ae742793b4bb06258f1a22794134e7761b096943953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->renderBreadcrumbs();
        echo "
    <div class=\"well\">
        <h2> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h2>
        <h5><span class=\"glyphicon glyphicon-time\"></span>Post by ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "getUsername", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "created", array()), "Y-m-d"), "html", null, true);
        echo "</h5>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getTags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 8
            echo "        <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-tag\"></span> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
            echo " </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<hr>
        <p>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "
        </p>
        <div align=\"right\">
            <a class=\"btn-xs btn-primary\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo " </a>
        </div>
        <br>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "        <div class=\"well\">
            <h3> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getUser", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "</h3>
            <h5><span class=\"glyphicon glyphicon-time\"></span>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
    ";
        // line 27
        $this->displayBlock('comment', $context, $blocks);
        
        $__internal_82adba154307ffaf2d33ae742793b4bb06258f1a22794134e7761b096943953f->leave($__internal_82adba154307ffaf2d33ae742793b4bb06258f1a22794134e7761b096943953f_prof);

        
        $__internal_3d29d766fb8b3be96378b1e06fbbea62540af65d4d95e22575f080b4fedf93d0->leave($__internal_3d29d766fb8b3be96378b1e06fbbea62540af65d4d95e22575f080b4fedf93d0_prof);

    }

    public function block_comment($context, array $blocks = array())
    {
        $__internal_78bc12f0944a2fa81e8d121c0336a03121813477a71a46200ea59f5bf2c30f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bc12f0944a2fa81e8d121c0336a03121813477a71a46200ea59f5bf2c30f0e->enter($__internal_78bc12f0944a2fa81e8d121c0336a03121813477a71a46200ea59f5bf2c30f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        $__internal_69fe3bab696e32ee015a536cfad0599a7d7b628f74afd83328881a0ce067663b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fe3bab696e32ee015a536cfad0599a7d7b628f74afd83328881a0ce067663b->enter($__internal_69fe3bab696e32ee015a536cfad0599a7d7b628f74afd83328881a0ce067663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        // line 28
        echo "        <div class=\"well\">
            <h3>Comment: <span class=\"glyphicon glyphicon-pencil\"></span></h3>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
        </div>
    ";
        
        $__internal_69fe3bab696e32ee015a536cfad0599a7d7b628f74afd83328881a0ce067663b->leave($__internal_69fe3bab696e32ee015a536cfad0599a7d7b628f74afd83328881a0ce067663b_prof);

        
        $__internal_78bc12f0944a2fa81e8d121c0336a03121813477a71a46200ea59f5bf2c30f0e->leave($__internal_78bc12f0944a2fa81e8d121c0336a03121813477a71a46200ea59f5bf2c30f0e_prof);

    }

    // line 35
    public function block_right($context, array $blocks = array())
    {
        $__internal_a6130c6e15bfaf1933c84b036f32bd1f4c7f24b82733a96342e45849dcd39311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6130c6e15bfaf1933c84b036f32bd1f4c7f24b82733a96342e45849dcd39311->enter($__internal_a6130c6e15bfaf1933c84b036f32bd1f4c7f24b82733a96342e45849dcd39311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_32ccddadd86f7014b14d7ffd0bb5053bd8c0544738f0700c3ba5c2a1143a655f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ccddadd86f7014b14d7ffd0bb5053bd8c0544738f0700c3ba5c2a1143a655f->enter($__internal_32ccddadd86f7014b14d7ffd0bb5053bd8c0544738f0700c3ba5c2a1143a655f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 36
        echo "    <div class=\"well\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_32ccddadd86f7014b14d7ffd0bb5053bd8c0544738f0700c3ba5c2a1143a655f->leave($__internal_32ccddadd86f7014b14d7ffd0bb5053bd8c0544738f0700c3ba5c2a1143a655f_prof);

        
        $__internal_a6130c6e15bfaf1933c84b036f32bd1f4c7f24b82733a96342e45849dcd39311->leave($__internal_a6130c6e15bfaf1933c84b036f32bd1f4c7f24b82733a96342e45849dcd39311_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/viewPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 37,  175 => 36,  166 => 35,  153 => 30,  149 => 28,  131 => 27,  128 => 26,  119 => 23,  115 => 22,  111 => 21,  108 => 20,  104 => 19,  98 => 16,  94 => 15,  88 => 12,  84 => 10,  76 => 9,  71 => 8,  67 => 7,  61 => 6,  57 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    {{ wo_render_breadcrumbs() }}
    <div class=\"well\">
        <h2> {{post.title}}</h2>
        <h5><span class=\"glyphicon glyphicon-time\"></span>Post by {{ post.user.getUsername }}, {{ post.created | date('Y-m-d') }}</h5>
        {% for tag in post.getTags %}
        <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId })}}\">
            <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.getName }} </a>
        {% endfor %}<hr>
        <p>
            {{ post.content}}
        </p>
        <div align=\"right\">
            <a class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' : post.getCategory().getId() })}}\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span> {{ post.getCategory().getName() }} </a>
        </div>
        <br>
        {% for comment in post.comments %}
        <div class=\"well\">
            <h3> {{comment.getUser().getName()}}</h3>
            <h5><span class=\"glyphicon glyphicon-time\"></span>{{ comment.created | date('Y-m-d') }}</h5>
            {{ comment.content}}
        </div>
        {% endfor %}
    </div>
    {% block comment %}
        <div class=\"well\">
            <h3>Comment: <span class=\"glyphicon glyphicon-pencil\"></span></h3>
            {{ form(form) }}
        </div>
    {% endblock %}
{% endblock %}

{% block right %}
    <div class=\"well\">
        {{ render(controller('GeekBlogBundle:Tag:list')) }}
    </div>
{% endblock %}", "@GeekBlog/Post/viewPost.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/viewPost.html.twig");
    }
}
