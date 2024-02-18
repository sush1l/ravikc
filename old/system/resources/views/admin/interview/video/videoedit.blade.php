@extends('layout.header')

@section('content')
    <div class="header">
        <h1 class="page-header">
            भिडियो/टि.भी.
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">ड्यासबोर्ड</a></li>
            <li>आम संचारसंग अन्तरक्रिया</li>
            <li class="active">भिडियो/टि.भी.</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('भिडियो/टि.भी. थप्नुहोस')}}
                    </div>
                    <div class="card-content">
                        <form action="{{route('admin.update_video')}} " class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                <label for="file">{{__('भिडियो')}}</label>
                                <textarea name="file" id="file" cols="30" class=" form-control {{ $errors->has('file') ? ' is-invalid' : '' }}" rows="5">{{$edit->file}}</textarea>
                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('file') }}</strong>
                                    </span> @endif
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="introduction">{{__('विवरण')}}</label>
                                <textarea name="introduction" id="summernote" class="form-control editor {{ $errors->has('introduction') ? ' is-invalid' : '' }}">{{$edit->description}}</textarea>
                                @if ($errors->has('introduction'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('introduction') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="nepaliDate">{{__('अपलोड गरेको मिति')}}</label>
                                <input type="text" id="nepaliDate" class="nepali-calendar form-control {{ $errors->has('u_date') ? ' is-invalid' : '' }}" name="u_date" value="{{$edit->u_date}}" autocomplete="off"/>
                                <input type="hidden" id="englishDate" name="u_date_ad" value="{{$edit->u_date_ad}}"/>
                                @if ($errors->has('u_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('u_date') }}</strong>
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


