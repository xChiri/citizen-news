<?php

/* default/signin.html.twig */
class __TwigTemplate_1983d1fe969c4919b8f33812d78eeb601b455888a20ed7df6700de8b3fd7febe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/signin.html.twig", 1);
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
        $__internal_c82b48a49781d363cec7fbe63446413717f5f7a13741c915b14f0f53970c02dd = $this->env->getExtension("native_profiler");
        $__internal_c82b48a49781d363cec7fbe63446413717f5f7a13741c915b14f0f53970c02dd->enter($__internal_c82b48a49781d363cec7fbe63446413717f5f7a13741c915b14f0f53970c02dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82b48a49781d363cec7fbe63446413717f5f7a13741c915b14f0f53970c02dd->leave($__internal_c82b48a49781d363cec7fbe63446413717f5f7a13741c915b14f0f53970c02dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_083f30bdbfb9aa36f02eae0ab56eac980c55e7446c1dcc62fe6a4b03b3041d09 = $this->env->getExtension("native_profiler");
        $__internal_083f30bdbfb9aa36f02eae0ab56eac980c55e7446c1dcc62fe6a4b03b3041d09->enter($__internal_083f30bdbfb9aa36f02eae0ab56eac980c55e7446c1dcc62fe6a4b03b3041d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <a href=\"/forgotpassword\" class=\"btn btn-link\">Forgot your password?</a>
";
        
        $__internal_083f30bdbfb9aa36f02eae0ab56eac980c55e7446c1dcc62fe6a4b03b3041d09->leave($__internal_083f30bdbfb9aa36f02eae0ab56eac980c55e7446c1dcc62fe6a4b03b3041d09_prof);

    }

    public function getTemplateName()
    {
        return "default/signin.html.twig";
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
/*     <a href="/forgotpassword" class="btn btn-link">Forgot your password?</a>*/
/* {% endblock %}*/
/* */
