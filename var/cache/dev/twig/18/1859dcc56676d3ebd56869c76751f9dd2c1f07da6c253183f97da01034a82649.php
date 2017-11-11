<?php

/* default/myprofile.html.twig */
class __TwigTemplate_39bea75acab6ecf85c6ba163ea545cf43edf371f1c6dbcfd2f4a32218803cbf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/myprofile.html.twig", 1);
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
        $__internal_cb707db6bb240dd2cabfd51a356723a8c86471b91492437e92e09a1a492847e8 = $this->env->getExtension("native_profiler");
        $__internal_cb707db6bb240dd2cabfd51a356723a8c86471b91492437e92e09a1a492847e8->enter($__internal_cb707db6bb240dd2cabfd51a356723a8c86471b91492437e92e09a1a492847e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/myprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb707db6bb240dd2cabfd51a356723a8c86471b91492437e92e09a1a492847e8->leave($__internal_cb707db6bb240dd2cabfd51a356723a8c86471b91492437e92e09a1a492847e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c93babcbe2ea70208e44c7884772d4f82bc84621487b2dbb498a84bccd35cf96 = $this->env->getExtension("native_profiler");
        $__internal_c93babcbe2ea70208e44c7884772d4f82bc84621487b2dbb498a84bccd35cf96->enter($__internal_c93babcbe2ea70208e44c7884772d4f82bc84621487b2dbb498a84bccd35cf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <h5>Money: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "money", array()), "html", null, true);
        echo "\$</h5>
    <a href=\"/addmoney\" class=\"btn btn-link\">";
        // line 9
        if ((is_string($__internal_5d509bfb2f0dd4ca9c5ae8b2fc3a9275ffee495be5d537a50ddebc5451ac300c = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "type", array())) && is_string($__internal_43dbef31f74fe78b91f940b7fc389c3482f8e146a3832335c7fe74c628f50206 = "N") && ('' === $__internal_43dbef31f74fe78b91f940b7fc389c3482f8e146a3832335c7fe74c628f50206 || 0 === strpos($__internal_5d509bfb2f0dd4ca9c5ae8b2fc3a9275ffee495be5d537a50ddebc5451ac300c, $__internal_43dbef31f74fe78b91f940b7fc389c3482f8e146a3832335c7fe74c628f50206)))) {
            echo " Add Money ";
        }
        echo "</a>
    <a href=\"/payment\" class=\"btn btn-link\">Get your money</a>
    ";
        // line 11
        if (( !twig_test_empty((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))) ||  !twig_test_empty((isset($context["ownedNews"]) ? $context["ownedNews"] : $this->getContext($context, "ownedNews"))))) {
            // line 12
            echo "    <h2>Your news:</h2>
    ";
        } else {
            // line 14
            echo "        <h2> You haven't added any news so far!</h2>
        ";
        }
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"/photo/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "\" alt=\"...\">
                <div class=\"caption\">
                    <h3>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "</h3>
                    <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "place", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", array()), "html", null, true);
            echo "</p>
                    <p> Uploaded at: ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "uploadDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</p>
                    <p>Price: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "price", array()), "html", null, true);
            echo "\$</p>
                    ";
            // line 27
            if (($this->getAttribute($context["i"], "boughtBy", array()) != null)) {
                echo " <h4>Bought by <a href=\"newsdetails/profile/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "buyerId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "boughtBy", array()), "html", null, true);
                echo "</a></h4>";
            }
            // line 28
            echo "                    <a href=\"/newsdetails/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">See more details</a>
                    ";
            // line 29
            if (($this->getAttribute($context["i"], "boughtBy", array()) == null)) {
                echo " <a href=\"/delete/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete These News</a> ";
            }
            // line 30
            echo "                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ownedNews"]) ? $context["ownedNews"] : $this->getContext($context, "ownedNews")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"/photo/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "\" alt=\"...\">
                <div class=\"caption\">
                    <h3>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "title", array()), "html", null, true);
            echo "</h3>
                    <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "place", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", array()), "html", null, true);
            echo "</p>
                    <p> Uploaded at: ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "uploadDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</p>
                    ";
            // line 46
            if (($this->getAttribute($context["i"], "boughtBy", array()) != null)) {
                echo " <h4>Bought by <a href=\"newsdetails/profile/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "buyerId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "boughtBy", array()), "html", null, true);
                echo "</a></h4>";
            }
            // line 47
            echo "                    <a href=\"/newsdetails/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">See more details</a>
                    <a href=\"/delete/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete These News</a>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "   
    
";
        
        $__internal_c93babcbe2ea70208e44c7884772d4f82bc84621487b2dbb498a84bccd35cf96->leave($__internal_c93babcbe2ea70208e44c7884772d4f82bc84621487b2dbb498a84bccd35cf96_prof);

    }

    public function getTemplateName()
    {
        return "default/myprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 54,  192 => 48,  187 => 47,  179 => 46,  175 => 45,  171 => 44,  167 => 43,  163 => 42,  158 => 40,  153 => 37,  149 => 36,  146 => 35,  136 => 30,  130 => 29,  125 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  92 => 20,  87 => 17,  82 => 16,  78 => 14,  74 => 12,  72 => 11,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{user.name}}  ({{user.username}}) - {{user.city}}</h1>*/
/*     <h4>Email: {{user.email}}</h4>*/
/*     <h4>Phone number: {{user.phonenumber}}</h4>*/
/*     <h5>Joined at: {{user.uploadedAt|date('F j, Y, g:i a')}}</h5>*/
/*     <h5>Money: {{user.money}}$</h5>*/
/*     <a href="/addmoney" class="btn btn-link">{% if user.type starts with 'N' %} Add Money {% endif %}</a>*/
/*     <a href="/payment" class="btn btn-link">Get your money</a>*/
/*     {% if news is not empty or ownedNews is not empty%}*/
/*     <h2>Your news:</h2>*/
/*     {%else%}*/
/*         <h2> You haven't added any news so far!</h2>*/
/*         {% endif %}*/
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
/*                     {%if i.boughtBy != null %} <h4>Bought by <a href="newsdetails/profile/{{i.buyerId}}">{{i.boughtBy}}</a></h4>{% endif %}*/
/*                     <a href="/newsdetails/{{i.id}}" class="btn btn-primary" role="button">See more details</a>*/
/*                     {% if i.boughtBy == null %} <a href="/delete/{{i.id}}" class="btn btn-danger">Delete These News</a> {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*     */
/*     {% for i in ownedNews %}*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*                 <img src="/photo/{{i.title}}" alt="...">*/
/*                 <div class="caption">*/
/*                     <h3>{{i.title}}</h3>*/
/*                     <p>{{i.place}}</p>*/
/*                     <p>{{i.content}}</p>*/
/*                     <p> Uploaded at: {{i.uploadDate|date('F j, Y, g:i a')}}</p>*/
/*                     {%if i.boughtBy != null %} <h4>Bought by <a href="newsdetails/profile/{{i.buyerId}}">{{i.boughtBy}}</a></h4>{% endif %}*/
/*                     <a href="/newsdetails/{{i.id}}" class="btn btn-primary" role="button">See more details</a>*/
/*                     <a href="/delete/{{i.id}}" class="btn btn-danger">Delete These News</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*    */
/*     */
/* {% endblock %}*/
