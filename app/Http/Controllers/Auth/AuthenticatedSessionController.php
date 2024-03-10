<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Facades\Cookie;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {

        $posts_footer = Post::published()
            ->latest('published_at')
            ->featured()
            ->with('author', 'categories')->limit(2)->get();

        $data = [
            'title' => config('app.name') . ' - Sign in',
            'posts_footer' => $posts_footer,
        ];
        return view('auth.login', $data);
    }

    /**
     * Handle an incoming authentication request.
     * @throws ValidationException
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {   
        $cookie = Cookie::forget('access_token');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->withCookie($cookie);;
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback(Request $request)
    {

        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Log in the existing user.
            auth()->login($existingUser, true);
            return redirect(RouteServiceProvider::HOME);
        } else {

            $create = new User;
            $create->name = $user->name;
            $create->email = $user->email;
            $create->password = Hash::make('zikoAi556');
            $create->avatar = $user->avatar;
            $create->google_id = $user->google_id;
            $create->email_verified_at = Carbon::now();
            $create->role =  User::ROLE_DEFAULT;
            $create->save();


            event(new Registered($create));
            Auth::login($create, true);

            return redirect(RouteServiceProvider::HOME);

            // $data = [
            //     'name' => $user->name,
            //     'email' => $user->email,
            //     'google_id' => $user->google_id,
            //     'avatar' => $user->avatar,

            // ];
            // return to_route('google.signup', $data);
        }
    }

    public function signupGoogleCallBack(Request $request)
    {
        $data = [
            'title' => config('app.name') . ' - Sign up',
            'name' => $request->name,
            'email' => $request->email,
            'google_id' => $request->google_id,
            'avatar' => $request->avatar,

        ];

        return view('auth.passwords.google', $data);
    }

    public function completeGoogleCallBack(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $request->avatar,
            'google_id' => $request->id,

        ]);

        $user->assignRole('user');

        event(new Registered($user));

        $user->markEmailAsVerified();
        event(new Verified($user));

        Auth::login($user, true);

        return redirect(RouteServiceProvider::HOME);
    }
}
