<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_ddf154aa569b512d3743abfb4a9db7605087f19bde41ca52e2f171e3cd7b9605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01e7902ef6a520146c454a8094d87f9ae2972c430960d79bbf88b3b46a003ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e7902ef6a520146c454a8094d87f9ae2972c430960d79bbf88b3b46a003ad5->enter($__internal_01e7902ef6a520146c454a8094d87f9ae2972c430960d79bbf88b3b46a003ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_5ab00bbff310bf797f9acdfce0e28b0822b146b63b6478dd913f8d85a8ea621c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab00bbff310bf797f9acdfce0e28b0822b146b63b6478dd913f8d85a8ea621c->enter($__internal_5ab00bbff310bf797f9acdfce0e28b0822b146b63b6478dd913f8d85a8ea621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_01e7902ef6a520146c454a8094d87f9ae2972c430960d79bbf88b3b46a003ad5->leave($__internal_01e7902ef6a520146c454a8094d87f9ae2972c430960d79bbf88b3b46a003ad5_prof);

        
        $__internal_5ab00bbff310bf797f9acdfce0e28b0822b146b63b6478dd913f8d85a8ea621c->leave($__internal_5ab00bbff310bf797f9acdfce0e28b0822b146b63b6478dd913f8d85a8ea621c_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/vlad/Work/ghBlog/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
