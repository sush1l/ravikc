<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bimala K.C</title>
    @include('sweetalert::alert')
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Styles-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Morris Chart Styles-->
 <script src="https://cdn.tiny.cloud/1/qz7gzi1isrz1b6bk0vqnygt7gin5b75qojjl1f990jbzvlgm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Custom Styles-->
    <link href="{{ asset('assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('assets/js/Lightweight-Chart/cssCharts.css') }}">
    <!------------------------------Summer Note -------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!--Nepali date-->
    <script type="text/javascript" src="{{asset('date/nepali.datepicker.v2.2.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('date/nepali.datepicker.v2.2.min.css')}}" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="/admin"><strong>Bimala K.C</strong></a>

		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>
<style>

    .loading {
        -webkit-animation: rotation 2s infinite linear;
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(359deg);
        }
    }
</style>
            <ul class="nav navbar-top-links navbar-right" style="padding-right: 20px">
                <li><a href="#"><span style="font-size: 18px"><i class="fa fa-cog loading" id="loading" ></i></span></a></li>
                <li>
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
			 </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li>
</li>
<li class="dropdown-item"><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li>

<li class="dropdown-item"><a href="{{ route('logout') }}" title="Logout"  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>

</ul>
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 1</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (success)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 2</strong>
					<span class="pull-right text-muted">28% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
						<span class="sr-only">28% Complete</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 3</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (warning)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 4</strong>
					<span class="pull-right text-muted">85% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="sr-only">85% Complete (danger)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
</ul>
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
  <li>
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="{{route('home')}}"><i class="fa fa-dashboard"></i> ड्यासबोर्ड</a>
                    </li>
                    <li>
                        <a href="{{route('jiwani')}} " class="waves-effect waves-dark"><i class="fa fa-life-ring" aria-hidden="true"></i>
                            जीवनी</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-tasks" aria-hidden="true"></i>
                            गतिबिधि<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.gatibidhi')}}">गतिबिधि थप्नुहोस</a>
                            </li>
                            <li>
                                <a href="{{route('admin.gatibidhilist')}}">गतिबिधि हेर्नुहोस</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-tasks" aria-hidden="true"></i>
                           मन्त्रिमा हुदाँ<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.mantri')}}">मन्त्रीमा हुदाको विवरण थप्नुहोस</a>
                            </li>
                            <li>
                                <a href="{{route('admin.mantrilist')}}">मन्त्रीमा हुदाको विवरण हेर्नुहोस</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-tasks" aria-hidden="true"></i>
                           आम संचारसंग अन्तरक्रिया<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.audio')}}">रेडियो/अडियो</a>
                            </li>
                            <li>
                                <a href="{{route('admin.video')}}">टि.भी./भिडियो</a>
                            </li>
                            <li>
                                <a href="{{route('admin.newspaper')}}">पत्रपत्रिका</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-tasks" aria-hidden="true"></i>
                            ग्यालरी<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.photo')}}">फोटो ग्यालरी</a>
                            </li>
                           <!-- <li>
                                <a href="{{route('admin.videoGallery')}}">भिडियो ग्यालरी</a>
                            </li> -->


                        </ul>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">

		 @yield('content')

				<footer>
                    <p>All right reserved. </p>


				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->

<!-- Bootstrap Js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


<!-- Metis Menu Js -->
<script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
<!-- Morris Chart Js -->
<script src="{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/morris/morris.js') }}"></script>


<script src="{{ asset('assets/js/easypiechart.js') }}"></script>
<script src="{{ asset('assets/js/easypiechart-data.js') }}"></script>

<script src="{{ asset('assets/js/Lightweight-Chart/jquery.chart.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
<script>
    $('.summernote').summernote({
        tabsize: 2,
        height: 100
    });
</script>
<!-- DATA TABLE SCRIPTS -->
<script src="{{ asset('assets/js/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>

    <script>
        $(document).ready(function(){
            $('#nepaliDateD').nepaliDatePicker({
                disableBefore: '12/08/2073',
                disableAfter: '12/20/2073'
            });
            $('#nepaliDateD1').nepaliDatePicker({
                disableDaysBefore: '10',
                disableDaysAfter: '10'
            });

            $('#nepaliDate5').nepaliDatePicker({
                npdMonth: true,
                npdYear: true,
                npdYearCount: 10
            });
            $('#nepaliDate').nepaliDatePicker({
                ndpEnglishInput: 'englishDate'
            });
            $('#nepaliDate1').nepaliDatePicker({
                onChange: function(){
                    alert($('#nepaliDate1').val());
                }
            });
            $('#nepaliDate2').nepaliDatePicker();
            $('#nepaliDate3').nepaliDatePicker({
                onFocus: false,
                npdMonth: true,
                npdYear: true,
                ndpTriggerButton: true,
                ndpTriggerButtonText: 'Date',
                ndpTriggerButtonClass: 'btn btn-primary btn-sm'
            });

            $('#englishDate').change(function(){
                $('#nepaliDate').val(AD2BS($('#englishDate').val()));
            });

            $('#englishDate9').change(function(){
                $('#nepaliDate9').val(AD2BS($('#englishDate9').val()));
            });

            $('#nepaliDate9').change(function(){
                $('#englishDate9').val(BS2AD($('#nepaliDate9').val()));
            });
        });
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>



</body>

</html>
