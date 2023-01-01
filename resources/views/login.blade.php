@extends('master')
@section('title', 'Login' )
@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/LoginRegister.css') }}" />
<link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}" />
@endpush

<body class="template-login account-page">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>Login</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Login Account -->
                <section class="sign-in">
                    <div class="container containerDiv">
                        <div class="signin-content">
                            <div class="signin-image">
                                <figure><img src="images/others/log.jpg" alt="sing up image"></figure>
                                <a href="/signup" class="signup-image-link">New customer? create an account.</a>
                            </div>
            
                            <div class="signin-form">
                                <h2 class="form-title">Sign in</h2>
                                <form action="/loginsubmit" method="POST" class="register-form" id="login-form">
                                    @csrf
                                    @if (session('error'))
                                        <p class='text-danger'>{{ session('error') }}</p>
                                    @endif
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email material-icons-email"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="password" placeholder="Password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                    </div>
                                </form>
                                <div class="social-login">
                                    <span class="social-label">Or login with</span>
                                    <ul class="socials">
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Login Account -->
            </main>
            <!-- End Main Content -->
            
@include('includes.footer')

@endsection