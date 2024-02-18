@extends('frontend.layout.master')
@section('content')
    <div class="media-bg">
        <h3>फोटो ग्यालरी</h3>
    </div>
    <div class="container-fluid">
        <div class="headingtitle">
            <h2 class="main-heading text-center mt-2">
                फोटो ग्यालरी
            </h2>
        </div>
        <div class="row my-3">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 my-2">
                    <div class="card">
                        <img class="first" src="{{ $gallery->files->first()?->file_url ?? '' }}" height="300"
                            alt="" />
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2"><b>{{ $gallery->title_ne }}</b></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
