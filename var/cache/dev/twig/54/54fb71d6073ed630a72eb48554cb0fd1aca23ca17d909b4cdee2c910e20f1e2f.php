<?php

/* @GeekBlog/Menu/menu.html.twig */
class __TwigTemplate_a45c0cfff07bcf8d6e4235121b9f9bba70f1a0492654016df8cc516772186a1f extends Twig_Template
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
        $__internal_5e65f8d1013634332b6190b05a82adcd37ff3ff7cd96950c2e873c4ac47e464a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e65f8d1013634332b6190b05a82adcd37ff3ff7cd96950c2e873c4ac47e464a->enter($__internal_5e65f8d1013634332b6190b05a82adcd37ff3ff7cd96950c2e873c4ac47e464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $__internal_81ab8aeda3a170459f16db8fde5d9222bc84343ceadf8e7a965a2dc15e67296c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ab8aeda3a170459f16db8fde5d9222bc84343ceadf8e7a965a2dc15e67296c->enter($__internal_81ab8aeda3a170459f16db8fde5d9222bc84343ceadf8e7a965a2dc15e67296c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GeekBlog/Menu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e65f8d1013634332b6190b05a82adcd37ff3ff7cd96950c2e873c4ac47e464a->leave($__internal_5e65f8d1013634332b6190b05a82adcd37ff3ff7cd96950c2e873c4ac47e464a_prof);

        
        $__internal_81ab8aeda3a170459f16db8fde5d9222bc84343ceadf8e7a965a2dc15e67296c->leave($__internal_81ab8aeda3a170459f16db8fde5d9222bc84343ceadf8e7a965a2dc15e67296c_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_1833b9b516b82d4ac62c15da3c89e3c6c6edb2b1b656fda689d1bc9f2dc3cbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1833b9b516b82d4ac62c15da3c89e3c6c6edb2b1b656fda689d1bc9f2dc3cbd0->enter($__internal_1833b9b516b82d4ac62c15da3c89e3c6c6edb2b1b656fda689d1bc9f2dc3cbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_1007ea3a8c52ee9840eebc46b9ebcbf4b74a22641eec66079c8064ec48a23b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1007ea3a8c52ee9840eebc46b9ebcbf4b74a22641eec66079c8064ec48a23b24->enter($__internal_1007ea3a8c52ee9840eebc46b9ebcbf4b74a22641eec66079c8064ec48a23b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1007ea3a8c52ee9840eebc46b9ebcbf4b74a22641eec66079c8064ec48a23b24->leave($__internal_1007ea3a8c52ee9840eebc46b9ebcbf4b74a22641eec66079c8064ec48a23b24_prof);

        
        $__internal_1833b9b516b82d4ac62c15da3c89e3c6c6edb2b1b656fda689d1bc9f2dc3cbd0->leave($__internal_1833b9b516b82d4ac62c15da3c89e3c6c6edb2b1b656fda689d1bc9f2dc3cbd0_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_239d9be9f25db575cbbbbe5a607dd0726a69752d9af55ae2cffda6d700d6afda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239d9be9f25db575cbbbbe5a607dd0726a69752d9af55ae2cffda6d700d6afda->enter($__internal_239d9be9f25db575cbbbbe5a607dd0726a69752d9af55ae2cffda6d700d6afda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_fd0cd63922d72a4362e7ac0ae5634d229b6dc22654bf4587a0e9541caf953022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0cd63922d72a4362e7ac0ae5634d229b6dc22654bf4587a0e9541caf953022->enter($__internal_fd0cd63922d72a4362e7ac0ae5634d229b6dc22654bf4587a0e9541caf953022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        echo "    ";
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_fd0cd63922d72a4362e7ac0ae5634d229b6dc22654bf4587a0e9541caf953022->leave($__internal_fd0cd63922d72a4362e7ac0ae5634d229b6dc22654bf4587a0e9541caf953022_prof);

        
        $__internal_239d9be9f25db575cbbbbe5a607dd0726a69752d9af55ae2cffda6d700d6afda->leave($__internal_239d9be9f25db575cbbbbe5a607dd0726a69752d9af55ae2cffda6d700d6afda_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_93bcd7dbf68cba96f7b2c08ea6b7eb0dd942e914fb666f67c99a993714c10241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bcd7dbf68cba96f7b2c08ea6b7eb0dd942e914fb666f67c99a993714c10241->enter($__internal_93bcd7dbf68cba96f7b2c08ea6b7eb0dd942e914fb666f67c99a993714c10241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_49d6ebddd38210f730c956dec9c1f2dd43cba3db79b3790ba34dd8b9c7797422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d6ebddd38210f730c956dec9c1f2dd43cba3db79b3790ba34dd8b9c7797422->enter($__internal_49d6ebddd38210f730c956dec9c1f2dd43cba3db79b3790ba34dd8b9c7797422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "        <div class=\"btn-group-lg\">
            ";
            // line 25
            $context["knp_menu"] = $this;
            // line 26
            echo "            ";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo "
            ";
            // line 27
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_49d6ebddd38210f730c956dec9c1f2dd43cba3db79b3790ba34dd8b9c7797422->leave($__internal_49d6ebddd38210f730c956dec9c1f2dd43cba3db79b3790ba34dd8b9c7797422_prof);

        
        $__internal_93bcd7dbf68cba96f7b2c08ea6b7eb0dd942e914fb666f67c99a993714c10241->leave($__internal_93bcd7dbf68cba96f7b2c08ea6b7eb0dd942e914fb666f67c99a993714c10241_prof);

    }

    // line 32
    public function block_children($context, array $blocks = array())
    {
        $__internal_0b94d5e80c3e6468cc24274a83e188b069b4d2b9617acc41e73880a7410b0181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b94d5e80c3e6468cc24274a83e188b069b4d2b9617acc41e73880a7410b0181->enter($__internal_0b94d5e80c3e6468cc24274a83e188b069b4d2b9617acc41e73880a7410b0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_bc1fb94d78c489971bbb964d3e87c8a0b3ea6ccbd21fd2c634e0f0e39c764606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1fb94d78c489971bbb964d3e87c8a0b3ea6ccbd21fd2c634e0f0e39c764606->enter($__internal_bc1fb94d78c489971bbb964d3e87c8a0b3ea6ccbd21fd2c634e0f0e39c764606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        echo "    ";
        // line 34
        echo "    ";
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 35
        echo "    ";
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 38
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 42
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
            // line 43
            echo "    ";
        }
        // line 44
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
            // line 45
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
        // line 47
        echo "    ";
        // line 48
        echo "    ";
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 49
        echo "    ";
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_bc1fb94d78c489971bbb964d3e87c8a0b3ea6ccbd21fd2c634e0f0e39c764606->leave($__internal_bc1fb94d78c489971bbb964d3e87c8a0b3ea6ccbd21fd2c634e0f0e39c764606_prof);

        
        $__internal_0b94d5e80c3e6468cc24274a83e188b069b4d2b9617acc41e73880a7410b0181->leave($__internal_0b94d5e80c3e6468cc24274a83e188b069b4d2b9617acc41e73880a7410b0181_prof);

    }

    // line 52
    public function block_item($context, array $blocks = array())
    {
        $__internal_cacd7e947507bbe232a2c0c775815233d0e81eb82f416ce923706d09c8d73cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacd7e947507bbe232a2c0c775815233d0e81eb82f416ce923706d09c8d73cd0->enter($__internal_cacd7e947507bbe232a2c0c775815233d0e81eb82f416ce923706d09c8d73cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_0d6f8f45736086bbba06c4bf25c9a6a5bcb86e3417e4848be555b33011fe4815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6f8f45736086bbba06c4bf25c9a6a5bcb86e3417e4848be555b33011fe4815->enter($__internal_0d6f8f45736086bbba06c4bf25c9a6a5bcb86e3417e4848be555b33011fe4815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 53
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            echo "        ";
            // line 55
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 56
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 57
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 58
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 59
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 61
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 62
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 64
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 65
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 67
            echo "
        ";
            // line 69
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 70
                echo "            ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 71
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 72
                    echo "            ";
                }
                // line 73
                echo "        ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 74
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 77
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 78
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 79
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "        ";
            // line 82
            echo "        ";
            $context["knp_menu"] = $this;
            // line 83
            echo "        ";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            // line 84
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 85
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 87
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            echo "             render the list of children";
            // line 90
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 91
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 92
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 93
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_0d6f8f45736086bbba06c4bf25c9a6a5bcb86e3417e4848be555b33011fe4815->leave($__internal_0d6f8f45736086bbba06c4bf25c9a6a5bcb86e3417e4848be555b33011fe4815_prof);

        
        $__internal_cacd7e947507bbe232a2c0c775815233d0e81eb82f416ce923706d09c8d73cd0->leave($__internal_cacd7e947507bbe232a2c0c775815233d0e81eb82f416ce923706d09c8d73cd0_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_450ce449850a69daebb20fa9f620d3080844080ce2830a45a373f066e2415922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450ce449850a69daebb20fa9f620d3080844080ce2830a45a373f066e2415922->enter($__internal_450ce449850a69daebb20fa9f620d3080844080ce2830a45a373f066e2415922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_890902b7181b48ac27363b05cac1dfec4ae5770c6cc02a49eac4d17d5d7271d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890902b7181b48ac27363b05cac1dfec4ae5770c6cc02a49eac4d17d5d7271d5->enter($__internal_890902b7181b48ac27363b05cac1dfec4ae5770c6cc02a49eac4d17d5d7271d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 98
        echo "    ";
        $context["knp_menu"] = $this;
        // line 99
        echo "    <a class=\"btn btn-default\" style=\"color: black;\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
        
        $__internal_890902b7181b48ac27363b05cac1dfec4ae5770c6cc02a49eac4d17d5d7271d5->leave($__internal_890902b7181b48ac27363b05cac1dfec4ae5770c6cc02a49eac4d17d5d7271d5_prof);

        
        $__internal_450ce449850a69daebb20fa9f620d3080844080ce2830a45a373f066e2415922->leave($__internal_450ce449850a69daebb20fa9f620d3080844080ce2830a45a373f066e2415922_prof);

    }

    // line 102
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_94c754be9a62e7b89523f763ead4dce3ff1c819f95bf0042a6a3bf1e3277f11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c754be9a62e7b89523f763ead4dce3ff1c819f95bf0042a6a3bf1e3277f11b->enter($__internal_94c754be9a62e7b89523f763ead4dce3ff1c819f95bf0042a6a3bf1e3277f11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_0a14349628d96903201a77f8e78e3c7bb16e0a60981cc4d57daa1975d45256e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a14349628d96903201a77f8e78e3c7bb16e0a60981cc4d57daa1975d45256e8->enter($__internal_0a14349628d96903201a77f8e78e3c7bb16e0a60981cc4d57daa1975d45256e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 103
        echo "    ";
        $context["knp_menu"] = $this;
        // line 104
        echo "    <span class=\"glyphicon glyphicons-chevron-right\" ";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
        
        $__internal_0a14349628d96903201a77f8e78e3c7bb16e0a60981cc4d57daa1975d45256e8->leave($__internal_0a14349628d96903201a77f8e78e3c7bb16e0a60981cc4d57daa1975d45256e8_prof);

        
        $__internal_94c754be9a62e7b89523f763ead4dce3ff1c819f95bf0042a6a3bf1e3277f11b->leave($__internal_94c754be9a62e7b89523f763ead4dce3ff1c819f95bf0042a6a3bf1e3277f11b_prof);

    }

    // line 107
    public function block_label($context, array $blocks = array())
    {
        $__internal_5263f12c21260ddde05e168d3734d5919b4f582c083fac600f0f8c1a455be116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5263f12c21260ddde05e168d3734d5919b4f582c083fac600f0f8c1a455be116->enter($__internal_5263f12c21260ddde05e168d3734d5919b4f582c083fac600f0f8c1a455be116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_3496a32319f147f6515c8afbfe42d59b89b3ffd42cccf0f35a7ff3b386cb2e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3496a32319f147f6515c8afbfe42d59b89b3ffd42cccf0f35a7ff3b386cb2e8a->enter($__internal_3496a32319f147f6515c8afbfe42d59b89b3ffd42cccf0f35a7ff3b386cb2e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 108
        echo "    ";
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 109
            echo "        ";
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_3496a32319f147f6515c8afbfe42d59b89b3ffd42cccf0f35a7ff3b386cb2e8a->leave($__internal_3496a32319f147f6515c8afbfe42d59b89b3ffd42cccf0f35a7ff3b386cb2e8a_prof);

        
        $__internal_5263f12c21260ddde05e168d3734d5919b4f582c083fac600f0f8c1a455be116->leave($__internal_5263f12c21260ddde05e168d3734d5919b4f582c083fac600f0f8c1a455be116_prof);

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
            $__internal_6baf01250e3a60473f52dccb8472ae81c2d08e2700659b1fb161f447e2956cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6baf01250e3a60473f52dccb8472ae81c2d08e2700659b1fb161f447e2956cf8->enter($__internal_6baf01250e3a60473f52dccb8472ae81c2d08e2700659b1fb161f447e2956cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_9381a65e6c3cdf717bcd98d75da7ab1133521314fa33cd6152206477cd07c768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9381a65e6c3cdf717bcd98d75da7ab1133521314fa33cd6152206477cd07c768->enter($__internal_9381a65e6c3cdf717bcd98d75da7ab1133521314fa33cd6152206477cd07c768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_9381a65e6c3cdf717bcd98d75da7ab1133521314fa33cd6152206477cd07c768->leave($__internal_9381a65e6c3cdf717bcd98d75da7ab1133521314fa33cd6152206477cd07c768_prof);

            
            $__internal_6baf01250e3a60473f52dccb8472ae81c2d08e2700659b1fb161f447e2956cf8->leave($__internal_6baf01250e3a60473f52dccb8472ae81c2d08e2700659b1fb161f447e2956cf8_prof);

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
        return array (  431 => 6,  429 => 5,  424 => 4,  406 => 3,  392 => 109,  389 => 108,  380 => 107,  365 => 104,  362 => 103,  353 => 102,  336 => 99,  333 => 98,  324 => 97,  310 => 93,  308 => 92,  306 => 91,  304 => 90,  302 => 89,  298 => 87,  294 => 85,  292 => 84,  289 => 83,  286 => 82,  284 => 81,  281 => 79,  279 => 78,  277 => 77,  274 => 74,  271 => 73,  268 => 72,  266 => 71,  263 => 70,  260 => 69,  257 => 67,  254 => 65,  252 => 64,  249 => 62,  247 => 61,  244 => 59,  242 => 58,  240 => 57,  238 => 56,  236 => 55,  234 => 54,  231 => 53,  222 => 52,  211 => 49,  208 => 48,  206 => 47,  189 => 45,  171 => 44,  168 => 43,  165 => 42,  162 => 41,  160 => 40,  157 => 39,  154 => 38,  151 => 37,  149 => 36,  146 => 35,  143 => 34,  141 => 33,  132 => 32,  118 => 27,  113 => 26,  111 => 25,  108 => 24,  105 => 23,  96 => 22,  85 => 19,  82 => 18,  73 => 17,  59 => 13,  56 => 12,  47 => 11,  11 => 1,);
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
        <div class=\"btn-group-lg\">
            {% import _self as knp_menu %}
            {{ knp_menu.attributes(listAttributes) }}
            {{ block('children') }}
        </div>
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
        {{ knp_menu.attributes(attributes) }}
            {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
                {{ block('linkElement') }}
            {%- else %}
                {{ block('spanElement') }}
            {%- endif %}
             render the list of children
            {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
            {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
            {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
            {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% import _self as knp_menu %}
    <a class=\"btn btn-default\" style=\"color: black;\" href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>
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
