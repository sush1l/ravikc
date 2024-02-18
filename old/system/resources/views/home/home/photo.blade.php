@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>फोटो ग्यालरी</h3>
</div>
<section class="media-sec-bg">
        <div class="container-fluid">
            <div class="headingtitle">
                <h2 class="main-heading text-center">
                 फोटो ग्यालरी 
                </h2>
            </div>
            <div class="row">
            @foreach($photo as $photos)
             <div class="ms-grid-item album">
                    <div class="thumbnail-wrapper">
                        <a href="#" class="thumbnail">
                            <img style="width:100%; height: 300px;" src="{{asset('storage/assets/'.$photos->photo)}}" alt="#">
                            <div class="caption">
                                <h3>{{$photos->title}}</h3>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
              </div>
                       <div class="row">
                            <div class="col-md-1 offset-md-5">
                            {{$photo->links()}}
                            </div>
                            </div>
</div>
</section>

@endsection
