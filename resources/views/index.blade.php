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
                                    <li class="active menu-item-has-children"><a href="{{ route('index') }}">Home</a></li>
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
    <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg">
        <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
        <div class="container">
            <div class="row align-items-end mb-55">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Latest Movies</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ucm-nav-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">Series</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <!-- latest-movies -->
                <div class="tab-pane fade show active" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                    <div class="ucm-active owl-carousel">
                        @foreach($latestMovies as $movie)
                            <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{ route('movie.single', ['movie' => $movie->slug]) }}"><img src="{{ asset($movie->poster) }}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{ route('movie.single', ['movie' => $movie->slug]) }}">{{ $movie->title }}</a></h5>
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
                        @endforeach
                    </div>
                </div>
                <!-- latest-movies-end-->
                <!-- latest-Tv-Shows -->
                <div class="tab-pane fade" id="tvShow" role="tabpanel" aria-labelledby="movies-tab">
                    <div class="ucm-active owl-carousel">
                        @foreach($latestSeries as $movie)
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="{{ route('movie.single', ['movie' => $movie->slug]) }}"><img src="{{ asset($movie->poster) }}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="{{ route('movie.single', ['movie' => $movie->slug]) }}">{{ $movie->title }}</a></h5>
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
                        @endforeach
                    </div>
                </div>
                <!-- latest-Tv-Show-end-->
                <!-- latest-anime -->
                <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="movies-tab">
                    <div class="ucm-active owl-carousel">
                        @foreach($latestMovies as $movie)
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="{{ route('movie.single', ['movie' => $movie->slug]) }}"><img src="{{ asset($movie->poster) }}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="{{ route('movie.single', ['movie' => $movie->slug]) }}">{{ $movie->title }}</a></h5>
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
                        @endforeach
                    </div>
                </div>
                <!-- latest-anime-end-->
            </div>
        </div>
    </section>
    <!-- latest-movie-area-end -->

    <!-- services-area -->
    <section class="services-area services-bg" data-background="img/bg/services_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="services-img-wrap">
                        <img style="border-radius: 15px" src="{{ asset('images/1.png') }}" alt="">
                        <a href="img/images/services_img.jpg" class="download-btn" download>Download <img src="fonts/download.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-content-wrap">
                        <div class="section-title title-style-two mb-20">
                            <span class="sub-title">Our Services</span>
                            <h2 class="title">Watch trailers and full movies online.</h2>
                        </div>
                        <p>Here we provided a new sevice for you to watch movies and trailers online and even you can download them in the best way.</p>
                        <div class="services-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-television"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Enjoy Watching Official Trailers</h5>
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-video-camera"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Download every movie you want</h5>
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg" data-background="img/bg/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Top Rated Movies</h2>
                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">
                @foreach($topRatedAllVideos as $movie)
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer {{ $movie->type }}">
                        <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="{{ route('movie.single', ['movie' => $movie->slug]) }}"><img src="{{ asset($movie->poster) }}" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="{{ route('movie.single', ['movie' => $movie->slug]) }}">{{ $movie->title }}</a></h5>
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
        </div>
    </section>
    <!-- top-rated-movie-end -->

    <!-- live-area -->
    <section class="live-area live-bg fix" data-background="img/bg/live_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title title-style-two mb-25">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Live Movie & TV Shows For Friends & Family</h2>
                    </div>
                    <div class="live-movie-content">
                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod There are many variations of passages of lorem Ipsum
                            available, but the majority have suffered alteration.</p>
                        <div class="live-fact-wrap">
                            <div class="resolution">
                                <h2>HD 4K</h2>
                            </div>
                            <div class="active-customer">
                                <h4><span class="odometer" data-count="250"></span>+</h4>
                                <p>Top Movies</p>
                            </div>
                        </div>
                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="live-movie-img wow fadeInRight" data-wow-delay=".2s" data-wow-duration="1.8s">
                        <img src="{{ asset('images/family.jpg') }}" style="border-radius: 15px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- live-area-end -->

    <!-- tv-series-area -->
    <section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Best TV Series</span>
                        <h2 class="title">World Best TV Series</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($topSeries as $movie)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="movie-item mb-50">
                        <div class="movie-poster">
                            <a href="{{ route('movie.single', ['movie' => $movie->slug]) }}"><img src="{{ asset($movie->poster) }}" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="{{ route('movie.single', ['movie' => $movie->slug]) }}">{{ $movie->title }}</a></h5>
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
        </div>
    </section>
    <!-- tv-series-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
        <div class="container">
            <div class="newsletter-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h4>Trial Start First 30 Days.</h4>
                            <p>Enter your email to create or restart your membership.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('email') }}" method="POST" class="newsletter-form">
                            @csrf
                            <input type="email" name="email" required placeholder="Enter your email">
                            <button class="btn">get started</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->

<!-- footer-area -->
@include('./footer')
<!-- footer-area-end -->


<!-- JS here -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
