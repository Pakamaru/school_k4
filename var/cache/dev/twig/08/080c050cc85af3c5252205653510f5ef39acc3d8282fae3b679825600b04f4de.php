<?php

/* default/user.html.twig */
class __TwigTemplate_f7475302f01745632fc3f2cb241f73dbe452376b99fb1f27042123d63a7951f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/user.html.twig", 1);
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
        $__internal_35097852c0761fbf38cd58a46a5b115fd43ff14460708231115051b6bf32fd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35097852c0761fbf38cd58a46a5b115fd43ff14460708231115051b6bf32fd35->enter($__internal_35097852c0761fbf38cd58a46a5b115fd43ff14460708231115051b6bf32fd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/user.html.twig"));

        $__internal_b2da083e8cd6501e1213f1bdb925ba8d0476cc9d7501213607cee4b640940d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2da083e8cd6501e1213f1bdb925ba8d0476cc9d7501213607cee4b640940d05->enter($__internal_b2da083e8cd6501e1213f1bdb925ba8d0476cc9d7501213607cee4b640940d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35097852c0761fbf38cd58a46a5b115fd43ff14460708231115051b6bf32fd35->leave($__internal_35097852c0761fbf38cd58a46a5b115fd43ff14460708231115051b6bf32fd35_prof);

        
        $__internal_b2da083e8cd6501e1213f1bdb925ba8d0476cc9d7501213607cee4b640940d05->leave($__internal_b2da083e8cd6501e1213f1bdb925ba8d0476cc9d7501213607cee4b640940d05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5f81e664bd04a971b3e9f6d7487748da92a415897da90c356ffa45491e60d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f81e664bd04a971b3e9f6d7487748da92a415897da90c356ffa45491e60d8e->enter($__internal_a5f81e664bd04a971b3e9f6d7487748da92a415897da90c356ffa45491e60d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e33d42a2d0ce5ab49bd9cc245fc521db803a1efc0c53e2a0c5ce5046ddc874d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e33d42a2d0ce5ab49bd9cc245fc521db803a1efc0c53e2a0c5ce5046ddc874d->enter($__internal_9e33d42a2d0ce5ab49bd9cc245fc521db803a1efc0c53e2a0c5ce5046ddc874d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Welkom User</h1>
    </div>

";
        
        $__internal_9e33d42a2d0ce5ab49bd9cc245fc521db803a1efc0c53e2a0c5ce5046ddc874d->leave($__internal_9e33d42a2d0ce5ab49bd9cc245fc521db803a1efc0c53e2a0c5ce5046ddc874d_prof);

        
        $__internal_a5f81e664bd04a971b3e9f6d7487748da92a415897da90c356ffa45491e60d8e->leave($__internal_a5f81e664bd04a971b3e9f6d7487748da92a415897da90c356ffa45491e60d8e_prof);

    }

    public function getTemplateName()
    {
        return "default/user.html.twig";
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
        <h1>Welkom User</h1>
    </div>

{% endblock %}", "default/user.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\user.html.twig");
    }
}
