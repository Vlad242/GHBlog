<?php

/* @GeekBlog/Default/login.html.twig */
class __TwigTemplate_7e4c9cce09362d285d22fa36748acde50c939e2bd68ac001c812e767bd0107bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Default/login.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4e335fc682408e04ce2000c098be0ad075cee9051fe8b40d07b01b4300d4006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e335fc682408e04ce2000c098be0ad075cee9051fe8b40d07b01b4300d4006->enter($__internal_c4e335fc682408e04ce2000c098be0ad075cee9051fe8b40d07b01b4300d4006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $__internal_cb6ff71921f9bddd02d58f72e0da66534d19ba0b8d5a1dbf85ace200a2175c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6ff71921f9bddd02d58f72e0da66534d19ba0b8d5a1dbf85ace200a2175c8b->enter($__internal_cb6ff71921f9bddd02d58f72e0da66534d19ba0b8d5a1dbf85ace200a2175c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e335fc682408e04ce2000c098be0ad075cee9051fe8b40d07b01b4300d4006->leave($__internal_c4e335fc682408e04ce2000c098be0ad075cee9051fe8b40d07b01b4300d4006_prof);

        
        $__internal_cb6ff71921f9bddd02d58f72e0da66534d19ba0b8d5a1dbf85ace200a2175c8b->leave($__internal_cb6ff71921f9bddd02d58f72e0da66534d19ba0b8d5a1dbf85ace200a2175c8b_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_79d4c551e42b3e3d0e17a33ded1cb045239f2f6b30c07227d0adf40831b0f505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d4c551e42b3e3d0e17a33ded1cb045239f2f6b30c07227d0adf40831b0f505->enter($__internal_79d4c551e42b3e3d0e17a33ded1cb045239f2f6b30c07227d0adf40831b0f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_b5681c58d288f9562194bfa5419f25ac8bb5abf8a256eaec0c2a8f497dc7c5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5681c58d288f9562194bfa5419f25ac8bb5abf8a256eaec0c2a8f497dc7c5e5->enter($__internal_b5681c58d288f9562194bfa5419f25ac8bb5abf8a256eaec0c2a8f497dc7c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo " <div class=\"col-md-1\"></div>
      <div class=\" panel-success\">
          <div class=\"col-md-6\">
              <div class=\"panel panel-heading\" align=\"center\">
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
          </div>
      </div>
    <div class=\"col-md-3\"></div>
  ";
        
        $__internal_b5681c58d288f9562194bfa5419f25ac8bb5abf8a256eaec0c2a8f497dc7c5e5->leave($__internal_b5681c58d288f9562194bfa5419f25ac8bb5abf8a256eaec0c2a8f497dc7c5e5_prof);

        
        $__internal_79d4c551e42b3e3d0e17a33ded1cb045239f2f6b30c07227d0adf40831b0f505->leave($__internal_79d4c551e42b3e3d0e17a33ded1cb045239f2f6b30c07227d0adf40831b0f505_prof);

    }

    // line 36
    public function block_right($context, array $blocks = array())
    {
        $__internal_d56c4bf1a008aed24fc53f897034f3101934fc10a2927603975361dcfe1ab788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56c4bf1a008aed24fc53f897034f3101934fc10a2927603975361dcfe1ab788->enter($__internal_d56c4bf1a008aed24fc53f897034f3101934fc10a2927603975361dcfe1ab788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_78d154ad9af3a15bf05e294900677633f14d827636edfc1440a86411c47345bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d154ad9af3a15bf05e294900677633f14d827636edfc1440a86411c47345bb->enter($__internal_78d154ad9af3a15bf05e294900677633f14d827636edfc1440a86411c47345bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_78d154ad9af3a15bf05e294900677633f14d827636edfc1440a86411c47345bb->leave($__internal_78d154ad9af3a15bf05e294900677633f14d827636edfc1440a86411c47345bb_prof);

        
        $__internal_d56c4bf1a008aed24fc53f897034f3101934fc10a2927603975361dcfe1ab788->leave($__internal_d56c4bf1a008aed24fc53f897034f3101934fc10a2927603975361dcfe1ab788_prof);

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
        return array (  108 => 36,  89 => 27,  77 => 18,  70 => 15,  64 => 12,  61 => 11,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
 <div class=\"col-md-1\"></div>
      <div class=\" panel-success\">
          <div class=\"col-md-6\">
              <div class=\"panel panel-heading\" align=\"center\">
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
          </div>
      </div>
    <div class=\"col-md-3\"></div>
  {% endblock %}
  {% block right %}{% endblock %}", "@GeekBlog/Default/login.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/login.html.twig");
    }
}
