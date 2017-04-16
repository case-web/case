<?php

/* /home/ivan/project/case.web/public/themes/case-web/pages/main.htm */
class __TwigTemplate_4e1065c0bd4b87c41f9e6dd87236b9a0a4e3b02adf26bdcdf0402737c0f360e9 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("template-part/slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("template-part/about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("template-part/services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "

<!-- Блок \"Портфолио\". -->
<div class=\"wrapper portfolio overlay\">
    <div class=\"container\">
        <div class=\"row portfolio_header\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h2 class=\"under_line\">Портфолио</h2>
                <h3>То, что навсегда останется
                    в нашей памяти и никогда не
                    забудется.</h3>
            </div>
        </div>
        <div class=\"row iso\">

            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "getPosts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 20
            echo "            <div class=\"column\">
                <div class=\"ItemCard\">
                    <figure class=\"ItemCard__thumb\">
                        <a href=\"/portfolio/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "slug", array()), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["project"], "attachment", array()), "path", array()), "html", null, true);
            echo "\" height=\"340\" width=\"510\" alt=\"\"/>
                        <span class=\"shadow cover\"></span>
                        </a>
                    </figure>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ivan/project/case.web/public/themes/case-web/pages/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  61 => 24,  57 => 23,  52 => 20,  48 => 19,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'template-part/slider' %}
{% partial 'template-part/about' %}
{% partial 'template-part/services' %}


<!-- Блок \"Портфолио\". -->
<div class=\"wrapper portfolio overlay\">
    <div class=\"container\">
        <div class=\"row portfolio_header\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h2 class=\"under_line\">Портфолио</h2>
                <h3>То, что навсегда останется
                    в нашей памяти и никогда не
                    забудется.</h3>
            </div>
        </div>
        <div class=\"row iso\">

            {% for project in project.getPosts %}
            <div class=\"column\">
                <div class=\"ItemCard\">
                    <figure class=\"ItemCard__thumb\">
                        <a href=\"/portfolio/{{ project.slug }}\">
                        <img src=\"{{ project.attachment.path }}\" height=\"340\" width=\"510\" alt=\"\"/>
                        <span class=\"shadow cover\"></span>
                        </a>
                    </figure>
                </div>
            </div>
            {% endfor %}

        </div>

    </div>
</div>", "/home/ivan/project/case.web/public/themes/case-web/pages/main.htm", "");
    }
}
