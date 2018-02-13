<?php

/* knp_menu.html.twig */
class __TwigTemplate_a4b1ad11772582a3466391ab10d5305af1135437b40baec7a7e27f38272c9a0b extends Twig_Template
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
        $__internal_3591766dad31700b67bcd55a33ce36e0134bdc342a624df34c7a684b581e3c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3591766dad31700b67bcd55a33ce36e0134bdc342a624df34c7a684b581e3c8a->enter($__internal_3591766dad31700b67bcd55a33ce36e0134bdc342a624df34c7a684b581e3c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_08c7c32de111ada8f06a61d2eb41a44ea8ec419c6df19c86755f31f142e2fbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c7c32de111ada8f06a61d2eb41a44ea8ec419c6df19c86755f31f142e2fbeb->enter($__internal_08c7c32de111ada8f06a61d2eb41a44ea8ec419c6df19c86755f31f142e2fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3591766dad31700b67bcd55a33ce36e0134bdc342a624df34c7a684b581e3c8a->leave($__internal_3591766dad31700b67bcd55a33ce36e0134bdc342a624df34c7a684b581e3c8a_prof);

        
        $__internal_08c7c32de111ada8f06a61d2eb41a44ea8ec419c6df19c86755f31f142e2fbeb->leave($__internal_08c7c32de111ada8f06a61d2eb41a44ea8ec419c6df19c86755f31f142e2fbeb_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_4b15e0fe4c68568f04dcc1138db89fcabbc67f42f16198c072b2d52af122c034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b15e0fe4c68568f04dcc1138db89fcabbc67f42f16198c072b2d52af122c034->enter($__internal_4b15e0fe4c68568f04dcc1138db89fcabbc67f42f16198c072b2d52af122c034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_45715f70cce6de4e96bb5e721c6f72371ee357dd750c048a672f214430e16405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45715f70cce6de4e96bb5e721c6f72371ee357dd750c048a672f214430e16405->enter($__internal_45715f70cce6de4e96bb5e721c6f72371ee357dd750c048a672f214430e16405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_45715f70cce6de4e96bb5e721c6f72371ee357dd750c048a672f214430e16405->leave($__internal_45715f70cce6de4e96bb5e721c6f72371ee357dd750c048a672f214430e16405_prof);

        
        $__internal_4b15e0fe4c68568f04dcc1138db89fcabbc67f42f16198c072b2d52af122c034->leave($__internal_4b15e0fe4c68568f04dcc1138db89fcabbc67f42f16198c072b2d52af122c034_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_01f6a31686b1bccf79c761973fa5bddd7041171e3289d4352b53d6b9cf547ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f6a31686b1bccf79c761973fa5bddd7041171e3289d4352b53d6b9cf547ae8->enter($__internal_01f6a31686b1bccf79c761973fa5bddd7041171e3289d4352b53d6b9cf547ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_d7db2710996a1082a7fb5172fc86760fa4a285ca5567086a71126fca0df59305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7db2710996a1082a7fb5172fc86760fa4a285ca5567086a71126fca0df59305->enter($__internal_d7db2710996a1082a7fb5172fc86760fa4a285ca5567086a71126fca0df59305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_d7db2710996a1082a7fb5172fc86760fa4a285ca5567086a71126fca0df59305->leave($__internal_d7db2710996a1082a7fb5172fc86760fa4a285ca5567086a71126fca0df59305_prof);

        
        $__internal_01f6a31686b1bccf79c761973fa5bddd7041171e3289d4352b53d6b9cf547ae8->leave($__internal_01f6a31686b1bccf79c761973fa5bddd7041171e3289d4352b53d6b9cf547ae8_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_407d849b064fc7bb9e129ed84da96765c456505f0579f2f09d2456dd9808ff57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407d849b064fc7bb9e129ed84da96765c456505f0579f2f09d2456dd9808ff57->enter($__internal_407d849b064fc7bb9e129ed84da96765c456505f0579f2f09d2456dd9808ff57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_d69f42bd7decc93a3a10fa271099ba897f8782928535a63f4099ec9fa1b55b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69f42bd7decc93a3a10fa271099ba897f8782928535a63f4099ec9fa1b55b66->enter($__internal_d69f42bd7decc93a3a10fa271099ba897f8782928535a63f4099ec9fa1b55b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_d69f42bd7decc93a3a10fa271099ba897f8782928535a63f4099ec9fa1b55b66->leave($__internal_d69f42bd7decc93a3a10fa271099ba897f8782928535a63f4099ec9fa1b55b66_prof);

        
        $__internal_407d849b064fc7bb9e129ed84da96765c456505f0579f2f09d2456dd9808ff57->leave($__internal_407d849b064fc7bb9e129ed84da96765c456505f0579f2f09d2456dd9808ff57_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_1be958ffe910dd2f18726a54af218b3d6e2573b7fd60ffeaabf44d9d7510827c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be958ffe910dd2f18726a54af218b3d6e2573b7fd60ffeaabf44d9d7510827c->enter($__internal_1be958ffe910dd2f18726a54af218b3d6e2573b7fd60ffeaabf44d9d7510827c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_bffff868b4d455cb35483377b3720f8e0e31fccc291ebce8c364f77361c574de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffff868b4d455cb35483377b3720f8e0e31fccc291ebce8c364f77361c574de->enter($__internal_bffff868b4d455cb35483377b3720f8e0e31fccc291ebce8c364f77361c574de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

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
        
        $__internal_bffff868b4d455cb35483377b3720f8e0e31fccc291ebce8c364f77361c574de->leave($__internal_bffff868b4d455cb35483377b3720f8e0e31fccc291ebce8c364f77361c574de_prof);

        
        $__internal_1be958ffe910dd2f18726a54af218b3d6e2573b7fd60ffeaabf44d9d7510827c->leave($__internal_1be958ffe910dd2f18726a54af218b3d6e2573b7fd60ffeaabf44d9d7510827c_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_2c441182dfb36f39a3e7aca6c0d92a5560d8100644c11e5f0bb582e3a274621b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c441182dfb36f39a3e7aca6c0d92a5560d8100644c11e5f0bb582e3a274621b->enter($__internal_2c441182dfb36f39a3e7aca6c0d92a5560d8100644c11e5f0bb582e3a274621b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_d830927b5d5b0e02857c6881b6447387f962499f9f7a957426f95054268286d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d830927b5d5b0e02857c6881b6447387f962499f9f7a957426f95054268286d5->enter($__internal_d830927b5d5b0e02857c6881b6447387f962499f9f7a957426f95054268286d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_d830927b5d5b0e02857c6881b6447387f962499f9f7a957426f95054268286d5->leave($__internal_d830927b5d5b0e02857c6881b6447387f962499f9f7a957426f95054268286d5_prof);

        
        $__internal_2c441182dfb36f39a3e7aca6c0d92a5560d8100644c11e5f0bb582e3a274621b->leave($__internal_2c441182dfb36f39a3e7aca6c0d92a5560d8100644c11e5f0bb582e3a274621b_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_fba8429cc91f61cc61c27f1754f6dd5aa36a1d1953995909d8f88ac3a7d6445c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba8429cc91f61cc61c27f1754f6dd5aa36a1d1953995909d8f88ac3a7d6445c->enter($__internal_fba8429cc91f61cc61c27f1754f6dd5aa36a1d1953995909d8f88ac3a7d6445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_d041ac25cd153a0f81028ad6af1b077ed60d068c43dc4e23dc6601764d145bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d041ac25cd153a0f81028ad6af1b077ed60d068c43dc4e23dc6601764d145bf4->enter($__internal_d041ac25cd153a0f81028ad6af1b077ed60d068c43dc4e23dc6601764d145bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_d041ac25cd153a0f81028ad6af1b077ed60d068c43dc4e23dc6601764d145bf4->leave($__internal_d041ac25cd153a0f81028ad6af1b077ed60d068c43dc4e23dc6601764d145bf4_prof);

        
        $__internal_fba8429cc91f61cc61c27f1754f6dd5aa36a1d1953995909d8f88ac3a7d6445c->leave($__internal_fba8429cc91f61cc61c27f1754f6dd5aa36a1d1953995909d8f88ac3a7d6445c_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_eeeaecc4cbca98562882d8c6d6a1b289f78d85e266797c34cdd7797862544f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeeaecc4cbca98562882d8c6d6a1b289f78d85e266797c34cdd7797862544f22->enter($__internal_eeeaecc4cbca98562882d8c6d6a1b289f78d85e266797c34cdd7797862544f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_80c4caf09cecc03729bc12d9660442f59c9d753e718903994a4174a43dc3fdad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c4caf09cecc03729bc12d9660442f59c9d753e718903994a4174a43dc3fdad->enter($__internal_80c4caf09cecc03729bc12d9660442f59c9d753e718903994a4174a43dc3fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_80c4caf09cecc03729bc12d9660442f59c9d753e718903994a4174a43dc3fdad->leave($__internal_80c4caf09cecc03729bc12d9660442f59c9d753e718903994a4174a43dc3fdad_prof);

        
        $__internal_eeeaecc4cbca98562882d8c6d6a1b289f78d85e266797c34cdd7797862544f22->leave($__internal_eeeaecc4cbca98562882d8c6d6a1b289f78d85e266797c34cdd7797862544f22_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_4d6037906d3df3b61ba8ae8c91217195825e080ca3eba6b6c2f609ca3258815f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6037906d3df3b61ba8ae8c91217195825e080ca3eba6b6c2f609ca3258815f->enter($__internal_4d6037906d3df3b61ba8ae8c91217195825e080ca3eba6b6c2f609ca3258815f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_0d3c32c3e87c5e98d21fb44c1634dd4e51f35ff95b9e4b5fdfd48e9ab9302ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3c32c3e87c5e98d21fb44c1634dd4e51f35ff95b9e4b5fdfd48e9ab9302ecd->enter($__internal_0d3c32c3e87c5e98d21fb44c1634dd4e51f35ff95b9e4b5fdfd48e9ab9302ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_0d3c32c3e87c5e98d21fb44c1634dd4e51f35ff95b9e4b5fdfd48e9ab9302ecd->leave($__internal_0d3c32c3e87c5e98d21fb44c1634dd4e51f35ff95b9e4b5fdfd48e9ab9302ecd_prof);

        
        $__internal_4d6037906d3df3b61ba8ae8c91217195825e080ca3eba6b6c2f609ca3258815f->leave($__internal_4d6037906d3df3b61ba8ae8c91217195825e080ca3eba6b6c2f609ca3258815f_prof);

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
            $__internal_c17cd9ca1bbcc7fad9b1244c47b131484320d5a16f2d7295dcbd422497643e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c17cd9ca1bbcc7fad9b1244c47b131484320d5a16f2d7295dcbd422497643e32->enter($__internal_c17cd9ca1bbcc7fad9b1244c47b131484320d5a16f2d7295dcbd422497643e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_9fa0416c0ec06a4750157ff0be1913a4462f1bf0c58db02c6567d3471e050a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9fa0416c0ec06a4750157ff0be1913a4462f1bf0c58db02c6567d3471e050a15->enter($__internal_9fa0416c0ec06a4750157ff0be1913a4462f1bf0c58db02c6567d3471e050a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_9fa0416c0ec06a4750157ff0be1913a4462f1bf0c58db02c6567d3471e050a15->leave($__internal_9fa0416c0ec06a4750157ff0be1913a4462f1bf0c58db02c6567d3471e050a15_prof);

            
            $__internal_c17cd9ca1bbcc7fad9b1244c47b131484320d5a16f2d7295dcbd422497643e32->leave($__internal_c17cd9ca1bbcc7fad9b1244c47b131484320d5a16f2d7295dcbd422497643e32_prof);

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
