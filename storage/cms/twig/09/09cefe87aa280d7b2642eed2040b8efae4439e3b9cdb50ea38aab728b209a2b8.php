<?php

/* /home/ivan/project/case.web/public/themes/case-web/layouts/default.htm */
class __TwigTemplate_08540c1992a7e09ecdb10ceacc89cba35d9fe3a0ede46ce4c928c708b485b2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <script src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/libs/jquery/jQuery320.js");
        echo "\"></script>



    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/bootstrap/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/css/style.css");
        echo "\">
    ";
        // line 17
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 18
        echo "</head>
<body>
";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/preloader"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "<header>
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "</header>

<main>
    ";
        // line 26
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 27
        echo "</main>

";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 31
        echo "<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/js/dist/scripts.js");
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ivan/project/case.web/public/themes/case-web/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  91 => 31,  88 => 30,  84 => 29,  80 => 27,  78 => 26,  73 => 23,  69 => 22,  66 => 21,  62 => 20,  58 => 18,  55 => 17,  51 => 16,  47 => 15,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <title>{{ this.page.title }}</title>
    <script src=\"{{ '/assets/libs/jquery/jQuery320.js'|theme }}\"></script>



    <link rel=\"stylesheet\" href=\"{{ '/assets/bootstrap/css/bootstrap.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ '/assets/css/style.css'|theme }}\">
    {% styles %}
</head>
<body>
{% partial 'site/preloader' %}
<header>
    {% partial 'site/header' %}
</header>

<main>
    {% page %}
</main>

{% partial 'site/footer' %}
{% framework %}
<script src=\"{{ '/assets/bootstrap/js/bootstrap.min.js'|theme }}\"></script>
<script src=\"{{ '/assets/js/dist/scripts.js'|theme }}\"></script>

</body>
</html>", "/home/ivan/project/case.web/public/themes/case-web/layouts/default.htm", "");
    }
}
