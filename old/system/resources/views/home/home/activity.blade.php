@extends('home.header.header')
@section('content')
<div class="media-bg">
          <h3>गतिविधिहरू</h3>
</div>
<section class="media-sec-bg">
        <div class="container-fluid">
          <div class="headingtitle">
        <h2 class="main-heading text-center">
                   गतिविधिहरू<small> चालु गतिविधिहरू</small>
                </h2>
                </div>
                        <div class="row">
                        @foreach($activity as $activities)
                          <div class="col-sm-6">
                            <div class="thumbnail-wrapper">
                                 <a href="{{route('single-activity',[$activities->id])}}" class="thumbnail">
                                              <div class="img-wrapper">
                                                       <img src="{{asset('storage/assets/'.$activities->photo)}}" alt="">
                                                         </div>
                                    <div class="caption">
                                        <h3>{{$activities->title}}</h3>
                               <p>
                                   {!! \Illuminate\Support\Str::words($activities->description, 100,'....')  !!}
                                  
                              </p>
                                    </div>
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
                              </div>
                              </div>
                              @endforeach
                            </div>
                            <div class="row">
                            <div class="col-md-1 offset-md-5">
                            {{$activity->links()}}
                            </div>
                            </div>
        </div>
</section>

@endsection
