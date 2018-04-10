<?php

/* default/index.html.twig */
class __TwigTemplate_f61770017043e919230096731c954bfd55e98f566833b39c590a13d9ff32b8b8 extends Twig_Template
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
        $__internal_73c996f7ee2815e67a6e711d28c9da2f8c06414c61b97276d8dd1e13a5aed5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c996f7ee2815e67a6e711d28c9da2f8c06414c61b97276d8dd1e13a5aed5b0->enter($__internal_73c996f7ee2815e67a6e711d28c9da2f8c06414c61b97276d8dd1e13a5aed5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_69a921914e41d2405bab662fef688b240cdff63b9fd07754d6e820010238600d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a921914e41d2405bab662fef688b240cdff63b9fd07754d6e820010238600d->enter($__internal_69a921914e41d2405bab662fef688b240cdff63b9fd07754d6e820010238600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c996f7ee2815e67a6e711d28c9da2f8c06414c61b97276d8dd1e13a5aed5b0->leave($__internal_73c996f7ee2815e67a6e711d28c9da2f8c06414c61b97276d8dd1e13a5aed5b0_prof);

        
        $__internal_69a921914e41d2405bab662fef688b240cdff63b9fd07754d6e820010238600d->leave($__internal_69a921914e41d2405bab662fef688b240cdff63b9fd07754d6e820010238600d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4c5e7d492d20533cf9ebd7d440e5c36e74c0423787af0a0ba9f778bea6d68a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c5e7d492d20533cf9ebd7d440e5c36e74c0423787af0a0ba9f778bea6d68a7->enter($__internal_f4c5e7d492d20533cf9ebd7d440e5c36e74c0423787af0a0ba9f778bea6d68a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2281297f044a28790228d039c5dc551ccb8441be74ab9436ac8ba8ae2b8d27fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2281297f044a28790228d039c5dc551ccb8441be74ab9436ac8ba8ae2b8d27fb->enter($__internal_2281297f044a28790228d039c5dc551ccb8441be74ab9436ac8ba8ae2b8d27fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_sport", array("id" => $this->getAttribute($context["sport"], "id", array()))), "html", null, true);
            echo "\">
                <li class=\"sport-item\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["sport"], "name", array()), "html", null, true);
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
        
        $__internal_2281297f044a28790228d039c5dc551ccb8441be74ab9436ac8ba8ae2b8d27fb->leave($__internal_2281297f044a28790228d039c5dc551ccb8441be74ab9436ac8ba8ae2b8d27fb_prof);

        
        $__internal_f4c5e7d492d20533cf9ebd7d440e5c36e74c0423787af0a0ba9f778bea6d68a7->leave($__internal_f4c5e7d492d20533cf9ebd7d440e5c36e74c0423787af0a0ba9f778bea6d68a7_prof);

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
                <a href=\"{{ path('detail_sport',{'id':sport.id}) }}\">
                <li class=\"sport-item\">
                    {{ sport.name }}
                </li>
                </a>
    {% endfor %}
        </ul>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\index.html.twig");
    }
}
