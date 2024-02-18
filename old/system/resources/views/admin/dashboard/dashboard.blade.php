@extends('layout.header')
@section('content')
<div class="header">
    <h1 class="page-header">
        Dashboard
    </h1>
    <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Dashboard</a></li>
  <li class="active">Data</li>
</ol>

</div>
<div id="page-inner">

<div class="dashboard-cards">
    <div class="row">
<div class="col-xs-12 col-sm-6 col-md-4">

    <div class="card horizontal cardIcon waves-effect waves-dark">
    <div class="card-image red">
    <i class="material-icons dp48">note</i>
    </div>
    <div class="card-stacked red">
    <div class="card-content">
    <h3>{{$mantrimahuda}}</h3>
    </div>
    <div class="card-action">
    <strong>मन्त्रिमा हुदाका पोस्टहरु</strong>
    </div>
    </div>
    </div>

</div>
<div class="col-xs-12 col-sm-6 col-md-4">

    <div class="card horizontal cardIcon waves-effect waves-dark">
    <div class="card-image orange">
    <i class="material-icons dp48">view_carousel</i>
    </div>
    <div class="card-stacked orange">
    <div class="card-content">
    <h3>{{$photogallery}}</h3>
    </div>
    <div class="card-action">
    <strong>फोटो ग्यालरी</strong>
    </div>
    </div>
    </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">

        <div class="card horizontal cardIcon waves-effect waves-dark">
    <div class="card-image blue">
    <i class="material-icons dp48">movie</i>
    </div>
    <div class="card-stacked blue">
    <div class="card-content">
    <h3>{{$videogallery}}</h3>
    </div>
    <div class="card-action">
    <strong>भिडियो ग्यालरी</strong>
    </div>
    </div>
    </div>

</div>
</div>
<div class="row">
    <div class="col-md-4">
        <hr></div>
    <div class="col-md-4"><h4>आम संचारसंग अन्तरक्रिया</h4></div>
    <div class="col-md-4"></div>
</div>
    <div class="row">

<div class="col-xs-12 col-sm-6 col-md-4">

    <div class="card horizontal cardIcon waves-effect waves-dark">
    <div class="card-image red">
    <i class="material-icons dp48">radio</i>
    </div>
    <div class="card-stacked red">
    <div class="card-content">
    <h3>{{$audiosanchar}}</h3>
    </div>
    <div class="card-action">
    <strong>अडियो</strong>
    </div>
    </div>
    </div>

</div>
<div class="col-xs-12 col-sm-6 col-md-4">

    <div class="card horizontal cardIcon waves-effect waves-dark">
    <div class="card-image orange">
    <i class="material-icons dp48">movie</i>
    </div>
    <div class="card-stacked orange">
    <div class="card-content">
    <h3>{{$videosanchar}}</h3>
    </div>
    <div class="card-action">
    <strong>भिडियो</strong>
    </div>
    </div>
    </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">

        <div class="card horizontal cardIcon waves-effect waves-dark">
    <div class="card-image blue">
    <i class="material-icons dp48">note</i>
    </div>
    <div class="card-stacked blue">
    <div class="card-content">
    <h3>{{$newspapersanchar}}</h3>
    </div>
    <div class="card-action">
    <strong>पत्रपत्रिका</strong>
    </div>
    </div>
    </div>

</div>
</div>
</div>

</div>
<!-- /. ROW  -->


@endsection
