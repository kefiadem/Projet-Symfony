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

/* cart.html.twig */
class __TwigTemplate_1c7dac1df91c1124c2bd3c958cca8b25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        // line 1
        yield "<div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasCart\">
    <div class=\"offcanvas-header justify-content-center\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
        <div class=\"order-md-last\">
            <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                <span class=\"text-primary\">Your cart</span>
                <span class=\"badge bg-primary rounded-pill\">3</span>
            </h4>
            <ul class=\"list-group mb-3\">
                <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                    <div>
                        <h6 class=\"my-0\">Product One</h6>
                        <small class=\"text-body-secondary\">Brief description</small>
                    </div>
                    <span class=\"text-body-secondary\">\$1200</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                    <div>
                        <h6 class=\"my-0\">Product Two</h6>
                        <small class=\"text-body-secondary\">Brief description</small>
                    </div>
                    <span class=\"text-body-secondary\">\$900</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                    <div>
                        <h6 class=\"my-0\">Product Three</h6>
                        <small class=\"text-body-secondary\">Brief description</small>
                    </div>
                    <span class=\"text-body-secondary\">\$1100</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between\">
                    <span>Total (USD)</span>
                    <strong>\$2600</strong>
                </li>
            </ul>

            <button class=\"w-100 btn btn-primary btn-lg\" type=\"submit\">Continue to checkout</button>
        </div>
    </div>
</div>
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
        return "cart.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasCart\">
    <div class=\"offcanvas-header justify-content-center\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
        <div class=\"order-md-last\">
            <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                <span class=\"text-primary\">Your cart</span>
                <span class=\"badge bg-primary rounded-pill\">3</span>
            </h4>
            <ul class=\"list-group mb-3\">
                <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                    <div>
                        <h6 class=\"my-0\">Product One</h6>
                        <small class=\"text-body-secondary\">Brief description</small>
                    </div>
                    <span class=\"text-body-secondary\">\$1200</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                    <div>
                        <h6 class=\"my-0\">Product Two</h6>
                        <small class=\"text-body-secondary\">Brief description</small>
                    </div>
                    <span class=\"text-body-secondary\">\$900</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                    <div>
                        <h6 class=\"my-0\">Product Three</h6>
                        <small class=\"text-body-secondary\">Brief description</small>
                    </div>
                    <span class=\"text-body-secondary\">\$1100</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between\">
                    <span>Total (USD)</span>
                    <strong>\$2600</strong>
                </li>
            </ul>

            <button class=\"w-100 btn btn-primary btn-lg\" type=\"submit\">Continue to checkout</button>
        </div>
    </div>
</div>
", "cart.html.twig", "/home/lhadi/PhpstormProjects/tpweb/templates/cart.html.twig");
    }
}
