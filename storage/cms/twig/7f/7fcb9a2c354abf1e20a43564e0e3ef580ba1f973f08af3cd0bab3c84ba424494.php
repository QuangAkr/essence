<?php

/* C:\xampp\htdocs\essence/themes/essence/pages/shop.htm */
class __TwigTemplate_ceef8462c52726ee278b36b2ac54d0369fc79eec9a554c85d82a3bf4f5736c8f extends Twig_Template
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
        echo "<!-- ##### Breadcumb Area Start ##### -->
    <div class=\"breadcumb_area bg-img\" style=\"background-image: url(";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/breadcumb.jpg");
        echo ");\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <div class=\"page-title text-center\">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class=\"shop_grid_area section-padding-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-4 col-lg-3\">
                    <div class=\"shop_sidebar_area\">

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget catagory mb-50\">
                            <!-- Widget Title -->
                            <h6 class=\"widget-title mb-30\">Catagories</h6>

                            <!--  Catagories  -->
                            <div class=\"catagories-menu\">
                                <ul id=\"menu-content2\" class=\"menu-content collapse show\">
                                    <!-- Single Item -->
                                    <li data-toggle=\"collapse\" data-target=\"#clothing\">
                                        <a href=\"#\">clothing</a>
                                        <ul class=\"sub-menu collapse show\" id=\"clothing\">
                                            <li><a href=\"#\">All</a></li>
                                            <li><a href=\"#\">Bodysuits</a></li>
                                            <li><a href=\"#\">Dresses</a></li>
                                            <li><a href=\"#\">Hoodies &amp; Sweats</a></li>
                                            <li><a href=\"#\">Jackets &amp; Coats</a></li>
                                            <li><a href=\"#\">Jeans</a></li>
                                            <li><a href=\"#\">Pants &amp; Leggings</a></li>
                                            <li><a href=\"#\">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href=\"#\">Shirts &amp; Blouses</a></li>
                                            <li><a href=\"#\">Shirts</a></li>
                                            <li><a href=\"#\">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle=\"collapse\" data-target=\"#shoes\" class=\"collapsed\">
                                        <a href=\"#\">shoes</a>
                                        <ul class=\"sub-menu collapse\" id=\"shoes\">
                                            <li><a href=\"#\">All</a></li>
                                            <li><a href=\"#\">Bodysuits</a></li>
                                            <li><a href=\"#\">Dresses</a></li>
                                            <li><a href=\"#\">Hoodies &amp; Sweats</a></li>
                                            <li><a href=\"#\">Jackets &amp; Coats</a></li>
                                            <li><a href=\"#\">Jeans</a></li>
                                            <li><a href=\"#\">Pants &amp; Leggings</a></li>
                                            <li><a href=\"#\">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href=\"#\">Shirts &amp; Blouses</a></li>
                                            <li><a href=\"#\">Shirts</a></li>
                                            <li><a href=\"#\">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle=\"collapse\" data-target=\"#accessories\" class=\"collapsed\">
                                        <a href=\"#\">accessories</a>
                                        <ul class=\"sub-menu collapse\" id=\"accessories\">
                                            <li><a href=\"#\">All</a></li>
                                            <li><a href=\"#\">Bodysuits</a></li>
                                            <li><a href=\"#\">Dresses</a></li>
                                            <li><a href=\"#\">Hoodies &amp; Sweats</a></li>
                                            <li><a href=\"#\">Jackets &amp; Coats</a></li>
                                            <li><a href=\"#\">Jeans</a></li>
                                            <li><a href=\"#\">Pants &amp; Leggings</a></li>
                                            <li><a href=\"#\">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href=\"#\">Shirts &amp; Blouses</a></li>
                                            <li><a href=\"#\">Shirts</a></li>
                                            <li><a href=\"#\">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget price mb-50\">
                            <!-- Widget Title -->
                            <h6 class=\"widget-title mb-30\">Filter by</h6>
                            <!-- Widget Title 2 -->
                            <p class=\"widget-title2 mb-30\">Price</p>

                            <div class=\"widget-desc\">
                                <div class=\"slider-range\">
                                    <div data-min=\"49\" data-max=\"360\" data-unit=\"\$\" class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\" data-value-min=\"49\" data-value-max=\"360\" data-label-result=\"Range:\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                    </div>
                                    <div class=\"range-price\">Range: \$49.00 - \$360.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget color mb-50\">
                            <!-- Widget Title 2 -->
                            <p class=\"widget-title2 mb-30\">Color</p>
                            <div class=\"widget-desc\">
                                <ul class=\"d-flex\">
                                    <li><a href=\"#\" class=\"color1\"></a></li>
                                    <li><a href=\"#\" class=\"color2\"></a></li>
                                    <li><a href=\"#\" class=\"color3\"></a></li>
                                    <li><a href=\"#\" class=\"color4\"></a></li>
                                    <li><a href=\"#\" class=\"color5\"></a></li>
                                    <li><a href=\"#\" class=\"color6\"></a></li>
                                    <li><a href=\"#\" class=\"color7\"></a></li>
                                    <li><a href=\"#\" class=\"color8\"></a></li>
                                    <li><a href=\"#\" class=\"color9\"></a></li>
                                    <li><a href=\"#\" class=\"color10\"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget brands mb-50\">
                            <!-- Widget Title 2 -->
                            <p class=\"widget-title2 mb-30\">Brands</p>
                            <div class=\"widget-desc\">
                                <ul>
                                    <li><a href=\"#\">Asos</a></li>
                                    <li><a href=\"#\">Mango</a></li>
                                    <li><a href=\"#\">River Island</a></li>
                                    <li><a href=\"#\">Topshop</a></li>
                                    <li><a href=\"#\">Zara</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-12 col-md-8 col-lg-9\">
                    <div class=\"shop_grid_product_area\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"product-topbar d-flex align-items-center justify-content-between\">
                                    <!-- Total Products -->
                                    <div class=\"total-products\">
                                        <p><span>186</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class=\"product-sorting d-flex\">
                                        <p>Sort by:</p>
                                        <form action=\"#\" method=\"get\">
                                            <select name=\"select\" id=\"sortByselect\">
                                                <option value=\"value\">Highest Rated</option>
                                                <option value=\"value\">Newest</option>
                                                <option value=\"value\">Price: \$\$ - \$</option>
                                                <option value=\"value\">Price: \$ - \$\$</option>
                                            </select>
                                            <input type=\"submit\" class=\"d-none\" value=\"\">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">


                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 175
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-1.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-2.jpg");
        echo "\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge offer-badge\">
                                            <span>-30%</span>
                                        </div>
                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\"><span class=\"old-price\">\$75.00</span> \$55.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-2.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 215
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-3.jpg");
        echo "\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 247
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-3.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 249
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-4.jpg");
        echo "\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge new-badge\">
                                            <span>New</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 286
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-4.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 288
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-5.jpg");
        echo "\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 320
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-5.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 322
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-6.jpg");
        echo "\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge offer-badge\">
                                            <span>-30%</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\"><span class=\"old-price\">\$75.00</span> \$55.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-6.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 361
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-7.jpg");
        echo "\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 393
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-7.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 395
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-8.jpg");
        echo "\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge new-badge\">
                                            <span>New</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 432
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-8.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 434
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-9.jpg");
        echo "\" alt=\"\">
                                        
                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 466
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-9.jpg");
        echo "\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"";
        // line 468
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/product-img/product-1.jpg");
        echo "\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label=\"navigation\">
                        <ul class=\"pagination mt-50 mb-70\">
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"fa fa-angle-left\"></i></a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">...</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">21</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\essence/themes/essence/pages/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 468,  541 => 466,  506 => 434,  501 => 432,  461 => 395,  456 => 393,  421 => 361,  416 => 359,  376 => 322,  371 => 320,  336 => 288,  331 => 286,  291 => 249,  286 => 247,  251 => 215,  246 => 213,  207 => 177,  202 => 175,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- ##### Breadcumb Area Start ##### -->
    <div class=\"breadcumb_area bg-img\" style=\"background-image: url({{ 'assets/img/bg-img/breadcumb.jpg'|theme }});\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <div class=\"page-title text-center\">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class=\"shop_grid_area section-padding-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-4 col-lg-3\">
                    <div class=\"shop_sidebar_area\">

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget catagory mb-50\">
                            <!-- Widget Title -->
                            <h6 class=\"widget-title mb-30\">Catagories</h6>

                            <!--  Catagories  -->
                            <div class=\"catagories-menu\">
                                <ul id=\"menu-content2\" class=\"menu-content collapse show\">
                                    <!-- Single Item -->
                                    <li data-toggle=\"collapse\" data-target=\"#clothing\">
                                        <a href=\"#\">clothing</a>
                                        <ul class=\"sub-menu collapse show\" id=\"clothing\">
                                            <li><a href=\"#\">All</a></li>
                                            <li><a href=\"#\">Bodysuits</a></li>
                                            <li><a href=\"#\">Dresses</a></li>
                                            <li><a href=\"#\">Hoodies &amp; Sweats</a></li>
                                            <li><a href=\"#\">Jackets &amp; Coats</a></li>
                                            <li><a href=\"#\">Jeans</a></li>
                                            <li><a href=\"#\">Pants &amp; Leggings</a></li>
                                            <li><a href=\"#\">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href=\"#\">Shirts &amp; Blouses</a></li>
                                            <li><a href=\"#\">Shirts</a></li>
                                            <li><a href=\"#\">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle=\"collapse\" data-target=\"#shoes\" class=\"collapsed\">
                                        <a href=\"#\">shoes</a>
                                        <ul class=\"sub-menu collapse\" id=\"shoes\">
                                            <li><a href=\"#\">All</a></li>
                                            <li><a href=\"#\">Bodysuits</a></li>
                                            <li><a href=\"#\">Dresses</a></li>
                                            <li><a href=\"#\">Hoodies &amp; Sweats</a></li>
                                            <li><a href=\"#\">Jackets &amp; Coats</a></li>
                                            <li><a href=\"#\">Jeans</a></li>
                                            <li><a href=\"#\">Pants &amp; Leggings</a></li>
                                            <li><a href=\"#\">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href=\"#\">Shirts &amp; Blouses</a></li>
                                            <li><a href=\"#\">Shirts</a></li>
                                            <li><a href=\"#\">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle=\"collapse\" data-target=\"#accessories\" class=\"collapsed\">
                                        <a href=\"#\">accessories</a>
                                        <ul class=\"sub-menu collapse\" id=\"accessories\">
                                            <li><a href=\"#\">All</a></li>
                                            <li><a href=\"#\">Bodysuits</a></li>
                                            <li><a href=\"#\">Dresses</a></li>
                                            <li><a href=\"#\">Hoodies &amp; Sweats</a></li>
                                            <li><a href=\"#\">Jackets &amp; Coats</a></li>
                                            <li><a href=\"#\">Jeans</a></li>
                                            <li><a href=\"#\">Pants &amp; Leggings</a></li>
                                            <li><a href=\"#\">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href=\"#\">Shirts &amp; Blouses</a></li>
                                            <li><a href=\"#\">Shirts</a></li>
                                            <li><a href=\"#\">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget price mb-50\">
                            <!-- Widget Title -->
                            <h6 class=\"widget-title mb-30\">Filter by</h6>
                            <!-- Widget Title 2 -->
                            <p class=\"widget-title2 mb-30\">Price</p>

                            <div class=\"widget-desc\">
                                <div class=\"slider-range\">
                                    <div data-min=\"49\" data-max=\"360\" data-unit=\"\$\" class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\" data-value-min=\"49\" data-value-max=\"360\" data-label-result=\"Range:\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                    </div>
                                    <div class=\"range-price\">Range: \$49.00 - \$360.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget color mb-50\">
                            <!-- Widget Title 2 -->
                            <p class=\"widget-title2 mb-30\">Color</p>
                            <div class=\"widget-desc\">
                                <ul class=\"d-flex\">
                                    <li><a href=\"#\" class=\"color1\"></a></li>
                                    <li><a href=\"#\" class=\"color2\"></a></li>
                                    <li><a href=\"#\" class=\"color3\"></a></li>
                                    <li><a href=\"#\" class=\"color4\"></a></li>
                                    <li><a href=\"#\" class=\"color5\"></a></li>
                                    <li><a href=\"#\" class=\"color6\"></a></li>
                                    <li><a href=\"#\" class=\"color7\"></a></li>
                                    <li><a href=\"#\" class=\"color8\"></a></li>
                                    <li><a href=\"#\" class=\"color9\"></a></li>
                                    <li><a href=\"#\" class=\"color10\"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class=\"widget brands mb-50\">
                            <!-- Widget Title 2 -->
                            <p class=\"widget-title2 mb-30\">Brands</p>
                            <div class=\"widget-desc\">
                                <ul>
                                    <li><a href=\"#\">Asos</a></li>
                                    <li><a href=\"#\">Mango</a></li>
                                    <li><a href=\"#\">River Island</a></li>
                                    <li><a href=\"#\">Topshop</a></li>
                                    <li><a href=\"#\">Zara</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-12 col-md-8 col-lg-9\">
                    <div class=\"shop_grid_product_area\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"product-topbar d-flex align-items-center justify-content-between\">
                                    <!-- Total Products -->
                                    <div class=\"total-products\">
                                        <p><span>186</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class=\"product-sorting d-flex\">
                                        <p>Sort by:</p>
                                        <form action=\"#\" method=\"get\">
                                            <select name=\"select\" id=\"sortByselect\">
                                                <option value=\"value\">Highest Rated</option>
                                                <option value=\"value\">Newest</option>
                                                <option value=\"value\">Price: \$\$ - \$</option>
                                                <option value=\"value\">Price: \$ - \$\$</option>
                                            </select>
                                            <input type=\"submit\" class=\"d-none\" value=\"\">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">


                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-1.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-2.jpg'|theme }}\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge offer-badge\">
                                            <span>-30%</span>
                                        </div>
                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\"><span class=\"old-price\">\$75.00</span> \$55.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-2.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-3.jpg'|theme }}\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-3.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-4.jpg'|theme }}\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge new-badge\">
                                            <span>New</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-4.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-5.jpg'|theme }}\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-5.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-6.jpg'|theme }}\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge offer-badge\">
                                            <span>-30%</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\"><span class=\"old-price\">\$75.00</span> \$55.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-6.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-7.jpg'|theme }}\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-7.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-8.jpg'|theme }}\" alt=\"\">

                                        <!-- Product Badge -->
                                        <div class=\"product-badge new-badge\">
                                            <span>New</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-8.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-9.jpg'|theme }}\" alt=\"\">
                                        
                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class=\"col-12 col-sm-6 col-lg-4\">
                                <div class=\"single-product-wrapper\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ 'assets/img/product-img/product-9.jpg'|theme }}\" alt=\"\">
                                        <!-- Hover Thumb -->
                                        <img class=\"hover-img\" src=\"{{ 'assets/img/product-img/product-1.jpg'|theme }}\" alt=\"\">

                                        <!-- Favourite -->
                                        <div class=\"product-favourite\">
                                            <a href=\"#\" class=\"favme fa fa-heart\"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <span>topshop</span>
                                        <a href=\"single-product-details.html\">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class=\"product-price\">\$80.00</p>

                                        <!-- Hover Content -->
                                        <div class=\"hover-content\">
                                            <!-- Add to Cart -->
                                            <div class=\"add-to-cart-btn\">
                                                <a href=\"#\" class=\"btn essence-btn\">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label=\"navigation\">
                        <ul class=\"pagination mt-50 mb-70\">
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"fa fa-angle-left\"></i></a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">...</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">21</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->", "C:\\xampp\\htdocs\\essence/themes/essence/pages/shop.htm", "");
    }
}
