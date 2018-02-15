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
        $__internal_6f6cb02a92a369abeb204b7f003aba7d35bf90c171fb6b0ba60403833cd857b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6cb02a92a369abeb204b7f003aba7d35bf90c171fb6b0ba60403833cd857b7->enter($__internal_6f6cb02a92a369abeb204b7f003aba7d35bf90c171fb6b0ba60403833cd857b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $__internal_32b89fbdf5819afb68437e17dc6fa23b0de77531bfaa4fe973b083b4f6cdee3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b89fbdf5819afb68437e17dc6fa23b0de77531bfaa4fe973b083b4f6cdee3b->enter($__internal_32b89fbdf5819afb68437e17dc6fa23b0de77531bfaa4fe973b083b4f6cdee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6cb02a92a369abeb204b7f003aba7d35bf90c171fb6b0ba60403833cd857b7->leave($__internal_6f6cb02a92a369abeb204b7f003aba7d35bf90c171fb6b0ba60403833cd857b7_prof);

        
        $__internal_32b89fbdf5819afb68437e17dc6fa23b0de77531bfaa4fe973b083b4f6cdee3b->leave($__internal_32b89fbdf5819afb68437e17dc6fa23b0de77531bfaa4fe973b083b4f6cdee3b_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_d927998adf10fc83cf3497ec2157f4bc6ededb11acfd4b866854735951e85ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d927998adf10fc83cf3497ec2157f4bc6ededb11acfd4b866854735951e85ad8->enter($__internal_d927998adf10fc83cf3497ec2157f4bc6ededb11acfd4b866854735951e85ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_ee436fadd792292e4d1b10e4c14f1e58bab63948cc5037eb14535f21915e0dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee436fadd792292e4d1b10e4c14f1e58bab63948cc5037eb14535f21915e0dc4->enter($__internal_ee436fadd792292e4d1b10e4c14f1e58bab63948cc5037eb14535f21915e0dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_ee436fadd792292e4d1b10e4c14f1e58bab63948cc5037eb14535f21915e0dc4->leave($__internal_ee436fadd792292e4d1b10e4c14f1e58bab63948cc5037eb14535f21915e0dc4_prof);

        
        $__internal_d927998adf10fc83cf3497ec2157f4bc6ededb11acfd4b866854735951e85ad8->leave($__internal_d927998adf10fc83cf3497ec2157f4bc6ededb11acfd4b866854735951e85ad8_prof);

    }

    // line 36
    public function block_right($context, array $blocks = array())
    {
        $__internal_ceca7064eab96a6f1c48e470a4368512a9ff41879ecfaa762e4bf187272cf1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceca7064eab96a6f1c48e470a4368512a9ff41879ecfaa762e4bf187272cf1cb->enter($__internal_ceca7064eab96a6f1c48e470a4368512a9ff41879ecfaa762e4bf187272cf1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_b54a28bbc4aefd68f4a36546fbbf2c1008cc34449dcfd4bb86d4c67dba924838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54a28bbc4aefd68f4a36546fbbf2c1008cc34449dcfd4bb86d4c67dba924838->enter($__internal_b54a28bbc4aefd68f4a36546fbbf2c1008cc34449dcfd4bb86d4c67dba924838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_b54a28bbc4aefd68f4a36546fbbf2c1008cc34449dcfd4bb86d4c67dba924838->leave($__internal_b54a28bbc4aefd68f4a36546fbbf2c1008cc34449dcfd4bb86d4c67dba924838_prof);

        
        $__internal_ceca7064eab96a6f1c48e470a4368512a9ff41879ecfaa762e4bf187272cf1cb->leave($__internal_ceca7064eab96a6f1c48e470a4368512a9ff41879ecfaa762e4bf187272cf1cb_prof);

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
