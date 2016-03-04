<?php

/* base.html.twig */
class __TwigTemplate_596dd10809b211516ae6071c3f041e234dc0dca318acb3f78d034f5ad7b4d5af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18d3ea92491f1ae4fc6dec1a145713a7cabd8d54280d6ec3f99f327ee084c1c3 = $this->env->getExtension("native_profiler");
        $__internal_18d3ea92491f1ae4fc6dec1a145713a7cabd8d54280d6ec3f99f327ee084c1c3->enter($__internal_18d3ea92491f1ae4fc6dec1a145713a7cabd8d54280d6ec3f99f327ee084c1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_18d3ea92491f1ae4fc6dec1a145713a7cabd8d54280d6ec3f99f327ee084c1c3->leave($__internal_18d3ea92491f1ae4fc6dec1a145713a7cabd8d54280d6ec3f99f327ee084c1c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0d5b90ab937b1128bf21e5bc40e3f0e08b0d58cf84e0bb9ba89442597e0dfb2 = $this->env->getExtension("native_profiler");
        $__internal_c0d5b90ab937b1128bf21e5bc40e3f0e08b0d58cf84e0bb9ba89442597e0dfb2->enter($__internal_c0d5b90ab937b1128bf21e5bc40e3f0e08b0d58cf84e0bb9ba89442597e0dfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c0d5b90ab937b1128bf21e5bc40e3f0e08b0d58cf84e0bb9ba89442597e0dfb2->leave($__internal_c0d5b90ab937b1128bf21e5bc40e3f0e08b0d58cf84e0bb9ba89442597e0dfb2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_763475943ca7bea37099f0c2ce0c95b4ac24a5d42e896a87779efe3712dfa8d1 = $this->env->getExtension("native_profiler");
        $__internal_763475943ca7bea37099f0c2ce0c95b4ac24a5d42e896a87779efe3712dfa8d1->enter($__internal_763475943ca7bea37099f0c2ce0c95b4ac24a5d42e896a87779efe3712dfa8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_763475943ca7bea37099f0c2ce0c95b4ac24a5d42e896a87779efe3712dfa8d1->leave($__internal_763475943ca7bea37099f0c2ce0c95b4ac24a5d42e896a87779efe3712dfa8d1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c89623c0fa3a865561c303f59e0c90338327ba800eaad27ec174ad8723568bd3 = $this->env->getExtension("native_profiler");
        $__internal_c89623c0fa3a865561c303f59e0c90338327ba800eaad27ec174ad8723568bd3->enter($__internal_c89623c0fa3a865561c303f59e0c90338327ba800eaad27ec174ad8723568bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c89623c0fa3a865561c303f59e0c90338327ba800eaad27ec174ad8723568bd3->leave($__internal_c89623c0fa3a865561c303f59e0c90338327ba800eaad27ec174ad8723568bd3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4831f97df090d71fe94f25ff0ddc9cf8881928f672993b38972bc690a2ea824 = $this->env->getExtension("native_profiler");
        $__internal_a4831f97df090d71fe94f25ff0ddc9cf8881928f672993b38972bc690a2ea824->enter($__internal_a4831f97df090d71fe94f25ff0ddc9cf8881928f672993b38972bc690a2ea824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4831f97df090d71fe94f25ff0ddc9cf8881928f672993b38972bc690a2ea824->leave($__internal_a4831f97df090d71fe94f25ff0ddc9cf8881928f672993b38972bc690a2ea824_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
