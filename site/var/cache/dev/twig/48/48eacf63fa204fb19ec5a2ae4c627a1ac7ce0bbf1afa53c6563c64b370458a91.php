<?php

/* site/contacter.html.twig */
class __TwigTemplate_2ea8d3b38f53dc26cb94a6a5a772b8558a83d6c385f81d096b99645cec0663e9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/contacter.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/contacter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/contacter.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 2, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"coordonées\">
        <p>Coordonées :</p>
        <p>Association du pilotari gujannais</p>
        <p>60 allée Edouard Branly</p>
        <p>33470 Gujan-Mestras</p>
        <p>TEL : 05 56 66 79 92</p>
        <p>@ : TOTO@hotmail.fr</p>
    </div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 14, $this->source); })()), "nom", array()), 'row', array("attr" => array("placeholder" => "Mettez vôtre nom")));
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 15, $this->source); })()), "mail", array()), 'row', array("attr" => array("placeholder" => "Mettez vôtre mail")));
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 16, $this->source); })()), "objet", array()), 'row', array("attr" => array("placeholder" => "Ecrire l'obget de vôtre message")));
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 17, $this->source); })()), "message", array()), 'row', array("attr" => array("placeholder" => "Ecrire vôtre message")));
        echo "

    <button type=\"submit\" class=\"btn btn-info\">Envoyer</button>
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 20, $this->source); })()), 'widget');
        echo "

    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContacter"]) || array_key_exists("formContacter", $context) ? $context["formContacter"] : (function () { throw new Twig_Error_Runtime('Variable "formContacter" does not exist.', 22, $this->source); })()), 'form');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/contacter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 20,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  66 => 12,  56 => 4,  47 => 3,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme formContacter  'bootstrap_4_layout.html.twig' %}
{% block body %}
    <div id=\"coordonées\">
        <p>Coordonées :</p>
        <p>Association du pilotari gujannais</p>
        <p>60 allée Edouard Branly</p>
        <p>33470 Gujan-Mestras</p>
        <p>TEL : 05 56 66 79 92</p>
        <p>@ : TOTO@hotmail.fr</p>
    </div>
    {{ form_start(formContacter) }}

    {{ form_row(formContacter.nom, {'attr' : {'placeholder': \"Mettez vôtre nom\"}}) }}
    {{ form_row(formContacter.mail, {'attr' : {'placeholder': \"Mettez vôtre mail\"}}) }}
    {{ form_row(formContacter.objet, {'attr' : {'placeholder': \"Ecrire l'obget de vôtre message\"}}) }}
    {{ form_row(formContacter.message, {'attr' : {'placeholder': \"Ecrire vôtre message\"}}) }}

    <button type=\"submit\" class=\"btn btn-info\">Envoyer</button>
    {{ form_widget(formContacter) }}

    {{ form(formContacter) }}

{% endblock %}", "site/contacter.html.twig", "C:\\wamp64\\www\\symfony_pilotari_gujan\\site\\templates\\site\\contacter.html.twig");
    }
}
