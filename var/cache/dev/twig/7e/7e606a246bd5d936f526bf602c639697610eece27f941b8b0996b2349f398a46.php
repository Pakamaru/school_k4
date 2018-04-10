<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c0f22ddf826890995c19beac597d7b00b016908833b85e2e330d2b31c404d2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dd7c424002eedb9021b66b8eec6fba5d4808beb1cc090e0b174717fd05df5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd7c424002eedb9021b66b8eec6fba5d4808beb1cc090e0b174717fd05df5ac->enter($__internal_0dd7c424002eedb9021b66b8eec6fba5d4808beb1cc090e0b174717fd05df5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_760aa6c7fd774e06656a62231503a13fc350e723e9551bfe9694a22551174677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760aa6c7fd774e06656a62231503a13fc350e723e9551bfe9694a22551174677->enter($__internal_760aa6c7fd774e06656a62231503a13fc350e723e9551bfe9694a22551174677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dd7c424002eedb9021b66b8eec6fba5d4808beb1cc090e0b174717fd05df5ac->leave($__internal_0dd7c424002eedb9021b66b8eec6fba5d4808beb1cc090e0b174717fd05df5ac_prof);

        
        $__internal_760aa6c7fd774e06656a62231503a13fc350e723e9551bfe9694a22551174677->leave($__internal_760aa6c7fd774e06656a62231503a13fc350e723e9551bfe9694a22551174677_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_892ebc62bf87b908ace1f103181fa86d1997c372643a4b2381d2a0f22f67fe7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892ebc62bf87b908ace1f103181fa86d1997c372643a4b2381d2a0f22f67fe7b->enter($__internal_892ebc62bf87b908ace1f103181fa86d1997c372643a4b2381d2a0f22f67fe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b69405833eaa92d2ccc9a9279a455eb5d8d8680c5331a993a7da02738f85bbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69405833eaa92d2ccc9a9279a455eb5d8d8680c5331a993a7da02738f85bbe0->enter($__internal_b69405833eaa92d2ccc9a9279a455eb5d8d8680c5331a993a7da02738f85bbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b69405833eaa92d2ccc9a9279a455eb5d8d8680c5331a993a7da02738f85bbe0->leave($__internal_b69405833eaa92d2ccc9a9279a455eb5d8d8680c5331a993a7da02738f85bbe0_prof);

        
        $__internal_892ebc62bf87b908ace1f103181fa86d1997c372643a4b2381d2a0f22f67fe7b->leave($__internal_892ebc62bf87b908ace1f103181fa86d1997c372643a4b2381d2a0f22f67fe7b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_606b18497c9645d9fa103b6a7a7660cb684f3de975fb0e9b08555e7058e87b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606b18497c9645d9fa103b6a7a7660cb684f3de975fb0e9b08555e7058e87b2e->enter($__internal_606b18497c9645d9fa103b6a7a7660cb684f3de975fb0e9b08555e7058e87b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1bcd53119c43bca5a16d2e2765dad76717023cc61a4817c62a3ab7d5a3665173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcd53119c43bca5a16d2e2765dad76717023cc61a4817c62a3ab7d5a3665173->enter($__internal_1bcd53119c43bca5a16d2e2765dad76717023cc61a4817c62a3ab7d5a3665173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1bcd53119c43bca5a16d2e2765dad76717023cc61a4817c62a3ab7d5a3665173->leave($__internal_1bcd53119c43bca5a16d2e2765dad76717023cc61a4817c62a3ab7d5a3665173_prof);

        
        $__internal_606b18497c9645d9fa103b6a7a7660cb684f3de975fb0e9b08555e7058e87b2e->leave($__internal_606b18497c9645d9fa103b6a7a7660cb684f3de975fb0e9b08555e7058e87b2e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_795ccef1f6bba753e5633f1d16d01fa027e45519a5b427b67c1f0ce334d0706e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795ccef1f6bba753e5633f1d16d01fa027e45519a5b427b67c1f0ce334d0706e->enter($__internal_795ccef1f6bba753e5633f1d16d01fa027e45519a5b427b67c1f0ce334d0706e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02526832131aa9ada5b8eb3c64efdbf62467f48351c15d0cf0390ce59b0ab832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02526832131aa9ada5b8eb3c64efdbf62467f48351c15d0cf0390ce59b0ab832->enter($__internal_02526832131aa9ada5b8eb3c64efdbf62467f48351c15d0cf0390ce59b0ab832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_02526832131aa9ada5b8eb3c64efdbf62467f48351c15d0cf0390ce59b0ab832->leave($__internal_02526832131aa9ada5b8eb3c64efdbf62467f48351c15d0cf0390ce59b0ab832_prof);

        
        $__internal_795ccef1f6bba753e5633f1d16d01fa027e45519a5b427b67c1f0ce334d0706e->leave($__internal_795ccef1f6bba753e5633f1d16d01fa027e45519a5b427b67c1f0ce334d0706e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
