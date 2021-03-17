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

/* home.html.twig */
class __TwigTemplate_b45751a971b69eea7bc7a03e710592c8eae671160e22f94931fadc3a2c4eeb88 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "home.html.twig", 1);
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
<div class=\"overview-wrap\">
<h2 class=\"title-1\">Bienvenue dans mon site</h2>
<button class=\"au-btn au-btn-icon au-btn--blue\">
<i class=\"zmdi zmdi-plus\"></i><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_propos");
        echo "\" class=\"text-dark\">Profil de James</a></button>
</div>



<div class=\"row m-t-25\">
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c1\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-account-o\"></i>
</div>
<div class=\"text\">
<h2>10368</h2>
<span>members online</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart1\" height=\"195\" style=\"display: block; height: 130px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c2\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-shopping-cart\"></i>
</div>
<div class=\"text\">
<h2>388,688</h2>
<span>items solid</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart2\" height=\"172\" style=\"display: block; height: 115px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c3\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-calendar-note\"></i>
</div>
<div class=\"text\">
<h2>1,086</h2>
<span>this week</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart3\" height=\"172\" style=\"display: block; height: 115px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
 <div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c4\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-money\"></i>
</div>
<div class=\"text\">
<h2>\$1,060,386</h2>
<span>total earnings</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart4\" height=\"172\" style=\"display: block; height: 115px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
</div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 11,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
<div class=\"overview-wrap\">
<h2 class=\"title-1\">Bienvenue dans mon site</h2>
<button class=\"au-btn au-btn-icon au-btn--blue\">
<i class=\"zmdi zmdi-plus\"></i><a href=\"{{ path(\"a_propos\") }}\" class=\"text-dark\">Profil de James</a></button>
</div>



<div class=\"row m-t-25\">
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c1\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-account-o\"></i>
</div>
<div class=\"text\">
<h2>10368</h2>
<span>members online</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart1\" height=\"195\" style=\"display: block; height: 130px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c2\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-shopping-cart\"></i>
</div>
<div class=\"text\">
<h2>388,688</h2>
<span>items solid</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart2\" height=\"172\" style=\"display: block; height: 115px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c3\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-calendar-note\"></i>
</div>
<div class=\"text\">
<h2>1,086</h2>
<span>this week</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart3\" height=\"172\" style=\"display: block; height: 115px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
 <div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c4\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-money\"></i>
</div>
<div class=\"text\">
<h2>\$1,060,386</h2>
<span>total earnings</span>
</div>
</div>
<div class=\"overview-chart\"><div style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\" class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart4\" height=\"172\" style=\"display: block; height: 115px; width: 206px;\" width=\"309\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
</div>
 {% endblock %}", "home.html.twig", "C:\\wamp64\\www\\symfony\\Facetagram\\templates\\home.html.twig");
    }
}
