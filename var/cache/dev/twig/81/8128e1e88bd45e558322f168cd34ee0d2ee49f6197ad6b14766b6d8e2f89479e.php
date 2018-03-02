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
        $__internal_8b4b57d840f397d37dd97a6f4e3698e72850aec9709d5792175fd11376b12ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4b57d840f397d37dd97a6f4e3698e72850aec9709d5792175fd11376b12ad5->enter($__internal_8b4b57d840f397d37dd97a6f4e3698e72850aec9709d5792175fd11376b12ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_90112e77a059d01e8a406d306d4a0e62e61c424a348922f2bb4e3a5a3a392532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90112e77a059d01e8a406d306d4a0e62e61c424a348922f2bb4e3a5a3a392532->enter($__internal_90112e77a059d01e8a406d306d4a0e62e61c424a348922f2bb4e3a5a3a392532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

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
        
        $__internal_8b4b57d840f397d37dd97a6f4e3698e72850aec9709d5792175fd11376b12ad5->leave($__internal_8b4b57d840f397d37dd97a6f4e3698e72850aec9709d5792175fd11376b12ad5_prof);

        
        $__internal_90112e77a059d01e8a406d306d4a0e62e61c424a348922f2bb4e3a5a3a392532->leave($__internal_90112e77a059d01e8a406d306d4a0e62e61c424a348922f2bb4e3a5a3a392532_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_c15db610b17e2b5a48d49586455b314462bfc005ddc8e5f8e790eb15c81502f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15db610b17e2b5a48d49586455b314462bfc005ddc8e5f8e790eb15c81502f6->enter($__internal_c15db610b17e2b5a48d49586455b314462bfc005ddc8e5f8e790eb15c81502f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5eb428f0d5c77d8f8fb0ba4d95007f316bfac7efbed840f4b73857c1836fbd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb428f0d5c77d8f8fb0ba4d95007f316bfac7efbed840f4b73857c1836fbd68->enter($__internal_5eb428f0d5c77d8f8fb0ba4d95007f316bfac7efbed840f4b73857c1836fbd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_5eb428f0d5c77d8f8fb0ba4d95007f316bfac7efbed840f4b73857c1836fbd68->leave($__internal_5eb428f0d5c77d8f8fb0ba4d95007f316bfac7efbed840f4b73857c1836fbd68_prof);

        
        $__internal_c15db610b17e2b5a48d49586455b314462bfc005ddc8e5f8e790eb15c81502f6->leave($__internal_c15db610b17e2b5a48d49586455b314462bfc005ddc8e5f8e790eb15c81502f6_prof);

    }

    // line 44
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b807d59218e572e6081e842f8b42d60c65288e5c315c4c338fd6b646b4aa8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b807d59218e572e6081e842f8b42d60c65288e5c315c4c338fd6b646b4aa8d2->enter($__internal_7b807d59218e572e6081e842f8b42d60c65288e5c315c4c338fd6b646b4aa8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ffee89b20235389a8487a76c6895c46f48a135f676d6a22c598760e2501caae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffee89b20235389a8487a76c6895c46f48a135f676d6a22c598760e2501caae->enter($__internal_1ffee89b20235389a8487a76c6895c46f48a135f676d6a22c598760e2501caae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 45
        echo "            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
        ";
        
        $__internal_1ffee89b20235389a8487a76c6895c46f48a135f676d6a22c598760e2501caae->leave($__internal_1ffee89b20235389a8487a76c6895c46f48a135f676d6a22c598760e2501caae_prof);

        
        $__internal_7b807d59218e572e6081e842f8b42d60c65288e5c315c4c338fd6b646b4aa8d2->leave($__internal_7b807d59218e572e6081e842f8b42d60c65288e5c315c4c338fd6b646b4aa8d2_prof);

    }

    // line 49
    public function block_login($context, array $blocks = array())
    {
        $__internal_e7fabf9cfa91d7d61faf001a790d99dc288445b01b5a4e46681297b8f0b302f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fabf9cfa91d7d61faf001a790d99dc288445b01b5a4e46681297b8f0b302f8->enter($__internal_e7fabf9cfa91d7d61faf001a790d99dc288445b01b5a4e46681297b8f0b302f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_86be29213c9fb39496b148099566065084d840b854f8a0a7219f90132db952f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86be29213c9fb39496b148099566065084d840b854f8a0a7219f90132db952f8->enter($__internal_86be29213c9fb39496b148099566065084d840b854f8a0a7219f90132db952f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_86be29213c9fb39496b148099566065084d840b854f8a0a7219f90132db952f8->leave($__internal_86be29213c9fb39496b148099566065084d840b854f8a0a7219f90132db952f8_prof);

        
        $__internal_e7fabf9cfa91d7d61faf001a790d99dc288445b01b5a4e46681297b8f0b302f8->leave($__internal_e7fabf9cfa91d7d61faf001a790d99dc288445b01b5a4e46681297b8f0b302f8_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f8441c294f06becf90e761c49f99b1c7b71bce8b818dd36a6a171c1dcfe95f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8441c294f06becf90e761c49f99b1c7b71bce8b818dd36a6a171c1dcfe95f4->enter($__internal_3f8441c294f06becf90e761c49f99b1c7b71bce8b818dd36a6a171c1dcfe95f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8552c8d8a46c33903f103df9beeafb717f2f9d14b7edbc730f171aba3368c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8552c8d8a46c33903f103df9beeafb717f2f9d14b7edbc730f171aba3368c38->enter($__internal_f8552c8d8a46c33903f103df9beeafb717f2f9d14b7edbc730f171aba3368c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8552c8d8a46c33903f103df9beeafb717f2f9d14b7edbc730f171aba3368c38->leave($__internal_f8552c8d8a46c33903f103df9beeafb717f2f9d14b7edbc730f171aba3368c38_prof);

        
        $__internal_3f8441c294f06becf90e761c49f99b1c7b71bce8b818dd36a6a171c1dcfe95f4->leave($__internal_3f8441c294f06becf90e761c49f99b1c7b71bce8b818dd36a6a171c1dcfe95f4_prof);

    }

    // line 54
    public function block_right($context, array $blocks = array())
    {
        $__internal_cbd90076c619b8e82b8cccb9079479945c2a64e5686a3cbaf8a3a8db020361f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd90076c619b8e82b8cccb9079479945c2a64e5686a3cbaf8a3a8db020361f9->enter($__internal_cbd90076c619b8e82b8cccb9079479945c2a64e5686a3cbaf8a3a8db020361f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_cd99211f4a683d6eaecf1badc4bca7568c4f883a25101eb3a2c27f5e8b743746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd99211f4a683d6eaecf1badc4bca7568c4f883a25101eb3a2c27f5e8b743746->enter($__internal_cd99211f4a683d6eaecf1badc4bca7568c4f883a25101eb3a2c27f5e8b743746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_cd99211f4a683d6eaecf1badc4bca7568c4f883a25101eb3a2c27f5e8b743746->leave($__internal_cd99211f4a683d6eaecf1badc4bca7568c4f883a25101eb3a2c27f5e8b743746_prof);

        
        $__internal_cbd90076c619b8e82b8cccb9079479945c2a64e5686a3cbaf8a3a8db020361f9->leave($__internal_cbd90076c619b8e82b8cccb9079479945c2a64e5686a3cbaf8a3a8db020361f9_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d64b9d322272ed202e6c818117e282428459b36c95169e150a57c0d18520dd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64b9d322272ed202e6c818117e282428459b36c95169e150a57c0d18520dd03->enter($__internal_d64b9d322272ed202e6c818117e282428459b36c95169e150a57c0d18520dd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_35b59772bcd6468da86b0867cb60b55a1e81c2e957c41c4b0cea2c5c6f728e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b59772bcd6468da86b0867cb60b55a1e81c2e957c41c4b0cea2c5c6f728e29->enter($__internal_35b59772bcd6468da86b0867cb60b55a1e81c2e957c41c4b0cea2c5c6f728e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_35b59772bcd6468da86b0867cb60b55a1e81c2e957c41c4b0cea2c5c6f728e29->leave($__internal_35b59772bcd6468da86b0867cb60b55a1e81c2e957c41c4b0cea2c5c6f728e29_prof);

        
        $__internal_d64b9d322272ed202e6c818117e282428459b36c95169e150a57c0d18520dd03->leave($__internal_d64b9d322272ed202e6c818117e282428459b36c95169e150a57c0d18520dd03_prof);

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
