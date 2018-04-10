<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_c34ee60308cfc4e4a7d48f817ccb50442622b253acd2419d4feacd209376f320 extends Twig_Template
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
        $__internal_22297eff359c9ca663e289c883380d715e6aa568d3bc9585848dec930efa32d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22297eff359c9ca663e289c883380d715e6aa568d3bc9585848dec930efa32d0->enter($__internal_22297eff359c9ca663e289c883380d715e6aa568d3bc9585848dec930efa32d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_77d08068fb3e9f0acaf6477ae8eb78b3a1391d67a2ef4a900577ae3a01818960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d08068fb3e9f0acaf6477ae8eb78b3a1391d67a2ef4a900577ae3a01818960->enter($__internal_77d08068fb3e9f0acaf6477ae8eb78b3a1391d67a2ef4a900577ae3a01818960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22297eff359c9ca663e289c883380d715e6aa568d3bc9585848dec930efa32d0->leave($__internal_22297eff359c9ca663e289c883380d715e6aa568d3bc9585848dec930efa32d0_prof);

        
        $__internal_77d08068fb3e9f0acaf6477ae8eb78b3a1391d67a2ef4a900577ae3a01818960->leave($__internal_77d08068fb3e9f0acaf6477ae8eb78b3a1391d67a2ef4a900577ae3a01818960_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f872f20db8187a32cb608fb3ed5ab183d9f9fb68ff3853e5b31249b51e6dd0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f872f20db8187a32cb608fb3ed5ab183d9f9fb68ff3853e5b31249b51e6dd0c1->enter($__internal_f872f20db8187a32cb608fb3ed5ab183d9f9fb68ff3853e5b31249b51e6dd0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e86ab1a6e900cc626d455e4851330c0db3e4821878848a9b8d33cdab697aae78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86ab1a6e900cc626d455e4851330c0db3e4821878848a9b8d33cdab697aae78->enter($__internal_e86ab1a6e900cc626d455e4851330c0db3e4821878848a9b8d33cdab697aae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e86ab1a6e900cc626d455e4851330c0db3e4821878848a9b8d33cdab697aae78->leave($__internal_e86ab1a6e900cc626d455e4851330c0db3e4821878848a9b8d33cdab697aae78_prof);

        
        $__internal_f872f20db8187a32cb608fb3ed5ab183d9f9fb68ff3853e5b31249b51e6dd0c1->leave($__internal_f872f20db8187a32cb608fb3ed5ab183d9f9fb68ff3853e5b31249b51e6dd0c1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f80310aa189d1123f3e540ba3ec39345ab2f7c167d2a8109de008e0c1468d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f80310aa189d1123f3e540ba3ec39345ab2f7c167d2a8109de008e0c1468d34->enter($__internal_7f80310aa189d1123f3e540ba3ec39345ab2f7c167d2a8109de008e0c1468d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1862e9c1b7a9c22be8e9d0998ea420be7d02edf8a6993c4c7ba95332ff54c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1862e9c1b7a9c22be8e9d0998ea420be7d02edf8a6993c4c7ba95332ff54c20->enter($__internal_f1862e9c1b7a9c22be8e9d0998ea420be7d02edf8a6993c4c7ba95332ff54c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f1862e9c1b7a9c22be8e9d0998ea420be7d02edf8a6993c4c7ba95332ff54c20->leave($__internal_f1862e9c1b7a9c22be8e9d0998ea420be7d02edf8a6993c4c7ba95332ff54c20_prof);

        
        $__internal_7f80310aa189d1123f3e540ba3ec39345ab2f7c167d2a8109de008e0c1468d34->leave($__internal_7f80310aa189d1123f3e540ba3ec39345ab2f7c167d2a8109de008e0c1468d34_prof);

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
