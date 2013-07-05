<?php

/* WysowArchiveMyTweetsBundle::pagination.html.twig */
class __TwigTemplate_cd496e5b4ca96d19a27e59b52647ed19 extends Twig_Template
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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 2
            echo "<div class=\"amt-pagination\">
    <ul class=\"pager\">
        ";
            // line 4
            if (array_key_exists("previous", $context)) {
                // line 5
                echo "            <li class=\"previous\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">&larr; Newer Tweets</a>
            </li>
        ";
            }
            // line 9
            echo "
        ";
            // line 10
            if (array_key_exists("next", $context)) {
                // line 11
                echo "            <li class=\"next\">
                <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">Older Tweets &rarr;</a>
            </li>
        ";
            }
            // line 15
            echo "    </ul>
    <div class=\"pages\">Page ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : null), "html", null, true);
            echo " of ";
            echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : null), "html", null, true);
            echo "</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "WysowArchiveMyTweetsBundle::pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  50 => 15,  41 => 11,  27 => 5,  25 => 4,  21 => 2,  43 => 10,  31 => 6,  24 => 4,  19 => 1,  88 => 20,  83 => 19,  75 => 16,  72 => 15,  61 => 8,  58 => 7,  52 => 6,  44 => 12,  36 => 9,  34 => 7,  30 => 6,  23 => 1,  143 => 45,  141 => 44,  135 => 40,  131 => 38,  124 => 34,  120 => 32,  112 => 29,  100 => 28,  91 => 26,  84 => 23,  80 => 18,  78 => 20,  66 => 9,  62 => 17,  59 => 16,  57 => 15,  48 => 8,  46 => 22,  42 => 15,  39 => 10,  29 => 2,);
    }
}
