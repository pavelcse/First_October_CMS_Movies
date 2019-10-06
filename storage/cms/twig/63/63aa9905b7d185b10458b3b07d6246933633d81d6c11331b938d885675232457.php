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

/* E:\_Xampp\htdocs\October_CMS\october_demo/themes/pavel/partials/site/footer.htm */
class __TwigTemplate_f8c1169d73b4a4c31725e0dced749bd3f8ea43a9d584b95cbd0ba2fc21ba069e extends \Twig\Template
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
        echo "<div class=\"footer-inner text-center\" style=\"position: relative; bottom: 0; margin-top: 30px\">
    <p class=\"muted credit\">
        &copy; 2019 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Powered by <a href=\"#\">Pavel</a>
        using <a href=\"\">Custom Theme</a>.
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-inner text-center\" style=\"position: relative; bottom: 0; margin-top: 30px\">
    <p class=\"muted credit\">
        &copy; 2019 - {{ \"now\"|date(\"Y\") }}
        &mdash; Powered by <a href=\"#\">Pavel</a>
        using <a href=\"\">Custom Theme</a>.
    </p>
</div>", "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/partials/site/footer.htm", "");
    }
}
