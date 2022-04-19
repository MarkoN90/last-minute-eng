@extends('layouts.public')
@section('content')

    <style>
        .about {
            margin-top: 100px;
        }

        .about-section-header {
            font-weight: 700;
            font-size: 45px;
            padding: 70px;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .about-paragraph {
            padding: 70px;
            font-size: 23px;
            color: #959595;
            font-weight: 600;
        }

    </style>

    <div style=" width: 100%;   background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/iimages/Lastf-Min-English-About-screens.png')">
        <div style=" width: 100%; background-size: cover; margin: 0px;">
            @include('includes.nav')
        </div>
        <div class="container about" >
            <div class="row d-inline-flex">
                <div class="col-12 col-md-6">
                    <img style="width: 100%;" src="{{ URL::to('/') }}/images/about-img.png">
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="about-section-header">Lorem Ipsum is simply dummy text of the printing  </h1>

                        <p class="about-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages,
                        </p>
                 </div>
            </div>
        </div>
        <div class="container-fluid" style="height:520px;">
            <div class="row">
                <div class="col-4 offset-4 col-md-4" style="background: #0cc291; height: 3px; margin-top: 100px; margin-bottom: 35px"></div>
            </div>
            <blockquote class="p-4">
                "Big bold testimonials from a happy customer, can be used to share or repeat  a nice detail about Last Minute English"
            </blockquote>
            <div class="qoute-author">Tommy Brabham</div>
            <div class="qoute-author-company">Designer of Websites, Warpaint Agency</div>
            <div>
                <h3></h3>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



