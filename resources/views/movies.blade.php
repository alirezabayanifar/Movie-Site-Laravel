<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movfix - Online Movies & TV Shows Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                                    <li class="active menu-item-has-children"><a href="{{ route('movies') }}">Movies</a></li>
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

    <!-- movie-area -->
    <section class="movie-area movie-bg" data-background="img/bg/movie_bg.jpg">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <h2 class="title">Movies</h2>
                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">
                @foreach($movies as $movie)
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer">
                        <div class="movie-item movie-item-three mb-50">
                            <div class="movie-poster">
                                <img src="{{ asset($movie->poster) }}" alt="">
                                <ul class="overlay-btn">
                                    <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                    <li><a href="{{ route('movie.single', ['movie' => $movie->slug]) }}" class="btn">Details</a></li>
                                </ul>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">{{ $movie->title }}</a></h5>
                                    <span class="date">{{ \Carbon\Carbon::parse($movie->released)->format('Y') }}</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">FHD</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i>{{ $movie->runtime }}</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i>{{ $movie->imdb_rating }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {!! $movies->withQueryString()->links('page') !!}
        </div>
    </section>
    <!-- movie-area-end -->


</main>
<!-- main-area-end -->


<!-- footer-area -->
@include('./footer')
<!-- footer-area-end -->





<!-- JS here -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
