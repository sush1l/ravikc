@extends('frontend.layout.master')
@section('content')
    <div class="media-bg">
        <h3>टिभी/भिडियो</h3>
    </div>
    <section class="light-bg inner">
        <div class="container-fluid">
            <h2 class="main-heading text-center">
                {{ $video->title_ne }}</h2>
            <div class="col-md-12">
                <iframe width="1200" height="500" src="{{ $video->video }}" title="{{ $video->title_ne }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </section>
    <div class="container-fluid mb-3">
        <div class="headingtitle">
            <div class="bg-left"><img src="{{ asset('images/left.png') }}" alt=""></div>
            <h2 class="main-heading text-center mt-2">
                टिभी/भिडियो</small>
            </h2>
            <div class="bg-right"><img src="{{ asset('images/right.png') }}" alt=""></div>
        </div>
        <div class="row">
            @foreach ($videos as $video)
                <div class="col-md-6">
                    <a href="{{ route('videos.singleVideo', $video->id) }}">
                        <div class="card my-3">
                            <iframe height="300" src="{{ $video->video }}" title="{{ $video->title_ne }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title text-center mb-2"><b>{{ $video->title_ne }}</b></h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
