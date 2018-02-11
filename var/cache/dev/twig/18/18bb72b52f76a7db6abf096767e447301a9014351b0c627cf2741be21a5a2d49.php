<?php

/* @GeekBlog/Default/base.html.twig */
class __TwigTemplate_82d75e0202b839c46382386d2c4ceb15737f7b8586ff583a14172a93dc290906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06887f4ddd8410d032aac02bac7c3a7a7be256464255da41bd2fee76d187e38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06887f4ddd8410d032aac02bac7c3a7a7be256464255da41bd2fee76d187e38a->enter($__internal_06887f4ddd8410d032aac02bac7c3a7a7be256464255da41bd2fee76d187e38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_b4d00d155276d9db691e512a5697e9b9c934d5f0eff3ea41fff8f58f8fda7a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d00d155276d9db691e512a5697e9b9c934d5f0eff3ea41fff8f58f8fda7a8f->enter($__internal_b4d00d155276d9db691e512a5697e9b9c934d5f0eff3ea41fff8f58f8fda7a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
    <div class=\"container\">
        ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "    </div>
    <div class=\"container\">
        ";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 21
        echo "    </div>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_06887f4ddd8410d032aac02bac7c3a7a7be256464255da41bd2fee76d187e38a->leave($__internal_06887f4ddd8410d032aac02bac7c3a7a7be256464255da41bd2fee76d187e38a_prof);

        
        $__internal_b4d00d155276d9db691e512a5697e9b9c934d5f0eff3ea41fff8f58f8fda7a8f->leave($__internal_b4d00d155276d9db691e512a5697e9b9c934d5f0eff3ea41fff8f58f8fda7a8f_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_5ad86d26b32f3b4b8429c632bac59745c82b85668775a362e2dbdd6cd92d163b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad86d26b32f3b4b8429c632bac59745c82b85668775a362e2dbdd6cd92d163b->enter($__internal_5ad86d26b32f3b4b8429c632bac59745c82b85668775a362e2dbdd6cd92d163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_270659d53bf50f2c3ba4c9e5ecf998e3608c5c76e25f547cc66b4132f320dfa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270659d53bf50f2c3ba4c9e5ecf998e3608c5c76e25f547cc66b4132f320dfa3->enter($__internal_270659d53bf50f2c3ba4c9e5ecf998e3608c5c76e25f547cc66b4132f320dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "                <div class=\"col-md-12\" style=\"background-color: #0f0eff\">
                 <h1>GeekBlog</h1>
                </div>
        ";
        
        $__internal_270659d53bf50f2c3ba4c9e5ecf998e3608c5c76e25f547cc66b4132f320dfa3->leave($__internal_270659d53bf50f2c3ba4c9e5ecf998e3608c5c76e25f547cc66b4132f320dfa3_prof);

        
        $__internal_5ad86d26b32f3b4b8429c632bac59745c82b85668775a362e2dbdd6cd92d163b->leave($__internal_5ad86d26b32f3b4b8429c632bac59745c82b85668775a362e2dbdd6cd92d163b_prof);

    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07d17cc09dc68ebd43c6224e200842ed47f31be4e6f676a04c7718617ca13747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d17cc09dc68ebd43c6224e200842ed47f31be4e6f676a04c7718617ca13747->enter($__internal_07d17cc09dc68ebd43c6224e200842ed47f31be4e6f676a04c7718617ca13747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_76dd27288114371442b0c9414b25bdbb3683525d8d092206c0846522e58309fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dd27288114371442b0c9414b25bdbb3683525d8d092206c0846522e58309fb->enter($__internal_76dd27288114371442b0c9414b25bdbb3683525d8d092206c0846522e58309fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 19
        echo "            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
        ";
        
        $__internal_76dd27288114371442b0c9414b25bdbb3683525d8d092206c0846522e58309fb->leave($__internal_76dd27288114371442b0c9414b25bdbb3683525d8d092206c0846522e58309fb_prof);

        
        $__internal_07d17cc09dc68ebd43c6224e200842ed47f31be4e6f676a04c7718617ca13747->leave($__internal_07d17cc09dc68ebd43c6224e200842ed47f31be4e6f676a04c7718617ca13747_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce181e6de12f327bb8dc1f7884cad298ce8ea0d207e988e257a569098d3cbe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce181e6de12f327bb8dc1f7884cad298ce8ea0d207e988e257a569098d3cbe1->enter($__internal_2ce181e6de12f327bb8dc1f7884cad298ce8ea0d207e988e257a569098d3cbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e81fb9ee4b446c255ce67100e1e8de43f5fcc43cd1b659f4acdc5b885e995090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81fb9ee4b446c255ce67100e1e8de43f5fcc43cd1b659f4acdc5b885e995090->enter($__internal_e81fb9ee4b446c255ce67100e1e8de43f5fcc43cd1b659f4acdc5b885e995090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e81fb9ee4b446c255ce67100e1e8de43f5fcc43cd1b659f4acdc5b885e995090->leave($__internal_e81fb9ee4b446c255ce67100e1e8de43f5fcc43cd1b659f4acdc5b885e995090_prof);

        
        $__internal_2ce181e6de12f327bb8dc1f7884cad298ce8ea0d207e988e257a569098d3cbe1->leave($__internal_2ce181e6de12f327bb8dc1f7884cad298ce8ea0d207e988e257a569098d3cbe1_prof);

    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8d4fb1b570319491b79233bbc2976bb0a5698d2ff4585b4e04520da116727b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4fb1b570319491b79233bbc2976bb0a5698d2ff4585b4e04520da116727b44->enter($__internal_8d4fb1b570319491b79233bbc2976bb0a5698d2ff4585b4e04520da116727b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0d2fb4d97863d5d6ce88151005751264cdcb46e9a1eb432140d752e91908b9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2fb4d97863d5d6ce88151005751264cdcb46e9a1eb432140d752e91908b9ae->enter($__internal_0d2fb4d97863d5d6ce88151005751264cdcb46e9a1eb432140d752e91908b9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_0d2fb4d97863d5d6ce88151005751264cdcb46e9a1eb432140d752e91908b9ae->leave($__internal_0d2fb4d97863d5d6ce88151005751264cdcb46e9a1eb432140d752e91908b9ae_prof);

        
        $__internal_8d4fb1b570319491b79233bbc2976bb0a5698d2ff4585b4e04520da116727b44->leave($__internal_8d4fb1b570319491b79233bbc2976bb0a5698d2ff4585b4e04520da116727b44_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63a16d2e86872c48a81375c02af46c514360aa713b353b153a29e5ca6c12929c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a16d2e86872c48a81375c02af46c514360aa713b353b153a29e5ca6c12929c->enter($__internal_63a16d2e86872c48a81375c02af46c514360aa713b353b153a29e5ca6c12929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c8fffffd1438602344217960ae70f62886f3ee58c4153d141688096aed47b6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fffffd1438602344217960ae70f62886f3ee58c4153d141688096aed47b6d0->enter($__internal_c8fffffd1438602344217960ae70f62886f3ee58c4153d141688096aed47b6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c8fffffd1438602344217960ae70f62886f3ee58c4153d141688096aed47b6d0->leave($__internal_c8fffffd1438602344217960ae70f62886f3ee58c4153d141688096aed47b6d0_prof);

        
        $__internal_63a16d2e86872c48a81375c02af46c514360aa713b353b153a29e5ca6c12929c->leave($__internal_63a16d2e86872c48a81375c02af46c514360aa713b353b153a29e5ca6c12929c_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 24,  134 => 23,  117 => 22,  104 => 19,  95 => 18,  82 => 12,  73 => 11,  61 => 25,  58 => 24,  55 => 23,  53 => 22,  50 => 21,  48 => 18,  44 => 16,  42 => 11,  30 => 1,);
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
    </head>
    <body>
    <div class=\"container\">
        {% block header %}
                <div class=\"col-md-12\" style=\"background-color: #0f0eff\">
                 <h1>GeekBlog</h1>
                </div>
        {% endblock %}
    </div>
    <div class=\"container\">
        {% block menu %}
            {{ knp_menu_render('main') }}
        {% endblock %}
    </div>
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "@GeekBlog/Default/base.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/base.html.twig");
    }
}
