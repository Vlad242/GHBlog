<?php

/* @GeekBlog/Post/postList.html.twig */
class __TwigTemplate_9503435d3fbffc5538163c811312acd966679c3b476d86e89dc90015d4fb311e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Post/postList.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65c0b7b874e9851d11dfe573915ba095ed2364306eebbbac8c52d5cc0849910f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c0b7b874e9851d11dfe573915ba095ed2364306eebbbac8c52d5cc0849910f->enter($__internal_65c0b7b874e9851d11dfe573915ba095ed2364306eebbbac8c52d5cc0849910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postList.html.twig"));

        $__internal_1cdafaa288cfd030c017e7c1b86f64fe2c4eec4518493e5f6469b79af946311d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdafaa288cfd030c017e7c1b86f64fe2c4eec4518493e5f6469b79af946311d->enter($__internal_1cdafaa288cfd030c017e7c1b86f64fe2c4eec4518493e5f6469b79af946311d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c0b7b874e9851d11dfe573915ba095ed2364306eebbbac8c52d5cc0849910f->leave($__internal_65c0b7b874e9851d11dfe573915ba095ed2364306eebbbac8c52d5cc0849910f_prof);

        
        $__internal_1cdafaa288cfd030c017e7c1b86f64fe2c4eec4518493e5f6469b79af946311d->leave($__internal_1cdafaa288cfd030c017e7c1b86f64fe2c4eec4518493e5f6469b79af946311d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6102a70b95b8f9d35f104101b39ebe2b3c7ca195647ee238834e7a7638aaf56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6102a70b95b8f9d35f104101b39ebe2b3c7ca195647ee238834e7a7638aaf56a->enter($__internal_6102a70b95b8f9d35f104101b39ebe2b3c7ca195647ee238834e7a7638aaf56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc30870125404cfa0d8929ec0c2627f5f03949b3ca2def1d292018ec0d0efd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc30870125404cfa0d8929ec0c2627f5f03949b3ca2def1d292018ec0d0efd3e->enter($__internal_fc30870125404cfa0d8929ec0c2627f5f03949b3ca2def1d292018ec0d0efd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"count\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
</div>
<table>
    <tr>
        ";
        // line 9
        echo "        <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Id", "p.id");
        echo "</th>
        <th";
        // line 10
        if ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "isSorted", array(0 => "p.title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "title", "p.title");
        echo "</th>
        <th>";
        // line 11
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Release", "p.date");
        echo "</th>
    </tr>

    ";
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "        <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>

<div class=\"navigation\">
    ";
        // line 25
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
</div>
";
        
        $__internal_fc30870125404cfa0d8929ec0c2627f5f03949b3ca2def1d292018ec0d0efd3e->leave($__internal_fc30870125404cfa0d8929ec0c2627f5f03949b3ca2def1d292018ec0d0efd3e_prof);

        
        $__internal_6102a70b95b8f9d35f104101b39ebe2b3c7ca195647ee238834e7a7638aaf56a->leave($__internal_6102a70b95b8f9d35f104101b39ebe2b3c7ca195647ee238834e7a7638aaf56a_prof);

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
        return array (  133 => 25,  128 => 22,  111 => 19,  107 => 18,  103 => 17,  96 => 16,  78 => 15,  72 => 11,  64 => 10,  59 => 9,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"count\">
    {{ pagination.getTotalItemCount }}
</div>
<table>
    <tr>
        {# sorting of properties based on query components #}
        <th>{{ knp_pagination_sortable(pagination, 'Id', 'p.id') }}</th>
        <th{% if pagination.isSorted('p.title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'title', 'p.title') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'Release', 'p.date') }}</th>
    </tr>

    {# table body #}
    {% for post in pagination %}
        <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
            <td>{{ post.id }}</td>
            <td>{{ post.title }}</td>
            <td>{{ post.date | date('Y-m-d') }}</td>
        </tr>
    {% endfor %}
</table>

<div class=\"navigation\">
    {{ knp_pagination_render(pagination) }}
</div>
{% endblock %}", "@GeekBlog/Post/postList.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Post/postList.html.twig");
    }
}
