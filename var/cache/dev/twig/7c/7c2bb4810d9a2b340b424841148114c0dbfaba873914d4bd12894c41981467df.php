<?php

/* base.html.twig */
class __TwigTemplate_6f06a2e167898936c970ccaddd03ba9d16b2a83ee7c92efba12230c1ad962997 extends Twig_Template
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
        $__internal_5ebf6273f564ee75a55bc20ee53d219b5672aea0e06f3ff7e0b03e9b6c1d0f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebf6273f564ee75a55bc20ee53d219b5672aea0e06f3ff7e0b03e9b6c1d0f60->enter($__internal_5ebf6273f564ee75a55bc20ee53d219b5672aea0e06f3ff7e0b03e9b6c1d0f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a8a3fd0c32db1c8025253992b103c16aa1f38812ef14fc58af901c0e9ed5f4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a3fd0c32db1c8025253992b103c16aa1f38812ef14fc58af901c0e9ed5f4d7->enter($__internal_a8a3fd0c32db1c8025253992b103c16aa1f38812ef14fc58af901c0e9ed5f4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 15
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "    <ul class=\"list-unstyled list-inline\">
        <li class=\"list-inline-item\">
            <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Home</a>
        </li>
        <li class=\"list-inline-item\">
            <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
        </li>
";
        }
        // line 24
        echo "        ";
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 25
            echo "
<li class=\"list-inline-item\">
    <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a>
</li>
        ";
        }
        // line 30
        echo "    </ul>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>
</html>
";
        
        $__internal_5ebf6273f564ee75a55bc20ee53d219b5672aea0e06f3ff7e0b03e9b6c1d0f60->leave($__internal_5ebf6273f564ee75a55bc20ee53d219b5672aea0e06f3ff7e0b03e9b6c1d0f60_prof);

        
        $__internal_a8a3fd0c32db1c8025253992b103c16aa1f38812ef14fc58af901c0e9ed5f4d7->leave($__internal_a8a3fd0c32db1c8025253992b103c16aa1f38812ef14fc58af901c0e9ed5f4d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75bb51b1432f7ffb20709f1e1df85597e579b1e6fa7bdffe26163231e722b23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bb51b1432f7ffb20709f1e1df85597e579b1e6fa7bdffe26163231e722b23f->enter($__internal_75bb51b1432f7ffb20709f1e1df85597e579b1e6fa7bdffe26163231e722b23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db390660e91a2788372cb3f1817bbed991b755bfbc7f3f747ce1505f1a2e3a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db390660e91a2788372cb3f1817bbed991b755bfbc7f3f747ce1505f1a2e3a8d->enter($__internal_db390660e91a2788372cb3f1817bbed991b755bfbc7f3f747ce1505f1a2e3a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_db390660e91a2788372cb3f1817bbed991b755bfbc7f3f747ce1505f1a2e3a8d->leave($__internal_db390660e91a2788372cb3f1817bbed991b755bfbc7f3f747ce1505f1a2e3a8d_prof);

        
        $__internal_75bb51b1432f7ffb20709f1e1df85597e579b1e6fa7bdffe26163231e722b23f->leave($__internal_75bb51b1432f7ffb20709f1e1df85597e579b1e6fa7bdffe26163231e722b23f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d874667f875efcdf399f0d841f026f103468c167bc9aa2d76234fe38d41cc62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d874667f875efcdf399f0d841f026f103468c167bc9aa2d76234fe38d41cc62b->enter($__internal_d874667f875efcdf399f0d841f026f103468c167bc9aa2d76234fe38d41cc62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c1285437da998709ea37b8d8a20c0b035f41086fa020b601ebc610e0d4ad797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1285437da998709ea37b8d8a20c0b035f41086fa020b601ebc610e0d4ad797->enter($__internal_2c1285437da998709ea37b8d8a20c0b035f41086fa020b601ebc610e0d4ad797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
              integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_2c1285437da998709ea37b8d8a20c0b035f41086fa020b601ebc610e0d4ad797->leave($__internal_2c1285437da998709ea37b8d8a20c0b035f41086fa020b601ebc610e0d4ad797_prof);

        
        $__internal_d874667f875efcdf399f0d841f026f103468c167bc9aa2d76234fe38d41cc62b->leave($__internal_d874667f875efcdf399f0d841f026f103468c167bc9aa2d76234fe38d41cc62b_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_616b1e1caa742d01a665e20f5d250d2933955ae4ed2e47c9bb6bbe4d6b813b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616b1e1caa742d01a665e20f5d250d2933955ae4ed2e47c9bb6bbe4d6b813b60->enter($__internal_616b1e1caa742d01a665e20f5d250d2933955ae4ed2e47c9bb6bbe4d6b813b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d10dd6096bf063b5bd5f79fdf9b2940df3f0f2a0261eea68e56864fc78a6a4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10dd6096bf063b5bd5f79fdf9b2940df3f0f2a0261eea68e56864fc78a6a4a1->enter($__internal_d10dd6096bf063b5bd5f79fdf9b2940df3f0f2a0261eea68e56864fc78a6a4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d10dd6096bf063b5bd5f79fdf9b2940df3f0f2a0261eea68e56864fc78a6a4a1->leave($__internal_d10dd6096bf063b5bd5f79fdf9b2940df3f0f2a0261eea68e56864fc78a6a4a1_prof);

        
        $__internal_616b1e1caa742d01a665e20f5d250d2933955ae4ed2e47c9bb6bbe4d6b813b60->leave($__internal_616b1e1caa742d01a665e20f5d250d2933955ae4ed2e47c9bb6bbe4d6b813b60_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbe4b6f4643d10aaabfce7142718d99b500609d0a817863bf37eda213a1b5bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe4b6f4643d10aaabfce7142718d99b500609d0a817863bf37eda213a1b5bc6->enter($__internal_bbe4b6f4643d10aaabfce7142718d99b500609d0a817863bf37eda213a1b5bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_98cf737269680c66e04b4dc4fe0b10eb36acfef4307b92b1472c904f62ed90f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cf737269680c66e04b4dc4fe0b10eb36acfef4307b92b1472c904f62ed90f1->enter($__internal_98cf737269680c66e04b4dc4fe0b10eb36acfef4307b92b1472c904f62ed90f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
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
        
        $__internal_98cf737269680c66e04b4dc4fe0b10eb36acfef4307b92b1472c904f62ed90f1->leave($__internal_98cf737269680c66e04b4dc4fe0b10eb36acfef4307b92b1472c904f62ed90f1_prof);

        
        $__internal_bbe4b6f4643d10aaabfce7142718d99b500609d0a817863bf37eda213a1b5bc6->leave($__internal_bbe4b6f4643d10aaabfce7142718d99b500609d0a817863bf37eda213a1b5bc6_prof);

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
        return array (  168 => 33,  159 => 32,  142 => 31,  130 => 10,  125 => 7,  116 => 6,  98 => 5,  86 => 43,  84 => 32,  82 => 31,  79 => 30,  73 => 27,  69 => 25,  66 => 24,  60 => 21,  54 => 18,  50 => 16,  48 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
              integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
{% if app.user %}
    <ul class=\"list-unstyled list-inline\">
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
