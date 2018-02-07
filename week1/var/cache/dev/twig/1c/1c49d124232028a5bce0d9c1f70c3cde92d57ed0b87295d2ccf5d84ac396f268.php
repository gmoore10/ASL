<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dec5de541a2b35e6b7d1a01db426e67b50679748c4a683aa1607f6903c091320 extends Twig_Template
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
        $__internal_a0524a42c4c5a7d05766b8ce8f1f51eb1b0b10935c6ac8e966651d084e6e267b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0524a42c4c5a7d05766b8ce8f1f51eb1b0b10935c6ac8e966651d084e6e267b->enter($__internal_a0524a42c4c5a7d05766b8ce8f1f51eb1b0b10935c6ac8e966651d084e6e267b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_77a2c727f5243e562275971ab18e643ac68785d26a7baf243cdb4f69ff53ba80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a2c727f5243e562275971ab18e643ac68785d26a7baf243cdb4f69ff53ba80->enter($__internal_77a2c727f5243e562275971ab18e643ac68785d26a7baf243cdb4f69ff53ba80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0524a42c4c5a7d05766b8ce8f1f51eb1b0b10935c6ac8e966651d084e6e267b->leave($__internal_a0524a42c4c5a7d05766b8ce8f1f51eb1b0b10935c6ac8e966651d084e6e267b_prof);

        
        $__internal_77a2c727f5243e562275971ab18e643ac68785d26a7baf243cdb4f69ff53ba80->leave($__internal_77a2c727f5243e562275971ab18e643ac68785d26a7baf243cdb4f69ff53ba80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3dc5f7f9d88b6cfd0d703ccf3e22fc2b9366b1696edba7d0bda2678024669f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3dc5f7f9d88b6cfd0d703ccf3e22fc2b9366b1696edba7d0bda2678024669f9->enter($__internal_b3dc5f7f9d88b6cfd0d703ccf3e22fc2b9366b1696edba7d0bda2678024669f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7fda885e0ae9d5d6dc4a4fa64ae5d4085a9ddebdc3632130c4bc1e2e2766f4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fda885e0ae9d5d6dc4a4fa64ae5d4085a9ddebdc3632130c4bc1e2e2766f4d5->enter($__internal_7fda885e0ae9d5d6dc4a4fa64ae5d4085a9ddebdc3632130c4bc1e2e2766f4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7fda885e0ae9d5d6dc4a4fa64ae5d4085a9ddebdc3632130c4bc1e2e2766f4d5->leave($__internal_7fda885e0ae9d5d6dc4a4fa64ae5d4085a9ddebdc3632130c4bc1e2e2766f4d5_prof);

        
        $__internal_b3dc5f7f9d88b6cfd0d703ccf3e22fc2b9366b1696edba7d0bda2678024669f9->leave($__internal_b3dc5f7f9d88b6cfd0d703ccf3e22fc2b9366b1696edba7d0bda2678024669f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd7354236491ae3185456162c54d7bf272a80df502dee31950f9b3935d1f4692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7354236491ae3185456162c54d7bf272a80df502dee31950f9b3935d1f4692->enter($__internal_fd7354236491ae3185456162c54d7bf272a80df502dee31950f9b3935d1f4692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc7e8b8716b18709a06040f40d2cb53aed140ec19e971329587f97ced2c7a5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7e8b8716b18709a06040f40d2cb53aed140ec19e971329587f97ced2c7a5e5->enter($__internal_cc7e8b8716b18709a06040f40d2cb53aed140ec19e971329587f97ced2c7a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc7e8b8716b18709a06040f40d2cb53aed140ec19e971329587f97ced2c7a5e5->leave($__internal_cc7e8b8716b18709a06040f40d2cb53aed140ec19e971329587f97ced2c7a5e5_prof);

        
        $__internal_fd7354236491ae3185456162c54d7bf272a80df502dee31950f9b3935d1f4692->leave($__internal_fd7354236491ae3185456162c54d7bf272a80df502dee31950f9b3935d1f4692_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e45b0a08f0fe7af663954a29b3a2ea8847f6908c84f66cce0b92afb6ca98b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e45b0a08f0fe7af663954a29b3a2ea8847f6908c84f66cce0b92afb6ca98b91->enter($__internal_2e45b0a08f0fe7af663954a29b3a2ea8847f6908c84f66cce0b92afb6ca98b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfdd03f1d7290ea02a921d8f80074d944613cfc57c84946012631b9b0db0800d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdd03f1d7290ea02a921d8f80074d944613cfc57c84946012631b9b0db0800d->enter($__internal_cfdd03f1d7290ea02a921d8f80074d944613cfc57c84946012631b9b0db0800d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cfdd03f1d7290ea02a921d8f80074d944613cfc57c84946012631b9b0db0800d->leave($__internal_cfdd03f1d7290ea02a921d8f80074d944613cfc57c84946012631b9b0db0800d_prof);

        
        $__internal_2e45b0a08f0fe7af663954a29b3a2ea8847f6908c84f66cce0b92afb6ca98b91->leave($__internal_2e45b0a08f0fe7af663954a29b3a2ea8847f6908c84f66cce0b92afb6ca98b91_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
