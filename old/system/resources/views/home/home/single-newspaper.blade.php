@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3> पत्रपत्रिकामा</h3>
</div>
<section class="light-bg inner">
    <div class="container-fluid">
<h2 class="main-heading text-center">
    {{$single->title}}       </h2>



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
                     पत्रपत्रिकामा<small> संग्लग्न हुनुभयको</small>               </h2>
                <div class="bgright"><img src="{{asset('assets/img/right.png')}}" alt=""></div>
            </div>


            <div class="row">
              @foreach($paper as $papers)
                      <div class="col-sm-4">
                        <div class="thumbnail-wrapper">
                            <a href="{{route('single-newspaper',[$papers->id])}}" class="thumbnail">
                                   <div class="img-wrapper">
                            <img src="{{asset('storage/assets/'.$papers->file)}}">
                                          </div>
                                <div class="caption">
                                    <h3>{{$papers->title}}</h3>
                                    <p>{!! \Illuminate\Support\Str::words($papers->description, 100,'....')  !!} </p>
                                </div><!-- /.caption -->
                            </a>
                            <div class="share-icons">
                               <a class="fb-share-button" 
                                  href="https://www.facebook.com/sharer/sharer.php?u={{route('single-newspaper',[$papers->id])}}">
                                                   <i class="fa fa-facebook"></i>
                                 </a>
                                 <a class="twitter-share-button"
                                     href="https://twitter.com/intent/tweet?text={{route('single-newspaper',[$papers->id])}}"
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
