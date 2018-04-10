<?php

/* sports/show.html.twig */
class __TwigTemplate_85ef7374602573661c36fe01bbbc2b9b77f7ab24d3857a9094969f5902f43ca3 extends Twig_Template
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
        $__internal_cde70223979aa0b4963f2bbc61781197ef4a74852ea41b8c61aab27c503dd653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde70223979aa0b4963f2bbc61781197ef4a74852ea41b8c61aab27c503dd653->enter($__internal_cde70223979aa0b4963f2bbc61781197ef4a74852ea41b8c61aab27c503dd653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sports/show.html.twig"));

        $__internal_4dc268ff411aa75bf3e9abd2cf33c9d2a704b16f8e00d4ca3b7227f6a11a0d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc268ff411aa75bf3e9abd2cf33c9d2a704b16f8e00d4ca3b7227f6a11a0d08->enter($__internal_4dc268ff411aa75bf3e9abd2cf33c9d2a704b16f8e00d4ca3b7227f6a11a0d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sports/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde70223979aa0b4963f2bbc61781197ef4a74852ea41b8c61aab27c503dd653->leave($__internal_cde70223979aa0b4963f2bbc61781197ef4a74852ea41b8c61aab27c503dd653_prof);

        
        $__internal_4dc268ff411aa75bf3e9abd2cf33c9d2a704b16f8e00d4ca3b7227f6a11a0d08->leave($__internal_4dc268ff411aa75bf3e9abd2cf33c9d2a704b16f8e00d4ca3b7227f6a11a0d08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f418e0905cb63b0918c6fa656336f66b90495deb43f493a078a2dc97041f8aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f418e0905cb63b0918c6fa656336f66b90495deb43f493a078a2dc97041f8aa5->enter($__internal_f418e0905cb63b0918c6fa656336f66b90495deb43f493a078a2dc97041f8aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46d74b6d8694e0eb724de85238316e7bf948e4c41fc30ec1a82112747e29dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46d74b6d8694e0eb724de85238316e7bf948e4c41fc30ec1a82112747e29dd5->enter($__internal_a46d74b6d8694e0eb724de85238316e7bf948e4c41fc30ec1a82112747e29dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>
            Welkom op de sport pagina van ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "name", array(), "array"), "html", null, true);
        echo "
        </h1>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"block\">
                    <h3>About</h3>
                    <p>Hier kan je alles lezen over de sport ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "name", array(), "array"), "html", null, true);
        echo ".</p>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "about", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sport"] ?? $this->getContext($context, "sport")), "news", array(), "array"));
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
        
        $__internal_a46d74b6d8694e0eb724de85238316e7bf948e4c41fc30ec1a82112747e29dd5->leave($__internal_a46d74b6d8694e0eb724de85238316e7bf948e4c41fc30ec1a82112747e29dd5_prof);

        
        $__internal_f418e0905cb63b0918c6fa656336f66b90495deb43f493a078a2dc97041f8aa5->leave($__internal_f418e0905cb63b0918c6fa656336f66b90495deb43f493a078a2dc97041f8aa5_prof);

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
            Welkom op de sport pagina van {{ sport['name'] }}
        </h1>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"block\">
                    <h3>About</h3>
                    <p>Hier kan je alles lezen over de sport {{ sport['name'] }}.</p>
                    {% for about in sport['about'] %}
                        <p>{{ about }}</p>
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"block\">
                    <h3>News</h3>
                    <p>Hier staan alle nieuwe dingen over de sport.</p>
                    <ul>
                        {% for news in sport['news'] %}
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
