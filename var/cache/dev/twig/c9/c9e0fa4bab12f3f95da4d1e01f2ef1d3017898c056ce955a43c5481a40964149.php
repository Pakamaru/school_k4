<?php

/* default/admin.html.twig */
class __TwigTemplate_8fc97a7060bc997ec627695956b307fbbb7fbb1b83d0df80d727d393d76b8957 extends Twig_Template
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
        $__internal_ae6e5d1e7a007e408ecf933782f680a168c97490e6866d25c253c55f2c90516d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6e5d1e7a007e408ecf933782f680a168c97490e6866d25c253c55f2c90516d->enter($__internal_ae6e5d1e7a007e408ecf933782f680a168c97490e6866d25c253c55f2c90516d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $__internal_e9d7817752f88bad1bf0103b172b1bb5d512ae8afc5b569fec1089c80d07bc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d7817752f88bad1bf0103b172b1bb5d512ae8afc5b569fec1089c80d07bc9c->enter($__internal_e9d7817752f88bad1bf0103b172b1bb5d512ae8afc5b569fec1089c80d07bc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae6e5d1e7a007e408ecf933782f680a168c97490e6866d25c253c55f2c90516d->leave($__internal_ae6e5d1e7a007e408ecf933782f680a168c97490e6866d25c253c55f2c90516d_prof);

        
        $__internal_e9d7817752f88bad1bf0103b172b1bb5d512ae8afc5b569fec1089c80d07bc9c->leave($__internal_e9d7817752f88bad1bf0103b172b1bb5d512ae8afc5b569fec1089c80d07bc9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1262ddf2bdb7a62e0902f630debdad4fe7823d5508f3a4636c32bec0b420ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1262ddf2bdb7a62e0902f630debdad4fe7823d5508f3a4636c32bec0b420ba4->enter($__internal_a1262ddf2bdb7a62e0902f630debdad4fe7823d5508f3a4636c32bec0b420ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e5247c377c83e3fcedcf8988b4b78f8f649674737d436f6c7e778b0115c1b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5247c377c83e3fcedcf8988b4b78f8f649674737d436f6c7e778b0115c1b76->enter($__internal_7e5247c377c83e3fcedcf8988b4b78f8f649674737d436f6c7e778b0115c1b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Welkom Admin</h1>

        <ul class=\"list-unstyled\">
            <a href=\"\"><li>
                User beheer
            </li></a>
            <a href=\"\"><li>
                    User beheer
            </li></a>
            <a href=\"\"><li>
                    User beheer
            </li></a>
        </ul>
    </div>

";
        
        $__internal_7e5247c377c83e3fcedcf8988b4b78f8f649674737d436f6c7e778b0115c1b76->leave($__internal_7e5247c377c83e3fcedcf8988b4b78f8f649674737d436f6c7e778b0115c1b76_prof);

        
        $__internal_a1262ddf2bdb7a62e0902f630debdad4fe7823d5508f3a4636c32bec0b420ba4->leave($__internal_a1262ddf2bdb7a62e0902f630debdad4fe7823d5508f3a4636c32bec0b420ba4_prof);

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

        <ul class=\"list-unstyled\">
            <a href=\"\"><li>
                User beheer
            </li></a>
            <a href=\"\"><li>
                    User beheer
            </li></a>
            <a href=\"\"><li>
                    User beheer
            </li></a>
        </ul>
    </div>

{% endblock %}", "default/admin.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\admin.html.twig");
    }
}
