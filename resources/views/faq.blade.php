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
        .btn {
            max-width: unset;
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
                <div class="container mt-5 faq-section">
                    <h2 class="mb-5" style="color: #f0f0f0">Frequently Asked Questions</h2>
                    <div class="container">
                        <div class="accordion" id="faq-accordion">
                            <div class="card">
                                <div class="card-header" id="faq-heading-1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
                                            1. What is this website about?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq-collapse-1" class="collapse show" aria-labelledby="faq-heading-1" data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>This website is a platform for film enthusiasts to find information about movies, including reviews, ratings, trailers, and recommendations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faq-heading-2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                                            2. How do I search for a specific movie?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq-collapse-2" class="collapse" aria-labelledby="faq-heading-2" data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>You can use the search bar located at the top of the website to find a specific movie. You can search by title, actor, director, or genre.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faq-heading-3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                                            3. Can I watch movies directly on this website?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq-collapse-3" class="collapse" aria-labelledby="faq-heading-3" data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>No, this website does not provide streaming services. However, we provide links to other websites where you can watch the movies you are interested in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faq-heading-4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-3">
                                            4. Can I submit my own movie reviews?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq-collapse-4" class="collapse" aria-labelledby="faq-heading-4" data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, we welcome movie reviews from our users. You can submit your reviews through our contact form or email us directly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faq-heading-5">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-3">
                                            5. Are the movie ratings on this website reliable?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq-collapse-5" class="collapse" aria-labelledby="faq-heading-5" data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>We strive to provide accurate and honest movie ratings on this website. Our ratings are based on a combination of professional reviews and user feedback.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faq-heading-6">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-3">
                                            6. Can I request a movie review or recommendation?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq-collapse-6" class="collapse" aria-labelledby="faq-heading-6" data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, you can send us a request for a movie review or recommendation through our contact form or email. We will do our best to respond to your request in a timely manner.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
