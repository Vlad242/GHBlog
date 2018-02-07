<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea5ffa85ff80b5874e0e79b24221eb1c8fea18b0b8c6f218dc740dca9bcb92fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5ffa85ff80b5874e0e79b24221eb1c8fea18b0b8c6f218dc740dca9bcb92fa->enter($__internal_ea5ffa85ff80b5874e0e79b24221eb1c8fea18b0b8c6f218dc740dca9bcb92fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1524fee14dffbda89afdc5206599a44d27cc811b294755f354f683c65fcf7487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1524fee14dffbda89afdc5206599a44d27cc811b294755f354f683c65fcf7487->enter($__internal_1524fee14dffbda89afdc5206599a44d27cc811b294755f354f683c65fcf7487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ea5ffa85ff80b5874e0e79b24221eb1c8fea18b0b8c6f218dc740dca9bcb92fa->leave($__internal_ea5ffa85ff80b5874e0e79b24221eb1c8fea18b0b8c6f218dc740dca9bcb92fa_prof);

        
        $__internal_1524fee14dffbda89afdc5206599a44d27cc811b294755f354f683c65fcf7487->leave($__internal_1524fee14dffbda89afdc5206599a44d27cc811b294755f354f683c65fcf7487_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aed7033775b7eaa91ad354dc7459d0e73013aeaa8397e41bbe1e8d4c5aac1e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed7033775b7eaa91ad354dc7459d0e73013aeaa8397e41bbe1e8d4c5aac1e43->enter($__internal_aed7033775b7eaa91ad354dc7459d0e73013aeaa8397e41bbe1e8d4c5aac1e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6def4cf672ba73a9541be4f2686dd8167391bdee92616a9eaddfcf6450a0144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6def4cf672ba73a9541be4f2686dd8167391bdee92616a9eaddfcf6450a0144a->enter($__internal_6def4cf672ba73a9541be4f2686dd8167391bdee92616a9eaddfcf6450a0144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6def4cf672ba73a9541be4f2686dd8167391bdee92616a9eaddfcf6450a0144a->leave($__internal_6def4cf672ba73a9541be4f2686dd8167391bdee92616a9eaddfcf6450a0144a_prof);

        
        $__internal_aed7033775b7eaa91ad354dc7459d0e73013aeaa8397e41bbe1e8d4c5aac1e43->leave($__internal_aed7033775b7eaa91ad354dc7459d0e73013aeaa8397e41bbe1e8d4c5aac1e43_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79f2ad228f35d3f238982dd222cca2779e06ec27079cb4edb1e241ceb956ee87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f2ad228f35d3f238982dd222cca2779e06ec27079cb4edb1e241ceb956ee87->enter($__internal_79f2ad228f35d3f238982dd222cca2779e06ec27079cb4edb1e241ceb956ee87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86ae27e9b01f70611170cc6eb402844d250d88927f21b84ecd79b315f4ba1b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ae27e9b01f70611170cc6eb402844d250d88927f21b84ecd79b315f4ba1b52->enter($__internal_86ae27e9b01f70611170cc6eb402844d250d88927f21b84ecd79b315f4ba1b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86ae27e9b01f70611170cc6eb402844d250d88927f21b84ecd79b315f4ba1b52->leave($__internal_86ae27e9b01f70611170cc6eb402844d250d88927f21b84ecd79b315f4ba1b52_prof);

        
        $__internal_79f2ad228f35d3f238982dd222cca2779e06ec27079cb4edb1e241ceb956ee87->leave($__internal_79f2ad228f35d3f238982dd222cca2779e06ec27079cb4edb1e241ceb956ee87_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  55 => 10,  43 => 12,  40 => 11,  38 => 10,  27 => 1,);
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
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/vlad/Work/ghBlog/app/Resources/views/base.html.twig");
    }
}
