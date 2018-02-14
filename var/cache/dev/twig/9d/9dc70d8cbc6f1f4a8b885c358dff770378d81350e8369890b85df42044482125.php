<?php

/* @GeekBlog/Category/categoryList.html.twig */
class __TwigTemplate_21afa09a370d26a62298290dbc009a19599fe1fbe4bfc3429c3b4ce10b14f0ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Category/categoryList.html.twig", 1);
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
        $__internal_06226284be9ab4ee985e8ac33a340ad3f9be1f525a30d7409e570d741885d746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06226284be9ab4ee985e8ac33a340ad3f9be1f525a30d7409e570d741885d746->enter($__internal_06226284be9ab4ee985e8ac33a340ad3f9be1f525a30d7409e570d741885d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $__internal_232ea2dd8d616468da0aa1c35e34b97580216b75e66c585ed450c76f262e7d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232ea2dd8d616468da0aa1c35e34b97580216b75e66c585ed450c76f262e7d10->enter($__internal_232ea2dd8d616468da0aa1c35e34b97580216b75e66c585ed450c76f262e7d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06226284be9ab4ee985e8ac33a340ad3f9be1f525a30d7409e570d741885d746->leave($__internal_06226284be9ab4ee985e8ac33a340ad3f9be1f525a30d7409e570d741885d746_prof);

        
        $__internal_232ea2dd8d616468da0aa1c35e34b97580216b75e66c585ed450c76f262e7d10->leave($__internal_232ea2dd8d616468da0aa1c35e34b97580216b75e66c585ed450c76f262e7d10_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e146cad1ef626d8d3e739d8d9ca247911f5e5b6d6b4a7b78c3601d245615d5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e146cad1ef626d8d3e739d8d9ca247911f5e5b6d6b4a7b78c3601d245615d5bb->enter($__internal_e146cad1ef626d8d3e739d8d9ca247911f5e5b6d6b4a7b78c3601d245615d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb699319e397198d3ab5541dd62b06fc1d8c4c6aa1b021404522aa8c0d6eb127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb699319e397198d3ab5541dd62b06fc1d8c4c6aa1b021404522aa8c0d6eb127->enter($__internal_cb699319e397198d3ab5541dd62b06fc1d8c4c6aa1b021404522aa8c0d6eb127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"well\">
        <h3 align=\"center\">Categories:</h3><br>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "            <div class=\"well\" align=\"center\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($context["category"], "getId", array(), "method"))), "html", null, true);
            echo "\" style=\"margin: 1px\">
                    <span class=\"glyphicon glyphicon-check\"></span> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getName", array(), "method"), "html", null, true);
            echo " </a>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
";
        
        $__internal_cb699319e397198d3ab5541dd62b06fc1d8c4c6aa1b021404522aa8c0d6eb127->leave($__internal_cb699319e397198d3ab5541dd62b06fc1d8c4c6aa1b021404522aa8c0d6eb127_prof);

        
        $__internal_e146cad1ef626d8d3e739d8d9ca247911f5e5b6d6b4a7b78c3601d245615d5bb->leave($__internal_e146cad1ef626d8d3e739d8d9ca247911f5e5b6d6b4a7b78c3601d245615d5bb_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Category/categoryList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  64 => 8,  60 => 7,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <h3 align=\"center\">Categories:</h3><br>
        {% for category in categories %}
            <div class=\"well\" align=\"center\">
                <a href=\"{{ path(\"postByCategory\", {'category' : category.getId() })}}\" style=\"margin: 1px\">
                    <span class=\"glyphicon glyphicon-check\"></span> {{ category.getName() }} </a>
            </div>
          {% endfor %}
    </div>
{% endblock %}", "@GeekBlog/Category/categoryList.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Category/categoryList.html.twig");
    }
}
