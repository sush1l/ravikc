@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3> पत्रपत्रिकामा</h3>
</div>
<section class="media-sec-bg media-coverage">
        <div class="container-fluid">
            <div class="headingtitle">
                <h2 class="main-heading text-center">
                 पत्रपत्रिकामा
                </h2>
            </div>
                        <div class="row">
                        @foreach($newspaper as $newes)
                           <div class="col-sm-4">
                        <div class="thumbnail-wrapper">
                            <a href="{{route('single-newspaper',[$newes->id])}}" class="thumbnail">
                                <div class="media-logo">
                                    <img src="#" alt=""/>
                                </div>
                                <div class="img-wrapper">
                               <img src="{{asset('storage/assets/'.$newes->file)}}" alt="">
                                           </div>
                                <div class="dated">
                                    <span class="fa fa-calendar"></span>{{$newes->u_date}}

                                    </div>
                                <div class="caption">
                                    <h3>{{$newes->title}}</h3>
                                    <p>
                                    {!! \Illuminate\Support\Str::words($newes->description, 100,'....')  !!}
                                        </p>
                                        </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                              </div>
                        <div class="row">
                            <div class="col-md-1 offset-md-5">
                            {{$newspaper->links()}}
                            </div>
                            </div>
        </div>
</section>

@endsection
