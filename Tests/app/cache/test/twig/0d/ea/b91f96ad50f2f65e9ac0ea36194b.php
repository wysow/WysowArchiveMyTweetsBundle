<?php

/* WysowArchiveMyTweetsBundle::sidebar.html.twig */
class __TwigTemplate_0deab91f96ad50f2f65e9ac0ea36194b extends Twig_Template
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
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route_params"), "method"));
        // line 3
        echo "<div id=\"sidebar\">

\t<div id=\"archive\" class=\"widget rounded\">
\t\t<ul class=\"links\">
\t\t\t<li class=\"all-tweets ";
        // line 7
        if (((isset($context["currentPath"]) ? $context["currentPath"] : null) == $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_index"))) {
            echo "here";
        }
        echo "\">
\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_index");
        echo "\">
\t\t\t\t\t<span class=\"month\">All Tweets</span>
\t\t\t\t\t<span class=\"total\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</span>
\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"";
        // line 14
        if (((isset($context["currentPath"]) ? $context["currentPath"] : null) == $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_favorites"))) {
            echo "here";
        }
        echo "\">
\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_favorites");
        echo "\">
\t\t\t\t\t<span class=\"month\">Favorites</span>
\t\t\t\t\t<span class=\"total\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["totalFavorited"]) ? $context["totalFavorited"] : null), "html", null, true);
        echo "</span>
\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 21
        if ((isset($context["tweetsByMonths"]) ? $context["tweetsByMonths"] : null)) {
            // line 22
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tweetsByMonths"]) ? $context["tweetsByMonths"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tweetsByMonth"]) {
                // line 23
                echo "\t\t\t\t\t";
                $context["bgPercent"] = twig_number_format_filter($this->env, (($this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "total") / (isset($context["total"]) ? $context["total"] : null)) * 100), 2);
                // line 24
                echo "\t\t\t\t\t";
                $context["date"] = ((($this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "y") . "-") . $this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "m")) . "-01");
                // line 25
                echo "\t\t\t\t    <li class=\"";
                if (((isset($context["currentPath"]) ? $context["currentPath"] : null) == $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_archive", array("year" => $this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "y"), "month" => $this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "m"))))) {
                    echo "here";
                }
                echo "\">
\t\t\t\t    \t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_archive", array("year" => $this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "y"), "month" => $this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "m"))), "html", null, true);
                echo "\">
\t\t\t\t    \t\t<span class=\"month\">";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "F Y"), "html", null, true);
                echo "</span>
\t\t\t\t    \t\t<span class=\"total\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweetsByMonth"]) ? $context["tweetsByMonth"] : null), "total"), "html", null, true);
                echo "</span>
\t\t\t\t    \t\t<span class=\"bar\" style=\"width:";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["bgPercent"]) ? $context["bgPercent"] : null), "html", null, true);
                echo "%\"></span>
\t\t\t\t    \t</a>
\t\t\t\t    </li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweetsByMonth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t<li>No monthly data.</li>
\t\t\t";
        }
        // line 36
        echo "\t\t</ul>
\t</div><!-- /archive -->

\t<div id=\"sources\" class=\"widget rounded\">
\t\t<h3>Clients <div class=\"pull-right muted\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["totalClients"]) ? $context["totalClients"] : null), "html", null, true);
        echo "</div></h3>

\t\t<ul class=\"links\">
\t\t\t";
        // line 43
        if ((isset($context["clients"]) ? $context["clients"] : null)) {
            // line 44
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 45
                echo "\t\t\t\t    ";
                $context["clientName"] = strip_tags($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "source"));
                // line 46
                echo "\t\t\t\t    ";
                $context["bgPercent"] = twig_number_format_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "total") / (isset($context["total"]) ? $context["total"] : null)) * 100), 2);
                // line 47
                echo "\t\t\t\t    <li class=\"";
                if (((isset($context["currentPath"]) ? $context["currentPath"] : null) == $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_client", array("client" => (isset($context["clientName"]) ? $context["clientName"] : null))))) {
                    echo "here";
                }
                echo "\">
\t\t\t\t    \t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_client", array("client" => (isset($context["clientName"]) ? $context["clientName"] : null))), "html", null, true);
                echo "\">
\t\t\t\t    \t\t<span class=\"month\">";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["clientName"]) ? $context["clientName"] : null), "html", null, true);
                echo "</span>
\t\t\t\t    \t\t<span class=\"total\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "total"), "html", null, true);
                echo "</span>
\t\t\t\t    \t\t<span class=\"bar\" style=\"width:";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["bgPercent"]) ? $context["bgPercent"] : null), "html", null, true);
                echo "%\"></span>
\t\t\t\t    \t</a>
\t\t\t\t    </li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t<li>No clients.</li>
\t\t\t";
        }
        // line 58
        echo "\t\t</ul>
\t</div><!-- /sources -->

</div><!-- /sidebar -->
";
    }

    public function getTemplateName()
    {
        return "WysowArchiveMyTweetsBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 58,  169 => 56,  166 => 55,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  137 => 47,  134 => 46,  126 => 44,  118 => 40,  108 => 34,  105 => 33,  95 => 29,  87 => 27,  76 => 25,  73 => 24,  70 => 23,  65 => 22,  63 => 21,  56 => 17,  51 => 15,  45 => 14,  38 => 10,  33 => 8,  53 => 16,  50 => 15,  41 => 11,  27 => 7,  25 => 4,  21 => 3,  43 => 10,  31 => 6,  24 => 4,  19 => 1,  88 => 20,  83 => 26,  75 => 16,  72 => 15,  61 => 8,  58 => 7,  52 => 6,  44 => 12,  36 => 9,  34 => 7,  30 => 6,  23 => 1,  143 => 45,  141 => 44,  135 => 40,  131 => 45,  124 => 43,  120 => 32,  112 => 36,  100 => 28,  91 => 28,  84 => 23,  80 => 18,  78 => 20,  66 => 9,  62 => 17,  59 => 16,  57 => 15,  48 => 8,  46 => 22,  42 => 15,  39 => 10,  29 => 2,);
    }
}
