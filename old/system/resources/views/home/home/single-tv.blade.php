@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>टिभी/भिडियो</h3>
</div>
<section class="light-bg inner">
        <div class="container-fluid">
            <h2 class="main-heading text-center">
                <small> {{$single->title}} </small>
            </h2>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail thumbnail-side">
                            <div class="iframe-wrapper">
                        {!! $single->file !!}
                            </div>
                            
                            <div class="clearfix"></div>

                        </div>
                    </div>
                  <div class="col-md-12">
                    <div class="content_image">
                                                </div>
                                            <p> {{$single->title}}<br/>
                                         <br/>
                                          {!! $single->description !!}</p>
                                          </div>
                              </div>                    
                       </div>
        </div>
    </section>

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
        </div>
</section>
    @endsection
