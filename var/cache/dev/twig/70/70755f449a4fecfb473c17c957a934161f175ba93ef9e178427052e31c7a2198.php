<?php

/* @GeekBlog/Menu/menu.html.twig */
class __TwigTemplate_cc733a93f882ee4022ab3ce29b9f191903b000ed06b6c5f512380e60f7cee107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GeekBlog/Default/base.html.twig", "@GeekBlog/Menu/menu.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GeekBlog/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4af49617bebf75cc580edbc3d18a9a47ad90a72192939a334368546195755b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af49617bebf75cc580edbc3d18a9a47ad90a72192939a334368546195755b54->enter($__internal_4af49617bebf75cc580edbc3d18a9a47ad90a72192939a334368546195755b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $__internal_147cf2db156e058779703b9b12f963fd315361465fea449662ed4fc3f7505e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147cf2db156e058779703b9b12f963fd315361465fea449662ed4fc3f7505e6b->enter($__internal_147cf2db156e058779703b9b12f963fd315361465fea449662ed4fc3f7505e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af49617bebf75cc580edbc3d18a9a47ad90a72192939a334368546195755b54->leave($__internal_4af49617bebf75cc580edbc3d18a9a47ad90a72192939a334368546195755b54_prof);

        
        $__internal_147cf2db156e058779703b9b12f963fd315361465fea449662ed4fc3f7505e6b->leave($__internal_147cf2db156e058779703b9b12f963fd315361465fea449662ed4fc3f7505e6b_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b8edae9c14561ae9df18624071144e2312bf433e8a0a76919bc2a6c995e2fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8edae9c14561ae9df18624071144e2312bf433e8a0a76919bc2a6c995e2fbd->enter($__internal_3b8edae9c14561ae9df18624071144e2312bf433e8a0a76919bc2a6c995e2fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e808be1ed5657c9eb06e5183db8c6f03953b4d22f60e7ea0f0e27feaf32ec767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e808be1ed5657c9eb06e5183db8c6f03953b4d22f60e7ea0f0e27feaf32ec767->enter($__internal_e808be1ed5657c9eb06e5183db8c6f03953b4d22f60e7ea0f0e27feaf32ec767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<ul>
    <li class=\"current first\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a>
        <ul class=\"menu_level_1\">
            <li class=\"current first last\">
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\">List</a>
            </li>
        </ul>
    </li>
</ul>
";
        
        $__internal_e808be1ed5657c9eb06e5183db8c6f03953b4d22f60e7ea0f0e27feaf32ec767->leave($__internal_e808be1ed5657c9eb06e5183db8c6f03953b4d22f60e7ea0f0e27feaf32ec767_prof);

        
        $__internal_3b8edae9c14561ae9df18624071144e2312bf433e8a0a76919bc2a6c995e2fbd->leave($__internal_3b8edae9c14561ae9df18624071144e2312bf433e8a0a76919bc2a6c995e2fbd_prof);

    }

    public function getTemplateName()
    {
        return "@GeekBlog/Menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 8,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
{% block menu %}
<ul>
    <li class=\"current first\">
        <a href=\"{{ path('homepage') }}\">Home</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"{{ path('login') }}\">Login</a>
        <ul class=\"menu_level_1\">
            <li class=\"current first last\">
                <a href=\"{{ path('list') }}\">List</a>
            </li>
        </ul>
    </li>
</ul>
{% endblock %}
", "@GeekBlog/Menu/menu.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Menu/menu.html.twig");
    }
}
