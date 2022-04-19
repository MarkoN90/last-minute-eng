<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Subscription;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
   public function settings(Request $request): Factory|View|Application
   {
       $settings = DB::table('settings')->get();
       $categories = Category::all();

       return view('settings', ['settings' => $settings, 'categories' => $categories]);
   }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function settingsSave(Request $request): Redirector|Application|RedirectResponse
    {
        $settings = ['udemy_link'];

        foreach ($settings as $setting) {

            if(($request->has($setting))) {

                DB::table('settings')
                    ->where('slug', $setting)
                    ->update(['value' => $request->$setting]);
            }
        }

        return redirect('settings');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function about(Request $request)
    {
        return view('about');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function contact(Request $request)
    {
        return view('contact');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function blog(Request $request): Factory|View|Application
    {
        $mainArticle = DB::table('posts')
            ->where('main', '=', true)
            ->first();

        if ($mainArticle != null) {

            $posts = DB::table('posts')
//                ->whereNot('main', '=', true)
                ->orderBy('created_at', 'desc')
                ->get();

        } else {
            $posts = DB::table('posts')
                ->orderBy('created_at', 'desc')
                ->get();

            $mainArticle = $posts->shift();
        }

        return view('blog', [
            'posts' => $posts,
            'mainArticle' => $mainArticle,
            'more' => ($posts->count() > 9)
        ]);
    }


    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function showProfile(Request $request): Factory|View|Application
    {
        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function saveProfile(Request $request): Factory|View|Application
    {
        $user = Auth::user();

        if ($request->hasFile('image')) {

            $newImageFileName = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('images'), $newImageFileName);

            $user->profile_image = $newImageFileName;
        }

        $user->profession = $request->post('profession');
        $user->name       = $request->post('username');
        $user->name = $request->post('first_name');
        $user->last_name  = $request->post('last_name');
        $user->save();

        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function subscriptions(Request $request): Application|Factory|View
    {
        return view ('subscriptions', ['subscriptions' => Subscription::all()]);
    }

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function addAuthor(Request $request): Application|Factory|View
    {
        return view ('add-author');
    }

}
