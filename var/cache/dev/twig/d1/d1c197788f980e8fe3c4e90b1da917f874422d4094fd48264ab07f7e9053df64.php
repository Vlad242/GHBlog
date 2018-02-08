<?php

/* @GeekBlog/Post/postList.html.twig */
class __TwigTemplate_2a618d54e6a3d71b330c09bf804b45c879e0bb2ef68c6eb79b3f3870ee76aa5f extends Twig_Template
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
        $__internal_2ce97f395d196b886ea2e536c90f806ff6f0b684b146b8ae61ab261333b4938f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce97f395d196b886ea2e536c90f806ff6f0b684b146b8ae61ab261333b4938f->enter($__internal_2ce97f395d196b886ea2e536c90f806ff6f0b684b146b8ae61ab261333b4938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postList.html.twig"));

        $__internal_98d88e7c662160c07d8a5a085b8b2587490242259a6c67763408a03186dff432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d88e7c662160c07d8a5a085b8b2587490242259a6c67763408a03186dff432->enter($__internal_98d88e7c662160c07d8a5a085b8b2587490242259a6c67763408a03186dff432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Post/postList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce97f395d196b886ea2e536c90f806ff6f0b684b146b8ae61ab261333b4938f->leave($__internal_2ce97f395d196b886ea2e536c90f806ff6f0b684b146b8ae61ab261333b4938f_prof);

        
        $__internal_98d88e7c662160c07d8a5a085b8b2587490242259a6c67763408a03186dff432->leave($__internal_98d88e7c662160c07d8a5a085b8b2587490242259a6c67763408a03186dff432_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_428d1d6de49ce6b6cb7a17feeeb30017ad7b941ab754312624ab23f2cdec8f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428d1d6de49ce6b6cb7a17feeeb30017ad7b941ab754312624ab23f2cdec8f08->enter($__internal_428d1d6de49ce6b6cb7a17feeeb30017ad7b941ab754312624ab23f2cdec8f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6ad473931fd06638982604a03c49ff1d55a9c7a905692a5b92612a2f6fd268f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ad473931fd06638982604a03c49ff1d55a9c7a905692a5b92612a2f6fd268f->enter($__internal_e6ad473931fd06638982604a03c49ff1d55a9c7a905692a5b92612a2f6fd268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6ad473931fd06638982604a03c49ff1d55a9c7a905692a5b92612a2f6fd268f->leave($__internal_e6ad473931fd06638982604a03c49ff1d55a9c7a905692a5b92612a2f6fd268f_prof);

        
        $__internal_428d1d6de49ce6b6cb7a17feeeb30017ad7b941ab754312624ab23f2cdec8f08->leave($__internal_428d1d6de49ce6b6cb7a17feeeb30017ad7b941ab754312624ab23f2cdec8f08_prof);

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
