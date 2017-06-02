<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_42a61b9a9345420f9240031de1aca8eb682a819bd2869f7245d36673df600a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4733abd524a124a5f46243c6dae8511c968939361b64ff9b210c34b1cb880b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4733abd524a124a5f46243c6dae8511c968939361b64ff9b210c34b1cb880b4->enter($__internal_b4733abd524a124a5f46243c6dae8511c968939361b64ff9b210c34b1cb880b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ebc5121c0df1867568420bf2073ce945af76e9d53e0bc6c5904b9898fe523603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc5121c0df1867568420bf2073ce945af76e9d53e0bc6c5904b9898fe523603->enter($__internal_ebc5121c0df1867568420bf2073ce945af76e9d53e0bc6c5904b9898fe523603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4733abd524a124a5f46243c6dae8511c968939361b64ff9b210c34b1cb880b4->leave($__internal_b4733abd524a124a5f46243c6dae8511c968939361b64ff9b210c34b1cb880b4_prof);

        
        $__internal_ebc5121c0df1867568420bf2073ce945af76e9d53e0bc6c5904b9898fe523603->leave($__internal_ebc5121c0df1867568420bf2073ce945af76e9d53e0bc6c5904b9898fe523603_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82c99f51d496c4b154020c6f3bb061d7e6eb26c1d42069302964aa7ef833d5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c99f51d496c4b154020c6f3bb061d7e6eb26c1d42069302964aa7ef833d5fd->enter($__internal_82c99f51d496c4b154020c6f3bb061d7e6eb26c1d42069302964aa7ef833d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cfcec8f791bb0caade08dbd931da4b24d97a841d21191a3e293371515872da88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcec8f791bb0caade08dbd931da4b24d97a841d21191a3e293371515872da88->enter($__internal_cfcec8f791bb0caade08dbd931da4b24d97a841d21191a3e293371515872da88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfcec8f791bb0caade08dbd931da4b24d97a841d21191a3e293371515872da88->leave($__internal_cfcec8f791bb0caade08dbd931da4b24d97a841d21191a3e293371515872da88_prof);

        
        $__internal_82c99f51d496c4b154020c6f3bb061d7e6eb26c1d42069302964aa7ef833d5fd->leave($__internal_82c99f51d496c4b154020c6f3bb061d7e6eb26c1d42069302964aa7ef833d5fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29572c425e3209973deaaa88349a9e0612b3b49e1d33acdeeb420f04c689c0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29572c425e3209973deaaa88349a9e0612b3b49e1d33acdeeb420f04c689c0f8->enter($__internal_29572c425e3209973deaaa88349a9e0612b3b49e1d33acdeeb420f04c689c0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eff115622358fc4ee607e4eb07dfcbb7c2ba7e20d9dd02ce62b87bd813f2e636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff115622358fc4ee607e4eb07dfcbb7c2ba7e20d9dd02ce62b87bd813f2e636->enter($__internal_eff115622358fc4ee607e4eb07dfcbb7c2ba7e20d9dd02ce62b87bd813f2e636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eff115622358fc4ee607e4eb07dfcbb7c2ba7e20d9dd02ce62b87bd813f2e636->leave($__internal_eff115622358fc4ee607e4eb07dfcbb7c2ba7e20d9dd02ce62b87bd813f2e636_prof);

        
        $__internal_29572c425e3209973deaaa88349a9e0612b3b49e1d33acdeeb420f04c689c0f8->leave($__internal_29572c425e3209973deaaa88349a9e0612b3b49e1d33acdeeb420f04c689c0f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d665dea75bbc5d8ce7c471f5293dc5457a001ff2db618bd12befead23bdbe6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d665dea75bbc5d8ce7c471f5293dc5457a001ff2db618bd12befead23bdbe6f->enter($__internal_3d665dea75bbc5d8ce7c471f5293dc5457a001ff2db618bd12befead23bdbe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49222b97a491eeb957f099b6731626109cba546b2d14acca98d1fce1a1824c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49222b97a491eeb957f099b6731626109cba546b2d14acca98d1fce1a1824c1a->enter($__internal_49222b97a491eeb957f099b6731626109cba546b2d14acca98d1fce1a1824c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49222b97a491eeb957f099b6731626109cba546b2d14acca98d1fce1a1824c1a->leave($__internal_49222b97a491eeb957f099b6731626109cba546b2d14acca98d1fce1a1824c1a_prof);

        
        $__internal_3d665dea75bbc5d8ce7c471f5293dc5457a001ff2db618bd12befead23bdbe6f->leave($__internal_3d665dea75bbc5d8ce7c471f5293dc5457a001ff2db618bd12befead23bdbe6f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
