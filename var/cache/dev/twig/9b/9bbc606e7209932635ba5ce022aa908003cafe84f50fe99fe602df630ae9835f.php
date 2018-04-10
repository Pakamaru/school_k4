<?php

/* default/aanmelden.html.twig */
class __TwigTemplate_87f53205ceedaeed5bdb3b3786b9cd59b1be51fcfd54cd03bff845b37fd6a028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/aanmelden.html.twig", 1);
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
        $__internal_18805d3add9378ca326475b3594393a81b5ff6dec071db27a126eac986dd0729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18805d3add9378ca326475b3594393a81b5ff6dec071db27a126eac986dd0729->enter($__internal_18805d3add9378ca326475b3594393a81b5ff6dec071db27a126eac986dd0729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/aanmelden.html.twig"));

        $__internal_4e25151a31dde331a324838a2e32502f44833c72366450e782a44cc7dc4cf637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e25151a31dde331a324838a2e32502f44833c72366450e782a44cc7dc4cf637->enter($__internal_4e25151a31dde331a324838a2e32502f44833c72366450e782a44cc7dc4cf637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/aanmelden.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18805d3add9378ca326475b3594393a81b5ff6dec071db27a126eac986dd0729->leave($__internal_18805d3add9378ca326475b3594393a81b5ff6dec071db27a126eac986dd0729_prof);

        
        $__internal_4e25151a31dde331a324838a2e32502f44833c72366450e782a44cc7dc4cf637->leave($__internal_4e25151a31dde331a324838a2e32502f44833c72366450e782a44cc7dc4cf637_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_533cba308f4f620b6f2890a3a08007e016834a03843aa7c50cbdcd385673957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533cba308f4f620b6f2890a3a08007e016834a03843aa7c50cbdcd385673957c->enter($__internal_533cba308f4f620b6f2890a3a08007e016834a03843aa7c50cbdcd385673957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28cb45663784f40d1d48d4a1ff5832785acd2764927dfd0e743b2e5eea690f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cb45663784f40d1d48d4a1ff5832785acd2764927dfd0e743b2e5eea690f43->enter($__internal_28cb45663784f40d1d48d4a1ff5832785acd2764927dfd0e743b2e5eea690f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">

    ";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_4_horizontal_layout.html.twig"), true);
        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_28cb45663784f40d1d48d4a1ff5832785acd2764927dfd0e743b2e5eea690f43->leave($__internal_28cb45663784f40d1d48d4a1ff5832785acd2764927dfd0e743b2e5eea690f43_prof);

        
        $__internal_533cba308f4f620b6f2890a3a08007e016834a03843aa7c50cbdcd385673957c->leave($__internal_533cba308f4f620b6f2890a3a08007e016834a03843aa7c50cbdcd385673957c_prof);

    }

    public function getTemplateName()
    {
        return "default/aanmelden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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

    {% form_theme form 'bootstrap_4_horizontal_layout.html.twig' %}

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}", "default/aanmelden.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\aanmelden.html.twig");
    }
}
