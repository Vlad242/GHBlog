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
        $__internal_d9363aa4589b38391e5bea1170f1d1d77a7b7466ffa4f1d0bf538561d60fd5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9363aa4589b38391e5bea1170f1d1d77a7b7466ffa4f1d0bf538561d60fd5e7->enter($__internal_d9363aa4589b38391e5bea1170f1d1d77a7b7466ffa4f1d0bf538561d60fd5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $__internal_04db0095f40415c0aedf2c5e2cd4a2f4dff0e9ab2e68b8287820b631abddf0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04db0095f40415c0aedf2c5e2cd4a2f4dff0e9ab2e68b8287820b631abddf0b1->enter($__internal_04db0095f40415c0aedf2c5e2cd4a2f4dff0e9ab2e68b8287820b631abddf0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9363aa4589b38391e5bea1170f1d1d77a7b7466ffa4f1d0bf538561d60fd5e7->leave($__internal_d9363aa4589b38391e5bea1170f1d1d77a7b7466ffa4f1d0bf538561d60fd5e7_prof);

        
        $__internal_04db0095f40415c0aedf2c5e2cd4a2f4dff0e9ab2e68b8287820b631abddf0b1->leave($__internal_04db0095f40415c0aedf2c5e2cd4a2f4dff0e9ab2e68b8287820b631abddf0b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eec6e6ba16e3a7ecb8fe85c4b982a0c9b2a9bc697c335ec69dcea7526105c458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec6e6ba16e3a7ecb8fe85c4b982a0c9b2a9bc697c335ec69dcea7526105c458->enter($__internal_eec6e6ba16e3a7ecb8fe85c4b982a0c9b2a9bc697c335ec69dcea7526105c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96c13bba999589c0527fac7811f1bb42cedac5f83d7e274f853101e2486c6cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c13bba999589c0527fac7811f1bb42cedac5f83d7e274f853101e2486c6cce->enter($__internal_96c13bba999589c0527fac7811f1bb42cedac5f83d7e274f853101e2486c6cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div>
            <a style=\"position: absolute; left: 10%; color: Red\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"))), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-heart\"></span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getLikeCount", array(), "method"), "html", null, true);
        echo " </a>
            <a style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo " </a>
        </div>
        <br>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 22
            echo "        <div class=\"well\">
            <h3> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getUser", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "</h3>
            <h5><span class=\"glyphicon glyphicon-time\"></span>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    ";
        // line 29
        $this->displayBlock('comment', $context, $blocks);
        
        $__internal_96c13bba999589c0527fac7811f1bb42cedac5f83d7e274f853101e2486c6cce->leave($__internal_96c13bba999589c0527fac7811f1bb42cedac5f83d7e274f853101e2486c6cce_prof);

        
        $__internal_eec6e6ba16e3a7ecb8fe85c4b982a0c9b2a9bc697c335ec69dcea7526105c458->leave($__internal_eec6e6ba16e3a7ecb8fe85c4b982a0c9b2a9bc697c335ec69dcea7526105c458_prof);

    }

    public function block_comment($context, array $blocks = array())
    {
        $__internal_4f449b027e3dd26b44cf8aa3763e702f04ae2164b540688f1390e25281a8ec38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f449b027e3dd26b44cf8aa3763e702f04ae2164b540688f1390e25281a8ec38->enter($__internal_4f449b027e3dd26b44cf8aa3763e702f04ae2164b540688f1390e25281a8ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        $__internal_ed50a4e60b5cb9ef77574c680d0d1b2802dbd4e0a5324dff21198850913b301b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed50a4e60b5cb9ef77574c680d0d1b2802dbd4e0a5324dff21198850913b301b->enter($__internal_ed50a4e60b5cb9ef77574c680d0d1b2802dbd4e0a5324dff21198850913b301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        // line 30
        echo "        <div class=\"well\">
            <h3>Comment: <span class=\"glyphicon glyphicon-pencil\"></span></h3>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
        </div>
    ";
        
        $__internal_ed50a4e60b5cb9ef77574c680d0d1b2802dbd4e0a5324dff21198850913b301b->leave($__internal_ed50a4e60b5cb9ef77574c680d0d1b2802dbd4e0a5324dff21198850913b301b_prof);

        
        $__internal_4f449b027e3dd26b44cf8aa3763e702f04ae2164b540688f1390e25281a8ec38->leave($__internal_4f449b027e3dd26b44cf8aa3763e702f04ae2164b540688f1390e25281a8ec38_prof);

    }

    // line 37
    public function block_right($context, array $blocks = array())
    {
        $__internal_1e876a70ec8862cd7d9d4f898f03d64ecb149a5cdd2d3b377fd081fcb164d28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e876a70ec8862cd7d9d4f898f03d64ecb149a5cdd2d3b377fd081fcb164d28c->enter($__internal_1e876a70ec8862cd7d9d4f898f03d64ecb149a5cdd2d3b377fd081fcb164d28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_e3f384b39c61b964096659f6408f4694400523af28b476ae119caea7e88ebc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f384b39c61b964096659f6408f4694400523af28b476ae119caea7e88ebc71->enter($__internal_e3f384b39c61b964096659f6408f4694400523af28b476ae119caea7e88ebc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 38
        echo "    <div class=\"well\">
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_e3f384b39c61b964096659f6408f4694400523af28b476ae119caea7e88ebc71->leave($__internal_e3f384b39c61b964096659f6408f4694400523af28b476ae119caea7e88ebc71_prof);

        
        $__internal_1e876a70ec8862cd7d9d4f898f03d64ecb149a5cdd2d3b377fd081fcb164d28c->leave($__internal_1e876a70ec8862cd7d9d4f898f03d64ecb149a5cdd2d3b377fd081fcb164d28c_prof);

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
        return array (  186 => 39,  183 => 38,  174 => 37,  161 => 32,  157 => 30,  139 => 29,  136 => 28,  127 => 25,  123 => 24,  119 => 23,  116 => 22,  112 => 21,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  88 => 12,  84 => 10,  76 => 9,  71 => 8,  67 => 7,  61 => 6,  57 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        <div>
            <a style=\"position: absolute; left: 10%; color: Red\" href=\"{{ path(\"likecheck\", {'post' : post.getId() })}}\">
                <span class=\"glyphicon glyphicon-heart\"></span> {{ post.getLikeCount() }} </a>
            <a style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' : post.getCategory().getId() })}}\">
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
