<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef88fadc688161ad1c2d6fe0d74b690acf769e0b8fada078f18de3775ff5f6ba extends Twig_Template
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
        $__internal_acecc047dfde940224ad7858b62f9e36f4ba2abd4c981f4b6f3001d30fad93ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acecc047dfde940224ad7858b62f9e36f4ba2abd4c981f4b6f3001d30fad93ef->enter($__internal_acecc047dfde940224ad7858b62f9e36f4ba2abd4c981f4b6f3001d30fad93ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6240d72a084293404f32ecfe0dc1427da2fc8c265885b441fe80b13c88cdc00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6240d72a084293404f32ecfe0dc1427da2fc8c265885b441fe80b13c88cdc00e->enter($__internal_6240d72a084293404f32ecfe0dc1427da2fc8c265885b441fe80b13c88cdc00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acecc047dfde940224ad7858b62f9e36f4ba2abd4c981f4b6f3001d30fad93ef->leave($__internal_acecc047dfde940224ad7858b62f9e36f4ba2abd4c981f4b6f3001d30fad93ef_prof);

        
        $__internal_6240d72a084293404f32ecfe0dc1427da2fc8c265885b441fe80b13c88cdc00e->leave($__internal_6240d72a084293404f32ecfe0dc1427da2fc8c265885b441fe80b13c88cdc00e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84bbef1a22af618555108de16d8a7ce7ce89bab90af5fb4eba88d9df5511042f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bbef1a22af618555108de16d8a7ce7ce89bab90af5fb4eba88d9df5511042f->enter($__internal_84bbef1a22af618555108de16d8a7ce7ce89bab90af5fb4eba88d9df5511042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d3fa4618f0b6b27afee26bd0c8c66bc1fa5a4dc9d3a75d11d47e32f01ebfc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3fa4618f0b6b27afee26bd0c8c66bc1fa5a4dc9d3a75d11d47e32f01ebfc31->enter($__internal_1d3fa4618f0b6b27afee26bd0c8c66bc1fa5a4dc9d3a75d11d47e32f01ebfc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d3fa4618f0b6b27afee26bd0c8c66bc1fa5a4dc9d3a75d11d47e32f01ebfc31->leave($__internal_1d3fa4618f0b6b27afee26bd0c8c66bc1fa5a4dc9d3a75d11d47e32f01ebfc31_prof);

        
        $__internal_84bbef1a22af618555108de16d8a7ce7ce89bab90af5fb4eba88d9df5511042f->leave($__internal_84bbef1a22af618555108de16d8a7ce7ce89bab90af5fb4eba88d9df5511042f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_607b88426ca96b6278d0cda5b6064c030fac171b54267687b792fd27adfd5c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607b88426ca96b6278d0cda5b6064c030fac171b54267687b792fd27adfd5c30->enter($__internal_607b88426ca96b6278d0cda5b6064c030fac171b54267687b792fd27adfd5c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe7fdfd4fdeca7003721a1875e578a525f67f883c61c689b374ac164673bcc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7fdfd4fdeca7003721a1875e578a525f67f883c61c689b374ac164673bcc28->enter($__internal_fe7fdfd4fdeca7003721a1875e578a525f67f883c61c689b374ac164673bcc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe7fdfd4fdeca7003721a1875e578a525f67f883c61c689b374ac164673bcc28->leave($__internal_fe7fdfd4fdeca7003721a1875e578a525f67f883c61c689b374ac164673bcc28_prof);

        
        $__internal_607b88426ca96b6278d0cda5b6064c030fac171b54267687b792fd27adfd5c30->leave($__internal_607b88426ca96b6278d0cda5b6064c030fac171b54267687b792fd27adfd5c30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_849cdcb93fc9b378b4db0709d8424eb82a16a8ab39e7736816fdcdf81ffeab4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849cdcb93fc9b378b4db0709d8424eb82a16a8ab39e7736816fdcdf81ffeab4d->enter($__internal_849cdcb93fc9b378b4db0709d8424eb82a16a8ab39e7736816fdcdf81ffeab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3bbc16a818df38ee0492acff5e50248a72fd779012e2487ebd7f19f9662d10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bbc16a818df38ee0492acff5e50248a72fd779012e2487ebd7f19f9662d10a->enter($__internal_d3bbc16a818df38ee0492acff5e50248a72fd779012e2487ebd7f19f9662d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3bbc16a818df38ee0492acff5e50248a72fd779012e2487ebd7f19f9662d10a->leave($__internal_d3bbc16a818df38ee0492acff5e50248a72fd779012e2487ebd7f19f9662d10a_prof);

        
        $__internal_849cdcb93fc9b378b4db0709d8424eb82a16a8ab39e7736816fdcdf81ffeab4d->leave($__internal_849cdcb93fc9b378b4db0709d8424eb82a16a8ab39e7736816fdcdf81ffeab4d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Amaru Signore\\projects\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
