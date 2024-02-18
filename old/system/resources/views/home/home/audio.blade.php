@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>अडियो ग्यालरी</h3>
</div>
 <section class="light-bg inner">
        <div class="container-fluid">
            <h2 class="heading text-center">
                अडियो ग्यालरी            </h2>
                        <div class="row">
                        @foreach($audio as $audios)
                                    <div class="col-sm-4">
                                                    <div class="thumbnail-wrapper">
                                <a href="#" class="thumbnail">
                                    <div class="audio">
                                    <audio controls>
                                         <source src="{{asset('storage/assets/'.$audios->file)}}" type="audio/ogg">
                                          </audio>
                                           </div>
                                    <div class="caption">
                                        <h3>{{$audios->title}}</h3>
                                        <p>
                                            {!! $medias->description !!}  </p>
                                    </div>
                                </a>
                                <div class="share-icons-bg">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                               </div>
                             </div>
                                @endforeach
                   
                    </div>
                    <div class="row">
                            <div class="col-md-1 offset-md-5">
                            {{$audio->links()}}
                            </div>
                            </div>
                  </div>
            </section>

@endsection
