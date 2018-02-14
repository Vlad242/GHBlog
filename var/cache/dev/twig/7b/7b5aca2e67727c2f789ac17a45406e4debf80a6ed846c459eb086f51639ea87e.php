<?php

/* @GeekBlog/Post/postByTag.html.twig */
class __TwigTemplate_288dd28a3b7ba32ae6ed0a24ddfa2e8f7f88d0de565c3963f73bee83ecf67ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/postByTag.html.twig", 1);
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
        $__internal_27e1c880a5c3264e62b42fc1de788ac43727bbc76ee49846dc34dbde51ed490f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e1c880a5c3264e62b42fc1de788ac43727bbc76ee49846dc34dbde51ed490f->enter($__internal_27e1c880a5c3264e62b42fc1de788ac43727bbc76ee49846dc34dbde51ed490f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByTag.html.twig"));

        $__internal_d2217021e63d6d6a75f144f03c47aac4aca6bf8fa100588c92424c4612968a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2217021e63d6d6a75f144f03c47aac4aca6bf8fa100588c92424c4612968a5d->enter($__internal_d2217021e63d6d6a75f144f03c47aac4aca6bf8fa100588c92424c4612968a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByTag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e1c880a5c3264e62b42fc1de788ac43727bbc76ee49846dc34dbde51ed490f->leave($__internal_27e1c880a5c3264e62b42fc1de788ac43727bbc76ee49846dc34dbde51ed490f_prof);

        
        $__internal_d2217021e63d6d6a75f144f03c47aac4aca6bf8fa100588c92424c4612968a5d->leave($__internal_d2217021e63d6d6a75f144f03c47aac4aca6bf8fa100588c92424c4612968a5d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1d460a0ff4802ad9efb31d9a3c72e4ade19f98f5990d92309941faceb8a3d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d460a0ff4802ad9efb31d9a3c72e4ade19f98f5990d92309941faceb8a3d23->enter($__internal_d1d460a0ff4802ad9efb31d9a3c72e4ade19f98f5990d92309941faceb8a3d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc736b8327dcfa148746ebf472159ab958812c0eaa3b422606bcdc4ca599690c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc736b8327dcfa148746ebf472159ab958812c0eaa3b422606bcdc4ca599690c->enter($__internal_dc736b8327dcfa148746ebf472159ab958812c0eaa3b422606bcdc4ca599690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dc736b8327dcfa148746ebf472159ab958812c0eaa3b422606bcdc4ca599690c->leave($__internal_dc736b8327dcfa148746ebf472159ab958812c0eaa3b422606bcdc4ca599690c_prof);

        
        $__internal_d1d460a0ff4802ad9efb31d9a3c72e4ade19f98f5990d92309941faceb8a3d23->leave($__internal_d1d460a0ff4802ad9efb31d9a3c72e4ade19f98f5990d92309941faceb8a3d23_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_e7d10f966746fd90c99c4e0678da56bb1b5d14e3e32e6f0bca906be88c3f999a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d10f966746fd90c99c4e0678da56bb1b5d14e3e32e6f0bca906be88c3f999a->enter($__internal_e7d10f966746fd90c99c4e0678da56bb1b5d14e3e32e6f0bca906be88c3f999a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_82dea19441420dc7336b3aa4d383b5da31b1ffaf766aa8b057ce9583479d86fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82dea19441420dc7336b3aa4d383b5da31b1ffaf766aa8b057ce9583479d86fa->enter($__internal_82dea19441420dc7336b3aa4d383b5da31b1ffaf766aa8b057ce9583479d86fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_82dea19441420dc7336b3aa4d383b5da31b1ffaf766aa8b057ce9583479d86fa->leave($__internal_82dea19441420dc7336b3aa4d383b5da31b1ffaf766aa8b057ce9583479d86fa_prof);

        
        $__internal_e7d10f966746fd90c99c4e0678da56bb1b5d14e3e32e6f0bca906be88c3f999a->leave($__internal_e7d10f966746fd90c99c4e0678da56bb1b5d14e3e32e6f0bca906be88c3f999a_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/postByTag.html.twig";
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
{% endblock %}", "@GeekBlog/Post/postByTag.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postByTag.html.twig");
    }
}
