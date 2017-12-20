<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
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
        $__internal_1e3a1c312914172a0c708bb806ed83d6e4bfcf420c33f9029095529e3afc08dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3a1c312914172a0c708bb806ed83d6e4bfcf420c33f9029095529e3afc08dc->enter($__internal_1e3a1c312914172a0c708bb806ed83d6e4bfcf420c33f9029095529e3afc08dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_330af18321f56d0849be8cbf5b6398c98c78c7fd752e1931660abb9db64a3c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330af18321f56d0849be8cbf5b6398c98c78c7fd752e1931660abb9db64a3c21->enter($__internal_330af18321f56d0849be8cbf5b6398c98c78c7fd752e1931660abb9db64a3c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1e3a1c312914172a0c708bb806ed83d6e4bfcf420c33f9029095529e3afc08dc->leave($__internal_1e3a1c312914172a0c708bb806ed83d6e4bfcf420c33f9029095529e3afc08dc_prof);

        
        $__internal_330af18321f56d0849be8cbf5b6398c98c78c7fd752e1931660abb9db64a3c21->leave($__internal_330af18321f56d0849be8cbf5b6398c98c78c7fd752e1931660abb9db64a3c21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccd28f932cfbc9a675656d084bb8ce6b175393f1e3fcad5a613fb597f64fffcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd28f932cfbc9a675656d084bb8ce6b175393f1e3fcad5a613fb597f64fffcd->enter($__internal_ccd28f932cfbc9a675656d084bb8ce6b175393f1e3fcad5a613fb597f64fffcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a6c42f464999e59eb547ded52fb8d65dcff2da3abf246c7f41749fe36afd3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6c42f464999e59eb547ded52fb8d65dcff2da3abf246c7f41749fe36afd3bc->enter($__internal_3a6c42f464999e59eb547ded52fb8d65dcff2da3abf246c7f41749fe36afd3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3a6c42f464999e59eb547ded52fb8d65dcff2da3abf246c7f41749fe36afd3bc->leave($__internal_3a6c42f464999e59eb547ded52fb8d65dcff2da3abf246c7f41749fe36afd3bc_prof);

        
        $__internal_ccd28f932cfbc9a675656d084bb8ce6b175393f1e3fcad5a613fb597f64fffcd->leave($__internal_ccd28f932cfbc9a675656d084bb8ce6b175393f1e3fcad5a613fb597f64fffcd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_13ba4c294d325a968907bfe960b0de7b9df8cd622099740e858e063e9a9a5830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ba4c294d325a968907bfe960b0de7b9df8cd622099740e858e063e9a9a5830->enter($__internal_13ba4c294d325a968907bfe960b0de7b9df8cd622099740e858e063e9a9a5830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6313c344f4405379e48d25ef06dac3e33b10b556b95c94ed3b3b872b1a34881c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6313c344f4405379e48d25ef06dac3e33b10b556b95c94ed3b3b872b1a34881c->enter($__internal_6313c344f4405379e48d25ef06dac3e33b10b556b95c94ed3b3b872b1a34881c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6313c344f4405379e48d25ef06dac3e33b10b556b95c94ed3b3b872b1a34881c->leave($__internal_6313c344f4405379e48d25ef06dac3e33b10b556b95c94ed3b3b872b1a34881c_prof);

        
        $__internal_13ba4c294d325a968907bfe960b0de7b9df8cd622099740e858e063e9a9a5830->leave($__internal_13ba4c294d325a968907bfe960b0de7b9df8cd622099740e858e063e9a9a5830_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_60d4277f781987e0836777da6fccf2a535e78a6dc9cfa43502ee4b9ec1113816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d4277f781987e0836777da6fccf2a535e78a6dc9cfa43502ee4b9ec1113816->enter($__internal_60d4277f781987e0836777da6fccf2a535e78a6dc9cfa43502ee4b9ec1113816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1044cdaa7e7461b845eebb85e0ce1c94a4841ef6504c266704360ea2e44a2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1044cdaa7e7461b845eebb85e0ce1c94a4841ef6504c266704360ea2e44a2c0->enter($__internal_b1044cdaa7e7461b845eebb85e0ce1c94a4841ef6504c266704360ea2e44a2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1044cdaa7e7461b845eebb85e0ce1c94a4841ef6504c266704360ea2e44a2c0->leave($__internal_b1044cdaa7e7461b845eebb85e0ce1c94a4841ef6504c266704360ea2e44a2c0_prof);

        
        $__internal_60d4277f781987e0836777da6fccf2a535e78a6dc9cfa43502ee4b9ec1113816->leave($__internal_60d4277f781987e0836777da6fccf2a535e78a6dc9cfa43502ee4b9ec1113816_prof);

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
", "@Twig/layout.html.twig", "/home/vlad/work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
