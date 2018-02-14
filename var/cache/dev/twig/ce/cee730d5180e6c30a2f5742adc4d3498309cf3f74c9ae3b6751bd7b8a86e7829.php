<?php

/* @GeekBlog/Default/homepage.html.twig */
class __TwigTemplate_912269a1cdb98da45ccc825bc3fcd9dc6a3f5390a71bcb5bdc207379d92b4267 extends Twig_Template
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
        $__internal_cd04c909e9ce54783e1bd6507109a3271cbf98575346ba36a1b135264d1a3cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd04c909e9ce54783e1bd6507109a3271cbf98575346ba36a1b135264d1a3cb4->enter($__internal_cd04c909e9ce54783e1bd6507109a3271cbf98575346ba36a1b135264d1a3cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $__internal_62d33d74458512356d1f18347a3bdf8629bfe50422096e3bee7da9fe806dff5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d33d74458512356d1f18347a3bdf8629bfe50422096e3bee7da9fe806dff5e->enter($__internal_62d33d74458512356d1f18347a3bdf8629bfe50422096e3bee7da9fe806dff5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd04c909e9ce54783e1bd6507109a3271cbf98575346ba36a1b135264d1a3cb4->leave($__internal_cd04c909e9ce54783e1bd6507109a3271cbf98575346ba36a1b135264d1a3cb4_prof);

        
        $__internal_62d33d74458512356d1f18347a3bdf8629bfe50422096e3bee7da9fe806dff5e->leave($__internal_62d33d74458512356d1f18347a3bdf8629bfe50422096e3bee7da9fe806dff5e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b48f2cd0258039bcdfa515602f06b525bd18c187c3fb072870f34a631f9a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b48f2cd0258039bcdfa515602f06b525bd18c187c3fb072870f34a631f9a23->enter($__internal_36b48f2cd0258039bcdfa515602f06b525bd18c187c3fb072870f34a631f9a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a56aecf533da223bf49a073029e1ae1555050e0b80fef7f4cde16cae27d4fdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56aecf533da223bf49a073029e1ae1555050e0b80fef7f4cde16cae27d4fdea->enter($__internal_a56aecf533da223bf49a073029e1ae1555050e0b80fef7f4cde16cae27d4fdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <h2> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getUsername", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 12
                echo "                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
                echo " </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "<hr>
                <p>
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
                </p>
                <div align=\"right\">
                    <a class=\"btn-xs btn-primary\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <div class=\"navigation\" align=\"center\">
            ";
        // line 25
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_a56aecf533da223bf49a073029e1ae1555050e0b80fef7f4cde16cae27d4fdea->leave($__internal_a56aecf533da223bf49a073029e1ae1555050e0b80fef7f4cde16cae27d4fdea_prof);

        
        $__internal_36b48f2cd0258039bcdfa515602f06b525bd18c187c3fb072870f34a631f9a23->leave($__internal_36b48f2cd0258039bcdfa515602f06b525bd18c187c3fb072870f34a631f9a23_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_328d078312c7b0a5b9d1fd90f5a62f2370426b88498271c9a840c8fc8b7cf8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328d078312c7b0a5b9d1fd90f5a62f2370426b88498271c9a840c8fc8b7cf8cd->enter($__internal_328d078312c7b0a5b9d1fd90f5a62f2370426b88498271c9a840c8fc8b7cf8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_565bdafa3494144fd38e53204c902fb330b4142a7143917303f727fdeb040d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565bdafa3494144fd38e53204c902fb330b4142a7143917303f727fdeb040d91->enter($__internal_565bdafa3494144fd38e53204c902fb330b4142a7143917303f727fdeb040d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_565bdafa3494144fd38e53204c902fb330b4142a7143917303f727fdeb040d91->leave($__internal_565bdafa3494144fd38e53204c902fb330b4142a7143917303f727fdeb040d91_prof);

        
        $__internal_328d078312c7b0a5b9d1fd90f5a62f2370426b88498271c9a840c8fc8b7cf8cd->leave($__internal_328d078312c7b0a5b9d1fd90f5a62f2370426b88498271c9a840c8fc8b7cf8cd_prof);

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
        return array (  143 => 31,  134 => 30,  120 => 25,  117 => 24,  107 => 20,  103 => 19,  97 => 16,  93 => 14,  85 => 13,  80 => 12,  76 => 11,  70 => 10,  66 => 9,  63 => 8,  59 => 7,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                <h2> {{post.title}}</h2>
                <h5><span class=\"glyphicon glyphicon-time\"></span>Post by {{ post.user.getUsername }}, {{ post.date | date('Y-m-d') }}</h5>
                {% for tag in post.getTags %}
                <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId })}}\">
                    <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.getName }} </a>
                {% endfor %}<hr>
                <p>
                    {{ post.content}}
                </p>
                <div align=\"right\">
                    <a class=\"btn-xs btn-primary\" href=\"{{ path(\"postByCategory\", {'category' : post.getCategory().getId()})}}\">
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
