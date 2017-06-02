<?php

/* @Dashboard/Default/base.html.twig */
class __TwigTemplate_2e650db7510eae6a37116a7f5d8d1fa38417aa793de3725a9b6a0f0671e76b27 extends Twig_Template
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
        $__internal_3904ca59794d23bad6e26696c683dcdca0b7f82b3e52a11f661e2cae1305f7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3904ca59794d23bad6e26696c683dcdca0b7f82b3e52a11f661e2cae1305f7f4->enter($__internal_3904ca59794d23bad6e26696c683dcdca0b7f82b3e52a11f661e2cae1305f7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/base.html.twig"));

        $__internal_890c02bf55cb77ad32620b53502dce3397188873715fea62f8c4d8632f1ccdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890c02bf55cb77ad32620b53502dce3397188873715fea62f8c4d8632f1ccdfe->enter($__internal_890c02bf55cb77ad32620b53502dce3397188873715fea62f8c4d8632f1ccdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">List of messages</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAction");
        echo "\">Add new Message</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 49
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "                <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </div>
    </div>
    ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "</div>

<!-- /.container -->
";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "</body>
</html>
";
        
        $__internal_3904ca59794d23bad6e26696c683dcdca0b7f82b3e52a11f661e2cae1305f7f4->leave($__internal_3904ca59794d23bad6e26696c683dcdca0b7f82b3e52a11f661e2cae1305f7f4_prof);

        
        $__internal_890c02bf55cb77ad32620b53502dce3397188873715fea62f8c4d8632f1ccdfe->leave($__internal_890c02bf55cb77ad32620b53502dce3397188873715fea62f8c4d8632f1ccdfe_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_e57e4ebdb2e58bc176676d7ceaf4edef68887dd3146330a6e969364ae120347c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57e4ebdb2e58bc176676d7ceaf4edef68887dd3146330a6e969364ae120347c->enter($__internal_e57e4ebdb2e58bc176676d7ceaf4edef68887dd3146330a6e969364ae120347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db51630a87e29d62609f723f54f29a820240a30f176044c0fdc5107e676fe1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db51630a87e29d62609f723f54f29a820240a30f176044c0fdc5107e676fe1d5->enter($__internal_db51630a87e29d62609f723f54f29a820240a30f176044c0fdc5107e676fe1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_db51630a87e29d62609f723f54f29a820240a30f176044c0fdc5107e676fe1d5->leave($__internal_db51630a87e29d62609f723f54f29a820240a30f176044c0fdc5107e676fe1d5_prof);

        
        $__internal_e57e4ebdb2e58bc176676d7ceaf4edef68887dd3146330a6e969364ae120347c->leave($__internal_e57e4ebdb2e58bc176676d7ceaf4edef68887dd3146330a6e969364ae120347c_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e209334fb445cd340b2c0f08d249d0337458b63877db61b69a9b0921fbafb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e209334fb445cd340b2c0f08d249d0337458b63877db61b69a9b0921fbafb9f->enter($__internal_0e209334fb445cd340b2c0f08d249d0337458b63877db61b69a9b0921fbafb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2686fd9683562dec0bc5e98cd8b9ac5a095f99406a180c765c28bf243de5c9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2686fd9683562dec0bc5e98cd8b9ac5a095f99406a180c765c28bf243de5c9d6->enter($__internal_2686fd9683562dec0bc5e98cd8b9ac5a095f99406a180c765c28bf243de5c9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2686fd9683562dec0bc5e98cd8b9ac5a095f99406a180c765c28bf243de5c9d6->leave($__internal_2686fd9683562dec0bc5e98cd8b9ac5a095f99406a180c765c28bf243de5c9d6_prof);

        
        $__internal_0e209334fb445cd340b2c0f08d249d0337458b63877db61b69a9b0921fbafb9f->leave($__internal_0e209334fb445cd340b2c0f08d249d0337458b63877db61b69a9b0921fbafb9f_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_45994c66d504a56ea7ec6a5133065f248a42c2b57a78487d8a0559c4b5410f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45994c66d504a56ea7ec6a5133065f248a42c2b57a78487d8a0559c4b5410f2f->enter($__internal_45994c66d504a56ea7ec6a5133065f248a42c2b57a78487d8a0559c4b5410f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6c0ed8336aad5382986ec937d3cdd4467342936fa64a83076c536022bea12d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c0ed8336aad5382986ec937d3cdd4467342936fa64a83076c536022bea12d8->enter($__internal_d6c0ed8336aad5382986ec937d3cdd4467342936fa64a83076c536022bea12d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6c0ed8336aad5382986ec937d3cdd4467342936fa64a83076c536022bea12d8->leave($__internal_d6c0ed8336aad5382986ec937d3cdd4467342936fa64a83076c536022bea12d8_prof);

        
        $__internal_45994c66d504a56ea7ec6a5133065f248a42c2b57a78487d8a0559c4b5410f2f->leave($__internal_45994c66d504a56ea7ec6a5133065f248a42c2b57a78487d8a0559c4b5410f2f_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_673b55cd1049950a50c71bc6c7c5b7e95c308f3a32adcec528035ce447691244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673b55cd1049950a50c71bc6c7c5b7e95c308f3a32adcec528035ce447691244->enter($__internal_673b55cd1049950a50c71bc6c7c5b7e95c308f3a32adcec528035ce447691244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ae3917f900f30d98fccb3d92270a49bb73db97e599ef935e3a4f4065d87ff82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3917f900f30d98fccb3d92270a49bb73db97e599ef935e3a4f4065d87ff82e->enter($__internal_ae3917f900f30d98fccb3d92270a49bb73db97e599ef935e3a4f4065d87ff82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ae3917f900f30d98fccb3d92270a49bb73db97e599ef935e3a4f4065d87ff82e->leave($__internal_ae3917f900f30d98fccb3d92270a49bb73db97e599ef935e3a4f4065d87ff82e_prof);

        
        $__internal_673b55cd1049950a50c71bc6c7c5b7e95c308f3a32adcec528035ce447691244->leave($__internal_673b55cd1049950a50c71bc6c7c5b7e95c308f3a32adcec528035ce447691244_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 60,  190 => 56,  173 => 16,  155 => 12,  143 => 61,  141 => 60,  136 => 57,  134 => 56,  130 => 54,  121 => 52,  116 => 51,  107 => 49,  102 => 48,  93 => 46,  89 => 45,  77 => 36,  70 => 32,  51 => 17,  49 => 16,  42 => 12,  29 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">List of messages</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('addAction') }}\">Add new Message</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% for flash_message in app.session.flashbag.get('notice') %}
                <div class=\"alert alert-success\">{{ flash_message }}</div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('error') %}
                <div class=\"alert alert-danger\">{{ flash_message }}</div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('warning') %}
                <div class=\"alert alert-warning\">{{ flash_message }}</div>
            {% endfor %}
        </div>
    </div>
    {% block body %}{% endblock %}
</div>

<!-- /.container -->
{% block javascripts %}{% endblock %}
</body>
</html>
", "@Dashboard/Default/base.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/src/DashboardBundle/Resources/views/Default/base.html.twig");
    }
}
