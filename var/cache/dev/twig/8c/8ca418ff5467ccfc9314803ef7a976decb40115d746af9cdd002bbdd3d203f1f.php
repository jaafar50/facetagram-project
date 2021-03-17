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

/* product.html.twig */
class __TwigTemplate_4d3a10c981fce67a07fd5cf621ef62c77f14c01b2de4d54b0ff9456420b9e4b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'contenuPrincipal' => [$this, 'block_contenuPrincipal'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 7
        echo "    ";
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "

<section id=\"testimonials\" class=\"testimonials text-center\">
            <div class=\"container\">
                <h2 class=\"mb-5\">Categories of the Month</h2>

                <div class=\"row\">
                    <article class=\"col-lg-4\">
                        <figure class=\"mx-auto mb-5 mb-lg-0\">
                            <img class=\"img-fluid rounded-circle mb-3\" src=\"https://images.unsplash.com/photo-1583312572805-32ece488eb6e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" alt=\"\">
                            <figcaption>
                                <h3 class=\"h3\">Watches</h3>
                                <button type=\"button\" class=\"btn btn-success\">Go Shop</button>
                            </figcaption>
                        </figure>
                    </article>

                    <article class=\"col-lg-4\">
                        <figure class=\"mx-auto mb-5 mb-lg-0\">
                            <img class=\"img-fluid rounded-circle mb-3\" src=\"https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8c2hvZXN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60\" alt=\"\">
                            <figcaption>
                                <h3 class=\"h3\">Shoes</h3>
                                <button type=\"button\" class=\"btn btn-success\">Go Shop</button>
                            </figcaption>
                        </figure>
                    </article>

                    <article class=\"col-lg-4\">
                        <figure class=\"mx-auto mb-5 mb-lg-0\">
                            <img class=\"img-fluid rounded-circle mb-3\" src=\"https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" alt=\"\">
                            <figcaption>
                                <h3 class=\"h3\">Accessories</h3>
                                <button type=\"button\" class=\"btn btn-success\">Go Shop</button>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </section>
    \t
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'navbar.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
<link href=\"{{asset('/css/theme.css')}}\" rel=\"stylesheet\" media=\"all\">    
{% endblock %}
{% block contenuPrincipal %}
    {{ parent() }}

<section id=\"testimonials\" class=\"testimonials text-center\">
            <div class=\"container\">
                <h2 class=\"mb-5\">Categories of the Month</h2>

                <div class=\"row\">
                    <article class=\"col-lg-4\">
                        <figure class=\"mx-auto mb-5 mb-lg-0\">
                            <img class=\"img-fluid rounded-circle mb-3\" src=\"https://images.unsplash.com/photo-1583312572805-32ece488eb6e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" alt=\"\">
                            <figcaption>
                                <h3 class=\"h3\">Watches</h3>
                                <button type=\"button\" class=\"btn btn-success\">Go Shop</button>
                            </figcaption>
                        </figure>
                    </article>

                    <article class=\"col-lg-4\">
                        <figure class=\"mx-auto mb-5 mb-lg-0\">
                            <img class=\"img-fluid rounded-circle mb-3\" src=\"https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8c2hvZXN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60\" alt=\"\">
                            <figcaption>
                                <h3 class=\"h3\">Shoes</h3>
                                <button type=\"button\" class=\"btn btn-success\">Go Shop</button>
                            </figcaption>
                        </figure>
                    </article>

                    <article class=\"col-lg-4\">
                        <figure class=\"mx-auto mb-5 mb-lg-0\">
                            <img class=\"img-fluid rounded-circle mb-3\" src=\"https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" alt=\"\">
                            <figcaption>
                                <h3 class=\"h3\">Accessories</h3>
                                <button type=\"button\" class=\"btn btn-success\">Go Shop</button>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </section>
    \t
    
{% endblock %}", "product.html.twig", "C:\\wamp64\\www\\symfony\\Facetagram\\templates\\product.html.twig");
    }
}
