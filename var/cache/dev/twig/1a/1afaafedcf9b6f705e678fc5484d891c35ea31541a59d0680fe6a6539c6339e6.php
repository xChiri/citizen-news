<?php

/* default/editmyprofile.html.twig */
class __TwigTemplate_e5548f79c74cd714cedc07a402c9684d4b973bbfee9e811af0c26fc2fa7bc8a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/editmyprofile.html.twig", 1);
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
        $__internal_b537855cbd4a2bbef6011cdff2d5fa09d52939d75d76f87500afec7577fd0742 = $this->env->getExtension("native_profiler");
        $__internal_b537855cbd4a2bbef6011cdff2d5fa09d52939d75d76f87500afec7577fd0742->enter($__internal_b537855cbd4a2bbef6011cdff2d5fa09d52939d75d76f87500afec7577fd0742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/editmyprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b537855cbd4a2bbef6011cdff2d5fa09d52939d75d76f87500afec7577fd0742->leave($__internal_b537855cbd4a2bbef6011cdff2d5fa09d52939d75d76f87500afec7577fd0742_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_736a1244e9ce8857d6f81fb4a589eda68b6ef9855fcad12f327f70f42a37b50b = $this->env->getExtension("native_profiler");
        $__internal_736a1244e9ce8857d6f81fb4a589eda68b6ef9855fcad12f327f70f42a37b50b->enter($__internal_736a1244e9ce8857d6f81fb4a589eda68b6ef9855fcad12f327f70f42a37b50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Update your info</h2>
   <a href=\"/myprofile\" class=\"btn btn-primary\">My profile</a>
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
    
";
        
        $__internal_736a1244e9ce8857d6f81fb4a589eda68b6ef9855fcad12f327f70f42a37b50b->leave($__internal_736a1244e9ce8857d6f81fb4a589eda68b6ef9855fcad12f327f70f42a37b50b_prof);

    }

    public function getTemplateName()
    {
        return "default/editmyprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*    <h2>Update your info</h2>*/
/*    <a href="/myprofile" class="btn btn-primary">My profile</a>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/*     */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
