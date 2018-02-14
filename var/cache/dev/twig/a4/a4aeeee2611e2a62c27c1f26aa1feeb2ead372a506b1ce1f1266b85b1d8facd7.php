<?php

/* @GeekBlog/Category/categoryList.html.twig */
class __TwigTemplate_849b1cda7598b20af1596e74ccb6e5a891ab86ac169d9d28019f2389bee4ad4f extends Twig_Template
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
        $__internal_8d671109ea8045c2fac3000c3351b39ddb5a53d08464ded2ce4242bb22c69784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d671109ea8045c2fac3000c3351b39ddb5a53d08464ded2ce4242bb22c69784->enter($__internal_8d671109ea8045c2fac3000c3351b39ddb5a53d08464ded2ce4242bb22c69784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $__internal_ba2eb39e814eb152977622cc3d572ef9d3117eaa5d36d91bd85046647e524602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2eb39e814eb152977622cc3d572ef9d3117eaa5d36d91bd85046647e524602->enter($__internal_ba2eb39e814eb152977622cc3d572ef9d3117eaa5d36d91bd85046647e524602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d671109ea8045c2fac3000c3351b39ddb5a53d08464ded2ce4242bb22c69784->leave($__internal_8d671109ea8045c2fac3000c3351b39ddb5a53d08464ded2ce4242bb22c69784_prof);

        
        $__internal_ba2eb39e814eb152977622cc3d572ef9d3117eaa5d36d91bd85046647e524602->leave($__internal_ba2eb39e814eb152977622cc3d572ef9d3117eaa5d36d91bd85046647e524602_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bafb2acaa3d0b8e994c1199da6996370a6bbfce0308319594c0f1daea41adfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafb2acaa3d0b8e994c1199da6996370a6bbfce0308319594c0f1daea41adfb6->enter($__internal_bafb2acaa3d0b8e994c1199da6996370a6bbfce0308319594c0f1daea41adfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25281dfd311b846c0c26d7333c833943d08c41e6ecd8745e3d5a6e89f00ae9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25281dfd311b846c0c26d7333c833943d08c41e6ecd8745e3d5a6e89f00ae9ba->enter($__internal_25281dfd311b846c0c26d7333c833943d08c41e6ecd8745e3d5a6e89f00ae9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByCategory", array("category" => $this->getAttribute($context["category"], "getId", array()))), "html", null, true);
            echo "\" style=\"margin: 1px\">
                    <span class=\"glyphicon glyphicon-check\"></span> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getName", array()), "html", null, true);
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
        
        $__internal_25281dfd311b846c0c26d7333c833943d08c41e6ecd8745e3d5a6e89f00ae9ba->leave($__internal_25281dfd311b846c0c26d7333c833943d08c41e6ecd8745e3d5a6e89f00ae9ba_prof);

        
        $__internal_bafb2acaa3d0b8e994c1199da6996370a6bbfce0308319594c0f1daea41adfb6->leave($__internal_bafb2acaa3d0b8e994c1199da6996370a6bbfce0308319594c0f1daea41adfb6_prof);

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
                <a href=\"{{ path(\"postByCategory\", {'category' : category.getId })}}\" style=\"margin: 1px\">
                    <span class=\"glyphicon glyphicon-check\"></span> {{ category.getName }} </a>
            </div>
          {% endfor %}
    </div>
{% endblock %}", "@GeekBlog/Category/categoryList.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Category/categoryList.html.twig");
    }
}
