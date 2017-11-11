<?php

/* default/admin.html.twig */
class __TwigTemplate_f41754ccfac31c03c7de28bb8ce1d0390fa3faf38a931fdf80a83a64c2d35a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/admin.html.twig", 1);
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
        $__internal_747a367ad5e11488b2a554cb430ec92379a133bcd2cf7878e75f303872ff3b69 = $this->env->getExtension("native_profiler");
        $__internal_747a367ad5e11488b2a554cb430ec92379a133bcd2cf7878e75f303872ff3b69->enter($__internal_747a367ad5e11488b2a554cb430ec92379a133bcd2cf7878e75f303872ff3b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747a367ad5e11488b2a554cb430ec92379a133bcd2cf7878e75f303872ff3b69->leave($__internal_747a367ad5e11488b2a554cb430ec92379a133bcd2cf7878e75f303872ff3b69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5710e24a0f2fc46afc8ad9a3054ef3cc7327ff0592deedfc8583a6df9a2e0ef = $this->env->getExtension("native_profiler");
        $__internal_d5710e24a0f2fc46afc8ad9a3054ef3cc7327ff0592deedfc8583a6df9a2e0ef->enter($__internal_d5710e24a0f2fc46afc8ad9a3054ef3cc7327ff0592deedfc8583a6df9a2e0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   
    <h2>All the news on your website:</h2>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"/photo/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "\" alt=\"...\">
                <div class=\"caption\">
                    <h3>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "</h3>
                    <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "place", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", array()), "html", null, true);
            echo "</p>
                    <p> Uploaded at: ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "uploadDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</p>
                    <p>Price: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "price", array()), "html", null, true);
            echo "\$</p>
                    ";
            // line 17
            if (($this->getAttribute($context["i"], "boughtBy", array()) != null)) {
                echo " <h4>Bought by <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "buyerId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "boughtBy", array()), "html", null, true);
                echo "</a></h4> ";
            }
            // line 18
            echo "                    <p><a href=\"/newsdetails/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">See more details</a></p>
                    <a href=\"/deleteAsAdmin/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Delete these news</a>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
";
        
        $__internal_d5710e24a0f2fc46afc8ad9a3054ef3cc7327ff0592deedfc8583a6df9a2e0ef->leave($__internal_d5710e24a0f2fc46afc8ad9a3054ef3cc7327ff0592deedfc8583a6df9a2e0ef_prof);

    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  91 => 19,  86 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  53 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*    */
/*     <h2>All the news on your website:</h2>*/
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
/*                     <p>Price: {{i.price}}$</p>*/
/*                     {%if i.boughtBy != null %} <h4>Bought by <a href="{{i.buyerId}}">{{i.boughtBy}}</a></h4> {% endif %}*/
/*                     <p><a href="/newsdetails/{{i.id}}" class="btn btn-primary" role="button">See more details</a></p>*/
/*                     <a href="/deleteAsAdmin/{{i.id}}" class="btn btn-danger" role="button">Delete these news</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*     */
/* {% endblock %}*/
