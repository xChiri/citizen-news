<?php

/* default/profile.html.twig */
class __TwigTemplate_eab0a93088814887b7c809d04d1109151a7a01cc0942dfa4fcdb7a7d935ab971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/profile.html.twig", 1);
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
        $__internal_3ac5eafdfe9feb76fdb4071c59970c8a40c045bfc6ba296437b66e3b4e9e2374 = $this->env->getExtension("native_profiler");
        $__internal_3ac5eafdfe9feb76fdb4071c59970c8a40c045bfc6ba296437b66e3b4e9e2374->enter($__internal_3ac5eafdfe9feb76fdb4071c59970c8a40c045bfc6ba296437b66e3b4e9e2374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac5eafdfe9feb76fdb4071c59970c8a40c045bfc6ba296437b66e3b4e9e2374->leave($__internal_3ac5eafdfe9feb76fdb4071c59970c8a40c045bfc6ba296437b66e3b4e9e2374_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c23bb44dad00ff7403a91c497d989993022f05cdb2863e16b5b264306a3f325b = $this->env->getExtension("native_profiler");
        $__internal_c23bb44dad00ff7403a91c497d989993022f05cdb2863e16b5b264306a3f325b->enter($__internal_c23bb44dad00ff7403a91c497d989993022f05cdb2863e16b5b264306a3f325b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "  (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo ") - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</h1>
    <h4>Email: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h4>
    <h4>Phone number: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber", array()), "html", null, true);
        echo "</h4>
    <h5>Joined at: ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "uploadedAt", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</h5>
    
    <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "'s news:</h2>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"/photo/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "\" alt=\"...\">
                <div class=\"caption\">
                    <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "</h3>
                    <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "place", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", array()), "html", null, true);
            echo "</p>
                    <p> Uploaded at: ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "uploadDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</p>
                    <p>Price: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "price", array()), "html", null, true);
            echo "\$</p>
                    ";
            // line 21
            if (($this->getAttribute($context["i"], "boughtBy", array()) != null)) {
                echo " <h4>Bought by <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "buyerId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "boughtBy", array()), "html", null, true);
                echo "</a></h4> ";
            }
            // line 22
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
        // line 28
        echo "    
     ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ownedNews"]) ? $context["ownedNews"] : $this->getContext($context, "ownedNews")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"/photo/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "\" alt=\"...\">
                <div class=\"caption\">
                    <h3>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "</h3>
                    <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "place", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", array()), "html", null, true);
            echo "</p>
                    <p> Uploaded at: ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "uploadDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</p>
                    <p>Price: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "price", array()), "html", null, true);
            echo "\$</p>
                    ";
            // line 40
            if (($this->getAttribute($context["i"], "boughtBy", array()) != null)) {
                echo " <h4>Bought by <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "buyerId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "boughtBy", array()), "html", null, true);
                echo "</a></h4> ";
            }
            // line 41
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
        // line 47
        echo "   
    
";
        
        $__internal_c23bb44dad00ff7403a91c497d989993022f05cdb2863e16b5b264306a3f325b->leave($__internal_c23bb44dad00ff7403a91c497d989993022f05cdb2863e16b5b264306a3f325b_prof);

    }

    public function getTemplateName()
    {
        return "default/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 47,  166 => 41,  158 => 40,  154 => 39,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  133 => 33,  128 => 30,  124 => 29,  121 => 28,  108 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  75 => 14,  70 => 11,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{user.name}}  ({{user.username}}) - {{user.city}}</h1>*/
/*     <h4>Email: {{user.email}}</h4>*/
/*     <h4>Phone number: {{user.phonenumber}}</h4>*/
/*     <h5>Joined at: {{user.uploadedAt|date('F j, Y, g:i a')}}</h5>*/
/*     */
/*     <h2>{{user.name}}'s news:</h2>*/
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
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*     */
/*      {% for i in ownedNews %}*/
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
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*    */
/*     */
/* {% endblock %}*/
