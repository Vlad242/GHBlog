<?php

/* @GeekBlog/Default/homepage.html.twig */
class __TwigTemplate_912269a1cdb98da45ccc825bc3fcd9dc6a3f5390a71bcb5bdc207379d92b4267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Default/homepage.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1df1bb3d12d538898cb291c873419940e87400bb010ef6dad2f64b5c0282a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1df1bb3d12d538898cb291c873419940e87400bb010ef6dad2f64b5c0282a0e->enter($__internal_a1df1bb3d12d538898cb291c873419940e87400bb010ef6dad2f64b5c0282a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $__internal_156cc2c2c8dfae3f725509e84332321e6164706f4d15013bc8b7576f662ff98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156cc2c2c8dfae3f725509e84332321e6164706f4d15013bc8b7576f662ff98d->enter($__internal_156cc2c2c8dfae3f725509e84332321e6164706f4d15013bc8b7576f662ff98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1df1bb3d12d538898cb291c873419940e87400bb010ef6dad2f64b5c0282a0e->leave($__internal_a1df1bb3d12d538898cb291c873419940e87400bb010ef6dad2f64b5c0282a0e_prof);

        
        $__internal_156cc2c2c8dfae3f725509e84332321e6164706f4d15013bc8b7576f662ff98d->leave($__internal_156cc2c2c8dfae3f725509e84332321e6164706f4d15013bc8b7576f662ff98d_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
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
", "@GeekBlog/Default/homepage.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/homepage.html.twig");
    }
}
