@extends('frontend.layout.master')
@section('content')
    <div class="background-image" style="background-image:url(https://bimalakc.com/images/bimala.png)">
    </div>
    <div class="container-fluid">
        <div class="headingtitle">
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
                        <div class="card">
                            <img class="card-img-top" src="{{ $activity->photo }}" alt="Card image cap" height="300">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-2"><b>{{ $activity->title_ne }}</b></h5>
                                <p class="card-text text-black">{!! Str::words(strip_tags($activity->desc_ne), 50, '...') !!}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="btn-wrapper text-center my-5">
                <a href="{{ route('category') }}" class="btn-more">
                    सबै पढनुस <br><i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </div>
    <section class="light-bg">
        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bg-left"><img src="{{ asset('images/left.png') }}" alt=""></div>
                <h2 class="main-heading text-center mt-2">
                    सम्बोधन<small>संचारसंग अन्तरक्रिया</small>
                </h2>
                <div class="bg-right"><img src="{{ asset('images/right.png') }}" alt=""></div>
            </div>
            <div class="row">
                @foreach ($newspapers as $newspaper)
                    <div class="col-md-6">
                        <a href="{{ route('newspapers.singleNewspaper',$newspaper->id) }}">
                        <div class="card">
                            <img class="card-img-top" src="{{ $newspaper->photo }}" alt="Card image cap" height="300">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-2"><b>{{ $newspaper->title_ne }}</b></h5>
                                <p class="card-text text-black">{!! Str::words(strip_tags($newspaper->des_ne), 50, '...') !!}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
                <div class="btn-wrapper text-center my-5">
                    <a href="#" class="btn-more">
                        सबै पढनुस <br><i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid mt-3">
        <div class="headingtitle">
            <div class="bg-left"><img src="{{ asset('images/left.png') }}" alt=""></div>
            <h2 class="main-heading text-center mt-2">
                फोटो<small>फोटो ग्यालरी</small>
            </h2>
            <div class="bg-right"><img src="{{ asset('images/right.png') }}" alt=""></div>
        </div>
        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach ($galleries as $gallery)
                        <div class="carousel-item {{ $loop->first ? 'active':'' }}">
                            <div class="col-md-3 px-3">
                                <a href="{{ route('gallery') }}">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{ $gallery->files->first()->file_url??'' }}" height="250" width="270">
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="light-bg">
        <div class="container-fluid">
            <div class="headingtitle">
                <div class="bg-left"><img src="{{ asset('images/left.png') }}" alt=""></div>
                <h2 class="main-heading text-center mt-3">
                    सामाजिक संजाल
                </h2>
                <div class="bg-right"><img src="{{ asset('images/right.png') }}" alt=""></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fravikcofficial.nepal&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="375" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                @foreach ($videos as $video)
                    <div class="col-md-4 mt-2">
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
    </section>
@endsection
