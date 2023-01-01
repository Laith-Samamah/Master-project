@extends('master')
@section('title', 'Contact' )
@section('content')
    

<body class="template-contact-us account-page">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>Contact Us</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Contact Us -->
                <div class="contact-us-content">
                    <div class="container">
                        <!-- Start Contact Info -->
                        <div class="contact-info-block">
                            <div class="row row-sp row-eq-height">
                                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                                        <i class="icon ti-location-pin" aria-hidden="true"></i>
                                        <h4>Address</h4>
                                        <p class="mb-0"><b>Jordan, Zarqa</b><br>New Zarqa - Al Karamah st.</p>
                                    </div>
                                </div>

                                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                                        <i class="icon ti-alarm-clock" aria-hidden="true"></i> 
                                        <h4>Delivery Days</h4>
                                        <p class="mb-0"><b>Saturday to Thursday</b></p>
                                    </div>
                                </div>

                                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4 mb-sm-0">
                                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                                        <i class="icon ti-email" aria-hidden="true"></i> 
                                        <h4>Email</h4>
                                        <p class="mb-0"><a href="mailto:email@example.com">info@sparkparts.com</a></p>
                                    </div>
                                </div>

                                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                                        <i class="icon ti-mobile" aria-hidden="true"></i> 
                                        <h4>Phone number</h4>
                                        <p class="mb-0"><a href="tel:(+11)1234567895">(+962) 778082198</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Contact Info -->

                        <!-- Start Contact Form -->
                        <div class="contact-form sections-spacing">
                            <div class="contact-title mb-2">
                                <h4>Get in Touch!</h4>
                                <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
                            </div>
                            <form action="php/ajax_sendmail.php" name="contactus" method="post" id="contact-form" class="contact-form">	
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="ContactName">Name *</label>
                                        <input type="text" id="ContactName" name="name" class="form-control" placeholder="" />
                                        <span class="error_msg" id="name_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ContactEmail">Email Address *</label>
                                        <input type="email" id="ContactEmail" name="email" class="form-control" placeholder="" />
                                        <span class="error_msg" id="email_error"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="ContactPhone">Phone Number *</label>
                                        <input type="tel" class="form-control" id="ContactPhone" name="phone" pattern="[0-9\-]*" placeholder=""  />
                                        <div class="invalid-feedback">Please enter your phone number.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ContactSubject">Subject *</label>
                                        <input type="text" id="ContactSubject" name="subject" class="form-control" placeholder="" />
                                        <span class="error_msg" id="subject_error"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ContactMessage">Message *</label>
                                    <textarea id="ContactMessage" name="message" class="form-control" rows="4" placeholder=""></textarea>
                                    <span class="error_msg" id="message_error"></span>
                                </div>
                                <div class="form-group mailsendbtn button-action mt-1 mt-sm-3 clearfix">	
                                    <input class="account-create btn btn-secondary" type="submit" name="contactus" value="Send" />
                                    <div class="loading"><img class="img-fluid" src="images/ajax-loader.gif" alt="loading"></div>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                    </div>

                    <!-- Start Contact Maps -->
                    <div class="contact-maps">
                        <div class="container-fluid pl-0 pr-0">
                            <div class="responsive-map container align-items-center mb-5">
                                <iframe src="https://www.google.com/maps/@32.0972738,36.0880978,16.31z" ></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Maps -->
                </div>
                <!-- End Contact Us -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection