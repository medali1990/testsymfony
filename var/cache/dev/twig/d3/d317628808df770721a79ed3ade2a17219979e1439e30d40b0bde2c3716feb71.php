<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f353a8ed76566ec8fd7cf492262634d295d42c53c0a7fdb4ef301e000f3cbf5 extends Twig_Template
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
        $__internal_227beb128b3ede8e6cf2bccb65d6e64f1a38ec1321d26b8da452e82a1be939ec = $this->env->getExtension("native_profiler");
        $__internal_227beb128b3ede8e6cf2bccb65d6e64f1a38ec1321d26b8da452e82a1be939ec->enter($__internal_227beb128b3ede8e6cf2bccb65d6e64f1a38ec1321d26b8da452e82a1be939ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227beb128b3ede8e6cf2bccb65d6e64f1a38ec1321d26b8da452e82a1be939ec->leave($__internal_227beb128b3ede8e6cf2bccb65d6e64f1a38ec1321d26b8da452e82a1be939ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c02fafab3f467d9321eb432a2ea558bea7a8bc63d01fd7a13a0994aef41abcc1 = $this->env->getExtension("native_profiler");
        $__internal_c02fafab3f467d9321eb432a2ea558bea7a8bc63d01fd7a13a0994aef41abcc1->enter($__internal_c02fafab3f467d9321eb432a2ea558bea7a8bc63d01fd7a13a0994aef41abcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c02fafab3f467d9321eb432a2ea558bea7a8bc63d01fd7a13a0994aef41abcc1->leave($__internal_c02fafab3f467d9321eb432a2ea558bea7a8bc63d01fd7a13a0994aef41abcc1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99cb8ff1d024c3c5227111df9bbc016206dfda7e906dfa3845a5fd62c58f397d = $this->env->getExtension("native_profiler");
        $__internal_99cb8ff1d024c3c5227111df9bbc016206dfda7e906dfa3845a5fd62c58f397d->enter($__internal_99cb8ff1d024c3c5227111df9bbc016206dfda7e906dfa3845a5fd62c58f397d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99cb8ff1d024c3c5227111df9bbc016206dfda7e906dfa3845a5fd62c58f397d->leave($__internal_99cb8ff1d024c3c5227111df9bbc016206dfda7e906dfa3845a5fd62c58f397d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_553cbbee286b449de2baa6636f3ba0c7f2ec56b64bc8fb66496228da972664c6 = $this->env->getExtension("native_profiler");
        $__internal_553cbbee286b449de2baa6636f3ba0c7f2ec56b64bc8fb66496228da972664c6->enter($__internal_553cbbee286b449de2baa6636f3ba0c7f2ec56b64bc8fb66496228da972664c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_553cbbee286b449de2baa6636f3ba0c7f2ec56b64bc8fb66496228da972664c6->leave($__internal_553cbbee286b449de2baa6636f3ba0c7f2ec56b64bc8fb66496228da972664c6_prof);

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
