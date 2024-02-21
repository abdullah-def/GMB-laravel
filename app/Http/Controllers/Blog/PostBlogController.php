<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class PostBlogController extends Controller
{
    public function index(Request $request)
    {

        $posts = Post::published()
            ->with('author', 'categories', 'tags')
            ->latest('published_at')
            ->paginate(15);


        $posts_footer = Post::published()
        ->latest('published_at')
        ->featured()
        ->with('author', 'categories')->limit(2)->get();



        return view(
            'guest.blog.blog',
            [
                'title' => config('app.name') . ' - Blog',
                'posts' => $posts,
                'posts_footer' => $posts_footer,
            ]
        );
    }

    public function show(Post $post, Request $request)
    {
        $post->views = $post->views + 1;
        $post->save();

        $posts = Post::published()
            ->latest('published_at')
 
            ->with('author', 'categories')->limit(6)->get();


        $posts_footer = Post::published()
        ->latest('published_at')
        ->featured()
        ->with('author', 'categories')->limit(2)->get();

        return view(
            'guest.blog.blog_post',
            [
                'title' => $post->title,
                'post' => $post,
                'posts' => $posts,
                'posts_footer' => $posts_footer,

            ]
        );
    }

    public function category($category, Request $request)
    {

        $posts_footer = Post::published()
        ->latest('published_at')
        ->featured()
        ->with('author', 'categories')->limit(2)->get();

        $posts = Post::published()
            ->when($category, function ($query, $category) {
                $query->withCategory($category);
            })
            ->featured()
            ->latest('published_at')
            ->paginate(15);

        if (count($posts)) {
            return view(
                'guest.blog.category',
                [
                    'title' => config('app.name') . ' - category',
                    'posts' => $posts,
                    'posts_footer' => $posts_footer,
                    'category' => $category,
                    
                ]
            );
        } else {
            return abort(404);
        }
    }

    public function tag($tag, Request $request)
    {
        $posts_footer = Post::published()
        ->latest('published_at')
        ->featured()
        ->with('author', 'categories')->limit(2)->get();

        $posts = Post::published()
            ->when($tag, function ($query, $tag) {
                $query->withTag($tag);
            })

            ->featured()
            ->latest('published_at')
            ->paginate(15);

        $tag_name = Tag::where('slug', $tag)->get();


        if (count($posts)) {

            return view(
                'guest.blog.tag',
                [
                    'title' => config('app.name') . ' - tag',
                    'posts' => $posts,
                    'tag' => $tag_name,
                    'posts_footer' => $posts_footer,
                ]
            );
        } else {

            return abort(404);
        }
    }
}
