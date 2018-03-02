<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_22bf775e8a5be21f8ba55208bdee41fb1a7ce32e57cf558f75d6965f3a322fe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dbb5100f59dbdfb792c3298aaf24f51f79ad5897f1332fca524c013c2eaa59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbb5100f59dbdfb792c3298aaf24f51f79ad5897f1332fca524c013c2eaa59d->enter($__internal_3dbb5100f59dbdfb792c3298aaf24f51f79ad5897f1332fca524c013c2eaa59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_5899c755dd31efdaa515de420d7c09f60dd7a2a12692c2a63d7c3e42986f5a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5899c755dd31efdaa515de420d7c09f60dd7a2a12692c2a63d7c3e42986f5a51->enter($__internal_5899c755dd31efdaa515de420d7c09f60dd7a2a12692c2a63d7c3e42986f5a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_3dbb5100f59dbdfb792c3298aaf24f51f79ad5897f1332fca524c013c2eaa59d->leave($__internal_3dbb5100f59dbdfb792c3298aaf24f51f79ad5897f1332fca524c013c2eaa59d_prof);

        
        $__internal_5899c755dd31efdaa515de420d7c09f60dd7a2a12692c2a63d7c3e42986f5a51->leave($__internal_5899c755dd31efdaa515de420d7c09f60dd7a2a12692c2a63d7c3e42986f5a51_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5a260ac286123f68387dfa9df2fd8e1e46abef9268c4e46b28df5a0d5c5967cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a260ac286123f68387dfa9df2fd8e1e46abef9268c4e46b28df5a0d5c5967cd->enter($__internal_5a260ac286123f68387dfa9df2fd8e1e46abef9268c4e46b28df5a0d5c5967cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a102433ddd8eed1adbcad84d4d90f7aef2338efeece307af47ec267a5ca37cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a102433ddd8eed1adbcad84d4d90f7aef2338efeece307af47ec267a5ca37cb2->enter($__internal_a102433ddd8eed1adbcad84d4d90f7aef2338efeece307af47ec267a5ca37cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a102433ddd8eed1adbcad84d4d90f7aef2338efeece307af47ec267a5ca37cb2->leave($__internal_a102433ddd8eed1adbcad84d4d90f7aef2338efeece307af47ec267a5ca37cb2_prof);

        
        $__internal_5a260ac286123f68387dfa9df2fd8e1e46abef9268c4e46b28df5a0d5c5967cd->leave($__internal_5a260ac286123f68387dfa9df2fd8e1e46abef9268c4e46b28df5a0d5c5967cd_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_65036cfe91c3ffa43aea03fce79745ab8c4ac17f7ca5ae493f0973801825f5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65036cfe91c3ffa43aea03fce79745ab8c4ac17f7ca5ae493f0973801825f5d9->enter($__internal_65036cfe91c3ffa43aea03fce79745ab8c4ac17f7ca5ae493f0973801825f5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_21b84bc19c6d6d01d5e4a017dc243552928397ed2597036d5c3a23baa68f6533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b84bc19c6d6d01d5e4a017dc243552928397ed2597036d5c3a23baa68f6533->enter($__internal_21b84bc19c6d6d01d5e4a017dc243552928397ed2597036d5c3a23baa68f6533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_21b84bc19c6d6d01d5e4a017dc243552928397ed2597036d5c3a23baa68f6533->leave($__internal_21b84bc19c6d6d01d5e4a017dc243552928397ed2597036d5c3a23baa68f6533_prof);

        
        $__internal_65036cfe91c3ffa43aea03fce79745ab8c4ac17f7ca5ae493f0973801825f5d9->leave($__internal_65036cfe91c3ffa43aea03fce79745ab8c4ac17f7ca5ae493f0973801825f5d9_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_76ee70f2c41935c5fefa54329bbec5370f80efbecde5b5e2802d741d2e7f30fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ee70f2c41935c5fefa54329bbec5370f80efbecde5b5e2802d741d2e7f30fe->enter($__internal_76ee70f2c41935c5fefa54329bbec5370f80efbecde5b5e2802d741d2e7f30fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c789e637339157abdcb6cdd207739766e5a517376347e679bab2f7ccee162f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c789e637339157abdcb6cdd207739766e5a517376347e679bab2f7ccee162f22->enter($__internal_c789e637339157abdcb6cdd207739766e5a517376347e679bab2f7ccee162f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_c789e637339157abdcb6cdd207739766e5a517376347e679bab2f7ccee162f22->leave($__internal_c789e637339157abdcb6cdd207739766e5a517376347e679bab2f7ccee162f22_prof);

        
        $__internal_76ee70f2c41935c5fefa54329bbec5370f80efbecde5b5e2802d741d2e7f30fe->leave($__internal_76ee70f2c41935c5fefa54329bbec5370f80efbecde5b5e2802d741d2e7f30fe_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_00531e70adf6cd3a396bf010be4af3329dd78949658d7e9a36e64dccbb0ebb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00531e70adf6cd3a396bf010be4af3329dd78949658d7e9a36e64dccbb0ebb06->enter($__internal_00531e70adf6cd3a396bf010be4af3329dd78949658d7e9a36e64dccbb0ebb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_208dd15d94d9caddb0197a600d9b85b6871034351313112d6477fd9ac17f243e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208dd15d94d9caddb0197a600d9b85b6871034351313112d6477fd9ac17f243e->enter($__internal_208dd15d94d9caddb0197a600d9b85b6871034351313112d6477fd9ac17f243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_208dd15d94d9caddb0197a600d9b85b6871034351313112d6477fd9ac17f243e->leave($__internal_208dd15d94d9caddb0197a600d9b85b6871034351313112d6477fd9ac17f243e_prof);

        
        $__internal_00531e70adf6cd3a396bf010be4af3329dd78949658d7e9a36e64dccbb0ebb06->leave($__internal_00531e70adf6cd3a396bf010be4af3329dd78949658d7e9a36e64dccbb0ebb06_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_76c4e8806a07ea40d6696ddcbcb6b23cc3e1b2a521d41608d49c804b5a432c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c4e8806a07ea40d6696ddcbcb6b23cc3e1b2a521d41608d49c804b5a432c59->enter($__internal_76c4e8806a07ea40d6696ddcbcb6b23cc3e1b2a521d41608d49c804b5a432c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8c327dae5c6c9fc4ef30919fe2f65a665b85b67215f36775bfd8635fea7a5e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c327dae5c6c9fc4ef30919fe2f65a665b85b67215f36775bfd8635fea7a5e18->enter($__internal_8c327dae5c6c9fc4ef30919fe2f65a665b85b67215f36775bfd8635fea7a5e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8c327dae5c6c9fc4ef30919fe2f65a665b85b67215f36775bfd8635fea7a5e18->leave($__internal_8c327dae5c6c9fc4ef30919fe2f65a665b85b67215f36775bfd8635fea7a5e18_prof);

        
        $__internal_76c4e8806a07ea40d6696ddcbcb6b23cc3e1b2a521d41608d49c804b5a432c59->leave($__internal_76c4e8806a07ea40d6696ddcbcb6b23cc3e1b2a521d41608d49c804b5a432c59_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_18c2ce4c7a225df52b829f30f5841cad432fd616b95ea5faa53b4d33edfd897c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c2ce4c7a225df52b829f30f5841cad432fd616b95ea5faa53b4d33edfd897c->enter($__internal_18c2ce4c7a225df52b829f30f5841cad432fd616b95ea5faa53b4d33edfd897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e815feafa388298e4d7382342a7153ce41f4df24cf45e6b6c5236a475ff1a134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e815feafa388298e4d7382342a7153ce41f4df24cf45e6b6c5236a475ff1a134->enter($__internal_e815feafa388298e4d7382342a7153ce41f4df24cf45e6b6c5236a475ff1a134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e815feafa388298e4d7382342a7153ce41f4df24cf45e6b6c5236a475ff1a134->leave($__internal_e815feafa388298e4d7382342a7153ce41f4df24cf45e6b6c5236a475ff1a134_prof);

        
        $__internal_18c2ce4c7a225df52b829f30f5841cad432fd616b95ea5faa53b4d33edfd897c->leave($__internal_18c2ce4c7a225df52b829f30f5841cad432fd616b95ea5faa53b4d33edfd897c_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_1cada980096d8430b0e8b1a13a17a61b2ddf3ae93f17df90fb4fa73deda668ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cada980096d8430b0e8b1a13a17a61b2ddf3ae93f17df90fb4fa73deda668ed->enter($__internal_1cada980096d8430b0e8b1a13a17a61b2ddf3ae93f17df90fb4fa73deda668ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_aedf056e8e604f1bdc03eb4eaeee87eb970409f799c55eebb9b9b6d0d4de5db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedf056e8e604f1bdc03eb4eaeee87eb970409f799c55eebb9b9b6d0d4de5db8->enter($__internal_aedf056e8e604f1bdc03eb4eaeee87eb970409f799c55eebb9b9b6d0d4de5db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_aedf056e8e604f1bdc03eb4eaeee87eb970409f799c55eebb9b9b6d0d4de5db8->leave($__internal_aedf056e8e604f1bdc03eb4eaeee87eb970409f799c55eebb9b9b6d0d4de5db8_prof);

        
        $__internal_1cada980096d8430b0e8b1a13a17a61b2ddf3ae93f17df90fb4fa73deda668ed->leave($__internal_1cada980096d8430b0e8b1a13a17a61b2ddf3ae93f17df90fb4fa73deda668ed_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_821c2d392b8050e250384a8c45773502d10b8d34c93a85b1d37c775e74be3b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821c2d392b8050e250384a8c45773502d10b8d34c93a85b1d37c775e74be3b70->enter($__internal_821c2d392b8050e250384a8c45773502d10b8d34c93a85b1d37c775e74be3b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_497326e4dd90bcef577a8aa7834cce034546125697ac333bec93e0d53e01f252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497326e4dd90bcef577a8aa7834cce034546125697ac333bec93e0d53e01f252->enter($__internal_497326e4dd90bcef577a8aa7834cce034546125697ac333bec93e0d53e01f252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_497326e4dd90bcef577a8aa7834cce034546125697ac333bec93e0d53e01f252->leave($__internal_497326e4dd90bcef577a8aa7834cce034546125697ac333bec93e0d53e01f252_prof);

        
        $__internal_821c2d392b8050e250384a8c45773502d10b8d34c93a85b1d37c775e74be3b70->leave($__internal_821c2d392b8050e250384a8c45773502d10b8d34c93a85b1d37c775e74be3b70_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_cf37466d901160d28e46511d2a03dc238c004dabc88e06acca06ebaf8609358f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf37466d901160d28e46511d2a03dc238c004dabc88e06acca06ebaf8609358f->enter($__internal_cf37466d901160d28e46511d2a03dc238c004dabc88e06acca06ebaf8609358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_9fdbc3a1a5a8eab257964ed1487ffd048b2e1c1402cbfb1a75f859028157b5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdbc3a1a5a8eab257964ed1487ffd048b2e1c1402cbfb1a75f859028157b5d2->enter($__internal_9fdbc3a1a5a8eab257964ed1487ffd048b2e1c1402cbfb1a75f859028157b5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_9fdbc3a1a5a8eab257964ed1487ffd048b2e1c1402cbfb1a75f859028157b5d2->leave($__internal_9fdbc3a1a5a8eab257964ed1487ffd048b2e1c1402cbfb1a75f859028157b5d2_prof);

        
        $__internal_cf37466d901160d28e46511d2a03dc238c004dabc88e06acca06ebaf8609358f->leave($__internal_cf37466d901160d28e46511d2a03dc238c004dabc88e06acca06ebaf8609358f_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b546ce2feacfbedb4fb9c9be5b6cfdcd92fce58c8f1b6f1105ebf4542a7803fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b546ce2feacfbedb4fb9c9be5b6cfdcd92fce58c8f1b6f1105ebf4542a7803fc->enter($__internal_b546ce2feacfbedb4fb9c9be5b6cfdcd92fce58c8f1b6f1105ebf4542a7803fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9eb550910b5f8df80eb09b4dd9d43e218e20613ff58216c1dc0bef8db0f21381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb550910b5f8df80eb09b4dd9d43e218e20613ff58216c1dc0bef8db0f21381->enter($__internal_9eb550910b5f8df80eb09b4dd9d43e218e20613ff58216c1dc0bef8db0f21381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_9eb550910b5f8df80eb09b4dd9d43e218e20613ff58216c1dc0bef8db0f21381->leave($__internal_9eb550910b5f8df80eb09b4dd9d43e218e20613ff58216c1dc0bef8db0f21381_prof);

        
        $__internal_b546ce2feacfbedb4fb9c9be5b6cfdcd92fce58c8f1b6f1105ebf4542a7803fc->leave($__internal_b546ce2feacfbedb4fb9c9be5b6cfdcd92fce58c8f1b6f1105ebf4542a7803fc_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_323a5343743a506f58a670f23d2b8e389abef8491133f8f900529b33a73a687c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323a5343743a506f58a670f23d2b8e389abef8491133f8f900529b33a73a687c->enter($__internal_323a5343743a506f58a670f23d2b8e389abef8491133f8f900529b33a73a687c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ca9e92c7c935a19ca7676ad5c48a75c5052922936b101c70ba8b62e5df920858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9e92c7c935a19ca7676ad5c48a75c5052922936b101c70ba8b62e5df920858->enter($__internal_ca9e92c7c935a19ca7676ad5c48a75c5052922936b101c70ba8b62e5df920858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_ca9e92c7c935a19ca7676ad5c48a75c5052922936b101c70ba8b62e5df920858->leave($__internal_ca9e92c7c935a19ca7676ad5c48a75c5052922936b101c70ba8b62e5df920858_prof);

        
        $__internal_323a5343743a506f58a670f23d2b8e389abef8491133f8f900529b33a73a687c->leave($__internal_323a5343743a506f58a670f23d2b8e389abef8491133f8f900529b33a73a687c_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_67b24e10d2a48aa4aeaf8748b6eba409b406febf389d8d9eece30b95248c844c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b24e10d2a48aa4aeaf8748b6eba409b406febf389d8d9eece30b95248c844c->enter($__internal_67b24e10d2a48aa4aeaf8748b6eba409b406febf389d8d9eece30b95248c844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8cef84dab81760513e9c036c0ca302e7a665a1215268ceeecc9075a60f83494f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cef84dab81760513e9c036c0ca302e7a665a1215268ceeecc9075a60f83494f->enter($__internal_8cef84dab81760513e9c036c0ca302e7a665a1215268ceeecc9075a60f83494f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8cef84dab81760513e9c036c0ca302e7a665a1215268ceeecc9075a60f83494f->leave($__internal_8cef84dab81760513e9c036c0ca302e7a665a1215268ceeecc9075a60f83494f_prof);

        
        $__internal_67b24e10d2a48aa4aeaf8748b6eba409b406febf389d8d9eece30b95248c844c->leave($__internal_67b24e10d2a48aa4aeaf8748b6eba409b406febf389d8d9eece30b95248c844c_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b35a1f9703195b165095c296b376d1f11d6d7f33c8349b25134e96c86a20a138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35a1f9703195b165095c296b376d1f11d6d7f33c8349b25134e96c86a20a138->enter($__internal_b35a1f9703195b165095c296b376d1f11d6d7f33c8349b25134e96c86a20a138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a2e7995e6b28dfb0d28d9b6cd4f33eb37a82bc2082857e4837c3b5cdf4d5bbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e7995e6b28dfb0d28d9b6cd4f33eb37a82bc2082857e4837c3b5cdf4d5bbe6->enter($__internal_a2e7995e6b28dfb0d28d9b6cd4f33eb37a82bc2082857e4837c3b5cdf4d5bbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a2e7995e6b28dfb0d28d9b6cd4f33eb37a82bc2082857e4837c3b5cdf4d5bbe6->leave($__internal_a2e7995e6b28dfb0d28d9b6cd4f33eb37a82bc2082857e4837c3b5cdf4d5bbe6_prof);

        
        $__internal_b35a1f9703195b165095c296b376d1f11d6d7f33c8349b25134e96c86a20a138->leave($__internal_b35a1f9703195b165095c296b376d1f11d6d7f33c8349b25134e96c86a20a138_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6776e3099658c1f0932713254a2dbae3f3733c809ace9d01d6e25dba0e164e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6776e3099658c1f0932713254a2dbae3f3733c809ace9d01d6e25dba0e164e4d->enter($__internal_6776e3099658c1f0932713254a2dbae3f3733c809ace9d01d6e25dba0e164e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_256c8bfa3d70e651dc1af54ace28c1b7888d4b9aa9e2e945d9940e1dc2b0545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256c8bfa3d70e651dc1af54ace28c1b7888d4b9aa9e2e945d9940e1dc2b0545a->enter($__internal_256c8bfa3d70e651dc1af54ace28c1b7888d4b9aa9e2e945d9940e1dc2b0545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_256c8bfa3d70e651dc1af54ace28c1b7888d4b9aa9e2e945d9940e1dc2b0545a->leave($__internal_256c8bfa3d70e651dc1af54ace28c1b7888d4b9aa9e2e945d9940e1dc2b0545a_prof);

        
        $__internal_6776e3099658c1f0932713254a2dbae3f3733c809ace9d01d6e25dba0e164e4d->leave($__internal_6776e3099658c1f0932713254a2dbae3f3733c809ace9d01d6e25dba0e164e4d_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_0d3683ce364574b665719a2c2c43b1bb24d6706cf736603fd2f555db358e4e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3683ce364574b665719a2c2c43b1bb24d6706cf736603fd2f555db358e4e02->enter($__internal_0d3683ce364574b665719a2c2c43b1bb24d6706cf736603fd2f555db358e4e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_aab27a649dedc7c63c354efa65d4400ce35154356766d6ea7fb6ce239e3262b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab27a649dedc7c63c354efa65d4400ce35154356766d6ea7fb6ce239e3262b4->enter($__internal_aab27a649dedc7c63c354efa65d4400ce35154356766d6ea7fb6ce239e3262b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aab27a649dedc7c63c354efa65d4400ce35154356766d6ea7fb6ce239e3262b4->leave($__internal_aab27a649dedc7c63c354efa65d4400ce35154356766d6ea7fb6ce239e3262b4_prof);

        
        $__internal_0d3683ce364574b665719a2c2c43b1bb24d6706cf736603fd2f555db358e4e02->leave($__internal_0d3683ce364574b665719a2c2c43b1bb24d6706cf736603fd2f555db358e4e02_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b50949ddfd43409458fe0b481736c329cb9631b63b0d503cdbf9c39d1ad16050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50949ddfd43409458fe0b481736c329cb9631b63b0d503cdbf9c39d1ad16050->enter($__internal_b50949ddfd43409458fe0b481736c329cb9631b63b0d503cdbf9c39d1ad16050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_72ea56ac4d36e831bfca2d4ba0fec0ef01a3ed0e0f42c08467ca22cf54ed98f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ea56ac4d36e831bfca2d4ba0fec0ef01a3ed0e0f42c08467ca22cf54ed98f4->enter($__internal_72ea56ac4d36e831bfca2d4ba0fec0ef01a3ed0e0f42c08467ca22cf54ed98f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_72ea56ac4d36e831bfca2d4ba0fec0ef01a3ed0e0f42c08467ca22cf54ed98f4->leave($__internal_72ea56ac4d36e831bfca2d4ba0fec0ef01a3ed0e0f42c08467ca22cf54ed98f4_prof);

        
        $__internal_b50949ddfd43409458fe0b481736c329cb9631b63b0d503cdbf9c39d1ad16050->leave($__internal_b50949ddfd43409458fe0b481736c329cb9631b63b0d503cdbf9c39d1ad16050_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b21aebf0fbfdfcc2f4541a26c5341c2db22a358fe525fa6e4eb3903fa528cd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21aebf0fbfdfcc2f4541a26c5341c2db22a358fe525fa6e4eb3903fa528cd5a->enter($__internal_b21aebf0fbfdfcc2f4541a26c5341c2db22a358fe525fa6e4eb3903fa528cd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_15fb899a4d76833d1c383d94f2b7968488bcc623c78f78602e92433bf6c8b4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fb899a4d76833d1c383d94f2b7968488bcc623c78f78602e92433bf6c8b4aa->enter($__internal_15fb899a4d76833d1c383d94f2b7968488bcc623c78f78602e92433bf6c8b4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_15fb899a4d76833d1c383d94f2b7968488bcc623c78f78602e92433bf6c8b4aa->leave($__internal_15fb899a4d76833d1c383d94f2b7968488bcc623c78f78602e92433bf6c8b4aa_prof);

        
        $__internal_b21aebf0fbfdfcc2f4541a26c5341c2db22a358fe525fa6e4eb3903fa528cd5a->leave($__internal_b21aebf0fbfdfcc2f4541a26c5341c2db22a358fe525fa6e4eb3903fa528cd5a_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b73754ab8374bb3fd9250f4b1b3ddf3adab2e765cf127505d7b60d00a01fa038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73754ab8374bb3fd9250f4b1b3ddf3adab2e765cf127505d7b60d00a01fa038->enter($__internal_b73754ab8374bb3fd9250f4b1b3ddf3adab2e765cf127505d7b60d00a01fa038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1f2ee125c50346964e54864d8ba558d85e8374b5dcb7eae76eb50a544fab905e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2ee125c50346964e54864d8ba558d85e8374b5dcb7eae76eb50a544fab905e->enter($__internal_1f2ee125c50346964e54864d8ba558d85e8374b5dcb7eae76eb50a544fab905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_1f2ee125c50346964e54864d8ba558d85e8374b5dcb7eae76eb50a544fab905e->leave($__internal_1f2ee125c50346964e54864d8ba558d85e8374b5dcb7eae76eb50a544fab905e_prof);

        
        $__internal_b73754ab8374bb3fd9250f4b1b3ddf3adab2e765cf127505d7b60d00a01fa038->leave($__internal_b73754ab8374bb3fd9250f4b1b3ddf3adab2e765cf127505d7b60d00a01fa038_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
