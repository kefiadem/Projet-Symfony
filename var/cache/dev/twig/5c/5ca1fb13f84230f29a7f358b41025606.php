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

/* _navbar.html.twig */
class __TwigTemplate_c901c7b4e9cd698378d5d147ed0bb66e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar fixed-top navbar-expand-lg bg-black text-uppercase fs-6 p-3 align-items-center\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <div class=\"row justify-content-between align-items-center w-100 gx-0\">

            <div class=\"col-auto\">
                <a class=\"navbar-brand\" href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        yield "\" alt=\"logo\"></a>
            </div>

            <div class=\"col-auto\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\"
                        aria-controls=\"offcanvasNavbar\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Menu</h5>
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>

                    <div class=\"offcanvas-body\">
                        <ul class=\"navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-4 pe-3\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" aria-haspopup=\"true\" aria-expanded=\"false\">Home</a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownShop\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\">Shop</a>
                                <ul class=\"dropdown-menu list-unstyled\" aria-labelledby=\"dropdownShop\">
                                    <li>
                                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Shop </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Single Product </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownBlog\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\">Blog</a>
                                <ul class=\"dropdown-menu list-unstyled\" aria-labelledby=\"dropdownBlog\">
                                    <li>
                                        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Blog </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Single Post </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownPages\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                <ul class=\"dropdown-menu list-unstyled\" aria-labelledby=\"dropdownPages\">
                                    <li><a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">About </a></li>
                                    <li><a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Cart </a></li>
                                    <li><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Checkout </a></li>
                                    <li><a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Coming Soon </a></li>
                                    <li><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Contact </a></li>
                                    <li><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Error Page </a></li>
                                    <li><a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">FAQs </a></li>
                                    <li><a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">My Account </a></li>
                                    <li><a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Order Tracking </a></li>
                                    <li><a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"dropdown-item item-anchor\">Wishlist </a></li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Blog</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"col-3 col-lg-auto\">
                <ul class=\"list-unstyled d-flex m-0\">
                    <li>
                        <a href=\"#\" class=\"mx-2\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#heart\"></use></svg>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"mx-2\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-controls=\"offcanvasCart\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#cart\"></use></svg>
                        </a>
                    </li>
                    <li class=\"search-box mx-2\">
                        <a href=\"#search\" class=\"search-button\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#search\"></use></svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_navbar.html.twig";
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
        return array (  159 => 63,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  135 => 57,  131 => 56,  127 => 55,  123 => 54,  112 => 46,  106 => 43,  94 => 34,  88 => 31,  78 => 24,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar fixed-top navbar-expand-lg bg-black text-uppercase fs-6 p-3 align-items-center\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <div class=\"row justify-content-between align-items-center w-100 gx-0\">

            <div class=\"col-auto\">
                <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\"><img src=\"{{ asset('assets/images/logo2.png') }}\" alt=\"logo\"></a>
            </div>

            <div class=\"col-auto\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\"
                        aria-controls=\"offcanvasNavbar\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Menu</h5>
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>

                    <div class=\"offcanvas-body\">
                        <ul class=\"navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-4 pe-3\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"{{ path('app_home') }}\" aria-haspopup=\"true\" aria-expanded=\"false\">Home</a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownShop\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\">Shop</a>
                                <ul class=\"dropdown-menu list-unstyled\" aria-labelledby=\"dropdownShop\">
                                    <li>
                                        <a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Shop </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Single Product </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownBlog\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\">Blog</a>
                                <ul class=\"dropdown-menu list-unstyled\" aria-labelledby=\"dropdownBlog\">
                                    <li>
                                        <a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Blog </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Single Post </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdownPages\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                <ul class=\"dropdown-menu list-unstyled\" aria-labelledby=\"dropdownPages\">
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">About </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Cart </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Checkout </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Coming Soon </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Contact </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Error Page </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">FAQs </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">My Account </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Order Tracking </a></li>
                                    <li><a href=\"{{ path('app_home') }}\" class=\"dropdown-item item-anchor\">Wishlist </a></li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Blog</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"col-3 col-lg-auto\">
                <ul class=\"list-unstyled d-flex m-0\">
                    <li>
                        <a href=\"#\" class=\"mx-2\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#heart\"></use></svg>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"mx-2\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-controls=\"offcanvasCart\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#cart\"></use></svg>
                        </a>
                    </li>
                    <li class=\"search-box mx-2\">
                        <a href=\"#search\" class=\"search-button\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#search\"></use></svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>
", "_navbar.html.twig", "/home/lhadi/PhpstormProjects/tpweb/templates/_navbar.html.twig");
    }
}
