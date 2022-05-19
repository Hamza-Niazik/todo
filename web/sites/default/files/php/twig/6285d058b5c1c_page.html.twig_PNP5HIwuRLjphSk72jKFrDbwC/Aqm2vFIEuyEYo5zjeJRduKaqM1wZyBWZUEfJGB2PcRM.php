<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/todo/templates/system/page.html.twig */
class __TwigTemplate_47bde6ce5a5b323d45e9388c1a5675f7272512e75e55dc58c1028d2f934d10b6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "

<header";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_attributtes"] ?? null), 10, $this->source), "html", null, true);
        echo ">
  <div class=\"hero-head\">
    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
    ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 13, $this->source), "html", null, true);
        echo "
    ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 14, $this->source), "html", null, true);
        echo "


  </div>
  ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 18)) {
            // line 19
            echo "  <div class=\"hero-body\">
    ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 23
        echo "  <div class=\"hero-foot\">
    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
  </div>
</header>

<main role=\"main\">
  <section class=\"section\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 31
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "

    ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "

    ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "

    ";
        // line 37
        if (($context["wrap_content_in_container"] ?? null)) {
            // line 38
            echo "    <div class=\"container\">
    ";
        }
        // line 40
        echo "      <div class=\"columns\">
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 41)) {
            // line 42
            echo "          <aside class=\"column is-narrow\" role=\"complementary\">
            ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 46
        echo "
        <div class=\"column\">
        ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 51)) {
            // line 52
            echo "          <aside class=\"column is-narrow\" role=\"complementary\">
            ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 56
        echo "      </div>
    ";
        // line 57
        if (($context["wrap_content_in_container"] ?? null)) {
            // line 58
            echo "    </div>
    ";
        }
        // line 60
        echo "  </section>
</main>

";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 63)) {
            // line 64
            echo "  <footer class=\"footer\" role=\"contentinfo\">
    ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/todo/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  163 => 64,  161 => 63,  156 => 60,  152 => 58,  150 => 57,  147 => 56,  141 => 53,  138 => 52,  136 => 51,  130 => 48,  126 => 46,  120 => 43,  117 => 42,  115 => 41,  112 => 40,  108 => 38,  106 => 37,  101 => 35,  96 => 33,  90 => 31,  81 => 24,  78 => 23,  72 => 20,  69 => 19,  67 => 18,  60 => 14,  56 => 13,  52 => 12,  47 => 10,  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Zurb Foundation theme implementation to display a single page.
 */
#}

{{ page.primary_menu }}

<header{{ header_attributtes }}>
  <div class=\"hero-head\">
    {{ page.header }}
    {{ site_name }}
    {{ site_slogan }}


  </div>
  {% if page.title %}
  <div class=\"hero-body\">
    {{ page.title }}
  </div>
  {% endif %}
  <div class=\"hero-foot\">
    {{ page.secondary_menu }}
  </div>
</header>

<main role=\"main\">
  <section class=\"section\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    {{ page.breadcrumb }}

    {{ page.highlighted }}

    {{ page.help }}

    {% if wrap_content_in_container %}
    <div class=\"container\">
    {% endif %}
      <div class=\"columns\">
        {% if page.sidebar_first %}
          <aside class=\"column is-narrow\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endif %}

        <div class=\"column\">
        {{ page.content }}
        </div>

        {% if page.sidebar_second %}
          <aside class=\"column is-narrow\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endif %}
      </div>
    {% if wrap_content_in_container %}
    </div>
    {% endif %}
  </section>
</main>

{% if page.footer %}
  <footer class=\"footer\" role=\"contentinfo\">
    {{ page.footer }}
  </footer>
{% endif %}
", "themes/custom/todo/templates/system/page.html.twig", "/var/www/html/web/themes/custom/todo/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
