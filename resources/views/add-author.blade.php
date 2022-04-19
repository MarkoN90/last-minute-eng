@extends('layouts.admin')

@section('content')
    <div class="content">


        <h4 class="text-900 mb-3"  id="example">Authors</h4>

        <form action="/add-author" method="post">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="inputPassword">Author Name</label>
                <div class="col-sm-10"><input name="author_first_name"  class="form-control" id="inputPassword" type="text" required></div>
                <label class="col-sm-2 col-form-label" for="inputPassword">Author Last Name</label>
                <div class="col-sm-10"><input name="author_last_name"  class="form-control" id="inputPassword" type="text" required></div>
                <label class="col-sm-2 col-form-label" for="inputPassword">Author Password</label>
                <div class="col-sm-10"><input name="author_password" type="password" class="form-control" id="inputPassword" required></div>
                <label class="col-sm-2 col-form-label" for="inputPassword">Author Email</label>
                <div class="col-sm-10"><input name="author_email"  class="form-control" id="inputPassword" type="text" required></div>
                <label class="col-sm-2 col-form-label" for="inputPassword">Author Profession</label>
                <div class="col-sm-10"><input name="author_profession"  class="form-control" id="inputPassword" type="text" required></div>

            </div>

            <button type="submit" class="f-right btn btn-phoenix-primary me-1 mb-1" type="button">Add Author</button>



        </form>
        <h4 class="mt-4 mb-3">Authors</h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach( \App\Models\User::all() as $user)
                @continue($user->id == \Illuminate\Support\Facades\Auth::id())
                <tr>
                    <th scope="col">{{ $user->id }}</th>
                    <td scope="col">{{ $user->name }} {{ $user->last_name }}</td>
                    <th scope="col"><a href="/users/{{ $user->id }}/delete">Delete User</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>


        <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">

            </div>
        </footer>
    </div>
@endsection
