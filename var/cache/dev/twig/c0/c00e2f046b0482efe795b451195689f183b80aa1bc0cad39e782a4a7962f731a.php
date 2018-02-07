<?php

/* login.html.twig */
class __TwigTemplate_42116b79398c7a046f3ed52611a612d9143c529bac124726e3789c1f06195a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f1918908b961fda380c791b65541d3f81ae91644e81b4424fe4abce4a1c9eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1918908b961fda380c791b65541d3f81ae91644e81b4424fe4abce4a1c9eea->enter($__internal_2f1918908b961fda380c791b65541d3f81ae91644e81b4424fe4abce4a1c9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_3527b6534327edb98d3186f75f61d488a87d138cb5edf596907bba758e32ea6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3527b6534327edb98d3186f75f61d488a87d138cb5edf596907bba758e32ea6a->enter($__internal_3527b6534327edb98d3186f75f61d488a87d138cb5edf596907bba758e32ea6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f1918908b961fda380c791b65541d3f81ae91644e81b4424fe4abce4a1c9eea->leave($__internal_2f1918908b961fda380c791b65541d3f81ae91644e81b4424fe4abce4a1c9eea_prof);

        
        $__internal_3527b6534327edb98d3186f75f61d488a87d138cb5edf596907bba758e32ea6a->leave($__internal_3527b6534327edb98d3186f75f61d488a87d138cb5edf596907bba758e32ea6a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede5765880d842144a4f482b77e48829094a7cbbf3663b082b8e3904cfe1afd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede5765880d842144a4f482b77e48829094a7cbbf3663b082b8e3904cfe1afd4->enter($__internal_ede5765880d842144a4f482b77e48829094a7cbbf3663b082b8e3904cfe1afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e01bd71294b0d93b2c5b2209f091de719f8ef3f4db8710c96a2eec1b08c0b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e01bd71294b0d93b2c5b2209f091de719f8ef3f4db8710c96a2eec1b08c0b0f->enter($__internal_1e01bd71294b0d93b2c5b2209f091de719f8ef3f4db8710c96a2eec1b08c0b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      <div class=\" panel-success\">
          <div class=\"col-sm-4\"></div>
          <div class=\"col-sm-4\">
              <div class=\"panel panel-heading\">
                  <h3>Login</h3>
              </div>
              <div class=\"panel panel-body\">
                  ";
        // line 10
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 11
            echo "                      <div class=\"alert alert-danger\">
                          ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), "html", null, true);
            echo "
                      </div>
                  ";
        }
        // line 15
        echo "                  <form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">
                      <div lang=\"form-group\">
                          <label for=\"username\">Username:</label>
                          <input title=\"Enter your username!\" type=\"text\" name=\"username\" id=\"_username\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                      </div>
                      <div lang=\"form-group\">
                          <label for=\"password\">Password:</label>
                          <input title=\"Enter your password!\" type=\"password\" name=\"password\" id=\"_password\" class=\"form-control\">
                      </div>
                      <div lang=\"form-group\" style=\"margin-top: 10px\">
                          <button class=\"btn btn-success pull-right\">
                              <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> LogIn </button>
                          <a class=\"btn btn-info pull-left\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\">
                              <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Registration </a>
                      </div>
                  </form>
              </div>
          </div>`
          <div class=\"col-sm-4\"></div>
      </div>
  ";
        
        $__internal_1e01bd71294b0d93b2c5b2209f091de719f8ef3f4db8710c96a2eec1b08c0b0f->leave($__internal_1e01bd71294b0d93b2c5b2209f091de719f8ef3f4db8710c96a2eec1b08c0b0f_prof);

        
        $__internal_ede5765880d842144a4f482b77e48829094a7cbbf3663b082b8e3904cfe1afd4->leave($__internal_ede5765880d842144a4f482b77e48829094a7cbbf3663b082b8e3904cfe1afd4_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  76 => 18,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
  {% block body %}
      <div class=\" panel-success\">
          <div class=\"col-sm-4\"></div>
          <div class=\"col-sm-4\">
              <div class=\"panel panel-heading\">
                  <h3>Login</h3>
              </div>
              <div class=\"panel panel-body\">
                  {% if error%}
                      <div class=\"alert alert-danger\">
                          {{ error.messageKey }}
                      </div>
                  {% endif %}
                  <form method=\"post\" action=\"{{ path('login_check') }}\">
                      <div lang=\"form-group\">
                          <label for=\"username\">Username:</label>
                          <input title=\"Enter your username!\" type=\"text\" name=\"username\" id=\"_username\" class=\"form-control\" value=\"{{ last_username }}\">
                      </div>
                      <div lang=\"form-group\">
                          <label for=\"password\">Password:</label>
                          <input title=\"Enter your password!\" type=\"password\" name=\"password\" id=\"_password\" class=\"form-control\">
                      </div>
                      <div lang=\"form-group\" style=\"margin-top: 10px\">
                          <button class=\"btn btn-success pull-right\">
                              <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> LogIn </button>
                          <a class=\"btn btn-info pull-left\" href=\"{{ path(\"register\") }}\">
                              <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Registration </a>
                      </div>
                  </form>
              </div>
          </div>`
          <div class=\"col-sm-4\"></div>
      </div>
  {% endblock %}
", "login.html.twig", "/home/vlad/Work/ghBlog/app/Resources/views/login.html.twig");
    }
}
