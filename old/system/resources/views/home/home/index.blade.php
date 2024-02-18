@extends('home.header.header')
@section('content')
<br>
<br>
<br>
<div class="background-main" style="background-image:url({{asset('assets/img/bimalakcc.jpeg')}})">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            
                        </p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-4">
                        <p class="text-right">
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <section class="">
        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bgleft"><img src="{{asset('assets/img/left.png')}}" alt=""></div>
                <h2 class="main-heading text-center">
                   गतिविधिहरू<small> चालु गतिविधिहरू</small>
                </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>
                        <div class="row">
                        @foreach($gatibidi as $gatibidhi)
                          <div class="col-sm-6">
                            <div class="thumbnail-wrapper">
                                 <a href="{{route('single-activity',[$gatibidhi->id])}}" class="thumbnail">
                                              <div class="img-wrapper">
                                                       <img src="{{asset('storage/assets/'.$gatibidhi->photo)}}" alt="">
                                                         </div>
                                    <div class="caption">
                                        <h3>{{$gatibidhi->title}}</h3>
                               <p>
                               {!! \Illuminate\Support\Str::words(strip_tags($gatibidhi->description), 80,'....')  !!}
                                  
                              </p>
                                    </div>
                                </a>
                                <div class="share-icons">
                               <a class="fb-share-button" 
                                                  href="https://www.facebook.com/sharer/sharer.php?u={{route('single-activity',[$gatibidhi->id])}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{route('single-activity',[$gatibidhi->id])}}"
                                     data-size="large">
                                     <i class="fa fa-twitter"></i></a>
                                </div>
                              </div>
                              </div>
                              @endforeach
                         </div>
                       <div class="btn-wrapper">
                            <a href="{{route('activity')}}" class="btn-more">
                            सबै पढनुस</a>
                        </div>
        </div>
</section>
  <section class="light-bg">
        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bgleft"><img src="{{asset('assets/img/left.png')}}" alt=""></div>
                <h2 class="main-heading text-center">
                   मन्त्रीमाहुदा<small>गर्नुभएका अतुलनिय कामहरु</small>
                </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>
                        <div class="row">
                        @foreach($mantri as $mantini)
                          <div class="col-sm-6">
                            <div class="thumbnail-wrapper">
                                 <a href="{{route('single-minister',[$mantini->id])}}" class="thumbnail">
                                              <div class="img-wrapper">
                                                       <img src="{{asset('storage/assets/'.$mantini->photo)}}" alt="">
                                                         </div>
                                    <div class="caption">
                                        <h3>{{$mantini->title}}</h3>
                               <p>
                                   {!! \Illuminate\Support\Str::words(strip_tags($mantini->description), 100,'....')  !!}
                              </p>
                                    </div>
                                </a>
                                <div class="share-icons">
                               <a class="fb-share-button" 
                                                  href="https://www.facebook.com/sharer/sharer.php?u={{route('single-minister',[$mantini->id])}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{route('single-minister',[$mantini->id])}}"
                                     data-size="large">
                                     <i class="fa fa-twitter"></i></a>
                                </div>
                              </div>
                            </div>
                             @endforeach
                           </div>
                               <div class="btn-wrapper">
                            <a href="{{route('mantri')}}" class="btn-more">
                            सबै पढनुस</a>
                        </div>
               </div>
                    
</section>
 <section class="">
        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bgleft"><img src="{{asset('assets/img/left.png')}}" alt=""></div>
                <h2 class="main-heading text-center">
                   सम्बोधन<small> संचारसंग अन्तरक्रिया</small>
                </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>
                        <div class="row">
                        @foreach($newspaper as $news)
                          <div class="col-sm-6">
                            <div class="thumbnail-wrapper">
                                 <a href="{{route('single-media',[$news->id])}}" class="thumbnail">
                                              <div class="img-wrapper">
                                                       <img src="{{asset('storage/assets/'.$news->file)}}" alt="">
                                                         </div>
                                    <div class="caption">
                                        <h3>{{$news->title}}</h3>
                               <p>
                                      {!! \Illuminate\Support\Str::words(strip_tags($news->description), 100,'....')  !!}
                              </p>
                                    </div>
                                </a>
                               <div class="share-icons">
                               <a class="fb-share-button" 
                                                  href="https://www.facebook.com/sharer/sharer.php?u={{route('single-media',[$news->id])}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{route('single-media',[$news->id])}}"
                                     data-size="large">
                                     <i class="fa fa-twitter"></i></a>
                                </div>
                              </div>
                              </div>
                              @endforeach
                            </div>
                       <div class="btn-wrapper">
                            <a href="{{route('media')}}" class="btn-more">
                            सबै पढनुस</a>
                        </div>
                  </div>
              </section>

              <section class="light-bg">
        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bgleft"><img src="{{asset('assets/img/left.png')}}" alt=""></div>
                <h2 class="main-heading text-center">
                   ग्यालरी <small>फोटो ग्यालरी </small>
                </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>
                       <div class="owl-slider">
<div id="carousel" class="owl-carousel">
         @foreach($photo as $photos)
         <div class="card-image">
         <a href="{{route('photo')}}">
	<div class="item">
		<img class="owl-lazy" style="width:100%; height:250px;" data-src="{{asset('storage/assets/'.$photos->photo)}}" alt="">
	</div>
    </a>
    </div>
    @endforeach
</div>
</div>
              </section>
                     <section class="">
        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bgleft"><img src="{{asset('assets/img/left.png')}}" alt=""></div>
                <h2 class="main-heading text-center">
                  सामाजिक संजाल
                </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>
            <div class="row">
            <div class="col-md-4">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBimala-kc-108963763805547%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=889877551561781"
            width="340" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" 
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
             <div class="col-md-8" style="float:left;">
                 @foreach($tv->take(2) as $tvs)
                          <div class="col-sm-6" style="float:left;">
                            <div class="thumbnail-wrapper">
                                 <a href="{{route('single-tv',[$tvs->id])}}" class="thumbnail">
                                              <div class="img-wrapper">
                                                       {!! $tvs->file !!}
                                                         </div>
                                    <div class="caption">
                                        <h3>{{$tvs->title}}</h3>
                               
                                    </div>
                                </a>
                                
                              </div>
                              </div>
                              @endforeach
                 </div>
                 </div>
            </div>
            </section>
@endsection
