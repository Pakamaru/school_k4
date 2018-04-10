<?php

/* sports/show.html.twig */
class __TwigTemplate_46b4e6fe19277cac7ecf3b1f82017d7dc1cf37ad30a1f442cd73ad2c3e0d945b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sports/show.html.twig", 1);
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
        $__internal_a856f2c23b439d3c6ed65b4900e424ab833b5dfbd0f7304f1923006a46354a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a856f2c23b439d3c6ed65b4900e424ab833b5dfbd0f7304f1923006a46354a70->enter($__internal_a856f2c23b439d3c6ed65b4900e424ab833b5dfbd0f7304f1923006a46354a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sports/show.html.twig"));

        $__internal_13a3a86f2d5b63f7aa7ff6e83b2ffe6b15a4f6332d1132c87b983060fd03919a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a3a86f2d5b63f7aa7ff6e83b2ffe6b15a4f6332d1132c87b983060fd03919a->enter($__internal_13a3a86f2d5b63f7aa7ff6e83b2ffe6b15a4f6332d1132c87b983060fd03919a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sports/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a856f2c23b439d3c6ed65b4900e424ab833b5dfbd0f7304f1923006a46354a70->leave($__internal_a856f2c23b439d3c6ed65b4900e424ab833b5dfbd0f7304f1923006a46354a70_prof);

        
        $__internal_13a3a86f2d5b63f7aa7ff6e83b2ffe6b15a4f6332d1132c87b983060fd03919a->leave($__internal_13a3a86f2d5b63f7aa7ff6e83b2ffe6b15a4f6332d1132c87b983060fd03919a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fa706324c5a4b2faf16f1cb409ea3dec835d2dfd9831726da6f5efc99434b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa706324c5a4b2faf16f1cb409ea3dec835d2dfd9831726da6f5efc99434b69->enter($__internal_7fa706324c5a4b2faf16f1cb409ea3dec835d2dfd9831726da6f5efc99434b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17ee0d0054b0fc9b38144c88bb898754c324f55a028486b8ad586ef50280b306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ee0d0054b0fc9b38144c88bb898754c324f55a028486b8ad586ef50280b306->enter($__internal_17ee0d0054b0fc9b38144c88bb898754c324f55a028486b8ad586ef50280b306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>
            Welkom op de sport pagina van ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "name", array()), "html", null, true);
        echo "
        </h1>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"block\">
                    <h3>About</h3>
                    <p>Hier kan je alles lezen over de sport ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "name", array()), "html", null, true);
        echo ".</p>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "description", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 14
            echo "                        <p>";
            echo twig_escape_filter($this->env, $context["about"], "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"block\">
                    <h3>News</h3>
                    <p>Hier staan alle nieuwe dingen over de sport.</p>
                    <ul>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "news", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 24
            echo "                            <li>";
            echo twig_escape_filter($this->env, $context["news"], "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </ul>

                    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"back-to-homepage\">back</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_17ee0d0054b0fc9b38144c88bb898754c324f55a028486b8ad586ef50280b306->leave($__internal_17ee0d0054b0fc9b38144c88bb898754c324f55a028486b8ad586ef50280b306_prof);

        
        $__internal_7fa706324c5a4b2faf16f1cb409ea3dec835d2dfd9831726da6f5efc99434b69->leave($__internal_7fa706324c5a4b2faf16f1cb409ea3dec835d2dfd9831726da6f5efc99434b69_prof);

    }

    public function getTemplateName()
    {
        return "sports/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  101 => 26,  92 => 24,  88 => 23,  79 => 16,  70 => 14,  66 => 13,  62 => 12,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <h1>
            Welkom op de sport pagina van {{ sport.name }}
        </h1>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"block\">
                    <h3>About</h3>
                    <p>Hier kan je alles lezen over de sport {{ sport.name }}.</p>
                    {% for about in sport.description %}
                        <p>{{ about }}</p>
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"block\">
                    <h3>News</h3>
                    <p>Hier staan alle nieuwe dingen over de sport.</p>
                    <ul>
                        {% for news in sport.news %}
                            <li>{{ news }}</li>
                        {% endfor %}
                    </ul>

                    <a href=\"{{ path(\"homepage\") }}\" class=\"back-to-homepage\">back</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "sports/show.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\sports\\show.html.twig");
    }
}
