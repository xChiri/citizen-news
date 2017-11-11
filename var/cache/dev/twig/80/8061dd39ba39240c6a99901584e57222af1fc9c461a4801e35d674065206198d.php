<?php

/* default/forgotpassword.html.twig */
class __TwigTemplate_7309bd1d0ae726b09de3574241fdc1b2a63cce36861874acc961f5b219626e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/forgotpassword.html.twig", 1);
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
        $__internal_ff958bb0980d3a367c52bf2675213646353c4fe71ba0ac91c1002e5f6220db05 = $this->env->getExtension("native_profiler");
        $__internal_ff958bb0980d3a367c52bf2675213646353c4fe71ba0ac91c1002e5f6220db05->enter($__internal_ff958bb0980d3a367c52bf2675213646353c4fe71ba0ac91c1002e5f6220db05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/forgotpassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff958bb0980d3a367c52bf2675213646353c4fe71ba0ac91c1002e5f6220db05->leave($__internal_ff958bb0980d3a367c52bf2675213646353c4fe71ba0ac91c1002e5f6220db05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d37ab42aaf7e0956643a35bbf30dd2d16b7a34e2cc5b3842467604936812a93 = $this->env->getExtension("native_profiler");
        $__internal_9d37ab42aaf7e0956643a35bbf30dd2d16b7a34e2cc5b3842467604936812a93->enter($__internal_9d37ab42aaf7e0956643a35bbf30dd2d16b7a34e2cc5b3842467604936812a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Sign in</h2>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9d37ab42aaf7e0956643a35bbf30dd2d16b7a34e2cc5b3842467604936812a93->leave($__internal_9d37ab42aaf7e0956643a35bbf30dd2d16b7a34e2cc5b3842467604936812a93_prof);

    }

    public function getTemplateName()
    {
        return "default/forgotpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*    <h2>Sign in</h2>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
/* */
