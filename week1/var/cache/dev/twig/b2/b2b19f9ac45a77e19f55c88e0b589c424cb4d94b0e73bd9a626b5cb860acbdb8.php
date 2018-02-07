<?php

/* base.html.twig */
class __TwigTemplate_8da32db620108e490cf1ea781da3de436c151a1fcdac598d5a7646f773cfe8ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15496f475abaf4c2c4980a84c65b3246270380699a511896fe16cdb385a5b42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15496f475abaf4c2c4980a84c65b3246270380699a511896fe16cdb385a5b42b->enter($__internal_15496f475abaf4c2c4980a84c65b3246270380699a511896fe16cdb385a5b42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cba7446f4c17917201f17448bf3e8e6e59433326f2c627394b52e1a16112c81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba7446f4c17917201f17448bf3e8e6e59433326f2c627394b52e1a16112c81b->enter($__internal_cba7446f4c17917201f17448bf3e8e6e59433326f2c627394b52e1a16112c81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_15496f475abaf4c2c4980a84c65b3246270380699a511896fe16cdb385a5b42b->leave($__internal_15496f475abaf4c2c4980a84c65b3246270380699a511896fe16cdb385a5b42b_prof);

        
        $__internal_cba7446f4c17917201f17448bf3e8e6e59433326f2c627394b52e1a16112c81b->leave($__internal_cba7446f4c17917201f17448bf3e8e6e59433326f2c627394b52e1a16112c81b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f148fab3e96d236143c4178c1a4c499c7ac5104966c754714e263d27fd66ce68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f148fab3e96d236143c4178c1a4c499c7ac5104966c754714e263d27fd66ce68->enter($__internal_f148fab3e96d236143c4178c1a4c499c7ac5104966c754714e263d27fd66ce68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d84f2549751302b34914cbbaaec32a8ff1da4b748fd41725d988609741a8139f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84f2549751302b34914cbbaaec32a8ff1da4b748fd41725d988609741a8139f->enter($__internal_d84f2549751302b34914cbbaaec32a8ff1da4b748fd41725d988609741a8139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d84f2549751302b34914cbbaaec32a8ff1da4b748fd41725d988609741a8139f->leave($__internal_d84f2549751302b34914cbbaaec32a8ff1da4b748fd41725d988609741a8139f_prof);

        
        $__internal_f148fab3e96d236143c4178c1a4c499c7ac5104966c754714e263d27fd66ce68->leave($__internal_f148fab3e96d236143c4178c1a4c499c7ac5104966c754714e263d27fd66ce68_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00bc175814bda58285fbd02c61f83a256950d4d2a48824b31bb381f95320d30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bc175814bda58285fbd02c61f83a256950d4d2a48824b31bb381f95320d30d->enter($__internal_00bc175814bda58285fbd02c61f83a256950d4d2a48824b31bb381f95320d30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e63c8595758ba41186f8b0e63b408e24f81496185f2ea2d5983b54a2567ceaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63c8595758ba41186f8b0e63b408e24f81496185f2ea2d5983b54a2567ceaac->enter($__internal_e63c8595758ba41186f8b0e63b408e24f81496185f2ea2d5983b54a2567ceaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e63c8595758ba41186f8b0e63b408e24f81496185f2ea2d5983b54a2567ceaac->leave($__internal_e63c8595758ba41186f8b0e63b408e24f81496185f2ea2d5983b54a2567ceaac_prof);

        
        $__internal_00bc175814bda58285fbd02c61f83a256950d4d2a48824b31bb381f95320d30d->leave($__internal_00bc175814bda58285fbd02c61f83a256950d4d2a48824b31bb381f95320d30d_prof);

    }

    // line 9
    public function block_nav($context, array $blocks = array())
    {
        $__internal_588204b445fbf2eff6ae978e5b09c07bcb0dc1a2c04e8c44135387d45ba7f4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588204b445fbf2eff6ae978e5b09c07bcb0dc1a2c04e8c44135387d45ba7f4e8->enter($__internal_588204b445fbf2eff6ae978e5b09c07bcb0dc1a2c04e8c44135387d45ba7f4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_b91943fbaad3c51662b3e5d8f363df6d0181e4c82e3a5c32376ea344863ea864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91943fbaad3c51662b3e5d8f363df6d0181e4c82e3a5c32376ea344863ea864->enter($__internal_b91943fbaad3c51662b3e5d8f363df6d0181e4c82e3a5c32376ea344863ea864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 10
        echo "            <ul>
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/blog\">Blog</a></li>
            </ul>
        ";
        
        $__internal_b91943fbaad3c51662b3e5d8f363df6d0181e4c82e3a5c32376ea344863ea864->leave($__internal_b91943fbaad3c51662b3e5d8f363df6d0181e4c82e3a5c32376ea344863ea864_prof);

        
        $__internal_588204b445fbf2eff6ae978e5b09c07bcb0dc1a2c04e8c44135387d45ba7f4e8->leave($__internal_588204b445fbf2eff6ae978e5b09c07bcb0dc1a2c04e8c44135387d45ba7f4e8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e54f497e4115d06921dcf62fd85e1d6f3b028e1adecc9559f008d7b70fffd01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54f497e4115d06921dcf62fd85e1d6f3b028e1adecc9559f008d7b70fffd01c->enter($__internal_e54f497e4115d06921dcf62fd85e1d6f3b028e1adecc9559f008d7b70fffd01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec840dbe6ad59c8028fe426bac64ec99b4a96c6925ef60d95c2b6c96b9319484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec840dbe6ad59c8028fe426bac64ec99b4a96c6925ef60d95c2b6c96b9319484->enter($__internal_ec840dbe6ad59c8028fe426bac64ec99b4a96c6925ef60d95c2b6c96b9319484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec840dbe6ad59c8028fe426bac64ec99b4a96c6925ef60d95c2b6c96b9319484->leave($__internal_ec840dbe6ad59c8028fe426bac64ec99b4a96c6925ef60d95c2b6c96b9319484_prof);

        
        $__internal_e54f497e4115d06921dcf62fd85e1d6f3b028e1adecc9559f008d7b70fffd01c->leave($__internal_e54f497e4115d06921dcf62fd85e1d6f3b028e1adecc9559f008d7b70fffd01c_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc7e6e082ad44dd5a1a58bcad4dea999b0d693d7ecc3fa02a86d0772960d9ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7e6e082ad44dd5a1a58bcad4dea999b0d693d7ecc3fa02a86d0772960d9ceb->enter($__internal_cc7e6e082ad44dd5a1a58bcad4dea999b0d693d7ecc3fa02a86d0772960d9ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2e04ecdebcd1a682b7c4c465b70e4425bfcf2b2f58feddd5d65d55ee4098f40b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e04ecdebcd1a682b7c4c465b70e4425bfcf2b2f58feddd5d65d55ee4098f40b->enter($__internal_2e04ecdebcd1a682b7c4c465b70e4425bfcf2b2f58feddd5d65d55ee4098f40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e04ecdebcd1a682b7c4c465b70e4425bfcf2b2f58feddd5d65d55ee4098f40b->leave($__internal_2e04ecdebcd1a682b7c4c465b70e4425bfcf2b2f58feddd5d65d55ee4098f40b_prof);

        
        $__internal_cc7e6e082ad44dd5a1a58bcad4dea999b0d693d7ecc3fa02a86d0772960d9ceb->leave($__internal_cc7e6e082ad44dd5a1a58bcad4dea999b0d693d7ecc3fa02a86d0772960d9ceb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 16,  124 => 15,  110 => 10,  101 => 9,  84 => 6,  66 => 5,  54 => 17,  51 => 16,  48 => 15,  46 => 9,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block nav %}
            <ul>
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/blog\">Blog</a></li>
            </ul>
        {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\gmoore\\Sources\\Repos\\ASL\\ASL\\week1\\templates\\base.html.twig");
    }
}
