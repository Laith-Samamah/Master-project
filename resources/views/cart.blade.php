@extends('master')
@section('title', 'Cart' )
@section('content')
    

<body class="template-cart-v2 cart-page">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>Shopping Cart Style2</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start cart Content Inner -->
                <div class="cart-content-inner cart-version-two">
                    <div class="container">
                        <div class="product-cart-table">
                            <div class="row">
                                <!-- Start Cart Details -->
                                <div class="cart-view-table m-0 col-12 col-sm-12 col-lg-12">


                                    <!-- Start Cart Table -->
                                    <div class="table-content table-responsive">
                                        <table class="table table-bordered border-0 table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Image</th>
                                                    <th class="text-center text-sm-left">Product Name</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Qty</th>
                                                    <th class="text-center">Total</th>
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
                                                    <td class="pro-qty text-center">
                                                        <div class="qty-box">
                                                            <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                                            <input type="text" name='quantity' value='1' class="qty-input" />                             
                                                            <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                                        </div>
                                                        <a class="qty-remove ml-3" href="#"><i class="ti-close"></i></a>
                                                    </td>
                                                    <td class="pro-total text-center">$376.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                                    <td class="pro-del text-center text-sm-left">
                                                        <p class="mb-1 pro-name"><a href="product-details.html">Aenean commodo ligula eget dolor</a></p>
                                                        <p class="mb-1">Color: Black</p>
                                                    </td>
                                                    <td class="pro-price text-center">$70.15</td>
                                                    <td class="pro-qty text-center">
                                                        <div class="qty-box">
                                                            <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                                            <input type="text" name='quantity' value='1' class="qty-input" />                             
                                                            <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                                        </div>
                                                        <a class="qty-remove ml-3" href="#"><i class="ti-close"></i></a>
                                                    </td>
                                                    <td class="pro-total text-center">$70.15</td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                                    <td class="pro-del text-center text-sm-left">
                                                        <p class="mb-1 pro-name"><a href="product-details.html">Sociosqu facilisi senectus</a></p>
                                                        <p class="mb-1">Size: Large</p>
                                                    </td>
                                                    <td class="pro-price text-center">$133.50</td>
                                                    <td class="pro-qty text-center">
                                                        <div class="qty-box">
                                                            <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                                            <input type="text" name='quantity' value='1' class="qty-input" />                             
                                                            <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                                        </div>
                                                        <a class="qty-remove ml-3" href="#"><i class="ti-close"></i></a>
                                                    </td>
                                                    <td class="pro-total text-center">$133.50</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Cart Table -->
                                    <!-- Start Cart Action Button -->
                                    <div class="cart-table-action clearfix">
                                        <a href="#" class="btn btn-secondary pull-left">Update Cart</a>
                                        <a href="#" class="btn btn-secondary pull-right">Continue Shopping</a>
                                    </div>
                                    <!-- End Cart Action Button -->
                                </div>
                                <!-- End Cart Details -->
                            </div>
                        </div>

                        <div class="cart-ship-details ">
                            <div class="row d-flex justify-content-between">
                                <!-- Start notes -->
                                <div class="col-12 col-sm-12 col-md-4 col-lg-6 cart-get-shipping">
                                    <h3>Do you have any requests?</h3>
                                    <form action="#" class="needs-validation" novalidate>
                                        
                                            <label>Notes</label>
                                            <textarea  class="form-control" name="" id="" cols="30" rows="5"> </textarea>
                                            
                                        
                                        <div class="form-group get-ship-btn">
                                            <button type="submit" class="btn btn-secondary">Confirm</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End notes -->



                                <!-- Start Cart Sidebar -->
                                <div class="col-12 col-sm-12 col-md-4 col-lg-6 cart-view-summary">
                                    <form action="#" class="checkout-form needs-validation" novalidate>
                                        <h2>Cart Totals</h2>
                                        <!-- Start Cart Total -->
                                        <div class="cart-subtotal clearfix">
                                            <p class="subtle-title m-0 pull-left text-uppercase"><b>Subtotal</b></p>
                                            <p class="sabtotal m-0 pull-right">$1206.80</p>
                                        </div>
                                        <div class="cart-subtotal clearfix">
                                            <p class="subtle-title m-0 pull-left text-uppercase"><b>Total</b></p>
                                            <p class="sabtotal m-0 pull-right">$1206.80</p>
                                        </div>
                                        <!-- End Cart Total -->
                                        <!-- Start Cart Checkout Button -->
                                        <div class="cart-checkout">
                                            <button type="submit" class="btn btn-primary btn-block">Proceed to checkout</button>
                                        </div>
                                        <!-- End Cart Checkout Button -->
                                    </form>

                                </div>
                                <!-- End Cart Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End cart Content Inner -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection