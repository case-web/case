<?php

/* /home/ivan/project/case.web/public/themes/case-web/pages/portfolio.htm */
class __TwigTemplate_3cae4713bee1a168d707009421523749d8b75a8fa9034fbd69863fd3023f1c5a extends Twig_Template
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
        echo "<div style=\"height: 1000px\">
    <!--заголовок-->
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? null), "title", array()), "html", null, true);
        echo "
    <!--описание-->
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? null), "description", array()), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ivan/project/case.web/public/themes/case-web/pages/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"height: 1000px\">
    <!--заголовок-->
{{ project.title}}
    <!--описание-->
{{ project.description }}
</div>", "/home/ivan/project/case.web/public/themes/case-web/pages/portfolio.htm", "");
    }
}
