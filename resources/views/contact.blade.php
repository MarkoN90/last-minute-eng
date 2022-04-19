@extends('layouts.public')
@section('content')
    <div>
        <div style=" width: 100%; hheight: 1772px; background-size: cover; margin: 0px; bbackground-image: url('{{ URL::to('/') }}/images/contact.png')">
            @include('includes.nav')
        <div class="container mt-5 mb-3">
            <h4 class="contact-header last-minute-dark-blue">How we can help?</h4>
            <div class="text-center">
                <p class="contact-subheader text-center">
                    Use the form below to share you enquiry. We will get in touch as soon
                    as possible, thank you.
                </p>
            </div>
            <div class="row">
                <div class="col-6 offset-3 col-md-12 offset-md-0 contact-green-line my-4"></div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    <form class="mt-2 pb-4">
                        <div class="form-group text-center">
                            <input type="text" class="popout-input" placeholder="First Name">
                        </div>
                        <div class="form-group text-center">
                            <input type="text" class="popout-input" placeholder="Last Name">
                        </div>
                        <div class="form-group text-center">
                            <input type="text" class="popout-input" placeholder="Email Address">
                        </div>
                        <div class="form-group text-center">
                            <textarea  rows="10" class="popout-input">
                            </textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="popout-input square-action-button">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="p-3">Connect With Us</h4>
                    <ul class="text-white social-icons-list">
                        <li class="m-3"><a><i class="fab fa-instagram" style="color:black;"></i></a></li>
                        <li class="m-3"><a><i class="fab fa-facebook-square " style="color:black;"></i></a></li>
                        <li class="m-3"><a><i class="fab fa-linkedin " style="color:black;"></i></a></li>
                        <li class="m-3"><a><i class="fab fa-youtube " style="color:black;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



