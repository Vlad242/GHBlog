<?php

/* GeekBlogBundle:User:UserSubscribers.html.twig */
class __TwigTemplate_a450a325a9e63f6166fd1b7151c7968183ca995dba37b34571aec1749fe28e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e24e4da180d71fd117bac195b260f85dd730b1cb028a4b61081bfe82f2bca35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24e4da180d71fd117bac195b260f85dd730b1cb028a4b61081bfe82f2bca35e->enter($__internal_e24e4da180d71fd117bac195b260f85dd730b1cb028a4b61081bfe82f2bca35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeekBlogBundle:User:UserSubscribers.html.twig"));

        $__internal_4771587c480a9adc0b7fce99cb870b9840baefc4cf8a6b9a12de7638221f7441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4771587c480a9adc0b7fce99cb870b9840baefc4cf8a6b9a12de7638221f7441->enter($__internal_4771587c480a9adc0b7fce99cb870b9840baefc4cf8a6b9a12de7638221f7441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeekBlogBundle:User:UserSubscribers.html.twig"));

        // line 1
        echo "<div>
    <h4>Followers(";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getSubscriberCount", array(), "method"), "html", null, true);
        echo "):</h4>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["users"] ?? $this->getContext($context, "users")));
            echo "
        <a class=\"btn-xs btn-primary\" type=\"button\">
            <span class=\"glyphicon glyphicon-tag\"></span> </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>";
        
        $__internal_e24e4da180d71fd117bac195b260f85dd730b1cb028a4b61081bfe82f2bca35e->leave($__internal_e24e4da180d71fd117bac195b260f85dd730b1cb028a4b61081bfe82f2bca35e_prof);

        
        $__internal_4771587c480a9adc0b7fce99cb870b9840baefc4cf8a6b9a12de7638221f7441->leave($__internal_4771587c480a9adc0b7fce99cb870b9840baefc4cf8a6b9a12de7638221f7441_prof);

    }

    public function getTemplateName()
    {
        return "GeekBlogBundle:User:UserSubscribers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <h4>Followers({{ app.user.getSubscriberCount() }}):</h4>
    {% for user in users %}
        {{ dump(users) }}
        <a class=\"btn-xs btn-primary\" type=\"button\">
            <span class=\"glyphicon glyphicon-tag\"></span> </a>
    {% endfor %}
</div>", "GeekBlogBundle:User:UserSubscribers.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/User/UserSubscribers.html.twig");
    }
}
