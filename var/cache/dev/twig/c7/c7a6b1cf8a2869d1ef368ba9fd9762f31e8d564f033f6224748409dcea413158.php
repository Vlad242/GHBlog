<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_abecaba2e9f9a71d3bcf40a6259819caa19a28205ad949731ad0eafd3c966cff extends Twig_Template
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
        $__internal_e2dbad8d35795c033b6784f429042d93985cfbf01ecb100efac5ee4a497e141c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dbad8d35795c033b6784f429042d93985cfbf01ecb100efac5ee4a497e141c->enter($__internal_e2dbad8d35795c033b6784f429042d93985cfbf01ecb100efac5ee4a497e141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_e382f3fe637df13b6bf3a61f3594575548586e58f0cb8ff9196382e0fb6da80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e382f3fe637df13b6bf3a61f3594575548586e58f0cb8ff9196382e0fb6da80a->enter($__internal_e382f3fe637df13b6bf3a61f3594575548586e58f0cb8ff9196382e0fb6da80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e2dbad8d35795c033b6784f429042d93985cfbf01ecb100efac5ee4a497e141c->leave($__internal_e2dbad8d35795c033b6784f429042d93985cfbf01ecb100efac5ee4a497e141c_prof);

        
        $__internal_e382f3fe637df13b6bf3a61f3594575548586e58f0cb8ff9196382e0fb6da80a->leave($__internal_e382f3fe637df13b6bf3a61f3594575548586e58f0cb8ff9196382e0fb6da80a_prof);

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
