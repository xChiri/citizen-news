<?php

/* default/photo.html.twig */
class __TwigTemplate_e966e4b297fa159717c13bc5794fd949402c45d1d86c35d8c8baa1b1bcb64389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/photo.html.twig", 1);
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
        $__internal_685ac01d36bc10f2bc3576c77a0591c8c31df33ddd265da0c0bb00dde2aa991f = $this->env->getExtension("native_profiler");
        $__internal_685ac01d36bc10f2bc3576c77a0591c8c31df33ddd265da0c0bb00dde2aa991f->enter($__internal_685ac01d36bc10f2bc3576c77a0591c8c31df33ddd265da0c0bb00dde2aa991f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/photo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685ac01d36bc10f2bc3576c77a0591c8c31df33ddd265da0c0bb00dde2aa991f->leave($__internal_685ac01d36bc10f2bc3576c77a0591c8c31df33ddd265da0c0bb00dde2aa991f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84b9c9dd01d8ea30c0622fee85ce04f55a307315c57b11cd6d79e47410b7f4a6 = $this->env->getExtension("native_profiler");
        $__internal_84b9c9dd01d8ea30c0622fee85ce04f55a307315c57b11cd6d79e47410b7f4a6->enter($__internal_84b9c9dd01d8ea30c0622fee85ce04f55a307315c57b11cd6d79e47410b7f4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   
";
        
        $__internal_84b9c9dd01d8ea30c0622fee85ce04f55a307315c57b11cd6d79e47410b7f4a6->leave($__internal_84b9c9dd01d8ea30c0622fee85ce04f55a307315c57b11cd6d79e47410b7f4a6_prof);

    }

    public function getTemplateName()
    {
        return "default/photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*    */
/* {% endblock %}*/
/* */
