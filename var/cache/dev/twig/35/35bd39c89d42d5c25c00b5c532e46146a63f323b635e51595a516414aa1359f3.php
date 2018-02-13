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
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_830b3854c7e6074c03abd90921a78a36cfc698470f2134d01add77d8805ab3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830b3854c7e6074c03abd90921a78a36cfc698470f2134d01add77d8805ab3a8->enter($__internal_830b3854c7e6074c03abd90921a78a36cfc698470f2134d01add77d8805ab3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/NewUser.html.twig"));

        $__internal_89ca89112311a6463671c0ab0f876704ed553396d6a737c0d5641cbc15fc2576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ca89112311a6463671c0ab0f876704ed553396d6a737c0d5641cbc15fc2576->enter($__internal_89ca89112311a6463671c0ab0f876704ed553396d6a737c0d5641cbc15fc2576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/User/NewUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830b3854c7e6074c03abd90921a78a36cfc698470f2134d01add77d8805ab3a8->leave($__internal_830b3854c7e6074c03abd90921a78a36cfc698470f2134d01add77d8805ab3a8_prof);

        
        $__internal_89ca89112311a6463671c0ab0f876704ed553396d6a737c0d5641cbc15fc2576->leave($__internal_89ca89112311a6463671c0ab0f876704ed553396d6a737c0d5641cbc15fc2576_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_ebeed60231a97d448c69c85ae95384656a207d8baad4472a00d0b43f2aa95b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebeed60231a97d448c69c85ae95384656a207d8baad4472a00d0b43f2aa95b36->enter($__internal_ebeed60231a97d448c69c85ae95384656a207d8baad4472a00d0b43f2aa95b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_6a0ac9b79924f82cf149acc26f2bee40f2e77dc73dcd6a155976a6267150536a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0ac9b79924f82cf149acc26f2bee40f2e77dc73dcd6a155976a6267150536a->enter($__internal_6a0ac9b79924f82cf149acc26f2bee40f2e77dc73dcd6a155976a6267150536a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "      <div class=\"row\">
      <div class=\"col-lg-10\" align=\"center\">
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
        
        $__internal_6a0ac9b79924f82cf149acc26f2bee40f2e77dc73dcd6a155976a6267150536a->leave($__internal_6a0ac9b79924f82cf149acc26f2bee40f2e77dc73dcd6a155976a6267150536a_prof);

        
        $__internal_ebeed60231a97d448c69c85ae95384656a207d8baad4472a00d0b43f2aa95b36->leave($__internal_ebeed60231a97d448c69c85ae95384656a207d8baad4472a00d0b43f2aa95b36_prof);

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
      <div class=\"col-lg-10\" align=\"center\">
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
