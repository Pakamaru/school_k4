<?php

/* admin/beheer.html.twig */
class __TwigTemplate_c8c2f85867f5f850f742eaf2898ffa258e4931f51c813ea77ec32540fcf6219d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/beheer.html.twig", 1);
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
        $__internal_1a4e82f93708212e2268e5d07ccfd78f255ce2d92104ddd80253a7134376428c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4e82f93708212e2268e5d07ccfd78f255ce2d92104ddd80253a7134376428c->enter($__internal_1a4e82f93708212e2268e5d07ccfd78f255ce2d92104ddd80253a7134376428c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/beheer.html.twig"));

        $__internal_8f061251abb3521ed62d4da006f7c4cadff6a106315e8774c3c60d13e3c6a6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f061251abb3521ed62d4da006f7c4cadff6a106315e8774c3c60d13e3c6a6b7->enter($__internal_8f061251abb3521ed62d4da006f7c4cadff6a106315e8774c3c60d13e3c6a6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/beheer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4e82f93708212e2268e5d07ccfd78f255ce2d92104ddd80253a7134376428c->leave($__internal_1a4e82f93708212e2268e5d07ccfd78f255ce2d92104ddd80253a7134376428c_prof);

        
        $__internal_8f061251abb3521ed62d4da006f7c4cadff6a106315e8774c3c60d13e3c6a6b7->leave($__internal_8f061251abb3521ed62d4da006f7c4cadff6a106315e8774c3c60d13e3c6a6b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1281d0ae69c586bfa8fcf815fa23d13ae43eef743972a31c40e544c07229223a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1281d0ae69c586bfa8fcf815fa23d13ae43eef743972a31c40e544c07229223a->enter($__internal_1281d0ae69c586bfa8fcf815fa23d13ae43eef743972a31c40e544c07229223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eeb3c62ddd99a98bd43225c685a88358613efa5118aaa5c8c7680ae1ca6a7312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb3c62ddd99a98bd43225c685a88358613efa5118aaa5c8c7680ae1ca6a7312->enter($__internal_eeb3c62ddd99a98bd43225c685a88358613efa5118aaa5c8c7680ae1ca6a7312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <table class=\"table\" style=\"table-layout: fixed\">
            <caption>Dit zijn alle ";
        // line 6
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "</caption>
            <thead>
            <tr>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? $this->getContext($context, "columns")));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 10
            echo "                    <td>";
            echo twig_escape_filter($this->env, $context["column"], "html", null, true);
            echo "</td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                <td>Weizig</td>
                <td>Verwijder</td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                <tr>
                    ";
            // line 19
            if ((($context["type"] ?? $this->getContext($context, "type")) == "Gebruikers")) {
                // line 20
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
                echo "</td>
                        <td>€";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "salary", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter($this->getAttribute($context["item"], "roles", array()), ", ")), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "afdeling", array()), "name", array()), "html", null, true);
                echo "</td>

                        <td title=\"reset het wachtwoord van deze gebruiker\">
                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("weizig", array("type" => ($context["type"] ?? $this->getContext($context, "type")), "id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                                <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                            </a>
                        </td>
                        <td title=\"verwijder deze gebruiker definitief\">
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("type" => ($context["type"] ?? $this->getContext($context, "type")), "id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                                <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                            </a>
                        </td>

                    ";
            }
            // line 39
            echo "                    ";
            if ((($context["type"] ?? $this->getContext($context, "type")) == "Sporten")) {
                // line 40
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news", array()), "html", null, true);
                echo "</td>

                    <td title=\"weizig deze sport\">
                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("weizig", array("type" => ($context["type"] ?? $this->getContext($context, "type")), "id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                            <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                        </a>
                    </td>
                        <td title=\"verwijder deze sport\">
                            <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("type" => ($context["type"] ?? $this->getContext($context, "type")), "id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                                <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                            </a>
                        </td>

                    ";
            }
            // line 57
            echo "                    ";
            if ((($context["type"] ?? $this->getContext($context, "type")) == "Afdelingen")) {
                // line 58
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "location", array()), "html", null, true);
                echo "</td>

                    <td title=\"weizig deze afdeling\">
                        <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("weizig", array("type" => ($context["type"] ?? $this->getContext($context, "type")), "id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                            <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                        </a>
                    </td>
                        <td title=\"verwijder deze afdeling\">
                            <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("type" => ($context["type"] ?? $this->getContext($context, "type")), "id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                                <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                            </a>
                        </td>

                    ";
            }
            // line 74
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_eeb3c62ddd99a98bd43225c685a88358613efa5118aaa5c8c7680ae1ca6a7312->leave($__internal_eeb3c62ddd99a98bd43225c685a88358613efa5118aaa5c8c7680ae1ca6a7312_prof);

        
        $__internal_1281d0ae69c586bfa8fcf815fa23d13ae43eef743972a31c40e544c07229223a->leave($__internal_1281d0ae69c586bfa8fcf815fa23d13ae43eef743972a31c40e544c07229223a_prof);

    }

    public function getTemplateName()
    {
        return "admin/beheer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 76,  206 => 74,  197 => 68,  189 => 63,  183 => 60,  179 => 59,  174 => 58,  171 => 57,  162 => 51,  154 => 46,  148 => 43,  144 => 42,  140 => 41,  135 => 40,  132 => 39,  123 => 33,  115 => 28,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  88 => 20,  86 => 19,  83 => 18,  79 => 17,  72 => 12,  63 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <table class=\"table\" style=\"table-layout: fixed\">
            <caption>Dit zijn alle {{ type }}</caption>
            <thead>
            <tr>
            {% for column in columns %}
                    <td>{{ column }}</td>
            {% endfor %}
                <td>Weizig</td>
                <td>Verwijder</td>
            </tr>
            </thead>
            <tbody>
            {% for item in items %}
                <tr>
                    {% if type == \"Gebruikers\" %}
                        <td>{{ item.id }}</td>
                        <td>{{ item.username }}</td>
                        <td>{{ item.email }}</td>
                        <td>€{{ item.salary }}</td>
                        <td>{{ item.roles|join(', ')|lower }}</td>
                        <td>{{ item.afdeling.name }}</td>

                        <td title=\"reset het wachtwoord van deze gebruiker\">
                            <a href=\"{{ path('weizig', {'type':type,'id':item.id}) }}\" >
                                <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                            </a>
                        </td>
                        <td title=\"verwijder deze gebruiker definitief\">
                            <a href=\"{{ path('delete', {'type':type,'id':item.id}) }}\" >
                                <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                            </a>
                        </td>

                    {% endif %}
                    {% if type == \"Sporten\" %}
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.description }}</td>
                        <td>{{ item.news }}</td>

                    <td title=\"weizig deze sport\">
                        <a href=\"{{ path('weizig', {'type':type,'id':item.id}) }}\" >
                            <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                        </a>
                    </td>
                        <td title=\"verwijder deze sport\">
                            <a href=\"{{ path('delete', {'type':type,'id':item.id}) }}\" >
                                <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                            </a>
                        </td>

                    {% endif %}
                    {% if type == \"Afdelingen\" %}
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.location }}</td>

                    <td title=\"weizig deze afdeling\">
                        <a href=\"{{ path('weizig', {'type':type,'id':item.id}) }}\" >
                            <span class=\"glyphicon glyphicon-pencil\" style=\"color:red\"></span>
                        </a>
                    </td>
                        <td title=\"verwijder deze afdeling\">
                            <a href=\"{{ path('delete', {'type':type,'id':item.id}) }}\" >
                                <span class=\"glyphicon glyphicon-minus\" style=\"color:red\"></span>
                            </a>
                        </td>

                    {% endif %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}", "admin/beheer.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\admin\\beheer.html.twig");
    }
}
