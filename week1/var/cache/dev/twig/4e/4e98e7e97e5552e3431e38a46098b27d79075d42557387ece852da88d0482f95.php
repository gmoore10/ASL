<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e95a2aeb61101cd5712b70d8e7915f17d2a7f806ed41360ef6e3c6ab60e3dc47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b38d722c86097097c5ecaaeaa442278374cc711e8281e49559b0946642682c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38d722c86097097c5ecaaeaa442278374cc711e8281e49559b0946642682c2d->enter($__internal_b38d722c86097097c5ecaaeaa442278374cc711e8281e49559b0946642682c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6d84c98105026345d1c492ee894707cddae8b04e9779befb9f9d5a8f4e84ae2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d84c98105026345d1c492ee894707cddae8b04e9779befb9f9d5a8f4e84ae2a->enter($__internal_6d84c98105026345d1c492ee894707cddae8b04e9779befb9f9d5a8f4e84ae2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b38d722c86097097c5ecaaeaa442278374cc711e8281e49559b0946642682c2d->leave($__internal_b38d722c86097097c5ecaaeaa442278374cc711e8281e49559b0946642682c2d_prof);

        
        $__internal_6d84c98105026345d1c492ee894707cddae8b04e9779befb9f9d5a8f4e84ae2a->leave($__internal_6d84c98105026345d1c492ee894707cddae8b04e9779befb9f9d5a8f4e84ae2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d3be69c4e5a4da5d263f66a5fa4b2c710b9025e78260b24e5ba8f5e6bd09bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3be69c4e5a4da5d263f66a5fa4b2c710b9025e78260b24e5ba8f5e6bd09bae->enter($__internal_2d3be69c4e5a4da5d263f66a5fa4b2c710b9025e78260b24e5ba8f5e6bd09bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e377b690096e60758bc5a80fa183d44669542cffc16e4bd1b7caf03e62ef714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e377b690096e60758bc5a80fa183d44669542cffc16e4bd1b7caf03e62ef714->enter($__internal_0e377b690096e60758bc5a80fa183d44669542cffc16e4bd1b7caf03e62ef714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0e377b690096e60758bc5a80fa183d44669542cffc16e4bd1b7caf03e62ef714->leave($__internal_0e377b690096e60758bc5a80fa183d44669542cffc16e4bd1b7caf03e62ef714_prof);

        
        $__internal_2d3be69c4e5a4da5d263f66a5fa4b2c710b9025e78260b24e5ba8f5e6bd09bae->leave($__internal_2d3be69c4e5a4da5d263f66a5fa4b2c710b9025e78260b24e5ba8f5e6bd09bae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
