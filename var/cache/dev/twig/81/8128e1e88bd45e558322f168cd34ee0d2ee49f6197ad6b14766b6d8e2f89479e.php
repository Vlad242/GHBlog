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
        $__internal_654aa0709f5eb0d0865a226c5f0cf955aeaafbb656f78dd415f117cb22fc5923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654aa0709f5eb0d0865a226c5f0cf955aeaafbb656f78dd415f117cb22fc5923->enter($__internal_654aa0709f5eb0d0865a226c5f0cf955aeaafbb656f78dd415f117cb22fc5923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_58f92acadb97342d6f51f4ef1887b23301d4c5ac358e9788b3b87eadde5dbabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f92acadb97342d6f51f4ef1887b23301d4c5ac358e9788b3b87eadde5dbabf->enter($__internal_58f92acadb97342d6f51f4ef1887b23301d4c5ac358e9788b3b87eadde5dbabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

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
        // line 34
        echo "    </div>
    <div class=\"col-md-2\">
        <div class=\"well\">
        ";
        // line 37
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        echo "        </div>
    </div>
    ";
        // line 42
        $this->displayBlock('login', $context, $blocks);
        // line 50
        echo "    </body>
    <footer class=\"footer\" style=\"position: revert; bottom: 0; width: 100%\">
        ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "    </footer>
</html>";
        
        $__internal_654aa0709f5eb0d0865a226c5f0cf955aeaafbb656f78dd415f117cb22fc5923->leave($__internal_654aa0709f5eb0d0865a226c5f0cf955aeaafbb656f78dd415f117cb22fc5923_prof);

        
        $__internal_58f92acadb97342d6f51f4ef1887b23301d4c5ac358e9788b3b87eadde5dbabf->leave($__internal_58f92acadb97342d6f51f4ef1887b23301d4c5ac358e9788b3b87eadde5dbabf_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_0497f94d40608b4b9fd410cc093a3080252e8cfe5b18e658d87028e7848bad40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0497f94d40608b4b9fd410cc093a3080252e8cfe5b18e658d87028e7848bad40->enter($__internal_0497f94d40608b4b9fd410cc093a3080252e8cfe5b18e658d87028e7848bad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8025f66227e3f56263fe45d209b4b57330f13f5c1ef14851293d3dc4acabb512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8025f66227e3f56263fe45d209b4b57330f13f5c1ef14851293d3dc4acabb512->enter($__internal_8025f66227e3f56263fe45d209b4b57330f13f5c1ef14851293d3dc4acabb512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <div class=\"jumbotron\" style=\"height: 0\"> </div>
            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">GeekBlog</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\">
                            <a class=\"btn btn-default pull-left\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">
                                <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> SignIn </a>
                        </form>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_8025f66227e3f56263fe45d209b4b57330f13f5c1ef14851293d3dc4acabb512->leave($__internal_8025f66227e3f56263fe45d209b4b57330f13f5c1ef14851293d3dc4acabb512_prof);

        
        $__internal_0497f94d40608b4b9fd410cc093a3080252e8cfe5b18e658d87028e7848bad40->leave($__internal_0497f94d40608b4b9fd410cc093a3080252e8cfe5b18e658d87028e7848bad40_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7814b2130929e76531777e4d56fecfefe04ede85ecec7ba6f624d9e617f0e6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7814b2130929e76531777e4d56fecfefe04ede85ecec7ba6f624d9e617f0e6ee->enter($__internal_7814b2130929e76531777e4d56fecfefe04ede85ecec7ba6f624d9e617f0e6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34317fc0cc601a872c351e0eec0b8bf0c19fe958fba4cb0b3392921152981465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34317fc0cc601a872c351e0eec0b8bf0c19fe958fba4cb0b3392921152981465->enter($__internal_34317fc0cc601a872c351e0eec0b8bf0c19fe958fba4cb0b3392921152981465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
        ";
        
        $__internal_34317fc0cc601a872c351e0eec0b8bf0c19fe958fba4cb0b3392921152981465->leave($__internal_34317fc0cc601a872c351e0eec0b8bf0c19fe958fba4cb0b3392921152981465_prof);

        
        $__internal_7814b2130929e76531777e4d56fecfefe04ede85ecec7ba6f624d9e617f0e6ee->leave($__internal_7814b2130929e76531777e4d56fecfefe04ede85ecec7ba6f624d9e617f0e6ee_prof);

    }

    // line 42
    public function block_login($context, array $blocks = array())
    {
        $__internal_483476d0268fa520392bbedf733954c095dc1e15787140b1c3e34e7c65d42904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483476d0268fa520392bbedf733954c095dc1e15787140b1c3e34e7c65d42904->enter($__internal_483476d0268fa520392bbedf733954c095dc1e15787140b1c3e34e7c65d42904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_e92b775fc05d2a29a53281c81b6c8902fbfcc23cc891a85ed447900a9fcf2000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92b775fc05d2a29a53281c81b6c8902fbfcc23cc891a85ed447900a9fcf2000->enter($__internal_e92b775fc05d2a29a53281c81b6c8902fbfcc23cc891a85ed447900a9fcf2000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 43
        echo "    <div class=\"col-md-8\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "    </div>
    <div class=\"col-md-2\">
        ";
        // line 47
        $this->displayBlock('right', $context, $blocks);
        // line 48
        echo "    </div>
    ";
        
        $__internal_e92b775fc05d2a29a53281c81b6c8902fbfcc23cc891a85ed447900a9fcf2000->leave($__internal_e92b775fc05d2a29a53281c81b6c8902fbfcc23cc891a85ed447900a9fcf2000_prof);

        
        $__internal_483476d0268fa520392bbedf733954c095dc1e15787140b1c3e34e7c65d42904->leave($__internal_483476d0268fa520392bbedf733954c095dc1e15787140b1c3e34e7c65d42904_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_32b1ee0b33925ea87635da4c3001acd607eafbfbca3eace75d5945ec87c0d089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b1ee0b33925ea87635da4c3001acd607eafbfbca3eace75d5945ec87c0d089->enter($__internal_32b1ee0b33925ea87635da4c3001acd607eafbfbca3eace75d5945ec87c0d089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4dbdb9372c6bb7ab79049a276dc14bcfc5c33efb9b84d1a1e2a1447bde06976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4dbdb9372c6bb7ab79049a276dc14bcfc5c33efb9b84d1a1e2a1447bde06976->enter($__internal_d4dbdb9372c6bb7ab79049a276dc14bcfc5c33efb9b84d1a1e2a1447bde06976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4dbdb9372c6bb7ab79049a276dc14bcfc5c33efb9b84d1a1e2a1447bde06976->leave($__internal_d4dbdb9372c6bb7ab79049a276dc14bcfc5c33efb9b84d1a1e2a1447bde06976_prof);

        
        $__internal_32b1ee0b33925ea87635da4c3001acd607eafbfbca3eace75d5945ec87c0d089->leave($__internal_32b1ee0b33925ea87635da4c3001acd607eafbfbca3eace75d5945ec87c0d089_prof);

    }

    // line 47
    public function block_right($context, array $blocks = array())
    {
        $__internal_3c580388e3105b100075664ed81c525fae887eeecfb3f7d098a85c3a7741f6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c580388e3105b100075664ed81c525fae887eeecfb3f7d098a85c3a7741f6b7->enter($__internal_3c580388e3105b100075664ed81c525fae887eeecfb3f7d098a85c3a7741f6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_bcd7e081e7ca5ce2c560f2b7488b84a1bb431b93dc164b04e6f87937047c047c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd7e081e7ca5ce2c560f2b7488b84a1bb431b93dc164b04e6f87937047c047c->enter($__internal_bcd7e081e7ca5ce2c560f2b7488b84a1bb431b93dc164b04e6f87937047c047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_bcd7e081e7ca5ce2c560f2b7488b84a1bb431b93dc164b04e6f87937047c047c->leave($__internal_bcd7e081e7ca5ce2c560f2b7488b84a1bb431b93dc164b04e6f87937047c047c_prof);

        
        $__internal_3c580388e3105b100075664ed81c525fae887eeecfb3f7d098a85c3a7741f6b7->leave($__internal_3c580388e3105b100075664ed81c525fae887eeecfb3f7d098a85c3a7741f6b7_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6fa3d5b2520f2d1f4305b2421776408fc371fa99c857515ec57efeb317ca632a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa3d5b2520f2d1f4305b2421776408fc371fa99c857515ec57efeb317ca632a->enter($__internal_6fa3d5b2520f2d1f4305b2421776408fc371fa99c857515ec57efeb317ca632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9a4bb06bda4554ffec4c0b659874161ab94a078baa2ad8324e018a1faf9fbc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4bb06bda4554ffec4c0b659874161ab94a078baa2ad8324e018a1faf9fbc5a->enter($__internal_9a4bb06bda4554ffec4c0b659874161ab94a078baa2ad8324e018a1faf9fbc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "            <footer id=\"myFooter\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <h5>Get started</h5>
                            <ul>
                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Sign up</a></li>
                                <li><a href=\"";
        // line 61
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
        
        $__internal_9a4bb06bda4554ffec4c0b659874161ab94a078baa2ad8324e018a1faf9fbc5a->leave($__internal_9a4bb06bda4554ffec4c0b659874161ab94a078baa2ad8324e018a1faf9fbc5a_prof);

        
        $__internal_6fa3d5b2520f2d1f4305b2421776408fc371fa99c857515ec57efeb317ca632a->leave($__internal_6fa3d5b2520f2d1f4305b2421776408fc371fa99c857515ec57efeb317ca632a_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  233 => 61,  229 => 60,  225 => 59,  217 => 53,  208 => 52,  191 => 47,  174 => 44,  163 => 48,  161 => 47,  157 => 45,  155 => 44,  152 => 43,  143 => 42,  130 => 38,  121 => 37,  104 => 27,  97 => 23,  85 => 13,  76 => 12,  65 => 93,  63 => 52,  59 => 50,  57 => 42,  53 => 40,  51 => 37,  46 => 34,  44 => 12,  31 => 1,);
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
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">GeekBlog</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\">
                            <a class=\"btn btn-default pull-left\" href=\"{{ path(\"login\") }}\">
                                <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> SignIn </a>
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
