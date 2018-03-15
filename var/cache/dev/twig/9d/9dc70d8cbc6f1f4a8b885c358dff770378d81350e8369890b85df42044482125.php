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
        $__internal_44148c00cb1f9828f393004567423c9095e89a05497aa72a44d4548b82a8d6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44148c00cb1f9828f393004567423c9095e89a05497aa72a44d4548b82a8d6d0->enter($__internal_44148c00cb1f9828f393004567423c9095e89a05497aa72a44d4548b82a8d6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $__internal_597643db2c0882b080b16e6981b4d906fa0853fa9e7c3014c2188ddb54fa7a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597643db2c0882b080b16e6981b4d906fa0853fa9e7c3014c2188ddb54fa7a09->enter($__internal_597643db2c0882b080b16e6981b4d906fa0853fa9e7c3014c2188ddb54fa7a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44148c00cb1f9828f393004567423c9095e89a05497aa72a44d4548b82a8d6d0->leave($__internal_44148c00cb1f9828f393004567423c9095e89a05497aa72a44d4548b82a8d6d0_prof);

        
        $__internal_597643db2c0882b080b16e6981b4d906fa0853fa9e7c3014c2188ddb54fa7a09->leave($__internal_597643db2c0882b080b16e6981b4d906fa0853fa9e7c3014c2188ddb54fa7a09_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_18dabdf62ab2e294278b8aea44583cf36c6506067e688c445f0c9585b06b6953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dabdf62ab2e294278b8aea44583cf36c6506067e688c445f0c9585b06b6953->enter($__internal_18dabdf62ab2e294278b8aea44583cf36c6506067e688c445f0c9585b06b6953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6e3b2e6c2ec702ad0a526f143114ea0f987baa5d962603b0a4107372fd1f9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e3b2e6c2ec702ad0a526f143114ea0f987baa5d962603b0a4107372fd1f9c8->enter($__internal_d6e3b2e6c2ec702ad0a526f143114ea0f987baa5d962603b0a4107372fd1f9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6e3b2e6c2ec702ad0a526f143114ea0f987baa5d962603b0a4107372fd1f9c8->leave($__internal_d6e3b2e6c2ec702ad0a526f143114ea0f987baa5d962603b0a4107372fd1f9c8_prof);

        
        $__internal_18dabdf62ab2e294278b8aea44583cf36c6506067e688c445f0c9585b06b6953->leave($__internal_18dabdf62ab2e294278b8aea44583cf36c6506067e688c445f0c9585b06b6953_prof);

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
