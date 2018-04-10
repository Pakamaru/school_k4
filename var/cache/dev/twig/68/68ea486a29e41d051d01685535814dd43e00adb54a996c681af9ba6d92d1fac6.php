<?php

/* default/login.html.twig */
class __TwigTemplate_9f902229c1ec1b1dd46e4c5ba16ba385693c2a9ba177933b8573ada40a3d5f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
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
        $__internal_875263fb54ea3c26723a63ab07e0edb8d1b5ac1ea46765432a28a4b7055d7b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875263fb54ea3c26723a63ab07e0edb8d1b5ac1ea46765432a28a4b7055d7b67->enter($__internal_875263fb54ea3c26723a63ab07e0edb8d1b5ac1ea46765432a28a4b7055d7b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_1d5fe3545d79c6cfa7824066b7791cf738263e0a353bbd19e0d35e3e644bd107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5fe3545d79c6cfa7824066b7791cf738263e0a353bbd19e0d35e3e644bd107->enter($__internal_1d5fe3545d79c6cfa7824066b7791cf738263e0a353bbd19e0d35e3e644bd107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_875263fb54ea3c26723a63ab07e0edb8d1b5ac1ea46765432a28a4b7055d7b67->leave($__internal_875263fb54ea3c26723a63ab07e0edb8d1b5ac1ea46765432a28a4b7055d7b67_prof);

        
        $__internal_1d5fe3545d79c6cfa7824066b7791cf738263e0a353bbd19e0d35e3e644bd107->leave($__internal_1d5fe3545d79c6cfa7824066b7791cf738263e0a353bbd19e0d35e3e644bd107_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0d0fde62bb2afea3ad2249c170a5efba18566909ad32fe29722c7fc21598f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d0fde62bb2afea3ad2249c170a5efba18566909ad32fe29722c7fc21598f20->enter($__internal_f0d0fde62bb2afea3ad2249c170a5efba18566909ad32fe29722c7fc21598f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89fd108dc0a5ec9c52b5bfd10587bfda448c339dd15dc63d3d43d4e70484277a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd108dc0a5ec9c52b5bfd10587bfda448c339dd15dc63d3d43d4e70484277a->enter($__internal_89fd108dc0a5ec9c52b5bfd10587bfda448c339dd15dc63d3d43d4e70484277a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        ";
        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 7
        echo "
        <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"POST\">
            <h2>Login</h2>
            <div class=\"form-row\">
                <div class=\"form-group col-md-5\">
                    <label for=\"username\">Username</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\">
                </div>
                <div class=\"col-md-1\"></div>
                <div class=\"form-group col-md-5\">
                    <label for=\"password\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" aria-describedby=\"passwordHelp\"
                           placeholder=\"Password\">
                    <small id=\"passwordHelp\" class=\"form-text text-muted\">Don't share your password with anyone.</small>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
    </div>
";
        
        $__internal_89fd108dc0a5ec9c52b5bfd10587bfda448c339dd15dc63d3d43d4e70484277a->leave($__internal_89fd108dc0a5ec9c52b5bfd10587bfda448c339dd15dc63d3d43d4e70484277a_prof);

        
        $__internal_f0d0fde62bb2afea3ad2249c170a5efba18566909ad32fe29722c7fc21598f20->leave($__internal_f0d0fde62bb2afea3ad2249c170a5efba18566909ad32fe29722c7fc21598f20_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  60 => 7,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        <form action=\"{{ path('login') }}\" method=\"POST\">
            <h2>Login</h2>
            <div class=\"form-row\">
                <div class=\"form-group col-md-5\">
                    <label for=\"username\">Username</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\">
                </div>
                <div class=\"col-md-1\"></div>
                <div class=\"form-group col-md-5\">
                    <label for=\"password\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" aria-describedby=\"passwordHelp\"
                           placeholder=\"Password\">
                    <small id=\"passwordHelp\" class=\"form-text text-muted\">Don't share your password with anyone.</small>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
    </div>
{% endblock %}", "default/login.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\login.html.twig");
    }
}
