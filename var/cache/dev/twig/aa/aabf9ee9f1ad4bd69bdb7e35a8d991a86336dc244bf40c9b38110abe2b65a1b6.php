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
        $__internal_38394463018b986e54ea45877312facfd1688dd6e008b72f8f366eba0162e04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38394463018b986e54ea45877312facfd1688dd6e008b72f8f366eba0162e04b->enter($__internal_38394463018b986e54ea45877312facfd1688dd6e008b72f8f366eba0162e04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $__internal_2af20fde491dc67255b3d9e21865ed06409aa2d04ad504845ed95cf5c757e13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af20fde491dc67255b3d9e21865ed06409aa2d04ad504845ed95cf5c757e13b->enter($__internal_2af20fde491dc67255b3d9e21865ed06409aa2d04ad504845ed95cf5c757e13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38394463018b986e54ea45877312facfd1688dd6e008b72f8f366eba0162e04b->leave($__internal_38394463018b986e54ea45877312facfd1688dd6e008b72f8f366eba0162e04b_prof);

        
        $__internal_2af20fde491dc67255b3d9e21865ed06409aa2d04ad504845ed95cf5c757e13b->leave($__internal_2af20fde491dc67255b3d9e21865ed06409aa2d04ad504845ed95cf5c757e13b_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_7c9fd556ac2fd02c6e1224b31bbf0a67a5fe0fdb302c469add42fb85b8b7c6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9fd556ac2fd02c6e1224b31bbf0a67a5fe0fdb302c469add42fb85b8b7c6f4->enter($__internal_7c9fd556ac2fd02c6e1224b31bbf0a67a5fe0fdb302c469add42fb85b8b7c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_79a05b9c041275bdc37b9e0ba62ee886c9f3bef1cd5dd1c5b81d220de8dd1b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a05b9c041275bdc37b9e0ba62ee886c9f3bef1cd5dd1c5b81d220de8dd1b58->enter($__internal_79a05b9c041275bdc37b9e0ba62ee886c9f3bef1cd5dd1c5b81d220de8dd1b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_79a05b9c041275bdc37b9e0ba62ee886c9f3bef1cd5dd1c5b81d220de8dd1b58->leave($__internal_79a05b9c041275bdc37b9e0ba62ee886c9f3bef1cd5dd1c5b81d220de8dd1b58_prof);

        
        $__internal_7c9fd556ac2fd02c6e1224b31bbf0a67a5fe0fdb302c469add42fb85b8b7c6f4->leave($__internal_7c9fd556ac2fd02c6e1224b31bbf0a67a5fe0fdb302c469add42fb85b8b7c6f4_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_c1d9305beadcec4bf34c2996e27822ea7f729128621ee9b156beecb4b0bca82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d9305beadcec4bf34c2996e27822ea7f729128621ee9b156beecb4b0bca82a->enter($__internal_c1d9305beadcec4bf34c2996e27822ea7f729128621ee9b156beecb4b0bca82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_856cf692d6de83e081873cc7469b2bad02e169efeaf526233ded807f493d507e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856cf692d6de83e081873cc7469b2bad02e169efeaf526233ded807f493d507e->enter($__internal_856cf692d6de83e081873cc7469b2bad02e169efeaf526233ded807f493d507e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        echo "    ";
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_856cf692d6de83e081873cc7469b2bad02e169efeaf526233ded807f493d507e->leave($__internal_856cf692d6de83e081873cc7469b2bad02e169efeaf526233ded807f493d507e_prof);

        
        $__internal_c1d9305beadcec4bf34c2996e27822ea7f729128621ee9b156beecb4b0bca82a->leave($__internal_c1d9305beadcec4bf34c2996e27822ea7f729128621ee9b156beecb4b0bca82a_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_a19fdfec5555c27e7371f59a7e7da02d1d75c376537efd129edec089493d6bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19fdfec5555c27e7371f59a7e7da02d1d75c376537efd129edec089493d6bb0->enter($__internal_a19fdfec5555c27e7371f59a7e7da02d1d75c376537efd129edec089493d6bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_41a276f201ecf079f38049f4c220eb61028cf39742dde944c6447f8f1bc0e254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a276f201ecf079f38049f4c220eb61028cf39742dde944c6447f8f1bc0e254->enter($__internal_41a276f201ecf079f38049f4c220eb61028cf39742dde944c6447f8f1bc0e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_41a276f201ecf079f38049f4c220eb61028cf39742dde944c6447f8f1bc0e254->leave($__internal_41a276f201ecf079f38049f4c220eb61028cf39742dde944c6447f8f1bc0e254_prof);

        
        $__internal_a19fdfec5555c27e7371f59a7e7da02d1d75c376537efd129edec089493d6bb0->leave($__internal_a19fdfec5555c27e7371f59a7e7da02d1d75c376537efd129edec089493d6bb0_prof);

    }

    // line 30
    public function block_children($context, array $blocks = array())
    {
        $__internal_f5aced24f228f84e59efc93acbaff06c675cad8f2376852328db8c2899750303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5aced24f228f84e59efc93acbaff06c675cad8f2376852328db8c2899750303->enter($__internal_f5aced24f228f84e59efc93acbaff06c675cad8f2376852328db8c2899750303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_56fec34d488dfc13d405282033288fb97b18b1e87b372ba3d42b24031fed6d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fec34d488dfc13d405282033288fb97b18b1e87b372ba3d42b24031fed6d42->enter($__internal_56fec34d488dfc13d405282033288fb97b18b1e87b372ba3d42b24031fed6d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

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
        
        $__internal_56fec34d488dfc13d405282033288fb97b18b1e87b372ba3d42b24031fed6d42->leave($__internal_56fec34d488dfc13d405282033288fb97b18b1e87b372ba3d42b24031fed6d42_prof);

        
        $__internal_f5aced24f228f84e59efc93acbaff06c675cad8f2376852328db8c2899750303->leave($__internal_f5aced24f228f84e59efc93acbaff06c675cad8f2376852328db8c2899750303_prof);

    }

    // line 50
    public function block_item($context, array $blocks = array())
    {
        $__internal_be865ea9464a9da28b52dc7ab8e485c12709a52ac598c7c98562693203707abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be865ea9464a9da28b52dc7ab8e485c12709a52ac598c7c98562693203707abd->enter($__internal_be865ea9464a9da28b52dc7ab8e485c12709a52ac598c7c98562693203707abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_acc448960696cdfed8a009fa1223541438ce038d8bea993c8958cb6d82b6ad22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc448960696cdfed8a009fa1223541438ce038d8bea993c8958cb6d82b6ad22->enter($__internal_acc448960696cdfed8a009fa1223541438ce038d8bea993c8958cb6d82b6ad22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_acc448960696cdfed8a009fa1223541438ce038d8bea993c8958cb6d82b6ad22->leave($__internal_acc448960696cdfed8a009fa1223541438ce038d8bea993c8958cb6d82b6ad22_prof);

        
        $__internal_be865ea9464a9da28b52dc7ab8e485c12709a52ac598c7c98562693203707abd->leave($__internal_be865ea9464a9da28b52dc7ab8e485c12709a52ac598c7c98562693203707abd_prof);

    }

    // line 98
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_c326e7435a3f37c3a1cc55fb675a26f77422705685164a4cb1da91106d734091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c326e7435a3f37c3a1cc55fb675a26f77422705685164a4cb1da91106d734091->enter($__internal_c326e7435a3f37c3a1cc55fb675a26f77422705685164a4cb1da91106d734091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6c1f8d58f2c0f5ba544d9db7f6cf3c53d0867d2e5768b5e2b3540dbea0760f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1f8d58f2c0f5ba544d9db7f6cf3c53d0867d2e5768b5e2b3540dbea0760f17->enter($__internal_6c1f8d58f2c0f5ba544d9db7f6cf3c53d0867d2e5768b5e2b3540dbea0760f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_6c1f8d58f2c0f5ba544d9db7f6cf3c53d0867d2e5768b5e2b3540dbea0760f17->leave($__internal_6c1f8d58f2c0f5ba544d9db7f6cf3c53d0867d2e5768b5e2b3540dbea0760f17_prof);

        
        $__internal_c326e7435a3f37c3a1cc55fb675a26f77422705685164a4cb1da91106d734091->leave($__internal_c326e7435a3f37c3a1cc55fb675a26f77422705685164a4cb1da91106d734091_prof);

    }

    // line 103
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_96895dc4ea584a39310c7f3bffe5244817a760c92c897d729ee223d19182289a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96895dc4ea584a39310c7f3bffe5244817a760c92c897d729ee223d19182289a->enter($__internal_96895dc4ea584a39310c7f3bffe5244817a760c92c897d729ee223d19182289a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_937461990e581023f18ac8989fdb693f54c0de1fe0afe47c3eb2cbd31093121b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937461990e581023f18ac8989fdb693f54c0de1fe0afe47c3eb2cbd31093121b->enter($__internal_937461990e581023f18ac8989fdb693f54c0de1fe0afe47c3eb2cbd31093121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_937461990e581023f18ac8989fdb693f54c0de1fe0afe47c3eb2cbd31093121b->leave($__internal_937461990e581023f18ac8989fdb693f54c0de1fe0afe47c3eb2cbd31093121b_prof);

        
        $__internal_96895dc4ea584a39310c7f3bffe5244817a760c92c897d729ee223d19182289a->leave($__internal_96895dc4ea584a39310c7f3bffe5244817a760c92c897d729ee223d19182289a_prof);

    }

    // line 108
    public function block_label($context, array $blocks = array())
    {
        $__internal_0f2a35b0d38be10cd71630c921457267bd53c00660fae70636245e1f16f4b16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2a35b0d38be10cd71630c921457267bd53c00660fae70636245e1f16f4b16b->enter($__internal_0f2a35b0d38be10cd71630c921457267bd53c00660fae70636245e1f16f4b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_cf2100dae503e1e7c457b5fc91347b3e3abef6264b6b327577cae099a5019c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2100dae503e1e7c457b5fc91347b3e3abef6264b6b327577cae099a5019c4e->enter($__internal_cf2100dae503e1e7c457b5fc91347b3e3abef6264b6b327577cae099a5019c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 109
        echo "    ";
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 110
            echo "        ";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_cf2100dae503e1e7c457b5fc91347b3e3abef6264b6b327577cae099a5019c4e->leave($__internal_cf2100dae503e1e7c457b5fc91347b3e3abef6264b6b327577cae099a5019c4e_prof);

        
        $__internal_0f2a35b0d38be10cd71630c921457267bd53c00660fae70636245e1f16f4b16b->leave($__internal_0f2a35b0d38be10cd71630c921457267bd53c00660fae70636245e1f16f4b16b_prof);

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
            $__internal_2adc8d7af34740bf5d3947949f5e3a1f58dca4f168c7261bce5ba2d121156c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2adc8d7af34740bf5d3947949f5e3a1f58dca4f168c7261bce5ba2d121156c4f->enter($__internal_2adc8d7af34740bf5d3947949f5e3a1f58dca4f168c7261bce5ba2d121156c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_f02afa43d637039eefb124ccb6348002a4496e59465d527260d50a85f9c6edb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f02afa43d637039eefb124ccb6348002a4496e59465d527260d50a85f9c6edb4->enter($__internal_f02afa43d637039eefb124ccb6348002a4496e59465d527260d50a85f9c6edb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_f02afa43d637039eefb124ccb6348002a4496e59465d527260d50a85f9c6edb4->leave($__internal_f02afa43d637039eefb124ccb6348002a4496e59465d527260d50a85f9c6edb4_prof);

            
            $__internal_2adc8d7af34740bf5d3947949f5e3a1f58dca4f168c7261bce5ba2d121156c4f->leave($__internal_2adc8d7af34740bf5d3947949f5e3a1f58dca4f168c7261bce5ba2d121156c4f_prof);

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
