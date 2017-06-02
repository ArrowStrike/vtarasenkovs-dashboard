<?php

/* @Dashboard/Dashboard/index.html.twig */
class __TwigTemplate_f24d8fdacd2c9b3755ef68cbcb467b674ed11b8e28c0305b3d4303aab17c0924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dashboard/Default/base.html.twig", "@Dashboard/Dashboard/index.html.twig", 1);
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
        $__internal_ac109f29d8a0146ae4ef31c6517a15d03883329e235007b3b38ad36f2088d17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac109f29d8a0146ae4ef31c6517a15d03883329e235007b3b38ad36f2088d17e->enter($__internal_ac109f29d8a0146ae4ef31c6517a15d03883329e235007b3b38ad36f2088d17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/index.html.twig"));

        $__internal_382c2fc44d44c515801a8b496da2897c6539625219b74d0b0e8fb711f31be4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382c2fc44d44c515801a8b496da2897c6539625219b74d0b0e8fb711f31be4d6->enter($__internal_382c2fc44d44c515801a8b496da2897c6539625219b74d0b0e8fb711f31be4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac109f29d8a0146ae4ef31c6517a15d03883329e235007b3b38ad36f2088d17e->leave($__internal_ac109f29d8a0146ae4ef31c6517a15d03883329e235007b3b38ad36f2088d17e_prof);

        
        $__internal_382c2fc44d44c515801a8b496da2897c6539625219b74d0b0e8fb711f31be4d6->leave($__internal_382c2fc44d44c515801a8b496da2897c6539625219b74d0b0e8fb711f31be4d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_764389af6d89b52ac9c5304be1226624f410b15a2ee5b608c78c98c801bd03b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764389af6d89b52ac9c5304be1226624f410b15a2ee5b608c78c98c801bd03b4->enter($__internal_764389af6d89b52ac9c5304be1226624f410b15a2ee5b608c78c98c801bd03b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2141f8afbbf9c4a3d2cd52c16cd9b94be0ff156594914331da95b83c672591b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2141f8afbbf9c4a3d2cd52c16cd9b94be0ff156594914331da95b83c672591b->enter($__internal_f2141f8afbbf9c4a3d2cd52c16cd9b94be0ff156594914331da95b83c672591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of messages";
        
        $__internal_f2141f8afbbf9c4a3d2cd52c16cd9b94be0ff156594914331da95b83c672591b->leave($__internal_f2141f8afbbf9c4a3d2cd52c16cd9b94be0ff156594914331da95b83c672591b_prof);

        
        $__internal_764389af6d89b52ac9c5304be1226624f410b15a2ee5b608c78c98c801bd03b4->leave($__internal_764389af6d89b52ac9c5304be1226624f410b15a2ee5b608c78c98c801bd03b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_838cde52c2d97679ebf66797e3ee876504f1005d48a3ada63debedab03474eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838cde52c2d97679ebf66797e3ee876504f1005d48a3ada63debedab03474eac->enter($__internal_838cde52c2d97679ebf66797e3ee876504f1005d48a3ada63debedab03474eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c52dd9f2f5d2c6b843a1dde7c5c2b728278573f87893c5b10805f4c947b078bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52dd9f2f5d2c6b843a1dde7c5c2b728278573f87893c5b10805f4c947b078bf->enter($__internal_c52dd9f2f5d2c6b843a1dde7c5c2b728278573f87893c5b10805f4c947b078bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
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
        
        $__internal_c52dd9f2f5d2c6b843a1dde7c5c2b728278573f87893c5b10805f4c947b078bf->leave($__internal_c52dd9f2f5d2c6b843a1dde7c5c2b728278573f87893c5b10805f4c947b078bf_prof);

        
        $__internal_838cde52c2d97679ebf66797e3ee876504f1005d48a3ada63debedab03474eac->leave($__internal_838cde52c2d97679ebf66797e3ee876504f1005d48a3ada63debedab03474eac_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  83 => 19,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}List of messages{% endblock %}

{% block body %}
    <h2 class=\"page-header\">List of messages</h2>
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
        {% for message in messages %}
            <tr>
                <th scope=\"row\">{{ message.id }}</th>
                <td>{{ message.email }}</td>
                <td>{{ message.username }}</td>
                <td>{{ message.message }}</td>
                <td>{{ message.createdAt|date('F j, Y, g:i a') }}</td>
                <th>
                    <a href=\"{{ path('deleteAction',{'id': message.id}) }}\" class=\"btn btn-danger\">Delete</a></th>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "@Dashboard/Dashboard/index.html.twig", "/home/vtarasenkovs/public_html/vtarasenkovs-dashboard/src/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}
