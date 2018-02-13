<?php

/* @GeekBlog/Default/base.html.twig */
class __TwigTemplate_a5e6367b3b42f6d04abd7c6103e1a9842dfe06ec01cde0563c1c2ee199b21a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84bd1071740da78f2586f00764d0eab4f51513b37813ce734a388ab493eac9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bd1071740da78f2586f00764d0eab4f51513b37813ce734a388ab493eac9b3->enter($__internal_84bd1071740da78f2586f00764d0eab4f51513b37813ce734a388ab493eac9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_c50669ab38cc2daa9958c92dad94f61a78f846b645b8631576f3fdd38120428e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50669ab38cc2daa9958c92dad94f61a78f846b645b8631576f3fdd38120428e->enter($__internal_c50669ab38cc2daa9958c92dad94f61a78f846b645b8631576f3fdd38120428e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

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
    <div class=\"jumbotron\" style=\"height: 20px\"></div>
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
    </body>
    <footer class=\"footer\">
        ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "    </footer>
</html>
";
        
        $__internal_84bd1071740da78f2586f00764d0eab4f51513b37813ce734a388ab493eac9b3->leave($__internal_84bd1071740da78f2586f00764d0eab4f51513b37813ce734a388ab493eac9b3_prof);

        
        $__internal_c50669ab38cc2daa9958c92dad94f61a78f846b645b8631576f3fdd38120428e->leave($__internal_c50669ab38cc2daa9958c92dad94f61a78f846b645b8631576f3fdd38120428e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_89a91d622e502f942a67f6a8b8876b9e7fdae3674047eec78f78cef11bb1c8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a91d622e502f942a67f6a8b8876b9e7fdae3674047eec78f78cef11bb1c8f9->enter($__internal_89a91d622e502f942a67f6a8b8876b9e7fdae3674047eec78f78cef11bb1c8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3531b019b86a9392e01131c46ad047101177a9f23f0c8c4c87cea660ab74735d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3531b019b86a9392e01131c46ad047101177a9f23f0c8c4c87cea660ab74735d->enter($__internal_3531b019b86a9392e01131c46ad047101177a9f23f0c8c4c87cea660ab74735d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">GeekBlog</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\">
                            <a class=\"btn btn-info pull-left\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">
                                <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> SignIn </a>
                            <a class=\"btn btn-info pull-left\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\">
                                <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Registration </a>
                        </form>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_3531b019b86a9392e01131c46ad047101177a9f23f0c8c4c87cea660ab74735d->leave($__internal_3531b019b86a9392e01131c46ad047101177a9f23f0c8c4c87cea660ab74735d_prof);

        
        $__internal_89a91d622e502f942a67f6a8b8876b9e7fdae3674047eec78f78cef11bb1c8f9->leave($__internal_89a91d622e502f942a67f6a8b8876b9e7fdae3674047eec78f78cef11bb1c8f9_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78c87fb6effde9dc70f4600b0af0198680295061313a687f6bb53ed36522ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78c87fb6effde9dc70f4600b0af0198680295061313a687f6bb53ed36522ad4->enter($__internal_b78c87fb6effde9dc70f4600b0af0198680295061313a687f6bb53ed36522ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86957d9596b615c203525fe1ec0e9fa8a1b303b8502e5589528e80d5771b23aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86957d9596b615c203525fe1ec0e9fa8a1b303b8502e5589528e80d5771b23aa->enter($__internal_86957d9596b615c203525fe1ec0e9fa8a1b303b8502e5589528e80d5771b23aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            <div class=\"jumbotron\">
                <div class=\"container\">
                    ";
        // line 39
        $this->displayBlock('menu', $context, $blocks);
        // line 42
        echo "                </div>
            </div>

        <div class=\"container\">
            <!-- Example row of columns -->
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
                </div>
                <div class=\"col-md-4\">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
                </div>
                <div class=\"col-md-4\">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
                </div>
            </div>
        </div>
            ";
        
        $__internal_86957d9596b615c203525fe1ec0e9fa8a1b303b8502e5589528e80d5771b23aa->leave($__internal_86957d9596b615c203525fe1ec0e9fa8a1b303b8502e5589528e80d5771b23aa_prof);

        
        $__internal_b78c87fb6effde9dc70f4600b0af0198680295061313a687f6bb53ed36522ad4->leave($__internal_b78c87fb6effde9dc70f4600b0af0198680295061313a687f6bb53ed36522ad4_prof);

    }

    // line 39
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acf8b35d165d2f4dee8f2447d37e57dbf6b554d87030965e796d98cf49b3c235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf8b35d165d2f4dee8f2447d37e57dbf6b554d87030965e796d98cf49b3c235->enter($__internal_acf8b35d165d2f4dee8f2447d37e57dbf6b554d87030965e796d98cf49b3c235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0a89dc7b4370364c0011a3b32110643da93ec2afe24267706f672f6f5c33974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a89dc7b4370364c0011a3b32110643da93ec2afe24267706f672f6f5c33974->enter($__internal_f0a89dc7b4370364c0011a3b32110643da93ec2afe24267706f672f6f5c33974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 40
        echo "                        ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
                    ";
        
        $__internal_f0a89dc7b4370364c0011a3b32110643da93ec2afe24267706f672f6f5c33974->leave($__internal_f0a89dc7b4370364c0011a3b32110643da93ec2afe24267706f672f6f5c33974_prof);

        
        $__internal_acf8b35d165d2f4dee8f2447d37e57dbf6b554d87030965e796d98cf49b3c235->leave($__internal_acf8b35d165d2f4dee8f2447d37e57dbf6b554d87030965e796d98cf49b3c235_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1721dfe3d178673c40857cff4a07d4269797973db7edc52046930d114c424f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1721dfe3d178673c40857cff4a07d4269797973db7edc52046930d114c424f35->enter($__internal_1721dfe3d178673c40857cff4a07d4269797973db7edc52046930d114c424f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d5cf08ad921a3fabe6b215503ee7850ec6ce88de81772bf9a2323b815495966b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cf08ad921a3fabe6b215503ee7850ec6ce88de81772bf9a2323b815495966b->enter($__internal_d5cf08ad921a3fabe6b215503ee7850ec6ce88de81772bf9a2323b815495966b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        echo "            <nav class=\"navbar navbar-inverse bg-inverse navbar-fixed-down\">
                <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
                <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
                <script src=\"../../dist/js/bootstrap.min.js\"></script>
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
                <div class=\"container\">
                    <p style=\"color: white\" >&copy; 2018 Z(o_O)M, Inc.</p>
                </div>
            </nav>
        ";
        
        $__internal_d5cf08ad921a3fabe6b215503ee7850ec6ce88de81772bf9a2323b815495966b->leave($__internal_d5cf08ad921a3fabe6b215503ee7850ec6ce88de81772bf9a2323b815495966b_prof);

        
        $__internal_1721dfe3d178673c40857cff4a07d4269797973db7edc52046930d114c424f35->leave($__internal_1721dfe3d178673c40857cff4a07d4269797973db7edc52046930d114c424f35_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 70,  187 => 69,  174 => 40,  165 => 39,  132 => 42,  130 => 39,  126 => 37,  117 => 36,  100 => 28,  95 => 26,  88 => 22,  77 => 13,  68 => 12,  56 => 82,  54 => 69,  49 => 66,  47 => 36,  44 => 35,  42 => 12,  29 => 1,);
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
    <div class=\"jumbotron\" style=\"height: 20px\"></div>
        {% block header %}
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
                            <a class=\"btn btn-info pull-left\" href=\"{{ path(\"login\") }}\">
                                <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> SignIn </a>
                            <a class=\"btn btn-info pull-left\" href=\"{{ path(\"register\") }}\">
                                <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Registration </a>
                        </form>
                    </div>
                </div>
            </nav>
        {% endblock %}

        {% block body %}
            <div class=\"jumbotron\">
                <div class=\"container\">
                    {% block menu %}
                        {{ knp_menu_render('main') }}
                    {% endblock %}
                </div>
            </div>

        <div class=\"container\">
            <!-- Example row of columns -->
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
                </div>
                <div class=\"col-md-4\">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
                </div>
                <div class=\"col-md-4\">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
                </div>
            </div>
        </div>
            {% endblock %}

    </body>
    <footer class=\"footer\">
        {% block footer %}
            <nav class=\"navbar navbar-inverse bg-inverse navbar-fixed-down\">
                <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
                <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
                <script src=\"../../dist/js/bootstrap.min.js\"></script>
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
                <div class=\"container\">
                    <p style=\"color: white\" >&copy; 2018 Z(o_O)M, Inc.</p>
                </div>
            </nav>
        {% endblock %}
    </footer>
</html>
", "@GeekBlog/Default/base.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/base.html.twig");
    }
}
