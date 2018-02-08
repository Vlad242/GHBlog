<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5b2279fdb48a10339e43b76fe608c2b2a744ad49461f2200e766f2b5369a3090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c900c07a073fd376fa8cc80fb29a43f86edbd75bffbe333838c591add0ae3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c900c07a073fd376fa8cc80fb29a43f86edbd75bffbe333838c591add0ae3b3->enter($__internal_0c900c07a073fd376fa8cc80fb29a43f86edbd75bffbe333838c591add0ae3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_06d2581d1b13ae109cb3e333e844326a4391d962e5a6bed1c9d8c669783095e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d2581d1b13ae109cb3e333e844326a4391d962e5a6bed1c9d8c669783095e7->enter($__internal_06d2581d1b13ae109cb3e333e844326a4391d962e5a6bed1c9d8c669783095e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0c900c07a073fd376fa8cc80fb29a43f86edbd75bffbe333838c591add0ae3b3->leave($__internal_0c900c07a073fd376fa8cc80fb29a43f86edbd75bffbe333838c591add0ae3b3_prof);

        
        $__internal_06d2581d1b13ae109cb3e333e844326a4391d962e5a6bed1c9d8c669783095e7->leave($__internal_06d2581d1b13ae109cb3e333e844326a4391d962e5a6bed1c9d8c669783095e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7962451c0a3f661eed9b3236a078be4a1e86902911f827bd066161e2e7004aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7962451c0a3f661eed9b3236a078be4a1e86902911f827bd066161e2e7004aa6->enter($__internal_7962451c0a3f661eed9b3236a078be4a1e86902911f827bd066161e2e7004aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5b4ae3497f633cd402a02ccde0b3eb51397f10891a82d0ba8f7e31b08703da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b4ae3497f633cd402a02ccde0b3eb51397f10891a82d0ba8f7e31b08703da7->enter($__internal_f5b4ae3497f633cd402a02ccde0b3eb51397f10891a82d0ba8f7e31b08703da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f5b4ae3497f633cd402a02ccde0b3eb51397f10891a82d0ba8f7e31b08703da7->leave($__internal_f5b4ae3497f633cd402a02ccde0b3eb51397f10891a82d0ba8f7e31b08703da7_prof);

        
        $__internal_7962451c0a3f661eed9b3236a078be4a1e86902911f827bd066161e2e7004aa6->leave($__internal_7962451c0a3f661eed9b3236a078be4a1e86902911f827bd066161e2e7004aa6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e31694f633d0283e5c2e1e670521395ddc90c0b4f99f9d17fb9f4164fb4e9d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31694f633d0283e5c2e1e670521395ddc90c0b4f99f9d17fb9f4164fb4e9d26->enter($__internal_e31694f633d0283e5c2e1e670521395ddc90c0b4f99f9d17fb9f4164fb4e9d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_361bbc21d5f6bf367e6489af3c5c9194a4680a3b0fc32ab2e404c74bfe88e2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361bbc21d5f6bf367e6489af3c5c9194a4680a3b0fc32ab2e404c74bfe88e2d9->enter($__internal_361bbc21d5f6bf367e6489af3c5c9194a4680a3b0fc32ab2e404c74bfe88e2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_361bbc21d5f6bf367e6489af3c5c9194a4680a3b0fc32ab2e404c74bfe88e2d9->leave($__internal_361bbc21d5f6bf367e6489af3c5c9194a4680a3b0fc32ab2e404c74bfe88e2d9_prof);

        
        $__internal_e31694f633d0283e5c2e1e670521395ddc90c0b4f99f9d17fb9f4164fb4e9d26->leave($__internal_e31694f633d0283e5c2e1e670521395ddc90c0b4f99f9d17fb9f4164fb4e9d26_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_30ecdbbc292484cd5dc46d336ccbb3fb935dfc4be207d6b1412d99505a67dfcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ecdbbc292484cd5dc46d336ccbb3fb935dfc4be207d6b1412d99505a67dfcc->enter($__internal_30ecdbbc292484cd5dc46d336ccbb3fb935dfc4be207d6b1412d99505a67dfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dff8892b31f82a51a6f5ead4c15e992bec2d81d75ec56cd4864e1b2ca18db18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff8892b31f82a51a6f5ead4c15e992bec2d81d75ec56cd4864e1b2ca18db18f->enter($__internal_dff8892b31f82a51a6f5ead4c15e992bec2d81d75ec56cd4864e1b2ca18db18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dff8892b31f82a51a6f5ead4c15e992bec2d81d75ec56cd4864e1b2ca18db18f->leave($__internal_dff8892b31f82a51a6f5ead4c15e992bec2d81d75ec56cd4864e1b2ca18db18f_prof);

        
        $__internal_30ecdbbc292484cd5dc46d336ccbb3fb935dfc4be207d6b1412d99505a67dfcc->leave($__internal_30ecdbbc292484cd5dc46d336ccbb3fb935dfc4be207d6b1412d99505a67dfcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
