
@extends('layout.header')
@section('content')
    <div class="header">
        <h1 class="page-header">
            Setting
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Setting</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('Setting')}}
                    </div>
                    <div class="card-content">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-8 form-group">
                                <label for="office_name">{{__('Office Name *')}}</label>
                                <input type="text" name="office_name" id="office_name" value="{{ old('office_name') }}" class="form-control {{ $errors->has('office_name') ? ' is-invalid' : '' }}">
                                @if ($errors->has('office_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('office_name') }}</strong>
                                    </span> @endif
                            </div>

                            <div class="col-md-8 form-group">
                                <label for="office_address">{{__('Office Address *')}}</label>
                                <input type="text" name="office_address" id="office_address" value="{{ old('office_address') }}" class="form-control {{ $errors->has('office_address') ? ' is-invalid' : '' }}">
                                @if ($errors->has('office_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('office_address') }}</strong>
                                    </span> @endif
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="introduction">{{__('Introduction')}}</label>
                                <textarea name="introduction" id="introduction" class="form-control summernote {{ $errors->has('introduction') ? ' is-invalid' : '' }}">{{ old('introduction') }}</textarea>
                                @if ($errors->has('introduction'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('introduction') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12 form-group col-md-6-edit">
                                <label for="mission">{{__('Mission')}}</label>
                                <textarea name="mission" id="mission" class="form-control summernote {{ $errors->has('mission') ? ' is-invalid' : '' }}">{{ old('mission') }}</textarea>
                                @if ($errors->has('mission'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('mission') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12 form-group col-md-6-edit">
                                <label for="vision">{{__('Vision')}}</label>
                                <textarea name="vision" id="vision" class="form-control summernote {{ $errors->has('vision') ? ' is-invalid' : '' }}">{{ old('vision') }}</textarea>
                                @if ($errors->has('vision'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('vision') }}</strong>
                                    </span> @endif
                            </div>

                            <div class="col-md-8 form-group">
                                <label for="office_photo">{{__('Office Photo *')}}</label>
                                <input type="file" name="office_photo" id="office_photo" class=" {{ $errors->has('office_photo') ? ' is-invalid' : '' }}">
                                @if ($errors->has('office_photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('office_photo') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <legend>{{__('Phone')}}</legend>
                                    <div class="row">
                                        <div class="col-md-4 form-group form-multinum">
                                            <label for="general_inguiry">{{__('General Inquiry')}}</label>
                                            <input type="text" name="general_inguiry" id="general_inguiry" value="{{ old('general_inguiry') }}" class="form-control {{ $errors->has('general_inguiry') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('general_inguiry'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('general_inguiry') }}</strong>
                                    </span> @endif
                                        </div>
                                        <div class="col-md-4 form-group form-multinum">
                                            <label for="marketing_inguiry">{{__('Marketing Inquiry')}}</label>
                                            <input type="text" name="marketing_inguiry" id="marketing_inguiry" value="{{ old('marketing_inguiry') }}" class="form-control {{ $errors->has('marketing_inguiry') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('marketing_inguiry'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('marketing_inguiry') }}</strong>
                                    </span> @endif
                                        </div>
                                        <div class="col-md-4 form-group form-multinum">
                                            <label for="support">{{__('Help & Support')}}</label>
                                            <input type="text" name="support" id="support" value="{{ old('support') }}" class="form-control {{ $errors->has('support') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('support'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('support') }}</strong>
                                    </span> @endif
                                        </div>
                                    </div>
                                </fieldset>

                            </div>

                            <div class="col-md-12">
                                <fieldset>
                                    <legend>{{__('Email')}}</legend>
                                    <div class="row">
                                        <div class="col-md-4 form-group form-multinum">
                                            <label for="general_email">{{__('General Email')}}</label>
                                            <input type="text" name="general_email" id="general_email" value="{{ old('general_email') }}" class="form-control {{ $errors->has('general_email') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('general_email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('general_email') }}</strong>
                                    </span> @endif
                                        </div>
                                        <div class="col-md-4 form-group form-multinum">
                                            <label for="marketing_email">{{__('Marketing Email')}}</label>
                                            <input type="text" name="marketing_email" id="marketing_email" value="{{ old('marketing_email') }}" class="form-control {{ $errors->has('marketing_email') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('marketing_email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('marketing_email') }}</strong>
                                    </span> @endif
                                        </div>
                                        <div class="col-md-4 form-group form-multinum">
                                            <label for="support_email">{{__('Help & Support Email')}}</label>
                                            <input type="text" name="support_email" id="support_email" value="{{ old('support_email') }}" class="form-control {{ $errors->has('support_email') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('support_email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('support_email') }}</strong>
                                    </span> @endif
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="privacy">{{__('Privacy Policy')}}</label>
                                <textarea name="privacy" id="privacy" class="form-control summernote {{ $errors->has('privacy') ? ' is-invalid' : '' }}">{{ old('privacy') }}</textarea>
                                @if ($errors->has('privacy'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('privacy') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="map">{{__('Map')}}</label>
                                <textarea name="map" id="map" rows="5" class="form-control {{ $errors->has('map') ? ' is-invalid' : '' }}">{{ old('map') }}</textarea>
                                @if ($errors->has('map'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('map') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="facebook">{{__('Facebook')}}</label>
                                <textarea name="facebook" id="facebook" rows="5" class="form-control {{ $errors->has('facebook') ? ' is-invalid' : '' }}">{{ old('facebook') }}</textarea>
                                @if ($errors->has('facebook'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('facebook') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-outline-danger" value="{{__('Update')}}">
                            </div>
                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


