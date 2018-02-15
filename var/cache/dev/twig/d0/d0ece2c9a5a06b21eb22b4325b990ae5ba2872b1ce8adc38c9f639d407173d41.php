<?php

/* knp_menu.html.twig */
class __TwigTemplate_734a81e52eadd38b3b6263fc93047799b758edee091c15c78f2d21bb3d342a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
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
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa26c6f1535737cfb87adae36a62a8a18d2f3f9b91001fb23ecc415f74548b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa26c6f1535737cfb87adae36a62a8a18d2f3f9b91001fb23ecc415f74548b1b->enter($__internal_aa26c6f1535737cfb87adae36a62a8a18d2f3f9b91001fb23ecc415f74548b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_5e9a2fe93822e152ff10bd41f7504d84543164ed12b348ca2ae1caa8314c3f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9a2fe93822e152ff10bd41f7504d84543164ed12b348ca2ae1caa8314c3f4f->enter($__internal_5e9a2fe93822e152ff10bd41f7504d84543164ed12b348ca2ae1caa8314c3f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa26c6f1535737cfb87adae36a62a8a18d2f3f9b91001fb23ecc415f74548b1b->leave($__internal_aa26c6f1535737cfb87adae36a62a8a18d2f3f9b91001fb23ecc415f74548b1b_prof);

        
        $__internal_5e9a2fe93822e152ff10bd41f7504d84543164ed12b348ca2ae1caa8314c3f4f->leave($__internal_5e9a2fe93822e152ff10bd41f7504d84543164ed12b348ca2ae1caa8314c3f4f_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_676663efe6390c9548419dd325bd8f813ccaccf57458fdb23644750a7526ca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676663efe6390c9548419dd325bd8f813ccaccf57458fdb23644750a7526ca93->enter($__internal_676663efe6390c9548419dd325bd8f813ccaccf57458fdb23644750a7526ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_1725e9be7ee7bba65f6d0c9f10aa32ff7a6efe74eacc0cd2aee4a08a40c328f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1725e9be7ee7bba65f6d0c9f10aa32ff7a6efe74eacc0cd2aee4a08a40c328f7->enter($__internal_1725e9be7ee7bba65f6d0c9f10aa32ff7a6efe74eacc0cd2aee4a08a40c328f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1725e9be7ee7bba65f6d0c9f10aa32ff7a6efe74eacc0cd2aee4a08a40c328f7->leave($__internal_1725e9be7ee7bba65f6d0c9f10aa32ff7a6efe74eacc0cd2aee4a08a40c328f7_prof);

        
        $__internal_676663efe6390c9548419dd325bd8f813ccaccf57458fdb23644750a7526ca93->leave($__internal_676663efe6390c9548419dd325bd8f813ccaccf57458fdb23644750a7526ca93_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_cc49f610e1387faaa86b2c684dd281dbfdcf3c8f49c6ea94ca9980312015ad05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc49f610e1387faaa86b2c684dd281dbfdcf3c8f49c6ea94ca9980312015ad05->enter($__internal_cc49f610e1387faaa86b2c684dd281dbfdcf3c8f49c6ea94ca9980312015ad05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_34ccf50acca77076c3453908e29b07f7044dd9334293c544bc53cc38874f2c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ccf50acca77076c3453908e29b07f7044dd9334293c544bc53cc38874f2c95->enter($__internal_34ccf50acca77076c3453908e29b07f7044dd9334293c544bc53cc38874f2c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_34ccf50acca77076c3453908e29b07f7044dd9334293c544bc53cc38874f2c95->leave($__internal_34ccf50acca77076c3453908e29b07f7044dd9334293c544bc53cc38874f2c95_prof);

        
        $__internal_cc49f610e1387faaa86b2c684dd281dbfdcf3c8f49c6ea94ca9980312015ad05->leave($__internal_cc49f610e1387faaa86b2c684dd281dbfdcf3c8f49c6ea94ca9980312015ad05_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_72ece0091fa74266d4c3bc94c34d9d1fa6b9b166a490521fdfc7d20e538219a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ece0091fa74266d4c3bc94c34d9d1fa6b9b166a490521fdfc7d20e538219a8->enter($__internal_72ece0091fa74266d4c3bc94c34d9d1fa6b9b166a490521fdfc7d20e538219a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_c7629bcedd7e2df8201e570a9b8164df4959a781046de70d776fda4a6e3cd232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7629bcedd7e2df8201e570a9b8164df4959a781046de70d776fda4a6e3cd232->enter($__internal_c7629bcedd7e2df8201e570a9b8164df4959a781046de70d776fda4a6e3cd232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_c7629bcedd7e2df8201e570a9b8164df4959a781046de70d776fda4a6e3cd232->leave($__internal_c7629bcedd7e2df8201e570a9b8164df4959a781046de70d776fda4a6e3cd232_prof);

        
        $__internal_72ece0091fa74266d4c3bc94c34d9d1fa6b9b166a490521fdfc7d20e538219a8->leave($__internal_72ece0091fa74266d4c3bc94c34d9d1fa6b9b166a490521fdfc7d20e538219a8_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_c65108961f7bacd1c68a17a41782c028c999fc810c2c26a6ecb12f720f17c538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65108961f7bacd1c68a17a41782c028c999fc810c2c26a6ecb12f720f17c538->enter($__internal_c65108961f7bacd1c68a17a41782c028c999fc810c2c26a6ecb12f720f17c538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_a18da001043ce02497179686d066f1d2f27e0cec27db223d6cb4dcbba7e3e337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18da001043ce02497179686d066f1d2f27e0cec27db223d6cb4dcbba7e3e337->enter($__internal_a18da001043ce02497179686d066f1d2f27e0cec27db223d6cb4dcbba7e3e337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
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
            // line 44
            echo "    ";
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
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_a18da001043ce02497179686d066f1d2f27e0cec27db223d6cb4dcbba7e3e337->leave($__internal_a18da001043ce02497179686d066f1d2f27e0cec27db223d6cb4dcbba7e3e337_prof);

        
        $__internal_c65108961f7bacd1c68a17a41782c028c999fc810c2c26a6ecb12f720f17c538->leave($__internal_c65108961f7bacd1c68a17a41782c028c999fc810c2c26a6ecb12f720f17c538_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_f6154bce24d7d485b2dffabedf0ef871fcde2ea423c2e7d69f9b755d3f57b20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6154bce24d7d485b2dffabedf0ef871fcde2ea423c2e7d69f9b755d3f57b20b->enter($__internal_f6154bce24d7d485b2dffabedf0ef871fcde2ea423c2e7d69f9b755d3f57b20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_18cad88e389e8dcc12e2f46c97d3d19ab67e702d8213e5b4cbdc37f2753b3ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cad88e389e8dcc12e2f46c97d3d19ab67e702d8213e5b4cbdc37f2753b3ad5->enter($__internal_18cad88e389e8dcc12e2f46c97d3d19ab67e702d8213e5b4cbdc37f2753b3ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_18cad88e389e8dcc12e2f46c97d3d19ab67e702d8213e5b4cbdc37f2753b3ad5->leave($__internal_18cad88e389e8dcc12e2f46c97d3d19ab67e702d8213e5b4cbdc37f2753b3ad5_prof);

        
        $__internal_f6154bce24d7d485b2dffabedf0ef871fcde2ea423c2e7d69f9b755d3f57b20b->leave($__internal_f6154bce24d7d485b2dffabedf0ef871fcde2ea423c2e7d69f9b755d3f57b20b_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_8f8f4d5ccc756cb8be3528c18109a97da254a1fc36ca5de2b1388bf5f8df632c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8f4d5ccc756cb8be3528c18109a97da254a1fc36ca5de2b1388bf5f8df632c->enter($__internal_8f8f4d5ccc756cb8be3528c18109a97da254a1fc36ca5de2b1388bf5f8df632c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_147bdb4ae37a6a7bd18a63d3e4a7d0782e75af15bd5fbb5a4532cae32ebbf720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147bdb4ae37a6a7bd18a63d3e4a7d0782e75af15bd5fbb5a4532cae32ebbf720->enter($__internal_147bdb4ae37a6a7bd18a63d3e4a7d0782e75af15bd5fbb5a4532cae32ebbf720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_147bdb4ae37a6a7bd18a63d3e4a7d0782e75af15bd5fbb5a4532cae32ebbf720->leave($__internal_147bdb4ae37a6a7bd18a63d3e4a7d0782e75af15bd5fbb5a4532cae32ebbf720_prof);

        
        $__internal_8f8f4d5ccc756cb8be3528c18109a97da254a1fc36ca5de2b1388bf5f8df632c->leave($__internal_8f8f4d5ccc756cb8be3528c18109a97da254a1fc36ca5de2b1388bf5f8df632c_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_2044388921a551bd8089dce1c2036d519f94662346735b9c9f89dc533b51e9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2044388921a551bd8089dce1c2036d519f94662346735b9c9f89dc533b51e9c6->enter($__internal_2044388921a551bd8089dce1c2036d519f94662346735b9c9f89dc533b51e9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_660a042dffac29aed86ce5dda2ca662b3d69a460a66395c1153337c13dd84660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660a042dffac29aed86ce5dda2ca662b3d69a460a66395c1153337c13dd84660->enter($__internal_660a042dffac29aed86ce5dda2ca662b3d69a460a66395c1153337c13dd84660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_660a042dffac29aed86ce5dda2ca662b3d69a460a66395c1153337c13dd84660->leave($__internal_660a042dffac29aed86ce5dda2ca662b3d69a460a66395c1153337c13dd84660_prof);

        
        $__internal_2044388921a551bd8089dce1c2036d519f94662346735b9c9f89dc533b51e9c6->leave($__internal_2044388921a551bd8089dce1c2036d519f94662346735b9c9f89dc533b51e9c6_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_8c560e4e765f332991e393606d8f96eb7e36c4c19f035203a50779b0412916f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c560e4e765f332991e393606d8f96eb7e36c4c19f035203a50779b0412916f5->enter($__internal_8c560e4e765f332991e393606d8f96eb7e36c4c19f035203a50779b0412916f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_29332b5740ae4eeca60a29f04f58252138e06339be6b633d07e9aad0e2ef20e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29332b5740ae4eeca60a29f04f58252138e06339be6b633d07e9aad0e2ef20e5->enter($__internal_29332b5740ae4eeca60a29f04f58252138e06339be6b633d07e9aad0e2ef20e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_29332b5740ae4eeca60a29f04f58252138e06339be6b633d07e9aad0e2ef20e5->leave($__internal_29332b5740ae4eeca60a29f04f58252138e06339be6b633d07e9aad0e2ef20e5_prof);

        
        $__internal_8c560e4e765f332991e393606d8f96eb7e36c4c19f035203a50779b0412916f5->leave($__internal_8c560e4e765f332991e393606d8f96eb7e36c4c19f035203a50779b0412916f5_prof);

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
            $__internal_bb453545cfcdd479e1ad1ebe21f6ba02266ed838766e1e29950a3af4bb7a9a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bb453545cfcdd479e1ad1ebe21f6ba02266ed838766e1e29950a3af4bb7a9a36->enter($__internal_bb453545cfcdd479e1ad1ebe21f6ba02266ed838766e1e29950a3af4bb7a9a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_52f16824ac03d6c314d13fa24a757372a511e34244d30d318126e6955ab9b62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_52f16824ac03d6c314d13fa24a757372a511e34244d30d318126e6955ab9b62e->enter($__internal_52f16824ac03d6c314d13fa24a757372a511e34244d30d318126e6955ab9b62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
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
            
            $__internal_52f16824ac03d6c314d13fa24a757372a511e34244d30d318126e6955ab9b62e->leave($__internal_52f16824ac03d6c314d13fa24a757372a511e34244d30d318126e6955ab9b62e_prof);

            
            $__internal_bb453545cfcdd479e1ad1ebe21f6ba02266ed838766e1e29950a3af4bb7a9a36->leave($__internal_bb453545cfcdd479e1ad1ebe21f6ba02266ed838766e1e29950a3af4bb7a9a36_prof);

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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

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
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
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
    <li{{ knp_menu.attributes(attributes) }}>
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
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/home/vlad/Work/ghBlog/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
