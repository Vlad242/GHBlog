<?php

/* @GeekBlog/Post/postByCategory.html.twig */
class __TwigTemplate_d74415abd4ede12f24326052f0db43d5c7462518e8d0c0dca87500d7f20335b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/postByCategory.html.twig", 1);
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
        $__internal_cddddaae33010a3d6666f3a205bbd471f16b145ca8b1b6ab67eb8d715c6874a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddddaae33010a3d6666f3a205bbd471f16b145ca8b1b6ab67eb8d715c6874a8->enter($__internal_cddddaae33010a3d6666f3a205bbd471f16b145ca8b1b6ab67eb8d715c6874a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByCategory.html.twig"));

        $__internal_dc326cc582dbe8af40a9bc2500a06023065aea2ded0f9cec0b80ff73450a2543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc326cc582dbe8af40a9bc2500a06023065aea2ded0f9cec0b80ff73450a2543->enter($__internal_dc326cc582dbe8af40a9bc2500a06023065aea2ded0f9cec0b80ff73450a2543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postByCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cddddaae33010a3d6666f3a205bbd471f16b145ca8b1b6ab67eb8d715c6874a8->leave($__internal_cddddaae33010a3d6666f3a205bbd471f16b145ca8b1b6ab67eb8d715c6874a8_prof);

        
        $__internal_dc326cc582dbe8af40a9bc2500a06023065aea2ded0f9cec0b80ff73450a2543->leave($__internal_dc326cc582dbe8af40a9bc2500a06023065aea2ded0f9cec0b80ff73450a2543_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fc7ddfabe5c91da22f3267edf0fc74be25955281d0eee0edabf8cc17e8183e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc7ddfabe5c91da22f3267edf0fc74be25955281d0eee0edabf8cc17e8183e4->enter($__internal_5fc7ddfabe5c91da22f3267edf0fc74be25955281d0eee0edabf8cc17e8183e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9db1ddb793a9287142202e22424d1d5023d8d7c02ee1a18e93021f5b796f6742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db1ddb793a9287142202e22424d1d5023d8d7c02ee1a18e93021f5b796f6742->enter($__internal_9db1ddb793a9287142202e22424d1d5023d8d7c02ee1a18e93021f5b796f6742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9db1ddb793a9287142202e22424d1d5023d8d7c02ee1a18e93021f5b796f6742->leave($__internal_9db1ddb793a9287142202e22424d1d5023d8d7c02ee1a18e93021f5b796f6742_prof);

        
        $__internal_5fc7ddfabe5c91da22f3267edf0fc74be25955281d0eee0edabf8cc17e8183e4->leave($__internal_5fc7ddfabe5c91da22f3267edf0fc74be25955281d0eee0edabf8cc17e8183e4_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_16f0536810a6efbda986e9f962483ebde36dab7c3c25865e6524bbbcaa1d81cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f0536810a6efbda986e9f962483ebde36dab7c3c25865e6524bbbcaa1d81cf->enter($__internal_16f0536810a6efbda986e9f962483ebde36dab7c3c25865e6524bbbcaa1d81cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_33aa63bfead72d4f1b441a28c08b35d21ee7da826ef51393f989cb7c651f65ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33aa63bfead72d4f1b441a28c08b35d21ee7da826ef51393f989cb7c651f65ef->enter($__internal_33aa63bfead72d4f1b441a28c08b35d21ee7da826ef51393f989cb7c651f65ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GeekBlogBundle:Tag:list"));
        echo "
";
        
        $__internal_33aa63bfead72d4f1b441a28c08b35d21ee7da826ef51393f989cb7c651f65ef->leave($__internal_33aa63bfead72d4f1b441a28c08b35d21ee7da826ef51393f989cb7c651f65ef_prof);

        
        $__internal_16f0536810a6efbda986e9f962483ebde36dab7c3c25865e6524bbbcaa1d81cf->leave($__internal_16f0536810a6efbda986e9f962483ebde36dab7c3c25865e6524bbbcaa1d81cf_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Post/postByCategory.html.twig";
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
{% endblock %}", "@GeekBlog/Post/postByCategory.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postByCategory.html.twig");
    }
}
