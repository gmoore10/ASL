<?php

/* default/index.html.twig */
class __TwigTemplate_28da82b1653c87d7c62d88b52a9a1d24aa8339d6a846519d77865f3e30bb37a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 3);
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
        $__internal_a259287ca35695403a29c57d90bec68af2a02587563991e3a17e3ad08881ee85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a259287ca35695403a29c57d90bec68af2a02587563991e3a17e3ad08881ee85->enter($__internal_a259287ca35695403a29c57d90bec68af2a02587563991e3a17e3ad08881ee85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6b97d9c2bf27b8c9ba63dbe79f10cd51147dd22749020b80b131e0aa399b0d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b97d9c2bf27b8c9ba63dbe79f10cd51147dd22749020b80b131e0aa399b0d77->enter($__internal_6b97d9c2bf27b8c9ba63dbe79f10cd51147dd22749020b80b131e0aa399b0d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a259287ca35695403a29c57d90bec68af2a02587563991e3a17e3ad08881ee85->leave($__internal_a259287ca35695403a29c57d90bec68af2a02587563991e3a17e3ad08881ee85_prof);

        
        $__internal_6b97d9c2bf27b8c9ba63dbe79f10cd51147dd22749020b80b131e0aa399b0d77->leave($__internal_6b97d9c2bf27b8c9ba63dbe79f10cd51147dd22749020b80b131e0aa399b0d77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f31ea558e989a5f3cbc73148bf25b98a72afa993fed86fb5aeac02a2fc26598d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31ea558e989a5f3cbc73148bf25b98a72afa993fed86fb5aeac02a2fc26598d->enter($__internal_f31ea558e989a5f3cbc73148bf25b98a72afa993fed86fb5aeac02a2fc26598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3149bb13a90c8abea53b39adfe36e18ca800f035fb4526bf03a18a40ec9ecc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3149bb13a90c8abea53b39adfe36e18ca800f035fb4526bf03a18a40ec9ecc86->enter($__internal_3149bb13a90c8abea53b39adfe36e18ca800f035fb4526bf03a18a40ec9ecc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_3149bb13a90c8abea53b39adfe36e18ca800f035fb4526bf03a18a40ec9ecc86->leave($__internal_3149bb13a90c8abea53b39adfe36e18ca800f035fb4526bf03a18a40ec9ecc86_prof);

        
        $__internal_f31ea558e989a5f3cbc73148bf25b98a72afa993fed86fb5aeac02a2fc26598d->leave($__internal_f31ea558e989a5f3cbc73148bf25b98a72afa993fed86fb5aeac02a2fc26598d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_89dd054b349dd36dcbd7f4d36619c19404a3478be9880af6d2327d36a8f711e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dd054b349dd36dcbd7f4d36619c19404a3478be9880af6d2327d36a8f711e3->enter($__internal_89dd054b349dd36dcbd7f4d36619c19404a3478be9880af6d2327d36a8f711e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8e54114bdc6e3aa10ccf93521efe3bc644cf1da023b83e475a17faab88cfdb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e54114bdc6e3aa10ccf93521efe3bc644cf1da023b83e475a17faab88cfdb3->enter($__internal_a8e54114bdc6e3aa10ccf93521efe3bc644cf1da023b83e475a17faab88cfdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h2>Home Page</h2>
";
        
        $__internal_a8e54114bdc6e3aa10ccf93521efe3bc644cf1da023b83e475a17faab88cfdb3->leave($__internal_a8e54114bdc6e3aa10ccf93521efe3bc644cf1da023b83e475a17faab88cfdb3_prof);

        
        $__internal_89dd054b349dd36dcbd7f4d36619c19404a3478be9880af6d2327d36a8f711e3->leave($__internal_89dd054b349dd36dcbd7f4d36619c19404a3478be9880af6d2327d36a8f711e3_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return new Twig_Source("{# templates/default/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
    <h2>Home Page</h2>
{% endblock %}", "default/index.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\templates\\default\\index.html.twig");
    }
}
