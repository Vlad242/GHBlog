<?php

/* @GeekBlog/Default/homepage.html.twig */
class __TwigTemplate_43de9e328ca19aaea1e4cb08e7cebb493aa1eabd315d9cf4b5f2267664744c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Default/homepage.html.twig", 1);
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
        $__internal_73d70d415e40c1ebc8cc9962e78990c284617d8c737ea4467fb1eba90f85789f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d70d415e40c1ebc8cc9962e78990c284617d8c737ea4467fb1eba90f85789f->enter($__internal_73d70d415e40c1ebc8cc9962e78990c284617d8c737ea4467fb1eba90f85789f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $__internal_b65943633289131cb62980bfc7104132a6b064e28b1b36ed449f17176c62c4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65943633289131cb62980bfc7104132a6b064e28b1b36ed449f17176c62c4dd->enter($__internal_b65943633289131cb62980bfc7104132a6b064e28b1b36ed449f17176c62c4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d70d415e40c1ebc8cc9962e78990c284617d8c737ea4467fb1eba90f85789f->leave($__internal_73d70d415e40c1ebc8cc9962e78990c284617d8c737ea4467fb1eba90f85789f_prof);

        
        $__internal_b65943633289131cb62980bfc7104132a6b064e28b1b36ed449f17176c62c4dd->leave($__internal_b65943633289131cb62980bfc7104132a6b064e28b1b36ed449f17176c62c4dd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0354779da087d040ddc87123d2871eb7e307c9a5c24ad326b8274952a4b67007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0354779da087d040ddc87123d2871eb7e307c9a5c24ad326b8274952a4b67007->enter($__internal_0354779da087d040ddc87123d2871eb7e307c9a5c24ad326b8274952a4b67007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_923ef150af9949be4bb268346cad5b63baa6982dfe4a174b70bf0f01df5b81eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923ef150af9949be4bb268346cad5b63baa6982dfe4a174b70bf0f01df5b81eb->enter($__internal_923ef150af9949be4bb268346cad5b63baa6982dfe4a174b70bf0f01df5b81eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <div class=\"navigation\" align=\"center\">
            <div class=\"well\">
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\">Post per page -> </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postlist", array("limit" => 5));
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postlist", array("limit" => 10));
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postlist", array("limit" => 20));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewPost", array("id" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                    <h2> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span> Post by
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
                echo "                          ";
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "haveThisSubscriber", array(0 => $this->getAttribute($context["post"], "getUser", array(), "method")), "method")) {
                    // line 34
                    echo "                          <a style=\"color: Green\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                              <span class=\"glyphicon glyphicon-paperclip\"></span> Subscribed </a>
                          ";
                } else {
                    // line 37
                    echo "                              <a style=\"color: Red\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                  <span class=\"glyphicon glyphicon-paperclip\"></span> not Subscribed </a>
                          ";
                }
                // line 40
                echo "                      ";
            } else {
                // line 41
                echo "                          <a style=\"color: Grey\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribecheck", array("user" => $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\">
                              <span class=\"glyphicon glyphicon-paperclip\"></span> SignIn </a>
                      ";
            }
            // line 44
            echo "                    |";
            // line 45
            echo "                    ,
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d"), "html", null, true);
            echo " (last update: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d"), "html", null, true);
            echo ")</h5>
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 48
                echo "                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array(), "method"), "html", null, true);
                echo " </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "<hr>
                <p>
                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
                </p>
                <div>
                    ";
            // line 55
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 56
                echo "                        ";
                if ($this->getAttribute($context["post"], "isLiked", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) {
                    // line 57
                    echo "                            <a style=\"position: absolute; left: 10%; color: Red\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                <span class=\"glyphicon glyphicon-heart\"></span> ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                    echo " </a>
                        ";
                } else {
                    // line 60
                    echo "                            <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                            <span class=\"glyphicon glyphicon-heart\"></span> ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                    echo " </a>
                        ";
                }
                // line 63
                echo "                       ";
            } else {
                // line 64
                echo "                        <a style=\"position: absolute; left: 10%; color: Blue\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                            <span class=\"glyphicon glyphicon-heart\"></span> ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
                echo " </a>
                    ";
            }
            // line 67
            echo "
                    <a style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 74
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_923ef150af9949be4bb268346cad5b63baa6982dfe4a174b70bf0f01df5b81eb->leave($__internal_923ef150af9949be4bb268346cad5b63baa6982dfe4a174b70bf0f01df5b81eb_prof);

        
        $__internal_0354779da087d040ddc87123d2871eb7e307c9a5c24ad326b8274952a4b67007->leave($__internal_0354779da087d040ddc87123d2871eb7e307c9a5c24ad326b8274952a4b67007_prof);

    }

    // line 79
    public function block_right($context, array $blocks = array())
    {
        $__internal_bec69dd6f718a3dd81cda703c4f1e444def52c4e7ff3fc18d6e1699fc56edbc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec69dd6f718a3dd81cda703c4f1e444def52c4e7ff3fc18d6e1699fc56edbc7->enter($__internal_bec69dd6f718a3dd81cda703c4f1e444def52c4e7ff3fc18d6e1699fc56edbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_5f432cc98d3b79396bc594c441e1f2489e0918860ab0850f00ec7a7b73e28278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f432cc98d3b79396bc594c441e1f2489e0918860ab0850f00ec7a7b73e28278->enter($__internal_5f432cc98d3b79396bc594c441e1f2489e0918860ab0850f00ec7a7b73e28278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 80
        echo "    <div class=\"well\">
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_5f432cc98d3b79396bc594c441e1f2489e0918860ab0850f00ec7a7b73e28278->leave($__internal_5f432cc98d3b79396bc594c441e1f2489e0918860ab0850f00ec7a7b73e28278_prof);

        
        $__internal_bec69dd6f718a3dd81cda703c4f1e444def52c4e7ff3fc18d6e1699fc56edbc7->leave($__internal_bec69dd6f718a3dd81cda703c4f1e444def52c4e7ff3fc18d6e1699fc56edbc7_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 81,  266 => 80,  257 => 79,  243 => 74,  240 => 73,  230 => 69,  226 => 68,  223 => 67,  218 => 65,  213 => 64,  210 => 63,  205 => 61,  200 => 60,  195 => 58,  190 => 57,  187 => 56,  185 => 55,  179 => 52,  175 => 50,  167 => 49,  162 => 48,  158 => 47,  152 => 46,  149 => 45,  147 => 44,  140 => 41,  137 => 40,  130 => 37,  123 => 34,  120 => 33,  118 => 32,  115 => 31,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  94 => 24,  90 => 23,  85 => 21,  79 => 18,  75 => 17,  66 => 11,  61 => 9,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postlist\", {'limit' : 5 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postlist\", {'limit' : 10 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postlist\", {'limit' : 20 })}}\">
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
                <a href=\"{{ path(\"viewPost\", {'id' : post.getId() })}}\">
                    <h2> {{post.title}}</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span> Post by
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
                    ,
                    {{ post.created | date('Y-m-d') }} (last update: {{ post.updated | date('Y-m-d') }})</h5>
                {% for tag in post.getTags %}
                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId() })}}\">
                    <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.getName() }} </a>
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
{% endblock %}", "@GeekBlog/Default/homepage.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/homepage.html.twig");
    }
}
