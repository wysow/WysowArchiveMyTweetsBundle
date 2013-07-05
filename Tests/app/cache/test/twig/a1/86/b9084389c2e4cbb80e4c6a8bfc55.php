<?php

/* WysowArchiveMyTweetsBundle:Default:index.html.twig */
class __TwigTemplate_a186b9084389c2e4cbb80e4c6a8bfc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WysowArchiveMyTweetsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WysowArchiveMyTweetsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["twitter"]) ? $context["twitter"] : null), "username"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["twitter"]) ? $context["twitter"] : null), "name"), "html", null, true);
        echo " - Tweets";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<body class=\"amt-recent\">

\t";
        // line 7
        $this->env->loadTemplate("WysowArchiveMyTweetsBundle::menu.html.twig")->display(array_merge($context, array("searchTerm" => (isset($context["searchTerm"]) ? $context["searchTerm"] : null), "gravatarEmail" => (isset($context["gravatarEmail"]) ? $context["gravatarEmail"] : null))));
        // line 8
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"span8\">
\t\t\t\t<div id=\"tweets\" class=\"rounded\">
\t\t\t\t\t<div class=\"page-header\"><h1>Recent Tweets</h1></div>

\t\t\t\t\t";
        // line 15
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 16
            echo "
\t\t\t\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
                // line 18
                echo "\t\t\t\t\t\t<div class=\"tweet ";
                if ($this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "inReplyToStatusId")) {
                    echo "reply";
                }
                echo " ";
                if ($this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "truncated")) {
                    echo "truncated";
                }
                echo "\">
\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t";
                // line 20
                if ($this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "favorited")) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\"><i class=\"icon-star icon-white\" title=\"Favorite\"></i></span>
\t\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "getLinkedTweet");
                echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"meta\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 26
                echo $this->env->getExtension('routing')->getPath("wysow_archivemytweets_default_index");
                echo "~";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "id"), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "createdAt"), "g:ia F jS Y"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\tvia
\t\t\t\t\t\t\t\t";
                // line 28
                echo $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "source");
                echo " ";
                if ($this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "inReplyToStatusId")) {
                    echo "<a href=\"http://twitter.com/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "inReplyToScreenName"), "html", null, true);
                    echo "/status/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "inReplyToStatusId"), "html", null, true);
                    echo "\">in reply to ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : null), "inReplyToScreenName"), "html", null, true);
                    echo "</a>";
                }
                // line 29
                echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
\t\t\t\t\t<div id=\"pagination\">
\t\t\t\t\t\t";
            // line 34
            echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
\t\t\t\t\t</div>

\t\t\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t\t\t<p class=\"no-tweets lead\">No tweets found!</p>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</div><!-- /tweets -->
\t\t\t</div><!-- /span8 -->

\t\t\t<div class=\"span4\">
\t\t\t\t";
        // line 44
        $this->env->loadTemplate("WysowArchiveMyTweetsBundle::sidebar.html.twig")->display(array_merge($context, array("total" => (isset($context["total"]) ? $context["total"] : null), "totalFavorited" => (isset($context["totalFavorited"]) ? $context["totalFavorited"] : null), "tweetsByMonths" => (isset($context["tweetsByMonths"]) ? $context["tweetsByMonths"] : null), "totalClients" => (isset($context["totalClients"]) ? $context["totalClients"] : null), "clients" => (isset($context["clients"]) ? $context["clients"] : null))));
        // line 45
        echo "\t\t\t</div><!-- /.span4 -->

<!-- /index -->

\t\t</div><!-- /.row -->
\t</div><!-- /.container -->

\t<div class=\"footer\" id=\"footer\">
\t\t<div class=\"container\">
\t\t\t<p><a href=\"http://amwhalen.com/projects/archive-my-tweets/\">Archive My Tweets</a> by <a href=\"http://www.wysow.fr\">Gaultier Boniface</a>, inspired by <a href=\"http://amwhalen.com\">Andrew M. Whalen</a> Archive My Tweets version.</p>
\t\t</div><!-- /.container -->
\t</div><!-- /.footer -->
";
    }

    public function getTemplateName()
    {
        return "WysowArchiveMyTweetsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  141 => 44,  135 => 40,  131 => 38,  124 => 34,  120 => 32,  112 => 29,  100 => 28,  91 => 26,  84 => 23,  80 => 21,  78 => 20,  66 => 18,  62 => 17,  59 => 16,  57 => 15,  48 => 8,  46 => 7,  42 => 5,  39 => 4,  29 => 2,);
    }
}
