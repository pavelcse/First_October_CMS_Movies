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

/* E:\_Xampp\htdocs\October_CMS\october_demo/themes/pavel/pages/contact-details.htm */
class __TwigTemplate_f4eba655e4b98f38d57cc614d44c7cfbf32cbc3308b442f2ddab97491b6370c6 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <h4>Name</h4>
    <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, false, 8), "thumb", [0 => 200, 1 => ($context["auto"] ?? null)], "method", false, false, false, 8), "html", null, true);
            echo "\" alt=\"\">

    <h4>Email</h4>
    ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
            echo "

    <h4>Phone</h4>
    ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", [], "any", false, false, false, 14), "html", null, true);
            echo "

    <h4>Message</h4>
    ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "message", [], "any", false, false, false, 17);
            echo "

";
        } else {
            // line 20
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/contact-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  73 => 17,  67 => 14,  61 => 11,  55 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <h4>Name</h4>
    <p>{{ record.name }}</p>
    <img src=\"{{record.image.thumb(200, auto)}}\" alt=\"\">

    <h4>Email</h4>
    {{ record.email }}

    <h4>Phone</h4>
    {{ record.phone }}

    <h4>Message</h4>
    {{ record.message|raw }}

{% else %}
    {{ notFoundMessage }}
{% endif %}", "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/contact-details.htm", "");
    }
}
