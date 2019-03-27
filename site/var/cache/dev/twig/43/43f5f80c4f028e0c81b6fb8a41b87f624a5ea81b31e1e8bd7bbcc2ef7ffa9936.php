<?php

/* site/home.html.twig */
class __TwigTemplate_ee31503d8703a6967c24cf9abe167d9e76bafa65b96572d57d837c91972859f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"slideshow\">
    <ul>
        <li><img class=\"img_slider\" src=\"./img/logo.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (1).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (2).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>

        <li><img class=\"img_slider\" src=\"./img/0fd71d8e37afe224e7f1dc3c191be033.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/images (1).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/images (2).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/images (3).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>

        <li><img class=\"img_slider\" src=\"./img/images.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (3).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (4).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (5).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>

<script type=\"text/javascript\">
    \$(function(){
        setInterval(function(){
            \$(\".slideshow ul\").animate({marginLeft:-547},3000,function(){
                \$(this).css({marginLeft:0}).find(\"li:last\").after(\$(this).find(\"li:first\"));
            })
        }, 5500);
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  82 => 23,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"slideshow\">
    <ul>
        <li><img class=\"img_slider\" src=\"./img/logo.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (1).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (2).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>

        <li><img class=\"img_slider\" src=\"./img/0fd71d8e37afe224e7f1dc3c191be033.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/images (1).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/images (2).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/images (3).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>

        <li><img class=\"img_slider\" src=\"./img/images.jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (3).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (4).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
        <li><img class=\"img_slider\" src=\"./img/téléchargement (5).jpg\" alt=\"\" width=\"547\" height=\"400\" /></li>
    </ul>
</div>
{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>

<script type=\"text/javascript\">
    \$(function(){
        setInterval(function(){
            \$(\".slideshow ul\").animate({marginLeft:-547},3000,function(){
                \$(this).css({marginLeft:0}).find(\"li:last\").after(\$(this).find(\"li:first\"));
            })
        }, 5500);
    });
</script>
{% endblock %}", "site/home.html.twig", "C:\\wamp64\\www\\symfony_pilotari_gujan\\site\\templates\\site\\home.html.twig");
    }
}
