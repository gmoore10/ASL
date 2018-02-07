<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0220ebdb6b54fc3acbc75c6b19b89a962780c8b0d4214c709cfdcf87a5d44e0a extends Twig_Template
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
        $__internal_eae8e6c0e036a401b6050e0aab3ef2f7a5328328be1d55e26e86cffb1e404da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae8e6c0e036a401b6050e0aab3ef2f7a5328328be1d55e26e86cffb1e404da9->enter($__internal_eae8e6c0e036a401b6050e0aab3ef2f7a5328328be1d55e26e86cffb1e404da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d1581a2adb024bf200d3dc94c0383f84df823c066435b36a70db48ffc1b14840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1581a2adb024bf200d3dc94c0383f84df823c066435b36a70db48ffc1b14840->enter($__internal_d1581a2adb024bf200d3dc94c0383f84df823c066435b36a70db48ffc1b14840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae8e6c0e036a401b6050e0aab3ef2f7a5328328be1d55e26e86cffb1e404da9->leave($__internal_eae8e6c0e036a401b6050e0aab3ef2f7a5328328be1d55e26e86cffb1e404da9_prof);

        
        $__internal_d1581a2adb024bf200d3dc94c0383f84df823c066435b36a70db48ffc1b14840->leave($__internal_d1581a2adb024bf200d3dc94c0383f84df823c066435b36a70db48ffc1b14840_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_455d7633ca827066ee9a25365da05166a60a0f589d3436e5c3167fb4858134ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455d7633ca827066ee9a25365da05166a60a0f589d3436e5c3167fb4858134ce->enter($__internal_455d7633ca827066ee9a25365da05166a60a0f589d3436e5c3167fb4858134ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e867827f9786358dc9165c843ca962d82bffa8763c34bd09146b25c1ff82aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e867827f9786358dc9165c843ca962d82bffa8763c34bd09146b25c1ff82aab->enter($__internal_0e867827f9786358dc9165c843ca962d82bffa8763c34bd09146b25c1ff82aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0e867827f9786358dc9165c843ca962d82bffa8763c34bd09146b25c1ff82aab->leave($__internal_0e867827f9786358dc9165c843ca962d82bffa8763c34bd09146b25c1ff82aab_prof);

        
        $__internal_455d7633ca827066ee9a25365da05166a60a0f589d3436e5c3167fb4858134ce->leave($__internal_455d7633ca827066ee9a25365da05166a60a0f589d3436e5c3167fb4858134ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb12f29e4268cedfd2627c48d72adc7b7a88cfa840214f83e7b95ea557d9e92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb12f29e4268cedfd2627c48d72adc7b7a88cfa840214f83e7b95ea557d9e92f->enter($__internal_fb12f29e4268cedfd2627c48d72adc7b7a88cfa840214f83e7b95ea557d9e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_320972bcf0eeb1bf0b3df9f8d787f07f17290b78c84750156f7d90abca9ea49c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320972bcf0eeb1bf0b3df9f8d787f07f17290b78c84750156f7d90abca9ea49c->enter($__internal_320972bcf0eeb1bf0b3df9f8d787f07f17290b78c84750156f7d90abca9ea49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_320972bcf0eeb1bf0b3df9f8d787f07f17290b78c84750156f7d90abca9ea49c->leave($__internal_320972bcf0eeb1bf0b3df9f8d787f07f17290b78c84750156f7d90abca9ea49c_prof);

        
        $__internal_fb12f29e4268cedfd2627c48d72adc7b7a88cfa840214f83e7b95ea557d9e92f->leave($__internal_fb12f29e4268cedfd2627c48d72adc7b7a88cfa840214f83e7b95ea557d9e92f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_97562e41fc0b52cd0988e809a3997ac3cdbffce9ef0b0c3e14ff78ee30c3233c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97562e41fc0b52cd0988e809a3997ac3cdbffce9ef0b0c3e14ff78ee30c3233c->enter($__internal_97562e41fc0b52cd0988e809a3997ac3cdbffce9ef0b0c3e14ff78ee30c3233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4def289814d85d3965615ab364159658fa116d42a26af250ec8ba596f5eca89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4def289814d85d3965615ab364159658fa116d42a26af250ec8ba596f5eca89b->enter($__internal_4def289814d85d3965615ab364159658fa116d42a26af250ec8ba596f5eca89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4def289814d85d3965615ab364159658fa116d42a26af250ec8ba596f5eca89b->leave($__internal_4def289814d85d3965615ab364159658fa116d42a26af250ec8ba596f5eca89b_prof);

        
        $__internal_97562e41fc0b52cd0988e809a3997ac3cdbffce9ef0b0c3e14ff78ee30c3233c->leave($__internal_97562e41fc0b52cd0988e809a3997ac3cdbffce9ef0b0c3e14ff78ee30c3233c_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
