<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0f466e54338706954ab69bf281d2f631a0e488ad1a148a7d9da3b22aba1dfadf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a5044d73f04d57b08a0fbef39c53e3e213478d830e0fbe3a14d21d4a8c6557b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5044d73f04d57b08a0fbef39c53e3e213478d830e0fbe3a14d21d4a8c6557b->enter($__internal_2a5044d73f04d57b08a0fbef39c53e3e213478d830e0fbe3a14d21d4a8c6557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c53815456acfcab20c96ef27b001f7fa7a38d39562cf6faa3c4e321c02836989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53815456acfcab20c96ef27b001f7fa7a38d39562cf6faa3c4e321c02836989->enter($__internal_c53815456acfcab20c96ef27b001f7fa7a38d39562cf6faa3c4e321c02836989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5044d73f04d57b08a0fbef39c53e3e213478d830e0fbe3a14d21d4a8c6557b->leave($__internal_2a5044d73f04d57b08a0fbef39c53e3e213478d830e0fbe3a14d21d4a8c6557b_prof);

        
        $__internal_c53815456acfcab20c96ef27b001f7fa7a38d39562cf6faa3c4e321c02836989->leave($__internal_c53815456acfcab20c96ef27b001f7fa7a38d39562cf6faa3c4e321c02836989_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6b69a0b6a76f852ffdb4d4ebee65b240bfc9d6a2b853f0462dfa41279d21d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b69a0b6a76f852ffdb4d4ebee65b240bfc9d6a2b853f0462dfa41279d21d49->enter($__internal_d6b69a0b6a76f852ffdb4d4ebee65b240bfc9d6a2b853f0462dfa41279d21d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e17176851bf5c61af1cec6801d3f8b67ac9af108c43106c7bf32a28d8f81459a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17176851bf5c61af1cec6801d3f8b67ac9af108c43106c7bf32a28d8f81459a->enter($__internal_e17176851bf5c61af1cec6801d3f8b67ac9af108c43106c7bf32a28d8f81459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e17176851bf5c61af1cec6801d3f8b67ac9af108c43106c7bf32a28d8f81459a->leave($__internal_e17176851bf5c61af1cec6801d3f8b67ac9af108c43106c7bf32a28d8f81459a_prof);

        
        $__internal_d6b69a0b6a76f852ffdb4d4ebee65b240bfc9d6a2b853f0462dfa41279d21d49->leave($__internal_d6b69a0b6a76f852ffdb4d4ebee65b240bfc9d6a2b853f0462dfa41279d21d49_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3be13bc13ae36ecad4c0435ffcfe66aceae607cd07cd9dcc0c587a3f7a5bebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3be13bc13ae36ecad4c0435ffcfe66aceae607cd07cd9dcc0c587a3f7a5bebd->enter($__internal_f3be13bc13ae36ecad4c0435ffcfe66aceae607cd07cd9dcc0c587a3f7a5bebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_407e8e79c804bb9a4ffad7003e0307aacaf2537a0021d825c62404f214865ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407e8e79c804bb9a4ffad7003e0307aacaf2537a0021d825c62404f214865ffb->enter($__internal_407e8e79c804bb9a4ffad7003e0307aacaf2537a0021d825c62404f214865ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_407e8e79c804bb9a4ffad7003e0307aacaf2537a0021d825c62404f214865ffb->leave($__internal_407e8e79c804bb9a4ffad7003e0307aacaf2537a0021d825c62404f214865ffb_prof);

        
        $__internal_f3be13bc13ae36ecad4c0435ffcfe66aceae607cd07cd9dcc0c587a3f7a5bebd->leave($__internal_f3be13bc13ae36ecad4c0435ffcfe66aceae607cd07cd9dcc0c587a3f7a5bebd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
