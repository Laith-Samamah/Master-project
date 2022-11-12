@extends('master')
@section('title', 'Home' )
@section('content')
    

<body class="template-index">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Banner Slidershow Section -->
                <div class="ymm-slideshow position-relative sections-spacing">


                    <!-- Start Slidershow Banner -->
                    <div class="slideshow slideshow-banner">
                        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(images/slider/slider1.png);">
                            <div class="container slideshow-details p-3" style="background:rgba(0, 0, 0, 0.50); border-radius:25px;">
                                <h3>All your car needs in one place</h3>
                                <p>Best quality for the lowest prices!</p>
                                <a href="/shop" class="btn btn-primary">Shop now!</a>
                            </div>
                        </div>
                        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(images/slider/slider2.jpeg); ">
                            <div class="container slideshow-details p-3" style="background:rgba(0, 0, 0, 0.50); border-radius:25px;">
                                <h3>Leading wholesale and retail web-store.</h3>
                                <p>Our website is the right choise for tradesmen and drivers.</p>
                                {{-- <a href="shop-grid-left-sidebar.html" class="btn btn-primary"></a> --}}
                            </div>
                        </div>
                        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(images/slider/slider3.jpg); ">
                            <div class="container slideshow-details p-3" style="background:rgba(0, 0, 0, 0.50); border-radius:25px;">
                                <h3>Looking for the perfect accessories?</h3>
                                <p>Explore our shop and find what you need.</p>
                                <a href="shop-grid-left-sidebar.html" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Slidershow Banner -->
                </div>
                <!-- End Banner Slidershow Section -->

                <!-- Start Four Banner Section -->
                <div class="home-four-banner sections-spacing">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 banner-1">
                                <div class="small-banner-1 position-relative">
                                    <a class="animate-scale" href="/shop"><img class="img-fluid blur-up lazyload w-100" src="images/banner/ban1.png" data-src="images/banner/ban1.png" alt="image" title="image" /></a>
                                    <div class="banner-details">
                                        <h3>Electrical <span>Parts</span></h3>
                                        <p>Check our wide collection now!</p>
                                        <a href="/shop" class="btn btn-success">Electrical Parts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 banner-23">
                                <div class="row mb-3">
                                    <div class="col-12 col-sm-12">
                                        <div class="small-banner-4 position-relative">
                                            <a class="animate-scale" href="/shop">
                                                <img class="img-fluid blur-up lazyload w-100" src="images/banner/banner-3.jpg" data-src="images/banner/b2.png" alt="image" title="image" />
                                                <div class="banner-details">
                                                    <h3 class="mb-3">Mechanical <span>Parts</span></h3>
                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="small-banner-4 position-relative">
                                            <a class="animate-scale" href="/shop">
                                                <img class="img-fluid blur-up lazyload w-100" src="images/banner/wipers-2.jpg" data-src="images/banner/wipers1.png" alt="image" title="image" />
                                                <div class="banner-details">
                                                    <h3 class="mb-3">Wiper blades</h3>
                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Four Banner Section -->

                <!-- Start Collection Tabs Section -->
                <div class="bestseller-section bestseller-style-1 sections-spacing">
                    <div class="container">
                        <div class="tabs-header clearfix">
                            <div class="section-header">
                                <h2>New Product</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                            <ul class="drawer-tabs tabs">
                                <li class="item active" data-tab="tab1"><a>Interior</a></li>
                                <li class="item" data-tab="tab2"><a>Engine</a></li>
                                <li class="item" data-tab="tab3"><a>Suspension</a></li>
                                <li class="item" data-tab="tab4"><a>Lighting</a></li>
                            </ul>
                        </div>
                        <!-- Start Tab Container -->
                        <div class="tab-content responsiveTabs">
                            <!-- Start Tab1 -->
                            <h3 class="d_active tab-drawer-heading" data-tab="tab1"><a>Interior</a></h3>
                            <div id="tab1" class="drawertab-content">
                                <div class="row row-sp row-eq-height prcarousel">
                                    <!-- first element start tab1-->
                                    <div class="col-sp col-xl-12 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">

                                                <div class="product-image">
                                                    <a href="product-details.html">
                                                        <img class="img-fluid blur-up lazyload primary-img" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover secondary-img" src="images/products/product-1-1.jpg" data-src="images/products/product-1-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <h3 class="product-title"><a href="product-details.html">Donec pede justo fringilla</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="compare-price">$125.22</span>
                                                    <span class="sale-price">$113.88</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- first element end -->

                                </div>
                            </div>
                            <!-- End Tab1 -->
                            <!-- Tab2 -->
                            <h3 class="tab-drawer-heading" data-tab="tab2"><a>Engine</a></h3>
                            <div id="tab2" class="drawertab-content">
                                <div class="row row-sp row-eq-height prcarousel">
                                    <!-- first element start tab2-->
                                    <div class="col-sp col-xl-12 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-image">
                                                    <a href="product-details.html">
                                                        <img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="images/products/product-1-1.jpg" data-src="images/products/product-1-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <h3 class="product-title"><a href="product-details.html">Pellentesque habitant morbi</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$113.88</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- first element end tab2-->

                                </div>
                            </div>
                            <!-- End Tab2 -->
                            <!-- Start Tab3 -->
                            <h3 class="tab-drawer-heading" data-tab="tab3"><a>Suspension</a></h3>
                            <div id="tab3" class="drawertab-content">
                                <div class="row row-sp row-eq-height prcarousel">
                                    <!-- first element start tab3-->
                                    <div class="col-sp col-xl-12 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label new">New</span>
                                                    <span class="label sale">Sale</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.html">
                                                        <img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="images/products/product-1-1.jpg" data-src="images/products/product-1-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <h3 class="product-title"><a href="product-details.html">Stockvault oil plastic</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="compare-price">$125.22</span>
                                                    <span class="sale-price">$113.88</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- first element end tab3-->

                                </div>
                            </div>
                            <!-- End Tab3 -->
                            <!-- Start Tab4 -->
                            <h3 class="tab-drawer-heading" data-tab="tab4"><a>Lighting</a></h3>
                            <div id="tab4" class="drawertab-content">
                                <div class="row row-sp row-eq-height prcarousel">
                                    <!-- first element start tab4-->
                                    <div class="col-sp col-xl-12 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-item">
                                            <div class="product-image-action">
                                                <div class="product-label">
                                                    <span class="label new">New</span>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product-details.html">
                                                        <img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" />
                                                        <img class="img-fluid blur-up lazyload product-imghover" src="images/products/product-1-1.jpg" data-src="images/products/product-1-1.jpg" alt="image" title="image" />
                                                    </a>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <h3 class="product-title"><a href="product-details.html">Auto parts Tools</a></h3>
                                                <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                                <div class="product-starrating">
                                                    <i class="spr-icon fa fa-star"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                    <i class="spr-icon fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="sale-price">$125.88</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- first element end tab4-->
                                </div>
                            </div>
                            <!-- End Tab4 -->
                        </div>
                        <!-- End Tab Container -->
                    </div>
                </div>
                <!-- End Collection Tabs Section -->
                <hr style=" width:90%;height:2px;color:steelblue;background-color:rgb(72, 77, 82)" class="mb-5">
                <!-- Start Information Section -->
                <div class="video-information sections-spacing">
                    <div class="container">
                        <div class="row d-sm-flex flex-sm-row align-items-sm-center">
                            <!-- Start site Image -->
                            <div class="col-12 col-sm-12 col-md-6 video-image">
                                    <img class="img-fluid blur-up lazyload w-100" src="images/others/offer-image.png" data-src="images/others/midbanner.png" alt="image" title="image" />

                            </div>
                            <!-- End site Image -->

                            <!-- Start site Info -->
                            <div class="col-12 col-sm-12 col-md-6 video-info">
                                <div class="section-header">
                                    <h2>What We Offers</h2>
                                    <p>Auto parts professionals at your service</p>
                                </div>
                                <div class="row storeFeatures">
                                    <div class="col-12 col-sm-6 col-md-6 feature-item text-center">
                                        <img class="img-fluid blur-up lazyload" src="images/icons/appointment.jpg" data-src="images/icons/appointment.jpg" alt="image" title="image" />
                                        <h5>Available at any time</h5>
                                        <span>You can order the parts you need anytime and anywhere, just browse into our wide collection.</span>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 feature-item text-center">
                                        <img class="img-fluid blur-up lazyload" src="images/icons/services-prices.jpg" data-src="images/icons/services-prices.jpg" alt="image" title="image" />
                                        <h5>Best Prices, Great Quality</h5>
                                        <span>Looking for a quality products with low prices and exellent service? You are in the right place.</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End site Info -->
                        </div>
                    </div>
                </div>
                <!-- End Information Section -->

                <!-- Start Home Collection Section -->
                <div class="home-collection  sections-spacing">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters home-collection-prcarousel">
                            {{-- collection first element start --}}
                            <div class="col collection-item">
                                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                                    <img class="img-fluid blur-up lazyload w-100" src="images/collection/collection1.jpg" data-src="images/collection/collection1.jpg" alt="image" title="image" />
                                </a>
                                <div class="collection-details">
                                    <a href="shop-grid-left-sidebar.html" class="collection-title">Interior Accessories</a>
                                </div>
                            </div>
                            {{-- collection first element end --}}

                        </div>
                    </div>
                </div>
                <!-- End Home Collection Section -->

                <!-- Start Popular Product Section -->
                <div class="popular-product sections-spacing">
                    <div class="container">
                        <div class="title-btn clearfix">
                            <div class="section-header">
                                <h2>Popular Product</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                            <div class="viewall-btn top-btn">
                                <a href="shop-grid-fullwidth.html" class="btn btn-secondary">View all</a>
                            </div>
                        </div>
                        <div class="row row-sp row-eq-height">
                            <!-- sec2 first element start  -->
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-image">
                                            <a href="product-details.html">
                                                <img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" />
                                                <img class="img-fluid blur-up lazyload product-imghover" src="images/products/product-1-1.jpg" data-src="images/products/product-1-1.jpg" alt="image" title="image" />
                                            </a>
                                        </div>
                                        <div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-title"><a href="product-details.html">Sed ut perspiciatis unde</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                   
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="compare-price">$125.22</span>
                                            <span class="sale-price">$113.88</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--sec2 first element end -->

                        </div>
                    </div>
                </div>
                <!-- End Popular Product Section -->





                <!-- Start Popular Brand Section -->
                <div class="home-brands sections-spacing">
                    <div class="container">
                        <div class="section-header clearfix">
                            <h2>Popular Brand</h2>
                            <p>Check it out every our updates</p>
                        </div>
                        <div class="row row-sp brand-slider">
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="images/brand/brand1.jpg" data-src="images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="images/brand/brand1.jpg" data-src="images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="images/brand/brand1.jpg" data-src="images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="images/brand/brand1.jpg" data-src="images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="images/brand/brand1.jpg" data-src="images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="images/brand/brand1.jpg" data-src="images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <a class="brands-item" href="#"><img class="img-fluid blur-up lazyload" src="images/brand/brand1.jpg" data-src="images/brand/brand1.jpg" alt="image" title="image" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Popular Brand Section -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection





