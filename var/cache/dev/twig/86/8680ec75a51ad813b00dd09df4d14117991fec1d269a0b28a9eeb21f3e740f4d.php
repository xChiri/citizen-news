<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4347ce176d5bc311b75edfcdaa8c56a0bbe795b799941bd04bc0e1b54ab4d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37d5e857f92cfa20dd3209e351055d26c037657344519c5b831470d1e37003bb = $this->env->getExtension("native_profiler");
        $__internal_37d5e857f92cfa20dd3209e351055d26c037657344519c5b831470d1e37003bb->enter($__internal_37d5e857f92cfa20dd3209e351055d26c037657344519c5b831470d1e37003bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37d5e857f92cfa20dd3209e351055d26c037657344519c5b831470d1e37003bb->leave($__internal_37d5e857f92cfa20dd3209e351055d26c037657344519c5b831470d1e37003bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d863e030f790c93196c4957097591ff153fbe1c8c52cda0896d4cd48a0fdeca = $this->env->getExtension("native_profiler");
        $__internal_6d863e030f790c93196c4957097591ff153fbe1c8c52cda0896d4cd48a0fdeca->enter($__internal_6d863e030f790c93196c4957097591ff153fbe1c8c52cda0896d4cd48a0fdeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d863e030f790c93196c4957097591ff153fbe1c8c52cda0896d4cd48a0fdeca->leave($__internal_6d863e030f790c93196c4957097591ff153fbe1c8c52cda0896d4cd48a0fdeca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcf3dec59cba4a747c496b2108f02b3fc149b6a90c2d980080a39b06c66ebe99 = $this->env->getExtension("native_profiler");
        $__internal_bcf3dec59cba4a747c496b2108f02b3fc149b6a90c2d980080a39b06c66ebe99->enter($__internal_bcf3dec59cba4a747c496b2108f02b3fc149b6a90c2d980080a39b06c66ebe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bcf3dec59cba4a747c496b2108f02b3fc149b6a90c2d980080a39b06c66ebe99->leave($__internal_bcf3dec59cba4a747c496b2108f02b3fc149b6a90c2d980080a39b06c66ebe99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d42e8c93f313ea54d4319c899684755eb804b0d4c9872cc2e8fbf5f00f84e0bd = $this->env->getExtension("native_profiler");
        $__internal_d42e8c93f313ea54d4319c899684755eb804b0d4c9872cc2e8fbf5f00f84e0bd->enter($__internal_d42e8c93f313ea54d4319c899684755eb804b0d4c9872cc2e8fbf5f00f84e0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d42e8c93f313ea54d4319c899684755eb804b0d4c9872cc2e8fbf5f00f84e0bd->leave($__internal_d42e8c93f313ea54d4319c899684755eb804b0d4c9872cc2e8fbf5f00f84e0bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
