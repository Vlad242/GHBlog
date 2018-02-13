<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f096fec0c17af60f4d83873786da3336e88e95be3a7913b17364a41a3afcb79b extends Twig_Template
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
        $__internal_1f4f7c9b4cbd4bbb3e2f0eda6b6c569bda63be97ff81ce79fd68db4fea93cc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4f7c9b4cbd4bbb3e2f0eda6b6c569bda63be97ff81ce79fd68db4fea93cc46->enter($__internal_1f4f7c9b4cbd4bbb3e2f0eda6b6c569bda63be97ff81ce79fd68db4fea93cc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_28457cd230ffe3a99af9453c45f0ab28de27e6711c58fa8d2122f9c479b17e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28457cd230ffe3a99af9453c45f0ab28de27e6711c58fa8d2122f9c479b17e55->enter($__internal_28457cd230ffe3a99af9453c45f0ab28de27e6711c58fa8d2122f9c479b17e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_1f4f7c9b4cbd4bbb3e2f0eda6b6c569bda63be97ff81ce79fd68db4fea93cc46->leave($__internal_1f4f7c9b4cbd4bbb3e2f0eda6b6c569bda63be97ff81ce79fd68db4fea93cc46_prof);

        
        $__internal_28457cd230ffe3a99af9453c45f0ab28de27e6711c58fa8d2122f9c479b17e55->leave($__internal_28457cd230ffe3a99af9453c45f0ab28de27e6711c58fa8d2122f9c479b17e55_prof);

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
