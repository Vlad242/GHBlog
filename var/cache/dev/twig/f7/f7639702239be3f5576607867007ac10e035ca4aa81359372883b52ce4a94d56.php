<?php

/* WhiteOctoberBreadcrumbsBundle::microdata.html.twig */
class __TwigTemplate_788e0fb5c73412e73b80206a428e4d322e8d11ad3d57550877f0451b100feebf extends Twig_Template
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
        $__internal_2607dcaaa1137f52227d02fea5625434e1797a83d4cddd85a5a1abb078abb5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2607dcaaa1137f52227d02fea5625434e1797a83d4cddd85a5a1abb078abb5d4->enter($__internal_2607dcaaa1137f52227d02fea5625434e1797a83d4cddd85a5a1abb078abb5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::microdata.html.twig"));

        $__internal_d497a83e64cdc92a734df60726c256cfdd6102c2ae97f14550d7aef322e43bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d497a83e64cdc92a734df60726c256cfdd6102c2ae97f14550d7aef322e43bbb->enter($__internal_d497a83e64cdc92a734df60726c256cfdd6102c2ae97f14550d7aef322e43bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::microdata.html.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->getBreadcrumbs())) {
            // line 2
            ob_start();
            // line 3
            echo "<ol id=\"";
            echo twig_escape_filter($this->env, ($context["listId"] ?? $this->getContext($context, "listId")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["listClass"] ?? $this->getContext($context, "listClass")), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 5
                echo "                <li";
                if ((array_key_exists("itemClass", $context) && twig_length_filter($this->env, ($context["itemClass"] ?? $this->getContext($context, "itemClass"))))) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, ($context["itemClass"] ?? $this->getContext($context, "itemClass")), "html", null, true);
                    echo "\"";
                }
                echo " itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    ";
                // line 6
                if (($this->getAttribute($context["b"], "url", array()) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 7
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "url", array()), "html", null, true);
                    echo "\" itemprop=\"item\"";
                    if ((array_key_exists("linkRel", $context) && twig_length_filter($this->env, ($context["linkRel"] ?? $this->getContext($context, "linkRel"))))) {
                        echo " rel=\"";
                        echo twig_escape_filter($this->env, ($context["linkRel"] ?? $this->getContext($context, "linkRel")), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        ";
                }
                // line 9
                echo "                        <span itemprop=\"name\">";
                if (($this->getAttribute($context["b"], "translate", array(), "any", true, true) && ($this->getAttribute($context["b"], "translate", array()) == true))) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["b"], "text", array()), $this->getAttribute($context["b"], "translationParameters", array()), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "text", array()), "html", null, true);
                }
                echo "</span>
                        ";
                // line 10
                if (($this->getAttribute($context["b"], "url", array()) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 11
                    echo "                    </a>
                    ";
                }
                // line 13
                echo "                    <meta itemprop=\"position\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" />

                    ";
                // line 15
                if (( !(null === ($context["separator"] ?? $this->getContext($context, "separator"))) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 16
                    echo "                        <span class='";
                    echo twig_escape_filter($this->env, ($context["separatorClass"] ?? $this->getContext($context, "separatorClass")), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 18
                echo "                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ol>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_2607dcaaa1137f52227d02fea5625434e1797a83d4cddd85a5a1abb078abb5d4->leave($__internal_2607dcaaa1137f52227d02fea5625434e1797a83d4cddd85a5a1abb078abb5d4_prof);

        
        $__internal_d497a83e64cdc92a734df60726c256cfdd6102c2ae97f14550d7aef322e43bbb->leave($__internal_d497a83e64cdc92a734df60726c256cfdd6102c2ae97f14550d7aef322e43bbb_prof);

    }

    public function getTemplateName()
    {
        return "WhiteOctoberBreadcrumbsBundle::microdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 20,  107 => 18,  99 => 16,  97 => 15,  91 => 13,  87 => 11,  85 => 10,  76 => 9,  64 => 7,  62 => 6,  53 => 5,  36 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if wo_breadcrumbs()|length %}
    {%- spaceless -%}
        <ol id=\"{{ listId }}\" class=\"{{ listClass }}\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            {% for b in breadcrumbs %}
                <li{% if itemClass is defined and itemClass|length %} class=\"{{ itemClass }}\"{% endif %} itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    {% if b.url and not loop.last %}
                    <a href=\"{{ b.url }}\" itemprop=\"item\"{% if linkRel is defined and linkRel|length %} rel=\"{{ linkRel }}\"{% endif %}>
                        {% endif %}
                        <span itemprop=\"name\">{% if b.translate is defined and b.translate == true %}{{- b.text | trans(b.translationParameters, translation_domain, locale) -}}{% else %}{{- b.text -}}{% endif %}</span>
                        {% if b.url and not loop.last %}
                    </a>
                    {% endif %}
                    <meta itemprop=\"position\" content=\"{{ loop.index }}\" />

                    {% if separator is not null and not loop.last %}
                        <span class='{{ separatorClass }}'>{{ separator }}</span>
                    {% endif %}
                </li>
            {% endfor %}
        </ol>
    {%- endspaceless -%}
{% endif %}
", "WhiteOctoberBreadcrumbsBundle::microdata.html.twig", "/home/vlad/Work/ghBlog/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Resources/views/microdata.html.twig");
    }
}