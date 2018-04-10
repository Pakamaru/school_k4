<?php

/* default/login.html.twig */
class __TwigTemplate_895c57d35e3b0430c59822ad0f2ee5ed12b28cb5ee5ca20a720a7c599cba66cf extends Twig_Template
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
        $__internal_535664669689fb1b9be84e1492b87b4010c86108b42ad13df58efe7aa2372da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535664669689fb1b9be84e1492b87b4010c86108b42ad13df58efe7aa2372da8->enter($__internal_535664669689fb1b9be84e1492b87b4010c86108b42ad13df58efe7aa2372da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_7141f153084e149c2dcc56e956b4254b45adf87d66663d0adc19eb6956621df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7141f153084e149c2dcc56e956b4254b45adf87d66663d0adc19eb6956621df8->enter($__internal_7141f153084e149c2dcc56e956b4254b45adf87d66663d0adc19eb6956621df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535664669689fb1b9be84e1492b87b4010c86108b42ad13df58efe7aa2372da8->leave($__internal_535664669689fb1b9be84e1492b87b4010c86108b42ad13df58efe7aa2372da8_prof);

        
        $__internal_7141f153084e149c2dcc56e956b4254b45adf87d66663d0adc19eb6956621df8->leave($__internal_7141f153084e149c2dcc56e956b4254b45adf87d66663d0adc19eb6956621df8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8166ef94d7b8e29d8cc99044182a2b204785396c7fbe877d216bcc9a368aa51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8166ef94d7b8e29d8cc99044182a2b204785396c7fbe877d216bcc9a368aa51->enter($__internal_c8166ef94d7b8e29d8cc99044182a2b204785396c7fbe877d216bcc9a368aa51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b2f0217fe46d4f89ee8180cf4afc3ad2bb368e90366483eb6bb2c3ad41d4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b2f0217fe46d4f89ee8180cf4afc3ad2bb368e90366483eb6bb2c3ad41d4d9->enter($__internal_e5b2f0217fe46d4f89ee8180cf4afc3ad2bb368e90366483eb6bb2c3ad41d4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5b2f0217fe46d4f89ee8180cf4afc3ad2bb368e90366483eb6bb2c3ad41d4d9->leave($__internal_e5b2f0217fe46d4f89ee8180cf4afc3ad2bb368e90366483eb6bb2c3ad41d4d9_prof);

        
        $__internal_c8166ef94d7b8e29d8cc99044182a2b204785396c7fbe877d216bcc9a368aa51->leave($__internal_c8166ef94d7b8e29d8cc99044182a2b204785396c7fbe877d216bcc9a368aa51_prof);

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
