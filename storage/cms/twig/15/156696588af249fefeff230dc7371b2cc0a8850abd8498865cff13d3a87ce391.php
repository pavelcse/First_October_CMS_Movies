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

/* E:\_Xampp\htdocs\October_CMS\october_demo/themes/pavel/pages/contact.htm */
class __TwigTemplate_188acf6eb0709872dfd6c4484727884dd952a255b67ee5327073f64747cca1c7 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<table class=\"table table-striped\">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 20
            echo "    <tr>
        <td>
            ";
            // line 23
            echo "            ";
            ob_start();
            // line 24
            echo "            ";
            if (($context["detailsPage"] ?? null)) {
                // line 25
                echo "            <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 25)]);
                echo "\">
                ";
            }
            // line 27
            echo "
                ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "

                ";
            // line 30
            if (($context["detailsPage"] ?? null)) {
                // line 31
                echo "            </a>
            ";
            }
            // line 33
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 34
            echo "        </td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "phone", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "message", [], "any", false, false, false, 37), 50]);
            echo "</td>
        <td>
            ";
            // line 40
            echo "            ";
            ob_start();
            // line 41
            echo "            ";
            if (($context["detailsPage"] ?? null)) {
                // line 42
                echo "            <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 42)]);
                echo "\">
                ";
            }
            // line 44
            echo "
                View

                ";
            // line 47
            if (($context["detailsPage"] ?? null)) {
                // line 48
                echo "            </a>
            ";
            }
            // line 50
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 51
            echo "        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "    <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    <tr>
        <td colspan=\"4\" class=\"no-data\">";
            // line 56
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </tbody>
</table>


";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 63) > 1)) {
            // line 64
            echo "    <ul class=\"pagination\">
        ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 65) > 1)) {
                // line 66
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "baseFileName", [], "any", false, false, false, 66), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 66) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 68
            echo "
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 69)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 70
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 70) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 71
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 71), "baseFileName", [], "any", false, false, false, 71), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
        ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 75) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 75))) {
                // line 76
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 76), "baseFileName", [], "any", false, false, false, 76), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 76) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 78
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 78,  212 => 76,  210 => 75,  207 => 74,  196 => 71,  191 => 70,  187 => 69,  184 => 68,  178 => 66,  176 => 65,  173 => 64,  171 => 63,  165 => 59,  156 => 56,  150 => 54,  143 => 51,  140 => 50,  136 => 48,  134 => 47,  129 => 44,  123 => 42,  120 => 41,  117 => 40,  112 => 37,  108 => 36,  104 => 35,  101 => 34,  98 => 33,  94 => 31,  92 => 30,  87 => 28,  84 => 27,  78 => 25,  75 => 24,  72 => 23,  68 => 20,  63 => 19,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<table class=\"table table-striped\">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    {% for record in records %}
    <tr>
        <td>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
            {% if detailsPage %}
            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ record.name }}

                {% if detailsPage %}
            </a>
            {% endif %}
            {% endspaceless %}
        </td>
        <td>{{ record.email }}</td>
        <td>{{ record.phone }}</td>
        <td>{{ html_limit(record.message, 50)|raw }}</td>
        <td>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
            {% if detailsPage %}
            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                View

                {% if detailsPage %}
            </a>
            {% endif %}
            {% endspaceless %}
        </td>
    </tr>
    {% else %}
    <li class=\"no-data\">{{ noRecordsMessage }}</li>
    <tr>
        <td colspan=\"4\" class=\"no-data\">{{ noRecordsMessage }}</td>
    </tr>
    {% endfor %}
    </tbody>
</table>


{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/contact.htm", "");
    }
}
