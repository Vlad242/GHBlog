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
        $__internal_1aba33e703deac08955f0b6e8fb894c5ded15bc4f8656f12f0b298d2503cab38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aba33e703deac08955f0b6e8fb894c5ded15bc4f8656f12f0b298d2503cab38->enter($__internal_1aba33e703deac08955f0b6e8fb894c5ded15bc4f8656f12f0b298d2503cab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

        $__internal_8fa302e97b534c10da1d8e0403914aea2e8800c2cd9d7b14f7432a2638680d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa302e97b534c10da1d8e0403914aea2e8800c2cd9d7b14f7432a2638680d33->enter($__internal_8fa302e97b534c10da1d8e0403914aea2e8800c2cd9d7b14f7432a2638680d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Default/base.html.twig"));

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
        ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_1aba33e703deac08955f0b6e8fb894c5ded15bc4f8656f12f0b298d2503cab38->leave($__internal_1aba33e703deac08955f0b6e8fb894c5ded15bc4f8656f12f0b298d2503cab38_prof);

        
        $__internal_8fa302e97b534c10da1d8e0403914aea2e8800c2cd9d7b14f7432a2638680d33->leave($__internal_8fa302e97b534c10da1d8e0403914aea2e8800c2cd9d7b14f7432a2638680d33_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_1c7df80144677a43e000187371db684acf21100771f841b2bcb84194f618e811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7df80144677a43e000187371db684acf21100771f841b2bcb84194f618e811->enter($__internal_1c7df80144677a43e000187371db684acf21100771f841b2bcb84194f618e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_663cea782a578d5d0e8c9dc0b70e9a4297dbd80efb99c29c5ba4fcf563fb9ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663cea782a578d5d0e8c9dc0b70e9a4297dbd80efb99c29c5ba4fcf563fb9ae9->enter($__internal_663cea782a578d5d0e8c9dc0b70e9a4297dbd80efb99c29c5ba4fcf563fb9ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_663cea782a578d5d0e8c9dc0b70e9a4297dbd80efb99c29c5ba4fcf563fb9ae9->leave($__internal_663cea782a578d5d0e8c9dc0b70e9a4297dbd80efb99c29c5ba4fcf563fb9ae9_prof);

        
        $__internal_1c7df80144677a43e000187371db684acf21100771f841b2bcb84194f618e811->leave($__internal_1c7df80144677a43e000187371db684acf21100771f841b2bcb84194f618e811_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b64947214444c2f676f12d496dc4fa8461333c33680ac20fa4b97a321ea0e161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64947214444c2f676f12d496dc4fa8461333c33680ac20fa4b97a321ea0e161->enter($__internal_b64947214444c2f676f12d496dc4fa8461333c33680ac20fa4b97a321ea0e161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae31bd71b322688152a0ee7d9983cd307462dfd7f749bcb2e78aae7b0ab96680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae31bd71b322688152a0ee7d9983cd307462dfd7f749bcb2e78aae7b0ab96680->enter($__internal_ae31bd71b322688152a0ee7d9983cd307462dfd7f749bcb2e78aae7b0ab96680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 12
        echo "            ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main");
        echo "
        ";
        
        $__internal_ae31bd71b322688152a0ee7d9983cd307462dfd7f749bcb2e78aae7b0ab96680->leave($__internal_ae31bd71b322688152a0ee7d9983cd307462dfd7f749bcb2e78aae7b0ab96680_prof);

        
        $__internal_b64947214444c2f676f12d496dc4fa8461333c33680ac20fa4b97a321ea0e161->leave($__internal_b64947214444c2f676f12d496dc4fa8461333c33680ac20fa4b97a321ea0e161_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f50bd8ab76273fea5f2dc7771254b5fc1979559acdce2defb7198d5c740d939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f50bd8ab76273fea5f2dc7771254b5fc1979559acdce2defb7198d5c740d939->enter($__internal_6f50bd8ab76273fea5f2dc7771254b5fc1979559acdce2defb7198d5c740d939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8791552ebea0cada86a5a17b2ee2ac5ac4010993a35958449d8e716efe3bc804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8791552ebea0cada86a5a17b2ee2ac5ac4010993a35958449d8e716efe3bc804->enter($__internal_8791552ebea0cada86a5a17b2ee2ac5ac4010993a35958449d8e716efe3bc804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8791552ebea0cada86a5a17b2ee2ac5ac4010993a35958449d8e716efe3bc804->leave($__internal_8791552ebea0cada86a5a17b2ee2ac5ac4010993a35958449d8e716efe3bc804_prof);

        
        $__internal_6f50bd8ab76273fea5f2dc7771254b5fc1979559acdce2defb7198d5c740d939->leave($__internal_6f50bd8ab76273fea5f2dc7771254b5fc1979559acdce2defb7198d5c740d939_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b68007b9f29021dd524758a83320872590c7b349eb2ae610aff98188e2f3bb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68007b9f29021dd524758a83320872590c7b349eb2ae610aff98188e2f3bb1c->enter($__internal_b68007b9f29021dd524758a83320872590c7b349eb2ae610aff98188e2f3bb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8122f00eac0f503aa09a01142b2d74e449059e2a635889f37c5bd83d39f16efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8122f00eac0f503aa09a01142b2d74e449059e2a635889f37c5bd83d39f16efb->enter($__internal_8122f00eac0f503aa09a01142b2d74e449059e2a635889f37c5bd83d39f16efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8122f00eac0f503aa09a01142b2d74e449059e2a635889f37c5bd83d39f16efb->leave($__internal_8122f00eac0f503aa09a01142b2d74e449059e2a635889f37c5bd83d39f16efb_prof);

        
        $__internal_b68007b9f29021dd524758a83320872590c7b349eb2ae610aff98188e2f3bb1c->leave($__internal_b68007b9f29021dd524758a83320872590c7b349eb2ae610aff98188e2f3bb1c_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28dea6084fc0127f3f8349f5973b8a2d104045e6a0f57ee3277c579565b3ddb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28dea6084fc0127f3f8349f5973b8a2d104045e6a0f57ee3277c579565b3ddb0->enter($__internal_28dea6084fc0127f3f8349f5973b8a2d104045e6a0f57ee3277c579565b3ddb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8992751776d35989a3c51e49f88422b3b72572df8de801f02fe225a68768ed7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8992751776d35989a3c51e49f88422b3b72572df8de801f02fe225a68768ed7f->enter($__internal_8992751776d35989a3c51e49f88422b3b72572df8de801f02fe225a68768ed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8992751776d35989a3c51e49f88422b3b72572df8de801f02fe225a68768ed7f->leave($__internal_8992751776d35989a3c51e49f88422b3b72572df8de801f02fe225a68768ed7f_prof);

        
        $__internal_28dea6084fc0127f3f8349f5973b8a2d104045e6a0f57ee3277c579565b3ddb0->leave($__internal_28dea6084fc0127f3f8349f5973b8a2d104045e6a0f57ee3277c579565b3ddb0_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 16,  123 => 15,  106 => 14,  93 => 12,  84 => 11,  67 => 10,  55 => 17,  52 => 16,  49 => 15,  46 => 14,  43 => 11,  41 => 10,  30 => 1,);
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
        {% block header %}{% endblock %}
        {% block menu %}
            {{ knp_menu_render('main') }}
        {% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "@GeekBlog/Default/base.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Default/base.html.twig");
    }
}
