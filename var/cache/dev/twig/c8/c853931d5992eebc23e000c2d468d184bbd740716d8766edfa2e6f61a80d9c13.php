<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_4ecc64d3b3f9f99ae3723de27dd89a7ce8cd6ce2b77a97118d54603cdd56d5c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c123bddc2b9343de5ff704e6dcd1740dbc719ab342bde18d8a894b5ca7e03e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c123bddc2b9343de5ff704e6dcd1740dbc719ab342bde18d8a894b5ca7e03e9->enter($__internal_4c123bddc2b9343de5ff704e6dcd1740dbc719ab342bde18d8a894b5ca7e03e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_1a02a78dbd8e1f2491d7639ec7e68fa99bf8735130d438618bd55063fbc3fe57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a02a78dbd8e1f2491d7639ec7e68fa99bf8735130d438618bd55063fbc3fe57->enter($__internal_1a02a78dbd8e1f2491d7639ec7e68fa99bf8735130d438618bd55063fbc3fe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_4c123bddc2b9343de5ff704e6dcd1740dbc719ab342bde18d8a894b5ca7e03e9->leave($__internal_4c123bddc2b9343de5ff704e6dcd1740dbc719ab342bde18d8a894b5ca7e03e9_prof);

        
        $__internal_1a02a78dbd8e1f2491d7639ec7e68fa99bf8735130d438618bd55063fbc3fe57->leave($__internal_1a02a78dbd8e1f2491d7639ec7e68fa99bf8735130d438618bd55063fbc3fe57_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e29b7cacded3f4b24d62ce33a83203623f871b955955e750887bf9c31f2ae4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29b7cacded3f4b24d62ce33a83203623f871b955955e750887bf9c31f2ae4d3->enter($__internal_e29b7cacded3f4b24d62ce33a83203623f871b955955e750887bf9c31f2ae4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_635f7aef39e13714bf81aa2079acda2f940aa54a1c91c1cbeb0ead46d3a3f07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635f7aef39e13714bf81aa2079acda2f940aa54a1c91c1cbeb0ead46d3a3f07a->enter($__internal_635f7aef39e13714bf81aa2079acda2f940aa54a1c91c1cbeb0ead46d3a3f07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_635f7aef39e13714bf81aa2079acda2f940aa54a1c91c1cbeb0ead46d3a3f07a->leave($__internal_635f7aef39e13714bf81aa2079acda2f940aa54a1c91c1cbeb0ead46d3a3f07a_prof);

        
        $__internal_e29b7cacded3f4b24d62ce33a83203623f871b955955e750887bf9c31f2ae4d3->leave($__internal_e29b7cacded3f4b24d62ce33a83203623f871b955955e750887bf9c31f2ae4d3_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1bd00fcf058b115830a79b4aa472807d21e9189754b2751bf7c8805926b4fb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd00fcf058b115830a79b4aa472807d21e9189754b2751bf7c8805926b4fb56->enter($__internal_1bd00fcf058b115830a79b4aa472807d21e9189754b2751bf7c8805926b4fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8adb0c027e8aa861dcaf5700bd89380e77a0a752cbfd8321a5c2d6dda8ce5c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adb0c027e8aa861dcaf5700bd89380e77a0a752cbfd8321a5c2d6dda8ce5c8c->enter($__internal_8adb0c027e8aa861dcaf5700bd89380e77a0a752cbfd8321a5c2d6dda8ce5c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_8adb0c027e8aa861dcaf5700bd89380e77a0a752cbfd8321a5c2d6dda8ce5c8c->leave($__internal_8adb0c027e8aa861dcaf5700bd89380e77a0a752cbfd8321a5c2d6dda8ce5c8c_prof);

        
        $__internal_1bd00fcf058b115830a79b4aa472807d21e9189754b2751bf7c8805926b4fb56->leave($__internal_1bd00fcf058b115830a79b4aa472807d21e9189754b2751bf7c8805926b4fb56_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6814f5752408160441cfc4cd1edcd68b23cf89f65eafeb017edcb5728d24145d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6814f5752408160441cfc4cd1edcd68b23cf89f65eafeb017edcb5728d24145d->enter($__internal_6814f5752408160441cfc4cd1edcd68b23cf89f65eafeb017edcb5728d24145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_da13e79f25a67c39067c18ee5cf34b708e33e2d3445f804d88a2c8f0927877d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da13e79f25a67c39067c18ee5cf34b708e33e2d3445f804d88a2c8f0927877d7->enter($__internal_da13e79f25a67c39067c18ee5cf34b708e33e2d3445f804d88a2c8f0927877d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_da13e79f25a67c39067c18ee5cf34b708e33e2d3445f804d88a2c8f0927877d7->leave($__internal_da13e79f25a67c39067c18ee5cf34b708e33e2d3445f804d88a2c8f0927877d7_prof);

        
        $__internal_6814f5752408160441cfc4cd1edcd68b23cf89f65eafeb017edcb5728d24145d->leave($__internal_6814f5752408160441cfc4cd1edcd68b23cf89f65eafeb017edcb5728d24145d_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1da6f55ee6344cd1403d8f9e4d537ec5db44961d26c9c86113566dd5152e1837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da6f55ee6344cd1403d8f9e4d537ec5db44961d26c9c86113566dd5152e1837->enter($__internal_1da6f55ee6344cd1403d8f9e4d537ec5db44961d26c9c86113566dd5152e1837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_fe4fcf6dc57f910d51507d60bd7f24aac134b2d134e607c56f4681e61b9fadd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4fcf6dc57f910d51507d60bd7f24aac134b2d134e607c56f4681e61b9fadd7->enter($__internal_fe4fcf6dc57f910d51507d60bd7f24aac134b2d134e607c56f4681e61b9fadd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_fe4fcf6dc57f910d51507d60bd7f24aac134b2d134e607c56f4681e61b9fadd7->leave($__internal_fe4fcf6dc57f910d51507d60bd7f24aac134b2d134e607c56f4681e61b9fadd7_prof);

        
        $__internal_1da6f55ee6344cd1403d8f9e4d537ec5db44961d26c9c86113566dd5152e1837->leave($__internal_1da6f55ee6344cd1403d8f9e4d537ec5db44961d26c9c86113566dd5152e1837_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_1bdf7e6a4e476451dc1fe513e8fab580245de75fc45b7d143bfada48bb3f10d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bdf7e6a4e476451dc1fe513e8fab580245de75fc45b7d143bfada48bb3f10d6->enter($__internal_1bdf7e6a4e476451dc1fe513e8fab580245de75fc45b7d143bfada48bb3f10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_ca53cb8fadbf0110e71290ac447416f5501dd4f223c2273446d2b1eb5d87f6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca53cb8fadbf0110e71290ac447416f5501dd4f223c2273446d2b1eb5d87f6d7->enter($__internal_ca53cb8fadbf0110e71290ac447416f5501dd4f223c2273446d2b1eb5d87f6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_ca53cb8fadbf0110e71290ac447416f5501dd4f223c2273446d2b1eb5d87f6d7->leave($__internal_ca53cb8fadbf0110e71290ac447416f5501dd4f223c2273446d2b1eb5d87f6d7_prof);

        
        $__internal_1bdf7e6a4e476451dc1fe513e8fab580245de75fc45b7d143bfada48bb3f10d6->leave($__internal_1bdf7e6a4e476451dc1fe513e8fab580245de75fc45b7d143bfada48bb3f10d6_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ad2f490e3a522af437aa856c6013880917c08953bc724eeac4e479769606696b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2f490e3a522af437aa856c6013880917c08953bc724eeac4e479769606696b->enter($__internal_ad2f490e3a522af437aa856c6013880917c08953bc724eeac4e479769606696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0d70773a9875df32aff045a044869e4cd1567e6a70d0cd7ee308c61eba75424c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d70773a9875df32aff045a044869e4cd1567e6a70d0cd7ee308c61eba75424c->enter($__internal_0d70773a9875df32aff045a044869e4cd1567e6a70d0cd7ee308c61eba75424c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0d70773a9875df32aff045a044869e4cd1567e6a70d0cd7ee308c61eba75424c->leave($__internal_0d70773a9875df32aff045a044869e4cd1567e6a70d0cd7ee308c61eba75424c_prof);

        
        $__internal_ad2f490e3a522af437aa856c6013880917c08953bc724eeac4e479769606696b->leave($__internal_ad2f490e3a522af437aa856c6013880917c08953bc724eeac4e479769606696b_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0cd85fd46a2fb1c159d136b1489c43f6242407e4a8d2e9250ab799b70d3b55ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd85fd46a2fb1c159d136b1489c43f6242407e4a8d2e9250ab799b70d3b55ea->enter($__internal_0cd85fd46a2fb1c159d136b1489c43f6242407e4a8d2e9250ab799b70d3b55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_518b08edca78351d5b26fe1b86995db483ac237ea0da4d56c4a7b055681ae576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518b08edca78351d5b26fe1b86995db483ac237ea0da4d56c4a7b055681ae576->enter($__internal_518b08edca78351d5b26fe1b86995db483ac237ea0da4d56c4a7b055681ae576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_518b08edca78351d5b26fe1b86995db483ac237ea0da4d56c4a7b055681ae576->leave($__internal_518b08edca78351d5b26fe1b86995db483ac237ea0da4d56c4a7b055681ae576_prof);

        
        $__internal_0cd85fd46a2fb1c159d136b1489c43f6242407e4a8d2e9250ab799b70d3b55ea->leave($__internal_0cd85fd46a2fb1c159d136b1489c43f6242407e4a8d2e9250ab799b70d3b55ea_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f355a8213585953f2cd80e2da77bc2cfc22b2dd2073e81e16b470cfcbaac577e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f355a8213585953f2cd80e2da77bc2cfc22b2dd2073e81e16b470cfcbaac577e->enter($__internal_f355a8213585953f2cd80e2da77bc2cfc22b2dd2073e81e16b470cfcbaac577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_0753283dd2f69c026aebbf5fbc58048a6362a22ee34870b5409915129a80235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0753283dd2f69c026aebbf5fbc58048a6362a22ee34870b5409915129a80235d->enter($__internal_0753283dd2f69c026aebbf5fbc58048a6362a22ee34870b5409915129a80235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_0753283dd2f69c026aebbf5fbc58048a6362a22ee34870b5409915129a80235d->leave($__internal_0753283dd2f69c026aebbf5fbc58048a6362a22ee34870b5409915129a80235d_prof);

        
        $__internal_f355a8213585953f2cd80e2da77bc2cfc22b2dd2073e81e16b470cfcbaac577e->leave($__internal_f355a8213585953f2cd80e2da77bc2cfc22b2dd2073e81e16b470cfcbaac577e_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_412de3b7160a3685ef3bbfc31a1e417e956cc1aa4fbbda5ff54f1c303c147621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412de3b7160a3685ef3bbfc31a1e417e956cc1aa4fbbda5ff54f1c303c147621->enter($__internal_412de3b7160a3685ef3bbfc31a1e417e956cc1aa4fbbda5ff54f1c303c147621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_544f49e4d92b89eb16c732ca3673f89c0ec2d101b7631909d07014f92a96df49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544f49e4d92b89eb16c732ca3673f89c0ec2d101b7631909d07014f92a96df49->enter($__internal_544f49e4d92b89eb16c732ca3673f89c0ec2d101b7631909d07014f92a96df49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_544f49e4d92b89eb16c732ca3673f89c0ec2d101b7631909d07014f92a96df49->leave($__internal_544f49e4d92b89eb16c732ca3673f89c0ec2d101b7631909d07014f92a96df49_prof);

        
        $__internal_412de3b7160a3685ef3bbfc31a1e417e956cc1aa4fbbda5ff54f1c303c147621->leave($__internal_412de3b7160a3685ef3bbfc31a1e417e956cc1aa4fbbda5ff54f1c303c147621_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9647649ec135a0016945cdd95122f68f5a307365ea2ac0d081f799d552e05826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9647649ec135a0016945cdd95122f68f5a307365ea2ac0d081f799d552e05826->enter($__internal_9647649ec135a0016945cdd95122f68f5a307365ea2ac0d081f799d552e05826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f25eb054348b3de89a364261e3ae834b958274e1903c531db9194f539e1cbe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25eb054348b3de89a364261e3ae834b958274e1903c531db9194f539e1cbe89->enter($__internal_f25eb054348b3de89a364261e3ae834b958274e1903c531db9194f539e1cbe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_f25eb054348b3de89a364261e3ae834b958274e1903c531db9194f539e1cbe89->leave($__internal_f25eb054348b3de89a364261e3ae834b958274e1903c531db9194f539e1cbe89_prof);

        
        $__internal_9647649ec135a0016945cdd95122f68f5a307365ea2ac0d081f799d552e05826->leave($__internal_9647649ec135a0016945cdd95122f68f5a307365ea2ac0d081f799d552e05826_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_38f2407533a786dd175b134ea088e1203c8f5ea2cfbee0481ef8c96963c499c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f2407533a786dd175b134ea088e1203c8f5ea2cfbee0481ef8c96963c499c4->enter($__internal_38f2407533a786dd175b134ea088e1203c8f5ea2cfbee0481ef8c96963c499c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_1b974c9c7446aca254498dd7534edb5ef4c35eb83dc338dc050ffe5f266e2073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b974c9c7446aca254498dd7534edb5ef4c35eb83dc338dc050ffe5f266e2073->enter($__internal_1b974c9c7446aca254498dd7534edb5ef4c35eb83dc338dc050ffe5f266e2073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_1b974c9c7446aca254498dd7534edb5ef4c35eb83dc338dc050ffe5f266e2073->leave($__internal_1b974c9c7446aca254498dd7534edb5ef4c35eb83dc338dc050ffe5f266e2073_prof);

        
        $__internal_38f2407533a786dd175b134ea088e1203c8f5ea2cfbee0481ef8c96963c499c4->leave($__internal_38f2407533a786dd175b134ea088e1203c8f5ea2cfbee0481ef8c96963c499c4_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d6120eb2a8baffbcc1ab93fef5e7bba221ab94ca992134807c73df044181e0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6120eb2a8baffbcc1ab93fef5e7bba221ab94ca992134807c73df044181e0e5->enter($__internal_d6120eb2a8baffbcc1ab93fef5e7bba221ab94ca992134807c73df044181e0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_623ecdfde391699ea67f5f60fa20139e2348f100fc6346a1b8d7d3fd7d10c247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623ecdfde391699ea67f5f60fa20139e2348f100fc6346a1b8d7d3fd7d10c247->enter($__internal_623ecdfde391699ea67f5f60fa20139e2348f100fc6346a1b8d7d3fd7d10c247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 106
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 111
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_623ecdfde391699ea67f5f60fa20139e2348f100fc6346a1b8d7d3fd7d10c247->leave($__internal_623ecdfde391699ea67f5f60fa20139e2348f100fc6346a1b8d7d3fd7d10c247_prof);

        
        $__internal_d6120eb2a8baffbcc1ab93fef5e7bba221ab94ca992134807c73df044181e0e5->leave($__internal_d6120eb2a8baffbcc1ab93fef5e7bba221ab94ca992134807c73df044181e0e5_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8b5c41473007ccdc10a58e29988c0c9466915a0daf845e3cf2adc2a54a003a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5c41473007ccdc10a58e29988c0c9466915a0daf845e3cf2adc2a54a003a96->enter($__internal_8b5c41473007ccdc10a58e29988c0c9466915a0daf845e3cf2adc2a54a003a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_46c03b32c0b6c586b5d7f13891cacfe3f37684f3240f2357263ad499d22f485b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c03b32c0b6c586b5d7f13891cacfe3f37684f3240f2357263ad499d22f485b->enter($__internal_46c03b32c0b6c586b5d7f13891cacfe3f37684f3240f2357263ad499d22f485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_46c03b32c0b6c586b5d7f13891cacfe3f37684f3240f2357263ad499d22f485b->leave($__internal_46c03b32c0b6c586b5d7f13891cacfe3f37684f3240f2357263ad499d22f485b_prof);

        
        $__internal_8b5c41473007ccdc10a58e29988c0c9466915a0daf845e3cf2adc2a54a003a96->leave($__internal_8b5c41473007ccdc10a58e29988c0c9466915a0daf845e3cf2adc2a54a003a96_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f233d20002af2533583e0dda3d5cbc63a227f6ee06fa962dc878d10ba9a3426b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f233d20002af2533583e0dda3d5cbc63a227f6ee06fa962dc878d10ba9a3426b->enter($__internal_f233d20002af2533583e0dda3d5cbc63a227f6ee06fa962dc878d10ba9a3426b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4444aa121bcfeb73f1c1d79b5c55f208adf6f6ae3c2bee063b6522475e8a7788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4444aa121bcfeb73f1c1d79b5c55f208adf6f6ae3c2bee063b6522475e8a7788->enter($__internal_4444aa121bcfeb73f1c1d79b5c55f208adf6f6ae3c2bee063b6522475e8a7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 142
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 147
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 148
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 149
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 150
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 151
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 157
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
            // line 158
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_4444aa121bcfeb73f1c1d79b5c55f208adf6f6ae3c2bee063b6522475e8a7788->leave($__internal_4444aa121bcfeb73f1c1d79b5c55f208adf6f6ae3c2bee063b6522475e8a7788_prof);

        
        $__internal_f233d20002af2533583e0dda3d5cbc63a227f6ee06fa962dc878d10ba9a3426b->leave($__internal_f233d20002af2533583e0dda3d5cbc63a227f6ee06fa962dc878d10ba9a3426b_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0e43789e893c1f03cc1227ab874d224eb2aa729b82013a94dff9d37a95cf6497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e43789e893c1f03cc1227ab874d224eb2aa729b82013a94dff9d37a95cf6497->enter($__internal_0e43789e893c1f03cc1227ab874d224eb2aa729b82013a94dff9d37a95cf6497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fe1f055d5868d5cc40eab4a6fddf6c6875274f8b195f2e96cfe50ae268776980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1f055d5868d5cc40eab4a6fddf6c6875274f8b195f2e96cfe50ae268776980->enter($__internal_fe1f055d5868d5cc40eab4a6fddf6c6875274f8b195f2e96cfe50ae268776980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_fe1f055d5868d5cc40eab4a6fddf6c6875274f8b195f2e96cfe50ae268776980->leave($__internal_fe1f055d5868d5cc40eab4a6fddf6c6875274f8b195f2e96cfe50ae268776980_prof);

        
        $__internal_0e43789e893c1f03cc1227ab874d224eb2aa729b82013a94dff9d37a95cf6497->leave($__internal_0e43789e893c1f03cc1227ab874d224eb2aa729b82013a94dff9d37a95cf6497_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9eede512a24008c1c011ad70de79ea7335cbe93ad98dbfef7ececb2f61e921e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eede512a24008c1c011ad70de79ea7335cbe93ad98dbfef7ececb2f61e921e9->enter($__internal_9eede512a24008c1c011ad70de79ea7335cbe93ad98dbfef7ececb2f61e921e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_591ecb1d578b14b1eade25ce54f7bfc9fc3424a0f5626fdc8e9f216fb72af45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591ecb1d578b14b1eade25ce54f7bfc9fc3424a0f5626fdc8e9f216fb72af45f->enter($__internal_591ecb1d578b14b1eade25ce54f7bfc9fc3424a0f5626fdc8e9f216fb72af45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_591ecb1d578b14b1eade25ce54f7bfc9fc3424a0f5626fdc8e9f216fb72af45f->leave($__internal_591ecb1d578b14b1eade25ce54f7bfc9fc3424a0f5626fdc8e9f216fb72af45f_prof);

        
        $__internal_9eede512a24008c1c011ad70de79ea7335cbe93ad98dbfef7ececb2f61e921e9->leave($__internal_9eede512a24008c1c011ad70de79ea7335cbe93ad98dbfef7ececb2f61e921e9_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
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

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
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
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
