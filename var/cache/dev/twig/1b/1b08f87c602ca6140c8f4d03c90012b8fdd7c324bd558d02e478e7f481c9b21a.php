<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_683b7e35c197b5d35979c96fa3cd42ecea64f900b38bbfaf46b712c82bd8be1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683b7e35c197b5d35979c96fa3cd42ecea64f900b38bbfaf46b712c82bd8be1c->enter($__internal_683b7e35c197b5d35979c96fa3cd42ecea64f900b38bbfaf46b712c82bd8be1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_65bf013c12f0de4218d37ed733ccdf9e9754915bd391f61713f737e77b67f332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bf013c12f0de4218d37ed733ccdf9e9754915bd391f61713f737e77b67f332->enter($__internal_65bf013c12f0de4218d37ed733ccdf9e9754915bd391f61713f737e77b67f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683b7e35c197b5d35979c96fa3cd42ecea64f900b38bbfaf46b712c82bd8be1c->leave($__internal_683b7e35c197b5d35979c96fa3cd42ecea64f900b38bbfaf46b712c82bd8be1c_prof);

        
        $__internal_65bf013c12f0de4218d37ed733ccdf9e9754915bd391f61713f737e77b67f332->leave($__internal_65bf013c12f0de4218d37ed733ccdf9e9754915bd391f61713f737e77b67f332_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed6f559a6fe3b11ba612507c58b8cd5f51d624b2f24b1549310f0180e5b066d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6f559a6fe3b11ba612507c58b8cd5f51d624b2f24b1549310f0180e5b066d2->enter($__internal_ed6f559a6fe3b11ba612507c58b8cd5f51d624b2f24b1549310f0180e5b066d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ddf9cc7b47fd02a1d40c4ee58eab830bed1a4e8e8a901c09f07b5ff8b1ed907e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf9cc7b47fd02a1d40c4ee58eab830bed1a4e8e8a901c09f07b5ff8b1ed907e->enter($__internal_ddf9cc7b47fd02a1d40c4ee58eab830bed1a4e8e8a901c09f07b5ff8b1ed907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ddf9cc7b47fd02a1d40c4ee58eab830bed1a4e8e8a901c09f07b5ff8b1ed907e->leave($__internal_ddf9cc7b47fd02a1d40c4ee58eab830bed1a4e8e8a901c09f07b5ff8b1ed907e_prof);

        
        $__internal_ed6f559a6fe3b11ba612507c58b8cd5f51d624b2f24b1549310f0180e5b066d2->leave($__internal_ed6f559a6fe3b11ba612507c58b8cd5f51d624b2f24b1549310f0180e5b066d2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e94c28d3da1c94bdd836f27e43dfed488f2136b0c28f1f01577df5e1eba02b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94c28d3da1c94bdd836f27e43dfed488f2136b0c28f1f01577df5e1eba02b85->enter($__internal_e94c28d3da1c94bdd836f27e43dfed488f2136b0c28f1f01577df5e1eba02b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97cc262d1a6c6705338c4b4276c547c72ce47a10dfc38d1c09cb0f71f2f8e050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cc262d1a6c6705338c4b4276c547c72ce47a10dfc38d1c09cb0f71f2f8e050->enter($__internal_97cc262d1a6c6705338c4b4276c547c72ce47a10dfc38d1c09cb0f71f2f8e050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97cc262d1a6c6705338c4b4276c547c72ce47a10dfc38d1c09cb0f71f2f8e050->leave($__internal_97cc262d1a6c6705338c4b4276c547c72ce47a10dfc38d1c09cb0f71f2f8e050_prof);

        
        $__internal_e94c28d3da1c94bdd836f27e43dfed488f2136b0c28f1f01577df5e1eba02b85->leave($__internal_e94c28d3da1c94bdd836f27e43dfed488f2136b0c28f1f01577df5e1eba02b85_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8564e159af613915e62a99e5ff54a2f4e9b1d9c6f71566a497b2e89f08f7d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8564e159af613915e62a99e5ff54a2f4e9b1d9c6f71566a497b2e89f08f7d02->enter($__internal_d8564e159af613915e62a99e5ff54a2f4e9b1d9c6f71566a497b2e89f08f7d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86fca923c12bafb276b9944dd7fc0ba4dcf6e2062bba55f9e9746231a0feb30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fca923c12bafb276b9944dd7fc0ba4dcf6e2062bba55f9e9746231a0feb30d->enter($__internal_86fca923c12bafb276b9944dd7fc0ba4dcf6e2062bba55f9e9746231a0feb30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_86fca923c12bafb276b9944dd7fc0ba4dcf6e2062bba55f9e9746231a0feb30d->leave($__internal_86fca923c12bafb276b9944dd7fc0ba4dcf6e2062bba55f9e9746231a0feb30d_prof);

        
        $__internal_d8564e159af613915e62a99e5ff54a2f4e9b1d9c6f71566a497b2e89f08f7d02->leave($__internal_d8564e159af613915e62a99e5ff54a2f4e9b1d9c6f71566a497b2e89f08f7d02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vlad/work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
