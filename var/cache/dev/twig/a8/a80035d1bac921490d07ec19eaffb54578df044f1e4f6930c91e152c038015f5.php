<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_1ada9b5507a05f0b20a8149a098cefb878e29ddefaef181592c750ec4036e61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8ca1b75ee6eb70db590e1c65891985e1cb4d6822b37a28c57dbe72ffdeb677c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ca1b75ee6eb70db590e1c65891985e1cb4d6822b37a28c57dbe72ffdeb677c->enter($__internal_e8ca1b75ee6eb70db590e1c65891985e1cb4d6822b37a28c57dbe72ffdeb677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_fe7d575d7420d70f0282759940c9d8e7454a1415e50ce5883093df2b658e44d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7d575d7420d70f0282759940c9d8e7454a1415e50ce5883093df2b658e44d6->enter($__internal_fe7d575d7420d70f0282759940c9d8e7454a1415e50ce5883093df2b658e44d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_e8ca1b75ee6eb70db590e1c65891985e1cb4d6822b37a28c57dbe72ffdeb677c->leave($__internal_e8ca1b75ee6eb70db590e1c65891985e1cb4d6822b37a28c57dbe72ffdeb677c_prof);

        
        $__internal_fe7d575d7420d70f0282759940c9d8e7454a1415e50ce5883093df2b658e44d6->leave($__internal_fe7d575d7420d70f0282759940c9d8e7454a1415e50ce5883093df2b658e44d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\school_k4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
