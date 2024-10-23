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

/* modules/custom/custom_migrate/templates/users-companies.html.twig */
class __TwigTemplate_560bddaef836a02b92b2b4bcd72c639184ac769157024ba20b92a470e43fe43a extends \Twig\Template
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
        // line 2
        echo "<div class=\"users-companies-table\">
    ";
        // line 3
        if (($context["users"] ?? null)) {
            // line 4
            echo "    <table>
        <thead>
            <tr>
                <th>";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ID"));
            echo "</th>
                <th>";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
            echo "</th>
                <th>";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Username"));
            echo "</th>
                <th>";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Email"));
            echo "</th>
                <th>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Phone"));
            echo "</th>
                <th>";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Website"));
            echo "</th>
                <th>";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Company"));
            echo "</th>
                <th>";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Address"));
            echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 19
                echo "                <tr>
                    <td>";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</td>
                    <td>";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</td>
                    <td>";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</td>
                    <td><a href=\"http://";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "website", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\" target=\"_blank\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "website", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</a></td>
                    <td>
                        <div>
                            <strong>Name:</strong> ";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, true, 28), "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "<br>
                            <strong>Catch phrase:</strong> ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, true, 29), "catch_phrase", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "<br>
                            <strong>bs:</strong> ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, true, 30), "bs", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "<br>
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>Street:</strong> ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "address_data", [], "any", false, false, true, 35), "street", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "<br>
                            <strong>City:</strong> ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "address_data", [], "any", false, false, true, 36), "city", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "<br>
                            <strong>Zipcode:</strong> ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "address_data", [], "any", false, false, true, 37), "zipcode", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "<br>
                            <strong>Suite:</strong> ";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "address_data", [], "any", false, false, true, 38), "suite", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "<br>
                            <div class=\"user-address\">
                                <strong>Geo:</strong>
                                <div class=\"lat-long\">
                                    <strong>Lat:</strong> ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "address_data", [], "any", false, false, true, 42), "geo_lat", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "<br>
                                    <strong>Long:</strong> ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "address_data", [], "any", false, false, true, 43), "geo_long", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "<br>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 53
            echo "        <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No users found."));
            echo "</p>
    ";
        }
        // line 55
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_migrate/templates/users-companies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 55,  176 => 53,  171 => 50,  158 => 43,  154 => 42,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  127 => 30,  123 => 29,  119 => 28,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  88 => 19,  84 => 18,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/custom_migrate/templates/users-companies.html.twig", "C:\\wamp64\\www\\migration\\migration_new\\web\\modules\\custom\\custom_migrate\\templates\\users-companies.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "for" => 18);
        static $filters = array("t" => 7, "escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape'],
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
