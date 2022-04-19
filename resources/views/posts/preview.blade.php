
@extends('layouts.public')
@section('content')
    <div>
        <div style=" width: 100%; background-size: cover; margin: 0px;">
            @include('includes.nav')
        </div>
        <div class="container mt-5 mb-3">
            <article>
                <div class="">
                    <div class="article-info text-center">
                        <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue"><a href="/category/{{ $post->category }}">{{ $post->category }}</a></div>
                        <div class="d-inline-block mx-1 fw-bold last-minute-green">{{ $post->reading_time }} min</div>
                    </div>
                </div>
                <div>
                    <h1 class="text-center last-minute-dark-blue single-post-header">
                        {{ $post->title }}
                    </h1>
                    <div class="text-center p-3">
                        <img style="border-radius:30px; width: 100%;" src="{{ URL::to('/') }}/images/{{ $post->image_name }}">
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <div class="article-info text-center p-3">
                            <div>
                                <img class="author-image" src="{{ URL::to('/') }}/images/{{ $post->user->profile_image }}">
                            </div>
                            <div>
                                <div class="d-block mx-1 fw-bold last-minute-dark-blue text-left">{{ $post->user->name }} {{ $post->user->last_name }}</div>
                                <div class="d-block mx-1 fw-bold last-minute-green text-left">{{ $post->created_at->toFormattedDateString() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="post-text last-minute-dark-blue">
                            {!! $post->body !!}
                        </div>
                        <br>
                        <div class="post-start-studying mt-3">
                            <div class="post-start-studying-top"></div>
                            <h1 class="text-center" id="main-title-post">Get <span id="main-title-ielts-post">IELTS</span> done.</h1>
                            <h2 class="text-center" id="main-subtitle-post">No worry, no pain, no problem.</h2>
                            <div class="form-group text-center">
                                <button class="popout-input square-action-button" style="width: 250px">Start Studying</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="container mt-3">
                <div class="row ">
                    @foreach($otherPosts as $post)
                        <div class="col-12 col-md-4">
                            <a href="/post/{{ $post->id }}">
                                <div class="article">
                                    <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/{{ $post->image_name }}')">
                                    </div>
                                    <div class="article-text-wrapper">
                                        <div class="article-info-group text-left pl-3">
                                            <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">{{ $post->category }}</div>
                                            <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                                        </div>
                                        <div><h3 class="article-header">{{ $post->title }}</h3></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



