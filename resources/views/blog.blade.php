@extends('layouts.public')
@section('content')
    <div class="" style=" width: 100%;   background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/images/Ldast-Min-English-Blog-Archive-screens.png')">
        <div>
            @include('includes.nav')
        </div>
        @if($mainArticle)
        <div>
            <div class="container mt-3">
                <div class="row d-inline">
                    <div class="col-12">
                        <div class="main-article">
                            <div class="main-article-photo" style="background-image: url('{{ URL::to('/') }}/images/{{ $mainArticle->image_name }}');">
                            </div>
                            <div class="main-article-text-wrapper">
                                <div><h3 class="main-article-header">{{ $mainArticle->title }}</h3></div>
                                <div class="main-article-subtitle">{{ substr($mainArticle->body, 0, 180) }}...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    @foreach($posts as $post)
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
            @endif
            <div class="form-group text-center mb-5">
                @if($more)
                <button class="popout-input square-action-button" style="width: 250px">Load More..</button>
                @endif
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



