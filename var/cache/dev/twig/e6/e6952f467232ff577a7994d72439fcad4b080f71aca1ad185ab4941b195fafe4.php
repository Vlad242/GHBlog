<?php

/* @GeekBlog/Post/postByTag.html.twig */
class __TwigTemplate_57cff89ab3fe8dcd2a07acadd271b56a8b3be33f5017c433f4e0e91154a03332 extends Twig_Template
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
        $__internal_b2e02253897e179fe103f6df5d6cc033fbc9b474f8350ff83a34ed496ba6db45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e02253897e179fe103f6df5d6cc033fbc9b474f8350ff83a34ed496ba6db45->enter($__internal_b2e02253897e179fe103f6df5d6cc033fbc9b474f8350ff83a34ed496ba6db45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByTag.html.twig"));

        $__internal_9e983fc1521cc1c95ebea3cfbebe3df637e0c872686e3c43aa91f67691609ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e983fc1521cc1c95ebea3cfbebe3df637e0c872686e3c43aa91f67691609ffc->enter($__internal_9e983fc1521cc1c95ebea3cfbebe3df637e0c872686e3c43aa91f67691609ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByTag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e02253897e179fe103f6df5d6cc033fbc9b474f8350ff83a34ed496ba6db45->leave($__internal_b2e02253897e179fe103f6df5d6cc033fbc9b474f8350ff83a34ed496ba6db45_prof);

        
        $__internal_9e983fc1521cc1c95ebea3cfbebe3df637e0c872686e3c43aa91f67691609ffc->leave($__internal_9e983fc1521cc1c95ebea3cfbebe3df637e0c872686e3c43aa91f67691609ffc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cdc15e743064f1e2fff3d30aec4790ca1851fed4795c33912b179ddab2d4c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdc15e743064f1e2fff3d30aec4790ca1851fed4795c33912b179ddab2d4c6f->enter($__internal_2cdc15e743064f1e2fff3d30aec4790ca1851fed4795c33912b179ddab2d4c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8913b5d2250d5c10371efc68563699232cbee9782a1fdb44ef44993b007e69c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8913b5d2250d5c10371efc68563699232cbee9782a1fdb44ef44993b007e69c4->enter($__internal_8913b5d2250d5c10371efc68563699232cbee9782a1fdb44ef44993b007e69c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
                echo "\">
                    <span class=\"glyphicon glyphicon-tag\"></span> ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array()), "html", null, true);
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
        
        $__internal_8913b5d2250d5c10371efc68563699232cbee9782a1fdb44ef44993b007e69c4->leave($__internal_8913b5d2250d5c10371efc68563699232cbee9782a1fdb44ef44993b007e69c4_prof);

        
        $__internal_2cdc15e743064f1e2fff3d30aec4790ca1851fed4795c33912b179ddab2d4c6f->leave($__internal_2cdc15e743064f1e2fff3d30aec4790ca1851fed4795c33912b179ddab2d4c6f_prof);

    }

    // line 32
    public function block_right($context, array $blocks = array())
    {
        $__internal_feeb2244b34b4153bf6e26624713af49946ce9c785eee0f72381c276bbb409e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feeb2244b34b4153bf6e26624713af49946ce9c785eee0f72381c276bbb409e5->enter($__internal_feeb2244b34b4153bf6e26624713af49946ce9c785eee0f72381c276bbb409e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_d08cdc752e241c9cba86d942c0f1d1ee3fb9169b6b6691433faebce1c30f3c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08cdc752e241c9cba86d942c0f1d1ee3fb9169b6b6691433faebce1c30f3c35->enter($__internal_d08cdc752e241c9cba86d942c0f1d1ee3fb9169b6b6691433faebce1c30f3c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_d08cdc752e241c9cba86d942c0f1d1ee3fb9169b6b6691433faebce1c30f3c35->leave($__internal_d08cdc752e241c9cba86d942c0f1d1ee3fb9169b6b6691433faebce1c30f3c35_prof);

        
        $__internal_feeb2244b34b4153bf6e26624713af49946ce9c785eee0f72381c276bbb409e5->leave($__internal_feeb2244b34b4153bf6e26624713af49946ce9c785eee0f72381c276bbb409e5_prof);

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
