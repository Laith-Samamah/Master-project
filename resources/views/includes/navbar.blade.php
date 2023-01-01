        <!-- Start Page Loader -->
        <div class="page-loading"></div>
        <!-- End Page Loader -->

        <!--  Start Main Wrapper -->
        <div class="main-wrapper cart-drawer-push">


            <!-- Start Header Section -->
            <header class="header bg-white">
                <div class="container-fluid full-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Start Navigation -->
                        <nav class="navigation navbar position-static navbar-expand-lg p-0 w-50">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"><span class="icon ti-menu"></span></button>        
                            <div id="navbar-collapse" class="navbar-collapse collapse dual-nav">
                                <a href="#" class="closeNav-btn d-lg-none clearfix" id="closeNav" title="Close"><span class="menu-close mr-2">Close</span><i class="ti-close" aria-hidden="true"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="/">Home<span ></span></a>  
                                        <!-- Start Megamenu Dropdown -->
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/shop">Shop
                                            <span class="arw plush" title="Click to show/hide"></span>
                                        </a>  
                                        <!-- Start Megamenu Style 2 -->
                                        <div class="megamenu submenu style2">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-lg-12">
                                                        <div class="row">
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-2">
                                                                <h3>Categories Pages</h3>
                                                                
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-2">
                                                                <h3>Categories Pages</h3>
                                                                
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-2">
                                                                <h3>Product pages</h3>
                                                                
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-2">
                                                                <h3>Shop pages</h3>
                                                                
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-2">
                                                                <h3>Blog Pages</h3>
                                                                
                                                            </div>
                                                            <div class="megamenu-lvl col-12 col-sm-12 col-lg-2">
                                                                <a href=""><h3>Other Pages</h3></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Megamenu Style 2 -->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about">About Us</a>  
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">Contact Us</a>  
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- End Navigation -->
                        <!-- Start Logo -->
                        <div class="navbar-brand logo mx-auto p-0 text-center">
                            <a href="/" class="logo-img"><img class="img-fluid" src="../images/logo/sparklogo_copy.png" alt="logo" title="Auto Parts" /></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Start Right Menu -->
                        <div class="w-50 right-side">
                            <!-- Start Minicart -->
                            <div class="minicart float-right">
                                <a href="#" class="cart-btn" title="Cart" data-toggle="modal" data-target="#mycartdrawer">
                                    <i class="icon ti-shopping-cart"></i>
                                    <div class="cart-count">
                                        <span id="count">0</span>
                                    </div>
                                </a>
                            </div>
                            <!-- End Minicart -->
                            <!-- Start Setting Menu -->
                            <div class="setting-menu float-right">
                                <a href="#" class="setting-toggle" title="My Account">                
                                    <i class="icon ti-user"></i>
                                </a>
                                <div class="settinglinks" style="display:none">
                                    <!-- Menu Links -->
                                    <div class="my-links">
                                        <h4>My Account</h4>
                                        <ul class="p-0 m-0">
                                            @auth
                                            <li><a href="/profile">Profile</a></li>
                                            <li><a href="/wishlist">Wishlist</a></li>
                                            <li><a href="/logout">logout</a></li>
                                            {{-- <li><a href={{ route("logout") }}>logout</a></li> --}}
                                            @endauth
                                            @guest()
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/signup">signup</a></li> 
                                            @endguest
                                            
                                            

                                        </ul>
                                    </div>
                                    <!-- Emd Menu Links -->
                                </div>
                            </div>
                            <!-- End Setting Menu -->
                            <!-- Start Search Box -->
                            <div class="search-box float-right">
                                <a href="#" title="Search" class="search-open search-toggle" data-toggle="modal" data-target="#searchform">
                                    <i class="icon ti-search"></i> 
                                </a>
                            </div>
                            <!-- End Search Show -->
                        </div>
                        <!-- End Right Menu -->
                    </div>
                </div>
            </header>
            <!-- End Header Section -->