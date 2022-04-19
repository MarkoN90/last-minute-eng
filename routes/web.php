<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

   $link = DB::table('settings')
        ->where('slug', '=', 'udemy_link')->first();

    return view('home', ['udemyLink' => $link]);
});

Route::get('/login-814', function () {
    return view('login');
})->name('login');

Route::get('/about', function () {
    return view('about');
});

Route::get('/post/{posts}', [PostsController::class, 'show']);

Route::post('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/blog', [PagesController::class, 'blog']);

Route::post('/subscribe', [SubscriptionController::class, 'store']);

// admin

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/preview/{posts}', [PostsController::class, 'preview'])->middleware('auth');

Route::get('/posts', [PostsController::class, 'index'])->middleware('auth');

Route::get('/posts/create', [PostsController::class, 'create'])->middleware('auth');

//Route::get('/posts/{posts}', [PostsController::class, 'create']);

Route::post('/posts', [PostsController::class, 'store'])->middleware('auth');

Route::get('/posts/{posts}/edit', [PostsController::class, 'edit'])->middleware('auth');

Route::post('/posts/{posts}/update', [PostsController::class, 'update'])->middleware('auth');

Route::get('/settings', [PagesController::class, 'settings'])->middleware('auth');

Route::post('/settings/save', [PagesController::class, 'settingsSave'])->middleware('auth');

Route::get('/profile', [PagesController::class, 'showProfile'])->middleware('auth');

Route::post('/profile', [PagesController::class, 'saveProfile'])->middleware('auth');

Route::get('/subscriptions', [PagesController::class, 'subscriptions'])->middleware('auth');

Route::get('/add-author', [PagesController::class, 'addAuthor'])->middleware('auth');

Route::post('/add-author', [UserController::class, 'addAuthor'])->middleware('auth');

Route::resource('category', CategoryController::class)->middleware('auth');

Route::get('category/{category}/delete', [CategoryController::class, 'delete'])->middleware('auth');

Route::get('users/{user}/delete', [CategoryController::class, 'delete'])->middleware('auth');

// auth
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/configure', function () {

    DB::table('settings')->insert([
        ['setting' => 'Udemy Link', 'slug' => 'udemy_link', 'value' => 'https://udemy.com'],
    ]);

    DB::table('categories')->insert([
        ['name' => 'IELTS'],
        ['name' => 'TOEFL'],
        ['name' => 'Business English'],
        ['name' => 'Daily English'],
    ]);

    $user = new \App\Models\User();
    $user->password   =  Hash::make('eddblauff');
    $user->email      = 'franciscarlisle@googlemail.com';
    $user->name       = 'Francis';
    $user->last_name  = 'Carlisle';
    $user->admin = true;

    $user->save();

    echo 'site configured.';

});

