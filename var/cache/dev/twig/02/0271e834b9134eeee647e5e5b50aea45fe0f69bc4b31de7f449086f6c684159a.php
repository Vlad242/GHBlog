<?php

/* @GeekBlog/Post/postByString.html.twig */
class __TwigTemplate_34f9f2f44939f060733918b0aabfd169bb1d95614b8dc36fe852da842e52a3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/postByString.html.twig", 1);
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
        $__internal_64294452265413e6a8b3262f666406ce0054b9d21ba4326cf4dd5a885be82373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64294452265413e6a8b3262f666406ce0054b9d21ba4326cf4dd5a885be82373->enter($__internal_64294452265413e6a8b3262f666406ce0054b9d21ba4326cf4dd5a885be82373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByString.html.twig"));

        $__internal_802c4080da88fafe36e3de2074833701b50fb0742f15cf53ae50e0aa265b52f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802c4080da88fafe36e3de2074833701b50fb0742f15cf53ae50e0aa265b52f4->enter($__internal_802c4080da88fafe36e3de2074833701b50fb0742f15cf53ae50e0aa265b52f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByString.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64294452265413e6a8b3262f666406ce0054b9d21ba4326cf4dd5a885be82373->leave($__internal_64294452265413e6a8b3262f666406ce0054b9d21ba4326cf4dd5a885be82373_prof);

        
        $__internal_802c4080da88fafe36e3de2074833701b50fb0742f15cf53ae50e0aa265b52f4->leave($__internal_802c4080da88fafe36e3de2074833701b50fb0742f15cf53ae50e0aa265b52f4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_809c840ef9e0a98bf63941df9e064eedb504905ebfb84bafcfc5d9859ec2060a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809c840ef9e0a98bf63941df9e064eedb504905ebfb84bafcfc5d9859ec2060a->enter($__internal_809c840ef9e0a98bf63941df9e064eedb504905ebfb84bafcfc5d9859ec2060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0eb1e1ba98001d1a0bbf21d30e3522ee211827275592eb7f1abd4e2f227b4e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb1e1ba98001d1a0bbf21d30e3522ee211827275592eb7f1abd4e2f227b4e50->enter($__internal_0eb1e1ba98001d1a0bbf21d30e3522ee211827275592eb7f1abd4e2f227b4e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <div class=\"navigation\" align=\"center\">
            <div class=\"well\">
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\">Post per page -> </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("str" => ($context["str"] ?? $this->getContext($context, "str")), "limit" => 5)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("str" => ($context["str"] ?? $this->getContext($context, "str")), "limit" => 10)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("str" => ($context["str"] ?? $this->getContext($context, "str")), "limit" => 20)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 20 </a>
            </div>
            <div class=\"well\">
                <tr>
                    <th>Sorting by: </th>
                    <th>";
        // line 17
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Title", "p.title");
        echo " </th> |
                    <th>";
        // line 18
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Release", "p.created");
        echo "</th>
                </tr>
            </div>
            ";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "            <div class=\"well\">
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewPost", array("slug" => $this->getAttribute($context["post"], "getSlug", array(), "method"))), "html", null, true);
            echo "\">
                    <h2> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByUser", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-user\"></span> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getUsername", array()), "html", null, true);
            echo " </a>
                    ";
            // line 31
            echo "|
                    ";
            // line 32
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 33
                echo "                        ";
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "haveThisSubscriber", array(0 => $this->getAttribute($context["post"], "getUser", array(), "method")), "method")) {
                    // line 34
                    echo "                            <a style=\"color: Green\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                <span class=\"glyphicon glyphicon-paperclip\"></span> Subscribed </a>
                        ";
                } else {
                    // line 37
                    echo "                            <a style=\"color: Red\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                <span class=\"glyphicon glyphicon-paperclip\"></span> not Subscribed </a>
                        ";
                }
                // line 40
                echo "                    ";
            } else {
                // line 41
                echo "                        <a style=\"color: Grey\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\">
                            <span class=\"glyphicon glyphicon-paperclip\"></span> SignIn </a>
                    ";
            }
            // line 44
            echo "                    |";
            // line 45
            echo "                    , ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d"), "html", null, true);
            echo " (last update: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d"), "html", null, true);
            echo ")</h5>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 47
                echo "                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
                echo " </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "<hr>
                <p>
                    ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
                </p>
                <div>
                    ";
            // line 54
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 55
                echo "                        ";
                if ($this->getAttribute($context["post"], "isLiked", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) {
                    // line 56
                    echo "                            <a style=\"position: absolute; left: 10%; color: Red\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                <span class=\"glyphicon glyphicon-heart\"></span> ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                    echo " </a>
                        ";
                } else {
                    // line 59
                    echo "                            <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                <span class=\"glyphicon glyphicon-heart\"></span> ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                    echo " </a>
                        ";
                }
                // line 62
                echo "                    ";
            } else {
                // line 63
                echo "                        <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                            <span class=\"glyphicon glyphicon-heart\"></span> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                echo " </a>
                    ";
            }
            // line 66
            echo "
                    <a  style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 73
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_0eb1e1ba98001d1a0bbf21d30e3522ee211827275592eb7f1abd4e2f227b4e50->leave($__internal_0eb1e1ba98001d1a0bbf21d30e3522ee211827275592eb7f1abd4e2f227b4e50_prof);

        
        $__internal_809c840ef9e0a98bf63941df9e064eedb504905ebfb84bafcfc5d9859ec2060a->leave($__internal_809c840ef9e0a98bf63941df9e064eedb504905ebfb84bafcfc5d9859ec2060a_prof);

    }

    // line 78
    public function block_right($context, array $blocks = array())
    {
        $__internal_dd7533a0d8cf5b9f20c3a7c7bf6f696f8c03eab34cd39cad581e79d64ef54d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7533a0d8cf5b9f20c3a7c7bf6f696f8c03eab34cd39cad581e79d64ef54d78->enter($__internal_dd7533a0d8cf5b9f20c3a7c7bf6f696f8c03eab34cd39cad581e79d64ef54d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_e3b2b8973502a21ae86fb8728e6d9ff75aa281ed2d166148b4b97588dfc44a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b2b8973502a21ae86fb8728e6d9ff75aa281ed2d166148b4b97588dfc44a98->enter($__internal_e3b2b8973502a21ae86fb8728e6d9ff75aa281ed2d166148b4b97588dfc44a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 79
        echo "    <div class=\"well\">
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_e3b2b8973502a21ae86fb8728e6d9ff75aa281ed2d166148b4b97588dfc44a98->leave($__internal_e3b2b8973502a21ae86fb8728e6d9ff75aa281ed2d166148b4b97588dfc44a98_prof);

        
        $__internal_dd7533a0d8cf5b9f20c3a7c7bf6f696f8c03eab34cd39cad581e79d64ef54d78->leave($__internal_dd7533a0d8cf5b9f20c3a7c7bf6f696f8c03eab34cd39cad581e79d64ef54d78_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/postByString.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 80,  264 => 79,  255 => 78,  241 => 73,  238 => 72,  228 => 68,  224 => 67,  221 => 66,  216 => 64,  211 => 63,  208 => 62,  203 => 60,  198 => 59,  193 => 57,  188 => 56,  185 => 55,  183 => 54,  177 => 51,  173 => 49,  165 => 48,  160 => 47,  156 => 46,  149 => 45,  147 => 44,  140 => 41,  137 => 40,  130 => 37,  123 => 34,  120 => 33,  118 => 32,  115 => 31,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  94 => 24,  90 => 23,  85 => 21,  79 => 18,  75 => 17,  66 => 11,  61 => 9,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"search\", {'str' : str ,'limit' : 5 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"search\", {'str' : str ,'limit' : 10 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"search\", {'str' : str ,'limit' : 20 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 20 </a>
            </div>
            <div class=\"well\">
                <tr>
                    <th>Sorting by: </th>
                    <th>{{ knp_pagination_sortable(pagination, 'Title', 'p.title') }} </th> |
                    <th>{{ knp_pagination_sortable(pagination, 'Release', 'p.created') }}</th>
                </tr>
            </div>
            {{ knp_pagination_render(pagination) }}
        </div>
        {% for post in pagination %}
            <div class=\"well\">
                <a href=\"{{ path(\"viewPost\", {'slug' : post.getSlug() })}}\">
                    <h2> {{post.title}}</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by
                    <a href=\"{{ path(\"postByUser\", {'user' :  post.getUser().getId() })}}\">
                        <span class=\"glyphicon glyphicon-user\"></span> {{  post.user.getUsername  }} </a>
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
                    , {{ post.created | date('Y-m-d') }} (last update: {{ post.updated | date('Y-m-d') }})</h5>
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
{% endblock %}", "@GeekBlog/Post/postByString.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postByString.html.twig");
    }
}
