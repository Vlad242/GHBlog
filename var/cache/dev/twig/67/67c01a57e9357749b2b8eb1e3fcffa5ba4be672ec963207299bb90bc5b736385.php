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
        $__internal_0c5f79d9938c0ccedf0c6225b4e01c2b2752d2b8821edab5d1a9cdf11790b242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5f79d9938c0ccedf0c6225b4e01c2b2752d2b8821edab5d1a9cdf11790b242->enter($__internal_0c5f79d9938c0ccedf0c6225b4e01c2b2752d2b8821edab5d1a9cdf11790b242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_a7963387b1e815872240ab88046fa9ba90ef1c46070e6913b758a6705c901b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7963387b1e815872240ab88046fa9ba90ef1c46070e6913b758a6705c901b97->enter($__internal_a7963387b1e815872240ab88046fa9ba90ef1c46070e6913b758a6705c901b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_0c5f79d9938c0ccedf0c6225b4e01c2b2752d2b8821edab5d1a9cdf11790b242->leave($__internal_0c5f79d9938c0ccedf0c6225b4e01c2b2752d2b8821edab5d1a9cdf11790b242_prof);

        
        $__internal_a7963387b1e815872240ab88046fa9ba90ef1c46070e6913b758a6705c901b97->leave($__internal_a7963387b1e815872240ab88046fa9ba90ef1c46070e6913b758a6705c901b97_prof);

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
