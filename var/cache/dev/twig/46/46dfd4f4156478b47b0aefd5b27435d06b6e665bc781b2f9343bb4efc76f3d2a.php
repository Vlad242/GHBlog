<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_e43bf125fc5c5831967be4b703e8fcb530638f71ebb366e81ab5c8ff54f4beee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43bf125fc5c5831967be4b703e8fcb530638f71ebb366e81ab5c8ff54f4beee->enter($__internal_e43bf125fc5c5831967be4b703e8fcb530638f71ebb366e81ab5c8ff54f4beee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a2198670cfbcd0659d775b82b72bc6f1c45e6e1153a387e14c7b43ec750b3214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2198670cfbcd0659d775b82b72bc6f1c45e6e1153a387e14c7b43ec750b3214->enter($__internal_a2198670cfbcd0659d775b82b72bc6f1c45e6e1153a387e14c7b43ec750b3214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e43bf125fc5c5831967be4b703e8fcb530638f71ebb366e81ab5c8ff54f4beee->leave($__internal_e43bf125fc5c5831967be4b703e8fcb530638f71ebb366e81ab5c8ff54f4beee_prof);

        
        $__internal_a2198670cfbcd0659d775b82b72bc6f1c45e6e1153a387e14c7b43ec750b3214->leave($__internal_a2198670cfbcd0659d775b82b72bc6f1c45e6e1153a387e14c7b43ec750b3214_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9d72c693a92bfcfb8da7ded4c4f31827a6d96563d78d111a198b63ca7c5d6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d72c693a92bfcfb8da7ded4c4f31827a6d96563d78d111a198b63ca7c5d6fc->enter($__internal_d9d72c693a92bfcfb8da7ded4c4f31827a6d96563d78d111a198b63ca7c5d6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c4762755de21e09e2b367cb6b32697f9ce31cd0120c68f7defb82b775b0d335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4762755de21e09e2b367cb6b32697f9ce31cd0120c68f7defb82b775b0d335->enter($__internal_1c4762755de21e09e2b367cb6b32697f9ce31cd0120c68f7defb82b775b0d335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1c4762755de21e09e2b367cb6b32697f9ce31cd0120c68f7defb82b775b0d335->leave($__internal_1c4762755de21e09e2b367cb6b32697f9ce31cd0120c68f7defb82b775b0d335_prof);

        
        $__internal_d9d72c693a92bfcfb8da7ded4c4f31827a6d96563d78d111a198b63ca7c5d6fc->leave($__internal_d9d72c693a92bfcfb8da7ded4c4f31827a6d96563d78d111a198b63ca7c5d6fc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a4e89e48121c3a08d4499a1c3b225d245af8941e67756022f707598dd91bfe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4e89e48121c3a08d4499a1c3b225d245af8941e67756022f707598dd91bfe9->enter($__internal_0a4e89e48121c3a08d4499a1c3b225d245af8941e67756022f707598dd91bfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3a492a863a38d693161ed5dcd3fbd89958fd7d86639e2cab37c06b31d95fcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a492a863a38d693161ed5dcd3fbd89958fd7d86639e2cab37c06b31d95fcaa->enter($__internal_f3a492a863a38d693161ed5dcd3fbd89958fd7d86639e2cab37c06b31d95fcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f3a492a863a38d693161ed5dcd3fbd89958fd7d86639e2cab37c06b31d95fcaa->leave($__internal_f3a492a863a38d693161ed5dcd3fbd89958fd7d86639e2cab37c06b31d95fcaa_prof);

        
        $__internal_0a4e89e48121c3a08d4499a1c3b225d245af8941e67756022f707598dd91bfe9->leave($__internal_0a4e89e48121c3a08d4499a1c3b225d245af8941e67756022f707598dd91bfe9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_598b58e0db68b9d6afdb7f35808b5066ac9bf51b3586c37990d15971bfde7a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598b58e0db68b9d6afdb7f35808b5066ac9bf51b3586c37990d15971bfde7a82->enter($__internal_598b58e0db68b9d6afdb7f35808b5066ac9bf51b3586c37990d15971bfde7a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e1ed794ebba45004f4d61cb70c57abd76c62e28ccd4bbc8a9ccbaf206c8d610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1ed794ebba45004f4d61cb70c57abd76c62e28ccd4bbc8a9ccbaf206c8d610->enter($__internal_6e1ed794ebba45004f4d61cb70c57abd76c62e28ccd4bbc8a9ccbaf206c8d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e1ed794ebba45004f4d61cb70c57abd76c62e28ccd4bbc8a9ccbaf206c8d610->leave($__internal_6e1ed794ebba45004f4d61cb70c57abd76c62e28ccd4bbc8a9ccbaf206c8d610_prof);

        
        $__internal_598b58e0db68b9d6afdb7f35808b5066ac9bf51b3586c37990d15971bfde7a82->leave($__internal_598b58e0db68b9d6afdb7f35808b5066ac9bf51b3586c37990d15971bfde7a82_prof);

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
