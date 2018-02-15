<?php

/* @GeekBlog/Post/postByCategory.html.twig */
class __TwigTemplate_ad0e6ca4980750942785ba6934e80c591e3db980a9ab79f6b2ea32095e6430f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/postByCategory.html.twig", 1);
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
        $__internal_b1d4033e50738fb774febc143d75e5fd4429baa58d6df0e6f4a4072216a467fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d4033e50738fb774febc143d75e5fd4429baa58d6df0e6f4a4072216a467fa->enter($__internal_b1d4033e50738fb774febc143d75e5fd4429baa58d6df0e6f4a4072216a467fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByCategory.html.twig"));

        $__internal_0864ea7a2db4841e5c53702754c22a8f5a0180cf84918b37b18df14ceeca8982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0864ea7a2db4841e5c53702754c22a8f5a0180cf84918b37b18df14ceeca8982->enter($__internal_0864ea7a2db4841e5c53702754c22a8f5a0180cf84918b37b18df14ceeca8982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d4033e50738fb774febc143d75e5fd4429baa58d6df0e6f4a4072216a467fa->leave($__internal_b1d4033e50738fb774febc143d75e5fd4429baa58d6df0e6f4a4072216a467fa_prof);

        
        $__internal_0864ea7a2db4841e5c53702754c22a8f5a0180cf84918b37b18df14ceeca8982->leave($__internal_0864ea7a2db4841e5c53702754c22a8f5a0180cf84918b37b18df14ceeca8982_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_619c0920b055a0037e9d8eee325fa289322e3e56a18e408b1175df450c5b9c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619c0920b055a0037e9d8eee325fa289322e3e56a18e408b1175df450c5b9c01->enter($__internal_619c0920b055a0037e9d8eee325fa289322e3e56a18e408b1175df450c5b9c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e6fdc8652d3fe827ba1d6da939d6e0658c1185362c4d987051f77f0845330a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6fdc8652d3fe827ba1d6da939d6e0658c1185362c4d987051f77f0845330a8->enter($__internal_8e6fdc8652d3fe827ba1d6da939d6e0658c1185362c4d987051f77f0845330a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <div class=\"navigation\" align=\"center\">
            <div class=\"well\">
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\">Post per page -> </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute(($context["currentCategory"] ?? $this->getContext($context, "currentCategory")), "id", array()), "limit" => 5)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute(($context["currentCategory"] ?? $this->getContext($context, "currentCategory")), "id", array()), "limit" => 10)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute(($context["currentCategory"] ?? $this->getContext($context, "currentCategory")), "id", array()), "limit" => 20)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 20 </a>
            </div>
            ";
        // line 14
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "            <div class=\"well\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewPost", array("id" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                    <h2> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByUser", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-user\"></span> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getUsername", array()), "html", null, true);
            echo " </a>, ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 25
                echo "                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
                echo " </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "<hr>
                <p>
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
                </p>
                <div align=\"right\">
                    <a class=\"btn-xs btn-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 38
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_8e6fdc8652d3fe827ba1d6da939d6e0658c1185362c4d987051f77f0845330a8->leave($__internal_8e6fdc8652d3fe827ba1d6da939d6e0658c1185362c4d987051f77f0845330a8_prof);

        
        $__internal_619c0920b055a0037e9d8eee325fa289322e3e56a18e408b1175df450c5b9c01->leave($__internal_619c0920b055a0037e9d8eee325fa289322e3e56a18e408b1175df450c5b9c01_prof);

    }

    // line 43
    public function block_right($context, array $blocks = array())
    {
        $__internal_55a52188b8e31c46b83f17bcf40d763ab189599ddfb697f0a4484ce2d566c142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a52188b8e31c46b83f17bcf40d763ab189599ddfb697f0a4484ce2d566c142->enter($__internal_55a52188b8e31c46b83f17bcf40d763ab189599ddfb697f0a4484ce2d566c142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_062fb512b58aa687fd1309f98d448291f99609df08930037d10c1646a551d887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062fb512b58aa687fd1309f98d448291f99609df08930037d10c1646a551d887->enter($__internal_062fb512b58aa687fd1309f98d448291f99609df08930037d10c1646a551d887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 44
        echo "    <div class=\"well\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_062fb512b58aa687fd1309f98d448291f99609df08930037d10c1646a551d887->leave($__internal_062fb512b58aa687fd1309f98d448291f99609df08930037d10c1646a551d887_prof);

        
        $__internal_55a52188b8e31c46b83f17bcf40d763ab189599ddfb697f0a4484ce2d566c142->leave($__internal_55a52188b8e31c46b83f17bcf40d763ab189599ddfb697f0a4484ce2d566c142_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/postByCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 45,  171 => 44,  162 => 43,  148 => 38,  145 => 37,  135 => 33,  131 => 32,  125 => 29,  121 => 27,  113 => 26,  108 => 25,  104 => 24,  98 => 23,  94 => 22,  88 => 19,  84 => 18,  81 => 17,  77 => 16,  72 => 14,  66 => 11,  61 => 9,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
        <div class=\"navigation\" align=\"center\">
            <div class=\"well\">
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\">Post per page -> </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' :  currentCategory.id , 'limit' : 5 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' :  currentCategory.id , 'limit' : 10 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' :  currentCategory.id , 'limit' : 20 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 20 </a>
            </div>
            {{ knp_pagination_render(pagination) }}
        </div>
        {% for post in pagination %}
            <div class=\"well\">
                <a href=\"{{ path(\"viewPost\", {'id' : post.getId() })}}\">
                    <h2> {{post.title}}</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by
                    <a href=\"{{ path(\"postByUser\", {'user' : post.getUser().getId()})}}\">
                        <span class=\"glyphicon glyphicon-user\"></span> {{  post.user.getUsername  }} </a>, {{ post.created | date('Y-m-d') }}</h5>
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
            </div>
        {% endfor %}
        <div class=\"navigation\" align=\"center\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %}

{% block right %}
    <div class=\"well\">
        {{ render(controller('GeekBlogBundle:Tag:list')) }}
    </div>
{% endblock %}", "@GeekBlog/Post/postByCategory.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postByCategory.html.twig");
    }
}
