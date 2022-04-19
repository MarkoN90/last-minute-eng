@extends('layouts.admin')

@section('content')
    <div class="content">

        <h3 class="text-900 mb-3"   id="example">Settings</h3>
        <form action="/settings/save" method="post">
            @csrf

            @foreach ($settings as $setting)
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="inputPassword">{{ $setting->setting }}</label>
                    <div class="col-sm-10"><input name="{{ $setting->slug }}" value="{{ $setting->value }}" class="form-control" id="inputPassword" type="text"></div>
                </div>
            @endforeach

            <button type="submit" class="f-right btn btn-phoenix-primary me-1 mb-1" type="button">Save Settings</button>
        </form>
        <hr/>

        <h4 class="text-900 mb-3"  id="example">Categories</h4>

        <form action="/category" method="post">
            @csrf
            <div class="mb-3 row">

                <label class="col-sm-2 col-form-label" for="inputPassword">New Category</label>
                <div class="col-sm-10"><input name="category_name"  class="form-control" id="inputPassword" type="text"></div>
            </div>

            <button type="submit" class="f-right btn btn-phoenix-primary me-1 mb-1" type="button">Add Category</button>

            <h4 class="mt-4 mb-3">Categories</h4>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach( $categories as $category)
                    <tr>
                        <th scope="col">{{ $category->id }}</th>
                        <td scope="col">{{ $category->name }}</td>
                        <th scope="col"><a href="/category/{{ $category->id }}/delete">Delete Category</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>

        <hr/>


        <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">

            </div>
        </footer>
    </div>
@endsection
