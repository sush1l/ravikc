
@extends('layout.header')

@section('content')
    <div class="header">
        <h1 class="page-header">
            मन्त्रिमा हुदाँ
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">ड्यासबोर्ड</a></li>
            <li class="active">मन्त्रिमा हुदाँ</li>
        </ol>

    </div>

    <div id="page-inner">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        {{__('मन्त्रिमा हुदाँको विवरण हेर्नुहोस्')}}
                    </div>
                    <div class="card-content" style="overflow:scroll">
                           <table class="table table-striped table-hover">
                               <thead>
                               <tr>
                                   <th width="4%">क्र.सं.</th>
                                   <th width="20%">फोटो</th>
                                   <th width="15%">शिर्षक</th>
                                   <th width="40%">विवरण</th>
                                   <th width="20%">मिति</th>
                                   <th width="10%">Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($gatibidhiList as $ga)
                                   <tr>
                                       <td>{{$loop->iteration}}</td>
                                       <td><img src="{{asset('storage/assets/'.$ga->photo)}}" alt="{{$ga->title}}" width="100"></td>
                                       <td>{{$ga->title}}</td>
                                       <td>{!! $ga->description !!}</td>
                                       <td>{{$ga->u_date}} {{$ga->u_time}}</td>
                                       <td>
                                           <a href="{{route('admin.mantrieditdata',[$ga->id])}}" title="Edit">
                                               <button class="btn btn-warning btn-sm">
                                                   <i class="fa fa-pencil"></i>
                                               </button>
                                               <a href="{{route('admin.mantridelete',[$ga->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete">
                                                   <button class="btn btn-danger btn-sm">
                                                       <i class="fa fa-trash"></i>
                                                   </button>
                                               </a>
                                           </a>
                                       </td>
                                   </tr>
                               @endforeach
                               </tbody>
                           </table>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


