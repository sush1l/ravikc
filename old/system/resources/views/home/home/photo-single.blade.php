@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>फोटो ग्यालरी</h3>
</div>
<section class="light-bg inner gallery-images">
  <div class="container-fluid">
    <div class="row gallery-img">
                        <ul id="lightgallery" class="list-unstyled ms-grid">
                        @foreach($photo as $photos)
                 <li class="ms-grid-item" data-src="#" data-sub-html="<p></p>">
                  <a href="" class="">
                  <img class="thumbnail" alt="" src="{{asset('assets/img/hack.jpg')}}"/>
                  </a>
                </li>
                @endforeach
                </ul>
          </div>
    </div>
    </section>
   @endsection
