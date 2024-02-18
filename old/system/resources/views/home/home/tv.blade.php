@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>टिभी/भिडियो</h3>
</div>
<section class="media-sec-bg">
        <div class="container-fluid">
            <div class="headingtitle">
                <h2 class="main-heading text-center">
                 टिभी/भिडियो
                </h2>
            </div>
                        <div class="row">
                        @foreach($tv as $tvs)
                          <div class="col-sm-4">
                            <div class="thumbnail-wrapper">
                                 <a href="{{route('single-tv',[$tvs->id])}}" class="thumbnail">
                                              <div class="img-wrapper">
                                                       {!! $tvs->file !!}
                                                         </div>
                                    <div class="caption">
                                        <h3>{{$tvs->title}}</h3>
                               <p>
                                    {!! \Illuminate\Support\Str::words($tvs->description, 100,'....')  !!}
                                  
                              </p>
                                    </div>
                                </a>
                                <div class="share-icons">
                               <a class="fb-share-button" 
                                                  href="https://www.facebook.com/sharer/sharer.php?u={{route('single-tv',[$tvs->id])}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{route('single-tv',[$tvs->id])}}"
                                     data-size="large">
                                     <i class="fa fa-twitter"></i></a>
                                </div>
                              </div>
                              </div>
                              @endforeach
                            </div>
                          <div class="row">
                            <div class="col-md-1 offset-md-5">
                            {{$tv->links()}}
                            </div>
                            </div>
        </div>
</section>

@endsection
