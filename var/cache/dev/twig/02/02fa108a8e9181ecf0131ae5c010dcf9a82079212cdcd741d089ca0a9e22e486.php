<?php

/* default/addnews.html.twig */
class __TwigTemplate_d23a9894a7435da44292b1a0f8ffa94c8be339966e0f43fcf555fa1cc8f4411a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/addnews.html.twig", 1);
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
        $__internal_275dbb0cce14165bd7a6209d2690a768ec24c8dbde85a831a74269df7791c1ab = $this->env->getExtension("native_profiler");
        $__internal_275dbb0cce14165bd7a6209d2690a768ec24c8dbde85a831a74269df7791c1ab->enter($__internal_275dbb0cce14165bd7a6209d2690a768ec24c8dbde85a831a74269df7791c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addnews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275dbb0cce14165bd7a6209d2690a768ec24c8dbde85a831a74269df7791c1ab->leave($__internal_275dbb0cce14165bd7a6209d2690a768ec24c8dbde85a831a74269df7791c1ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c497be3b3e2afdf45f6ced8997dcea83deeb6e18e30d40a15d114d812daee80 = $this->env->getExtension("native_profiler");
        $__internal_2c497be3b3e2afdf45f6ced8997dcea83deeb6e18e30d40a15d114d812daee80->enter($__internal_2c497be3b3e2afdf45f6ced8997dcea83deeb6e18e30d40a15d114d812daee80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Submit News</h2>
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
        
        $__internal_2c497be3b3e2afdf45f6ced8997dcea83deeb6e18e30d40a15d114d812daee80->leave($__internal_2c497be3b3e2afdf45f6ced8997dcea83deeb6e18e30d40a15d114d812daee80_prof);

    }

    public function getTemplateName()
    {
        return "default/addnews.html.twig";
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
/*    <h2>Submit News</h2>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
/* */
