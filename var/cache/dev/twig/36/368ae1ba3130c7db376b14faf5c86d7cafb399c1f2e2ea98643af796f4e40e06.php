<?php

/* @WebProfiler/Collector/validator.html.twig */
class __TwigTemplate_cfe43779427acf57c71214a454b8015709fcb9b251e1a3a186fcae687a3fd085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/validator.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad5a3407bfdbfe51b979f3511037fa36e3d48af897f68efedf342ebc93c99a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5a3407bfdbfe51b979f3511037fa36e3d48af897f68efedf342ebc93c99a50->enter($__internal_ad5a3407bfdbfe51b979f3511037fa36e3d48af897f68efedf342ebc93c99a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $__internal_c0e7e6d2860c64e185fba194923b625661d5d002bd296fffb53f53e2971cde77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e7e6d2860c64e185fba194923b625661d5d002bd296fffb53f53e2971cde77->enter($__internal_c0e7e6d2860c64e185fba194923b625661d5d002bd296fffb53f53e2971cde77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5a3407bfdbfe51b979f3511037fa36e3d48af897f68efedf342ebc93c99a50->leave($__internal_ad5a3407bfdbfe51b979f3511037fa36e3d48af897f68efedf342ebc93c99a50_prof);

        
        $__internal_c0e7e6d2860c64e185fba194923b625661d5d002bd296fffb53f53e2971cde77->leave($__internal_c0e7e6d2860c64e185fba194923b625661d5d002bd296fffb53f53e2971cde77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee5a60342b6514753612e25ba2828b764cc1c47568e339ab1935945836dd34e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5a60342b6514753612e25ba2828b764cc1c47568e339ab1935945836dd34e0->enter($__internal_ee5a60342b6514753612e25ba2828b764cc1c47568e339ab1935945836dd34e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e155200106cfafdbf6bd8e5f2704ae7b17a32ea596e0ae32b9025cf1dd9ccfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e155200106cfafdbf6bd8e5f2704ae7b17a32ea596e0ae32b9025cf1dd9ccfbe->enter($__internal_e155200106cfafdbf6bd8e5f2704ae7b17a32ea596e0ae32b9025cf1dd9ccfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()) > 0) || twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())))) {
            // line 5
            echo "        ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) ? ("red") : (""));
            // line 6
            echo "        ";
            ob_start();
            // line 7
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) : (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status";
            // line 20
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()) > 0)) ? (" sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_e155200106cfafdbf6bd8e5f2704ae7b17a32ea596e0ae32b9025cf1dd9ccfbe->leave($__internal_e155200106cfafdbf6bd8e5f2704ae7b17a32ea596e0ae32b9025cf1dd9ccfbe_prof);

        
        $__internal_ee5a60342b6514753612e25ba2828b764cc1c47568e339ab1935945836dd34e0->leave($__internal_ee5a60342b6514753612e25ba2828b764cc1c47568e339ab1935945836dd34e0_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cb2111430a939832f1a99a59f2bd750288b5e9f673e24540a7fcebdeef72409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb2111430a939832f1a99a59f2bd750288b5e9f673e24540a7fcebdeef72409->enter($__internal_4cb2111430a939832f1a99a59f2bd750288b5e9f673e24540a7fcebdeef72409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_187ae185c3407bd080329fd5819480c1be86ac9850ce36219b2cb4e0966fa41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187ae185c3407bd080329fd5819480c1be86ac9850ce36219b2cb4e0966fa41c->enter($__internal_187ae185c3407bd080329fd5819480c1be86ac9850ce36219b2cb4e0966fa41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) ? (" label-status-error") : (""));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
        echo "</span>
        <strong>Validator</strong>
        ";
        // line 32
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()) > 0)) {
            // line 33
            echo "            <span class=\"count\">
                <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 37
        echo "    </span>
";
        
        $__internal_187ae185c3407bd080329fd5819480c1be86ac9850ce36219b2cb4e0966fa41c->leave($__internal_187ae185c3407bd080329fd5819480c1be86ac9850ce36219b2cb4e0966fa41c_prof);

        
        $__internal_4cb2111430a939832f1a99a59f2bd750288b5e9f673e24540a7fcebdeef72409->leave($__internal_4cb2111430a939832f1a99a59f2bd750288b5e9f673e24540a7fcebdeef72409_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f15d1f5b92172a3b1aae3bcea0d8b2458233b2ef62e76cb8525d3b1d6df39a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15d1f5b92172a3b1aae3bcea0d8b2458233b2ef62e76cb8525d3b1d6df39a88->enter($__internal_f15d1f5b92172a3b1aae3bcea0d8b2458233b2ef62e76cb8525d3b1d6df39a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b518df55dc0dcb5756b4ec170e505e66318866f17232bb6401f91003a98786d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b518df55dc0dcb5756b4ec170e505e66318866f17232bb6401f91003a98786d4->enter($__internal_b518df55dc0dcb5756b4ec170e505e66318866f17232bb6401f91003a98786d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    <h2>Validator calls</h2>

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 44
            echo "        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 46
            $context["caller"] = $this->getAttribute($context["call"], "caller", array());
            // line 47
            echo "                ";
            if ($this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array())) {
                // line 48
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array()));
                // line 49
                echo "                    ";
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    // line 50
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 52
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 54
                echo "                ";
            } else {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 57
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array()), "html", null, true);
            echo "</a> (<a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-context-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">context</a>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array()));
            echo "
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                ";
            // line 67
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["call"], "context", array()), 1));
            echo "
            </div>

            ";
            // line 70
            if (twig_length_filter($this->env, $this->getAttribute($context["call"], "violations", array()))) {
                // line 71
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>
                    ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["call"], "violations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                    // line 81
                    echo "                        <tr>
                            <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["violation"], "propertyPath", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["violation"], "message", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 84
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["violation"], "seek", array(0 => "invalidValue"), "method")));
                    echo "</td>
                            <td>";
                    // line 85
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["violation"]));
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                </table>
            ";
            } else {
                // line 90
                echo "                No violations
            ";
            }
            // line 92
            echo "        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 94
            echo "        <div class=\"empty\">
            <p>No calls to the validator were collected during this request.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b518df55dc0dcb5756b4ec170e505e66318866f17232bb6401f91003a98786d4->leave($__internal_b518df55dc0dcb5756b4ec170e505e66318866f17232bb6401f91003a98786d4_prof);

        
        $__internal_f15d1f5b92172a3b1aae3bcea0d8b2458233b2ef62e76cb8525d3b1d6df39a88->leave($__internal_f15d1f5b92172a3b1aae3bcea0d8b2458233b2ef62e76cb8525d3b1d6df39a88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/validator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 94,  310 => 92,  306 => 90,  302 => 88,  293 => 85,  289 => 84,  285 => 83,  281 => 82,  278 => 81,  274 => 80,  263 => 71,  261 => 70,  255 => 67,  251 => 66,  244 => 62,  239 => 60,  228 => 57,  222 => 55,  219 => 54,  211 => 52,  201 => 50,  198 => 49,  195 => 48,  192 => 47,  190 => 46,  186 => 44,  168 => 43,  164 => 41,  155 => 40,  144 => 37,  138 => 34,  135 => 33,  133 => 32,  128 => 30,  121 => 29,  112 => 28,  99 => 24,  96 => 23,  88 => 20,  81 => 16,  77 => 14,  75 => 13,  72 => 12,  66 => 9,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.violationsCount > 0 or collector.calls|length %}
        {% set status_color = collector.violationsCount ? 'red' : '' %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/validator.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.violationsCount ?: collector.calls|length }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.calls|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status {{- collector.violationsCount > 0 ? ' sf-toolbar-status-red' }}\">{{ collector.violationsCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{- collector.violationsCount ? ' label-status-error' }} {{ collector.calls is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/validator.svg') }}</span>
        <strong>Validator</strong>
        {% if collector.violationsCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.violationsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Validator calls</h2>

    {% for call in collector.calls %}
        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In
                {% set caller = call.caller %}
                {% if caller.line %}
                    {% set link = caller.file|file_link(caller.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                    {% else %}
                        <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ caller.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ caller.line }}</a> (<a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-context-{{ loop.index0 }}\">context</a>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ caller.file|file_excerpt(caller.line) }}
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-{{ loop.index0 }}\">
                {{ profiler_dump(call.context, maxDepth=1) }}
            </div>

            {% if call.violations|length %}
                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>
                    {% for violation in call.violations %}
                        <tr>
                            <td>{{ violation.propertyPath }}</td>
                            <td>{{ violation.message }}</td>
                            <td>{{ profiler_dump(violation.seek('invalidValue')) }}</td>
                            <td>{{ profiler_dump(violation) }}</td>
                        </tr>
                    {% endfor %}
                </table>
            {% else %}
                No violations
            {% endif %}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No calls to the validator were collected during this request.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@WebProfiler/Collector/validator.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/validator.html.twig");
    }
}
