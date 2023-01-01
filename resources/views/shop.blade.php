@extends('master')
@section('title', 'Shop' )
@section('content')
    

<body class="template-product-grid-leftsidebar">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>Shop</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Product with Filter -->
                <div class="product-filter-sidebar">
                    <div class="container">
                        <div class="row">
                            <!-- Start Product Filter -->
                            <div class="col-12 col-sm-12 col-lg-3 sidebar sidebar-left">


                                <!-- Start Shop By -->
                                <div class="filter-block">
                                    <h3 class="block-title shopby">SHOP BY</h3>
                                    <div class="block-content">
                                        <!-- Start Categories -->
                                        <div class="block-item categories">
                                            <h4 class="sub-title">Categories</h4>
                                            <ul class="block-details list sidebar-collections">
                                                <li class="cat"><a href="/shop">All Products</a>
                                                @foreach ($mainC as $main )
                                                <li class="cat-submenu-link"><a href="#">{{ $main->name }}</a>
                                                    <ul class="cat-submenu-list">
                                                        <li class="item"><a href="/shop?category={{ $main->id }}"> All {{ $main->name }}</a></li>
                                                        @foreach ( $subC as $sub )
                                                            @if ($sub->main_category_id==$main->id)
                                                            <li class="item"><a href="/shop?sCategory={{ $sub->id }}">{{ $sub->name }}</a></li>
                                                            @endif 
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- End Categories -->
                                        <!-- Start Price -->
                                        <div class="block-item price">
                                            <h4 class="sub-title">Price</h4>
                                            <div class="block-details">
                                                <div class="rangeslider">
                                                    <div class="slider-range"></div>
                                                </div>
                                                <div class="form-group m-0 d-flex justify-content-between align-items-center">
                                                    <label class="range-number m-0 pull-left"></label>
                                                    <button type="submit" class="btn btn-primary pull-right find-btn">Find</button>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Price -->
                                    </div>
                                </div>
                                <!-- End Shop By -->

                                <!-- Start Popular Products -->
                                <div class="cms-block popular-products">
                                    <h4 class="sub-title">Popular Products</h4>
                                    <div class="cms-block-content">
                                        <ul class="d-flex flex-column color-item">
                                            <li>
                                                <div class="pop-img pull-left mr-3"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" /></a></div>
                                                <div class="pop-dec pull-left">
                                                    <a class="d-block" href="product-details.html">Carbon Fiber Steering Wheel</a>
                                                    <span class="d-block product-price">$98.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pop-img pull-left mr-3"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" /></a></div>
                                                <div class="pop-dec pull-left">
                                                    <a class="d-block" href="product-details.html">Car Precedent LED Headlight</a>
                                                    <span class="d-block product-price">$100.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pop-img pull-left mr-3"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="image" title="image" /></a></div>
                                                <div class="pop-dec pull-left">
                                                    <a class="d-block" href="product-details.html">Single DIN Stereo Dash Kit</a>
                                                    <span class="d-block product-price">$190.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Popular Products -->



                                <!-- Start Custom Content -->
                                <div class="cms-block custom-content d-none d-lg-block">
                                    <h4 class="sub-title">Custom CMS Block</h4>
                                    {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p> --}}
                                    {{-- <p class="">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p> --}}
                                </div>
                                <!-- End Custom Content -->

                                <!-- Start Custom Banner -->
                                <div class="cms-block popular-tags d-none d-lg-block">
                                    <a class="d-block" href="shop-grid-fullwidth.html"><img class="img-fluid blur-up lazyload" src="images/banner/fillter-banner.jpg" data-src="images/banner/fillter-banner.jpg" alt="image" title="image" /></a>
                                </div>
                                <!-- End Custom Banner -->
                            </div>
                            <!-- End Product Filter -->

                            <!-- Start Products -->
                            <div class="product-view-items product-grid col-12 col-sm-12 col-lg-9 sidebar-right">


                                <!-- Start Filters Tollbar -->
                                <div class="filters-toolbar">
                                    <div class="row row-sp align-items-center">
                                        <div class="col-sp col-4 col-sm-4 text-left order-1 order-sm-0">

                                        </div>
                                        <div class="col-sp col-12 col-sm-4 text-center mb-4 mb-sm-0 order-0 order-sm-1">
                                            <p class="m-0">Showing {{ count($Products) }} results</p>
                                        </div>
                                        <div class="col-sp col-8 col-sm-4 text-right order-2 order-sm-2">
                                            <div class="filters-item">
                                                <div class="form-group m-0">
                                                    <label for="Sortby">Sort by:</label>
                                                    <select id="Sortby" class="form-control select2">
                                                        <option value="manual">Featured</option>
                                                        <option value="best-selling">Best Selling</option>
                                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                                        <option value="title-descending">Alphabetically, Z-A</option>
                                                        <option value="price-ascending">Price, low to high</option>
                                                        <option value="price-descending">Price, high to low</option>
                                                        <option value="created-descending">Date, new to old</option>
                                                        <option value="created-ascending">Date, old to new</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Filters Tollbar -->

                                <!-- Start Products Grid -->
                                
                                <div class="products products-grid">
                                    <div class="row row-sp row-eq-height">
                                        {{-- first product start --}}
                                        @foreach ($Products as $Product )
                                            
                                        <div class="col-sp col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <div class="product-item">
                                                <div class="product-image-action">
                                                    {{-- <div class="product-label">
                                                        <span class="label soldout">-20%</span>
                                                        <span class="label new">New</span>
                                                        <span class="label sale">Sale</span>
                                                    </div> --}}
                                                    <div class="product-image">
                                                        <a href="/product/{{ $Product->id }}">
                                                            <img class="img-fluid blur-up lazyload" src="images/products/product-1.jpg" data-src="{{ $Product->image1 }}" alt="image" title="image" />
                                                            <img class="img-fluid blur-up lazyload product-imghover" src="images/products/product-1-1.jpg" data-src="{{ $Product->image2 }}" alt="image" title="image" />
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul>
                                                            <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                            {{-- <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li> --}}
                                                            <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                            {{-- <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <h3 class="product-title"><a href="product-details.html">{{ $Product->name }}</a></h3>
                                                    <h4 class="product-vendor">{{ $Product->subCategory->name }}</h4>                                       
                                                
                                                    <div class="product-price">
                                                        <span class="sale-price">Price: {{ $Product->price }} JD</span>
                                                    </div>
                                                    <div class="image-swatch-list">
                                                        <ul class="d-flex flex-row justify-content-center align-items-center">
                                                            <li data-toggle="tooltip" data-placement="top" title="xl"><img class="img-fluid" src="{{ $Product->image1 }}" alt="image" title="" /></li>
                                                            @if ($Product->image2 !== null)
                                                            <li data-toggle="tooltip" data-placement="top" title="x"><img class="img-fluid" src="{{ $Product->image2 }}" alt="image" title="" /></li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- first product end --}}

                                    </div>

                                    <!-- Start Load More Button -->
                                    <div class="product-readmore text-center">
                                        <button type="submit" class="btn btn-secondary">Load More</button>
                                    </div>
                                    <!-- End Load More Button -->
                                </div>
                                <!-- End Products Grid -->
                            </div>
                            <!-- End Products -->
                        </div>
                    </div>
                </div>
                <!-- End Product with Filter -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection