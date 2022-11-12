@extends('master')
@section('title', 'About' )
@section('content')
    

<body class="template-about-us account-page">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>About Us</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start About Us Content -->
                <div class="about-us-content">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="about-img col-12 col-sm-12 col-md-12 mb-4 mb-lg-0 col-lg-6">
                                <img class="img-fluid blur-up lazyload" src="images/others/about-us.jpg" data-src="images/others/about.png" alt="image" title="image" />
                            </div>
                            <div class="about-content col-12 col-sm-12 col-md-12 col-lg-6">
                                <h3>Welcome to Spark Parts store</h3>
                                <p>SparkParts.com is a technology-driven eCommerce company improving the way drivers and tradesmen shop for the parts they need. After being in business for over 25 years, we’ve focused and streamlined our efforts to build a seamless online shopping experience.</p>
                                <p> On our website you can buy spares from premium manufacturers, in a quality comparable to original parts. And all that at unbeatable prices!</p>
                                <p>The car parts and everything you may need for repairs and regular maintenance of your vehicle are listed in a convenient and comprehensive catalogue. The innovative search and wabsite layout will help you to find automotive parts easily.</p>
                                <p>You can choose whichever payment method is most convenient for you from among the various options. Have any questions? Our support service specialists are always on hand to help. Picking and buying car parts with us is an enjoyable experience!</p>                              
                                <br><a href="/shop" class="btn btn-primary">Shop now!</a>
                            </div>
                        </div>

                        <blockquote class="blockquote">
                            <h2>Choose SPARKPARTS.com – choose quality!</h2>
                            
                        </blockquote>                        
                    </div>
                   
                </div>
                <!-- End About Us Content -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection