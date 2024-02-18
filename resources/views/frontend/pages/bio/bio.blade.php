@extends('frontend.layout.master')
@section('content')
    <div class="media-bg">
        <h3>जीवनी सङ्रक्षेपमा</h3>
    </div>
    <section class="light-bg inner">
        <div class="container-fluid">
            <h2 class="main-heading text-center mt-2">
                विमला के.सी<small>
                    जीवनी सङ्रक्षेपमा</small></h2>
            @foreach ($bios as $bio)
                <div class="card px-2">
                    <div class="about-inner">
                        <div class="content_image">
                            <img class="img-responsive" src="{{ $bio->photo }}" alt="About" align="">
                            <p style="text-align: justify; color:black;">
                            <p class="text-black">{!! $bio->data !!}</p>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
