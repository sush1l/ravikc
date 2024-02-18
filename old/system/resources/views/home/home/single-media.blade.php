@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>संचारसंग अन्तरक्रिया</h3>
</div>
<section class="light-bg inner">
    <div class="container-fluid">
<h2 class="main-heading text-center">
    {{$single->title}}</h2>



                        <div class="about-inner">

                            <div class="content_image">                        
             <img class="img-fluid" src="{{asset('storage/assets/'.$single->file)}}" width="600" alt="" align="">
                                    <div class="share-icons">
                                        <a href="" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                                                </div>

                            <p><p style="text-align: justify;">{!! $single->description !!}<br/>
<br/>
</div>
</div>
</section>
<section class="related-articles">

        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bgleft"><img src="{{asset('assets/img/left.png')}}" alt=""></div>
                    <h2 class="main-heading text-center">
                      मन्त्रीमाहुदा<small>गर्नुभएका अतुलनिय कामहरु</small>             </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>


            <div class="row">
            @foreach($media as $medias)
                <div class="col-sm-4">
                        <div class="thumbnail-wrapper">
                            <a href="{{route('single-media',[$medias->id])}}" class="thumbnail">
                                   <div class="img-wrapper">
                            <img src="{{asset('storage/assets/'.$medias->file)}}">
                                          </div>
                                <div class="caption">
                                    <h3>{{$medias->title}}</h3>
                                    <p>{!! \Illuminate\Support\Str::words($medias->description, 60,'....')  !!} </p>
                                </div>
                            </a>
                            <div class="share-icons">
                               <a class="fb-share-button" 
                                  href="https://www.facebook.com/sharer/sharer.php?u={{route('single-media',[$medias->id])}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{route('single-media',[$medias->id])}}"
                                     data-size="large">
                                     <i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                      </div>

    </section>
    @endsection
