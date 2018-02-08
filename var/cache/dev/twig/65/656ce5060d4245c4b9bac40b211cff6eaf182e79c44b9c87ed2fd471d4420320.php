<?php

/* @GeekBlog/Default/pagination.html.twig */
class __TwigTemplate_132d18e984dd45647e8c388e479eeb975891aacfcbfbe5d40dd4af1a72785989 extends Twig_Template
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
        $__internal_ba381b1142ed2657e8b57be731392e45b927f5f3b98a22425e2bbbccd764b58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba381b1142ed2657e8b57be731392e45b927f5f3b98a22425e2bbbccd764b58e->enter($__internal_ba381b1142ed2657e8b57be731392e45b927f5f3b98a22425e2bbbccd764b58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/pagination.html.twig"));

        $__internal_03689770d578e42098a5d97723ee35c8ad442a960367f69f911ec56ac02169ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03689770d578e42098a5d97723ee35c8ad442a960367f69f911ec56ac02169ca->enter($__internal_03689770d578e42098a5d97723ee35c8ad442a960367f69f911ec56ac02169ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/pagination.html.twig"));

        // line 1
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "    <ul class=\"pagination\">

        ";
            // line 4
            if (array_key_exists("previous", $context)) {
                // line 5
                echo "            <li>
                <a rel=\"prev\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;</a>
            </li>
        ";
            } else {
                // line 9
                echo "            <li class=\"disabled\">
                <span>&laquo;</span>
            </li>
        ";
            }
            // line 13
            echo "
        ";
            // line 14
            if ((($context["startPage"] ?? $this->getContext($context, "startPage")) > 1)) {
                // line 15
                echo "            <li>
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 18
                if ((($context["startPage"] ?? $this->getContext($context, "startPage")) == 3)) {
                    // line 19
                    echo "                <li>
                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 22
($context["startPage"] ?? $this->getContext($context, "startPage")) != 2)) {
                    // line 23
                    echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 30
                echo "            ";
                if (($context["page"] != ($context["current"] ?? $this->getContext($context, "current")))) {
                    // line 31
                    echo "                <li>
                    <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 35
                    echo "                <li class=\"active\">
                    <span>";
                    // line 36
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                </li>
            ";
                }
                // line 39
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        ";
            // line 42
            if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > ($context["endPage"] ?? $this->getContext($context, "endPage")))) {
                // line 43
                echo "            ";
                if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > (($context["endPage"] ?? $this->getContext($context, "endPage")) + 1))) {
                    // line 44
                    echo "                ";
                    if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > (($context["endPage"] ?? $this->getContext($context, "endPage")) + 2))) {
                        // line 45
                        echo "                    <li class=\"disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                    } else {
                        // line 49
                        echo "                    <li>
                        <a href=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => (($context["pageCount"] ?? $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "            <li>
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["pageCount"] ?? $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 58
            echo "
        ";
            // line 59
            if (array_key_exists("next", $context)) {
                // line 60
                echo "            <li>
                <a rel=\"next\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&raquo;</a>
            </li>
        ";
            } else {
                // line 64
                echo "            <li class=\"disabled\">
                <span>&raquo;</span>
            </li>
        ";
            }
            // line 68
            echo "    </ul>
";
        }
        
        $__internal_ba381b1142ed2657e8b57be731392e45b927f5f3b98a22425e2bbbccd764b58e->leave($__internal_ba381b1142ed2657e8b57be731392e45b927f5f3b98a22425e2bbbccd764b58e_prof);

        
        $__internal_03689770d578e42098a5d97723ee35c8ad442a960367f69f911ec56ac02169ca->leave($__internal_03689770d578e42098a5d97723ee35c8ad442a960367f69f911ec56ac02169ca_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 68,  175 => 64,  169 => 61,  166 => 60,  164 => 59,  161 => 58,  153 => 55,  150 => 54,  147 => 53,  139 => 50,  136 => 49,  130 => 45,  127 => 44,  124 => 43,  122 => 42,  119 => 41,  112 => 39,  106 => 36,  103 => 35,  95 => 32,  92 => 31,  89 => 30,  85 => 29,  82 => 28,  79 => 27,  73 => 23,  71 => 22,  66 => 20,  63 => 19,  61 => 18,  56 => 16,  53 => 15,  51 => 14,  48 => 13,  42 => 9,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pageCount > 1 %}
    <ul class=\"pagination\">

        {% if previous is defined %}
            <li>
                <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo;</a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>&laquo;</span>
            </li>
        {% endif %}

        {% if startPage > 1 %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
            </li>
            {% if startPage == 3 %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                </li>
            {% elseif startPage != 2 %}
                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            {% endif %}
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"active\">
                    <span>{{ page }}</span>
                </li>
            {% endif %}

        {% endfor %}

        {% if pageCount > endPage %}
            {% if pageCount > (endPage + 1) %}
                {% if pageCount > (endPage + 2) %}
                    <li class=\"disabled\">
                        <span>&hellip;</span>
                    </li>
                {% else %}
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
                    </li>
                {% endif %}
            {% endif %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
            </li>
        {% endif %}

        {% if next is defined %}
            <li>
                <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&raquo;</a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>&raquo;</span>
            </li>
        {% endif %}
    </ul>
{% endif %}", "@GeekBlog/Default/pagination.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/pagination.html.twig");
    }
}
