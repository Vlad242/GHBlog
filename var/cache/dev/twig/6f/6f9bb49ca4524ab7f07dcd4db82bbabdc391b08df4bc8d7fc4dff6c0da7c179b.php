<?php

/* @GeekBlog/User/UserRoom.html.twig */
class __TwigTemplate_c9f0c24f18b7dd99b499764f0aa7022a6ecf5f8cdebc0a95ce1de8abf3e5ba03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/User/UserRoom.html.twig", 1);
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
        $__internal_3b7ab9d9269645c5569432c10bffbfce0f96f827372f1ba86fda7c6b99ff346d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7ab9d9269645c5569432c10bffbfce0f96f827372f1ba86fda7c6b99ff346d->enter($__internal_3b7ab9d9269645c5569432c10bffbfce0f96f827372f1ba86fda7c6b99ff346d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/UserRoom.html.twig"));

        $__internal_ecc1de63fae6ac1f461bd9489bd07187e14330242b4a09e1f230b1483917e73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc1de63fae6ac1f461bd9489bd07187e14330242b4a09e1f230b1483917e73a->enter($__internal_ecc1de63fae6ac1f461bd9489bd07187e14330242b4a09e1f230b1483917e73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/UserRoom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7ab9d9269645c5569432c10bffbfce0f96f827372f1ba86fda7c6b99ff346d->leave($__internal_3b7ab9d9269645c5569432c10bffbfce0f96f827372f1ba86fda7c6b99ff346d_prof);

        
        $__internal_ecc1de63fae6ac1f461bd9489bd07187e14330242b4a09e1f230b1483917e73a->leave($__internal_ecc1de63fae6ac1f461bd9489bd07187e14330242b4a09e1f230b1483917e73a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5d10cebd96e651efc55038bdc7d1b444066f4d2e418b67148edf172d4fc0240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d10cebd96e651efc55038bdc7d1b444066f4d2e418b67148edf172d4fc0240->enter($__internal_f5d10cebd96e651efc55038bdc7d1b444066f4d2e418b67148edf172d4fc0240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c521571ce9bdd1091380e4712a2c07e804f7f730ca9460bbf1057158e5d62e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c521571ce9bdd1091380e4712a2c07e804f7f730ca9460bbf1057158e5d62e3->enter($__internal_9c521571ce9bdd1091380e4712a2c07e804f7f730ca9460bbf1057158e5d62e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <div class=\"navigation\" align=\"center\">
            <div class=\"well\">
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\">Post per page -> </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_room", array("limit" => 5));
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_room", array("limit" => 10));
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_room", array("limit" => 20));
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
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by <b>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getUsername", array()), "html", null, true);
            echo "</b>, ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 23
                echo "                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
                </p>
                <div>
                    <a style=\"position: absolute; left: 10%\" class=\"btn-xs btn-danger\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletepost", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> Delete post </a>

                    <a  style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 39
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_9c521571ce9bdd1091380e4712a2c07e804f7f730ca9460bbf1057158e5d62e3->leave($__internal_9c521571ce9bdd1091380e4712a2c07e804f7f730ca9460bbf1057158e5d62e3_prof);

        
        $__internal_f5d10cebd96e651efc55038bdc7d1b444066f4d2e418b67148edf172d4fc0240->leave($__internal_f5d10cebd96e651efc55038bdc7d1b444066f4d2e418b67148edf172d4fc0240_prof);

    }

    // line 44
    public function block_right($context, array $blocks = array())
    {
        $__internal_76bdfb4792b39e1821fc6f38a1da49f3d722a3c48b450783b467ab0b6dbc0d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bdfb4792b39e1821fc6f38a1da49f3d722a3c48b450783b467ab0b6dbc0d95->enter($__internal_76bdfb4792b39e1821fc6f38a1da49f3d722a3c48b450783b467ab0b6dbc0d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_3c09fb3da311c1978958dc99fceb50b8fedbab354612cb2a43b6fdd93b5232d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c09fb3da311c1978958dc99fceb50b8fedbab354612cb2a43b6fdd93b5232d1->enter($__internal_3c09fb3da311c1978958dc99fceb50b8fedbab354612cb2a43b6fdd93b5232d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 45
        echo "    <div class=\"well\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_3c09fb3da311c1978958dc99fceb50b8fedbab354612cb2a43b6fdd93b5232d1->leave($__internal_3c09fb3da311c1978958dc99fceb50b8fedbab354612cb2a43b6fdd93b5232d1_prof);

        
        $__internal_76bdfb4792b39e1821fc6f38a1da49f3d722a3c48b450783b467ab0b6dbc0d95->leave($__internal_76bdfb4792b39e1821fc6f38a1da49f3d722a3c48b450783b467ab0b6dbc0d95_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/User/UserRoom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 46,  172 => 45,  163 => 44,  149 => 39,  146 => 38,  136 => 34,  132 => 33,  126 => 30,  120 => 27,  116 => 25,  108 => 24,  103 => 23,  99 => 22,  93 => 21,  88 => 19,  84 => 18,  81 => 17,  77 => 16,  72 => 14,  66 => 11,  61 => 9,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"user_room\", {'limit' : 5 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"user_room\", {'limit' : 10 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"user_room\", {'limit' : 20 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 20 </a>
            </div>
            {{ knp_pagination_render(pagination) }}
        </div>
        {% for post in pagination %}
            <div class=\"well\">
                <a href=\"{{ path(\"viewPost\", {'id' : post.getId() })}}\">
                    <h2> {{post.title}}</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by <b>{{ post.user.getUsername }}</b>, {{ post.created | date('Y-m-d') }}</h5>
                {% for tag in post.getTags %}
                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId })}}\">
                    <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.getName }} </a>
                {% endfor %}<hr>
                <p>
                    {{ post.content}}
                </p>
                <div>
                    <a style=\"position: absolute; left: 10%\" class=\"btn-xs btn-danger\" href=\"{{ path(\"deletepost\", {'post' : post.getId() })}}\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> Delete post </a>

                    <a  style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' : post.getCategory().getId() })}}\">
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
{% endblock %}", "@GeekBlog/User/UserRoom.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/User/UserRoom.html.twig");
    }
}
