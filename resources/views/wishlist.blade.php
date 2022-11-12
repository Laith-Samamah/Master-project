@extends('master')
@section('title', 'Wishlist' )
@section('content')
    

<body class="template-wishlist-page">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>Wishlist</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Wishlist</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Wishlist content -->
                <div class="wishlist-content">
                    <div class="container">
                        <div class="table-content table-responsive">
                            <table class="table table-bordered border-0 table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Image</th>
                                        <th class="text-center text-sm-left">Product Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Stock Status</th>
                                        <th class="text-center">Add To Cart</th>
                                        <th class="text-center">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                        <td class="pro-del text-center text-sm-left">
                                            <p class="mb-1 pro-name"><a href="product-details.html">Donec pede justo fringilla</a></p>
                                            <p class="mb-1">Size: Small</p>
                                            <p class="mb-1">Color: Black</p>
                                        </td>
                                        <td class="pro-price text-center">$376.00</td>
                                        <td class="qty-stock text-center">In Stock</td>
                                        <td class="wishlist-cart-btn text-center"><a href="cart.html" class="btn btn-primary add-cart">Add to Cart</a></td>
                                        <td class="remove-wish text-center"><a class="wish-remove" href="#"><i class="ti-close"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                        <td class="pro-del text-center text-sm-left">
                                            <p class="mb-1 pro-name"><a href="product-details.html">Aenean commodo ligula eget dolor</a></p>
                                            <p class="mb-1">Color: Black</p>
                                        </td>
                                        <td class="pro-price text-center">$70.15</td>
                                        <td class="qty-stock text-center">In Stock</td>
                                        <td class="wishlist-cart-btn text-center"><a href="cart.html" class="btn btn-primary add-cart">Add to Cart</a></td>
                                        <td class="remove-wish text-center"><a class="wish-remove" href="#"><i class="ti-close"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                        <td class="pro-del text-center text-sm-left">
                                            <p class="mb-1 pro-name"><a href="product-details.html">Sociosqu facilisi senectus</a></p>
                                            <p class="mb-1">Size: Large</p>
                                        </td>
                                        <td class="pro-price text-center">$133.50</td>
                                        <td class="qty-stock text-center">8</td>
                                        <td class="wishlist-cart-btn text-center"><a href="cart.html" class="btn btn-primary add-cart">Add to Cart</a></td>
                                        <td class="remove-wish text-center"><a class="wish-remove" href="#"><i class="ti-close"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                        <td class="pro-del text-center text-sm-left">
                                            <p class="mb-1 pro-name"><a href="product-details.html">Nullam scelerisque suscipit sociis</a></p>
                                            <p class="mb-1">Size: Large</p>
                                            <p class="mb-1">Color: Red</p>
                                        </td>
                                        <td class="pro-price text-center">$135.33</td>
                                        <td class="qty-stock text-center">In Stock</td>
                                        <td class="wishlist-cart-btn text-center"><a href="cart.html" class="btn btn-primary add-cart">Add to Cart</a></td>
                                        <td class="remove-wish text-center"><a class="wish-remove" href="#"><i class="ti-close"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                        <td class="pro-del text-center text-sm-left">
                                            <p class="mb-1 pro-name"><a href="product-details.html">Consectetur adipisicing elit</a></p>
                                            <p class="mb-1">Size: Small</p>
                                        </td>
                                        <td class="pro-price text-center"> $145.44</td>
                                        <td class="qty-stock text-center">3</td>
                                        <td class="wishlist-cart-btn text-center"><a href="cart.html" class="btn btn-primary add-cart">Add to Cart</a></td>
                                        <td class="remove-wish text-center"><a class="wish-remove" href="#"><i class="ti-close"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Wishlist content -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection