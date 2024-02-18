
@extends('layout.header')

@section('content')
    <div class="header">
        <h1 class="page-header">
         जीवनी
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">ड्यासबोर्ड</a></li>
            <li class="active">जीवनी</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('जीवनी')}}
                    </div>
                    <div class="card-content">
                        <form action="{{route('UpdateJiwani')}} " class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-8 form-group">
                                <label for="photo">{{__('फोटो')}}</label>
                                <input type="file" name="photo" id="photo" class=" {{ $errors->has('photo') ? ' is-invalid' : '' }}">
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('photo') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="introduction">{{__('जीवनी')}}</label>
                                <textarea name="introduction" id="summernote" class="form-control editor {{ $errors->has('introduction') ? ' is-invalid' : '' }}">{{ $jiwani->jiwani }}</textarea>
                                @if ($errors->has('introduction'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('introduction') }}</strong>
                                    </span> @endif
                            </div>



                            <div class="col-md-8 form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-outline-danger" value="{{__('अपडेट')}}">
                            </div>
                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('जीवनी हेर्नुहोस्')}}
                    </div>
                    <div class="card-content">
                                <img src="{{asset('storage/assets/'.$jiwani->photo)}}" align="left">
                                <p>{!! $jiwani->jiwani !!} </p>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


