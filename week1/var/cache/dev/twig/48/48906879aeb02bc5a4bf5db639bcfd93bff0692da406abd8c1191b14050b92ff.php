<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bb001f60f1d547d960be3824cd7179f091bee0afb0ba456fcba151ada2dba0a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fb64ddb9f7b739a5bb669b58360ce390901bb72a2034be69f94bcb7dfbba81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb64ddb9f7b739a5bb669b58360ce390901bb72a2034be69f94bcb7dfbba81d->enter($__internal_8fb64ddb9f7b739a5bb669b58360ce390901bb72a2034be69f94bcb7dfbba81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2c1708be5b7192214cd21a73d517437405a674abed0082aab1c83ce9523f87e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1708be5b7192214cd21a73d517437405a674abed0082aab1c83ce9523f87e3->enter($__internal_2c1708be5b7192214cd21a73d517437405a674abed0082aab1c83ce9523f87e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8fb64ddb9f7b739a5bb669b58360ce390901bb72a2034be69f94bcb7dfbba81d->leave($__internal_8fb64ddb9f7b739a5bb669b58360ce390901bb72a2034be69f94bcb7dfbba81d_prof);

        
        $__internal_2c1708be5b7192214cd21a73d517437405a674abed0082aab1c83ce9523f87e3->leave($__internal_2c1708be5b7192214cd21a73d517437405a674abed0082aab1c83ce9523f87e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f573e8e02ef0f724658d5d186a73843f2379d94105bbd6222ddff52fff782bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f573e8e02ef0f724658d5d186a73843f2379d94105bbd6222ddff52fff782bea->enter($__internal_f573e8e02ef0f724658d5d186a73843f2379d94105bbd6222ddff52fff782bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a34f0256eed75642bfb0f3a34f94d3c07c15a877ab0c6391a59a3e1e7cd6709c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34f0256eed75642bfb0f3a34f94d3c07c15a877ab0c6391a59a3e1e7cd6709c->enter($__internal_a34f0256eed75642bfb0f3a34f94d3c07c15a877ab0c6391a59a3e1e7cd6709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a34f0256eed75642bfb0f3a34f94d3c07c15a877ab0c6391a59a3e1e7cd6709c->leave($__internal_a34f0256eed75642bfb0f3a34f94d3c07c15a877ab0c6391a59a3e1e7cd6709c_prof);

        
        $__internal_f573e8e02ef0f724658d5d186a73843f2379d94105bbd6222ddff52fff782bea->leave($__internal_f573e8e02ef0f724658d5d186a73843f2379d94105bbd6222ddff52fff782bea_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_576aa2cced350a419441aa3909d57b7400e9a63d3db128567e2ef566feceab04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576aa2cced350a419441aa3909d57b7400e9a63d3db128567e2ef566feceab04->enter($__internal_576aa2cced350a419441aa3909d57b7400e9a63d3db128567e2ef566feceab04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_077b477b73af5116a9e5f6edb4d111217b14bb21b8eeb5d9f20f43d12dfa9fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077b477b73af5116a9e5f6edb4d111217b14bb21b8eeb5d9f20f43d12dfa9fa3->enter($__internal_077b477b73af5116a9e5f6edb4d111217b14bb21b8eeb5d9f20f43d12dfa9fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_077b477b73af5116a9e5f6edb4d111217b14bb21b8eeb5d9f20f43d12dfa9fa3->leave($__internal_077b477b73af5116a9e5f6edb4d111217b14bb21b8eeb5d9f20f43d12dfa9fa3_prof);

        
        $__internal_576aa2cced350a419441aa3909d57b7400e9a63d3db128567e2ef566feceab04->leave($__internal_576aa2cced350a419441aa3909d57b7400e9a63d3db128567e2ef566feceab04_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e66c5e2ee24dfb71cb1098ad67d38c0547babd480756e5c947d376bbee9a92f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66c5e2ee24dfb71cb1098ad67d38c0547babd480756e5c947d376bbee9a92f2->enter($__internal_e66c5e2ee24dfb71cb1098ad67d38c0547babd480756e5c947d376bbee9a92f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00d46db88de67074b4b09258ee35697eb30119286b72d7fe11313374288dee55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d46db88de67074b4b09258ee35697eb30119286b72d7fe11313374288dee55->enter($__internal_00d46db88de67074b4b09258ee35697eb30119286b72d7fe11313374288dee55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_00d46db88de67074b4b09258ee35697eb30119286b72d7fe11313374288dee55->leave($__internal_00d46db88de67074b4b09258ee35697eb30119286b72d7fe11313374288dee55_prof);

        
        $__internal_e66c5e2ee24dfb71cb1098ad67d38c0547babd480756e5c947d376bbee9a92f2->leave($__internal_e66c5e2ee24dfb71cb1098ad67d38c0547babd480756e5c947d376bbee9a92f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
