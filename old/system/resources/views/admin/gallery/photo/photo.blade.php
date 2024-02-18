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
                        <form action="{{route('admin.add_photo')}} " class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-8 form-group">
                                <label for="title">{{__('शिर्षक')}}</label>
                                <input type="text" name="title" id="title" class=" {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{old('title')}}">
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

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('फोटो हेर्नुहोस्')}}
                    </div>
                    <div class="card-content" style="overflow: scroll">
                        <table class="table table-striped table-hover table-responsive" id="dataTables-example">
                            <thead>
                            <tr>
                                <th width="4%">क्र.सं.</th>
                                <th width="10%">फोटो</th>
                                <th width="20%">शिर्षक</th>

                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($audio as $audio_sanchar)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <img src="{{asset('storage/assets/'.$audio_sanchar->photo)}}" width="90" alt="{{$audio_sanchar->title}}">
                                    </td>
                                    <td>{{$audio_sanchar->title}}</td>
                                    <td>
                                        <a href="{{route('admin.photoedit',[$audio_sanchar->id])}}">
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="{{route('admin.photodelete',[$audio_sanchar->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection


