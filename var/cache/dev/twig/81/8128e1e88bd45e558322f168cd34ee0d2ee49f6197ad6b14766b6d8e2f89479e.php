<?php

/* @GeekBlog/Default/base.html.twig */
class __TwigTemplate_718eea2d7b8a8ad3b0d0dec6ed084cfcbd0f9a7f28b4a420dcbb22dfedbec716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a4264ce6eadef19bff6c95621ddcbd0bd150634a95af694eb073b7fc2498c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4264ce6eadef19bff6c95621ddcbd0bd150634a95af694eb073b7fc2498c87->enter($__internal_1a4264ce6eadef19bff6c95621ddcbd0bd150634a95af694eb073b7fc2498c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_99dcd1f78aa3a4dc45c2aa0265e53abef1b2d6ed3d1480a2f8830d3f6aa3333a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dcd1f78aa3a4dc45c2aa0265e53abef1b2d6ed3d1480a2f8830d3f6aa3333a->enter($__internal_99dcd1f78aa3a4dc45c2aa0265e53abef1b2d6ed3d1480a2f8830d3f6aa3333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <title>GeekBlog</title>
    </head>
    <body>
    <div class=\"col-md-12\">
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "    </div>
    <div class=\"col-md-2\">
        <div class=\"well\">
        ";
        // line 44
        $this->displayBlock('menu', $context, $blocks);
        // line 47
        echo "        </div>
    </div>
    ";
        // line 49
        $this->displayBlock('login', $context, $blocks);
        // line 57
        echo "    </body>
    <footer class=\"footer\" style=\"position: revert; bottom: 0; width: 100%\">
        ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 100
        echo "    </footer>
</html>";
        
        $__internal_1a4264ce6eadef19bff6c95621ddcbd0bd150634a95af694eb073b7fc2498c87->leave($__internal_1a4264ce6eadef19bff6c95621ddcbd0bd150634a95af694eb073b7fc2498c87_prof);

        
        $__internal_99dcd1f78aa3a4dc45c2aa0265e53abef1b2d6ed3d1480a2f8830d3f6aa3333a->leave($__internal_99dcd1f78aa3a4dc45c2aa0265e53abef1b2d6ed3d1480a2f8830d3f6aa3333a_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_364ad22fc325ac944863e3e80f426e89d5018f4cd5d70b9beba72c28ceabfff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364ad22fc325ac944863e3e80f426e89d5018f4cd5d70b9beba72c28ceabfff4->enter($__internal_364ad22fc325ac944863e3e80f426e89d5018f4cd5d70b9beba72c28ceabfff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_496f0fbbbf47478c1e1fef6b7635b5f818f18f760fb14336692eaa9c3e314569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496f0fbbbf47478c1e1fef6b7635b5f818f18f760fb14336692eaa9c3e314569->enter($__internal_496f0fbbbf47478c1e1fef6b7635b5f818f18f760fb14336692eaa9c3e314569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <div class=\"jumbotron\" style=\"height: 0\"> </div>
            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\">ffff</span>
                            <span class=\"icon-bar\">ggg</span>
                            <span class=\"icon-bar\">ddd</span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">GeekBlog</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\">
                            ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "                                <a class=\"btn btn-default pull-left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_room");
            echo "\">
                                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> User room </a>
                                <a class=\"btn btn-default pull-left\" href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
                                    <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span> SignOut </a>
                            ";
        } else {
            // line 33
            echo "                                <a class=\"btn btn-default pull-left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                                    <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> SignIn </a>
                            ";
        }
        // line 36
        echo "                           </form>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_496f0fbbbf47478c1e1fef6b7635b5f818f18f760fb14336692eaa9c3e314569->leave($__internal_496f0fbbbf47478c1e1fef6b7635b5f818f18f760fb14336692eaa9c3e314569_prof);

        
        $__internal_364ad22fc325ac944863e3e80f426e89d5018f4cd5d70b9beba72c28ceabfff4->leave($__internal_364ad22fc325ac944863e3e80f426e89d5018f4cd5d70b9beba72c28ceabfff4_prof);

    }

    // line 44
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a332df235c3b606033d78d0ce4f92e697a9d7e352f4179edee86c153d5a38b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a332df235c3b606033d78d0ce4f92e697a9d7e352f4179edee86c153d5a38b9e->enter($__internal_a332df235c3b606033d78d0ce4f92e697a9d7e352f4179edee86c153d5a38b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a45338015478b0d494a0dd6b18fb93ca4b342c5ea4927df8655a53c5c851b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a45338015478b0d494a0dd6b18fb93ca4b342c5ea4927df8655a53c5c851b8e->enter($__internal_5a45338015478b0d494a0dd6b18fb93ca4b342c5ea4927df8655a53c5c851b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 45
        echo "            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
        ";
        
        $__internal_5a45338015478b0d494a0dd6b18fb93ca4b342c5ea4927df8655a53c5c851b8e->leave($__internal_5a45338015478b0d494a0dd6b18fb93ca4b342c5ea4927df8655a53c5c851b8e_prof);

        
        $__internal_a332df235c3b606033d78d0ce4f92e697a9d7e352f4179edee86c153d5a38b9e->leave($__internal_a332df235c3b606033d78d0ce4f92e697a9d7e352f4179edee86c153d5a38b9e_prof);

    }

    // line 49
    public function block_login($context, array $blocks = array())
    {
        $__internal_c46677bb968fbf424e7108a5804e37cbd422d679382f92841f006d2b2e4bb861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46677bb968fbf424e7108a5804e37cbd422d679382f92841f006d2b2e4bb861->enter($__internal_c46677bb968fbf424e7108a5804e37cbd422d679382f92841f006d2b2e4bb861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_29700f8a69fee5abca132669627bbf2133cd76c80de506642d053131c6671b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29700f8a69fee5abca132669627bbf2133cd76c80de506642d053131c6671b76->enter($__internal_29700f8a69fee5abca132669627bbf2133cd76c80de506642d053131c6671b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 50
        echo "    <div class=\"col-md-8\">
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    </div>
    <div class=\"col-md-2\">
        ";
        // line 54
        $this->displayBlock('right', $context, $blocks);
        // line 55
        echo "    </div>
    ";
        
        $__internal_29700f8a69fee5abca132669627bbf2133cd76c80de506642d053131c6671b76->leave($__internal_29700f8a69fee5abca132669627bbf2133cd76c80de506642d053131c6671b76_prof);

        
        $__internal_c46677bb968fbf424e7108a5804e37cbd422d679382f92841f006d2b2e4bb861->leave($__internal_c46677bb968fbf424e7108a5804e37cbd422d679382f92841f006d2b2e4bb861_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_aba07ddb4794778f66efa39d5cd0254d8dd2e6aa3aeb9b9d88cd731bdc377ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba07ddb4794778f66efa39d5cd0254d8dd2e6aa3aeb9b9d88cd731bdc377ed5->enter($__internal_aba07ddb4794778f66efa39d5cd0254d8dd2e6aa3aeb9b9d88cd731bdc377ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9419f68c6aaf2f218ecac3dc53fc9155464e76901d1bec349de08779d85315ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9419f68c6aaf2f218ecac3dc53fc9155464e76901d1bec349de08779d85315ae->enter($__internal_9419f68c6aaf2f218ecac3dc53fc9155464e76901d1bec349de08779d85315ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9419f68c6aaf2f218ecac3dc53fc9155464e76901d1bec349de08779d85315ae->leave($__internal_9419f68c6aaf2f218ecac3dc53fc9155464e76901d1bec349de08779d85315ae_prof);

        
        $__internal_aba07ddb4794778f66efa39d5cd0254d8dd2e6aa3aeb9b9d88cd731bdc377ed5->leave($__internal_aba07ddb4794778f66efa39d5cd0254d8dd2e6aa3aeb9b9d88cd731bdc377ed5_prof);

    }

    // line 54
    public function block_right($context, array $blocks = array())
    {
        $__internal_41b3437e411203f3626f6a4eb800ee9efeb97f2e00668933dae6d9b37397748b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b3437e411203f3626f6a4eb800ee9efeb97f2e00668933dae6d9b37397748b->enter($__internal_41b3437e411203f3626f6a4eb800ee9efeb97f2e00668933dae6d9b37397748b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_abbb8876ff125f91de241b6b014da4ea55c4dec5fee32b8b9b64b2dcd6c71dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbb8876ff125f91de241b6b014da4ea55c4dec5fee32b8b9b64b2dcd6c71dce->enter($__internal_abbb8876ff125f91de241b6b014da4ea55c4dec5fee32b8b9b64b2dcd6c71dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_abbb8876ff125f91de241b6b014da4ea55c4dec5fee32b8b9b64b2dcd6c71dce->leave($__internal_abbb8876ff125f91de241b6b014da4ea55c4dec5fee32b8b9b64b2dcd6c71dce_prof);

        
        $__internal_41b3437e411203f3626f6a4eb800ee9efeb97f2e00668933dae6d9b37397748b->leave($__internal_41b3437e411203f3626f6a4eb800ee9efeb97f2e00668933dae6d9b37397748b_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_150ac025eba991eca4b7e09c83d48994ad86df342510cbf43b41dae3a7994138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150ac025eba991eca4b7e09c83d48994ad86df342510cbf43b41dae3a7994138->enter($__internal_150ac025eba991eca4b7e09c83d48994ad86df342510cbf43b41dae3a7994138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_bfe8ed265548169668dfad9aafc4c6d25a226a5468f37be7cad5d54f8bc753e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe8ed265548169668dfad9aafc4c6d25a226a5468f37be7cad5d54f8bc753e7->enter($__internal_bfe8ed265548169668dfad9aafc4c6d25a226a5468f37be7cad5d54f8bc753e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 60
        echo "            <footer id=\"myFooter\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <h5>Get started</h5>
                            <ul>
                                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Sign up</a></li>
                                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\">Registration</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>About us</h5>
                            <ul>
                                <li><a href=\"#\">Company Information</a></li>
                                <li><a href=\"#\">Contact us</a></li>
                                <li><a href=\"#\">Reviews</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>Support</h5>
                            <ul>
                                <li><a href=\"#\">FAQ</a></li>
                                <li><a href=\"#\">Help desk</a></li>
                                <li><a href=\"#\">Forums</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3 info\">
                            <h5>Information</h5>
                            <p> This blog was created using the symfony magic :) </p>
                        </div>
                    </div>
                    <div class=\"second-bar\">
                        <div class=\"container\" align=\"center\">
                            <h5 class=\"logo\"><a> Created with the support of the best GeekHub teachers!<br> &copy 2018 </a></h5>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_bfe8ed265548169668dfad9aafc4c6d25a226a5468f37be7cad5d54f8bc753e7->leave($__internal_bfe8ed265548169668dfad9aafc4c6d25a226a5468f37be7cad5d54f8bc753e7_prof);

        
        $__internal_150ac025eba991eca4b7e09c83d48994ad86df342510cbf43b41dae3a7994138->leave($__internal_150ac025eba991eca4b7e09c83d48994ad86df342510cbf43b41dae3a7994138_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  251 => 68,  247 => 67,  243 => 66,  235 => 60,  226 => 59,  209 => 54,  192 => 51,  181 => 55,  179 => 54,  175 => 52,  173 => 51,  170 => 50,  161 => 49,  148 => 45,  139 => 44,  125 => 36,  118 => 33,  112 => 30,  106 => 28,  104 => 27,  97 => 23,  85 => 13,  76 => 12,  65 => 100,  63 => 59,  59 => 57,  57 => 49,  53 => 47,  51 => 44,  46 => 41,  44 => 12,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <title>GeekBlog</title>
    </head>
    <body>
    <div class=\"col-md-12\">
        {% block header %}
            <div class=\"jumbotron\" style=\"height: 0\"> </div>
            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\">ffff</span>
                            <span class=\"icon-bar\">ggg</span>
                            <span class=\"icon-bar\">ddd</span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">GeekBlog</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <a class=\"btn btn-default pull-left\" href=\"{{ path(\"user_room\") }}\">
                                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> User room </a>
                                <a class=\"btn btn-default pull-left\" href=\"{{ path(\"logout\") }}\">
                                    <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span> SignOut </a>
                            {% else %}
                                <a class=\"btn btn-default pull-left\" href=\"{{ path(\"login\") }}\">
                                    <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> SignIn </a>
                            {% endif %}
                           </form>
                    </div>
                </div>
            </nav>
        {% endblock %}
    </div>
    <div class=\"col-md-2\">
        <div class=\"well\">
        {% block menu %}
            {{ knp_menu_render('main') }}
        {% endblock %}
        </div>
    </div>
    {% block login %}
    <div class=\"col-md-8\">
        {% block body %}{% endblock %}
    </div>
    <div class=\"col-md-2\">
        {% block right %}{% endblock %}
    </div>
    {% endblock %}
    </body>
    <footer class=\"footer\" style=\"position: revert; bottom: 0; width: 100%\">
        {% block footer %}
            <footer id=\"myFooter\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <h5>Get started</h5>
                            <ul>
                                <li><a href=\"{{ path('homepage') }}\">Home</a></li>
                                <li><a href=\"{{ path('login') }}\">Sign up</a></li>
                                <li><a href=\"{{ path('register') }}\">Registration</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>About us</h5>
                            <ul>
                                <li><a href=\"#\">Company Information</a></li>
                                <li><a href=\"#\">Contact us</a></li>
                                <li><a href=\"#\">Reviews</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>Support</h5>
                            <ul>
                                <li><a href=\"#\">FAQ</a></li>
                                <li><a href=\"#\">Help desk</a></li>
                                <li><a href=\"#\">Forums</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3 info\">
                            <h5>Information</h5>
                            <p> This blog was created using the symfony magic :) </p>
                        </div>
                    </div>
                    <div class=\"second-bar\">
                        <div class=\"container\" align=\"center\">
                            <h5 class=\"logo\"><a> Created with the support of the best GeekHub teachers!<br> &copy 2018 </a></h5>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}
    </footer>
</html>", "@GeekBlog/Default/base.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/base.html.twig");
    }
}
