@extends('master')
@section('title', 'Checkout' )
@section('content')
    

<body class="template-checkout">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>checkout Style1</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">checkout</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start checkout -->
                <div class="checkout-content">
                    <div class="container">


                        <!-- Start Checkout Content -->
                        <div class="row">
                            <!-- Start Checkout Form -->
                            <div class="checkout-form col-12 col-sm-12 col-lg-8 mb-5 mb-lg-0 sidebar-left">
                                <!-- Start Shipping Form -->
                                <form action="#" class="shiping-form needs-validation" novalidate>
                                    <div class="card rounded-0">
                                        <div class="card-header rounded-0">Shipping Address</div>
                                        <div class="card-body">
                                            <div class="row form-group mb-0">
                                                <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                    <label>First Name: *</label>
                                                    <input type="text" name="first-name" class="form-control" placeholder="" required />
                                                    <div class="invalid-feedback">Please enter your first name.</div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                    <label>Last Name: *</label>
                                                    <input type="text" name="last-name" class="form-control" placeholder="" required />
                                                    <div class="invalid-feedback">Please enter your last name.</div>
                                                </div>
                                            </div>
                                            <div class="row form-group mb-0">
                                                <div class="col-12 col-sm-12 col-md-12 mb-4">
                                                    <label>Address: *</label>
                                                    <textarea class="form-control" name="address" rows="3" placeholder="" required></textarea>
                                                    <div class="invalid-feedback">Please enter your address.</div>
                                                </div>
                                            </div>
    
                                            <div class="row form-group mb-0">
                                                    <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                    <label>Phone Number: *</label>
                                                    <input type="text" name="phone-number" class="form-control" placeholder="" required />
                                                    <div class="invalid-feedback">Please enter your phone number.</div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                    <label>City: *</label>
                                                    <select class="select2 js-city form-control" name="city" required>
                                                        <option value="Easter">Easter</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row form-group mb-0">

                                                <div class="col-12 col-sm-6 col-md-6 mb-4">
                                                    <label>Email Address: *</label>
                                                    <input type="email" name="email-address" class="form-control" placeholder="" required />
                                                    <div class="invalid-feedback">Please enter your email.</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <!-- End Shipping Form -->
                            </div>
                            <!-- End Checkout Form -->

                            <!-- Start Cart Order -->
                            <div class="checkout-order col-12 col-sm-12 col-lg-4 sidebar sidebar-right">
                                <h3>Review Order</h3>
                                <!-- Start Order Cart Table -->
                                <div class="table-content table-responsive mb-4">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><b>Product</b></th>
                                                <th class="text-left"></th>
                                                <th class="text-center"><b>Price</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pro-img text-center"><a href="#"><img class="img-fluid blur-up lazyload" src="images/products/product-60x60.jpg" data-src="images/products/product-60x60.jpg" alt="image" title="image" width="60" /></a></td>
                                                <td class="pro-del text-left">
                                                    <p class="mb-1 pro-name">Donec pede justo fringilla</p>
                                                    <p class="mb-1">Quantity: 2</p>
                                                </td>
                                                <td class="pro-price text-center">$376.00</td>
                                            </tr>
                                            <tr>
                                                <td class="pro-img text-center"><a href="#"><img class="img-fluid blur-up lazyload" src="images/products/product-60x60.jpg" data-src="images/products/product-60x60.jpg" alt="image" title="image" width="60" /></a></td>
                                                <td class="pro-del text-left">
                                                    <p class="mb-1 pro-name">Aenean commodo ligula</p>
                                                    <p class="mb-1">Quantity: 6</p>
                                                </td>
                                                <td class="pro-price text-center">$70.15</td>
                                            </tr>
                                            <tr>
                                                <td class="pro-img text-center"><a href="#"><img class="img-fluid blur-up lazyload" src="images/products/product-60x60.jpg" data-src="images/products/product-60x60.jpg" alt="image" title="image" width="60" /></a></td>
                                                <td class="pro-del text-left">
                                                    <p class="mb-1 pro-name">Sociosqu facilisi senectus</p>
                                                    <p class="mb-1">Quantity: 2</p>
                                                </td>
                                                <td class="pro-price text-center">$133.50</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="2"><b>Subtotal:</b></td>
                                                <td class="text-center font-14"><strong>$529.15</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="2"><b>Shipping:</b></td>
                                                <td class="text-center"><strong> - </strong></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="2"><b>Total:</b></td>
                                                <td class="text-center font-14"><strong>$529.15</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Order Cart Table -->

                                <!-- Start Payment Method -->
                                <div class="payment-method accordion" id="payment-method">
                                    <!-- Start Cash on delivery -->
                                    <div class="card border-0 rounded-0 mb-3">
                                        <div class="card-header border-0 rounded-0 p-0 bg-white" id="payment-One1">
                                            <div class="form-check" role="tablist" data-toggle="collapse" data-target="#paymentOne" aria-expanded="true" aria-controls="paymentOne">
                                                <input class="form-check-input" type="radio" name="paymentRadio" id="paymentRadio1" checked />
                                                <label class="form-check-label w-100 ml-3" for="paymentRadio1">Cash on delivery</label>
                                            </div>
                                        </div>
                                        <div id="paymentOne" class="collapse show" aria-labelledby="paymentOne" data-parent="#payment-method">
                                            <div class="card-body p-0 text-muted font-13">Pay with cash upon delivery.</div>
                                        </div>
                                    </div>
                                    <!-- End Cash on delivery -->

                                    <!-- Start Bank payments -->
                                    <div class="card border-0 rounded-0 mb-3">
                                        <div class="card-header border-0 rounded-0 bg-white p-0" id="payment-One2">
                                            <div class="form-check" role="tablist" data-toggle="collapse" data-target="#paymentOne2" aria-expanded="false" aria-controls="paymentOne2">
                                                <input class="form-check-input" type="radio" name="paymentRadio" id="paymentRadio2" />
                                                <label class="form-check-label w-100 ml-3" for="paymentRadio2">Bank payments</label>
                                            </div>
                                        </div>
                                        <div id="paymentOne2" class="collapse" aria-labelledby="paymentOne2" data-parent="#payment-method">
                                            <div class="card-body p-0">
                                                <!-- Start Form Card CC Payment -->
                                                <div class="card-outline-secondary">
                                                    <div class="alert alert-info font-12">
                                                        CVC code is required.
                                                        <a class="close" data-dismiss="alert" href="#"><i class="ti-close"></i></a>
                                                    </div>
                                                    <form action="#" autocomplete="off" class="form needs-validation" novalidate>
                                                        <div class="form-group mb-4 mb-sm-3">
                                                            <label>Card Number</label> 
                                                            <input type="text" autocomplete="off" class="form-control" maxlength="20" required />
                                                            <div class="invalid-feedback">Please enter your card number.</div>
                                                        </div>
                                                        <div class="form-group row mb-0 mb-sm-3">
                                                            <label class="col-12 col-sm-12 col-md-12">Card Exp. Date</label>
                                                            <div class="col-12 col-sm-4 col-md-4 mb-4 mb-sm-0">
                                                                <select class="select2 form-control" name="cc-exp-mo" required>
                                                                    <option value="" disabled selected>Months</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="02">03</option>
                                                                    <option value="02">04</option>
                                                                    <option value="02">05</option>
                                                                    <option value="02">06</option>
                                                                    <option value="02">07</option>
                                                                    <option value="02">08</option>
                                                                    <option value="02">09</option>
                                                                    <option value="02">10</option>
                                                                    <option value="02">11</option>
                                                                    <option value="02">12</option>
                                                                </select>
                                                                <div class="invalid-feedback">Please select months.</div>
                                                            </div>
                                                            <div class="col-12 col-sm-4 col-md-4 mb-4 mb-sm-0">
                                                                <select class="select2 form-control w-100" name="cc-exp-yr" required>
                                                                    <option value="" disabled selected>Year</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                </select>
                                                                <div class="invalid-feedback">Please select year.</div>
                                                            </div>
                                                            <div class="col-12 col-sm-4 col-md-4 mb-4 mb-sm-0">
                                                                <input type="text" autocomplete="off" class="form-control" maxlength="3" placeholder="CVC" title="Three digits on the back of your card" required />
                                                                <div class="invalid-feedback">Please enter your CVC.</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4 mb-sm-3">
                                                            <label>Amount</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">$</span>
                                                                </div>
                                                                <input type="text" class="form-control text-right" placeholder="32" aria-label="Amount (to the nearest dollar)" required />
                                                                <div class="invalid-feedback">Please enter amount.</div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-4">
                                                            <div class="col-12 col-sm-6 col-md-6 mb-4 mb-sm-0">
                                                                <button class="btn btn-secondary btn-lg btn-block" type="reset">Cancel</button>
                                                            </div>
                                                            <div class="col-12 col-sm-6 col-md-6">
                                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- End Form Card CC Payment -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Bank payments -->
                                </div>                                
                                <!-- End Payment Method -->

                                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>

                                <div class="form-group mt-5">
                                    <a href="checkout-success.html" class="btn btn-primary btn-lg btn-block place-order-btn">Place order</a>
                                </div>
                            </div>
                            <!-- End Cart Order -->
                        </div>
                        <!-- End Checkout Content -->
                    </div>
                </div>
                <!-- End checkout -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection