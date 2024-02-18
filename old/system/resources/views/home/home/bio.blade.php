@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>जीवनी सङ्रक्षेपमा</h3>
</div>
<section id="bio" class="cont">
        <div class="container-fluid">
            <div class="headingtitle">
                <h2 class="main-heading text-center">
                   विमला के.सी<small>जीवनी सङ्रक्षेपमा</small>
                </h2>
            </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="bios-wrapper">
                                 <a href="#" class="bios">
                                 @foreach($bio as $bios)
                                    <div class="caption">
                                        <img src="{{asset('storage/assets/'.$bios->photo)}}"  style="width: 180px; height: 200px; float: right;">
                               <p style="text-align: justify;">
                                   {!! $bios->jiwani !!}
                                  
                              </p>
                                    </div>
                                    @endforeach
                                </a>
                              </div>
                            </div>
                              </div>
        </div>
</section>

@endsection
