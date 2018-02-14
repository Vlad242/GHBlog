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
        $__internal_cdb27163a5c5db30b84fc91848d94c55b393402eb3c8c40d63e984760a49bd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb27163a5c5db30b84fc91848d94c55b393402eb3c8c40d63e984760a49bd30->enter($__internal_cdb27163a5c5db30b84fc91848d94c55b393402eb3c8c40d63e984760a49bd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $__internal_3b4c484a4bce9984fc40e9ea4ae965eb8b6ac8eda7d2dad9f8baac8e0a33bfd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4c484a4bce9984fc40e9ea4ae965eb8b6ac8eda7d2dad9f8baac8e0a33bfd0->enter($__internal_3b4c484a4bce9984fc40e9ea4ae965eb8b6ac8eda7d2dad9f8baac8e0a33bfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/viewPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdb27163a5c5db30b84fc91848d94c55b393402eb3c8c40d63e984760a49bd30->leave($__internal_cdb27163a5c5db30b84fc91848d94c55b393402eb3c8c40d63e984760a49bd30_prof);

        
        $__internal_3b4c484a4bce9984fc40e9ea4ae965eb8b6ac8eda7d2dad9f8baac8e0a33bfd0->leave($__internal_3b4c484a4bce9984fc40e9ea4ae965eb8b6ac8eda7d2dad9f8baac8e0a33bfd0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a42723b0700b814f48b4f0a36aaa8a1aa03b6821c5d417e0d4b5467283a403d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42723b0700b814f48b4f0a36aaa8a1aa03b6821c5d417e0d4b5467283a403d7->enter($__internal_a42723b0700b814f48b4f0a36aaa8a1aa03b6821c5d417e0d4b5467283a403d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b99125be73533f3179c359d88f845f9c63be252b8e00a00440d809b6f254b5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99125be73533f3179c359d88f845f9c63be252b8e00a00440d809b6f254b5e4->enter($__internal_b99125be73533f3179c359d88f845f9c63be252b8e00a00440d809b6f254b5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "date", array()), "Y-m-d"), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "Y-m-d"), "html", null, true);
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
        
        $__internal_b99125be73533f3179c359d88f845f9c63be252b8e00a00440d809b6f254b5e4->leave($__internal_b99125be73533f3179c359d88f845f9c63be252b8e00a00440d809b6f254b5e4_prof);

        
        $__internal_a42723b0700b814f48b4f0a36aaa8a1aa03b6821c5d417e0d4b5467283a403d7->leave($__internal_a42723b0700b814f48b4f0a36aaa8a1aa03b6821c5d417e0d4b5467283a403d7_prof);

    }

    // line 29
    public function block_comment($context, array $blocks = array())
    {
        $__internal_c4825f241990cf329efa335309374284e0272c2846311d31682e5f1d213e8e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4825f241990cf329efa335309374284e0272c2846311d31682e5f1d213e8e97->enter($__internal_c4825f241990cf329efa335309374284e0272c2846311d31682e5f1d213e8e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        $__internal_c74c62560a8c2a75c3a246c4ad3085c3432de8b00a194584f8c6a39ed6b10e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74c62560a8c2a75c3a246c4ad3085c3432de8b00a194584f8c6a39ed6b10e46->enter($__internal_c74c62560a8c2a75c3a246c4ad3085c3432de8b00a194584f8c6a39ed6b10e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comment"));

        // line 30
        echo "    fffff
";
        
        $__internal_c74c62560a8c2a75c3a246c4ad3085c3432de8b00a194584f8c6a39ed6b10e46->leave($__internal_c74c62560a8c2a75c3a246c4ad3085c3432de8b00a194584f8c6a39ed6b10e46_prof);

        
        $__internal_c4825f241990cf329efa335309374284e0272c2846311d31682e5f1d213e8e97->leave($__internal_c4825f241990cf329efa335309374284e0272c2846311d31682e5f1d213e8e97_prof);

    }

    // line 33
    public function block_right($context, array $blocks = array())
    {
        $__internal_cc4316894aca62bfa56c3e2fc571e777b489fd9fb1f9af8faa4cf64f831ba8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4316894aca62bfa56c3e2fc571e777b489fd9fb1f9af8faa4cf64f831ba8ab->enter($__internal_cc4316894aca62bfa56c3e2fc571e777b489fd9fb1f9af8faa4cf64f831ba8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_39c37a12baf176020d152c4655a4dc5ddebd4cb06c3a1bb756383e06e616f467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c37a12baf176020d152c4655a4dc5ddebd4cb06c3a1bb756383e06e616f467->enter($__internal_39c37a12baf176020d152c4655a4dc5ddebd4cb06c3a1bb756383e06e616f467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 34
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_39c37a12baf176020d152c4655a4dc5ddebd4cb06c3a1bb756383e06e616f467->leave($__internal_39c37a12baf176020d152c4655a4dc5ddebd4cb06c3a1bb756383e06e616f467_prof);

        
        $__internal_cc4316894aca62bfa56c3e2fc571e777b489fd9fb1f9af8faa4cf64f831ba8ab->leave($__internal_cc4316894aca62bfa56c3e2fc571e777b489fd9fb1f9af8faa4cf64f831ba8ab_prof);

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
        return array (  168 => 34,  159 => 33,  148 => 30,  139 => 29,  128 => 26,  119 => 23,  115 => 22,  111 => 21,  108 => 20,  104 => 19,  98 => 16,  94 => 15,  88 => 12,  84 => 10,  76 => 9,  71 => 8,  67 => 7,  61 => 6,  57 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        <h5><span class=\"glyphicon glyphicon-time\"></span>Post by {{ post.user.getUsername }}, {{ post.date | date('Y-m-d') }}</h5>
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
            <h5><span class=\"glyphicon glyphicon-time\"></span>{{ comment.date | date('Y-m-d') }}</h5>
            {{ comment.content}}
        </div>
        {% endfor %}
    </div>
{% endblock %}

{% block comment %}
    fffff
{% endblock %}

{% block right %}
    {{ render(controller('GeekBlogBundle:Tag:list')) }}
{% endblock %}", "@GeekBlog/Post/viewPost.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/viewPost.html.twig");
    }
}
