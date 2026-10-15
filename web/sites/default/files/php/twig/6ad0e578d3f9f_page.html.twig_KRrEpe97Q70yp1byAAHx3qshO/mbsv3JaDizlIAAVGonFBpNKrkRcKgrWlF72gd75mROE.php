<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/honey/templates/layout/page.html.twig */
class __TwigTemplate_b47943206bac827500dd40c17d991c6d extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "<div class=\"honey-page layout-container\">
  <header class=\"honey-page__header\" role=\"banner\">
    <div class=\"honey-page__header-top\">
      ";
        // line 49
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), "html", null, true);
        yield "
      <button class=\"honey-page__toggle-button\"
        onclick=\"this.getAttribute(\x27aria-expanded\x27)===\x27true\x27 ? this.setAttribute(\x27aria-expanded\x27, false) : this.setAttribute(\x27aria-expanded\x27, true)\"
        role=\"button\" aria-expanded=\"false\">
          <span class=\"visually-hidden\">";
        // line 53
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open menu"));
        yield "</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 28\">
            <rect width=\"32\" height=\"4\" rx=\"2\"/>
            <rect width=\"32\" height=\"4\" rx=\"2\" transform=\"translate(0 12)\"/>
            <rect width=\"32\" height=\"4\" rx=\"2\" transform=\"translate(0 24)\"/>
          </svg>
        </button>
      ";
        // line 60
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 60), "html", null, true);
        yield "
    </div>
    <div class=\"honey-page__header-bottom\">
      <div class=\"honey-page__header-bottom-inner\">
        ";
        // line 64
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 64), "html", null, true);
        yield "
        ";
        // line 65
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 65), "html", null, true);
        yield "
      </div>
    </div>
  </header>
  <div class=\"honey-page__content-wrapper\">
    <main role=\"main\" class=\"honey-page__content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 72
        yield "      <div class=\"honey-page__highlighted\">
        ";
        // line 73
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 73), "html", null, true);
        yield "
        ";
        // line 74
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 74), "html", null, true);
        yield "
      </div>
      <div class=\"layout-content\">
        ";
        // line 77
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), "html", null, true);
        yield "
      </div>";
        // line 79
        yield "    </main>
    <aside class=\"honey-page__sidebar\" role=\"complementary\">
      ";
        // line 81
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 81), "html", null, true);
        yield "
      ";
        // line 82
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 82), "html", null, true);
        yield "
    </aside>
  </div>
  ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "    <footer class=\"honey-page__footer\" role=\"contentinfo\">
      ";
            // line 87
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 87), "html", null, true);
            yield "
    </footer>
  ";
        }
        // line 90
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/honey/templates/layout/page.html.twig";
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  129 => 90,  123 => 87,  120 => 86,  118 => 85,  112 => 82,  108 => 81,  104 => 79,  100 => 77,  94 => 74,  90 => 73,  87 => 72,  78 => 65,  74 => 64,  67 => 60,  57 => 53,  50 => 49,  45 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/honey/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/honey/templates/layout/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 85];
        static $filters = ["escape" => 49, "t" => 53];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape", 1 => "t"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
