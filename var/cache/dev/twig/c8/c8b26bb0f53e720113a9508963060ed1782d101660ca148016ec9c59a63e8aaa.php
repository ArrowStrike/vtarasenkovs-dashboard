<?php

/* @Dashboard/Dashboard/message.html.twig */
class __TwigTemplate_812adf1e422e184061712470f7446140f955e034e4507a8d077a073541a92656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dashboard/Default/base.html.twig", "@Dashboard/Dashboard/message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Dashboard/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaa1998b929e3b363fb5417f50977a23cbc4e7098c02e999ff6cdb083a5d5344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa1998b929e3b363fb5417f50977a23cbc4e7098c02e999ff6cdb083a5d5344->enter($__internal_aaa1998b929e3b363fb5417f50977a23cbc4e7098c02e999ff6cdb083a5d5344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/message.html.twig"));

        $__internal_505ecd77254662e7a98950106de85e9c03ba6c28f87b9f7e1b94a917ca2f910e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505ecd77254662e7a98950106de85e9c03ba6c28f87b9f7e1b94a917ca2f910e->enter($__internal_505ecd77254662e7a98950106de85e9c03ba6c28f87b9f7e1b94a917ca2f910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa1998b929e3b363fb5417f50977a23cbc4e7098c02e999ff6cdb083a5d5344->leave($__internal_aaa1998b929e3b363fb5417f50977a23cbc4e7098c02e999ff6cdb083a5d5344_prof);

        
        $__internal_505ecd77254662e7a98950106de85e9c03ba6c28f87b9f7e1b94a917ca2f910e->leave($__internal_505ecd77254662e7a98950106de85e9c03ba6c28f87b9f7e1b94a917ca2f910e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_177c4a6a6559eacbf550a8378ac6c5c12a7dea55ec7ec9562917780a208277ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177c4a6a6559eacbf550a8378ac6c5c12a7dea55ec7ec9562917780a208277ea->enter($__internal_177c4a6a6559eacbf550a8378ac6c5c12a7dea55ec7ec9562917780a208277ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7dbe239a5059788f9e93c6268d83526910d1cc72e86f6529749f968d9408a015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbe239a5059788f9e93c6268d83526910d1cc72e86f6529749f968d9408a015->enter($__internal_7dbe239a5059788f9e93c6268d83526910d1cc72e86f6529749f968d9408a015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add message";
        
        $__internal_7dbe239a5059788f9e93c6268d83526910d1cc72e86f6529749f968d9408a015->leave($__internal_7dbe239a5059788f9e93c6268d83526910d1cc72e86f6529749f968d9408a015_prof);

        
        $__internal_177c4a6a6559eacbf550a8378ac6c5c12a7dea55ec7ec9562917780a208277ea->leave($__internal_177c4a6a6559eacbf550a8378ac6c5c12a7dea55ec7ec9562917780a208277ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8291829a4d39cd42d6abbbf141fa2223c9df5b659830bc924ebf301def18ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8291829a4d39cd42d6abbbf141fa2223c9df5b659830bc924ebf301def18ec6->enter($__internal_d8291829a4d39cd42d6abbbf141fa2223c9df5b659830bc924ebf301def18ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ee3347920159b18b119261877356002b690ddcf8da7d06865526ac4a92d47fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee3347920159b18b119261877356002b690ddcf8da7d06865526ac4a92d47fd->enter($__internal_3ee3347920159b18b119261877356002b690ddcf8da7d06865526ac4a92d47fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"page-header\">Add Message</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3ee3347920159b18b119261877356002b690ddcf8da7d06865526ac4a92d47fd->leave($__internal_3ee3347920159b18b119261877356002b690ddcf8da7d06865526ac4a92d47fd_prof);

        
        $__internal_d8291829a4d39cd42d6abbbf141fa2223c9df5b659830bc924ebf301def18ec6->leave($__internal_d8291829a4d39cd42d6abbbf141fa2223c9df5b659830bc924ebf301def18ec6_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@Dashboard/Default/base.html.twig\" %}

{% block title %}Add message{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Add Message</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "@Dashboard/Dashboard/message.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/src/DashboardBundle/Resources/views/Dashboard/message.html.twig");
    }
}
