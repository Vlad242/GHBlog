<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_90741cbd12edd013564d16fea0e8b5f7ab2fd714565200edb81dcc3ee3aed12f extends Twig_Template
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
        $__internal_cd26c780bb89bd1daea0045e5e1b69950ef0fb1730498ce5cdb30efa32de3092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd26c780bb89bd1daea0045e5e1b69950ef0fb1730498ce5cdb30efa32de3092->enter($__internal_cd26c780bb89bd1daea0045e5e1b69950ef0fb1730498ce5cdb30efa32de3092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_05fd3670930c73e253bfbac449d6ca2cd81cf4292853c4295a521fdb6d66dc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fd3670930c73e253bfbac449d6ca2cd81cf4292853c4295a521fdb6d66dc82->enter($__internal_05fd3670930c73e253bfbac449d6ca2cd81cf4292853c4295a521fdb6d66dc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cd26c780bb89bd1daea0045e5e1b69950ef0fb1730498ce5cdb30efa32de3092->leave($__internal_cd26c780bb89bd1daea0045e5e1b69950ef0fb1730498ce5cdb30efa32de3092_prof);

        
        $__internal_05fd3670930c73e253bfbac449d6ca2cd81cf4292853c4295a521fdb6d66dc82->leave($__internal_05fd3670930c73e253bfbac449d6ca2cd81cf4292853c4295a521fdb6d66dc82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_731ed11557ea1630d4b8e9421b0a82ff8d2df2f3e6b73d48e6ce51b8b6638959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731ed11557ea1630d4b8e9421b0a82ff8d2df2f3e6b73d48e6ce51b8b6638959->enter($__internal_731ed11557ea1630d4b8e9421b0a82ff8d2df2f3e6b73d48e6ce51b8b6638959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c63000778dd16d637bedb7a5d390adf6568b8f4e5cf2eeab661aa9513521ef58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63000778dd16d637bedb7a5d390adf6568b8f4e5cf2eeab661aa9513521ef58->enter($__internal_c63000778dd16d637bedb7a5d390adf6568b8f4e5cf2eeab661aa9513521ef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c63000778dd16d637bedb7a5d390adf6568b8f4e5cf2eeab661aa9513521ef58->leave($__internal_c63000778dd16d637bedb7a5d390adf6568b8f4e5cf2eeab661aa9513521ef58_prof);

        
        $__internal_731ed11557ea1630d4b8e9421b0a82ff8d2df2f3e6b73d48e6ce51b8b6638959->leave($__internal_731ed11557ea1630d4b8e9421b0a82ff8d2df2f3e6b73d48e6ce51b8b6638959_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7cc5ef28249028fa18a12a232dde7e65906746b3ea786f0b5fd9f1991678a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7cc5ef28249028fa18a12a232dde7e65906746b3ea786f0b5fd9f1991678a0f->enter($__internal_a7cc5ef28249028fa18a12a232dde7e65906746b3ea786f0b5fd9f1991678a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbeedc579c9bc72496e8f43417779fd5b3f4c6dbc6e6c2f6bba36320b9f4e3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbeedc579c9bc72496e8f43417779fd5b3f4c6dbc6e6c2f6bba36320b9f4e3cf->enter($__internal_dbeedc579c9bc72496e8f43417779fd5b3f4c6dbc6e6c2f6bba36320b9f4e3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dbeedc579c9bc72496e8f43417779fd5b3f4c6dbc6e6c2f6bba36320b9f4e3cf->leave($__internal_dbeedc579c9bc72496e8f43417779fd5b3f4c6dbc6e6c2f6bba36320b9f4e3cf_prof);

        
        $__internal_a7cc5ef28249028fa18a12a232dde7e65906746b3ea786f0b5fd9f1991678a0f->leave($__internal_a7cc5ef28249028fa18a12a232dde7e65906746b3ea786f0b5fd9f1991678a0f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fbd441e8530ef22202011a5256c724897dfd5b71bacb8b36827a172aefaa599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbd441e8530ef22202011a5256c724897dfd5b71bacb8b36827a172aefaa599->enter($__internal_7fbd441e8530ef22202011a5256c724897dfd5b71bacb8b36827a172aefaa599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9286c9f271d505d5ac09fb15fb46d08b047b162a2a116528149e6040ada50e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9286c9f271d505d5ac09fb15fb46d08b047b162a2a116528149e6040ada50e8f->enter($__internal_9286c9f271d505d5ac09fb15fb46d08b047b162a2a116528149e6040ada50e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9286c9f271d505d5ac09fb15fb46d08b047b162a2a116528149e6040ada50e8f->leave($__internal_9286c9f271d505d5ac09fb15fb46d08b047b162a2a116528149e6040ada50e8f_prof);

        
        $__internal_7fbd441e8530ef22202011a5256c724897dfd5b71bacb8b36827a172aefaa599->leave($__internal_7fbd441e8530ef22202011a5256c724897dfd5b71bacb8b36827a172aefaa599_prof);

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
