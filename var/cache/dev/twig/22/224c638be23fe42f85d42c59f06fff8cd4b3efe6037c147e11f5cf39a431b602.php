<?php

/* default/beheer.html.twig */
class __TwigTemplate_74dfffe0eb2bc7e917914c6cf4e6b50a85b6d1d8ab0b33b0fab59a0070327a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/beheer.html.twig", 1);
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
        $__internal_59cbdb136009dbb4c345d4e3b9d392c9db74250132322b164b077b72322ee4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59cbdb136009dbb4c345d4e3b9d392c9db74250132322b164b077b72322ee4ce->enter($__internal_59cbdb136009dbb4c345d4e3b9d392c9db74250132322b164b077b72322ee4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/beheer.html.twig"));

        $__internal_f39741c9eeac95b598b77a4b43017012fe50f88bea4ab846937d4053caa15b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39741c9eeac95b598b77a4b43017012fe50f88bea4ab846937d4053caa15b9c->enter($__internal_f39741c9eeac95b598b77a4b43017012fe50f88bea4ab846937d4053caa15b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/beheer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59cbdb136009dbb4c345d4e3b9d392c9db74250132322b164b077b72322ee4ce->leave($__internal_59cbdb136009dbb4c345d4e3b9d392c9db74250132322b164b077b72322ee4ce_prof);

        
        $__internal_f39741c9eeac95b598b77a4b43017012fe50f88bea4ab846937d4053caa15b9c->leave($__internal_f39741c9eeac95b598b77a4b43017012fe50f88bea4ab846937d4053caa15b9c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_da19b3f5db7b5a5cf41a1d63bcdd9f55d7545c385e83fbed0abde1ae80d26abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da19b3f5db7b5a5cf41a1d63bcdd9f55d7545c385e83fbed0abde1ae80d26abc->enter($__internal_da19b3f5db7b5a5cf41a1d63bcdd9f55d7545c385e83fbed0abde1ae80d26abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7452514a1d841a2acb3002c82b7cd30fe8f8f2c1d2b3e448b81f1c1a287eb9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7452514a1d841a2acb3002c82b7cd30fe8f8f2c1d2b3e448b81f1c1a287eb9e8->enter($__internal_7452514a1d841a2acb3002c82b7cd30fe8f8f2c1d2b3e448b81f1c1a287eb9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Members</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <td>username</td>
            <td>email</td>
            <td>roles</td>
            <td>afdeling</td>
            <td>reset wachtwoord</td>
            <td>verwijder</td>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter($this->getAttribute($context["user"], "roles", array()), ", ")), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "afdeling", array()), "name", array()), "html", null, true);
            echo "</td>
                <td title=\"reset het wachtwoord van deze gebruiker\">


                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resetuser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" >
                        <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                    </a>
                </td>
                <td title=\"verwijder deze gebruiker definitief\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteuser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" >
                        <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <tr>

        </tr>
        </tbody>
    </table>
";
        
        $__internal_7452514a1d841a2acb3002c82b7cd30fe8f8f2c1d2b3e448b81f1c1a287eb9e8->leave($__internal_7452514a1d841a2acb3002c82b7cd30fe8f8f2c1d2b3e448b81f1c1a287eb9e8_prof);

        
        $__internal_da19b3f5db7b5a5cf41a1d63bcdd9f55d7545c385e83fbed0abde1ae80d26abc->leave($__internal_da19b3f5db7b5a5cf41a1d63bcdd9f55d7545c385e83fbed0abde1ae80d26abc_prof);

    }

    public function getTemplateName()
    {
        return "default/beheer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  98 => 30,  90 => 25,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  68 => 17,  64 => 16,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>Members</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <td>username</td>
            <td>email</td>
            <td>roles</td>
            <td>afdeling</td>
            <td>reset wachtwoord</td>
            <td>verwijder</td>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.username }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.roles|join(', ')|lower }}</td>
                <td>{{ user.afdeling.name }}</td>
                <td title=\"reset het wachtwoord van deze gebruiker\">


                    <a href=\"{{ path('resetuser', {'id':user.id}) }}\" >
                        <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                    </a>
                </td>
                <td title=\"verwijder deze gebruiker definitief\">
                    <a href=\"{{ path('deleteuser', {'id':user.id}) }}\" >
                        <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                    </a>
                </td>
            </tr>
        {% endfor %}
        <tr>

        </tr>
        </tbody>
    </table>
{% endblock %}", "default/beheer.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\beheer.html.twig");
    }
}
