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

/* E:\_Xampp\htdocs\October_CMS\october_demo/themes/pavel/pages/movie-details.htm */
class __TwigTemplate_872010265f9b11c3ce8fbaa642e2cc7070b1c7727c5704e3055c78b69089707b extends \Twig\Template
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
            echo "<h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</h3>
<img src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 7), "thumb", [0 => 200, 1 => ($context["auto"] ?? null)], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\">
<p> ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>

<h3>Description</h3>
";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 11);
            echo "

<h3>Gallery</h3>
<div class=\"row\">
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movie_gallery", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 16
                echo "        <div class=\"col-sm-2 col-md-1 clearfix\">
            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
                <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 80, 1 => 80, 2 => ["mode" => "crop"]], "method", false, false, false, 18), "html", null, true);
                echo "\" alt=\"\">
            </a>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "</div>

<h3>Genre</h3>
<ul>
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 27
                echo "        <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 27), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</ul>


";
        } else {
            // line 33
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/movie-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  110 => 29,  101 => 27,  97 => 26,  91 => 22,  81 => 18,  77 => 17,  74 => 16,  70 => 15,  63 => 11,  57 => 8,  53 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
<h3>{{ record.name }}</h3>
<img src=\"{{record.poster.thumb(200, auto)}}\" alt=\"\">
<p> {{ record.year }}</p>

<h3>Description</h3>
{{ record.description|raw }}

<h3>Gallery</h3>
<div class=\"row\">
    {% for image in record.movie_gallery %}
        <div class=\"col-sm-2 col-md-1 clearfix\">
            <a href=\"{{image.path}}\">
                <img src=\"{{image.thumb(80,80, {'mode':'crop'})}}\" alt=\"\">
            </a>
        </div>
    {% endfor %}
</div>

<h3>Genre</h3>
<ul>
    {% for genre in record.genres %}
        <li>{{genre.genre_title}}</li>
    {% endfor %}
</ul>


{% else %}
    {{ notFoundMessage }}
{% endif %}", "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/movie-details.htm", "");
    }
}
