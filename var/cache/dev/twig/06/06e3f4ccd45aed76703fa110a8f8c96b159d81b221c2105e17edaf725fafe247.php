<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_b8abbeea1af210c99e7aea1b0c467018985b7915edfcd2e08dab9a73fc61f7a7 extends Twig_Template
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
        $__internal_1c19e060b04b41ea5dfe3765222e45d036791d89982edb002ec142cfff50b1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c19e060b04b41ea5dfe3765222e45d036791d89982edb002ec142cfff50b1ed->enter($__internal_1c19e060b04b41ea5dfe3765222e45d036791d89982edb002ec142cfff50b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_4f26097d280a8907c389bdb99dadf8fe58050c49f46b459cc8a43e4b73c0ae90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f26097d280a8907c389bdb99dadf8fe58050c49f46b459cc8a43e4b73c0ae90->enter($__internal_4f26097d280a8907c389bdb99dadf8fe58050c49f46b459cc8a43e4b73c0ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_1c19e060b04b41ea5dfe3765222e45d036791d89982edb002ec142cfff50b1ed->leave($__internal_1c19e060b04b41ea5dfe3765222e45d036791d89982edb002ec142cfff50b1ed_prof);

        
        $__internal_4f26097d280a8907c389bdb99dadf8fe58050c49f46b459cc8a43e4b73c0ae90->leave($__internal_4f26097d280a8907c389bdb99dadf8fe58050c49f46b459cc8a43e4b73c0ae90_prof);

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
