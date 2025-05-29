<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* product/index.html.twig */
class __TwigTemplate_1abd1468bc3fbdcfc195751a9ce3328a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " Products";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .product-item { display: none; }
        .product-item.show { display: block; }
        .grid {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        .product-item {
            width: 25%;
            padding: 15px;
        }
        @media (max-width: 991px) {
            .product-item {
                width: 33.333%;
            }
        }
        @media (max-width: 767px) {
            .product-item {
                width: 50%;
            }
        }
        @media (max-width: 575px) {
            .product-item {
                width: 100%;
            }
        }
        .btn-icon {
            text-decoration: none;
            color: inherit;
            border: none;
            outline: none;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        yield "    <section class=\"product-grid py-5 bg-white\">
        <div class=\"container\">
            <div class=\"row justify-content-center text-center\">
                <div class=\"col-lg-6 my-5\">
                    <h3 class=\"text-primary display-2\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 48, $this->source); })())), "html", null, true);
        yield " Collection</h3>
                    <span>Handmade ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 49, $this->source); })()), "html", null, true);
        yield " clothes for any occasion</span>
                </div>
            </div>
            <div class=\"row\">
                <div id=\"filters\" class=\"button-group d-flex gap-4 justify-content-center py-5\">
                    <button class=\"btn-link text-dark text-uppercase is-checked\" data-filter=\"all\">All</button>
                    <button class=\"btn-link text-dark text-uppercase\" data-filter=\"bestsellers\">Best Sellers</button>
                    <button class=\"btn-link text-dark text-uppercase\" data-filter=\"newarrivals\">New Arrivals</button>
                    <button class=\"btn-link text-dark text-uppercase\" data-filter=\"bestreviewed\">Best Reviewed</button>
                </div>

                <div class=\"grid\">
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            yield "                        ";
            $context["classes"] = [];
            // line 63
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 63) >= 4)) {
                $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 63, $this->source); })()), ["bestreviewed"]);
            }
            // line 64
            yield "                        ";
            if (($this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ReleaseDate", [], "any", false, false, false, 64)) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("-30days"))) {
                $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 64, $this->source); })()), ["newarrivals"]);
            }
            // line 65
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 65) < 10)) {
                $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 65, $this->source); })()), ["bestsellers"]);
            }
            // line 66
            yield "
                        <div class=\"product-item link-effect ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 67, $this->source); })()), " "), "html", null, true);
            yield "\">
                            <div class=\"image-holder position-relative\">
                                <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("id_product", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\">
                                    <img src=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 70))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70), "html", null, true);
            yield "\" class=\"product-image img-fluid\">
                                </a>
                                <a href=\"#\" class=\"btn-icon btn-wishlist rounded-circle\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#heart\"></use></svg>
                                </a>
                                <a href=\"#\" class=\"btn-icon btn-cart rounded-circle\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#cart\"></use></svg>
                                </a>
                                <div class=\"product-content\">
                                    <h5 class=\"text-uppercase fs-5 mt-3\">
                                        <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("id_product", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" class=\"text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80), "html", null, true);
            yield "</a>
                                    </h5>
                                    <span>€";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82), "html", null, true);
            yield "</span>

                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "                        <p class=\"text-center w-100\">No products found for category <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 88, $this->source); })()), "html", null, true);
            yield "</strong>.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 96
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('#filters button');
            const products = document.querySelectorAll('.product-item');

            // Show all products initially
            products.forEach(product => product.classList.add('show'));

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');

                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('is-checked'));
                    this.classList.add('is-checked');

                    // Filter products
                    products.forEach(product => {
                        product.classList.remove('show');
                        if (filter === 'all') {
                            product.classList.add('show');
                        } else if (product.classList.contains(filter)) {
                            product.classList.add('show');
                        }
                    });
                });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  295 => 96,  282 => 95,  267 => 90,  258 => 88,  256 => 87,  246 => 82,  239 => 80,  224 => 70,  220 => 69,  215 => 67,  212 => 66,  207 => 65,  202 => 64,  197 => 63,  194 => 62,  189 => 61,  174 => 49,  170 => 48,  164 => 44,  151 => 43,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ category }} Products{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .product-item { display: none; }
        .product-item.show { display: block; }
        .grid {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        .product-item {
            width: 25%;
            padding: 15px;
        }
        @media (max-width: 991px) {
            .product-item {
                width: 33.333%;
            }
        }
        @media (max-width: 767px) {
            .product-item {
                width: 50%;
            }
        }
        @media (max-width: 575px) {
            .product-item {
                width: 100%;
            }
        }
        .btn-icon {
            text-decoration: none;
            color: inherit;
            border: none;
            outline: none;
        }
    </style>
{% endblock %}

{% block body %}
    <section class=\"product-grid py-5 bg-white\">
        <div class=\"container\">
            <div class=\"row justify-content-center text-center\">
                <div class=\"col-lg-6 my-5\">
                    <h3 class=\"text-primary display-2\">{{ category | upper}} Collection</h3>
                    <span>Handmade {{ category }} clothes for any occasion</span>
                </div>
            </div>
            <div class=\"row\">
                <div id=\"filters\" class=\"button-group d-flex gap-4 justify-content-center py-5\">
                    <button class=\"btn-link text-dark text-uppercase is-checked\" data-filter=\"all\">All</button>
                    <button class=\"btn-link text-dark text-uppercase\" data-filter=\"bestsellers\">Best Sellers</button>
                    <button class=\"btn-link text-dark text-uppercase\" data-filter=\"newarrivals\">New Arrivals</button>
                    <button class=\"btn-link text-dark text-uppercase\" data-filter=\"bestreviewed\">Best Reviewed</button>
                </div>

                <div class=\"grid\">
                    {% for product in products %}
                        {% set classes = [] %}
                        {% if product.review >= 4 %}{% set classes = classes|merge(['bestreviewed']) %}{% endif %}
                        {% if date(product.ReleaseDate) > date('-30days') %}{% set classes = classes|merge(['newarrivals']) %}{% endif %}
                        {% if product.stock < 10 %}{% set classes = classes|merge(['bestsellers']) %}{% endif %}

                        <div class=\"product-item link-effect {{ classes|join(' ') }}\">
                            <div class=\"image-holder position-relative\">
                                <a href=\"{{ path('id_product', { id: product.id }) }}\">
                                    <img src=\"{{ asset('' ~ product.image) }}\" alt=\"{{ product.name }}\" class=\"product-image img-fluid\">
                                </a>
                                <a href=\"#\" class=\"btn-icon btn-wishlist rounded-circle\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#heart\"></use></svg>
                                </a>
                                <a href=\"#\" class=\"btn-icon btn-cart rounded-circle\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#cart\"></use></svg>
                                </a>
                                <div class=\"product-content\">
                                    <h5 class=\"text-uppercase fs-5 mt-3\">
                                        <a href=\"{{ path('id_product', { id: product.id }) }}\" class=\"text-dark\">{{ product.name }}</a>
                                    </h5>
                                    <span>€{{ product.price }}</span>

                                </div>
                            </div>
                        </div>
                    {% else %}
                        <p class=\"text-center w-100\">No products found for category <strong>{{ category }}</strong>.</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block scripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('#filters button');
            const products = document.querySelectorAll('.product-item');

            // Show all products initially
            products.forEach(product => product.classList.add('show'));

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');

                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('is-checked'));
                    this.classList.add('is-checked');

                    // Filter products
                    products.forEach(product => {
                        product.classList.remove('show');
                        if (filter === 'all') {
                            product.classList.add('show');
                        } else if (product.classList.contains(filter)) {
                            product.classList.add('show');
                        }
                    });
                });
            });
        });
    </script>
{% endblock %}
", "product/index.html.twig", "/home/lhadi/PhpstormProjects/tpweb/templates/product/index.html.twig");
    }
}
