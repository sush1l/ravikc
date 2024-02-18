@extends('frontend.layout.master')
@section('content')
    <div class="media-bg">
        <h3>अडियो ग्यालरी</h3>
    </div>
    <section class="light-bg inner">
        <div class="container-fluid mb-3">
            <h4 class="main-heading text-center mt-2">
                अडियो ग्यालरी</h4>
            <div class="col-md-4">
                @foreach ($audios as $audio)
                    <div class="card">
                        <h5 class="text-center fw-bold my-2">{{ $audio->title_ne }}</h5>
                        <audio controls>
                            <source src="{{ $audio->file }}" type="audio/ogg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
