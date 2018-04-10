<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71769263d1e363eaaf23a7cbd2636f2264c54500a7dc8201e45fa87f75afaf53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bb1b898cbf721f5ce2f8a1d5a9d1e99851e33bd47b4da59ed85a2a489842ffb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1b898cbf721f5ce2f8a1d5a9d1e99851e33bd47b4da59ed85a2a489842ffb5->enter($__internal_bb1b898cbf721f5ce2f8a1d5a9d1e99851e33bd47b4da59ed85a2a489842ffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_781a2871e408fc4b85121274b2397ac13fc2ac08a1da779991d50eb48c3e9b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781a2871e408fc4b85121274b2397ac13fc2ac08a1da779991d50eb48c3e9b74->enter($__internal_781a2871e408fc4b85121274b2397ac13fc2ac08a1da779991d50eb48c3e9b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1b898cbf721f5ce2f8a1d5a9d1e99851e33bd47b4da59ed85a2a489842ffb5->leave($__internal_bb1b898cbf721f5ce2f8a1d5a9d1e99851e33bd47b4da59ed85a2a489842ffb5_prof);

        
        $__internal_781a2871e408fc4b85121274b2397ac13fc2ac08a1da779991d50eb48c3e9b74->leave($__internal_781a2871e408fc4b85121274b2397ac13fc2ac08a1da779991d50eb48c3e9b74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c8f1ecfcf3109b00b4375177f320114a8a43585f17c3fcddb5b45b1cae235a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8f1ecfcf3109b00b4375177f320114a8a43585f17c3fcddb5b45b1cae235a1->enter($__internal_2c8f1ecfcf3109b00b4375177f320114a8a43585f17c3fcddb5b45b1cae235a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae93a7751c1727ac57ccda5f4a56a17ecb69ee7278f2b01b24cefb1469684564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae93a7751c1727ac57ccda5f4a56a17ecb69ee7278f2b01b24cefb1469684564->enter($__internal_ae93a7751c1727ac57ccda5f4a56a17ecb69ee7278f2b01b24cefb1469684564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae93a7751c1727ac57ccda5f4a56a17ecb69ee7278f2b01b24cefb1469684564->leave($__internal_ae93a7751c1727ac57ccda5f4a56a17ecb69ee7278f2b01b24cefb1469684564_prof);

        
        $__internal_2c8f1ecfcf3109b00b4375177f320114a8a43585f17c3fcddb5b45b1cae235a1->leave($__internal_2c8f1ecfcf3109b00b4375177f320114a8a43585f17c3fcddb5b45b1cae235a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_113fbcd872a56b457820d5be94cf0ceab508998b2538339424c0a64100fd687f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113fbcd872a56b457820d5be94cf0ceab508998b2538339424c0a64100fd687f->enter($__internal_113fbcd872a56b457820d5be94cf0ceab508998b2538339424c0a64100fd687f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9426c7d08959197a75581564c793c59a1830e912973fa3a4d76737e32c19fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9426c7d08959197a75581564c793c59a1830e912973fa3a4d76737e32c19fd6->enter($__internal_f9426c7d08959197a75581564c793c59a1830e912973fa3a4d76737e32c19fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9426c7d08959197a75581564c793c59a1830e912973fa3a4d76737e32c19fd6->leave($__internal_f9426c7d08959197a75581564c793c59a1830e912973fa3a4d76737e32c19fd6_prof);

        
        $__internal_113fbcd872a56b457820d5be94cf0ceab508998b2538339424c0a64100fd687f->leave($__internal_113fbcd872a56b457820d5be94cf0ceab508998b2538339424c0a64100fd687f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8679530382aa0eb53c1e522913aceb3d33358d116ead10d866af322c2fd5adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8679530382aa0eb53c1e522913aceb3d33358d116ead10d866af322c2fd5adf->enter($__internal_d8679530382aa0eb53c1e522913aceb3d33358d116ead10d866af322c2fd5adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d5a1eff0de95161a1fee70ce189c8199048f2ccfb45d130f377adde05473b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5a1eff0de95161a1fee70ce189c8199048f2ccfb45d130f377adde05473b44->enter($__internal_4d5a1eff0de95161a1fee70ce189c8199048f2ccfb45d130f377adde05473b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d5a1eff0de95161a1fee70ce189c8199048f2ccfb45d130f377adde05473b44->leave($__internal_4d5a1eff0de95161a1fee70ce189c8199048f2ccfb45d130f377adde05473b44_prof);

        
        $__internal_d8679530382aa0eb53c1e522913aceb3d33358d116ead10d866af322c2fd5adf->leave($__internal_d8679530382aa0eb53c1e522913aceb3d33358d116ead10d866af322c2fd5adf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
