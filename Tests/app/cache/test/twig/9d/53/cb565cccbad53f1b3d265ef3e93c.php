<?php

/* WysowArchiveMyTweetsBundle::layout.html.twig */
class __TwigTemplate_9d53cb565cccbad53f1b3d265ef3e93c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->
</head>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Tweets";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wysowarchivemytweets/css/archive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wysowarchivemytweets/assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wysowarchivemytweets/assets/jquery/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wysowarchivemytweets/assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "WysowArchiveMyTweetsBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  83 => 19,  75 => 16,  72 => 15,  61 => 8,  58 => 7,  52 => 6,  44 => 18,  36 => 11,  34 => 7,  30 => 6,  23 => 1,  143 => 45,  141 => 44,  135 => 40,  131 => 38,  124 => 34,  120 => 32,  112 => 29,  100 => 28,  91 => 26,  84 => 23,  80 => 18,  78 => 20,  66 => 9,  62 => 17,  59 => 16,  57 => 15,  48 => 8,  46 => 22,  42 => 15,  39 => 4,  29 => 2,);
    }
}
