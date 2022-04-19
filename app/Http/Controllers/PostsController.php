<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @returns Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $posts = Posts::all();

        return view('posts.list', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = Category::all();

        return view('posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

//        $request->validate([
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

        $imageName = $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images'), $imageName);

        $readingTime = round(str_word_count($request->post('body')) / 250);
        $readingTime = ($readingTime == 0) ? 1 : $readingTime;

        Posts::create([
            'title'          => $request->post('title'),
            'image_name'     => $imageName,
            'category'       => $request->post('category'),
            'body'           => $request->post('body'),
            'main'           => $request->post('main'),
            'published'      => $request->post('published'),
            'reading_time'   => $readingTime,
            'author_id'      => Auth::id(),
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return Application|Factory|View
     */
    public function show(Posts $posts)
    {
        $otherPosts = DB::table('posts')
            ->whereNot('id', '=', $posts->id)
            ->get();

        return view('post', ['post' => $posts, 'otherPosts' => $otherPosts]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return Application|Factory|View
     */
    public function preview(Posts $posts)
    {
        $otherPosts = DB::table('posts')
            ->whereNot('id', '=', $posts->id)
            ->get();

        return view('posts.preview', ['post' => $posts, 'otherPosts' => $otherPosts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
      */
    public function edit(Posts $posts)
    {
        $categories = Category::all();
        return view('posts.edit', ['post' => $posts, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Posts $posts)
    {
        $posts->title        = $request->post('title');
        $posts->body         = $request->post('body');
        $posts->category     = $request->post('category');
        $posts->published    = (bool) $request->post('published');
        $posts->published    = (bool) $request->post('main');

        $readingTime = round(str_word_count($request->post('body')) / 250);
        $readingTime = ($readingTime == 0) ? 1 : $readingTime;

        $posts->reading_time = $readingTime;

        if ($request->hasFile('image')) {

           $newImageFileName = $request->file('image')->getClientOriginalName();
           $request->image->move(public_path('images'), $newImageFileName);

           $posts->image_name = $newImageFileName;
        }

        $posts->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
