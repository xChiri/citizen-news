<?php

/* default/payment.html.twig */
class __TwigTemplate_24d5f926f9b6300525d501a21b0799359d863af7768bcb8bf0239def7cec82bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/payment.html.twig", 1);
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
        $__internal_e39d34b331c307c404868508a76f1513d8efc3c5e7eb799a43f4577d5e9f1ece = $this->env->getExtension("native_profiler");
        $__internal_e39d34b331c307c404868508a76f1513d8efc3c5e7eb799a43f4577d5e9f1ece->enter($__internal_e39d34b331c307c404868508a76f1513d8efc3c5e7eb799a43f4577d5e9f1ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e39d34b331c307c404868508a76f1513d8efc3c5e7eb799a43f4577d5e9f1ece->leave($__internal_e39d34b331c307c404868508a76f1513d8efc3c5e7eb799a43f4577d5e9f1ece_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f870480b34e09388aca82e61cf1fee27e8b831bda52355a5b50e46351d86660 = $this->env->getExtension("native_profiler");
        $__internal_4f870480b34e09388aca82e61cf1fee27e8b831bda52355a5b50e46351d86660->enter($__internal_4f870480b34e09388aca82e61cf1fee27e8b831bda52355a5b50e46351d86660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Withdraw your money</h2>
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
        
        $__internal_4f870480b34e09388aca82e61cf1fee27e8b831bda52355a5b50e46351d86660->leave($__internal_4f870480b34e09388aca82e61cf1fee27e8b831bda52355a5b50e46351d86660_prof);

    }

    public function getTemplateName()
    {
        return "default/payment.html.twig";
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
/*    <h2>Withdraw your money</h2>*/
/*    <h3>Account balance: {{user.money}}$</h3>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/*     <a href="/myprofile" class="btn btn-link">Back to my profile</a>*/
/* {% endblock %}*/
/* */
