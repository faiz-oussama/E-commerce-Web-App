<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>@yield('pageTitle')</title>
    <link rel="icon" type="image/png" href="/front/images/favicon.png">
    <link rel="stylesheet" href="/front/css/all.min.css">
    <link rel="stylesheet" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front/css/select2.min.css">
    <link rel="stylesheet" href="/front/css/slick.css">
    <link rel="stylesheet" href="/front/css/jquery.nice-number.min.css">
    <link rel="stylesheet" href="/front/css/jquery.calendar.css">
    <link rel="stylesheet" href="/front/css/add_row_custon.css">
    <link rel="stylesheet" href="/front/css/mobile_menu.css">
    <link rel="stylesheet" href="/front/css/jquery.exzoom.css">
    <link rel="stylesheet" href="/front/css/multiple-image-video.css">
    <link rel="stylesheet" href="/front/css/ranger_style.css">
    <link rel="stylesheet" href="/front/css/jquery.classycountdown.css">
    <link rel="stylesheet" href="/front/css/venobox.min.css">

    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/responsive.css">
    @livewireStyles()
    @stack('stylesheets')
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>


    @include('front.layout.includes.header')
    <!--============================
        MAIN MENU START
    ==============================-->
    <nav class="wsus__main_menu d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="relative_contect d-flex">
                        <div class="wsus_menu_category_bar">
                            <i class="far fa-bars"></i>
                        </div>
                        <ul class="wsus_menu_cat_item show_home toggle_menu">
                            <li><a href="#"><i class="fas fa-star"></i> hot promotions</a></li>
                            <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-tshirt"></i> Fashion </a>
                                <ul class="wsus_menu_cat_droapdown">
                                    <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Best Sellers</a></li>
                                    <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Home Audio & Theaters</a></li>
                                    <li><a href="#">TV & Videos</a></li>
                                    <li><a href="#">Camera</a></li>
                                    <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="wsus__droap_arrow" href="#"><i class="fas fa-tv"></i> Electronics</a>
                                <ul class="wsus_menu_cat_droapdown">
                                    <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Best Sellers</a></li>
                                    <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Home Audio & Theaters</a></li>
                                    <li><a href="#">TV & Videos</a></li>
                                    <li><a href="#">Camera</a></li>
                                    <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="wsus__droap_arrow" href="#"><i class="fas fa-chair-office"></i> Furniture</a>
                                <ul class="wsus_menu_cat_droapdown">
                                    <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Best Sellers</a></li>
                                    <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Home Audio & Theaters</a></li>
                                    <li><a href="#">TV & Videos</a></li>
                                    <li><a href="#">Camera</a></li>
                                    <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-mobile"></i> Smart Phones</a>
                                <ul class="wsus_menu_cat_droapdown">
                                    <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Best Sellers</a></li>
                                    <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Home Audio & Theaters</a></li>
                                    <li><a href="#">TV & Videos</a></li>
                                    <li><a href="#">Camera</a></li>
                                    <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                        <ul class="wsus__sub_category">
                                            <li><a href="#">New Arrivals</a> </li>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Home Audio & Theaters</a></li>
                                            <li><a href="#">TV & Videos</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Photos & Videos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fas fa-home-lg-alt"></i> Home & Garden</a></li>
                            <li><a href="#"><i class="far fa-camera"></i> Accessories</a></li>
                            <li><a href="#"><i class="fas fa-heartbeat"></i> Healthy & Beauty</a></li>
                            <li><a href="#"><i class="fal fa-gift-card"></i> Gift Ideas</a></li>
                            <li><a href="#"><i class="fal fa-gamepad-alt"></i> Toy & Games</a></li>
                            <li><a href="#"><i class="fal fa-gem"></i> View All Categories</a></li>
                        </ul>

                        <ul class="wsus__menu_item">
                            <li><a class="active" href="index.html">home</a></li>
                            <li><a href="product_grid_view.html">shop <i class="fas fa-caret-down"></i></a>
                                <div class="wsus__mega_menu">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>women</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#">New Arrivals</a></li>
                                                    <li><a href="#">Best Sellers</a></li>
                                                    <li><a href="#">Trending</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>men</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#">New Arrivals</a></li>
                                                    <li><a href="#">Best Sellers</a></li>
                                                    <li><a href="#">Trending</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>category</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#"> Healthy & Beauty</a></li>
                                                    <li><a href="#">Gift Ideas</a></li>
                                                    <li><a href="#">Toy & Games</a></li>
                                                    <li><a href="#">Cooking</a></li>
                                                    <li><a href="#">Smart Phones</a></li>
                                                    <li><a href="#">Cameras & Photo</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">View All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>women</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#">New Arrivals</a></li>
                                                    <li><a href="#">Best Sellers</a></li>
                                                    <li><a href="#">Trending</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="vendor.html">vendor</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li><a href="daily_deals.html">campain</a></li>
                            <li class="wsus__relative_li"><a href="#">pages <i class="fas fa-caret-down"></i></a>
                                <ul class="wsus__menu_droapdown">
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="faqs.html">faq</a></li>
                                    <li><a href="invoice.html">invoice</a></li>
                                    <li><a href="about_us.html">about</a></li>
                                    <li><a href="product_grid_view.html">product</a></li>
                                    <li><a href="check_out.html">check out</a></li>
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="change_password.html">change password</a></li>
                                    <li><a href="custom_page.html">custom page</a></li>
                                    <li><a href="forget_password.html">forget password</a></li>
                                    <li><a href="privacy_policy.html">privacy policy</a></li>
                                    <li><a href="product_category.html">product category</a></li>
                                    <li><a href="brands.html">brands</a></li>
                                </ul>
                            </li>
                            <li><a href="track_order.html">track order</a></li>
                            <li><a href="daily_deals.html">daily deals</a></li>
                        </ul>
                        <ul class="wsus__menu_item wsus__menu_item_right">
                            <li><a href="contact.html">contact</a></li>
                            <li><a href="dsahboard.html">my account</a></li>
                            <li><a href="login.html">login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--============================
        MAIN MENU END
    ==============================-->


    <!--============================
        MOBILE MENU START
    ==============================-->
    @include('front.layout.includes.mobile-menu')
    <!--============================
        MOBILE MENU END
    ==============================-->

    @yield('content')
    <!--==========================
        POP UP START
    ===========================-->
    <!-- <section id="wsus__pop_up">
        <div class="wsus__pop_up_center">
            <div class="wsus__pop_up_text">
                <span id="cross"><i class="fas fa-times"></i></span>
                <h5>get up to <span>75% off</span></h5>
                <h2>Sign up to E-SHOP</h2>
                <p>Subscribe to the <b>E-SHOP</b> market newsletter to receive updates on special offers.</p>
                <form>
                    <input type="email" placeholder="Your Email" class="news_input">
                    <button type="submit" class="common_btn">go</button>
                    <div class="wsus__pop_up_check_box">
                    </div>
                </form>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                    <label class="form-check-label" for="flexCheckDefault11">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
    </section> -->
    <!--==========================
        POP UP END
    ===========================-->


    <!--==========================
      PRODUCT MODAL VIEW START
    ===========================-->

    <!--==========================
      PRODUCT MODAL VIEW END
    ===========================-->


    <!--============================
        BANNER PART 2 START
    ==============================-->

    <!--============================
        BANNER PART 2 END
    ==============================-->


    <!--============================
        FLASH SELL START
    ==============================-->

    <!--============================
        FLASH SELL END
    ==============================-->


    <!--============================
       MONTHLY TOP PRODUCT START
    ==============================-->

    <!--============================
       MONTHLY TOP PRODUCT END
    ==============================-->


    <!--============================
        BRAND SLIDER START
    ==============================-->

    <!--============================
        BRAND SLIDER END
    ==============================-->


    <!--============================
        SINGLE BANNER START
    ==============================-->

    <!--============================
        SINGLE BANNER END  
    ==============================-->


    <!--============================
        HOT DEALS START
    ==============================-->

    <!--============================
        HOT DEALS END  
    ==============================-->


    <!--============================
        ELECTRONIC PART START  
    ==============================-->

    <!--============================
        ELECTRONIC PART END  
    ==============================-->


    <!--============================
        ELECTRONIC PART START  
    ==============================-->

    <!--============================
        ELECTRONIC PART END  
    ==============================-->


    <!--============================
        LARGE BANNER  START  
    ==============================-->

    <!--============================
        LARGE BANNER  END  
    ==============================-->


    <!--============================
        WEEKLY BEST ITEM START  
    ==============================-->

    <!--============================
        WEEKLY BEST ITEM END 
    ==============================-->


    <!--============================
      HOME SERVICES START
    ==============================-->

    <!--============================
        HOME SERVICES END
    ==============================-->


    <!--============================
        HOME BLOGS START
    ==============================-->

    <!--============================
        HOME BLOGS END
    ==============================-->


    <!--============================
        FOOTER PART START
    ==============================-->
    @include('front.layout.includes.footer')
    <!--============================
        FOOTER PART END
    ==============================-->


    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->


    <!--jquery library js-->
    <script src="/front/js/jquery-3.6.0.min.js"></script>
    <!--bootstrap js-->
    <script src="/front/js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="/front/js/Font-Awesome.js"></script>
    <!--select2 js-->
    <script src="/front/js/select2.min.js"></script>
    <!--slick slider js-->
    <script src="/front/js/slick.min.js"></script>
    <!--simplyCountdown js-->
    <script src="/front/js/simplyCountdown.js"></script>
    <!--product zoomer js-->
    <script src="/front/js/jquery.exzoom.js"></script>
    <!--nice-number js-->
    <script src="/front/js/jquery.nice-number.min.js"></script>
    <!--counter js-->
    <script src="/front/js/jquery.waypoints.min.js"></script>
    <script src="/front/js/jquery.countup.min.js"></script>
    <!--add row js-->
    <script src="/front/js/add_row_custon.js"></script>
    <!--multiple-image-video js-->
    <script src="/front/js/multiple-image-video.js"></script>
    <!--sticky sidebar js-->
    <script src="/front/js/sticky_sidebar.js"></script>
    <!--price ranger js-->
    <script src="/front/js/ranger_jquery-ui.min.js"></script>
    <script src="/front/js/ranger_slider.js"></script>
    <!--isotope js-->
    <script src="/front/js/isotope.pkgd.min.js"></script>
    <!--venobox js-->
    <script src="/front/js/venobox.min.js"></script>
    <!--classycountdown js-->
    <script src="/front/js/jquery.classycountdown.js"></script>

    <!--main/custom js-->
    <script src="/front/js/main.js"></script>
    @livewireScripts()
    @stack('scripts')
</body>
</html>