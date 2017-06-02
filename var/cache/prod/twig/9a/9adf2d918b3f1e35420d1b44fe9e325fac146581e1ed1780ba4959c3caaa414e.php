<?php

/* DashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_279f3809be098073af5d5a86c40cd2d684dd6e7effdff0a7cfc19733468e86f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dashboard/Default/base.html.twig", "DashboardBundle:Dashboard:index.html.twig", 1);
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
        echo "List of messages";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2 class=\"page-header\">List of messages</h2>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Username</th>
            <th>Message</th>
            <th>Created at</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <tr>
                <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <th>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteAction", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a></th>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  81 => 27,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  57 => 20,  53 => 19,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DashboardBundle:Dashboard:index.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/src/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}
