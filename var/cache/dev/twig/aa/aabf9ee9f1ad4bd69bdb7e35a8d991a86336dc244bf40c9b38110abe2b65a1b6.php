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
        $__internal_7f4259d30c3f3d3cfb6e5ac14d06d00fca9359df07c40aa8e14ec0c222a768c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4259d30c3f3d3cfb6e5ac14d06d00fca9359df07c40aa8e14ec0c222a768c7->enter($__internal_7f4259d30c3f3d3cfb6e5ac14d06d00fca9359df07c40aa8e14ec0c222a768c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $__internal_d8ac2a70e2e5bccee3cdd9d1f63155120ce7a21f4d2fbdab013c6be1af313e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ac2a70e2e5bccee3cdd9d1f63155120ce7a21f4d2fbdab013c6be1af313e32->enter($__internal_d8ac2a70e2e5bccee3cdd9d1f63155120ce7a21f4d2fbdab013c6be1af313e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f4259d30c3f3d3cfb6e5ac14d06d00fca9359df07c40aa8e14ec0c222a768c7->leave($__internal_7f4259d30c3f3d3cfb6e5ac14d06d00fca9359df07c40aa8e14ec0c222a768c7_prof);

        
        $__internal_d8ac2a70e2e5bccee3cdd9d1f63155120ce7a21f4d2fbdab013c6be1af313e32->leave($__internal_d8ac2a70e2e5bccee3cdd9d1f63155120ce7a21f4d2fbdab013c6be1af313e32_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_50561cb9717c815d6589f5053fbf246d651894d19fa91b875290a507ae521fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50561cb9717c815d6589f5053fbf246d651894d19fa91b875290a507ae521fac->enter($__internal_50561cb9717c815d6589f5053fbf246d651894d19fa91b875290a507ae521fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_6999d7c54e0088bf495d271240011e4a1950fe46bed72e7184009f602810c52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6999d7c54e0088bf495d271240011e4a1950fe46bed72e7184009f602810c52b->enter($__internal_6999d7c54e0088bf495d271240011e4a1950fe46bed72e7184009f602810c52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6999d7c54e0088bf495d271240011e4a1950fe46bed72e7184009f602810c52b->leave($__internal_6999d7c54e0088bf495d271240011e4a1950fe46bed72e7184009f602810c52b_prof);

        
        $__internal_50561cb9717c815d6589f5053fbf246d651894d19fa91b875290a507ae521fac->leave($__internal_50561cb9717c815d6589f5053fbf246d651894d19fa91b875290a507ae521fac_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_683bfcb3c7b30d6064490dcc4651da827d99d144dce48164c6942898b762b328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683bfcb3c7b30d6064490dcc4651da827d99d144dce48164c6942898b762b328->enter($__internal_683bfcb3c7b30d6064490dcc4651da827d99d144dce48164c6942898b762b328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_917e36a75b979f10fc176186258c1d742af23dd5990edfb1eaaa17d8a8700ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917e36a75b979f10fc176186258c1d742af23dd5990edfb1eaaa17d8a8700ac1->enter($__internal_917e36a75b979f10fc176186258c1d742af23dd5990edfb1eaaa17d8a8700ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        echo "    ";
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_917e36a75b979f10fc176186258c1d742af23dd5990edfb1eaaa17d8a8700ac1->leave($__internal_917e36a75b979f10fc176186258c1d742af23dd5990edfb1eaaa17d8a8700ac1_prof);

        
        $__internal_683bfcb3c7b30d6064490dcc4651da827d99d144dce48164c6942898b762b328->leave($__internal_683bfcb3c7b30d6064490dcc4651da827d99d144dce48164c6942898b762b328_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_911ed1bda83718e659307fd5463f39ab672d202da1bde12569c8c42ccdc56954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911ed1bda83718e659307fd5463f39ab672d202da1bde12569c8c42ccdc56954->enter($__internal_911ed1bda83718e659307fd5463f39ab672d202da1bde12569c8c42ccdc56954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_0028d14624ddade79fa6f92fdca6feb2dd3f3ac6eb250e02df2a452b9f961935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0028d14624ddade79fa6f92fdca6feb2dd3f3ac6eb250e02df2a452b9f961935->enter($__internal_0028d14624ddade79fa6f92fdca6feb2dd3f3ac6eb250e02df2a452b9f961935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_0028d14624ddade79fa6f92fdca6feb2dd3f3ac6eb250e02df2a452b9f961935->leave($__internal_0028d14624ddade79fa6f92fdca6feb2dd3f3ac6eb250e02df2a452b9f961935_prof);

        
        $__internal_911ed1bda83718e659307fd5463f39ab672d202da1bde12569c8c42ccdc56954->leave($__internal_911ed1bda83718e659307fd5463f39ab672d202da1bde12569c8c42ccdc56954_prof);

    }

    // line 30
    public function block_children($context, array $blocks = array())
    {
        $__internal_eae7a2cb864ed0ae465a6815871f4309701382858b8230a1b6554109adcc919c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae7a2cb864ed0ae465a6815871f4309701382858b8230a1b6554109adcc919c->enter($__internal_eae7a2cb864ed0ae465a6815871f4309701382858b8230a1b6554109adcc919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_809f8cfa9321f9019bb7ea187a1dd99a1c8e48e8bc6b812cd0ecf48e8d792252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809f8cfa9321f9019bb7ea187a1dd99a1c8e48e8bc6b812cd0ecf48e8d792252->enter($__internal_809f8cfa9321f9019bb7ea187a1dd99a1c8e48e8bc6b812cd0ecf48e8d792252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

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
        
        $__internal_809f8cfa9321f9019bb7ea187a1dd99a1c8e48e8bc6b812cd0ecf48e8d792252->leave($__internal_809f8cfa9321f9019bb7ea187a1dd99a1c8e48e8bc6b812cd0ecf48e8d792252_prof);

        
        $__internal_eae7a2cb864ed0ae465a6815871f4309701382858b8230a1b6554109adcc919c->leave($__internal_eae7a2cb864ed0ae465a6815871f4309701382858b8230a1b6554109adcc919c_prof);

    }

    // line 50
    public function block_item($context, array $blocks = array())
    {
        $__internal_38004e034472b142581e029822ad5e0c62ccd49026bddaa098c1b98246394a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38004e034472b142581e029822ad5e0c62ccd49026bddaa098c1b98246394a02->enter($__internal_38004e034472b142581e029822ad5e0c62ccd49026bddaa098c1b98246394a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_494ef83494e510c2c62a66379e55014b8b643e2b9bb587b678c81b403a21b964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494ef83494e510c2c62a66379e55014b8b643e2b9bb587b678c81b403a21b964->enter($__internal_494ef83494e510c2c62a66379e55014b8b643e2b9bb587b678c81b403a21b964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_494ef83494e510c2c62a66379e55014b8b643e2b9bb587b678c81b403a21b964->leave($__internal_494ef83494e510c2c62a66379e55014b8b643e2b9bb587b678c81b403a21b964_prof);

        
        $__internal_38004e034472b142581e029822ad5e0c62ccd49026bddaa098c1b98246394a02->leave($__internal_38004e034472b142581e029822ad5e0c62ccd49026bddaa098c1b98246394a02_prof);

    }

    // line 98
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_521d9cce5dc2d65406ccc4c23a3881e6c266a6a995a7e538c5de87fb09fc29a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521d9cce5dc2d65406ccc4c23a3881e6c266a6a995a7e538c5de87fb09fc29a1->enter($__internal_521d9cce5dc2d65406ccc4c23a3881e6c266a6a995a7e538c5de87fb09fc29a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_8bf57aaf1bf83c9069c69cdead6f5049b5262c5684736e78044a1e4def3f3692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf57aaf1bf83c9069c69cdead6f5049b5262c5684736e78044a1e4def3f3692->enter($__internal_8bf57aaf1bf83c9069c69cdead6f5049b5262c5684736e78044a1e4def3f3692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_8bf57aaf1bf83c9069c69cdead6f5049b5262c5684736e78044a1e4def3f3692->leave($__internal_8bf57aaf1bf83c9069c69cdead6f5049b5262c5684736e78044a1e4def3f3692_prof);

        
        $__internal_521d9cce5dc2d65406ccc4c23a3881e6c266a6a995a7e538c5de87fb09fc29a1->leave($__internal_521d9cce5dc2d65406ccc4c23a3881e6c266a6a995a7e538c5de87fb09fc29a1_prof);

    }

    // line 103
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_83ac868a61c61ace4c8619c6205b006887e5224d6b3ffc86ec809baaa4e5b8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ac868a61c61ace4c8619c6205b006887e5224d6b3ffc86ec809baaa4e5b8c4->enter($__internal_83ac868a61c61ace4c8619c6205b006887e5224d6b3ffc86ec809baaa4e5b8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_ac021fb03b0b41e588d4d955267e19cc95ed3bb3a435391d048f3d6486a1c91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac021fb03b0b41e588d4d955267e19cc95ed3bb3a435391d048f3d6486a1c91c->enter($__internal_ac021fb03b0b41e588d4d955267e19cc95ed3bb3a435391d048f3d6486a1c91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_ac021fb03b0b41e588d4d955267e19cc95ed3bb3a435391d048f3d6486a1c91c->leave($__internal_ac021fb03b0b41e588d4d955267e19cc95ed3bb3a435391d048f3d6486a1c91c_prof);

        
        $__internal_83ac868a61c61ace4c8619c6205b006887e5224d6b3ffc86ec809baaa4e5b8c4->leave($__internal_83ac868a61c61ace4c8619c6205b006887e5224d6b3ffc86ec809baaa4e5b8c4_prof);

    }

    // line 108
    public function block_label($context, array $blocks = array())
    {
        $__internal_c0351382ca7458ed38087c00d090d939b400b0f946adb3ded2a243a89bab85af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0351382ca7458ed38087c00d090d939b400b0f946adb3ded2a243a89bab85af->enter($__internal_c0351382ca7458ed38087c00d090d939b400b0f946adb3ded2a243a89bab85af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_051eb4569a2c1d93df4b99ec5a277c8e4540deb578ea5cbdfa3984df58511c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051eb4569a2c1d93df4b99ec5a277c8e4540deb578ea5cbdfa3984df58511c68->enter($__internal_051eb4569a2c1d93df4b99ec5a277c8e4540deb578ea5cbdfa3984df58511c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 109
        echo "    ";
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 110
            echo "        ";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_051eb4569a2c1d93df4b99ec5a277c8e4540deb578ea5cbdfa3984df58511c68->leave($__internal_051eb4569a2c1d93df4b99ec5a277c8e4540deb578ea5cbdfa3984df58511c68_prof);

        
        $__internal_c0351382ca7458ed38087c00d090d939b400b0f946adb3ded2a243a89bab85af->leave($__internal_c0351382ca7458ed38087c00d090d939b400b0f946adb3ded2a243a89bab85af_prof);

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
            $__internal_22cae4a4c9cf0898afc07c097c3204fb19bbe196697277230178ee64bba7b892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_22cae4a4c9cf0898afc07c097c3204fb19bbe196697277230178ee64bba7b892->enter($__internal_22cae4a4c9cf0898afc07c097c3204fb19bbe196697277230178ee64bba7b892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_a3a0ff8578814751c4a760ae2305bb63bfa77fb9567f2ac6997ac94d5d64edfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a3a0ff8578814751c4a760ae2305bb63bfa77fb9567f2ac6997ac94d5d64edfc->enter($__internal_a3a0ff8578814751c4a760ae2305bb63bfa77fb9567f2ac6997ac94d5d64edfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_a3a0ff8578814751c4a760ae2305bb63bfa77fb9567f2ac6997ac94d5d64edfc->leave($__internal_a3a0ff8578814751c4a760ae2305bb63bfa77fb9567f2ac6997ac94d5d64edfc_prof);

            
            $__internal_22cae4a4c9cf0898afc07c097c3204fb19bbe196697277230178ee64bba7b892->leave($__internal_22cae4a4c9cf0898afc07c097c3204fb19bbe196697277230178ee64bba7b892_prof);

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
