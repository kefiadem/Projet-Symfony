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

/* _footer.html.twig */
class __TwigTemplate_93b656a1c3de3ba7ec538e19fd16904e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        yield "<footer id=\"footer\" class=\"bg-black text-white\" data-bs-theme=\"white\">
    <div class=\"container-fluid\">
        <div class=\"row d-flex flex-wrap justify-content-between py-5\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-001\">
                    <div class=\"footer-intro mb-4\">
                        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        yield "\" alt=\"logo\">
                        </a>
                    </div>
                    <p>Gravida massa volutpat aenean odio. Amet, turpis erat nullam fringilla elementum diam in. Nisi, purus
                        vitae, ultrices nunc. Sit ac sit suscipit hendrerit.</p>
                    <div class=\"social-links\">
                        <ul class=\"list-unstyled d-flex flex-wrap gap-3\">
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#facebook\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#twitter\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#youtube\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#pinterest\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#instagram\"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-002\">
                    <h5 class=\"widget-title text-uppercase mb-4\">Quick Links</h5>
                    <ul class=\"menu-list list-unstyled text-uppercase border-animation-left fs-6\">
                        <li class=\"menu-item\">
                            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"item-anchor\">Home</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"item-anchor\">About</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"item-anchor\">Services</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"item-anchor\">Single item</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-003\">
                    <h5 class=\"widget-title text-uppercase mb-4\">Help & Info</h5>
                    <ul class=\"menu-list list-unstyled text-uppercase border-animation-left fs-6\">
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Track Your Order</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Returns + Exchanges</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Shipping + Delivery</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Contact Us</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Find us easy</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"item-anchor\">Faqs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-004 border-animation-left\">
                    <h5 class=\"widget-title text-uppercase mb-4\">Contact Us</h5>
                    <p>Do you have any questions or suggestions? <a href=\"mailto:contact@yourcompany.com\"
                                                                    class=\"item-anchor\">contact@yourcompany.com</a></p>
                    <p>Do you need support? Give us a call. <a href=\"tel:+43 720 11 52 78\" class=\"item-anchor\">+43 720 11 52
                            78</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"border-top py-4\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 d-flex flex-wrap\">
                    <div class=\"payment-option\">
                        <span>Payment Option:</span>
                        <img src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/visa-card.png"), "html", null, true);
        yield "\" alt=\"card\">
                        <img src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/paypal-card.png"), "html", null, true);
        yield "\" alt=\"card\">
                        <img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/master-card.png"), "html", null, true);
        yield "\" alt=\"card\">
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
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
        return "_footer.html.twig";
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
        return array (  197 => 121,  193 => 120,  189 => 119,  163 => 96,  132 => 68,  126 => 65,  120 => 62,  114 => 59,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer id=\"footer\" class=\"bg-black text-white\" data-bs-theme=\"white\">
    <div class=\"container-fluid\">
        <div class=\"row d-flex flex-wrap justify-content-between py-5\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-001\">
                    <div class=\"footer-intro mb-4\">
                        <a href=\"{{ path('app_home') }}\">
                            <img src=\"{{ asset('assets/images/logo2.png') }}\" alt=\"logo\">
                        </a>
                    </div>
                    <p>Gravida massa volutpat aenean odio. Amet, turpis erat nullam fringilla elementum diam in. Nisi, purus
                        vitae, ultrices nunc. Sit ac sit suscipit hendrerit.</p>
                    <div class=\"social-links\">
                        <ul class=\"list-unstyled d-flex flex-wrap gap-3\">
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#facebook\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#twitter\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#youtube\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#pinterest\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"text-secondary\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <use xlink:href=\"#instagram\"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-002\">
                    <h5 class=\"widget-title text-uppercase mb-4\">Quick Links</h5>
                    <ul class=\"menu-list list-unstyled text-uppercase border-animation-left fs-6\">
                        <li class=\"menu-item\">
                            <a href=\"{{ path('app_home') }}\" class=\"item-anchor\">Home</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"{{ path('app_home') }}\" class=\"item-anchor\">About</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"{{ path('app_home') }}\" class=\"item-anchor\">Services</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"{{ path('app_home') }}\" class=\"item-anchor\">Single item</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-003\">
                    <h5 class=\"widget-title text-uppercase mb-4\">Help & Info</h5>
                    <ul class=\"menu-list list-unstyled text-uppercase border-animation-left fs-6\">
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Track Your Order</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Returns + Exchanges</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Shipping + Delivery</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Contact Us</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"#\" class=\"item-anchor\">Find us easy</a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"{{ path('app_home') }}\" class=\"item-anchor\">Faqs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"footer-menu footer-menu-004 border-animation-left\">
                    <h5 class=\"widget-title text-uppercase mb-4\">Contact Us</h5>
                    <p>Do you have any questions or suggestions? <a href=\"mailto:contact@yourcompany.com\"
                                                                    class=\"item-anchor\">contact@yourcompany.com</a></p>
                    <p>Do you need support? Give us a call. <a href=\"tel:+43 720 11 52 78\" class=\"item-anchor\">+43 720 11 52
                            78</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"border-top py-4\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 d-flex flex-wrap\">
                    <div class=\"payment-option\">
                        <span>Payment Option:</span>
                        <img src=\"{{ asset('assets/images/visa-card.png') }}\" alt=\"card\">
                        <img src=\"{{ asset('assets/images/paypal-card.png') }}\" alt=\"card\">
                        <img src=\"{{ asset('assets/images/master-card.png') }}\" alt=\"card\">
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
", "_footer.html.twig", "/home/lhadi/PhpstormProjects/tpweb/templates/_footer.html.twig");
    }
}
