<?php

/* @GeekBlog/Admin/AdminRoom.html.twig */
class __TwigTemplate_4b475e586b8f5946b1cb12729bed9279094efa67056aa2ca377573e6e631947a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@GeekBlog/Admin/AdminRoom.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4faa4cde0a4563470b263aa4899ff9c042c9ef60226fe4b0388d91fbf89d7566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4faa4cde0a4563470b263aa4899ff9c042c9ef60226fe4b0388d91fbf89d7566->enter($__internal_4faa4cde0a4563470b263aa4899ff9c042c9ef60226fe4b0388d91fbf89d7566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Admin/AdminRoom.html.twig"));

        $__internal_255fc558bf48d4fec2a09baf2b513954ae5d417967ec1ba594e03f4b479d9ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255fc558bf48d4fec2a09baf2b513954ae5d417967ec1ba594e03f4b479d9ce4->enter($__internal_255fc558bf48d4fec2a09baf2b513954ae5d417967ec1ba594e03f4b479d9ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Admin/AdminRoom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4faa4cde0a4563470b263aa4899ff9c042c9ef60226fe4b0388d91fbf89d7566->leave($__internal_4faa4cde0a4563470b263aa4899ff9c042c9ef60226fe4b0388d91fbf89d7566_prof);

        
        $__internal_255fc558bf48d4fec2a09baf2b513954ae5d417967ec1ba594e03f4b479d9ce4->leave($__internal_255fc558bf48d4fec2a09baf2b513954ae5d417967ec1ba594e03f4b479d9ce4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_59dabf2e03e3ce9b310f7de41fbc224334770937524b78826a959f26999cadd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59dabf2e03e3ce9b310f7de41fbc224334770937524b78826a959f26999cadd9->enter($__internal_59dabf2e03e3ce9b310f7de41fbc224334770937524b78826a959f26999cadd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_867ff3b8a58980d19e28dfc546529a0620398b90d3f596a578ff0d251afc4bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867ff3b8a58980d19e28dfc546529a0620398b90d3f596a578ff0d251afc4bdc->enter($__internal_867ff3b8a58980d19e28dfc546529a0620398b90d3f596a578ff0d251afc4bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\">
            ";
        // line 7
        echo "                ";
        // line 8
        echo "            ";
        // line 9
        echo "                ";
        // line 10
        echo "            ";
        // line 11
        echo "                ";
        // line 12
        echo "        </div>
        <div class=\"col-sm-2\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"btn btn-primary\">
                <span class=\"glyphicon glyphicon glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>  LogIn </a>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"btn btn-danger\">
                <span class=\"glyphicon glyphicon glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span>  LogOut </a>
        </div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\">
            <h1> Hello ";
        // line 21
        echo twig_escape_filter($this->env, ($context["username"] ?? $this->getContext($context, "username")), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"col-sm-2\"></div>
    </div>
";
        
        $__internal_867ff3b8a58980d19e28dfc546529a0620398b90d3f596a578ff0d251afc4bdc->leave($__internal_867ff3b8a58980d19e28dfc546529a0620398b90d3f596a578ff0d251afc4bdc_prof);

        
        $__internal_59dabf2e03e3ce9b310f7de41fbc224334770937524b78826a959f26999cadd9->leave($__internal_59dabf2e03e3ce9b310f7de41fbc224334770937524b78826a959f26999cadd9_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Admin/AdminRoom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  73 => 16,  68 => 14,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\">
            {#<a href=\"{{ path(\"questions_new\") }}\" class=\"btn btn-info\">#}
                {#<span class=\"glyphicon glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> New question </a>#}
            {#<a href=\"{{ path(\"questions_list\") }}\" class=\"btn btn-success\">#}
                {#<span class=\"glyphicon glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span> Questions list </a>#}
            {#<a href=\"{{ path(\"user_list\") }}\" class=\"btn btn-info\">#}
                {#<span class=\"glyphicon glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span> User list </a>#}
        </div>
        <div class=\"col-sm-2\">
            <a href=\"{{ path(\"login\") }}\" class=\"btn btn-primary\">
                <span class=\"glyphicon glyphicon glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>  LogIn </a>
            <a href=\"{{ path(\"logout\") }}\" class=\"btn btn-danger\">
                <span class=\"glyphicon glyphicon glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span>  LogOut </a>
        </div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\">
            <h1> Hello {{ username }}</h1>
        </div>
        <div class=\"col-sm-2\"></div>
    </div>
{% endblock %}", "@GeekBlog/Admin/AdminRoom.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Admin/AdminRoom.html.twig");
    }
}
