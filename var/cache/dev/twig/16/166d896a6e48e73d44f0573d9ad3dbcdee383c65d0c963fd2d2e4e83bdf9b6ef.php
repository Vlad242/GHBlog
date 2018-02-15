<?php

/* @GeekBlog/Default/like.html.twig */
class __TwigTemplate_5ebae6951283fbf3689d877956ba239c07b9d625309a226f9aaa769665781db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/homepage.html.twig", "@GeekBlog/Default/like.html.twig", 1);
        $this->blocks = array(
            'like' => array($this, 'block_like'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_251fb8fbe85a5692059d928b5863aaf11eb4dc0dc097061a3c3b93377424a8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251fb8fbe85a5692059d928b5863aaf11eb4dc0dc097061a3c3b93377424a8e0->enter($__internal_251fb8fbe85a5692059d928b5863aaf11eb4dc0dc097061a3c3b93377424a8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/like.html.twig"));

        $__internal_ee232901c4c9660d085c4558212232e1a28a5dd4ddce6ad0a6df912a7cc0c917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee232901c4c9660d085c4558212232e1a28a5dd4ddce6ad0a6df912a7cc0c917->enter($__internal_ee232901c4c9660d085c4558212232e1a28a5dd4ddce6ad0a6df912a7cc0c917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/like.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251fb8fbe85a5692059d928b5863aaf11eb4dc0dc097061a3c3b93377424a8e0->leave($__internal_251fb8fbe85a5692059d928b5863aaf11eb4dc0dc097061a3c3b93377424a8e0_prof);

        
        $__internal_ee232901c4c9660d085c4558212232e1a28a5dd4ddce6ad0a6df912a7cc0c917->leave($__internal_ee232901c4c9660d085c4558212232e1a28a5dd4ddce6ad0a6df912a7cc0c917_prof);

    }

    // line 2
    public function block_like($context, array $blocks = array())
    {
        $__internal_7958313025ba5f5d69406071b1d384b9368419f5a4b2921f6f73e2d39b48859a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7958313025ba5f5d69406071b1d384b9368419f5a4b2921f6f73e2d39b48859a->enter($__internal_7958313025ba5f5d69406071b1d384b9368419f5a4b2921f6f73e2d39b48859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "like"));

        $__internal_231aeb9e9a90d9a8a6c2bc671dbd5b81429e2d64375e68e6fbbfcce19a897d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231aeb9e9a90d9a8a6c2bc671dbd5b81429e2d64375e68e6fbbfcce19a897d74->enter($__internal_231aeb9e9a90d9a8a6c2bc671dbd5b81429e2d64375e68e6fbbfcce19a897d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "like"));

        // line 3
        echo "    <a style=\"position: absolute; left: 10%\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likecheck", array("post" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getId", array(), "method"))), "html", null, true);
        echo "\">
        <span class=\"glyphicon glyphicon-heart\"></span> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getLikeCount", array(), "method"), "html", null, true);
        echo " </a>
";
        
        $__internal_231aeb9e9a90d9a8a6c2bc671dbd5b81429e2d64375e68e6fbbfcce19a897d74->leave($__internal_231aeb9e9a90d9a8a6c2bc671dbd5b81429e2d64375e68e6fbbfcce19a897d74_prof);

        
        $__internal_7958313025ba5f5d69406071b1d384b9368419f5a4b2921f6f73e2d39b48859a->leave($__internal_7958313025ba5f5d69406071b1d384b9368419f5a4b2921f6f73e2d39b48859a_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/like.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@GeekBlog/Default/homepage.html.twig' %}
{% block like %}
    <a style=\"position: absolute; left: 10%\" href=\"{{ path(\"likecheck\", {'post' : post.getId() })}}\">
        <span class=\"glyphicon glyphicon-heart\"></span> {{ post.getLikeCount() }} </a>
{% endblock %}", "@GeekBlog/Default/like.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/like.html.twig");
    }
}
