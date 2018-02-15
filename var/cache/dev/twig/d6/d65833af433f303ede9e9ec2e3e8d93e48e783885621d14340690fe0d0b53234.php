<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e0c7b3aa84465fb67c0936d25e35df1b40e93f01e5f9451e2e30b47108a4e23d extends Twig_Template
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
        $__internal_eed37246754257366ae42e40c1996f8dda78070b7dce05b6dd8f7a6002d81c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed37246754257366ae42e40c1996f8dda78070b7dce05b6dd8f7a6002d81c0f->enter($__internal_eed37246754257366ae42e40c1996f8dda78070b7dce05b6dd8f7a6002d81c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f9ad5a4688267ccb6eed1d439e97555a910c5aa36125a7cfc883fee239f49735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ad5a4688267ccb6eed1d439e97555a910c5aa36125a7cfc883fee239f49735->enter($__internal_f9ad5a4688267ccb6eed1d439e97555a910c5aa36125a7cfc883fee239f49735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed37246754257366ae42e40c1996f8dda78070b7dce05b6dd8f7a6002d81c0f->leave($__internal_eed37246754257366ae42e40c1996f8dda78070b7dce05b6dd8f7a6002d81c0f_prof);

        
        $__internal_f9ad5a4688267ccb6eed1d439e97555a910c5aa36125a7cfc883fee239f49735->leave($__internal_f9ad5a4688267ccb6eed1d439e97555a910c5aa36125a7cfc883fee239f49735_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8417543e227beca18b167fe7471a4b2fa4de359de5617d7425ef54dd3f65777a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8417543e227beca18b167fe7471a4b2fa4de359de5617d7425ef54dd3f65777a->enter($__internal_8417543e227beca18b167fe7471a4b2fa4de359de5617d7425ef54dd3f65777a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9d83de996a1a39725ae15dab2a52cf58b42b6723abea4473930b4fa89fa5614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d83de996a1a39725ae15dab2a52cf58b42b6723abea4473930b4fa89fa5614->enter($__internal_b9d83de996a1a39725ae15dab2a52cf58b42b6723abea4473930b4fa89fa5614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b9d83de996a1a39725ae15dab2a52cf58b42b6723abea4473930b4fa89fa5614->leave($__internal_b9d83de996a1a39725ae15dab2a52cf58b42b6723abea4473930b4fa89fa5614_prof);

        
        $__internal_8417543e227beca18b167fe7471a4b2fa4de359de5617d7425ef54dd3f65777a->leave($__internal_8417543e227beca18b167fe7471a4b2fa4de359de5617d7425ef54dd3f65777a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_76860bf602d3876f178757b3656f112ee96587fc424ac73529a6296738a63f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76860bf602d3876f178757b3656f112ee96587fc424ac73529a6296738a63f90->enter($__internal_76860bf602d3876f178757b3656f112ee96587fc424ac73529a6296738a63f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b04bb7c70ed42f2faea1b1e6f0bc280ed6b1794530ddeb05f215b329be4cb5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04bb7c70ed42f2faea1b1e6f0bc280ed6b1794530ddeb05f215b329be4cb5b1->enter($__internal_b04bb7c70ed42f2faea1b1e6f0bc280ed6b1794530ddeb05f215b329be4cb5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b04bb7c70ed42f2faea1b1e6f0bc280ed6b1794530ddeb05f215b329be4cb5b1->leave($__internal_b04bb7c70ed42f2faea1b1e6f0bc280ed6b1794530ddeb05f215b329be4cb5b1_prof);

        
        $__internal_76860bf602d3876f178757b3656f112ee96587fc424ac73529a6296738a63f90->leave($__internal_76860bf602d3876f178757b3656f112ee96587fc424ac73529a6296738a63f90_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b698382087a53fed67de61a8658e60a52ca6658c3937be771e237727bd912525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b698382087a53fed67de61a8658e60a52ca6658c3937be771e237727bd912525->enter($__internal_b698382087a53fed67de61a8658e60a52ca6658c3937be771e237727bd912525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a64b6901662eafaaf808bd8ad29afa76f650e96e588ccbbc5612bb036b5d6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a64b6901662eafaaf808bd8ad29afa76f650e96e588ccbbc5612bb036b5d6c9->enter($__internal_3a64b6901662eafaaf808bd8ad29afa76f650e96e588ccbbc5612bb036b5d6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3a64b6901662eafaaf808bd8ad29afa76f650e96e588ccbbc5612bb036b5d6c9->leave($__internal_3a64b6901662eafaaf808bd8ad29afa76f650e96e588ccbbc5612bb036b5d6c9_prof);

        
        $__internal_b698382087a53fed67de61a8658e60a52ca6658c3937be771e237727bd912525->leave($__internal_b698382087a53fed67de61a8658e60a52ca6658c3937be771e237727bd912525_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
