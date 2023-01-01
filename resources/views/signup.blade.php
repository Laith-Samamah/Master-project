@extends('master')
@section('title', 'Register' )
@section('content')
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/LoginRegister.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}" />
    @endpush

<body class="template-register account-page">

@include('includes.navbar')

            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Breadcrumb -->
                <div class="breadcrumbs text-center">
                    <div class="container">
                        <h1>Create An Account</h1>
                        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Create an Account</li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Register Account -->
                {{-- <div class="create-account">
                    <div class="container">
                        <div class="row row-sp">
                            <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="page-title text-center">
                                    <p class="subtitle mb-0">Creating an account will save you time at checkout and allow you to access <br/>
                                        your order status and history.
                                    </p>
                                </div>
                                <form action="#" class="register-form needs-validation" novalidate>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" placeholder="" required />
                                            <div class="invalid-feedback">Please enter your first name.</div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" placeholder="" required />
                                            <div class="invalid-feedback">Please enter your last name.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Email Address *</label>
                                            <input type="email" class="form-control" placeholder="" required />
                                            <div class="invalid-feedback">Please enter your email.</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Password *</label>
                                            <input type="password" class="form-control" placeholder="" required />
                                            <div class="invalid-feedback">Please enter your password.</div>
                                        </div>
                                    </div>
                                    <div class="form-group button-action mt-1 mt-sm-5 clearfix text-center">
                                        <button type="submit" class="account-create btn btn-secondary">Create An Acoount</button>
                                    </div>
                                </form>
                                <div class="form-group button-action mt-1 mt-sm-5 clearfix text-center">
                                   <a href="/login"> <button class="account-create btn btn-secondary">Already have an account? <b> Login here</b></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- End Register Account -->
                <section class="signup">
                    <div class="container containerDiv ">
                        <div class="signup-content">
                            <div class="signup-form">
                                <h2 class="form-title">Sign up</h2>
                                <form action="/signupsubmit" method="POST" class="register-form" id="register-form">
                                    @csrf

                                    @error('name')
                                        <p class='text-danger'> {{ $message }} </p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                                    </div>

                                    @error('email')
                                        <p class='text-danger'> {{ $message }} </p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                                    </div>

                                    @error('phone')
                                    <p class='text-danger'> {{ $message }} </p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                        <input type="phone" name="phone" id="phone" placeholder="Your phone"/>
                                    </div>

                                    @error('city')
                                        <p class='text-danger'> {{ $message }} </p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="city"><i class="zmdi zmdi-city"></i></label>
                                        <input type="city" name="city" id="city" placeholder="Your city"/>
                                    </div>

                                    @error('password')
                                        <p class='text-danger'> {{ $message }} </p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="password" placeholder="Password"/>
                                    </div>

                                    @error('password_confirmation')
                                        <p class='text-danger'> {{ $message }} </p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                                    </div>

                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <figure><img src="images/others/log.jpg" alt="sign up image"></figure>
                                <a href="login" class="signup-image-link">Already a customer? Sign in now.</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- End Main Content -->
            @push('scripts')
            <script src="{{ asset('js/LoginRegister.js') }}"></script>
            @endpush
@include('includes.footer')

@endsection