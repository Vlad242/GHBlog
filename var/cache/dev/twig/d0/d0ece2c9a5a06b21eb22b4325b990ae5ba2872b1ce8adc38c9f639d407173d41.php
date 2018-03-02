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
        $__internal_ce42f051d044db2585fcfeae574eb37afadb34b343d92462696bd5ab8d26aed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce42f051d044db2585fcfeae574eb37afadb34b343d92462696bd5ab8d26aed2->enter($__internal_ce42f051d044db2585fcfeae574eb37afadb34b343d92462696bd5ab8d26aed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_5bca23f486b48f08d806f2eb4f8fab733dd7220658042b2c1cf6ab1c315a6258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bca23f486b48f08d806f2eb4f8fab733dd7220658042b2c1cf6ab1c315a6258->enter($__internal_5bca23f486b48f08d806f2eb4f8fab733dd7220658042b2c1cf6ab1c315a6258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce42f051d044db2585fcfeae574eb37afadb34b343d92462696bd5ab8d26aed2->leave($__internal_ce42f051d044db2585fcfeae574eb37afadb34b343d92462696bd5ab8d26aed2_prof);

        
        $__internal_5bca23f486b48f08d806f2eb4f8fab733dd7220658042b2c1cf6ab1c315a6258->leave($__internal_5bca23f486b48f08d806f2eb4f8fab733dd7220658042b2c1cf6ab1c315a6258_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_2ac13415dedae9ed381ea4e1c924306b3113d4ea0322a3e0ae17e57c51bfc99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac13415dedae9ed381ea4e1c924306b3113d4ea0322a3e0ae17e57c51bfc99e->enter($__internal_2ac13415dedae9ed381ea4e1c924306b3113d4ea0322a3e0ae17e57c51bfc99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_70fcb2c7f5e407a30da4ae181426fa406a1f2d288b7f1b632584de0d8bed942f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fcb2c7f5e407a30da4ae181426fa406a1f2d288b7f1b632584de0d8bed942f->enter($__internal_70fcb2c7f5e407a30da4ae181426fa406a1f2d288b7f1b632584de0d8bed942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_70fcb2c7f5e407a30da4ae181426fa406a1f2d288b7f1b632584de0d8bed942f->leave($__internal_70fcb2c7f5e407a30da4ae181426fa406a1f2d288b7f1b632584de0d8bed942f_prof);

        
        $__internal_2ac13415dedae9ed381ea4e1c924306b3113d4ea0322a3e0ae17e57c51bfc99e->leave($__internal_2ac13415dedae9ed381ea4e1c924306b3113d4ea0322a3e0ae17e57c51bfc99e_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_d456b96680b10173c8c81331ef55189880ebc2b0ddfdd8742d8b75b79c41f453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d456b96680b10173c8c81331ef55189880ebc2b0ddfdd8742d8b75b79c41f453->enter($__internal_d456b96680b10173c8c81331ef55189880ebc2b0ddfdd8742d8b75b79c41f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_f8969cc4e300caea0cb1ccc308859bf2e6d0d09b9fdb44791d779cbcac62c7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8969cc4e300caea0cb1ccc308859bf2e6d0d09b9fdb44791d779cbcac62c7f1->enter($__internal_f8969cc4e300caea0cb1ccc308859bf2e6d0d09b9fdb44791d779cbcac62c7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_f8969cc4e300caea0cb1ccc308859bf2e6d0d09b9fdb44791d779cbcac62c7f1->leave($__internal_f8969cc4e300caea0cb1ccc308859bf2e6d0d09b9fdb44791d779cbcac62c7f1_prof);

        
        $__internal_d456b96680b10173c8c81331ef55189880ebc2b0ddfdd8742d8b75b79c41f453->leave($__internal_d456b96680b10173c8c81331ef55189880ebc2b0ddfdd8742d8b75b79c41f453_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_e3bc03cc36ea87a5c1eeca76343495de9b567114a30234ca1fc2acaf8a3552c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bc03cc36ea87a5c1eeca76343495de9b567114a30234ca1fc2acaf8a3552c5->enter($__internal_e3bc03cc36ea87a5c1eeca76343495de9b567114a30234ca1fc2acaf8a3552c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_a8abe749d0285a6486ceb6439b73e52a19004daef818d108ad282a63f0a7b836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8abe749d0285a6486ceb6439b73e52a19004daef818d108ad282a63f0a7b836->enter($__internal_a8abe749d0285a6486ceb6439b73e52a19004daef818d108ad282a63f0a7b836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_a8abe749d0285a6486ceb6439b73e52a19004daef818d108ad282a63f0a7b836->leave($__internal_a8abe749d0285a6486ceb6439b73e52a19004daef818d108ad282a63f0a7b836_prof);

        
        $__internal_e3bc03cc36ea87a5c1eeca76343495de9b567114a30234ca1fc2acaf8a3552c5->leave($__internal_e3bc03cc36ea87a5c1eeca76343495de9b567114a30234ca1fc2acaf8a3552c5_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_7374b04bf1dc24c5749045df98f4db2cc89d799f8138dd2e70abf26676398c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7374b04bf1dc24c5749045df98f4db2cc89d799f8138dd2e70abf26676398c4f->enter($__internal_7374b04bf1dc24c5749045df98f4db2cc89d799f8138dd2e70abf26676398c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_ba100fc23600c1340e427f0525651ed739d1946d11dfe95900af004415cc1d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba100fc23600c1340e427f0525651ed739d1946d11dfe95900af004415cc1d60->enter($__internal_ba100fc23600c1340e427f0525651ed739d1946d11dfe95900af004415cc1d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

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
        
        $__internal_ba100fc23600c1340e427f0525651ed739d1946d11dfe95900af004415cc1d60->leave($__internal_ba100fc23600c1340e427f0525651ed739d1946d11dfe95900af004415cc1d60_prof);

        
        $__internal_7374b04bf1dc24c5749045df98f4db2cc89d799f8138dd2e70abf26676398c4f->leave($__internal_7374b04bf1dc24c5749045df98f4db2cc89d799f8138dd2e70abf26676398c4f_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_330eeaec531dc9e3669b4304adfce6e825440ee1f6af356b4ab410640b9e146e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330eeaec531dc9e3669b4304adfce6e825440ee1f6af356b4ab410640b9e146e->enter($__internal_330eeaec531dc9e3669b4304adfce6e825440ee1f6af356b4ab410640b9e146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_c4d406aaf61b2218dffb3ba97ece8c44f1c0425d2a267abfad7bc67d6970d129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d406aaf61b2218dffb3ba97ece8c44f1c0425d2a267abfad7bc67d6970d129->enter($__internal_c4d406aaf61b2218dffb3ba97ece8c44f1c0425d2a267abfad7bc67d6970d129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_c4d406aaf61b2218dffb3ba97ece8c44f1c0425d2a267abfad7bc67d6970d129->leave($__internal_c4d406aaf61b2218dffb3ba97ece8c44f1c0425d2a267abfad7bc67d6970d129_prof);

        
        $__internal_330eeaec531dc9e3669b4304adfce6e825440ee1f6af356b4ab410640b9e146e->leave($__internal_330eeaec531dc9e3669b4304adfce6e825440ee1f6af356b4ab410640b9e146e_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_477435447252cd26812408576e26e2bc78656e114929d82d386fd9da8fcfcebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477435447252cd26812408576e26e2bc78656e114929d82d386fd9da8fcfcebf->enter($__internal_477435447252cd26812408576e26e2bc78656e114929d82d386fd9da8fcfcebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_c2daba7b932b2a5d57610b04ce6fb16f96b2f88bc1f766a1763f70125dec7b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2daba7b932b2a5d57610b04ce6fb16f96b2f88bc1f766a1763f70125dec7b90->enter($__internal_c2daba7b932b2a5d57610b04ce6fb16f96b2f88bc1f766a1763f70125dec7b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_c2daba7b932b2a5d57610b04ce6fb16f96b2f88bc1f766a1763f70125dec7b90->leave($__internal_c2daba7b932b2a5d57610b04ce6fb16f96b2f88bc1f766a1763f70125dec7b90_prof);

        
        $__internal_477435447252cd26812408576e26e2bc78656e114929d82d386fd9da8fcfcebf->leave($__internal_477435447252cd26812408576e26e2bc78656e114929d82d386fd9da8fcfcebf_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_9660a63d455957d55e1a94eeffea78281b27e6f1dbdf7f98fe787da0443e3462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9660a63d455957d55e1a94eeffea78281b27e6f1dbdf7f98fe787da0443e3462->enter($__internal_9660a63d455957d55e1a94eeffea78281b27e6f1dbdf7f98fe787da0443e3462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_be7c5278acbe1cb13306d2f1e94cee722606583a00a1fcc487ad788d72f6df39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7c5278acbe1cb13306d2f1e94cee722606583a00a1fcc487ad788d72f6df39->enter($__internal_be7c5278acbe1cb13306d2f1e94cee722606583a00a1fcc487ad788d72f6df39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_be7c5278acbe1cb13306d2f1e94cee722606583a00a1fcc487ad788d72f6df39->leave($__internal_be7c5278acbe1cb13306d2f1e94cee722606583a00a1fcc487ad788d72f6df39_prof);

        
        $__internal_9660a63d455957d55e1a94eeffea78281b27e6f1dbdf7f98fe787da0443e3462->leave($__internal_9660a63d455957d55e1a94eeffea78281b27e6f1dbdf7f98fe787da0443e3462_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_9eea33202933207a81a7e3b6870c018bff0bbd5ec95635208223219ed494d187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eea33202933207a81a7e3b6870c018bff0bbd5ec95635208223219ed494d187->enter($__internal_9eea33202933207a81a7e3b6870c018bff0bbd5ec95635208223219ed494d187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7fb0d6349fef31dc5910ca52160d5cee65440a73801ba883c8685529ae3f4714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb0d6349fef31dc5910ca52160d5cee65440a73801ba883c8685529ae3f4714->enter($__internal_7fb0d6349fef31dc5910ca52160d5cee65440a73801ba883c8685529ae3f4714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_7fb0d6349fef31dc5910ca52160d5cee65440a73801ba883c8685529ae3f4714->leave($__internal_7fb0d6349fef31dc5910ca52160d5cee65440a73801ba883c8685529ae3f4714_prof);

        
        $__internal_9eea33202933207a81a7e3b6870c018bff0bbd5ec95635208223219ed494d187->leave($__internal_9eea33202933207a81a7e3b6870c018bff0bbd5ec95635208223219ed494d187_prof);

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
            $__internal_0e154501b7864a27800da68e2d7bcd2daef1fad8e498aed838bee0019a949e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0e154501b7864a27800da68e2d7bcd2daef1fad8e498aed838bee0019a949e8f->enter($__internal_0e154501b7864a27800da68e2d7bcd2daef1fad8e498aed838bee0019a949e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_a1bc9426d949996a95eb377696d56aa9ea5d8be8b1aa47968f2512c8b30899b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a1bc9426d949996a95eb377696d56aa9ea5d8be8b1aa47968f2512c8b30899b4->enter($__internal_a1bc9426d949996a95eb377696d56aa9ea5d8be8b1aa47968f2512c8b30899b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_a1bc9426d949996a95eb377696d56aa9ea5d8be8b1aa47968f2512c8b30899b4->leave($__internal_a1bc9426d949996a95eb377696d56aa9ea5d8be8b1aa47968f2512c8b30899b4_prof);

            
            $__internal_0e154501b7864a27800da68e2d7bcd2daef1fad8e498aed838bee0019a949e8f->leave($__internal_0e154501b7864a27800da68e2d7bcd2daef1fad8e498aed838bee0019a949e8f_prof);

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
