@extends('master')
@section('title', 'Product' )
@section('content')
    

<body class="template-product-detail-classic sticky-view-product">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">


                <!-- Start Breadcrumb -->
                <div class="breadcrumbs classic-breadcrumbs text-left">
                    <div class="container">
                        <h1 class="d-none">Product Detail Classic </h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Product Detail Classic </li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Single Product Detail -->
                <div class="product-single product-detail-classic">
                    <div class="container">
                        <div class="row">
                            <!-- Start Product Store Features -->
                            <div class="col-12 col-sm-12 col-md-6 product-store-features">
                                <!-- Start Product Thumb Slider -->
                                <div class="verticle-thumb-product d-flex pro-verticle-items clearfix">
                                    <!-- Start Product Thumb Images -->
                                    <div class="product-thumb slider thumbnail-vertical-items">
                                        <div class="thumb-item"><img class="img-fluid  lazyload" src="images/products/product-detail-125x125.jpg" data-src="images/products/product-detail-125x125.jpg" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid  lazyload" src="images/products/product-detail-125x125.jpg" data-src="images/products/product-detail-125x125.jpg" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid  lazyload" src="images/products/product-detail-125x125.jpg" data-src="images/products/product-detail-125x125.jpg" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid  lazyload" src="images/products/product-detail-125x125.jpg" data-src="images/products/product-detail-125x125.jpg" alt="image" title="image" /></div>
                                        <div class="thumb-item"><img class="img-fluid  lazyload" src="images/products/product-detail-125x125.jpg" data-src="images/products/product-detail-125x125.jpg" alt="image" title="image" /></div>
                                    </div>
                                    <!-- End Product Thumb Images -->

                                    <div class="product-img-thumb pro-verticle-thumbnails">

                                        <!-- Start Product Single Images -->
                                        <div class="product-single-photo slider thumbnails-vertical-single">
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" src="images/products/product-detail-800x800.jpg" data-src="images/products/product-detail-800x800.jpg" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" src="images/products/product-detail-800x800.jpg" data-src="images/products/product-detail-800x800.jpg" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" src="images/products/product-detail-800x800.jpg" data-src="images/products/product-detail-800x800.jpg" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" src="images/products/product-detail-800x800.jpg" data-src="images/products/product-detail-800x800.jpg" alt="image" title="image" />
                                            </div>
                                            <div class="single-item zoom product-gallery-image">
                                                <img class="img-fluid blur-up lazyload" src="images/products/product-detail-800x800.jpg" data-src="images/products/product-detail-800x800.jpg" alt="image" title="image" />
                                            </div>
                                        </div>
                                        <!-- End Product Single Images -->

                                        <!-- Start Product Action -->
                                        {{-- <div class="product-gallery-actions">
                                            <a id="lightgallery-btn" class="action-btn gallery-popup lightgallery-btn"><i class="ti-zoom-in"></i></a>
                                        </div> --}}
                                        <!-- End Product Action -->


                                    </div>
                                </div>
                                <!-- End Product Thumb Slider -->

                            </div>
                            <!-- End Product Store Features -->

                            <!-- Start Product Info Details -->
                            <div class="col-12 col-sm-12 col-md-6 product-info-details">
                                <!-- Start Product Info -->
                                <div class="profuct-info">
                                    <h1 class="product-title">product name</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo placeat obcaecati blanditiis soluta excepturi provident eveniet, sit dolor, possimus corrupti, nisi dolores unde numquam culpa distinctio perspiciatis maiores odit molestiae!</p>
                                </div>
                                <!-- End Product Info -->

                                <!-- Start Product Price -->
                                <ul class="d-sm-flex flex-sm-row align-items-sm-center product-price-info">
                                    <li class="product-price m-0"><span class="compare-price">$499.00</span><span class="sale-price">$399.00</span></li>
                                </ul>
                                <!-- End Product Price -->

                                <!-- Start Product List Info -->
                                <ul class="d-flex flex-column pro-lists">
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur elit.</li>
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Maecenas vehicula lorem et facilisis eleifend.</li>
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Quisque mattis augue quis risus euismod pharetra.</li>
                                    <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Curabitur bibendum massa vitae risus lacinia rutrum.</li>
                                </ul>
                                <!-- End Product List Info -->


                                <!-- Start Cart Box -->
                                <div class="addToBox">
                                    <form action="#" class="d-sm-flex flex-sm-row">
                                        <!-- Start Product Quantity -->
                                        <div class="product-form-item product-quantity">
                                            <div class="qty-box">
                                                <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                                <input type="text" name='quantity' value='1' class="qty-input" />                             
                                                <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <!-- End Product Quantity -->

                                        <!-- Start Product Add Cart -->
                                        <div class="product-form-item product-submit btn-block">
                                            <a href="cart.html" class="btn btn-primary btn-block product-btn-cart add-cart">Add to Cart</a>
                                        </div>
                                        <!-- End Product Add Cart -->

                                        <!-- Start Product Buy Now -->
                                        <div class="product-form-item product-submit pro-buy btn-block">
                                            <a href="checkout.html" class="btn btn-secondary btn-block product-btn-cart buy-btn">Buy It Now</a>
                                        </div>
                                        <!-- End Product Buy Now -->
                                    </form>
                                </div>
                                <!-- End Cart Box -->

                                <div class="wish-size-ship clearfix">
                                    <!-- Start Product Wish List -->
                                    <div class="wishlistOuter pull-left">
                                        <a href="wishlist.html"><i class="ti-heart align-middle mr-2"></i> <span class="align-middle">Add To Wishlist</span></a>
                                    </div>
                                    <!-- End Product Wish List -->

                                </div>




                            </div>
                            <!-- End Product Info Details -->
                        </div>
                    </div>
                </div>
                <!-- End Single Product Detail -->

                <!-- Start Product Detail Accordion -->
                <div class="products-detail-tabs products-detail-accordion sections-spacing">
                    <div class="container">
                        <div class="accordion" id="products-detail-accordion">
                            <!-- Start Product Details Accordion1 -->
                            <div class="card border-0">
                                <div class="card-header" id="headingOne">
                                    <a class="accordion-btn" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Product Details</a>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#products-detail-accordion">
                                    <div class="card-body drawertab-content">
                                        <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <h3>Sample Paragraph Text</h3>
                                        <ul class="d-flex flex-column pro-lists">
                                            <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</li>
                                            <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Aenean sollicitudin, lorem quis bibendum auctor.</li>
                                            <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Nisi elit consequat ipsum, nec sagittis sem nibh id elit.</li>
                                            <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</li>
                                        </ul>
                                        <div class="product-info-img">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <img class="img-fluid blur-up lazyload" src="images/others/product-details1.jpg" data-src="images/others/product-details1.jpg" alt="image" title="image" />
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <img class="img-fluid blur-up lazyload" src="images/others/product-details1.jpg" data-src="images/others/product-details1.jpg" alt="image" title="image" />
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped product-info-table">
                                            <tbody>
                                                <tr>
                                                    <td>Proof</td>
                                                    <td>PDF Proof</td>
                                                </tr>
                                                <tr>
                                                    <td>Samples</td>
                                                    <td>Digital, Printed</td>
                                                </tr>
                                                <tr>
                                                    <td>Wrapping</td>
                                                    <td>Yes, No</td>
                                                </tr>
                                                <tr>
                                                    <td>Uv Gloss Coating</td>
                                                    <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
                                                </tr>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>0.05, 0.06, 0.07ess cards</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>Praesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra convallis nec danos dui. Cras suscipit quam et turpis eleifend vitae malesuada magna congue. Damus id ullamcorper neque. Sed vitae mi a mi pretium aliquet ac sed elit. Pellentesque nulla eros accumsan quis justo at tincidunt lobortis denimes loremous. Suspendisse vestibulum lectus in lectus volutpat, ut dapibus purus pulvinar. Vestibulum sit amet auctor ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Details Accordion1 -->

                        </div>
                    </div>
                </div>
                <!-- End Product Detail Accordion -->

                <!-- Start Related Product -->
                <div class="related-product sections-spacing">
                    <div class="container">
                        <div class="section-header">
                            <h2>Related Product</h2>
                            <p>Browse the huge variety of our products</p>
                        </div>
                        <div class="row row-sp row-eq-height prcarousel">
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            <span class="label new">New</span>
                                            <span class="label sale">Sale</span>
                                        </div>
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
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            <span class="label soldout">-20%</span>
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
                                        <h3 class="product-title"><a href="product-details.html">Aenean commodo ligula eget dolor</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="compare-price">$75.20</span>
                                            <span class="sale-price">$70.15</span>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            <span class="label soldout">Sold Out</span>
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
                                        <h3 class="product-title"><a href="product-details.html">Sociosqu facilisi senectus</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$133.50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            <span class="label hot">Hot</span>
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
                                        <h3 class="product-title"><a href="product-details.html">Nullam scelerisque suscipit sociis</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="compare-price">$145.05</span>
                                            <span class="sale-price">$135.33</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <h3 class="product-title"><a href="product-details.html">Consectetur adipisicing elit</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-half-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$113.88</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Related Product -->

                <!-- Start Recently Viewed Product -->
                <div class="recently-viewed-product sections-spacing">
                    <div class="container">
                        <div class="section-header">
                            <h2>Recently Viewed Products</h2>
                            <p>Browse the huge variety of our products</p>
                        </div>
                        <div class="row row-sp row-eq-height prcarousel">
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
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            <span class="label soldout">-20%</span>
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
                                        <h3 class="product-title"><a href="product-details.html">Neque porro quisquam dolorem</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-half-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="compare-price">$75.20</span>
                                            <span class="sale-price">$70.15</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <h3 class="product-title"><a href="product-details.html">Praesent convallis scelerisque</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                           
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$133.50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <h3 class="product-title"><a href="product-details.html">Aliquam faucibus sem nec</a></h3>
                                        <h4 class="product-vendor">Posh Auto Parts</h4>                                            
                                        <div class="product-starrating">
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star"></i>
                                            <i class="spr-icon fa fa-star-half-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                            <i class="spr-icon fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$135.33</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Recently Viewed Product -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection