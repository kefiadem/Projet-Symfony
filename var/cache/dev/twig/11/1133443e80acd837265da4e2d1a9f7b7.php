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
            'body' => [$this, 'block_body'],
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

    // line 2
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

        // line 3
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " Products
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
<section class=\"product-grid py-5 bg-white\">
    <div class=\"container\">
        <div class=\"row justify-content-center text-center\">
            <div class=\"col-lg-6 my-5\">
                <h3 class=\"text-primary display-2\">Featured Collection</h3>
                <span>Handmade  ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 13, $this->source); })()), "html", null, true);
        yield " clothes for any occassion</span>
            </div>
        </div>
        <div class=\"row\">

            <div id=\"filters\" class=\"button-group d-flex gap-4 justify-content-center py-5\">
                <a href=\"#\" class=\"btn-link text-dark text-uppercase is-checked\" data-filter=\".bestsellers\">Best Sellers</a>
                <a href=\"#\" class=\"btn-link text-dark text-uppercase\" data-filter=\".newarrivals\">New Arrivals</a>
                <a href=\"#\" class=\"btn-link text-dark text-uppercase\" data-filter=\".bestreviewed\">Best Reviewed</a>
            </div>

            <div class=\"grid p-0 clearfix\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            yield "                    <div class=\"col-md-3 py-3 product-item link-effect ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tags", [], "any", false, false, false, 26), " "), "html", null, true);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 26) >= 4.5)) {
                yield "bestsellers";
            }
            yield "\">
                        <div class=\"image-holder position-relative m-3\">
                            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">
                                <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 29))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"product-image img-fluid\">
                            </a>
                            <a href=\"#\" class=\"btn-icon btn-wishlist rounded-circle\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#heart\"></use></svg>
                            </a>
                            <div class=\"product-content\">
                                <h5 class=\"text-uppercase fs-5 mt-3\">
                                    <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</a>
                                </h5>
                                <a href=\"#\" class=\"text-decoration-none text-dark\" data-after=\"Add to cart\"><span>\$";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38), "html", null, true);
            yield "</span></a>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "                    <p class=\"text-center\">No products found for category <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "</strong>.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </div>

        </div>
    </div>
</section>

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
        return array (  185 => 45,  176 => 43,  174 => 42,  165 => 38,  158 => 36,  146 => 29,  142 => 28,  132 => 26,  127 => 25,  112 => 13,  104 => 7,  91 => 6,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ category  }} Products
{% endblock %}

{% block body %}

<section class=\"product-grid py-5 bg-white\">
    <div class=\"container\">
        <div class=\"row justify-content-center text-center\">
            <div class=\"col-lg-6 my-5\">
                <h3 class=\"text-primary display-2\">Featured Collection</h3>
                <span>Handmade  {{ category }} clothes for any occassion</span>
            </div>
        </div>
        <div class=\"row\">

            <div id=\"filters\" class=\"button-group d-flex gap-4 justify-content-center py-5\">
                <a href=\"#\" class=\"btn-link text-dark text-uppercase is-checked\" data-filter=\".bestsellers\">Best Sellers</a>
                <a href=\"#\" class=\"btn-link text-dark text-uppercase\" data-filter=\".newarrivals\">New Arrivals</a>
                <a href=\"#\" class=\"btn-link text-dark text-uppercase\" data-filter=\".bestreviewed\">Best Reviewed</a>
            </div>

            <div class=\"grid p-0 clearfix\">
                {% for product in products %}
                    <div class=\"col-md-3 py-3 product-item link-effect {{ product.tags|join(' ') }} {% if product.rating >= 4.5 %}bestsellers{% endif %}\">
                        <div class=\"image-holder position-relative m-3\">
                            <a href=\"{{ path('product_show', { id: product.id }) }}\">
                                <img src=\"{{ asset('images/' ~ product.image) }}\" alt=\"{{ product.name }}\" class=\"product-image img-fluid\">
                            </a>
                            <a href=\"#\" class=\"btn-icon btn-wishlist rounded-circle\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#heart\"></use></svg>
                            </a>
                            <div class=\"product-content\">
                                <h5 class=\"text-uppercase fs-5 mt-3\">
                                    <a href=\"{{ path('product_show', { id: product.id }) }}\" class=\"text-dark\">{{ product.name }}</a>
                                </h5>
                                <a href=\"#\" class=\"text-decoration-none text-dark\" data-after=\"Add to cart\"><span>\${{ product.price }}</span></a>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-center\">No products found for category <strong>{{ category }}</strong>.</p>
                {% endfor %}
            </div>

        </div>
    </div>
</section>

{% endblock %}
", "product/index.html.twig", "/home/lhadi/PhpstormProjects/tpweb/templates/product/index.html.twig");
    }
}
