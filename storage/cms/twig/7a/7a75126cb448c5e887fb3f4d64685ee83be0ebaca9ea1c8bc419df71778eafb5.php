<?php

/* /home/ivan/project/case.web/public/themes/case-web/partials/site/preloader.htm */
class __TwigTemplate_ae263f02a259f9c8a65687328e3c7194874c832808b73017619fb7c71b28a31b extends Twig_Template
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
        echo "<div id=\"pagePreloader\">
    <div class=\"spinner\">
        <img src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/images/svg/preloader.svg");
        echo "\" />
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ivan/project/case.web/public/themes/case-web/partials/site/preloader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"pagePreloader\">
    <div class=\"spinner\">
        <img src=\"{{ '/assets/images/svg/preloader.svg'|theme }}\" />
    </div>
</div>", "/home/ivan/project/case.web/public/themes/case-web/partials/site/preloader.htm", "");
    }
}
