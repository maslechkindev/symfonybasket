<?php

/* BasketBundle:Basket:index.html.twig */
class __TwigTemplate_d5d27fbec1d22321bce0f3ef3bbb4c9187624e99b3d315f5a8983f429d8d4220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_516f2eaaae38d9f23070c4e4606edbae4cb6a925f882689d13f2e614808ed7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516f2eaaae38d9f23070c4e4606edbae4cb6a925f882689d13f2e614808ed7e2->enter($__internal_516f2eaaae38d9f23070c4e4606edbae4cb6a925f882689d13f2e614808ed7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BasketBundle:Basket:index.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Basket</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 30
        echo "        </div>

        <hgroup>
            <h2>";
        // line 33
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 34
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 42
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "    </div>
</section>

";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "</body>
</html>";
        
        $__internal_516f2eaaae38d9f23070c4e4606edbae4cb6a925f882689d13f2e614808ed7e2->leave($__internal_516f2eaaae38d9f23070c4e4606edbae4cb6a925f882689d13f2e614808ed7e2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_01e4085233bc4cd5bf58a9c7fef6cd16089fca5f6dd26aa1aa762fac49243000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e4085233bc4cd5bf58a9c7fef6cd16089fca5f6dd26aa1aa762fac49243000->enter($__internal_01e4085233bc4cd5bf58a9c7fef6cd16089fca5f6dd26aa1aa762fac49243000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        echo "Basket";
        
        $__internal_01e4085233bc4cd5bf58a9c7fef6cd16089fca5f6dd26aa1aa762fac49243000->leave($__internal_01e4085233bc4cd5bf58a9c7fef6cd16089fca5f6dd26aa1aa762fac49243000_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6a675cc76e6e26ca1e134b6683b8305a4d06f0cba0c9a61008a9ee47b950287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a675cc76e6e26ca1e134b6683b8305a4d06f0cba0c9a61008a9ee47b950287->enter($__internal_f6a675cc76e6e26ca1e134b6683b8305a4d06f0cba0c9a61008a9ee47b950287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_f6a675cc76e6e26ca1e134b6683b8305a4d06f0cba0c9a61008a9ee47b950287->leave($__internal_f6a675cc76e6e26ca1e134b6683b8305a4d06f0cba0c9a61008a9ee47b950287_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_953a0766f671d7abfd4cedefa0fd0c0698ce965aa317c0bbdc0f302d91caa4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953a0766f671d7abfd4cedefa0fd0c0698ce965aa317c0bbdc0f302d91caa4cb->enter($__internal_953a0766f671d7abfd4cedefa0fd0c0698ce965aa317c0bbdc0f302d91caa4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        // line 23
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Product_list");
        echo "\">Product list</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_index");
        echo "\">Basket</a></li>
                    </ul>
                </nav>
            ";
        
        $__internal_953a0766f671d7abfd4cedefa0fd0c0698ce965aa317c0bbdc0f302d91caa4cb->leave($__internal_953a0766f671d7abfd4cedefa0fd0c0698ce965aa317c0bbdc0f302d91caa4cb_prof);

    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_6881a61db2c5b308a3a3a3d305066991e42d5210bd7947acf398bf33d462f94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6881a61db2c5b308a3a3a3d305066991e42d5210bd7947acf398bf33d462f94b->enter($__internal_6881a61db2c5b308a3a3a3d305066991e42d5210bd7947acf398bf33d462f94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        echo "<a href=\"#\">Symfonybasket</a>";
        
        $__internal_6881a61db2c5b308a3a3a3d305066991e42d5210bd7947acf398bf33d462f94b->leave($__internal_6881a61db2c5b308a3a3a3d305066991e42d5210bd7947acf398bf33d462f94b_prof);

    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_424b976ee663c16b5cc75ba62354496c4f21e848b932d1925e450a3795927d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424b976ee663c16b5cc75ba62354496c4f21e848b932d1925e450a3795927d0a->enter($__internal_424b976ee663c16b5cc75ba62354496c4f21e848b932d1925e450a3795927d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        echo "<a href=\"#\">test task symfonybasket</a>";
        
        $__internal_424b976ee663c16b5cc75ba62354496c4f21e848b932d1925e450a3795927d0a->leave($__internal_424b976ee663c16b5cc75ba62354496c4f21e848b932d1925e450a3795927d0a_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6adabe4f7d586c899d69b319c2c6e1d72c2c331ce48e0636a61f7b20bfa1cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6adabe4f7d586c899d69b319c2c6e1d72c2c331ce48e0636a61f7b20bfa1cd8->enter($__internal_c6adabe4f7d586c899d69b319c2c6e1d72c2c331ce48e0636a61f7b20bfa1cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        
        $__internal_c6adabe4f7d586c899d69b319c2c6e1d72c2c331ce48e0636a61f7b20bfa1cd8->leave($__internal_c6adabe4f7d586c899d69b319c2c6e1d72c2c331ce48e0636a61f7b20bfa1cd8_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_56e70aa5d4e8192f7eef381d8445a67a734c5a196fa2e37a104a62d028d1f63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e70aa5d4e8192f7eef381d8445a67a734c5a196fa2e37a104a62d028d1f63e->enter($__internal_56e70aa5d4e8192f7eef381d8445a67a734c5a196fa2e37a104a62d028d1f63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        
        $__internal_56e70aa5d4e8192f7eef381d8445a67a734c5a196fa2e37a104a62d028d1f63e->leave($__internal_56e70aa5d4e8192f7eef381d8445a67a734c5a196fa2e37a104a62d028d1f63e_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_301f02dcf1048b9daa456c1add1dfdfc6172befef01d43ec3490bc98d7828bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301f02dcf1048b9daa456c1add1dfdfc6172befef01d43ec3490bc98d7828bf8->enter($__internal_301f02dcf1048b9daa456c1add1dfdfc6172befef01d43ec3490bc98d7828bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        // line 47
        echo "            Basket - created by <a href=\"https://github.com/maslechkindev\">maslechkindev</a>
        ";
        
        $__internal_301f02dcf1048b9daa456c1add1dfdfc6172befef01d43ec3490bc98d7828bf8->leave($__internal_301f02dcf1048b9daa456c1add1dfdfc6172befef01d43ec3490bc98d7828bf8_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf2d9be2cf34e43e36d2478356195b5fac998a05b7ab5c21c481485c522b04aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2d9be2cf34e43e36d2478356195b5fac998a05b7ab5c21c481485c522b04aa->enter($__internal_bf2d9be2cf34e43e36d2478356195b5fac998a05b7ab5c21c481485c522b04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BasketBundle:Basket:index.html.twig"));

        
        $__internal_bf2d9be2cf34e43e36d2478356195b5fac998a05b7ab5c21c481485c522b04aa->leave($__internal_bf2d9be2cf34e43e36d2478356195b5fac998a05b7ab5c21c481485c522b04aa_prof);

    }

    public function getTemplateName()
    {
        return "BasketBundle:Basket:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 52,  215 => 47,  209 => 46,  198 => 42,  187 => 39,  175 => 34,  163 => 33,  152 => 26,  148 => 25,  144 => 23,  138 => 22,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 53,  97 => 52,  92 => 49,  90 => 46,  85 => 43,  83 => 42,  79 => 40,  77 => 39,  69 => 34,  65 => 33,  60 => 30,  58 => 22,  47 => 15,  45 => 10,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}Basket{% endblock %} - Basket</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"{{ path('Product_list') }}\">Product list</a></li>
                        <li><a href=\"{{ path('basket_index') }}\">Basket</a></li>
                    </ul>
                </nav>
            {% endblock %}
        </div>

        <hgroup>
            <h2>{% block blog_title %}<a href=\"#\">Symfonybasket</a>{% endblock %}</h2>
            <h3>{% block blog_tagline %}<a href=\"#\">test task symfonybasket</a>{% endblock %}</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>
    <aside class=\"sidebar\">
        {% block sidebar %}{% endblock %}
    </aside>

    <div id=\"footer\">
        {% block footer %}
            Basket - created by <a href=\"https://github.com/maslechkindev\">maslechkindev</a>
        {% endblock %}
    </div>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>", "BasketBundle:Basket:index.html.twig", "/var/www/symfonybasket/src/Basket/BasketBundle/Resources/views/Basket/index.html.twig");
    }
}
