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
        $__internal_913cf0551635e94ac92c788259a54f2d540de84c8b165768705df588c0bd44f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913cf0551635e94ac92c788259a54f2d540de84c8b165768705df588c0bd44f2->enter($__internal_913cf0551635e94ac92c788259a54f2d540de84c8b165768705df588c0bd44f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $__internal_abb0c004d5cea576a810778a4b6c790ba63edd17143927c0fe2113edb8e14828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb0c004d5cea576a810778a4b6c790ba63edd17143927c0fe2113edb8e14828->enter($__internal_abb0c004d5cea576a810778a4b6c790ba63edd17143927c0fe2113edb8e14828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913cf0551635e94ac92c788259a54f2d540de84c8b165768705df588c0bd44f2->leave($__internal_913cf0551635e94ac92c788259a54f2d540de84c8b165768705df588c0bd44f2_prof);

        
        $__internal_abb0c004d5cea576a810778a4b6c790ba63edd17143927c0fe2113edb8e14828->leave($__internal_abb0c004d5cea576a810778a4b6c790ba63edd17143927c0fe2113edb8e14828_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_215e07bb831b18d3ea1002e49515eccb7501f5f6241f912b99212566af11a016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215e07bb831b18d3ea1002e49515eccb7501f5f6241f912b99212566af11a016->enter($__internal_215e07bb831b18d3ea1002e49515eccb7501f5f6241f912b99212566af11a016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4260ce94b33bd6831d3caa82f105bfb214d58616b2c84f09fab182d2f5d70c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4260ce94b33bd6831d3caa82f105bfb214d58616b2c84f09fab182d2f5d70c1f->enter($__internal_4260ce94b33bd6831d3caa82f105bfb214d58616b2c84f09fab182d2f5d70c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viewPost", array("id" => $this->getAttribute($context["post"], "getSlug", array(), "method"))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array(), "method"), "html", null, true);
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
        
        $__internal_4260ce94b33bd6831d3caa82f105bfb214d58616b2c84f09fab182d2f5d70c1f->leave($__internal_4260ce94b33bd6831d3caa82f105bfb214d58616b2c84f09fab182d2f5d70c1f_prof);

        
        $__internal_215e07bb831b18d3ea1002e49515eccb7501f5f6241f912b99212566af11a016->leave($__internal_215e07bb831b18d3ea1002e49515eccb7501f5f6241f912b99212566af11a016_prof);

    }

    // line 43
    public function block_right($context, array $blocks = array())
    {
        $__internal_9a60ac02f1cdc593db855ccfd6e2eda15a0bd73fda38d26962fb46698fe6ea6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a60ac02f1cdc593db855ccfd6e2eda15a0bd73fda38d26962fb46698fe6ea6c->enter($__internal_9a60ac02f1cdc593db855ccfd6e2eda15a0bd73fda38d26962fb46698fe6ea6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_5ca9ccd129bc005aed800189d7a85c0822918b7aca5b06b81b872becce911abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca9ccd129bc005aed800189d7a85c0822918b7aca5b06b81b872becce911abf->enter($__internal_5ca9ccd129bc005aed800189d7a85c0822918b7aca5b06b81b872becce911abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 44
        echo "    <div class=\"well\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_5ca9ccd129bc005aed800189d7a85c0822918b7aca5b06b81b872becce911abf->leave($__internal_5ca9ccd129bc005aed800189d7a85c0822918b7aca5b06b81b872becce911abf_prof);

        
        $__internal_9a60ac02f1cdc593db855ccfd6e2eda15a0bd73fda38d26962fb46698fe6ea6c->leave($__internal_9a60ac02f1cdc593db855ccfd6e2eda15a0bd73fda38d26962fb46698fe6ea6c_prof);

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
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postlist\", {'limit' : 5 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postlist\", {'limit' : 10 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"postlist\", {'limit' : 20 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 20 </a>
            </div>
            {{ knp_pagination_render(pagination) }}
        </div>
        {% for post in pagination %}
            <div class=\"well\">
                <a href=\"{{ path(\"viewPost\", {'id' : post.getSlug() })}}\">
                    <h2> {{post.title}}</h2>
                </a>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by
                    <a href=\"{{ path(\"postByUser\", {'user' :  post.getUser().getId() })}}\">
                        <span class=\"glyphicon glyphicon-user\"></span> {{  post.user.getUsername  }} </a>, {{ post.created | date('Y-m-d') }}</h5>
                {% for tag in post.getTags %}
                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId() })}}\">
                    <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.getName() }} </a>
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
{% endblock %}", "@GeekBlog/Default/homepage.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/homepage.html.twig");
    }
}
