<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5aa196d4f983f2d4d64ad6d5506f8b1e3db230ada7f1f1510aad610f20e80de8 extends Twig_Template
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
        $__internal_0de7218de2e7d5706723e05a0b9a2a5f26300d1f8af578da22b1fe34ec3aabcd = $this->env->getExtension("native_profiler");
        $__internal_0de7218de2e7d5706723e05a0b9a2a5f26300d1f8af578da22b1fe34ec3aabcd->enter($__internal_0de7218de2e7d5706723e05a0b9a2a5f26300d1f8af578da22b1fe34ec3aabcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0de7218de2e7d5706723e05a0b9a2a5f26300d1f8af578da22b1fe34ec3aabcd->leave($__internal_0de7218de2e7d5706723e05a0b9a2a5f26300d1f8af578da22b1fe34ec3aabcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76251542e4fbce2fe5ac2c3ddac8293c70276b6c0f6f060eda92f7b76cf30403 = $this->env->getExtension("native_profiler");
        $__internal_76251542e4fbce2fe5ac2c3ddac8293c70276b6c0f6f060eda92f7b76cf30403->enter($__internal_76251542e4fbce2fe5ac2c3ddac8293c70276b6c0f6f060eda92f7b76cf30403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_76251542e4fbce2fe5ac2c3ddac8293c70276b6c0f6f060eda92f7b76cf30403->leave($__internal_76251542e4fbce2fe5ac2c3ddac8293c70276b6c0f6f060eda92f7b76cf30403_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0ed19d2fd45dd8b1407bb2ac9831891709ebd7fc5f6255b4c991e44d167561d = $this->env->getExtension("native_profiler");
        $__internal_d0ed19d2fd45dd8b1407bb2ac9831891709ebd7fc5f6255b4c991e44d167561d->enter($__internal_d0ed19d2fd45dd8b1407bb2ac9831891709ebd7fc5f6255b4c991e44d167561d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0ed19d2fd45dd8b1407bb2ac9831891709ebd7fc5f6255b4c991e44d167561d->leave($__internal_d0ed19d2fd45dd8b1407bb2ac9831891709ebd7fc5f6255b4c991e44d167561d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d09a9baba3ea0cafa3d09a623a766c9274952f73872d231d02d1c6b5a9548ca8 = $this->env->getExtension("native_profiler");
        $__internal_d09a9baba3ea0cafa3d09a623a766c9274952f73872d231d02d1c6b5a9548ca8->enter($__internal_d09a9baba3ea0cafa3d09a623a766c9274952f73872d231d02d1c6b5a9548ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d09a9baba3ea0cafa3d09a623a766c9274952f73872d231d02d1c6b5a9548ca8->leave($__internal_d09a9baba3ea0cafa3d09a623a766c9274952f73872d231d02d1c6b5a9548ca8_prof);

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
