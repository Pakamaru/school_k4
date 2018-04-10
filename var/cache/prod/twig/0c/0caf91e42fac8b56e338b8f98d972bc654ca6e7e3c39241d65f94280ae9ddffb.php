<?php

/* sports/show.html.twig */
class __TwigTemplate_cd9c05f6e1f274642113d24bef259243b8a6894e032d7e48a455de2b225c303f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <a href=\"/\"><div class=\"back-to-homepage\">back</div></a>
<div class=\"container detail-pagina\">
    <h1>
        Welkom op de sport pagina van ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sport"] ?? null), "name", array(), "array"), "html", null, true);
        echo "
    </h1>
    <div class=\"row\">
        <div class=\"sport-about col-md-6 border rounded\">
            <h3>About</h3>
            <p>Hier kan je alles lezen over de sport ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sport"] ?? null), "name", array(), "array"), "html", null, true);
        echo ".</p>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sport"] ?? null), "about", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 14
            echo "                <p>";
            echo twig_escape_filter($this->env, $context["about"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
        <div class=\"col-sm-1\"></div>
        <div class=\"sport-news col-md-4 border rounded\">
            <h3>News</h3>
            <p>Hier staan alle nieuwe dingen over de sport.</p>
            <ul>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sport"] ?? null), "news", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 23
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["news"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </div>
    </div>
</div>
";
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
        return array (  82 => 25,  73 => 23,  69 => 22,  61 => 16,  52 => 14,  48 => 13,  44 => 12,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sports/show.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\sports\\show.html.twig");
    }
}
