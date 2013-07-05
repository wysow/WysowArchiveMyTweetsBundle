<?php

/* WysowArchiveMyTweetsBundle::menu.html.twig */
class __TwigTemplate_4df4cb95ed8f8ba008b939fcc5a7f66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t\t<a class=\"brand avatar\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('gravatar')->getGravatarImage((isset($context["gravatarEmail"]) ? $context["gravatarEmail"] : null)), "html", null, true);
        echo "\"></a>
\t\t\t<ul id=\"primary-nav\" class=\"nav\">
\t\t\t\t<li><a class=\"brand\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_index");
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["twitter"]) ? $context["twitter"] : null), "username"), "html", null, true);
        echo "</a></li>
\t\t\t</ul>
\t\t\t<ul id=\"search-nav\" class=\"nav pull-right\">
\t\t\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_index");
        echo "\" class=\"navbar-search pull-right\" method=\"get\">
\t\t\t\t\t<input type=\"text\" size=\"20\" name=\"q\" value=\"";
        // line 10
        if ((isset($context["searchTerm"]) ? $context["searchTerm"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["searchTerm"]) ? $context["searchTerm"] : null), "html", null, true);
        }
        echo "\" class=\"span3 search-query\" placeholder=\"Search my tweets\" />
\t\t\t\t</form>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WysowArchiveMyTweetsBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  31 => 6,  24 => 4,  19 => 1,  88 => 20,  83 => 19,  75 => 16,  72 => 15,  61 => 8,  58 => 7,  52 => 6,  44 => 18,  36 => 11,  34 => 7,  30 => 6,  23 => 1,  143 => 45,  141 => 44,  135 => 40,  131 => 38,  124 => 34,  120 => 32,  112 => 29,  100 => 28,  91 => 26,  84 => 23,  80 => 18,  78 => 20,  66 => 9,  62 => 17,  59 => 16,  57 => 15,  48 => 8,  46 => 22,  42 => 15,  39 => 9,  29 => 2,);
    }
}
