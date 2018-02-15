<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_5b764f08446c237ae9228c47925970f13b7aa8ad4748d945720a3ed8da1f4d15 extends Twig_Template
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
        $__internal_7eb207ef0f370de76bc38d9203b7eabd91d37277fd91b1a2249c25154a0a6641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb207ef0f370de76bc38d9203b7eabd91d37277fd91b1a2249c25154a0a6641->enter($__internal_7eb207ef0f370de76bc38d9203b7eabd91d37277fd91b1a2249c25154a0a6641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_5fc9dc38dcdaf86011b6136b8113533c019230f16d93584341fa40d6e5aa7bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc9dc38dcdaf86011b6136b8113533c019230f16d93584341fa40d6e5aa7bc3->enter($__internal_5fc9dc38dcdaf86011b6136b8113533c019230f16d93584341fa40d6e5aa7bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_7eb207ef0f370de76bc38d9203b7eabd91d37277fd91b1a2249c25154a0a6641->leave($__internal_7eb207ef0f370de76bc38d9203b7eabd91d37277fd91b1a2249c25154a0a6641_prof);

        
        $__internal_5fc9dc38dcdaf86011b6136b8113533c019230f16d93584341fa40d6e5aa7bc3->leave($__internal_5fc9dc38dcdaf86011b6136b8113533c019230f16d93584341fa40d6e5aa7bc3_prof);

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
