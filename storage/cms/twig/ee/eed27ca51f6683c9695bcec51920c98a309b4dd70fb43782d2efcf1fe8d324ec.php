<?php

/* /home/ivan/project/case.web/public/themes/case-web/partials/template-part/slider.htm */
class __TwigTemplate_17e79101db2b7ce123ca54a75780b97ed0a5ebd50db222e53fbb20808e78ecd8 extends Twig_Template
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
        echo "<!-- Слайдер. Начало.-->
<div class=\"wrapper slider\">
    <div class=\"container overlay\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"10000\">
            <!-- Индикаторы слайдера. -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            </ol>
            <!-- Индикаторы слайдера. Конец. -->

            <!-- Слайды -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- 1 слайд -->
                <div class=\"carousel-item active\">
                    <div class=\"carousel-caption\">
                        <div class=\"row\">
                            <div class=\"offset-1 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left\">
                                <img class=\"d-block img-fluid\" src=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/1.png");
        echo "\" alt=\"First slide\">
                            </div>
                            <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                                <h2>
                                    Case web technology
                                </h2>
                                <h3>
                                    Нет нерешаемых задач. Case web справится с любой.
                                </h3>
                                <a class=\"btn btn-primary shadow\" href=\"#\">Заказать сайт</a>
                            </div>
                            <div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                        </div>
                    </div>
                </div>
                <!-- Слайд 1. Конец. -->
                <div class=\"carousel-item\">
                    <div class=\"carousel-caption\">
                        <div class=\"row\">
                            <div class=\"offset-1 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left\">
                                <img class=\"d-block img-fluid\" src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/1.png");
        echo "\" alt=\"First slide\">
                            </div>
                            <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                                <h2>
                                    Case web technology
                                </h2>
                                <h3>
                                    Нет нерешаемых задач. Case web справится с любой.
                                </h3>
                            </div>
                            <div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Слайды. Конец.  -->

            <!-- Стрелки слайдера -->
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Предыдущий</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Следующий</span>
            </a>
            <!-- Стрелки слайдера. Конец. -->
        </div>
    </div>
</div>
<!-- Слайдер. Конец -->";
    }

    public function getTemplateName()
    {
        return "/home/ivan/project/case.web/public/themes/case-web/partials/template-part/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 38,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Слайдер. Начало.-->
<div class=\"wrapper slider\">
    <div class=\"container overlay\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"10000\">
            <!-- Индикаторы слайдера. -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            </ol>
            <!-- Индикаторы слайдера. Конец. -->

            <!-- Слайды -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- 1 слайд -->
                <div class=\"carousel-item active\">
                    <div class=\"carousel-caption\">
                        <div class=\"row\">
                            <div class=\"offset-1 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left\">
                                <img class=\"d-block img-fluid\" src=\"{{ 'assets/images/slider/1.png'|theme }}\" alt=\"First slide\">
                            </div>
                            <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                                <h2>
                                    Case web technology
                                </h2>
                                <h3>
                                    Нет нерешаемых задач. Case web справится с любой.
                                </h3>
                                <a class=\"btn btn-primary shadow\" href=\"#\">Заказать сайт</a>
                            </div>
                            <div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                        </div>
                    </div>
                </div>
                <!-- Слайд 1. Конец. -->
                <div class=\"carousel-item\">
                    <div class=\"carousel-caption\">
                        <div class=\"row\">
                            <div class=\"offset-1 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left\">
                                <img class=\"d-block img-fluid\" src=\"{{ 'assets/images/slider/1.png'|theme }}\" alt=\"First slide\">
                            </div>
                            <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                                <h2>
                                    Case web technology
                                </h2>
                                <h3>
                                    Нет нерешаемых задач. Case web справится с любой.
                                </h3>
                            </div>
                            <div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Слайды. Конец.  -->

            <!-- Стрелки слайдера -->
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Предыдущий</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Следующий</span>
            </a>
            <!-- Стрелки слайдера. Конец. -->
        </div>
    </div>
</div>
<!-- Слайдер. Конец -->", "/home/ivan/project/case.web/public/themes/case-web/partials/template-part/slider.htm", "");
    }
}
