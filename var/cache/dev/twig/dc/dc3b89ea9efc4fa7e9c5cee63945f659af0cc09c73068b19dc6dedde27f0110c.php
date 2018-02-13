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
            'menu' => array($this, 'block_menu'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6fad8ccf810c4c77f042792b11e01b14b0769882ddf1b243fe248d2a28cce29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fad8ccf810c4c77f042792b11e01b14b0769882ddf1b243fe248d2a28cce29->enter($__internal_a6fad8ccf810c4c77f042792b11e01b14b0769882ddf1b243fe248d2a28cce29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_87acf44ea2c2b71f4fcd09bf2b4137cfcedad2406fa85b1e08ffe8723046f178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87acf44ea2c2b71f4fcd09bf2b4137cfcedad2406fa85b1e08ffe8723046f178->enter($__internal_87acf44ea2c2b71f4fcd09bf2b4137cfcedad2406fa85b1e08ffe8723046f178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

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
        
        $__internal_a6fad8ccf810c4c77f042792b11e01b14b0769882ddf1b243fe248d2a28cce29->leave($__internal_a6fad8ccf810c4c77f042792b11e01b14b0769882ddf1b243fe248d2a28cce29_prof);

        
        $__internal_87acf44ea2c2b71f4fcd09bf2b4137cfcedad2406fa85b1e08ffe8723046f178->leave($__internal_87acf44ea2c2b71f4fcd09bf2b4137cfcedad2406fa85b1e08ffe8723046f178_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_f022258174d3b4448a06ef05d5fb1d7fe0b9b43135ad808530a726b7c49b3a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f022258174d3b4448a06ef05d5fb1d7fe0b9b43135ad808530a726b7c49b3a51->enter($__internal_f022258174d3b4448a06ef05d5fb1d7fe0b9b43135ad808530a726b7c49b3a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_055bd837e9aa692e7b6c3f731559ac658cb2ba08942471277ede0950c443510c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055bd837e9aa692e7b6c3f731559ac658cb2ba08942471277ede0950c443510c->enter($__internal_055bd837e9aa692e7b6c3f731559ac658cb2ba08942471277ede0950c443510c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <div class=\"jumbotron\"></div>
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
        
        $__internal_055bd837e9aa692e7b6c3f731559ac658cb2ba08942471277ede0950c443510c->leave($__internal_055bd837e9aa692e7b6c3f731559ac658cb2ba08942471277ede0950c443510c_prof);

        
        $__internal_f022258174d3b4448a06ef05d5fb1d7fe0b9b43135ad808530a726b7c49b3a51->leave($__internal_f022258174d3b4448a06ef05d5fb1d7fe0b9b43135ad808530a726b7c49b3a51_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3d90d4376ad44e23b9d947c1bd53b4c6ce614b85f509a0e3104a1cf6e095332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d90d4376ad44e23b9d947c1bd53b4c6ce614b85f509a0e3104a1cf6e095332->enter($__internal_e3d90d4376ad44e23b9d947c1bd53b4c6ce614b85f509a0e3104a1cf6e095332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8da7d11d8453cd00c63237021cf8eab2f16cc05027e006acf82a27fa251450c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da7d11d8453cd00c63237021cf8eab2f16cc05027e006acf82a27fa251450c1->enter($__internal_8da7d11d8453cd00c63237021cf8eab2f16cc05027e006acf82a27fa251450c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
        ";
        
        $__internal_8da7d11d8453cd00c63237021cf8eab2f16cc05027e006acf82a27fa251450c1->leave($__internal_8da7d11d8453cd00c63237021cf8eab2f16cc05027e006acf82a27fa251450c1_prof);

        
        $__internal_e3d90d4376ad44e23b9d947c1bd53b4c6ce614b85f509a0e3104a1cf6e095332->leave($__internal_e3d90d4376ad44e23b9d947c1bd53b4c6ce614b85f509a0e3104a1cf6e095332_prof);

    }

    // line 42
    public function block_login($context, array $blocks = array())
    {
        $__internal_a4f6f4cfc04a4aa6cfe7a7403a597c4b589b886181a858d0c56aa1fcf57123f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f6f4cfc04a4aa6cfe7a7403a597c4b589b886181a858d0c56aa1fcf57123f6->enter($__internal_a4f6f4cfc04a4aa6cfe7a7403a597c4b589b886181a858d0c56aa1fcf57123f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_cb9b1e96f8e44dc0e7e6644116b5840a25e570fd804816db87775f5c041989de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9b1e96f8e44dc0e7e6644116b5840a25e570fd804816db87775f5c041989de->enter($__internal_cb9b1e96f8e44dc0e7e6644116b5840a25e570fd804816db87775f5c041989de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_cb9b1e96f8e44dc0e7e6644116b5840a25e570fd804816db87775f5c041989de->leave($__internal_cb9b1e96f8e44dc0e7e6644116b5840a25e570fd804816db87775f5c041989de_prof);

        
        $__internal_a4f6f4cfc04a4aa6cfe7a7403a597c4b589b886181a858d0c56aa1fcf57123f6->leave($__internal_a4f6f4cfc04a4aa6cfe7a7403a597c4b589b886181a858d0c56aa1fcf57123f6_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_e36a62368f28bf8847585d446d361be3888011bdec38e7b1e602c6cf34bf8ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36a62368f28bf8847585d446d361be3888011bdec38e7b1e602c6cf34bf8ee0->enter($__internal_e36a62368f28bf8847585d446d361be3888011bdec38e7b1e602c6cf34bf8ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f76dc9055d7a1b5ec53356d7f412fd34d2188fbd04925255e4628df83ee0fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f76dc9055d7a1b5ec53356d7f412fd34d2188fbd04925255e4628df83ee0fcf->enter($__internal_9f76dc9055d7a1b5ec53356d7f412fd34d2188fbd04925255e4628df83ee0fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f76dc9055d7a1b5ec53356d7f412fd34d2188fbd04925255e4628df83ee0fcf->leave($__internal_9f76dc9055d7a1b5ec53356d7f412fd34d2188fbd04925255e4628df83ee0fcf_prof);

        
        $__internal_e36a62368f28bf8847585d446d361be3888011bdec38e7b1e602c6cf34bf8ee0->leave($__internal_e36a62368f28bf8847585d446d361be3888011bdec38e7b1e602c6cf34bf8ee0_prof);

    }

    // line 47
    public function block_right($context, array $blocks = array())
    {
        $__internal_68d8c19b41066b3e350fcec6a903859bb1b1ef487582fe6b4ff4da47893ec65e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d8c19b41066b3e350fcec6a903859bb1b1ef487582fe6b4ff4da47893ec65e->enter($__internal_68d8c19b41066b3e350fcec6a903859bb1b1ef487582fe6b4ff4da47893ec65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_fc80de63ab9635f427d197493e29c82c067809b7d5ae473203fd54a180cffbfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc80de63ab9635f427d197493e29c82c067809b7d5ae473203fd54a180cffbfe->enter($__internal_fc80de63ab9635f427d197493e29c82c067809b7d5ae473203fd54a180cffbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_fc80de63ab9635f427d197493e29c82c067809b7d5ae473203fd54a180cffbfe->leave($__internal_fc80de63ab9635f427d197493e29c82c067809b7d5ae473203fd54a180cffbfe_prof);

        
        $__internal_68d8c19b41066b3e350fcec6a903859bb1b1ef487582fe6b4ff4da47893ec65e->leave($__internal_68d8c19b41066b3e350fcec6a903859bb1b1ef487582fe6b4ff4da47893ec65e_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6e7fe3f317e289af05e4d6a2aa9cdd3ef52db5576feb8c50ac2c705f81b89453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7fe3f317e289af05e4d6a2aa9cdd3ef52db5576feb8c50ac2c705f81b89453->enter($__internal_6e7fe3f317e289af05e4d6a2aa9cdd3ef52db5576feb8c50ac2c705f81b89453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_540120eb40b743ab52a45629c2e3a35c2c8133aca1804c9018f20b80ada00744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540120eb40b743ab52a45629c2e3a35c2c8133aca1804c9018f20b80ada00744->enter($__internal_540120eb40b743ab52a45629c2e3a35c2c8133aca1804c9018f20b80ada00744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_540120eb40b743ab52a45629c2e3a35c2c8133aca1804c9018f20b80ada00744->leave($__internal_540120eb40b743ab52a45629c2e3a35c2c8133aca1804c9018f20b80ada00744_prof);

        
        $__internal_6e7fe3f317e289af05e4d6a2aa9cdd3ef52db5576feb8c50ac2c705f81b89453->leave($__internal_6e7fe3f317e289af05e4d6a2aa9cdd3ef52db5576feb8c50ac2c705f81b89453_prof);

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
            <div class=\"jumbotron\"></div>
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
