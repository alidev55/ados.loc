<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Ecommerce &raquo; HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Fixfellow &#8211; Tools Store Ecommerce Html Template</title>

<!-- favicon icon -->
<!-- <link rel="shortcut icon" href="images/favicon.png" /> -->

<!-- bootstrap -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/> -->

<!-- animate -->
<!-- <link rel="stylesheet" type="text/css" href="css/animate.css"/> -->

<!-- fontawesome -->
<!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/> -->

<!-- themify -->
<!-- <link rel="stylesheet" type="text/css" href="css/themify-icons.css"/> -->

<!-- slick -->
<!-- <link rel="stylesheet" type="text/css" href="css/slick.css"> -->

<!-- slick -->
<!--<link rel="stylesheet" type="text/css" href="css/slick-theme.css"> -->

<!-- REVOLUTION LAYERS STYLES -->

<!--    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css"> -->

<!--    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css"> -->

<!-- magnific-popup -->
<!-- <link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/> -->

<!-- megamenu -->
<!-- <link rel="stylesheet" type="text/css" href="css/megamenu.css"> -->

<!-- shortcodes -->
<!-- <link rel="stylesheet" type="text/css" href="css/shortcodes.css"/> -->

<!-- main -->
<!-- <link rel="stylesheet" type="text/css" href="css/main.css"/> -->

<!-- responsive -->
<!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"/> -->

