<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a55ceb3b08007be2f1a70139b0934012761a384bd0fd278b18150cd28bd8ce75 extends Twig_Template
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
        $__internal_d8bb3d4f12ad66dbad6b25692a5c3eb6eeeeca6c85e37eee27111e7cee278675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bb3d4f12ad66dbad6b25692a5c3eb6eeeeca6c85e37eee27111e7cee278675->enter($__internal_d8bb3d4f12ad66dbad6b25692a5c3eb6eeeeca6c85e37eee27111e7cee278675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d345cd8784c2052c8a66e916cb1ac735f997e31d61ac0c0a0d3aa4a1eaab7695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d345cd8784c2052c8a66e916cb1ac735f997e31d61ac0c0a0d3aa4a1eaab7695->enter($__internal_d345cd8784c2052c8a66e916cb1ac735f997e31d61ac0c0a0d3aa4a1eaab7695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bb3d4f12ad66dbad6b25692a5c3eb6eeeeca6c85e37eee27111e7cee278675->leave($__internal_d8bb3d4f12ad66dbad6b25692a5c3eb6eeeeca6c85e37eee27111e7cee278675_prof);

        
        $__internal_d345cd8784c2052c8a66e916cb1ac735f997e31d61ac0c0a0d3aa4a1eaab7695->leave($__internal_d345cd8784c2052c8a66e916cb1ac735f997e31d61ac0c0a0d3aa4a1eaab7695_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6a34398eb9c478d91311ac2fcba1cba746b61be177b40f8b3fc289a34c34eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a34398eb9c478d91311ac2fcba1cba746b61be177b40f8b3fc289a34c34eeb->enter($__internal_d6a34398eb9c478d91311ac2fcba1cba746b61be177b40f8b3fc289a34c34eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8783db461b06368a44e0dffe9d0712aa352136c3d7ac960d011c22b0dd64f4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8783db461b06368a44e0dffe9d0712aa352136c3d7ac960d011c22b0dd64f4e5->enter($__internal_8783db461b06368a44e0dffe9d0712aa352136c3d7ac960d011c22b0dd64f4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8783db461b06368a44e0dffe9d0712aa352136c3d7ac960d011c22b0dd64f4e5->leave($__internal_8783db461b06368a44e0dffe9d0712aa352136c3d7ac960d011c22b0dd64f4e5_prof);

        
        $__internal_d6a34398eb9c478d91311ac2fcba1cba746b61be177b40f8b3fc289a34c34eeb->leave($__internal_d6a34398eb9c478d91311ac2fcba1cba746b61be177b40f8b3fc289a34c34eeb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_217cebc435867ad96a6dd1b08bd185078f0ad1deb31dde2c76b4dbb09fd17a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217cebc435867ad96a6dd1b08bd185078f0ad1deb31dde2c76b4dbb09fd17a12->enter($__internal_217cebc435867ad96a6dd1b08bd185078f0ad1deb31dde2c76b4dbb09fd17a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_161df832c3a3b5ff4c6e25675457b87c3a97e02d25c82e62ebdb2663ca542da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161df832c3a3b5ff4c6e25675457b87c3a97e02d25c82e62ebdb2663ca542da9->enter($__internal_161df832c3a3b5ff4c6e25675457b87c3a97e02d25c82e62ebdb2663ca542da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_161df832c3a3b5ff4c6e25675457b87c3a97e02d25c82e62ebdb2663ca542da9->leave($__internal_161df832c3a3b5ff4c6e25675457b87c3a97e02d25c82e62ebdb2663ca542da9_prof);

        
        $__internal_217cebc435867ad96a6dd1b08bd185078f0ad1deb31dde2c76b4dbb09fd17a12->leave($__internal_217cebc435867ad96a6dd1b08bd185078f0ad1deb31dde2c76b4dbb09fd17a12_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_517c618db5553c8d2cb0a33f007af411c836ee0f967c0f93e40f7cbefacf4f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517c618db5553c8d2cb0a33f007af411c836ee0f967c0f93e40f7cbefacf4f18->enter($__internal_517c618db5553c8d2cb0a33f007af411c836ee0f967c0f93e40f7cbefacf4f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da46c8518ab8717efd20aa1335c47b5998ee786f80700c20ac86ef79932248ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da46c8518ab8717efd20aa1335c47b5998ee786f80700c20ac86ef79932248ec->enter($__internal_da46c8518ab8717efd20aa1335c47b5998ee786f80700c20ac86ef79932248ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_da46c8518ab8717efd20aa1335c47b5998ee786f80700c20ac86ef79932248ec->leave($__internal_da46c8518ab8717efd20aa1335c47b5998ee786f80700c20ac86ef79932248ec_prof);

        
        $__internal_517c618db5553c8d2cb0a33f007af411c836ee0f967c0f93e40f7cbefacf4f18->leave($__internal_517c618db5553c8d2cb0a33f007af411c836ee0f967c0f93e40f7cbefacf4f18_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Amaru Signore\\projects\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
