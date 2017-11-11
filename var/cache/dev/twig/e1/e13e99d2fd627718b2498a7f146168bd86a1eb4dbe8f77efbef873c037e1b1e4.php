<?php

/* default/index.html.twig */
class __TwigTemplate_f91f4fdc295988591dee82889f205ebec1deec0054cd05818f004a4f4d4596aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_750d4f81aa11111c076e63c7a8892da2e7558d0123f39c1753c6786e566bbb6d = $this->env->getExtension("native_profiler");
        $__internal_750d4f81aa11111c076e63c7a8892da2e7558d0123f39c1753c6786e566bbb6d->enter($__internal_750d4f81aa11111c076e63c7a8892da2e7558d0123f39c1753c6786e566bbb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750d4f81aa11111c076e63c7a8892da2e7558d0123f39c1753c6786e566bbb6d->leave($__internal_750d4f81aa11111c076e63c7a8892da2e7558d0123f39c1753c6786e566bbb6d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e548c0779dd633f485352e20c0a091671013febe5b0ac4fc45df193d8fa23670 = $this->env->getExtension("native_profiler");
        $__internal_e548c0779dd633f485352e20c0a091671013febe5b0ac4fc45df193d8fa23670->enter($__internal_e548c0779dd633f485352e20c0a091671013febe5b0ac4fc45df193d8fa23670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"/photo/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "\" alt=\"...\">
                <div class=\"caption\">
                    <h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "</h3>
                    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "place", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", array()), "html", null, true);
            echo "</p>
                    <p> Uploaded at: ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "uploadDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</p>
                    <p> By: <a href=\"newsdetails/profile/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "uploaderId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "uploadedBy", array()), "html", null, true);
            echo "</a> </p>
                    <p>Price: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "price", array()), "html", null, true);
            echo "\$</p>
                    ";
            // line 16
            if (($this->getAttribute($context["i"], "boughtBy", array()) != null)) {
                echo "<h4>Bought by <a href=\"newsdetails/profile/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "buyerId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "boughtBy", array()), "html", null, true);
                echo "</a></h4> ";
            }
            // line 17
            echo "                    <p><a href=\"/newsdetails/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">See more details</a></p>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    
";
        
        $__internal_e548c0779dd633f485352e20c0a091671013febe5b0ac4fc45df193d8fa23670->leave($__internal_e548c0779dd633f485352e20c0a091671013febe5b0ac4fc45df193d8fa23670_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  89 => 17,  81 => 16,  77 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  50 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for i in news %}*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*                 <img src="/photo/{{i.title}}" alt="...">*/
/*                 <div class="caption">*/
/*                     <h3>{{i.title}}</h3>*/
/*                     <p>{{i.place}}</p>*/
/*                     <p>{{i.content}}</p>*/
/*                     <p> Uploaded at: {{i.uploadDate|date('F j, Y, g:i a')}}</p>*/
/*                     <p> By: <a href="newsdetails/profile/{{i.uploaderId}}">{{i.uploadedBy}}</a> </p>*/
/*                     <p>Price: {{i.price}}$</p>*/
/*                     {% if i.boughtBy != null %}<h4>Bought by <a href="newsdetails/profile/{{i.buyerId}}">{{i.boughtBy}}</a></h4> {%endif%}*/
/*                     <p><a href="/newsdetails/{{i.id}}" class="btn btn-primary" role="button">See more details</a></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*     */
/* {% endblock %}*/
/* */
