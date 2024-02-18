<!DOCTYPE html>
<html>
<head>
<meta property="og:url"           content="bimalakc.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Bimala kc Personal Website" />
  <meta property="og:description"   content="Persinal website" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bimala Kc</title>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,700|Arizonia" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>
           <div class="container">
                    <div class="row">
                    <div class="col-sm-3">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="modal" data-target="#menuModal">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                      </button>
                       </div>
                       <div class="col-sm-6 col-xs-10">
                                <h1 class="text-center"><a href="/">Bimala KC </a></h1>
                           </div>
                    <div class="col-sm-3 col-xs-2 d-none d-lg-block">
                   <div class="large-social-icons">
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/bimala.kc.129" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                    </div>
</div>
</div>
</header>

<div class="modal fade fullscreen" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color:#fff;">
            <div class="modal-header" style="border:0;">
                <h4 class="modal-title text-center"><span class="sr-only">main navigation</span></h4>
            </div>
            <div class="modal-body text-center">
                <a href="/">
                    गृह पृष्ठ</a>
                <ul class="list-unstyled">
                  <li>विमला के.सी <ul class="list-unstyled">
                    <li>
                      <a href="{{route('bio')}}">जीवनी</a>
                    </li>
                  </ul>
                </li>

                  <li>सक्रिय
                    <ul class="list-unstyled">
                      <li>
                        <a href="{{route('activity')}}">गतिविधि</a>
                      </li>
                    </ul>
                  </li>

                <li>सम्बोधन
                  <ul class="list-unstyled">
                    <li>
                      <a href="{{route('media')}}">संचारसंग अन्तरक्रिया</a>
                    </li>
                    <li>
                      <li><a href="{{route('tv')}}">टिभी/भिडियो</a></li>
                    </li>
                    <li>
                      <li><a href="{{route('paper')}}">पत्रपत्रिकामा</a></li>
                    </li>
                    <li>
                      <a href="{{route('audio')}}">रेडियो/अडियो</a>
                    </li>
                  </ul>
                </li>

                <li>लेखहरु
                  <ul class="list-unstyled">
                    <li>
                      <a href="{{route('book')}}">किताब</a>
                    </li>
                  </ul>
                </li>

                <li>उपलब्धि
                  <ul class="list-unstyled">
                    <li>
                      <a href="{{route('mantri')}}">मन्त्रीमा हुदा</a>
                    </li>
                  </ul>
                </li>

                <li>विविध विषय
                  <ul class="list-unstyled">
                    <li>
                      <a href="{{route('contact')}}">सुझाव दिनुहोस्</a>
                    </li>
                  </ul>
                </li>
                <li>
                      <a href="https://bimalakc.com/admin/login" style="font-size:18px;">लग-इन</a>
                    </li>
              </ul> 
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.fullscreen -->
@yield('content')
<section class="services" style="background: #002872;">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-sm-1 col-sm-2 col-xs-6">
                <a href="{{route('bio')}}" class="service-icon">
                    <img src="{{asset('assets/img/jibani.png')}}" alt=""/>
                    <span>जीवनी </span>
            </a>
        </div>
            <div class="col-sm-2 col-xs-6">
                <a href="{{route('paper')}}" class="service-icon">
                    <img src="{{asset('assets/img/newspaper.png')}}" alt=""/>
                    <span>पत्रपत्रिकामा </span>
                </a>
            </div><!-- /.col-md-3 -->
            <div class="col-sm-2 col-xs-6">
                <a href="{{route('book')}}" class="service-icon">
                    <img src="{{asset('assets/img/book.png')}}" alt=""/>
                    <span>पुस्तक </span>
                </a>
            </div><!-- /.col-md-3 -->
            <div class="col-sm-2 col-xs-6">
                <a href="{{route('photo')}}" class="service-icon">
                    <img src="{{asset('assets/img/gallery.png')}}" alt=""/>
                    <span>फोटो ग्यालरी </span>
                </a>
            </div><!-- /.col-md-3 -->
            <div class="col-sm-2 col-xs-6">
                <a href="{{route('tv')}}" class="service-icon">
                    <img src="{{asset('assets/img/tv.png')}}" alt=""/>
                    <span>टिभी/भिडियो</span>
                </a>
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<footer class="footer">
<div class="container-fluid">
<div class="row">
            <div class="col-sm-4">
               <h2 class="footer-h2">
                <small>© २०७८/०२/२८ by: <a href="https://www.facebook.com/bimala.kc.129">Bimala K.C</a></small>
                </h2>
          </div>
          <div class="col-sm-6">
              <div class="large-social-icons">
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/bimala.kc.129" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                     <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                      <li><a href="https://soundcloud.com/" target="_blank"><i class="fa fa-cloud"></i></a></li>
                                </ul>
                            </div>
          </div>
           <div class="col-sm-2">
               <h2 class="footer-h2">
                <small>Website by: <a href="https://ninjainfosys.com" target="_blank">NINJA</a></small>
                </h2>
          </div>
          </div>
          </div>
  </footer>
  <script> 
jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
 </script>
   <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
