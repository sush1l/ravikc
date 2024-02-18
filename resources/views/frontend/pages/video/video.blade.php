@extends('frontend.layout.master')
@section('content')
<div class="media-bg">
    <h3>टिभी/भिडियो</h3>
</div>
<div class="container-fluid mb-3">
    <div class="headingtitle">
        <h2 class="main-heading text-center mt-2">
            टिभी/भिडियो 
        </h2>
    </div>
    <div class="row mt-3">
        @foreach ($videos as $video)
            <div class="col-md-6 mt-2">
                <a href="{{ route('videos.singleVideo', $video->id) }}">
                    <div class="card">
                        <iframe height="300" src="{{ $video->video }}" title="{{ $video->title_ne }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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