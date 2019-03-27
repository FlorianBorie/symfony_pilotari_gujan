<?php

/* site/inscription.html.twig */
class __TwigTemplate_1a34580e1d26bc2b7076c6b7e645886c5b5a7956c9c1a5e33769e58d9185672c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/inscription.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/inscription.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new Twig_Error_Runtime('Variable "formProfil" does not exist.', 3, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Inscription</h1>

    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new Twig_Error_Runtime('Variable "formProfil" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new Twig_Error_Runtime('Variable "formProfil" does not exist.', 11, $this->source); })()), "nom", array()), 'row', array("attr" => array("placeholder" => "Votre nom")));
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new Twig_Error_Runtime('Variable "formProfil" does not exist.', 12, $this->source); })()), "prenom", array()), 'row', array("attr" => array("placeholder" => "Votre prénom")));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new Twig_Error_Runtime('Variable "formProfil" does not exist.', 13, $this->source); })()), "mail", array()), 'row', array("attr" => array("placeholder" => "Votre adresse mail")));
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new Twig_Error_Runtime('Variable "formProfil" does not exist.', 14, $this->source); })()), "password", array()), 'row', array("attr" => array("placeholder" => "Votre mot de passe")));
        echo "

    <button type=\"submit\" class=\"btn btn-info\">
        ";
        // line 17
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "            Modifier

        ";
        } else {
            // line 21
            echo "          Envoyer

        ";
        }
        // line 24
        echo "    </button>

    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new Twig_Error_Runtime('Variable "formProfil" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 24,  91 => 21,  86 => 18,  84 => 17,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  61 => 9,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme formProfil 'bootstrap_4_layout.html.twig' %}

{% block body %}

    <h1>Inscription</h1>

    {{ form_start(formProfil) }}

    {{ form_row(formProfil.nom, {'attr': {'placeholder': \"Votre nom\"}}) }}
    {{ form_row(formProfil.prenom, {'attr': {'placeholder': \"Votre prénom\"}}) }}
    {{ form_row(formProfil.mail, {'attr': {'placeholder': \"Votre adresse mail\"}}) }}
    {{ form_row(formProfil.password, {'attr': {'placeholder': \"Votre mot de passe\"}}) }}

    <button type=\"submit\" class=\"btn btn-info\">
        {% if editMode %}
            Modifier

        {% else %}
          Envoyer

        {% endif %}
    </button>

    {{ form_end(formProfil) }}

{% endblock %}




", "site/inscription.html.twig", "C:\\wamp64\\www\\symfony_pilotari_gujan\\site\\templates\\site\\inscription.html.twig");
    }
}
