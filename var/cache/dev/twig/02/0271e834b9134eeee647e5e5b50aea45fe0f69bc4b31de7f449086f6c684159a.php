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
        $__internal_5c4eac63f690b107c38395449648775ad53e2ea57eede23cf421fa6184d81376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4eac63f690b107c38395449648775ad53e2ea57eede23cf421fa6184d81376->enter($__internal_5c4eac63f690b107c38395449648775ad53e2ea57eede23cf421fa6184d81376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByString.html.twig"));

        $__internal_718c3a4f6bff9e065619be379464d6435e92340879165243e89415a628e80229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718c3a4f6bff9e065619be379464d6435e92340879165243e89415a628e80229->enter($__internal_718c3a4f6bff9e065619be379464d6435e92340879165243e89415a628e80229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByString.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4eac63f690b107c38395449648775ad53e2ea57eede23cf421fa6184d81376->leave($__internal_5c4eac63f690b107c38395449648775ad53e2ea57eede23cf421fa6184d81376_prof);

        
        $__internal_718c3a4f6bff9e065619be379464d6435e92340879165243e89415a628e80229->leave($__internal_718c3a4f6bff9e065619be379464d6435e92340879165243e89415a628e80229_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9782ffc2bcbdf7e7782967509b4f36bebb17a7eeae9f14c71f105b5de8eea45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9782ffc2bcbdf7e7782967509b4f36bebb17a7eeae9f14c71f105b5de8eea45->enter($__internal_b9782ffc2bcbdf7e7782967509b4f36bebb17a7eeae9f14c71f105b5de8eea45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_721287cbcf2cd8ba886fee42aba2a311df92521463ef523ac6314835ff9e4ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721287cbcf2cd8ba886fee42aba2a311df92521463ef523ac6314835ff9e4ec6->enter($__internal_721287cbcf2cd8ba886fee42aba2a311df92521463ef523ac6314835ff9e4ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_721287cbcf2cd8ba886fee42aba2a311df92521463ef523ac6314835ff9e4ec6->leave($__internal_721287cbcf2cd8ba886fee42aba2a311df92521463ef523ac6314835ff9e4ec6_prof);

        
        $__internal_b9782ffc2bcbdf7e7782967509b4f36bebb17a7eeae9f14c71f105b5de8eea45->leave($__internal_b9782ffc2bcbdf7e7782967509b4f36bebb17a7eeae9f14c71f105b5de8eea45_prof);

    }

    // line 43
    public function block_right($context, array $blocks = array())
    {
        $__internal_ad5f36e5393eb6f0c03467149421fa0cfa1806511eb1764e1832b0a37920fc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5f36e5393eb6f0c03467149421fa0cfa1806511eb1764e1832b0a37920fc38->enter($__internal_ad5f36e5393eb6f0c03467149421fa0cfa1806511eb1764e1832b0a37920fc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_49844f6130e19927d5133870c818b5820cdfe15a11929deb34fe5148ca0f681e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49844f6130e19927d5133870c818b5820cdfe15a11929deb34fe5148ca0f681e->enter($__internal_49844f6130e19927d5133870c818b5820cdfe15a11929deb34fe5148ca0f681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 44
        echo "    <div class=\"well\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
    </div>
";
        
        $__internal_49844f6130e19927d5133870c818b5820cdfe15a11929deb34fe5148ca0f681e->leave($__internal_49844f6130e19927d5133870c818b5820cdfe15a11929deb34fe5148ca0f681e_prof);

        
        $__internal_ad5f36e5393eb6f0c03467149421fa0cfa1806511eb1764e1832b0a37920fc38->leave($__internal_ad5f36e5393eb6f0c03467149421fa0cfa1806511eb1764e1832b0a37920fc38_prof);

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
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"search\", {'str' : str ,'limit' : 5 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 5 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"search\", {'str' : str ,'limit' : 10 })}}\">
                    <span class=\"glyphicon glyphicon-filter\"></span> 10 </a>
                <a style=\"margin: 1px\" class=\"btn-xs btn-primary\" href=\"{{ path(\"search\", {'str' : str ,'limit' : 20 })}}\">
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
                    <a href=\"{{ path(\"postByUser\", {'user' :  post.getUser().getId() })}}\">
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
{% endblock %}", "@GeekBlog/Post/postByString.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postByString.html.twig");
    }
}
