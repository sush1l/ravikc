@extends('layout.header')

@section('content')
    <div class="header">
        <h1 class="page-header">
            रेडियो/अडियो
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">ड्यासबोर्ड</a></li>
            <li>आम संचारसंग अन्तरक्रिया</li>
            <li class="active">रेडियो/अडियो</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('रेडियो/अडियो थप्नुहोस')}}
                    </div>
                    <div class="card-content">
                        <form action="{{route('admin.add_audio')}} " class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                <label for="file">{{__('अडियो फाइल')}}</label>
                                <input type="file" name="file" id="file" class=" {{ $errors->has('file') ? ' is-invalid' : '' }}">
                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('file') }}</strong>
                                    </span> @endif
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="introduction">{{__('विवरण')}}</label>
                                <textarea name="introduction" id="summernote" class="form-control editor {{ $errors->has('introduction') ? ' is-invalid' : '' }}">{{old('introduction')}}</textarea>
                                @if ($errors->has('introduction'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('introduction') }}</strong>
                                    </span> @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="nepaliDate">{{__('अपलोड गरेको मिति')}}</label>
                                <input type="text" id="nepaliDate" class="nepali-calendar form-control {{ $errors->has('u_date') ? ' is-invalid' : '' }}" name="u_date" value="{{old('u_date')}}" autocomplete="off"/>
                                <input type="hidden" id="englishDate" name="u_date_ad" value="{{old('u_date_ad')}}"/>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('रेडियो/अडियो हेर्नुहोस्')}}
                    </div>
                    <div class="card-content" style="overflow: scroll">
                       <table class="table table-striped table-hover table-responsive" id="dataTables-example">
                           <thead>
                               <tr>
                                   <th width="4%">क्र.सं.</th>
                                   <th width="10%">फाइल</th>
                                   <th width="20%">शिर्षक</th>
                                   <th width="46%">विवरण</th>
                                   <th width="10%">मिति</th>
                                   <th width="10%">Action</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($audio as $audio_sanchar)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>
                                       <audio controls>
                                           <source src="{{asset('storage/assets/'.$audio_sanchar->file)}}" >
                                       </audio>
                                   </td>
                                   <td>{{$audio_sanchar->title}}</td>
                                   <td>{!! $audio_sanchar->description !!} </td>
                                   <td>{{$audio_sanchar->u_date}} {{ $audio_sanchar->u_time}}</td>
                                   <td>
                                       <a href="{{route('admin.audioedit',[$audio_sanchar->id])}}">
                                           <button class="btn btn-warning btn-sm">
                                               <i class="fa fa-pencil"></i>
                                           </button>
                                       </a>
                                       <a href="{{route('admin.audiodelete',[$audio_sanchar->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete">
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


