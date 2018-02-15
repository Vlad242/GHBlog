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
        $__internal_84e405fde0675d2b7db6e004c393dc83ddde84016881daf12dd6702508671697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e405fde0675d2b7db6e004c393dc83ddde84016881daf12dd6702508671697->enter($__internal_84e405fde0675d2b7db6e004c393dc83ddde84016881daf12dd6702508671697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4b864e2890502ede28b4f40d92fbc5b3b39ce9e50875ad930f774adabc00a0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b864e2890502ede28b4f40d92fbc5b3b39ce9e50875ad930f774adabc00a0c4->enter($__internal_4b864e2890502ede28b4f40d92fbc5b3b39ce9e50875ad930f774adabc00a0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_84e405fde0675d2b7db6e004c393dc83ddde84016881daf12dd6702508671697->leave($__internal_84e405fde0675d2b7db6e004c393dc83ddde84016881daf12dd6702508671697_prof);

        
        $__internal_4b864e2890502ede28b4f40d92fbc5b3b39ce9e50875ad930f774adabc00a0c4->leave($__internal_4b864e2890502ede28b4f40d92fbc5b3b39ce9e50875ad930f774adabc00a0c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e97ee457b1f6bb041a7e2cf72ce2da1364b5916ef565996d74c170272becb09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97ee457b1f6bb041a7e2cf72ce2da1364b5916ef565996d74c170272becb09d->enter($__internal_e97ee457b1f6bb041a7e2cf72ce2da1364b5916ef565996d74c170272becb09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19f18708197c07144aa85843c37324e8fe4d2477220048099ba57fee46004149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f18708197c07144aa85843c37324e8fe4d2477220048099ba57fee46004149->enter($__internal_19f18708197c07144aa85843c37324e8fe4d2477220048099ba57fee46004149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_19f18708197c07144aa85843c37324e8fe4d2477220048099ba57fee46004149->leave($__internal_19f18708197c07144aa85843c37324e8fe4d2477220048099ba57fee46004149_prof);

        
        $__internal_e97ee457b1f6bb041a7e2cf72ce2da1364b5916ef565996d74c170272becb09d->leave($__internal_e97ee457b1f6bb041a7e2cf72ce2da1364b5916ef565996d74c170272becb09d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6de0a10c82b13034046045424871db9310cc9c5112060ed6d75ab7291b6f537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6de0a10c82b13034046045424871db9310cc9c5112060ed6d75ab7291b6f537->enter($__internal_b6de0a10c82b13034046045424871db9310cc9c5112060ed6d75ab7291b6f537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_12db236c89afc6ad1a991460c0b472882c47bf4de5dab050ba89e748d61355b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12db236c89afc6ad1a991460c0b472882c47bf4de5dab050ba89e748d61355b4->enter($__internal_12db236c89afc6ad1a991460c0b472882c47bf4de5dab050ba89e748d61355b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_12db236c89afc6ad1a991460c0b472882c47bf4de5dab050ba89e748d61355b4->leave($__internal_12db236c89afc6ad1a991460c0b472882c47bf4de5dab050ba89e748d61355b4_prof);

        
        $__internal_b6de0a10c82b13034046045424871db9310cc9c5112060ed6d75ab7291b6f537->leave($__internal_b6de0a10c82b13034046045424871db9310cc9c5112060ed6d75ab7291b6f537_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fae3ae3f12af2a9be2cc5cd4509f07fcc63c1620ffccb120e428a8c9d07080ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae3ae3f12af2a9be2cc5cd4509f07fcc63c1620ffccb120e428a8c9d07080ff->enter($__internal_fae3ae3f12af2a9be2cc5cd4509f07fcc63c1620ffccb120e428a8c9d07080ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f757905e1758ec1ce159f06c3a7019972b7e6c17760bb24e26506f5759e887f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f757905e1758ec1ce159f06c3a7019972b7e6c17760bb24e26506f5759e887f8->enter($__internal_f757905e1758ec1ce159f06c3a7019972b7e6c17760bb24e26506f5759e887f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f757905e1758ec1ce159f06c3a7019972b7e6c17760bb24e26506f5759e887f8->leave($__internal_f757905e1758ec1ce159f06c3a7019972b7e6c17760bb24e26506f5759e887f8_prof);

        
        $__internal_fae3ae3f12af2a9be2cc5cd4509f07fcc63c1620ffccb120e428a8c9d07080ff->leave($__internal_fae3ae3f12af2a9be2cc5cd4509f07fcc63c1620ffccb120e428a8c9d07080ff_prof);

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
