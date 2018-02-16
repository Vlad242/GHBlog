<?php

/* @GeekBlog/User/NewUser.html.twig */
class __TwigTemplate_f0ee74e4a70deba6cdf3312c2d840eb08f033de38909c076e00b78d2a70c1ca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/User/NewUser.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0344e0cccae4f990e5d51cc7a5541ccda067b1eb09472e74e4d71e9d2b3a481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0344e0cccae4f990e5d51cc7a5541ccda067b1eb09472e74e4d71e9d2b3a481->enter($__internal_d0344e0cccae4f990e5d51cc7a5541ccda067b1eb09472e74e4d71e9d2b3a481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/NewUser.html.twig"));

        $__internal_be686717c04eff9a39af1a7c990f578b3afda47607c77902e0f8127a2b27860b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be686717c04eff9a39af1a7c990f578b3afda47607c77902e0f8127a2b27860b->enter($__internal_be686717c04eff9a39af1a7c990f578b3afda47607c77902e0f8127a2b27860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/NewUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0344e0cccae4f990e5d51cc7a5541ccda067b1eb09472e74e4d71e9d2b3a481->leave($__internal_d0344e0cccae4f990e5d51cc7a5541ccda067b1eb09472e74e4d71e9d2b3a481_prof);

        
        $__internal_be686717c04eff9a39af1a7c990f578b3afda47607c77902e0f8127a2b27860b->leave($__internal_be686717c04eff9a39af1a7c990f578b3afda47607c77902e0f8127a2b27860b_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_37d0d4a0af39e5b51ffe3a1849f88fa694d3f74e4ae0df2f021680e7fd51bc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d0d4a0af39e5b51ffe3a1849f88fa694d3f74e4ae0df2f021680e7fd51bc2c->enter($__internal_37d0d4a0af39e5b51ffe3a1849f88fa694d3f74e4ae0df2f021680e7fd51bc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_1568bb4accb7b6c9ecbe928e7cea451b9c07b853bd0472e94d5a33c56ad01d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1568bb4accb7b6c9ecbe928e7cea451b9c07b853bd0472e94d5a33c56ad01d93->enter($__internal_1568bb4accb7b6c9ecbe928e7cea451b9c07b853bd0472e94d5a33c56ad01d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "      <div class=\"row\">
          <div class=\"col-sm-6\">
              ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
              ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
              <button type=\"submit\" class=\"btn btn-success\">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Add</button>
              <a class=\"btn btn-warning\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span> Back</a>
              ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
      </div>
  ";
        
        $__internal_1568bb4accb7b6c9ecbe928e7cea451b9c07b853bd0472e94d5a33c56ad01d93->leave($__internal_1568bb4accb7b6c9ecbe928e7cea451b9c07b853bd0472e94d5a33c56ad01d93_prof);

        
        $__internal_37d0d4a0af39e5b51ffe3a1849f88fa694d3f74e4ae0df2f021680e7fd51bc2c->leave($__internal_37d0d4a0af39e5b51ffe3a1849f88fa694d3f74e4ae0df2f021680e7fd51bc2c_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/User/NewUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  63 => 9,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
  {% block login %}
      <div class=\"row\">
          <div class=\"col-sm-6\">
              {{ form_start(form) }}
              {{ form_widget(form) }}
              <button type=\"submit\" class=\"btn btn-success\">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Add</button>
              <a class=\"btn btn-warning\" href=\"{{ path('login') }}\">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span> Back</a>
              {{ form_end(form) }}
          </div>
      </div>
  {% endblock %}
", "@GeekBlog/User/NewUser.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/User/NewUser.html.twig");
    }
}
