<?php

/* default/index.html.twig */
class __TwigTemplate_089ebc7e5e1dc6ffc05b2cfe40a1727d31136dd6555d0d555e58e5c698cb4814 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container center\">
        <ul class=\"sport-list\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            // line 7
            echo "                <a href=\"/sport/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sport"], "name", array(), "array"), "html", null, true);
            echo "\">
                <li class=\"sport-item\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["sport"], "name", array(), "array"), "html", null, true);
            echo "
                </li>
                </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </div>
";
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
        return array (  55 => 13,  45 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "C:\\wamp64\\www\\school_k4\\app\\Resources\\views\\default\\index.html.twig");
    }
}
