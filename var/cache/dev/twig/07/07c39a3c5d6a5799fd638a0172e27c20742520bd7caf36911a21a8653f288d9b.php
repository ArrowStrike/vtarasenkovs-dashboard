<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e192152444df0176bc8335f06c11901b8429c65d56206745daaddcb3fa30e56c extends Twig_Template
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
        $__internal_4225f6af5d3382ffd4bdb781243392f2f2dcf50cc12028210253daf3dc49462f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4225f6af5d3382ffd4bdb781243392f2f2dcf50cc12028210253daf3dc49462f->enter($__internal_4225f6af5d3382ffd4bdb781243392f2f2dcf50cc12028210253daf3dc49462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b96b50ad57784b23f9b6c8068a4e3f56875be45c10dba9a912084887a3008c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96b50ad57784b23f9b6c8068a4e3f56875be45c10dba9a912084887a3008c04->enter($__internal_b96b50ad57784b23f9b6c8068a4e3f56875be45c10dba9a912084887a3008c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4225f6af5d3382ffd4bdb781243392f2f2dcf50cc12028210253daf3dc49462f->leave($__internal_4225f6af5d3382ffd4bdb781243392f2f2dcf50cc12028210253daf3dc49462f_prof);

        
        $__internal_b96b50ad57784b23f9b6c8068a4e3f56875be45c10dba9a912084887a3008c04->leave($__internal_b96b50ad57784b23f9b6c8068a4e3f56875be45c10dba9a912084887a3008c04_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
