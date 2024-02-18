@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>संचारसंग अन्तरक्रिया</h3>
</div>
<section class="media-sec-bg">
        <div class="container-fluid">
            <div class="headingtitle">
                <h2 class="main-heading text-center">
                   सम्बोधन<small> संचारसंग अन्तरक्रिया</small>
                </h2>
            </div>
                        <div class="row">
                        @foreach($media as $medias)
                          <div class="col-sm-6">
                            <div class="thumbnail-wrapper">
                                 <a href="{{route('single-media',[$medias->id])}}" class="thumbnail">
                                              <div class="img-wrapper">
                                                       <img src="{{asset('storage/assets/'.$medias->file)}}" alt="">
                                                         </div>
                                    <div class="caption">
                                        <h3>{{$medias->title}}</h3>
                               <p>
                                    {!! \Illuminate\Support\Str::words($medias->description, 100,'....')  !!}
                                  
                              </p>
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
                         <div class="row">
                            <div class="col-md-1 offset-md-5">
                            {{$media->links()}}
                            </div>
                            </div>
        </div>
</section>

@endsection
