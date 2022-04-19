<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function addAuthor(Request $request)
    {
        User::create([
            'name'       => $request->post('author_first_name'),
            'password'   => Hash::make($request->post('author_password')),
            'last_name'  => $request->post('author_last_name'),
            'profession' => $request->post('author_profession'),
            'email'      => $request->post('author_email'),
            'admin'      => false,
        ]);

        return view('add-author');
    }

    /**
     * @param  User  $user
     * @return Application|Factory|View
     */
    public function deleteAuthor(User $user)
    {
        $user->delete();

        return view('add-author');
    }

}
