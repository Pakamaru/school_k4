<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bb8afd2787e110b4e3306617e010a5187075033fae58256d54cd35af55e19d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58cd44e962914e37af0e5c6e076b91fa5a7437bbdbbe38d7faaf5eb57be4fabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58cd44e962914e37af0e5c6e076b91fa5a7437bbdbbe38d7faaf5eb57be4fabb->enter($__internal_58cd44e962914e37af0e5c6e076b91fa5a7437bbdbbe38d7faaf5eb57be4fabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a383039b52dd3ba522de561e33c98607a12b7bf36575459dcb81abeb38def2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a383039b52dd3ba522de561e33c98607a12b7bf36575459dcb81abeb38def2df->enter($__internal_a383039b52dd3ba522de561e33c98607a12b7bf36575459dcb81abeb38def2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_58cd44e962914e37af0e5c6e076b91fa5a7437bbdbbe38d7faaf5eb57be4fabb->leave($__internal_58cd44e962914e37af0e5c6e076b91fa5a7437bbdbbe38d7faaf5eb57be4fabb_prof);

        
        $__internal_a383039b52dd3ba522de561e33c98607a12b7bf36575459dcb81abeb38def2df->leave($__internal_a383039b52dd3ba522de561e33c98607a12b7bf36575459dcb81abeb38def2df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60b123b9bfdbf31c148629497a384257c9d06e3063a26006012b29b027e61d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b123b9bfdbf31c148629497a384257c9d06e3063a26006012b29b027e61d71->enter($__internal_60b123b9bfdbf31c148629497a384257c9d06e3063a26006012b29b027e61d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1dc1ee269313f64826252a50ae3fb6fc0cd17db59d3a5fa109b3027523ed0419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc1ee269313f64826252a50ae3fb6fc0cd17db59d3a5fa109b3027523ed0419->enter($__internal_1dc1ee269313f64826252a50ae3fb6fc0cd17db59d3a5fa109b3027523ed0419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1dc1ee269313f64826252a50ae3fb6fc0cd17db59d3a5fa109b3027523ed0419->leave($__internal_1dc1ee269313f64826252a50ae3fb6fc0cd17db59d3a5fa109b3027523ed0419_prof);

        
        $__internal_60b123b9bfdbf31c148629497a384257c9d06e3063a26006012b29b027e61d71->leave($__internal_60b123b9bfdbf31c148629497a384257c9d06e3063a26006012b29b027e61d71_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_057e36a39945f1fae0b7a97bb8b1c827da5905edd3bcf3c9579b28e9ffc622fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057e36a39945f1fae0b7a97bb8b1c827da5905edd3bcf3c9579b28e9ffc622fe->enter($__internal_057e36a39945f1fae0b7a97bb8b1c827da5905edd3bcf3c9579b28e9ffc622fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_012e2332a59aabf2406ecdc54a66ed5f8b2914261959bfca20d65fbaf5a03511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012e2332a59aabf2406ecdc54a66ed5f8b2914261959bfca20d65fbaf5a03511->enter($__internal_012e2332a59aabf2406ecdc54a66ed5f8b2914261959bfca20d65fbaf5a03511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_012e2332a59aabf2406ecdc54a66ed5f8b2914261959bfca20d65fbaf5a03511->leave($__internal_012e2332a59aabf2406ecdc54a66ed5f8b2914261959bfca20d65fbaf5a03511_prof);

        
        $__internal_057e36a39945f1fae0b7a97bb8b1c827da5905edd3bcf3c9579b28e9ffc622fe->leave($__internal_057e36a39945f1fae0b7a97bb8b1c827da5905edd3bcf3c9579b28e9ffc622fe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_41967e0150a429ea5beec196bd3b2daa91b2d6d758cef62480e8be87a02bbcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41967e0150a429ea5beec196bd3b2daa91b2d6d758cef62480e8be87a02bbcc8->enter($__internal_41967e0150a429ea5beec196bd3b2daa91b2d6d758cef62480e8be87a02bbcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e5305165b6077a127be797d8c96f5b1dfb609aa912143e324828169715b84f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5305165b6077a127be797d8c96f5b1dfb609aa912143e324828169715b84f2->enter($__internal_0e5305165b6077a127be797d8c96f5b1dfb609aa912143e324828169715b84f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e5305165b6077a127be797d8c96f5b1dfb609aa912143e324828169715b84f2->leave($__internal_0e5305165b6077a127be797d8c96f5b1dfb609aa912143e324828169715b84f2_prof);

        
        $__internal_41967e0150a429ea5beec196bd3b2daa91b2d6d758cef62480e8be87a02bbcc8->leave($__internal_41967e0150a429ea5beec196bd3b2daa91b2d6d758cef62480e8be87a02bbcc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\Amaru Signore\\projects\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