<?php wp_head(); ?>
</head>
<body>

    <!--page start-->
    <div class="page">

        <!--newsletter_popup_wrap start-->
        <div class="newsletter_popup_wrap newsletter">
            <div class="newsletter_content">
                <button type="button" class="close" data-dismiss="newsletter">&times;</button>
                <div class="d-flex flex-row align-items-center justify-content-start">
                    <div class="ns_image">
                        <img class="img-fluid" src="https://via.placeholder.com/351x451.jpg" alt="" />
                    </div>
                    <div class="ns_text-content">
                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round"> 
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe The Fixfellow</p>
                        <!--subscribe_form start-->
                        <form id="subscribe_form" class="subscribe_form" method="post" action="#" data-mailchimp="true">
                            <div class="newsletter_main" id="subscribe_content"> 
                                <div class="form-row">
                                    <input type="email" name="email" placeholder="Your Email Address.." value="">
                                </div>
                                <div class="form-row">
                                    <input type="submit" value="Subscribe Now" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor">
                                </div>
                                <div class="form-row">
                                    <input type="checkbox"> <span class="ttm-textcolor-darkgrey">Don’t show this popup again</span>
                                </div>
                            </div>
                            <div id="subscribe-massage"></div>
                        </form>
                        <!--subscribe_form end-->
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter_popup_wrap end-->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- top_bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-md-flex flex-row">
                            <div class="top_bar_contact_item">Winter-Season Sale Up To <span class="ttm-textcolor-highlight"> 25% OFF </span> Use Coupne Code <div class="coupen_code ttm-textcolor-highlight">“SALEON”</div></div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div><a href="#">Wishlist (0)</a></div>
                                    <div class="top_bar_menu">
                                        <ul class="top_bar_dropdown">
                                            <li><a href="#" data-toggle="dropdown">$ Currency</a>
                                                <ul>
                                                    <li><a href="#">EUR €</a></li>
                                                    <li><a href="#">USD $</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" data-toggle="dropdown"><span class="mr-2"><img src="images/flag.jpg" alt="img"></span>Language</a>
                                                <ul>
                                                    <li><a href="#"><span class="mr-2"><img src="images/English-icon.jpg" alt="img"></span>English</a></li>
                                                    <li><a href="#"><span class="mr-2"><img src="images/French-icon.jpg" alt="img"></span>French</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- top_bar end-->
            <!-- header_main -->
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-3 order-1">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="index.html" title="Fixfellow" rel="home">
                                    <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                        </div>
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search"><!-- header_search -->
                                <div class="header_search_content">
                                    <div id="search_block_top" class="search_block_top">
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query form-control" type="text" id="search_query_top" name="s" placeholder="Search For Shopping...." value="">           
                                            <div class="categories-block">               
                                                <select id="search_category" name="search_category" class="form-control">
                                                    <option value="all">All Categories</option>
                                                    <option value="Categories 1">Categories 1</option>
                                                    <option value="Categories 2">Categories 2</option>
                                                    <option value="Categories 3">Categories 3</option>
                                                </select>
                                            </div>
                                            <button type="submit" name="submit_search" class="btn btn-default button-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>    
                            <!-- header_search end -->
                        </div>
                        <div class="col-lg-3 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <!-- header_extra -->
                            <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                <div class="account dropdown">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="account_icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="account_content">
                                            <div class="account_text"><a href="#">Sign In</a></div>
                                        </div>
                                    </div>
                                    <div class="account_extra dropdown_link" data-toggle="dropdown">Account</div>
                                    <aside class="widget_account dropdown_content">
                                        <div class="widget_account_content">
                                            <ul>
                                                <li><i class="fa fa-sign-in mr-2"></i><a href="login.html">Login</a></li>
                                                <li><i class="fa fa-sign-in mr-2"></i><a href="register.html">Register</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="cart dropdown">
                                    <div class="dropdown_link d-flex flex-row align-items-center justify-content-end" data-toggle="dropdown">
                                        <div class="cart_icon">
                                            <i class="fa fa-shopping-cart"></i>
                                            <div class="cart_count">02</div>
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="#">My Cart</a></div>
                                            <div class="cart_price">$257.00</div>
                                        </div>
                                    </div>
                                    <aside class="widget_shopping_cart dropdown_content">
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="photo"><img src="https://via.placeholder.com/271x300?text=271x300+Pro+view1" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Impact Wrench</a></h6>
                                                <p>2x - <span class="price">$220.00</span></p>
                                            </li>
                                            <li>
                                                <a href="#" class="photo"><img src="https://via.placeholder.com/271x300?text=271x300+Pro+view1" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Demolition Breaker</a></h6>
                                                <p>1x - <span class="price">$38.00</span></p>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right"><strong>Total</strong>: $257.00</span>
                                                <a href="cart.html" class="btn btn-default btn-cart">Cart</a>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                            </div><!-- header_extra end -->
                        </div>
                    </div>
                </div>
            </div><!-- haeder-main end -->
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white clearfix">
                <div class="site-header-menu-inner stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main_nav_content d-flex flex-row">
                                    <div class="cat_menu_container">
                                        <a href="#" class="cat_menu d-flex flex-row align-items-center">
                                            <div class="cat_icon"><i class="fa fa-bars"></i></div>
                                            <div class="cat_text"><span>Shop by</span><h4>Categories</h4></div>
                                        </a>
                                        <ul class="cat_menu_list menu-vertical">
                                            <li><a href="#" class="close-side"><i class="fa fa-times"></i></a></li>
                                            <li class="parent">
                                                <a href="#">Toolbox</a>
                                                <div class="sub-menu megamenu column3">
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Materials</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Miter Box</a></li>
                                                                    <li><a href="#">Scraper</a></li>
                                                                    <li><a href="#">Screwdriver</a></li>
                                                                    <li><a href="#">Glass Cutter</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Accessories</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Hacksaw</a></li>
                                                                    <li><a href="#">Pitchfork</a></li>
                                                                    <li><a href="#">Circular Saw</a></li>
                                                                    <li><a href="#">Hex Wrench</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Cutting Tools‎ </a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Axes‎</a></li>
                                                                    <li><a href="#">Scissors</a></li>
                                                                    <li><a href="#">Saws‎</a></li>
                                                                    <li><a href="#">Knives</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="parent">
                                                <a href="#">Hand Tool</a>
                                                <div class="sub-menu megamenu column3">
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Gas Equipment</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Dust Collector</a></li>
                                                                    <li><a href="#">Heat Guns</a></li>
                                                                    <li><a href="#">Impact Drivers</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Cordless Tools</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Bare Tools</a></li>
                                                                    <li><a href="#">Grinders</a></li>
                                                                    <li><a href="#">Impact Drivers</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Air Tools</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Air Hoses</a></li>
                                                                    <li><a href="#">Chipping Hammers</a></li>
                                                                    <li><a href="#">Compressors</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Cutter Wood</a></li>
                                            <li><a href="#">Power Tools</a></li>
                                            <li><a href="#">Saw Map</a></li>
                                            <li><a href="#">Electric Tools</a></li>
                                            <li><a href="#">Collapsible</a></li>
                                            <li><a href="#">Corded Planer</a></li>
                                            <li class="parent-plus"><a href="#">More Categories</a>
                                                <div class="plus-menu">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Hacksaw</a></li>
                                                        <li><a href="#">Post Hole</a></li>
                                                        <li><a href="#">Tool Belt</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--site-navigation -->
                                    <div id="site-navigation" class="site-navigation">
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <!-- menu -->
                                        <nav class="menu menu-mobile" id="menu">
                                            <ul class="nav">
                                                <li class="mega-menu-item active">
                                                    <a href="#" class="mega-menu-link">Home</a>
                                                    <ul class="mega-submenu">
                                                        <li class="active"><a href="index.html">Sample Homepage 1</a></li>
                                                        <li><a href="home-2.html">Sample Homepage 2</a></li>
                                                        <li><a href="home-3.html">Sample Homepage 3</a></li>
                                                        <li class="mega-menu-item">
                                                            <a href="#" class="mega-menu-link">Header Styles</a>
                                                            <ul class="mega-submenu">
                                                                <li><a href="index.html">Header Style 01</a></li>
                                                                <li><a target="_blank" href="header-style-02.html">Header Style 02</a></li>
                                                                <li><a target="_blank" href="header-style-03.html">Header Style 03</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Pages</a>
                                                    <ul class="mega-submenu">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="contact.html">Contact Us</a></li>
                                                        <li><a href="error.html">Error Page</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item megamenu-fw">
                                                    <a href="#" class="mega-menu-link">Shop</a>
                                                    <ul class="mega-submenu megamenu-content" role="menu">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-menu col-md-3">
                                                                    <h6 class="title">Shop Page Layout</h6>
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="shop.html">Shop Default</a></li>
                                                                            <li><a href="left-sidebar.html">Shop Left Sidebar</a></li>
                                                                            <li><a href="right-sidebar.html">Shop Right Sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- end col-3 -->
                                                                <div class="col-menu col-md-3">
                                                                    <h6 class="title">Shop Pages</h6>
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="cart.html">Cart</a></li>
                                                                            <li><a href="checkout.html">Checkout</a></li>
                                                                            <li><a href="login.html">Account/Login</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- end col-3 -->
                                                                <div class="col-menu col-md-3">
                                                                    <h6 class="title">Shop Product Layout</h6>
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="product-layout1.html">Product Layout 1</a></li>
                                                                            <li><a href="product-layout2.html">Product Layout 2</a></li>
                                                                            <li><a href="product-layout3.html">Product Layout 3</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>    
                                                                <div class="col-menu col-md-3">
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="shop.html">
                                                                                <img class="img-fluid" src="https://via.placeholder.com/265x141?text=265x141+Banner.jpg" alt="bimg">
                                                                            </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- end col-3 -->
                                                            </div><!-- end row -->
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Blog</a>
                                                    <ul class="mega-submenu">
                                                        <li class=""><a href="blog.html">Blog Classic</a></li>
                                                        <li class=""><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li class=""><a href="blog-single.html">Single Blog View</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </nav>  
                                    </div><!-- site-navigation end-->
                                    <div class="user_zone_block d-flex flex-row align-items-center justify-content-end ml-auto">
                                        <div class="icon"><i class="fa fa-gift"></i></div>
                                        <h6 class="text">New User Zone</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- site-header-menu end -->
        </header><!--header end-->

