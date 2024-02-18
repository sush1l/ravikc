
@extends('layout.header')
@section('content')
    <div class="header">
        <h1 class="page-header">
            गतिबिधि
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">ड्यासबोर्ड</a></li>
            <li class="active">गतिबिधि</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('गतिबिधि Edit')}}
                    </div>
                    <div class="card-content">
                        <form action="{{route('admin.mantriUpdate')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $editgatibidhi->id }}">
                            <div class="col-md-8 form-group">
                                <label for="title">{{__('शिर्षक *')}}</label>
                                <input type="text" name="title" id="office_name" value="{{ $editgatibidhi->title }}" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('title') }}</strong>
                                    </span> @endif
                            </div>



                            <div class="col-md-12 form-group">
                                <label for="description">{{__('विवरण')}}</label>
                                <textarea name="description" id="summernote" rows="10" class="form-control editor  {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ $editgatibidhi->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('description') }}</strong>
                                    </span> @endif
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="nepaliDate">{{__('अपलोड गरेको मिति')}}</label>
                                <input type="text" id="nepaliDate" class="nepali-calendar form-control {{ $errors->has('u_date') ? ' is-invalid' : '' }}" name="u_date" value="{{$editgatibidhi->u_date}}" autocomplete="off"/>
                                <input type="hidden" id="englishDate" name="u_date_ad" value="{{$editgatibidhi->u_date_ad}}"/>
                                @if ($errors->has('u_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('u_date') }}</strong>
                                    </span> @endif
                            </div>




                            <div class="col-md-8 form-group">
                                <label for="photo">{{__('फोटो *')}}</label>
                                <input type="file" name="photo" id="photo" class=" {{ $errors->has('photo') ? ' is-invalid' : '' }}">
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('photo') }}</strong>
                                    </span> @endif
                            </div>


                            <div class="col-md-8 form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-outline-danger" value="{{__('Submit')}}">
                            </div>
                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


