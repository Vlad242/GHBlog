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
        $__internal_e19db5d57dc07a54e38b45003b9e22044a64a09baeab6b25fa2e7d216f7a927d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19db5d57dc07a54e38b45003b9e22044a64a09baeab6b25fa2e7d216f7a927d->enter($__internal_e19db5d57dc07a54e38b45003b9e22044a64a09baeab6b25fa2e7d216f7a927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_276d84ad3fd787a4cef614d58825f64dabd590e16728e294a893cd75c13ab678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276d84ad3fd787a4cef614d58825f64dabd590e16728e294a893cd75c13ab678->enter($__internal_276d84ad3fd787a4cef614d58825f64dabd590e16728e294a893cd75c13ab678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_e19db5d57dc07a54e38b45003b9e22044a64a09baeab6b25fa2e7d216f7a927d->leave($__internal_e19db5d57dc07a54e38b45003b9e22044a64a09baeab6b25fa2e7d216f7a927d_prof);

        
        $__internal_276d84ad3fd787a4cef614d58825f64dabd590e16728e294a893cd75c13ab678->leave($__internal_276d84ad3fd787a4cef614d58825f64dabd590e16728e294a893cd75c13ab678_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c0393360ae81835ea4b68993bc4fea29bb909dcf7f6848ac9108ad6fdd7fab91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0393360ae81835ea4b68993bc4fea29bb909dcf7f6848ac9108ad6fdd7fab91->enter($__internal_c0393360ae81835ea4b68993bc4fea29bb909dcf7f6848ac9108ad6fdd7fab91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bb64b4c68f41bfaf7c2c875c91db82b4d675a2b37971065ee691b883fd8daac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb64b4c68f41bfaf7c2c875c91db82b4d675a2b37971065ee691b883fd8daac4->enter($__internal_bb64b4c68f41bfaf7c2c875c91db82b4d675a2b37971065ee691b883fd8daac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bb64b4c68f41bfaf7c2c875c91db82b4d675a2b37971065ee691b883fd8daac4->leave($__internal_bb64b4c68f41bfaf7c2c875c91db82b4d675a2b37971065ee691b883fd8daac4_prof);

        
        $__internal_c0393360ae81835ea4b68993bc4fea29bb909dcf7f6848ac9108ad6fdd7fab91->leave($__internal_c0393360ae81835ea4b68993bc4fea29bb909dcf7f6848ac9108ad6fdd7fab91_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d3619901a178520410a9cf783981dcc40577a2cab46c40cf92bc23efcb357daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3619901a178520410a9cf783981dcc40577a2cab46c40cf92bc23efcb357daa->enter($__internal_d3619901a178520410a9cf783981dcc40577a2cab46c40cf92bc23efcb357daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_054dc53158db2eca62a44f1c0bae04fa020111a29e761c2f7f371ac6f139e761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054dc53158db2eca62a44f1c0bae04fa020111a29e761c2f7f371ac6f139e761->enter($__internal_054dc53158db2eca62a44f1c0bae04fa020111a29e761c2f7f371ac6f139e761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_054dc53158db2eca62a44f1c0bae04fa020111a29e761c2f7f371ac6f139e761->leave($__internal_054dc53158db2eca62a44f1c0bae04fa020111a29e761c2f7f371ac6f139e761_prof);

        
        $__internal_d3619901a178520410a9cf783981dcc40577a2cab46c40cf92bc23efcb357daa->leave($__internal_d3619901a178520410a9cf783981dcc40577a2cab46c40cf92bc23efcb357daa_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dc6a495d64680bef28e195c669c5765c1a03de49fe7fb759505000b18c31a027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6a495d64680bef28e195c669c5765c1a03de49fe7fb759505000b18c31a027->enter($__internal_dc6a495d64680bef28e195c669c5765c1a03de49fe7fb759505000b18c31a027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f1dccf726014a0079f8cb9269bf81a8a3a88563ddc58a4c3cea38dfec6201ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dccf726014a0079f8cb9269bf81a8a3a88563ddc58a4c3cea38dfec6201ac9->enter($__internal_f1dccf726014a0079f8cb9269bf81a8a3a88563ddc58a4c3cea38dfec6201ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_f1dccf726014a0079f8cb9269bf81a8a3a88563ddc58a4c3cea38dfec6201ac9->leave($__internal_f1dccf726014a0079f8cb9269bf81a8a3a88563ddc58a4c3cea38dfec6201ac9_prof);

        
        $__internal_dc6a495d64680bef28e195c669c5765c1a03de49fe7fb759505000b18c31a027->leave($__internal_dc6a495d64680bef28e195c669c5765c1a03de49fe7fb759505000b18c31a027_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_11f983794c6e09b99ea4ce1cee28141e58c89c2be9ffd9285b20377cc71247c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f983794c6e09b99ea4ce1cee28141e58c89c2be9ffd9285b20377cc71247c1->enter($__internal_11f983794c6e09b99ea4ce1cee28141e58c89c2be9ffd9285b20377cc71247c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8d924e2ad3f444f33502949c08763fe5290c6ef9309eebf2aad8e641243d48d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d924e2ad3f444f33502949c08763fe5290c6ef9309eebf2aad8e641243d48d6->enter($__internal_8d924e2ad3f444f33502949c08763fe5290c6ef9309eebf2aad8e641243d48d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8d924e2ad3f444f33502949c08763fe5290c6ef9309eebf2aad8e641243d48d6->leave($__internal_8d924e2ad3f444f33502949c08763fe5290c6ef9309eebf2aad8e641243d48d6_prof);

        
        $__internal_11f983794c6e09b99ea4ce1cee28141e58c89c2be9ffd9285b20377cc71247c1->leave($__internal_11f983794c6e09b99ea4ce1cee28141e58c89c2be9ffd9285b20377cc71247c1_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b46df8fbab1df4872dec0671035bc2c28eaba2002905039eff04945494cb0263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46df8fbab1df4872dec0671035bc2c28eaba2002905039eff04945494cb0263->enter($__internal_b46df8fbab1df4872dec0671035bc2c28eaba2002905039eff04945494cb0263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_eebefaa89ddcf2818d5960fe0b468aba4e999ad9042a42d4cff89e80b1b1ab3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebefaa89ddcf2818d5960fe0b468aba4e999ad9042a42d4cff89e80b1b1ab3c->enter($__internal_eebefaa89ddcf2818d5960fe0b468aba4e999ad9042a42d4cff89e80b1b1ab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_eebefaa89ddcf2818d5960fe0b468aba4e999ad9042a42d4cff89e80b1b1ab3c->leave($__internal_eebefaa89ddcf2818d5960fe0b468aba4e999ad9042a42d4cff89e80b1b1ab3c_prof);

        
        $__internal_b46df8fbab1df4872dec0671035bc2c28eaba2002905039eff04945494cb0263->leave($__internal_b46df8fbab1df4872dec0671035bc2c28eaba2002905039eff04945494cb0263_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5d0d7b04f47a691455f8bbfaffa0d4dc71bb0d7dd6e6870f37b74c14000f88ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0d7b04f47a691455f8bbfaffa0d4dc71bb0d7dd6e6870f37b74c14000f88ce->enter($__internal_5d0d7b04f47a691455f8bbfaffa0d4dc71bb0d7dd6e6870f37b74c14000f88ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_dfafc04ccdaa2ae10348de81894433cc06edfeef159a35ef1bf31401df65a943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfafc04ccdaa2ae10348de81894433cc06edfeef159a35ef1bf31401df65a943->enter($__internal_dfafc04ccdaa2ae10348de81894433cc06edfeef159a35ef1bf31401df65a943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_dfafc04ccdaa2ae10348de81894433cc06edfeef159a35ef1bf31401df65a943->leave($__internal_dfafc04ccdaa2ae10348de81894433cc06edfeef159a35ef1bf31401df65a943_prof);

        
        $__internal_5d0d7b04f47a691455f8bbfaffa0d4dc71bb0d7dd6e6870f37b74c14000f88ce->leave($__internal_5d0d7b04f47a691455f8bbfaffa0d4dc71bb0d7dd6e6870f37b74c14000f88ce_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_440d0ffd29f5ad2b33346f9ec6c8801535503ebe17ef68a4ddbb4f70ee27a279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440d0ffd29f5ad2b33346f9ec6c8801535503ebe17ef68a4ddbb4f70ee27a279->enter($__internal_440d0ffd29f5ad2b33346f9ec6c8801535503ebe17ef68a4ddbb4f70ee27a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_025dec2f570e9b4232f59669ee6ba171e65a7c5c08b244eafd920ad911d57e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025dec2f570e9b4232f59669ee6ba171e65a7c5c08b244eafd920ad911d57e00->enter($__internal_025dec2f570e9b4232f59669ee6ba171e65a7c5c08b244eafd920ad911d57e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_025dec2f570e9b4232f59669ee6ba171e65a7c5c08b244eafd920ad911d57e00->leave($__internal_025dec2f570e9b4232f59669ee6ba171e65a7c5c08b244eafd920ad911d57e00_prof);

        
        $__internal_440d0ffd29f5ad2b33346f9ec6c8801535503ebe17ef68a4ddbb4f70ee27a279->leave($__internal_440d0ffd29f5ad2b33346f9ec6c8801535503ebe17ef68a4ddbb4f70ee27a279_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_fcacfb47c11012bd548c43eeb65f1f2dafd7f33b1523b4bc0b413b89271b3d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcacfb47c11012bd548c43eeb65f1f2dafd7f33b1523b4bc0b413b89271b3d91->enter($__internal_fcacfb47c11012bd548c43eeb65f1f2dafd7f33b1523b4bc0b413b89271b3d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c5e6616dc0a8e60c363314a84e22dc9d89bc085fbc10792df14dd45554fcd594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e6616dc0a8e60c363314a84e22dc9d89bc085fbc10792df14dd45554fcd594->enter($__internal_c5e6616dc0a8e60c363314a84e22dc9d89bc085fbc10792df14dd45554fcd594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c5e6616dc0a8e60c363314a84e22dc9d89bc085fbc10792df14dd45554fcd594->leave($__internal_c5e6616dc0a8e60c363314a84e22dc9d89bc085fbc10792df14dd45554fcd594_prof);

        
        $__internal_fcacfb47c11012bd548c43eeb65f1f2dafd7f33b1523b4bc0b413b89271b3d91->leave($__internal_fcacfb47c11012bd548c43eeb65f1f2dafd7f33b1523b4bc0b413b89271b3d91_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5277b691ad04f1cd6641d6798836af67d0517b62a64924a2def50989354e59ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5277b691ad04f1cd6641d6798836af67d0517b62a64924a2def50989354e59ba->enter($__internal_5277b691ad04f1cd6641d6798836af67d0517b62a64924a2def50989354e59ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_8e542261822bf1622edcad7f03b7e28348c87509a84242a46555bfeccc6c7f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e542261822bf1622edcad7f03b7e28348c87509a84242a46555bfeccc6c7f73->enter($__internal_8e542261822bf1622edcad7f03b7e28348c87509a84242a46555bfeccc6c7f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_8e542261822bf1622edcad7f03b7e28348c87509a84242a46555bfeccc6c7f73->leave($__internal_8e542261822bf1622edcad7f03b7e28348c87509a84242a46555bfeccc6c7f73_prof);

        
        $__internal_5277b691ad04f1cd6641d6798836af67d0517b62a64924a2def50989354e59ba->leave($__internal_5277b691ad04f1cd6641d6798836af67d0517b62a64924a2def50989354e59ba_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aa2b1bbc3adb0cc62673bc333cd1c4d8059f11440d9cf087aa3e12df49d3654d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2b1bbc3adb0cc62673bc333cd1c4d8059f11440d9cf087aa3e12df49d3654d->enter($__internal_aa2b1bbc3adb0cc62673bc333cd1c4d8059f11440d9cf087aa3e12df49d3654d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7419693d0301e74ea3c766a7ca53fd1bf2a0443cbc401e3e510f830634719f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7419693d0301e74ea3c766a7ca53fd1bf2a0443cbc401e3e510f830634719f57->enter($__internal_7419693d0301e74ea3c766a7ca53fd1bf2a0443cbc401e3e510f830634719f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_7419693d0301e74ea3c766a7ca53fd1bf2a0443cbc401e3e510f830634719f57->leave($__internal_7419693d0301e74ea3c766a7ca53fd1bf2a0443cbc401e3e510f830634719f57_prof);

        
        $__internal_aa2b1bbc3adb0cc62673bc333cd1c4d8059f11440d9cf087aa3e12df49d3654d->leave($__internal_aa2b1bbc3adb0cc62673bc333cd1c4d8059f11440d9cf087aa3e12df49d3654d_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c52976c662e20d110937e5b38149020b27b11b89ed1f42b1efd39318be23d44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52976c662e20d110937e5b38149020b27b11b89ed1f42b1efd39318be23d44e->enter($__internal_c52976c662e20d110937e5b38149020b27b11b89ed1f42b1efd39318be23d44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f5a4931726f654e3985cd6cc6ec2ed98f1f9d6e4037c3e611203899f9b4e9b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a4931726f654e3985cd6cc6ec2ed98f1f9d6e4037c3e611203899f9b4e9b11->enter($__internal_f5a4931726f654e3985cd6cc6ec2ed98f1f9d6e4037c3e611203899f9b4e9b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_f5a4931726f654e3985cd6cc6ec2ed98f1f9d6e4037c3e611203899f9b4e9b11->leave($__internal_f5a4931726f654e3985cd6cc6ec2ed98f1f9d6e4037c3e611203899f9b4e9b11_prof);

        
        $__internal_c52976c662e20d110937e5b38149020b27b11b89ed1f42b1efd39318be23d44e->leave($__internal_c52976c662e20d110937e5b38149020b27b11b89ed1f42b1efd39318be23d44e_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d8acd2f2fc613a3924c55d93c36d00a269885be976b3d29708a9aeef8e1e94ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8acd2f2fc613a3924c55d93c36d00a269885be976b3d29708a9aeef8e1e94ce->enter($__internal_d8acd2f2fc613a3924c55d93c36d00a269885be976b3d29708a9aeef8e1e94ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_dcfbc2eb51ea0f08c128cd68f17690b7784b83f352b88dd9370f8b1180e7c99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfbc2eb51ea0f08c128cd68f17690b7784b83f352b88dd9370f8b1180e7c99b->enter($__internal_dcfbc2eb51ea0f08c128cd68f17690b7784b83f352b88dd9370f8b1180e7c99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dcfbc2eb51ea0f08c128cd68f17690b7784b83f352b88dd9370f8b1180e7c99b->leave($__internal_dcfbc2eb51ea0f08c128cd68f17690b7784b83f352b88dd9370f8b1180e7c99b_prof);

        
        $__internal_d8acd2f2fc613a3924c55d93c36d00a269885be976b3d29708a9aeef8e1e94ce->leave($__internal_d8acd2f2fc613a3924c55d93c36d00a269885be976b3d29708a9aeef8e1e94ce_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f8b72c6dbbb4643b8b3d6a18f1058d7a1b4f3b362a8c0f505f421015bc964c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b72c6dbbb4643b8b3d6a18f1058d7a1b4f3b362a8c0f505f421015bc964c31->enter($__internal_f8b72c6dbbb4643b8b3d6a18f1058d7a1b4f3b362a8c0f505f421015bc964c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3b8521b9e3237b42f5c1eea717a09a35cafc5c53f7f2f844bda24db4b1e03dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8521b9e3237b42f5c1eea717a09a35cafc5c53f7f2f844bda24db4b1e03dd2->enter($__internal_3b8521b9e3237b42f5c1eea717a09a35cafc5c53f7f2f844bda24db4b1e03dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3b8521b9e3237b42f5c1eea717a09a35cafc5c53f7f2f844bda24db4b1e03dd2->leave($__internal_3b8521b9e3237b42f5c1eea717a09a35cafc5c53f7f2f844bda24db4b1e03dd2_prof);

        
        $__internal_f8b72c6dbbb4643b8b3d6a18f1058d7a1b4f3b362a8c0f505f421015bc964c31->leave($__internal_f8b72c6dbbb4643b8b3d6a18f1058d7a1b4f3b362a8c0f505f421015bc964c31_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_50fff5488f8f6452f5113e42f7859d5484cac43fb05c008fd3eb2b78844fb3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fff5488f8f6452f5113e42f7859d5484cac43fb05c008fd3eb2b78844fb3cf->enter($__internal_50fff5488f8f6452f5113e42f7859d5484cac43fb05c008fd3eb2b78844fb3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_dbed3e464586a70ff65aa222ca59ba8fe9ba7053eb33a68bfeeff40e7d96de24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbed3e464586a70ff65aa222ca59ba8fe9ba7053eb33a68bfeeff40e7d96de24->enter($__internal_dbed3e464586a70ff65aa222ca59ba8fe9ba7053eb33a68bfeeff40e7d96de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dbed3e464586a70ff65aa222ca59ba8fe9ba7053eb33a68bfeeff40e7d96de24->leave($__internal_dbed3e464586a70ff65aa222ca59ba8fe9ba7053eb33a68bfeeff40e7d96de24_prof);

        
        $__internal_50fff5488f8f6452f5113e42f7859d5484cac43fb05c008fd3eb2b78844fb3cf->leave($__internal_50fff5488f8f6452f5113e42f7859d5484cac43fb05c008fd3eb2b78844fb3cf_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f7497a9150b29c93f1206c493894b9a89c514b94f53c19585153f4fec080969f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7497a9150b29c93f1206c493894b9a89c514b94f53c19585153f4fec080969f->enter($__internal_f7497a9150b29c93f1206c493894b9a89c514b94f53c19585153f4fec080969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_877a3aa21715bf6c01b2e29af05305fed63e94c95601553357dea146e7dba640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877a3aa21715bf6c01b2e29af05305fed63e94c95601553357dea146e7dba640->enter($__internal_877a3aa21715bf6c01b2e29af05305fed63e94c95601553357dea146e7dba640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_877a3aa21715bf6c01b2e29af05305fed63e94c95601553357dea146e7dba640->leave($__internal_877a3aa21715bf6c01b2e29af05305fed63e94c95601553357dea146e7dba640_prof);

        
        $__internal_f7497a9150b29c93f1206c493894b9a89c514b94f53c19585153f4fec080969f->leave($__internal_f7497a9150b29c93f1206c493894b9a89c514b94f53c19585153f4fec080969f_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c348774df18d8101e25b3e84afae7f8c9ace55b0c98f8b5efc9a39017fd258ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c348774df18d8101e25b3e84afae7f8c9ace55b0c98f8b5efc9a39017fd258ca->enter($__internal_c348774df18d8101e25b3e84afae7f8c9ace55b0c98f8b5efc9a39017fd258ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_201255ae0014e57395b6c4e15dfce7ca39d0805dd92f5773d6b37be86f6c38c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201255ae0014e57395b6c4e15dfce7ca39d0805dd92f5773d6b37be86f6c38c3->enter($__internal_201255ae0014e57395b6c4e15dfce7ca39d0805dd92f5773d6b37be86f6c38c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_201255ae0014e57395b6c4e15dfce7ca39d0805dd92f5773d6b37be86f6c38c3->leave($__internal_201255ae0014e57395b6c4e15dfce7ca39d0805dd92f5773d6b37be86f6c38c3_prof);

        
        $__internal_c348774df18d8101e25b3e84afae7f8c9ace55b0c98f8b5efc9a39017fd258ca->leave($__internal_c348774df18d8101e25b3e84afae7f8c9ace55b0c98f8b5efc9a39017fd258ca_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_35535de5c54e9a1aa789eeb11774116405b826fb6db3c1164d0910473628ac67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35535de5c54e9a1aa789eeb11774116405b826fb6db3c1164d0910473628ac67->enter($__internal_35535de5c54e9a1aa789eeb11774116405b826fb6db3c1164d0910473628ac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_48b69b8f19e4915d951aab85ab86ef679cd5acd17d0599ae8dcc1d2ccdd9322c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b69b8f19e4915d951aab85ab86ef679cd5acd17d0599ae8dcc1d2ccdd9322c->enter($__internal_48b69b8f19e4915d951aab85ab86ef679cd5acd17d0599ae8dcc1d2ccdd9322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_48b69b8f19e4915d951aab85ab86ef679cd5acd17d0599ae8dcc1d2ccdd9322c->leave($__internal_48b69b8f19e4915d951aab85ab86ef679cd5acd17d0599ae8dcc1d2ccdd9322c_prof);

        
        $__internal_35535de5c54e9a1aa789eeb11774116405b826fb6db3c1164d0910473628ac67->leave($__internal_35535de5c54e9a1aa789eeb11774116405b826fb6db3c1164d0910473628ac67_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4663808de774fa3515f113de21265b11d92d8e30d68f4d11a8dfd290fc33d316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4663808de774fa3515f113de21265b11d92d8e30d68f4d11a8dfd290fc33d316->enter($__internal_4663808de774fa3515f113de21265b11d92d8e30d68f4d11a8dfd290fc33d316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_55b230a7e8005f22ad6cd11296842e1837b86015b6b4cfa2698f401e0909d621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b230a7e8005f22ad6cd11296842e1837b86015b6b4cfa2698f401e0909d621->enter($__internal_55b230a7e8005f22ad6cd11296842e1837b86015b6b4cfa2698f401e0909d621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_55b230a7e8005f22ad6cd11296842e1837b86015b6b4cfa2698f401e0909d621->leave($__internal_55b230a7e8005f22ad6cd11296842e1837b86015b6b4cfa2698f401e0909d621_prof);

        
        $__internal_4663808de774fa3515f113de21265b11d92d8e30d68f4d11a8dfd290fc33d316->leave($__internal_4663808de774fa3515f113de21265b11d92d8e30d68f4d11a8dfd290fc33d316_prof);

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
