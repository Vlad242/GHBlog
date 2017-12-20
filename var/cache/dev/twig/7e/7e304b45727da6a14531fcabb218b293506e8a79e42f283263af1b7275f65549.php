<?php

/* @GeekBlog/Default/index.html.twig */
class __TwigTemplate_aa3b347917b70a8ab0e27e6952ef23a9d1fc9f3156319a6a4b32ced6bfb196a8 extends Twig_Template
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
        $__internal_861ac75314a3bedec2669e599762bbd7034cc2b558b089878b297cedd89a53c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861ac75314a3bedec2669e599762bbd7034cc2b558b089878b297cedd89a53c2->enter($__internal_861ac75314a3bedec2669e599762bbd7034cc2b558b089878b297cedd89a53c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/index.html.twig"));

        $__internal_3f69e7c3974d41ec563f428176862120796b6dd52aa5a3f72a82c6defc391e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f69e7c3974d41ec563f428176862120796b6dd52aa5a3f72a82c6defc391e32->enter($__internal_3f69e7c3974d41ec563f428176862120796b6dd52aa5a3f72a82c6defc391e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_861ac75314a3bedec2669e599762bbd7034cc2b558b089878b297cedd89a53c2->leave($__internal_861ac75314a3bedec2669e599762bbd7034cc2b558b089878b297cedd89a53c2_prof);

        
        $__internal_3f69e7c3974d41ec563f428176862120796b6dd52aa5a3f72a82c6defc391e32->leave($__internal_3f69e7c3974d41ec563f428176862120796b6dd52aa5a3f72a82c6defc391e32_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@GeekBlog/Default/index.html.twig", "/home/vlad/work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
