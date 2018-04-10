<?php

/* admin/admin.html.twig */
class __TwigTemplate_938a996847a86bb000db888b8fdae97508147532040ccd76ccd610e83c669878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
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
        $__internal_48398430060881779a38d8634fb1e2b22848b1e153de3e318d2204c8cd10cdab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48398430060881779a38d8634fb1e2b22848b1e153de3e318d2204c8cd10cdab->enter($__internal_48398430060881779a38d8634fb1e2b22848b1e153de3e318d2204c8cd10cdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_5c22db11fd5d69a8094c2a036168ada4118a960af8c59b93dfb4c4d99c7f73d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c22db11fd5d69a8094c2a036168ada4118a960af8c59b93dfb4c4d99c7f73d8->enter($__internal_5c22db11fd5d69a8094c2a036168ada4118a960af8c59b93dfb4c4d99c7f73d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48398430060881779a38d8634fb1e2b22848b1e153de3e318d2204c8cd10cdab->leave($__internal_48398430060881779a38d8634fb1e2b22848b1e153de3e318d2204c8cd10cdab_prof);

        
        $__internal_5c22db11fd5d69a8094c2a036168ada4118a960af8c59b93dfb4c4d99c7f73d8->leave($__internal_5c22db11fd5d69a8094c2a036168ada4118a960af8c59b93dfb4c4d99c7f73d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f135cd34f0c1679c19834df06351986db853304c7e689ca21c99d47bfc190dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f135cd34f0c1679c19834df06351986db853304c7e689ca21c99d47bfc190dbc->enter($__internal_f135cd34f0c1679c19834df06351986db853304c7e689ca21c99d47bfc190dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02cfe5b6d9447f7cf12daeace137f48d7da1c95999aded37dae4c92b61b3661c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cfe5b6d9447f7cf12daeace137f48d7da1c95999aded37dae4c92b61b3661c->enter($__internal_02cfe5b6d9447f7cf12daeace137f48d7da1c95999aded37dae4c92b61b3661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Welkom Admin</h1>

        <ul class=\"list-unstyled\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beheer", array("type" => "user"));
        echo "\"><li>
                User beheer
            </li></a>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beheer", array("type" => "sport"));
        echo "\"><li>
                    Sport beheer
            </li></a>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beheer", array("type" => "afdeling"));
        echo "\"><li>
                    Afdeling beheer
            </li></a>
        </ul>
    </div>

";
        
        $__internal_02cfe5b6d9447f7cf12daeace137f48d7da1c95999aded37dae4c92b61b3661c->leave($__internal_02cfe5b6d9447f7cf12daeace137f48d7da1c95999aded37dae4c92b61b3661c_prof);

        
        $__internal_f135cd34f0c1679c19834df06351986db853304c7e689ca21c99d47bfc190dbc->leave($__internal_f135cd34f0c1679c19834df06351986db853304c7e689ca21c99d47bfc190dbc_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  61 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
            <a href=\"{{ path('beheer', {'type':'user'}) }}\"><li>
                User beheer
            </li></a>
            <a href=\"{{ path('beheer', {'type':'sport'}) }}\"><li>
                    Sport beheer
            </li></a>
            <a href=\"{{ path('beheer', {'type':'afdeling'}) }}\"><li>
                    Afdeling beheer
            </li></a>
        </ul>
    </div>

{% endblock %}", "admin/admin.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\admin\\admin.html.twig");
    }
}
