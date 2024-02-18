@extends('layout.header')

@section('content')
    <div class="header">
        <h1 class="page-header">
            फोटो
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">ड्यासबोर्ड</a></li>
            <li>ग्यालरी</li>
            <li class="active">फोटो</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('फोटो थप्नुहोस')}}
                    </div>
                    <div class="card-content">
                        <form action="{{route('admin.update_photo')}} " class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$edit->id}}" name="id">
                            <div class="col-md-8 form-group">
                                <label for="title">{{__('शिर्षक')}}</label>
                                <input type="text" name="title" id="title" class=" {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{$edit->title}}">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('title') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="file">{{__('फोटो')}}</label>
                                <input type="file" name="file" id="file" class=" {{ $errors->has('file') ? ' is-invalid' : '' }}">
                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('file') }}</strong>
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


    </div>



@endsection


