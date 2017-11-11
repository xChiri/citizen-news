<?php

/* default/addmoney.html.twig */
class __TwigTemplate_9970bd23055c332e5aa6e5eb0c326a62958873551e4c07fcb09b14a382015d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/addmoney.html.twig", 1);
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
        $__internal_6d84136ebd362f8edbf8c5f7503ad024e893d8ac5c437989571adc43457b9457 = $this->env->getExtension("native_profiler");
        $__internal_6d84136ebd362f8edbf8c5f7503ad024e893d8ac5c437989571adc43457b9457->enter($__internal_6d84136ebd362f8edbf8c5f7503ad024e893d8ac5c437989571adc43457b9457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addmoney.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d84136ebd362f8edbf8c5f7503ad024e893d8ac5c437989571adc43457b9457->leave($__internal_6d84136ebd362f8edbf8c5f7503ad024e893d8ac5c437989571adc43457b9457_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12c98200c9873e84cfc50e5aaf0e00c66a6b9b1194c436033cc0e76fa0400f27 = $this->env->getExtension("native_profiler");
        $__internal_12c98200c9873e84cfc50e5aaf0e00c66a6b9b1194c436033cc0e76fa0400f27->enter($__internal_12c98200c9873e84cfc50e5aaf0e00c66a6b9b1194c436033cc0e76fa0400f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Add money</h2>
   <h3>Account balance: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "money", array()), "html", null, true);
        echo "\$</h3>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <a href=\"/myprofile\" class=\"btn btn-link\">Back to my profile</a>
";
        
        $__internal_12c98200c9873e84cfc50e5aaf0e00c66a6b9b1194c436033cc0e76fa0400f27->leave($__internal_12c98200c9873e84cfc50e5aaf0e00c66a6b9b1194c436033cc0e76fa0400f27_prof);

    }

    public function getTemplateName()
    {
        return "default/addmoney.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*    <h2>Add money</h2>*/
/*    <h3>Account balance: {{user.money}}$</h3>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/*     <a href="/myprofile" class="btn btn-link">Back to my profile</a>*/
/* {% endblock %}*/
/* */
