<?php

/* C:\xampp\htdocs\essence/themes/essence/layouts/default.htm */
class __TwigTemplate_d62cdaea08add2178c4398e2aee5fc7724e1f45b699db58450c57b42e268b60e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel=\"icon\" href=\"img/core-img/favicon.ico\">

    <!-- Core Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/core-style.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class=\"header_area\">
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "    </header>
    <!-- ##### Header Area End ##### -->
    
    <!-- ##### Right Side Cart Area ##### -->
        ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("right_side"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "    <!-- ##### Right Side Cart End ##### -->
    
        ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "        
    <!-- ##### Brands Area Start ##### -->
        ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("brands_area"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "    <!-- ##### Brands Area End ##### -->
    
    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer_area clearfix\">
        ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery/jquery-2.2.4.min.js");
        echo "\"></script>
    <!-- Popper js -->
    <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <!-- Bootstrap js -->
    <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <!-- Plugins js -->
    <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins.js");
        echo "\"></script>
    <!-- Classy Nav js -->
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/classy-nav.min.js");
        echo "\"></script>
    <!-- Active js -->
    <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/active.js");
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\essence/themes/essence/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 57,  120 => 55,  115 => 53,  110 => 51,  105 => 49,  100 => 47,  94 => 43,  90 => 42,  84 => 38,  80 => 37,  76 => 35,  74 => 34,  70 => 32,  66 => 31,  60 => 27,  56 => 26,  46 => 19,  42 => 18,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel=\"icon\" href=\"img/core-img/favicon.ico\">

    <!-- Core Style CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/core-style.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class=\"header_area\">
        {% partial 'header' %}
    </header>
    <!-- ##### Header Area End ##### -->
    
    <!-- ##### Right Side Cart Area ##### -->
        {% partial 'right_side' %}
    <!-- ##### Right Side Cart End ##### -->
    
        {% page %}
        
    <!-- ##### Brands Area Start ##### -->
        {% partial 'brands_area' %}
    <!-- ##### Brands Area End ##### -->
    
    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer_area clearfix\">
        {% partial 'footer' %}
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src=\"{{ 'assets/js/jquery/jquery-2.2.4.min.js'|theme }}\"></script>
    <!-- Popper js -->
    <script src=\"{{ 'assets/js/popper.min.js'|theme }}\"></script>
    <!-- Bootstrap js -->
    <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <!-- Plugins js -->
    <script src=\"{{ 'assets/js/plugins.js'|theme }}\"></script>
    <!-- Classy Nav js -->
    <script src=\"{{ 'assets/js/classy-nav.min.js'|theme }}\"></script>
    <!-- Active js -->
    <script src=\"{{ 'assets/js/active.js'|theme }}\"></script>

</body>

</html>", "C:\\xampp\\htdocs\\essence/themes/essence/layouts/default.htm", "");
    }
}
