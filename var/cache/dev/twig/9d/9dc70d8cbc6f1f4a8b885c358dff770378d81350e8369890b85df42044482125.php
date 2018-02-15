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
        $__internal_20463d6da9f704e28306cb03aae1b5432eda8712a9adea2edf7ef3a5e3f817fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20463d6da9f704e28306cb03aae1b5432eda8712a9adea2edf7ef3a5e3f817fd->enter($__internal_20463d6da9f704e28306cb03aae1b5432eda8712a9adea2edf7ef3a5e3f817fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $__internal_337c98079f02d406ad3a86fc96f966f2cfc037a4946ce89d1a09bd49cd327e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c98079f02d406ad3a86fc96f966f2cfc037a4946ce89d1a09bd49cd327e5b->enter($__internal_337c98079f02d406ad3a86fc96f966f2cfc037a4946ce89d1a09bd49cd327e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Category/categoryList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20463d6da9f704e28306cb03aae1b5432eda8712a9adea2edf7ef3a5e3f817fd->leave($__internal_20463d6da9f704e28306cb03aae1b5432eda8712a9adea2edf7ef3a5e3f817fd_prof);

        
        $__internal_337c98079f02d406ad3a86fc96f966f2cfc037a4946ce89d1a09bd49cd327e5b->leave($__internal_337c98079f02d406ad3a86fc96f966f2cfc037a4946ce89d1a09bd49cd327e5b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_90f953d00a8dfc4372c64116472c47af514b4d258041516c9418799901c4e976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f953d00a8dfc4372c64116472c47af514b4d258041516c9418799901c4e976->enter($__internal_90f953d00a8dfc4372c64116472c47af514b4d258041516c9418799901c4e976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5c359f5226e7747ebcd18ae1a147f2b3cac7f2afc72cab721bec8109837445a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c359f5226e7747ebcd18ae1a147f2b3cac7f2afc72cab721bec8109837445a->enter($__internal_c5c359f5226e7747ebcd18ae1a147f2b3cac7f2afc72cab721bec8109837445a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5c359f5226e7747ebcd18ae1a147f2b3cac7f2afc72cab721bec8109837445a->leave($__internal_c5c359f5226e7747ebcd18ae1a147f2b3cac7f2afc72cab721bec8109837445a_prof);

        
        $__internal_90f953d00a8dfc4372c64116472c47af514b4d258041516c9418799901c4e976->leave($__internal_90f953d00a8dfc4372c64116472c47af514b4d258041516c9418799901c4e976_prof);

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
