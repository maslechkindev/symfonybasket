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
            'countries' => array($this, 'block_countries'),
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
        $__internal_1e8cb7f892abf914d64eaf2271985b65f31cb2d42b6445e8164e127cb9606a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8cb7f892abf914d64eaf2271985b65f31cb2d42b6445e8164e127cb9606a04->enter($__internal_1e8cb7f892abf914d64eaf2271985b65f31cb2d42b6445e8164e127cb9606a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:list.html.twig"));

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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 24
        $this->displayBlock('countries', $context, $blocks);
        // line 36
        echo "            ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 44
        echo "        </div>

        <hgroup>
            <h2>";
        // line 47
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 48
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 74
        $this->displayBlock('sidebar', $context, $blocks);
        // line 75
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "    </div>
</section>

        ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "

</body>
</html>";
        
        $__internal_1e8cb7f892abf914d64eaf2271985b65f31cb2d42b6445e8164e127cb9606a04->leave($__internal_1e8cb7f892abf914d64eaf2271985b65f31cb2d42b6445e8164e127cb9606a04_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c92aaab1097f0dd548fc3de0f06105fc59cbcf36d556986435ad9871f7c7fce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92aaab1097f0dd548fc3de0f06105fc59cbcf36d556986435ad9871f7c7fce0->enter($__internal_c92aaab1097f0dd548fc3de0f06105fc59cbcf36d556986435ad9871f7c7fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        echo "Product list";
        
        $__internal_c92aaab1097f0dd548fc3de0f06105fc59cbcf36d556986435ad9871f7c7fce0->leave($__internal_c92aaab1097f0dd548fc3de0f06105fc59cbcf36d556986435ad9871f7c7fce0_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_136637b53ff912bde892e5304f828fb0195b7e89dc72a451c359e881841e1ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136637b53ff912bde892e5304f828fb0195b7e89dc72a451c359e881841e1ed6->enter($__internal_136637b53ff912bde892e5304f828fb0195b7e89dc72a451c359e881841e1ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 13
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_136637b53ff912bde892e5304f828fb0195b7e89dc72a451c359e881841e1ed6->leave($__internal_136637b53ff912bde892e5304f828fb0195b7e89dc72a451c359e881841e1ed6_prof);

    }

    // line 24
    public function block_countries($context, array $blocks = array())
    {
        $__internal_72b99e9e3b2e10e6dfeb95c6a1577de228041af118a22e87938fefbc33feb645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b99e9e3b2e10e6dfeb95c6a1577de228041af118a22e87938fefbc33feb645->enter($__internal_72b99e9e3b2e10e6dfeb95c6a1577de228041af118a22e87938fefbc33feb645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 25
        echo "                <form method=\"GET\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_country");
        echo "\" >
                    <select id=\"countryList\" name=\"countryId\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 28
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </select>
                </form>



            ";
        
        $__internal_72b99e9e3b2e10e6dfeb95c6a1577de228041af118a22e87938fefbc33feb645->leave($__internal_72b99e9e3b2e10e6dfeb95c6a1577de228041af118a22e87938fefbc33feb645_prof);

    }

    // line 36
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_69c426c3a3c7bd305ea174918558c2195b45ee4cc879faf8062b531dbcb96cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c426c3a3c7bd305ea174918558c2195b45ee4cc879faf8062b531dbcb96cc9->enter($__internal_69c426c3a3c7bd305ea174918558c2195b45ee4cc879faf8062b531dbcb96cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 37
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Product_list");
        echo "\">Product list</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_index");
        echo "\">Basket</a></li>
                    </ul>
                </nav>
            ";
        
        $__internal_69c426c3a3c7bd305ea174918558c2195b45ee4cc879faf8062b531dbcb96cc9->leave($__internal_69c426c3a3c7bd305ea174918558c2195b45ee4cc879faf8062b531dbcb96cc9_prof);

    }

    // line 47
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_73ba36b5bb247d57e1c80ab6c0da06f733ad766ac29a2477b85478a1de74900f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ba36b5bb247d57e1c80ab6c0da06f733ad766ac29a2477b85478a1de74900f->enter($__internal_73ba36b5bb247d57e1c80ab6c0da06f733ad766ac29a2477b85478a1de74900f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        echo "<a href=\"#\">Symfonybasket</a>";
        
        $__internal_73ba36b5bb247d57e1c80ab6c0da06f733ad766ac29a2477b85478a1de74900f->leave($__internal_73ba36b5bb247d57e1c80ab6c0da06f733ad766ac29a2477b85478a1de74900f_prof);

    }

    // line 48
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_9f19890a5e2cb4a3aeffa57d7a7ca3ba7ac2812d7e2908be4864d80a2801e855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f19890a5e2cb4a3aeffa57d7a7ca3ba7ac2812d7e2908be4864d80a2801e855->enter($__internal_9f19890a5e2cb4a3aeffa57d7a7ca3ba7ac2812d7e2908be4864d80a2801e855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        echo "<a href=\"#\">test task symfonybasket</a>";
        
        $__internal_9f19890a5e2cb4a3aeffa57d7a7ca3ba7ac2812d7e2908be4864d80a2801e855->leave($__internal_9f19890a5e2cb4a3aeffa57d7a7ca3ba7ac2812d7e2908be4864d80a2801e855_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_be3baf8b876e852d8b5cfdfee0cd15efb578cd99478481f9a40855ce311d23e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3baf8b876e852d8b5cfdfee0cd15efb578cd99478481f9a40855ce311d23e1->enter($__internal_be3baf8b876e852d8b5cfdfee0cd15efb578cd99478481f9a40855ce311d23e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 54
        echo "

            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "                <article class=\"blog\">
                    <header>
                        <h2>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h2>
                    </header>
                    <div class=\"snippet\">
                        <p>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                        <p>Price: \$";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "amount", array()), "html", null, true);
            echo "</p>
                        <button id=\"button-buy\" data-id=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" data-amount=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "amount", array()), "html", null, true);
            echo "\">Buy now
                        </button>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "

        ";
        
        $__internal_be3baf8b876e852d8b5cfdfee0cd15efb578cd99478481f9a40855ce311d23e1->leave($__internal_be3baf8b876e852d8b5cfdfee0cd15efb578cd99478481f9a40855ce311d23e1_prof);

    }

    // line 74
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bc7d2c38410ba0e32c4e99b6dc795094d3f1c564f875058c82b260cb3a6867b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7d2c38410ba0e32c4e99b6dc795094d3f1c564f875058c82b260cb3a6867b4->enter($__internal_bc7d2c38410ba0e32c4e99b6dc795094d3f1c564f875058c82b260cb3a6867b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        
        $__internal_bc7d2c38410ba0e32c4e99b6dc795094d3f1c564f875058c82b260cb3a6867b4->leave($__internal_bc7d2c38410ba0e32c4e99b6dc795094d3f1c564f875058c82b260cb3a6867b4_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9b37bd42e0a8b8d54a19bdb1312381451d592e000edbb3bb868d8dc6c808f57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b37bd42e0a8b8d54a19bdb1312381451d592e000edbb3bb868d8dc6c808f57d->enter($__internal_9b37bd42e0a8b8d54a19bdb1312381451d592e000edbb3bb868d8dc6c808f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 79
        echo "            Basket - created by <a href=\"https://github.com/maslechkindev\">maslechkindev</a>
        ";
        
        $__internal_9b37bd42e0a8b8d54a19bdb1312381451d592e000edbb3bb868d8dc6c808f57d->leave($__internal_9b37bd42e0a8b8d54a19bdb1312381451d592e000edbb3bb868d8dc6c808f57d_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9430bce49c6536cbb92123e4138321e0bcd494e5ab7535c118a15573fe14af6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9430bce49c6536cbb92123e4138321e0bcd494e5ab7535c118a15573fe14af6f->enter($__internal_9430bce49c6536cbb92123e4138321e0bcd494e5ab7535c118a15573fe14af6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ProductBundle:Product:list.html.twig"));

        // line 85
        echo "        <script>
            initCountry();
        </script>
        ";
        
        $__internal_9430bce49c6536cbb92123e4138321e0bcd494e5ab7535c118a15573fe14af6f->leave($__internal_9430bce49c6536cbb92123e4138321e0bcd494e5ab7535c118a15573fe14af6f_prof);

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
        return array (  322 => 85,  316 => 84,  308 => 79,  302 => 78,  291 => 74,  282 => 69,  269 => 64,  265 => 63,  261 => 62,  255 => 59,  251 => 57,  247 => 56,  243 => 54,  237 => 53,  225 => 48,  213 => 47,  202 => 40,  198 => 39,  194 => 37,  188 => 36,  176 => 30,  165 => 28,  161 => 27,  155 => 25,  149 => 24,  140 => 15,  136 => 13,  130 => 12,  118 => 6,  108 => 89,  106 => 84,  101 => 81,  99 => 78,  94 => 75,  92 => 74,  88 => 72,  86 => 53,  78 => 48,  74 => 47,  69 => 44,  66 => 36,  64 => 24,  53 => 17,  51 => 12,  47 => 11,  39 => 6,  32 => 1,);
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script src=\"{{ asset('js/product.js') }}\"></script>
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
            {% block countries %}
                <form method=\"GET\" action=\"{{path('get_country')}}\" >
                    <select id=\"countryList\" name=\"countryId\">
                        {% for country in countries %}
                            <option value=\"{{ country.id }}\">{{ country.name }}</option>
                        {% endfor %}
                    </select>
                </form>



            {% endblock %}
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
        {% block body %}


            {% for product in products %}
                <article class=\"blog\">
                    <header>
                        <h2>{{ product.name }}</h2>
                    </header>
                    <div class=\"snippet\">
                        <p>{{ product.description(500) }}</p>
                        <p>Price: \${{ product.amount }}</p>
                        <button id=\"button-buy\" data-id=\"{{ product.id }}\" data-amount=\"{{ product.amount }}\">Buy now
                        </button>
                    </div>
                </article>
            {% endfor %}


        {% endblock %}
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

        {% block javascripts %}
        <script>
            initCountry();
        </script>
        {% endblock %}


</body>
</html>", "ProductBundle:Product:list.html.twig", "/var/www/symfonybasket/src/Product/ProductBundle/Resources/views/Product/list.html.twig");
    }
}
