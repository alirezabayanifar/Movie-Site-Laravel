<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movfix - Online Movies & TV Shows</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        h2,h1 {
            color:#E4D804;
        }
    </style>
</head>
<body>

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('img/logo/logo.png') }}" alt="Logo">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="menu-item-has-children"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="menu-item-has-children"><a href="{{ route('movies') }}">Movies</a></li>
                                    <li><a href="{{ route('series') }}">Series</a></li>

                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search">
                                        <a href="#" data-toggle="modal" data-target="#search-modal">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="text" name="name" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Search-end -->

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->


<!-- main-area -->
<main>

    <!-- latest-movie-area -->
    <section class="services-area services-bg" data-background="img/bg/services_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <h1>TERMS OF USE</h1>
                <hr>
                <p>Welcome to Your Movie Website, an online platform that provides information about movies and allows users to stream or download movies (the "Service"). By accessing or using our website, you agree to these terms of use (the "Agreement").</p>

                <h2>AGE RESTRICTIONS</h2>
                <hr>
                <p>Our website is intended for use by individuals who are 18 years of age or older. By accessing or using our website, you represent and warrant that you are at least 18 years old.</p>

                <h2>USER ACCOUNTS</h2>
                <hr>
                <p>In order to use certain features of our website, you may be required to create an account. You are solely responsible for maintaining the confidentiality of your account information, including your username and password. You agree to accept responsibility for all activities that occur under your account.</p>

                <h2>USER CONTENT</h2>
                <hr>
                <p>Our website may allow users to post, upload, publish, or otherwise make available content such as reviews, comments, or ratings (collectively, "User Content"). You retain all rights in, and are solely responsible for, the User Content you post to our website.</p>

                <p>By posting User Content, you grant us a non-exclusive, transferable, sub-licensable, royalty-free, worldwide license to use, modify, publicly perform, publicly display, reproduce, and distribute such User Content on and through our website.</p>

                <p>You represent and warrant that: (i) the User Content is yours (you own it) or you have the right to use it and grant us the rights and license as provided in these Terms of Use; (ii) the User Content does not infringe on the rights of any third party, including intellectual property rights and privacy rights; and (iii) the User Content complies with all applicable laws and regulations.</p>

                <h2>COPYRIGHT INFRINGEMENT</h2>
                <hr>
                <p>We respect the intellectual property rights of others and expect our users to do the same. If you believe that your work has been copied in a way that constitutes copyright infringement, please contact us at [insert contact information].</p>
            </div>
        </div>
    </section>
    <!-- latest-movie-area-end -->

</main>
<!-- main-area-end -->

<!-- footer-area -->
@include('./footer')
<!-- footer-area-end -->


<!-- JS here -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
