<footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-menu-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer-menu">
                            <nav>
                                <ul class="navigation">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('movies') }}">Movies</a></li>
                                    <li><a href="{{ route('series') }}">Series</a></li>
                                </ul>
                                <div class="footer-search">
                                    <form action="{{ route('search') }}" method="GET">
                                        <input type="text" name="name" placeholder="Find Favorite Movie">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-quick-link-wrap">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="quick-link-list">
                            <ul>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('help') }}">Help Center</a></li>
                                <li><a href="{{ route('terms') }}">Terms of Use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="copyright-text text-center">
                        <p>Copyright &copy; <a href="#">2023</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
