<?php

/* @GeekBlog/Default/login.html.twig */
class __TwigTemplate_dba68e080a412a05abc1f882964a74173e5a0a23d07972e1a1706b2b8961d17a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Default/login.html.twig", 1);
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
        $__internal_fdca4d4d4be01b73544457dc41fea51d6269f62cf8606998c65996d2077f9dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdca4d4d4be01b73544457dc41fea51d6269f62cf8606998c65996d2077f9dcf->enter($__internal_fdca4d4d4be01b73544457dc41fea51d6269f62cf8606998c65996d2077f9dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $__internal_09c30080ff055419ddc0d624f58a92fb04f75e3f39cb610d1587b0ad683e9e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c30080ff055419ddc0d624f58a92fb04f75e3f39cb610d1587b0ad683e9e1b->enter($__internal_09c30080ff055419ddc0d624f58a92fb04f75e3f39cb610d1587b0ad683e9e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdca4d4d4be01b73544457dc41fea51d6269f62cf8606998c65996d2077f9dcf->leave($__internal_fdca4d4d4be01b73544457dc41fea51d6269f62cf8606998c65996d2077f9dcf_prof);

        
        $__internal_09c30080ff055419ddc0d624f58a92fb04f75e3f39cb610d1587b0ad683e9e1b->leave($__internal_09c30080ff055419ddc0d624f58a92fb04f75e3f39cb610d1587b0ad683e9e1b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_166a795d7f9a00512ffb1a24fc2dd25222ffc03ec6311d078ae1cc0de8ae7602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166a795d7f9a00512ffb1a24fc2dd25222ffc03ec6311d078ae1cc0de8ae7602->enter($__internal_166a795d7f9a00512ffb1a24fc2dd25222ffc03ec6311d078ae1cc0de8ae7602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c34a0fc3ba5f740ff2e40236b689fb582ecf454d1fb3fd0ff29cb148852375ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34a0fc3ba5f740ff2e40236b689fb582ecf454d1fb3fd0ff29cb148852375ca->enter($__internal_c34a0fc3ba5f740ff2e40236b689fb582ecf454d1fb3fd0ff29cb148852375ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c34a0fc3ba5f740ff2e40236b689fb582ecf454d1fb3fd0ff29cb148852375ca->leave($__internal_c34a0fc3ba5f740ff2e40236b689fb582ecf454d1fb3fd0ff29cb148852375ca_prof);

        
        $__internal_166a795d7f9a00512ffb1a24fc2dd25222ffc03ec6311d078ae1cc0de8ae7602->leave($__internal_166a795d7f9a00512ffb1a24fc2dd25222ffc03ec6311d078ae1cc0de8ae7602_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/login.html.twig";
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
        return new Twig_Source("{% extends '@GeekBlog/Default/base.html.twig' %}
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
", "@GeekBlog/Default/login.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/login.html.twig");
    }
}
