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

/* product/single.html.twig */
class __TwigTemplate_16cf117bca4a1dc1e3aaf5b8eef37bb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/single.html.twig"));

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

        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " | my shop
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/product-single.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"card product-single-card shadow-sm\">
                    ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
            yield "\">
                    ";
        } else {
            // line 20
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/no-image.png"), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"No image available\">
                    ";
        }
        // line 22
        yield "                    <div class=\"card-body\">
                        <h1 class=\"card-title\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "</h1>
                        ";
        // line 25
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "review", [], "any", true, true, false, 25)) {
            // line 26
            yield "                            <div class=\"mb-2\">
                            <span class=\"product-stars\">
                                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                yield "                                    ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "review", [], "any", false, false, false, 29))) {
                    // line 30
                    yield "                                        <span class=\"star-full\">&#9733;</span>
                                    ";
                } else {
                    // line 32
                    yield "                                        <span class=\"star-empty\">&#9733;</span>
                                    ";
                }
                // line 34
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                            </span>
                                <span class=\"text-muted fs-6\">(";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "review", [], "any", false, false, false, 36), "html", null, true);
            yield "/5)</span>
                            </div>
                        ";
        }
        // line 39
        yield "                        ";
        // line 40
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "createdAt", [], "any", true, true, false, 40)) {
            // line 41
            yield "                            <p class=\"card-text text-muted mb-2\">
                                <small>Added on ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "createdAt", [], "any", false, false, false, 42), "F j, Y"), "html", null, true);
            yield "</small>
                            </p>
                        ";
        }
        // line 45
        yield "                        ";
        // line 46
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", true, true, false, 46)) {
            // line 47
            yield "                            <p class=\"card-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
            yield "</p>
                        ";
        }
        // line 49
        yield "                        ";
        // line 50
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", true, true, false, 50)) {
            // line 51
            yield "                            <div class=\"mb-2\">
                                <span class=\"fw-bold\">Price:</span>
                                <span class=\"text-success\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "price", [], "any", false, false, false, 53), 2, ".", ","), "html", null, true);
            yield " €</span>
                            </div>
                        ";
        }
        // line 56
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("id_product", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        yield "\" class=\"btn btn-primary mt-3\">
                            <svg class=\"me-1\" width=\"20\" height=\"20\"><use xlink:href=\"#cart\"></use></svg>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        // line 67
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
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
        return "product/single.html.twig";
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
        return array (  278 => 67,  265 => 66,  243 => 56,  237 => 53,  233 => 51,  230 => 50,  228 => 49,  222 => 47,  219 => 46,  217 => 45,  211 => 42,  208 => 41,  205 => 40,  203 => 39,  197 => 36,  194 => 35,  188 => 34,  184 => 32,  180 => 30,  177 => 29,  173 => 28,  169 => 26,  166 => 25,  162 => 23,  159 => 22,  153 => 20,  145 => 18,  143 => 17,  137 => 13,  124 => 12,  111 => 9,  106 => 8,  93 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ product.name }} | my shop
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/product-single.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"card product-single-card shadow-sm\">
                    {% if product.image %}
                        <img src=\"{{ asset('' ~ product.image) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\">
                    {% else %}
                        <img src=\"{{ asset('images/no-image.png') }}\" class=\"card-img-top\" alt=\"No image available\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h1 class=\"card-title\">{{ product.name }}</h1>
                        {# STAR RATING #}
                        {% if product.review is defined %}
                            <div class=\"mb-2\">
                            <span class=\"product-stars\">
                                {% for i in 1..5 %}
                                    {% if i <= product.review %}
                                        <span class=\"star-full\">&#9733;</span>
                                    {% else %}
                                        <span class=\"star-empty\">&#9733;</span>
                                    {% endif %}
                                {% endfor %}
                            </span>
                                <span class=\"text-muted fs-6\">({{ product.review }}/5)</span>
                            </div>
                        {% endif %}
                        {# DATE #}
                        {% if product.createdAt is defined %}
                            <p class=\"card-text text-muted mb-2\">
                                <small>Added on {{ product.createdAt|date('F j, Y') }}</small>
                            </p>
                        {% endif %}
                        {# DESCRIPTION #}
                        {% if product.description is defined %}
                            <p class=\"card-text\">{{ product.description }}</p>
                        {% endif %}
                        {# PRICE #}
                        {% if product.price is defined %}
                            <div class=\"mb-2\">
                                <span class=\"fw-bold\">Price:</span>
                                <span class=\"text-success\">{{ product.price|number_format(2, '.', ',') }} €</span>
                            </div>
                        {% endif %}
                        <a href=\"{{ path('id_product', {'id': product.id}) }}\" class=\"btn btn-primary mt-3\">
                            <svg class=\"me-1\" width=\"20\" height=\"20\"><use xlink:href=\"#cart\"></use></svg>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    {{ parent() }}
    {# Add custom scripts here if needed #}
{% endblock %}
", "product/single.html.twig", "/home/lhadi/PhpstormProjects/tpweb/templates/product/single.html.twig");
    }
}
