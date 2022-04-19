@extends('layouts.admin')

@section('content')
    <div class="content">
        <h3 class="text-900 mb-3" data-anchor="" id="example">Create New Blog Post</h3>

        <form action="/posts" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="exampleFormControlInput1">Post Title</label>
                <input class="form-control" id="exampleFormControlInput1" name="title"   placeholder="">
            </div>

            <div class="mb-3"><label class="form-label" for="customFile">Post Image</label>
                <input name="image" class="form-control" id="customFile" type="file">
            </div>

            <div class="form-check" style="padding-left: 40px;">
                <input name="published" class="form-check-input ml-2" id="flexCheckDefault" type="checkbox" value="1">
                <label class="form-check-label" for="flexCheckDefault">Published</label>
            </div>

            <div class="form-check" style="padding-left: 40px;">
                <input name="main" class="form-check-input ml-2" id="flexCheckDefault" type="checkbox" value="1">
                <label class="form-check-label" for="flexCheckDefault">Main</label>
            </div>

            <select class="form-select" aria-label="Default select example" name="category">
                @foreach( $categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <div class="mb-3 mt-3">
                <label class="form-label" for="exampleTextarea">Post Text</label>
                <textarea name="body" style="min-height: 400px;" class="ckeditor form-control needs-validation" id="exampleTextarea" rows="3"></textarea>
            </div>

            <div class="mb-3 ">
                <label class="form-label" for="exampleTextarea"></label>
                <button type="submit" class="btn btn-phoenix-primary me-1 mb-1" type="button">Save Post</button>
            </div>

        </form>
        <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
            </div>
        </footer>
    </div>
@endsection
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    document.addEventListener('load', function() {
        document.querySelector('.ckeditor').ckeditor();

    })
</script>
