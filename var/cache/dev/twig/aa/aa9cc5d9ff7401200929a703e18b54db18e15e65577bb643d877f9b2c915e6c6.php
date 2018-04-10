<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_37b27188185e8c60a2301db6a86d11c7992e4b63d098bd3a8274fd05e72e5cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adc179852ad63292f20a7e5f8869dfc3f2dffebf57d12f71e0926529e0597a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc179852ad63292f20a7e5f8869dfc3f2dffebf57d12f71e0926529e0597a49->enter($__internal_adc179852ad63292f20a7e5f8869dfc3f2dffebf57d12f71e0926529e0597a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_dc6f4a52ea1d67d775d0061c4b02ffca8c94ea471db580a3667e74d9ff2f22cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6f4a52ea1d67d775d0061c4b02ffca8c94ea471db580a3667e74d9ff2f22cc->enter($__internal_dc6f4a52ea1d67d775d0061c4b02ffca8c94ea471db580a3667e74d9ff2f22cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_adc179852ad63292f20a7e5f8869dfc3f2dffebf57d12f71e0926529e0597a49->leave($__internal_adc179852ad63292f20a7e5f8869dfc3f2dffebf57d12f71e0926529e0597a49_prof);

        
        $__internal_dc6f4a52ea1d67d775d0061c4b02ffca8c94ea471db580a3667e74d9ff2f22cc->leave($__internal_dc6f4a52ea1d67d775d0061c4b02ffca8c94ea471db580a3667e74d9ff2f22cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\Amaru Signore\\projects\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
