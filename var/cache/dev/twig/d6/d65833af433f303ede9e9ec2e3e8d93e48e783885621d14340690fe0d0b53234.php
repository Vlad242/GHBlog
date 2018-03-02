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
        $__internal_93fe5304efa2f5c3aa48bc89f9c6481492fbebc4a0b5fb022dc7428e7db7e65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fe5304efa2f5c3aa48bc89f9c6481492fbebc4a0b5fb022dc7428e7db7e65d->enter($__internal_93fe5304efa2f5c3aa48bc89f9c6481492fbebc4a0b5fb022dc7428e7db7e65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_daa614004530e6c5a4f049fc4e43da6bab32e4ffadd53f9555467f19706abc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa614004530e6c5a4f049fc4e43da6bab32e4ffadd53f9555467f19706abc77->enter($__internal_daa614004530e6c5a4f049fc4e43da6bab32e4ffadd53f9555467f19706abc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fe5304efa2f5c3aa48bc89f9c6481492fbebc4a0b5fb022dc7428e7db7e65d->leave($__internal_93fe5304efa2f5c3aa48bc89f9c6481492fbebc4a0b5fb022dc7428e7db7e65d_prof);

        
        $__internal_daa614004530e6c5a4f049fc4e43da6bab32e4ffadd53f9555467f19706abc77->leave($__internal_daa614004530e6c5a4f049fc4e43da6bab32e4ffadd53f9555467f19706abc77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bc866c7bb6a83405eae3281d7e3f5dc515327ebfcad0fa961789f95e960c793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc866c7bb6a83405eae3281d7e3f5dc515327ebfcad0fa961789f95e960c793->enter($__internal_2bc866c7bb6a83405eae3281d7e3f5dc515327ebfcad0fa961789f95e960c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75f8e7f2d42db094a96817da6cf2d22086843f2b85d442528568b73e8054ed84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f8e7f2d42db094a96817da6cf2d22086843f2b85d442528568b73e8054ed84->enter($__internal_75f8e7f2d42db094a96817da6cf2d22086843f2b85d442528568b73e8054ed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_75f8e7f2d42db094a96817da6cf2d22086843f2b85d442528568b73e8054ed84->leave($__internal_75f8e7f2d42db094a96817da6cf2d22086843f2b85d442528568b73e8054ed84_prof);

        
        $__internal_2bc866c7bb6a83405eae3281d7e3f5dc515327ebfcad0fa961789f95e960c793->leave($__internal_2bc866c7bb6a83405eae3281d7e3f5dc515327ebfcad0fa961789f95e960c793_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a2395762f0c84702f6b44b7b82e8973728c1f1f0fe5994a6b4ec7fd96ab8205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2395762f0c84702f6b44b7b82e8973728c1f1f0fe5994a6b4ec7fd96ab8205->enter($__internal_7a2395762f0c84702f6b44b7b82e8973728c1f1f0fe5994a6b4ec7fd96ab8205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5c6012e84cf52f2f2b8c913e3fb32dd353b4463f8eae48856a2d0cbf579fdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c6012e84cf52f2f2b8c913e3fb32dd353b4463f8eae48856a2d0cbf579fdd8->enter($__internal_a5c6012e84cf52f2f2b8c913e3fb32dd353b4463f8eae48856a2d0cbf579fdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5c6012e84cf52f2f2b8c913e3fb32dd353b4463f8eae48856a2d0cbf579fdd8->leave($__internal_a5c6012e84cf52f2f2b8c913e3fb32dd353b4463f8eae48856a2d0cbf579fdd8_prof);

        
        $__internal_7a2395762f0c84702f6b44b7b82e8973728c1f1f0fe5994a6b4ec7fd96ab8205->leave($__internal_7a2395762f0c84702f6b44b7b82e8973728c1f1f0fe5994a6b4ec7fd96ab8205_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b24c4596234f36c99210a8dce88a09cbaa58cfcb19c76cfc811dd9f2d06fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b24c4596234f36c99210a8dce88a09cbaa58cfcb19c76cfc811dd9f2d06fd3->enter($__internal_c0b24c4596234f36c99210a8dce88a09cbaa58cfcb19c76cfc811dd9f2d06fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85a91e71e94467725194067aed4f73c831eaa13fb9e34fdf46b9113cc515315d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a91e71e94467725194067aed4f73c831eaa13fb9e34fdf46b9113cc515315d->enter($__internal_85a91e71e94467725194067aed4f73c831eaa13fb9e34fdf46b9113cc515315d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_85a91e71e94467725194067aed4f73c831eaa13fb9e34fdf46b9113cc515315d->leave($__internal_85a91e71e94467725194067aed4f73c831eaa13fb9e34fdf46b9113cc515315d_prof);

        
        $__internal_c0b24c4596234f36c99210a8dce88a09cbaa58cfcb19c76cfc811dd9f2d06fd3->leave($__internal_c0b24c4596234f36c99210a8dce88a09cbaa58cfcb19c76cfc811dd9f2d06fd3_prof);

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
