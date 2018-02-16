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
        $__internal_d2bf5d02bd6b59d8f263773fa018f019d66f919fba5cedba763830bef20f20ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bf5d02bd6b59d8f263773fa018f019d66f919fba5cedba763830bef20f20ef->enter($__internal_d2bf5d02bd6b59d8f263773fa018f019d66f919fba5cedba763830bef20f20ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $__internal_fa97c991e7c895c8ebbf74efe09efc6f2cb19fc09d2d30835affa902d0b9d14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa97c991e7c895c8ebbf74efe09efc6f2cb19fc09d2d30835affa902d0b9d14a->enter($__internal_fa97c991e7c895c8ebbf74efe09efc6f2cb19fc09d2d30835affa902d0b9d14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2bf5d02bd6b59d8f263773fa018f019d66f919fba5cedba763830bef20f20ef->leave($__internal_d2bf5d02bd6b59d8f263773fa018f019d66f919fba5cedba763830bef20f20ef_prof);

        
        $__internal_fa97c991e7c895c8ebbf74efe09efc6f2cb19fc09d2d30835affa902d0b9d14a->leave($__internal_fa97c991e7c895c8ebbf74efe09efc6f2cb19fc09d2d30835affa902d0b9d14a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f2d44de57541ace3603f98c75648fb787133b31626d47e0dca60e6520836a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2d44de57541ace3603f98c75648fb787133b31626d47e0dca60e6520836a9b->enter($__internal_3f2d44de57541ace3603f98c75648fb787133b31626d47e0dca60e6520836a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91f69c76333e2320fb8efb2aaca901d2e61520008ec03256f043e17da5118b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f69c76333e2320fb8efb2aaca901d2e61520008ec03256f043e17da5118b57->enter($__internal_91f69c76333e2320fb8efb2aaca901d2e61520008ec03256f043e17da5118b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "
            ";
        // line 7
        echo "|
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "haveThisSubscriber", array(0 => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getUser", array(), "method")), "method")) {
                // line 10
                echo "                    <a style=\"color: Green\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\">
                        <span class=\"glyphicon glyphicon-paperclip\"></span> Subscribed </a>
                ";
            } else {
                // line 13
                echo "                    <a style=\"color: Red\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\">
                        <span class=\"glyphicon glyphicon-paperclip\"></span> not Subscribed </a>
                ";
            }
            // line 16
            echo "            ";
        } else {
            // line 17
            echo "                <a style=\"color: Grey\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-paperclip\"></span> SignIn </a>
            ";
        }
        // line 20
        echo "            |";
        // line 21
        echo "            , ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "created", array()), "Y-m-d"), "html", null, true);
        echo "</h5>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getTags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 23
            echo "        <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-tag\"></span> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
            echo " </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "<hr>
        <p>
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "
        </p>
        <div>
            ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                ";
            if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "isLiked", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) {
                // line 32
                echo "                    <a style=\"position: absolute; left: 10%; color: Red\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"))), "html", null, true);
                echo "\">
                        <span class=\"glyphicon glyphicon-heart\"></span> ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getLikeCount", array(), "method"), "html", null, true);
                echo " </a>
                ";
            } else {
                // line 35
                echo "                    <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"))), "html", null, true);
                echo "\">
                        <span class=\"glyphicon glyphicon-heart\"></span> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getLikeCount", array(), "method"), "html", null, true);
                echo " </a>
                ";
            }
            // line 38
            echo "            ";
        } else {
            // line 39
            echo "                <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-heart\"></span> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getLikeCount", array(), "method"), "html", null, true);
            echo " </a>
            ";
        }
        // line 42
        echo "
            <a style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo " </a>
        </div>
        <br>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 48
            echo "        <div class=\"well\">
            <h3> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getUser", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "</h3>
            <h5><span class=\"glyphicon glyphicon-time\"></span>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d"), "html", null, true);
            echo " (last update: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "updated", array()), "Y-m-d"), "html", null, true);
            echo ")</h5>
            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
    ";
        // line 55
        $this->displayBlock('comment', $context, $blocks);
        
        $__internal_91f69c76333e2320fb8efb2aaca901d2e61520008ec03256f043e17da5118b57->leave($__internal_91f69c76333e2320fb8efb2aaca901d2e61520008ec03256f043e17da5118b57_prof);

        
        $__internal_3f2d44de57541ace3603f98c75648fb787133b31626d47e0dca60e6520836a9b->leave($__internal_3f2d44de57541ace3603f98c75648fb787133b31626d47e0dca60e6520836a9b_prof);

    }

    public function block_comment($context, array $blocks = array())
    {
        $__internal_51bea023c40b3739f49fa1666a2376641485da4d9b4ea3a4e4967a19ed00ae99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bea023c40b3739f49fa1666a2376641485da4d9b4ea3a4e4967a19ed00ae99->enter($__internal_51bea023c40b3739f49fa1666a2376641485da4d9b4ea3a4e4967a19ed00ae99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        $__internal_aa6d6fc63639d362835815ae0f25b03c0f557d7004d3e2daf67be98e2e2229b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6d6fc63639d362835815ae0f25b03c0f557d7004d3e2daf67be98e2e2229b9->enter($__internal_aa6d6fc63639d362835815ae0f25b03c0f557d7004d3e2daf67be98e2e2229b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        // line 56
        echo "        <div class=\"well\">
            <h3>Comment: <span class=\"glyphicon glyphicon-pencil\"></span></h3>
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
        </div>
    ";
        
        $__internal_aa6d6fc63639d362835815ae0f25b03c0f557d7004d3e2daf67be98e2e2229b9->leave($__internal_aa6d6fc63639d362835815ae0f25b03c0f557d7004d3e2daf67be98e2e2229b9_prof);

        
        $__internal_51bea023c40b3739f49fa1666a2376641485da4d9b4ea3a4e4967a19ed00ae99->leave($__internal_51bea023c40b3739f49fa1666a2376641485da4d9b4ea3a4e4967a19ed00ae99_prof);

    }

    // line 63
    public function block_right($context, array $blocks = array())
    {
        $__internal_620e3d9ff0bdb8b4b66384fc58df0693946d0dc744d208268b3d42b1cae487be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620e3d9ff0bdb8b4b66384fc58df0693946d0dc744d208268b3d42b1cae487be->enter($__internal_620e3d9ff0bdb8b4b66384fc58df0693946d0dc744d208268b3d42b1cae487be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_e29b45f444c7fb337337bb5cc77dcaa9e79544a12011791562171565840ae68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29b45f444c7fb337337bb5cc77dcaa9e79544a12011791562171565840ae68c->enter($__internal_e29b45f444c7fb337337bb5cc77dcaa9e79544a12011791562171565840ae68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 64
        echo "    <div class=\"well\">
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_e29b45f444c7fb337337bb5cc77dcaa9e79544a12011791562171565840ae68c->leave($__internal_e29b45f444c7fb337337bb5cc77dcaa9e79544a12011791562171565840ae68c_prof);

        
        $__internal_620e3d9ff0bdb8b4b66384fc58df0693946d0dc744d208268b3d42b1cae487be->leave($__internal_620e3d9ff0bdb8b4b66384fc58df0693946d0dc744d208268b3d42b1cae487be_prof);

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
        return array (  258 => 65,  255 => 64,  246 => 63,  233 => 58,  229 => 56,  211 => 55,  208 => 54,  199 => 51,  193 => 50,  189 => 49,  186 => 48,  182 => 47,  176 => 44,  172 => 43,  169 => 42,  164 => 40,  159 => 39,  156 => 38,  151 => 36,  146 => 35,  141 => 33,  136 => 32,  133 => 31,  131 => 30,  125 => 27,  121 => 25,  113 => 24,  108 => 23,  104 => 22,  99 => 21,  97 => 20,  90 => 17,  87 => 16,  80 => 13,  73 => 10,  70 => 9,  68 => 8,  65 => 7,  61 => 6,  57 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        <h5><span class=\"glyphicon glyphicon-time\"></span>Post by {{ post.user.getUsername }}
            {#/SUBSCRIBER/#}|
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {% if app.user.haveThisSubscriber(post.getUser())%}
                    <a style=\"color: Green\" href=\"{{ path(\"subscribecheck\", {'user' : post.getUser().getId() })}}\">
                        <span class=\"glyphicon glyphicon-paperclip\"></span> Subscribed </a>
                {% else %}
                    <a style=\"color: Red\" href=\"{{ path(\"subscribecheck\", {'user' : post.getUser().getId() })}}\">
                        <span class=\"glyphicon glyphicon-paperclip\"></span> not Subscribed </a>
                {% endif %}
            {% else %}
                <a style=\"color: Grey\" href=\"{{ path(\"subscribecheck\", {'user' : post.getUser().getId() })}}\">
                    <span class=\"glyphicon glyphicon-paperclip\"></span> SignIn </a>
            {% endif %}
            |{#/SUBSCRIBER/#}
            , {{ post.created | date('Y-m-d') }}</h5>
        {% for tag in post.getTags %}
        <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId })}}\">
            <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.getName }} </a>
        {% endfor %}<hr>
        <p>
            {{ post.content}}
        </p>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {% if post.isLiked(app.user)  %}
                    <a style=\"position: absolute; left: 10%; color: Red\" href=\"{{ path(\"likecheck\", {'post' : post.getId() })}}\">
                        <span class=\"glyphicon glyphicon-heart\"></span> {{ post.getLikeCount() }} </a>
                {% else %}
                    <a style=\"position: absolute; left: 10%; color: Blue\" href=\"{{ path(\"likecheck\", {'post' : post.getId() })}}\">
                        <span class=\"glyphicon glyphicon-heart\"></span> {{ post.getLikeCount() }} </a>
                {% endif %}
            {% else %}
                <a style=\"position: absolute; left: 10%; color: Blue\" href=\"{{ path(\"likecheck\", {'post' : post.getId() })}}\">
                    <span class=\"glyphicon glyphicon-heart\"></span> {{ post.getLikeCount() }} </a>
            {% endif %}

            <a style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' : post.getCategory().getId() })}}\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span> {{ post.getCategory().getName() }} </a>
        </div>
        <br>
        {% for comment in post.comments %}
        <div class=\"well\">
            <h3> {{comment.getUser().getName()}}</h3>
            <h5><span class=\"glyphicon glyphicon-time\"></span>{{ comment.created | date('Y-m-d') }} (last update: {{ post.updated | date('Y-m-d') }})</h5>
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
