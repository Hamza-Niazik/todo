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

/* modules/contrib/simplelogin/templates/page--simplelogin.html.twig */
class __TwigTemplate_997734faeb740b1810c462a988bd1b10423555ed2b18b2fef471712ff10064e5 extends \Twig\Template
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
        // line 10
        ob_start(function () { return ''; });
        // line 11
        echo "  <div class=\"simplelogin-wrapper ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_class"] ?? null), 11, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_opacity"] ?? null), 11, $this->source), "html", null, true);
        echo "\">
    <div class=\"simplelogin-form\" style=\"width: ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_width"] ?? null), 12, $this->source), "html", null, true);
        echo "px\">
      <div class=\"simplelogin-link\">
        ";
        // line 14
        if ((($context["path"] ?? null) == "/user/password")) {
            // line 15
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 15, $this->source), "html", null, true);
            echo "user/login\" class=\"signreg\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a>
        ";
        } elseif ((        // line 16
($context["path"] ?? null) == "/user/register")) {
            // line 17
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source), "html", null, true);
            echo "user/login\" class=\"signreg\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a>
        ";
        } else {
            // line 19
            echo "          ";
            if ((($context["site_register"] ?? null) != "admin_only")) {
                // line 20
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source), "html", null, true);
                echo "user/register\" class=\"signreg\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sign up"));
                echo "</a>
          ";
            }
            // line 22
            echo "        ";
        }
        // line 23
        echo "      </div>

      <div class=\"simplelogin-bg\">
        <div class=\"simplelogin-logo\">
          <a href=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 27, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 27, $this->source), "html", null, true);
        echo "\" alt=\"Home\"/></a>
          <h1>";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 28, $this->source), "html", null, true);
        echo "</h1>
        </div>

        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
        ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
 
        ";
        // line 34
        if ((($context["path"] ?? null) == "/user/login")) {
            // line 35
            echo "          <div class=\"forgot-password\">
            ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forgot password?"));
            echo " <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source), "html", null, true);
            echo "user/password\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click here"));
            echo "</a>
          </div>
        ";
        }
        // line 39
        echo "      </div>
    </div>
  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/simplelogin/templates/page--simplelogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  118 => 36,  115 => 35,  113 => 34,  108 => 32,  104 => 31,  98 => 28,  92 => 27,  86 => 23,  83 => 22,  75 => 20,  72 => 19,  64 => 17,  62 => 16,  55 => 15,  53 => 14,  48 => 12,  41 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/simplelogin/templates/page--simplelogin.html.twig", "/var/www/html/web/modules/contrib/simplelogin/templates/page--simplelogin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 10, "if" => 14);
        static $filters = array("escape" => 11, "t" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if'],
                ['escape', 't'],
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
