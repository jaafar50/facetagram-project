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

/* service.html.twig */
class __TwigTemplate_c834d792ee67a422af7caf153e64ae0eb7d77f15ef3d89ed034fb5375824086f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "service.html.twig", 1);
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

<div class=\"container\">
        <div class=\"row\">
            
            <div class=\"col-6\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
                </div>
            </div>
            <div class=\"col-6\">
                <img src=\"https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80\" alt=\"img\">
            </div>
            
        </div>
    </div>

    <div class=\"container\">

    
    <div class=\"row mt-5\">
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80\" >
            <h2 class=\"text-primary\">Calvin Walk</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Founder and CEO</h3>
            
        </div>
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1485875437342-9b39470b3d95?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1504&q=80\">
            <h2 class=\"text-primary\">Jennifer Soft</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Managing Director</h3>
            
        </div>
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1462&q=80\">
            <h2 class=\"text-primary\">David Rock</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Financial officer</h3>
            
        </div>
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80\">
            <h2 class=\"text-primary\">Calvin Second</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Senior Director</h3>
            
        </div>
    </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service.html.twig";
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

<div class=\"container\">
        <div class=\"row\">
            
            <div class=\"col-6\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
                </div>
            </div>
            <div class=\"col-6\">
                <img src=\"https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80\" alt=\"img\">
            </div>
            
        </div>
    </div>

    <div class=\"container\">

    
    <div class=\"row mt-5\">
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80\" >
            <h2 class=\"text-primary\">Calvin Walk</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Founder and CEO</h3>
            
        </div>
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1485875437342-9b39470b3d95?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1504&q=80\">
            <h2 class=\"text-primary\">Jennifer Soft</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Managing Director</h3>
            
        </div>
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1462&q=80\">
            <h2 class=\"text-primary\">David Rock</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Financial officer</h3>
            
        </div>
        <div class=\"col-3 text-center\">
            <img src=\"https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80\">
            <h2 class=\"text-primary\">Calvin Second</h2>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h3 class=\"text-info\">Senior Director</h3>
            
        </div>
    </div>
</div>



{% endblock %}", "service.html.twig", "C:\\wamp64\\www\\symfony\\Facetagram\\templates\\service.html.twig");
    }
}
