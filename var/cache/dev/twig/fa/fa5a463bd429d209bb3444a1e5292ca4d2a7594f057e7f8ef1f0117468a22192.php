<?php

/* @GeekBlog/Default/homepage.html.twig */
class __TwigTemplate_77ed4a0cea7529051012dbf1c7a84f120213b3bf66354c88cda4489c34f8f7e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Default/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9905cb8cac2a604966e60ec3e84950f72d896fac6a475c5a1839888022a9384c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9905cb8cac2a604966e60ec3e84950f72d896fac6a475c5a1839888022a9384c->enter($__internal_9905cb8cac2a604966e60ec3e84950f72d896fac6a475c5a1839888022a9384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $__internal_5a43a51466cfb8aba4f29efb11f0d168546802b4d32420dabd83028402a32821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a43a51466cfb8aba4f29efb11f0d168546802b4d32420dabd83028402a32821->enter($__internal_5a43a51466cfb8aba4f29efb11f0d168546802b4d32420dabd83028402a32821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9905cb8cac2a604966e60ec3e84950f72d896fac6a475c5a1839888022a9384c->leave($__internal_9905cb8cac2a604966e60ec3e84950f72d896fac6a475c5a1839888022a9384c_prof);

        
        $__internal_5a43a51466cfb8aba4f29efb11f0d168546802b4d32420dabd83028402a32821->leave($__internal_5a43a51466cfb8aba4f29efb11f0d168546802b4d32420dabd83028402a32821_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8abc8d23415c56114e7b174c42d0e64546017a2c593355a2bdab50c26aa9c515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abc8d23415c56114e7b174c42d0e64546017a2c593355a2bdab50c26aa9c515->enter($__internal_8abc8d23415c56114e7b174c42d0e64546017a2c593355a2bdab50c26aa9c515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84ab731a081a71e44a3406b19a336d88c5e22f3d3570a775e5f118fce224701d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ab731a081a71e44a3406b19a336d88c5e22f3d3570a775e5f118fce224701d->enter($__internal_84ab731a081a71e44a3406b19a336d88c5e22f3d3570a775e5f118fce224701d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        
        $__internal_84ab731a081a71e44a3406b19a336d88c5e22f3d3570a775e5f118fce224701d->leave($__internal_84ab731a081a71e44a3406b19a336d88c5e22f3d3570a775e5f118fce224701d_prof);

        
        $__internal_8abc8d23415c56114e7b174c42d0e64546017a2c593355a2bdab50c26aa9c515->leave($__internal_8abc8d23415c56114e7b174c42d0e64546017a2c593355a2bdab50c26aa9c515_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@GeekBlog/Default/base.html.twig' %}
{% block body %}

{% endblock %}", "@GeekBlog/Default/homepage.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/homepage.html.twig");
    }
}
