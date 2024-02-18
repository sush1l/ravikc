@extends('home.header.header')
@section('content')
<div class="media-bg">
<h3>सुझाव दिनुहोस्</h3>
</div>
<section id="bio" class="cont">
        <div class="container-fluid">
            <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">सुझाव दिनुहोस्</h2>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="form-group">
                         <label for="name" class="">नाम :</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="">ई-मेल :</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="subject" class="">विषय :</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                <div class="col-md-6">
                        <div class="form-group">
                        <label for="phone" class="">फोन :</label>
                            <input type="phone" id="phone" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="message">सन्देश</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>

    </div>

</section>  
        </div>
</section>

@endsection
