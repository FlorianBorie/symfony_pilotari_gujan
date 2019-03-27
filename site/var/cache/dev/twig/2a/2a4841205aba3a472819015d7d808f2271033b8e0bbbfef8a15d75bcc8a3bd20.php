<?php

/* site/sponsor.html.twig */
class __TwigTemplate_c6859c5bc3df999458f4853efda800bbc50daed11372fd3e84d3508bc40ff619 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/sponsor.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/sponsor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/sponsor.html.twig"));

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
        echo "    <div id=\"sponsor\">
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/70278197-sponsor-de-laurier-icône-d-affaires.jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/images (1).png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/images (2).png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/images.png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (1).png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (6).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (7).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (8).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (9).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (10).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (11).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement.png\"></a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/sponsor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div id=\"sponsor\">
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/70278197-sponsor-de-laurier-icône-d-affaires.jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/images (1).png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/images (2).png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/images.png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (1).png\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (6).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (7).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (8).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (9).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (10).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement (11).jpg\"></a>
        <a href=\"#\" ><img class=\"col-md-3 text-center mt-3\" src=\"../img/sponsor/téléchargement.png\"></a>
    </div>
{% endblock %}", "site/sponsor.html.twig", "C:\\wamp64\\www\\symfony_pilotari_gujan\\site\\templates\\site\\sponsor.html.twig");
    }
}
