<?php

/* C:\xampp\htdocs\essence/themes/essence/partials/right_side.htm */
class __TwigTemplate_6258f7ff63c5485763de251b278f864885016bfb3a42f0b6ccb38411a6393e86 extends Twig_Template
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
        echo "<!-- ##### Right Side Cart Area ##### -->
    <div class=\"cart-bg-overlay\"></div>

    <div class=\"right-side-cart-area\">

        <!-- Cart Button -->
        <div class=\"cart-button\">
            <a href=\"#\" id=\"rightSideCart\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/bag.svg");
        echo "\" alt=\"\"> <span>3</span></a>
        </div>

        <div class=\"cart-content d-flex\">

            <!-- Cart List Area -->
            <div class=\"cart-list\">
                <!-- Single Cart Item -->
                <div class=\"single-cart-item\">
                    <a href=\"#\" class=\"product-image\">
                        <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-1.jpg");
        echo "\" class=\"cart-thumb\" alt=\"\">
                        <!-- Cart Item Desc -->
                        <div class=\"cart-item-desc\">
                          <span class=\"product-remove\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></span>
                            <span class=\"badge\">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class=\"size\">Size: S</p>
                            <p class=\"color\">Color: Red</p>
                            <p class=\"price\">\$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class=\"single-cart-item\">
                    <a href=\"#\" class=\"product-image\">
                        <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-2.jpg");
        echo "\" class=\"cart-thumb\" alt=\"\">
                        <!-- Cart Item Desc -->
                        <div class=\"cart-item-desc\">
                          <span class=\"product-remove\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></span>
                            <span class=\"badge\">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class=\"size\">Size: S</p>
                            <p class=\"color\">Color: Red</p>
                            <p class=\"price\">\$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class=\"single-cart-item\">
                    <a href=\"#\" class=\"product-image\">
                        <img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-3.jpg");
        echo "\" class=\"cart-thumb\" alt=\"\">
                        <!-- Cart Item Desc -->
                        <div class=\"cart-item-desc\">
                          <span class=\"product-remove\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></span>
                            <span class=\"badge\">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class=\"size\">Size: S</p>
                            <p class=\"color\">Color: Red</p>
                            <p class=\"price\">\$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class=\"cart-amount-summary\">

                <h2>Summary</h2>
                <ul class=\"summary-table\">
                    <li><span>subtotal:</span> <span>\$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>\$232.00</span></li>
                </ul>
                <div class=\"checkout-btn mt-100\">
                    <a href=\"checkout.html\" class=\"btn essence-btn\">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\essence/themes/essence/partials/right_side.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 50,  64 => 34,  45 => 18,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- ##### Right Side Cart Area ##### -->
    <div class=\"cart-bg-overlay\"></div>

    <div class=\"right-side-cart-area\">

        <!-- Cart Button -->
        <div class=\"cart-button\">
            <a href=\"#\" id=\"rightSideCart\"><img src=\"{{ 'assets/img/core-img/bag.svg'|theme }}\" alt=\"\"> <span>3</span></a>
        </div>

        <div class=\"cart-content d-flex\">

            <!-- Cart List Area -->
            <div class=\"cart-list\">
                <!-- Single Cart Item -->
                <div class=\"single-cart-item\">
                    <a href=\"#\" class=\"product-image\">
                        <img src=\"{{ 'assets/img/product-img/product-1.jpg'|theme }}\" class=\"cart-thumb\" alt=\"\">
                        <!-- Cart Item Desc -->
                        <div class=\"cart-item-desc\">
                          <span class=\"product-remove\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></span>
                            <span class=\"badge\">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class=\"size\">Size: S</p>
                            <p class=\"color\">Color: Red</p>
                            <p class=\"price\">\$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class=\"single-cart-item\">
                    <a href=\"#\" class=\"product-image\">
                        <img src=\"{{ 'assets/img/product-img/product-2.jpg'|theme }}\" class=\"cart-thumb\" alt=\"\">
                        <!-- Cart Item Desc -->
                        <div class=\"cart-item-desc\">
                          <span class=\"product-remove\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></span>
                            <span class=\"badge\">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class=\"size\">Size: S</p>
                            <p class=\"color\">Color: Red</p>
                            <p class=\"price\">\$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class=\"single-cart-item\">
                    <a href=\"#\" class=\"product-image\">
                        <img src=\"{{ 'assets/img/product-img/product-3.jpg'|theme }}\" class=\"cart-thumb\" alt=\"\">
                        <!-- Cart Item Desc -->
                        <div class=\"cart-item-desc\">
                          <span class=\"product-remove\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></span>
                            <span class=\"badge\">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class=\"size\">Size: S</p>
                            <p class=\"color\">Color: Red</p>
                            <p class=\"price\">\$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class=\"cart-amount-summary\">

                <h2>Summary</h2>
                <ul class=\"summary-table\">
                    <li><span>subtotal:</span> <span>\$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>\$232.00</span></li>
                </ul>
                <div class=\"checkout-btn mt-100\">
                    <a href=\"checkout.html\" class=\"btn essence-btn\">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->", "C:\\xampp\\htdocs\\essence/themes/essence/partials/right_side.htm", "");
    }
}
