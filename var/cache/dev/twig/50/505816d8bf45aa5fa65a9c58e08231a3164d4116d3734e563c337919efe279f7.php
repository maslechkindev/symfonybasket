<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_52943781913dc4d752f569a50d8fc361fc8a0735884890f049e6f3cf2d22590f extends Twig_Template
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
        $__internal_48db157a0c503ccedbb89a1cc38f0f1a2474e995c572d61e308a02bd98ffd122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48db157a0c503ccedbb89a1cc38f0f1a2474e995c572d61e308a02bd98ffd122->enter($__internal_48db157a0c503ccedbb89a1cc38f0f1a2474e995c572d61e308a02bd98ffd122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48db157a0c503ccedbb89a1cc38f0f1a2474e995c572d61e308a02bd98ffd122->leave($__internal_48db157a0c503ccedbb89a1cc38f0f1a2474e995c572d61e308a02bd98ffd122_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cae8fa01ec6b9cc8bc4d1ff991c83a1b19f4d46decb086b771c1be1c57f82ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae8fa01ec6b9cc8bc4d1ff991c83a1b19f4d46decb086b771c1be1c57f82ec3->enter($__internal_cae8fa01ec6b9cc8bc4d1ff991c83a1b19f4d46decb086b771c1be1c57f82ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_cae8fa01ec6b9cc8bc4d1ff991c83a1b19f4d46decb086b771c1be1c57f82ec3->leave($__internal_cae8fa01ec6b9cc8bc4d1ff991c83a1b19f4d46decb086b771c1be1c57f82ec3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b764a132ff9e30cff89befbe560a8bbdd65fcff760f996c2360928dda1b8761c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b764a132ff9e30cff89befbe560a8bbdd65fcff760f996c2360928dda1b8761c->enter($__internal_b764a132ff9e30cff89befbe560a8bbdd65fcff760f996c2360928dda1b8761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b764a132ff9e30cff89befbe560a8bbdd65fcff760f996c2360928dda1b8761c->leave($__internal_b764a132ff9e30cff89befbe560a8bbdd65fcff760f996c2360928dda1b8761c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_819735a35e7a1f6433ed05e88a31dcc64252ce1ea1c90fda632011d202f38052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819735a35e7a1f6433ed05e88a31dcc64252ce1ea1c90fda632011d202f38052->enter($__internal_819735a35e7a1f6433ed05e88a31dcc64252ce1ea1c90fda632011d202f38052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_819735a35e7a1f6433ed05e88a31dcc64252ce1ea1c90fda632011d202f38052->leave($__internal_819735a35e7a1f6433ed05e88a31dcc64252ce1ea1c90fda632011d202f38052_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfonybasket/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
