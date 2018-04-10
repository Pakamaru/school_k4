<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dc30f7deaee4831afc19e0332a8a432e5ed08ef0f119f119595e696cc9f9c8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b648a0194ebb83afc81c8ce757ed8511e60d93a64c43d6c91f72f24f9b0d2052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b648a0194ebb83afc81c8ce757ed8511e60d93a64c43d6c91f72f24f9b0d2052->enter($__internal_b648a0194ebb83afc81c8ce757ed8511e60d93a64c43d6c91f72f24f9b0d2052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3f47d11c30b7906df68de4278bf0a80d9b744afe7e92f11efe95b53985da552d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f47d11c30b7906df68de4278bf0a80d9b744afe7e92f11efe95b53985da552d->enter($__internal_3f47d11c30b7906df68de4278bf0a80d9b744afe7e92f11efe95b53985da552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b648a0194ebb83afc81c8ce757ed8511e60d93a64c43d6c91f72f24f9b0d2052->leave($__internal_b648a0194ebb83afc81c8ce757ed8511e60d93a64c43d6c91f72f24f9b0d2052_prof);

        
        $__internal_3f47d11c30b7906df68de4278bf0a80d9b744afe7e92f11efe95b53985da552d->leave($__internal_3f47d11c30b7906df68de4278bf0a80d9b744afe7e92f11efe95b53985da552d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04b6466236c99cd1d15da01f0d261803607a34971a6da43b395815b38994a190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b6466236c99cd1d15da01f0d261803607a34971a6da43b395815b38994a190->enter($__internal_04b6466236c99cd1d15da01f0d261803607a34971a6da43b395815b38994a190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79ed29f375cfe54582932f529af122d1fb4f5b8dc76e504e9213196eb26adb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ed29f375cfe54582932f529af122d1fb4f5b8dc76e504e9213196eb26adb70->enter($__internal_79ed29f375cfe54582932f529af122d1fb4f5b8dc76e504e9213196eb26adb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_79ed29f375cfe54582932f529af122d1fb4f5b8dc76e504e9213196eb26adb70->leave($__internal_79ed29f375cfe54582932f529af122d1fb4f5b8dc76e504e9213196eb26adb70_prof);

        
        $__internal_04b6466236c99cd1d15da01f0d261803607a34971a6da43b395815b38994a190->leave($__internal_04b6466236c99cd1d15da01f0d261803607a34971a6da43b395815b38994a190_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
