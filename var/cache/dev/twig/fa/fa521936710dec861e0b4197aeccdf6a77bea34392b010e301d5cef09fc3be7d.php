<?php

/* base.html.twig */
class __TwigTemplate_de3d05f7f9be6bbd41eeeb5239534af625f8fd2a92cacef65a07c948015fe9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a8ef8a4d60564924a1638f6558ebed0373c8e961971969fa6249e3f5d268dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8ef8a4d60564924a1638f6558ebed0373c8e961971969fa6249e3f5d268dda->enter($__internal_9a8ef8a4d60564924a1638f6558ebed0373c8e961971969fa6249e3f5d268dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_670326f1932d98fe36c35f600c5d0a7b70658cc382625b4818da72bfd7d18911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670326f1932d98fe36c35f600c5d0a7b70658cc382625b4818da72bfd7d18911->enter($__internal_670326f1932d98fe36c35f600c5d0a7b70658cc382625b4818da72bfd7d18911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
<ul class=\"list-unstyled list-inline\">
";
        // line 15
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "        <li class=\"list-inline-item\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Home</a>
        </li>
        <li class=\"list-inline-item\">
            <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
        </li>
";
        }
        // line 23
        echo "        ";
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 24
            echo "
            <li class=\"list-inline-item\">
                <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aanmelden");
            echo "\">Registreren</a>
            </li>
        ";
        }
        // line 32
        echo "    </ul>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
        
        $__internal_9a8ef8a4d60564924a1638f6558ebed0373c8e961971969fa6249e3f5d268dda->leave($__internal_9a8ef8a4d60564924a1638f6558ebed0373c8e961971969fa6249e3f5d268dda_prof);

        
        $__internal_670326f1932d98fe36c35f600c5d0a7b70658cc382625b4818da72bfd7d18911->leave($__internal_670326f1932d98fe36c35f600c5d0a7b70658cc382625b4818da72bfd7d18911_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3de4a49bd3c2dc0cfb2c3f0559f30b9b0a40b3ecf98506c952458b350a433f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3de4a49bd3c2dc0cfb2c3f0559f30b9b0a40b3ecf98506c952458b350a433f4->enter($__internal_e3de4a49bd3c2dc0cfb2c3f0559f30b9b0a40b3ecf98506c952458b350a433f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f22ac2c03954c9aa20e78caddb348e8ebbd79393bb80a2bff4862ccdd3cddd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f22ac2c03954c9aa20e78caddb348e8ebbd79393bb80a2bff4862ccdd3cddd2->enter($__internal_1f22ac2c03954c9aa20e78caddb348e8ebbd79393bb80a2bff4862ccdd3cddd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f22ac2c03954c9aa20e78caddb348e8ebbd79393bb80a2bff4862ccdd3cddd2->leave($__internal_1f22ac2c03954c9aa20e78caddb348e8ebbd79393bb80a2bff4862ccdd3cddd2_prof);

        
        $__internal_e3de4a49bd3c2dc0cfb2c3f0559f30b9b0a40b3ecf98506c952458b350a433f4->leave($__internal_e3de4a49bd3c2dc0cfb2c3f0559f30b9b0a40b3ecf98506c952458b350a433f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc5e383ffc643b3e0610db39c6a67bf802516406ef02ce95cbd47b24cb0549e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5e383ffc643b3e0610db39c6a67bf802516406ef02ce95cbd47b24cb0549e9->enter($__internal_fc5e383ffc643b3e0610db39c6a67bf802516406ef02ce95cbd47b24cb0549e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9bcc7fd919e3c18898746a41d7246c32ec15452f803daefbd82d66ca6c54de78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcc7fd919e3c18898746a41d7246c32ec15452f803daefbd82d66ca6c54de78->enter($__internal_9bcc7fd919e3c18898746a41d7246c32ec15452f803daefbd82d66ca6c54de78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_9bcc7fd919e3c18898746a41d7246c32ec15452f803daefbd82d66ca6c54de78->leave($__internal_9bcc7fd919e3c18898746a41d7246c32ec15452f803daefbd82d66ca6c54de78_prof);

        
        $__internal_fc5e383ffc643b3e0610db39c6a67bf802516406ef02ce95cbd47b24cb0549e9->leave($__internal_fc5e383ffc643b3e0610db39c6a67bf802516406ef02ce95cbd47b24cb0549e9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c8630f77dd8beb139e6598e44ac258563405a35c9acd4e40bbb401948389678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8630f77dd8beb139e6598e44ac258563405a35c9acd4e40bbb401948389678->enter($__internal_8c8630f77dd8beb139e6598e44ac258563405a35c9acd4e40bbb401948389678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea220823a8caec3b1c48cf1698fb9b28a28cfc796a3dd46dd9f6b7ba64d1255c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea220823a8caec3b1c48cf1698fb9b28a28cfc796a3dd46dd9f6b7ba64d1255c->enter($__internal_ea220823a8caec3b1c48cf1698fb9b28a28cfc796a3dd46dd9f6b7ba64d1255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea220823a8caec3b1c48cf1698fb9b28a28cfc796a3dd46dd9f6b7ba64d1255c->leave($__internal_ea220823a8caec3b1c48cf1698fb9b28a28cfc796a3dd46dd9f6b7ba64d1255c_prof);

        
        $__internal_8c8630f77dd8beb139e6598e44ac258563405a35c9acd4e40bbb401948389678->leave($__internal_8c8630f77dd8beb139e6598e44ac258563405a35c9acd4e40bbb401948389678_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc2f0350c4178d0fd8b7c846b539da290c9f07a7d066b998820f6b02be88331a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2f0350c4178d0fd8b7c846b539da290c9f07a7d066b998820f6b02be88331a->enter($__internal_bc2f0350c4178d0fd8b7c846b539da290c9f07a7d066b998820f6b02be88331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b23da547899fad0d6949406463f71872d9fc59c5c1aa21a8cf0ec1c6007e835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b23da547899fad0d6949406463f71872d9fc59c5c1aa21a8cf0ec1c6007e835->enter($__internal_8b23da547899fad0d6949406463f71872d9fc59c5c1aa21a8cf0ec1c6007e835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
            integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
            integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
            crossorigin=\"anonymous\"></script>
";
        
        $__internal_8b23da547899fad0d6949406463f71872d9fc59c5c1aa21a8cf0ec1c6007e835->leave($__internal_8b23da547899fad0d6949406463f71872d9fc59c5c1aa21a8cf0ec1c6007e835_prof);

        
        $__internal_bc2f0350c4178d0fd8b7c846b539da290c9f07a7d066b998820f6b02be88331a->leave($__internal_bc2f0350c4178d0fd8b7c846b539da290c9f07a7d066b998820f6b02be88331a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 35,  169 => 34,  152 => 33,  140 => 9,  136 => 8,  131 => 7,  122 => 6,  104 => 5,  92 => 45,  90 => 34,  88 => 33,  85 => 32,  79 => 29,  73 => 26,  69 => 24,  66 => 23,  60 => 20,  54 => 17,  51 => 16,  49 => 15,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
<ul class=\"list-unstyled list-inline\">
{% if app.user %}
        <li class=\"list-inline-item\">
            <a href=\"{{ path(\"homepage\") }}\">Home</a>
        </li>
        <li class=\"list-inline-item\">
            <a href=\"{{ path(\"logout\") }}\">Logout</a>
        </li>
{% endif %}
        {% if not app.user %}

            <li class=\"list-inline-item\">
                <a href=\"{{ path(\"login\") }}\">Login</a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"{{ path(\"aanmelden\") }}\">Registreren</a>
            </li>
        {% endif %}
    </ul>
{% block body %}{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
            integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
            integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
            crossorigin=\"anonymous\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\base.html.twig");
    }
}
