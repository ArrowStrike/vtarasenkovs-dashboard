<?php

/* DashboardBundle:Dashboard:message.html.twig */
class __TwigTemplate_fed759558c859b136ebdf4cedaa1efd2969337d106598028890d9e76a69c3600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dashboard/Default/base.html.twig", "DashboardBundle:Dashboard:message.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Add message";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2 class=\"page-header\">Add Message</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DashboardBundle:Dashboard:message.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/src/DashboardBundle/Resources/views/Dashboard/message.html.twig");
    }
}
