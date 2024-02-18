@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>पुस्तकहरु</h3>
</div>
<section class="light-bg inner">
    <div class="container-fluid">
        <h2 class="heading text-center">
            पुस्तकहरु        </h2>
        <div class="ms-grid">
                            <div class="ms-grid-item publication">
                    <div class="thumbnail-wrapper">
                        <a href="#" class="thumbnail" style="height: auto !important;">
                            <img src="{{asset('assets/img/book.jpg')}}" alt="किताव १">
                                                         <div class="caption">
                                <h3>किताव १</h3>

                            </div><!-- /.caption -->
                        </a>

                    </div><!-- /.thumbnail-wrapper -->
                </div>
                                            <div class="ms-grid-item publication">
                    <div class="thumbnail-wrapper">
                        <a href="" class="thumbnail" style="height: auto !important;">
                          <img src="{{asset('assets/img/book.jpg')}}" alt="किताव २">
                                  <div class="caption">
                                <h3>किताव २</h3>

                            </div><!-- /.caption -->
                        </a>

                    </div><!-- /.thumbnail-wrapper -->
                </div>
                                            <div class="ms-grid-item publication">
                    <div class="thumbnail-wrapper">
                        <a href="#" class="thumbnail" style="height: auto !important;">
                          <img src="{{asset('assets/img/book.jpg')}}">
                                         <div class="caption">
                                <h3>किताव ३ </h3>

                            </div><!-- /.caption -->
                        </a>

                    </div><!-- /.thumbnail-wrapper -->
                </div>
                <div class="clearfix"></div>   
            </div><!-- /.ms-grid -->
        </div>
    </section>
@endsection
