@extends('layouts.admin')
@section('content')
    <div class="content">
        <h3 class="text-900 mb-3" data-anchor="" id="example">All Blog Posts</h3>
        <div class="my-4" id="tableExample" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
            <div class="table-responsive scrollbar">
                <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort" data-sort="name">Title</th>
                        <th class="sort" data-sort="email">Date Created</th>
                        <th class="sort" data-sort=" "> </th>
                        <th class="sort" data-sort=" "> </th>
                        <th class="sort" data-sort=" "> </th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($posts as $post)
                        <tr>
                            <td class="name">{{ $post->title }}</td>
                            <td class="email">{{ $post->created_at }}</td>
                            <td class="age"><a href="/posts/{{ $post->id }}/edit">Edit</a></td>
                            <td class="age"><a href="/posts/{{ $post->id }}/delete">Delete</a></td>
                            <td class="age"><a target="_blank" href="/preview/{{ $post->id }}">Preview</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row align-items-center mt-3">
                <div class="pagination d-none">
                    <li class="active"><button class="page" type="button" data-i="1" data-page="15">1</button></li>
                </div>
                <div class="col">
                    <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block" data-list-info="">1 to 15 <span class="text-600"> Items of </span> 15</span> <span class="d-none d-sm-inline-block">— </span><a class="fw-semi-bold d-none" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right fa-w-8 ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semi-bold" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right fa-w-8 ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a></p>
                </div>
                <div class="col-auto d-flex"><button class="btn btn-sm btn-primary disabled" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2 disabled" type="button" data-list-pagination="next" disabled=""><span>Next</span></button></div>
            </div>
        </div>
        <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
            </div>
        </footer>
    </div>
@endsection
