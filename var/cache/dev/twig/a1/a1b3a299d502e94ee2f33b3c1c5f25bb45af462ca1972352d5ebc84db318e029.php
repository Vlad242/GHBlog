<?php

/* @GeekBlog/Tag/tagList.html.twig */
class __TwigTemplate_45495bbd9113f6b1b5b12d7e0d8744175e53fd2d53f8a5a262fa0c1ba37468b8 extends Twig_Template
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
        $__internal_23a3cbd1fe0e064d97fce097840bf9a13b0539b307840ac83a3c1442ed3bda05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a3cbd1fe0e064d97fce097840bf9a13b0539b307840ac83a3c1442ed3bda05->enter($__internal_23a3cbd1fe0e064d97fce097840bf9a13b0539b307840ac83a3c1442ed3bda05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Tag/tagList.html.twig"));

        $__internal_f142c6487447fa71c0c48b49d5d06696381b678a7aaf8e480efa94db96cc5f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f142c6487447fa71c0c48b49d5d06696381b678a7aaf8e480efa94db96cc5f12->enter($__internal_f142c6487447fa71c0c48b49d5d06696381b678a7aaf8e480efa94db96cc5f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Tag/tagList.html.twig"));

        // line 1
        echo "<h3 align=\"center\">Tags:</h3><br>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 3
            echo "    <a class=\"btn-xs btn-primary\" type=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
            echo "\" style=\"margin: 1px\">
        <span class=\"glyphicon glyphicon-tag\"></span> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo " </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_23a3cbd1fe0e064d97fce097840bf9a13b0539b307840ac83a3c1442ed3bda05->leave($__internal_23a3cbd1fe0e064d97fce097840bf9a13b0539b307840ac83a3c1442ed3bda05_prof);

        
        $__internal_f142c6487447fa71c0c48b49d5d06696381b678a7aaf8e480efa94db96cc5f12->leave($__internal_f142c6487447fa71c0c48b49d5d06696381b678a7aaf8e480efa94db96cc5f12_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Tag/tagList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 align=\"center\">Tags:</h3><br>
{% for tag in tags %}
    <a class=\"btn-xs btn-primary\" type=\"button\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId })}}\" style=\"margin: 1px\">
        <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.name }} </a>
{% endfor %}", "@GeekBlog/Tag/tagList.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Tag/tagList.html.twig");
    }
}
