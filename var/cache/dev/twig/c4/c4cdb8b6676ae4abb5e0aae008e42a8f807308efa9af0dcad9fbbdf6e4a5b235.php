<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a68f8d7e5d0387ba9173278971dcb1155433512b97221a159d1047dc192c9266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b905fce25abb515fecb030c5a2696b0ba20e220ee475e6556e6b96857381c439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b905fce25abb515fecb030c5a2696b0ba20e220ee475e6556e6b96857381c439->enter($__internal_b905fce25abb515fecb030c5a2696b0ba20e220ee475e6556e6b96857381c439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b905fce25abb515fecb030c5a2696b0ba20e220ee475e6556e6b96857381c439->leave($__internal_b905fce25abb515fecb030c5a2696b0ba20e220ee475e6556e6b96857381c439_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c38022073ca4668698cdf92d8571ebfe1a559c554dc4e0745f5f857ae2894aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38022073ca4668698cdf92d8571ebfe1a559c554dc4e0745f5f857ae2894aaf->enter($__internal_c38022073ca4668698cdf92d8571ebfe1a559c554dc4e0745f5f857ae2894aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c38022073ca4668698cdf92d8571ebfe1a559c554dc4e0745f5f857ae2894aaf->leave($__internal_c38022073ca4668698cdf92d8571ebfe1a559c554dc4e0745f5f857ae2894aaf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_603deb5fc515896876ab1a448b14771155a70d21e67f50eae6fb93d3888d48aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603deb5fc515896876ab1a448b14771155a70d21e67f50eae6fb93d3888d48aa->enter($__internal_603deb5fc515896876ab1a448b14771155a70d21e67f50eae6fb93d3888d48aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_603deb5fc515896876ab1a448b14771155a70d21e67f50eae6fb93d3888d48aa->leave($__internal_603deb5fc515896876ab1a448b14771155a70d21e67f50eae6fb93d3888d48aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_270cbfc2cd59d750253bcb00aa7643b6c2bcf58198874324c8004b0fd7b2e4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270cbfc2cd59d750253bcb00aa7643b6c2bcf58198874324c8004b0fd7b2e4e0->enter($__internal_270cbfc2cd59d750253bcb00aa7643b6c2bcf58198874324c8004b0fd7b2e4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_270cbfc2cd59d750253bcb00aa7643b6c2bcf58198874324c8004b0fd7b2e4e0->leave($__internal_270cbfc2cd59d750253bcb00aa7643b6c2bcf58198874324c8004b0fd7b2e4e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfonybasket/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
