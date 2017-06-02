<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0767a4189c063293bc5755e132854fc8ae89cdc6af981072779dd9d255663588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f159d9fc0c1dfd54e32b5116a0e9524444a101a544a19850c748bfd8807d0abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f159d9fc0c1dfd54e32b5116a0e9524444a101a544a19850c748bfd8807d0abb->enter($__internal_f159d9fc0c1dfd54e32b5116a0e9524444a101a544a19850c748bfd8807d0abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5a8a42ae630cae474f09d4b4201e3b32248013f3158fb953a213e62ef9fa3bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8a42ae630cae474f09d4b4201e3b32248013f3158fb953a213e62ef9fa3bef->enter($__internal_5a8a42ae630cae474f09d4b4201e3b32248013f3158fb953a213e62ef9fa3bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f159d9fc0c1dfd54e32b5116a0e9524444a101a544a19850c748bfd8807d0abb->leave($__internal_f159d9fc0c1dfd54e32b5116a0e9524444a101a544a19850c748bfd8807d0abb_prof);

        
        $__internal_5a8a42ae630cae474f09d4b4201e3b32248013f3158fb953a213e62ef9fa3bef->leave($__internal_5a8a42ae630cae474f09d4b4201e3b32248013f3158fb953a213e62ef9fa3bef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51bcbe1e19d6b9f1547872f030cf825c83ee062fb3ba48a33f49d0b58f97786f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bcbe1e19d6b9f1547872f030cf825c83ee062fb3ba48a33f49d0b58f97786f->enter($__internal_51bcbe1e19d6b9f1547872f030cf825c83ee062fb3ba48a33f49d0b58f97786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e6f933dd6274e674b87b6622921813a21b7c9427507f6ac7dfafad3d8131b2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f933dd6274e674b87b6622921813a21b7c9427507f6ac7dfafad3d8131b2ab->enter($__internal_e6f933dd6274e674b87b6622921813a21b7c9427507f6ac7dfafad3d8131b2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e6f933dd6274e674b87b6622921813a21b7c9427507f6ac7dfafad3d8131b2ab->leave($__internal_e6f933dd6274e674b87b6622921813a21b7c9427507f6ac7dfafad3d8131b2ab_prof);

        
        $__internal_51bcbe1e19d6b9f1547872f030cf825c83ee062fb3ba48a33f49d0b58f97786f->leave($__internal_51bcbe1e19d6b9f1547872f030cf825c83ee062fb3ba48a33f49d0b58f97786f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
