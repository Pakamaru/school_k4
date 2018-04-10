<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d88370062857c6314168aa357572cb84ed9fdf24f2a6c4cc1c44c73b76adc68f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76f2fb70627b6c98f11e28530c9e5e0bfe81ae523e27aa5fab1f370d306df04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f2fb70627b6c98f11e28530c9e5e0bfe81ae523e27aa5fab1f370d306df04a->enter($__internal_76f2fb70627b6c98f11e28530c9e5e0bfe81ae523e27aa5fab1f370d306df04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f62563a84bfa3433050039d1cec17533a4f86d53ecbe51f7b0482b7f87a4493f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62563a84bfa3433050039d1cec17533a4f86d53ecbe51f7b0482b7f87a4493f->enter($__internal_f62563a84bfa3433050039d1cec17533a4f86d53ecbe51f7b0482b7f87a4493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f2fb70627b6c98f11e28530c9e5e0bfe81ae523e27aa5fab1f370d306df04a->leave($__internal_76f2fb70627b6c98f11e28530c9e5e0bfe81ae523e27aa5fab1f370d306df04a_prof);

        
        $__internal_f62563a84bfa3433050039d1cec17533a4f86d53ecbe51f7b0482b7f87a4493f->leave($__internal_f62563a84bfa3433050039d1cec17533a4f86d53ecbe51f7b0482b7f87a4493f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a5330f65fc12422ad312523e6f2aab9ebd0f9e4882e404c5d6e45581a0c5681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5330f65fc12422ad312523e6f2aab9ebd0f9e4882e404c5d6e45581a0c5681->enter($__internal_0a5330f65fc12422ad312523e6f2aab9ebd0f9e4882e404c5d6e45581a0c5681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3521a6a5be718f3fb17ca38864d0c46137f6a4dc239c685477d96e178eba94b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3521a6a5be718f3fb17ca38864d0c46137f6a4dc239c685477d96e178eba94b3->enter($__internal_3521a6a5be718f3fb17ca38864d0c46137f6a4dc239c685477d96e178eba94b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3521a6a5be718f3fb17ca38864d0c46137f6a4dc239c685477d96e178eba94b3->leave($__internal_3521a6a5be718f3fb17ca38864d0c46137f6a4dc239c685477d96e178eba94b3_prof);

        
        $__internal_0a5330f65fc12422ad312523e6f2aab9ebd0f9e4882e404c5d6e45581a0c5681->leave($__internal_0a5330f65fc12422ad312523e6f2aab9ebd0f9e4882e404c5d6e45581a0c5681_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a64543d98631a1e751d88d4ed09a7ae935aa1b019d025297ed87d94ef3d43089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64543d98631a1e751d88d4ed09a7ae935aa1b019d025297ed87d94ef3d43089->enter($__internal_a64543d98631a1e751d88d4ed09a7ae935aa1b019d025297ed87d94ef3d43089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40b65bebd3b036f29386034655ef7c6deb69490a98a8232ed48c2c48e5716da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b65bebd3b036f29386034655ef7c6deb69490a98a8232ed48c2c48e5716da8->enter($__internal_40b65bebd3b036f29386034655ef7c6deb69490a98a8232ed48c2c48e5716da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40b65bebd3b036f29386034655ef7c6deb69490a98a8232ed48c2c48e5716da8->leave($__internal_40b65bebd3b036f29386034655ef7c6deb69490a98a8232ed48c2c48e5716da8_prof);

        
        $__internal_a64543d98631a1e751d88d4ed09a7ae935aa1b019d025297ed87d94ef3d43089->leave($__internal_a64543d98631a1e751d88d4ed09a7ae935aa1b019d025297ed87d94ef3d43089_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_09c21a64d45d9edda7b328ca424ba668de28cbf1f44bba7a32aae75786beda24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c21a64d45d9edda7b328ca424ba668de28cbf1f44bba7a32aae75786beda24->enter($__internal_09c21a64d45d9edda7b328ca424ba668de28cbf1f44bba7a32aae75786beda24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be713b7e6138144ff0ca529c279529ed79c4199d7d8e8faeed90120331f46b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be713b7e6138144ff0ca529c279529ed79c4199d7d8e8faeed90120331f46b8e->enter($__internal_be713b7e6138144ff0ca529c279529ed79c4199d7d8e8faeed90120331f46b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_be713b7e6138144ff0ca529c279529ed79c4199d7d8e8faeed90120331f46b8e->leave($__internal_be713b7e6138144ff0ca529c279529ed79c4199d7d8e8faeed90120331f46b8e_prof);

        
        $__internal_09c21a64d45d9edda7b328ca424ba668de28cbf1f44bba7a32aae75786beda24->leave($__internal_09c21a64d45d9edda7b328ca424ba668de28cbf1f44bba7a32aae75786beda24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
