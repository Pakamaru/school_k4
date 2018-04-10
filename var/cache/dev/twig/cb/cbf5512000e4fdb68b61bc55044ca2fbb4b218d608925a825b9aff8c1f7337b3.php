<?php

/* default/admin.html.twig */
class __TwigTemplate_fbad597d6f898abae4bda2ee13acd6aef965da3537ca64d8225c37bca90b100d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_808820f0e97743cc626e121c697729aac3b19143fb614d39830dfa846daabf8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808820f0e97743cc626e121c697729aac3b19143fb614d39830dfa846daabf8b->enter($__internal_808820f0e97743cc626e121c697729aac3b19143fb614d39830dfa846daabf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $__internal_7d524fa254d82eca75912812d8d132972a8ea54812af7bbefda0b22a43615cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d524fa254d82eca75912812d8d132972a8ea54812af7bbefda0b22a43615cb9->enter($__internal_7d524fa254d82eca75912812d8d132972a8ea54812af7bbefda0b22a43615cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808820f0e97743cc626e121c697729aac3b19143fb614d39830dfa846daabf8b->leave($__internal_808820f0e97743cc626e121c697729aac3b19143fb614d39830dfa846daabf8b_prof);

        
        $__internal_7d524fa254d82eca75912812d8d132972a8ea54812af7bbefda0b22a43615cb9->leave($__internal_7d524fa254d82eca75912812d8d132972a8ea54812af7bbefda0b22a43615cb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_768c0e5224573bbd0d78e618be8f2ea00ed6e88564dbbac0be98266a1f75b2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768c0e5224573bbd0d78e618be8f2ea00ed6e88564dbbac0be98266a1f75b2de->enter($__internal_768c0e5224573bbd0d78e618be8f2ea00ed6e88564dbbac0be98266a1f75b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6cf2b5e1d68313443072635e00164c387413b0418dabf5c70ccd2e3d5e51890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cf2b5e1d68313443072635e00164c387413b0418dabf5c70ccd2e3d5e51890->enter($__internal_d6cf2b5e1d68313443072635e00164c387413b0418dabf5c70ccd2e3d5e51890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Welkom Admin</h1>
    </div>

";
        
        $__internal_d6cf2b5e1d68313443072635e00164c387413b0418dabf5c70ccd2e3d5e51890->leave($__internal_d6cf2b5e1d68313443072635e00164c387413b0418dabf5c70ccd2e3d5e51890_prof);

        
        $__internal_768c0e5224573bbd0d78e618be8f2ea00ed6e88564dbbac0be98266a1f75b2de->leave($__internal_768c0e5224573bbd0d78e618be8f2ea00ed6e88564dbbac0be98266a1f75b2de_prof);

    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Welkom Admin</h1>
    </div>

{% endblock %}", "default/admin.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\admin.html.twig");
    }
}
