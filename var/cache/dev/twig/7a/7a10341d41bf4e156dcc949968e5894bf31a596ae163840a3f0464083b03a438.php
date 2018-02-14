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
        $__internal_1390a53287cfa29b9ce29b2b44d1d4e973ebadb6b3a40fadad0bcec8167e9dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1390a53287cfa29b9ce29b2b44d1d4e973ebadb6b3a40fadad0bcec8167e9dfb->enter($__internal_1390a53287cfa29b9ce29b2b44d1d4e973ebadb6b3a40fadad0bcec8167e9dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $__internal_f78e3e8ea0691444444c13428c90747831872a6a85fb16013be35a6725da7534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78e3e8ea0691444444c13428c90747831872a6a85fb16013be35a6725da7534->enter($__internal_f78e3e8ea0691444444c13428c90747831872a6a85fb16013be35a6725da7534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1390a53287cfa29b9ce29b2b44d1d4e973ebadb6b3a40fadad0bcec8167e9dfb->leave($__internal_1390a53287cfa29b9ce29b2b44d1d4e973ebadb6b3a40fadad0bcec8167e9dfb_prof);

        
        $__internal_f78e3e8ea0691444444c13428c90747831872a6a85fb16013be35a6725da7534->leave($__internal_f78e3e8ea0691444444c13428c90747831872a6a85fb16013be35a6725da7534_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_749a60a1254aaf97eaac3cc3d9eaf58399880986965ee7e1ef9b8e1195301fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749a60a1254aaf97eaac3cc3d9eaf58399880986965ee7e1ef9b8e1195301fbe->enter($__internal_749a60a1254aaf97eaac3cc3d9eaf58399880986965ee7e1ef9b8e1195301fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23e89dc772bbf2087a4f2ff63892acc7ee77e4b5400c0861e6ff9ac330b06673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e89dc772bbf2087a4f2ff63892acc7ee77e4b5400c0861e6ff9ac330b06673->enter($__internal_23e89dc772bbf2087a4f2ff63892acc7ee77e4b5400c0861e6ff9ac330b06673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array(), "method"), "html", null, true);
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
        
        $__internal_23e89dc772bbf2087a4f2ff63892acc7ee77e4b5400c0861e6ff9ac330b06673->leave($__internal_23e89dc772bbf2087a4f2ff63892acc7ee77e4b5400c0861e6ff9ac330b06673_prof);

        
        $__internal_749a60a1254aaf97eaac3cc3d9eaf58399880986965ee7e1ef9b8e1195301fbe->leave($__internal_749a60a1254aaf97eaac3cc3d9eaf58399880986965ee7e1ef9b8e1195301fbe_prof);

    }

    // line 32
    public function block_right($context, array $blocks = array())
    {
        $__internal_1850c0a0f3b34557736a2594140b48c4caa255f60db8fa1147b43ae84cbd49a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1850c0a0f3b34557736a2594140b48c4caa255f60db8fa1147b43ae84cbd49a1->enter($__internal_1850c0a0f3b34557736a2594140b48c4caa255f60db8fa1147b43ae84cbd49a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_b7e4fe82e22dd951c2a42dbe422744817da35842c268aae2652c4d07767c9845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e4fe82e22dd951c2a42dbe422744817da35842c268aae2652c4d07767c9845->enter($__internal_b7e4fe82e22dd951c2a42dbe422744817da35842c268aae2652c4d07767c9845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_b7e4fe82e22dd951c2a42dbe422744817da35842c268aae2652c4d07767c9845->leave($__internal_b7e4fe82e22dd951c2a42dbe422744817da35842c268aae2652c4d07767c9845_prof);

        
        $__internal_1850c0a0f3b34557736a2594140b48c4caa255f60db8fa1147b43ae84cbd49a1->leave($__internal_1850c0a0f3b34557736a2594140b48c4caa255f60db8fa1147b43ae84cbd49a1_prof);

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
    {{ render(controller('GeekBlogBundle:Tag:list')) }}
{% endblock %}", "@GeekBlog/Default/homepage.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/homepage.html.twig");
    }
}
