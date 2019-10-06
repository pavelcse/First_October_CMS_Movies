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

/* E:\_Xampp\htdocs\October_CMS\october_demo/themes/pavel/pages/about.htm */
class __TwigTemplate_1ebb9e87ebe1860d1724e63cc2474a8f085198e9ed6fa642993101c7cef30c05 extends \Twig\Template
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
        echo "<h1>About </h1>";
    }

    public function getTemplateName()
    {
        return "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>About </h1>", "E:\\_Xampp\\htdocs\\October_CMS\\october_demo/themes/pavel/pages/about.htm", "");
    }
}
