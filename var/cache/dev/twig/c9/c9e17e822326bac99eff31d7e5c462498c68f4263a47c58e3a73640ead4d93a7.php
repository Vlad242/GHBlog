<?php

/* @GeekBlog/Post/postByUser.html.twig */
class __TwigTemplate_7f0fea3f4ce5ca7b72f75ebf0e760f394bff183f4bd605b4e258ecdca3396db3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/postByUser.html.twig", 1);
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
        $__internal_080353fb5adec77d0f143558d3c446b709b82b0564103186638df35c96d454cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080353fb5adec77d0f143558d3c446b709b82b0564103186638df35c96d454cb->enter($__internal_080353fb5adec77d0f143558d3c446b709b82b0564103186638df35c96d454cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByUser.html.twig"));

        $__internal_6008132b5e92c68e1d3f25d74b2ce751ebf0d08ee14efaf7333e4a29ff9a9d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6008132b5e92c68e1d3f25d74b2ce751ebf0d08ee14efaf7333e4a29ff9a9d4a->enter($__internal_6008132b5e92c68e1d3f25d74b2ce751ebf0d08ee14efaf7333e4a29ff9a9d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080353fb5adec77d0f143558d3c446b709b82b0564103186638df35c96d454cb->leave($__internal_080353fb5adec77d0f143558d3c446b709b82b0564103186638df35c96d454cb_prof);

        
        $__internal_6008132b5e92c68e1d3f25d74b2ce751ebf0d08ee14efaf7333e4a29ff9a9d4a->leave($__internal_6008132b5e92c68e1d3f25d74b2ce751ebf0d08ee14efaf7333e4a29ff9a9d4a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8a63e340dc9458d4af9d3684117e09e39e715b2044f377b342c29dd8cbe0d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a63e340dc9458d4af9d3684117e09e39e715b2044f377b342c29dd8cbe0d0c->enter($__internal_c8a63e340dc9458d4af9d3684117e09e39e715b2044f377b342c29dd8cbe0d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a24633b84bb316d3aa9cb9aff8a4ffdf65f81eaae8b197f26fb6917e7ad9630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a24633b84bb316d3aa9cb9aff8a4ffdf65f81eaae8b197f26fb6917e7ad9630->enter($__internal_4a24633b84bb316d3aa9cb9aff8a4ffdf65f81eaae8b197f26fb6917e7ad9630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <div class=\"navigation\" align=\"center\">
            <div class=\"well\">
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\">Post per page -> </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByUser", array("user" => $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array()), "limit" => 5)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByUser", array("user" => $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array()), "limit" => 10)), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByUser", array("user" => $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array()), "limit" => 20)), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByUser", array("user" => $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array()))), "html", null, true);
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
                <div>
                    <a style=\"position: absolute; left: 10%; color: Red\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-heart\"></span> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getLikeCount", array(), "method"), "html", null, true);
            echo " </a>
                    <a style=\"position: absolute; right: 10%\" class=\"btn-xs btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 40
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_4a24633b84bb316d3aa9cb9aff8a4ffdf65f81eaae8b197f26fb6917e7ad9630->leave($__internal_4a24633b84bb316d3aa9cb9aff8a4ffdf65f81eaae8b197f26fb6917e7ad9630_prof);

        
        $__internal_c8a63e340dc9458d4af9d3684117e09e39e715b2044f377b342c29dd8cbe0d0c->leave($__internal_c8a63e340dc9458d4af9d3684117e09e39e715b2044f377b342c29dd8cbe0d0c_prof);

    }

    // line 45
    public function block_right($context, array $blocks = array())
    {
        $__internal_87adcad919fffc85ba8d6e9c794a552de5e8388007115d3287c4189a4329ff46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87adcad919fffc85ba8d6e9c794a552de5e8388007115d3287c4189a4329ff46->enter($__internal_87adcad919fffc85ba8d6e9c794a552de5e8388007115d3287c4189a4329ff46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_d3ce884c49ba964a00a453e21a7ad7fe7845256404e4f3cba6472c9024a3ffdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ce884c49ba964a00a453e21a7ad7fe7845256404e4f3cba6472c9024a3ffdd->enter($__internal_d3ce884c49ba964a00a453e21a7ad7fe7845256404e4f3cba6472c9024a3ffdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 46
        echo "    <div class=\"well\">
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_d3ce884c49ba964a00a453e21a7ad7fe7845256404e4f3cba6472c9024a3ffdd->leave($__internal_d3ce884c49ba964a00a453e21a7ad7fe7845256404e4f3cba6472c9024a3ffdd_prof);

        
        $__internal_87adcad919fffc85ba8d6e9c794a552de5e8388007115d3287c4189a4329ff46->leave($__internal_87adcad919fffc85ba8d6e9c794a552de5e8388007115d3287c4189a4329ff46_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/postByUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 47,  179 => 46,  170 => 45,  156 => 40,  153 => 39,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  125 => 29,  121 => 27,  113 => 26,  108 => 25,  104 => 24,  98 => 23,  94 => 22,  88 => 19,  84 => 18,  81 => 17,  77 => 16,  72 => 14,  66 => 11,  61 => 9,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByUser\", {'user' :  currentUser.id , 'limit' : 5 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByUser\", {'user' :  currentUser.id , 'limit' : 10 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postByUser\", {'user' :  currentUser.id , 'limit' : 20 })}}\">
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
                    <a href=\"{{ path(\"postByUser\", {'user' :  currentUser.id })}}\">
                        <span class=\"glyphicon glyphicon-user\"></span> {{  post.user.getUsername  }} </a>, {{ post.created | date('Y-m-d') }}</h5>
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
{% endblock %}", "@GeekBlog/Post/postByUser.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postByUser.html.twig");
    }
}
