<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9c38fb7f5e60ae425ff7fee13e484eae8e45cd98d6a900eb79ec513c5a1e2ac1 extends Twig_Template
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
        $__internal_a55e5d6c2ed4e5809e0021caa81d785e2f9b22f99b09bfdcf2d3aed3b0ceec54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55e5d6c2ed4e5809e0021caa81d785e2f9b22f99b09bfdcf2d3aed3b0ceec54->enter($__internal_a55e5d6c2ed4e5809e0021caa81d785e2f9b22f99b09bfdcf2d3aed3b0ceec54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_013a9de38416abd1bf92cd9c7059a1c8078dfea013a4d5ff53aff1b52e804abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013a9de38416abd1bf92cd9c7059a1c8078dfea013a4d5ff53aff1b52e804abc->enter($__internal_013a9de38416abd1bf92cd9c7059a1c8078dfea013a4d5ff53aff1b52e804abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a55e5d6c2ed4e5809e0021caa81d785e2f9b22f99b09bfdcf2d3aed3b0ceec54->leave($__internal_a55e5d6c2ed4e5809e0021caa81d785e2f9b22f99b09bfdcf2d3aed3b0ceec54_prof);

        
        $__internal_013a9de38416abd1bf92cd9c7059a1c8078dfea013a4d5ff53aff1b52e804abc->leave($__internal_013a9de38416abd1bf92cd9c7059a1c8078dfea013a4d5ff53aff1b52e804abc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca531875ccd324b106c4e9638908480809588d34a5fcd63ad118135d4a2df1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca531875ccd324b106c4e9638908480809588d34a5fcd63ad118135d4a2df1c->enter($__internal_bca531875ccd324b106c4e9638908480809588d34a5fcd63ad118135d4a2df1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05ced7d25d25f0fc34d42945337c228ef3c738e31d5dccc873be171d9c7b8f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ced7d25d25f0fc34d42945337c228ef3c738e31d5dccc873be171d9c7b8f39->enter($__internal_05ced7d25d25f0fc34d42945337c228ef3c738e31d5dccc873be171d9c7b8f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_05ced7d25d25f0fc34d42945337c228ef3c738e31d5dccc873be171d9c7b8f39->leave($__internal_05ced7d25d25f0fc34d42945337c228ef3c738e31d5dccc873be171d9c7b8f39_prof);

        
        $__internal_bca531875ccd324b106c4e9638908480809588d34a5fcd63ad118135d4a2df1c->leave($__internal_bca531875ccd324b106c4e9638908480809588d34a5fcd63ad118135d4a2df1c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fa3cbdef695026288f780e052603dc11e1023b74fe6702756bf298c415d5009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa3cbdef695026288f780e052603dc11e1023b74fe6702756bf298c415d5009->enter($__internal_8fa3cbdef695026288f780e052603dc11e1023b74fe6702756bf298c415d5009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b079a002ca7be969aaae6c6b2263689e1e17ea5e122e2970861253a2cec5763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b079a002ca7be969aaae6c6b2263689e1e17ea5e122e2970861253a2cec5763->enter($__internal_2b079a002ca7be969aaae6c6b2263689e1e17ea5e122e2970861253a2cec5763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2b079a002ca7be969aaae6c6b2263689e1e17ea5e122e2970861253a2cec5763->leave($__internal_2b079a002ca7be969aaae6c6b2263689e1e17ea5e122e2970861253a2cec5763_prof);

        
        $__internal_8fa3cbdef695026288f780e052603dc11e1023b74fe6702756bf298c415d5009->leave($__internal_8fa3cbdef695026288f780e052603dc11e1023b74fe6702756bf298c415d5009_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_479cdd1252f9c5dd34e219566e9fbfbecfca05857fc3bbecf6f5325f2f4a6725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479cdd1252f9c5dd34e219566e9fbfbecfca05857fc3bbecf6f5325f2f4a6725->enter($__internal_479cdd1252f9c5dd34e219566e9fbfbecfca05857fc3bbecf6f5325f2f4a6725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66cbd10acfdc1ea12732d5ddf5732eaebb084b4f9db60fed7b409e289a79f5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cbd10acfdc1ea12732d5ddf5732eaebb084b4f9db60fed7b409e289a79f5f7->enter($__internal_66cbd10acfdc1ea12732d5ddf5732eaebb084b4f9db60fed7b409e289a79f5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_66cbd10acfdc1ea12732d5ddf5732eaebb084b4f9db60fed7b409e289a79f5f7->leave($__internal_66cbd10acfdc1ea12732d5ddf5732eaebb084b4f9db60fed7b409e289a79f5f7_prof);

        
        $__internal_479cdd1252f9c5dd34e219566e9fbfbecfca05857fc3bbecf6f5325f2f4a6725->leave($__internal_479cdd1252f9c5dd34e219566e9fbfbecfca05857fc3bbecf6f5325f2f4a6725_prof);

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
