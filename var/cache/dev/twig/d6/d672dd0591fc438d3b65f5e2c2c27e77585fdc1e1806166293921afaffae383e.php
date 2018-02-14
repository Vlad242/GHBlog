<?php

/* @GeekBlog/Post/postList.html.twig */
class __TwigTemplate_9503435d3fbffc5538163c811312acd966679c3b476d86e89dc90015d4fb311e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26426a433456316d71fa4bfa8b0f8a285f307653d25001c1d53ec2557de50a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26426a433456316d71fa4bfa8b0f8a285f307653d25001c1d53ec2557de50a1f->enter($__internal_26426a433456316d71fa4bfa8b0f8a285f307653d25001c1d53ec2557de50a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postList.html.twig"));

        $__internal_22586db3f41e40ed0b6161df73a8b7c223e18a3cd30d2bb12951a5b2c3dedf51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22586db3f41e40ed0b6161df73a8b7c223e18a3cd30d2bb12951a5b2c3dedf51->enter($__internal_22586db3f41e40ed0b6161df73a8b7c223e18a3cd30d2bb12951a5b2c3dedf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postList.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <div class=\"navigation\" align=\"center\">
        ";
        // line 3
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
    </div>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "        <div class=\"well\">
            <h2> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
            <h5><span class=\"glyphicon glyphicon-time\"></span>Post by ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getUsername", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 10
                echo "            <a class=\"btn-xs btn-primary\" style=\"margin: 1px\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
                echo "\">
                <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
                echo " </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "<hr>
            <p>
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
            </p>
            <div align=\"right\">
                <a class=\"btn-xs btn-primary\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo " </a>
            </div>
             </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <div class=\"navigation\" align=\"center\">
        ";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
    </div>
</div>";
        
        $__internal_26426a433456316d71fa4bfa8b0f8a285f307653d25001c1d53ec2557de50a1f->leave($__internal_26426a433456316d71fa4bfa8b0f8a285f307653d25001c1d53ec2557de50a1f_prof);

        
        $__internal_22586db3f41e40ed0b6161df73a8b7c223e18a3cd30d2bb12951a5b2c3dedf51->leave($__internal_22586db3f41e40ed0b6161df73a8b7c223e18a3cd30d2bb12951a5b2c3dedf51_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/postList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  92 => 22,  82 => 18,  78 => 17,  72 => 14,  68 => 12,  60 => 11,  55 => 10,  51 => 9,  45 => 8,  41 => 7,  38 => 6,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
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
</div>", "@GeekBlog/Post/postList.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postList.html.twig");
    }
}
