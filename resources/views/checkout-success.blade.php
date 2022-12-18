@extends('master')
@section('title', 'Successful checkout' )
@section('content')
    

<body class="template-checkout-success">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Checkout Success -->
                <div class="checkout-success-content">
                    <div class="container">



                        <div class="row row-sp">
                            <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="card border-0 rounded-0">
                                    <div class="card-body">
                                        <p class="checkout-success-icon"><i class="fa fa-check-square-o"></i></p>
                                        <h4 class="card-title">Thank you for your purchase!</h4>
                                        <p class="card-text mb-1">Your order # is: <b>10000034</b>.</p>
                                        <p class="card-text mb-1">You will receive an order confirmation email with details of your order and a link to track its progress.</p>
                                        <p class="card-text mb-1">All necessary information about the delivery, we sent to your email</p>
                                        <a href="/" class="btn btn-primary mt-4">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="checkout-item-ordered">
                                    <h2>Item Ordered</h2>
                                    <div class="table-content table-responsive checkout-review mb-4">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"></th>
                                                    <th class="text-left">Product Name</th>
                                                    <th class="text-center">Qty</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100"></a></td>
                                                    <td class="pro-name text-center text-sm-left"><p class="mb-1"><a href="product-details.html">Waterproof Cigarette tiyer</a></p></td>
                                                    <td class="pro-price text-center">1</td>
                                                    <td class="pro-price text-center">$376.00</td>
                                                    <td class="pro-total text-center">$376.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="images/products/product-100x100.jpg" data-src="images/products/product-100x100.jpg" alt="image" title="image" width="100"></a></td>
                                                    <td class="pro-name text-center text-sm-left"><p class="mb-1"><a href="product-details.html">Waterproof Cigarette tiyer</a></p></td>
                                                    <td class="pro-price text-center">1</td>
                                                    <td class="pro-price text-center">$376.00</td>
                                                    <td class="pro-total text-center">$376.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="text-right">
                                                <tr>
                                                    <td colspan="4" class="item subtotal">Subtotal:</td>
                                                    <td class="last">$59.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="item tax">Tax:</td>
                                                    <td class="last">$4.87</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="item discount">Discount:</td>
                                                    <td class="last">$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="item shipping">Shipping:</td>
                                                    <td class="last">$5.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="item total">Grand Total:</td>
                                                    <td class="last">$68.87</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="ship-info-details shipping-method-details">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="shipping-details mb-4 mb-sm-0 clearfix">
                                                    <h3>Shipping Address</h3>
                                                    <p>No 40 Baria Street 133/2,</p>
                                                    <p>New York,</p>
                                                    <p>USA</p>
                                                    <p>00004-1988</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="billing-details clearfix">
                                                    <h3>Shipping Method</h3>
                                                    <p>Flat Rate - Fixed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ship-info-details billing-payment-details">
                                        <div class="row">

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-12">
                                                <div class="billing-details clearfix">
                                                    <h3>Payment Method</h3>
                                                    <p>Check / Money order</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="delivery-date"><strong>Delivery Date:</strong> N/A</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- End Checkout Success -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection
