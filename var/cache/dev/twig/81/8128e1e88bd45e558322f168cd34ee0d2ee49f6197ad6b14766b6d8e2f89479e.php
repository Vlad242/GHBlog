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
        $__internal_a0d2eae85327d82b521243a6565b68b870f9e32f15a51831122692ad25f2cf49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d2eae85327d82b521243a6565b68b870f9e32f15a51831122692ad25f2cf49->enter($__internal_a0d2eae85327d82b521243a6565b68b870f9e32f15a51831122692ad25f2cf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_f48138789a7f78e6eb26fd0838c90ba72cb6042d7a21d23156ed92f24203c1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48138789a7f78e6eb26fd0838c90ba72cb6042d7a21d23156ed92f24203c1ae->enter($__internal_f48138789a7f78e6eb26fd0838c90ba72cb6042d7a21d23156ed92f24203c1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

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
        
        $__internal_a0d2eae85327d82b521243a6565b68b870f9e32f15a51831122692ad25f2cf49->leave($__internal_a0d2eae85327d82b521243a6565b68b870f9e32f15a51831122692ad25f2cf49_prof);

        
        $__internal_f48138789a7f78e6eb26fd0838c90ba72cb6042d7a21d23156ed92f24203c1ae->leave($__internal_f48138789a7f78e6eb26fd0838c90ba72cb6042d7a21d23156ed92f24203c1ae_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_c995e86e64bba829ea19673eacc198cbba67ba4cafd568bbbeb09829a0911f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c995e86e64bba829ea19673eacc198cbba67ba4cafd568bbbeb09829a0911f53->enter($__internal_c995e86e64bba829ea19673eacc198cbba67ba4cafd568bbbeb09829a0911f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_78aaa173c52c2f1ce6aa0d37373d428ebf56106d6b1e10903a6d22cdd6f29d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78aaa173c52c2f1ce6aa0d37373d428ebf56106d6b1e10903a6d22cdd6f29d67->enter($__internal_78aaa173c52c2f1ce6aa0d37373d428ebf56106d6b1e10903a6d22cdd6f29d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_78aaa173c52c2f1ce6aa0d37373d428ebf56106d6b1e10903a6d22cdd6f29d67->leave($__internal_78aaa173c52c2f1ce6aa0d37373d428ebf56106d6b1e10903a6d22cdd6f29d67_prof);

        
        $__internal_c995e86e64bba829ea19673eacc198cbba67ba4cafd568bbbeb09829a0911f53->leave($__internal_c995e86e64bba829ea19673eacc198cbba67ba4cafd568bbbeb09829a0911f53_prof);

    }

    // line 44
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae3d334f2d77e87cffdde4130059d3472749d4521d6e7d8d8a293c15e96613dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3d334f2d77e87cffdde4130059d3472749d4521d6e7d8d8a293c15e96613dc->enter($__internal_ae3d334f2d77e87cffdde4130059d3472749d4521d6e7d8d8a293c15e96613dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b7ccbbc17789d1fd653ac2e8cf68eeefa9b2c5046631555380fd4ae9e282ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7ccbbc17789d1fd653ac2e8cf68eeefa9b2c5046631555380fd4ae9e282ced->enter($__internal_6b7ccbbc17789d1fd653ac2e8cf68eeefa9b2c5046631555380fd4ae9e282ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 45
        echo "            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
        ";
        
        $__internal_6b7ccbbc17789d1fd653ac2e8cf68eeefa9b2c5046631555380fd4ae9e282ced->leave($__internal_6b7ccbbc17789d1fd653ac2e8cf68eeefa9b2c5046631555380fd4ae9e282ced_prof);

        
        $__internal_ae3d334f2d77e87cffdde4130059d3472749d4521d6e7d8d8a293c15e96613dc->leave($__internal_ae3d334f2d77e87cffdde4130059d3472749d4521d6e7d8d8a293c15e96613dc_prof);

    }

    // line 49
    public function block_login($context, array $blocks = array())
    {
        $__internal_1caffec446a4c737b933107eb2e6adcbde578408a88842c125dbfde964c77f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1caffec446a4c737b933107eb2e6adcbde578408a88842c125dbfde964c77f55->enter($__internal_1caffec446a4c737b933107eb2e6adcbde578408a88842c125dbfde964c77f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_8ffa36a93c27bffc4cdcbae213101b976024dade51026b0493cf7d5bba36eb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffa36a93c27bffc4cdcbae213101b976024dade51026b0493cf7d5bba36eb5f->enter($__internal_8ffa36a93c27bffc4cdcbae213101b976024dade51026b0493cf7d5bba36eb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_8ffa36a93c27bffc4cdcbae213101b976024dade51026b0493cf7d5bba36eb5f->leave($__internal_8ffa36a93c27bffc4cdcbae213101b976024dade51026b0493cf7d5bba36eb5f_prof);

        
        $__internal_1caffec446a4c737b933107eb2e6adcbde578408a88842c125dbfde964c77f55->leave($__internal_1caffec446a4c737b933107eb2e6adcbde578408a88842c125dbfde964c77f55_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dddc7f225374b4c107c33fae546c87fff655b0bd1d35bf1a13e0c27b77f9dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dddc7f225374b4c107c33fae546c87fff655b0bd1d35bf1a13e0c27b77f9dfd->enter($__internal_6dddc7f225374b4c107c33fae546c87fff655b0bd1d35bf1a13e0c27b77f9dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bf8927b64406c4f4b485e174bead9f949ce62186276423f3f2c4678a1f6cd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf8927b64406c4f4b485e174bead9f949ce62186276423f3f2c4678a1f6cd15->enter($__internal_2bf8927b64406c4f4b485e174bead9f949ce62186276423f3f2c4678a1f6cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2bf8927b64406c4f4b485e174bead9f949ce62186276423f3f2c4678a1f6cd15->leave($__internal_2bf8927b64406c4f4b485e174bead9f949ce62186276423f3f2c4678a1f6cd15_prof);

        
        $__internal_6dddc7f225374b4c107c33fae546c87fff655b0bd1d35bf1a13e0c27b77f9dfd->leave($__internal_6dddc7f225374b4c107c33fae546c87fff655b0bd1d35bf1a13e0c27b77f9dfd_prof);

    }

    // line 54
    public function block_right($context, array $blocks = array())
    {
        $__internal_4ae4f6b5fdea426f6761d90dc275add9143e3257e5b804e98733b5cd4e1d3bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae4f6b5fdea426f6761d90dc275add9143e3257e5b804e98733b5cd4e1d3bd9->enter($__internal_4ae4f6b5fdea426f6761d90dc275add9143e3257e5b804e98733b5cd4e1d3bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_a5096f86941eeace56566512e0f123a30d2e3cc00512870d629a443bb0e826d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5096f86941eeace56566512e0f123a30d2e3cc00512870d629a443bb0e826d6->enter($__internal_a5096f86941eeace56566512e0f123a30d2e3cc00512870d629a443bb0e826d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_a5096f86941eeace56566512e0f123a30d2e3cc00512870d629a443bb0e826d6->leave($__internal_a5096f86941eeace56566512e0f123a30d2e3cc00512870d629a443bb0e826d6_prof);

        
        $__internal_4ae4f6b5fdea426f6761d90dc275add9143e3257e5b804e98733b5cd4e1d3bd9->leave($__internal_4ae4f6b5fdea426f6761d90dc275add9143e3257e5b804e98733b5cd4e1d3bd9_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3559bcb6163fcb530a5663f1a8ae4f2093f8f0ac69800277ba6f81eb51e3ea16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3559bcb6163fcb530a5663f1a8ae4f2093f8f0ac69800277ba6f81eb51e3ea16->enter($__internal_3559bcb6163fcb530a5663f1a8ae4f2093f8f0ac69800277ba6f81eb51e3ea16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5216f7910133f4f8a4d4157b4686ba20d1d5480ded18b5c13d487e3dad6dfb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5216f7910133f4f8a4d4157b4686ba20d1d5480ded18b5c13d487e3dad6dfb31->enter($__internal_5216f7910133f4f8a4d4157b4686ba20d1d5480ded18b5c13d487e3dad6dfb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_5216f7910133f4f8a4d4157b4686ba20d1d5480ded18b5c13d487e3dad6dfb31->leave($__internal_5216f7910133f4f8a4d4157b4686ba20d1d5480ded18b5c13d487e3dad6dfb31_prof);

        
        $__internal_3559bcb6163fcb530a5663f1a8ae4f2093f8f0ac69800277ba6f81eb51e3ea16->leave($__internal_3559bcb6163fcb530a5663f1a8ae4f2093f8f0ac69800277ba6f81eb51e3ea16_prof);

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
