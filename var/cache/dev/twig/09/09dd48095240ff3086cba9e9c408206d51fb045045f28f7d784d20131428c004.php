<?php

/* sportsDetail.html.twig */
class __TwigTemplate_956c5260b4efcf0769196f53da360b04034c3133c1225bb615e3920175cb49f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'about' => array($this, 'block_about'),
            'news' => array($this, 'block_news'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94d2c947927efef71b6b2617b4a30fa31608adb4c83a4296e3574ec254ebba5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d2c947927efef71b6b2617b4a30fa31608adb4c83a4296e3574ec254ebba5b->enter($__internal_94d2c947927efef71b6b2617b4a30fa31608adb4c83a4296e3574ec254ebba5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sportsDetail.html.twig"));

        $__internal_098c9a1c7c133fac64521ad46e430cab4a8e1a4ecf6a80ce3e8ff48b7b26ebd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098c9a1c7c133fac64521ad46e430cab4a8e1a4ecf6a80ce3e8ff48b7b26ebd6->enter($__internal_098c9a1c7c133fac64521ad46e430cab4a8e1a4ecf6a80ce3e8ff48b7b26ebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sportsDetail.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</body>
</html>";
        
        $__internal_94d2c947927efef71b6b2617b4a30fa31608adb4c83a4296e3574ec254ebba5b->leave($__internal_94d2c947927efef71b6b2617b4a30fa31608adb4c83a4296e3574ec254ebba5b_prof);

        
        $__internal_098c9a1c7c133fac64521ad46e430cab4a8e1a4ecf6a80ce3e8ff48b7b26ebd6->leave($__internal_098c9a1c7c133fac64521ad46e430cab4a8e1a4ecf6a80ce3e8ff48b7b26ebd6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9604d9eeeba5e5c30a0bd591db71888421345b351d4276459b839fd3f8fbbb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9604d9eeeba5e5c30a0bd591db71888421345b351d4276459b839fd3f8fbbb41->enter($__internal_9604d9eeeba5e5c30a0bd591db71888421345b351d4276459b839fd3f8fbbb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f379940e7dbcc6083cc1c5ebd28ae0e73d67c28ec008711fd3301936b6723e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f379940e7dbcc6083cc1c5ebd28ae0e73d67c28ec008711fd3301936b6723e7->enter($__internal_5f379940e7dbcc6083cc1c5ebd28ae0e73d67c28ec008711fd3301936b6723e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f379940e7dbcc6083cc1c5ebd28ae0e73d67c28ec008711fd3301936b6723e7->leave($__internal_5f379940e7dbcc6083cc1c5ebd28ae0e73d67c28ec008711fd3301936b6723e7_prof);

        
        $__internal_9604d9eeeba5e5c30a0bd591db71888421345b351d4276459b839fd3f8fbbb41->leave($__internal_9604d9eeeba5e5c30a0bd591db71888421345b351d4276459b839fd3f8fbbb41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fa37df1f711a5e285a2336cd28328b761c74166689d449fa90bd09e1b14a800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa37df1f711a5e285a2336cd28328b761c74166689d449fa90bd09e1b14a800->enter($__internal_8fa37df1f711a5e285a2336cd28328b761c74166689d449fa90bd09e1b14a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5d927e0319cf63a647219aa104535e561639f9a85810417ab737bacbe16c015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d927e0319cf63a647219aa104535e561639f9a85810417ab737bacbe16c015->enter($__internal_e5d927e0319cf63a647219aa104535e561639f9a85810417ab737bacbe16c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" src=\"./main.css\">
    ";
        
        $__internal_e5d927e0319cf63a647219aa104535e561639f9a85810417ab737bacbe16c015->leave($__internal_e5d927e0319cf63a647219aa104535e561639f9a85810417ab737bacbe16c015_prof);

        
        $__internal_8fa37df1f711a5e285a2336cd28328b761c74166689d449fa90bd09e1b14a800->leave($__internal_8fa37df1f711a5e285a2336cd28328b761c74166689d449fa90bd09e1b14a800_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f126b5e3421cc55f1fdf50dd622f226af4cadf86dfbb711346f5d5fc2ca6de17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f126b5e3421cc55f1fdf50dd622f226af4cadf86dfbb711346f5d5fc2ca6de17->enter($__internal_f126b5e3421cc55f1fdf50dd622f226af4cadf86dfbb711346f5d5fc2ca6de17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c0a578360f3d8154bbe9718066656629c0ca24fa610d31db84e8ebd00f4f1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0a578360f3d8154bbe9718066656629c0ca24fa610d31db84e8ebd00f4f1b2->enter($__internal_6c0a578360f3d8154bbe9718066656629c0ca24fa610d31db84e8ebd00f4f1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"container\">
        <h1>
            Welkom op de sport pagina van ";
        // line 16
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "
        </h1>
        <div class=\"row\">
            <div class=\"sport-about col-md-6 border rounded\">
                ";
        // line 20
        $this->displayBlock('about', $context, $blocks);
        // line 24
        echo "            </div>
            <div class=\"col-sm-1\"></div>
            <div class=\"sport-news col-md-4 border rounded\">
                ";
        // line 27
        $this->displayBlock('news', $context, $blocks);
        // line 31
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6c0a578360f3d8154bbe9718066656629c0ca24fa610d31db84e8ebd00f4f1b2->leave($__internal_6c0a578360f3d8154bbe9718066656629c0ca24fa610d31db84e8ebd00f4f1b2_prof);

        
        $__internal_f126b5e3421cc55f1fdf50dd622f226af4cadf86dfbb711346f5d5fc2ca6de17->leave($__internal_f126b5e3421cc55f1fdf50dd622f226af4cadf86dfbb711346f5d5fc2ca6de17_prof);

    }

    // line 20
    public function block_about($context, array $blocks = array())
    {
        $__internal_ee4d5af5d411fa917c1abffbfe6b1cd5b2043c5a71be839daf48acaa4b081db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4d5af5d411fa917c1abffbfe6b1cd5b2043c5a71be839daf48acaa4b081db8->enter($__internal_ee4d5af5d411fa917c1abffbfe6b1cd5b2043c5a71be839daf48acaa4b081db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        $__internal_702a63f337f7cf1750dd70ff46cb119f5ccb4f8a65531d799b1925da7ae1f7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702a63f337f7cf1750dd70ff46cb119f5ccb4f8a65531d799b1925da7ae1f7b6->enter($__internal_702a63f337f7cf1750dd70ff46cb119f5ccb4f8a65531d799b1925da7ae1f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        // line 21
        echo "                <h3>About</h3>
                Hier kan je alles lezen over de sport ";
        // line 22
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo ".
                ";
        
        $__internal_702a63f337f7cf1750dd70ff46cb119f5ccb4f8a65531d799b1925da7ae1f7b6->leave($__internal_702a63f337f7cf1750dd70ff46cb119f5ccb4f8a65531d799b1925da7ae1f7b6_prof);

        
        $__internal_ee4d5af5d411fa917c1abffbfe6b1cd5b2043c5a71be839daf48acaa4b081db8->leave($__internal_ee4d5af5d411fa917c1abffbfe6b1cd5b2043c5a71be839daf48acaa4b081db8_prof);

    }

    // line 27
    public function block_news($context, array $blocks = array())
    {
        $__internal_99ff224dba52436c8cc39448668f2073da871e8c1c95e1232902834bdc70ee10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ff224dba52436c8cc39448668f2073da871e8c1c95e1232902834bdc70ee10->enter($__internal_99ff224dba52436c8cc39448668f2073da871e8c1c95e1232902834bdc70ee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "news"));

        $__internal_921eac34bc946a12dac9f29106e624e4e358b28888dbcd264665db4226e78985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921eac34bc946a12dac9f29106e624e4e358b28888dbcd264665db4226e78985->enter($__internal_921eac34bc946a12dac9f29106e624e4e358b28888dbcd264665db4226e78985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "news"));

        // line 28
        echo "                <h3>News</h3>
                Hier staan alle nieuwe dingen over de sport.
                ";
        
        $__internal_921eac34bc946a12dac9f29106e624e4e358b28888dbcd264665db4226e78985->leave($__internal_921eac34bc946a12dac9f29106e624e4e358b28888dbcd264665db4226e78985_prof);

        
        $__internal_99ff224dba52436c8cc39448668f2073da871e8c1c95e1232902834bdc70ee10->leave($__internal_99ff224dba52436c8cc39448668f2073da871e8c1c95e1232902834bdc70ee10_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66c0051ec65fd416b2dc8915b75698b6d2da6d608b5ca62b14854244046f9d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c0051ec65fd416b2dc8915b75698b6d2da6d608b5ca62b14854244046f9d1f->enter($__internal_66c0051ec65fd416b2dc8915b75698b6d2da6d608b5ca62b14854244046f9d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_53b3a8fa9e4297fd01cbc0bdb90c225174e4569b9c58cedb099e3d6589098f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b3a8fa9e4297fd01cbc0bdb90c225174e4569b9c58cedb099e3d6589098f9b->enter($__internal_53b3a8fa9e4297fd01cbc0bdb90c225174e4569b9c58cedb099e3d6589098f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_53b3a8fa9e4297fd01cbc0bdb90c225174e4569b9c58cedb099e3d6589098f9b->leave($__internal_53b3a8fa9e4297fd01cbc0bdb90c225174e4569b9c58cedb099e3d6589098f9b_prof);

        
        $__internal_66c0051ec65fd416b2dc8915b75698b6d2da6d608b5ca62b14854244046f9d1f->leave($__internal_66c0051ec65fd416b2dc8915b75698b6d2da6d608b5ca62b14854244046f9d1f_prof);

    }

    public function getTemplateName()
    {
        return "sportsDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 36,  191 => 35,  179 => 28,  170 => 27,  158 => 22,  155 => 21,  146 => 20,  133 => 31,  131 => 27,  126 => 24,  124 => 20,  117 => 16,  113 => 14,  104 => 13,  92 => 7,  83 => 6,  65 => 5,  54 => 40,  52 => 35,  50 => 13,  43 => 10,  41 => 6,  37 => 5,  31 => 1,);
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
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" src=\"./main.css\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}
    <div class=\"container\">
        <h1>
            Welkom op de sport pagina van {{ name }}
        </h1>
        <div class=\"row\">
            <div class=\"sport-about col-md-6 border rounded\">
                {% block about %}
                <h3>About</h3>
                Hier kan je alles lezen over de sport {{ name }}.
                {% endblock %}
            </div>
            <div class=\"col-sm-1\"></div>
            <div class=\"sport-news col-md-4 border rounded\">
                {% block news %}
                <h3>News</h3>
                Hier staan alle nieuwe dingen over de sport.
                {% endblock %}
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% endblock %}
</body>
</html>", "sportsDetail.html.twig", "C:\\Users\\Amaru Signore\\projects\\school_k4\\app\\Resources\\views\\sportsDetail.html.twig");
    }
}
