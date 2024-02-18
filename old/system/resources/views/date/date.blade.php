<html>
<head>
    <title>Nepali Calendar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('date/nepali.datepicker.v2.2.min.js')}}"></script>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />>
    <link rel="stylesheet" type="text/css" href="{{asset('date/nepali.datepicker.v2.2.min.css')}}" />
</head>
<body>
<div class="container">
    <h2>Nepali Calendar</h2>
    <h3>Datepicker with Disabled Date (12/08/2073 - 20/08/2073)</h3>
    <input type="text" id="nepaliDateD" class="nepali-calendar" value="2073-12-12"/>
    <h3>Datepicker with Disable Date Number (10 days before and after the current date)</h3>
    <input type="text" id="nepaliDateD1" class="nepali-calendar" value="2073-12-12"/>
    <h3>Datepicker with callback</h3>
    <input type="text" id="nepaliDate1" class="nepali-calendar" value="2069-08-12"/>
    <h3>Datepicker with Year and Month</h3>
    <input type="text" id="nepaliDate5" class="nepali-calendar" value="2069-08-12"/>
    <h3>Datepicker with button</h3>
    <input type="text" id="nepaliDate3" class="nepali-calendar" value=""/>
    <h3>Datepicker with english date textbox</h3>
    <input type="text" id="nepaliDate" class="nepali-calendar" value="2069-08-02"/>
    <input type="text" id="englishDate"/>
    <h3>Datepicker inside modal</h3>
    <p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>
    </p>
    <h3>Datepicker hidden functions (AD2BS and BS2AD)</h3>
    <input type="text" id="nepaliDate9" value="2069-08-01"/>
    <input type="text" id="englishDate9" value="2012-11-16"/>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nepali Datepicker Modal Box</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" id="nepaliDate2" class="nepali-calendar form-control" value="2069-08-18"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
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
</script>
