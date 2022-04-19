@extends('layouts.admin')

@section('content')
    <div class="content">

        <h3 class="text-900 mb-3" data-anchor="" id="example">Profile</h3>

        <div class="col-12 col-xxl-6">
            <div class="text-center">
                <img height="300" width="300" style="border-radius: 150px;" src="{{ URL::to('/') }}/images/{{ $user->profile_image }}">
            </div>
            <form method="post" action="/profile" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">First Name</label>
                    <input class="form-control" name="first_name" id="exampleFormControlInput1" placeholder="" value="{{ $user->name }}">
                </div>
                <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">Last Name</label>
                    <input class="form-control" name="last_name" id="exampleFormControlInput1" placeholder="" value="{{ $user->last_name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Profession (Shown on blog post)</label>
                    <input class="form-control" name="profession" id="exampleFormControlInput1" placeholder="" value="{{ $user->profession }}">
                </div>
                <div class="mb-3"><label class="form-label" for="customFile">Profile Image</label>
                    <input name="image" class="form-control" id="customFile" type="file" value="">
                </div>
                <div class="mb-3 "><label class="form-label" for="exampleTextarea"></label>
                    <button type="submit" name="" class="btn btn-phoenix-primary me-1 mb-1" type="button">Save Profile</button>
                </div>
            </form>
        </div>
    </div>

@endsection
