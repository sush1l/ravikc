@extends('frontend.layout.master')
@section('content')
    <div class="media-bg">
        <h3>संचारसंग अन्तरक्रिया</h3>
    </div>
    <div class="container-fluid mb-3">
        <div class="headingtitle">
            <h2 class="main-heading text-center mt-2">
                सम्बोधन<small>संचारसंग अन्तरक्रिया</small>
            </h2>
        </div>
        <div class="row mt-3">
            @foreach ($newspapers as $newspaper)
                <div class="col-md-6">
                    <a href="{{ route('newspapers.singleNewspaper', $newspaper->id) }}">
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
        </div>
    </div>
@endsection
