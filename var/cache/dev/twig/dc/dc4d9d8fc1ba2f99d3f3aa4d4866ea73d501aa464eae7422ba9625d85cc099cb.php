<?php

/* base.html.twig */
class __TwigTemplate_c36f589fc7fb1339c858334aaedece97daec5e2970c08dcc2ccba6a6fecdbd5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d68434d04aaacbc09ba791fa1f3dfd745ad5fdcd067098185b3f5c1a939eaffb = $this->env->getExtension("native_profiler");
        $__internal_d68434d04aaacbc09ba791fa1f3dfd745ad5fdcd067098185b3f5c1a939eaffb->enter($__internal_d68434d04aaacbc09ba791fa1f3dfd745ad5fdcd067098185b3f5c1a939eaffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

   <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
  </head>

  <body>
      
      <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">Citizen News</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
           ";
        // line 37
        if ((array_key_exists("type", $context) && (is_string($__internal_0f3b3c3492cf95cbe2fd7e0258df1ca9ede39fbbd6c38e57b303ec2afddf6361 = (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) && is_string($__internal_59f7b6f1cec62374f9fc267bcbf29c45d21f8839875e3972c938f9edc11025ca = "C") && ('' === $__internal_59f7b6f1cec62374f9fc267bcbf29c45d21f8839875e3972c938f9edc11025ca || 0 === strpos($__internal_0f3b3c3492cf95cbe2fd7e0258df1ca9ede39fbbd6c38e57b303ec2afddf6361, $__internal_59f7b6f1cec62374f9fc267bcbf29c45d21f8839875e3972c938f9edc11025ca))))) {
            echo " <li><a href=\"/addnews\">Add News</a></li> ";
        }
        // line 38
        echo "          </ul>
             <form class=\"navbar-form navbar-right\">
            ";
        // line 40
        if (array_key_exists("name", $context)) {
            // line 41
            echo "                <a href=\"/\" class=\"btn btn-info\">Hello ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "!</a>
                    <a href=\"/myprofile\" class=\"btn btn-success\">See my profile</a>
                    <a href=\"/logout\" class=\"btn btn-danger\">Log out</a>
                ";
        } else {
            // line 45
            echo "            <a href=\"/signin\" class=\"btn btn-success\">Sign in</a>
            <a href=\"/signup\" class=\"btn btn-primary\">Sign up</a>
                ";
        }
        // line 48
        echo "          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 57
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "                
                 ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 62
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </div>
        </div>
    </div><!-- /.container -->
    
    

    ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    
  </body>
</html>

";
        
        $__internal_d68434d04aaacbc09ba791fa1f3dfd745ad5fdcd067098185b3f5c1a939eaffb->leave($__internal_d68434d04aaacbc09ba791fa1f3dfd745ad5fdcd067098185b3f5c1a939eaffb_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d48fc33ef848a767455c9775a22800ebb6ef9d1e960960a57e1253e1939d7cf = $this->env->getExtension("native_profiler");
        $__internal_3d48fc33ef848a767455c9775a22800ebb6ef9d1e960960a57e1253e1939d7cf->enter($__internal_3d48fc33ef848a767455c9775a22800ebb6ef9d1e960960a57e1253e1939d7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Citizen News";
        
        $__internal_3d48fc33ef848a767455c9775a22800ebb6ef9d1e960960a57e1253e1939d7cf->leave($__internal_3d48fc33ef848a767455c9775a22800ebb6ef9d1e960960a57e1253e1939d7cf_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4bbeeb921871d948d469085d9075f236b3684cd3510ce2fb596fc9de89c7326 = $this->env->getExtension("native_profiler");
        $__internal_c4bbeeb921871d948d469085d9075f236b3684cd3510ce2fb596fc9de89c7326->enter($__internal_c4bbeeb921871d948d469085d9075f236b3684cd3510ce2fb596fc9de89c7326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c4bbeeb921871d948d469085d9075f236b3684cd3510ce2fb596fc9de89c7326->leave($__internal_c4bbeeb921871d948d469085d9075f236b3684cd3510ce2fb596fc9de89c7326_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e2a2812a22869f3787202acafb1fa188728869506d97886995459d283f71917 = $this->env->getExtension("native_profiler");
        $__internal_1e2a2812a22869f3787202acafb1fa188728869506d97886995459d283f71917->enter($__internal_1e2a2812a22869f3787202acafb1fa188728869506d97886995459d283f71917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e2a2812a22869f3787202acafb1fa188728869506d97886995459d283f71917->leave($__internal_1e2a2812a22869f3787202acafb1fa188728869506d97886995459d283f71917_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77c1e085eb3fc2ed1b794e466a0c5efd3cb6988e626512c1c73888ea3a026121 = $this->env->getExtension("native_profiler");
        $__internal_77c1e085eb3fc2ed1b794e466a0c5efd3cb6988e626512c1c73888ea3a026121->enter($__internal_77c1e085eb3fc2ed1b794e466a0c5efd3cb6988e626512c1c73888ea3a026121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_77c1e085eb3fc2ed1b794e466a0c5efd3cb6988e626512c1c73888ea3a026121->leave($__internal_77c1e085eb3fc2ed1b794e466a0c5efd3cb6988e626512c1c73888ea3a026121_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 70,  181 => 59,  170 => 17,  158 => 12,  147 => 71,  145 => 70,  137 => 64,  128 => 62,  124 => 61,  121 => 60,  118 => 59,  109 => 57,  105 => 56,  95 => 48,  90 => 45,  82 => 41,  80 => 40,  76 => 38,  72 => 37,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*    <title>{% block title %}Citizen News{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     */
/*   </head>*/
/* */
/*   <body>*/
/*       */
/*       <nav class="navbar navbar-inverse">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="/">Citizen News</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*            {% if type is defined and type starts with 'C' %} <li><a href="/addnews">Add News</a></li> {%endif%}*/
/*           </ul>*/
/*              <form class="navbar-form navbar-right">*/
/*             {% if name is defined %}*/
/*                 <a href="/" class="btn btn-info">Hello {{name}}!</a>*/
/*                     <a href="/myprofile" class="btn btn-success">See my profile</a>*/
/*                     <a href="/logout" class="btn btn-danger">Log out</a>*/
/*                 {% else %}*/
/*             <a href="/signin" class="btn btn-success">Sign in</a>*/
/*             <a href="/signup" class="btn btn-primary">Sign up</a>*/
/*                 {% endif %}*/
/*           </form>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                     <div class="alert alert-success">{{flash_message}}</div>*/
/*                 {% endfor %}*/
/*                 {% block body %}{% endblock %}*/
/*                 */
/*                  {% for flash_message in app.session.flashbag.get('error') %}*/
/*                     <div class="alert alert-danger">{{flash_message}}</div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div><!-- /.container -->*/
/*     */
/*     */
/* */
/*     {% block javascripts %}{% endblock %}*/
/*     */
/*   </body>*/
/* </html>*/
/* */
/* */
