<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_28a67204891c0135f5802ac2f164ad4d6de72001f9ea046dc7dd225f3755a72f extends Twig_Template
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
        $__internal_0f711db35cfb1f8f694eb44a7e198851da76c4afc49ba980090a0a9500d07a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f711db35cfb1f8f694eb44a7e198851da76c4afc49ba980090a0a9500d07a09->enter($__internal_0f711db35cfb1f8f694eb44a7e198851da76c4afc49ba980090a0a9500d07a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9fedfcb8ed675047fde903cc78f38705835b357b43cd2bc791d20cf15b498dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fedfcb8ed675047fde903cc78f38705835b357b43cd2bc791d20cf15b498dff->enter($__internal_9fedfcb8ed675047fde903cc78f38705835b357b43cd2bc791d20cf15b498dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0f711db35cfb1f8f694eb44a7e198851da76c4afc49ba980090a0a9500d07a09->leave($__internal_0f711db35cfb1f8f694eb44a7e198851da76c4afc49ba980090a0a9500d07a09_prof);

        
        $__internal_9fedfcb8ed675047fde903cc78f38705835b357b43cd2bc791d20cf15b498dff->leave($__internal_9fedfcb8ed675047fde903cc78f38705835b357b43cd2bc791d20cf15b498dff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
