<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_28b302c974d328cdd04d2b9ff5a96b0a8ae1575833e37eae974c522986482f4f extends Twig_Template
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
        $__internal_f31ef0a999412efd096c5b88419ef4ff0674b928a757dd4323d56239430a6ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31ef0a999412efd096c5b88419ef4ff0674b928a757dd4323d56239430a6ce9->enter($__internal_f31ef0a999412efd096c5b88419ef4ff0674b928a757dd4323d56239430a6ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1ee4823ab17a8ff172a7f1b78c1ed7d496164adde29c3685418950f2334cd9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee4823ab17a8ff172a7f1b78c1ed7d496164adde29c3685418950f2334cd9fc->enter($__internal_1ee4823ab17a8ff172a7f1b78c1ed7d496164adde29c3685418950f2334cd9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f31ef0a999412efd096c5b88419ef4ff0674b928a757dd4323d56239430a6ce9->leave($__internal_f31ef0a999412efd096c5b88419ef4ff0674b928a757dd4323d56239430a6ce9_prof);

        
        $__internal_1ee4823ab17a8ff172a7f1b78c1ed7d496164adde29c3685418950f2334cd9fc->leave($__internal_1ee4823ab17a8ff172a7f1b78c1ed7d496164adde29c3685418950f2334cd9fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
