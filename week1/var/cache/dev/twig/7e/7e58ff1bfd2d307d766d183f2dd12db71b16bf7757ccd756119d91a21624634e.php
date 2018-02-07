<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a810428d9d24d051f025cdf90765ff4c46f5e873f9ab25696f8e58b98ea52f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9bde5162b64999b33d985a5ea2b2d67255a9aa4ded9256f61cb3bc35bad194e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bde5162b64999b33d985a5ea2b2d67255a9aa4ded9256f61cb3bc35bad194e4->enter($__internal_9bde5162b64999b33d985a5ea2b2d67255a9aa4ded9256f61cb3bc35bad194e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b5eedc9f1d452887a8cd6f9a1da51229abb6a96c2e39e84f1cc4f7097d330ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5eedc9f1d452887a8cd6f9a1da51229abb6a96c2e39e84f1cc4f7097d330ac2->enter($__internal_b5eedc9f1d452887a8cd6f9a1da51229abb6a96c2e39e84f1cc4f7097d330ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bde5162b64999b33d985a5ea2b2d67255a9aa4ded9256f61cb3bc35bad194e4->leave($__internal_9bde5162b64999b33d985a5ea2b2d67255a9aa4ded9256f61cb3bc35bad194e4_prof);

        
        $__internal_b5eedc9f1d452887a8cd6f9a1da51229abb6a96c2e39e84f1cc4f7097d330ac2->leave($__internal_b5eedc9f1d452887a8cd6f9a1da51229abb6a96c2e39e84f1cc4f7097d330ac2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf777e36c69f266cf7d98b18427ce2fdfad07e3848fa769926833ff3cd36fc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf777e36c69f266cf7d98b18427ce2fdfad07e3848fa769926833ff3cd36fc95->enter($__internal_bf777e36c69f266cf7d98b18427ce2fdfad07e3848fa769926833ff3cd36fc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c877f35359bf2f17aacd3c32a5f6b5e24f53efbe979a3922c1c59e54ea2a941c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c877f35359bf2f17aacd3c32a5f6b5e24f53efbe979a3922c1c59e54ea2a941c->enter($__internal_c877f35359bf2f17aacd3c32a5f6b5e24f53efbe979a3922c1c59e54ea2a941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c877f35359bf2f17aacd3c32a5f6b5e24f53efbe979a3922c1c59e54ea2a941c->leave($__internal_c877f35359bf2f17aacd3c32a5f6b5e24f53efbe979a3922c1c59e54ea2a941c_prof);

        
        $__internal_bf777e36c69f266cf7d98b18427ce2fdfad07e3848fa769926833ff3cd36fc95->leave($__internal_bf777e36c69f266cf7d98b18427ce2fdfad07e3848fa769926833ff3cd36fc95_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b40cebfc4094379a00907b7699757f870c79057b4382853fc91fa7ed2086e432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40cebfc4094379a00907b7699757f870c79057b4382853fc91fa7ed2086e432->enter($__internal_b40cebfc4094379a00907b7699757f870c79057b4382853fc91fa7ed2086e432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0bbd640ce35b2e6dc036abbb27492ce03909dd7725456d298cc5cf40d6473b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbd640ce35b2e6dc036abbb27492ce03909dd7725456d298cc5cf40d6473b83->enter($__internal_0bbd640ce35b2e6dc036abbb27492ce03909dd7725456d298cc5cf40d6473b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0bbd640ce35b2e6dc036abbb27492ce03909dd7725456d298cc5cf40d6473b83->leave($__internal_0bbd640ce35b2e6dc036abbb27492ce03909dd7725456d298cc5cf40d6473b83_prof);

        
        $__internal_b40cebfc4094379a00907b7699757f870c79057b4382853fc91fa7ed2086e432->leave($__internal_b40cebfc4094379a00907b7699757f870c79057b4382853fc91fa7ed2086e432_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d3f84e79be867c84633dea4fe24b9b48d9ac47b39a9cf6bd93a3ac4670e1416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3f84e79be867c84633dea4fe24b9b48d9ac47b39a9cf6bd93a3ac4670e1416->enter($__internal_7d3f84e79be867c84633dea4fe24b9b48d9ac47b39a9cf6bd93a3ac4670e1416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_025ea52467ecdee7b9f5715b7e1b04663cd9795c27e6e69d7b045b44e21fae1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025ea52467ecdee7b9f5715b7e1b04663cd9795c27e6e69d7b045b44e21fae1e->enter($__internal_025ea52467ecdee7b9f5715b7e1b04663cd9795c27e6e69d7b045b44e21fae1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_025ea52467ecdee7b9f5715b7e1b04663cd9795c27e6e69d7b045b44e21fae1e->leave($__internal_025ea52467ecdee7b9f5715b7e1b04663cd9795c27e6e69d7b045b44e21fae1e_prof);

        
        $__internal_7d3f84e79be867c84633dea4fe24b9b48d9ac47b39a9cf6bd93a3ac4670e1416->leave($__internal_7d3f84e79be867c84633dea4fe24b9b48d9ac47b39a9cf6bd93a3ac4670e1416_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
