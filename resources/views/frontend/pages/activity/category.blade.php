@extends('frontend.layout.master')
@section('content')
<div class="media-bg">
    <h3>गतिविधिहरू</h3>
</div>
<div class="container-fluid">
    <div class="row mt-3">
        @foreach ($activities as $activity)
            <div class="col-md-6 mb-4">
                <a href="{{ route('activities.singleActivity',$activity->id) }}">
                <div class="card">
                    <img class="card-img-top" src="{{ $activity->photo }}" alt="Card image cap" height="300">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-2"><b>{{ $activity->title_ne }}</b></h5>
                        <p class="card-text text-black">{!! Str::words(strip_tags($activity->desc_ne), 30, '...') !!}</p>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
