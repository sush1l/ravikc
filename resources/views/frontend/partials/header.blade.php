<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <nav class="navbar navbar-dark px-5">
                    <div class="container-fluid">
                        <button class="navbar-toggler mt-3" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar"
                            aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-headerd d-md-flex justify-content-md-end mt-2">
                                <button type="button" class="btn-close btn-close-white"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body text-center">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/">गृह पृष्ठ</a>
                                    </li>
                                    <li class="nav-item text-white">बिमला के.सी
                                        <a class="nav-link text-white fs-6" href="{{ route('bio') }}">जिवनी</a>
                                    </li>
                                    <li class="nav-item mt-3">
                                        <a class="nav-link text-white" href="{{ route('category') }}">गतिविधि</a>
                                    </li>
                                    <li class="nav-item text-white mt-2">सम्बोधन
                                        <a class="nav-link text-white fs-6" href="{{ route('newspaper') }}">संचारसंग अन्तरक्रिया</a>
                                        <a class="nav-link text-white fs-6" href="{{ route('video') }}">टिभी/भिडियो</a>
                                        <a class="nav-link text-white fs-6" href="{{ route('audio') }}">रेडियो/अडियो</a>
                                    </li>
                                    <li class="nav-item text-white mt-2">विविध विषय
                                        <a class="nav-link text-white fs-6" href="{{ route('contact') }}">सुझाव दिनुहोस्</a>
                                    </li>
                                    <li class="nav-item mt-2">
                                        <a class="nav-link text-white" href="{{ route('login') }}">लग-इन</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-6 col-xs-10">
                <h1 class="text-center mt-3"><a href="/" class="text-decoration-none text-white ">Ravi KC </a></h1>
            </div>
            <div class="col-sm-3 col-xs-2 d-none d-lg-block">
                <div class="large-social-icons text-white">
                    <ul class="list-inline float-right">
                        <li><a href="https://www.facebook.com/ravikcofficial.nepal/?ref=embed_page" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
