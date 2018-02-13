<?php

/* @GeekBlog/Default/login.html.twig */
class __TwigTemplate_627d92699d25b02427b464138a6cd3d718fcd2d545a169e8c2275281aa114c1e extends Twig_Template
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
        $__internal_0e08e08d14d8b9bef0cd627432e9689802d1cd799ec06ebeea5f8df93acee13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e08e08d14d8b9bef0cd627432e9689802d1cd799ec06ebeea5f8df93acee13a->enter($__internal_0e08e08d14d8b9bef0cd627432e9689802d1cd799ec06ebeea5f8df93acee13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $__internal_ac5ed222fb7564810eb4d74b38402789aa0e441ca9253edaea2f3b17bf84bb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5ed222fb7564810eb4d74b38402789aa0e441ca9253edaea2f3b17bf84bb92->enter($__internal_ac5ed222fb7564810eb4d74b38402789aa0e441ca9253edaea2f3b17bf84bb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e08e08d14d8b9bef0cd627432e9689802d1cd799ec06ebeea5f8df93acee13a->leave($__internal_0e08e08d14d8b9bef0cd627432e9689802d1cd799ec06ebeea5f8df93acee13a_prof);

        
        $__internal_ac5ed222fb7564810eb4d74b38402789aa0e441ca9253edaea2f3b17bf84bb92->leave($__internal_ac5ed222fb7564810eb4d74b38402789aa0e441ca9253edaea2f3b17bf84bb92_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_023d8bc5a9ba45b0c08000ffe6f51a390a41ca0306560974486562890b0f66dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023d8bc5a9ba45b0c08000ffe6f51a390a41ca0306560974486562890b0f66dd->enter($__internal_023d8bc5a9ba45b0c08000ffe6f51a390a41ca0306560974486562890b0f66dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38df5d84654331455297049e66c5be79cef74012dc8cfe6e5e26e7c521487170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38df5d84654331455297049e66c5be79cef74012dc8cfe6e5e26e7c521487170->enter($__internal_38df5d84654331455297049e66c5be79cef74012dc8cfe6e5e26e7c521487170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38df5d84654331455297049e66c5be79cef74012dc8cfe6e5e26e7c521487170->leave($__internal_38df5d84654331455297049e66c5be79cef74012dc8cfe6e5e26e7c521487170_prof);

        
        $__internal_023d8bc5a9ba45b0c08000ffe6f51a390a41ca0306560974486562890b0f66dd->leave($__internal_023d8bc5a9ba45b0c08000ffe6f51a390a41ca0306560974486562890b0f66dd_prof);

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
