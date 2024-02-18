@extends('frontend.layout.master')
@section('content')
<div class="media-bg">
    <h3>गतिविधिहरू</h3>
</div>
<section class="light-bg inner">
    <div class="container-fluid">
        <h2 class="main-heading text-center">
           {{ $activity->title_ne }}</h2>
        <div class="about-inner">

            <div class="content_image">

                <img
                    src="{{ $activity->photo }}"
                    alt="About" align="">
                <div class="share-icons">
                    <a class="fb-share-button"
                        href="https://www.facebook.com/sharer/sharer.php?u=https://bimalakc.com/storage/assets/1602160811_Helth News Jumla-1200x560-wm_1603014047.jpg">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a class="twitter-share-button"
                        href="https://twitter.com/intent/tweet?text=https://bimalakc.com/storage/assets/1602160811_Helth News Jumla-1200x560-wm_1603014047.jpg"
                        data-size="large">
                        <i class="fa-brands fa-twitter"></i></a>
                </div>
                <p style="text-align: justify;">
                {!! $activity->desc_ne !!}
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="headingtitle" style="margin-top: 100px">
        <div class="bg-left"><img src="{{ asset('images/left.png') }}" alt=""></div>
        <h2 class="main-heading text-center mt-2">
            गतिविधिहरू<small> चालु गतिविधिहरू</small>
        </h2>
        <div class="bg-right"><img src="{{ asset('images/right.png') }}" alt=""></div>
    </div>
    <div class="row">
        @foreach ($activities as $activity)
            <div class="col-md-6">
                <a href="{{ route('activities.singleActivity',$activity->id) }}">
                    <div class="card my-3">
                        <img class="card-img-top" src="{{ $activity->photo }}" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2"><b>{{ $activity->title_ne }}</b></h5>
                            <p class="card-text text-black">{!! Str::words(strip_tags($activity->desc_ne), 50, '...') !!}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
