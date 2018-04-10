<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_942143af46b2d887f1719297d66559827cf1bd840ee9f5bad137eec7f269645d extends Twig_Template
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
        $__internal_e7f2027b33df190588a321be96ff2f14966be8596cb35fbb807682f15e99269a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f2027b33df190588a321be96ff2f14966be8596cb35fbb807682f15e99269a->enter($__internal_e7f2027b33df190588a321be96ff2f14966be8596cb35fbb807682f15e99269a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8429fbfc6d587e51a409010031eeb4a9af5db73b8ffa09be5b29f6ae3a111fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8429fbfc6d587e51a409010031eeb4a9af5db73b8ffa09be5b29f6ae3a111fec->enter($__internal_8429fbfc6d587e51a409010031eeb4a9af5db73b8ffa09be5b29f6ae3a111fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7f2027b33df190588a321be96ff2f14966be8596cb35fbb807682f15e99269a->leave($__internal_e7f2027b33df190588a321be96ff2f14966be8596cb35fbb807682f15e99269a_prof);

        
        $__internal_8429fbfc6d587e51a409010031eeb4a9af5db73b8ffa09be5b29f6ae3a111fec->leave($__internal_8429fbfc6d587e51a409010031eeb4a9af5db73b8ffa09be5b29f6ae3a111fec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5429a761ad8c3e6461771398451abbf6ae18cadca2c820a5bf0c6e98a01cb048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5429a761ad8c3e6461771398451abbf6ae18cadca2c820a5bf0c6e98a01cb048->enter($__internal_5429a761ad8c3e6461771398451abbf6ae18cadca2c820a5bf0c6e98a01cb048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98e4cfa5bbe78e9577bc13db7a6abf2cb6fea576e600e04de2df06d2f1a5aef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e4cfa5bbe78e9577bc13db7a6abf2cb6fea576e600e04de2df06d2f1a5aef8->enter($__internal_98e4cfa5bbe78e9577bc13db7a6abf2cb6fea576e600e04de2df06d2f1a5aef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98e4cfa5bbe78e9577bc13db7a6abf2cb6fea576e600e04de2df06d2f1a5aef8->leave($__internal_98e4cfa5bbe78e9577bc13db7a6abf2cb6fea576e600e04de2df06d2f1a5aef8_prof);

        
        $__internal_5429a761ad8c3e6461771398451abbf6ae18cadca2c820a5bf0c6e98a01cb048->leave($__internal_5429a761ad8c3e6461771398451abbf6ae18cadca2c820a5bf0c6e98a01cb048_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0cfa6bfde434c20aced3cae6f30948a918d45dee6668cf2d72949e15bc6b789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cfa6bfde434c20aced3cae6f30948a918d45dee6668cf2d72949e15bc6b789->enter($__internal_c0cfa6bfde434c20aced3cae6f30948a918d45dee6668cf2d72949e15bc6b789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_276a9998f73ee072003bf108325e0f28dedb96f7ca745d70dd8089bf806ae701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276a9998f73ee072003bf108325e0f28dedb96f7ca745d70dd8089bf806ae701->enter($__internal_276a9998f73ee072003bf108325e0f28dedb96f7ca745d70dd8089bf806ae701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_276a9998f73ee072003bf108325e0f28dedb96f7ca745d70dd8089bf806ae701->leave($__internal_276a9998f73ee072003bf108325e0f28dedb96f7ca745d70dd8089bf806ae701_prof);

        
        $__internal_c0cfa6bfde434c20aced3cae6f30948a918d45dee6668cf2d72949e15bc6b789->leave($__internal_c0cfa6bfde434c20aced3cae6f30948a918d45dee6668cf2d72949e15bc6b789_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3d1f9734fd256b30478650a87514f7cae31ade5e2959c215f231b8e716f101a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d1f9734fd256b30478650a87514f7cae31ade5e2959c215f231b8e716f101a->enter($__internal_a3d1f9734fd256b30478650a87514f7cae31ade5e2959c215f231b8e716f101a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4063d24e8260bc072c30ee350c82b9dd7f545efbacbc27d5204a3a6eb4d7695e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4063d24e8260bc072c30ee350c82b9dd7f545efbacbc27d5204a3a6eb4d7695e->enter($__internal_4063d24e8260bc072c30ee350c82b9dd7f545efbacbc27d5204a3a6eb4d7695e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4063d24e8260bc072c30ee350c82b9dd7f545efbacbc27d5204a3a6eb4d7695e->leave($__internal_4063d24e8260bc072c30ee350c82b9dd7f545efbacbc27d5204a3a6eb4d7695e_prof);

        
        $__internal_a3d1f9734fd256b30478650a87514f7cae31ade5e2959c215f231b8e716f101a->leave($__internal_a3d1f9734fd256b30478650a87514f7cae31ade5e2959c215f231b8e716f101a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Amaru Signore\\projects\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
