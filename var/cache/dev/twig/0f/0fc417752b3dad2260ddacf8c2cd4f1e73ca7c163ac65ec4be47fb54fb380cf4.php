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
        $__internal_f7c69b3e3503c579cd6f33e1fbf1bb2254e1bde07a5634bce9bb8144bc52c439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c69b3e3503c579cd6f33e1fbf1bb2254e1bde07a5634bce9bb8144bc52c439->enter($__internal_f7c69b3e3503c579cd6f33e1fbf1bb2254e1bde07a5634bce9bb8144bc52c439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $__internal_ce23ceee5e3b6d8376c5a27a0738fbc492aa7aedcb4711e49dbd1db93192ef1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce23ceee5e3b6d8376c5a27a0738fbc492aa7aedcb4711e49dbd1db93192ef1c->enter($__internal_ce23ceee5e3b6d8376c5a27a0738fbc492aa7aedcb4711e49dbd1db93192ef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c69b3e3503c579cd6f33e1fbf1bb2254e1bde07a5634bce9bb8144bc52c439->leave($__internal_f7c69b3e3503c579cd6f33e1fbf1bb2254e1bde07a5634bce9bb8144bc52c439_prof);

        
        $__internal_ce23ceee5e3b6d8376c5a27a0738fbc492aa7aedcb4711e49dbd1db93192ef1c->leave($__internal_ce23ceee5e3b6d8376c5a27a0738fbc492aa7aedcb4711e49dbd1db93192ef1c_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_12df5785abcda5d3c4d25b7c423a6756bbdbd6828f2318cd62c4d54f8c6b5126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12df5785abcda5d3c4d25b7c423a6756bbdbd6828f2318cd62c4d54f8c6b5126->enter($__internal_12df5785abcda5d3c4d25b7c423a6756bbdbd6828f2318cd62c4d54f8c6b5126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_97f9dca2eba9e72c16d7f358427a08177115f56347da77ab437d2bf978acdd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f9dca2eba9e72c16d7f358427a08177115f56347da77ab437d2bf978acdd97->enter($__internal_97f9dca2eba9e72c16d7f358427a08177115f56347da77ab437d2bf978acdd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_97f9dca2eba9e72c16d7f358427a08177115f56347da77ab437d2bf978acdd97->leave($__internal_97f9dca2eba9e72c16d7f358427a08177115f56347da77ab437d2bf978acdd97_prof);

        
        $__internal_12df5785abcda5d3c4d25b7c423a6756bbdbd6828f2318cd62c4d54f8c6b5126->leave($__internal_12df5785abcda5d3c4d25b7c423a6756bbdbd6828f2318cd62c4d54f8c6b5126_prof);

    }

    // line 36
    public function block_right($context, array $blocks = array())
    {
        $__internal_689dc5b6e9fabc1ccd5317f12b191621fbb54f7d0ba4877e4a6d4cd4e5042081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689dc5b6e9fabc1ccd5317f12b191621fbb54f7d0ba4877e4a6d4cd4e5042081->enter($__internal_689dc5b6e9fabc1ccd5317f12b191621fbb54f7d0ba4877e4a6d4cd4e5042081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_ef6ecabefc94e87e7c857f01d052b26cbd64231031ed6fb276bcaaee331f36a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6ecabefc94e87e7c857f01d052b26cbd64231031ed6fb276bcaaee331f36a6->enter($__internal_ef6ecabefc94e87e7c857f01d052b26cbd64231031ed6fb276bcaaee331f36a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_ef6ecabefc94e87e7c857f01d052b26cbd64231031ed6fb276bcaaee331f36a6->leave($__internal_ef6ecabefc94e87e7c857f01d052b26cbd64231031ed6fb276bcaaee331f36a6_prof);

        
        $__internal_689dc5b6e9fabc1ccd5317f12b191621fbb54f7d0ba4877e4a6d4cd4e5042081->leave($__internal_689dc5b6e9fabc1ccd5317f12b191621fbb54f7d0ba4877e4a6d4cd4e5042081_prof);

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
