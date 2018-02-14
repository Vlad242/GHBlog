<?php

/* @GeekBlog/Menu/menu.html.twig */
class __TwigTemplate_c4d49081d8f98987e1d8724d3ea4719e8bccb17fa0381c7c8459d6eeee916fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KnpMenu/menu.html.twig", "@GeekBlog/Menu/menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KnpMenu/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b1e9b9f9f0a10d4a5ac3c7003b27cc1ec9b57f6c3e1d55d3676958879ceea8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1e9b9f9f0a10d4a5ac3c7003b27cc1ec9b57f6c3e1d55d3676958879ceea8d->enter($__internal_6b1e9b9f9f0a10d4a5ac3c7003b27cc1ec9b57f6c3e1d55d3676958879ceea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $__internal_8901a08927405799cd2b5930499e4ade32a37bd6104503d5c2a611aa54c47b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8901a08927405799cd2b5930499e4ade32a37bd6104503d5c2a611aa54c47b3c->enter($__internal_8901a08927405799cd2b5930499e4ade32a37bd6104503d5c2a611aa54c47b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1e9b9f9f0a10d4a5ac3c7003b27cc1ec9b57f6c3e1d55d3676958879ceea8d->leave($__internal_6b1e9b9f9f0a10d4a5ac3c7003b27cc1ec9b57f6c3e1d55d3676958879ceea8d_prof);

        
        $__internal_8901a08927405799cd2b5930499e4ade32a37bd6104503d5c2a611aa54c47b3c->leave($__internal_8901a08927405799cd2b5930499e4ade32a37bd6104503d5c2a611aa54c47b3c_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_4f35923ae9b0820d1cb390a318758fe733304d4b9af3c118de5fcbfd0511949b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f35923ae9b0820d1cb390a318758fe733304d4b9af3c118de5fcbfd0511949b->enter($__internal_4f35923ae9b0820d1cb390a318758fe733304d4b9af3c118de5fcbfd0511949b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_954a2b2a8c277d5c68ae33010049a54ca9a92618e952695d43bb566b179a0016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954a2b2a8c277d5c68ae33010049a54ca9a92618e952695d43bb566b179a0016->enter($__internal_954a2b2a8c277d5c68ae33010049a54ca9a92618e952695d43bb566b179a0016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_954a2b2a8c277d5c68ae33010049a54ca9a92618e952695d43bb566b179a0016->leave($__internal_954a2b2a8c277d5c68ae33010049a54ca9a92618e952695d43bb566b179a0016_prof);

        
        $__internal_4f35923ae9b0820d1cb390a318758fe733304d4b9af3c118de5fcbfd0511949b->leave($__internal_4f35923ae9b0820d1cb390a318758fe733304d4b9af3c118de5fcbfd0511949b_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_fdb37b467b9f238c89201a11f1b52880c13b1d91c65a119026af5c225e216393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb37b467b9f238c89201a11f1b52880c13b1d91c65a119026af5c225e216393->enter($__internal_fdb37b467b9f238c89201a11f1b52880c13b1d91c65a119026af5c225e216393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_d1614c2147fe9d546797d3a4fd9e65daca3cfbd8d17f830a8fcc77d4d9c95cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1614c2147fe9d546797d3a4fd9e65daca3cfbd8d17f830a8fcc77d4d9c95cc7->enter($__internal_d1614c2147fe9d546797d3a4fd9e65daca3cfbd8d17f830a8fcc77d4d9c95cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        echo "    ";
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_d1614c2147fe9d546797d3a4fd9e65daca3cfbd8d17f830a8fcc77d4d9c95cc7->leave($__internal_d1614c2147fe9d546797d3a4fd9e65daca3cfbd8d17f830a8fcc77d4d9c95cc7_prof);

        
        $__internal_fdb37b467b9f238c89201a11f1b52880c13b1d91c65a119026af5c225e216393->leave($__internal_fdb37b467b9f238c89201a11f1b52880c13b1d91c65a119026af5c225e216393_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_fed55b3ef89bdeefe9be6727530c4731381c23c3423ec0053fcb7d39613b9822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed55b3ef89bdeefe9be6727530c4731381c23c3423ec0053fcb7d39613b9822->enter($__internal_fed55b3ef89bdeefe9be6727530c4731381c23c3423ec0053fcb7d39613b9822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_2e65bd320c8bd3f8a16eab8106de3600c1d23bdf2b1f3225871baf765643f3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e65bd320c8bd3f8a16eab8106de3600c1d23bdf2b1f3225871baf765643f3e6->enter($__internal_2e65bd320c8bd3f8a16eab8106de3600c1d23bdf2b1f3225871baf765643f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "            ";
            $context["knp_menu"] = $this;
            // line 25
            echo "            ";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo "
            ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_2e65bd320c8bd3f8a16eab8106de3600c1d23bdf2b1f3225871baf765643f3e6->leave($__internal_2e65bd320c8bd3f8a16eab8106de3600c1d23bdf2b1f3225871baf765643f3e6_prof);

        
        $__internal_fed55b3ef89bdeefe9be6727530c4731381c23c3423ec0053fcb7d39613b9822->leave($__internal_fed55b3ef89bdeefe9be6727530c4731381c23c3423ec0053fcb7d39613b9822_prof);

    }

    // line 30
    public function block_children($context, array $blocks = array())
    {
        $__internal_cee687c00558c2ea3720d0468daee3a82556b63d7cbcf7e5c6542cdd142aa658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee687c00558c2ea3720d0468daee3a82556b63d7cbcf7e5c6542cdd142aa658->enter($__internal_cee687c00558c2ea3720d0468daee3a82556b63d7cbcf7e5c6542cdd142aa658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_ea2f9f2601a0fc615fffebe8892cf3ce76c57e33520596672af59d695ffbd4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2f9f2601a0fc615fffebe8892cf3ce76c57e33520596672af59d695ffbd4f9->enter($__internal_ea2f9f2601a0fc615fffebe8892cf3ce76c57e33520596672af59d695ffbd4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 31
        echo "    ";
        // line 32
        echo "    ";
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 33
        echo "    ";
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 36
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 40
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 47
        echo "    ";
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_ea2f9f2601a0fc615fffebe8892cf3ce76c57e33520596672af59d695ffbd4f9->leave($__internal_ea2f9f2601a0fc615fffebe8892cf3ce76c57e33520596672af59d695ffbd4f9_prof);

        
        $__internal_cee687c00558c2ea3720d0468daee3a82556b63d7cbcf7e5c6542cdd142aa658->leave($__internal_cee687c00558c2ea3720d0468daee3a82556b63d7cbcf7e5c6542cdd142aa658_prof);

    }

    // line 50
    public function block_item($context, array $blocks = array())
    {
        $__internal_3a5d49481ed09c270c469b3f6b949ffc6ee678694928eac9a86700423938cee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5d49481ed09c270c469b3f6b949ffc6ee678694928eac9a86700423938cee8->enter($__internal_3a5d49481ed09c270c469b3f6b949ffc6ee678694928eac9a86700423938cee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_f27079bd4f8ea8931e1276e50927eedf416a35bb873dc879218d8ce0da65e55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27079bd4f8ea8931e1276e50927eedf416a35bb873dc879218d8ce0da65e55f->enter($__internal_f27079bd4f8ea8931e1276e50927eedf416a35bb873dc879218d8ce0da65e55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 51
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 52
            echo "        ";
            // line 53
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 54
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 55
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 56
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 57
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 59
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 60
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 62
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 63
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 65
            echo "
        ";
            // line 67
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 68
                echo "            ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 69
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 70
                    echo "            ";
                }
                // line 71
                echo "        ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 72
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 75
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 76
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 77
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 79
            echo "        ";
            // line 80
            echo "        ";
            $context["knp_menu"] = $this;
            // line 81
            echo "        ";
            $context["knp_menu"] = $this;
            // line 82
            echo "        <div";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 88
            echo "            ";
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </div>

    ";
        }
        
        $__internal_f27079bd4f8ea8931e1276e50927eedf416a35bb873dc879218d8ce0da65e55f->leave($__internal_f27079bd4f8ea8931e1276e50927eedf416a35bb873dc879218d8ce0da65e55f_prof);

        
        $__internal_3a5d49481ed09c270c469b3f6b949ffc6ee678694928eac9a86700423938cee8->leave($__internal_3a5d49481ed09c270c469b3f6b949ffc6ee678694928eac9a86700423938cee8_prof);

    }

    // line 98
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_d763234291abfd345f9c3ea6ae10d06024443c0de344d0eb643b8db960d8519e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d763234291abfd345f9c3ea6ae10d06024443c0de344d0eb643b8db960d8519e->enter($__internal_d763234291abfd345f9c3ea6ae10d06024443c0de344d0eb643b8db960d8519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_e7adb582fd6d424dad06b1435269dc74b002c2762ad71358071348e7a1cf3b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7adb582fd6d424dad06b1435269dc74b002c2762ad71358071348e7a1cf3b3f->enter($__internal_e7adb582fd6d424dad06b1435269dc74b002c2762ad71358071348e7a1cf3b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 99
        echo "    ";
        $context["knp_menu"] = $this;
        // line 100
        echo "    <a class=\"btn btn-default btn-block\" style=\"color: black;\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
        
        $__internal_e7adb582fd6d424dad06b1435269dc74b002c2762ad71358071348e7a1cf3b3f->leave($__internal_e7adb582fd6d424dad06b1435269dc74b002c2762ad71358071348e7a1cf3b3f_prof);

        
        $__internal_d763234291abfd345f9c3ea6ae10d06024443c0de344d0eb643b8db960d8519e->leave($__internal_d763234291abfd345f9c3ea6ae10d06024443c0de344d0eb643b8db960d8519e_prof);

    }

    // line 103
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_538dd8bfc2a46f2c69f5839f07a409978abdd592692a17179dcf046dc2d1f0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538dd8bfc2a46f2c69f5839f07a409978abdd592692a17179dcf046dc2d1f0d4->enter($__internal_538dd8bfc2a46f2c69f5839f07a409978abdd592692a17179dcf046dc2d1f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_ba7d7d70cee9524f2ac3a3835dd8096522b01dc4726f3e7919a517d96e782eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7d7d70cee9524f2ac3a3835dd8096522b01dc4726f3e7919a517d96e782eb0->enter($__internal_ba7d7d70cee9524f2ac3a3835dd8096522b01dc4726f3e7919a517d96e782eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 104
        echo "    ";
        $context["knp_menu"] = $this;
        // line 105
        echo "    <span class=\"glyphicon glyphicons-chevron-right\" ";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
        
        $__internal_ba7d7d70cee9524f2ac3a3835dd8096522b01dc4726f3e7919a517d96e782eb0->leave($__internal_ba7d7d70cee9524f2ac3a3835dd8096522b01dc4726f3e7919a517d96e782eb0_prof);

        
        $__internal_538dd8bfc2a46f2c69f5839f07a409978abdd592692a17179dcf046dc2d1f0d4->leave($__internal_538dd8bfc2a46f2c69f5839f07a409978abdd592692a17179dcf046dc2d1f0d4_prof);

    }

    // line 108
    public function block_label($context, array $blocks = array())
    {
        $__internal_eb2a22b556bb5ed46a8769f74e0a0a68db23505134d6153c019f61a981561250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2a22b556bb5ed46a8769f74e0a0a68db23505134d6153c019f61a981561250->enter($__internal_eb2a22b556bb5ed46a8769f74e0a0a68db23505134d6153c019f61a981561250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d2e28326fc249fbc094f2b1a36c3482e089b64ee805137b2b4a5f79bd177dc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e28326fc249fbc094f2b1a36c3482e089b64ee805137b2b4a5f79bd177dc5c->enter($__internal_d2e28326fc249fbc094f2b1a36c3482e089b64ee805137b2b4a5f79bd177dc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 109
        echo "    ";
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 110
            echo "        ";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_d2e28326fc249fbc094f2b1a36c3482e089b64ee805137b2b4a5f79bd177dc5c->leave($__internal_d2e28326fc249fbc094f2b1a36c3482e089b64ee805137b2b4a5f79bd177dc5c_prof);

        
        $__internal_eb2a22b556bb5ed46a8769f74e0a0a68db23505134d6153c019f61a981561250->leave($__internal_eb2a22b556bb5ed46a8769f74e0a0a68db23505134d6153c019f61a981561250_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e83e72be4b07655c68af870cfbb895ab4509a30597c83cda6ae44c467add892a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e83e72be4b07655c68af870cfbb895ab4509a30597c83cda6ae44c467add892a->enter($__internal_e83e72be4b07655c68af870cfbb895ab4509a30597c83cda6ae44c467add892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_fe22806f9d46c3923f2987ebaeb0a001d0b6fbecd74b64be6b3d7fde97976258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fe22806f9d46c3923f2987ebaeb0a001d0b6fbecd74b64be6b3d7fde97976258->enter($__internal_fe22806f9d46c3923f2987ebaeb0a001d0b6fbecd74b64be6b3d7fde97976258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_fe22806f9d46c3923f2987ebaeb0a001d0b6fbecd74b64be6b3d7fde97976258->leave($__internal_fe22806f9d46c3923f2987ebaeb0a001d0b6fbecd74b64be6b3d7fde97976258_prof);

            
            $__internal_e83e72be4b07655c68af870cfbb895ab4509a30597c83cda6ae44c467add892a->leave($__internal_e83e72be4b07655c68af870cfbb895ab4509a30597c83cda6ae44c467add892a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  434 => 6,  432 => 5,  427 => 4,  409 => 3,  395 => 110,  392 => 109,  383 => 108,  368 => 105,  365 => 104,  356 => 103,  339 => 100,  336 => 99,  327 => 98,  311 => 92,  309 => 91,  307 => 90,  305 => 89,  303 => 88,  299 => 86,  295 => 84,  293 => 83,  289 => 82,  286 => 81,  283 => 80,  281 => 79,  278 => 77,  276 => 76,  274 => 75,  271 => 72,  268 => 71,  265 => 70,  263 => 69,  260 => 68,  257 => 67,  254 => 65,  251 => 63,  249 => 62,  246 => 60,  244 => 59,  241 => 57,  239 => 56,  237 => 55,  235 => 54,  233 => 53,  231 => 52,  228 => 51,  219 => 50,  208 => 47,  205 => 46,  203 => 45,  186 => 43,  168 => 42,  165 => 41,  162 => 40,  159 => 39,  157 => 38,  154 => 37,  151 => 36,  148 => 35,  146 => 34,  143 => 33,  140 => 32,  138 => 31,  129 => 30,  116 => 26,  111 => 25,  108 => 24,  105 => 23,  96 => 22,  85 => 19,  82 => 18,  73 => 17,  59 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@KnpMenu/menu.html.twig' %}

{% macro attributes(attributes) %}
    {% for name, value in attributes %}
        {%- if value is not none and value is not same as(false) -%}
            {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}

{% block compressed_root %}
    {% spaceless %}
        {{ block('root') }}
    {% endspaceless %}
{% endblock %}

{% block root %}
    {% set listAttributes = item.childrenAttributes %}
    {{ block('list') -}}
{% endblock %}

{% block list %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
            {% import _self as knp_menu %}
            {{ knp_menu.attributes(listAttributes) }}
            {{ block('children') }}
    {% endif %}
{% endblock %}

{% block children %}
    {# save current variables #}
    {% set currentOptions = options %}
    {% set currentItem = item %}
    {# update the depth for children #}
    {% if options.depth is not none %}
        {% set options = options|merge({'depth': currentOptions.depth - 1}) %}
    {% endif %}
    {# update the matchingDepth for children #}
    {% if options.matchingDepth is not none and options.matchingDepth > 0 %}
        {% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
    {% endif %}
    {% for item in currentItem.children %}
        {{ block('item') }}
    {% endfor %}
    {# restore current variables #}
    {% set item = currentItem %}
    {% set options = currentOptions %}
{% endblock %}

{% block item %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}

        {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
        {% if item.hasChildren and options.depth is not same as(0) %}
            {% if options.branch_class is not empty and item.displayChildren %}
                {%- set classes = classes|merge([options.branch_class]) %}
            {% endif %}
        {% elseif options.leaf_class is not empty %}
            {%- set classes = classes|merge([options.leaf_class]) %}
        {%- endif %}

        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {% import _self as knp_menu %}
        {% import _self as knp_menu %}
        <div{{ knp_menu.attributes(attributes) }}>
            {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
                {{ block('linkElement') }}
            {%- else %}
                {{ block('spanElement') }}
            {%- endif %}
            {# render the list of children#}
            {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
            {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
            {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
            {{ block('list') }}
        </div>

    {% endif %}
{% endblock %}

{% block linkElement %}
    {% import _self as knp_menu %}
    <a class=\"btn btn-default btn-block\" style=\"color: black;\" href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>
{% endblock %}

{% block spanElement %}
    {% import _self as knp_menu %}
    <span class=\"glyphicon glyphicons-chevron-right\" {{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>
{% endblock %}

{% block label %}
    {% if options.allow_safe_labels and item.getExtra('safe_label', false) %}
        {{ item.label|raw }}{% else %}{{ item.label }}{% endif %}
{% endblock %}
", "@GeekBlog/Menu/menu.html.twig", "/home/vlad/Work/ghBlog/src/Geek/BlogBundle/Resources/views/Menu/menu.html.twig");
    }
}
