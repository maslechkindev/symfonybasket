<?php

/* ProductBundle:Product:list.html.twig */
class __TwigTemplate_d83268295a083bf6e49c110e8c5f10edd1a5593af70dbc14983bb4d493a2e52a extends Twig_Template
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
        $__internal_ee9205b48862372438eadbf17ed34ac0f8971deab8e167dc573d886ca13fae07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9205b48862372438eadbf17ed34ac0f8971deab8e167dc573d886ca13fae07->enter($__internal_ee9205b48862372438eadbf17ed34ac0f8971deab8e167dc573d886ca13fae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:list.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Product list</title>
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
        
        $__internal_ee9205b48862372438eadbf17ed34ac0f8971deab8e167dc573d886ca13fae07->leave($__internal_ee9205b48862372438eadbf17ed34ac0f8971deab8e167dc573d886ca13fae07_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_adabeee2d6d8c7860ec0c4b96fdca003868305ecfb177711d2756299916d1941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adabeee2d6d8c7860ec0c4b96fdca003868305ecfb177711d2756299916d1941->enter($__internal_adabeee2d6d8c7860ec0c4b96fdca003868305ecfb177711d2756299916d1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        echo "Product list";
        
        $__internal_adabeee2d6d8c7860ec0c4b96fdca003868305ecfb177711d2756299916d1941->leave($__internal_adabeee2d6d8c7860ec0c4b96fdca003868305ecfb177711d2756299916d1941_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbe6ee5a4262a4dd2ef7d996c3f94f7c4844efec5c6826798f36f76b03dc5ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe6ee5a4262a4dd2ef7d996c3f94f7c4844efec5c6826798f36f76b03dc5ed3->enter($__internal_bbe6ee5a4262a4dd2ef7d996c3f94f7c4844efec5c6826798f36f76b03dc5ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_bbe6ee5a4262a4dd2ef7d996c3f94f7c4844efec5c6826798f36f76b03dc5ed3->leave($__internal_bbe6ee5a4262a4dd2ef7d996c3f94f7c4844efec5c6826798f36f76b03dc5ed3_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ad2cf73abd548767f60f614c318ae23692fc0a7a82c8c80dac3cd8abfa3d07f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2cf73abd548767f60f614c318ae23692fc0a7a82c8c80dac3cd8abfa3d07f3->enter($__internal_ad2cf73abd548767f60f614c318ae23692fc0a7a82c8c80dac3cd8abfa3d07f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

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
        
        $__internal_ad2cf73abd548767f60f614c318ae23692fc0a7a82c8c80dac3cd8abfa3d07f3->leave($__internal_ad2cf73abd548767f60f614c318ae23692fc0a7a82c8c80dac3cd8abfa3d07f3_prof);

    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_6d6eb215dcd37319359ca08491a459b8b2fa6c3c9ed27d60f22944274ef1693c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6eb215dcd37319359ca08491a459b8b2fa6c3c9ed27d60f22944274ef1693c->enter($__internal_6d6eb215dcd37319359ca08491a459b8b2fa6c3c9ed27d60f22944274ef1693c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        echo "<a href=\"#\">Symfonybasket</a>";
        
        $__internal_6d6eb215dcd37319359ca08491a459b8b2fa6c3c9ed27d60f22944274ef1693c->leave($__internal_6d6eb215dcd37319359ca08491a459b8b2fa6c3c9ed27d60f22944274ef1693c_prof);

    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_92813b0b430a3b538ef26aa990f65e3d4679403011593d9a104abcf2e7311e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92813b0b430a3b538ef26aa990f65e3d4679403011593d9a104abcf2e7311e8d->enter($__internal_92813b0b430a3b538ef26aa990f65e3d4679403011593d9a104abcf2e7311e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        echo "<a href=\"#\">test task symfonybasket</a>";
        
        $__internal_92813b0b430a3b538ef26aa990f65e3d4679403011593d9a104abcf2e7311e8d->leave($__internal_92813b0b430a3b538ef26aa990f65e3d4679403011593d9a104abcf2e7311e8d_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe8f4474b724e56d44b9f9ee28708d77bde3e5380cce6ff4124a3ea8cd66746e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8f4474b724e56d44b9f9ee28708d77bde3e5380cce6ff4124a3ea8cd66746e->enter($__internal_fe8f4474b724e56d44b9f9ee28708d77bde3e5380cce6ff4124a3ea8cd66746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        
        $__internal_fe8f4474b724e56d44b9f9ee28708d77bde3e5380cce6ff4124a3ea8cd66746e->leave($__internal_fe8f4474b724e56d44b9f9ee28708d77bde3e5380cce6ff4124a3ea8cd66746e_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a7a13ff876a642a83b77fb632d374b75e423ee42f1ce48eee6b93ed22318df6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a13ff876a642a83b77fb632d374b75e423ee42f1ce48eee6b93ed22318df6d->enter($__internal_a7a13ff876a642a83b77fb632d374b75e423ee42f1ce48eee6b93ed22318df6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        
        $__internal_a7a13ff876a642a83b77fb632d374b75e423ee42f1ce48eee6b93ed22318df6d->leave($__internal_a7a13ff876a642a83b77fb632d374b75e423ee42f1ce48eee6b93ed22318df6d_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_23c0ae0f0445a98f6217dd4594c1cab80109b7585fa8cf52d5690c8e7fee8cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c0ae0f0445a98f6217dd4594c1cab80109b7585fa8cf52d5690c8e7fee8cf9->enter($__internal_23c0ae0f0445a98f6217dd4594c1cab80109b7585fa8cf52d5690c8e7fee8cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 47
        echo "            Basket - created by <a href=\"https://github.com/maslechkindev\">maslechkindev</a>
        ";
        
        $__internal_23c0ae0f0445a98f6217dd4594c1cab80109b7585fa8cf52d5690c8e7fee8cf9->leave($__internal_23c0ae0f0445a98f6217dd4594c1cab80109b7585fa8cf52d5690c8e7fee8cf9_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21d99dcae2c9b34e4e3e4db99e5dbe931f7aecc52e6e507044ae2ce8e11595ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d99dcae2c9b34e4e3e4db99e5dbe931f7aecc52e6e507044ae2ce8e11595ab->enter($__internal_21d99dcae2c9b34e4e3e4db99e5dbe931f7aecc52e6e507044ae2ce8e11595ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        
        $__internal_21d99dcae2c9b34e4e3e4db99e5dbe931f7aecc52e6e507044ae2ce8e11595ab->leave($__internal_21d99dcae2c9b34e4e3e4db99e5dbe931f7aecc52e6e507044ae2ce8e11595ab_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Product:list.html.twig";
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
    <title>{% block title %}Product list{% endblock %} - Product list</title>
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
</html>", "ProductBundle:Product:list.html.twig", "/var/www/symfonybasket/src/Product/ProductBundle/Resources/views/Product/list.html.twig");
    }
}
