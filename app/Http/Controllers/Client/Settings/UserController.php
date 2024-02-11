<?php

namespace App\Http\Controllers\Client\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\UsersRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Request $request, User $user): View
    {
        return view('user.settings.show', [
            'user' => $user,
            // 'posts_count' => $user->posts()->count(),
            // 'comments_count' => $user->comments()->count(),
            // 'likes_count' => $user->likes()->count(),
            // 'posts' => $user->posts()->withCount('likes', 'comments')->latest()->limit(5)->get(),
            // 'comments' => $user->comments()->with('post.author')->latest()->limit(5)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(): View
    {
        $user = auth()->user();


        return view('user.settings.edit', [
            'user' => $user,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsersRequest $request): RedirectResponse
    {
        $user = auth()->user();

        $user->update($request->validated());

        return redirect()->route('users.edit')->withSuccess(__('Profile updated'));
    }
}
