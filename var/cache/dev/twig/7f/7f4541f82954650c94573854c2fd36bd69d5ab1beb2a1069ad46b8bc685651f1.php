<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_f3479c5e30ecf64d1432fa30974f9383d3c03e6dede0c279ff46d9a3ef14c616 extends Twig_Template
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
        $__internal_378cc6c668a14cb246b9e2d0492f1400958bc624340b801f251b4ef944fc7742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378cc6c668a14cb246b9e2d0492f1400958bc624340b801f251b4ef944fc7742->enter($__internal_378cc6c668a14cb246b9e2d0492f1400958bc624340b801f251b4ef944fc7742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_fe4f56118c1fc1fdd12662c3d7a6bb3f3235a712b4334d0746b8d695a02b28a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4f56118c1fc1fdd12662c3d7a6bb3f3235a712b4334d0746b8d695a02b28a2->enter($__internal_fe4f56118c1fc1fdd12662c3d7a6bb3f3235a712b4334d0746b8d695a02b28a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_378cc6c668a14cb246b9e2d0492f1400958bc624340b801f251b4ef944fc7742->leave($__internal_378cc6c668a14cb246b9e2d0492f1400958bc624340b801f251b4ef944fc7742_prof);

        
        $__internal_fe4f56118c1fc1fdd12662c3d7a6bb3f3235a712b4334d0746b8d695a02b28a2->leave($__internal_fe4f56118c1fc1fdd12662c3d7a6bb3f3235a712b4334d0746b8d695a02b28a2_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "/home/vlad/Work/ghBlog/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
