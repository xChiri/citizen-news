<?php

/* default/newsdetails.html.twig */
class __TwigTemplate_402c2c4f2f5789bb3822b6b7293ce3840741a8283f4abb074f5c7ffd36f1905c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/newsdetails.html.twig", 1);
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
        $__internal_24592896af4a1737e595b727f7b663ba7d0b4e5df72e332ac547d4c645294260 = $this->env->getExtension("native_profiler");
        $__internal_24592896af4a1737e595b727f7b663ba7d0b4e5df72e332ac547d4c645294260->enter($__internal_24592896af4a1737e595b727f7b663ba7d0b4e5df72e332ac547d4c645294260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/newsdetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24592896af4a1737e595b727f7b663ba7d0b4e5df72e332ac547d4c645294260->leave($__internal_24592896af4a1737e595b727f7b663ba7d0b4e5df72e332ac547d4c645294260_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aecd11a13ad1cc9cd7c55a57c16ae8c21bb109ad37ab0f098d6f872afc520d9 = $this->env->getExtension("native_profiler");
        $__internal_9aecd11a13ad1cc9cd7c55a57c16ae8c21bb109ad37ab0f098d6f872afc520d9->enter($__internal_9aecd11a13ad1cc9cd7c55a57c16ae8c21bb109ad37ab0f098d6f872afc520d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title", array()), "html", null, true);
        echo " in ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "place", array()), "html", null, true);
        echo "</h1>
    <img src=\"/photo/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title", array()), "html", null, true);
        echo "\" width=\"500em\"/>
    <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "content", array()), "html", null, true);
        echo "</h4>
    <h5> Uploaded by: <a href=\"profile/";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "uploaderId", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "uploadedBy", array()), "html", null, true);
        echo "</a> at: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "uploadDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</h5>
    ";
        // line 8
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "bought", array()) == false)) {
            // line 9
            echo "    <h3>Price: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "price", array()), "html", null, true);
            echo "\$</h3>
    ";
            // line 10
            if ((array_key_exists("type", $context) && (is_string($__internal_c7fbf69d46475001f85204e7cbb427d69b4e81c0de3577f99b88c7ce28fffe8b = (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) && is_string($__internal_7397fb60a0666336d3494fa0af0e33e205a9930c6b3cd370ef90586c4926d726 = "N") && ('' === $__internal_7397fb60a0666336d3494fa0af0e33e205a9930c6b3cd370ef90586c4926d726 || 0 === strpos($__internal_c7fbf69d46475001f85204e7cbb427d69b4e81c0de3577f99b88c7ce28fffe8b, $__internal_7397fb60a0666336d3494fa0af0e33e205a9930c6b3cd370ef90586c4926d726))))) {
                echo "<a href=\"/buy/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">Buy the right for these news</a> ";
            }
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        <h3>Already Bought! <a href=\"profile/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "buyerId", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "boughtBy", array()), "html", null, true);
            echo " </a> has the rights for these news!</h3>
    ";
        }
        // line 14
        echo "    
    ";
        // line 15
        if ((array_key_exists("name", $context) && (twig_lower_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "boughtBy", array())) != twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))))) {
            // line 16
            echo "        <h3>Leave a comment:</h3>
        ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        ";
            // line 19
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
        <p></p>
    ";
        }
        // line 22
        echo "    ";
        $context["com"] = false;
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute($context["i"], "newsId", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                echo " ";
                $context["com"] = true;
                echo " ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        if (((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")) == true)) {
            // line 25
            echo "    <h3>Comments:</h3>
    ";
        } else {
            // line 27
            echo "        <h3>Not comments left yet!</h3>
        ";
        }
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "            ";
            if (($this->getAttribute($context["i"], "newsId", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 31
                echo "            <div class=\"alert alert-info\"><h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "letBy", array()), "html", null, true);
                echo " at ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "uploadedAt", array()), "F j, Y, g:i a"), "html", null, true);
                echo "</h4>
                <p>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", array()), "html", null, true);
                echo "</p>
                ";
                // line 33
                if (array_key_exists("name", $context)) {
                    // line 34
                    echo "                ";
                    if ((((twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) == twig_lower_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "uploadedBy", array()))) || (twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) == twig_lower_filter($this->env, $this->getAttribute($context["i"], "letBy", array())))) || (twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) == twig_lower_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "boughtBy", array()))))) {
                        echo " <a href=\"/deletecomment/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                        echo "\" class=\"btn btn-danger\" >Delete your comment</a> ";
                    }
                    echo " </div>
                ";
                }
                // line 36
                echo "                <p></p>
            ";
            }
            // line 38
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
   
    
";
        
        $__internal_9aecd11a13ad1cc9cd7c55a57c16ae8c21bb109ad37ab0f098d6f872afc520d9->leave($__internal_9aecd11a13ad1cc9cd7c55a57c16ae8c21bb109ad37ab0f098d6f872afc520d9_prof);

    }

    public function getTemplateName()
    {
        return "default/newsdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 38,  169 => 36,  159 => 34,  157 => 33,  153 => 32,  146 => 31,  143 => 30,  138 => 29,  134 => 27,  130 => 25,  127 => 24,  112 => 23,  109 => 22,  103 => 19,  99 => 18,  95 => 17,  92 => 16,  90 => 15,  87 => 14,  79 => 12,  76 => 11,  70 => 10,  65 => 9,  63 => 8,  55 => 7,  51 => 6,  47 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{news.title}} in {{news.place}}</h1>*/
/*     <img src="/photo/{{news.title}}" width="500em"/>*/
/*     <h4>{{news.content}}</h4>*/
/*     <h5> Uploaded by: <a href="profile/{{news.uploaderId}}">{{news.uploadedBy}}</a> at: {{news.uploadDate|date('F j, Y, g:i a')}}</h5>*/
/*     {% if news.bought == false %}*/
/*     <h3>Price: {{news.price}}$</h3>*/
/*     {% if type is defined and type starts with 'N' %}<a href="/buy/{{news.id}}" class="btn btn-success">Buy the right for these news</a> {% endif %}*/
/*     {% else %}*/
/*         <h3>Already Bought! <a href="profile/{{news.buyerId}}"> {{news.boughtBy}} </a> has the rights for these news!</h3>*/
/*     {% endif %}*/
/*     */
/*     {% if name is defined and news.boughtBy|lower != name|lower %}*/
/*         <h3>Leave a comment:</h3>*/
/*         {{form_start(form)}}*/
/*         {{form_widget(form)}}*/
/*         {{form_end(form)}}*/
/*         <p></p>*/
/*     {% endif %}*/
/*     {% set com = false%}*/
/*     {% for i in comments %} {%if i.newsId == id %} {% set com = true %} {% endif %}{%endfor %}*/
/*     {% if com == true %}*/
/*     <h3>Comments:</h3>*/
/*     {%else%}*/
/*         <h3>Not comments left yet!</h3>*/
/*         {%endif%}*/
/*         {% for i in comments %}*/
/*             {% if i.newsId == id %}*/
/*             <div class="alert alert-info"><h4>{{i.letBy}} at {{i.uploadedAt|date('F j, Y, g:i a')}}</h4>*/
/*                 <p>{{i.content}}</p>*/
/*                 {% if name is defined %}*/
/*                 {%if name|lower == news.uploadedBy|lower or name|lower == i.letBy|lower or name|lower == news.boughtBy|lower %} <a href="/deletecomment/{{i.id}}" class="btn btn-danger" >Delete your comment</a> {%endif %} </div>*/
/*                 {% endif %}*/
/*                 <p></p>*/
/*             {% endif %}*/
/*         {%endfor %}    */
/*    */
/*     */
/* {% endblock %}*/
