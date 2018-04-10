<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_64d2029e502906034aad96cc4f04d3e301625abf6088113e9fc68ad3a3a7bed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17fac1cc683b761c6b6c01afb9c2ddfff14965ea59a458dfc730502a8413e3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fac1cc683b761c6b6c01afb9c2ddfff14965ea59a458dfc730502a8413e3b9->enter($__internal_17fac1cc683b761c6b6c01afb9c2ddfff14965ea59a458dfc730502a8413e3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_ab23d0de43e8902ee3a6ca386cd5d3a5cfc7ab36bde22dafe1fea0430d30668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab23d0de43e8902ee3a6ca386cd5d3a5cfc7ab36bde22dafe1fea0430d30668d->enter($__internal_ab23d0de43e8902ee3a6ca386cd5d3a5cfc7ab36bde22dafe1fea0430d30668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_17fac1cc683b761c6b6c01afb9c2ddfff14965ea59a458dfc730502a8413e3b9->leave($__internal_17fac1cc683b761c6b6c01afb9c2ddfff14965ea59a458dfc730502a8413e3b9_prof);

        
        $__internal_ab23d0de43e8902ee3a6ca386cd5d3a5cfc7ab36bde22dafe1fea0430d30668d->leave($__internal_ab23d0de43e8902ee3a6ca386cd5d3a5cfc7ab36bde22dafe1fea0430d30668d_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2b28b8f8be909085a2ac91a11b2067716bd78c7d73f41b715680e76210b706f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b28b8f8be909085a2ac91a11b2067716bd78c7d73f41b715680e76210b706f8->enter($__internal_2b28b8f8be909085a2ac91a11b2067716bd78c7d73f41b715680e76210b706f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1d3eb43be027f17a5fe0e6006e4f5ca6b96c1678a35af975046e569965399692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3eb43be027f17a5fe0e6006e4f5ca6b96c1678a35af975046e569965399692->enter($__internal_1d3eb43be027f17a5fe0e6006e4f5ca6b96c1678a35af975046e569965399692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_1d3eb43be027f17a5fe0e6006e4f5ca6b96c1678a35af975046e569965399692->leave($__internal_1d3eb43be027f17a5fe0e6006e4f5ca6b96c1678a35af975046e569965399692_prof);

        
        $__internal_2b28b8f8be909085a2ac91a11b2067716bd78c7d73f41b715680e76210b706f8->leave($__internal_2b28b8f8be909085a2ac91a11b2067716bd78c7d73f41b715680e76210b706f8_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c2d741e176f23c7bbd3e2869de5cba61dcab584520cdb3bd63d2f6f58fe8b948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d741e176f23c7bbd3e2869de5cba61dcab584520cdb3bd63d2f6f58fe8b948->enter($__internal_c2d741e176f23c7bbd3e2869de5cba61dcab584520cdb3bd63d2f6f58fe8b948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_10679466d8eb7cbbfb00a21f24ee72d1c4260701ec6dd4008143e75fd514f8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10679466d8eb7cbbfb00a21f24ee72d1c4260701ec6dd4008143e75fd514f8b6->enter($__internal_10679466d8eb7cbbfb00a21f24ee72d1c4260701ec6dd4008143e75fd514f8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_10679466d8eb7cbbfb00a21f24ee72d1c4260701ec6dd4008143e75fd514f8b6->leave($__internal_10679466d8eb7cbbfb00a21f24ee72d1c4260701ec6dd4008143e75fd514f8b6_prof);

        
        $__internal_c2d741e176f23c7bbd3e2869de5cba61dcab584520cdb3bd63d2f6f58fe8b948->leave($__internal_c2d741e176f23c7bbd3e2869de5cba61dcab584520cdb3bd63d2f6f58fe8b948_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2167474314a2c1736a799479efc8de400a7b22200f7d1d8152e8d658c68500f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2167474314a2c1736a799479efc8de400a7b22200f7d1d8152e8d658c68500f4->enter($__internal_2167474314a2c1736a799479efc8de400a7b22200f7d1d8152e8d658c68500f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_94f1b9b4141f391ed4af810f91e4233cd045a7137c05257be50488b58df3cfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f1b9b4141f391ed4af810f91e4233cd045a7137c05257be50488b58df3cfef->enter($__internal_94f1b9b4141f391ed4af810f91e4233cd045a7137c05257be50488b58df3cfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_94f1b9b4141f391ed4af810f91e4233cd045a7137c05257be50488b58df3cfef->leave($__internal_94f1b9b4141f391ed4af810f91e4233cd045a7137c05257be50488b58df3cfef_prof);

        
        $__internal_2167474314a2c1736a799479efc8de400a7b22200f7d1d8152e8d658c68500f4->leave($__internal_2167474314a2c1736a799479efc8de400a7b22200f7d1d8152e8d658c68500f4_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_9a1f397ef8c4ec6786642df84b02158d07d24fbc9283817726ad12b6386a2805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1f397ef8c4ec6786642df84b02158d07d24fbc9283817726ad12b6386a2805->enter($__internal_9a1f397ef8c4ec6786642df84b02158d07d24fbc9283817726ad12b6386a2805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_2940eae2c660f352db53d32caf9990feed0d6a06b99be5c13a31f966ee7688ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2940eae2c660f352db53d32caf9990feed0d6a06b99be5c13a31f966ee7688ae->enter($__internal_2940eae2c660f352db53d32caf9990feed0d6a06b99be5c13a31f966ee7688ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_2940eae2c660f352db53d32caf9990feed0d6a06b99be5c13a31f966ee7688ae->leave($__internal_2940eae2c660f352db53d32caf9990feed0d6a06b99be5c13a31f966ee7688ae_prof);

        
        $__internal_9a1f397ef8c4ec6786642df84b02158d07d24fbc9283817726ad12b6386a2805->leave($__internal_9a1f397ef8c4ec6786642df84b02158d07d24fbc9283817726ad12b6386a2805_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0b9c1a35bcee75043bffe4e2a8de7e31209b10c111b141da678c26b681303d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9c1a35bcee75043bffe4e2a8de7e31209b10c111b141da678c26b681303d97->enter($__internal_0b9c1a35bcee75043bffe4e2a8de7e31209b10c111b141da678c26b681303d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c94e53725e3c712ffd23cf33cdea34988952c709fbbe49097d3e31a05acc064e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94e53725e3c712ffd23cf33cdea34988952c709fbbe49097d3e31a05acc064e->enter($__internal_c94e53725e3c712ffd23cf33cdea34988952c709fbbe49097d3e31a05acc064e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_c94e53725e3c712ffd23cf33cdea34988952c709fbbe49097d3e31a05acc064e->leave($__internal_c94e53725e3c712ffd23cf33cdea34988952c709fbbe49097d3e31a05acc064e_prof);

        
        $__internal_0b9c1a35bcee75043bffe4e2a8de7e31209b10c111b141da678c26b681303d97->leave($__internal_0b9c1a35bcee75043bffe4e2a8de7e31209b10c111b141da678c26b681303d97_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_06c0bf00338216166b6e9447d610a6041b6758b212a33a689e46c904f64aec05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c0bf00338216166b6e9447d610a6041b6758b212a33a689e46c904f64aec05->enter($__internal_06c0bf00338216166b6e9447d610a6041b6758b212a33a689e46c904f64aec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7e3747db04b019d51fb8b215663c4edc581e5a6f9ba549f0906c118f1be2e7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3747db04b019d51fb8b215663c4edc581e5a6f9ba549f0906c118f1be2e7d8->enter($__internal_7e3747db04b019d51fb8b215663c4edc581e5a6f9ba549f0906c118f1be2e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_7e3747db04b019d51fb8b215663c4edc581e5a6f9ba549f0906c118f1be2e7d8->leave($__internal_7e3747db04b019d51fb8b215663c4edc581e5a6f9ba549f0906c118f1be2e7d8_prof);

        
        $__internal_06c0bf00338216166b6e9447d610a6041b6758b212a33a689e46c904f64aec05->leave($__internal_06c0bf00338216166b6e9447d610a6041b6758b212a33a689e46c904f64aec05_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_347436f4a335a66637e61d6802f62d370dc1e03153a1d951351c0442ce655ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347436f4a335a66637e61d6802f62d370dc1e03153a1d951351c0442ce655ad4->enter($__internal_347436f4a335a66637e61d6802f62d370dc1e03153a1d951351c0442ce655ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b9877acb91ea196f0d5c2061bc033520e4feda08c1b4da3eb96c2f7782520f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9877acb91ea196f0d5c2061bc033520e4feda08c1b4da3eb96c2f7782520f88->enter($__internal_b9877acb91ea196f0d5c2061bc033520e4feda08c1b4da3eb96c2f7782520f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_b9877acb91ea196f0d5c2061bc033520e4feda08c1b4da3eb96c2f7782520f88->leave($__internal_b9877acb91ea196f0d5c2061bc033520e4feda08c1b4da3eb96c2f7782520f88_prof);

        
        $__internal_347436f4a335a66637e61d6802f62d370dc1e03153a1d951351c0442ce655ad4->leave($__internal_347436f4a335a66637e61d6802f62d370dc1e03153a1d951351c0442ce655ad4_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6b4c05bacced54ccdf2bf37e399600501ac824e2cdabbdf2bb50e22d11bdc7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4c05bacced54ccdf2bf37e399600501ac824e2cdabbdf2bb50e22d11bdc7dc->enter($__internal_6b4c05bacced54ccdf2bf37e399600501ac824e2cdabbdf2bb50e22d11bdc7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c44e480214097394cd32db36bf69c731699930d7eb49b3a21e765deebfd1042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44e480214097394cd32db36bf69c731699930d7eb49b3a21e765deebfd1042d->enter($__internal_c44e480214097394cd32db36bf69c731699930d7eb49b3a21e765deebfd1042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_c44e480214097394cd32db36bf69c731699930d7eb49b3a21e765deebfd1042d->leave($__internal_c44e480214097394cd32db36bf69c731699930d7eb49b3a21e765deebfd1042d_prof);

        
        $__internal_6b4c05bacced54ccdf2bf37e399600501ac824e2cdabbdf2bb50e22d11bdc7dc->leave($__internal_6b4c05bacced54ccdf2bf37e399600501ac824e2cdabbdf2bb50e22d11bdc7dc_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
