<?php

/* @GeekBlog/User/NewUser.html.twig */
class __TwigTemplate_2532fa49d28ee89ffa849a29c9104bb0a8e1608c429d34414c5feecf3a02c467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/User/NewUser.html.twig", 1);
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
        $__internal_fe0222588c13e7077be1c30957608d461ddf1651b7b02bcba6b2f571f410f7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0222588c13e7077be1c30957608d461ddf1651b7b02bcba6b2f571f410f7e8->enter($__internal_fe0222588c13e7077be1c30957608d461ddf1651b7b02bcba6b2f571f410f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/NewUser.html.twig"));

        $__internal_e4d37b57e8b235a5488a6cb1d23158af7ea8f673c5faac2d8bf6c958d13d2a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d37b57e8b235a5488a6cb1d23158af7ea8f673c5faac2d8bf6c958d13d2a00->enter($__internal_e4d37b57e8b235a5488a6cb1d23158af7ea8f673c5faac2d8bf6c958d13d2a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/NewUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe0222588c13e7077be1c30957608d461ddf1651b7b02bcba6b2f571f410f7e8->leave($__internal_fe0222588c13e7077be1c30957608d461ddf1651b7b02bcba6b2f571f410f7e8_prof);

        
        $__internal_e4d37b57e8b235a5488a6cb1d23158af7ea8f673c5faac2d8bf6c958d13d2a00->leave($__internal_e4d37b57e8b235a5488a6cb1d23158af7ea8f673c5faac2d8bf6c958d13d2a00_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffdb28a12eade69dfe207b0cf72107207316eb36a5f16a932d9322e29f52393f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdb28a12eade69dfe207b0cf72107207316eb36a5f16a932d9322e29f52393f->enter($__internal_ffdb28a12eade69dfe207b0cf72107207316eb36a5f16a932d9322e29f52393f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de82bbb66ce2e29213755b87f6668e2e608d3fc121d92f464a32ee7f09a7eab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de82bbb66ce2e29213755b87f6668e2e608d3fc121d92f464a32ee7f09a7eab2->enter($__internal_de82bbb66ce2e29213755b87f6668e2e608d3fc121d92f464a32ee7f09a7eab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      <div class=\"row\">
          <div class=\"col-sm-4\"></div>
          <div class=\"col-sm-4\" align=\"left\">
              ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
              ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
              <button type=\"submit\" class=\"btn btn-success\">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Add</button>
              <a class=\"btn btn-warning\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo " \">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span> Back</a>
              ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
      </div>
  ";
        
        $__internal_de82bbb66ce2e29213755b87f6668e2e608d3fc121d92f464a32ee7f09a7eab2->leave($__internal_de82bbb66ce2e29213755b87f6668e2e608d3fc121d92f464a32ee7f09a7eab2_prof);

        
        $__internal_ffdb28a12eade69dfe207b0cf72107207316eb36a5f16a932d9322e29f52393f->leave($__internal_ffdb28a12eade69dfe207b0cf72107207316eb36a5f16a932d9322e29f52393f_prof);

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
        return array (  69 => 12,  64 => 10,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
      <div class=\"row\">
          <div class=\"col-sm-4\"></div>
          <div class=\"col-sm-4\" align=\"left\">
              {{ form_start(form) }}
              {{ form_widget(form) }}
              <button type=\"submit\" class=\"btn btn-success\">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Add</button>
              <a class=\"btn btn-warning\" href=\"{{ path('login') }} \">
                  <span class=\"glyphicon glyphicon glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span> Back</a>
              {{ form_end(form) }}
          </div>
      </div>
  {% endblock %}
", "@GeekBlog/User/NewUser.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/User/NewUser.html.twig");
    }
}
