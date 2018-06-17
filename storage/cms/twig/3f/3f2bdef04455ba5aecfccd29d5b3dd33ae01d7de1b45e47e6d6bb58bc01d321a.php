<?php

/* C:\xampp\htdocs\essence/themes/essence/partials/header.htm */
class __TwigTemplate_fa6875f861175840bce7b7cc58cc653a0225f1c17ebc3ffdca7e95f5cb0f3f89 extends Twig_Template
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
        echo "<div class=\"classy-nav-container breakpoint-off d-flex align-items-center justify-content-between\">
    <!-- Classy Menu -->
    <nav class=\"classy-navbar\" id=\"essenceNav\">
        <!-- Logo -->
        <a class=\"nav-brand\" href=\"index\"><img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/logo.png");
        echo "\" alt=\"\"></a>
        <!-- Navbar Toggler -->
        <div class=\"classy-navbar-toggler\">
            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
        </div>
        <!-- Menu -->
        <div class=\"classy-menu\">
            <!-- close btn -->
            <div class=\"classycloseIcon\">
                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
            </div>
            <!-- Nav Start -->
            <div class=\"classynav\">
                <ul>
                    <li><a href=\"#\">Shop</a>
                        <div class=\"megamenu\">
                            <ul class=\"single-mega cn-col-4\">
                                <li class=\"title\">Women's Collection</li>
                                <li><a href=\"shop\">Dresses</a></li>
                                <li><a href=\"shop\">Blouses &amp; Shirts</a></li>
                                <li><a href=\"shop\">T-shirts</a></li>
                                <li><a href=\"shop\">Rompers</a></li>
                                <li><a href=\"shop\">Bras &amp; Panties</a></li>
                            </ul>
                            <ul class=\"single-mega cn-col-4\">
                                <li class=\"title\">Men's Collection</li>
                                <li><a href=\"shop\">T-Shirts</a></li>
                                <li><a href=\"shop\">Polo</a></li>
                                <li><a href=\"shop\">Shirts</a></li>
                                <li><a href=\"shop\">Jackets</a></li>
                                <li><a href=\"shop\">Trench</a></li>
                            </ul>
                            <ul class=\"single-mega cn-col-4\">
                                <li class=\"title\">Kid's Collection</li>
                                <li><a href=\"shop\">Dresses</a></li>
                                <li><a href=\"shop\">Shirts</a></li>
                                <li><a href=\"shop\">T-shirts</a></li>
                                <li><a href=\"shop\">Jackets</a></li>
                                <li><a href=\"shop\">Trench</a></li>
                            </ul>
                            <div class=\"single-mega cn-col-4\">
                                <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/bg-6.jpg");
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </li>
                    <li><a href=\"#\">Pages</a>
                        <ul class=\"dropdown\">
                            <li><a href=\"\">Home</a></li>
                            <li><a href=\"shop\">Shop</a></li>
                            <li><a href=\"product_details\">Product Details</a></li>
                            <li><a href=\"checkout\">Checkout</a></li>
                            <li><a href=\"blog\">Blog</a></li>
                            <li><a href=\"blog_detail\">Single Blog</a></li>
                            <li><a href=\"regular\">Regular Page</a></li>
                            <li><a href=\"contact\">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href=\"blog\">Blog</a></li>
                    <li><a href=\"contact\">Contact</a></li>
                </ul>
            </div>
            <!-- Nav End -->
        </div>
    </nav>

    <!-- Header Meta Data -->
    <div class=\"header-meta d-flex clearfix justify-content-end\">
        <!-- Search Area -->
        <div class=\"search-area\">
            <form action=\"#\" method=\"post\">
                <input type=\"search\" name=\"search\" id=\"headerSearch\" placeholder=\"Type for search\">
                <button type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
            </form>
        </div>
        <!-- Favourite Area -->
        <div class=\"favourite-area\">
            <a href=\"#\"><img src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/heart.svg");
        echo "\" alt=\"\"></a>
        </div>
        <!-- User Login Info -->
        <div class=\"user-login-info\">
            <a href=\"#\"><img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/user.svg");
        echo "\" alt=\"\"></a>
        </div>
        <!-- Cart Area -->
        <div class=\"cart-area\">
            <a href=\"#\" id=\"essenceCartBtn\"><img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/bag.svg");
        echo "\" alt=\"\"> <span>3</span></a>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\essence/themes/essence/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 89,  118 => 85,  111 => 81,  73 => 46,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"classy-nav-container breakpoint-off d-flex align-items-center justify-content-between\">
    <!-- Classy Menu -->
    <nav class=\"classy-navbar\" id=\"essenceNav\">
        <!-- Logo -->
        <a class=\"nav-brand\" href=\"index\"><img src=\"{{ 'assets/img/core-img/logo.png'|theme }}\" alt=\"\"></a>
        <!-- Navbar Toggler -->
        <div class=\"classy-navbar-toggler\">
            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
        </div>
        <!-- Menu -->
        <div class=\"classy-menu\">
            <!-- close btn -->
            <div class=\"classycloseIcon\">
                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
            </div>
            <!-- Nav Start -->
            <div class=\"classynav\">
                <ul>
                    <li><a href=\"#\">Shop</a>
                        <div class=\"megamenu\">
                            <ul class=\"single-mega cn-col-4\">
                                <li class=\"title\">Women's Collection</li>
                                <li><a href=\"shop\">Dresses</a></li>
                                <li><a href=\"shop\">Blouses &amp; Shirts</a></li>
                                <li><a href=\"shop\">T-shirts</a></li>
                                <li><a href=\"shop\">Rompers</a></li>
                                <li><a href=\"shop\">Bras &amp; Panties</a></li>
                            </ul>
                            <ul class=\"single-mega cn-col-4\">
                                <li class=\"title\">Men's Collection</li>
                                <li><a href=\"shop\">T-Shirts</a></li>
                                <li><a href=\"shop\">Polo</a></li>
                                <li><a href=\"shop\">Shirts</a></li>
                                <li><a href=\"shop\">Jackets</a></li>
                                <li><a href=\"shop\">Trench</a></li>
                            </ul>
                            <ul class=\"single-mega cn-col-4\">
                                <li class=\"title\">Kid's Collection</li>
                                <li><a href=\"shop\">Dresses</a></li>
                                <li><a href=\"shop\">Shirts</a></li>
                                <li><a href=\"shop\">T-shirts</a></li>
                                <li><a href=\"shop\">Jackets</a></li>
                                <li><a href=\"shop\">Trench</a></li>
                            </ul>
                            <div class=\"single-mega cn-col-4\">
                                <img src=\"{{ 'assets/img/bg-img/bg-6.jpg'|theme }}\" alt=\"\">
                            </div>
                        </div>
                    </li>
                    <li><a href=\"#\">Pages</a>
                        <ul class=\"dropdown\">
                            <li><a href=\"\">Home</a></li>
                            <li><a href=\"shop\">Shop</a></li>
                            <li><a href=\"product_details\">Product Details</a></li>
                            <li><a href=\"checkout\">Checkout</a></li>
                            <li><a href=\"blog\">Blog</a></li>
                            <li><a href=\"blog_detail\">Single Blog</a></li>
                            <li><a href=\"regular\">Regular Page</a></li>
                            <li><a href=\"contact\">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href=\"blog\">Blog</a></li>
                    <li><a href=\"contact\">Contact</a></li>
                </ul>
            </div>
            <!-- Nav End -->
        </div>
    </nav>

    <!-- Header Meta Data -->
    <div class=\"header-meta d-flex clearfix justify-content-end\">
        <!-- Search Area -->
        <div class=\"search-area\">
            <form action=\"#\" method=\"post\">
                <input type=\"search\" name=\"search\" id=\"headerSearch\" placeholder=\"Type for search\">
                <button type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
            </form>
        </div>
        <!-- Favourite Area -->
        <div class=\"favourite-area\">
            <a href=\"#\"><img src=\"{{ 'assets/img/core-img/heart.svg'|theme }}\" alt=\"\"></a>
        </div>
        <!-- User Login Info -->
        <div class=\"user-login-info\">
            <a href=\"#\"><img src=\"{{ 'assets/img/core-img/user.svg'|theme }}\" alt=\"\"></a>
        </div>
        <!-- Cart Area -->
        <div class=\"cart-area\">
            <a href=\"#\" id=\"essenceCartBtn\"><img src=\"{{ 'assets/img/core-img/bag.svg'|theme }}\" alt=\"\"> <span>3</span></a>
        </div>
    </div>

</div>", "C:\\xampp\\htdocs\\essence/themes/essence/partials/header.htm", "");
    }
}
