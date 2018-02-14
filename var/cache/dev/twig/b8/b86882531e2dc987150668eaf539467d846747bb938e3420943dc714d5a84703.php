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
        $__internal_39540a3ac95f025c02ed360859455d18ca8523d536039d588b1c127ed9ebac7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39540a3ac95f025c02ed360859455d18ca8523d536039d588b1c127ed9ebac7b->enter($__internal_39540a3ac95f025c02ed360859455d18ca8523d536039d588b1c127ed9ebac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByCategory.html.twig"));

        $__internal_d5c0c66fd8cf80e7625c0bd1564a33f945c13851d23933ddc5006eb0a6d28f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c0c66fd8cf80e7625c0bd1564a33f945c13851d23933ddc5006eb0a6d28f40->enter($__internal_d5c0c66fd8cf80e7625c0bd1564a33f945c13851d23933ddc5006eb0a6d28f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39540a3ac95f025c02ed360859455d18ca8523d536039d588b1c127ed9ebac7b->leave($__internal_39540a3ac95f025c02ed360859455d18ca8523d536039d588b1c127ed9ebac7b_prof);

        
        $__internal_d5c0c66fd8cf80e7625c0bd1564a33f945c13851d23933ddc5006eb0a6d28f40->leave($__internal_d5c0c66fd8cf80e7625c0bd1564a33f945c13851d23933ddc5006eb0a6d28f40_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eca563de460172fe2aca628123d7d416d0101f322af1628205aded520b8dcaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca563de460172fe2aca628123d7d416d0101f322af1628205aded520b8dcaf4->enter($__internal_eca563de460172fe2aca628123d7d416d0101f322af1628205aded520b8dcaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93eb4b19a317f1fc108b2bd9ff38981a144574f43892b25b522587a47025c3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93eb4b19a317f1fc108b2bd9ff38981a144574f43892b25b522587a47025c3ba->enter($__internal_93eb4b19a317f1fc108b2bd9ff38981a144574f43892b25b522587a47025c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <div class=\"navigation\" align=\"center\">
            ";
        // line 5
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "            <div class=\"well\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewPost", array("id" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                    <h2> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getUsername", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 14
                echo "                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
                echo " </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "<hr>
                <p>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
                </p>
                <div align=\"right\">
                    <a class=\"btn-xs btn-primary\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 27
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_93eb4b19a317f1fc108b2bd9ff38981a144574f43892b25b522587a47025c3ba->leave($__internal_93eb4b19a317f1fc108b2bd9ff38981a144574f43892b25b522587a47025c3ba_prof);

        
        $__internal_eca563de460172fe2aca628123d7d416d0101f322af1628205aded520b8dcaf4->leave($__internal_eca563de460172fe2aca628123d7d416d0101f322af1628205aded520b8dcaf4_prof);

    }

    // line 32
    public function block_right($context, array $blocks = array())
    {
        $__internal_c2355b71760207779bf0beb1412e4f54a0c4a5c52e48d729bc8a811a8eda665c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2355b71760207779bf0beb1412e4f54a0c4a5c52e48d729bc8a811a8eda665c->enter($__internal_c2355b71760207779bf0beb1412e4f54a0c4a5c52e48d729bc8a811a8eda665c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_4796155bac5514c7b19154f5d636d480902c4ceb4fc3f4a5a1fb2b8868f36fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4796155bac5514c7b19154f5d636d480902c4ceb4fc3f4a5a1fb2b8868f36fc1->enter($__internal_4796155bac5514c7b19154f5d636d480902c4ceb4fc3f4a5a1fb2b8868f36fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_4796155bac5514c7b19154f5d636d480902c4ceb4fc3f4a5a1fb2b8868f36fc1->leave($__internal_4796155bac5514c7b19154f5d636d480902c4ceb4fc3f4a5a1fb2b8868f36fc1_prof);

        
        $__internal_c2355b71760207779bf0beb1412e4f54a0c4a5c52e48d729bc8a811a8eda665c->leave($__internal_c2355b71760207779bf0beb1412e4f54a0c4a5c52e48d729bc8a811a8eda665c_prof);

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
        return array (  148 => 33,  139 => 32,  125 => 27,  122 => 26,  112 => 22,  108 => 21,  102 => 18,  98 => 16,  90 => 15,  85 => 14,  81 => 13,  75 => 12,  70 => 10,  66 => 9,  63 => 8,  59 => 7,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
            {{ knp_pagination_render(pagination) }}
        </div>
        {% for post in pagination %}
            <div class=\"well\">
                <a href=\"{{ path(\"viewPost\", {'id' : post.getId() })}}\">
                    <h2> {{post.title}}</h2>
                </a>
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
            </div>
        {% endfor %}
        <div class=\"navigation\" align=\"center\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %}

{% block right %}
    {{ render(controller('GeekBlogBundle:Tag:list')) }}
{% endblock %}", "@GeekBlog/Post/postByCategory.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postByCategory.html.twig");
    }
}
