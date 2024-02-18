@extends('home.header.header')
@section('content')
<div class="media-bg">
 <h3>गतिविधिहरू</h3>
</div>
<section class="light-bg inner">
    <div class="container-fluid">
                 <h2 class="main-heading text-center">
                       {{$single->title}}        </h2>
                        <div class="about-inner">

                            <div class="content_image">                          

                    <img class="img-responsive" src="{{asset('storage/assets/'.$single->photo)}}" alt="About" align="">
                                       <div class="share-icons">
                               <a class="fb-share-button" 
                                  href="https://www.facebook.com/sharer/sharer.php?u={{asset('storage/assets/'.$single->photo)}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{asset('storage/assets/'.$single->photo)}}"
                                     data-size="large">
                                     <i class="fa fa-twitter"></i></a>
                                </div>

                            <p><p style="text-align: justify;">
                            {!! $single->description !!}
                            <br/>
                                  <br/>
                        </div>
                      </div>
</section>

<section class="related-articles">

        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bgleft"><img src="{{asset('assets/img/left.png')}}" alt=""></div>
                    <h2 class="main-heading text-center">
                      गतिविधिहरू<small> चालु गतिविधिहरू</small>               </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>


            <div class="row">
              @foreach($activity as $activities)
                      <div class="col-sm-4">
                        <div class="thumbnail-wrapper">
                            <a href="{{route('single-activity',[$activities->id])}}" class="thumbnail">
                                   <div class="img-wrapper">
                            <img src="{{asset('storage/assets/'.$activities->photo)}}">
                                          </div>
                                <div class="caption">
                                    <h3>{{$activities->title}}</h3>
                                    <p>{!! \Illuminate\Support\Str::words($activities->description, 100,'....')  !!} </p>
                                </div><!-- /.caption -->
                            </a>
                             <div class="share-icons">
                               <a class="fb-share-button" 
                                  href="https://www.facebook.com/sharer/sharer.php?u={{route('single-activity',[$activities->id])}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{route('single-activity',[$activities->id])}}"
                                     data-size="large">
                                     <i class="fa fa-twitter"></i></a>
                                </div>
                            </div><!-- /.thumbnail-wrapper -->
                    </div><!-- /.col-sm-4 -->
                     @endforeach
                    </div>
                
            </div>
    </section>
    @endsection
