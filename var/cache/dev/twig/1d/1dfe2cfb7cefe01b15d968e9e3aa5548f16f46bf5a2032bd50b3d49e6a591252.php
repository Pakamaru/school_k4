<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b121a95cff9753905148ec33a6863f30f11e3b018a766539049058e288c83d55 extends Twig_Template
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
        $__internal_ff0cbaff58cbf0e57a7175347a5a932f31dd019e01a12199870feb3939fb8271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0cbaff58cbf0e57a7175347a5a932f31dd019e01a12199870feb3939fb8271->enter($__internal_ff0cbaff58cbf0e57a7175347a5a932f31dd019e01a12199870feb3939fb8271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_88816d37207b11d764a32ee30aeb97bd6f1bd40ce7c5c12c7e33524b8173f51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88816d37207b11d764a32ee30aeb97bd6f1bd40ce7c5c12c7e33524b8173f51d->enter($__internal_88816d37207b11d764a32ee30aeb97bd6f1bd40ce7c5c12c7e33524b8173f51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ff0cbaff58cbf0e57a7175347a5a932f31dd019e01a12199870feb3939fb8271->leave($__internal_ff0cbaff58cbf0e57a7175347a5a932f31dd019e01a12199870feb3939fb8271_prof);

        
        $__internal_88816d37207b11d764a32ee30aeb97bd6f1bd40ce7c5c12c7e33524b8173f51d->leave($__internal_88816d37207b11d764a32ee30aeb97bd6f1bd40ce7c5c12c7e33524b8173f51d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f4add7534deb962b828d9144213deaa975f258e7edb1446199c294e8b99066f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4add7534deb962b828d9144213deaa975f258e7edb1446199c294e8b99066f->enter($__internal_6f4add7534deb962b828d9144213deaa975f258e7edb1446199c294e8b99066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f984d7dbca5b6d4b46ca27a2479b9b2bf0a4b49eef462ea61c719e57c5c08a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f984d7dbca5b6d4b46ca27a2479b9b2bf0a4b49eef462ea61c719e57c5c08a54->enter($__internal_f984d7dbca5b6d4b46ca27a2479b9b2bf0a4b49eef462ea61c719e57c5c08a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f984d7dbca5b6d4b46ca27a2479b9b2bf0a4b49eef462ea61c719e57c5c08a54->leave($__internal_f984d7dbca5b6d4b46ca27a2479b9b2bf0a4b49eef462ea61c719e57c5c08a54_prof);

        
        $__internal_6f4add7534deb962b828d9144213deaa975f258e7edb1446199c294e8b99066f->leave($__internal_6f4add7534deb962b828d9144213deaa975f258e7edb1446199c294e8b99066f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_da3969bf21618c1861a8dde1677d8769f6b883386f476b41d04591be02fd9c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3969bf21618c1861a8dde1677d8769f6b883386f476b41d04591be02fd9c5a->enter($__internal_da3969bf21618c1861a8dde1677d8769f6b883386f476b41d04591be02fd9c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c5dc120ecef43c68476bfeba0d765f60a1cb15010f61412a06b97d983ef17b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5dc120ecef43c68476bfeba0d765f60a1cb15010f61412a06b97d983ef17b4->enter($__internal_3c5dc120ecef43c68476bfeba0d765f60a1cb15010f61412a06b97d983ef17b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3c5dc120ecef43c68476bfeba0d765f60a1cb15010f61412a06b97d983ef17b4->leave($__internal_3c5dc120ecef43c68476bfeba0d765f60a1cb15010f61412a06b97d983ef17b4_prof);

        
        $__internal_da3969bf21618c1861a8dde1677d8769f6b883386f476b41d04591be02fd9c5a->leave($__internal_da3969bf21618c1861a8dde1677d8769f6b883386f476b41d04591be02fd9c5a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_86489d6ada2987de07e6980f9ad8c9f2ae57a576d959fd896564b659987cd148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86489d6ada2987de07e6980f9ad8c9f2ae57a576d959fd896564b659987cd148->enter($__internal_86489d6ada2987de07e6980f9ad8c9f2ae57a576d959fd896564b659987cd148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_779a75430339a9ce1742d967171e13fc0b49029e447109128032f7f810cb03a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779a75430339a9ce1742d967171e13fc0b49029e447109128032f7f810cb03a0->enter($__internal_779a75430339a9ce1742d967171e13fc0b49029e447109128032f7f810cb03a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_779a75430339a9ce1742d967171e13fc0b49029e447109128032f7f810cb03a0->leave($__internal_779a75430339a9ce1742d967171e13fc0b49029e447109128032f7f810cb03a0_prof);

        
        $__internal_86489d6ada2987de07e6980f9ad8c9f2ae57a576d959fd896564b659987cd148->leave($__internal_86489d6ada2987de07e6980f9ad8c9f2ae57a576d959fd896564b659987cd148_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
