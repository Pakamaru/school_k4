<?php

/* default/index.html.twig */
class __TwigTemplate_bab715b38b7a66409f2d80c3781c88dfe70242c53cabef4ffd9d1e047ea37401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_a0aaa259c2d6c4e27a22c9e8dd00bbb0bf7e8262c728a8b41aeb8d348aa821d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0aaa259c2d6c4e27a22c9e8dd00bbb0bf7e8262c728a8b41aeb8d348aa821d9->enter($__internal_a0aaa259c2d6c4e27a22c9e8dd00bbb0bf7e8262c728a8b41aeb8d348aa821d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_aed48de86201f85ec45728f5f0f127407bf6d0009b6ebea4e196cef253bb2fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed48de86201f85ec45728f5f0f127407bf6d0009b6ebea4e196cef253bb2fc5->enter($__internal_aed48de86201f85ec45728f5f0f127407bf6d0009b6ebea4e196cef253bb2fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0aaa259c2d6c4e27a22c9e8dd00bbb0bf7e8262c728a8b41aeb8d348aa821d9->leave($__internal_a0aaa259c2d6c4e27a22c9e8dd00bbb0bf7e8262c728a8b41aeb8d348aa821d9_prof);

        
        $__internal_aed48de86201f85ec45728f5f0f127407bf6d0009b6ebea4e196cef253bb2fc5->leave($__internal_aed48de86201f85ec45728f5f0f127407bf6d0009b6ebea4e196cef253bb2fc5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9a2d70861886ff94dac2fd91a35ff42f31543c081129f9524634cbb562cbfee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a2d70861886ff94dac2fd91a35ff42f31543c081129f9524634cbb562cbfee->enter($__internal_c9a2d70861886ff94dac2fd91a35ff42f31543c081129f9524634cbb562cbfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4da5856809d9d6d3b65bf4cd99d862fe9a17dd6bc8d4df42d1c94975e672b585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da5856809d9d6d3b65bf4cd99d862fe9a17dd6bc8d4df42d1c94975e672b585->enter($__internal_4da5856809d9d6d3b65bf4cd99d862fe9a17dd6bc8d4df42d1c94975e672b585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container center\">
        <ul class=\"sport-list\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sports"] ?? $this->getContext($context, "sports")));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            // line 6
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_sport", array("sportName" => $this->getAttribute($context["sport"], "name", array(), "array"))), "html", null, true);
            echo "\">
                <li class=\"sport-item\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["sport"], "name", array(), "array"), "html", null, true);
            echo "
                </li>
                </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </div>
";
        
        $__internal_4da5856809d9d6d3b65bf4cd99d862fe9a17dd6bc8d4df42d1c94975e672b585->leave($__internal_4da5856809d9d6d3b65bf4cd99d862fe9a17dd6bc8d4df42d1c94975e672b585_prof);

        
        $__internal_c9a2d70861886ff94dac2fd91a35ff42f31543c081129f9524634cbb562cbfee->leave($__internal_c9a2d70861886ff94dac2fd91a35ff42f31543c081129f9524634cbb562cbfee_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  63 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"container center\">
        <ul class=\"sport-list\">
    {% for sport in sports %}
                <a href=\"{{ path('detail_sport',{'sportName':sport['name']}) }}\">
                <li class=\"sport-item\">
                    {{ sport['name'] }}
                </li>
                </a>
    {% endfor %}
        </ul>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\index.html.twig");
    }
}
