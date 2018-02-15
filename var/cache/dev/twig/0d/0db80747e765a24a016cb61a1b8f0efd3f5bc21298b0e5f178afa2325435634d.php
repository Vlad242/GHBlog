<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_284b2bdf837857dd0d3319038b65ef85b805f29a1d0bcae7b024a405115915c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01f8f410d2ebf3b989418e5fe62d0ddd7152e9fa86790ff010a7691f79adfe11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f8f410d2ebf3b989418e5fe62d0ddd7152e9fa86790ff010a7691f79adfe11->enter($__internal_01f8f410d2ebf3b989418e5fe62d0ddd7152e9fa86790ff010a7691f79adfe11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_7c7e1b10057c4326940845d4e2dc4c638818a6d4f7f6d6f7a0f05422e4f4feb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7e1b10057c4326940845d4e2dc4c638818a6d4f7f6d6f7a0f05422e4f4feb2->enter($__internal_7c7e1b10057c4326940845d4e2dc4c638818a6d4f7f6d6f7a0f05422e4f4feb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_01f8f410d2ebf3b989418e5fe62d0ddd7152e9fa86790ff010a7691f79adfe11->leave($__internal_01f8f410d2ebf3b989418e5fe62d0ddd7152e9fa86790ff010a7691f79adfe11_prof);

        
        $__internal_7c7e1b10057c4326940845d4e2dc4c638818a6d4f7f6d6f7a0f05422e4f4feb2->leave($__internal_7c7e1b10057c4326940845d4e2dc4c638818a6d4f7f6d6f7a0f05422e4f4feb2_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_bfad15679f3b66d3dbd3c98632882e2889c10ac68140c1a5e39dae36b45d1c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfad15679f3b66d3dbd3c98632882e2889c10ac68140c1a5e39dae36b45d1c0f->enter($__internal_bfad15679f3b66d3dbd3c98632882e2889c10ac68140c1a5e39dae36b45d1c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_648f17b5cad151fb57fd1d694cbd3bedade56e8dabbf6b5f63ef0d6b66321ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648f17b5cad151fb57fd1d694cbd3bedade56e8dabbf6b5f63ef0d6b66321ea4->enter($__internal_648f17b5cad151fb57fd1d694cbd3bedade56e8dabbf6b5f63ef0d6b66321ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_648f17b5cad151fb57fd1d694cbd3bedade56e8dabbf6b5f63ef0d6b66321ea4->leave($__internal_648f17b5cad151fb57fd1d694cbd3bedade56e8dabbf6b5f63ef0d6b66321ea4_prof);

        
        $__internal_bfad15679f3b66d3dbd3c98632882e2889c10ac68140c1a5e39dae36b45d1c0f->leave($__internal_bfad15679f3b66d3dbd3c98632882e2889c10ac68140c1a5e39dae36b45d1c0f_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2fdd4d784731da91a18541877e100ad7f5ac27c56c82c95baa2ffd1ae7f4ef13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdd4d784731da91a18541877e100ad7f5ac27c56c82c95baa2ffd1ae7f4ef13->enter($__internal_2fdd4d784731da91a18541877e100ad7f5ac27c56c82c95baa2ffd1ae7f4ef13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_88b8eb9cd03364c8f8fdd62fdf6c1bf588885f807178ec1cac5f333a087efbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b8eb9cd03364c8f8fdd62fdf6c1bf588885f807178ec1cac5f333a087efbef->enter($__internal_88b8eb9cd03364c8f8fdd62fdf6c1bf588885f807178ec1cac5f333a087efbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_67deebe008b2a0c1521c0241785578be2552ed8ff1eb3236169856047f2d98a2 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_a6c18d029e4a5d10c7f9ab02026305d50659c2aad8e733689f3703cc22bbb2fc = "{{") && ('' === $__internal_a6c18d029e4a5d10c7f9ab02026305d50659c2aad8e733689f3703cc22bbb2fc || 0 === strpos($__internal_67deebe008b2a0c1521c0241785578be2552ed8ff1eb3236169856047f2d98a2, $__internal_a6c18d029e4a5d10c7f9ab02026305d50659c2aad8e733689f3703cc22bbb2fc)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_2dce38c7991e9e2ab421298e2e287bfcb77c17d5cec9096294cae9c0c38c5866 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_2a5f00251f9564c11d8e1661985f35fb30c78eed355b9e65d915d6d603fc4bf4 = "}}") && ('' === $__internal_2a5f00251f9564c11d8e1661985f35fb30c78eed355b9e65d915d6d603fc4bf4 || $__internal_2a5f00251f9564c11d8e1661985f35fb30c78eed355b9e65d915d6d603fc4bf4 === substr($__internal_2dce38c7991e9e2ab421298e2e287bfcb77c17d5cec9096294cae9c0c38c5866, -strlen($__internal_2a5f00251f9564c11d8e1661985f35fb30c78eed355b9e65d915d6d603fc4bf4))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_88b8eb9cd03364c8f8fdd62fdf6c1bf588885f807178ec1cac5f333a087efbef->leave($__internal_88b8eb9cd03364c8f8fdd62fdf6c1bf588885f807178ec1cac5f333a087efbef_prof);

        
        $__internal_2fdd4d784731da91a18541877e100ad7f5ac27c56c82c95baa2ffd1ae7f4ef13->leave($__internal_2fdd4d784731da91a18541877e100ad7f5ac27c56c82c95baa2ffd1ae7f4ef13_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c180002e02fb8fd6e609439ab3581a06b14c0cf5e213f789f728d3559314f7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c180002e02fb8fd6e609439ab3581a06b14c0cf5e213f789f728d3559314f7a9->enter($__internal_c180002e02fb8fd6e609439ab3581a06b14c0cf5e213f789f728d3559314f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_1fa9817adccac2b2f07c7e1421f0755f71c5a4bca2cdafe0fac28ca3a356f130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa9817adccac2b2f07c7e1421f0755f71c5a4bca2cdafe0fac28ca3a356f130->enter($__internal_1fa9817adccac2b2f07c7e1421f0755f71c5a4bca2cdafe0fac28ca3a356f130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_1fa9817adccac2b2f07c7e1421f0755f71c5a4bca2cdafe0fac28ca3a356f130->leave($__internal_1fa9817adccac2b2f07c7e1421f0755f71c5a4bca2cdafe0fac28ca3a356f130_prof);

        
        $__internal_c180002e02fb8fd6e609439ab3581a06b14c0cf5e213f789f728d3559314f7a9->leave($__internal_c180002e02fb8fd6e609439ab3581a06b14c0cf5e213f789f728d3559314f7a9_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_24be8b919d4bf06802482951a1d80d39199759696a3c18325a73f7aa1397e775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24be8b919d4bf06802482951a1d80d39199759696a3c18325a73f7aa1397e775->enter($__internal_24be8b919d4bf06802482951a1d80d39199759696a3c18325a73f7aa1397e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ec495876cf85660031f627e8ec9bece8ba6bcff58fd34ab863898caac68879a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec495876cf85660031f627e8ec9bece8ba6bcff58fd34ab863898caac68879a9->enter($__internal_ec495876cf85660031f627e8ec9bece8ba6bcff58fd34ab863898caac68879a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_ec495876cf85660031f627e8ec9bece8ba6bcff58fd34ab863898caac68879a9->leave($__internal_ec495876cf85660031f627e8ec9bece8ba6bcff58fd34ab863898caac68879a9_prof);

        
        $__internal_24be8b919d4bf06802482951a1d80d39199759696a3c18325a73f7aa1397e775->leave($__internal_24be8b919d4bf06802482951a1d80d39199759696a3c18325a73f7aa1397e775_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f5325405148977cc499f1fc516ef46f51cd4e5334858c7e5d56695e1ca995d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5325405148977cc499f1fc516ef46f51cd4e5334858c7e5d56695e1ca995d7f->enter($__internal_f5325405148977cc499f1fc516ef46f51cd4e5334858c7e5d56695e1ca995d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_8bcc17600c58dba68fae5740d5f844c58d2aa634dc19f73cd2a72f0e61f6d8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcc17600c58dba68fae5740d5f844c58d2aa634dc19f73cd2a72f0e61f6d8bf->enter($__internal_8bcc17600c58dba68fae5740d5f844c58d2aa634dc19f73cd2a72f0e61f6d8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_8bcc17600c58dba68fae5740d5f844c58d2aa634dc19f73cd2a72f0e61f6d8bf->leave($__internal_8bcc17600c58dba68fae5740d5f844c58d2aa634dc19f73cd2a72f0e61f6d8bf_prof);

        
        $__internal_f5325405148977cc499f1fc516ef46f51cd4e5334858c7e5d56695e1ca995d7f->leave($__internal_f5325405148977cc499f1fc516ef46f51cd4e5334858c7e5d56695e1ca995d7f_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_77e1e1e338db5d02cc96eaf6fa1cd103f9d41ea1b2cfe8600a6a63ee713f8b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e1e1e338db5d02cc96eaf6fa1cd103f9d41ea1b2cfe8600a6a63ee713f8b30->enter($__internal_77e1e1e338db5d02cc96eaf6fa1cd103f9d41ea1b2cfe8600a6a63ee713f8b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f3f8d86c86a8c04a90c9b56ab50c8d7e1ef3fe4998db6efc6c527ae9c3bd8a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f8d86c86a8c04a90c9b56ab50c8d7e1ef3fe4998db6efc6c527ae9c3bd8a5d->enter($__internal_f3f8d86c86a8c04a90c9b56ab50c8d7e1ef3fe4998db6efc6c527ae9c3bd8a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_f3f8d86c86a8c04a90c9b56ab50c8d7e1ef3fe4998db6efc6c527ae9c3bd8a5d->leave($__internal_f3f8d86c86a8c04a90c9b56ab50c8d7e1ef3fe4998db6efc6c527ae9c3bd8a5d_prof);

        
        $__internal_77e1e1e338db5d02cc96eaf6fa1cd103f9d41ea1b2cfe8600a6a63ee713f8b30->leave($__internal_77e1e1e338db5d02cc96eaf6fa1cd103f9d41ea1b2cfe8600a6a63ee713f8b30_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_3cf37b64d53a792142817837c9a60ee8e2eecce53a358e33008222c60eb336ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf37b64d53a792142817837c9a60ee8e2eecce53a358e33008222c60eb336ba->enter($__internal_3cf37b64d53a792142817837c9a60ee8e2eecce53a358e33008222c60eb336ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6c4971c1105285baf9ea97a36d4bf7c37b0e28049650383f6c0aad6099422422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4971c1105285baf9ea97a36d4bf7c37b0e28049650383f6c0aad6099422422->enter($__internal_6c4971c1105285baf9ea97a36d4bf7c37b0e28049650383f6c0aad6099422422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_6c4971c1105285baf9ea97a36d4bf7c37b0e28049650383f6c0aad6099422422->leave($__internal_6c4971c1105285baf9ea97a36d4bf7c37b0e28049650383f6c0aad6099422422_prof);

        
        $__internal_3cf37b64d53a792142817837c9a60ee8e2eecce53a358e33008222c60eb336ba->leave($__internal_3cf37b64d53a792142817837c9a60ee8e2eecce53a358e33008222c60eb336ba_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_def4cc349345bbce1c92bd1d39238076e2dc41c7541f73cdb6cb9f8be5bc2a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def4cc349345bbce1c92bd1d39238076e2dc41c7541f73cdb6cb9f8be5bc2a9a->enter($__internal_def4cc349345bbce1c92bd1d39238076e2dc41c7541f73cdb6cb9f8be5bc2a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b2f97229fde08f9740f43df384ff941f4f5c3bb31a60cd1045168fe890cd3d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f97229fde08f9740f43df384ff941f4f5c3bb31a60cd1045168fe890cd3d76->enter($__internal_b2f97229fde08f9740f43df384ff941f4f5c3bb31a60cd1045168fe890cd3d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b2f97229fde08f9740f43df384ff941f4f5c3bb31a60cd1045168fe890cd3d76->leave($__internal_b2f97229fde08f9740f43df384ff941f4f5c3bb31a60cd1045168fe890cd3d76_prof);

        
        $__internal_def4cc349345bbce1c92bd1d39238076e2dc41c7541f73cdb6cb9f8be5bc2a9a->leave($__internal_def4cc349345bbce1c92bd1d39238076e2dc41c7541f73cdb6cb9f8be5bc2a9a_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6481c6e388e5e227079a77921634d35ba2038bd1a009d94c86844b4e23607e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6481c6e388e5e227079a77921634d35ba2038bd1a009d94c86844b4e23607e11->enter($__internal_6481c6e388e5e227079a77921634d35ba2038bd1a009d94c86844b4e23607e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_70ecd6a34bf00e7d17ebebec27070a01cfb2c2b1817adbc5ae641b722caec5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ecd6a34bf00e7d17ebebec27070a01cfb2c2b1817adbc5ae641b722caec5c0->enter($__internal_70ecd6a34bf00e7d17ebebec27070a01cfb2c2b1817adbc5ae641b722caec5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_70ecd6a34bf00e7d17ebebec27070a01cfb2c2b1817adbc5ae641b722caec5c0->leave($__internal_70ecd6a34bf00e7d17ebebec27070a01cfb2c2b1817adbc5ae641b722caec5c0_prof);

        
        $__internal_6481c6e388e5e227079a77921634d35ba2038bd1a009d94c86844b4e23607e11->leave($__internal_6481c6e388e5e227079a77921634d35ba2038bd1a009d94c86844b4e23607e11_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_92b483227aa1d6539537bec0eba6f09f4256caaa7e42b89cd672ad016dbbae3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b483227aa1d6539537bec0eba6f09f4256caaa7e42b89cd672ad016dbbae3b->enter($__internal_92b483227aa1d6539537bec0eba6f09f4256caaa7e42b89cd672ad016dbbae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_dcdf823e7896f431b98a85d886124fa58316f13149b47793bd36a780aa5f7fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdf823e7896f431b98a85d886124fa58316f13149b47793bd36a780aa5f7fa9->enter($__internal_dcdf823e7896f431b98a85d886124fa58316f13149b47793bd36a780aa5f7fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_dcdf823e7896f431b98a85d886124fa58316f13149b47793bd36a780aa5f7fa9->leave($__internal_dcdf823e7896f431b98a85d886124fa58316f13149b47793bd36a780aa5f7fa9_prof);

        
        $__internal_92b483227aa1d6539537bec0eba6f09f4256caaa7e42b89cd672ad016dbbae3b->leave($__internal_92b483227aa1d6539537bec0eba6f09f4256caaa7e42b89cd672ad016dbbae3b_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_50e089340d0a752e6f67af3e0d8e1d0296ca4fcd87290612d06e6e95d0f9d9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e089340d0a752e6f67af3e0d8e1d0296ca4fcd87290612d06e6e95d0f9d9aa->enter($__internal_50e089340d0a752e6f67af3e0d8e1d0296ca4fcd87290612d06e6e95d0f9d9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c4c15822a66bdf20e1fe24faad2313db7b5fa15b4f56c6c300e9699292c75d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c15822a66bdf20e1fe24faad2313db7b5fa15b4f56c6c300e9699292c75d11->enter($__internal_c4c15822a66bdf20e1fe24faad2313db7b5fa15b4f56c6c300e9699292c75d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c4c15822a66bdf20e1fe24faad2313db7b5fa15b4f56c6c300e9699292c75d11->leave($__internal_c4c15822a66bdf20e1fe24faad2313db7b5fa15b4f56c6c300e9699292c75d11_prof);

        
        $__internal_50e089340d0a752e6f67af3e0d8e1d0296ca4fcd87290612d06e6e95d0f9d9aa->leave($__internal_50e089340d0a752e6f67af3e0d8e1d0296ca4fcd87290612d06e6e95d0f9d9aa_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_30539af936ca0393490dc8005e860b79d5964e592c51b9546c08d94001d91855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30539af936ca0393490dc8005e860b79d5964e592c51b9546c08d94001d91855->enter($__internal_30539af936ca0393490dc8005e860b79d5964e592c51b9546c08d94001d91855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8bcd51de1505654c6bd07cb5816c94d2d121f7834eba5e201c8d77f2e74a9f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcd51de1505654c6bd07cb5816c94d2d121f7834eba5e201c8d77f2e74a9f92->enter($__internal_8bcd51de1505654c6bd07cb5816c94d2d121f7834eba5e201c8d77f2e74a9f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8bcd51de1505654c6bd07cb5816c94d2d121f7834eba5e201c8d77f2e74a9f92->leave($__internal_8bcd51de1505654c6bd07cb5816c94d2d121f7834eba5e201c8d77f2e74a9f92_prof);

        
        $__internal_30539af936ca0393490dc8005e860b79d5964e592c51b9546c08d94001d91855->leave($__internal_30539af936ca0393490dc8005e860b79d5964e592c51b9546c08d94001d91855_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c228e2924de59b57256d378458310a35d643530fdf388a9ef58eb69463769495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c228e2924de59b57256d378458310a35d643530fdf388a9ef58eb69463769495->enter($__internal_c228e2924de59b57256d378458310a35d643530fdf388a9ef58eb69463769495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_92f0438ef7febe84eb8df9ee8bdf5ccb251e1073685071edc3fe0a8775133134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f0438ef7febe84eb8df9ee8bdf5ccb251e1073685071edc3fe0a8775133134->enter($__internal_92f0438ef7febe84eb8df9ee8bdf5ccb251e1073685071edc3fe0a8775133134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_92f0438ef7febe84eb8df9ee8bdf5ccb251e1073685071edc3fe0a8775133134->leave($__internal_92f0438ef7febe84eb8df9ee8bdf5ccb251e1073685071edc3fe0a8775133134_prof);

        
        $__internal_c228e2924de59b57256d378458310a35d643530fdf388a9ef58eb69463769495->leave($__internal_c228e2924de59b57256d378458310a35d643530fdf388a9ef58eb69463769495_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c1540351a5f335c8e34e9e63d5dc2b1135d1c73241d49f79df83fd37286ec256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1540351a5f335c8e34e9e63d5dc2b1135d1c73241d49f79df83fd37286ec256->enter($__internal_c1540351a5f335c8e34e9e63d5dc2b1135d1c73241d49f79df83fd37286ec256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8b13efc60ae32e8301eb8fabf51993fa71b82203f65b9961af3a3f1a3fbc2258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b13efc60ae32e8301eb8fabf51993fa71b82203f65b9961af3a3f1a3fbc2258->enter($__internal_8b13efc60ae32e8301eb8fabf51993fa71b82203f65b9961af3a3f1a3fbc2258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8b13efc60ae32e8301eb8fabf51993fa71b82203f65b9961af3a3f1a3fbc2258->leave($__internal_8b13efc60ae32e8301eb8fabf51993fa71b82203f65b9961af3a3f1a3fbc2258_prof);

        
        $__internal_c1540351a5f335c8e34e9e63d5dc2b1135d1c73241d49f79df83fd37286ec256->leave($__internal_c1540351a5f335c8e34e9e63d5dc2b1135d1c73241d49f79df83fd37286ec256_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_81447c4dc8e8ecd8b4baafcc049e289cfa4e4d9ae6d24171c27796232f24e8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81447c4dc8e8ecd8b4baafcc049e289cfa4e4d9ae6d24171c27796232f24e8be->enter($__internal_81447c4dc8e8ecd8b4baafcc049e289cfa4e4d9ae6d24171c27796232f24e8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2aae02b1c8634445a5523fb2bfebc6ea5b5d49b11a6c1fefe24f87e7e58b1af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aae02b1c8634445a5523fb2bfebc6ea5b5d49b11a6c1fefe24f87e7e58b1af8->enter($__internal_2aae02b1c8634445a5523fb2bfebc6ea5b5d49b11a6c1fefe24f87e7e58b1af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2aae02b1c8634445a5523fb2bfebc6ea5b5d49b11a6c1fefe24f87e7e58b1af8->leave($__internal_2aae02b1c8634445a5523fb2bfebc6ea5b5d49b11a6c1fefe24f87e7e58b1af8_prof);

        
        $__internal_81447c4dc8e8ecd8b4baafcc049e289cfa4e4d9ae6d24171c27796232f24e8be->leave($__internal_81447c4dc8e8ecd8b4baafcc049e289cfa4e4d9ae6d24171c27796232f24e8be_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bceafb62b4858b2f489cc8f9d4302f90ff4098efcaa05b967c3559663152c5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bceafb62b4858b2f489cc8f9d4302f90ff4098efcaa05b967c3559663152c5d8->enter($__internal_bceafb62b4858b2f489cc8f9d4302f90ff4098efcaa05b967c3559663152c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_764497202d0f05fe7304f1772f4bccb69293654d20122e1eeb3c007851b2dac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764497202d0f05fe7304f1772f4bccb69293654d20122e1eeb3c007851b2dac2->enter($__internal_764497202d0f05fe7304f1772f4bccb69293654d20122e1eeb3c007851b2dac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_764497202d0f05fe7304f1772f4bccb69293654d20122e1eeb3c007851b2dac2->leave($__internal_764497202d0f05fe7304f1772f4bccb69293654d20122e1eeb3c007851b2dac2_prof);

        
        $__internal_bceafb62b4858b2f489cc8f9d4302f90ff4098efcaa05b967c3559663152c5d8->leave($__internal_bceafb62b4858b2f489cc8f9d4302f90ff4098efcaa05b967c3559663152c5d8_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_055ab7bda41595676a54fd0498dc71d3e7224f87469a8847c41df232518a95d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055ab7bda41595676a54fd0498dc71d3e7224f87469a8847c41df232518a95d8->enter($__internal_055ab7bda41595676a54fd0498dc71d3e7224f87469a8847c41df232518a95d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ea09b454b21c7db3a3d8974b8474b99d42c20cd856268098bf919931d3ae6bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea09b454b21c7db3a3d8974b8474b99d42c20cd856268098bf919931d3ae6bb1->enter($__internal_ea09b454b21c7db3a3d8974b8474b99d42c20cd856268098bf919931d3ae6bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ea09b454b21c7db3a3d8974b8474b99d42c20cd856268098bf919931d3ae6bb1->leave($__internal_ea09b454b21c7db3a3d8974b8474b99d42c20cd856268098bf919931d3ae6bb1_prof);

        
        $__internal_055ab7bda41595676a54fd0498dc71d3e7224f87469a8847c41df232518a95d8->leave($__internal_055ab7bda41595676a54fd0498dc71d3e7224f87469a8847c41df232518a95d8_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/home/vlad/Work/ghBlog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
