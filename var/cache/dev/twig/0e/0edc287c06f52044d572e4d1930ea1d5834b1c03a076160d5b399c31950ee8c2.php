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

/* about.html.twig */
class __TwigTemplate_8afbef8c9b81667d895f76f3bb8c37da2069c878335d6d515b7373f7df92d6b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 3
        echo " ";
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
                <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80\" alt=\"First slide\">
                    </div>
                    <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"...\" alt=\"Second slide\">
                    </div>
                    <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"...\" alt=\"Third slide\">
                    </div>
                </div>            
                </div>
            </div>    
            
                   <div class=\"col-6\">                
                    <h1>JAMES WORD</h1>
                    <h2>Creative Director</h2>                    
                        <article>                       

                            <p>
                                 Lorem ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Doloremque cupiditate voluptatibus, impedit vitae est
                                dolorem veritatis ex sint perspiciatis architecto possimus dignissimos totam qui excepturi
                                maiores quam provident expedita magni.Ratione tenetur rem cupiditate fugit quidem facilis
                                quae
                                consequuntur ab doloremque animi. Unde ad illo in eveniet amet excepturi, inventore eaque
                                itaque
                                exercitationem nisi? Explicabo dolore pariatur totam blanditiis quam.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo officiis delectus
                                eligendi
                                dolorem magnam perspiciatis accusamus. Id non, veritatis voluptatum minima iusto quos aut?
                                Non
                                ad magnam facilis quisquam voluptatum.Quasi quae aliquid, officiis possimus facere nobis!
                                Nostrum odit corrupti quidem alias nisi ipsa ab. Delectus, laboriosam deserunt expedita
                                vero,
                                aperiam molestias nemo sunt necessitatibus nesciunt nostrum similique itaque velit?
                            </p>
                        </article>
                    </div>    
                       

</div>
</div>




 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'navbar.html.twig' %}
{% block contenuPrincipal %}
 {{ parent() }}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
                <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80\" alt=\"First slide\">
                    </div>
                    <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"...\" alt=\"Second slide\">
                    </div>
                    <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"...\" alt=\"Third slide\">
                    </div>
                </div>            
                </div>
            </div>    
            
                   <div class=\"col-6\">                
                    <h1>JAMES WORD</h1>
                    <h2>Creative Director</h2>                    
                        <article>                       

                            <p>
                                 Lorem ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Doloremque cupiditate voluptatibus, impedit vitae est
                                dolorem veritatis ex sint perspiciatis architecto possimus dignissimos totam qui excepturi
                                maiores quam provident expedita magni.Ratione tenetur rem cupiditate fugit quidem facilis
                                quae
                                consequuntur ab doloremque animi. Unde ad illo in eveniet amet excepturi, inventore eaque
                                itaque
                                exercitationem nisi? Explicabo dolore pariatur totam blanditiis quam.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo officiis delectus
                                eligendi
                                dolorem magnam perspiciatis accusamus. Id non, veritatis voluptatum minima iusto quos aut?
                                Non
                                ad magnam facilis quisquam voluptatum.Quasi quae aliquid, officiis possimus facere nobis!
                                Nostrum odit corrupti quidem alias nisi ipsa ab. Delectus, laboriosam deserunt expedita
                                vero,
                                aperiam molestias nemo sunt necessitatibus nesciunt nostrum similique itaque velit?
                            </p>
                        </article>
                    </div>    
                       

</div>
</div>




 {% endblock %}", "about.html.twig", "C:\\wamp64\\www\\symfony\\Facetagram\\templates\\about.html.twig");
    }
}
