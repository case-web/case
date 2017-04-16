<?php

/* /home/ivan/project/case.web/public/themes/case-web/partials/site/nav.htm */
class __TwigTemplate_119316781503a1687305c9f61d7677b74b84b9409722924cbb70d4275c265477 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded fixed-top\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/images/logo.png");
        echo "\" alt=\"\"></a>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/pages/services-page.php\">Услуги <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/pages/portfolio-page.php\">Портфолио</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/pages/news-page.php\">Новости</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/pages/contacts-page.php\">Контакты</a>
            </li>
        </ul>
        <ul class=\"list-inline my-2\">
            <li><a class=\"header_phone\" href=\"#\">+7 (812) 123-45-67</a></li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/ivan/project/case.web/public/themes/case-web/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded fixed-top\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"/\"><img src=\"{{ '/assets/images/logo.png'|theme }}\" alt=\"\"></a>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/pages/services-page.php\">Услуги <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/pages/portfolio-page.php\">Портфолио</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/pages/news-page.php\">Новости</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/pages/contacts-page.php\">Контакты</a>
            </li>
        </ul>
        <ul class=\"list-inline my-2\">
            <li><a class=\"header_phone\" href=\"#\">+7 (812) 123-45-67</a></li>
        </ul>
    </div>
</nav>", "/home/ivan/project/case.web/public/themes/case-web/partials/site/nav.htm", "");
    }
}
