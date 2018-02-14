<?php

/* @GeekBlog/Tag/tagList.html.twig */
class __TwigTemplate_7577c9af0044fd6cbc02b9cf0110c024a4796db1ace467c643b9fa60ac521d00 extends Twig_Template
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
        $__internal_7a8d9de94f1ab52f2475670422dc08d61c3bb063d0049174bd6c0a2734dd0149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8d9de94f1ab52f2475670422dc08d61c3bb063d0049174bd6c0a2734dd0149->enter($__internal_7a8d9de94f1ab52f2475670422dc08d61c3bb063d0049174bd6c0a2734dd0149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Tag/tagList.html.twig"));

        $__internal_14a732efba7242c83cef8866b356619580fba1ff459d0df6ccea81fb14626c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a732efba7242c83cef8866b356619580fba1ff459d0df6ccea81fb14626c04->enter($__internal_14a732efba7242c83cef8866b356619580fba1ff459d0df6ccea81fb14626c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Tag/tagList.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <h3 align=\"center\">Tags:</h3><br>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 4
            echo "        <a class=\"btn-xs btn-primary\" type=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postByTag", array("tag" => $this->getAttribute($context["tag"], "getId", array()))), "html", null, true);
            echo "\" style=\"margin: 1px\">
            <span class=\"glyphicon glyphicon-tag\"></span> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo " </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>";
        
        $__internal_7a8d9de94f1ab52f2475670422dc08d61c3bb063d0049174bd6c0a2734dd0149->leave($__internal_7a8d9de94f1ab52f2475670422dc08d61c3bb063d0049174bd6c0a2734dd0149_prof);

        
        $__internal_14a732efba7242c83cef8866b356619580fba1ff459d0df6ccea81fb14626c04->leave($__internal_14a732efba7242c83cef8866b356619580fba1ff459d0df6ccea81fb14626c04_prof);

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
        return array (  46 => 7,  38 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <h3 align=\"center\">Tags:</h3><br>
    {% for tag in tags %}
        <a class=\"btn-xs btn-primary\" type=\"button\" href=\"{{ path(\"postByTag\", {'tag' : tag.getId })}}\" style=\"margin: 1px\">
            <span class=\"glyphicon glyphicon-tag\"></span> {{ tag.name }} </a>
    {% endfor %}
</div>", "@GeekBlog/Tag/tagList.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Tag/tagList.html.twig");
    }
}
