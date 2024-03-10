<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {

        $posts = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(3)->get();

        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();


        $data = [
            'title' => config('app.name'),
            'plans' => Plan::get(),
            'posts' => $posts,
            'posts_footer' => $posts_footer,

        ];


        if (!auth()->check()) {
            return view('guest.home', $data);
        } else {
            if (!$request->user()->hasVerifiedEmail()) {
                return view('guest.home', $data);
            } elseif ($request->user()->subscribed) {

                return redirect()->route('dashbord');
            }
            return view('guest.home', $data);
        }
    }

    public function terms()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - Terms of Service',
            'posts_footer' => $posts_footer,
        ];


        return view('guest.terms', $data);
    }

    public function policy()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - Privacy Policy',
            'posts_footer' => $posts_footer,
        ];


        return view('guest.policy', $data);
    }

    public function contact()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - Contact us',
            'posts_footer' => $posts_footer,
        ];


        return view('guest.contact', $data);
    }

    public function about()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - About us',
            'posts_footer' => $posts_footer,
        ];


        return view('guest.about', $data);
    }

    public function refund()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - Refund policy',
            'posts_footer' => $posts_footer,
        ];


        return view('guest.refund', $data);
    }

    public function knowledgebase()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - Knowledgebase',
            'posts_footer' => $posts_footer,
        ];


        return view('guest.knowledgebase', $data);
    }

    public function how_it_works()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - How it works',
            'posts_footer' => $posts_footer,
        ];


        return view('guest.how_it_works', $data);
    }

    public function plans()
    {
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - Plans',
            'posts_footer' => $posts_footer,
            'plans' => Plan::get(),
        ];


        return view('guest.plans', $data);
    }

    public function demo(Request $request)
    {
        // 
        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
                'title' => config('app.name') . ' - Demo',
                'posts_footer' => $posts_footer,
        ];

        return view('guest.demo', $data);
    }
   
}
