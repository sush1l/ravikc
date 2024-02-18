@extends('frontend.layout.master')
@section('content')
    <div class="media-bg">
        <h3>सुझाव दिनुहोस</h3>
    </div>
    <div class="container-fluid mb-4">
        <h2 class="main-heading text-center mt-2">
            सुझाव दिनुहोस</h2>
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="first_name">नाम</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="नाम">
                    @error('first_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="last_name">थर</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="थर">
                    @error('last_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="email">ईमेल</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="ईमेल">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="contact_no">सम्पर्क नं</label>
                    <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="सम्पर्क नं">
                    @error('contact_no')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="message">सन्देश</label>
                <textarea class="form-control" name="message" id="message" rows="5">सन्देश ...........</textarea>
                @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
