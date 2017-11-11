<?php

/* default/signup.html.twig */
class __TwigTemplate_7772f84330b7b88bd393763987dbbe417623d40024268cad62496b35616a0ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/signup.html.twig", 1);
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
        $__internal_379cd18c451804da992ea8c9bcf95c41d4e78a07b1c6797a3891f32e21d542fd = $this->env->getExtension("native_profiler");
        $__internal_379cd18c451804da992ea8c9bcf95c41d4e78a07b1c6797a3891f32e21d542fd->enter($__internal_379cd18c451804da992ea8c9bcf95c41d4e78a07b1c6797a3891f32e21d542fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_379cd18c451804da992ea8c9bcf95c41d4e78a07b1c6797a3891f32e21d542fd->leave($__internal_379cd18c451804da992ea8c9bcf95c41d4e78a07b1c6797a3891f32e21d542fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d5aa531240fbe838f70ea193974de930ca23bd5c74a2db87c02a7cfe03a5092 = $this->env->getExtension("native_profiler");
        $__internal_8d5aa531240fbe838f70ea193974de930ca23bd5c74a2db87c02a7cfe03a5092->enter($__internal_8d5aa531240fbe838f70ea193974de930ca23bd5c74a2db87c02a7cfe03a5092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Sign up</h2>
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
        
        $__internal_8d5aa531240fbe838f70ea193974de930ca23bd5c74a2db87c02a7cfe03a5092->leave($__internal_8d5aa531240fbe838f70ea193974de930ca23bd5c74a2db87c02a7cfe03a5092_prof);

    }

    public function getTemplateName()
    {
        return "default/signup.html.twig";
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
/*     <h2>Sign up</h2>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
/* */
