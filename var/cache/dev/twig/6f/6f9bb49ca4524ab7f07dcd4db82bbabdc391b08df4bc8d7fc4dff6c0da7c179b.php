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
        $__internal_5ad66d605a0d5cfa9d7b0df5c870854bd347504e7d742ef27fe7c1001a90bfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad66d605a0d5cfa9d7b0df5c870854bd347504e7d742ef27fe7c1001a90bfa4->enter($__internal_5ad66d605a0d5cfa9d7b0df5c870854bd347504e7d742ef27fe7c1001a90bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/UserRoom.html.twig"));

        $__internal_8c751ba5307ec0309b198d193560b5fcb297b7b6bf1777bb8baf7a3778d78de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c751ba5307ec0309b198d193560b5fcb297b7b6bf1777bb8baf7a3778d78de2->enter($__internal_8c751ba5307ec0309b198d193560b5fcb297b7b6bf1777bb8baf7a3778d78de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/UserRoom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ad66d605a0d5cfa9d7b0df5c870854bd347504e7d742ef27fe7c1001a90bfa4->leave($__internal_5ad66d605a0d5cfa9d7b0df5c870854bd347504e7d742ef27fe7c1001a90bfa4_prof);

        
        $__internal_8c751ba5307ec0309b198d193560b5fcb297b7b6bf1777bb8baf7a3778d78de2->leave($__internal_8c751ba5307ec0309b198d193560b5fcb297b7b6bf1777bb8baf7a3778d78de2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8c7c5eb0129ef12ef4a1e4bec781144ef25b5e6b76cb8d21096da5ab786477a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c7c5eb0129ef12ef4a1e4bec781144ef25b5e6b76cb8d21096da5ab786477a->enter($__internal_a8c7c5eb0129ef12ef4a1e4bec781144ef25b5e6b76cb8d21096da5ab786477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0347b24ca8a7062dda1153fc61b0f3d36c0392589767eb185af0af9b38c9a28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0347b24ca8a7062dda1153fc61b0f3d36c0392589767eb185af0af9b38c9a28c->enter($__internal_0347b24ca8a7062dda1153fc61b0f3d36c0392589767eb185af0af9b38c9a28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewPost", array("slug" => $this->getAttribute($context["post"], "getSlug", array(), "method"))), "html", null, true);
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
            echo " (last update: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d"), "html", null, true);
            echo ")</h5>
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
                    ";
            // line 30
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 31
                echo "                        ";
                if ($this->getAttribute($context["post"], "isLiked", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) {
                    // line 32
                    echo "                            <a style=\"position: absolute; left: 10%; color: Red\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                <span class=\"glyphicon glyphicon-heart\"></span> ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                    echo " </a>
                        ";
                } else {
                    // line 35
                    echo "                            <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                <span class=\"glyphicon glyphicon-heart\"></span> ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                    echo " </a>
                        ";
                }
                // line 38
                echo "                    ";
            } else {
                // line 39
                echo "                        <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                            <span class=\"glyphicon glyphicon-heart\"></span> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                echo " </a>
                    ";
            }
            // line 42
            echo "                </div>
                <br>
                <div>
                    <a style=\"position: absolute; left: 10%\" class=\"btn-xs btn-danger\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletepost", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> Delete post </a>

                    <a style=\"position: absolute; left: 25%\" class=\"btn-xs btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatepost", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> Update post </a>

                    <a  style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
                <br>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 58
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_0347b24ca8a7062dda1153fc61b0f3d36c0392589767eb185af0af9b38c9a28c->leave($__internal_0347b24ca8a7062dda1153fc61b0f3d36c0392589767eb185af0af9b38c9a28c_prof);

        
        $__internal_a8c7c5eb0129ef12ef4a1e4bec781144ef25b5e6b76cb8d21096da5ab786477a->leave($__internal_a8c7c5eb0129ef12ef4a1e4bec781144ef25b5e6b76cb8d21096da5ab786477a_prof);

    }

    // line 63
    public function block_right($context, array $blocks = array())
    {
        $__internal_ca8c3dd75db9262a25251d5a2edde09f1020f96f224b27cb99958d453f1bd2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8c3dd75db9262a25251d5a2edde09f1020f96f224b27cb99958d453f1bd2c4->enter($__internal_ca8c3dd75db9262a25251d5a2edde09f1020f96f224b27cb99958d453f1bd2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_9e1364cb75b98f2b5c5ddebd9aea27523874aba7b0be39846e186328531ca73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1364cb75b98f2b5c5ddebd9aea27523874aba7b0be39846e186328531ca73a->enter($__internal_9e1364cb75b98f2b5c5ddebd9aea27523874aba7b0be39846e186328531ca73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 64
        echo "    <div class=\"well\">
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_9e1364cb75b98f2b5c5ddebd9aea27523874aba7b0be39846e186328531ca73a->leave($__internal_9e1364cb75b98f2b5c5ddebd9aea27523874aba7b0be39846e186328531ca73a_prof);

        
        $__internal_ca8c3dd75db9262a25251d5a2edde09f1020f96f224b27cb99958d453f1bd2c4->leave($__internal_ca8c3dd75db9262a25251d5a2edde09f1020f96f224b27cb99958d453f1bd2c4_prof);

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
        return array (  227 => 65,  224 => 64,  215 => 63,  201 => 58,  198 => 57,  187 => 52,  183 => 51,  177 => 48,  171 => 45,  166 => 42,  161 => 40,  156 => 39,  153 => 38,  148 => 36,  143 => 35,  138 => 33,  133 => 32,  130 => 31,  128 => 30,  122 => 27,  118 => 25,  110 => 24,  105 => 23,  101 => 22,  93 => 21,  88 => 19,  84 => 18,  81 => 17,  77 => 16,  72 => 14,  66 => 11,  61 => 9,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                <a href=\"{{ path(\"viewPost\", {'slug' : post.getSlug() })}}\">
                    <h2> {{post.title}}</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by <b>{{ post.user.getUsername }}</b>, {{ post.created | date('Y-m-d') }} (last update: {{ post.updated | date('Y-m-d') }})</h5>
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
                </div>
                <br>
                <div>
                    <a style=\"position: absolute; left: 10%\" class=\"btn-xs btn-danger\" href=\"{{ path(\"deletepost\", {'post' : post.getId() })}}\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> Delete post </a>

                    <a style=\"position: absolute; left: 25%\" class=\"btn-xs btn-success\" href=\"{{ path(\"updatepost\", {'post' : post.getId() })}}\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> Update post </a>

                    <a  style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' : post.getCategory().getId() })}}\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> {{ post.getCategory().getName() }} </a>
                </div>
                <br>
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
