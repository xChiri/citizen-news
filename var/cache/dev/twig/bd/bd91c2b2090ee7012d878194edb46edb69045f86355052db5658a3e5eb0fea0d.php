<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c51ba9ff416ae681432313ca4302ec483c2c120cfc075545ee15d20b3783af3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5506b06b13908abeaa70933c6d24aef06279c8f5ccf77098fffa67ae6708ee8 = $this->env->getExtension("native_profiler");
        $__internal_e5506b06b13908abeaa70933c6d24aef06279c8f5ccf77098fffa67ae6708ee8->enter($__internal_e5506b06b13908abeaa70933c6d24aef06279c8f5ccf77098fffa67ae6708ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5506b06b13908abeaa70933c6d24aef06279c8f5ccf77098fffa67ae6708ee8->leave($__internal_e5506b06b13908abeaa70933c6d24aef06279c8f5ccf77098fffa67ae6708ee8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_218f88000d34977012ffba979b3f236eba4dd193bee0154521a8429fa63a352d = $this->env->getExtension("native_profiler");
        $__internal_218f88000d34977012ffba979b3f236eba4dd193bee0154521a8429fa63a352d->enter($__internal_218f88000d34977012ffba979b3f236eba4dd193bee0154521a8429fa63a352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_218f88000d34977012ffba979b3f236eba4dd193bee0154521a8429fa63a352d->leave($__internal_218f88000d34977012ffba979b3f236eba4dd193bee0154521a8429fa63a352d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a75347667773269ead2700d7b45018c59188dec4aadc441ddcc6191ec6991ea = $this->env->getExtension("native_profiler");
        $__internal_7a75347667773269ead2700d7b45018c59188dec4aadc441ddcc6191ec6991ea->enter($__internal_7a75347667773269ead2700d7b45018c59188dec4aadc441ddcc6191ec6991ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a75347667773269ead2700d7b45018c59188dec4aadc441ddcc6191ec6991ea->leave($__internal_7a75347667773269ead2700d7b45018c59188dec4aadc441ddcc6191ec6991ea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b1fa8e341f1d0b9d4213514b88e81eaedffe5956c8aa76d2aa7ee75bc88a3c6 = $this->env->getExtension("native_profiler");
        $__internal_9b1fa8e341f1d0b9d4213514b88e81eaedffe5956c8aa76d2aa7ee75bc88a3c6->enter($__internal_9b1fa8e341f1d0b9d4213514b88e81eaedffe5956c8aa76d2aa7ee75bc88a3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b1fa8e341f1d0b9d4213514b88e81eaedffe5956c8aa76d2aa7ee75bc88a3c6->leave($__internal_9b1fa8e341f1d0b9d4213514b88e81eaedffe5956c8aa76d2aa7ee75bc88a3c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
