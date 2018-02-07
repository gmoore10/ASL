<?php

/* blog/index.html.twig */
class __TwigTemplate_3c58d3ee82bb25249bc1aee4c7eb62bf09aa37ec72e4d0010fe61bea92fce259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72b7465bdfc4d11ed48bd0a04473011c76a439f6a70a5ca3c375e99f405f30bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b7465bdfc4d11ed48bd0a04473011c76a439f6a70a5ca3c375e99f405f30bf->enter($__internal_72b7465bdfc4d11ed48bd0a04473011c76a439f6a70a5ca3c375e99f405f30bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_b3f112ac44c7271c753cf70603a2508b98ceba0bbc6d393ad33d644f49736bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f112ac44c7271c753cf70603a2508b98ceba0bbc6d393ad33d644f49736bb4->enter($__internal_b3f112ac44c7271c753cf70603a2508b98ceba0bbc6d393ad33d644f49736bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b7465bdfc4d11ed48bd0a04473011c76a439f6a70a5ca3c375e99f405f30bf->leave($__internal_72b7465bdfc4d11ed48bd0a04473011c76a439f6a70a5ca3c375e99f405f30bf_prof);

        
        $__internal_b3f112ac44c7271c753cf70603a2508b98ceba0bbc6d393ad33d644f49736bb4->leave($__internal_b3f112ac44c7271c753cf70603a2508b98ceba0bbc6d393ad33d644f49736bb4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a1fa29ed4c27a252fa061069873e7d8b07008a4acbde43ba84bf21c8e8eddee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1fa29ed4c27a252fa061069873e7d8b07008a4acbde43ba84bf21c8e8eddee->enter($__internal_2a1fa29ed4c27a252fa061069873e7d8b07008a4acbde43ba84bf21c8e8eddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff1bd09da8a3a929e7b323a699546f76c3b5bafd7c40fa4e0ad6ad6582b0ffe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1bd09da8a3a929e7b323a699546f76c3b5bafd7c40fa4e0ad6ad6582b0ffe1->enter($__internal_ff1bd09da8a3a929e7b323a699546f76c3b5bafd7c40fa4e0ad6ad6582b0ffe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_ff1bd09da8a3a929e7b323a699546f76c3b5bafd7c40fa4e0ad6ad6582b0ffe1->leave($__internal_ff1bd09da8a3a929e7b323a699546f76c3b5bafd7c40fa4e0ad6ad6582b0ffe1_prof);

        
        $__internal_2a1fa29ed4c27a252fa061069873e7d8b07008a4acbde43ba84bf21c8e8eddee->leave($__internal_2a1fa29ed4c27a252fa061069873e7d8b07008a4acbde43ba84bf21c8e8eddee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f615d273e2d0a394fb28844da1dea1e63785af6b932e2b9f1e1bd88556cab91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f615d273e2d0a394fb28844da1dea1e63785af6b932e2b9f1e1bd88556cab91->enter($__internal_1f615d273e2d0a394fb28844da1dea1e63785af6b932e2b9f1e1bd88556cab91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83d7625c306e253f11d89c538997de0c0f11e52de51f129dbe4bb158fb18f1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d7625c306e253f11d89c538997de0c0f11e52de51f129dbe4bb158fb18f1f6->enter($__internal_83d7625c306e253f11d89c538997de0c0f11e52de51f129dbe4bb158fb18f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h2>Blog</h2>
";
        
        $__internal_83d7625c306e253f11d89c538997de0c0f11e52de51f129dbe4bb158fb18f1f6->leave($__internal_83d7625c306e253f11d89c538997de0c0f11e52de51f129dbe4bb158fb18f1f6_prof);

        
        $__internal_1f615d273e2d0a394fb28844da1dea1e63785af6b932e2b9f1e1bd88556cab91->leave($__internal_1f615d273e2d0a394fb28844da1dea1e63785af6b932e2b9f1e1bd88556cab91_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  59 => 7,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/blog/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Blog{% endblock %}

{% block body %}
    <h2>Blog</h2>
{% endblock %}", "blog/index.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\templates\\blog\\index.html.twig");
    }
}
